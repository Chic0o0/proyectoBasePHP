<?php
namespace App;
require_once "..\db\SQLiteConnection.php";
require_once '..\logic\router.php';

class App{
	public function routing(){
		$router = (new Router())->router();
		return $router;
	}
	
	public function connecting(){
		$pdo = (new SQLiteConnection())->connect();
		return $pdo;
	}
}

$routing = (new App())->routing();
$pdo = (new App())->connecting();