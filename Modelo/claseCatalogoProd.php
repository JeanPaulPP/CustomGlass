<?php 
	class CatalogoProd
		{
		protected $idCatalogo ;
		protected $Producto ;
		protected $Usuario ;
		protected $fechaPublicacion ;
		protected $imagenProd ;

		public function servicio (){
			#nada
		}
		public function getIdCatalogo (){
			return$this->idCatalogo ;
		}
		public function getProducto (){
			return$this->Producto ;
		}
		public function getUsuario (){
			return$this->Usuario ;
		}
		public function getFechaPublicacion (){
			return$this->fechaPublicacion ;
		}
		public function getImagenProd (){
			return$this->imagenProd ;
		}
		public function setIdCatalogo ($newVal){
			$this->idCatalogo  = $newVal;	
		}
		public function setProducto ($newVal){
			$this->Producto  = $newVal;	
		}
		public function setUsuario ($newVal){
			$this->Usuario  = $newVal;	
		}
		public function setFechaPublicacion ($newVal){
			$this->fechaPublicacion  = $newVal;	
		}
		public function setImagenProd ($newVal){
			$this->imagenProd  = $newVal;	
		}
		public function crearCatalogo ($idCatalogo, $Producto, $Usuario, $fechaPublicacion, $imagenProd){
			$this-> idCatalogo = $idCatalogo ;
			$this-> Producto = $Producto ;
			$this-> Usuario = $Usuario ;
			$this-> fechaPublicacion = $fechaPublicacion ;
			$this-> imagenProd = $imagenProd ;
		}
		public function registrarCatalogo(){
			$this->Conexion=Conectarse();
			$sql="INSERT INTO catalogo (idCatalogo, Producto, Usuario, fechaPublicacion, imagenProd) VALUES ('$this->idCatalogo', '$this->Producto', '$this->Usuario', '$this->fechaPublicacion', '$this->imagenProd')";
			return $this->Conexion->query($sql);
		}
		public function consultarServicios()
		{
		$this->Conexion=Conectarse();
		 $sql="SELECT p.idProducto, p.nombreProd, p.medidasProd, p.materialProd, p.costoUnitario, p.IVA, c.imagenProd FROM producto p, catalogo c WHERE c.Producto = p.idProducto AND p.EstadoProducto = 2";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
		}

	}
?>