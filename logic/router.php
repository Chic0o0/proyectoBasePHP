<?php
require_once "..\config.php";
require_once "..\logic\utils.php";

class Router{
    public function router(){
        $url=$_SERVER['REQUEST_URI'];
        $urlParsed=strtok(str_replace("/", "", $url), '?') .'.php';
        $pagesList=Utils::allPages();

        if ($url=="/"){
            require_once Config::PAGES . 'home.php';
        } elseif (in_array($urlParsed, $pagesList)){
            require_once Config::PAGES . $urlParsed;
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