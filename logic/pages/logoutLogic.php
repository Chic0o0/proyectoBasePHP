<?php
session_start();
setcookie('SESSIONID', '', time() - 86400, '/');
session_destroy();
session_write_close();
header("Location: /");