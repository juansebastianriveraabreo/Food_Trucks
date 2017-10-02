<?php 
	include ('Conexion/conexion.php');

	$opcion = $_POST['opcion'];

	if ($opcion == 0) {
		$id_producto = $_POST['id'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
	
		$sql2 = "INSERT INTO producto VALUES ($id_producto,'$nombre',$precio)";
		$resul = $bd->query($sql2);

		if ($resul == 1) {
			echo "Agregado";
		}else{
			echo "Problemax";
		}
	}
	
	if ($opcion==1) {
		$ingrediente = $_POST['ingrediente'];
		$cantidad = $_POST['cantidad'];

		$sql = "INSERT INTO producto_ingrediente VALUES ('$id_producto','$ingrediente','$cantidad')";
		$resultado = $bd->query($sql);

		if($resultado == 1){
			echo "<h1>INSERTADO</h1>";
		}else{
			echo "PAILAS";
		}
	}

 ?>