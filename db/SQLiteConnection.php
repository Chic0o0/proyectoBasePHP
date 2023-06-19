<?php
namespace App;
require_once "..\config.php";

class SQLiteConnection{
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

    public function disconnect(){
        unset($this->pdo);
    }

    public function createUser(object $userData){
        try{
            $this->connect();
            $sql = "INSERT INTO users (email, password, name, surname, age, phone) VALUES (?,?,?,?,?,?)";
            $this->pdo->beginTransaction();
            $this->pdo->prepare($sql)->execute([$userData->getEmail(), $userData->getPassword(),
                $userData->getName(), $userData->getSurname(), $userData->getAge(), $userData->getPhone()]);
            $this->pdo->commit();
            $this->disconnect();
        } catch(Exception $e){
            die('Error de conexión: ' .$e->getMessage());
        }
    }

    //willDo
    // public function readUser(object $userData){
    //     try{
    //         $this->connect();
    //         $sql = "SELECT (email, name, surname, age, phone) FROM users WHERE email=?";
    //         $this->pdo->beginTransaction();
    //         $this->pdo->prepare($sql)->execute([$userData->getEmail()]);
    //         return $this->pdo;
    //         $this->disconnect();
    //     } catch(Exception $e){
    //         die('Error de conexión: ' .$e->getMessage());
    //     }
    // }
}