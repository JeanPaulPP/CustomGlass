<?php
require "../Modelo/conexionBasesDatos.php";

$objConexion = Conectarse();
$sql="SELECT p.idProducto, p.TipoProducto, p.EstadoProducto, p.nombreProd, p.medidasProd, p.materialProd, p.costoUnitario, p.IVA, tp.tipoProd, ep.estadoProd FROM producto p, tipo_producto tp, estado_producto ep WHERE (p.EstadoProducto = ep.idEstadoProd) AND (p.TipoProducto = tp.idTipo) AND (p.idProducto = $_REQUEST[idProducto])";

$productox = $objConexion->query($sql);

$producto = $productox->fetch_object();

$verificar = $productox->num_rows;
if ($verificar==1)  
{	
	echo "<script> alert('El numero de identificacion se halló correctamente'); </script>";
}
else
{
	header("location:Principal.php?pg=actualizarIdProducto&x=3");  
}
$sql1= "SELECT idTipo, tipoProd FROM tipo_producto";

$tipos = $objConexion->query($sql1);

$sql2= "SELECT idEstadoProd, estadoProd FROM estado_producto";

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
	<form id="form" method="post" action="../Controlador/ValidarActProducto.php">
		<span class="grupo">
					<label for="idProducto">No. Identificación Producto:</label>
					<input type="text" readonly="readonly" name="idProducto" id="idProducto" required value="<?php echo $producto->idProducto ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="nombreProd">Nombre Producto:</label>
					<input type="text" name="nombreProd" required id="nombreProd" value="<?php echo utf8_encode($producto->nombreProd) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="medidasProd">Medidas Producto:</label>
					<input type="text" name="medidasProd" required id="medidasProd" value="<?php echo utf8_encode($producto->medidasProd) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="materialProd">Material Producto:</label>
					<input type="text" name="materialProd" required id="materialProd" value="<?php echo utf8_encode($producto->materialProd) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="costoUnitario">Costo Unitario Producto:</label>
					<input type="number" name="costoUnitario" required id="costoUnitario" value="<?php echo utf8_encode($producto->costoUnitario) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="IVA">IVA:</label>
					<input type="text" name="IVA" required id="IVA" value="<?php echo utf8_encode($producto->IVA) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<label for="TipoProducto">Tipo Producto:</label>
				<select name="TipoProducto" id="TipoProducto"> 
					<option value="<?php echo $producto->TipoProducto ?>"><?php echo utf8_encode($producto->tipoProd); ?></option>   
              
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

				<br><br>
				<label for="EstadoProducto">Estado Producto:</label>
				<select name="EstadoProducto" id="EstadoProducto"> 
					<option value="<?php echo $producto->EstadoProducto ?>"><?php echo utf8_encode($producto->estadoProd); ?></option>   
              
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
				<br><br>
				<button type="submit">Actualizar</button>
	</form>
</center>
</body>
</html>