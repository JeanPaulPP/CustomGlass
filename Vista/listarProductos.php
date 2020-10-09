<?php
  require "../Modelo/conexionBasesDatos.php";
  require "../Modelo/claseProducto.php";
  $objConexion = Conectarse();
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
<table border="3" align="center">
  <tr align="center">
    <td>Id</td>
    <td>Nombre</td>
    <td>Medidas</td>
    <td>Material</td>
    <td>Costo Unitario</td> 
    <td>IVA</td> 
    <td>Tipo Producto</td>
    <td>Estado Producto</td>
  </tr>
  
  <?php
  while ($producto = $productos->fetch_object())
  {
  ?>
  <tr>
        <td><?php  echo  utf8_encode($producto->idProducto)  ?>     </td>
        <td><?php  echo  utf8_encode($producto->nombreProd)  ?></td> 
        <td><?php  echo  utf8_encode($producto->medidasProd) ?> </td>
        <td><?php  echo  utf8_encode($producto->materialProd)  ?></td>
        <td><?php  echo  utf8_encode($producto->costoUnitario)  ?></td>
        <td><?php  echo  utf8_encode($producto->IVA)  ?></td> 
        <td><?php  echo  utf8_encode($producto->tipoProd)  ?></td> 
        <td><?php  echo  utf8_encode($producto->estadoProd)  ?></td> 
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
