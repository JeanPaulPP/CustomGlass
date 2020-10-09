<?php
	class tipoServicio 
	{
		private $idTipoServicio;
		private $nombreTipoServicio;

		public function tipoServicio ($idTipoServicio)
		{
			$this->idTipoServicio=$idTipoServicio;
		}
		public function getIdTipoServicio ()
		{
			return $this->idTipoServicio = $idTipoServicio ;
		}
		public function setIdTipoServicio ($newVal)
		{
			$this->idTipoServicio = $newVal;
		}
		public function getNombreTipoServicio ()
		{
			return $this->nombreTipoServicio = $nombreTipoServicio ;
		}
		public function setNombreTipoServicio ($newVal)
		{
			$this->nombreTipoServicio = $newVal;
		}
	}
?>