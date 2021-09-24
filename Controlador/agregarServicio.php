<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/claseServicio.php";
$imagen = $_FILES['imagenServ']['name'];
$ruta = $_FILES['imagenServ']['tmp_name'];
$destino = "../ServiciosImg/".$imagen;
copy($ruta, $destino);
$objServicio = new servicio();

$objServicio->crearServicio($_REQUEST['Usuario'] , $_REQUEST['Servicio'], $_REQUEST['detServicio'], $_REQUEST['Estado'],   $_REQUEST['telefono'], $destino);

$resultado = $objServicio->registrarServicio();

if ($resultado){
	header("location:../Vista/Principal.php?pg=Servicio&x=1");
}
else{
	header("location:../Vista/Principal.php?pg=Servicio&x=2");
}

?>
