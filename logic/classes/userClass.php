<?php
namespace App;

class User{
    private string $email;
    private string $password;
    private string $name;
    private string $surname;
    private int $age;
    private int $phone;

    // public function __construct($email, $password, $name, $surname, $age, $phone){
    //     $this->email=$email;
    //     $this->password=$password;
    //     $this->name=$name;
    //     $this->surname=$surname;
    //     $this->age=$age;
    //     $this->phone=$phone;
    // }

    // public function __call($name, $args){
    //     if($name=="__construct"){
    //         echo"PAPPAPAPAPDsuijpdas";
    //         if($args[0]=="name"){
    //             $this->name=$args[0];
    //             $this->surname=$args[1];
    //             $this->age=$args[2];
    //         } else {
    //             $this->email=$args[0];
    //             $this->password=$args[1];
    //             $this->name=$args[2];
    //             $this->surname=$args[3];
    //             $this->age=$args[4];
    //             $this->phone=$args[5];
    //         }
    //     }
    //     if($name=="a"){
    //         var_dump($args);
    //         echo "<h1>call overriding works</h1>";
    //     }
    // }

    public function __construct(...$args){
        $this->email=$args[0];
        $this->password=$args[1];
        $this->name=$args[2];
        $this->surname=$args[3];
        $this->age=$args[4];
        $this->phone=$args[5];
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
    
    public function setEmail(){
        $this->email=$email;
    }
    public function setPassword(){
        $this->password=password;
    }
    public function setName(){
        $this->name=name;
    }
    public function setSurname(){
        $this->surname=surname;
    }
    public function setAge(){
        $this->age;
    }
    public function setPhone(){
        $this->phone;
    }
}