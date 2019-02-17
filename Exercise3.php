<?php

require_once "Student.php";

/**
 * Class ProcessStudents
 * @property Student[] $students
 */
class ProcessStudents
{
    const STUDENTS = [
        ['firstName' => 'Mike', 'lastName' => 'Barnes', 'gender' => 'male', 'status' => 'freshman', 'gpa' => 4, 'time' => 60],
        ['firstName' => 'Jim', 'lastName' => 'Nickerson', 'gender' => 'male', 'status' => 'sophomore', 'gpa' => 3, 'time' => 100],
        ['firstName' =>'Jack', 'lastName' => 'Indabox', 'gender' => 'male', 'status' => 'junior', 'gpa' => 2.5, 'time' => 40],
        ['firstName' =>'Jane', 'lastName' => 'Miller', 'gender' => 'female', 'status' => 'seniors', 'gpa' => 3.6, 'time' => 300],
        ['firstName' =>'Mary', 'lastName' => 'Scott', 'gender' => 'female', 'status' => 'seniors', 'gpa' => 2.7, 'time' => 1000],
    ];

    private $students = [];

    public function __construct()
    {
        foreach (self::STUDENTS as $studentData) {
            $student = new Student($studentData['firstName'], $studentData['lastName'], $studentData['gender'], $studentData['status'], $studentData['gpa']);
            $student->studyTime($studentData['time']);
            $this->students[] = $student;
        }
    }

    public function printStudents()
    {
        foreach ($this->students as $student) {
            $student->showMyself();
        }
    }
}

$print = new ProcessStudents();
$print->printStudents();



