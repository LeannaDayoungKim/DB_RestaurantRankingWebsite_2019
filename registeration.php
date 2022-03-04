<?php
@session_start();
 ?>
<!DOCTYPE html>
<HTML>
<HEAD><TITLE>
DANAWA</TITLE></
<BODY>
   <form method="POST" action = "resregister.php">
      <p style="margin-top:50p"></p>
      <p style="background-color:#C5F35A"><font color="#BD2470" style="font-size:40pt"><b><i>Register restaurant</b></i></p>
      <p style="margin-top: 100px"></p>
      <p style="margin-left: 50px"><font color="black" style="font-size:20pt">▶Restaurant Name : 
         <INPUT TYPE="TEXT" name="name"><br><br>
      ▶Select Location : 
      <select name="location">
         <option value="Gangnam-gu">Gangnam-gu
         <option value="Gangseo-gu">Gangseo-gu
         <option value="Yangcheon-gu">Yangcheon-gu
         <option value="Guro-gu">Guro-gu
         <option value="Dongjak-gu">Dongjak-gu
         <option value="Gwanak-gu">Gwanak-gu
         <option value="Seocho-gu">Seocho-gu
         <option value="Songpa-gu">Songpa-gu
         <option value="Gangdong-gu">Gangdong-gu
         <option value="Gwangjin-gu">Gwangjin-gu
         <option value="Seongdong-gu">Seongdong-gu
         <option value="Jung-gu">Jung-gu
         <option value="Yongsan-gu">Yongsan-gu
         <option value="Mapo-gu">Mapo-gu
         <option value="Seodaemun-gu">Nowon-gu
         <option value="Eunpyeong-gu">Eunpyeong-gu
         <option value="Gangbuk-gu">Gangbuk-gu
         <option value="Seongbuk-gu">Seongbuk-gu
         <option value="Dobong-gu">Dobong-gu
         <option value="Jungnang-gu">Jungnang-gu
         <option value="Nowon-gu">Seodaemun-gu
         <option value="Yeongdeungpo-gu">Yeongdeungpo-gu
         <option value="Geumcheon-gu">Geumcheon-gu
         <option value="Dongdaemun-gu">Dongdaemun-gu
         <option value="Jongno-gu">Jongno-gu
         </select>
      <br><br>
      ▶Type of food
      <select name="type">
         <option value="Korean">Korean
         <option value="Japanese">Japanese
         <option value="Western">Western
         <option value="Chinese">Chinese
         <option value="Asian">Asian
         <option value="Dessert">Dessert
         </select>
      <br><br>
      ▶How many stars? : 
      ☆1<input type="radio" name="rank" value="1">
      ☆2<input type="radio" name="rank" value="2">
      ☆3<input type="radio" name="rank" value="3">
      ☆4<input type="radio" name="rank" value="4">
      ☆5<input type="radio" name="rank" value="5">
      <br><br>
      ▶Cost per person : 
         <INPUT TYPE="TEXT" name="cost"><br><br>
      <INPUT TYPE="SUBMIT" VALUE="Submit">
   </form>
</BODY>
</HTML>