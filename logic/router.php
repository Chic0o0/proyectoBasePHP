<?php
namespace App;
class Router{
    public function router(){
        switch ($_SERVER['REQUEST_URI']) {
            case '':
            case '/':
                require_once __DIR__ . '\..\app\pages\home.php';
                break;
        
            case '/about':
                require_once __DIR__ . '\..\app\pages\about.php';
                break;

            case '/register':
                require_once __DIR__ . '\..\app\pages\register.php';
                break;
        
            default:
                http_response_code(404);
                require_once __DIR__ . '\..\app\pages\404.php';
                break;
        }
    }
}