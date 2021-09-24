<?php

	class CarritoCompras
		{
		protected $idCarrito;
		protected $idSession;
		protected $Cliente;
		protected $Producto;
		protected $cantProducto;
		protected $fechaAgregado;

		public function carrito($idCarrito)
		{
			$this->idCarrito = $idCarrito;
		}

		public function getIdCarrito ()
		{
			return $this->idCarrito;
		}
		public function setIdCarrito ($newVal)
		{
			$this->idCarrito = $newVal;
		}
		public function getIdSession ()
		{
			return $this->idSession;
		}
		public function setIdSession ($newVal)
		{
			$this->idSession = $newVal;
		}
		public function getCliente ()
		{
			return $this->Cliente;
		}
		public function setCliente ($newVal)
		{
			$this->Cliente = $newVal;
		}
		public function getProducto ()
		{
			return $this->Producto;
		}
		public function setProducto ($newVal)
		{
			$this->Producto = $newVal;
		}
		public function getCantProducto ()
		{
			return$this->cantProducto;
		}
		public function setCantProducto ($newVal)
		{
			$this->cantProducto = $newVal;
		}
		public function getFechaAgregado ()
		{
			return $this->fechaAgregado;
		}
		public function setFechaAgregado ($newVal)
		{
			$this->fechaAgregado = $newVal;
		}

		public function crearCarrito ($idSession, $Cliente, $Producto, $cantProducto, $fechaAgregado)
		{

			$this->idSession=$idSession;
			$this->Cliente=$Cliente;
			$this->Producto=$Producto;
			$this->cantProducto=$cantProducto;
			$this->fechaAgregado=$fechaAgregado;
		}
		public function registrarCarrito()
		{
		$this->Conexion=Conectarse();
		$sql="INSERT INTO carrito_de_compras (idSession, Cliente, Producto, cantProducto, fechaAgregado) VALUES ('$this->idSession', '$this->Cliente', '$this->Producto',  '$this->cantProducto',  '$this->fechaAgregado')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
		}
		public function consultarProdCarrito()
	{

		$this->Conexion=Conectarse();
		 $sql="SELECT p.nombreProd, p.medidasProd, p.materialProd, p.costoUnitario, p.IVA, cc.cantProducto FROM producto p, carrito_de_compras cc WHERE (p.idProducto = cc.Producto) AND (cc.idSession = '$this->idSession')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function eliminarProdCar($idCarrito){
			$this->idCarrito = $idCarrito;
			$this->Conexion=Conectarse();
			$sql=("DELETE FROM carrito_de_compras WHERE idCarrito = '$this->idCarrito'");
			$resultado = $this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;
		}

	public function eliminarAllProdCar($idSession){
			$this->idSession = $idSession;
			$this->Conexion=Conectarse();
			$sql=("DELETE FROM carrito_de_compras WHERE idSession = '$this->idSession'");
			$resultado = $this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;
		}
		
		public function actualizarIdSession(){
			$Sesion = session_id();
			$this->Conexion=Conectarse();
			$sql=("UPDATE carrito_de_compras SET (idSession = '$this->idSession'), (Estado = 2) WHERE (idSession = '$Sesion' )");
			$resultado = $this->Conexion->query($sql);
			$this->Conexion->close();
			return $resultado;
		}
	}

?>