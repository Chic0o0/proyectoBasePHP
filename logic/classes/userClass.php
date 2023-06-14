<?php
class User{
    private string $name;
    private string $surname;
    private string $age;
    private string $email;
    private string $phone;

    public function __construct($name, $surname, $age, $email, $phone){
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->email=$email;
        $this->phone=$phone;
    }
}