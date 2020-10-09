<?php  

require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();

$sql="SELECT * FROM servicio s, usuario u, estado_servicio es WHERE (s.Usuario = u.idUsuario) AND (s.Estado = es.idEstadoServ) AND (s.idServicio = '$_REQUEST[idServicio]')";
$serviciox = $objConexion->query($sql);

$servicio = $serviciox->fetch_object();

$verificar = $serviciox->num_rows;
if ($verificar==1)  
{	
	echo "<script> alert('El numero de identificacion se halló correctamente'); </script>";
}
else
{
	header("location:actualizarIdServicio.php?x=3");  
}

$sql1= "SELECT idUsuario, NombresUsu FROM usuario WHERE (Rol = 3)";

$sql2= "SELECT idEstadoServ, estadoServ FROM estado_servicio";

$estados = $objConexion->query($sql2);

$usuarios = $objConexion->query($sql1);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualiza Servicio</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/Estilos2.css">
</head>
<body>
	<form action="../Controlador/validarActualizarServicio.php" id="Form">
		<div id="Form">
			<h1>Servicio</h1>

			<div class="grupo">
				<label>Id Servicio</label>
				<input type="text" name="idServicio" id="idServicio" readonly required value="<?php echo utf8_encode($servicio->idServicio) ?>">
			</div>


			<div class="grupo">
				<label>Nombre del Renovador</label>
				<select name="Usuario" id="Usuario"> 
					<option value="<?php echo $servicio->Usuario?>"><?php echo utf8_encode($servicio->NombresUsu)?></option>   
				</select>
			</div>

			<div class="grupo">
				<label>Nombre Servicio</label>
				<input type="text" name="Servicio" id="Servicio" required value="<?php echo utf8_encode($servicio->Servicio) ?>">
			</div>

			<div class="grupo">
				<label>Informacion del servicio</label>
				<textarea  name="detServicio" id="detServicio" required><?php echo utf8_encode($servicio->detServicio) ?></textarea>
			</div>

			<div class="grupo">
				<label>Numero de contacto</label>
				<input type="text" name="telefono" id="telefono" required value="<?php echo utf8_encode($servicio->telefono) ?>">
			</div>

			<div class="grupo">
				<label>Imagen del Servicio (.png/.jpeg) <br> <?php echo utf8_encode($servicio->imagenServ) ?></label>
				<input type="file" name="imagenServ" id="imagenServ" accept="image/png, image/jpeg" value="<?php echo utf8_encode($servicio->imagenServ) ?>">
			</div>
			<div class="grupo">
				<label>Estado del Servicio</label>
				<select name="Estado" id="Estado"> 
					<option value="<?php echo utf8_encode($servicio->Estado) ?>"><?php echo utf8_encode($servicio->estadoServ) ?></option>   
              
             			<?php
             			
              			while ($estado = $estados->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $estado->idEstadoServ?>">
                 			<?php echo utf8_encode($estado->estadoServ)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>

			<button type="submit">Actualizar</button>
		</div>
	</form>
</body>
</html>