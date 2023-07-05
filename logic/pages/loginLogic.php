<?php

// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";
require_once "..\logic\sessions.php";

$db=new SQLiteConnection();

$userData=$db->readUser(htmlspecialchars($_GET['email']), htmlspecialchars($_GET['password']));

$loginUser=new User(
    ["name", $userData["name"]],
    ["surname", $userData["surname"]],
    ["age", $userData["age"]]
);

(new Session)->setUserSession($loginUser);

unset($loginUser);

header('Location: /');