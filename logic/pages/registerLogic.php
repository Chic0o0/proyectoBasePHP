<?php
namespace App;
require_once "..\userClass";

class registerLogic extends userClass{
    public function __construct($email, $password, $name, $surname, $age, $phone) {
        parent::__construct($email, $password, $name, $surname, $age, $phone);
    }
}

$registerUser=new registerLogic(
    htmlspecialchars($_POST["email"]),
    htmlspecialchars($_POST["password"]),
    htmlspecialchars($_POST["name"]),
    htmlspecialchars($_POST["surname"]),
    htmlspecialchars($_POST["age"]),
    htmlspecialchars($_POST["phone"]),
);

echo $registerUser;