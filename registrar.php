<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1) {
	    $name = trim($_POST['name']);
	    $consulta = "INSERT INTO datos VALUES ('$name')";
	    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>Nombre guardado correctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3>No se pudo guardar el nombre, intente de nuevo</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>por favor complete el campo</h3>
           <?php
    }
}

?>
