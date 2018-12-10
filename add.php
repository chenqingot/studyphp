<?php

$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "test";
$title = $_POST["title"];
$content = $_POST["content"];
$category = $_POST["category"];
$array = array();

$sql = "INSERT INTO article(title,content,category) values('".$title."','".$content."','".$category."')";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con){
  die('Could not connect: ' . mysqli_error());
}
mysqli_query($con, $sql);
$result = mysqli_query($con,"SELECT * FROM article",MYSQLI_STORE_RESULT);

while($row=mysqli_fetch_array($result)){
  $array[] = $row;
  echo json_encode($array, JSON_FORCE_OBJECT);
}