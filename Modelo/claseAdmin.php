<?php
	class administrador extends usuario
	{
		protected $nombreAdministrador;
		protected $correoAdmin;
		protected $contraseñaAdmin;

		public function administraddor ($numeroIdUsuario,$estadoUsuario)
		{
			parent::_construct($numeroIdUsuario,$estadoUsuario)
		}
		public function actualizarCatalogo($actualizarCatalogo)
		{
		//aquí el código del método
		}
		public function visualizarAdministrador($visualizarAdministrador)
		{
		//aquí el código del método
		}
		public function modificarAdministrador($modificarAdministrador)
		{
		//aquí el código del método
		}
		public function verificarInicio($verificarInicio)
		{
		//aquí el código del método
		}
		public function verificarPermiso($verificarPermisoo)
		{
		//aquí el código del método
		}
		public function getFechaRegistro()
		{
			return $this->fechaRegistro;
		}
		public function getNumeroIdUsuario()
		{
			return $this->numeroIdUsuario;
		}
		public function getTelefonoUsuario()
		{
			return $this->telefonoUsuario;
		}
		public function getDireccionUsuario()
		{
			return $this->direccionUsuario;
		}
		public function getEstadoUsuario()
		{
			return $this->estadoUsuario;
		}
		public function getNombreAdministrador()
		{
			return $this->nombreAdministrador;
		}
		public function getCorreoAdmin()
		{
			return $this->correoAdmin;
		}
		public function getContraseñaAdmin()
		{
			return $this->contraseñaAdmin;
		}
		public function setFechaRegistro ($newVal)
		{
			$this->fechaRegistro = $newVal;
		}
		public function setNumeroIdUsuario ($newVal)
		{
			$this->numeroIdUsuario = $newVal;
		}
		public function setTelefonoUsuario ($newVal)
		{
			$this->telefonoUsuario = $newVal;
		}
		public function setDireccionUsuario ($newVal)
		{
			$this->direccionUsuario = $newVal;
		}
		public function setEstadoUsuario ($newVal)
		{
			$this->estadoUsuario = $newVal;
		}
		public function setNombreAdministrador ($newVal)
		{
			$this->nombreAdministrador = $newVal;
		}
		public function setCorreoAdmin ($newVal)
		{
			$this->correoAdmin = $newVal;
		}
		public function setContraseñaAdmin ($newVal)
		{
			$this->contraseñaAdmin = $newVal;
		}
	}
?>