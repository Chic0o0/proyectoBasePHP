<?php

require_once "..\logic\classes\userClass.php";
require_once "..\db\DBConnection.php";
require_once "..\logic\sessions.php";

$userData=(new DBConnection())->readUser(filter_var($_GET['email'], FILTER_SANITIZE_EMAIL), htmlspecialchars($_GET['password']));

$loginUser=new User(
    ["email", $userData["email"]],
    ["name", $userData["name"]],
    ["surname", $userData["surname"]],
    ["age", $userData["age"]],
    ["phone", $userData["phone"]],
    ["super", $userData["super"]]
);

(new Session)->setUserSession($loginUser);

unset($loginUser);

header('Location: /');