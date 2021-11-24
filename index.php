<?php
 $dbhost = "20.121.205.92";
 $dbuser = "equipo3";
 $dbpass = "equipo3";
 $db = "personas";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 echo "conexion exitosa";
 
 $conn -> close();

?>
