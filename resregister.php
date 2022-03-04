<?php
@session_start();

$pn = strtolower($_POST["name"]);
$pt = $_POST["type"];
$pl = $_POST["location"];


$db = mysqli_connect('localhost','team21','team21','team21');

if(mysqli_connect_errno()){
	printf("Connect failed:%s\n",mysqli_connect_error());
	exit();
}
$sql = "select * from resInfo inner join restaurantID on restaurantID.resID = resInfo.resID inner join location on resInfo.locID = location.locID inner join type on resInfo.typeID = type.typeID where (restaurantID.name, type.type, location.location)= ('".$pn."','".$pt."','".$pl."')";
$res = mysqli_query($db,$sql);

if(mysqli_fetch_assoc($res)){
	print "<script language = javascript>alert('Already registered. Rank the restaurant.');location.replace('./choosing.php');</script>";
}
else{
do{
$temp = rand(1,999999);
$sql = "select * from restaurantID where resID=".$temp;
$res = mysqli_query($db,$sql);
}while(mysqli_fetch_assoc($res)); 

$sql = "insert into restaurantID values ('".$temp."','".$pn."')";
$res = mysqli_query($db,$sql);

$sql = "select typeID from type where type = '".$pt."'";
$res = mysqli_query($db,$sql);
$log = mysqli_fetch_assoc($res);
$tid = $log['typeID'];

$sql = "select locID from location where location ='".$pl."'";
$res = mysqli_query($db,$sql);
$log = mysqli_fetch_assoc($res);
$lid = $log['locID'];

$tr = (int)$_POST['rank'];
$tc = (int)$_POST['cost'];

$sql = "insert into resInfo values ('".$temp."','".$lid."','".$tid."','".$tr."','".$tc."')";
$res = mysqli_query($db,$sql);
if($res){
	print "<script language = javascript>alert('Registered. Thank you :)');location.replace('./choosing.php');</script>";
}
}
mysqli_close($db);

?>