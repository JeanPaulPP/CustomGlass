<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>mostrar</title>
</head>
<body>
		<table>
			<caption>Tabla de imagenes de servicios</caption>
			<thead>
				<th id="Nombre">Nombre</th>
				<th id="Imagen">Imagen</th>
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
								<td><img alt="Custom Glass" height="50px" src="data:image/png;base64,<?php echo base64_encode($row['imagenServ']); ?>"></td>
							</tr>


						<?php
					}
				?>
			</tbody>
		</table>
</body>
</html>