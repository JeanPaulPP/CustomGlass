<?php
	class detServicio 
	{
		private $idDetServicio;
		private $caracteristicaServicio;
		private $contactoServicio;

		public function detServicio ($idDetServicio)
		{
			$this->idDetServicio=$idDetServicio;
		}
		public function getIdDetServicio ()
		{
			return $this->idDetServicio = $idDetServicio ;
		}
		public function setIdDetServicio ($newVal)
		{
			$this->idDetServicio = $newVal;
		}
		public function getCaracteristicaServicio ()
		{
			return $this->caracteristicaServicio = $caracteristicaServicio ;
		}
		public function setCaracteristicaServicio ($newVal)
		{
			$this->caracteristicaServicio = $newVal;
		}
		public function getContactoServicio ()
		{
			return $this->contactoServicio = $contactoServicio ;
		}
		public function setContactoServicio ($newVal)
		{
			$this->contactoServicio = $newVal;
		}
	}
?>