<?php
class Utils{
    //Returns all pages but home, header, footer and 404, as well as some others regarding session status
    public static function allPages(){
        $pages = array_diff(scandir("..\app\pages"), array('.', '..', '404.php', 'home.php', 'head.php', 'header.php', 'footer.php'));
        if(!isset($_SESSION)){
            $pages=array_diff($pages, array('settings.php', 'delete.php', 'control.php'));
        }
        if(isset($_SESSION)){
            $pages=array_diff($pages, array('login.php', 'signup.php'));
            if($_SESSION['super']==false){
                $pages=array_diff($pages, array('control.php'));
            }
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

    public static function reflectUser(string ...$props){
        $arr=array();
        foreach ($props as $val) {
            array_push($arr, [new ReflectionProperty('User', $val), $val]);
        }
        return $arr;
    }

    //mayDo function to sanitize form data and assign it to array
    // public static function sanitizeFormData(string ...$gArr){
    //     $sanitizedData=array();
    //     foreach ($gArr as $key => $value) {
    //         if($key="email") {
    //             $data=filter_var($value, FILTER_VALIDATE_EMAIL);
    //             array_push($sanitizedData, $data);
    //         } elseif($key="password") {
    //             $data=password_hash(filter_var($value, FILTER_VALIDATE_EMAIL), PASSWORD_DEFAULT);
    //             array_push($sanitizedData, $data);
    //         } else {
    //             $data=htmlspecialchars($value);
    //             array_push($sanitizedData, $data);
    //         }
    //     }
    //     return $sanitizedData;
    // }
    
    //mayDo function to initialize user instance dinamically
    // public static function setUser($user){
    //     foreach ($user as $key => $value) {
    //         if ($key!="submit"){
    //             call_user_func(array($user, "set".ucfirst($key)), $value);
    //         }
    //     }
    // }
}