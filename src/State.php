<?php
namespace Src;

use Src\Controllers\BaseController;

class State extends BaseController{
  private $stateId;

  public function __construct($db, $requestMethod, $stateId)
  {
    $this->db = $db;
    $this->requestMethod = $requestMethod;
    $this->stateId = $stateId;
  }

  public function processRequest()
  {
    switch ($this->requestMethod) {
      case 'GET':
        if ($this->stateId) {
          $response = $this->getState($this->stateId);
        } else {
          $response = $this->getAllStates();
        };
        break;
      case 'POST':
        $response = $this->createState();
        break;
      case 'PUT':
        $response = $this->updateState($this->stateId);
        break;
      case 'DELETE':
        $response = $this->deleteState($this->stateId);
        break;
      default:
        $response = $this->notFoundResponse();
        break;
    }
    header($response['status_code_header']);
    if ($response['body']) {
        echo $response['body'];
    }
  }

  private function getAllStates()
  {
    $query = "
      SELECT
          *
      FROM
          states;
    ";

    try {
      $statement = $this->db->query($query);
      $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    } catch (\PDOException $e) {
      exit($e->getMessage());
    }

    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body'] = json_encode($result);
    return $response;
  }

  private function getState($id)
  {
    $result = $this->find($id);
    if (! $result) {
        return $this->notFoundResponse();
    }
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body'] = json_encode($result);
    return $response;
  }

  private function createState()
  {
    $input = $_GET;
    if (! $this->validateState($input)) {
      return $this->unprocessableEntityResponse();
    }

    $query = "
      INSERT INTO state
          (title, body, author, author_picture)
      VALUES
          (:title, :body, :author, :author_picture);
    ";

    try {
      $statement = $this->db->prepare($query);
      $statement->execute(array(
        'title' => $input['title'],
        'body'  => $input['body'],
        'author' => $input['author'],
        'author_picture' => 'https://secure.gravatar.com/avatar/'.md5(strtolower($input['author'])).'.png?s=200',
      ));
      $statement->rowCount();
    } catch (\PDOException $e) {
      exit($e->getMessage());
    }

    $response['status_code_header'] = 'HTTP/1.1 201 Created';
    $response['body'] = json_encode(array('message' => 'State Created'));
    return $response;
  }

  private function updateState($id)
  {
    $result = $this->find($id);
    if (! $result) {
      return $this->notFoundResponse();
    }
    $input = $_GET;
    if (! $this->validateState($input)) {
      return $this->unprocessableEntityResponse();
    }

    $statement = "
      UPDATE state
      SET
        title = :title,
        body  = :body,
        author = :author,
        author_picture = :author_picture
      WHERE id = :id;
    ";

    try {
      $statement = $this->db->prepare($statement);
      $statement->execute(array(
        'id' => (int) $id,
        'title' => $input['title'],
        'body'  => $input['body'],
        'author' => $input['author'],
        'author_picture' => 'https://secure.gravatar.com/avatar/'.md5($input['author']).'.png?s=200',
      ));
      $statement->rowCount();
    } catch (\PDOException $e) {
      exit($e->getMessage());
    }
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body'] = json_encode(array('message' => 'State Updated!'));
    return $response;
  }

  private function deleteState($id)
  {
    $result = $this->find($id);
    if (! $result) {
      return $this->notFoundResponse();
    }

    $query = "
      DELETE FROM state
      WHERE id = :id;
    ";

    try {
      $statement = $this->db->prepare($query);
      $statement->execute(array('id' => $id));
      $statement->rowCount();
    } catch (\PDOException $e) {
      exit($e->getMessage());
    }
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body'] = json_encode(array('message' => 'State Deleted!'));
    return $response;
  }



  private function validateState($input)
  {
    if (! isset($input['title'])) {
      return false;
    }
    if (! isset($input['body'])) {
      return false;
    }

    return true;
  }




}