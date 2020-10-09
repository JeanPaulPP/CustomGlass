<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/claseServicio.php";
extract ($_REQUEST);
$objServicio = new servicio();

$objServicio->crearServicio($_REQUEST['Usuario'] , $_REQUEST['Servicio'], $_REQUEST['detServicio'], $_REQUEST['Estado'],   $_REQUEST['telefono'],$_REQUEST['imagenServ']);

$resultado = $objServicio->registrarServicio();

if ($resultado)
	header("location:../Vista/Servicio.php?x=1");
else
	header("location:../Vista/Sericio.php?x=2");

?>