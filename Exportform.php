<?php  
$db = mysqli_connect('localhost', 'root', '', 'registration');

if($_POST){
         

	$a=array($_POST);
        
	
	$bm=array_values($_POST);
    //echo "<pre>";print_r($_FILES);
	$a=array_keys($_POST);
	//print_r($a);
	
	//echo count($a);
	$fg='';
	//$arr=array();
	$abc="";
	$de="";
	$tb=$_REQUEST['form_id'];
	$val1='';
	$val='';
	$sql = "SELECT  form_name, form_value FROM masterform where form_id=$tb";
$result = $db->query($sql);
echo $sql;
for($i=0;$i<count($a);$i++)
{
	//echo "ram";
	$val1=$val1.$bm[$i].'\''.($i==(count($a)-1)?"":",'");
	$de= $de.$a[$i].($i==(count($a)-1)?" ":",");
	$abc= $abc.$a[$i].' VARCHAR(30) NULL '.($i==(count($a)-1)?" ":",");
    
	
}
$val="'".$val1;
//echo $val;die;
//echo $abc;echo $tb;

$q="create table form".$tb."( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, ".$abc.")";
//$q9="create table form( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, ".$abc.")";
//echo $q;die;
//echo $de;die;
$q2="insert into form".$tb."(".$de.") values(".$val.")";


mysqli_query($db, $q);
mysqli_query($db, $q2);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$new = htmlspecialchars($row["form_value"]);

$en="form".$tb;
mkdir($en);
$target_dir = $en."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$myfile = fopen($en."/index.php", "w") or die("Unable to open file!");
$mysql = fopen($en."/database.sql", "w") or die("Unable to open file!");
$txt1=$q;
$txt3= "<h2><img src='".basename($_FILES["fileToUpload"]["name"])."' alt='logo' width='130' height='90
'/> &nbsp;".$row["form_name"]."</h2><br/><br/>";
$txt4= ("<input type='submit' value='Submit' class='btn btn-primary'></form>");
$head='<html>
<head>
	<title>'.$row["form_name"].'</title>
	<link rel="stylesheet"  href="bootstrap.min.css">
</head>
<body><div class="container"><div class="row"><div class="col-md-3"></div><div class="col-md-6" >';
$foot='</div></div></div></body></html>';
$txt = $head."\n".$txt3."\n<form method ='POST' action = 'phpForm.php' ><input type='hidden' name='tbl_name' value ='form$tb' />".$row["form_value"]."\n".$txt4.$foot ;
echo copy("phpForm.php",$en."/phpForm.php");
echo copy("NOTE IMPORTANT.txt",$en."/NOTE IMPORTANT.txt");
echo copy("css/bootstrap.min.css",$en."/bootstrap.min.css");
echo copy("connect.php",$en."/connect.php");
fwrite($myfile, $txt);
fwrite($mysql, $txt1);

	}
}
header("location:http://localhost/AptechProj/displayform2.php");


//echo $fg;

} else { ?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Form</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<div class="header" style="width: 700px">
		<h2>Preview Form</h2>
	</div>
	<div class="content" style="width: 700px">
		
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
	echo "<div style='width: 700px;'><form enctype='multipart/form-data' style='width: 400px; action ='' method='POST'>";
	while($row = $result->fetch_assoc()) {
		$new = htmlspecialchars($row["form_value"]);
                echo 'Insert Logo: <input name="fileToUpload" id="fileToUpload" type="file" />';                             
                echo "<br/><br/>";
		echo "<tr><td><h>==>Enter dummy value<==</h></td></tr><br/><br/>";
                echo'<div class="col-md-6" >';
		echo "<tr><td><u style='color:rgb(0, 47, 255);'>FORM NAME</u>:  ".$row["form_name"]."<br><br></td></tr><td></td><tr></tr><td>".$row["form_value"]."</td></tr><br><tr><td> <input type='submit' style='color: rgb(0, 47, 255); width:222px;height:40px; ' value='Export' name='submit' ></td></tr>";
		
		}
	echo "</table>";
	echo "</form>";
	echo "</div>";
} else {
    echo "0 results";

}
?>
<script type="text/javascript">
function clicked() {
    alert('Submit Pressed');
	
}
</script>
<?php
$db->close();
		}
?>
	</div>
		
        </body>
        </html>