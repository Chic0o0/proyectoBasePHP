<?php
class Utils{
    //Devuelve todas las páginas de la app excepto home, header, footer y 404
    public static function allPages(){
        return array_diff(scandir("..\app\pages"), array('.', '..', '404.php', 'home.php', 'header.php', 'footer.php'));
    }

    //First important cookies initialization; for now shows cookies
    public function setDefaultCookies(){
        var_dump($_COOKIE);
    }
}