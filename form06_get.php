<?php
 session_start();
 $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
 if (!$link) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
 }
?>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
<?php
  if(isSet($_SESSION["fail"])&&($_SESSION["fail"]===0)){
   echo $_SESSION["info"];
   $_SESSION["info"]="";
  }
  echo "<br>";
  $sql = "SELECT * FROM pracownicy";
  $result = $link->query($sql);
  foreach ($result as $v) {
   echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
  }
  $result->free();
  $link->close();
?>
  <a href="form06_post.php">Wstawianie</a>
 </body>
 </html>
