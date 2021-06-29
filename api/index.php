<?php
require "../start.php";


use Src\Controllers\UserController;
use Src\Controllers\StateController;
use Src\Controllers\CityController;
use Src\Controllers\UsersAddressController;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($uri[1]) {
  case 'users':
    if ($uri[2] == 'addresses' || $uri[3] == 'addresses') {
      if (is_numeric($uri[2])) {
        $parameters['user_id'] = (int)$uri[2];
      }
      if (is_numeric($uri[3])) {
        $parameters['id'] = (int)$uri[3];
      } else if (is_numeric($uri[4])) {
        $parameters['id'] = (int)$uri[4];
      }
      $controller = new UsersAddressController($dbConnection, $requestMethod, $parameters);
      $controller->processRequest();
    } else {
      $parameters['id'] = (int)$uri[2];
      $controller = new UserController($dbConnection, $requestMethod, $parameters);
      $controller->processRequest();
    }
    break;
  case 'states':
    $parameters['id'] = (int)$uri[2];
    $controller = new StateController($dbConnection, $requestMethod, $parameters);
    $controller->processRequest();
    break;
  case 'cities':
    $parameters['id'] = (int)$uri[2];
    $controller = new CityController($dbConnection, $requestMethod, $parameters);
    $controller->processRequest();
    break;
  default:
    header("HTTP/1.1 404 Not Found");
    exit();
    break;
}
