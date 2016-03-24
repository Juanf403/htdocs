-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-03-2016 a las 21:05:17
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `calendar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `descripcion`, `fechaInicio`, `fechaFin`) VALUES
(1, 'Evento Prueba', 'descrupcion prueb', '2016-02-01', '2016-02-03'),
(2, 'Evento Prueba', 'descrupcion prueb', '2016-02-05', '2016-02-07'),
(3, 'Evento Prueba', 'descrupcion prueb', '2016-02-09', '2016-02-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `evenement`
--

INSERT INTO `evenement` (`id`, `title`, `start`, `end`, `descripcion`) VALUES
(1, 'un evento', '2016-03-01 00:00:00', '0000-00-00 00:00:00', ''),
(2, 'eve', '2016-03-02 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'pos todo el dia', '2016-03-03 01:30:00', '2016-03-03 02:00:00', ''),
(4, 'dwe', '2016-03-04 00:00:00', '2016-03-04 00:00:00', ''),
(5, 'un evento', '2016-03-05 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'un evento', '2016-03-06 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'un evento', '2016-03-07 00:00:00', '0000-00-00 00:00:00', ''),
(8, 'sdfds', '2016-03-08 00:00:00', '0000-00-00 00:00:00', ''),
(9, 'evento ', '2016-03-09 00:00:00', '0000-00-00 00:00:00', ''),
(10, 'sdfsdf', '2016-03-10 00:00:00', '0000-00-00 00:00:00', ''),
(11, 'evento 11', '2016-03-11 00:00:00', '2016-03-11 00:00:00', 'desricpion de `rueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendar`
--
ALTER TABLE `calendar`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
