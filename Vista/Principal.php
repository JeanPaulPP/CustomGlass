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
	<link rel="icon" type="image/x-icon" href="../Imagenes/header.ico" />
	<style type="text/css">
		body{
	background: #ffffff;
	background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	display: flex;
	}
	#box {
		position: absolute;
		background: white;
	padding: 40px 0;
	box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
	border-radius: 10px;
	width: 1100px;
	height: 100%;
	right: 109px;
	top: 330px;
	display: inline-block;
	}
	#menu ul {
		
		list-style: none;
		display: inline-block;
		margin: 0;
		padding: 0;
	}
#divContenido {
	background-color: white;
  position:absolute;
  left:80px;
  top:110px;
  width:928px;
  height:500px;
  z-index:4;
  overflow:auto;
  }
  #menu {
  	position: absolute;
  	top: 0px;
  	background-color: black;
  	width: 1100px;
  	height: 80px;
  }
  li {
  		float: left;
  		font-color: black; 
		background: #ffffff;
		background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
		background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
		display: inline-block;
		width: 110px;
		height: 80px;
	}
 a { 
		color: #ffffff;
		text-decoration: none;
		font-family: 
		text-shadow: -2px -2px 1px #000; 
		padding: 20px;
		height: 30px;
		display: inline-block;
	 } 

 li {
	 	display: inline-block;
	 	text-align: center;
	 }
	  li:hover {
	 	background: black;
	 	font-color: black;
	 }

#header {
	position: absolute;
	left: 140px;
	margin: 0;
	padding: 0;
}

button{
	background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	border: none;
	color: #FFFFFF;
	display: block;
	width: 80%;
	margin: 10px auto; 
	height: 40px;
	font-size: 16px;
	cursor: pointer;
	border-bottom:1px solid var(--colorTextos)
	border-radius: 5px;
}
input{
	font-size: 15px;
	width: 50%;	
}

input:focus{
	outline-color: #6D7074;
	color: #5E5D5D;
}
h1{
	text-align: center;
	font-weight: 700;
}

form{
	background: #ffffff;
	padding: 40px 0;
	box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
	border-radius: 10px;
}

.form{
	width: 100%;
	margin: auto;
}

form .grupo{
	position: relative;
	margin: 20px;
}
select{
	border-radius: 10px;
	width: 50%;
	height: 30px;
	font-size: 16px;
	color: #5E5D5D;

}

select:focus{
	outline: none;
}

textarea{
	color: #c6c6c6;
	font-size: 15px;
	border-radius: 10px;
	width: 100%
}

textarea:focus{
	outline: none;
	color: #5E5D5D;
}
label{
	color: var(--colorTextos);
	font-size: 20px;
	transition: 0.5s ease-in-out all;
	pointer-events: none;
}
:root{
	--colorTextos:#6D7074;
} 

	</style>
</head>
<body>
	<div id="header" align="center">
	<img src="../Imagenes/250576.png" >
</div>
	<div id="box">
		<div id="menu">
		<ul>
			
	<li><a href="Principal.php?pg=Producto">Agregar Producto</a></li>
	<li><a href="Principal.php?pg=listarProductos">Listar productos</a></li>
	<li><a href="Principal.php?pg=actualizarIdProducto">Actualizar producto por Id</a></li>
	<!--<li><a href="Principal.php?pg=eliminarProductoId">Eliminar producto por Id</a></li>-->
	<li><a href="Principal.php?pg=cliente">Agregar Cliente</a></li>
	<li><a href="Principal.php?pg=listarClientes">Listar clientes</a></li>
	<li><a href="Principal.php?pg=actualizarIdCliente">Actualizar cliente por Id</a></li>
	<!--<li><a href="Principal.php?pg=eliminarClienteId">Eliminar Cliente por Id</a></li>-->
	<li><a href="Principal.php?pg=Servicio">Agregar Servicio</a></li>
	<li><a href="Principal.php?pg=listarServicios">Listar servicios</a></li>
	<li><a href="Principal.php?pg=actualizarIdServicio">Actualizar Servicio por Id</a></li>
	<!--<li><a href="Principal.php?pg=eliminarServicioId">Eliminar Servicio por Id</a></li>-->
	<li><a href="../Controlador/salir.php">Cerrar Sesión</a></li>

</ul>
</div>
 <div id="divContenido">
        <?php include $pg.".php"; ?>
      </div>
</div>
</body>
</html>