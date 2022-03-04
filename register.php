<?php
@session_start();
$sex = 0;
if($_POST['sex']==="female"){
	$sex = 0;
}
else{
	$sex = 1;
}

$db = mysqli_connect('localhost','team21','team21','team21');

if(mysqli_connect_errno()){
	printf("Connect failed:%s\n",mysqli_connect_error());
	exit();
}

$sql = "select * from userID where ID ='".$_POST['newid']."'";
$res = mysqli_query($db,$sql);
if(mysqli_fetch_assoc($res)){
	print "<script language = javascript>alert('try another ID');history.back(-2);</script>";
}


do{
$temp = rand(1,999999);
$sql = "select * from userID where userID=".$temp;
$res = mysqli_query($db,$sql);
}while(mysqli_fetch_assoc($res)); 

mysqli_free_result($res);

$sql = "insert into userID values ('".$temp."','".$_POST['newid']."')";

$res = mysqli_query($db, $sql);

$sql = "insert into userInfo values ('".$temp."','".$_POST['newpassword']."','".$sex."')";
$res = mysqli_query($db,$sql);

if($res===TRUE){
	print "<script language = javascript>alert('Registered. Log in.');location.replace('./home.php');</script>";
}
else{
	print "<script language = javascript>alert('try again');history.back(-2);</script>";
}


mysqli_close($db);

?>