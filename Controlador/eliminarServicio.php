<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="DELETE FROM servicio WHERE idServicio='$_REQUEST[idServicio]'";

$resultado = $objConexion->query($sql);

$verificar = $resultado->num_rows;
if ($verificar==1)  
{	
	
}
else
{
	header("location:../Vista/eliminarServicioId.php?x=3");  
}
if ($resultado)
	{
	header('location:../Vista/eliminarServicioId.php?x=1');
	}
	else
	header('location:../Vista/eliminarServicioId.php?x=2');{
	}

?>