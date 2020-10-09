<?php
  require "../Modelo/conexionBasesDatos.php";
  require "../Modelo/claseServicio.php";
  $objConexion = Conectarse();
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
<table border="3" align="center">
  <tr align="center">
    <td>Id</td>
    <td>Servicio</td>
    <td>Detalles</td>
    <td>Autor</td>
    <td>Estado</td> 
    <td>Contacto</td> 
    <td>Imagen</td> 
  </tr>
  
  <?php
  while ($servicio = $servicios->fetch_object())
  {
    $imagen = $servicio->imagenServ;
  ?>
  <tr>

        <td><?php  echo  utf8_encode($servicio->idServicio)  ?>     </td>
        <td><?php  echo  utf8_encode($servicio->Servicio)  ?></td> 
        <td><?php  echo  utf8_encode($servicio->detServicio) ?> </td>
        <td><?php  echo  utf8_encode($servicio->NombresUsu)  ?></td>
        <td><?php  echo  utf8_encode($servicio->estadoServ)  ?></td>
        <td><?php  echo  utf8_encode($servicio->telefono)  ?></td> 
        <td ><?php  echo "<img src='../Imagenes/$imagen' width='320px' height='240px'>" ?></td> 
  </tr>
  <?php
  }
  ?>
 
</table>
<center>
<br><br>
  <a href="Principal.php">Volver</a>
</center>
</body>