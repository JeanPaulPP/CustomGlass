<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="UPDATE usuario SET Rol= '$_REQUEST[Rol]', CorreoUsuario = '$_REQUEST[correoUsu]', NombresUsu = '$_REQUEST[nombreUsuario]'  WHERE idUsuario = '$_REQUEST[idUsuario]' ";

$resultado=$objConexion->query($sql);

if ($resultado){
	header("location:../Controlador/salir.php?x=4");
}
else{
	header("location:../Vista/Principal.php?pg=usuario&x=2");
}

?>