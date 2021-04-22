<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cambiar Contraseña</title>
</head>
<body>
	<center>
		<form action="Principal.php?pg=../Controlador/ValidarActContraseñaUsu" method="POST">
			<div class="grupo">
				<label>Contraseña Actual</label><br>
				<input type="password" name="contraActual" id="contraActual" title="Minimo 8 caracteres" required>
			</div>
			<div class="grupo">
				<label>Contraseña Nueva</label><br>
				<input type="password" name="contraNueva" id="contraNueva" pattern=".{8,}" title="Minimo 8 caracteres" required>
			</div>
			<div class="grupo">
				<label>Confirmar Nueva ontraseña</label><br>
				<input type="password" name="contraNuevaC" id="contraNuevaC" pattern=".{8,}" title="Minimo 8 caracteres" required>
			</div>
				<button type="submit">Actualizar</button>
		</form>
	</center>
</body>
<?php

if ($x==1)
  echo "<script>alert(''Se ha actualizado la contraseña'');</script>";
if ($x==2)
  echo "<script>alert('Las dos contraseñas nuevas no coinciden');</script>";
if ($x==3) {
	echo "<script>alert('La contraseña actual no coincide');</script>";
}
?>
</html>