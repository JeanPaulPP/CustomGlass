<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<?php
	session_start();
	session_unset();
	session_destroy();
	if ($x==3)
		header('location:../Vista/InicioSesi.php?x=3');
	if ($x==2)
		header('location:../Vista/InicioSesi.php?x=2');
	if ($x==4)
		header('location:../Vista/InicioSesi.php?x=4')
	
?>
<?php