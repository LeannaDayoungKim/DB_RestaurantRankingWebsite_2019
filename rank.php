<?php
@session_start();
 ?>
<!DOCTYPE html>
<HTML>
<HEAD><TITLE>
DANAWA </TITLE></
<BODY>
   <form method="post" action="ranked.php">
   <p style="margin-top:30px"></p>
   <p style="background-color: #E1A2FF">
   <font color="white" style="font-size:30pt"><b>DANAWA</b></p>
   <p align="center">
   <font color="#F08080" style="font-size: 50pt"><i>Rank the restaurant!</i><br></p>
   <p style="margin-left: 50px">
   <font color="black" style="font-size:20pt">
   ▶Restaurant Name : 
   <INPUT TYPE="text" NAME="name"><br>
   ▶Average Cost per Person : 
   <INPUT TYPE="text" NAME="cost"><br>
   ▶How many stars? : 
   ☆1<input type="radio" name="rank" value="1">
   ☆2<input type="radio" name="rank" value="2">
   ☆3<input type="radio" name="rank" value="3">
   ☆4<input type="radio" name="rank" value="4">
   ☆5<input type="radio" name="rank" value="5"><br>
   <input type="submit" value="submit"></p>
   </form>
</BODY>
</HTML>