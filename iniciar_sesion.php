<?php 
	SESSION_START();

	$user = $_POST['id'];	
	$pass = $_POST['pass'];

	$_SESSION['id'] = $user;
	$_SESSION['nombre'] = $pass;
?>

<?php 

	include('Conexion/conexion.php');

	$user = $_POST['id'];	
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM usuario WHERE id_usuario = $user AND nombre_u = '$pass' AND id_rol = 1";
	$resul = $bd->query($sql);
	if ($resul->num_rows > 0) {
		while ($row = $resul->fetch_assoc()) { 
			echo "<script>window.location.href = \"./Principal_admin.php\"</script>";
		}
	}else{ 
		echo "<script>window.location.href = \"./Food_trucks.php\"</script>";
 	}
?>

<script src="js/main.js"></script>