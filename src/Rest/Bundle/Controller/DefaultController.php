<?php

  namespace Rest\Bundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Component\HttpFoundation\JsonResponse;
  use Symfony\Component\HttpFoundation\Response;

  use Doctrine\ORM\Mapping\ClassMetadata;
  use Doctrine\ORM\Mapping\Driver\DatabaseDriver;
  use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
  use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
  use Doctrine\ORM\Tools\Console\MetadataFilter;

  use Symfony\Component\Serializer\Serializer;
  use Symfony\Component\Serializer\Encoder\XmlEncoder;
  use Symfony\Component\Serializer\Encoder\JsonEncoder;
  use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

  use Rest\Bundle\Classes\ResourceManager;

  /**
   * Class DefaultController
   * @package Rest\Bundle\Controller
   *
   * @Route("/api")
   *
   */
  class DefaultController extends Controller
  {

    /**
     * Get resources
     *
     * @Route("/{resource}")
     * @Method("GET")
     *
     * limit and offest for pagination
     *
     * include metadata with response for total number of records
     *
     * @param $resource
     * @return \Symfony\Component\HttpFoundation\Response|static
     */
    public function getCollectionAction($resource)
    {

      $entity = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->findAll();


      return JsonResponse::create($entity);

    }


    /**
     * Get a specific resource and data
     *
     * @Route("/{resource}/{id}", requirements={"id"="\d+"}))
     * @Method("GET")
     *
     * @param $resource
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response|static
     */
    public function getAction($resource, $id)
    {

      $entity = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->find($id);

      return new JsonResponse($this->serialize($entity));

    }

    /**
     * Create a resource
     *
     * @Route("/{resource}")
     * @Method("POST")
     *
     * @param $resource
     * @param $id
     */
    public function postAction($resource)
    {
      //$entity = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->find($id);

    }

    /**
     * Update an existing resource
     *
     * @Route("/{resource}/{id}", requirements={"id"="\d+"}))
     * @Method({"PUT", "PATCH"})
     *
     * @param $resource
     * @param $id
     */
    public function putAction($resource, $id)
    {
      $entity = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->find($id);

    }

    /**
     * Delete an existing resource
     *
     * @Route("/{resource}/{id}", requirements={"id"="\d+"}))
     * @Method("DELETE")
     *
     * @param $resource
     * @param $id
     */
    public function deleteAction($resource, $id)
    {
      $em = $this->getDoctrine()->getManager();
      $entity = $em->getRepository("SchemaBundle:$resource")->find($id);
      $em->remove($entity);
      $em->flush();

      $response = new \stdClass();
      $response->status = "Ok";
      $response->message = "Entity was deleted.";

      return new JsonResponse($response);
    }

    public function filter($entity)
    {

      $exclusion = $this->container->getParameter("");

      return $entity;
    }



    private function serialize($entity, $format = 'json') {

      $serializer = $this->container->get('serializer');

      return json_decode($serializer->serialize($entity, $format));

    }
  }
