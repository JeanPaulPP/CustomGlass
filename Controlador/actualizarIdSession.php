<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();
$sql="UPDATE carrito_de_compras SET idSession= '$_REQUEST[idSession]', Estado = 2 WHERE idSession = '$_REQUEST[Sesion]' ";

$resultado=$objConexion->query($sql);

if ($resultado){
	header("location:../Vista/PrincipalClie.php?pg=realizarPedido&id=$_REQUEST[idSession]");
}
else{
	header("location:../Vista/PrincipalClie.php?pg=CarritoCompras&x=5");
}

?>