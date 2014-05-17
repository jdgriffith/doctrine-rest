<?php

  /**
   * Created by PhpStorm.
   * User: justingriffith
   * Date: 4/9/14
   * Time: 3:01 PM
   */

  namespace Rest\Bundle\Classes;

  use Doctrine\ORM\Mapping\ClassMetadata;
  use Doctrine\ORM\Mapping\Driver\DatabaseDriver;
  use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
  use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
  use Doctrine\ORM\Tools\Console\MetadataFilter;
  use Symfony\Component\Config\Definition\Exception\Exception;
  use Symfony\Component\Debug\Exception\ClassNotFoundException;
  use Symfony\Component\DependencyInjection\ContainerAware;
  use Symfony\Component\DependencyInjection\ContainerInterface;

  use JMS\Serializer\Serializer;
  use Doctrine\ORM\EntityManager;
  use Rest\Bundle\Classes\DoctrineValueObject;

  class ResourceManager extends ContainerAware {

    private $meta = [];
    private $em;
    private $cmf;
    private $serializer;
    private $valueObject;

    public function __construct(ContainerInterface $container, EntityManager $em, Serializer $serializer,
                                DoctrineValueObject $valueObject) {

      $this->container = $container;
      $this->em = $em;
      $this->cmf = $em->getMetadataFactory();
      $this->serializer = $serializer;
      $this->valueObject = $valueObject;

    }

    private function _getAllMetaData() {

      $metadata = $this->cmf->getAllMetadata();

      return $this->_transformMetaData($metadata);

    }

    private function _transformMetaData($metadata) {

      $resources = [];

      foreach ($metadata as $key => $resource) {

        $resources[$resource->name] = $resource;

      }

      return $resources;
    }

    public function getResourceMetaData($resource) {

      return $this->em->getClassMetadata("Schema\\Bundle\\Entity\\" . $resource);

    }

    private function _resourceExists($resource) {

      if (class_exists("Schema\\Bundle\\Entity\\" . $resource)) {
        return true;
      }

      return false;

    }

    public function collection($resource, $limit = '', $offset = '') {

      if (!empty($limit) AND !empty($offset)) {
        $entities = $this->_getRepository($resource)->findBy([], [], $limit, $offset);
      } else {
        $entities = $this->_getRepository($resource)->findAll();
      }

    }

    public function get($resource, $id) {

      return $this->em->find("Schema\\Bundle\\Entity\\" . $resource, $id);

    }

    public function create($resource, $params = []) {

    }

    public function update($resource, $id, $params = []) {

    }

    public function delete($resource, $id, $options = []) {

      $entity = $this->get($resource, $id);

      $this->em->remove($entity);
      $this->em->flush();

    }

    public function getValueObject($entity) {

     return $this->valueObject->getValueObject($entity);

    }

    /**
     * @param $resource
     * @return \Doctrine\ORM\EntityRepository
     * @throws NotFoundHttpException
     */
    private function _getRepository($resource) {

      if (!$this->_resourceExists($resource)) {
        //throw new NotFoundHttpException("Resource not found");
      }

      return $this->em->getRepository("SchemaBundle:$resource");

    }

    public function serialize($entity, $format = 'json') {

      // compensate for nested objects
      if (is_array($entity)) {
        $entities = $entity;
        foreach ($entities as $key => $entity) {
          $entities[$key] = json_decode($this->serializer->serialize($entity, $format));
        }

        return $entities;
      }

      return json_decode($this->serializer->serialize($entity, $format));
    }

  }