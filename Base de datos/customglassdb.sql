-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2020 a las 18:22:31
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `customglassdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_de_compras`
--

CREATE TABLE `carrito_de_compras` (
  `idCarrito` int(10) UNSIGNED NOT NULL,
  `Cliente` int(10) UNSIGNED NOT NULL,
  `Producto` int(10) UNSIGNED NOT NULL,
  `cantProducto` int(10) UNSIGNED NOT NULL,
  `fechaAgregado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito_de_compras`
--

INSERT INTO `carrito_de_compras` (`idCarrito`, `Cliente`, `Producto`, `cantProducto`, `fechaAgregado`) VALUES
(4589, 1000133546, 1975, 2, '2020-03-08'),
(4589, 1000133546, 3458, 4, '2020-03-08'),
(4589, 1000133546, 7964, 4, '2020-03-08'),
(6213, 2410857460, 1230, 2, '2022-07-25'),
(6213, 2410857460, 7964, 5, '2022-07-25'),
(8671, 1013672970, 1230, 1, '2020-05-17'),
(8671, 1013672970, 5672, 1, '2020-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `idCatalogo` int(10) UNSIGNED NOT NULL,
  `Producto` int(10) UNSIGNED NOT NULL,
  `Usuario` int(10) UNSIGNED NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `imagenProd` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`idCatalogo`, `Producto`, `Usuario`, `fechaInicio`, `fechaFinal`, `imagenProd`) VALUES
(4796, 1230, 4, '2019-05-03', '2019-05-08', NULL),
(4796, 1975, 4, '2019-05-03', '2019-05-08', NULL),
(4796, 3458, 4, '2019-05-03', '2019-05-08', NULL),
(4796, 5672, 5, '2019-05-15', '2019-05-20', NULL),
(4796, 7964, 5, '2019-05-22', '2019-06-04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) UNSIGNED NOT NULL,
  `EstadoCliente` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `correoClie` varchar(255) NOT NULL,
  `contraClie` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `Telefono` int(10) UNSIGNED DEFAULT NULL,
  `Telefono2` int(10) UNSIGNED DEFAULT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `EstadoCliente`, `correoClie`, `contraClie`, `direccion`, `Telefono`, `Telefono2`, `Nombres`, `Apellidos`) VALUES
(1000133546, 1, 'juanca0978@hotmail.com', 'juan9852', 'Calle 45 No 53B-11', 7325462, 3164544626, 'Juan Camilo', 'Cerdas Cardenas'),
(1000145338, 3, 'jcamilo23@hotmail.com', 'janerc09', 'cll58 I 78 sur', NULL, 3205782698, 'Janer Camilo', 'Borrero Tuberquia'),
(1013672970, 2, 'djeisson@hotmail.com', 'dario0620', 'Crr78B#58I58', 3367899, 3182467237, 'Jeisson Dario', 'Rodríguez Portillo'),
(1014987534, 3, 'jperez@hotmail.com', 'juanitop05', 'cra 16 #20', 6025749, NULL, 'Juan', 'Perez Ortiz'),
(2410857460, 2, 'fromero@hotmail.com', 'Fernando0523', 'cra 65K #70 sur', 315780526, NULL, 'Fernando Andrés', 'Romero vargas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `idDetalleFac` int(10) UNSIGNED NOT NULL,
  `DetallePedido` int(10) UNSIGNED NOT NULL,
  `subtotal` float NOT NULL,
  `CostoIva` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`idDetalleFac`, `DetallePedido`, `subtotal`, `CostoIva`) VALUES
(7542, 9821, 239900, 45581),
(9562, 2569, 2543600, 483284);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `idDetallePed` int(10) UNSIGNED NOT NULL,
  `Producto` int(10) UNSIGNED NOT NULL,
  `CantidadPedido` int(10) UNSIGNED DEFAULT NULL,
  `costoPedido` int(10) UNSIGNED NOT NULL,
  `costoIVA` int(10) UNSIGNED NOT NULL,
  `CarritoCompras` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`idDetallePed`, `Producto`, `CantidadPedido`, `costoPedido`, `costoIVA`, `CarritoCompras`) VALUES
