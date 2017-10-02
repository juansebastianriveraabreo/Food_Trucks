<?php 
	include ('Conexion/conexion.php');

	$nombre = $_POST['nombre'];
	$direccion= $_POST['direccion'];
	$especialidad= $_POST['especialidad'];

	/*echo $nombre.$direccion.$especialidad;*/

	$sql = "SELECT MAX(id_sucursal) AS MAXIMO_ID,MAX(id_bodega) AS MAXIMA_BODEGA FROM sucursal ";
	$resul = $bd->query($sql);
	if ($resul->num_rows > 0) {
		while ($row = $resul->fetch_assoc()) {
			$id_sucursal = $row['MAXIMO_ID']; 
			$id_bodega = $row['MAXIMA_BODEGA'];
			$id_s = $id_sucursal+101;
			echo $id_s;
			$id_b = $id_bodega+101;
			echo $id_b;
			$sql2 = "INSERT INTO sucursal VALUES ($id_s,'$nombre','$direccion','$especialidad',$id_b)";
			$resul2 = $bd->query($sql2);
			if($resul2 == 1)
			{ ?>
				<div class="alert alert-success alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  						<span aria-hidden="true">&times;</span>
  					</button>
  					<strong>Felicitaciones!</strong> La sucursal ha sido añadida<i class="fa fa-smile-o" aria-hidden="true"></i>.
				</div>
	  <?php }else{?>
				<div class="alert alert-danger alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  						<span aria-hidden="true">&times;</span>
  					</button>
  					<strong>Upss..!</strong> Ha ocurrido un error<i class="fa fa-frown-o" aria-hidden="true"></i>.
				</div>
	  <?php	}
		}
	}
?>