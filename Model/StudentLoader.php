<?php

declare(strict_types=1);

// idk why it doesn't work without requiring it
require_once 'Model/DataSource.php';

class StudentLoader extends DataSource {

    public function getStudents(): array {
        $students = [];
        // $sql = "SELECT s.*, c.name AS className FROM Student s join Class c on s.class_id = c.id";
        $sql = "SELECT s.*, c.name AS className, t.id AS teacher_id, t.name AS teacherName 
        FROM Student s join Class c on s.class_id = c.id JOIN teacher t ON c.teacher_id = t.id";
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

    public function getStudentsByTeacherId(int $id) {
        $studByTeachId = [];
        $sql = "SELECT s.*, c.name AS className, t.id AS teacher_id, t.name AS teacherName 
                FROM Student s join Class c on s.class_id = c.id 
                JOIN teacher t ON c.teacher_id = t.id WHERE t.id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($studByTeachId, $row);
        }
        return $studByTeachId;
    }

    public function getStudentsByClassId(int $id) {
        $studByClassId = [];
        $sql = "SELECT s.name, c.name
                FROM Student s join Class c on s.class_id = c.id 
                JOIN Teacher t ON c.teacher_id = t.id WHERE c.id = 1
                GROUP BY s.name";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($studByClassId, $row);
        }
        return $studByClassId;
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
