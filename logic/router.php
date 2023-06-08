<?php

class router{
    function router($url){
        switch ($url) {
    
            case '':
            case '/':
                require __DIR__ . 'public/index.php';
                break;
        
            case '/a':
                require __DIR__ . 'app/views/a.php';
                break;
        
            case '/b':
                require __DIR__ . 'app/views/b.php';
                break;
        
            default:
                http_response_code(404);
                require __DIR__ . 'app/views/404.php';
                break;
        }
    }
}

