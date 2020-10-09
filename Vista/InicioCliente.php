<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" type="text/css" href="Estilos.css">
	<style type="text/css">
		body{
			justify-content: center;
	        align-items: center;
		}
	</style>
</head>
<body>
	<form action="../Controlador/verificarUsuario.php" method="POST" id="Form">
		<div id="Form">
			<h1>Inicio de Sesión</h1>
			<div class="grupo">
				<input type="email" name="correo" id="correo" required><span class="barra"></span>
				<label>Correo</label>
			</div>

			<div class="grupo">
				<input type="password" name="contraseña" id="contraseña" required><span class="barra"></span>
				<label>Contraseña</label>
			</div>

			<button type="submit">Ingresar</button>
		</div>
		<center>
		<a href="../index.php">Volver</a>
	</center>
	</form>
	<?php

if ($x==1)
	echo "<script>alert('Usuario no registrado o los datos ingresados son incorrectos, intente de nuevo');</script>";
if ($x==2)
	echo "<script>alert('Debe iniciar sesion para acceder al sistema');</script>";
if ($x==3)
	echo "<script>alert('El usuario ha cerrado sesión');</script>";
?>
</body>
</html>