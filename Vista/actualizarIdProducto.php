<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Actualizar Producto por Id</title>
</head>
<body>
	<br><br><br><br><br><br>
	<h1>Ingrese Id del Producto Que Desea Actualizar</h1>
	<form id="form" method="post" action="Principal.php?pg=actualizarProducto">
		<span class="grupo">
					<label for="idProducto">No. Identificación Producto:</label>
					<input type="number" name="idProducto" id="idProducto" required><span class="barra"></span>
				</span>
				<br><br>
				<button type="submit">Aceptar</button>
	</form>
	<br><br>
	<a href="Principal.php">Volver</a>
<?php

if ($x==1){
  echo "<script>alert('Se actualizo correctamente');</script>";
}
if ($x==2){
  echo "<script>alert('No se pudo actualizar');</script>";
}
if ($x==3) {
	echo "<script>alert('No se encontro el producto');</script>";
}
?>
</body>
</html>