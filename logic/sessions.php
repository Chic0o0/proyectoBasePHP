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
        setcookie('SESSIONID', '', time() - 86400, '/');
        session_destroy();
        session_write_close();
    }

    public function reinitializeUserSession($user){
        $rpEmail= new ReflectionProperty('User', 'email');
        $rpName = new ReflectionProperty('User', 'name');
        $rpSurname = new ReflectionProperty('User', 'surname');
        $rpAge = new ReflectionProperty('User', 'age');
        $rpPhone = new ReflectionProperty('User', 'phone');

        if($rpEmail->isInitialized($user)){
            $_SESSION["email"]=$user->getEmail();
        }
        if($rpName->isInitialized($user)){
            $_SESSION["name"]=$user->getName();
        }
        if($rpSurname->isInitialized($user)){
            $_SESSION["surname"]=$user->getSurname();
        }
        if($rpAge->isInitialized($user)){
            $_SESSION["age"]=$user->getAge();
        }
        if($rpPhone->isInitialized($user)){
            $_SESSION["phone"]=$user->getPhone();
        }

    }
}