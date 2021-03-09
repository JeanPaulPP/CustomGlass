<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar Producto</title>
	<!--<link rel="stylesheet" type="text/css" href="../Estilos/Estilos2.css">-->
	<style>
		#boton {
			position: absolute;
			cursor: pointer;
			width: 20px;
			right: 180px;
		}
	</style>
</head>
<?php  

require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();

$sql1= "SELECT idEstado, nombreEstado FROM estado_cliente";

$estados = $objConexion->query($sql1);

?>
<body>
	<center>
	<form action="../Controlador/registrarCliente.php" id="Form">
		<h1>Registrar Cliente</h1>
		<div id="Form">
			<div class="grupo">
				<label>Id CLiente</label><br>
				<input type="number" name="idCliente" id="idCliente" required>
			</div>
			<div class="grupo">
				<label>Correo</label><br>
				<input type="email" name="correoClie" id="correoClie" required>
			</div>

			<div class="grupo">
				<label>Contraseña</label><br>
				<input type="password" name="contraClie" id="contraClie" required><img src="../Imagenes/mostrar.png" id="boton">
			</div>
			<script>
	
	var boton = document.getElementById('boton');
	var input = document.getElementById('contraClie');

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

			<div class="grupo">
				<label>Dirección</label><br>
				<input type="text" name="direccion" id="direccion" required>
			</div>


			<div class="grupo">
				<label>1.Teléfono</label><br>
				<input type="number" name="telefono" id="telefono">
			</div>

			<div class="grupo">
				<label>2.Teléfono</label><br>
				<input type="number" name="telefono2" id="telefono2">
			</div>

			<div class="grupo">
				<label>Nombres</label><br>
				<input type="text" name="nombres" id="nombres" required>
			</div>

			<div class="grupo">
				<label>Apellidos</label><br>
				<input type="text" name="apellidos" id="apellidos" required>
			</div>
			<!--Codigo despleglable estado cliente, comentado porque al crear el cliente su estado de una vez sera activo-->
			<!--<div class="grupo">
				<select name="EstadoCliente" id="EstadoCliente"> 
					<option value="0">Seleccione</option>   
              
             			<?php
             			
              			while ($estado = $estados->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $estado->idEstado?>">
                 			<?php echo utf8_encode($estado->nombreEstado)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>-->

			<button type="submit">Registrar</button>
			<br>
			<center>
			<a href="Principal.php">Volver</a>
			</center>
		</div>
	</form>
	<?php 
	if ($x==1)
  echo "<script>alert('Se ha registrado el cliente correctamente');</script>";
if ($x==2)
  echo "<script>alert('No se pudo registrar el cliente');</script>";
?>
</center>
</body>
</html>