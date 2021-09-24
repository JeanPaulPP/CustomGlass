<?php
	class DetServicio 
	{
		private $idDetServicio;
		private $caracteristicaServicio;
		private $contactoServicio;

		public function _construct($idDetServicio)
		{
			$this->idDetServicio=$idDetServicio;
		}
		public function getIdDetServicio ()
		{
			return $this->idDetServicio;
		}
		public function setIdDetServicio ($newVal)
		{
			$this->idDetServicio = $newVal;
		}
		public function getCaracteristicaServicio ()
		{
			return $this->caracteristicaServicio;
		}
		public function setCaracteristicaServicio ($newVal)
		{
			$this->caracteristicaServicio = $newVal;
		}
		public function getContactoServicio ()
		{
			return $this->contactoServicio;
		}
		public function setContactoServicio ($newVal)
		{
			$this->contactoServicio = $newVal;
		}
	}
?>