<?php
namespace App;
// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    try {
        $db=new SQLiteConnection();
        $userData=$db->readUser(htmlspecialchars($_GET['email']), htmlspecialchars($_GET['password']));
    } catch (Exception $e) {
        //willDo handling for UNIQUE error exception
        echo "Error: ".$e->getmessage();
    }

    //willDo set data
    try {
        $loginUser=new User(
            ["name", $userData["name"]],
            ["surname", $userData["surname"]],
            ["age", $userData["age"]]
        );
    } catch (Exception $e) {
        echo "Error: ".$e->getmessage();
    }
    //willDo set session (new file?)
    unset($loginUser);
}
//header('Location: /');