<?php

$servername = "120.78.200.113";
$username = "chenqing";
$password = "chenqing123";
$DBName = "test";

$con = mysqli_connect($servername, $username, $password, $DBName);
if (!$con){
    die('Could not connect: ' . mysqli_error());
}
$result1 = mysqli_query($con,"SELECT * FROM article where category=1",MYSQLI_STORE_RESULT);
$result2 = mysqli_query($con,"SELECT * FROM article where category=2",MYSQLI_STORE_RESULT);
$result3 = mysqli_query($con,"SELECT * FROM article where category=3",MYSQLI_STORE_RESULT);
$result4 = mysqli_query($con,"SELECT * FROM article where category=4",MYSQLI_STORE_RESULT);
$result5 = mysqli_query($con,"SELECT * FROM article where category=5",MYSQLI_STORE_RESULT);
$result6 = mysqli_query($con,"SELECT * FROM article where category=6",MYSQLI_STORE_RESULT);

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

<div class="con">
    <div class="zxzx content">
        <div class="title">
            最新资讯
        </div>
        <div class="list">
            <?
            while($row1=mysqli_fetch_array($result1)){
                echo '<a href="detail.php?id='.$row1['id'].'">'.$row1['title'].'</a>';
            }
            ?>
        </div>
    </div>
    <div class="fxyg content">
        <div class="title">
            发行预告
        </div>
        <div class="list">
            <?
            while($row=mysqli_fetch_array($result2)){
                echo '<a href="detail.php?id='.$row["id"].'">'.$row["title"].'</a>';
            }
            ?>
        </div>
    </div>
</div>
<div class="con">
    <div class="jnc content">
        <div class="title">
            纪念钞
        </div>
        <div class="list">
            <?
            while($row=mysqli_fetch_array($result3)){
                echo '<a href="detail.php?id='.$row["id"].'">'.$row["title"].'</a>';
            }
            ?>
        </div>
    </div>
    <div class="jnb content">
        <div class="title">
            纪念币
        </div>
        <div class="list">
            <?
            while($row=mysqli_fetch_array($result4)){
                echo '<a href="detail.php?id='.$row["id"].'">'.$row["title"].'</a>';
            }
            ?>
        </div>
    </div>
</div>
<div class="con">
    <div class="dst content" style="margin-right: 10px;">
        <div class="title">
            第四套人民币收藏百科
        </div>
        <div class="list">
            <?
            while($row=mysqli_fetch_array($result5)){
                echo '<a href="detail.php?id='.$row["id"].'">'.$row["title"].'</a>';
            }
            ?>
        </div>
    </div>
    <div class="dst content">
        <div class="title">
            第三套人民币收藏百科
        </div>
        <div class="list">
            <?
            while($row=mysqli_fetch_array($result6)){
                echo '<a href="detail.php?id='.$row["id"].'">'.$row["title"].'</a>';
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
