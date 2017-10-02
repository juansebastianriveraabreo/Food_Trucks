<div class="col-md-11 col-sm-10 col-xs-12">
	<h1 id="nombre_sucursal"><i class="fa fa-truck" aria-hidden="true"></i></h1>
	<div id="margen">
	<div role="tabpanel">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Inventario</a></li>
			<li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Menu</a></li>
			<li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Empleados</a></li>
		</ul>

		<div class="tab-content con_padding">

			<div role="tabpanel" class="tab-pane active" id="seccion1"><!--INVENTARIO-->
				<br>
				<p>Aqui podra observar el estado del inventario de la bodega respectiva.</p>
				
				<a href="#ventana1" class="btn btn-success btn-md" data-toggle="modal"><i class="fa fa-plus icono_espacio" aria-hidden="true"></i>Añadir tipo de ingrediente</a>
				<a href="#ventana3" class="btn btn-success btn-md" data-toggle="modal"><i class="fa fa-cutlery icono_espacio" aria-hidden="true"></i>Añadir ingrediente</a>

				<?php include('bd_listar_tipos_ingredientes.php'); ?>

				<div class="modal fade" id="ventana2">
					<div class="modal-dialog">
						<div class="modal-content">
						<!--Este es el encabezado de la nueva ventana-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Actualizar producto</h4>
							</div>
						<!--Este es el cuerpo de la nueva ventana-->
							<div class="modal-body">
							<div id="area_notificaciones_ingrediente"></div>
								<p>Para actualizar el producto se necesitan los siguientes datos:</p>

								<form action="" class="form-horizontal">
									<div class="input-group">
										<span class="input-group-addon">Id</span>
										<input type="text" class="form-control" id="id_producto" placeholder="Identificacion del producto" disabled>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Tipo de ingrediente</span>
										<select name="" id="combo" class="form-control">
											<?php include('bd_actualizar_tipo_ingrediente.php'); ?>
										</select>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Nombre</span>
										<input type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Cantidad</span>
										<input type="text" class="form-control" id="cantidad" placeholder="Cantidad del producto">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Precio</span>
										<input type="text" class="form-control" id="precio" placeholder="Precio del producto">
									</div>
								</form>
								
							</div>

							<!--FOOTER de la nueva ventana-->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-success" id="btn_guardar">GUARDAR</button>	
							</div>

						</div>
					</div>
				</div>

				<div class="modal fade" id="ventana1">
					<div class="modal-dialog">
						<div class="modal-content">
						<!--Este es el encabezado de la nueva ventana-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Añadir tipo de ingrediente</h4>
							</div>
						<!--Este es el cuerpo de la nueva ventana-->
							<div class="modal-body">
								<div id="area_notificaciones"></div>
								<p>Añada un nuevo tipo de ingrediente para esto necesita los siguientes datos:</p>

								<form action="" class="form-horizontal">
									<div class="input-group">
										<span class="input-group-addon">Id</span>
										<input type="text" class="form-control" id="id_tipo" placeholder="Identificacion del tipo de ingrediente">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Nombre</span>
										<input type="text" class="form-control" id="nombre_tipo" placeholder="Nombre del tipo de ingrediente">
									</div>
								</form>
								
							</div>

							<!--FOOTER de la nueva ventana-->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-success" id="btn_añadir">Añadir</button>	
							</div>

						</div>
					</div>
				</div>

				<div class="modal fade" id="ventana3">
					<div class="modal-dialog">
						<div class="modal-content">
						<!--Este es el encabezado de la nueva ventana-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Añadir ingrediente</h4>
							</div>
						<!--Este es el cuerpo de la nueva ventana-->
							<div class="modal-body">
							<div id="area_notificaciones_añadir_ingrediente"></div>
								<p>Para añadir el ingrediente necesitan los siguientes datos:</p>

								<form action="" class="form-horizontal">
									<div class="input-group">
										<span class="input-group-addon">Id</span>
										<input type="text" class="form-control" id="id_ingrediente" placeholder="Identificacion del ingrediente">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Tipo de ingrediente</span>
										<select name="" id="combo_ingrediente" class="form-control">
											<?php include('bd_actualizar_tipo_ingrediente.php'); ?>
										</select>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Nombre</span>
										<input type="text" class="form-control" id="nombre_ingrediente" placeholder="Nombre del ingrediente">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Cantidad</span>
										<input type="text" class="form-control" id="cantidad_ingrediente" placeholder="Cantidad del ingrediente">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Precio</span>
										<input type="text" class="form-control" id="precio" placeholder="Precio del ingrediente">
									</div>
								</form>
								
							</div>

							<!--FOOTER de la nueva ventana-->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-success" id="btn_guardar_ingrediente">GUARDAR</button>	
							</div>

						</div>
					</div>
				</div>
				

			</div>
				

			<div role="tabpanel" class="tab-pane" id="seccion2"><!--MENU-->
				<br>
				<p>En esta seccion podra crear un nuevo plato para exihibir en su menu.</p>

				<a href="#ventana7" class="btn btn-primary btn-md" data-toggle="modal"><i class="fa fa-thumbs-up icono_espacio" aria-hidden="true"></i>Cree un nuevo plato</a>
				<a href="#" class="btn btn-primary btn-md" data-toggle="modal"><i class="fa fa-refresh icono_espacio" aria-hidden="true"></i>Modifique un plato</a>
				<a href="#" class="btn btn-primary btn-md" data-toggle="modal"><i class="fa fa-minus-circle icono_espacio" aria-hidden="true"></i>Elimine un plato</a>

				<!--LISTAR-->

				<div class="modal fade" id="ventana7">
					<div class="modal-dialog">
						<div class="modal-content">
						<!--Este es el encabezado de la nueva ventana-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Añada un nuevo plato</h4>
							</div>

							<br>
							<center><div class="progress" id="barra">
  								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
    							<span class="sr-only">60% Complete</span>
 								</div>
							</div></center>

							<div id="area_notificaciones_plato"></div>
							
							<div class="modal-body">

							<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#seccion4" aria-controls="seccion4" data-toggle="tab" role="tab" class="not-active">Información del plato</a></li>
							<li role="presentation"><a href="" aria-controls="seccion5" data-toggle="tab" role="tab" id="agregar_ingredientes" >Ingredientes necesarios</a></li>
							<li role="presentation"><a href="#seccion6" aria-controls="seccion6" data-toggle="tab" role="tab">Empleados</a></li>
							</ul>

							<div class="tab-content con_padding">

								<div role="tabpanel" class="tab-pane active" id="seccion4">
								
									<!--Este es el cuerpo de la nueva ventana-->
									
										<div id="area_notificaciones"></div>
										<p>Añada la informacion del nuevo plato para su menu,para esto necesita los siguientes datos:</p>

										<form action="" class="form-horizontal">
											<div class="input-group">
												<span class="input-group-addon">Id</span>
												<input type="number" class="form-control" id="id_plato" placeholder="Identificacion del plato">
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon">Nombre</span>
												<input type="text" class="form-control" id="nombre_plato" placeholder="Nombre del plato">
											</div>
											<br>
											<div class="input-group">
												<span class="input-group-addon">Precio</span>
												<input type="number" class="form-control" id="precio_plato" placeholder="Precio del plato">
											</div>
										</form>

								</div>

								
								<div role="tabpanel" class="tab-pane" id="seccion5">
									
										<div id="area_notificaciones"></div>
										<p>Añada los ingredientes del nuevo plato para su menu,para esto necesita los siguientes datos:</p>

										<!--ESPACIO DE PLATO-->
										<?php include("Añadir_plato.php"); ?>

									
								</div>
								
							</div>

							</div>



							<!--FOOTER de la nueva ventana-->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-success" id="btn_añadir_plato">Añadir y continuar</button>	
							</div>

						</div>
					</div>
				</div>


				
			</div>

			<div role="tabpanel" class="tab-pane" id="seccion3"><!--EMPLEADOS-->
				<br>
				<p>Observe la informacion de sus empleados</p>

			
				<a href="#ventana6" class="btn btn-warning btn-md" data-toggle="modal"><i class="fa fa-plus icono_espacio" aria-hidden="true"></i>Añadir empleado</a>

				<br>

				<?php include('bd_listar_empleados.php'); ?>

				<div class="modal fade" id="ventana5">
					<div class="modal-dialog">
						<div class="modal-content">
						<!--Este es el encabezado de la nueva ventana-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Actualizar informacion del empleado</h4>
							</div>
						<!--Este es el cuerpo de la nueva ventana-->
							<div class="modal-body">
							<div id="area_notificaciones_actualizar_empleado"></div>
								<p>Para actualizar la informacion del empleado se necesitan los siguientes datos:</p>

								<form action="" class="form-horizontal">
									<div class="input-group">
										<span class="input-group-addon">Id</span>
										<input type="text" class="form-control" id="id_empleado" placeholder="Identificacion del empleado" disabled>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Nombre</span>
										<input type="text" class="form-control" id="nombre_empleado" placeholder="Nombre del empleado">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Telefono</span>
										<input type="text" class="form-control" id="telefono_empleado" placeholder="Telefono del empleado">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Tipo de funcionalidad</span>
										<select name="" id="combo_empleado" class="form-control">
											<option value="1">Administrador</option>
											<option value="2">Ayudante de cocina</option>
											<option value="3">Mesero</option>
										</select>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Id sucursal</span>
										<input type="text" class="form-control" id="id_sucursal" placeholder="Identificacion de la sucursal">
									</div>
								</form>
								
							</div>

							<!--FOOTER de la nueva ventana-->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-success" id="btn_actualizar">ACTUALIZAR</button>	
							</div>

						</div>
					</div>
				</div>
				
				<div class="modal fade" id="ventana6">
					<div class="modal-dialog">
						<div class="modal-content">
						<!--Este es el encabezado de la nueva ventana-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Añadir informacion del empleado</h4>
							</div>
						<!--Este es el cuerpo de la nueva ventana-->
							<div class="modal-body">
							<div id="area_notificaciones_añadir_empleado"></div>
								<p>Para añadir la informacion del empleado se necesitan los siguientes datos:</p>

								<form action="" class="form-horizontal">
									<div class="input-group">
										<span class="input-group-addon">Id</span>
										<input type="text" class="form-control" id="id_añadir_empleado" placeholder="Identificacion del empleado">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Nombre</span>
										<input type="text" class="form-control" id="nombre_añadir_empleado" placeholder="Nombre del empleado">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Telefono</span>
										<input type="text" class="form-control" id="telefono_añadir_empleado" placeholder="Telefono del empleado">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Imagen</span>
										<input type="text" class="form-control" id="imagen_añadir_empleado" placeholder="Imagen del empleado">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Tipo de funcionalidad</span>
										<select name="" id="combo_añadir_empleado" class="form-control">
											<option value="1">Administrador</option>
											<option value="2">Ayudante de cocina</option>
											<option value="3">Mesero</option>
										</select>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">Id sucursal</span>
										<input type="text" class="form-control" id="añadir_id_sucursal" placeholder="Identificacion de la sucursal">
									</div>
								</form>
								
							</div>

							<!--FOOTER de la nueva ventana-->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-success" id="btn_guardar_empleado">ACTUALIZAR</button>	
							</div>

						</div>
					</div>
				</div>
				

			</div>

		</div>

	</div>
	</div>
	
</div>