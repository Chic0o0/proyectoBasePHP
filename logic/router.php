<?php

class Router{

    //willDo function to manage url params or dynamic router with conditionals and regex
    // public function router(){
    //     $pages="^[A-Za-z]+$";
    //     $logic="^[A-Za-z]+Logic$";

    //     if ($_SERVER['REQUEST_URI']=="/"){
    //         require_once __DIR__ . '\..\app\pages\home.php';
    //     } elseif ($_SERVER['REQUEST_URI']==$pages) {
    //         require_once __DIR__ . "\..\app\pages\\$pages.php";
    //     } elseif($_SERVER['REQUEST_URI']==$logic){
    //         require_once __DIR__ . "\..\app\pages\\$logic.php";
    //     } else {
    //         http_response_code(404);
    //         require_once __DIR__ . '\..\app\pages\404.php';
    //     }
    //}
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
            // case '/signupLogic':
            //     require_once __DIR__ . '\..\logic\pages\signupLogic.php';
            //     break;

            // case '/loginLogic?email=prueba1%40prueba.com&password=11111111&submit=Submit+me%21':
            //     require_once __DIR__ . '\..\logic\pages\loginLogic.php';
            //     break;
                
            //404 not fount page
            default:
                http_response_code(404);
                require_once __DIR__ . '\..\app\pages\404.php';
                break;
        }
    }
}