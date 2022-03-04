<?php
@session_start();
$db = mysqli_connect('localhost','team21','team21','team21');

if(mysqli_connect_errno()){
	printf("Connect failed:%s\n",mysqli_connect_error());
	exit();
}
$did = $_SESSION['id'];
$dpw = $_SESSION['password'];

@session_destroy();


$sql = "delete from userInfo where password = '".$dpw."'";
$res = mysqli_query($db,$sql);
$sql = "delete from userID where ID ='".$did."'";
$res = mysqli_query($db,$sql);

mysqli_close($db);

print "<script language = javascript>alert('Your account is deleted.');location.replace('./home.php');</script>";
?>