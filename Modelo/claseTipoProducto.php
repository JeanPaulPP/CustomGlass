<?php
	class tipoProducto
	{
		private $idTipoProducto;
		private $nombreTipoProducto;

		public function tipoSProducto ($idTipoProducto)
		{
			$this->idTipoProducto=$idTipoProducto;
		}
		public function getIdTipoProducto ()
		{
			return $this->idTipoProducto = $idTipoProducto ;
		}
		public function setIdTipoProducto ($newVal)
		{
			$this->idTipoProducto = $newVal;
		}
		public function getNombreTipoProducto ()
		{
			return $this->nombreTipoProducto = $nombreTipoProducto ;
		}
		public function setNombreTipoProducto ($newVal)
		{
			$this->nombreTipoProducto = $newVal;
		}
	}
?>