<?php
require_once('../includes/db.php');
//reg use value grape
$name=$_POST["name"];
$email=$_POST["email"];
$password=md5($_POST["password"]);

$checking_query="SELECT COUNT(*) AS email FROM users WHERE email='$email'";

$result=mysqli_query($db_connect,$checking_query);

$fetch_assoc=mysqli_fetch_assoc($result);

if($fetch_assoc['email']==1){
    
    echo "sorry this email already exit";
   
}
else{
    $Insert_query="INSERT INTO users(name,email, password) VALUES ('$name','$email','$password')";

   mysqli_query($db_connect,$Insert_query);

   header('location:login.php');
}



//database connect

?>