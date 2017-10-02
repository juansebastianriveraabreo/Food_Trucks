<?php 
	include ('Conexion/conexion.php');

	$id = $_POST['id'];
	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];

	$sql = "UPDATE ingrediente i,bodega_ingrediente bi SET i.nombre_ingre = '$nombre',bi.cantidad= '$cantidad',i.id_ingrediente_tipo = $tipo WHERE i.id_ingrediente = $id AND bi.id_ingrediente = $id";
	$resul = $bd->query($sql);
	if ($resul == 1) { ?>
		<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<strong>Felicitaciones!</strong> El ingrediente ha sido actualizado<i class="fa fa-smile-o" aria-hidden="true"></i>
		</div>
	<?php  }else{ ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<strong>Upss..!</strong> Ha ocurrido un error<i class="fa fa-frown-o" aria-hidden="true"></i>.
		</div>
	<?php  }
?>