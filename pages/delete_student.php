<?php
require_once('../includes/db.php');
$student_id = $_GET['student_id'];
$single_student="DELETE FROM students WHERE id=$student_id";
mysqli_query($db_connect,$single_student);
header('location:all_student.php');
?>