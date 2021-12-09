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
            $sql = 'SELECT * FROM class WHERE id = ?';
            $result = $this->connect()->prepare($sql);
            $result->execute([$id]);
            return $result->fetch(PDO::FETCH_ASSOC);
        
    }

    // get classes by name
    // public function getClassesByName(string $name): array {
    //     $classes = [];
    //     $sql = "SELECT * FROM class WHERE name = ?";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$name]);
    //     $names = $stmt->fetch(PDO::FETCH_ASSOC);

    //     foreach ($names as $name) {
    //         array_push($classes, $name);
    //     }
    //     return $classes;
    // }


    // insert classes into database
    public function addClass(string $name, string $location, int $teacher_id): void {
        $sql = "INSERT INTO class(name, location, teacher_id) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $location, $teacher_id]);
    }
 // delete class
    public function deleteClasses(int $id): void {
        $sql = "DELETE FROM class WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    //edit class
    public function editClass(string $name, string $location, int $teacher_id,int $id): void {
        $sql = "UPDATE class SET name=?, location=? , teacher_id=? WHERE id=?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$name, $location, $teacher_id,$id]);
    }
}
