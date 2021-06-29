<?php

namespace Src\Controllers;

use Src\Controllers\BaseController;
use Src\Models\State;

class StateController extends BaseController
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
        $state = new State($this->db);
        switch ($this->requestMethod) {
            case 'GET':
                if ($this->parameters['id']) {
                    $response["body"] = $state->find($this->parameters['id']);
                } else {
                    $response["body"] = $state->findAll();
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
