<?php
session_start();
require_once('../includes/header.php');
if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
 ?>
 <style>
table, th, td {
  border:1px solid black;
  text-align:center;
}
.btn-group button {
  background-color: #04AA6D; /* Green background */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
   margin-right: 10px;
}
</style>
     <div class="home-page form-page" >
     <form action="search_post.php" method="GET">
     <h2>Search Student</h2>
		<input type="text" name="query"  required/>
		<input type="submit" value="Search" />
	</form>
<h2>All Student</h2>
<table style="width:100%">
  <tr>
    <th scope="col">Name</th>
    <th scope="col">Father Name</th>
    <th scope="col">Mother Name</th>
    <th scope="col">Mobile Number</th>
    <th scope="col">Roll</th>
    <th scope="col">Department</th>
    <th scope="col">Semester</th>
    <th scope="col">Session</th>
    <th scope="col">Action</th>
  </tr>
 
<?php
require_once('../includes/db.php');

$all_student_get = "SELECT * FROM students";

$result_query = mysqli_query($db_connect,$all_student_get);

foreach($result_query  as $student){
    ?>
    <tr>
    <td><?=$student['name']?></td>
    <td><?=$student['father']?></td>
    <td><?=$student['mother']?></td>
    <td><?=$student['mobilenumber']?></td>
    <td><?=$student['roll']?></td>
    <td><?=$student['dept']?></td>
    <td><?=$student['semester']?></td>
    <td><?=$student['sesionyear']?></td>
    <td>
    <div class="btn-group">
  <a href="edit_student.php?student_id=<?=$student['id']?>" type="button"> <button>Edit</button></a>
  <a href="delete_student.php?student_id=<?=$student['id']?>" type="button"> <button>Delete</button></a>
</div>
    </td>
  </tr>
    <?php
}

?>

</table>
     </div>

 <?php
 require_once('../includes/footer.php')
 ?>