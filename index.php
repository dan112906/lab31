<?php
 $dbhost = "20.121.205.92";
 $dbuser = "equipo3";
 $dbpass = "equipo3";
 $db = "personas";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
