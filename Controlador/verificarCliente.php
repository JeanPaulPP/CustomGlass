<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();

$sql="SELECT * FROM cliente WHERE correoClie = '$_REQUEST[correo]' AND contraClie = '$_REQUEST[contraseña]'";

$resultado=$objConexion->query($sql);

$verificar = $resultado->num_rows;
if ($verificar==1)  
{
	$usuario=$resultado->fetch_object();
	$_SESSION['user']= $usuario->correoClie;	
	header("location:../Vista/PrincipalClie.php");	
}
else
{
	header("location:../Vista/InicioSesi.php?x=1");  
}
?>