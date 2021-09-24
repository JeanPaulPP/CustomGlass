<?php
	class TipoProducto
	{
		private $idTipoProducto;
		private $nombreTipoProducto;

		public function _construct($idTipoProducto)
		{
			$this->idTipoProducto=$idTipoProducto;
		}
		public function getIdTipoProducto ()
		{
			return $this->idTipoProducto;
		}
		public function setIdTipoProducto ($newVal)
		{
			$this->idTipoProducto = $newVal;
		}
		public function getNombreTipoProducto ()
		{
			return $this->nombreTipoProducto;
		}
		public function setNombreTipoProducto ($newVal)
		{
			$this->nombreTipoProducto = $newVal;
		}
	}
?>