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
  use Symfony\Component\DependencyInjection\ContainerAware;
  use Symfony\Component\DependencyInjection\ContainerInterface;

  class ResourceManager extends ContainerAware {

    private $meta = [];
    private $em;

    public function __construct(ContainerInterface $container) {

      $this->container = $container;

      $this->em = $this->container->get("doctrine")->getManager();

    }

    private function _getMetaData() {

      $em = $this->container->get('doctrine')->getManager();

      $databaseDriver = new DatabaseDriver($em->getConnection()->getSchemaManager());

      $em->getConfiguration()->setMetadataDriverImpl($databaseDriver);
      $cmf = new DisconnectedClassMetadataFactory();
      $cmf->setEntityManager($em);
      $metadata = $cmf->getAllMetadata();

      return $this->transformMetaData($metadata);

    }

    private function transformMetaData($metadata) {
      $resources = [];

      foreach ($metadata as $key => $resource) {

        $resources[$resource->name] = $resource;

      }

      return $resources;
    }

    public function getResourceMetaData($resource) {
      $cmf = $this->em->getMetadataFactory();
      $class = $cmf->getMetadataFor("Schema\\Bundle\\Entity\\" . $resource);

      return $class;

      $metadata = $this->getMetaData($this->container->get("doctrine")->getManager());

      return $metadata[$resource];

    }

    public function get($resource, $id) {

    }

    public function create($resource, $params = []) {

    }

    public function update($resource, $id, $params = []) {

    }

    public function delete($resource, $id, $options = []) {

    }

  }