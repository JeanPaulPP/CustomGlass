<?php
	class detProducto 
	{
		private $idDetalleProducto;
		private $materialProducto;
		private $medidaProducto;

		public function detProducto($idDetalleProducto) 
		{
			$this->idDetalleProducto=$idDetalleProducto;
		}
		public function getIdDetalleProducto ()
		{
			return $this->idDetalleProducto = $idDetalleProducto ;
		}
		public function setIdDetalleProducto ($newVal)
		{
			$this->idDetalleProducto = $newVal;
		}
		public function getMaterialProducto ()
		{
			return $this->materialProducto = $materialProducto ;
		}
		public function set ($newVal)
		{
			$this->materialProducto = $newVal;
		}
		public function getMedidaProducto ()
		{
			return $this->medidaProducto = $medidaProducto ;
		}
		public function setMedidaProducto ($newVal)
		{
			$this->medidaProducto = $newVal;
		}
	}
?>