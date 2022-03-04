<?php 
@session_start();?>
<!DOCTYPE html>
<HTML>
<HEAD><TITLE>
DANAWA </TITLE></
<BODY>
   <p style="margin-top:30px"></p>
   <p style="background-color: #E1A2FF" align="center">
   <font color="white" style="font-size:55pt"><b>DANAWA</b></p><br>
   <form method="post" action="login.php">
   <font color="black" style="font-size:20pt">
   <p align="center">
   USERID
   <INPUT TYPE="TEXT" NAME="id">
   PASSWORD
   <INPUT TYPE="password" NAME="password">
   </p>
   <p align="center">
   <input type="submit" value="login"></p>   
   </form>
   <form method = "post" action = "registerpg.php">
   <p align="center"><input type="SUBMIT" value="sign up"></p>
   </form>
</BODY>
</HTML>