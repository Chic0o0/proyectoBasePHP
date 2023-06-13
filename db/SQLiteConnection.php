<?php
namespace App;
require_once "..\config.php";

class SQLiteConnection {
    private $pdo;

    public function connect() {
        if ($this->pdo == null) {
            try{
                $this->pdo = new \PDO("sqlite:".Config::SQLITE_PATH);
            } catch (Exception $e){
                die('Error de conexión: ' .$e->getMessage());
            }
        }
        return $this->pdo;
    }

    public function createUser(object $userData){
        
    }
}