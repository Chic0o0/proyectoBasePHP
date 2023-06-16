<?php
namespace App;
// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

class registerLogic extends User{
    public function __construct($email, $password, $name, $surname, int $age, int $phone) {
        parent::__construct($email, $password, $name, $surname, $age, $phone);
    }
}

try {
    $registerUser=new registerLogic(
        htmlspecialchars($_POST["email"]),
        htmlspecialchars($_POST["password"]),
        htmlspecialchars($_POST["name"]),
        htmlspecialchars($_POST["surname"]),
        htmlspecialchars($_POST["age"]),
        htmlspecialchars($_POST["phone"]),
    );
} catch (Exception $e) {
    echo "Error: ".$e->getmessage();
}

var_dump($registerUser);

//willDo
// try {
//     $pdo=new SQLiteConnection();
//     $pdo->connect();
//     $pdo->createUser($registerUser);
// } catch (Exception $e) {
//     echo "Error: ".$e->getMessage();
// }