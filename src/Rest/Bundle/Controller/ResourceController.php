<?php

  namespace Rest\Bundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Component\HttpFoundation\JsonResponse;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;

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

  use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

  /**
   * Class DefaultController
   * @package Rest\Bundle\Controller
   *
   * @Route("/api")
   *
   */
  class ResourceController extends Controller
  {

    /**
     *
     * Get resources
     *
     * @Route("/{resource}", name="api_resource_collection")
     * @Method("GET")
     *
     * limit and offest for pagination
     *
     * include metadata with response for total number of records
     *
     * @param $resource
     * @return \Symfony\Component\HttpFoundation\Response|static
     */
    public function getCollectionAction(Request $request, $resource)
    {
      throw new NotFoundHttpException("Resource not found");

      $limit = $request->get("limit");
      $offset = $request->get("offset");
      $repo = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->getRepository("SchemaBundle:$resource");

      if (!empty($limit) AND !empty($offset)) {
        $entities = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->findBy([], [], $limit, $offset);
      }
      else {
        $entities = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->findAll();
      }

      return JsonResponse::create($this->serialize($entities));
    }


    /**
     *
     * Get a specific resource and data
     *
     * @Route("/{resource}/{id}", name="api_resource_get", requirements={"id"="\d+"}))
     * @Method("GET")
     *
     * @param $resource
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response|static
     */
    public function getAction($resource, $id)
    {

      $entity = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->find($id);

      $metaManager = $this->container->get("valueobject");
      $valueObject = $metaManager->getValueObject($entity);

      die(var_dump($valueObject));

      return new JsonResponse($this->serialize($entity));

    }

    /**
     *
     * Create a resource
     *
     * @Route("/{resource}", name="api_resource_create")
     * @Method("POST")
     *
     * @param $resource
     * @param $id
     */
    public function postAction(Request $request, $resource)
    {
      //$entity = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->find($id);

    }

    /**
     *
     * Update an existing resource
     *
     * @Route("/{resource}/{id}", name="api_resource_update", requirements={"id"="\d+"}))
     * @Method({"PUT", "PATCH"})
     *
     * @param $resource
     * @param $id
     *
     * @return JsonResponse
     */
    public function putAction(Request $request, $resource, $id)
    {
      $entity = $this->getDoctrine()->getRepository("SchemaBundle:$resource")->find($id);

    }

    /**
     *
     * Delete an existing resource
     *
     * @Route("/{resource}/{id}", name="api_resource_delete", requirements={"id"="\d+"}))
     * @Method("DELETE")
     *
     * @param $resource
     * @param $id
     *
     * @return JsonResponse
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

    public function getResourceMetaAction($resource) {

      $response = new \stdClass();
      $response->status = "OK";
    }

    public function filter($entity)
    {


      return $entity;
    }

    private function _serialize($entity, $format = 'json') {

      $serializer = $this->container->get('serializer');

      if (is_array($entity)) {
        $entities = $entity;
        foreach($entities as $key => $entity) {
          $entities[$key] = json_decode($serializer->serialize($entity, $format));
        }

        return $entities;
      }

      return json_decode($serializer->serialize($entity, $format));

    }

    private function _getRepository($resource) {

      $repo = $this->getDoctrine()->getRepository("SchemaBundle:$resource");

      if (!$repo) {

      }

    }
  }
