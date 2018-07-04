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
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label></label>
			<input type="text" name="username" placeholder='Username' required/ >
		</div>
		<div class="input-group">
			<label></label>
			<input type="password" name="password" placeholder='Password' required/ >
		</div>
		<div class="input-group" align="center">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member?<a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>