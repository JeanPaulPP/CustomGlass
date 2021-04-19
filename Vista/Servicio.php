<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<?php  

require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();

$sql1= "SELECT idUsuario, NombresUsu FROM usuario WHERE (Rol = 3)";

$sql3="SELECT idTipoServicio, servNombre FROM tipo_servicio";

$sql2= "SELECT idEstadoServ, estadoServ FROM estado_servicio";

$tipos = $objConexion->query($sql3);

$estados = $objConexion->query($sql2);

$usuarios = $objConexion->query($sql1);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualiza Servicio</title>
	<!--<link rel="stylesheet" type="text/css" href="../Estilos/Estilos2.css">-->
</head>
<body>
	<form action="../Controlador/agregarServicio.php" id="Form">
		<div id="Form">
			<h1>Servicio</h1>
			<div class="grupo">
				<label>Nombre del Renovador</label><br>
				<select name="Usuario" id="Usuario"> 
					<option value="0">Seleccione</option>   
              
             			<?php
             			
              			while ($usuario = $usuarios->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $usuario->idUsuario?>">
                 			<?php echo $usuario->idUsuario?><p> - </p><?php echo utf8_encode($usuario->NombresUsu)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>

			<div class="grupo">
				<label>Nombre Servicio</label><br>
				<select name="Servicio" id="Servicio"> 
					<option value="0">Seleccionar</option>   
              
             			<?php
             			
              			while ($tipo = $tipos->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $tipo->idTipoServicio?>">
                 			<?php echo $tipo->idTipoServicio?><p> - </p><?php echo utf8_encode($tipo->servNombre)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>

			<div class="grupo">
				<label>Informacion del servicio</label><br>
				<textarea placeholder="Escribir Informacion sobre el servicio que ofrecen" name="detServicio" id="detServicio" required></textarea>
			</div>

			<div class="grupo">
				<label>Numero de contacto</label><br>
				<input type="number" name="telefono" id="telefono" required>
			</div>

			<div class="grupo">
				<label>Imagen del Servicio (.png/.jpeg)</label><br>
				<input type="file" name="imagenServ" id="imagenServ" accept="image/png, image/jpeg">
			</div>
			<div class="grupo">
				<label>Estado del Servicio</label><br>
				<select name="Estado" id="Estado"> 
					<option value="0">Seleccione</option>   
              
             			<?php
             			
              			while ($estado = $estados->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $estado->idEstadoServ?>">
                 			<?php echo $estado->idEstadoServ?><p> - </p><?php echo utf8_encode($estado->estadoServ)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>

			<button type="submit">Registrar</button>
		</div>
	</form>
	<?php 
	if ($x==1)
  echo "<script>alert('Se ha agregado el servicio correctamente');</script>";
if ($x==2)
  echo "<script>alert('No se pudo agregar el servicio');</script>";
?>
</body>
</html>