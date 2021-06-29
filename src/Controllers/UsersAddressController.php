<?php

namespace Src\Controllers;

use Src\Controllers\BaseController;
use Src\Models\UsersAddress;

class UsersAddressController extends BaseController
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
        $usersAddress = new UsersAddress($this->db);
        switch ($this->requestMethod) {
            case 'GET':
                if ($this->parameters['id']) {
                    $response["body"] = $usersAddress->find($this->parameters['id']);
                } else if (!$this->parameters['user_id']) {
                    if ($_GET['groupBy']) {
                        $response["body"] = $usersAddress->getUsersAddressGroup($_GET['groupBy']);
                    } else {
                        $response["body"] = $usersAddress->findAll();
                    }
                } else {
                    if ($_GET['groupBy']) {
                        $response["body"] = $usersAddress->getUsersAddressGroup($_GET['groupBy']);
                    } else {
                        $response["body"] = $usersAddress->getUsersAddress($this->parameters['id'], $this->parameters['user_id']);
                    }
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
