<?php 
// Constantes conexión con la base de datos
define("servidor", "127.0.0.1");
define("userdb", "root");
define("passdb", "");
define("bd", "sistema_reservacion");
define("puerto","3306");
// Variable que indica el status de la conexión a la base de datos

$errorConexionDB = false;
// Verificar constantes para conexión al servidor
if(defined('servidor') && defined('userdb') && defined('passdb') && defined('bd')&& defined('puerto'))
{
	// Conexión con la base de datos
	$mysqli= new mysqli(servidor,userdb,passdb,bd);
	//$conectado=mysqli_init();
	//$conectado->real_connect(servidor,userdb,passdb,bd,puerto);

	// Verificamos si hay error al conectar
	if(mysqli_connect_error()){
		$errorConexionDB = true;

	}

	// Evitando problemas con acentos
	$mysqli -> query('SET NAMES "utf8"');
}

function Conectarse(){
	if (!($link=mysql_connect(servidor,userdb,passdb))) {
		echo "Error conectando a la base de datos.";
		exit();
	}
	if (!mysql_select_db(bd,$link)){
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}

$link = Conectarse();



function consultarClientes($conexionDB){
	$salida = '';

	$consulta = $conexionDB -> query("SELECT id_cliente, nombres,user,email,tel FROM clientes ");


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($cliente = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="center">'.$cliente['nombres'].'</td>
				<td class="center">'.$cliente['user'].'</td>
				<td class="center">'.$cliente['email'].'</td>
				<td class="center">'.$cliente['tel'].'</td>
				<td class="center">
				<a class="btn btn-info" href="editarclientes.php?idcli='.$cliente['id_cliente'].'"><i class="icon-edit "> Editar</i></a>
				<a class="btn btn-danger" href="eliminarcliente.php?idcli='.$cliente['id_cliente'].'"><i class="icon-trash "> Eliminar</i></a>
				</td>
			</tr>
			';
		}
	}
	else{
		$salida = '<tr id="sinDatos">
				<td colspan="4" class="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>';
	}

	return $salida;


}

function habitaciones($conexionDB,$li,$ls){
	$salida = '';

	$consulta = $conexionDB -> query("SELECT id_habitacion,nombre,tipo,descripcion,imagen FROM habitaciones WHERE estado='Desocupada' LIMIT $li,$ls");


	if($consulta -> num_rows != 0){
		$i=0;
		//convertir el objeto
		while ($habitacion = $consulta -> fetch_assoc()) {
			# code...
			$i++;
			$salida.='
			<div class="span4">
				<h3><span>'.$habitacion['nombre'].'</span></h3>
				<a href="reservacion.php?hab='.$habitacion['id_habitacion'].'"><img src="css/images/rooms/'.$habitacion['imagen'].'.jpg" alt="" /></a>
				<br/>
				<br/>
				<p>'.$habitacion['descripcion'].'</p>
				<div class="row center">
					<a class="btn btn-primary btn-large check-availability" href="reservacion.php?hab='.$habitacion['id_habitacion'].'">Reserva ahora</a>
				</div>
			</div>';
			
		}
	}
	else{
		$salida = '<tr id="sinDatos">
				<td colspan="4" class="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>';
	}

	return $salida;


}
function datoshabi(){

}


