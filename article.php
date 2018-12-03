姓 <?php echo $_POST["firstname"]; ?><br>
名 <?php echo $_POST["lastname"]; ?>

<?php

$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "test";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$sql = "INSERT INTO person(firstname,lastname) values('".$firstname."','".$lastname."')";
$con = mysql_connect($servername, $username, $password);
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);
mysql_query("$sql");
$result = mysql_query("SELECT * FROM person");
while($row=mysql_fetch_array($result)){
  echo $row['firstname'].' '.$row['lastname'];
  echo "<br />";
}
?>
