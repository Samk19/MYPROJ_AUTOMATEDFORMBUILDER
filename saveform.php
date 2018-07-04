<?php 
	session_start();

	$data=$_POST['album'];
	$data2=$_POST['alb1'];
	$errors = array(); 
	$_SESSION['success'] = "";


	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	

		$query = "INSERT INTO masterform (form_name, form_value) 
					  VALUES('$data2','$data')";
			mysqli_query($db, $query);

		    
			$_SESSION['success'] = "Form Saved In Database";
			
			?>