<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form System</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label></label>
			<input type="text" name="username" value="<?php echo $username; ?>" placeholder='Username' required/>
		</div>
		<div class="input-group">
			<label></label>
			<input type="email" name="email" value="<?php echo $email; ?>"placeholder='Email' required/>
		</div>
		<div class="input-group">
			<label></label>
			<input type="password" name="password_1" placeholder='Password' required/>
		</div>
		<div class="input-group">
			<label></label>
			<input type="password" name="password_2" placeholder='Confirm password' required/>
		</div>
		<div class="input-group" align="center">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>