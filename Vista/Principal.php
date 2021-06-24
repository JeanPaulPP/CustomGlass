<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:../index.php?x=2");
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
	<style type="text/css">
		body{
	background: #ffffff;
	background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	display: flex;
	margin: 0;
	padding: 0;
	}
	#box {
		position: absolute;
		background: #ffffff;
	background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	padding: 40px 0;
	box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
	width: 100%;
	height: 100%;
	display: inline-block;
	margin: 0;
	padding: 0;
	}
	h1 {
		font-family: 'Kanit', sans-serif;
		color: #f37d4d;
		text-shadow: 2px 2px 2px black;
		text-decoration: underline;
	}
	.inicio {
		position: relative;
		display: inline-block;
		top: 80px;
		left: 520px;
		font-family: 'Kanit', sans-serif;
		color: #f37d4d;
		text-shadow: 2px 2px 2px black;
		text-decoration: none;
	}
	.texte{
		position: absolute;
		display: inline-block;
		left: 500px;
		top: 180px;
		margin: 20px;
		font-family: 'Lobster', cursive;
		font-size: 20px;
	}
	#AC {
		position: absolute;
		top: 30px;
		left: 40px;
		width: 200px;
		height: 400px;
		margin: 10px;
	}
	#AC2 {
		position: absolute;	
		top: 40px;
		left: 280px;
		width: 200px;
		height: 400px;
	}
	#saludo {
		position: relative;
		left: 400px;
		top: 50px;
		display: inline;
		font-family: 'Lobster', cursive;
		font-size: 50px;
		color: #f37d4d;
		text-shadow: 2px 2px 2px black;
	}
	#menu ul {
		
		list-style: none;
		display: inline-block;
		margin: 0;
		padding: 0;
	}

	#usuariotp {
		font-family: 'Merriweather', serif;
		display: inline;
		color: #ddd;
		top: -25px;
		right: -85px;
		position: relative;
	}
	#perfilusu {
		text-decoration: none;
		display: inline;
		position: absolute;
		color: black;
		font-family: 'Cairo', sans-serif; 
		text-shadow: 1px 1px 1px #000; 
		padding: 10px;
		position: absolute;
		background: white;
		right: 200px;
		top: 85px;
	}
	#perfilusu:hover {
	 	background: #ddd;
	 	color: black;
	 }
	 #passusu {
	 	text-decoration: none;
		display: inline;
		position: absolute;
		color: black;
		font-family: 'Cairo', sans-serif; 
		text-shadow: 1px 1px 1px #000; 
		padding: 10px;
		position: absolute;
		background: white;
		right: 35px;
		top: 85px;
	 }
	 #passusu:hover {
	 	background: #ddd;
	 	color: black;
	 }
#divContenido {
	background-color: white;
  position:absolute;
  left:380px;
  top:125px;
  width:968px;
  height:480px;
  z-index:4;
  overflow:auto;
  border-radius: 10px;
  }
  #menu {
  	position: absolute;
  	top: 0px;
  	background-color: white;
  	width: 350px;
  	height: 100%;
  	margin: 0;
  	box-shadow: 3px, 3px, 3px black;
  }
  #menu li ul{
  	display: none;
  	position: absolute;
  	right: -30px;
  }
  #menu li:hover > ul {
  	display: block;
  	list-style: cambodian; 
  }
  #titulo {
  	color: red;
		text-decoration: none;
		font-family: 'Cairo', sans-serif; 
		text-shadow: 1px 1px 1px #000; 
		padding: 8px;
		height: 25px;
		display: inline-block;
		position: center;
  }

  li {
  		float: left;
  		font-color: black; 
		background: white;
		position: center;
		width: 310px;
		height: 42px;
		margin: 0;
		padding: 8px;
		border-radius: 50px;
	}
 #opcion { 
		color: black;
		text-decoration: none;
		font-family: 'Cairo', sans-serif; 
		text-shadow: 1px 1px 1px #000; 
		padding: 20px;
		height: 30px;
		display: inline-block;
		position: center;
	 } 

 li {
	 	display: inline-block;
	 	text-align: center;
	 }
	  li:hover {
	 	background: #ddd;
	 	color: white;
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
table {
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
}
th, td {
	padding: 10px;	
}
thead {
	background-color: #1951FF;
	border-bottom: solid 5px #0F362D; 
	color: white;
}
tr:nth-child(even){
	background-color: #ddd;
}
tr:hover td{
	background-color: #6288FF;
	color: white;
}

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
<li id="titulo">Clientes
	<ul>
	<li><a id="opcion" href="Principal.php?pg=cliente">Agregar Cliente</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=listarClientes">Listar clientes</a></li><br>
	<li><a id="opcion" href="Principal.php?pg=actualizarIdCliente">Actualizar cliente por Id</a></li><br>
	<!--<li><a href="Principal.php?pg=eliminarClienteId">Eliminar Cliente por Id</a></li>-->
</ul>
</li>
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
</body>
</html>