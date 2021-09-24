<?php
	class DetProducto 
	{
		private $idDetalleProducto;
		private $materialProducto;
		private $medidaProducto;

		public function _construct($idDetalleProducto) 
		{
			$this->idDetalleProducto=$idDetalleProducto;
		}
		public function getIdDetalleProducto ()
		{
			return $this->idDetalleProducto;
		}
		public function setIdDetalleProducto ($newVal)
		{
			$this->idDetalleProducto = $newVal;
		}
		public function getMaterialProducto ()
		{
			return $this->materialProducto;
		}
		public function set ($newVal)
		{
			$this->materialProducto = $newVal;
		}
		public function getMedidaProducto ()
		{
			return $this->medidaProducto;
		}
		public function setMedidaProducto ($newVal)
		{
			$this->medidaProducto = $newVal;
		}
	}
?>