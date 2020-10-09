<?php

	class carrito 
	{
		protected $idCarrito;
		protected $cantidadProducto;
		protected $fechaAgregado;

		public function carrito($idCarrito)
		{
			$this->idCarrito = $idCarrito;
		}

		public function agregarProducto ($agregarProducto)
		{
			//aqui codigo del metodo
		}
		public function actualizarCantProducto ($actualizarCantProducto)
		{
			//aqui codigo del metodo
		}
		public function eliminarProducto ($eliminarProducto)
		{
			//aqui codigo del metodo
		}

		public function getIdCarrito ()
		{
			return $this->idCarrito;
		}
		public function setIdCarrito ($newVal)
		{
			$this->idCarrito = $newVal;
		}
		public function getCantidadProducto ()
		{
			return $this->cantidadProducto = $cantidadProducto;
		}
		public function setCantidadProducto ($newVal)
		{
			$this->cantidadProducto = $newVal;
		}

	}

?>