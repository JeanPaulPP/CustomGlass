<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/claseUsuario.php";
extract ($_REQUEST);

#$pass_cifrado = password_hash($_REQUEST[ContraUsuario], PASSWORD_DEFAULT);

$objUsuario = new usuario();

$objUsuario->crearUsuario($_REQUEST['idUsuario'] , $_REQUEST['rol'], $_REQUEST['CorreoUsuario'], #$pass_cifrado
 $_REQUEST['ContraUsuario'] ,$_REQUEST['NombresUsu']);

$resultado = $objUsuario->registrarUsuario();

if ($resultado)
	header("location:../Vista/RegistroUsuario.php?x=1");
else
	header("location:../Vista/RegistroUsuario.php?x=2");

?>