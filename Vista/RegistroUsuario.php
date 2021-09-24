<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<?php  
require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();

$sql= "SELECT idRol, nombreRol FROM rol";

$roles = $objConexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/Estilos1.css">
	<style type="text/css">
		body{
			justify-content: center;
	        align-items: center;
		}
		#boton {
			position: absolute;
			cursor: pointer;
			width: 20px;
		}
	</style>
</head>
<body>
	<form action="../Controlador/validarRegistro.php" method="POST" id="Form">
		<div id="Form">
			<h1>Registro</h1>
			<div>
				<span class="grupo">
					<input type="number" name="idUsuario" id="idUsuario" required><span class="barra"></span>
					<label for="Nombre">Identificación:</label>
				</span>

				<span class="grupo">
					<input type="text" name="NombresUsu" id="NombresUsu" required><span class="barra"></span>
					<label for="Apellido">Nombres</label>
				</span>
			</div>
			<br>
			<div>
				<span class="grupo">
					<input type="email" name="CorreoUsuario" id="CorreoUsuario" required><span class="barra"></span>
					<label for="Correo">Correo</label>
				</span>

				<span class="grupo">
					<input type="password" name="ContraUsuario" id="ContraUsuario" required><span class="barra"></span><img src="../Imagenes/mostrar.png" id="boton" alt="VisualizarIcon">
					<label for="Contraseña">Contraseña</label>
				</span>
			</div>
			<script>
	
	var boton = document.getElementById('boton');
	var input = document.getElementById('ContraUsuario');

	boton.addEventListener('click', mostrarContraseña);

	function mostrarContraseña(){
		if(input.type == "password"){
			input.type = "text";
			boton.src = "../Imagenes/ocultar.png";
		} else {
			input.type = "password";
			boton.src = "../Imagenes/mostrar.png";
		}
	}
</script>
			<br>
			<div class="grupo">
				<select id="rol" name="rol">
					<option value="0">Seleccione</option>   
              
             			<?php
              			while ($rol = $roles->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $rol->idRol?>">
                 			<?php echo $rol->nombreRol?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select><span class="barra"></span>
			</div>

			<button type="submit">Registrarme</button>
		</div>
		<a href="../index.php">Volver</a>
	</form>
	<?php

if ($x==1){
  echo "<script>alert('Se ha registrado correctamente');</script>";
}
if ($x==2){
  echo "<script>alert('No se pudo registrar, asegurese de que no tenga una cuenta ya creada');</script>";
}
?>
</body>
</html>