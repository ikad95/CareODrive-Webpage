<?php 
  $time =  time();
  echo date('Y-m-d h:i:s a', time());
  echo "<br>";
  if(isset($_POST["date"])){
    echo "\n".$_POST['date'];
    $date=$_POST["date"];
    //echo "\n".$_POST['date'];
  }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
 <form method="post" action="y.php">
   <input type="date" name="date" id="date">
   <input type="time" name="time" id="time">
   <input type="submit">
 </form>
 </body>
 </html>