(2569, 1975, 2, 980000, 186200, 4589),
(2569, 3458, 4, 200000, 38000, 4589),
(2569, 7964, 4, 1363600, 259084, 4589),
(8642, 1975, 3, 1470000, 279300, NULL),
(9821, 1230, 1, 100000, 19000, 8671),
(9821, 5672, 1, 139900, 26581, 8671);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_cliente`
--

CREATE TABLE `estado_cliente` (
  `idEstado` int(10) UNSIGNED NOT NULL,
  `nombreEstado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_cliente`
--

INSERT INTO `estado_cliente` (`idEstado`, `nombreEstado`) VALUES
(1, 'Activo'),
(2, 'Inctivo'),
(3, 'Bloqueado'),
(4, 'Bloqueado temporalmente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pedido`
--

CREATE TABLE `estado_pedido` (
  `idEstadoPed` int(10) UNSIGNED NOT NULL,
  `estadoPed` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_pedido`
--

INSERT INTO `estado_pedido` (`idEstadoPed`, `estadoPed`) VALUES
(1, 'Aprobado'),
(2, 'Rechazado'),
(3, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_producto`
--

CREATE TABLE `estado_producto` (
  `idEstadoProd` int(10) UNSIGNED NOT NULL,
  `estadoProd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_producto`
--

INSERT INTO `estado_producto` (`idEstadoProd`, `estadoProd`) VALUES
(1, 'Agotado'),
(2, 'Activo'),
(3, 'Fuera de producción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_servicio`
--

CREATE TABLE `estado_servicio` (
  `idEstadoServ` int(11) NOT NULL,
  `estadoServ` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_servicio`
--

INSERT INTO `estado_servicio` (`idEstadoServ`, `estadoServ`) VALUES
(1, 'disponible'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(10) UNSIGNED NOT NULL,
  `DetalleFactura` int(10) UNSIGNED NOT NULL,
  `Usuario` int(10) UNSIGNED NOT NULL,
  `total` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`idFactura`, `DetalleFactura`, `Usuario`, `total`) VALUES
(15948, 9562, 1, 3026880),
(26485, 7542, 2, 285481);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(10) UNSIGNED NOT NULL,
  `EstadoPedido` int(10) UNSIGNED NOT NULL,
  `DetallePedido` int(10) UNSIGNED NOT NULL,
  `Usuario` int(10) UNSIGNED NOT NULL,
  `Cliente` int(10) UNSIGNED NOT NULL,
  `dirEntrega` varchar(45) NOT NULL,
  `fechaPed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `EstadoPedido`, `DetallePedido`, `Usuario`, `Cliente`, `dirEntrega`, `fechaPed`) VALUES
(42865, 1, 9821, 1, 1013672970, 'Crr78B#58I58', '2020-05-22'),
(75386, 1, 2569, 1, 1000133546, 'Calle 45 No 53B-11', '2020-03-10'),
(79134, 2, 8642, 2, 1000145338, 'calle 4 No 23B-13', '2020-08-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) UNSIGNED NOT NULL,
  `EstadoProducto` int(10) UNSIGNED NOT NULL,
  `TipoProducto` int(10) UNSIGNED NOT NULL,
  `nombreProd` varchar(45) NOT NULL,
  `medidasProd` varchar(255) DEFAULT NULL,
  `materialProd` varchar(255) DEFAULT NULL,
  `costoUnitario` float NOT NULL,
  `IVA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `EstadoProducto`, `TipoProducto`, `nombreProd`, `medidasProd`, `materialProd`, `costoUnitario`, `IVA`) VALUES
(456, 1, 2, 'bbbbb', 'aaaaa', 'aaaaxaaaa', 1, 1),
(789, 3, 5, 'gggggg', 'ffffff', 'fffff', 1, 1),
(915, 1, 4, 'vvvvv', 'cccc', 'ccccc', 1, 1),
(3458, 2, 5, 'marco de ventana', '50cm*125cm', 'Aluminio', 50000, 9500),
(5672, 2, 6, 'Puerta exterior', '60 x 200 cm ', 'Aluminio', 139900, 26581),
(7964, 3, 6, 'Puerta Milano Pardo', '80 x 235 cm ', 'Madera', 340900, 64771);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(10) UNSIGNED NOT NULL,
  `nombreRol` varchar(45) NOT NULL,
  `Funcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`, `Funcion`) VALUES
(1, 'Administrador', 'Administrar cuentas de usuario'),
(2, 'Vendedor', 'Aceptar/Rechazar pedidos y generar facturas'),
(3, 'Renovador', 'Actualizar información del sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(10) UNSIGNED NOT NULL,
  `Usuario` int(10) UNSIGNED NOT NULL,
  `Servicio` int(45) NOT NULL,
  `detServicio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `Estado` int(10) UNSIGNED NOT NULL,
  `telefono` int(10) UNSIGNED DEFAULT NULL,
  `imagenServ` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `Usuario`, `Servicio`, `detServicio`, `Estado`, `telefono`, `imagenServ`) VALUES
(12, 3, 1, 'Instalar ventanas', 1, 72111000, 0x76696472696f2d74656d706c61646f2e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `idTipo` int(10) UNSIGNED NOT NULL,
  `tipoProd` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`idTipo`, `tipoProd`) VALUES
(1, 'Mesas'),
(2, 'Repisas'),
(3, 'Sillas'),
(4, 'Sofás'),
(5, 'Marcos de ventana'),
(6, 'Puertas'),
(7, 'Vidrio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `idTipoServicio` int(11) NOT NULL,
  `servNombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`idTipoServicio`, `servNombre`) VALUES
(1, 'instalacion de ventanas'),
(2, 'instalacion de puertas'),
(3, 'toma de medidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `Rol` int(10) UNSIGNED NOT NULL,
  `CorreoUsuario` varchar(255) NOT NULL,
  `ContraUsuario` varchar(45) NOT NULL,
  `NombresUsu` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Rol`, `CorreoUsuario`, `ContraUsuario`, `NombresUsu`) VALUES
(1, 2, 'A@1', '1', 'A'),
(3, 3, 'Miguel@mail.com', '123', 'Miguel'),
(5, 2, 'B@1', '456', 'b'),
(6, 2, 'B@2', '$2y$10$IpFp12eAiSF4jfsRKJqrMO06r2JLb094a2ropW', 'b'),
(741, 3, 'Pablito@mail.com', '$2y$10$JTWb4vZGcOo6W23SceXcR.9jE56g3opiGh7B1t', 'Pablo'),
(789, 1, 'Juanito@mail.com', '$2y$10$/nhY/fi3rtXBGI4wr.xaMODPyoe5U9R0g5mjZT', 'Juan Gomes'),
(915, 3, 'henry@mail.com', '123', 'Henry'),
(9634, 3, 'F@mail.com', '123', 'F'),
(52643208, 3, 'bairon@mail.com', '123', 'bairon'),
(1001245659, 3, 'Juan12@mail.com', '123', 'bairon');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_de_compras`
--
ALTER TABLE `carrito_de_compras`
  ADD PRIMARY KEY (`idCarrito`,`Producto`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`idCatalogo`,`Producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`idDetalleFac`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`idDetallePed`,`Producto`);

--
-- Indices de la tabla `estado_cliente`
--
ALTER TABLE `estado_cliente`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estado_pedido`
--
ALTER TABLE `estado_pedido`
  ADD PRIMARY KEY (`idEstadoPed`);

--
-- Indices de la tabla `estado_producto`
--
ALTER TABLE `estado_producto`
  ADD PRIMARY KEY (`idEstadoProd`);

--
-- Indices de la tabla `estado_servicio`
--
ALTER TABLE `estado_servicio`
  ADD PRIMARY KEY (`idEstadoServ`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`idTipoServicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `CorreoUsuario` (`CorreoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado_cliente`
--
ALTER TABLE `estado_cliente`
  MODIFY `idEstado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado_pedido`
--
ALTER TABLE `estado_pedido`
  MODIFY `idEstadoPed` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_producto`
--
ALTER TABLE `estado_producto`
  MODIFY `idEstadoProd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_servicio`
--
ALTER TABLE `estado_servicio`
  MODIFY `idEstadoServ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79135;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `idTipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  MODIFY `idTipoServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
