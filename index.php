<!DOCTYPE html>
<?php

include ("validar.php");

?>
<html>
<head>
	<title>Sesi&oacute;n</title>

</head>
<body>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>ID</b></font></td>
<td><font face="verdana"><b>NOMBRE</b></font></td>
<td><font face="verdana"><b>TELEFONO</b></font></td>
<td><font face="verdana"><b>OPCIONES</b></font></td>
</tr>

<?php  
  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("registro", $link)
      or die ("Error al conectar a la base de datos.");

  $query ="SELECT d.id, d.nombre, d.telefono " .
      "FROM datos d";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["id"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["telefono"] . "</font></td>";	

    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero registros: " . $numero . 
      "</b></font></td></tr>";
  
  mysql_free_result($result);
  mysql_close($link);
?>
</table>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>OPCIONES</b></font></td>
</tr>
 <tr><td width=\"25%\"><font face=\"verdana\"><a href="nuevo.php">AGREGAR REGISTRO</a>    
  <a href="index.php">ELIMINAR REGISTRO</a></font></td>

<form method="post" action="nuevo.php">
	<input type="submit" id="inputnew" name="btnnuevo" value="Nuevo" size="50">
</form>





</body>
</html>