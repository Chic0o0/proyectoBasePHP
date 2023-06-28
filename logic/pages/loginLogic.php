<?php

// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    try {
        $db=new SQLiteConnection();
        $userData=$db->readUser(htmlspecialchars($_GET['email']), htmlspecialchars($_GET['password']));
    } catch (Exception $e) {
        //willDo good error handling
        echo "Error: ".$e->getmessage();
    }

    try {
        $loginUser=new User(
            ["name", $userData["name"]],
            ["surname", $userData["surname"]],
            ["age", $userData["age"]]
        );
    } catch (Throwable $e) {
        die("Error: ".$e->getMessage());
    }
    //willDo set session (new file?)
    echo $loginUser->getName();
    unset($loginUser);

}
// header('Location: /');

