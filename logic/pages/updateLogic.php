<?php

require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";
require_once "..\logic\sessions.php";
require_once "..\logic\utils.php";

$userData = Utils::delNullArray($_POST);
$updateUser=new User();

if(isset($userData["email"])){
    $updateUser->setEmail($userData["email"]);
}
if(isset($userData["name"])){
    $updateUser->setEmail($userData["name"]);
}
if(isset($userData["surname"])){
    $updateUser->setEmail($userData["surname"]);
}
if(isset($userData["age"])){
    $updateUser->setEmail($userData["age"]);
}
if(isset($userData["phone"])){
    $updateUser->setEmail($userData["phone"]);
}

var_dump($updateUser);

//willdo change methods / use other methods to adapt to prtially initialized user
// (new SQLiteConnection)->updateUser($updateUser);
// (new Session)->setUserSession($updateUser);

unset($updateUser);

// header('Location: /');