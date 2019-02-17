
<?php
require_once "Student.php";

$student = new Student('Sergey', 'Globa', 'male', 'senior', '2');

$student->studyTime(2);
$student->gpa = 2;
$student->showMyself();