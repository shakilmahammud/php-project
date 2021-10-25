<?php
require_once('../includes/db.php');
$student_id = $_POST['id'];
$name = $_POST['name'];
$roll = $_POST['roll'];
$dept = $_POST['dept'];

$student_updated_query = "UPDATE students SET name='$name', roll='$roll', dept='$dept' WHERE id=$student_id";
mysqli_query($db_connect,$student_updated_query );
header('location:all_student.php');

?>