<?php
class Utils{
    //Devuelve todas las páginas de la app excepto home, header, footer y 404
    public static function allPages(){
        return array_diff(scandir("..\app\pages"), array('.', '..', '404.php', 'home.php', 'head.php', 'header.php', 'footer.php'));
    }

//willDo function to create user instance dinamically; maybe use it for other purposes too
//  function setUpUserData(){
//     arr
//     foreach($_GET or $_POST as $key => $value){
//         if($key=="password"){
//             arr append [$key, password_hash(htmlspecialchars($value), PASSWORD_DEFAULT)];
//         } else {
//             arr append [$key, htmlspecialchars($value)];
//         }
//     }
//      return arr
// }
}