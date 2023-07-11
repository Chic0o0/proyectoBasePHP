<?php
class Utils{
    //Devuelve todas las páginas de la app excepto home, header, footer y 404, y algunas más si session no existe
    public static function allPages(){
        $pages = array_diff(scandir("..\app\pages"), array('.', '..', '404.php', 'home.php', 'head.php', 'header.php', 'footer.php'));
        if(isset($_SESSION)==0){
            $pages=array_diff($pages, array('settings.php', 'delete.php'));
        }
        return $pages;
    }

    //willDo function to create user instance dinamically; maybe use it for other purposes too
    // public static function setUpUserData($userData){
    //     $arr=array();
    //     foreach($userData as $key => $value){
    //         if($key=="password"){
    //             array_push($arr, [$key, password_hash(htmlspecialchars($value), PASSWORD_DEFAULT)]);
    //         } elseif($key=="submit"){
    //             // do nothing(default form key)
    //         } 
    //         else {
    //             array_push($arr, [$key, htmlspecialchars($value)]);
    //         }
    //     }
    //     return $arr;
    // }
}