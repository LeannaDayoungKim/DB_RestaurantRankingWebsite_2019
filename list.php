<?php
@session_start();

echo "<HTML>";
echo "<HEAD><TITLE>";
echo "DANAWA </TITLE></";
echo "<BODY>";
 echo "<p style=\"margin-top:30px\"></p>";
   echo "<p style=\"background-color: #E1A2FF\">";
   echo "<font color=\"white\" style=\"font-size:30pt\"><b>DANAWA</b></p>";
   echo "<p align=\"center\"><font color=\"#005766\" style=\"font-size: 30pt\">";
   echo "restaurant list</p>";
      echo "<center>";
      echo "<table width='800' border=1>";
         echo "<tr>";
            echo "<td width='5%'><b>no.</b></td>";
            echo "<td width='25%'><b>name</b></td>";
            echo "<td width='20%'><b>location</b></td>";
            echo "<td width='15%'><b>type</b></td>";
            echo "<td width='20%'><b>stars</b></td>";
            echo "<td width='15%'><b>average cost per person</b></td>";
         echo "</tr>";
      echo "</table>";
echo "</BODY>";
echo "</HTML>";


$db = mysqli_connect('localhost','team21','team21','team21');

if(mysqli_connect_errno()){
	printf("Connect failed:%s\n",mysqli_connect_error());
	exit();
}
if(($_POST['location']==="All")&($_POST['type']==="All")){
	$sql = "select * from resInfo inner join restaurantID on restaurantID.resID = resInfo.resID inner join location on resInfo.locID = location.locID inner join type on resInfo.typeID = type.typeID";
}
elseif($_POST['type']==="All"){
	$sql = "select * from resInfo inner join restaurantID on restaurantID.resID = resInfo.resID inner join location on resInfo.locID = location.locID inner join type on resInfo.typeID = type.typeID where location.location ='".$_POST['location']."'";
}
elseif($_POST['location']==="All"){
	$sql = "select * from resInfo inner join restaurantID on restaurantID.resID = resInfo.resID inner join location on resInfo.locID = location.locID inner join type on resInfo.typeID = type.typeID where type.type='".$_POST['type']."'";
}
else{
	$sql = "select * from resInfo inner join restaurantID on restaurantID.resID = resInfo.resID inner join location on resInfo.locID = location.locID inner join type on resInfo.typeID = type.typeID where type.type= '".$_POST['type']."' and location.location ='".$_POST['location']."'";
}

$res = mysqli_query($db,$sql);

$i = 0;

if($res){
	while($newArray = mysqli_fetch_array($res,MYSQLI_ASSOC)){
		$name = $newArray['name'];
		$type = $newArray['type'];
		$location = $newArray['location'];
		$avgRank = $newArray['avgRank'];
		$avgCost = $newArray['avgCost'];
		$i = $i+1;

		echo "<center>";
      echo "<table width='800' border=1>";
         echo "<tr>";
            echo "<td width='5%'><b>".$i."</b></td>";
            echo "<td width='25%'><b>".$name."</b></td>";
            echo "<td width='20%'><b>".$location."</b></td>";
            echo "<td width='15%'><b>".$type."</b></td>";
            echo "<td width='20%'><b>".$avgRank."</b></td>";
            echo "<td width='15%'><b>".$avgCost."</b></td>";
         echo "</tr>";
      echo "</table>";


	}
}
echo "<form method = \"post\" action = \"rank.php\">";
  echo "<p align=\"center\">";
   echo "<input type=\"submit\" value=\"rank\"></p>";
   echo "</form>";

echo "<form method = \"post\" action = \"logout.php\">";
  echo "<p align=\"center\">";
   echo "<input type=\"submit\" value=\"log out\"></p>";
   echo "</form>";

   $sql = "select location, avg(avgCost) lac from resInfo inner join location on resInfo.locID = location.locID group by location";
   $res = mysqli_query($db,$sql);
   while($log = mysqli_fetch_array($res, MYSQLI_ASSOC)){
   	echo"<font color =\"black\" style = \"font-size:20pt\">";
   	echo "location: ".$log['location']."///average Cost:".$log['lac']."<br/>";
   }
   mysqli_close($db);



?>