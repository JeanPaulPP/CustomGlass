<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<!DOCTYPE html>
<html lang="Desea">
<head>
	<title>Actualizar Servicio por Id</title>
</head>
<body>
	<br><br><br><br><br><br>
	<h2>Ingrese Id del Servicio Que Desea Actualizar Los Datos</h2>
	<form id="form" method="post" action="Principal.php?pg=actualizarServicio">
		<span class="grupo">
					<label for="idCliente">No. Identificación Servicio:</label>
					<input type="number" name="idServicio" id="idServicio" required><span class="barra"></span>
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
	echo "<script>alert('No se encontro el servicio');</script>";
}
?>
</body>
</html>