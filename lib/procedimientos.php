<?php
    include_once 'conexion.php';
	class procedimientos
	{
		private $bd;
		public $res;
		function procedimientos()
		{
			$this->bd=new conexion("localhost","root","","demo_conect");
			$this->res=array();
		}
		function mostrar_usuarios($idc)
		{
			$sql="call mostrar_usuarios($idc,@ban,@user,@pass);select @ban;select @user;select @pass";
			$this->res=$this->bd->ejecutar_procsql($sql);
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
			$sql="call buscar_usuario($usr,$pass,@ban);select @ban;";
			$this->res=$this->bd->ejecutar_procsql($sql);
			$mjs=$this->res[0][0];//id usuario
			if($this->res[0][0]==-1)
				$mjs="La contraseña esta mal";
			if($this->res[0][0]==-2)
				$mjs="El usuario $usr no existe";
			return $mjs;		
		}
	}
?>