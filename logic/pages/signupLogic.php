<?php

require_once "..\logic\classes\userClass.php";
require_once "..\db\DBConnection.php";
require_once "..\logic\sessions.php";

$signupUser=new User(
    ["email", filter_var($_POST["email"], FILTER_SANITIZE_EMAIL)],
    ["password", password_hash(htmlspecialchars($_POST["password"]),  PASSWORD_DEFAULT)],
    ["name", htmlspecialchars($_POST["name"])],
    ["surname", htmlspecialchars($_POST["surname"])],
    ["age", htmlspecialchars($_POST["age"])],
    ["phone", htmlspecialchars($_POST["phone"])]
);

(new DBConnection)->createUser($signupUser);
(new Session)->setUserSession($signupUser);

unset($signupUser);

header('Location: /');