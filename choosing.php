<?php
@session_start();
 ?>

<!DOCTYPE html>
<HTML>
<HEAD><TITLE>
DANAWA</TITLE></
<BODY>
   <p style="margin-top:100px" align="center"><font color="#AB1297" style="font-size:40pt"><b><i>What would you like to do?</b></i></p>
   <form method = "post" action = "locationselection.php">
   <p style="margin-top: 100px" align="center"><font color="black" style="font-size:20pt">Restaurant list
   <INPUT TYPE="SUBMIT" VALUE="select"></p>
   </form>
   <form method = "post" action = "registeration.php">
   <p style="margin-left:575px">Register new restuarant
   <INPUT TYPE="SUBMIT" VALUE="select"></p>
   </form><br>
   <form method = "post" action = "myaccount.php">
   <p align="center">
   <INPUT TYPE="SUBMIT" VALUE="My account"></p>
   </form>
   <form method = "post" action = "logout.php">
   <p align="center">
   <input type="submit" value="log out"></p>
   </form>
</BODY>
</HTML>