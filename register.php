<header>
  <?php include 'header.php';?>
</header>
<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left" action="post_reg.php" method="post">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
          <div class="form-group">
						<label for="reg_username" class="sr-only">User name</label>
						<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="full name" required>
					</div>
          
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password" required>
					</div>
          
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password" required>
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email" required>
					</div>

				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right">Submit</i></button>
			</div>
			<div class="etc-login-form">
				<p>Already have an account? <a href="login.php">Login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
<footer>
      <?php include 'footer.php';?>
    </footer>