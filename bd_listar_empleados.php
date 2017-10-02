<?php 
	include('Conexion/conexion.php');

	$contador = 0;

	?>
	<br>
	<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Id</th>
							<th>Nombre usuario</th>
							<th>Telefono</th>
							<th>Funcionalidad</th>
							<th>Admin Sucursal</th>
							<th>Acciones</th>
						</tr>
					</thead>
<?php 
	$sql = "SELECT * FROM usuario u,rol r WHERE u.id_rol = r.id_rol";
	$resul = $bd->query($sql);
	if ($resul->num_rows > 0) {
		while ($row = $resul->fetch_assoc()) {
			$id= $row['id_usuario'];
			$nombre=$row['nombre_u'];
			$telefono=$row['telefono'];
			$Funcionalidad=$row['descripcion'];
			$id_sucursal=$row['id_sucursal']; 
			$contador++; ?>
			
					<tbody>
						<tr class="fila">
							<td><?php echo $contador; ?></td>
							<td class="id"><?php echo $id; ?></td>
							<td class="nombre"><?php echo $nombre; ?></td>
							<td class="nombre"><?php echo $telefono; ?></td>
							<td class="nombre"><?php echo $Funcionalidad; ?></td>
							<td class="nombre"><?php echo $id_sucursal; ?></td>
							<td><a href="#ventana5" type="button" class="btn btn-primary btn-xs modificar" data-toggle="modal" onclick="tabla_empleados('<?php echo $id; ?>','<?php echo $nombre; ?>','<?php echo $telefono; ?>','<?php echo "Funcionalidad"; ?>','<?php echo $id_sucursal; ?>','<?php echo $id_sucursal ?>');">A</a></td>
						</tr>
					
	<?php	}
	} ?>
	</tbody>
		</table>
		<?php 

?>