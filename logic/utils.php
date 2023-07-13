<?php
class Utils{
    //Returns all pages but home, header, footer and 404, as well as some others regarding session status
    public static function allPages(){
        $pages = array_diff(scandir("..\app\pages"), array('.', '..', '404.php', 'home.php', 'head.php', 'header.php', 'footer.php'));
        if(!isset($_SESSION)){
            $pages=array_diff($pages, array('settings.php', 'delete.php'));
        }
        if(isset($_SESSION)){
            $pages=array_diff($pages, array('login.php', 'signup.php'));
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

    //mayDo function to create user instance dinamically; maybe use it for other purposes too
}