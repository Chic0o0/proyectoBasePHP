<?php

require_once "..\config.php";

class SQLiteConnection{
    private $pdo;
    
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:".Config::SQLITE_PATH);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    public function disconnect(){
        unset($this->pdo);
    }

    public function validateUser($email, $password){
        $sql = "SELECT password FROM users where email=?";
        $statement=$this->pdo->prepare($sql);
        $statement->execute([$email]);
        $row=$statement->fetch();
        return password_verify($password, $row["password"]);
    }

    public function createUser(object $userData){
        // $email=$userData->getEmail(); ...
        // $dbsent->bindParam('1', $email, \PDO::PARAM_STR); ...
        // $dbsent->execute();

        $this->connect();
        $sql = "INSERT INTO users (email, password, name, surname, age, phone) VALUES (?,?,?,?,?,?)";
        $this->pdo->beginTransaction();
        $this->pdo->prepare($sql)->execute([$userData->getEmail(), $userData->getPassword(),
            $userData->getName(), $userData->getSurname(), $userData->getAge(), $userData->getPhone()]);
        $this->pdo->commit();
        $this->disconnect();
    }

    public function readUser($email, $password){
        $this->connect();
        if($this->validateUser($email, $password)){
            $sql = "SELECT email, name, surname, age, phone FROM users where email=?";
            $statement=$this->pdo->prepare($sql);
            $statement->execute([$email]);
            $row=array_unique($statement->fetch());
            $this->disconnect();
            return $row;
        }
        echo ("<h1>Incorrect credentials</h1>");
    }

    //willDo update and delete funcs to interact with db
    public function updateUser(object $userData){
        // $this->connect();
        // //wilDo append to string initialized attributes in userData
        // $sql = "UPDATE users SET attrb1=?, attrib2=?... where email=?";
        // $this->pdo->beginTransaction();
        // $this->pdo->prepare($sql)->execute([...$userData->getters(), $_SESSION['email']]);
        // $this->pdo->commit();
        // $this->disconnect();
    }
    public function deleteUser(){
        $this->connect();
        $sql = "DELETE FROM users WHERE email=?";
        $this->pdo->beginTransaction();
        $this->pdo->prepare($sql)->execute([$_SESSION['email']]);
        $this->pdo->commit();
        $this->disconnect();
    }
}