<?php
$sql="SELECT * FROM cliente c, estado_cliente ec WHERE (c.EstadoCliente = ec.idEstado) AND (c.correoClie = '$_SESSION[user]')";

$clientex = $objConexion->query($sql);

$cliente = $clientex->fetch_object();

$sql2= "SELECT idEstado, nombreEstado FROM estado_cliente";

$estados = $objConexion->query($sql2);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Datos</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Actualizar Datos</h2>
	<form id="form" method="post" action="../Controlador/ValidarActCliente.php">
		<span class="grupo">
					<label for="idCliente">No. Identificación Cliente:</label><br>
					<input type="text" readonly="readonly" name="idCliente" id="idCliente" required value="<?php echo $cliente->idCliente ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="nombres">Nombres :</label><br>
					<input type="text" name="nombres" pattern="[A-Za-zÀ-ž\s]+" title="Solo texto, los valores numericos no son validos" required id="nombres" value="<?php echo utf8_encode($cliente->Nombres) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="apellidos">Apellidos :</label><br>
					<input type="text" name="apellidos" pattern="[A-Za-zÀ-ž\s]+" title="Solo texto, los valores numericos no son validos" required id="apellidos" value="<?php echo utf8_encode($cliente->Apellidos) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="correoClie">Correo :</label><br>
					<input type="email" name="correoClie" pattern="[a-zA-ZÀ-ž0-9._%+-]+@[a-zA-ZÀ-ž0-9.-]+\.[a-z]{2,}$" title="caracter@caracter.dominio" required id="correoClie" value="<?php echo utf8_encode($cliente->correoClie) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="contraClie">Contraseña :</label><br>
					<input type="text" name="contraClie" pattern=".{8,}" title="Minimo 8 caracteres" required id="contraClie" value="<?php echo utf8_encode($cliente->contraClie) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="direccion">Direccion :</label><br>
					<input type="text" name="direccion" required id="direccion" value="<?php echo utf8_encode($cliente->direccion) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="telefono">1. Telefono :</label><br>
					<input type="number" name="telefono" required id="telefono" value="<?php echo utf8_encode($cliente->Telefono) ?>"><span class="barra"></span>
				</span>
				<br><br>
				<span class="grupo">
					<label for="telefono2">2. Telefono :</label><br>
					<input type="number" name="telefono2" id="telefono2" value="<?php echo utf8_encode($cliente->Telefono2) ?>"><span class="barra"></span>
				</span>

				<br><br>
				<label for="EstadoCliente">Estado :</label><br>
				<select name="EstadoCliente" id="EstadoCliente"> 
					<option value="<?php echo $cliente->EstadoCliente ?>"><?php echo utf8_encode($cliente->nombreEstado); ?></option>   
              
             			<?php
             			
              			while ($estado = $estados->fetch_object())
              			{
               			?>
                 		<option value="<?php echo $estado->idEstado?>">
                 			<?php echo utf8_encode($estado->nombreEstado)?>
                 			</option>  
            			<?php  
              			}		  
              
             			?>
				</select>
				<br><br>
				<button type="submit">Actualizar</button>
	</form>
</body>
</html>