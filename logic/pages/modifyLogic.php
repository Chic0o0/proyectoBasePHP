<?php

//willDo modify and destroy in future

// $email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";

// require_once "..\logic\classes\userClass.php";
// require_once "..\db\SQLiteConnection.php";
// require_once "..\logic\utils.php";

// $userData = Utils::delNullArray($_POST);

// $updateUser=new User();

// if(isset($userData["email"])){
//     $updateUser->setEmail(filter_var($userData["email"], FILTER_SANITIZE_EMAIL));
// }
// if(isset($userData["name"])){
//     $updateUser->setName(htmlspecialchars($userData["name"]));
// }
// if(isset($userData["surname"])){
//     $updateUser->setSurname(htmlspecialchars($userData["surname"]));
// }
// if(isset($userData["age"])){
//     $updateUser->setAge(htmlspecialchars($userData["age"]));
// }
// if(isset($userData["phone"])){
//     $updateUser->setPhone(htmlspecialchars($userData["phone"]));
// }
// (new SQLiteConnection)->modifyUser($updateUser, $email);
// unset($updateUser);
// header('Location: /');