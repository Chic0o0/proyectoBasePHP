<?php
require '../vendor/autoload.php';
use App\app;

$pdo = (new App())->redundantConnection();
if ($pdo != null)
    echo 'Code 200 --success';
else
    echo 'Code 500 --failure';
?>