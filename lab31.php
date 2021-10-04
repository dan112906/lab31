<?php
$enlace = mysql_connect('40.71.126.219:3306', 'root',  'pelusa');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>
