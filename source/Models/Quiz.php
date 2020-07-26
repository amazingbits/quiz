<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;

class Quiz extends Model
{
    public function find($table, array $data = null, $params = null, $columns = "*")
    {
        $query = "SELECT {$columns} FROM {$table} {$params}";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }

    public function executeByQuery($query, array $data = null)
    {
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }
}