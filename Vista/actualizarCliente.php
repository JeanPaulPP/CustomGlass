<?php
require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();
$sql="SELECT * FROM cliente c, estado_cliente ec WHERE (c.EstadoCliente = ec.idEstado) AND (c.idCliente = $_REQUEST[idCliente])";

$clientex = $objConexion->query($sql);

$cliente = $clientex->fetch_object();

$verificar = $clientex->num_rows;
if ($verificar==1)  
{	
	echo "<script> alert('El numero de identificacion se halló correctamente'); </script>";
}
else
{
	header("location:Principal.php?pg=actualizarIdCliente&x=3");  
}
$sql2= "SELECT idEstado, nombreEstado FROM estado_cliente";

$estados = $objConexion->query($sql2);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Producto</title>
</head>
<body>
	<center>
	<h2>Actualizar Producto</h2>
	<form id="form" method="post" action="../Controlador/ValidarActCliente.php">
		<span class="grupo">
					<label for="idCliente">No. Identificación Cliente:</label>
					<input type="text" readonly="readonly" name="idCliente" id="idCliente" required value="<?php echo $cliente->idCliente ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="nombres">Nombres :</label>
					<input type="text" name="nombres" required id="nombres" value="<?php echo utf8_encode($cliente->Nombres) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="apellidos">Apellidos :</label>
					<input type="text" name="apellidos" required id="apellidos" value="<?php echo utf8_encode($cliente->Apellidos) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="correoClie">Correo :</label>
					<input type="email" name="correoClie" required id="correoClie" value="<?php echo utf8_encode($cliente->correoClie) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="contraClie">Contraseña :</label>
					<input type="text" name="contraClie" required id="contraClie" value="<?php echo utf8_encode($cliente->contraClie) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="direccion">Direccion :</label>
					<input type="text" name="direccion" required id="direccion" value="<?php echo utf8_encode($cliente->direccion) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="telefono">1. Telefono :</label>
					<input type="number" name="telefono" required id="telefono" value="<?php echo utf8_encode($cliente->Telefono) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="telefono2">2. Telefono :</label>
					<input type="number" name="telefono2" required id="telefono2" value="<?php echo utf8_encode($cliente->Telefono2) ?>"><span class="barra"></span>
				</span>

				<br><br>
				<label for="EstadoCliente">Estado :</label>
				<select name="EstadoCliente" id="EstadoCliente"> 
					<option value="<?php echo $cliente->EstadoCliente ?>"><?php echo utf8_encode($cliente->nombreEstado); ?></option>   
              
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
				<br><br>
				<button type="submit">Actualizar</button>
	</form>
</center>
</body>
</html>