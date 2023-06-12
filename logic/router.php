<?php
namespace App;
class Router{
    function router(){
        switch ($_SERVER['REQUEST_URI']) {
            case '':
            case '/':
                require __DIR__ . '\..\app\pages\home.php';
                break;
        
            case '/about':
                require __DIR__ . '\..\app\pages\about.php';
                break;
        
            default:
                http_response_code(404);
                require __DIR__ . '\..\app\pages\404.php';
                break;
        }
    }
}