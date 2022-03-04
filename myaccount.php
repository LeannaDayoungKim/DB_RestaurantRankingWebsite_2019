<?php
   @session_start();
   ?>
<!DOCTYPE html>
<HTML>
<HEAD><TITLE>
DANAWA </TITLE></
<BODY>
   <p style="margin-top:30px"></p>
   <p style="background-color: #E1A2FF">
   <font color="white" style="font-size:30pt"><b>DANAWA</b></p>
   <p style="margin-left: 600px">
   <font color="#F08080" style="font-size: 50pt"><i>My account</i></p>
   <form method="post" action="myaccount.php">
   <font color="black" style="font-size:20pt">
   <p style="margin-left: 575">
   <?php
   echo "USERID :".$_SESSION['id'];
   ?>
   <br><br>
   <?php
   echo "PASSWORD :".$_SESSION['password'];
   ?> 
   </form> 
   <form method = "post" action = "logout.php">
   <p align="center">
   <input type="submit" value="log out"></p>
   </form>
   <form method = "post" action = "delete.php">
   <p align="center">
   <input type="submit" value="delete account"></p>
   </form>
   <form method = "post" action = "changepw.php">
   <p align="center">
   <input type="submit" value="change password"></p>
   </form>
</BODY>
</HTML>