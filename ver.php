<?php

include ("validar.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>ver</title>
</head>
<body>
<fieldset>
<legend>DATOS</legend>
<?php
$Nombre = $_POST['nombre'];
$Telefono = $_POST['telefono'];
$Celular = $_POST['cel'];
$DOmicilio = $_POST['domicilio'];
echo "<h2>NOMBRE:</h2> <label>".$Nombre."</label>";
echo "<h2>TEL&Eacute;FONO:</h2> <label>".$Telefono."</label>";
echo "<h2>CELULAR:</h2> <label>".$Celular."</label>";
echo "<h2>DOMICILIO:</h2> <label>".$DOmicilio."</label>";
?>

<br/>
<br/>
<p> <a href="cerrarsesion.php?">Cerrar sesion</a></p>
	
<a href="index.php">IR A NUEVO</a>
</fieldset>
</body>
</html>