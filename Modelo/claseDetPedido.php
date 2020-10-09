<?php
	class detPedido extends producto
	{
		protected $idPedido;
		protected $cantidadProducto;
		protected $costoUnidad;
		protected $precioTotal;

		public function detPedido($idProducto,$nombreProducto)
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
		
		public function getIdPedido ()
		{
			return $this->$idPedido;
		}
		public function setIdPedido ($newVal)
		{
			$this->idPedido = $newVal;
		}
		public function getCantidadProducto ()
		{
			return $this->$cantidadProducto;
		}
		public function setCantidadProducto ($newVal)
		{
			$this->cantidadProducto = $newVal;
		}
		public function getCostoUnidad ()
		{
			return $this->$costoUnidad;
		}
		public function setCostoUnidad ($newVal)
		{
			$this->costoUnidad = $newVal;
		}
		public function getPrecioTotal ()
		{
			return $this->$precioTotal;
		}
		public function setPrecioTotal ($newVal)
		{
			$this->precioTotal = $newVal;
		}
			public function calcularTotal ($cantidadProducto,$costoUnidad)
		{
			$precioTotal = $cantidadProducto * $costoUnidad;
		}
	}
?>