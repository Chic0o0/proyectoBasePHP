<?php
namespace App;
// require_once "\classes\userClass.php" does not work, dont know why
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once "..\logic\classes\userClass.php";
    require_once "..\db\SQLiteConnection.php";

    //Maybe implement this as a general way to handle post requests
    // $args=[];
    // foreach($_POST as $key => $value){
    //     if($key=="password"){
    //         args->append([$key, password_hash(htmlspecialchars($value), PASSWORD_DEFAULT)]);
    //     } else {
    //         args->append([$key, htmlspecialchars($value)]);
    //     }
    // }

    try {
        // $signupUser=new User(
        //     htmlspecialchars($_POST["email"]),
        //     password_hash(htmlspecialchars($_POST["password"]),  PASSWORD_DEFAULT),
        //     htmlspecialchars($_POST["name"]),
        //     htmlspecialchars($_POST["surname"]),
        //     htmlspecialchars($_POST["age"]),
        //     htmlspecialchars($_POST["phone"])
        // );
        $signupUser=new User(
            ["email", htmlspecialchars($_POST["email"])],
            ["password", password_hash(htmlspecialchars($_POST["password"]),  PASSWORD_DEFAULT)],
            ["name", htmlspecialchars($_POST["name"])],
            ["surname", htmlspecialchars($_POST["surname"])],
            ["age", htmlspecialchars($_POST["age"])],
            ["phone", htmlspecialchars($_POST["phone"])]
        );
    } catch (Exception $e) {
        echo "Error: ".$e->getmessage();
    }

    try {
        $db=new SQLiteConnection();
        $db->createUser($signupUser);
    } catch (Exception $e) {
        //willDo good error handling
        echo "Error: ".$e->getmessage();
    }
    //willDo set session (new file?)
    unset($signupUser);
}
header('Location: /');