<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Eliminar Cliente</title>
</head>
<body>
		<br><br><br><br><br><br>
		<h2>Ingrese Id del Cliente Que Desea Eliminar</h2>
	<form id="form" method="post" action="../Controlador/eliminarCliente.php">
		<span class="grupo">
					<label for="idProducto">No. Identificación Cliente:</label>
					<input type="number" name="idCliente" id="idCliente" required><span class="barra"></span>
				</span>
				<br><br>
				<button type="submit">Aceptar</button>
	</form>
	<br><br>
	<a href="Principal.php">Volver</a>
<?php

if ($x==1){
  echo "<script>alert('Se elimino correctamente');</script>";
}
if ($x==2){
  echo "<script>alert('No se pudo eliminar');</script>";
}
if ($x==3) {
	echo "<script>alert('No se pudo encontrar este cliente');</script>";
}
?>
</body>
</html>