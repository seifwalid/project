<?php
$servername= "localhost";
$username="seifwalid";
$password="123456";
$dbName="project";
// create connection
$conn =mysqli_connect($servername,$username,$password,$dbName);

//check conection
if (!$conn) {

  die ("connection failed !!!" . mysqli_connect_error());
}

//echo "connection success !!";
?>
