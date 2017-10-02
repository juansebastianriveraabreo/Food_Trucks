<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos_administrador.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
</head>
<body>
		<div class="col-md-3 col-sm-3 col-xs-12 contenedor_menu" id="sin_margenes">
			<a href="#" class="btn-menu"><h4 class="negrilla">FOOD TRUCKS<i class="icono fa fa-bars" aria-hidden="true"></i></h4></a>
			
			<ul class="menu">
				<div class="imagen">
					<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				</div>
				
				<li><a href="#" id="principal"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Principal</a></li>

				<li >
					<a href="#"><i class="icono izquierda fa fa-list-ol" aria-hidden="true"></i>Inventario<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>

					<ul>
						<!--<li><a href="#"><i class="margen fa fa-truck" aria-hidden="true"></i> Loncheras</a></li>-->
						<?php 
							include ("Conexion/conexion.php");
							$sql="SELECT * FROM sucursal";
							$resul = $bd->query($sql);
							if ($resul->num_rows > 0) {
								while ($row = $resul->fetch_assoc()) {
									$nombre = $row['nombre_s'];
						?>
							<li id="sucursal"><a href="#"><i class="fa fa-truck" aria-hidden="true"></i><?php echo $nombre;  ?></a></li>
						<?php 
								}
							}
						 ?>
						
						
						
						<li><a href="#" id="añadir_sucursal"><i class="fa fa-plus-circle" aria-hidden="true"></i>Añadir sucursal</a></li>
					</ul>
				</li>

				<li>
					<a href="#"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Item<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
					<ul>
						<li><a href="#">Item1.1</a></li>
						<li><a href="#">Item1.1</a></li>
						<li><a href="#">Item1.1</a></li>
						<li><a href="#">Item1.1</a></li>
					</ul>
				</li>
				
				<li><a href="#" id="cerrar_sesion"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Cerrar sesion</a></li>
				
			</ul>
		</div>

		<div id="sin_margenes_header" class="hidden-xs">
			<div class="col-md-offset-3 col-sm-offset-4  continuacion "></div>
		</div>	
		
		<div class="col-md-offset-3 col-sm-offset-4" id="area_trabajo" >
				<?php include ('Principal.php'); ?>
		</div>
		
	

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>