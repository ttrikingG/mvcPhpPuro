<?php

namespace app\models;

use app\models\Connection;

abstract class Model
{
    protected $connection;
    protected $table;

    public function __construct()
    {
        $this->connection = Connection::connect();
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $list = $this->connection->query($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function find($field, $value)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";
        $list = $this->connection->prepare($sql);
        $list->bindValue(1, $value);
        $list->execute();

        return $list->fetch();
    }

    public function insert($data)
    {
        $columns = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        $insert = $this->connection->prepare($sql);

        foreach ($data as $key => $value) {
            $insert->bindValue(":{$key}", $value);
        }

        return $insert->execute();
    }

    public function update($field, $value, $data)
    {
        $setClause = implode(" = ?, ", array_keys($data)) . " = ?";
        $sql = "UPDATE {$this->table} SET {$setClause} WHERE {$field} = ?";
        $update = $this->connection->prepare($sql);

        foreach ($data as $key => $value) {
            $update->bindValue(":{$key}", $value);
        }

        $update->bindValue(count($data) + 1, $value); 
    }

    public function delete($field, $value)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$field} = ?";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}
