<?php

if (isset($_POST["submit"])) {
$username= $_POST["name"];
$pwd =$_POST["pwd"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';



loginUser($conn , $username,$pwd);

}

else {
  header("location:../login.php");
  exit();
}



 ?>
