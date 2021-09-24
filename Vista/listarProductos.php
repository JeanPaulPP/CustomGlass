<?php
  require "../Modelo/claseProducto.php";
  $objProductos = new producto();
  $productos= $objProductos->consultarProductos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Listar Productos</title>
</head>
<body>
<h1>PRODUCTOS</h1>
<table>
  <caption>Tabla de productos registrados en el sistema</caption>
  <thead>
  <tr>
    <th id="Id">Id</th>
    <th id="Nombre">Nombre</th>
    <th id="Medidas">Medidas</th>
    <th id="Material">Material</th>
    <th id="Costo">Costo Unitario</th> 
    <th id="IVA">IVA</th> 
    <th id="TipoProd">Tipo Producto</th>
    <th id="EstadoProd">Estado Producto</th>
  </tr>
  </thead>
  <?php
  while ($producto = $productos->fetch_object())
  {
  ?>
  <tr>
        <td><?php  echo  $producto->idProducto  ?>     </td>
        <td><?php  echo  $producto->nombreProd  ?></td> 
        <td><?php  echo  $producto->medidasProd ?> </td>
        <td><?php  echo  $producto->materialProd  ?></td>
        <td><?php  echo  $producto->costoUnitario  ?></td>
        <td><?php  echo  $producto->IVA  ?></td> 
        <td><?php  echo  $producto->tipoProd  ?></td> 
        <td><?php  echo  utf8_decode($producto->estadoProd)  ?></td> 
  </tr>
  <?php
  }
  ?>
 
</table>
<br>
      <a href="Principal.php">Volver</a>
</body>
