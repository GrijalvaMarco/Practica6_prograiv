<head>
<title>Validando usuarios en PHP</title>
<meta charset="UTF-8">
<meta name="description" content="cerrar sesion"/>
<meta name="author" content="" />
</head>
<body>
<?php
include ("validar.php");
session_unset();
session_destroy();
?>
<h1>Sesion cerrada</h1>
<p><a href="index.php">Volver al inicio</a></p>
</body>
</html>