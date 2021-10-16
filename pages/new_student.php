<?php
 require_once('../includes/header.php')
 ?>
<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
?>

<?php
 require_once('../includes/footer.php')
 ?>