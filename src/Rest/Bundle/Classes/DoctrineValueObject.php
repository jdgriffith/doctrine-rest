<?php
/**
 * Created by PhpStorm.
 * User: justingriffith
 * Date: 4/23/14
 * Time: 9:06 PM
 */

namespace Rest\Bundle\Classes;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;

class DoctrineValueObject {

  private $container;
  private $em;
  private $cmf;
  private $entity;
  private $valueObject;
  private $class;
  private $meta;

  public function __construct(ContainerInterface $container, EntityManager $em)
  {
    $this->container = $container;
    $this->em = $em;
    $this->cmf = $em->getMetadataFactory();

    $this->valueObject = new \stdClass();

  }

  public function getMetaForClass() {

     return $this->meta = $this->cmf->getMetadataFor($this->class);

  }

  public function getMetaForEntity($entity) {

    $this->entity = $entity;
    $this->class = get_class($entity);

    $this->meta = $this->getMetaForClass();

    return $this->meta;

  }

  public function getValueObject($entity) {

    $this->entity = $entity;
    $this->class = get_class($entity);

    $this->getMetaForClass();

    foreach($this->meta->fieldMappings as $key => $field) {

      $function = "get" . ucwords($key);
      $this->valueObject->$key = $entity->$function();

    }

    return $this->valueObject;

  }


}