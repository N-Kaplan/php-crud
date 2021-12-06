<?php

declare(strict_types=1);

class DataSource {
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "parolaMariaDB";
    private string $database = "school";
    private string $charset = "utf8mb4";

    // public function __construct() {
    //     $this->servername = "localhost";
    //     $this->username = "root";
    //     $this->password = "parolaMariaDB";
    //     $this->database = "school";
    //     $this->charset = "utf8mb4";
    // }

    public function connect() {
        // $this->servername = "localhost";
        // $this->username = "root";
        // $this->password = "parolaMariaDB";
        // $this->database = "school";
        // $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    // public function get_students(): array {
    //     $con = new DataSource;
    //     $handle = $con->prepare('SELECT * FROM student');
    //     $handle->execute();
    //     $selectedStudents = $handle->fetchAll();
    //     $this->students = [];
    //     foreach ($selectedStudents as $student) {
    //         $this->students[] = new Student((int)$student['Id'], $student['Name'], $student['Email'], (int)$student['ClassId']);
    //     }
    // }

    // public function getRows() {
    //     $dsn = "mysql:host=$this->servername;dbname=$this->database;charset=UTF8";

    //     try {
    //         $pdo = new PDO($dsn, $this->username, $this->password);

    //         if ($pdo) {
    //             echo "Connected to the $this->database database successfully!";
    //         }
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //     }
    // }
}






// class DataSource {
//     private string $servername;
//     private string $username;
//     private string $password;
//     private string $database;


//     // Create connection

//     public function __construct() {
//         $this->servername = "localhost";
//         $this->username = "root";
//         $this->password = "parolaMariaDB";
//         $this->database = "school";
//     }

//     public function get_students(): array {
//         $sql = "SELECT * FROM student";
//         return $this->getRows($sql);
//     }

//     public function get_teachers(): array {
//         $sql = "SELECT * FROM teacher";
//         return $this->getRows($sql);
//     }

//     public function get_classes(): array {
//         $sql = "SELECT * FROM class";
//         return $this->getRows($sql);
//     }

//     private function getRows(string $sql): array {
//         $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
//         if ($conn->connect_error) {
//             die("Connection failed: " . $conn->connect_error);
//         }
//         $result = $conn->query($sql);

//         // $row = mysqli_fetch_assoc($result);
//         // var_dump($row);
//         $rows = [];
//         while ($row = mysqli_fetch_assoc($result)) {
//             array_push($rows, $row);
//         }

//         // free result set
//         $result->close();

//         // close connection
//         $conn->close();

//         return $rows;
//     }
// }
