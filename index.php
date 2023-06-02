<?php
require 'vendor/autoload.php';
use App\SQLiteConnection;

$pdo = (new SQLiteConnection())->connect();
if ($pdo != null)
    echo 'Code 200 --success';
else
    echo 'Code 500 --failure';
?>