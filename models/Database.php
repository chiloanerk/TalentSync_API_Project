<?php

namespace models;

use PDO;
use PDOException;

class Database
{

    private PDO $pdo;

    public function __construct()
    {
        try {
            $config = require_once 'config.php';
            $dsn = "mysql:host={$config['host']};dbname={$config['database']}";
            $this->pdo = new PDO($dsn, $config['username'], $config['password']);
            echo "Connection successful";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}