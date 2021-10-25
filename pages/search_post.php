<?php
session_start();
require_once('../includes/header.php');
if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
require_once('../includes/db.php');

 ?>

<?php
 require_once('../includes/footer.php')
 ?>