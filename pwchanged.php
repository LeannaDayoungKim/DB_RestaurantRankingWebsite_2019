<?php
@session_start();

$db = mysqli_connect('localhost','team21','team21','team21');

if(mysqli_connect_errno()){
   printf("Connect failed:%s\n",mysqli_connect_error());
   exit();
}

mysqli_begin_transaction($db,MYSQLI_TRANS_START_READ_WRITE);

mysqli_query($db,"update userInfo set password = '".$_POST['chpassword']."' where password = '".$_SESSION['password']."'");
mysqli_commit($db);

mysqli_close($db);

print "<script language = javascript>alert('Your password is changed. Log in again.');location.replace('./home.php');</script>";
 ?>