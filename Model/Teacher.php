<?php

declare(strict_types=1);

class Teacher {

    private int $id;
    private string $name;
    private string $email;

    /**
     * @param int $id
     * @param string $name
     * @param string $email
     */
    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

// no setters necessary?
//    /**
//     * @param string $name
//     */
//    public function setName(string $name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @param string $email
//     */
//    public function setEmail(string $email): void
//    {
//        $this->email = $email;
//    }
}
