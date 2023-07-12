<?php
require_once "..\db\SQLiteConnection.php";
require_once "..\logic\sessions.php";

(new SQLiteConnection)->deleteUser();
(new Session)->breakUserSession();
header("Location: /");