<?php 
	include('Conexion/conexion.php');

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$cantidad = $_POST['cantidad'];
	$codigo_bodega = $_POST['codigo_bodega'];

	$sql = "INSERT INTO ingrediente VALUES ($id,'$nombre',$tipo)";
	$resul = $bd->query($sql);
	if ($resul == 1) { ?>

		<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<strong>Felicitaciones!</strong> El ingrediente ha sido añadido<i class="fa fa-smile-o" aria-hidden="true"></i>
		</div>
		
<?php 	} else { ?>

			<div class="alert alert-danger alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  				<strong>Upss..!</strong> Ha ocurrido un error<i class="fa fa-frown-o" aria-hidden="true"></i>.
			</div>

<?php  	}

	$sql2 = "INSERT INTO bodega_ingrediente VALUES ($codigo_bodega,$id,$cantidad)";
	$resul2 = $bd->query($sql2);
	if ($resul2 == 1) { 
		
	} else { ?>

			<div class="alert alert-danger alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  				<strong>Upss..!</strong> Ha ocurrido un error<i class="fa fa-frown-o" aria-hidden="true"></i>.
			</div>
<?php }

?>