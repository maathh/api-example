<?php

namespace Src\Models;

use Src\Models\BaseModel;

class UsersAddress extends BaseModel
{
    protected $table = "users_addresses";
    protected $fillable = ['user_id', 'city_id', 'street', 'district', 'complement', 'post_code', 'number'];

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUsersAddress__($id, $user_id)
    {
        $query = "
      SELECT
          *
      FROM
        $this->table
      where 0=0
    ";
        $replace =[];
        if ($id) {
            $query .= " and id = :id";
            $replace["id"]=$id;
        }
        if ($user_id) {
            $query .= " and user_id = :user_id";
            $replace["user_id"]=$user_id;
        }
        try {
            $statement = $this->db->query($query);
            $statement->execute($replace);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getUsersAddress($id, $user_id)
    {
        $query = "
      SELECT
          *
      FROM
        $this->table
      WHERE 0=0
    ";
    if ($id) {
        $query .= " and id = :id";
        $replace["id"]=$id;
    }
    if ($user_id) {
        $query .= " and user_id = :user_id";
        $replace["user_id"]=$user_id;
    }
    $query.= ";";
        try {
            $statement = $this->db->prepare($query);
            $statement->execute($replace);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getUsersAddressGroup($groupBy)
    {

        $query = "
      SELECT
        count(DISTINCT user_id) as user_count, ".$groupBy."
      FROM
        $this->table
        inner join cities on users_addresses.city_id = cities.id
        inner join states on cities.state_id = states.id
        group by ".$groupBy.";";
        try {
            $statement = $this->db->prepare($query);
            $statement->execute(array("groupBy"=>$groupBy ));
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
