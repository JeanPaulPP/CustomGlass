<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:InicioSesi.php?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial";
?>
<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sqlusu="SELECT * FROM cliente WHERE (correoClie = '$_SESSION[user]')";
$usuarioN = $objConexion->query($sqlusu);

$usuarioNa = $usuarioN->fetch_object();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Custom Glass</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/principalClie.css">
	<link rel="icon" type="image/x-icon" href="../Imagenes/icono.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
</style>
</head>
<body>
	<div id="barra">
		<ul>
			<li><a href="">Productos</a></li>
		</ul>
		<ul>
			<li><a href="">Servicios</a></li>
		</ul>
		<ul>
			<li><a href="PrincipalClie.php?pg=actualizarCliente">Actualizar Datos</a></li>
		</ul>
		<ul>
			<li><a href="PrincipalClie.php?pg=clientepass">Actualizar Contraseña</a></li>
		</ul>
		<ul>
			<li><a href="../Controlador/salirClie.php?x=3">Cerrar Sesion</a></li>
		</ul>
	</div>
	<div id="contenedor">
		<div id="contenedorf">
        <?php include $pg.".php"; ?>
      </div>
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
			© 2021 Todos los Derechos Reservados	|<a href="*">Evolves Code</a>
		</div>
		<div class="information">
			<a href="*">Información Compañia</a>	|<a href="*">Politica y Privacidad</a> 	|<a href="*">Terminos y Condiciones</a>
		</div>
		</div>
	</div>
</footer>
</body>
</html>