<?php
namespace App;
class Router{
    function router($url){
        switch ($url) {
            case '':
            case '/':
                require __DIR__ . '\..\public\index.php';
                break;
        
            case '/home':
                require __DIR__ . '\..\app\pages\home.php';
                break;
        
            default:
                http_response_code(404);
                require __DIR__ . '\..\app\pages\404.php';
                break;
        }
    }
}