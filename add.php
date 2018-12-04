<?php

$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "test";
// $title = $_POST["title"];
// $content = $_POST["content"];
// $category = $_POST["category"];
$array = array();

// $sql = "INSERT INTO article(title,content,category) values('".$title."','".$content."','".$category."')";
$con = mysql_connect($servername, $username, $password);
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);
// mysql_query($sql);
$result = mysql_query("SELECT * FROM article");

while($row=mysql_fetch_array($result)){
  $array[] = $row;
  echo json_encode($array, JSON_FORCE_OBJECT);
}
?>
