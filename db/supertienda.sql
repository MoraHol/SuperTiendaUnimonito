-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2019 a las 07:19:04
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supertienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `puntos` bigint(20) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `nombre` varchar(105) DEFAULT NULL,
  `ciudad` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `puntos`, `cedula`, `nombre`, `ciudad`) VALUES
(1, 0, '1002262656', 'alexis holguin', 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `monto` bigint(20) NOT NULL,
  `descuento` bigint(20) NOT NULL,
  `clientes_id_cliente` int(11) NOT NULL,
  `empleados_id_empleado` int(11) NOT NULL,
  `empleados_franquicias_id_franquicia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_has_productos`
--

CREATE TABLE `compras_has_productos` (
  `compras_id_compra` int(11) NOT NULL,
  `productos_id_producto` int(11) NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `salario` bigint(20) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp(),
  `franquicias_id_franquicia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `cedula`, `telefono`, `salario`, `fecha_ingreso`, `franquicias_id_franquicia`) VALUES
(1, 'alexis ', '1002262656', '3222724734', 2500000, '2019-11-07 06:36:26', 1),
(5, 'asas asa', '232454665', '12324243', 500000, '2019-11-07 23:35:41', 10),
(6, 'alex holgyu', '10022656', '1212', 2332323, '2019-12-05 04:06:49', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franquicias`
--

CREATE TABLE `franquicias` (
  `id_franquicia` int(11) NOT NULL,
  `nombre_franquicia` varchar(45) DEFAULT NULL,
  `localidades_id_localidad` int(11) NOT NULL,
  `gerente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `franquicias`
--

INSERT INTO `franquicias` (`id_franquicia`, `nombre_franquicia`, `localidades_id_localidad`, `gerente`) VALUES
(1, 'franquicia_norte_1', 1, 1),
(2, 'franquicia_norte_2', 1, NULL),
(3, 'franquicia_norte_3', 1, NULL),
(4, 'franquicia_norte_4', 1, NULL),
(5, 'franquicia_norte_5', 1, NULL),
(6, 'franquicia_norte_6', 1, NULL),
(7, 'franquicia_norte_7', 1, NULL),
(8, 'franquicia_norte_8', 1, NULL),
(9, 'franquicia_norte_9', 1, NULL),
(10, 'franquicia_norte_10', 1, NULL),
(11, 'franquicia_sur_1', 2, NULL),
(12, 'franquicia_sur_2', 2, NULL),
(13, 'franquicia_sur_3', 2, NULL),
(14, 'franquicia_sur_4', 2, NULL),
(15, 'franquicia_sur_5', 2, NULL),
(16, 'franquicia_sur_6', 2, NULL),
(17, 'franquicia_sur_7', 2, NULL),
(18, 'franquicia_sur_8', 2, NULL),
(19, 'franquicia_sur_9', 2, NULL),
(20, 'franquicia_sur_10', 2, NULL),
(21, 'franquicia_oriente_1', 3, NULL),
(22, 'franquicia_oriente_2', 3, NULL),
(23, 'franquicia_oriente_3', 3, NULL),
(24, 'franquicia_oriente_4', 3, NULL),
(25, 'franquicia_oriente_5', 3, NULL),
(26, 'franquicia_oriente_6', 3, NULL),
(27, 'franquicia_oriente_7', 3, NULL),
(28, 'franquicia_oriente_8', 3, NULL),
(29, 'franquicia_oriente_9', 3, NULL),
(30, 'franquicia_oriente_10', 3, NULL),
(31, 'franquicia_occidente_1', 4, NULL),
(32, 'franquicia_occidente_2', 4, NULL),
(33, 'franquicia_occidente_3', 4, NULL),
(34, 'franquicia_occidente_4', 4, NULL),
(35, 'franquicia_occidente_5', 4, NULL),
(36, 'franquicia_occidente_6', 4, NULL),
(37, 'franquicia_occidente_7', 4, NULL),
(38, 'franquicia_occidente_8', 4, NULL),
(39, 'franquicia_occidente_9', 4, NULL),
(40, 'franquicia_occidente_10', 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id_localidad`, `nombre`) VALUES
(1, 'norte'),
(2, 'sur'),
(3, 'oriente'),
(4, 'occidente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movilidad`
--

CREATE TABLE `movilidad` (
  `empleados_id_empleado` int(11) NOT NULL,
  `empleados_franquicias_id_franquicia` int(11) NOT NULL,
  `empleados_franquicias_localidades_id_localidad` int(11) NOT NULL,
  `fecha_movilidad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `salario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `fecha_compra` date NOT NULL,
  `observaciones` varchar(600) DEFAULT NULL,
  `precio` bigint(20) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `fecha_compra`, `observaciones`, `precio`, `tipo`, `cantidad`) VALUES
(1, 'dulces rellenos de licores', '2019-11-07', NULL, 40000, 'dulces', 200),
(2, 'postre de natas', '2019-11-07', NULL, 38000, 'postre', 380),
(3, 'cholao', '2019-11-07', NULL, 40000, 'comida', 387),
(4, 'merengón', '2019-11-07', NULL, 32000, 'comida', 46),
(5, ' leche asada', '2019-11-07', NULL, 3500, 'comida', 700),
(6, 'cortado de leche', '2019-11-07', NULL, 4500, 'comida', 245),
(7, 'panelitas ', '2019-11-07', NULL, 4622, 'comida', 500),
(8, 'repollas', '2019-11-07', NULL, 3497, 'comida', 1000),
(9, 'fresas con crema', '2019-11-07', NULL, 4700, 'comida', 346),
(10, 'arroz con leche', '2019-11-07', NULL, 7890, 'comida', 340),
(11, 'eclaire de chocolate', '2019-11-07', NULL, 4800, 'comida', 346),
(12, 'tamales', '2019-11-07', NULL, 7000, 'comida', 560),
(15, 'asas', '2019-11-07', 'aasjaajsas', 121213, 'as', 11),
(16, 'Chorizos', '2019-11-07', 'aasjaajsas', 121213, 'as', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_especiales`
--

CREATE TABLE `productos_especiales` (
  `id_producto` int(11) NOT NULL,
  `id_localidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos_especiales`
--

INSERT INTO `productos_especiales` (`id_producto`, `id_localidad`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 2),
(6, 3),
(7, 3),
(8, 3),
(9, 4),
(10, 4),
(11, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`,`clientes_id_cliente`,`empleados_id_empleado`,`empleados_franquicias_id_franquicia`),
  ADD KEY `fk_compras_clientes1_idx` (`clientes_id_cliente`),
  ADD KEY `fk_compras_empleados1_idx` (`empleados_id_empleado`,`empleados_franquicias_id_franquicia`);

--
-- Indices de la tabla `compras_has_productos`
--
ALTER TABLE `compras_has_productos`
  ADD PRIMARY KEY (`compras_id_compra`,`productos_id_producto`),
  ADD KEY `fk_compras_has_productos_productos1_idx` (`productos_id_producto`),
  ADD KEY `fk_compras_has_productos_compras1_idx` (`compras_id_compra`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`,`franquicias_id_franquicia`),
  ADD KEY `fk_empleados_franquicias1_idx` (`franquicias_id_franquicia`);

--
-- Indices de la tabla `franquicias`
--
ALTER TABLE `franquicias`
  ADD PRIMARY KEY (`id_franquicia`,`localidades_id_localidad`),
  ADD KEY `fk_franquicias_localidades1_idx` (`localidades_id_localidad`),
  ADD KEY `fk_franquicias_empleados1_idx` (`gerente`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `movilidad`
--
ALTER TABLE `movilidad`
  ADD KEY `fk_Movilidad_empleados1_idx` (`empleados_id_empleado`,`empleados_franquicias_id_franquicia`,`empleados_franquicias_localidades_id_localidad`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_especiales`
--
ALTER TABLE `productos_especiales`
  ADD PRIMARY KEY (`id_producto`,`id_localidad`),
  ADD KEY `fk_producto_localidad` (`id_localidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `franquicias`
--
ALTER TABLE `franquicias`
  MODIFY `id_franquicia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_clientes1` FOREIGN KEY (`clientes_id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compras_empleados1` FOREIGN KEY (`empleados_id_empleado`,`empleados_franquicias_id_franquicia`) REFERENCES `empleados` (`id_empleado`, `franquicias_id_franquicia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compras_has_productos`
--
ALTER TABLE `compras_has_productos`
  ADD CONSTRAINT `fk_compras_has_productos_compras1` FOREIGN KEY (`compras_id_compra`) REFERENCES `compras` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compras_has_productos_productos1` FOREIGN KEY (`productos_id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`franquicias_id_franquicia`) REFERENCES `franquicias` (`id_franquicia`);

--
-- Filtros para la tabla `franquicias`
--
ALTER TABLE `franquicias`
  ADD CONSTRAINT `fk_franquicias_empleados` FOREIGN KEY (`gerente`) REFERENCES `empleados` (`id_empleado`),
  ADD CONSTRAINT `franquicias_ibfk_1` FOREIGN KEY (`localidades_id_localidad`) REFERENCES `localidades` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movilidad`
--
ALTER TABLE `movilidad`
  ADD CONSTRAINT `fk_Movilidad_empleados1` FOREIGN KEY (`empleados_id_empleado`,`empleados_franquicias_id_franquicia`) REFERENCES `empleados` (`id_empleado`, `franquicias_id_franquicia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_especiales`
--
ALTER TABLE `productos_especiales`
  ADD CONSTRAINT `fk_localidad_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `fk_producto_localidad` FOREIGN KEY (`id_localidad`) REFERENCES `localidades` (`id_localidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
