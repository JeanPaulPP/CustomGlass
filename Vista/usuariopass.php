
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
				<input type="password" name="contraActual" id="contraActual" pattern=".{3,}" title="Minimo 8 caracteres" required>
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
</html>