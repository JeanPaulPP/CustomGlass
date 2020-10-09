<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql="SELECT * FROM usuario WHERE CorreoUsuario = '$_REQUEST[correo]' AND ContraUsuario = '$_REQUEST[contraseña]'";

$resultado=$objConexion->query($sql);

$verificar = $resultado->num_rows;
if ($verificar==1)  
{
	$usuario=$resultado->fetch_object();
	$_SESSION['user']= $usuario->CorreoUsuario;	
	header("location:../Vista/Principal.php");	
}
else
{
	header("location:../Vista/inicioCliente.php?x=1");  
}
?>