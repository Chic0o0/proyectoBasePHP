<?php

// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";
require_once "..\logic\sessions.php";

//Maybe implement this as a general way to handle post requests: DYNAMIC HTTP HANDLER
//Have to find a way to add the coma after array return
// function processPost(){
//      arr
//     foreach($_GET or $_POST as $key => $value){
//         if($key=="password"){
//             arr append [$key, password_hash(htmlspecialchars($value), PASSWORD_DEFAULT)];
//         } else {
//             arr append [$key, htmlspecialchars($value)];
//         }
//     }
//      return arr
// }

$signupUser=new User(
    ["email", htmlspecialchars($_POST["email"])],
    ["password", password_hash(htmlspecialchars($_POST["password"]),  PASSWORD_DEFAULT)],
    ["name", htmlspecialchars($_POST["name"])],
    ["surname", htmlspecialchars($_POST["surname"])],
    ["age", htmlspecialchars($_POST["age"])],
    ["phone", htmlspecialchars($_POST["phone"])]
);

(new SQLiteConnection)->createUser($signupUser);
(new Session)->setUserSession($signupUser);

unset($signupUser);

header('Location: /');