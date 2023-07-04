<?php

class Cookies{
    //willDo first important cookies initialization (not used for now)

    public function setSesIDOptions(){
        setcookie(
            "SESSIONID",
            "",
            [
                'secure' => true,
                'httponly' => true,
                "SameSite"=>"Strict"
            ]
        );
    }
}