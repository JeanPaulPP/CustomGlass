<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:InicioCliente.php?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial";
?>
<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sqlusu="SELECT * FROM usuario WHERE (CorreoUsuario = '$_SESSION[user]')";
$usuarioN = $objConexion->query($sqlusu);

$usuarioNa = $usuarioN->fetch_object();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Estilos/principal.css">
	<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&display=swap');
</style>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo&family=Lobster&family=Merriweather&display=swap');
</style>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo&family=Lobster&display=swap');
</style>
	<link rel="icon" type="image/x-icon" href="../Imagenes/icono.ico" />
	<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
</style>
	
	<meta charset="utf-8">
</head>
<body>
	<div id="box">

		<p id="saludo"> Bienvenido,  <?php echo $usuarioNa->NombresUsu  ?></p>

		<a id="perfilusu" href="Principal.php?pg=usuario">Editar perfil</a>
		<a id="passusu" href="Principal.php?pg=usuariopass">Cambiar Contraseña</a>

		<div id="menu">
		
			<img src="../Imagenes/menu.png" width="100%"><p id="usuariotp">Usuario Administrador</p>

	<li><a id="opcion" href="Principal.php?pg=pgInicial">Inicio</a></li><br>	
	<li id="titulo">Productos
	<ul>
	<li><a id="opcion" href="Principal.php?pg=Producto">Agregar Producto</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=listarProductos">Listar productos</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=actualizarIdProducto">Actualizar producto por Id</a></li><br><br>
	<!--<li><a href="Principal.php?pg=eliminarProductoId">Eliminar producto por Id</a></li>-->
</ul>
</li>
<!--<li id="titulo">Clientes
	<ul>
	<li><a id="opcion" href="Principal.php?pg=cliente">Agregar Cliente</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=listarClientes">Listar clientes</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=actualizarIdCliente">Actualizar cliente por Id</a></li><br>
	<li><a href="Principal.php?pg=eliminarClienteId">Eliminar Cliente por Id</a></li>
</ul>
</li>-->
<li id="titulo">Servicios
	<ul>
	<li><a id="opcion" href="Principal.php?pg=Servicio">Agregar Servicio</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=listarServicios">Listar servicios</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=actualizarIdServicio">Actualizar Servicio por Id</a></li>
	<!--<li><a href="Principal.php?pg=eliminarServicioId">Eliminar Servicio por Id</a></li>-->
</ul>
</li>
	<li><a id="opcion" href="../Controlador/salir.php?x=3">Cerrar Sesión</a></li><br>

</div>
 <div id="divContenido">
        <?php include $pg.".php"; ?>
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