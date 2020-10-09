<?php
	class pago 
	{
		private $idPago
		private $cuotaPago;
		private $totalPago;

		public function pago ($idPago)
		{
			$this->idPago = $idPago;
		}
		public function depositarTotal ($depositarTotal)
		{
			//code
		}
		public function getIdPago ()
		{
			return $this->idPago=$idPago;
		}
		public function setIdPago ($newVal)
		{
			$this->idPago = $newVal;
		}
		public function getCuotaPago ()
		{
			return $this->cuotaPago=$cuotaPago;
		}
		public function setCuotaPago ($newVal)
		{
			$this->cuotaPago=$newVal;
		}
		public function getTotalPago ()
		{
			return $this->totalPago=$totalPago;
		}
		public function setTotalPago ($newVal)
		{
			$this->totalPago=$newVal;
		}
		public function getTotalPago ()
		{
			return $this->totalPago=$totalPago;
		}
		public function setTotalPago ($newVal)
		{
			$this->totalPago=$newVal;
		}
	}
?>