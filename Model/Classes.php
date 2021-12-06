<?php
require_once './Model/Teacher.php';
class Classes {
    private int $id;
    private string $name;
    private string $location;
    private int $teacher_id;

   public function __construct(int $id, string $name, string $location, int $teacher_id) {
       $this->id = $id;
        $this->name = $name;
       $this->location = $location;
        $this->teacher_id = $teacher_id;
    }

   public function get_id() {
        return $this->id;
    }

   public function get_name() {
        return $this->name;
    }


    public function get_location() {
       return $this->location;
    }

    public function get_teacher_id() {
       return $this->teacher_id;
    }
}
?>