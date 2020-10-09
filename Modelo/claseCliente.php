<?php
	class cliente 
	{
		protected $idCliente;
		protected $EstadoCliente;
		protected $correoClie;
		protected $contraClie;
		protected $direccion;
		protected $telefono;
		protected $telefono2;
		protected $Nombres;
		protected $Apellidos;

		public function cliente ()
		{

		}
		public function getTelefono()
		{
			return $this->telefono;
		}
		public function getTelefono2()
		{
			return $this->telefono2;
		}
		public function getDireccion()
		{
			return $this->direccion;
		}
		public function getEstadoCliente()
		{
			return $this->EstadoCliente;
		}
		public function getIdCliente ()
		{
			return$this->idCliente;
		}
		public function getNombres ()
		{
			return$this->Nombres;
		}
		public function getCorreoClie ()
		{
			return$this->correoClie;
		}
		public function getContraClie ()
		{
			return$this->contraClie;
		}
		public function setTelefono ($newVal)
		{
			$this->telefono = $newVal;
		}
		public function setTelefono2 ($newVal)
		{
			$this->telefono2 = $newVal;
		}
		public function setDireccion ($newVal)
		{
			$this->direccion = $newVal;
		}
		public function setEstadoCliente ($newVal)
		{
			$this->EstadoCliente = $newVal;
		}
		public function setIdCliente ($newVal)
		{
			$this->idCliente = $newVal;
		}
		public function setNombres ($newVal)
		{
			$this->Nombres = $newVal;
		}
		public function setCorreoClie ($newVal)
		{
			$this->correoClie = $newVal;
		}
		public function setContraClie ($newVal)
		{
			$this->contraClie = $newVal;
		}

		public function crearCliente ($idCliente, $EstadoCliente, $correoClie, $contraClie, $direccion, $telefono, $telefono2,$Nombres, $Apellidos)
		{

			$this->idCliente=$idCliente;
			$this->EstadoCliente=$EstadoCliente;
			$this->correoClie=$correoClie;
			$this->contraClie=$contraClie;
			$this->direccion=$direccion;
			$this->telefono=$telefono;
			$this->telefono2=$telefono2;
			$this->Nombres=$Nombres;
			$this->Apellidos=$Apellidos;
		}
		public function registrarCliente()
		{
		$this->Conexion=Conectarse();
		$sql="INSERT INTO cliente (idCliente, EstadoCliente, correoClie, contraClie, direccion, Telefono, Telefono2, Nombres, Apellidos) VALUES ('$this->idCliente', '$this->EstadoCliente', '$this->correoClie',  '$this->contraClie',  '$this->direccion', '$this->telefono', '$this->telefono2', '$this->Nombres', '$this->Apellidos')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
		}
		public function consultarClientes()
		{
		$this->Conexion=Conectarse();
		 $sql="SELECT c.idCliente, c.correoClie, c.contraClie, c.direccion, c.Telefono, c.Telefono2, c.Nombres, c.Apellidos, ec.nombreEstado FROM cliente c, estado_cliente ec WHERE (c.EstadoCliente = ec.idEstado)";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
		}
	}
?>