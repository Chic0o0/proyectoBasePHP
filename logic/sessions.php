<?php
class Session{
    public function setUserSession($user){
        session_id($_COOKIE["SESSIONID"]);
        session_start();
        $_SESSION["email"]=$user->getEmail();
        $_SESSION["name"]=$user->getName();
        $_SESSION["surname"]=$user->getSurname();
        $_SESSION["age"]=$user->getAge();
        $_SESSION["phone"]=$user->getPhone();
    }

    public function breakUserSession(){
        session_start();
        setcookie('SESSIONID', '', time() - 86400, '/');
        session_destroy();
        session_write_close();
    }
}