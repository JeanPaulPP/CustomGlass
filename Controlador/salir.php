<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<?php
	session_start();
	session_unset();
	session_destroy();
	/* se envía al formualrio inicio sesión con una variable x=3, que le indica que
	hn cerrado la sesión */
	if ($x==3){
		header('location:../Vista/InicioCliente.php?x=3');
	}
	if ($x==2){
		header('location:../Vista/InicioCliente.php?x=2');
	}
	if ($x==4){
		header('location:../Vista/InicioCliente.php?x=4');
	}
	
?>





