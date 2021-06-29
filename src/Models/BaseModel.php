<?php

namespace Src\Models;

abstract class BaseModel
{
    protected $table;
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function find(int $id)
    {
        $query = "
      SELECT
          *
      FROM
        $this->table
      WHERE id = :id;
    ";

        try {
            $statement = $this->db->prepare($query);
            $statement->execute(array('id' => $id));
            $result = $statement->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function findAll()
    {
        $query = "
      SELECT
          *
      FROM
        $this->table
      ;
    ";

        try {
            $statement = $this->db->query($query);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function save($input)
    {
        if (!$this->validate($input)) {
            return false;
        }
        $query = "
        INSERT INTO $this->table
            (" . implode(", ", $this->fillable) . ")
        VALUES
            (:" . implode(", :", $this->fillable) . ");
      ";


        $arrColumn = [];
        foreach ($this->fillable as $column) {
            $arrColumn[$column] = $input[$column];
        }

        try {
            $statement = $this->db->prepare($query);
            $statement->execute($arrColumn);
            $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }


        return true;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if (!$result) {
            return false;
        }

        $query = "
        DELETE FROM $this->table
        WHERE id = :id;
      ";

        try {
            $statement = $this->db->prepare($query);
            $statement->execute(array('id' => $id));
            $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
        return true;
    }

    public function update(int $id, array $input)
    {
        $result = $this->find($id);
        if (!$result) {
            return false;
        }

        $arrColumns = [];
        foreach ($this->fillable as $column) {
            $arrColumns[] = "$column = :$column";
        }

        $statement = "
          UPDATE state
          SET
            " . implode(", ", $arrColumns) . "
          WHERE id = :id;
        ";

        
        $arrColumns = ["id" => $id];
        foreach ($this->fillable as $column) {
            $arrColumns[$column] = $input[$column];
        }
        try {
            $statement = $this->db->prepare($statement);
            $statement->execute($arrColumns);
            $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }

        return true;
    }

    public function validate($input)
    {
        foreach ($this->fillable as $column) {
            if (!isset($input[$column])) {
                return false;
            }
        }
        return true;
    }
}
