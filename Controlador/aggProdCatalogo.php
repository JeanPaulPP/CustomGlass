<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/claseCatalogoProd.php";
$imagen = $_FILES['imagenProd']['name'];
$ruta = $_FILES['imagenProd']['tmp_name'];
$destino = "../ProductosImg/".$imagen;
copy($ruta, $destino);
$objServicio = new catalogo();

$objServicio->crearCatalogo($_REQUEST['idCatalogo'], $_REQUEST['Producto'], $_REQUEST['Usuario'], $_REQUEST['fecha'], $destino);

$resultado = $objServicio->registrarCatalogo();

if ($resultado)
	header("location:../Vista/Principal.php?pg=productoCat&x=1");
else
	header("location:../Vista/Principal.php?pg=productoCat&x=2");

?>
