<?php
date_default_timezone_set("Asia/Bangkok");
$user="root";
$password="123456789";
$host="127.0.0.1";
$db="dbnkc";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
mysqli_set_charset($con,"utf8");
?>
