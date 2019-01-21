<?php
/**
 * Created by PhpStorm.
 * User: j-qinche
 * Date: 2018/12/10
 * Time: 14:58
 */

$servername = "120.78.200.113";
$username = "chenqing";
$password = "chenqing123";
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
echo json_encode((object) $array, JSON_PRETTY_PRINT);