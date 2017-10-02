$(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();
		/*alert("holaaa");*/
		if($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		}else{
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});

	$('.btn-menu').click(function(){
		$('.contenedor_menu .menu').slideToggle();
	});

	$(window).resize(function(){
		if ($(document).width() > 692) {
			$('.contenedor_menu .menu').css({'display':'block'});
		}
		if ($(document).width() < 692) {
			$('.contenedor_menu .menu').css({'display':'none'});
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
		}
	});

	$('#sucursal a').click(function(){
		var sucursal = $(this).text();
		var icono = "<i class=\"fa fa-truck\" aria-hidden=\"true\"></i>"
		alert(sucursal);
		$.ajax({
			url: 'Inventario.php',
			type: 'POST',
			data:{
				sucursal: sucursal
			},
			beforeSend: function(){
				$('#area_trabajo').html("procesando");
			},
			success: function(response){
				$('#area_trabajo').html(response);
				$('#nombre_sucursal').text(sucursal);
				tabla();
				actualizar();
				añadir_tipo_ingrediente();
				agregar_ingrediente();
				actualizar_empleado();
				añadir_empleado();
				activar_ventana();
				activar_ingredientes();
			}
		});
	});

	$('#principal').click(function(){
		$.ajax({
			url: 'Principal.php',
			type: 'POST',
			
			beforeSend: function(){
				$('#area_trabajo').html("procesando");
			},
			success: function(response){
				$('#area_trabajo').html(response);
			}
		});
	});

	$('#añadir_sucursal').click(function(){
		$.ajax({
			url: 'Añadir_sucursal.php',
			type: 'POST',
			beforeSend: function(){
				$('#area_trabajo').html("procesando");
			},
			success: function(response){
				$('#area_trabajo').html(response);
				añadir_sucursal();
			}
		});
	});

	iniciar_sesion();

	cerrar_sesion();

	
});


var añadir_sucursal = function(){
		$('#registrar').click(function(){
		var nombre = $('#Nombre').val();
		var direccion = $('#Direccion').val();
		var especialidad = $('#Especialidad').val();
		
			if(nombre != ""){
				$('#nombre').text(" ");
				if(direccion != ""){
					$('#direccion').text(" ");
					if (especialidad != ""){
						$('#especialidad').text(" ");
						alert("leno");
						$.ajax({
							url: 'bd_añadir_sucursal.php',
							type: 'POST',
							data:{
								nombre: nombre,
								direccion: direccion,
								especialidad: especialidad
							},
							beforeSend:function(){
								$('#area_notificacion').html("procesando");
							},
							success:function(response){
								$('#area_notificacion').html(response);							
							}
						});
					}else
						$('#especialidad').text(" Por favor llene el campo especialidad").css("color","red");	
				}else
					$('#direccion').text(" Por favor llene el campo direccion").css("color","red");	
			}else
				$('#nombre').text(" Por favor llene el campo nombre").css("color","red");	
		});
	}

function tabla(id,nombre,cantidad){
		if(id!=undefined){
			console.log(id);
			$("#id_producto").val(id);		
			$("#nombre").val(nombre);
			$("#cantidad").val(cantidad);
		}
}

var añadir_tipo_ingrediente = function(){
	$('#btn_añadir').click(function(){
		var id = $('#id_tipo').val() ;
		var nombre = $('#nombre_tipo').val();
		$.ajax({
			url: 'bd_añadir_tipo_ingrediente.php',
			type: 'POST',
			data: {
				id: id,
				nombre: nombre
			},
			beforeSend:function(){
				$('#area_notificaciones').html("procesando");				
			},
			success:function(response){
				$('#area_notificaciones').html(response);
			}
		});
	});
}

var actualizar = function(){
	$("#btn_guardar").click(function(){
		var id = $('#id_producto').val();
		var tipo = $('#combo option:selected').val();
		//alert(tipo);
		var nombre = $("#nombre").val();
		var cantidad = $("#cantidad").val();
		$.ajax({
			url:'bd_actualizar_ingrediente.php',
			type:'POST',
			data:{
				id : id,
				tipo : tipo,
				nombre : nombre,
				cantidad : cantidad
			},
			beforeSend: function(){
				$('#area_notificaciones_ingrediente').html("procesando");				
			},
			success:function(response){
				$('#area_notificaciones_ingrediente').html(response);
			}
		});
		//alert("GUARDADO...");
	});
}

var agregar_ingrediente = function(){
	$('#btn_guardar_ingrediente').click(function(){
		var id = $('#id_ingrediente').val(); 
		var nombre = $('#nombre_ingrediente').val();
		var tipo = $('#combo_ingrediente option:selected').val();
		var cantidad = $('#cantidad_ingrediente').val();
		var codigo_bodega = $('#codigo_bodega').text();
		alert(codigo_bodega);
		$.ajax({
			url: 'bd_añadir_ingrediente.php',
			type: 'POST',
			data:{
				id:id,
				nombre:nombre,
				tipo:tipo,
				cantidad:cantidad,
				codigo_bodega:codigo_bodega
			},
			beforeSend:function(){
				$('#area_notificaciones_añadir_ingrediente').html("procesando");				
			},
			success: function(response){
				$('#area_notificaciones_añadir_ingrediente').html(response);				
			}

		});
	});
}

