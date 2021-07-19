<?php
  require "../Modelo/claseCatalogoProd.php";
  $objProductos = new catalogo();
  $productos= $objProductos->consultarServicios();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Servicios</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Estilos/catalogoServ.css">
</head>
<body>
<h1 align="center">Productos</h1>
  <div id="contenedorfa">

  <?php
  while ($producto = $productos->fetch_object())
  {
   
  ?>
  <div id="card">
     <img src='<?php echo $producto->imagenProd; ?>' width='340px' height='200px'>
       <h4><?php  echo  utf8_encode($producto->nombreProd)  ?></h4>
        <p id="info">Código: <?php  echo  utf8_encode($producto->idProducto) ?><br><?php  echo  utf8_encode($producto->medidasProd) ?> </p>
        <p id="info"><?php  echo  utf8_encode($producto->materialProd) ?> </p>
        <?php $costo = $producto->costoUnitario;
          $IVA = $producto->IVA;
          $total = $costo + $IVA;
         ?>
        <p id="tel">$ <?php  echo  utf8_encode($total)  ?></p>
        <button><a href="cliente.php?x=3">Comprar</a></button>
        </div>
  
  <?php
  }
  ?>
 
</div>
</body>