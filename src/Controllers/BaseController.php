<?php
namespace Src\Controllers;

abstract class BaseController {

    protected $db;
    protected $requestMethod;

    public function __construct($db, $requestMethod)
  {
    $this->db = $db;
    $this->requestMethod = $requestMethod;
  }

  protected function unprocessableEntityResponse()
  {
    $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';
    $response['body'] = json_encode([
      'error' => 'Invalid input'
    ]);
    return $response;
  }

  protected function notFoundResponse()
  {
    $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
    $response['body'] = null;
    return $response;
  }
}