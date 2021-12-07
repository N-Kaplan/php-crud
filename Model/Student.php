<?php

declare(strict_types=1);

require 'Model/StudentLoader.php';
require_once './Model/Teacher.php';

class Student extends Teacher {

    private int $class_id;

    public function __construct(int $id, string $name, string $email, int $class_id) {
        parent::__construct($id, $name, $email);
        $this->$class_id = $class_id;
    }

    public function getClassId() {
        return $this->class_id;
    }
}
