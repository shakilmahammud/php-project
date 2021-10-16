<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="learning";
// Create connection
$db_connect = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($db_connect->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Get Method  successfully";
?>
