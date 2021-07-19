<?php
  require "../Modelo/claseServicio.php";
  $objServicios = new servicio();
  $servicios= $objServicios->consultarServicios();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Servicios</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Estilos/catalogoServ.css">
</head>
<body>
<h1 align="center">Servicios</h1>
  <div id="contenedorfa">

  <?php
  while ($servicio = $servicios->fetch_object())
  {
   
  ?>
  <div id="card">
     <img src='<?php echo $servicio->imagenServ; ?>' width='340px' height='220px'>
       <h4><?php  echo  utf8_encode($servicio->servNombre)  ?></h4>
        <p id="info"><?php  echo  utf8_encode($servicio->detServicio) ?> </p>
        <p id="tel">Más información al: <br><?php  echo  utf8_encode($servicio->telefono)  ?></p>
        </div>
  
  <?php
  }
  ?>
 
</div>
</body>