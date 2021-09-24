<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<?php
  require "../Modelo/claseCatalogoProd.php";
  $objProductos = new CatalogoProd();
  $productos= $objProductos->consultarServicios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Servicios</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Estilos/catalogoServ.css">
</head>
<body>
  <div style="text-align: center; width: 100%;">
     <button onclick="window.location.href='PrincipalClie.php?pg=CarritoCompras'" style="text-align: center; width: 100%;" >Ver Carrito de Compras</button>
  <div id="contenedorfa">

  <?php
  while ($producto = $productos->fetch_object())
  {
   
  ?>
  <div id="card">
     <img alt="Custom Glass"src='<?php echo $producto->imagenProd; ?>' width='340px' height='200px'>
       <h4><?php  echo  $producto->nombreProd  ?></h4>
        <p id="info">Código: <?php  echo  $producto->idProducto ?><br><?php  echo  $producto->medidasProd ?> </p>
        <p id="info"><?php  echo  $producto->materialProd ?> </p>
        <?php $costo = $producto->costoUnitario;
          $IVA = $producto->IVA;
          $total = $costo + $IVA;
         ?>
        <p id="tel">$ <?php  echo  $total  ?></p>
        <form action="../Controlador/añadirProdCarrito.php">
          <input type="hidden" name="idSession" value="<?php $idSesion = session_id();  echo $idSesion; ?>">
          <input type="hidden" name="Cliente" value="<?php echo $usuarioNa->idCliente ?>">
          <input type="hidden" name="Producto" value="<?php echo $producto->idProducto ?>">
          <input type="number" name="cantProducto" min="1" value="1">
          <input type="hidden" name="fechaAgregado" value="<?php echo date("Y-m-d");?>">
          <button type="submit">Añadir al carrito</a></button>
        </form>
        </div>
  
  <?php
  }
  ?>
 
</div>
</div>
<?php 
  if ($x==1){
  echo "<script>alert('Se guardo correctamente en el carrito de compras');</script>";
}
if ($x==2){
  echo "<script>alert('No se pudo guardar en el carrito de compras, por favor intentelo de nuevo');</script>";
}
?>
</body>
</html>