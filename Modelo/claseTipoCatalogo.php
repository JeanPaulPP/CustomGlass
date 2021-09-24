<?php
	class TipoCatalogo 
	{
		private $idTipoCatalogo;
		private $nombreTipoCatalogo;

		public function _construct($idTipoCatalogo)
		{
			$this->idTipoCatalogo=$idTipoCatalogo;
		}
		public function getIdTipoCatalogo ()
		{
			return $this->idTipoCatalogo;
		}
		public function setIdTipoCatalogo ($newVal)
		{
			$this->idTipoCatalogo=$newVal;
		}
		public function getNombreTipoCatalogo ()
		{
			return $this->nombreTipoCatalogo;
		}
		public function setNombreTipoCatalogo ($newVal)
		{
			$this->nombreTipoCatalogo=$newVal;
		}
	}
?>