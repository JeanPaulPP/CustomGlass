<?php
	class TipoServicio 
	{
		private $idTipoServicio;
		private $nombreTipoServicio;

		public function _construct($idTipoServicio)
		{
			$this->idTipoServicio=$idTipoServicio;
		}
		public function getIdTipoServicio ()
		{
			return $this->idTipoServicio;
		}
		public function setIdTipoServicio ($newVal)
		{
			$this->idTipoServicio = $newVal;
		}
		public function getNombreTipoServicio ()
		{
			return $this->nombreTipoServicio;
		}
		public function setNombreTipoServicio ($newVal)
		{
			$this->nombreTipoServicio = $newVal;
		}
	}
?>