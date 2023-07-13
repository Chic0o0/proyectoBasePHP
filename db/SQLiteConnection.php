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

    public function updateUser(object $userData){
        $rpEmail= new ReflectionProperty('User', 'email');
        $rpName = new ReflectionProperty('User', 'name');
        $rpSurname = new ReflectionProperty('User', 'surname');
        $rpAge = new ReflectionProperty('User', 'age');
        $rpPhone = new ReflectionProperty('User', 'phone');

        $this->connect();

        if($rpEmail->isInitialized($userData)){
            $sql = "UPDATE users SET email=? where email=?";
            $this->pdo->beginTransaction();
            $this->pdo->prepare($sql)->execute([$userData->getEmail(), $_SESSION['email']]);
            $this->pdo->commit();
        }

        if($rpName->isInitialized($userData)){
            $sql = "UPDATE users SET name=? where email=?";
            $this->pdo->beginTransaction();
            $this->pdo->prepare($sql)->execute([$userData->getName(), $_SESSION['email']]);
            $this->pdo->commit();        
        }

        if($rpSurname->isInitialized($userData)){
            $sql = "UPDATE users SET surname=? where email=?";
            $this->pdo->beginTransaction();
            $this->pdo->prepare($sql)->execute([$userData->getSurname(), $_SESSION['email']]);
            $this->pdo->commit();        
        }

        if($rpAge->isInitialized($userData)){
            $sql = "UPDATE users SET age=? where email=?";
            $this->pdo->beginTransaction();
            $this->pdo->prepare($sql)->execute([$userData->getAge(), $_SESSION['email']]);
            $this->pdo->commit();
        }

        if($rpPhone->isInitialized($userData)){
            $sql = "UPDATE users SET phone=? where email=?";
            $this->pdo->beginTransaction();
            $this->pdo->prepare($sql)->execute([$userData->getPhone(), $_SESSION['email']]);
            $this->pdo->commit();      
        }
       
        $this->disconnect();
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