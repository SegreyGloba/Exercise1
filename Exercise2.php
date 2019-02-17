<?php

require_once "Student.php";

$students = [
    new Student('Mike', 'Barnes', 'male', 'freshman', 4),
    new Student('Jim', 'Nickerson', 'male', 'sophomore', 3),
    new Student('Jack', 'Indabox', 'male', 'junior', 2.5),
    new Student('Jane', 'Miller', 'female', 'seniors', 3.6),
    new Student('Mary', 'Scott', 'female', 'seniors', 2.7),
];




/** @var Student $student */
foreach ($students as $student) {
    $student->showMyself();
    echo PHP_EOL;
}