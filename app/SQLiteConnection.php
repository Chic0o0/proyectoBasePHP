<?php
namespace App;

class SQLiteConnection {
    private $pdo;

    //connection string: sqlite:db/phpsqlite.db
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:".Config::SQLITE_PATH);
        }
        return $this->pdo;
    }

    //Handle exceptions
    // try {
    //     $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
    //  } catch (\PDOException $e) {
    //     // handle the exception here
    //  }
}