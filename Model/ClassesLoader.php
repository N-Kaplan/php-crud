<?php

declare(strict_types=1);

class ClassesLoader extends DataSource {
    // get all classes
    public function getClasses(): array {
        $classes = [];
        $sql = "SELECT * FROM class";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($classes, $row);
        }
        return $classes;
    }
    // get classes by id
    public function getClassesById(int $id): array {
        $classes = [];
        $sql = "SELECT * FROM class WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $names = $stmt->fetch(PDO::FETCH_ASSOC);

        foreach ($names as $id) {
            array_push($classes, $id);
        }
        return $classes;
    }

    // get classes by name
    public function getClassesByName(string $name): array {
        $classes = [];
        $sql = "SELECT * FROM class WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $names = $stmt->fetch(PDO::FETCH_ASSOC);

        foreach ($names as $name) {
            array_push($classes, $name);
        }
        return $classes;
    }


    // insert classes into database
    public function addClass(string $name, string $location, int $teacher_id): void {
        $name = "lamarr";
        $sql = "INSERT INTO class(name, location, teacher_id) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $location, $teacher_id]);
    }
}
