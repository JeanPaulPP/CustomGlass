<?php
  require "../Modelo/claseServicio.php";
  $objServicios = new servicio();
  $servicios= $objServicios->consultarServicios();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Listar Servicios</title>
  <meta charset="utf-8">
</head>
<body>
<h1 align="center">Servicios</h1>
<table align="center">
  <thead>
  <tr align="center">
    <th>Id</th>
    <th>Servicio</th>
    <th>Detalles</th>
    <th>Autor</th>
    <th>Estado</th> 
    <th>Contacto</th> 
    <th>Imagen</th> 
  </tr>
  </thead>
  <?php
  while ($servicio = $servicios->fetch_object())
  {
    $imagen = $servicio->imagenServ;
  ?>
  <tr>

        <td><?php  echo  utf8_encode($servicio->idServicio)  ?>     </td>
        <td><?php  echo  utf8_encode($servicio->servNombre)  ?></td> 
        <td><?php  echo  utf8_encode($servicio->detServicio) ?> </td>
        <td><?php  echo  utf8_encode($servicio->NombresUsu)  ?></td>
        <td><?php  echo  utf8_encode($servicio->estadoServ)  ?></td>
        <td><?php  echo  utf8_encode($servicio->telefono)  ?></td> 
        <td ><?php  echo "<img src='$servicio->imagenServ' width='320px' height='240px'>" ?></td> 
  </tr>
  <?php
  }
  ?>
 
</table>
<center>
<br><br>
</center>
</body>