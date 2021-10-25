<?php
require_once('../includes/db.php');
session_start();
//reg use value grape
$email=$_POST["email"];
$password=md5($_POST["password"]);

$checking_query="SELECT COUNT(*) AS shakil, name, email FROM users WHERE email='$email' AND password='$password'";

$result=mysqli_query($db_connect,$checking_query);

$fetch_assoc=mysqli_fetch_assoc($result);
$assoc_name=$fetch_assoc['name'];
$assoc_email=$fetch_assoc['email'];
if($fetch_assoc['shakil']==1){
$_SESSION['login_user']=  assoc_name;
$_SESSION['login_email']=  assoc_email;
header('location:dashboard.php');

}
else{
    echo "email or password invalid";
}
//database connect

?>
