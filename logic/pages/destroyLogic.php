<?php

require_once "..\db\SQLiteConnection.php";

$userNeedle=str_replace("_", ".", key($_POST));
foreach ($_POST as $key => $value) {
    echo $key."\n".$value."\n";
}
echo $userNeedle;

if(in_array($userNeedle, $_SESSION, true)){
    (new SQLiteConnection)->destroyUser($userNeedle);
} else {
    echo "Don't alter my app structure >:)";
}

header('Location: /');