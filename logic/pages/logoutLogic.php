<?php
require_once "..\logic\sessions.php";
(new Session)->breakUserSession();
header("Location: /");