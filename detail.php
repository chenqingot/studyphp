<?php

$servername = "120.78.200.113";
$username = "chenqing";
$password = "chenqing123";
$DBName = "test";
$id = $_GET["id"];

$sql = "select * from article where id=".$id;
$con = mysqli_connect($servername, $username, $password, $DBName);
$result = mysqli_query($con,$sql,MYSQLI_STORE_RESULT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>钱币收藏</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="image/logo.ico">
</head>
<body>
<?php include 'header.php'; ?>

<div  style="text-align: center;">
    <?php
    while($row=mysqli_fetch_array($result)){
        echo '<p>标题：'.$row["title"].'</p>';
        echo '<p>正文：'.$row["content"].'</p>';
        echo '<p>分类：'.$row["category"].'</p>';
    }?>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
