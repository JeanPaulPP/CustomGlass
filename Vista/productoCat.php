<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<?php 
require "../Modelo/claseProducto.php";
$objProductos = new producto();
$Productos = $objProductos->consultarProductos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Añadir producto a catálogo</title>
</head>
<body>
	<form action="../Controlador/aggProdCatalogo.php" method="POST" id="form" enctype="multipart/form-data">
		<h1>Añadir producto a catálogo</h1>
		<div id="Form">
				<input type="hidden" name="idCatalogo" id="idProducto" value="4796">
			<div class="grupo">
				<label>Producto</label><br>
				<select name="Producto" id="Producto"> 
					
             			<?php
             			
              			while ($Producto = $Productos->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $Producto->idProducto?>">
                 			<?php echo $Producto->idProducto?><p> - </p><?php echo $Producto->nombreProd?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
			</div>
				<?php 
					$sqlusu="SELECT * FROM usuario WHERE (CorreoUsuario = '$_SESSION[user]')";
					$usuarioN = $objConexion->query($sqlusu);
					while ($usuarioNa = $usuarioN->fetch_object()){
						$id = $usuarioNa->idUsuario;
						?>

						<?php echo "<input type='hidden' name='Usuario' id='Usuario' value='$id' >" ?>

						<?php
					}
				?>
				
				<input type="hidden" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>">
			<div class="grupo">
				<label>Imagen del Producto (.png/.jpeg)</label><br>
				<input type="file" name="imagenProd" id="imagenProd" accept="image/png, image/jpeg" required>
			</div>
			<button type="submit">Registrar</button>
		</div>
	</form>
<?php

if ($x==1){
  echo "<script>alert('Se añadio correctamente');</script>";
}
if ($x==2){
  echo "<script>alert('No se pudo añadir');</script>";
}
?>
</body>
</html>