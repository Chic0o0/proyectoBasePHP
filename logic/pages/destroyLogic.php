<?php

require_once "..\db\DBConnection.php";

$userNeedle=str_replace("_", ".", key($_POST));
foreach ($_POST as $key => $value) {
    echo $key."\n".$value."\n";
}
echo $userNeedle;

if(in_array($userNeedle, $_SESSION, true)){
    (new DBConnection)->destroyUser($userNeedle);
} else {
    echo "Don't alter my app structure >:)";
}

header('Location: /');