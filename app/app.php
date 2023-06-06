<?php
namespace App;

class App{
	public function redundantConnection(){
		$pdo = (new SQLiteConnection())->connect();
		return $pdo;
	}
}