function tabla_empleados(id,nombre,telefono,funcionalidad,id_sucursal){
		if(id!=undefined){
			console.log(id);
			$("#id_empleado").val(id);		
			$("#nombre_empleado").val(nombre);
			$("#telefono_empleado").val(telefono);
			$("#id_sucursal").val(id_sucursal);
		}
}

var actualizar_empleado = function(){
	$('#btn_actualizar').click(function(){
		alert("epaaaa");
		var id =$("#id_empleado").val();		
		var nombre =$("#nombre_empleado").val();
		var telefono =$("#telefono_empleado").val();
		var funcionalidad =$("#combo_empleado option:selected").val();
		alert(funcionalidad);
		var id_sucursal =$("#id_sucursal").val();
		$.ajax({
			url:'bd_actualizar_empleados.php',
			type: 'POST',
			data: {
				id:id,
				nombre:nombre,
				telefono:telefono,
				funcionalidad:funcionalidad,
				id_sucursal:id_sucursal
			},
			beforeSend:function(){
				$('#area_notificaciones_actualizar_empleado').html("procesando");
			},
			success:function(response){
				$('#area_notificaciones_actualizar_empleado').html(response);				
			}
		});
	});
}

var añadir_empleado = function(){
	$('#btn_guardar_empleado').click(function(){
		var id =$("#id_añadir_empleado").val();		
		var nombre =$("#nombre_añadir_empleado").val();
		var telefono =$("#telefono_añadir_empleado").val();
		var funcionalidad =$("#combo_añadir_empleado option:selected").val();
		alert(funcionalidad);
		var id_sucursal =$("#añadir_id_sucursal").val();
		var imagen=$('#imagen_añadir_empleado').val();
		$.ajax({
			url:'bd_añadir_usuario.php',
			type:'POST',
			data:{
				id:id,
				nombre:nombre,
				telefono:telefono,
				funcionalidad:funcionalidad,
				id_sucursal:id_sucursal,
				imagen:imagen
			},
			beforeSend:function(){
				$('#area_notificaciones_añadir_empleado').html("procesando");
			},
			success:function(response){
				$('#area_notificaciones_añadir_empleado').html(response);				
			}
		});
	});
}

var iniciar_sesion = function(){
	$('#btn_iniciar_sesion').click(function(){
		alert("sirvio");
		var id = $('#id').val();
		var pass = $('#pass').val();
		$.ajax({
			url:'iniciar_sesion.php',
			type:'POST',
			data:{
				id:id,
				pass:pass
			},
			beforeSend:function(){
				$('body').html("procesando");
			},
			success:function(response){
				$('body').html(response);
			}
		});
	});
}

var cerrar_sesion = function(){
	$('#cerrar_sesion').click(function(){
		alert('Cerrar_sesion');
		$.ajax({
			url: 'cerrar_sesion.php',
			type: 'POST',
			beforeSend:function(){
				$('body').html("procesando");
			},
			success:function(response){
				$('body').html(response);		
			}
		});
	});
}

var activar_ventana = function(){
	var acumulador = 0;
	var id = $('#id_plato').val();
	var nombre = $('#nombre_plato').val();
	var precio = $('#precio_plato').val();
	var opcion = 0;
	$('#btn_añadir_plato').click(function(){

		$.ajax({
			url: 'bd_añadir_plato.php',
			type: 'POST',
			data: {
				id : id,
				nombre : nombre,
				precio : precio,
				opcion : opcion
			},
			beforeSend:function(){
				$('#area_notificaciones_plato').html("procesando");				
			},
			success:function(response){
				$('#area_notificaciones_plato').html(response);		
			}
		})
		acumulador++;
		if(acumulador == 1){
			$('#agregar_ingredientes').attr('href','#seccion5');
		}
	});
}

function activar_ingredientes(ingrediente){
		//alert("Hola"+ingrediente);			
	if ($('#'+ingrediente).prop('checked')) {
		//alert("ENTRO");
		$('.'+ingrediente).prop("disabled",false);
		agregar_plato(ingrediente);	
	}else{
		$('.'+ingrediente).prop("disabled",true);
		$('.'+ingrediente).val("").focus().blur();
		$('.'+ingrediente).attr("placeholder","Cantidad");
	}
}

function agregar_plato(ingrediente){
	var acumulador = 0;
	var opcion = 1;
	$('#btn_añadir_plato').click(function(){

		if ($('#'+ingrediente).prop('checked')) {
			acumulador++;
			cantidad = $('.'+ingrediente).val();

			//vector.push(ingrediente,cantidad); 	
			
			//console.log(vector);

			$.ajax({
				url: 'bd_añadir_plato.php',
				type: 'POST',
				data: {
					ingrediente : ingrediente,
					cantidad : cantidad,
					opcion : opcion
				},
				beforeSend:function(){
					$('#area_notificaciones_plato').html("procesando");
				},
				success:function(response){
					$('#area_notificaciones_plato').html(response);		
				}
			});
		}

		//suma =  vector.concat(vector);
		//
			//var e=['hola','que'];
			//data.Id = ingrediente;
			//data.Cantidad = cantidad;
			
		//
		//console.log(e);
		
	});
}