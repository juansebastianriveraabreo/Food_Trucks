<?php 
	include ('Conexion/conexion.php');

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];

	$sql = "INSERT INTO tipo_ingrediente VALUES ($id,'$nombre')";
	$resul = $bd->query($sql);
	if ($resul == 1) { ?>
		<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<strong>Felicitaciones!</strong> El tipo de ingrediente ha sido añadido<i class="fa fa-smile-o" aria-hidden="true"></i>.
		</div>
	<?php  }else{?>
		<div class="alert alert-danger alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<strong>Upss..!</strong> Ha ocurrido un error<i class="fa fa-frown-o" aria-hidden="true"></i>.
		</div>
	<?php  }
?>