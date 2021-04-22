<?php
	$sqlA="SELECT ContraUsuario FROM usuario WHERE (CorreoUsuario = '$_SESSION[user]')";

	$contraseñausu = $objConexion->query($sqlA);
	$contrausu = $contraseñausu->fetch_object();

	extract ($_REQUEST);

	if ($contrausu->ContraUsuario == "$_REQUEST[contraActual]") {
		if ("$_REQUEST[contraNueva]" == "$_REQUEST[contraNuevaC]") {
			$update = $objConexion->query("UPDATE usuario SET ContraUsuario = '$_REQUEST[contraNueva]' WHERE (CorreoUsuario = '$_SESSION[user]')");
				if ($update) {
					echo "<script>alert('Se ha actualizado la contraseña');</script>";
				}
		}
		else {
			echo "<script>alert('Las dos contraseñas nuevas no coinciden');</script>";
		}
	}
	else {
		echo "<script>alert('La contraseña actual no coincide');</script>";
	}
?>