<?php
	class usuario 
	{
		protected $idUsuario;
		protected $rol;
		protected $CorreoUsuario;
		protected $ContraUsuario;
		protected $NombresUsu;

		public function usuario ()
		{

		}
		protected function getIdUsuario()
		{
			return $this->idUsuario;
		}
		protected function getRol()
		{
			return $this->rol;
		}
		protected function getCorreoUsuario()
		{
			return $this->CorreoUsuario;
		}
		protected function getNombresUsu()
		{
			return $this->NombresUsu;
		}
		protected function getContraUsuario()
		{
			return $this->estadoUsuario;
		}
		protected function setIdUsuario ($newVal)
		{
			$this->idUsuario = $newVal;
		}
		protected function setRol ($newVal)
		{
			$this->rol = $newVal;
		}
		protected function setCorreoUsuario ($newVal)
		{
			$this->CorreoUsuario = $newVal;
		}
		protected function setContraUsuario ($newVal)
		{
			$this->ContraUsuario = $newVal;
		}
		protected function setNombresUsu ($newVal)
		{
			$this->NombresUsu = $newVal;
		}
		public function crearUsuario ($idUsuario, $rol,$CorreoUsuario, $ContraUsuario, $NombresUsu){
			$this->idUsuario=$idUsuario;
			$this->rol=$rol;
			$this->CorreoUsuario=$CorreoUsuario;
			$this->ContraUsuario=$ContraUsuario;
			$this->NombresUsu=$NombresUsu;
		}
		public function registrarUsuario()
		{
		$this->Conexion=Conectarse();
		$sql="INSERT INTO usuario (idUsuario, rol, CorreoUsuario, ContraUsuario, NombresUsu) VALUES ('$this->idUsuario', '$this->rol', '$this->CorreoUsuario', '$this->ContraUsuario', '$this->NombresUsu')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
		}
	}
?>