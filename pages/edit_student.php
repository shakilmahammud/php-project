<?php
session_start();
require_once('../includes/header.php');
if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
require_once('../includes/db.php');
$student_id = $_GET['student_id'];
$single_student="SELECT * FROM students WHERE id=$student_id";
$student_get_single =mysqli_query($db_connect,$single_student);
$after_assoc_single_student = mysqli_fetch_assoc($student_get_single);
 ?>
 
     <div class="home-page form-page" >
         <h3>Edit Student</h3>
         <form action="edit_student_post.php" method="POST">
         <input type="text" name="id" id="id" placeholder="Enter Student Name" value="<?=$after_assoc_single_student['id']?>" style="display:none">
             <div>
                 <label for="name">Name</label>
                 <input type="text" name="name" id="name" placeholder="Enter Student Name" value="<?=$after_assoc_single_student['name']?>">
             </div>
             <div>
                 <label for="roll">Roll</label>
                 <input type="text" name="roll" id="roll" placeholder="Enter Student Roll" value="<?=$after_assoc_single_student['roll']?>">
             </div>
             <div>
                 <label for="dept">Department</label>
                 <input type="text" name="dept" id="dept" placeholder="Enter Student Department" value="<?=$after_assoc_single_student['dept']?>">
             </div>
             <button type="submit" class="btn-std">Update</button>
         </form>
     </div>

 <?php
 require_once('../includes/footer.php')
 ?>