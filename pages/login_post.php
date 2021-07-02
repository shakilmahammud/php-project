<?php
require_once('../includes/db.php');
//reg use value grape
$email=$_POST["email"];
$password=md5($_POST["password"]);

$checking_query="SELECT COUNT(*) AS shakil FROM users WHERE email='$email' AND password='$password'";

$result=mysqli_query($db_connect,$checking_query);

$fetch_assoc=mysqli_fetch_assoc($result);

print_r($fetch_assoc);
//database connect

?>
