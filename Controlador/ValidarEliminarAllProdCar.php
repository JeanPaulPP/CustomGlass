<?php 
	require "../Modelo/conexionBasesDatos.php";
	require "../Modelo/claseCarrito.php";

	$objCarrito = new CarritoCompras();

	$resultado = $objCarrito->eliminarAllProdCar($_REQUEST['idSession']);

	if ($resultado) {
		header("location:../Vista/PrincipalClie.php?pg=CarritoCompras&x=3");
	}
		else {
			header("location:../Vista/PrincipalClie.php?pg=CarritoCompras&x=4");
		}
 ?>