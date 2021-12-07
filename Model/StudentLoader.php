<?php

declare(strict_types=1);

// idk why it doesn't work without requiring it
require_once 'Model/DataSource.php';

class StudentLoader extends DataSource {

    // get all students
    public function getStudents(): array {
        $students = [];
        $sql = "SELECT * FROM Student";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
        $sql = "INSERT INTO Student(name, email, class_id) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $class_id]);
    }

    //edit student !!very important to have a WHERE clause!!
    public function editStudent(string $name, string $email, int $class_id, int $id): void {
        $sql = "UPDATE Student SET name=?, email=?, class_id=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $class_id, $id]);
    }

    //delete student from db
    public function deleteStudent(int $id): void {
        $sql = "DELETE FROM Student WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
