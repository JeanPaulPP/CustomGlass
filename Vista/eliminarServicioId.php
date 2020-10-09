<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Servicio</title>
</head>
<body>
	<center>
		<br><br><br><br><br><br>
		<h2>Ingrese Id del Servicio Que Desea Eliminar</h2>
	<form id="form" method="post" action="../Controlador/eliminarServicio.php">
		<span class="grupo">
					<label for="idProducto">No. Identificación Servicio:</label>
					<input type="number" name="idServicio" id="idServicio" required><span class="barra"></span>
				</span>
				<br><br>
				<button type="submit">Aceptar</button>
	</form>
	<br><br>
	<a href="Principal.php">Volver</a>
</center>
<?php

if ($x==1)
  echo "<script>alert('Se elimino correctamente');</script>";
if ($x==2)
  echo "<script>alert('No se pudo eliminar');</script>";
if ($x==3) {
	echo "<script>alert('No se pudo encontrar este cliente');</script>";
}
?>
</body>
</html>