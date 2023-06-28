<?php
class Utils{
    public static function allPages(){
        return array_diff(scandir("..\app\pages"), array('.', '..', '404.php', 'home.php', 'header.php', 'footer.php'));
        // unset($arr[]);
    }
}