<?php

// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

//Maybe implement this as a general way to handle post requests: DYNAMIC POST HANDLER
//Have to find a way to add the coma after array return
// function processPost(){
//     foreach($_POST as $key => $value){
//         if($key=="password"){
//             var_dump($key);
//             return [$key, password_hash(htmlspecialchars($value), PASSWORD_DEFAULT)];
//         } else {
//             var_dump($key);
//             return [$key, htmlspecialchars($value)];
//         }
//     }
// }
// $signupUser=new User(
//     processPost()
// );

$signupUser=new User(
    ["email", htmlspecialchars($_POST["email"])],
    ["password", password_hash(htmlspecialchars($_POST["password"]),  PASSWORD_DEFAULT)],
    ["name", htmlspecialchars($_POST["name"])],
    ["surname", htmlspecialchars($_POST["surname"])],
    ["age", htmlspecialchars($_POST["age"])],
    ["phone", htmlspecialchars($_POST["phone"])]
);

try {
    $db=new SQLiteConnection();
    $db->createUser($signupUser);
} catch (Exception $e) {
    //willDo good error handling
    echo "Error: ".$e->getmessage();
}
//willDo set session (new file?)
unset($signupUser);

header('Location: /');