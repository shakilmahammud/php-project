<?php
require_once('../includes/db.php');


$name = $_POST['name'];
$mother = $_POST['mname'];
$father = $_POST['fname'];
$mobilenumber = $_POST['number'];
$roll = $_POST['roll'];
$dept = $_POST['dept'];
$semster = $_POST['sem'];
$sessiony = $_POST['sess'];
echo $name,$mother,$father,$mobilenumber ,$roll,$dept,$semster,$sessiony ;

$student_insert_query = "INSERT INTO students (name,roll,dept,mother,father,mobilenumber,semester,sesionyear) VALUES ('$name','$roll','$dept','$mother','$father','$mobilenumber','$semster','$sessiony')";
mysqli_query($db_connect,$student_insert_query);
header('location:all_student.php')

?>