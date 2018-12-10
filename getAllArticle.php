<?php
/**
 * Created by PhpStorm.
 * User: j-qinche
 * Date: 2018/12/10
 * Time: 14:58
 */

$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$DBName = "test";
$array = array();

$con = mysqli_connect($servername, $username, $password, $DBName);
if (!$con){
    die('Could not connect: ' . mysqli_error());
}

$result = mysqli_query($con,"SELECT * FROM article",MYSQLI_STORE_RESULT);

//mysqli_fetch_assoc
//mysqli_fetch_row
//mysqli_fetch_array
while($row=mysqli_fetch_assoc($result)){
    $array[] = $row;
}
echo json_encode($array, JSON_PRETTY_PRINT);