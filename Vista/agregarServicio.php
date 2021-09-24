<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="UPDATE servicio SET idServicio= '$_REQUEST[idServicio]', Usuario = '$_REQUEST[Usuario]', Servicio = '$_REQUEST[Servicio]', detServicio = '$_REQUEST[detServicio]', Estado = '$_REQUEST[Estado]', telefono = '$_REQUEST[telefono]', imagenServ = '$_REQUEST[imagenServ]' WHERE idServicio = '$_REQUEST[idServicio]' ";

$resultado=$objConexion->query($sql);

if ($resultado){
	header("location:../Vista/actualizarIdServicio.php?x=1");
}
else{
	header("location:../Vista/actualizarIdServicio.php?x=2");
}

?>