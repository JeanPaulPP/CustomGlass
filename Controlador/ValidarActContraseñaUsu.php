<?php
	$sqlA="SELECT ContraUsuario FROM usuario WHERE (CorreoUsuario = '$_SESSION[user]')";

	$contraseñausu = $objConexion->query($sqlA);
	$contrausu = $contraseñausu->fetch_object();

	extract ($_REQUEST);

	if ($contrausu->ContraUsuario == "$_REQUEST[contraActual]") {
		if ("$_REQUEST[contraNueva]" == "$_REQUEST[contraNuevaC]") {
			$update = $objConexion->query("UPDATE usuario SET ContraUsuario = '$_REQUEST[contraNueva]' WHERE (CorreoUsuario = '$_SESSION[user]')");
				if ($update) {
					header("location:../Controlador/salir.php?x=4");
				}
		}
		else {
			header("location:../Vista/Principal.php?pg=usuariopass&x=2");
		}
	}
	else {
		header("location:../Vista/Principal.php?pg=usuariopass&x=3");
	}
?>