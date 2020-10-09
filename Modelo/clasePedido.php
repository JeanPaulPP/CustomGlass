<?php
	class pedido 
	{
		private $idPedido;
		private $fechaPedido;
		private $idCliente;
		private $precioTotal;
		private $detallePedido;
		private $estadoPedido;

		public function pedido ($idPedido)
		{
			$this->idPedido=$idPedido;
		}
		public function getIdPedido ()
		{
			return $this->idPedido = $idPedido ; 
		}
		public function set ($newVal)
		{
			$this->idPedido = $newVal;
		}
		public function getFechaPedido ()
		{
			return $this->fechaPedido = $fechaPedido ; 
		}
		public function setFechaPedido ($newVal)
		{
			$this->fechaPedido = $newVal;
		}
		public function getIdCliente ()
		{
			return $this->idCliente = $idCliente ; 
		}
		public function setIdCliente ($newVal)
		{
			$this->idCliente = $newVal;
		}
		public function getPrecioTotal ()
		{
			return $this->precioTotal = $precioTotal ; 
		}
		public function setPrecioTotal ($newVal)
		{
			$this->precioTotal = $newVal;
		}
		public function getDetallePedido ()
		{
			return $this->detallePedido = $detallePedido ; 
		}
		public function setDetallePedido ($newVal)
		{
			$this->detallePedido = $newVal;
		}
		public function getEstadoPedido ()
		{
			return $this->estadoPedido = $estadoPedido ; 
		}
		public function setEstadoPedido ($newVal)
		{
			$this->estadoPedido = $newVal;
		}
	}
?>