<?php
namespace App;
// require_once "\classes\userClass.php" does not work, dont know why
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once "..\logic\classes\userClass.php";
    require_once "..\db\SQLiteConnection.php";

    try {
        $signupUser=new User(
            htmlspecialchars($_POST["email"]),
            password_hash(htmlspecialchars($_POST["password"]),  PASSWORD_DEFAULT),
            htmlspecialchars($_POST["name"]),
            htmlspecialchars($_POST["surname"]),
            htmlspecialchars($_POST["age"]),
            htmlspecialchars($_POST["phone"])
        );
    } catch (Exception $e) {
        echo "Error: ".$e->getmessage();
    }
    
    try {
        $db=new SQLiteConnection();
        $db->createUser($signupUser);
    } catch (Exception $e) {
        //willDo handling for UNIQUE error exception
        echo "Error: ".$e->getmessage();
    }
    unset($signupUser);
}
//willDo set session (new file?)
header('Location: /');