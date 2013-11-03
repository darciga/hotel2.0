// id de user global
var idUser_ok = 0;
var accion_ok = 'noAccion';

$(function(){
		// creación de ventana con formulario con jquery ui
		$('#agregarUser').dialog({
			autoOpen: false,
			modal:true,
			width:305,
			height:'auto',
			resizable: false,
			close:function(){
				$('#formUsers fieldset > span').removeClass('error').empty();
				$('#formUsers input[type="text"]').val('');
		    	$('#formUsers select > option').removeAttr('selected');
		    	$('#id_user').val('0');
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
		            url:"includes/phpAjaxUsers.inc.php",
		            data:"accion=" + accion_ok + "&id_user=" + idUser_ok + "&id=" + Math.random(),
		            success: function(response){

		            	// Validar mensaje de error
		            	if(response.respuesta == false){
		            		alert(response.mensaje);
		            	}
		            	else{

		            		// si es exitosa la operación
		                	$('#dialog-borrar').dialog('close');

		                	$('#listaUsuariosOK').empty();
		                	
		                	$('#listaUsuariosOK').append(response.contenido);

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
		$('#goNuevoUser').on('click',function(){
			// Asignamos valor a la variable acción
			$('#accion').val('addUser');

			// Abrimos el Formulario
			$('#agregarUser').dialog({
				title:'Agregar Usuario',
				autoOpen:true
			});
		});

		// Validar Formulario
		$('#formUsers').validate({
		    submitHandler: function(){
		        
		        var str = $('#formUsers').serialize();

		        // alert(str);

		        $.ajax({
		            beforeSend: function(){
		                $('#formUsers .ajaxLoader').show();
		            },
		            cache: false,
		            type: "POST",
		            dataType: "json",
		            url:"includes/phpAjaxUsers.inc.php",
		            data:str + "&id=" + Math.random(),
		            success: function(response){

		            	// Validar mensaje de error
		            	if(response.respuesta == false){
		            		alert(response.mensaje);
		            	}
		            	else{

		            		// si es exitosa la operación
		                	$('#agregarUser').dialog('close');

		                	// alert(response.contenido);
		                	
		                	if($('#sinDatos').length){
		                		$('#sinDatos').remove();
		                	}
		                	
		                	// Validad tipo de acción
		                	if($('#accion').val() == 'editUser'){
		                		$('#listaUsuariosOK').empty();
		                	}

		                	$('#listaUsuariosOK').append(response.contenido);

						}

		            	$('#formUsers .ajaxLoader').hide();

		            },
		            error:function(){
		                alert('ERROR GENERAL DEL SISTEMA, INTENTE MAS TARDE');
		            }
		        });

		        return false;

		    },
		    errorPlacement: function(error, element) {
		        error.appendTo(element.prev("span").append());
		    }
		});



		// Edición de Registros
		$('body').on('click','#listaUsuariosOK a',function (e){
			e.preventDefault();

			// alert($(this).attr('data-accion'));

			// Id Usuario
			idUser_ok = $(this).attr('href');
			accion_ok = $(this).attr('data-accion');

			$('#id_user').val(idUser_ok);

			if( accion_ok == 'editar'){
				// Valor de la acción
				$('#accion').val('editUser');

				// Llenar el formulario con los datos del registro seleccionado
				$('#usr_nombre').val($(this).parent().parent().children('td:eq(0)').text());
				$('#usr_puesto').val($(this).parent().parent().children('td:eq(1)').text());
				$('#usr_nick').val($(this).parent().parent().children('td:eq(2)').text());

				// Seleccionar status
				$('#usr_status option[value='+ $(this).parent().parent().children('td:eq(3)').text() +']').attr('selected',true);

				// Abrimos el Formulario
				$('#agregarUser').dialog({
					title:'Editar Usuario',
					autoOpen:true
				});

			}else if($(this).attr('data-accion') == 'eliminar'){

				$('#dialog-borrar').dialog('open');
			}
				

		});
});