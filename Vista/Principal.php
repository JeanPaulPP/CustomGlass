<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:index.php?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<style type="text/css">
		body{
	background: #ffffff;
	background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	height: 1000px;
	display: flex;
	}
	#box {
		position: absolute;
		background: white;
	padding: 40px 0;
	box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
	border-radius: 10px;
	width: 1100px;
	height: 500px;
	right: 100px;
	top: 10px;
	}
	ul {
		
		list-style: none;
	}
#divContenido {
	background-color: white;
  position:absolute;
  left:260px;
  top:40px;
  width:788px;
  height:480px;
  z-index:4;
  overflow:auto
  }
  #menu {
  	position: absolute;
  	top: 0px;
  	background-color: #6288FF;
  	width: 180px;
  	height: 580px;
  }
  li {
  		font-color: black; 
		width: 100px;
		background: #ffffff;
		background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
		background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
		
	}
	a { 
		color: #ffffff;
		text-decoration: none;
		font-family: 
		text-shadow: -2px -2px 1px #000; 
	 } 
	</style>
</head>
<body>
	<div id="box">
		<div id="menu">
		<ul>
			
	<li><a href="Principal.php?pg=Producto">Agregar Producto</a></li>
	<br>
	<li><a href="Principal.php?pg=listarProductos">Listar productos</a></li>
	<br>
	<li><a href="Principal.php?pg=actualizarIdProducto">Actualizar producto por Id</a></li>
	<!--<li><a href="Principal.php?pg=eliminarProductoId">Eliminar producto por Id</a></li>-->
	<br>
	<li><a href="Principal.php?pg=cliente">Agregar Cliente</a></li>
	<br>
	<li><a href="Principal.php?pg=listarClientes">Listar clientes</a></li>
	<br>
	<li><a href="Principal.php?pg=actualizarIdCliente">Actualizar cliente por Id</a></li>
	<!--<li><a href="Principal.php?pg=eliminarClienteId">Eliminar Cliente por Id</a></li>-->
	<br>
	<li><a href="Principal.php?pg=Servicio">Agregar Servicio</a></li>
	<br>
	<li><a href="Principal.php?pg=listarServicios">Listar servicios</a></li>
	<br>
	<li><a href="Principal.php?pg=actualizarIdServicio">Actualizar Servicio por Id</a></li>
	<!--<li><a href="Principal.php?pg=eliminarServicioId">Eliminar Servicio por Id</a></li>-->
	<br>
	<li><a href="../Controlador/salir.php">Cerrar Sesión</a></li>

</ul>
</div>
 <div id="divContenido">
        <?php include $pg.".php"; ?>
      </div>
</div>
</body>
</html>