<?php

declare(strict_types=1);

class TeacherLoader extends DataSource
{
    public function getTeachers(): array {
        $teachers = [];
        $sql = "SELECT * FROM Teacher";
        $result = $this->connect()->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            array_push($teachers, $row);
        }
        return $teachers;
    }

    // get teacher by id
    public function getTeacherById(int $id): array {
        $sql = 'SELECT * FROM Teacher WHERE id = ?';
        $result = $this->connect()->prepare($sql);
        $result->execute([$id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    // insert teacher into database
    public function addTeacher(string $name, string $email): void {
        $sql = "INSERT INTO Teacher(name, email) VALUES(?, ?)";
        $result = $this->connect()->prepare($sql);
        $result->execute([$name, $email]);
    }

    // remove teacher from database
    //TODO: caveat: don't remove teacher if assigned to a class
    public function deleteTeacher(int $id): void {
        $sql = "DELETE FROM Teacher WHERE id = ?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$id]);
    }

    //edit teacher
    public function editTeacher(string $name, string $email, int $id): void {
        $sql = "UPDATE Teacher SET name=?, email=? WHERE id=?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$name, $email, $id]);
    }

    //get all students assigned to a specific teacher
    public function getStudents(int $id): array {
        $students = [];
        $sql = "SELECT student.id, student.name, student.email FROM student RIGHT JOIN school.class c on c.id = student.class_id WHERE teacher_id = ?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$id]);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            array_push($students, $row);
        }
        return $students;
    }
}