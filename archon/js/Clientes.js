// id de user global
var idUser_ok = 0;
var accion_ok = 'noAccion';

$(function(){
		// creación de ventana con formulario con jquery ui
		$('#agregarCliente').dialog({
			autoOpen: false,
			modal:true,
			width:305,
			height:'auto',
			resizable: true,
			close:function(){
				$('#formClientes fieldset > span').removeClass('error').empty();
				$('#formClientes input[type="text"]').val('');
		    	$('#formClientes input[type="password"]').val('');
		    	$('#formClientes input[type="email"]').val('');
		    	$('#id_cliente').val('0');
			}
		});

		// Diálogo confirmación de eliminación
		$('#dialog-borrar').dialog({
			autoOpen: false,
			modal:true,
			width:350,
			height:'auto',
			resizable: false,
			buttons: {
				Si: function() {
					$.ajax({
		            beforeSend: function(){
		                
		            },
		            cache: false,
		            type: "POST",
		            dataType: "json",
		            url:"includes/operaciones.php",
		            data:"accion=" + accion_ok + "&id_cliente=" + idUser_ok + "&id=" + Math.random(),

		            success: function(response){

		            	// Validar mensaje de error
		            	if(response.respuesta == false){
		            		alert(response.mensaje);
		            	}
		            	else{

		            		// si es exitosa la operación
		                	$('#dialog-borrar').dialog('close');

		                	$('#listaClientesOk').empty();
		                	
		                	$('#listaClientesOk').append(response.contenido);

						}

		            },
		            error:function(){
		                alert('ERROR GENERAL DEL SISTEMA, INTENTE MAS TARDE');
		            }
		        });	
				},
				No: function() {
					$( this ).dialog( "close" );
				}
			}
		});

		// funcionalidad del botón que abre el formulario
		$('#goNuevoCliente').on('click',function(){
			// Asignamos valor a la variable acción
			$('#accion').val('addCli');

			// Abrimos el Formulario
			$('#agregarCliente').dialog({
				title:'Agregar ',
				autoOpen:true
			});
		});

		// Validar Formulario
		$('.formClientes').validate({
		    submitHandler: function(){
		        
		        var str = $('#formClientes').serialize();

		       // alert(str);

		        $.ajax({
		            beforeSend: function(){
		                $('#formClientes .ajaxLoader').show();
		            },
		            cache: false,
		            type: "POST",
		            dataType: "json",
		            url:"includes/operaciones.php",
		            data:str + "&id=" + Math.random(),
		            //si nos responde el servidor
		            success: function(response){

		            	// Validar mensaje de error
		            	if(response.respuesta == false){
		            		alert(response.mensaje);
		            	}
		            	else{

		            		// si es exitosa la operación
		                	$('#agregarCliente').dialog('close');

		                	// alert(response.contenido);
		                	
		                	if($('#sinDatos').length){
		                		$('#sinDatos').remove();
		                	}
		                	
		                	// Validad tipo de acción
		                	if($('#accion').val() == 'editUser'){
		                		$('#listaClientesOk').empty();
		                	}

		                	$('#listaClientesOk').append(response.contenido);

						}
						

		            	$('#formClientes .ajaxLoader').hide();
		            	$('#agregarCliente').dialog('close');
		            	
		            	alert(response.mensaje);

		            },
		            error:function(){
		                alert('ERROR GENERAL DEL SISTEMA, INTENTE MAS TARDE');
		                $('#formClientes .ajaxLoader').hide();
		            }
		        });

		        return false;

		    },
		    errorPlacement: function(error, element) {
		        error.appendTo(element.prev("span").append());
		    }
		});



		// Edición de Registros
		$('body').on('click','#listadoclientes a',function (e){
			e.preventDefault();

			// alert($(this).attr('data-accion'));

			// Id Usuario
			idUser_ok = $(this).attr('href');
			accion_ok = $(this).attr('data-accion');

			$('#id_user').val(idUser_ok);

			if( accion_ok == 'editar'){
				// Valor de la acción
				$('#accion').val('editCliente');

				// Llenar el formulario con los datos del registro seleccionado
				$('#nombre_cli').val($(this).parent().parent().children('td:eq(0)').text());
				$('#username').val($(this).parent().parent().children('td:eq(1)').text());
				
				$('#email').val($(this).parent().parent().children('td:eq(2)').text());
				$('#tel').val($(this).parent().parent().children('td:eq(3)').text());
				// Seleccionar status
				//$('#usr_status option[value='+ $(this).parent().parent().children('td:eq(3)').text() +']').attr('selected',true);

				// Abrimos el Formulario
				$('#agregarCliente').dialog({
					title:'Editar Usuario',
					autoOpen:true
				});

			}else if($(this).attr('data-accion') == 'eliminar'){

				$('#dialog-borrar').dialog('open');
			}
				

		});
});