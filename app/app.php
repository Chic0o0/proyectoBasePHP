<?php
namespace App;
include "..\db\SQLiteConnection.php";

class App{
	public function redundantConnection(){
		$pdo = (new SQLiteConnection())->connect();
		return $pdo;
	}
}