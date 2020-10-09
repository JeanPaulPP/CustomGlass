<?php
	class producto 
	{
		protected $idProducto;
		protected $nombreProd;
		protected $TipoProducto;
		protected $medidasProd;
		protected $materialProd;
		protected $costoUnitario;
		protected $EstadoProducto;
		protected $IVA;

		public function producto ()
		{

		}
		public function getIdProducto ()
		{
			return$this->$idProducto;
		}
		public function getNombreProd ()
		{
			return$this->$nombreProd;
		}
		public function getTipoProducto ()
		{
			return$this->$TipoProducto;
		}
		public function getEstadoProducto ()
		{
			return$this->$EstadoProducto;
		}
		public function getCostoUnitario ()
		{
			return$this->$costoUnitario;
		}
		public function getMedidasProd ()
		{
			return$this->$medidasProd;
		}
		public function getMaterialProd ()
		{
			return$this->$materialProd;
		}
		public function getIVA ()
		{
			return$this->$IVA;
		}
		public function setIdProducto($newVal)
		{
			$this->idProducto = $newVal;
		}
		public function setNombreProd ($newVal)
		{
			$this->nombreProd = $newVal;
		}
		public function setTipoProducto ($newVal)
		{
			$this->TipoProducto = $newVal;
		}
		public function setMedidasProd ($newVal)
		{
			$this->medidasProd = $newVal;
		}
		public function setMaterialProd ($newVal)
		{
			$this->materialProd = $newVal;
		}
		public function setEstadoProducto ($newVal)
		{
			$this->EstadoProducto = $newVal;
		}
		public function setCostoUnitario ($newVal)
		{
			$this->costoUnitario = $newVal;
		}
		public function setIVA ($newVal)
		{
			$this->IVA = $newVal;
		}

		public function crearProducto ($idProducto, $EstadoProducto, $TipoProducto, $nombreProd, $medidasProd, $materialProd, $costoUnitario, $IVA){
			$this->idProducto=$idProducto;
			$this->nombreProd=$nombreProd;
			$this->TipoProducto=$TipoProducto;
			$this->medidasProd=$medidasProd;
			$this->materialProd=$materialProd;
			$this->costoUnitario=$costoUnitario;
			$this->EstadoProducto=$EstadoProducto;
			$this->IVA=$IVA;
		}
		public function registrarProducto()
		{
		$this->Conexion=Conectarse();
		$sql="INSERT INTO producto (idProducto, EstadoProducto, TipoProducto, nombreProd,   medidasProd, materialProd, costoUnitario, IVA) VALUES ('$this->idProducto', '$this->EstadoProducto', '$this->TipoProducto',  '$this->nombreProd',  '$this->medidasProd', '$this->materialProd', '$this->costoUnitario', '$this->IVA')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
		}
		public function consultarProductos()
	{
		$this->Conexion=Conectarse();
		 $sql="SELECT p.idProducto, p.nombreProd, p.medidasProd, p.materialProd, p.costoUnitario, p.IVA, tp.tipoProd, ep.estadoProd FROM producto p, tipo_producto tp, estado_producto ep WHERE (p.EstadoProducto = ep.idEstadoProd) AND (p.TipoProducto = tp.idTipo)";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	}
?>