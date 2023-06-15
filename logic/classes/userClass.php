<?php
namespace App;

class User{
    private string $email;
    private string $password;
    private string $name;
    private string $surname;
    private string $age;
    private string $phone;

    public function __construct($email, $password, $name, $surname, $age, $phone){
        $this->email=$email;
        $this->password=$password;
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->phone=$phone;
    }
}