<?php
namespace App;
require_once "..\db\SQLiteConnection.php";
require_once '..\logic\router.php';

class App{

	public function routing(){
		$router = (new Router())->router();
		return $router;
	}
	
	public function redundantConnection(){
		$pdo = (new SQLiteConnection())->connect();
		return $pdo;
	}

}

$pdo = (new App())->redundantConnection();
$routing = (new App())->routing();