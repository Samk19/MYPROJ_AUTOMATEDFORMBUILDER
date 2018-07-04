<!DOCTYPE html>
<html>
<head>
<head>
	<title>import Forms</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet"  href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');


$sql = "SELECT form_id, form_name, form_value FROM masterform";
$result = $db->query($sql);

?>
<script>
$(document).ready(function(){
    $('.got').hide();
    $(".agf").click(function(){
        var g2 = $(this).attr('id');
			 $.ajax({type: "POST", url: "importformser.php",
        data: { form: g2},
        success: function(result){
            $("#12").append(result);
            $('.got').show();
        }
    });
        
});
$(".age").click(function(){
    var k = $( "#12" ).html();
    alert(k);
    var form_name = prompt("Please enter a name", "");
        if (form_name == "") {
            alert("Please Enter a Form Name");
        return false;}
        else if (form_name === null) {
        return false;
        }
        var g2 = $(this).attr('id');
			 $.ajax({type: "POST", url: "saveform.php",
                data: { album: k , alb1: form_name},
        success: function(result){
            $("#12").append(result);
            $('.got').show();
        }
    });
        
});
});
</script>
</head>
<body>
	<div class="header">
		<h2>IMPORT Forms</h2>
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
        <tr><td><?php  echo $row["form_id"]; ?></td><td> <?php echo $row["form_name"]; ?></td><td></td><td><p class='agf' id=<?php echo $row["form_id"] ?>  style="color: red;width:110px;height:22px;" >IMPORT</p></td></tr>
		
     <?php }
    echo "</table>";
} else {
    echo "0 results";

}
?>
<span class = 'got'><input class='age' style='color: rgb(0, 47, 255); width:60px;height:25px; ' type ='submit' value ="Submit"></span>
<div id = '12' class="con">

</div>

        
      

<?php
$db->close();
?>

    </div>
    
		
        </body>
</html>
