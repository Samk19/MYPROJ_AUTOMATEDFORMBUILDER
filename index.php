<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet"  href="css/style.css">
        <style>
table, th, td {
    border: 1px solid black;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <div class="topnav-right">
    <a href="form.html">Create Form</a>
    <a href="import.php">Merge Form</a>
    <a href="index.php?logout='1'">Logout</a>
  </div>
</div>

	<div class="content1">

		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			
		<?php endif ?>
                        <?php
	

	
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	
	$db = mysqli_connect('localhost', 'root', '', 'registration');


$sql = "SELECT form_id, form_name, form_value, created_on FROM masterform";
$result = $db->query($sql);

if ($result->num_rows > 0) {
   echo "<br/><table style='width:100%'><tr><th>ID</th><th>Form Name</th><th>Created On</th><th>Actions</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
                        <tr><td><?php  echo $row["form_id"]; ?></td><td> <?php echo $row["form_name"]; ?></td><td><?php echo $row["created_on"]; ?></td><td><p> <a href="viewform.php?form_id=<?php echo $row["form_id"]; ?>" style="color: red;text-decoration: none;">View    </a><a href="Exportform.php?form_id=<?php echo $row["form_id"]; ?>" style="color: red;text-decoration: none;">Export    </a><a href="remove.php?form_id=<?php echo $row["form_id"]; ?>" style="color: red;text-decoration: none;">Remove    </a></p></td></tr>
     <?php }
    echo "</table>";
} else {
    echo "0 results";

}

$db->close();
?>
	</div>
    
		
</body>
</html>