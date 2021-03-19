<?php
include 'example3.php';

$student = new Student('TH2002023','Nhật');

echo 'StudentID: ' . $student->getStudentId() .'<br>' . 'Student Name: ' . $student->getStudentName();

?>