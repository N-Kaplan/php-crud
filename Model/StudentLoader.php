<?php

declare(strict_types=1);

class StudentLoader extends DataSource {
    // private DataSource $db;

    // public function __construct(DataSource $db) {
    //     $this->db = $db;
    // }

    // get all students
    public function getStudents(): array {
        $students = [];
        $sql = "SELECT * FROM Student";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            var_dump($row);
            array_push($students, $row);
        }
        return $students;
    }


    // get student(s) by name
    public function getStudentByName(string $name): array {
        $student = [];
        $sql = "SELECT * FROM Student WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $names = $stmt->fetch(PDO::FETCH_ASSOC);

        foreach ($names as $name) {
            array_push($student, $name);
        }
        return $student;
    }


    // insert student into database
    public function addStudent(string $name, string $email, int $class_id): void {
        $name = "Stefan";
        $sql = "INSERT INTO Student(name, email, class_id) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $class_id]);
    }


    // public function getStudentByName(string $name) {
    //     $stmt = $this->connect()->prepare("SELECT * FROM Student WHERE name=?");
    //     $stmt->execute($name);
    // }
}



//old code from mysqli way of doing things
//it was inside the get_students() method
// $result = [];
        // $response  = $this->db->get_students();

        // var_dump($response);
        // foreach ($response as $v) {
        //     array_push($result, new Student((int)$v['id'], $v['first_name'], $v['last_name'], $v['email'], (int)$v['class_id']));
        // }

        // foreach ($response as $student) {
        //     $this->result[] = new Student(intval($student['id']), $student['first_name'], $student['last_name'], $student['email'], intval($student['class_id']));
        // }
        // var_dump($result);
        // return $result;
