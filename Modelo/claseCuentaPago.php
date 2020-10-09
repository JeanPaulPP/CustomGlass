<?php
	class cuentaPago 
	{
		private $idTarjeta;
		private $disponibilidadTarjeta;
		private $estadoCuentaPago;

		public function cuentaPago($idTarjeta)
		{
			$this->idTarjeta = $idTarjeta;
		}
		public function aumentarDisponibilidad ($aumentarDisponibilidad)
		{
			//codigo
		}
		public function getIdTarjeta ()
		{
			return $this->idTarjeta=$idTarjeta;
		}
		public function setIdTarjeta ($newVal)
		{
			$this->idTarjeta = $newVal;
		}
		public function getDisponibilidadTarjeta()
		{
			return $this->disponibilidadTarjeta = $disponibilidadTarjeta;
		}
		public function setDisponibilidadTarjeta($newVal)
		{
			$this->disponibilidadTarjeta=$newVal;
		}
		public function getEstadoCuentaPago ()
		{
			return $this->estadoCuentaPago=$estadoCuentaPago;
		}
		public function setEstadoCuentaPago ($newVal)
		{
			$this->estadoCuentaPago=$newVal;
		}
	}
?>