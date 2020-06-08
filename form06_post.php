<?php session_start(); ?>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
 <form action="form06_redirect.php" method="POST">
 id_prac <input type="text" name="id_prac">
 nazwisko <input type="text" name="nazwisko">
 <input type="submit" value="Wstaw">
 <input type="reset" value="Wyczysc">
 </form>
 <?php
 if(isSet($_SESSION["fail"])&&($_SESSION["fail"]===1)){
   echo $_SESSION["info"];
   $_SESSION["info"]="";
  }
 ?>
 <br>
 <a href="form06_get.php">ListaPracowników</a> 
 </body>
 </html>
