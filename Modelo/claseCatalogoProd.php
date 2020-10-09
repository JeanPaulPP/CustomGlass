<?php
	class catalogoProd extends producto
	{
		protected $idCatalogo;

		public function catalogoServ($idProducto,$nombreProducto)
		{
			parent::_construct($idProducto,$nombreProducto)
		}

		public function getIdProducto ()
		{
			return$this->$idProducto
		}
		public function getNombreProducto ()
		{
			return$this->$nombreProducto
		}
		public function getDetalleProducto ()
		{
			return$this->$detalleProducto
		}
		public function getEstadoProducto ()
		{
			return$this->$estadoProducto
		}
		public function getCostoUnitario ()
		{
			return$this->$costoUnitario
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