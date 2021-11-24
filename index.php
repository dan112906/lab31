<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
</style>
</head>
<body>



<?php
//Form submitted
if(isset($_POST['submit'])) {
  //Error checking
  if(!$_POST['yourname']) {
    $error['yourname'] = "<p>Porfavor pon tu nombre.</p>\n";
  }

  //No errors, process
  if(!is_array($error)) {
    $dbhost = "20.121.205.92";
    $dbuser = "equipo3";
    $dbpass = "equipo3";
    $db = "personas";
   
   // Create connection
   $enlace = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   // Check connection
   if (!$enlace) {
      die("Connection failed: " . mysqli_connect_error());
   }
$nom = $_POST['yourname'];
$sql = "INSERT INTO DATOS VALUES ('"+$nom+"')";

if ($enlace->query($sql) === TRUE) {
  echo "<p>Nombre guardado con exito</p>\n";
} else {
  echo "<p>No se pudo guardar el nombre, intente de nuevo</p>\n";
}
mysqli_close($enlace);
    

    //Require or include any page footer you might have
    //here as well so the style of your page isn't broken.
    //Then exit the script.
    exit;
  }
}
?>

<h1>App web</h1>

<h2>Introduzca su nombre</h2>

<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <?=$error['yourname']?>
  <p><label for="yourname">Nombre:</label><input type="text" id="yourname" name="yourname" value="<?=($_POST['yourname'] ? htmlentities($_POST['yourname']) : '')?>" /></p>
  <p><input type="submit" name="submit" value="Guardar en la bd" /></p>
</form>


</body>
</html>
