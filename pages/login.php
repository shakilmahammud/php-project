<?php
 require_once('../includes/header.php')
 ?>
 <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" action="login_post.php" method="POST">
					<span class="login100-form-logo">
						<img src="../images/logo.png">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="email" placeholder="Email" require>
					</div>

					<div class="wrap-input100" >
						<input class="input100" type="password" name="password" placeholder="Password" require>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="btn-a">
                        <a href="reg.php">Create New Account</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
 <?php
 require_once('../includes/footer.php')
 ?>
