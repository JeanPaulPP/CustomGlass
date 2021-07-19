<?php
require "../Modelo/conexionBasesDatos.php";
  require "../Modelo/claseCatalogoProd.php";
  $objProductos = new catalogo();
  $productos= $objProductos->consultarServicios();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Servicios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
  <link rel="stylesheet" type="text/css" href="../Estilos/catalogoServ.css">
  <link rel="icon" type="image/x-icon" href="../Imagenes/icono.ico" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&display=swap');
</style>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
</style>
</head>
<body>
  <div id="barra">
    <ul>
      <li><a href="catalogoProd.php">Productos</a></li>
    </ul>
    <ul>  
      <li><a href="catalogoServ.php">Servicios</a></li>
    </ul>
    <ul>  
      <li><a href="selecPerfil.html">Iniciar Sesión</a></li>
    </ul>
    <ul>
      <li><a href="cliente.php">Registrarse</a></li>
    </ul>
    <ul>
      <li><a href="../index.html">Inicio</a></li>
    </ul>
  </div>
<h1 align="center">Productos</h1>
<div id="contenedor">
  <div id="contenedorf">
    <center>

  <?php
  while ($producto = $productos->fetch_object())
  {
   
  ?>
  <div id="card">
     <img src='<?php echo $producto->imagenProd; ?>' width='340px' height='220px'>
       <h4><?php  echo  utf8_encode($producto->nombreProd)  ?></h4>
        <p id="info"><?php  echo  utf8_encode($producto->medidasProd) ?> </p>
        <p id="info"><?php  echo  utf8_encode($producto->materialProd) ?> </p>
        <?php $costo = $producto->costoUnitario;
          $IVA = $producto->IVA;
          $total = $costo + $IVA;
         ?>
        <p id="tel">$ <?php  echo  utf8_encode($total)  ?></p>
        <button><a href="cliente.php?x=3">Comprar</a></button>
        </div>
  
  <?php
  }
  ?>
 </center>
</div>
</div>

<footer>
  <div class="container-footer-all">
    <div class="container-body">
    <div class="colum1">
      <h1>Más información</h1>
      <p>Aluminios Cabrera se dedica a ofrecer distintos productos y serivcios para las mejores soluciones en vidrio y aluminio, mediante el sistema de información web Custom Glass busca acceder a una mayor clientela con una buena calidad de servicio, facilitando en este la información de contacto, el catálogo y ventas en línea que ofrece la empresa.</p>
    </div>
    <div class="colum2">
      <h1>Redes Sociales</h1>
      <div class="row1">
        <img src="../Imagenes/facebook.png">
        <label><a href="*">Siguenos en Facebook</a></label>
      </div>
      <div class="row1">
        <img src="../Imagenes/instagram.png">
        <label><a href="*">Siguenos en Instagram</a></label>
      </div>
      <div class="row1">
        <img src="../Imagenes/twitter.png">
        <label><a href="*">Siguenos en Twitter</a></label>
      </div>
    </div>
    <div class="colum3">
      <h1>Información Contactos</h1>
      <div class="row2">
        <img src="../Imagenes/telefono.png">
        <label>+57 300 605-7447</label>
      </div>
      <div class="row2">
        <img src="../Imagenes/telefono.png">
        <label>+57 304 601-5140</label>
      </div>
      <div class="row2">
        <img src="../Imagenes/telefono.png">
        <label>+57 314 4893063</label>
      </div>
      <div class="row2">
        <img src="../Imagenes/correo.png">
        <label>jpatinopineros@gmail.com</label>
      </div>
    </div>
  </div>
  </div>

  <div class="container-footer">
    <div class="footer">
      <div class="copyright">
      © 2021 Todos los Derechos Reservados  |<a href="*">Evolves Code</a>
    </div>
    <div class="information">
      <a href="*">Información Compañia</a>  |<a href="*">Politica y Privacidad</a>  |<a href="*">Terminos y Condiciones</a>
    </div>
    </div>
  </div>
</footer>
</body>
</html>