<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="DELETE FROM producto WHERE idProducto='$_REQUEST[idProducto]'";

$resultado = $objConexion->query($sql);

$verificar = $resultado->num_rows;
if ($verificar==1){	
	echo "verificar funcion";
}
else{
	header("location:../Vista/Principal.php?pg=eliminarProductoId&x=3");  
}
if ($resultado){
	header('location:../Vista/Principal.php?pg=eliminarProductoId&x=1');
	}
	else{
	header('location:../Vista/Principal.php?pg=eliminarProductoId&x=2');
	}

?>