<?php
require_once "..\db\DBConnection.php";
require_once "..\logic\sessions.php";

(new DBConnection)->deleteUser();
(new Session)->breakUserSession();
header("Location: /");