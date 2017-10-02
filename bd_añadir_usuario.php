<?php 
	include('Conexion/conexion.php');

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$funcionalidad = $_POST['funcionalidad'];
	$id_sucursal = $_POST['id_sucursal'];
	$imagen = $_POST['imagen'];

	$sql = "INSERT INTO usuario VALUES ($id,'$nombre','$imagen','$telefono',$funcionalidad,$id_sucursal)";
	$resul = $bd->query($sql);

	if ($resul==1) { ?>
		<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<strong>Felicitaciones!</strong> El empleado ha sido actualizado<i class="fa fa-smile-o" aria-hidden="true"></i>
		</div>
	<? } else { ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<strong>Upss..!</strong> Ha ocurrido un error<i class="fa fa-frown-o" aria-hidden="true"></i>.
		</div>
	<?php }
?>