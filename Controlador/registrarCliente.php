<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/claseCliente.php";
extract ($_REQUEST);
$objCliente = new cliente();

$objCliente->crearCliente($_REQUEST['idCliente'] , '1', $_REQUEST['correoClie'], $_REQUEST['contraClie'], $_REQUEST['direccion'],  $_REQUEST['telefono'] ,$_REQUEST['telefono2'] ,$_REQUEST['nombres'] ,$_REQUEST['apellidos']);

$resultado = $objCliente->registrarCliente();

if ($resultado){
	header("location:../Vista/cliente.php?x=1");
}
else{
	header("location:../Vista/cliente.php?x=2");
}

?>