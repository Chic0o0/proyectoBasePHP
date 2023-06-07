<?php
namespace App;
include "..\config.php";

class SQLiteConnection {
    private $pdo;

    //connection string: sqlite:db/phpsqlite.db
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:".Config::SQLITE_PATH);
        }
        return $this->pdo;
    }
}