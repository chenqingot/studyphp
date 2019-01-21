<?php

$servername = "120.78.200.113";
$username = "chenqing";
$password = "chenqing123";
$DBName = "test";
$id = $_GET["id"];
echo $id;

$sql = "select * from article where id=".$id;
$con = mysqli_connect($servername, $username, $password, $DBName);
$result = mysqli_query($con,$sql,MYSQLI_STORE_RESULT);

while($row=mysqli_fetch_array($result)){
    $array[] = $row;
    echo json_encode($array, JSON_FORCE_OBJECT);
}