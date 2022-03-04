<?php
@session_start();
$db = mysqli_connect('localhost','team21','team21','team21');

if(mysqli_connect_errno()){
   printf("Connect failed:%s\n",mysqli_connect_error());
   exit();
}
$sql = "select resID from restaurantID where name = '".$_POST['name']."'";
$res = mysqli_query($db,$sql);
$temp = mysqli_fetch_assoc($res);
$rid = $temp['resID'];

$sql = "select avgCost from resInfo where resID ='".$rid."'";
$res = mysqli_query($db,$sql);
$temp = mysqli_fetch_assoc($res);
$bef = $temp['avgCost'];

$sql = "update resInfo set avgCost= (".$bef."+".$_POST['cost'].")/2 where resID = ".$rid;
$res = mysqli_query($db,$sql);

$sql = "select avgRank from resInfo where resID ='".$rid."'";
$res = mysqli_query($db,$sql);
$temp = mysqli_fetch_assoc($res);
$bef = $temp['avgRank'];

$sql = "update resInfo set avgRank= (".$bef."+".$_POST['rank'].")/2 where resID = ".$rid;
$res = mysqli_query($db,$sql);

if($res ==TRUE){
	print "<script language = javascript>alert('Thanks for your ranking.');location.replace('./choosing.php');</script>";
	}
	mysqli_close($db);

?>