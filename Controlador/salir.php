<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<?php
	session_start();
	session_unset();
	session_destroy();
	/* se envía al formualrio inicio sesión con una variable x=3, que le indica que
	hn cerrado la sesión */
	if ($x==3)
		header('location:../index.php?x=3');
	if ($x==2)
		header('location:../index.php?x=2');
	if ($x==1)
		header('location:../index.php?x=1')
	
?>
<?php

#if ($x==1)
#  echo "<script>alert('Se actualizaron correctamente los datos, por favor vuelva a iniciar sesion');</script>";
#?>





