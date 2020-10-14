<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/claseProducto.php";
extract ($_REQUEST);
$objProducto = new producto();

$objProducto->crearProducto($_REQUEST['idProducto'] , $_REQUEST['EstadoProducto'], $_REQUEST['TipoProducto'], $_REQUEST['nombreProd'],   $_REQUEST['medidasProd']
,$_REQUEST['materialProd'] ,$_REQUEST['costoUnitario'] ,$_REQUEST['IVA']);

$resultado = $objProducto->registrarProducto();

if ($resultado)
	header("location:../Vista/Principal.php?pg=Producto&x=1");
else
	header("location:../Vista/Principal.php?pg=Producto&x=2");

?>