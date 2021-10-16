 <?php
 require_once('../includes/header.php')
 ?>
 <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" action="reg_post.php" method="POST">
					<span class="login100-form-logo">
						<img src="../images/logo.png">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
                    Registation Form
					</span>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="name" placeholder="name" require>
					</div>
					<div class="wrap-input100 ">
						<input class="input100" type="email" name="email" placeholder="email" require>
					</div>

					<div class="wrap-input100" >
						<input class="input100" type="password" name="password" placeholder="Password" require>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Create
						</button>
					</div>

					<div class="btn-a">
						
                        <a href="login.php">Already have a account?</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
 <?php
 require_once('../includes/footer.php')
 ?>