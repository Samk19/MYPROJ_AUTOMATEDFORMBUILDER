<?php 
	session_start();

	$data=$_POST['form'];
	$errors = array(); 
	$_SESSION['success'] = "";


	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	

	$sql = "SELECT form_value FROM masterform where form_id=$data";
	$result = $db->query($sql);
	while ($row=mysqli_fetch_array($result)) {
	     echo $row ['form_value'];
	}

			?>