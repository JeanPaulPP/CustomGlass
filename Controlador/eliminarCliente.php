<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="DELETE FROM cliente WHERE idCliente='$_REQUEST[idCliente]'";

$resultado = $objConexion->query($sql);

$verificar = $resultado->num_rows;
if ($verificar==1){	
	echo "Verificar funcion";
}
else{
	header("location:../Vista/Principal.php?pg=eliminarClienteId&x=3");  
}
if ($resultado){
	header('location:../Vista/Principal.php?pg=eliminarClienteId&x=1');
	}
	else{
	header('location:../Vista/Principal.php?pg=eliminarClienteId&x=2');
	}

?>