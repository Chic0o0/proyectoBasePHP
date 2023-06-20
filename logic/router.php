<?php
namespace App;
class Router{
    public function router(){
        switch ($_SERVER['REQUEST_URI']) {
            case '':
            //Root page
            case '/':
                require_once __DIR__ . '\..\app\pages\home.php';
                break;

            //Handling content
            case '/about':
                require_once __DIR__ . '\..\app\pages\about.php';
                break;

            case '/signup':
                require_once __DIR__ . '\..\app\pages\signup.php';
                break;

            case '/login':
                require_once __DIR__ . '\..\app\pages\login.php';
                break;

            //Handling logic PUBLIC ROUTER SHOULD NOT BE USED TO ENROUTE LOGIC
            case '/signupLogic':
                require_once __DIR__ . '\..\logic\pages\signupLogic.php';
                break;

            case '/loginLogic?email=prueba1%40prueba.com&password=12341234&submit=Submit+me%21':
                require_once __DIR__ . '\..\logic\pages\loginLogic.php';
                break;
                
            //404 not fount page
            default:
                http_response_code(404);
                require_once __DIR__ . '\..\app\pages\404.php';
                break;
        }
    }
}