<?php

@session_start();

$id = $_POST['id'];
$password = $_POST['password'];


$db = mysqli_connect('localhost','team21','team21','team21');

if(mysqli_connect_errno()){
	printf("Connect failed:%s\n",mysqli_connect_error());
	exit();
}

$sql = "select ID,password from userID inner join userInfo on userID.userID = userInfo.userID where userID.ID='".$id."'";

$res = mysqli_query($db, $sql);
$log = mysqli_fetch_assoc($res);


if(($log['ID']=== $id)&($log['password']===$password)){
	$_SESSION['id'] = $id;
	$_SESSION['password'] = $password;
	header("location:./choosing.php");
}
else{
	print "<script language = javascript>alert('check your id and password');history.back(-2);</script>";
}

mysqli_close($db);

?>
