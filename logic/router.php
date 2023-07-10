<?php
require_once "..\config.php";
require_once "..\logic\utils.php";

function router(){
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

router();