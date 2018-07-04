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


$sql = "SELECT form_id, form_name,form_value FROM masterform where form_id=$id";
$result = $db->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$new = htmlspecialchars($row["form_value"]);
		echo "<tr><td><u style='color:rgb(0, 47, 255);'>FORM NAME</u>: ".$row["form_name"]."<br><br></td></tr><td>".$row["form_value"]."</td><tr><td><br><h4 style='color:rgb(0, 47, 255);'>HTML CODE:</h4><br><div style='overflow:scroll; height:400px;'>".$new."</div></td></tr>";
		//header ("location:form.html?$a=$new");
		}
    echo "</table>";
} else {
    echo "0 results";

}
$db->close();
?>
	</div>
		
        </body>
        </html>