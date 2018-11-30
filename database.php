<?php
$con = mysql_connect("localhost","root","123456");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);
$result = mysqli_connect("SELECT * FROM person");
while($row=mysql_fetch_array($result)){
  echo $row['firstname'].' '.$row['lastname'];
  echo "<br />";
}
?>