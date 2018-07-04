<!DOCTYPE html>
<html>
<head>
	<title>Display Forms</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<div class="header">
		<h2>Pre-registered Forms</h2>
	</div>
	<div class="content">
 <?php
	session_start();

	
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	
	$db = mysqli_connect('localhost', 'root', '', 'registration');


$sql = "SELECT form_id, form_name, form_value FROM masterform";
$result = $db->query($sql);

if ($result->num_rows > 0) {
   echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
        <tr><td><?php  echo $row["form_id"]; ?></td><td> <?php echo $row["form_name"]; ?></td><td></td><td><p> <a href="viewform.php?form_id=<?php echo $row["form_id"]; ?>" style="color: red;">VIEW</a> </p></td></tr>
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