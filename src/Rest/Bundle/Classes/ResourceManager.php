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

class ResourceManager extends ContainerAware {

  public function __construct(ContainerInterface $container = null) {
    $this->container = $container;
  }
  private function getMetaData() {

    $em = $this->getContainer()->get('doctrine')->getManager();

    $databaseDriver = new DatabaseDriver($em->getConnection()->getSchemaManager());
    $em->getConfiguration()->setMetadataDriverImpl($databaseDriver);

    $cmf = new DisconnectedClassMetadataFactory();
    $cmf->setEntityManager($em);
    $metadata = $cmf->getAllMetadata();

    return $metadata;

  }

  private function transformMetaData($metadata)
  {
    $resources = [];

    foreach ($metadata as $key => $resource) {

      $resources[$resource->name] = $resource;

    }

    return $resources;
  }

  private function getResourceMetaData($resource)
  {

    $metadata = $this->getMetaData($this->getDoctrine()->getManager());

    return $metadata[$resource];

  }

  public function get($resource, $id) {

  }

  public function create($resource, $params = []) {

  }

  public function update($resource, $id, $params = []){

  }

  public function delete($resource, $id, $options = []) {

  }

} 