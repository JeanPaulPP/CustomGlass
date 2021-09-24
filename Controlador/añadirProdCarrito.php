<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/claseCarrito.php";
extract ($_REQUEST);
$objCarrito = new CarritoCompras();

$objCarrito->crearCarrito($_REQUEST['idSession'] , $_REQUEST['Cliente'], $_REQUEST['Producto'], $_REQUEST['cantProducto'],  $_REQUEST['fechaAgregado']);

$resultado = $objCarrito->registrarCarrito();

if ($resultado){
    header("location:../Vista/PrincipalClie.php?pg=catalogoProdClie&x=1");
}
else{
    header("location:../Vista/PrincipalClie.php?catalogoProdClie&x=2");
}

?>