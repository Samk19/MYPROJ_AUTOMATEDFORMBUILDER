<?php

session_start();

    $data=$_POST['album'];
	$errors = array(); 
	$_SESSION['success'] = "";

	
    $db = mysqli_connect('localhost', 'root', '', 'testdb');
    $query = "INSERT INTO form (data) 
					  VALUES('$data')";
			mysqli_query($db, $query);
?>