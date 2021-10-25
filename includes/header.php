<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php project</title>
    <link href="./../css/style.css" rel="stylesheet" >
</head>
<body>

<section>
    <main>
    <?php  if(isset($_SESSION['login_user'])){
                    ?>
        <nav>
            <div class="nav-header">
                <div></div>
              
                    <div>
                    <ul>
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="add_student.php">Add Student</a></li>
                        <li><a href="all_student.php">All Student</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>

        
               
            </div>
        </nav>
        <?php
            }
        ?>
    </main>
</section>

