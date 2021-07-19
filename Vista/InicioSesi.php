<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/inisesion.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
	<link rel="icon" type="image/x-icon" href="../Imagenes/icono.ico" />
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
	<div id="contenedor">
	<center>
	<form action="../Controlador/verificarCliente.php" method="POST" id="Form">
		<div id="Form">
			<h1>Inicio de Sesión</h1>
			<div class="grupo">
				<input type="email" name="correo" id="correo" required><span class="barra"></span>
				<label>Correo</label>
			</div>

			<div class="grupo">
				<input type="password" name="contraseña" id="contraseña" required><span class="barra"></span>
				<label>Contraseña</label>
			</div>

			<button type="submit">Ingresar</button>
		</div>
	</form>
</center>
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
<script type="text/javascript">
	window.location('InicioCliente.php').reload;
</script>
	<?php

if ($x==1)
	echo "<script>alert('Usuario no registrado o los datos ingresados son incorrectos, intente de nuevo');</script>";
if ($x==2)
	echo "<script>alert('Debe iniciar sesion para acceder al sistema');</script>";
if ($x==3)
	echo "<script>alert('El usuario ha cerrado sesión');</script>";
if ($x==4) {
	echo "<script>alert('Se actualizaron correctamente los datos, por favor vuelva a iniciar sesion');</script>";
}
?>
</body>
</html>