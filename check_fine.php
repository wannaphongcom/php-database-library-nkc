<?php
require_once("check_studentid.php");
require_once("is_login.php");
require_once("db.php");
require("config.php");
$id=$_GET["borrowid"];
$sql = "SELECT Deadlines FROM student_not_return WHERE BorrowId=".$id;
$query = mysqli_query($con,$sql);
$rowcount=mysqli_fetch_array($query);
$datetime1 = new DateTime(date("Y-m-d"));
$datetime2 = new DateTime($rowcount["Deadlines"]);
$fine_cal=0;
if($datetime1>$datetime2){
    $fine_cal=(int)$datetime1->diff($datetime2)->format("%a");
    $fine_cal=$fine*$fine_cal;
    echo "ค่าปรับ : ".$fine_cal;
    
}
echo '<a href="./return.php?borrowid='.$id.'&damages='.$fine_cal.'">คืนหนังสือ</a>';
?>