<?php
namespace App;
// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

class registerLogic extends User{}

try {
    $registerUser=new registerLogic(
        htmlspecialchars($_POST["email"]),
        htmlspecialchars($_POST["password"]),
        htmlspecialchars($_POST["name"]),
        htmlspecialchars($_POST["surname"]),
        htmlspecialchars($_POST["age"]),
        htmlspecialchars($_POST["phone"])
    );
} catch (Exception $e) {
    echo "Error: ".$e->getmessage();
}

try {
    $pdo=new SQLiteConnection();
    $pdo->connect();
    $pdo->createUser($registerUser);
    unset($pdo);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}