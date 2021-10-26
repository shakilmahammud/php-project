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
                 <label for="m_name"> Mather Name</label>
                 <input type="text" name="mname" id="m_name"" placeholder="Enter Mather Name"  value="<?=$after_assoc_single_student['mother']?>">
             </div>
             <div>
                 <label for="f_name"> father Name</label>
                 <input type="text" name="fname" id="f_name" placeholder="Enter father Name"  value="<?=$after_assoc_single_student['father']?>">
             </div>
             <div>
                 <label for="number"> Mobile Number</label>
                 <input type="text" name="number" id="f_name" placeholder="Enter father Name"  value="<?=$after_assoc_single_student['mobilenumber']?>">
             </div>
             <div>
                 <label for="roll">Roll</label>
                 <input type="text" name="roll" id="roll" placeholder="Enter Student Roll" value="<?=$after_assoc_single_student['roll']?>">
             </div>
             <div>
                 <label for="dept">Department</label>
                 <input type="text" name="dept" id="dept" placeholder="Enter Student Department" value="<?=$after_assoc_single_student['dept']?>">
             </div>
             <div>
                 <label for="sem">Semester</label>
                 <input type="text" name="sem" id="dept" placeholder="Enter Student Semester"  value="<?=$after_assoc_single_student['semester']?>">
             </div>
             <div>
                 <label for="sess">session</label>
                 <input type="text" name="sess" id="dept" placeholder="Enter Student Session"  value="<?=$after_assoc_single_student['sesionyear']?>">
             </div>
             <button type="submit" class="btn-std">Update</button>
         </form>
     </div>

 <?php
 require_once('../includes/footer.php')
 ?>