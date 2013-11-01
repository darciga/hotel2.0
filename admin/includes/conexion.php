<?php 
// Constantes conexión con la base de datos
define("servidor", "127.0.0.1");
define("userdb", "root");
define("passdb", "");
define("bd", "sistema_reservacion");
// Variable que indica el status de la conexión a la base de datos
$errorConexionDB = false;
// Verificar constantes para conexión al servidor
if(defined('servidor') && defined('userdb') && defined('passdb') && defined('bd'))
{
	// Conexión con la base de datos
	$mysqli= new mysqli(servidor,userdb,passdb,bd);

	// Verificamos si hay error al conectar
	if(mysqli_connect_error()){
		$errorConexionDB = true;

	}

	// Evitando problemas con acentos
	$mysqli -> query('SET NAMES "utf8"');
}

function consultarClientes($conexionDB){
	$salida = '';

	$consulta = $conexionDB -> query("SELECT id_cliente, nombre_cli,user,email,tel FROM clientes ");


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($arreglores = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="center">'.$arreglores['nombre_cli'].'</td>
				<td class="center">'.$arreglores['user'].'</td>
				<td class="center">'.$arreglores['email'].'</td>
				<td class="center">'.$arreglores['tel'].'</td>
				<td class="center"><a data-accion="editar" class="btn btn-info" href="'.$arreglores['id_cliente'].'"> <i class="icon-edit "></i> </a><a data-accion="eliminar" class="btn btn-danger" href="'.$arreglores['id_cliente'].'"> <i class="icon-trash "></i> </a></td>
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

function consultarHabitaciones($conexionDB){

	$estado = array("Desocupada" => "label-success",
						"Ocupada" => "label-warning",
						"Mantenimiento" => "label-important");

	$salida = '';

	$consulta = $conexionDB -> query("SELECT id_habitacion, nombre,descripcion,tipo,estado FROM habitaciones ");


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($arreglores = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="center">'.$arreglores['nombre'].'</td>
				<td class="centerTXT">'.$arreglores['tipo'].'</td>
				<td class="centerTXT">'.$arreglores['descripcion'].'</td>
				<td class="centerTXT"><span class ="label '.$estado[$arreglores['estado']].'">'.$arreglores['estado'].'</span> </td>
				<td class="centerTXT"><a data-accion="editar" class="btn btn-info" href="'.$arreglores['id_habitacion'].'"> <i class="icon-edit "></i> </a><a data-accion="eliminar" class="btn btn-danger" href="'.$arreglores['id_habitacion'].'"> <i class="icon-trash "></i> </a></td>
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

	$consulta = $conexionDB -> query("SELECT id_reservacion,checkin,checkout,estado,num_adu,num_niñ,id_cliente,habitacion FROM reservaciones ");


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($arreglores = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="centerTXT">'.$arreglores['habitacion'].'</td>
				<td class="centerTXT">'.$arreglores['checkin'].'</td>
				<td class="centerTXT">'.$arreglores['checkout'].'</td>
				<td class="centerTXT">'.$arreglores['num_adu'].'</td>
				<td class="centerTXT">'.$arreglores['num_niñ'].'</td>
				<td class="centerTXT"><span class ="label '.$estado[$arreglores['estado']].'">'.$arreglores['estado'].'</span> </td>
				<td class="centerTXT"><a data-accion="editar" class="btn btn-info" href="'.$arreglores['id_reservacion'].'"> <i class="icon-edit "></i> </a><a data-accion="eliminar" class="btn btn-danger" href="'.$arreglores['id_reservacion'].'"> <i class="icon-trash "></i> </a></td>
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
		while ($arreglores = $consulta -> fetch_assoc()) {
			# code...
			$salida .= '
			<tr>
				<td class="centerTXT">'.$arreglores['nombre'].'</td>
				<td class="centerTXT">'.$arreglores['user'].'</td>
				<td class="centerTXT"><a data-accion="editar" class="btn btn-info" href="'.$arreglores['id_user'].'"> <i class="icon-edit "></i> </a><a data-accion="eliminar" class="btn btn-danger" href="'.$arreglores['id_user'].'"> <i class="icon-trash "></i> </a></td>
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

function verificarAdmins($conexionDB,$user,$pass){
	$salida = '';

	$consulta = $conexionDB -> query("SELECT id_user,user,nombre FROM admins WHERE user='$user' and pass='$pass' ");


	if($consulta -> num_rows != 0){
		//convertir el objeto
		while ($arreglores = $consulta -> fetch_assoc()) {
			# code...
			$arreglores['id_user'];
			$arreglores['user'];
			$arreglores['nombre'];
		}
	}
	

	return $arreglores;

}

?>