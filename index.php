<!DOCTYPE html>
<html>
<head>
	<title>Registrar nombre</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Registro de nombres</h1>
    <form method="post">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>
