<?php
/**
 * Created by PhpStorm.
 * User: justingriffith
 * Date: 4/9/14
 * Time: 2:53 PM
 */

namespace Rest\Bundle\Classes;


interface ResourceInterface {

  public function get($resource, $id);

  public function put($resource, $id, $params = []);

  public function patch($resource, $id, $params = []);

  public function delete($resource, $id);

  public function post($resource, $params = []);

  public function exception(\Exception $e);

} 