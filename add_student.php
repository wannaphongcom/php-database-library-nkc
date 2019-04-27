<?php
require_once("is_login.php");
require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เพิ่มข้อมูลนักเรียน : <?php echo $name_web;?></title>
    <?php include("header_web.php"); ?>
    <?php include("js.php"); ?>
</head>
<body>
    <?php include('nav.php');?>
    <div class="row">
    <div class="container">
        <h1 align="center">เพิ่มข้อมูลนักเรียน</h1>
        <form action="./save_add_student.php"  method="POST">
        <table>
        <tr>
        <tr><td>ชื่อ :</td> <td><input type="text" name="name" required></td></tr>
        <tr><td>ที่อยู่ :</td> <td><input type="text" name="address" required></td></tr>
        <tr><td>ปีเดือนวันเกิด :</td> <td><input type="date" name="dob" required></td></tr>
        <tr>
            <td>เพศ :</td>
            <td>
            <select required name="gender">
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
            </select>
            </td>
        </tr>
        <tr><td>เบอร์ :</td> <td><input type="tel" name="phone"></td></tr>
        <tr><td><input type="submit" value="Submit"></td></tr></table>
        </form><br>
    </div>
    </div>
    <?php include('footer.php');?>
</body>
</html>