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
</head>
<?php  

require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();

$sql= "SELECT idTipo, tipoProd FROM tipo_producto";

$tipos = $objConexion->query($sql);

$sql1= "SELECT idEstadoProd, estadoProd FROM estado_producto";

$estados = $objConexion->query($sql1);

?>
<body>
	<center>
	<form action="../Controlador/agregarProducto.php" id="Form">
		<h1>Registrar Producto</h1>
		<div id="Form">
			<div class="grupo">
				<label>Codigo producto</label><br>
				<input type="text" name="idProducto" id="idProducto">
			</div>
			<div class="grupo">
				<label>Nombre del producto</label><br>
				<input type="text" name="nombreProd" id="nombreProd">
			</div>

			<div class="grupo">
				<label>Medidas del prdoucto</label><br>
				<input type="text" name="medidasProd" id="medidasProd">
			</div>

			<div class="grupo">
				<label>Material</label><br>
				<input type="text" name="materialProd" id="materialProd">
			</div>


			<div class="grupo">
				<label>Costo Unitario</label><br>
				<input type="number" name="costoUnitario" id="costoUnitario">
			</div>

			<div class="grupo">
				<label>IVA</label><br>
				<input type="number" name="IVA" id="IVA">
			</div>

			<div class="grupo">
				<label>Tipo de producto</label><br>
				<select name="TipoProducto" id="TipoProducto"> 
					<option value="0">Seleccione</option>   
              
             			<?php
             			
              			while ($tipo = $tipos->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $tipo->idTipo?>">
                 			<?php echo utf8_encode($tipo->tipoProd)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>
			<div class="grupo">
				<label>Estado de producto</label><br>
				<select name="EstadoProducto" id="EstadoProducto"> 
					<option value="0">Seleccione</option>   
              
             			<?php
             			
              			while ($estado = $estados->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $estado->idEstadoProd?>">
                 			<?php echo utf8_encode($estado->estadoProd)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>

			<button type="submit">Registrar</button>
			<br>
			<center>
			<a href="Principal.php">Volver</a>
			</center>
		</div>
	</form>
	<?php 
	if ($x==1)
  echo "<script>alert('Se ha agregado el producto correctamente');</script>";
if ($x==2)
  echo "<script>alert('No se pudo agregar el producto');</script>";
?>
</center>
</body>
</html>