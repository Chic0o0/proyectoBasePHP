<?php
require_once "..\config.php";

class Router{

    //willDo function to manage url params or dynamic router with conditionals and regex

    //Just check $_SERVER['REQUEST_URI'] and return this: require_once Config::PAGES . $regex_match .'.php',
    //where $regex_match is the part of the url which matches with the file we try to go to

    //Problem with regex: need to get a list of the pages, or other way of telling if page exists
    public function router(){
        $url=$_SERVER['REQUEST_URI'];
        $pages='/^[A-Za-z]+$/';

        echo $url;
        if ($url=="/"){
            require_once Config::PAGES . 'home.php';
        } elseif (preg_match($pages, $url)) {
            echo "entra";
            require_once Config::PAGES . str_replace("/", "", $url) . '.php';
        } else {
            http_response_code(404);
            require_once Config::PAGES . '404.php';
        }
    }
    // public function router(){
    //     switch ($_SERVER['REQUEST_URI']) {
    //         case '':
    //         //Root page
    //         case '/':
    //             require_once Config::PAGES . 'home.php';
    //             break;

    //         //Handling content
    //         case '/about':
    //             require_once Config::PAGES . 'about.php';
    //             break;

    //         case '/signup':
    //             require_once Config::PAGES . 'signup.php';
    //             break;

    //         case '/login':
    //             require_once Config::PAGES . 'login.php';
    //             break;

    //         //Handling logic PUBLIC ROUTER SHOULD NOT BE USED TO ENROUTE LOGIC
    //         // case '/signupLogic':
    //         //     require_once __DIR__ . '\..\logic\pages\signupLogic.php';
    //         //     break;

    //         // case '/loginLogic?email=prueba1%40prueba.com&password=11111111&submit=Submit+me%21':
    //         //     require_once __DIR__ . '\..\logic\pages\loginLogic.php';
    //         //     break;
                
    //         //404 not fount page
    //         default:
    //             http_response_code(404);
    //             require_once Config::PAGES . '404.php';
    //             break;
    //     }
    // }
}