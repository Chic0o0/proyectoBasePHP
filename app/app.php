<?php
namespace App;
require_once "..\db\SQLiteConnection.php";
require_once '../logic/router.php';

class App{
	public function redundantConnection(){
		$pdo = (new SQLiteConnection())->connect();
		return $pdo;
	}
}