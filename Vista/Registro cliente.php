<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="Estilos1.css">
	<style type="text/css">
		body{
			justify-content: center;
	        align-items: center;
		}
	</style>
</head>
<body>
	<form action="" method="POST" id="Form">
		<div id="Form">
			<h1>Registro</h1>
			<div>
				<span class="grupo">
					<input type="text" name="" id="Nombre" required><span class="barra"></span>
					<label for="Nombre">Nombres</label>
				</span>

				<span class="grupo">
					<input type="text" name="" id="Apellido" required><span class="barra"></span>
					<label for="Apellido">Apellidos</label>
				</span>
			</div>
			<br>
			<div>
				<span class="grupo">
					<input type="email" name="" id="Correo" required><span class="barra"></span>
					<label for="Correo">Correo</label>
				</span>

				<span class="grupo">
					<input type="password" name="" id="Contraseña" required><span class="barra"></span>
					<label for="Contraseña">Contraseña</label>
				</span>
			</div>
			<br>
			<div>
				<span class="grupo">
					<input type="text" name="" id="Direccion" required><span class="barra"></span>
					<label for="Direccion">Dirección</label>
				</span>

				<span class="grupo">
					<input type="text" name="" id="Numero" required><span class="barra"></span> 
					<label for="Numero">Numero de celular</label>
				</span>
			</div>
			<br>
			<button type="submit">Registrarme</button>
		</div>
	</form>
</body>
</html>