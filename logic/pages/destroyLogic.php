<?php
require_once "..\db\SQLiteConnection.php";

//mayDo unset when over
$userNeedle=str_replace("_", ".", key($_GET));

if(in_array($userNeedle, $_SESSION, true)){
    (new SQLiteConnection)->destroyUser($userNeedle);
} else {
    echo "Don't alter my app structure >:)";
}

header('Location: /');