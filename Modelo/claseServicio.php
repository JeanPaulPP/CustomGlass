<?php
	class servicio 
	{
		protected $idServicio;
		protected $Usuario;
		protected $Servicio;
		protected $detServicio;
		protected $Estado;
		protected $telefono;
		protected $imagenServ;

		public function servicio ()
		{

		}

		public function getIdServicio ()
		{
			return$this->$idServicio;
		}
		public function getUsuario ()
		{
			return$this->$Usuario;
		}
		public function getServicio ()
		{
			return$this->$Servicio;
		}
		public function getDetServicio ()
		{
			return$this->$detServicio;
		}
		public function getEstado ()
		{
			return$this->$Estado;
		}
		public function getTelefono ()
		{
			return$this->$telefono;
		}
		public function getImagenServ ()
		{
			return$this->$imagenServ;
		}
		public function setIdServicio ($newVal)
		{
			$this->idServicio = $newVal;
		}
		public function setUsuario ($newVal)
		{
			$this->Usuario = $newVal;
		}
		public function setServicio ($newVal)
		{
			$this->Servicio = $newVal;
		}
		public function setDetServicio ($newVal)
		{
			$this->detServicio = $newVal;
		}
		public function setEstado ($newVal)
		{
			$this->Estado = $newVal;
		}
		public function setTelefono ($newVal)
		{
			$this->telefono = $newVal;
		}
		public function setImagenServ ($newVal)
		{
			$this->imagenServ = $newVal;
		}
		public function crearServicio ($Usuario, $Servicio, $detServicio, $Estado, $telefono, $imagenServ){
			$this->Usuario=$Usuario;
			$this->Servicio=$Servicio;
			$this->detServicio=$detServicio;
			$this->Estado=$Estado;
			$this->telefono=$telefono;
			$this->imagenServ=$imagenServ;
		}
		public function registrarServicio()
		{
		$this->Conexion=Conectarse();
		$sql="INSERT INTO servicio (Usuario, Servicio, detServicio, Estado, telefono, imagenServ) VALUES ('$this->Usuario', '$this->Servicio', '$this->detServicio',  '$this->Estado',  '$this->telefono', '$this->imagenServ')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
		}
		public function consultarServicios()
		{
		$this->Conexion=Conectarse();
		 $sql="SELECT s.idServicio, s.detServicio, s.telefono, s.imagenServ, u.NombresUsu, es.estadoServ, ts.servNombre FROM servicio s, usuario u, estado_servicio es, tipo_servicio ts WHERE (s.Usuario = u.idUsuario) AND (s.Servicio = ts.idTipoServicio) AND (s.Estado = es.idEstadoServ) ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
		}
	}
?>