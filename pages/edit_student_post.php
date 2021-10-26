<?php
require_once('../includes/db.php');
$student_id = $_POST['id'];
$name = $_POST['name'];
$mother = $_POST['mname'];
$father = $_POST['fname'];
$mobilenumber = $_POST['number'];
$roll = $_POST['roll'];
$dept = $_POST['dept'];
$semster = $_POST['sem'];
$sessiony = $_POST['sess'];
$student_updated_query = "UPDATE students SET name='$name', roll='$roll', dept='$dept',	mother='$mother',father='$father', mobilenumber='$mobilenumber', semester='$semster', sesionyear='$sessiony' WHERE id=$student_id";
mysqli_query($db_connect,$student_updated_query );
header('location:all_student.php')


?>