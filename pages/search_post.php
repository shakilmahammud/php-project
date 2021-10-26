<?php
session_start();
require_once('../includes/header.php');
if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
require_once('../includes/db.php');

 ?>
<?php
	$query = $_GET['query']; 
	// gets value sent over search form
if(isset($query)){ 
$searchKey = $query;					
$sql ="SELECT * FROM students WHERE name LIKE '%$searchKey%'OR roll LIKE '%$searchKey%'
OR dept Like '%$searchKey%'OR mother Like '%$searchKey%'OR mother Like '%$searchKey%' OR father Like '%$searchKey%' OR mobilenumber Like '%$searchKey%'OR semester Like '%$searchKey%'";
}
else {
    $sql ="SELECT * FROM user_registration";
    $searchKey = "";
	}
$result = mysqli_query($db_connect,$sql);
$count = mysqli_num_rows($result);
if ($count==0) {
  echo '<h1>Sorry Nothing Found In Our Database</h1>';
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
     <h2>Search Student </h2>
		<input type="text" name="query"  required/>
		<input type="submit" value="Search" />
	</form>
<h2>Search Student View</h2>
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
while($row=mysqli_fetch_array($result))
{
		 ?>
	<tr>
    <td><?=$row['name']?></td>
    <td><?=$row['father']?></td>
    <td><?=$row['mother']?></td>
    <td><?=$row['mobilenumber']?></td>
    <td><?=$row['roll']?></td>
    <td><?=$row['dept']?></td>
    <td><?=$row['semester']?></td>
    <td><?=$row['sesionyear']?></td>

    <td>
    <div class="btn-group">
  <a href="edit_student.php?student_id=<?=$row['id']?>" type="button"> <button>Edit</button></a>
  <a href="delete_student.php?student_id=<?=$row['id']?>" type="button"> <button>Delete</button></a>
</div>
    </td>
  </tr>
<?php } ?>
</table>
     </div>
<?php
 require_once('../includes/footer.php')
 ?>