<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="UPDATE cliente SET idCliente= '$_REQUEST[idCliente]', EstadoCliente = '$_REQUEST[EstadoCliente]', correoClie = '$_REQUEST[correoClie]', contraClie = '$_REQUEST[contraClie]', direccion = '$_REQUEST[direccion]', Telefono = '$_REQUEST[telefono]', Telefono2 = '$_REQUEST[telefono2]', Nombres = '$_REQUEST[nombres]', Apellidos = '$_REQUEST[apellidos]' WHERE idCliente = '$_REQUEST[idCliente]' ";

$resultado=$objConexion->query($sql);

if ($resultado){
	header("location:../Vista/Principal.php?pg=actualizarIdCliente&x=1");
}
else{
	header("location:../Vista/Principal.php?pg=actualizarIdCliente&x=2");
}

?>