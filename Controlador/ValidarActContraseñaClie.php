<?php
	$sqlA="SELECT contraClie FROM cliente WHERE (correoClie = '$_SESSION[user]')";

	$contraseñausu = $objConexion->query($sqlA);
	$contrausu = $contraseñausu->fetch_object();

	extract ($_REQUEST);

	if ($contrausu->contraClie == "$_REQUEST[contraActual]") {
		if ("$_REQUEST[contraNueva]" == "$_REQUEST[contraNuevaC]") {
			$update = $objConexion->query("UPDATE cliente SET contraClie = '$_REQUEST[contraNueva]' WHERE (correoClie = '$_SESSION[user]')");
				if ($update) {
					header("location:../Controlador/salirClie.php?x=4");
				}
		}
		else {
			header("location:../Vista/PrincipalClie.php?pg=clientepass&x=2");
		}
	}
	else {
		header("location:../Vista/PrincipalClie.php?pg=clientepass&x=3");
	}
?>