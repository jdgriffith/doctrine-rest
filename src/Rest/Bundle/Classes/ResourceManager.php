<?php

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

/**
 * Class ResourceManager
 *
 * @package Rest\Bundle\Classes
 */
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

	/**
	 * @return array
	 */
	private function _getAllMetaData() {

		$metadata = $this->cmf->getAllMetadata();

		return $this->_transformMetaData($metadata);

	}

	/**
	 * @param $metadata
	 *
	 * @return array
	 */
	private function _transformMetaData($metadata) {

		$resources = [];

		foreach ($metadata as $key => $resource) {

			$resources[strtolower($resource->name)] = $resource;

		}

		return $resources;
	}

	public function getResourceMetaData($resource) {

		return $this->em->getClassMetadata("Schema\\Bundle\\Entity\\" . $resource);

	}

	/**
	 * @param $resource
	 *
	 * @return bool
	 */
	private function _resourceExists($resource) {

		if (class_exists("Schema\\Bundle\\Entity\\" . $resource)) {
			return true;
		}

		return false;

	}

	/**
	 * @param        $resource
	 * @param string $limit
	 * @param string $offset
	 */
	public function collection($resource, $limit = '', $offset = '') {

		if (!empty($limit) AND !empty($offset)) {
			$entities = $this->_getRepository($resource)
				->findBy([], [], $limit, $offset);
		} else {
			$entities = $this->_getRepository($resource)
				->findAll();
		}

	}

	public function get($resource, $id) {

		return $this->em->find("Schema\\Bundle\\Entity\\" . $resource, $id);

	}

	/**
	 * @param       $resource
	 * @param array $params
	 *
	 * @return mixed
	 */
	public function create($resource, $params = []) {

		$entityClass = "Schema\\Bundle\\Entity\\" . $resource;

		$entity = new $entityClass();

		foreach ($params as $key => $value) {
			$entity->{$key} = $value;
		}

		$this->em->persist($entity);
		$this->em->flush();

		return $entity;

	}

	/**
	 * @param       $resource
	 * @param       $id
	 * @param array $params
	 *
	 * @return null|object
	 */
	public function update($resource, $id, $params = []) {

		$entity = $this->get($resource, $id);

		foreach ($params as $key => $value) {
			$entity->{$key} = $value;
		}

		$this->em->persist($entity);
		$this->em->flush();

		return $entity;

	}

	/**
	 * @param       $resource
	 * @param       $id
	 * @param array $options
	 */
	public function delete($resource, $id, $options = []) {

		$entity = $this->get($resource, $id);

		$this->em->remove($entity);
		$this->em->flush();

	}

	/**
	 * @param $entity
	 *
	 * @return \stdClass
	 */
	public function getValueObject($entity) {

		return $this->valueObject->getValueObject($entity);

	}

	/**
	 * @param $resource
	 *
	 * @return \Doctrine\ORM\EntityRepository
	 * @throws NotFoundHttpException
	 */
	private function _getRepository($resource) {

		$repository = $this->em->getRepository("SchemaBundle:$resource");

		return $this->em->getRepository("SchemaBundle:$resource");

	}

	/**
	 * @param        $entity
	 * @param string $format
	 *
	 * @return array|mixed
	 */
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