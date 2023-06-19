<?php
namespace App;
// require_once "\classes\userClass.php" does not work, dont know why
require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";

//willDo fetch data from database
try {
    $db=new SQLiteConnection();
    $db->readUser($signupUser);
} catch (Exception $e) {
    //willDo handling for UNIQUE error exception
    echo "Error: ".$e->getMessage();
}
header('Location: /');

//willDo set data
try {
    $signupUser=new User(
    );
} catch (Exception $e) {
    echo "Error: ".$e->getmessage();
}

//willDo set session (new file?)
header('Location: /');