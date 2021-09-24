<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro Cliente</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/cliente.css">
	<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
</style>
</head>
<?php  
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

$sql1= "SELECT idEstado, nombreEstado FROM estado_cliente";

$estados = $objConexion->query($sql1);

?>
<body>
	<div style="text-align: center; width: 100%;">
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
	<form action="../Controlador/registrarCliente.php" id="Form">
		<h1>Registro Cliente</h1>
		<div id="Form">
			<div class="grupo">
				<label>No. Identificacipon</label><br>
				<input type="number" name="idCliente" id="idCliente" required>
			</div>
			<div class="grupo">
				<label>Correo</label><br>
				<p style="text-align: left; color: #C7C7C7;"><i>(Verifique que sea el correcto, este puede ser utilizado para recuperar acceso a la cuenta)</i></p>
				<input type="email" name="correoClie" id="correoClie" pattern="[a-zA-ZÀ-ž0-9._%+-]+@[a-zA-ZÀ-ž0-9.-]+\.[a-z]{2,}$" title="caracter@caracter.dominio" required>
			</div>

			<div class="grupo">
				<label>Contraseña</label><br>
				<input type="password" name="contraClie" id="contraClie" pattern=".{8,}" title="Minimo 8 caracteres" required><img src="../Imagenes/mostrar.png" id="boton" alt="VisualizarIcon">
			</div>
			<script>
	
	var boton = document.getElementById('boton');
	var input = document.getElementById('contraClie');

	boton.addEventListener('click', mostrarContraseña);

	function mostrarContraseña(){
		if(input.type == "password"){
			input.type = "text";
			boton.src = "../Imagenes/ocultar.png";
		} else {
			input.type = "password";
			boton.src = "../Imagenes/mostrar.png";
		}
	}
</script>

			<div class="grupo">
				<label>Dirección (opcional)</label><br>
				<input type="text" name="direccion" id="direccion" value="NULL">
			</div>


			<div class="grupo">
				<label>1.Teléfono</label><br>
				<input type="number" name="telefono" id="telefono" required>
			</div>

			<div class="grupo">
				<label>2.Teléfono (opcional)</label><br>
				<input type="number" name="telefono2" id="telefono2">
			</div>

			<div class="grupo">
				<label>Nombres</label><br>
				<input type="text" name="nombres" id="nombres" pattern="[A-Za-zÀ-ž\s]+" title="Solo texto, los valores numericos no son validos" required>
			</div>

			<div class="grupo">
				<label>Apellidos</label><br>
				<input type="text" name="apellidos" id="apellidos" pattern="[A-Za-zÀ-ž\s]+" title="Solo texto, los valores numericos no son validos" required>
			</div>

			<button type="submit">Registrar</button>
			<br>
		 </div>
	</form>
	<?php 
	if ($x==1){
  echo "<script>alert('Se ha registrado el cliente correctamente, por favor inicie sesión con los datos registrados');</script>";
}
if ($x==2){
  echo "<script>alert('No se pudo registrar el cliente');</script>";
}
if ($x==3) {
	echo "<script>alert('Para esta función debes acceder al sistema, por favor registrate si no tienes un usuario, de lo contrario inicia sesion con los datos que estes registrado.')</script>";
}
?>
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
				<img src="../Imagenes/facebook.png" alt="FacebookIcon">
				<label><a href="*">Siguenos en Facebook</a></label>
			</div>
			<div class="row1">
				<img src="../Imagenes/instagram.png" alt="InstagramIcon">
				<label><a href="*">Siguenos en Instagram</a></label>
			</div>
			<div class="row1">
				<img src="../Imagenes/twitter.png" alt="TwitterIcon">
				<label><a href="*">Siguenos en Twitter</a></label>
			</div>
		</div>
		<div class="colum3">
			<h1>Información Contactos</h1>
			<div class="row2">
				<img src="../Imagenes/telefono.png" alt="TelefonoIcon">
				<label>+57 300 605-7447</label>
			</div>
			<div class="row2">
				<img src="../Imagenes/telefono.png" alt="TelefonoIcon">
				<label>+57 304 601-5140</label>
			</div>
			<div class="row2">
				<img src="../Imagenes/telefono.png" alt="TelefonoIcon">
				<label>+57 314 4893063</label>
			</div>
			<div class="row2">
				<img src="../Imagenes/correo.png" alt="CorreoIcon">
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
</div>
</body>
</html>