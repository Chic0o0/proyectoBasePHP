<?php

// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";
require_once "..\logic\sessions.php";

$signupUser=new User(
    ["email", htmlspecialchars($_POST["email"])],
    ["password", password_hash(htmlspecialchars($_POST["password"]),  PASSWORD_DEFAULT)],
    ["name", htmlspecialchars($_POST["name"])],
    ["surname", htmlspecialchars($_POST["surname"])],
    ["age", htmlspecialchars($_POST["age"])],
    ["phone", htmlspecialchars($_POST["phone"])]
);

(new SQLiteConnection)->createUser($signupUser);
(new Session)->setUserSession($signupUser);

unset($signupUser);

header('Location: /');