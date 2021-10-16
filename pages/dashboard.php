
<section class="home-bg">
 <h2>Student Management System </h2>
</section>
<?php
session_start();
require_once('../includes/header.php');
if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
?>

<p class="dasboard-text">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. A qui delectus labore reiciendis corporis quasi cumque excepturi impedit, aperiam, nisi porro suscipit vitae. Voluptatem, aperiam autem corrupti doloremque ut quibusdam ea quas libero tempora omnis odit, accusantium ipsum! Ut ducimus id rerum nihil consequatur debitis voluptatem corrupti molestiae neque beatae, quaerat numquam praesentium magnam sed sapiente. Fugit vel soluta aliquid hic totam ea, aspernatur eligendi, ducimus tenetur natus reprehenderit explicabo ut eius voluptatum error? Consequatur libero non nobis deserunt rem distinctio delectus consectetur sed hic corporis consequuntur atque ipsa cupiditate, inventore laboriosam reiciendis voluptate ullam esse aperiam sapiente voluptates incidunt aliquam eveniet neque. Perspiciatis quam soluta voluptates labore consequuntur voluptatum officia quae, suscipit ducimus numquam repellendus ipsa pariatur veritatis cupiditate temporibus sed dolorum nesciunt quidem? Illo eveniet exercitationem laboriosam dolor consectetur, aspernatur, modi maxime aliquam id corporis itaque vitae voluptatum temporibus sed, ipsum ut quibusdam reiciendis suscipit ipsa in dolore!
</p>

<?php
 require_once('../includes/footer.php')
 ?>