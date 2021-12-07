<?php

declare(strict_types=1);

require_once './Model/Teacher.php';

class Student extends Teacher {

    private int $class_id;

    public function __construct(int $id, string $name, string $email, int $class_id) {
        parent::__construct($id, $name, $email);
        $this->$class_id = $class_id;
    }

    // private int $id;
    // private string $name;
    // private string $email;
    // private int $class_id;

    // public function __construct(int $id, string $name, string $email, int $class_id) {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->class_id = $class_id;
    // }

    // public function get_id() {
    //     return $this->id;
    // }

    // public function get_name() {
    //     return $this->name;
    // }


    // public function get_email() {
    //     return $this->email;
    // }

     public function get_class_id(): int
     {
         return $this->class_id;
     }
}
