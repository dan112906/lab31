<?php
//include connection
include("conectar.php");

if(isset($_POST['submit']))
{

$nom = $_POST['element_1'];
  
$stmt = $con->prepare("INSERT INTO datos VALUES (?)");
$stmt->bind_param($nom);
$stmt->execute();
} 

if ($stmt->error)
	{
echo '<script>'; 
echo 'alert("Error");'; 
echo 'window.location = "index.php";';
echo '</script>';
    }
    else
    {
echo '<script>'; 
echo 'alert("Nombre Registrado correctamente");'; 
echo 'window.location = "index.php";';
echo '</script>';
    }
$stmt->close();
?>  