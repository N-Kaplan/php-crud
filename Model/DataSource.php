<?php

declare(strict_types=1);

class DataSource {

    public function connect() {
        $servername = getenv('SERVERNAME');
        $username = getenv('USERNAME');
        $password = getenv('PASSWORD');
        $database = getenv('DATABASE');
        $charset = getenv('CHARSET');

        try {
            $dsn = "mysql:host=" . $servername . ";dbname=" . $database . ";charset=" . $charset;
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
