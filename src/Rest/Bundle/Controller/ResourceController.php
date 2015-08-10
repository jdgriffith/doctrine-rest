<?php

namespace Rest\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Rest\Bundle\Classes\ResourceManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class DefaultController
 *
 * @package Rest\Bundle\Controller
 *
 * @Route("/api")
 *
 */
class ResourceController extends Controller {

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
	 *
	 * @return \Symfony\Component\HttpFoundation\Response|static
	 */
	public function getCollectionAction(Request $request, $resource) {

		$limit = $request->get("limit");
		$offset = $request->get("offset");

		$collection = $this->_getResourceManager()
			->collection($resource, $limit, $offset);

		return JsonResponse::create($this->_getResourceManager()
			->serialize($collection));
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
	 *
	 * @return \Symfony\Component\HttpFoundation\Response|static
	 */
	public function getAction($resource, $id) {

		$entity = $this->_getResourceManager()
			->get($resource, $id);

		return new JsonResponse($this->_getResourceManager()
			->serialize($entity));

	}

	/**
	 *
	 * Create a resource
	 *
	 * @Route("/{resource}", name="api_resource_create")
	 * @Method("POST")
	 *
	 * @param Request $request
	 * @param         $resource
	 *
	 * @internal param $id
	 *
	 * @return JsonResponse
	 */
	public function postAction(Request $request, $resource) {

		// Gather entity attributes and values
		$params = $request->request->all();

		$entity = $this->_getResourceManager()
			->create($resource, $params);

		return new JsonResponse($this->_getResourceManager()
			->serialize($entity));

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
	public function putAction(Request $request, $resource, $id) {

		// Gather entity attributes and values
		$params = $request->request->all();

		$entity = $this->_getResourceManager()
			->update($resource, $id, $params);

		return new JsonResponse($this->_getResourceManager()
			->serialize($entity));

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
	public function deleteAction($resource, $id) {

		$this->_getResourceManager()
			->delete($resource, $id);

		return new JsonResponse("$resource:$id has been deleted");
	}

	/**
	 * @param $entity
	 *
	 * @return mixed
	 */
	public function filter($entity) {

		return $entity;
	}

	/**
	 * @return object
	 */
	private function _getResourceManager() {

		return $this->container->get("resource");
	}
}
