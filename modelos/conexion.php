<?php

use PDO  as PDO;
use PDOException as PDOException;
class Database {
    private string $host;
    private string $db;
    private string $user;
    private string $password;
    private string $charset;

    public function __construct() {
        $this->host = 'localhost';
        $this->db = 'apirest';
        $this->user = 'root';
        $this->password = 'eroman';
        $this->charset = 'utf8mb4';
    }


    public function connect() 
    {
        try {
            $connection = "mysql::host={$this->host};dbname={$this->db};charset={$this->charset}";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                pdo::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;
        } catch(PDOException $th) {
            throw $th;
        }
    }


}