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

  /**
   * @param ContainerInterface $container
   * @param EntityManager $em
   */
  public function __construct(ContainerInterface $container, EntityManager $em) {

    $this->container = $container;
    $this->em = $em;
    $this->cmf = $em->getMetadataFactory();

    $this->valueObject = new \stdClass();

  }

  /**
   * @return \Doctrine\Common\Persistence\Mapping\ClassMetadata
   */
  public function getMetaForClass() {

     return $this->meta = $this->cmf->getMetadataFor($this->class);

  }

  /**
   * @param $entity
   * @return \Doctrine\Common\Persistence\Mapping\ClassMetadata
   */
  public function getMetaForEntity($entity) {

    $this->entity = $entity;
    $this->class = get_class($entity);

    $this->meta = $this->getMetaForClass();

    return $this->meta;

  }

  /**
   * @param $entity
   * @return \stdClass
   */
  public function getValueObject($entity) {

    $this->entity = $entity;
    $this->class = get_class($entity);

    $this->getMetaForClass();

    $this->getFieldMappings();
    $this->getAssociationMappings();

    return $this->valueObject;

  }

  /**
   * Build Field Mappings
   */
  public function getFieldMappings() {

    foreach($this->meta->fieldMappings as $key => $field) {

      $function = "get" . ucwords($key);
      $this->valueObject->$key = $this->entity->$function();

    }

  }

  /**
   * Build Association Mappings
   */
  public function getAssociationMappings() {

    foreach($this->meta->associationMappings as $key => $assocation) {

      $function = "get" . ucwords($key);
      $this->valueObject->$key = $this->entity->$function();

      // If collection convert to array
      if (preg_match("/Doctrine(.*)Collection/", get_class($this->valueObject->$key))) {
        $this->valueObject->$key = $this->valueObject->$key->toArray();
      }
      else {

        $name = $key;
        $entity = $this->valueObject->$key;
        $meta = $this->cmf->getMetadataFor(get_class($entity));
        $valueObject = new \stdClass();

        foreach($meta->fieldMappings as $key => $field) {

          $function = "get" . ucwords($key);
          $valueObject->$key = $entity->$function();

        }

        foreach($meta->associationMappings as $key => $field) {

          $function = "get" . ucwords($key);
          $valueObject->$key = $entity->$function();

        }

        $this->valueObject->$name = $valueObject;

      }

    }

  }

}