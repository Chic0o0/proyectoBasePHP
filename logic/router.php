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

            case '/register':
                require_once __DIR__ . '\..\app\pages\register.php';
                break;

            //Handling logic PUBLIC ROUTER SHOULD NOT BE USED TO ENROUTE LOGIC
            case '/registerLogic':
                require_once __DIR__ . '\..\logic\pages\registerLogic.php';
                break;
                
            //404 not fount page
            default:
                http_response_code(404);
                require_once __DIR__ . '\..\app\pages\404.php';
                break;
        }
    }
}