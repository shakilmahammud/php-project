<?php
session_start();
require_once('../includes/header.php');
if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
 ?>
 
     <div class="home-page form-page" >
         <form action="add_student_post.php" method="POST">
             <div>
                 <label for="name">Name</label>
                 <input type="text" name="name" id="name" placeholder="Enter Student Name">
             </div>
             <div>
                 <label for="roll">Roll</label>
                 <input type="text" name="roll" id="roll" placeholder="Enter Student Roll">
             </div>
             <div>
                 <label for="dept">Department</label>
                 <input type="text" name="dept" id="dept" placeholder="Enter Student Department">
             </div>
             <button type="submit" class="btn-std">Submit</button>
         </form>
     </div>

 <?php
 require_once('../includes/footer.php')
 ?>