<?php

require_once "..\logic\classes\userClass.php";
require_once "..\db\SQLiteConnection.php";
require_once "..\logic\sessions.php";
require_once "..\logic\utils.php";

$userData = Utils::delNullArray($_POST);
var_dump($userData);
