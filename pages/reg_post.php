<?php
require_once('../includes/db.php');
//reg use value grape
$name=$_POST["name"];
$email=$_POST["email"];
$password=md5($_POST["password"]);

$Insert_query="INSERT INTO users(name,email, password) VALUES ('$name','$email','$password')";

mysqli_query($db_connect,$Insert_query);

echo "done";

//database connect

?>