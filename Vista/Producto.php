<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registrar Producto</title>
</head>
<?php  

$sql= "SELECT idTipo, tipoProd FROM tipo_producto";

$tipos = $objConexion->query($sql);

$sql1= "SELECT idEstadoProd, estadoProd FROM estado_producto";

$estados = $objConexion->query($sql1);

?>
<body>
	<form action="../Controlador/agregarProducto.php" id="Form" oninput="IVA.value=(parseInt(costoUnitario.value)*19)/100">
		<h1>Registrar Producto</h1>
		<div id="Form">
			<div class="grupo">
				<label>Codigo producto</label><br>
				<input type="text" name="idProducto" id="idProducto" pattern=".{4}" title="Debe ser de 4 digitos" required>
			</div>
			<div class="grupo">
				<label>Nombre del producto</label><br>
				<input type="text" id="nombreProd" name="nombreProd" pattern="[A-Za-zÀ-ž\s]+" title="Solo texto, los valores numericos no son validos" required>
			</div>

			<div class="grupo">
				<label>Medidas del prdoucto</label><br>
				<input type="text" name="medidasProd" id="medidasProd" required>
			</div>

			<div class="grupo">
				<label>Material</label><br>
				<input type="text" name="materialProd" id="materialProd" required>
			</div>


			<div class="grupo">
				<label>Costo Unitario</label><br>
				<input type="number" name="costoUnitario" id="costoUnitario" required>
			</div>

			<div class="grupo">
				<label>IVA</label><br>
				<input type="block" name="IVA" id="IVA">
			</div>

			<div class="grupo">
				<label>Tipo de producto</label><br>
				<select name="TipoProducto" id="TipoProducto"> 
	
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
			</div>
			<div class="grupo">
				<label>Estado de producto</label><br>
				<select name="EstadoProducto" id="EstadoProducto"> 
					
             			<?php
             			
              			while ($estado = $estados->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $estado->idEstadoProd?>">
                 			<?php echo $estado->idEstadoProd?><p> - </p><?php echo $estado->estadoProd?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>

			<button type="submit">Registrar</button>
			<br>
			
		</div>
	</form>
	<?php 
	if ($x==1){
  echo "<script>alert('Se ha agregado el producto correctamente');</script>";
  }
if ($x==2){
  echo "<script>alert('No se pudo agregar el producto');</script>";
}
?>
</body>
</html>