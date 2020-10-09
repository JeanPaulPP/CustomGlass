<?php
  require "../Modelo/conexionBasesDatos.php";
  require "../Modelo/claseCliente.php";
  $objConexion = Conectarse();
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
<table border="3" align="center">
  <tr align="center">
    <td>Id</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Correo</td>
    <td>Contraseña</td> 
    <td>Direccion</td> 
    <td>Telefono 1.</td>
    <td>Telefono 2.</td>
    <td>Estado</td>
  </tr>
  
  <?php
  while ($cliente = $clientes->fetch_object())
  {
  ?>
  <tr>
        <td><?php  echo  utf8_encode($cliente->idCliente)  ?>     </td>
        <td><?php  echo  utf8_encode($cliente->Nombres)  ?></td> 
        <td><?php  echo  utf8_encode($cliente->Apellidos) ?> </td>
        <td><?php  echo  utf8_encode($cliente->correoClie)  ?></td>
        <td><?php  echo  utf8_encode($cliente->contraClie)  ?></td>
        <td><?php  echo  utf8_encode($cliente->direccion)  ?></td> 
        <td><?php  echo  utf8_encode($cliente->Telefono)  ?></td> 
        <td><?php  echo  utf8_encode($cliente->Telefono2)  ?></td> 
        <td><?php  echo  utf8_encode($cliente->nombreEstado)  ?></td> 
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
