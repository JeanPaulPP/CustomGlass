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
	<form action="" method="POST" id="Form">
		<div id="Form">
			<h1>Inicio de Sesión</h1>
			<div class="grupo">
				<select id="name">
					<option value="">Tipo de usuario</option>
					<option value="Admin">Administrador</option>
					<option value="Vend">Vendedor</option>
					<option value="Reno">Renovador</option>
				</select><span class="barra"></span>
			</div>

			<div class="grupo">
				<input type="email" name="" id="name" required><span class="barra"></span>
				<label>Correo</label>
			</div>

			<div class="grupo">
				<input type="password" name="" id="name" required><span class="barra"></span>
				<label>Contraseña</label>
			</div>

			<button type="submit">Ingresar</button>
		</div>
	</form>
</body>
</html>