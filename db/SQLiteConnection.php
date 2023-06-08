<?php
namespace App;
require_once "..\config.php";

class SQLiteConnection {
    private $pdo;

    //connection string: sqlite:phpsqlite.db
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:".Config::SQLITE_PATH);
        }
        return $this->pdo;
    }
}