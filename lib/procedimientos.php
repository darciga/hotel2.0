<?php
    include_once 'conexion.php';
	class procedimientos
	{
		private $bd;
		public $res;
		function procedimientos()
		{
			$this->bd=new conexion("localhost","root","","sistema_reservacion");
			$this->res=array();
		}
		function mostrar_usuarios($idc)
		{
			$sql="call mostrar_usuarios($idc,@ban,@user,@pass);select @ban;select @user;select @pass";
			$this->res=$this->bd->ejecutar($sql);
			$mjs="";
			if($this->res[0][0]==-1)
				$mjs = "El usuario $idc no existe";
			else {
				$mjs=$this->res[1][0]." ";
			}
			return $mjs;
		}
		
		function buscar_usuario($usr,$pass)
		{
			$sql="call buscar_user($usr,$pass,@ban);select @ban;";
			$this->res=$this->bd->ejecutar($sql);
			$id_c=$this->res[0][0];//id usuario
			if($id_c->res[0][0]==-1)
				$id_c="La contraseña esta mal";
			if($this->res[0][0]==-2)
				$id_c="El usuario $usr no existe";
			return $id_c;		
		}
	}
?>