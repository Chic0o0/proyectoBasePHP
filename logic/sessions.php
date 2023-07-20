<?php
require_once "..\logic\utils.php";

class Session{
    public function setUserSession($user){
        session_start();
        $_SESSION["email"]=$user->getEmail();
        $_SESSION["name"]=$user->getName();
        $_SESSION["surname"]=$user->getSurname();
        $_SESSION["age"]=$user->getAge();
        $_SESSION["phone"]=$user->getPhone();
        $_SESSION["super"]=$user->getSuper();
    }

    public function breakUserSession(){
        setcookie('SESSIONID', '', time() - 86400, '/');
        session_destroy();
        session_write_close();
    }

    public function reinitializeUserSession($user){
        $rpUser=Utils::reflectUser('email', 'name', 'surname', 'age', 'phone');

        foreach ($rpUser as $rp) {
            if($rp[0]->isInitialized($user)){
                $getter=call_user_func(array($user, "get".ucfirst($rp[1])));
                $_SESSION[$rp[1]]=$getter;
            }
        }
    }

    public function saveEmail(){

    }
}