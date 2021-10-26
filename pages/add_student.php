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
                 <label for="name">Student Name</label>
                 <input type="text" name="name" id="name" placeholder="Enter Student Name">
             </div>
             <div>
                 <label for="m_name"> Mather Name</label>
                 <input type="text" name="mname" id="m_name"" placeholder="Enter Mather Name">
             </div>
             <div>
                 <label for="f_name"> father Name</label>
                 <input type="text" name="fname" id="f_name" placeholder="Enter father Name">
             </div>
             <div>
                 <label for="number"> Mobile Number</label>
                 <input type="text" name="number" id="f_name" placeholder="Enter father Name">
             </div>
             <div>
                 <label for="roll">Roll</label>
                 <input type="text" name="roll" id="roll" placeholder="Enter Student Roll">
             </div>
             <div>
                 <label for="dept">Department</label>
                 <input type="text" name="dept" id="dept" placeholder="Enter Student Department">
             </div>
             <div>
                 <label for="sem">Semester</label>
                 <input type="text" name="sem" id="dept" placeholder="Enter Student Semester">
             </div>
             <div>
                 <label for="sess">session</label>
                 <input type="text" name="sess" id="dept" placeholder="Enter Student Session">
             </div>
             <button type="submit" class="btn-std">Add Student</button>
         </form>
     </div>

 <?php
 require_once('../includes/footer.php')
 ?>