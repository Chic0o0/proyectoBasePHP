<?php
namespace App;

class User{
    private string $email;
    private string $password;
    private string $name;
    private string $surname;
    private int $age;
    private int $phone;

    public function __construct($email, $password, $name, $surname, $age, $phone){
        $this->email=$email;
        $this->password=$password;
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->phone=$phone;
    }

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getAge(){
        return $this->age;
    }
    public function getPhone(){
        return $this->phone;
    }
}