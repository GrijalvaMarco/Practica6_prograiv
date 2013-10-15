<!DOCTYPE html>
<html lang="es">
<head>
<title>CONTROL DE SESIONES</title>
<meta charset="UTF-8">
<meta name="description" content="CONTROL DE LAS SESIONES "/>
<meta name="author" content="" />

</head>
<body>
<?php
if (isset($_POST['codigo']) && isset($_POST['contra']))
    {
    if (($_POST['codigo']=="100")&&($_POST['contra']=="udg") )
        {
        session_start();
        $_SESSION['codigo']="0569";
        header("location:index.php");
        }
    else
        header("location:index.php");
 
    }
else
?>
 <form method="POST" action="control.php">
	<fieldset>
		<legend>LOGIN</legend>
		<label id="lblcodigo">C&oacute;digo</label><br/>
		<input type="text" name="codigo" id="txtcodigo" size="20" maxlength="20" required><br/>
		<label id="lblcontraseña">Contrase&ntilde;a</label><br/>
		<input type="password" name="contra" id="pass" size="20" maxlength="20" required><br/>
		<input type="submit" name="btnenviar" value="ENVIAR" required>
	</fieldset>
	</form>
	<?php
?>
</body>
</html>