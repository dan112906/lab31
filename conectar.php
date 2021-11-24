<?php 

    $dbhost = "20.121.205.92";
    $dbuser = "equipo3";
    $dbpass = "equipo3";
    $db = "personas";
   
   // Create connection
   $con = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   // Check connection
   if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
   }

?>