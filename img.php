<?php
$url = $_GET['imgurl'];
/*
Conduct image verification, etc.
*/
$img_ext = get_ext($url); //Create function "get_ext()" that gets file extension
header('Content-type: image/' . $img_ext);
echo file_get_contents($url);
?>