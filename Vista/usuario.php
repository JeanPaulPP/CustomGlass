<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<?php
	$sql="SELECT u.idUsuario, u.Rol, u.CorreoUsuario, u.ContraUsuario, u.NombresUsu, r.nombreRol FROM usuario u, rol r WHERE (u.Rol = r.idRol) AND (u.CorreoUsuario = '$_SESSION[user]')";

	$usuarioperfil = $objConexion->query($sql);

	$usuarioperfile = $usuarioperfil->fetch_object();

	$sql1 = "SELECT * FROM rol";
	$roles = $objConexion->query($sql1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mi perfil</title>
</head>
<body>
<center>
	<form id="form" method="post" action="../Controlador/ValidarActUsuario.php">
		<h1>Mi Perfil</h1>
		<span class="grupo">
					<label for="idUsuario">No. Identificación:</label><br>
					<input type="text" readonly="readonly" name="idUsuario" id="idUsuario" required value="<?php echo $usuarioperfile->idUsuario ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="idUsuario">Nombre:</label><br>
					<input type="text" name="nombreUsuario" id="nombreUsuario" pattern="[A-Za-zÀ-ž\s]+" title="Solo texto, los valores numericos no son validos" required value="<?php echo $usuarioperfile->NombresUsu ?>"><span class="barra"></span>
				</span>
				<br><br>
				<label for="rol">Rol:</label><br>
				<select name="Rol" id="Rol"> 
					<option value="<?php echo $usuarioperfile->Rol ?>"><?php echo $usuarioperfile->Rol ?><p> - </p><?php echo ($usuarioperfile->nombreRol); ?></option>   
              
             			<?php
             			
              			while ($rol = $roles->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $rol->idRol?>">
                 			<?php echo $rol->idRol?><p> - </p><?php echo ($rol->nombreRol)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
				<br><br>
				<span class="grupo">
					<label for="correoClie">Correo :</label><br>
					<input type="email" name="correoUsu" pattern="[a-zA-ZÀ-ž0-9._%+-]+@[a-zA-ZÀ-ž0-9.-]+\.[a-z]{2,}$" title="caracter@caracter.dominio" required id="correoUsu" value="<?php echo $usuarioperfile->CorreoUsuario ?>"><span class="barra"></span>
				</span>
				<br><br>
				<button type="submit">Actualizar</button>
	</form>
</center>
<?php

if ($x==1)
  echo "<script>alert('Se actualizaron correctamente los datos');</script>";
if ($x==2)
  echo "<script>alert('No se pudo actualizar los datos');</script>";
?>
</body>
</html>