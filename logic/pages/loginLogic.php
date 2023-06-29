<?php

// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

$db=new SQLiteConnection();
$userData=$db->readUser(htmlspecialchars($_GET['email']), htmlspecialchars($_GET['password']));

$loginUser=new User(
    ["name", $userData["name"]],
    ["surname", $userData["surname"]],
    ["age", $userData["age"]]
);

//willDo manage session with cookies
session_id("user");
session_start();
$_SESSION["name"]=$loginUser->getName();
$_SESSION["surname"]=$loginUser->getSurname();
$_SESSION["age"]=$loginUser->getAge();

unset($loginUser);

header('Location: /');

//willDo set session (new file?)