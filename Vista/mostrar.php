<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mostrar</title>
</head>
<body>
	<center>
		<table>
			<thead>
				<th>Nombre</th>
				<th>Imagen</th>
			</thead>
			<tbody>
				<?php 
				include("../Modelo/conexion.php");
					$query = "SELECT * FROM  servicio";
					$resultado = $conexion->query($query);
					while ($row = $resultado->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $row['idServicio']; ?></td>
								<td><img height="50px" src="data:image/png;base64,<?php echo base64_encode($row['imagenServ']); ?>"></td>
							</tr>


						<?php
					}
				?>
			</tbody>
		</table>
	</center>
</body>
</html>