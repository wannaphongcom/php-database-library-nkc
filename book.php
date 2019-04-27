<?php
require_once("is_login.php");
require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>รายการหนังสือ : <?php echo $name_web;?></title>
    <?php include("header_web.php"); ?>
    <?php include("js.php"); ?>
</head>
<body>
<?php include('nav.php');?>
    <div class="row">
    <div class="container">
      <h1 align="center">รายการหนังสือ</h1>
      <a href="./add_book.php"><button>เพิ่มหนังสือ</button></a>
    <?php
        require("db.php");
	    $sql = "SELECT * FROM Books";
        $query = mysqli_query($con,$sql);
        $rowcount=mysqli_num_rows($query);
        if($rowcount== 0){
            echo "<br>ไม่มีหนังสือให้ยืม";
         }
        else{
        if (isset($_COOKIE['studentid']))
        {
        ?>
    <b>รหัสนักเรียน : <?php echo $_COOKIE['studentid']; ?></b>
    <?php }?>
    <table>
        <tr>
        <th>รหัส</th>
        <th>รูป</th>
        <th>ชื่อหนังสือ</th>
        <th>รายละเอียด</th>
        <th>ลบหนังสือ</th>
        <?php
        if (isset($_COOKIE['studentid']))
        {
        ?>
        <th>ืยมหนังสือ</th>
        <?php }?>
    </tr>
    <?php
    while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
    {
    ?>
    <tr>
        <td><?php echo $result["BookId"];?></td>
        <td><?php 
        if(!IsNullOrEmptyString($result["image"])){
            echo '<img src="images/'.$result["image"].'" class="responsive">';
        }
        ?></td>
        <td><?php echo $result["Namebooks"];?></td>
        <td><a href="./detail_book.php?bookid=<?php echo $result["BookId"];?>"><button>รายละเอียด</button></a></td>
        <td><a href="./del_book.php?bookid=<?php echo $result["BookId"];?>"><button onclick="return confirm('คุณแน่ใจว่าต้องการลบ ?')">คลิก</button></a></td>
        <?php
        if (isset($_COOKIE['studentid']))
        {
        ?>
        <td><a href="./borrowbook.php?bookid=<?php echo $result["BookId"];?>"><button>ยืม</button></a></td>
        <?php
        }
        ?>
  </tr>
    <?php
    }
    }
    ?>
</table>
<?php

?>
<br>
<?php
    if (isset($_COOKIE['studentid']))
    {
        ?>
        <form method="GET" action="./borrowbook.php">
        <br>Book ID : <input type="text" name="bookid"><br>
        <input type="submit" value="Submit">
        </form>
<?php } ?>
</div>
</div>
    <?php include('footer.php');?>
</body>
</html>