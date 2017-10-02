<?php 
	include ("Conexion/conexion.php");

	$nombre_sucursal = $_POST['sucursal'];
	$sql="SELECT * FROM sucursal WHERE nombre_s = '$nombre_sucursal'";
	$resul = $bd->query($sql);

	if ($resul->num_rows > 0) {
		while ($row = $resul->fetch_assoc()) {
			$id_sucursal = $row['id_sucursal'];
			$id_bodega = $row['id_bodega'];
			//echo "<label class=\"invisible\" id=\"codigo_bodega\">$id_bodega</label>";
			//echo $id_sucursal;

			$sql2 = "SELECT *
			 		FROM 	tipo_ingrediente ti,
				 			ingrediente i,
    			  			bodega_ingrediente bi 
			 		WHERE 	ti.id_ingrediente_tipo = i.id_ingrediente_tipo
			   	  			AND i.id_ingrediente = bi.id_ingrediente
    			 	 		AND bi.id_bodega = $id_bodega
    			 	GROUP BY ti.id_ingrediente_tipo";
			
    		$resul2 = $bd->query($sql2);
			if ($resul2->num_rows > 0) {
				while ($row = $resul2->fetch_assoc()) {	 
					$id_tipo_ = $row['id_ingrediente_tipo'];
					$acumulador++;
					$cabeza = "heading".$acumulador;
					$href = "#collapse".$acumulador;
					$identificador = "collapse".$acumulador;
				 ?>
				<div class="panel-group" id="acordion" role="tablist">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="<?php echo $cabeza; ?>">
							<h4 class="quitar"><a href="<?php echo $href; ?>" data-toggle="collapse" data-parent="#acordion">
								<?php echo $row['id_ingrediente_tipo'].'-'.$row['nombre_tipo_ingred'];  ?>			
							</a></h4>
						</div>
					</div> 

					<div id="<?php echo $identificador; ?>" class="panel-collapse collapse">
						<div class="panel-body">
  							<table class="table sin_margen_bajo">
  								<tbody>
				<?php 	
					$sql3="	SELECT i.nombre_ingre AS NOMBRE_PRODUCTO,i.id_ingrediente AS ID,bi.cantidad AS CANTIDAD 
							FROM 	ingrediente i,bodega_ingrediente bi 
							WHERE 	i.id_ingrediente_tipo = $id_tipo_ 
									AND i.id_ingrediente = bi.id_ingrediente 
									AND bi.id_bodega=$id_bodega";
									$resul3 = $bd->query($sql3);
									if ($resul3->num_rows > 0) {
										while ($row = $resul3->fetch_assoc()) { 
											$contador++;
											$id_ingrediente = $row['ID'];
											$nombre_ingrediente = $row['NOMBRE_PRODUCTO'];
											$cantidad_ingrediente = $row['CANTIDAD']; ?>
					
						<div class="checkbox">
							<form action="" class="form-horizontal">
								
									<tr>
										<td><label for="" class="separacion_menu"><input type="checkbox" id="<?php echo $id_ingrediente;?>" onclick="activar_ingredientes('<?php echo $id_ingrediente; ?>')"><?php echo $nombre_ingrediente; ?></label></td>
										<td><label for="" class="invisible">a</label></td>
										<td><label for="" class="invisible">a</label></td>
										<td><input type="text" placeholder="Cantidad" disabled="true" class="<?php echo $id_ingrediente; ?>"></td>
									</tr>
								
							</form>
						</div>
					
<?php 									}
									} ?>
									</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php }
			}
		}
	}?>

