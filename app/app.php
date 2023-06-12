<?php
namespace App;
require_once "..\db\SQLiteConnection.php";
require_once '..\logic\router.php';

class App{

	public function routing(){
		$router = (new Router())->router($_SERVER['REQUEST_URI']);
		return $router;
	}
	
	public function redundantConnection(){
		$pdo = (new SQLiteConnection())->connect();
		return $pdo;
	}
}