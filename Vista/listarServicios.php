<?php
  require "../Modelo/claseServicio.php";
  $objServicios = new servicio();
  $servicios= $objServicios->consultarServiciosL();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Listar Servicios</title>
  <meta charset="utf-8">
</head>
<body>
<h1>Servicios</h1>
<table>
  <caption>Tabla de servicios registrados en el sistema</caption>
  <thead>
  <tr>
    <th id="Id">Id</th>
    <th id="Servicio">Servicio</th>
    <th id="Detalles">Detalles</th>
    <th id="Autor">Autor</th>
    <th id="Estado">Estado</th> 
    <th id="Contacto">Contacto</th> 
    <th id="Imagen">Imagen</th> 
  </tr>
  </thead>
  <?php
  while ($servicio = $servicios->fetch_object())
  {
    $imagen = $servicio->imagenServ;
  ?>
  <tr>

        <td><?php  echo  $servicio->idServicio  ?>     </td>
        <td><?php  echo  $servicio->servNombre  ?></td> 
        <td><?php  echo  $servicio->detServicio ?> </td>
        <td><?php  echo  $servicio->NombresUsu  ?></td>
        <td><?php  echo  $servicio->estadoServ  ?></td>
        <td><?php  echo  $servicio->telefono  ?></td> 
        <td ><?php  echo "<img src='$servicio->imagenServ' width='320px' height='240px'>" ?></td> 
  </tr>
  <?php
  }
  ?>
 
</table>
<br><br>
</body>