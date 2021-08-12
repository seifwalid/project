<<?php
function loginUser($conn,$username,$pwd){

  $userExists= userExists($conn,$username,$username);
  if($userExists === false){

    header("location:../login.php?error=userNotExist");
    exit();

  }

  $pwddb=$userExists["userPass"];
  $checkPwd=verify_password($pwd,$pwddb);
  if ($checkPwd === false) {
  header("location:../login.php?error=wrongpass");
  exit();
  }
  else if ($checkPwd === true) {
session_start();

$session["userName"]=$userExists["userName"];
header("location:../index.php");
exit();
  }
}


function userExists($conn, $username, $email) {

$sql="SELECT * FROM users WHERE userName=? OR userEmail=?; ";
$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../login.php?error=stmtfailed");
exit();
}
mysqli_stmt_bind_param($stmt,"ss",$username,$email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row=mysqli_fetch_assoc($resultData)) {
  return $row;
}
else {
 $result = false;
 return $result;
}
mysqli_stmt_close($stmt);
}


function verify_password($pwd,$pwddb){
$result;
 if ($pwd==$pwddb) {
   $result=true;

 }

else {
  $result =false;

}
return $result;
}


function emptyInputLogin($username,$pwd){
$result;
  if (empty($userName) || empty($pwd)) {
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}



 ?>
