<?php
function Conectarse()
{
	$Conexion=new mysqli("localhost","root","","customglassdb");
	
	if ($Conexion->connect_errno){
		echo "Problemas en la Conexion ". $Conexion->connect_error;
	}
	else{
		return $Conexion;
	}
}
?>







