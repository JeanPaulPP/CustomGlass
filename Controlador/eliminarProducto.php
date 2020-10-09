<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="DELETE FROM producto WHERE idProducto='$_REQUEST[idProducto]'";

$resultado = $objConexion->query($sql);

$verificar = $resultado->num_rows;
if ($verificar==1)  
{	
	
}
else
{
	header("location:../Vista/eliminarProductoId.php?x=3");  
}
if ($resultado)
	{
	header('location:../Vista/eliminarProductoId.php?x=1');
	}
	else
	header('location:../Vista/eliminarProductoId.php?x=2');{
	}

?>