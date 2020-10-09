<?php
	class tipoCatalogo 
	{
		private $idTipoCatalogo;
		private $nombreTipoCatalogo;

		public function tipoCatalogo($idTipoCatalogo)
		{
			$this->idTipoCatalogo=$idTipoCatalogo;
		}
		public function getIdTipoCatalogo ()
		{
			return $this->idTipoCatalogo=$idTipoCatalogo;
		}
		public function setIdTipoCatalogo ($newVal)
		{
			$this->idTipoCatalogo=$newVal;
		}
		public function getNombreTipoCatalogo ()
		{
			return $this->nombreTipoCatalogo=$nombreTipoCatalogo;
		}
		public function setNombreTipoCatalogo ($newVal)
		{
			$this->nombreTipoCatalogo=$newVal;
		}
	}
?>