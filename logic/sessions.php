<?php
class Session{
    public function setUserSession($user){
        session_id($_COOKIE["SESSIONID"]);
        session_start();
        $_SESSION["name"]=$user->getName();
        $_SESSION["surname"]=$user->getSurname();
        $_SESSION["age"]=$user->getAge();
    }
}