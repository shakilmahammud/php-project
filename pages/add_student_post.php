<?php
require_once('../includes/db.php');


$name = $_POST['name'];
$roll = $_POST['roll'];
$dept = $_POST['dept'];

$student_insert_query = "INSERT INTO students (name,roll,dept) VALUES ('$name','$roll','$dept')";

mysqli_query($db_connect,$student_insert_query);
header('location:all_student.php');
?>