<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])){
  $x=0;
}
?>
<?php
  require "../Modelo/claseCarrito.php";
  $idSesion = session_id();
  $sql="SELECT p.nombreProd, p.medidasProd, p.materialProd, p.costoUnitario, p.IVA, cc.cantProducto, cc.idCarrito FROM producto p, carrito_de_compras cc WHERE (p.idProducto = cc.Producto) AND (cc.idSession = '$idSesion') AND (cc.Estado = 1)";
  $carritos = $objConexion->query($sql);
  $Registros = mysqli_num_rows($carritos);
  $total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Carrito de compras</title>
  <link rel="stylesheet" type="text/css" href="../Estilos/principal.css">
</head>
<body>
	<div style="text-align: center; width: 100%;">
<h1>PRODUCTOS SELECCIONADOS</h1><br>
<h3>Si cierra sesión de su cuenta el carrito con las lista de productos seleccionados se borrará</h3>
<table>
  <caption>Tabla de productos seleccionados</caption>
  <thead>
  <tr>
    <th id="Producto">Producto</th>
    <th id="Medidas">Medidas</th>
    <th id="Material">Material</th>
    <th id="Costo">Costo Unitario</th> 
    <th id="IVA">IVA</th> 
    <th id="Cantidad">Cantidad</th>
    <th id="subtotal">subtotal</th>
    <th></th>
  </tr>
  </thead>
  <?php
  while ($carrito = $carritos->fetch_object())
  {
  ?>
  <tr>
        <td><?php  echo  $carrito->nombreProd  ?>     </td>
        <td><?php  echo  $carrito->medidasProd  ?></td> 
        <td><?php  echo  $carrito->materialProd ?> </td>
        <td><?php  echo  $carrito->costoUnitario ?></td>
        <td><?php  echo  $carrito->IVA  ?></td>
        <td><?php  echo  $carrito->cantProducto ?></td> 
        <td><?php $Subtotal = 0; $Costo = $carrito->costoUnitario; $IVA = $carrito->IVA; $Cantidad = $carrito->cantProducto; $Suma = $Costo + $IVA; $Subtotal = $Suma * $Cantidad; $total = $total + $Subtotal;  echo  $Subtotal;  ?></td>  
        <td><a href="../Controlador/ValidarEliminarProdCar.php?id=<?php echo $carrito->idCarrito; ?>">Eliminar</a></td>
  </tr>
  <?php
  }
  ?>
  <tr style="text-align: left; background: black; color: white;"><th id="total">Total</th><th>$<?php echo $total; ?></th></tr>
</table>
<?php 
  if ($Registros >0) { ?>
    <form action="../Controlador/actualizarIdSession.php">
    <input style="display: none;" type="hidden" name="idSession" id="idSession" value ="<?php $sesion = session_id(); $random = rand(1000, 9999); echo $sesion, $random;  ?>">
    <input type="hidden" name="Sesion" id="Sesion" value="<?php $IdSession = session_id(); echo $IdSession; ?>">
    <button type="submit">Realizar Pedido</button>
  </form>
  <form action="../Controlador/ValidarEliminarAllProdCar.php">
    <input type="hidden" name="idSession" id="idSession" value="<?php echo $sesion ?>">
    <button type="submit">Vaciar Carrito</button>
  </form>
  <?php
  }
?>
<br>
      <button onclick="window.location.href='PrincipalClie.php?pg=catalogoProdClie'">Volver</button>
  </div>
  <?php 
  if ($x==1){
  echo "<script>alert('Se elimino el producto del catálogo');</script>";
}
if ($x==2){
  echo "<script>alert('No se pudo eliminar producto del catalogo');</script>";
}
if ($x==3){
  echo "<script>alert('Se vació el carrito');</script>";
}
if ($x==4){
  echo "<script>alert('No se pudo vaciar el carrito');</script>";
}
if ($x==5){
  echo "<script>alert('No se pudo continuar, por favor intentelo de nuevo');</script>";
}
?>
</body>
</html>