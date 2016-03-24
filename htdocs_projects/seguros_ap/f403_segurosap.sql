-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-01-2016 a las 08:52:28
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `f403_segurosap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE IF NOT EXISTS `agentes` (
  `idagentes` int(11) NOT NULL,
  `aseguradora` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`idagentes`, `aseguradora`, `cedula`, `nombre`, `telefono`, `direccion`, `fecha`) VALUES
(3, 'axa', '22343454323', 'Juan', '3432445534', 'almez #5529', '2015-08-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradoras`
--

CREATE TABLE IF NOT EXISTS `aseguradoras` (
  `idaseguradoras` int(11) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aseguradoras`
--

INSERT INTO `aseguradoras` (`idaseguradoras`, `clave`, `nombre`, `fecha`) VALUES
(4, '12345', 'AXA', '2015-08-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idclientes` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `cp` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idclientes`, `nombre`, `rfc`, `telefono`, `email`, `direccion`, `cp`, `ciudad`, `estado`, `colonia`, `fecha`) VALUES
(1, 'Juan', '29849291730809128', '7-18-76-07', 'juanm._94@hotmail.com', 'almez #5529', '88290', 'nuevo laredo', 'tamaulipas', 'encinos', '2015-08-19'),
(2, 'Jorge Antonio Tonone Torres', '83928eu28', '7143188', 'juanm._94@hotmail.com', 'almez #5529', '88290', 'nuevo laredo', 'tamaulipas', 'prueba', '2015-08-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigof`
--

CREATE TABLE IF NOT EXISTS `codigof` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polizas`
--

CREATE TABLE IF NOT EXISTS `polizas` (
  `idpolizas` int(11) NOT NULL,
  `poliza` varchar(45) NOT NULL,
  `fechaemision` datetime DEFAULT NULL,
  `fechavencimiento` datetime DEFAULT NULL,
  `fechainicio` datetime DEFAULT NULL,
  `moneda` varchar(45) DEFAULT NULL,
  `primaneta` varchar(45) DEFAULT NULL,
  `primatotal` varchar(45) DEFAULT NULL,
  `recargo` varchar(45) DEFAULT NULL,
  `formapago` varchar(45) DEFAULT NULL,
  `derechopoliza` varchar(45) DEFAULT NULL,
  `iva` varchar(45) DEFAULT NULL,
  `primerpago` varchar(45) DEFAULT NULL,
  `pagosubsecuente` varchar(45) DEFAULT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `ramo` varchar(45) DEFAULT NULL,
  `agente` varchar(45) DEFAULT NULL,
  `polizascol` varchar(45) DEFAULT NULL,
  `asegurado` varchar(45) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramos`
--

CREATE TABLE IF NOT EXISTS `ramos` (
  `idramos` int(11) NOT NULL,
  `aseguradora` varchar(45) DEFAULT NULL,
  `numramo` varchar(45) NOT NULL,
  `comision` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `adicional` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `privilegio` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `ingreso` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `privilegio`, `usuario`, `password`, `ip`, `ingreso`) VALUES
(2, 'juan manuel ahumada vazquez ', '1', 'juanadmin', '1f7d060dab05ab8e2ebdbdd679046bee', '::1', '2015-08-19 21:56:13'),
(3, 'Gerardo Diaz', '1', 'Gerardo', '01b3ebf87868b70121dc42784c97038a', '::1', '2015-08-17 23:28:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`idagentes`);

--
-- Indices de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  ADD PRIMARY KEY (`idaseguradoras`,`clave`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idclientes`);

--
-- Indices de la tabla `codigof`
--
ALTER TABLE `codigof`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `polizas`
--
ALTER TABLE `polizas`
  ADD PRIMARY KEY (`idpolizas`,`poliza`);

--
-- Indices de la tabla `ramos`
--
ALTER TABLE `ramos`
  ADD PRIMARY KEY (`idramos`,`numramo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `idagentes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  MODIFY `idaseguradoras` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idclientes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `codigof`
--
ALTER TABLE `codigof`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `polizas`
--
ALTER TABLE `polizas`
  MODIFY `idpolizas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ramos`
--
ALTER TABLE `ramos`
  MODIFY `idramos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
