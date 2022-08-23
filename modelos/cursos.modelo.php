<?php

require_once "conexion.php";
use PDO as PDO;

class ModeloCursos extends Database {
    

    public static function index(){
        
        $db = new Database();
        $stmt = $db->connect()->query("SELECT * FROM cursos");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $stmt->execute();
    }
} 