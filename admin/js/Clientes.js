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
			resizable: false,
			close:function(){
				$('#formClientes fieldset > span').removeClass('error').empty();
				$('#formClientes input[type="text"]').val('');
		    	$('#formClientes input[type="password"]').val('');
		    	$('#formClientes input[type="email"]').val('');
		    	$('#id_cliente').val('0');
			}
		});
		
		
		
		// Diálogo confirmación de eliminación
		/*
		$('#dialog-borrar').dialog({
			autoOpen: false,
			modal:true,
			width:350,
			height:'auto',
			resizable: false,
			
		});
*/

		// funcionalidad del botón que abre el formulario
		$('#goNuevoCliente').on('click',function(){
			// Asignamos valor a la variable acción
			$('#accion').val('addCli');

			// Abrimos el Formulario
			$('#agregarCliente').dialog({
				title:'Agregar Usuario',
				autoOpen:true,
				
			});
		});

		/*
		// Edición de Registros
		$('body').on('click','#listadoclientes a',function (e){
			e.preventDefault();

			//alert($(this).attr('data-accion'));

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
				$('#editarCliente').dialog({
					title:'Editar Usuario',
					autoOpen:true,
					modal:true,
					width:305,
					height:'auto',
					resizable: false,
				});

			}else if($(this).attr('data-accion') == 'eliminar'){

				$('#dialog-borrar').dialog('open');
			}
				

		});
*/

});