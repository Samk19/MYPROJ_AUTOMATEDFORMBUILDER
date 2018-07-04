<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<div class="header">
		<h2>View Forms</h2>
	</div>
	<div class="content">
<?php
	session_start();

	$id=$_GET['form_id'];
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	
	$db = mysqli_connect('localhost', 'root', '', 'registration');


$sql = "DELETE FROM masterform where form_id=$id";
$result = $db->query($sql);
header("Location: index.php");

die();


$db->close();
?>
	</div>
		
        </body>
        </html>