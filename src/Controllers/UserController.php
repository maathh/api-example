<?php

namespace Src\Controllers;

use Src\Controllers\BaseController;
use Src\Models\User;

class UserController extends BaseController
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
        $user = new User($this->db);
        switch ($this->requestMethod) {
            case 'GET':
                
                if ($this->parameters['id']) {
                    $response["body"] = $user->find($this->parameters['id']);
                } else {
                    $response["body"] = $user->findAll();
                };
                
                $response['status_code_header'] = 'HTTP/1.1 200 OK';
                break;
            case 'POST':
                $input = $_GET;
                if($user->save($input)){
                    $response['status_code_header'] = 'HTTP/1.1 201 Created';
                    $response['body'] = json_encode(array('message' => 'Created!'));
                }else{
                    $response =  $this->unprocessableEntityResponse();
                }
                break;
            case 'PUT':
                $input = $_GET;
                if ($user->update($this->parameters['id'], $input)) {
                    $response['status_code_header'] = 'HTTP/1.1 200 OK';
                    $response['body'] = json_encode(array('message' => 'Updated!'));
                } else {
                    if (!$user->validate($input)) {
                        $response = $this->unprocessableEntityResponse();
                    } else {
                        $response = $this->notFoundResponse();
                    }
                }
                break;
            case 'DELETE':
                if ($user->delete($this->parameters['id'])) {
                    $response['status_code_header'] = 'HTTP/1.1 200 OK';
                    $response['body'] = json_encode(array('message' => 'Deleted!'));
                } else {
                    $response = $this->notFoundResponse();
                }
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
