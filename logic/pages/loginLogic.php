<?php
namespace App;
// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

//willDo fetch data from database
if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    try {
        $db=new SQLiteConnection();
        $userData=$db->readUser($_GET['email'], $_GET['password']);
    } catch (Exception $e) {
        //willDo handling for UNIQUE error exception
        echo "Error: ".$e->getmessage();
    }

    //willDo set data
    try {
        var_dump($userData);
        // $loginUser=new User();
        // $loginUser->setEmail($userData["email"]);
        // $loginUser->setName($userData["name"]);
        // $loginUser->setSurname($userData["surname"]);
        // echo($loginUser);
    } catch (Exception $e) {
        echo "Error: ".$e->getmessage();
    }

    //willDo set session (new file?)

}
//header('Location: /');