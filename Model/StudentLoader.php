<?php

declare(strict_types=1);

// idk why it doesn't work without requiring it
require_once 'Model/DataSource.php';

class StudentLoader extends DataSource {

    public function getStudents(): array {
        $students = [];
        $sql = "SELECT s.*, c.name AS className FROM Student s join Class c on s.class_id = c.id";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($students, $row);
        }
        return $students;
    }

    public function getStudentById(int $id): array {
        $student = [];
        $sql = "SELECT s.*, c.name AS className FROM Student s join Class c on s.class_id = c.id WHERE s.id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($student, $row);
        }
        return $student;
    }

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

    public function deleteStudent(int $id): void {
        $sql = "DELETE FROM Student WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
