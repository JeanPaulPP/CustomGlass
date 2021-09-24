<?php 
	require "../Modelo/conexionBasesDatos.php";
	require "../Modelo/claseCarrito.php";
	extract($_REQUEST);
		if (!isset($_REQUEST['id'])){
 		 $id=0;
		}

	$objCarrito = new CarritoCompras();

	$resultado = $objCarrito->eliminarProdCar($_REQUEST['id']);

	if ($resultado) {
		header("location:../Vista/PrincipalClie.php?pg=CarritoCompras&x=1");
	}
		else {
			header("location:../Vista/PrincipalClie.php?pg=CarritoCompras&x=2");
		}
 ?>