<?php
require_once '..\vendor\autoload.php';
use App\app;

$pdo = (new App())->redundantConnection();
if ($pdo != null)
    echo '<h1>Code 200 --success</h1>';
else
    echo '<h1>Code 500 --failure</h1>';

$routing = (new App())->routing();
?>