<?php
  require "../Modelo/claseProducto.php";
  #$sql="SELECT p.idProducto, p.nombreProd, p.medidasProd, p.materialProd, p.costoUnitario, p.IVA, tp.tipoProd, ep.estadoProd FROM producto p, tipo_producto tp, estado_producto ep WHERE (p.EstadoProducto = ep.idEstadoProd) AND (p.TipoProducto = tp.idTipo)";
  $objProductos = new producto();
  $productos= $objProductos->consultarProductos();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Listar Productos</title>
  <meta charset="utf-8">
</head>
<body>
<h1 align="center">PRODUCTOS</h1>
<table align="center">
  <thead>
  <tr align="center">
    <th>Id</th>
    <th>Nombre</th>
    <th>Medidas</th>
    <th>Material</th>
    <th>Costo Unitario</th> 
    <th>IVA</th> 
    <th>Tipo Producto</th>
    <th>Estado Producto</th>
  </tr>
  </thead>
  <?php
  while ($producto = $productos->fetch_object())
  {
  ?>
  <tr>
        <td><?php  echo  ($producto->idProducto)  ?>     </td>
        <td><?php  echo  ($producto->nombreProd)  ?></td> 
        <td><?php  echo  ($producto->medidasProd) ?> </td>
        <td><?php  echo  ($producto->materialProd)  ?></td>
        <td><?php  echo  ($producto->costoUnitario)  ?></td>
        <td><?php  echo  ($producto->IVA)  ?></td> 
        <td><?php  echo  ($producto->tipoProd)  ?></td> 
        <td><?php  echo  ($producto->estadoProd)  ?></td> 
  </tr>
  <?php
  }
  ?>
 
</table>
<br>
      <center>
      <a href="Principal.php">Volver</a>
      </center>
</body>
