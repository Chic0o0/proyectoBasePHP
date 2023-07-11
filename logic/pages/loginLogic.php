<?php

require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";
require_once "..\logic\sessions.php";

//willDo think if temporal user to keep using user class as a template is worth it

$userData=(new SQLiteConnection())->readUser(htmlspecialchars($_GET['email']), htmlspecialchars($_GET['password']));

$loginUser=new User(
    ["email", $userData["email"]],
    ["name", $userData["name"]],
    ["surname", $userData["surname"]],
    ["age", $userData["age"]],
    ["phone", $userData["phone"]]
);

(new Session)->setUserSession($loginUser);

unset($loginUser);

header('Location: /');