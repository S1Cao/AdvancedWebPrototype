<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<header>
  <?php include 'header.php';?>
</header>
<div class="text-center" style="padding:50px 0">
	<div class="logo">login</div>
	<div class="login-form-1">
		<form name="loginform" id="login-form" class="text-left" action="post_lg.php" method="post">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" name="username" placeholder="username" required>
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" name="password" placeholder="password" required>
					</div>
				</div>
				<input type = "submit" value = " Submit "/><br />
			</div>
			<div class="etc-login-form">
				<p>Forgot your password? <a href="forgotPw.php">Click here</a></p>
				<p>New user? <a href="register.php">Create new account</a></p>
        <p>Sign in with Google account <a href="loginGoogle.php">Click here</a></p>
			</div>
		</form>
    
    <footer>
      <?php include 'footer.php';?>
    </footer>
    
    <script>

    </script>
	</div>
</div>