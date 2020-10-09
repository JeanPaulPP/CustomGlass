<?php
	class catalogoServ extends servicio
	{
		protected $idCatalogo;

		public function catalogoServ($idServicio,$nombreServicio)
		{
			parent::_construct($idServicio,$nombreServicio)
		}

		public function getIdServicio ()
		{
			return$this->$idServicio
		}
		public function getNombreServicio ()
		{
			return$this->$nombreServicio
		}
		public function getDetalleServicio ()
		{
			return$this->$detalleServicio
		}
		public function getEstadoServicio ()
		{
			return$this->$estadoServicio
		}

		public function getIdCatalogo ()
		{
			return $this->$idCatalogo;
		}
		public function setIdCatalogo ($newVal)
		{
			$this->idCatalogo = $newVal;
		}
			public function filtrarInformacion($filtrarInformacion)
		{
		//aquí el código del método
		}
			public function ordenarInformacion($ordenarInformacion)
		{
		//aquí el código del método
		}
			public function informar($informar)
		{
		//aquí el código del método
		}
	}
?>