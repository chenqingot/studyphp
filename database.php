<?php
$con = mysqli_connect("localhost","root","123456");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysqli_select_db("test", $con);
$result = mysqli_query("SELECT * FROM person");
while($row=mysqli_fetch_array($result)){
  echo $row['firstname'].' '.$row['lastname'];
  echo "<br />";
}
?>