function consultarHabitaciones($conexionDB){

	$estado = array("Desocupada" => "label-success",
						"Ocupada" => "label-warning",
						"Mantenimiento" => "label-important");

	$salida = '';

	$consulta = $conexionDB -> query("SELECT habitaciones.id_habitacion, habitaciones.nombre as nombreh,
		habitaciones.descripcion,habitaciones.tipo,habitaciones.estado,tipohabitacion.nombre as nombret
		FROM habitaciones, tipohabitacion WHERE habitaciones.tipo=tipohabitacion.id_tipo ");

	//$sql = "SELECT alumnos.nombre, calificaciones.materia,calificaciones.calificacion FROM alumnos, calificaciones 
	//WHERE alumnos.nocontrol='".$_POST['nocontrol']."' AND calificaciones.nocontrol_alumno ='".$_POST['nocontrol']."'";
	//$sql = “SELECT alumnos.nombre, calificaciones.materia,calificaciones.calificacion FROM alumnos, calificaciones WHERE alumnos.nocontrol=’”.$_POST['nocontrol'].”‘ AND calificaciones.nocontrol_alumno =’”.$_POST['nocontrol'].”‘”;


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($habitacion = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="center">'.$habitacion['nombreh'].'</td>
				<td class="centerTXT">'.$habitacion['nombret'].'</td>
				<td class="centerTXT">'.$habitacion['descripcion'].'</td>
				<td class="centerTXT"><span class ="label '.$estado[$habitacion['estado']].'">'
				.$habitacion['estado'].'</span> </td>
				<td class="centerTXT"><a data-accion="editar" class="btn btn-info" href="'.$habitacion['id_habitacion'].'">
				<i class="icon-edit "></i> </a><a data-accion="eliminar" class="btn btn-danger" href="'.$habitacion['id_habitacion'].'">
				<i class="icon-trash "></i> </a></td>
			</tr>
			';
		}
	}
	else{
		$salida = '<tr id="sinDatos">
				<td colspan="5" class="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>';
	}

	return $salida;

}

function consultarReservaciones($conexionDB){
	$estado = array("En espera" => "label-success",
						"Tomada" => "label-warning",
						"Cancela" => "label-important");

	$salida = '';

	$consulta = $conexionDB -> query("SELECT reservaciones.id_reservacion,reservaciones.checkin,reservaciones.checkout,
		reservaciones.estado,reservaciones.num_adu,reservaciones.num_ni,reservaciones.id_cliente,reservaciones.habitacion,
		 clientes.nombres as Cliente,habitaciones.nombre as Habitacion, tipohabitacion.nombre as nombret FROM reservaciones,clientes,habitaciones,tipohabitacion
		 WHERE reservaciones.id_cliente=clientes.id_cliente AND reservaciones.habitacion=habitaciones.id_habitacion AND habitaciones.tipo=tipohabitacion.id_tipo ");


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($reservacion = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="centerTXT">'.$reservacion['Habitacion'].'</td>
				<td class="centerTXT">'.$reservacion['nombret'].'</td>
				<td class="centerTXT">'.$reservacion['Cliente'].'</td>
				<td class="centerTXT">'.$reservacion['checkin'].'</td>
				<td class="centerTXT">'.$reservacion['checkout'].'</td>
				<td class="centerTXT">'.$reservacion['num_adu'].'</td>
				<td class="centerTXT">'.$reservacion['num_ni'].'</td>
				<td class="centerTXT"><span class ="label '.$estado[$reservacion['estado']].'">
				'.$reservacion['estado'].'</span> </td>
				<td class="centerTXT"><a data-accion="editar" class="btn btn-info" href="editarReservaciones.php?idres='.$reservacion['id_reservacion'].'">
				<i class="icon-edit "></i> </a><a data-accion="eliminar" class="btn btn-danger" href="cancelarReservaciones.php?idres='.$reservacion['id_reservacion'].'">
				<i class="icon-trash "></i> </a></td>
			</tr>
			';
		}
	}
	else{
		$salida = '<tr id="sinDatos">
				<td colspan="8" class="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>';
	}

	return $salida;

}

function consultarAdmins($conexionDB){
	$salida = '';

	$consulta = $conexionDB -> query("SELECT id_user,user,nombre FROM admins ");


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($admin = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="centerTXT">'.$admin['nombre'].'</td>
				<td class="centerTXT">'.$admin['user'].'</td>
				<td class="centerTXT"><a data-accion="editar" class="btn btn-info" href="'.$admin['id_user'].'">
				<i class="icon-edit "></i> </a><a data-accion="eliminar" class="btn btn-danger" href="'.$admin['id_user'].'">
				<i class="icon-trash "></i></a></td>
			</tr>
			';
		}
	}
	else{
		$salida = '<tr id="sinDatos">
				<td colspan="2" class="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>';
	}

	return $salida;

}
mysql_close($link); //cierra la conexion

?>