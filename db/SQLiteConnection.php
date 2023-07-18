<?php
require_once "..\config.php";
require_once "..\logic\utils.php";

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

    public function validateUser($email, $password):bool{
        $sql = "SELECT password FROM users where email=?";
        $statement=$this->pdo->prepare($sql);
        $statement->execute([$email]);
        $row=$statement->fetch();
        return password_verify($password, $row["password"]);
    }

    public function createUser(object $userData){
        $this->connect();
        $sql = "INSERT INTO users (email, password, name, surname, age, phone, super) VALUES (?,?,?,?,?,?,?)";
        $this->pdo->beginTransaction();
        $this->pdo->prepare($sql)->execute([$userData->getEmail(), $userData->getPassword(),
            $userData->getName(), $userData->getSurname(), $userData->getAge(), $userData->getPhone(), $userData->getSuper()?1:0]);
        $this->pdo->commit();
        $this->disconnect();
    }

    public function readUser($email, $password){
        $this->connect();
        if($this->validateUser($email, $password)){
            $sql = "SELECT email, name, surname, age, phone, super FROM users where email=?";
            $statement=$this->pdo->prepare($sql);
            $statement->execute([$email]);
            $row=array_unique($statement->fetch());
            return $row;
        }
        $this->disconnect();
        echo ("<h1>Incorrect credentials</h1>");
    }

    public function updateUser(object $userData){
        $rpUser=Utils::reflectUser('email', 'name', 'surname', 'age', 'phone');

        $this->connect();

        foreach ($rpUser as $rp) {
            if($rp[0]->isInitialized($userData)){
                $getter=call_user_func(array($userData, "get".ucfirst($rp[1])));
                $sql = "UPDATE users SET $rp[1]=? where email=?";
                $this->pdo->beginTransaction();
                $this->pdo->prepare($sql)->execute([$getter, $_SESSION['email']]);
                $this->pdo->commit();
            }
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

    public function readAllUsers(){
        $this->connect();
        $sql = "SELECT email, name, surname, age, phone, super FROM users";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        $rows=($statement->fetchAll());
        $this->disconnect();
        $rowsParsed=array();
        foreach ($rows as $row) {
            array_push($rowsParsed, array_unique($row));
        }
        return $rowsParsed;
    }
}