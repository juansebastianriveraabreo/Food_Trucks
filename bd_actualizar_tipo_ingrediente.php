<?php 
	include('Conexion/conexion.php');

	$sql = "SELECT * FROM tipo_ingrediente";
	$resul = $bd->query($sql);
	if ($resul->num_rows > 0) {
		while ($row = $resul->fetch_assoc()) { ?>
			<option value="<?php echo $row['id_ingrediente_tipo']; ?>" class="tipo"><?php echo $row['nombre_tipo_ingred']; ?></option>
	<?php }
	}
?>