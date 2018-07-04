<?php
include "connect.php";  


if($_POST){
	//echo "<pre>";print_r($_POST);die;
	$tbname=$_POST['tbl_name'];
	$a=array($_POST);
	$a=array_keys($_POST);
	 //print_r($a);
	 
	$bm=array_values($_POST);
	//echo "<pre>";print_r($bm);die;
	
	//print_r($a);
	//$exit;
	//echo count($a);
	$fg='';
	//$arr=array();
	$abc="";
	$de="";
	$val1='';
	$val='';

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
$q="create table ".$tbname."( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, ".$abc.")";
//echo $q;die;
//echo $de;die;


	//echo "yee";die;
$q2="insert into ".$tbname."(".$de.") values(".$val.")";

//echo $q2;
mysqli_query($db, $q);
if(mysqli_query($db, $q2))
{
	echo "data inserted";
}
else{
	echo "data not inserted";
}


 } else { }
?>
