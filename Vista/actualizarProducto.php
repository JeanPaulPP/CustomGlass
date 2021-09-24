<?php
$sql="SELECT p.idProducto, p.TipoProducto, p.EstadoProducto, p.nombreProd, p.medidasProd, p.materialProd, p.costoUnitario, p.IVA, tp.tipoProd, ep.estadoProd FROM producto p, tipo_producto tp, estado_producto ep WHERE (p.EstadoProducto = ep.idEstadoProd) AND (p.TipoProducto = tp.idTipo) AND (p.idProducto = $_REQUEST[idProducto])";

$productox = $objConexion->query($sql);

$producto = $productox->fetch_object();

$verificar = $productox->num_rows;
if ($verificar==1)  {	
	echo "<script> alert('El numero de identificacion se halló correctamente'); </script>";
}
else{
	header("location:Principal.php?pg=actualizarIdProducto&x=3");  
}
$sql1= "SELECT idTipo, tipoProd FROM tipo_producto";

$tipos = $objConexion->query($sql1);

$sql2= "SELECT idEstadoProd, estadoProd FROM estado_producto";

$estados = $objConexion->query($sql2);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Actualizar Producto</title>
</head>
<body>
	<h1>Actualizar Producto</h1>
	<form id="form" method="post" action="../Controlador/ValidarActProducto.php" oninput="IVA.value=(parseInt(costoUnitario.value)*19)/100">
		<span class="grupo">
					<label for="idProducto">No. Identificación Producto:</label><br>
					<input type="text" readonly="readonly" name="idProducto" id="idProducto" required value="<?php echo $producto->idProducto ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="nombreProd">Nombre Producto:</label><br>
					<input type="text" name="nombreProd" required id="nombreProd" pattern="[A-Za-zÀ-ž\s]+" title="Solo texto, los valores numericos no son validos" value="<?php echo utf8_encode($producto->nombreProd) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="medidasProd">Medidas Producto:</label><br>
					<input type="text" name="medidasProd" required id="medidasProd" value="<?php echo utf8_encode($producto->medidasProd) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="materialProd">Material Producto:</label><br>
					<input type="text" name="materialProd" required id="materialProd" value="<?php echo utf8_encode($producto->materialProd) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="costoUnitario">Costo Unitario Producto:</label><br>
					<input type="number" name="costoUnitario" required id="costoUnitario" value="<?php echo utf8_encode($producto->costoUnitario) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="IVA">IVA:</label><br>
					<input type="block" name="IVA" id="IVA"><span class="barra" required></span>
				</span>
				<br><br>
				<label for="TipoProducto">Tipo Producto:</label><br>
				<select name="TipoProducto" id="TipoProducto"> 
					<option value="<?php echo $producto->TipoProducto ?>"><?php echo $producto->TipoProducto ?><p> - </p><?php echo $producto->tipoProd; ?></option>   
              
             			<?php
             			
              			while ($tipo = $tipos->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $tipo->idTipo?>">
                 			<?php echo $tipo->idTipo?><p> - </p><?php echo $tipo->tipoProd?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>

				<br><br>
				<label for="EstadoProducto">Estado Producto:</label><br>
				<select name="EstadoProducto" id="EstadoProducto"> 
					<option value="<?php echo $producto->EstadoProducto ?>"><?php echo $producto->EstadoProducto ?><p> - </p><?php echo utf8_encode($producto->estadoProd); ?></option>   
              
             			<?php
             			
              			while ($estado = $estados->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $estado->idEstadoProd?>">
                 			<?php echo $estado->idEstadoProd?><p> - </p><?php echo utf8_encode($estado->estadoProd)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
				<br><br>
				<button type="submit">Actualizar</button>
	</form>
</body>
</html>