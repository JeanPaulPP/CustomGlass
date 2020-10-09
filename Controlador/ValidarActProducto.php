<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="UPDATE producto SET idProducto= '$_REQUEST[idProducto]', EstadoProducto = '$_REQUEST[EstadoProducto]', TipoProducto = '$_REQUEST[TipoProducto]', nombreProd = '$_REQUEST[nombreProd]', medidasProd = '$_REQUEST[medidasProd]', materialProd = '$_REQUEST[materialProd]', costoUnitario = '$_REQUEST[costoUnitario]', IVA = '$_REQUEST[IVA]' WHERE idProducto = '$_REQUEST[idProducto]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
	header("location:../Vista/actualizarIdProducto.php?x=1");
else
	header("location:../Vista/actualizarIdProducto.php?x=2");

?>