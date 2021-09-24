<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="../Estilos/Estilos1.css">
	<style type="text/css">
		body{
	background: #ffffff;
	background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
	height: 700px;
	display: flex;
	}
	#box {
		position: relative;
		background: #ffffff;
	padding: 40px 0;
	box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
	border-radius: 10px;
	width: 500px;
	height: 400px;
	right: -450px;
	top: 100px;
	}
	a {
		width: 100px;
		height: 50px;
		background: #ffffff;
		background: -webkit-linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
		background: linear-gradient(to right, #BEBEBE, #6288FF, #62A5FF, #1951FF);
		
	}
	</style>
</head>
<body>
		<div id="box">
		<h1><em>Bienvenido A Aluminios Cabrera...</em></h1>
		<h3>Por favor seleccione una de las siguientes opciones, si usted ya se encuentra registrado en este sistema por favor seleccione "Iniciar Sesion", si usted aun no se encuentra registrado selecione "Registrarse", gracias.</h3>
		<br><br><br>
		<a href="Vista/RegistroUsuario.php">Registrarse.</a>
		<br><br><br>
		<a href="Vista/InicioCliente.php">Iniciar Sesion.</a>
	</div>
</body>
<?php

if ($x==1){
  echo "<script>alert('Se actualizaron correctamente los datos, por favor vuelva a iniciar sesion');</script>";
}
if ($x==2){
  echo "<script>alert('Por favor iniciar sesión');</script>";
}
if ($x==3){
  echo "<script>alert('Se ha cerrado la sesión');</script>";
}
?>
</html>