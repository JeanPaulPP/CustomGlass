<?php
  require "../Modelo/claseCliente.php";
  $objClientes = new cliente();
  $clientes= $objClientes->consultarClientes();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Listar Clientes</title>
  <meta charset="utf-8">
</head>
<body>
<h1>CLIENTES</h1>
<table>
  <caption>tabla de clientes registrados en el sistema</caption>
  <thead>
  <tr>
    <th id="Id">Id</th>
    <th id="Nombres">Nombres</th>
    <th id="Apellidos">Apellidos</th>
    <th id="Correo">Correo</th>
    <th id="Contraseña">Contraseña</th> 
    <th id="Direccion">Direccion</th> 
    <th id="Telefono1">Telefono 1.</th>
    <th id="Telefono2">Telefono 2.</th>
    <th id="Estado">Estado</th>
  </tr>
  </thead>
  <?php
  while ($cliente = $clientes->fetch_object())
  {
  ?>
  <tr>
        <td><?php  echo  $cliente->idCliente  ?>     </td>
        <td><?php  echo  $cliente->Nombres  ?></td> 
        <td><?php  echo  $cliente->Apellidos ?> </td>
        <td><?php  echo  $cliente->correoClie  ?></td>
        <td><?php  echo  $cliente->contraClie  ?></td>
        <td><?php  echo  $cliente->direccion  ?></td> 
        <td><?php  echo  $cliente->Telefono  ?></td> 
        <td><?php  echo  $cliente->Telefono2  ?></td> 
        <td><?php  echo  $cliente->nombreEstado  ?></td> 
  </tr>
  <?php
  }
  ?>
 
</table>
<br><br>
  <a href="Principal.php">Volver</a>
</body>
