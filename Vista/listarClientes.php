<?php
  require "../Modelo/claseCliente.php";
  $objClientes = new cliente();
  $clientes= $objClientes->consultarClientes();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Listar Clientes</title>
  <meta charset="utf-8">
</head>
<body>
<h1 align="center">CLIENTES</h1>
<table align="center">
  <thead>
  <tr align="center">
    <th>Id</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Correo</th>
    <th>Contraseña</th> 
    <th>Direccion</th> 
    <th>Telefono 1.</th>
    <th>Telefono 2.</th>
    <th>Estado</th>
  </tr>
  </thead>
  <?php
  while ($cliente = $clientes->fetch_object())
  {
  ?>
  <tr>
        <td><?php  echo  ($cliente->idCliente)  ?>     </td>
        <td><?php  echo  ($cliente->Nombres)  ?></td> 
        <td><?php  echo  ($cliente->Apellidos) ?> </td>
        <td><?php  echo  ($cliente->correoClie)  ?></td>
        <td><?php  echo  ($cliente->contraClie)  ?></td>
        <td><?php  echo  ($cliente->direccion)  ?></td> 
        <td><?php  echo  ($cliente->Telefono)  ?></td> 
        <td><?php  echo  ($cliente->Telefono2)  ?></td> 
        <td><?php  echo  ($cliente->nombreEstado)  ?></td> 
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
