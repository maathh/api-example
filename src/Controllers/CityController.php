<?php

namespace Src\Controllers;

use Src\Controllers\BaseController;
use Src\Models\City;

class CityController extends BaseController
{

    private $parameters;

    public function __construct($db, $requestMethod, $parameters)
    {
        $this->db = $db;
        $this->requestMethod = $requestMethod;
        $this->parameters = $parameters;
    }

    public function processRequest()
    {
        $city = new City($this->db);
        switch ($this->requestMethod) {
            case 'GET':
                if ($this->parameters['id']) {
                    $response["body"] = $city->find($this->parameters['id']);
                } else {
                    $response["body"] = $city->findAll();
                };
                $response['status_code_header'] = 'HTTP/1.1 200 OK';
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }

        $response['body'] = json_encode($response["body"]);

        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }
}
