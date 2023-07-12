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

    public static function delNullArray($arr){
        foreach($arr as $key=>$val){
            if(empty($val)){
                unset($arr[$key]);
            }
        }
        return $arr;
    }

    //willDo function to create user instance dinamically; maybe use it for other purposes too
    public static function setUpUser($arr){
        
    }
}