<?php

/**
 * Class Student
 * @property string $firstName
 * @property string $lastName
 * @property string $gender
 * @property string $status
 * @property float $gpa
 */
class Student
{
    const MAX_GPA = 4;

    private $firstName;
    private $lastName;
    private $gender;
    private $status;
    private $gpa;

    /**
     * Student constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $gender
     * @param string $status
     * @param float $gpa
     */
    public function __construct(string $firstName, string $lastName, string $gender, string $status, float $gpa)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->status = $status;
        $this->gpa = $gpa;
    }

    public function showMyself()
    {
        echo 'firstname: ', $this->firstName, PHP_EOL,
        'astname: ', $this->lastName, PHP_EOL,
        'gender ', $this->gender, PHP_EOL,
        'status: ', $this->status, PHP_EOL,
        'gpa: ', round($this->gpa, 2), PHP_EOL;
    }

    /**
     * @param float $time
     */
    public function studyTime(float $time)
    {
        $gpa = $this->gpa + log($time);
        $this->gpa = $gpa > self::MAX_GPA ? self::MAX_GPA : $gpa;
    }
}

$student = new Student('Sergey', 'Globa', 'male', 'senior', '2');

$student->studyTime(2);
$student->showMyself();