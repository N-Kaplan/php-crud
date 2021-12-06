<?php

declare(strict_types=1);

class TeacherLoader extends DataSource
{
    public function getTeachers(): array {
        $teachers = [];
        $sql = 'SELECT * FROM Teacher';
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            var_dump($row);
            array_push($teachers, $row);
        }
        return $teachers;
    }

    // get teacher by id
    public function getTeacherById(int $id): array {
        $sql = 'SELECT * FROM Teacher WHERE id = ?';
        $result = $this->connect()->prepare($sql);
        $result->execute([$id]);
        $teacher = $result->fetch(PDO::FETCH_ASSOC);

        return $teacher;
    }

    // get teacher(s) by name (necessary?)
    public function getTeachersByName(string $name): array {
        $teachers = [];
        $sql = "SELECT * FROM Student WHERE name = ?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$name]);
        $names = $result->fetch(PDO::FETCH_ASSOC);

        foreach ($names as $name) {
            array_push($teachers, $name);
        }
        return $teachers;
    }

    // insert teacher into database
    public function addStudent(string $name, string $email): void {
        $name = "testName";
        $sql = "INSERT INTO Teacher(name, email) VALUES(?, ?)";
        $result = $this->connect()->prepare($sql);
        $result->execute([$name, $email]);
    }
}