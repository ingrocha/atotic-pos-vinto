-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-01-2013 a las 09:46:35
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sisvinto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insumo_id` int(11) NOT NULL,
  `preciocompra` float(15,2) NOT NULL DEFAULT '0.00',
  `ingreso` int(11) NOT NULL DEFAULT '0',
  `salida` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `insumo_id`, `preciocompra`, `ingreso`, `salida`, `total`, `fecha`, `lugar`, `observaciones`, `usuario_id`) VALUES
(1, 1, 12.00, 50, 0, 50, '2012-08-24', '', NULL, NULL),
(2, 2, 0.00, 20, 0, 20, '2012-08-24', '', NULL, NULL),
(3, 3, 0.00, 20, 0, 20, '2012-08-24', '', NULL, NULL),
(4, 3, 0.00, 0, 5, 15, '2012-08-24', '', NULL, NULL),
(5, 3, 0.00, 0, 2, 13, '2012-08-24', '', NULL, NULL),
(6, 1, 12.00, 0, 6, 44, '2012-08-24', '', NULL, NULL),
(7, 2, 0.00, 0, 12, 8, '2012-08-24', '', NULL, NULL),
(8, 4, 0.00, 20, 0, 20, '2012-08-24', '', NULL, NULL),
(9, 5, 0.00, 10, 0, 10, '2012-08-24', '', NULL, NULL),
(10, 6, 11.00, 20, 0, 20, '2012-08-24', '', NULL, NULL),
(11, 6, 11.00, 0, 5, 15, '2012-08-24', '', NULL, NULL),
(12, 6, 11.00, 0, 5, 10, '2012-08-24', '', NULL, NULL),
(13, 6, 11.00, 0, 5, 5, '2012-08-24', '', NULL, NULL),
(14, 7, 0.00, 50, 0, 50, '2012-08-24', '', NULL, NULL),
(15, 6, 11.00, 0, 5, 0, '2012-08-25', '', NULL, NULL),
(16, 5, 0.00, 0, 4, 6, '2012-08-25', '', NULL, NULL),
(17, 8, 0.00, 40, 0, 40, '2012-08-25', '', NULL, NULL),
(18, 2, 0.00, 40, 0, 48, '2012-08-25', '', NULL, NULL),
(19, 2, 0.00, 0, 8, 40, '2012-08-25', '', NULL, NULL),
(20, 9, 0.00, 120, 0, 120, '2012-08-26', '', NULL, NULL),
(21, 10, 0.00, 120, 0, 120, '2012-08-26', '', NULL, NULL),
(22, 11, 0.00, 120, 0, 120, '2012-08-26', '', NULL, NULL),
(23, 12, 0.00, 120, 0, 120, '2012-08-26', '', NULL, NULL),
(24, 13, 0.00, 120, 0, 120, '2012-08-26', '', NULL, NULL),
(25, 6, 11.00, 120, 0, 120, '2012-08-26', '', NULL, NULL),
(26, 14, 0.00, 36, 0, 36, '2012-08-26', '', NULL, NULL),
(27, 15, 0.00, 36, 0, 36, '2012-08-26', '', NULL, NULL),
(28, 16, 0.00, 36, 0, 36, '2012-08-26', '', NULL, NULL),
(29, 17, 0.00, 36, 0, 36, '2012-08-26', '', NULL, NULL),
(30, 18, 0.00, 36, 0, 36, '2012-08-26', '', NULL, NULL),
(31, 19, 0.00, 36, 0, 36, '2012-08-26', '', NULL, NULL),
(32, 20, 0.00, 80, 0, 80, '2012-08-26', '', NULL, NULL),
(33, 21, 0.00, 20, 0, 20, '2012-08-26', '', NULL, NULL),
(34, 22, 0.00, 20, 0, 20, '2012-08-26', '', NULL, NULL),
(35, 23, 0.00, 20, 0, 20, '2012-08-26', '', NULL, NULL),
(36, 24, 0.00, 20, 0, 20, '2012-08-26', '', NULL, NULL),
(37, 25, 0.00, 20, 0, 20, '2012-08-26', '', NULL, NULL),
(38, 22, 0.00, 0, 15, 5, '2012-08-26', '', NULL, NULL),
(39, 6, 11.00, 0, 36, 84, '2012-08-26', '', NULL, NULL),
(40, 12, 0.00, 0, 48, 72, '2012-08-26', '', NULL, NULL),
(41, 14, 0.00, 0, 24, 12, '2012-08-26', '', NULL, NULL),
(42, 7, 0.00, 0, 24, 26, '2012-08-26', '', NULL, NULL),
(43, 20, 0.00, 0, 30, 50, '2012-08-26', '', NULL, NULL),
(44, 19, 0.00, 0, 24, 12, '2012-08-26', '', NULL, NULL),
(45, 17, 0.00, 0, 24, 12, '2012-08-26', '', NULL, NULL),
(46, 9, 12.00, 0, 62, 58, '2012-08-26', '', NULL, NULL),
(47, 13, 0.00, 0, 24, 96, '2012-08-26', '', NULL, NULL),
(48, 25, 0.00, 0, 20, 0, '2012-08-26', '', NULL, NULL),
(49, 15, 0.00, 0, 24, 12, '2012-08-26', '', NULL, NULL),
(50, 21, 0.00, 0, 20, 0, '2012-08-26', '', NULL, NULL),
(51, 10, 0.00, 0, 48, 72, '2012-08-26', '', NULL, NULL),
(52, 24, 0.00, 0, 20, 0, '2012-08-26', '', NULL, NULL),
(53, 18, 0.00, 0, 24, 12, '2012-08-26', '', NULL, NULL),
(54, 11, 0.00, 0, 48, 72, '2012-08-26', '', NULL, NULL),
(55, 23, 0.00, 0, 20, 0, '2012-08-26', '', NULL, NULL),
(56, 16, 0.00, 0, 24, 12, '2012-08-26', '', NULL, NULL),
(57, 6, 11.00, 0, 20, 64, '2012-08-27', '', NULL, NULL),
(58, 7, 0.00, 0, 6, 20, '2012-08-27', '', NULL, NULL),
(59, 22, 0.00, 0, 3, 2, '2012-08-27', '', NULL, NULL),
(60, 14, 0.00, 0, 5, 7, '2012-08-27', '', NULL, NULL),
(61, 7, 0.00, 20, 0, 40, '2012-08-28', '', NULL, NULL),
(62, 6, 11.00, 0, 10, 54, '2012-08-28', '', NULL, NULL),
(63, 7, 0.00, 0, 10, 30, '2012-08-28', '', NULL, NULL),
(64, 22, 0.00, 18, 0, 20, '2012-08-28', '', NULL, NULL),
(65, 23, 0.00, 20, 0, 20, '2012-08-28', '', NULL, NULL),
(66, 24, 0.00, 20, 0, 20, '2012-08-28', '', NULL, NULL),
(67, 25, 0.00, 20, 0, 20, '2012-08-28', '', NULL, NULL),
(68, 22, 0.00, 0, 5, 15, '2012-08-28', '', NULL, NULL),
(69, 23, 0.00, 0, 5, 15, '2012-08-28', '', NULL, NULL),
(70, 24, 0.00, 0, 5, 15, '2012-08-28', '', NULL, NULL),
(71, 22, 0.00, 0, 5, 10, '2012-08-28', '', NULL, NULL),
(72, 23, 0.00, 0, 5, 10, '2012-08-28', '', NULL, NULL),
(73, 24, 0.00, 0, 5, 10, '2012-08-28', '', NULL, NULL),
(74, 6, 11.00, 0, 5, 49, '2012-08-28', '', NULL, NULL),
(75, 7, 0.00, 0, 10, 20, '2012-08-29', '', NULL, NULL),
(76, 22, 0.00, 0, 2, 8, '2012-09-05', '', NULL, NULL),
(77, 22, 0.00, 4, 0, 12, '2012-09-05', '', NULL, NULL),
(78, 6, 11.00, 0, 20, 29, '2012-09-06', '', NULL, NULL),
(79, 22, 0.00, 0, 2, 10, '2012-09-11', '', NULL, NULL),
(80, 10, 0.00, 0, 10, 62, '2012-09-12', '', NULL, 1),
(81, 22, 0.00, 0, 1, 9, '2012-09-17', '', NULL, NULL),
(82, 25, 0.00, 0, 5, 15, '2012-09-17', '', NULL, 2),
(83, 25, 0.00, 0, 5, 15, '2012-09-17', '', NULL, 2),
(84, 25, 0.00, 0, 5, 15, '2012-09-17', '', NULL, 2),
(85, 25, 0.00, 0, 5, 15, '2012-09-17', '', NULL, 2),
(86, 24, 0.00, 0, 2, 8, '2012-09-17', '', NULL, 2),
(87, 1, 12.00, 0, 10, 34, '2012-09-17', '', NULL, NULL),
(88, 4, 0.00, 0, 5, 15, '2012-09-17', '', NULL, NULL),
(89, 26, 12.33, 5, 0, 5, '2012-12-21', '', NULL, NULL),
(90, 1, 12.00, 1, 0, 35, '2012-12-28', '', NULL, NULL),
(91, 1, 12.00, 1, 0, 36, '2012-12-28', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'Administrador', 1, 4),
(2, NULL, NULL, NULL, 'Moso', 5, 6),
(3, 1, NULL, NULL, 'Cristiam', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE IF NOT EXISTS `asistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `horaingreso` time NOT NULL,
  `horasalida` time NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id`, `usuario_id`, `horaingreso`, `horasalida`, `fecha`, `observaciones`) VALUES
(1, 2, '18:11:21', '00:00:00', '2012-07-21', NULL),
(2, 5, '18:13:21', '00:00:00', '2012-07-21', NULL),
(3, 2, '01:50:37', '00:00:00', '2012-07-23', NULL),
(4, 3, '17:01:22', '00:00:00', '2012-07-23', NULL),
(5, 2, '23:34:31', '00:00:00', '2012-08-20', NULL),
(6, 1, '23:34:53', '00:00:00', '2012-08-20', NULL),
(7, 2, '14:12:15', '00:00:00', '2012-09-06', NULL),
(16, 2, '13:20:50', '00:00:00', '2012-09-10', NULL),
(15, 2, '23:25:19', '00:00:00', '2012-09-07', NULL),
(17, 2, '15:51:03', '00:00:00', '2012-09-17', NULL),
(18, 2, '14:22:30', '00:00:00', '2012-12-27', NULL),
(19, 1, '14:23:21', '00:00:00', '2012-12-27', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodegas`
--

CREATE TABLE IF NOT EXISTS `bodegas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insumo_id` int(11) NOT NULL,
  `preciocompra` float(15,2) NOT NULL DEFAULT '0.00',
  `ingreso` int(11) NOT NULL DEFAULT '0',
  `salida` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Volcado de datos para la tabla `bodegas`
--

INSERT INTO `bodegas` (`id`, `insumo_id`, `preciocompra`, `ingreso`, `salida`, `total`, `fecha`, `lugar`, `observaciones`) VALUES
(1, 22, 0.00, 5, 0, 5, '2012-08-28', NULL, NULL),
(2, 23, 0.00, 5, 0, 5, '2012-08-28', NULL, NULL),
(3, 24, 0.00, 5, 0, 5, '2012-08-28', NULL, NULL),
(4, 22, 0.00, 0, 1, 4, '2012-08-28', NULL, NULL),
(5, 23, 0.00, 0, 1, 4, '2012-08-28', NULL, NULL),
(6, 24, 0.00, 0, 1, 4, '2012-08-28', NULL, NULL),
(7, 22, 0.00, 0, -1, 5, '2012-08-28', NULL, NULL),
(8, 23, 0.00, 0, -1, 5, '2012-08-28', NULL, NULL),
(9, 24, 0.00, 0, -1, 5, '2012-08-28', NULL, NULL),
(10, 22, 0.00, 0, 1, 4, '2012-08-28', NULL, NULL),
(11, 23, 0.00, 0, 1, 4, '2012-08-28', NULL, NULL),
(12, 24, 0.00, 0, 1, 4, '2012-08-28', NULL, NULL),
(13, 22, 0.00, 0, 1, 3, '2012-08-28', NULL, NULL),
(14, 23, 0.00, 0, 1, 3, '2012-08-28', NULL, NULL),
(15, 24, 0.00, 0, 1, 3, '2012-08-28', NULL, NULL),
(16, 6, 11.00, 5, 0, 5, '2012-08-28', NULL, NULL),
(17, 6, 11.00, 0, 1, 4, '2012-08-28', NULL, NULL),
(18, 6, 11.00, 0, 0, 4, '2012-08-28', NULL, NULL),
(19, 6, 11.00, 0, 0, 4, '2012-08-28', NULL, NULL),
(20, 6, 11.00, 0, 1, 3, '2012-08-28', NULL, NULL),
(21, 6, 11.00, 0, 1, 2, '2012-08-28', NULL, NULL),
(22, 6, 11.00, 0, 1, 1, '2012-08-29', NULL, NULL),
(23, 6, 11.00, 0, 1, 0, '2012-08-29', NULL, NULL),
(24, 7, 0.00, 10, 0, 10, '2012-08-29', NULL, NULL),
(25, 7, 0.00, 0, 1, 9, '2012-08-29', NULL, NULL),
(26, 7, 0.00, 0, 1, 8, '2012-08-29', NULL, NULL),
(27, 7, 0.00, 0, 1, 7, '2012-08-29', NULL, NULL),
(28, 7, 0.00, 0, 1, 6, '2012-09-03', NULL, NULL),
(29, 7, 0.00, 0, 1, 5, '2012-09-03', NULL, NULL),
(30, 22, 0.00, 2, 0, 5, '2012-09-05', NULL, NULL),
(31, 7, 0.00, 0, 1, 4, '2012-09-05', NULL, NULL),
(32, 7, 0.00, 0, 0, 4, '2012-09-05', NULL, NULL),
(33, 7, 0.00, 0, 1, 3, '2012-09-05', NULL, NULL),
(34, 7, 0.00, 0, 0, 3, '2012-09-05', NULL, NULL),
(35, 7, 0.00, 0, 1, 2, '2012-09-06', NULL, NULL),
(36, 6, 11.00, 20, 0, 20, '2012-09-06', NULL, NULL),
(37, 6, 11.00, 0, 1, 19, '2012-09-06', NULL, NULL),
(38, 6, 11.00, 0, 1, 18, '2012-09-06', NULL, NULL),
(39, 22, 0.00, 0, 1, 4, '2012-09-06', NULL, NULL),
(40, 23, 0.00, 0, 1, 2, '2012-09-06', NULL, NULL),
(41, 24, 0.00, 0, 1, 2, '2012-09-06', NULL, NULL),
(42, 22, 0.00, 0, 1, 3, '2012-09-06', NULL, NULL),
(43, 23, 0.00, 0, 1, 1, '2012-09-06', NULL, NULL),
(44, 24, 0.00, 0, 1, 1, '2012-09-06', NULL, NULL),
(45, 22, 0.00, 0, 1, 2, '2012-09-06', NULL, NULL),
(46, 23, 0.00, 0, 1, 0, '2012-09-06', NULL, NULL),
(47, 24, 0.00, 0, 1, 0, '2012-09-06', NULL, NULL),
(48, 22, 0.00, 0, 1, 1, '2012-09-06', NULL, NULL),
(49, 6, 11.00, 0, 0, 18, '2012-09-06', NULL, NULL),
(50, 6, 11.00, 0, 1, 17, '2012-09-10', NULL, NULL),
(51, 22, 0.00, 2, 0, 3, '2012-09-11', NULL, NULL),
(52, 10, 0.00, 10, 0, 10, '2012-09-12', NULL, NULL),
(53, 22, 0.00, 1, 0, 4, '2012-09-17', NULL, NULL),
(54, 25, 0.00, 5, 0, 5, '2012-09-17', NULL, NULL),
(55, 24, 0.00, 2, 0, 2, '2012-09-17', NULL, NULL),
(56, 7, 0.00, 0, 1, 1, '2012-09-17', NULL, NULL),
(57, 7, 0.00, 0, 1, 0, '2012-09-17', NULL, NULL),
(58, 1, 12.00, 10, 0, 10, '2012-09-17', NULL, NULL),
(59, 4, 0.00, 5, 0, 5, '2012-09-17', NULL, NULL),
(60, 1, 12.00, 0, 1, 9, '2012-09-17', NULL, NULL),
(61, 4, 0.00, 0, 1, 4, '2012-09-17', NULL, NULL),
(62, 1, 12.00, 0, 1, 8, '2012-09-17', NULL, NULL),
(63, 4, 0.00, 0, 1, 3, '2012-09-17', NULL, NULL),
(64, 6, 11.00, 0, 1, 16, '2012-09-17', NULL, NULL),
(65, 6, 11.00, 0, 1, 15, '2012-09-17', NULL, NULL),
(66, 1, 12.00, 0, 0, 8, '2012-09-17', NULL, NULL),
(67, 4, 0.00, 0, 0, 3, '2012-09-17', NULL, NULL),
(68, 1, 12.00, 0, 1, 7, '2012-09-17', NULL, NULL),
(69, 4, 0.00, 0, 1, 2, '2012-09-17', NULL, NULL),
(70, 1, 12.00, 0, 1, 6, '2012-09-17', NULL, NULL),
(71, 4, 0.00, 0, 1, 1, '2012-09-17', NULL, NULL),
(72, 6, 11.00, 0, 1, 14, '2012-09-17', NULL, NULL),
(73, 6, 11.00, 0, 1, 13, '2012-09-17', NULL, NULL),
(74, 1, 12.00, 0, 1, 5, '2012-09-17', NULL, NULL),
(75, 4, 0.00, 0, 1, 0, '2012-09-17', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `tipo`, `estado`) VALUES
(1, 'Phampaku', 'platos de phampaku', 'Comida', 1),
(2, 'Phampaku Mixto', '', 'Comida', 1),
(3, 'Picante', '', 'Comida', 1),
(4, 'Otros', '', 'Comida', 1),
(5, 'Refrescos', '', 'Bebidas', 1),
(6, 'Demo', '', 'Comida', 0),
(7, 'Para Picar', '', 'Comida', 1),
(8, 'Cerveza', '', 'Bebidas', 1),
(9, 'Hamburguesas', '', 'Comida', 1),
(10, 'Chicharrones', 'Categoria correspondiente a todo tipo de chicharrones', 'Bebidas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Es la llave primaria de la tabla clientes',
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `estado`) VALUES
(2, 'Mauricio Ayllon', 'calle uno', '110', 1),
(3, 'Antonio Lopez', 'Calle Garzilazo', '951478', 1),
(5, 'Demo', 'demo', '1231', 1),
(6, 'oscar prieto', 'calle 34', '12345', 1),
(7, 'bryan calderon', 'ceja el alto', '8765654', 1),
(9, 'Adriana Miranda', 'C. Vida Nueva 1234', '70688246', 0),
(10, 'Adriana Miranda', 'calle siempre buena', '2210325', 0),
(11, 'Juan Perez ', 'Nuevo Horizonte', '4546546', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confmultas`
--

CREATE TABLE IF NOT EXISTS `confmultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horas` int(2) DEFAULT NULL,
  `minutos` int(2) DEFAULT NULL,
  `monto` float(15,2) NOT NULL DEFAULT '0.00',
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `confmultas`
--

INSERT INTO `confmultas` (`id`, `horas`, `minutos`, `monto`, `observaciones`) VALUES
(3, 0, 30, 50.00, 'retraso leve'),
(2, 0, 45, 100.00, 'otro'),
(4, 16, 0, 10.00, 'por atrasones'),
(6, 14, 30, 100.00, 'Por retraso de la 5ta vez concecutiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `sueldo` float(10,2) DEFAULT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id`, `usuario_id`, `sueldo`, `fechainicio`, `fechafin`, `observaciones`) VALUES
(1, 2, 1000.00, '2012-09-01', '2012-12-31', NULL),
(2, 1, 1000.00, '2012-09-01', '2012-12-31', NULL),
(4, 9, 1000.00, '2012-12-12', '2013-12-12', 'Sueldo anual renovable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'La Paz'),
(2, 'Cochabamba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE IF NOT EXISTS `descuentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `porcentaje` float(10,2) DEFAULT NULL,
  `observacion` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`id`, `porcentaje`, `observacion`) VALUES
(1, 0.00, '10 %'),
(3, 0.20, '20 %');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`) VALUES
(1, 'alta'),
(2, 'baja'),
(3, 'vacacion'),
(4, 'permiso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_control` varchar(20) DEFAULT NULL,
  `cliente` varchar(255) DEFAULT NULL,
  `nit` varchar(30) DEFAULT NULL,
  `importetotal` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `codigo_control`, `cliente`, `nit`, `importetotal`, `fecha`) VALUES
(1, '4F-0B-6C-D3', '', '', '27.00', '2012-08-27'),
(2, '4F-31-6A-A0', 'crt', '12321', '12.00', '2012-09-03'),
(3, '4F-26-07-A4', 'Miranda', '324324', '24.00', '2012-09-06'),
(4, '4F-3D-6B-AA', 'Davila', '251320010', '12.00', '2012-09-06'),
(5, '4F-00-14-DA', 'MIRANDA', '324324', '12.00', '2012-09-10'),
(6, '4F-3B-1F-85', '', '', '12.00', '2012-09-10'),
(7, '16-63-6D-D2-68-BD-4A', '', '', '12.00', '2012-09-10'),
(8, '4F-29-25-98', 'Herrera', '967987', '72.00', '2012-09-17'),
(9, '16-63-6D-D2-68-BD-4A', 'MIRANDA', '3254436', '72.00', '2012-09-17'),
(10, '4F-1F-2B-B1', 'daza', '4839395', '72.00', '2012-09-17'),
(11, '16-63-6D-D2-68-BD-49', 'cumpita', '2', '120.00', '2012-09-17'),
(12, '16-63-6D-D2-68-BD-49', 'cumpita', '2876543', '120.00', '2012-09-17'),
(13, '16-63-6D-D2-68-BD-49', 'cumpita', '4848786', '120.00', '2012-09-17'),
(14, '16-63-6D-D2-68-BD-49', 'cumpita', '251320010', '120.00', '2012-09-17'),
(15, '16-63-6D-D2-68-BD-49', 'cumpita', '251320010', '120.00', '2012-09-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entrada` time DEFAULT NULL,
  `salida` time DEFAULT NULL,
  `observacion` varchar(200) DEFAULT NULL,
  `habil` int(1) DEFAULT NULL,
  `dia` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `entrada`, `salida`, `observacion`, `habil`, `dia`) VALUES
(1, '09:00:00', '20:00:00', 'ninguna', 1, 'lunes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE IF NOT EXISTS `insumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `preciocompra` float(15,2) NOT NULL DEFAULT '0.00',
  `precioventa` float(15,2) NOT NULL DEFAULT '0.00',
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `bodega` int(11) NOT NULL DEFAULT '0',
  `tipo_id` int(11) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '1',
  `observaciones` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `nombre`, `preciocompra`, `precioventa`, `fecha`, `total`, `bodega`, `tipo_id`, `estado`, `observaciones`) VALUES
(1, 'Pollo', 12.00, 0.00, '2012-08-24', 36, 10, 1, 1, ''),
(2, 'Cerdo', 0.00, 0.00, '2012-08-24', 40, 20, 1, 1, ''),
(3, 'Laping', 0.00, 0.00, '2012-08-24', 13, 7, 1, 1, ''),
(4, 'Cordero', 0.00, 0.00, '2012-08-24', 15, 5, 1, 1, ''),
(5, 'Pato', 0.00, 0.00, '2012-08-24', 6, 4, 1, 1, ''),
(6, 'Coca Cola', 11.00, 12.00, '2012-08-24', 29, 20, 4, 1, ''),
(7, 'Fanta', 0.00, 0.00, '2012-08-24', 20, 10, 4, 1, ''),
(8, 'platos', 6.00, 0.00, '2012-08-25', 40, 0, 5, 1, ''),
(9, 'Huari', 12.00, 0.00, '2012-08-26', 58, 62, 6, 1, ''),
(10, 'Pacena', 0.00, 0.00, '2012-08-26', 62, 10, 6, 1, ''),
(11, 'Taquina', 0.00, 0.00, '2012-08-26', 72, 48, 6, 1, ''),
(12, 'Cordillera', 0.00, 0.00, '2012-08-26', 72, 48, 6, 1, ''),
(13, 'Inca', 0.00, 0.00, '2012-08-26', 96, 24, 6, 1, ''),
(14, 'Durazno', 0.00, 0.00, '2012-08-26', 7, 5, 7, 1, ''),
(15, 'Manzana', 0.00, 0.00, '2012-08-26', 12, 24, 7, 1, ''),
(16, 'Tumbo', 0.00, 0.00, '2012-08-26', 12, 24, 7, 1, ''),
(17, 'Guinda', 0.00, 0.00, '2012-08-26', 12, 24, 7, 1, ''),
(18, 'Tamarindo', 0.00, 0.00, '2012-08-26', 12, 24, 7, 1, ''),
(19, 'Guayaba', 0.00, 0.00, '2012-08-26', 12, 24, 7, 1, ''),
(20, 'Garapina', 0.00, 0.00, '2012-08-26', 50, 30, 8, 1, ''),
(21, 'Mote de Haba', 0.00, 0.00, '2012-08-26', 0, 20, 9, 1, ''),
(22, 'Cebolla', 0.00, 0.00, '2012-08-26', 9, 4, 10, 1, ''),
(23, 'Tomate', 0.00, 0.00, '2012-08-26', 10, 5, 10, 1, ''),
(24, 'Queso', 0.00, 0.00, '2012-08-26', 10, 5, 10, 1, ''),
(25, 'Locoto', 0.00, 0.00, '2012-08-26', 20, 20, 10, 1, ''),
(26, 'Cajetilla de cigarrilos derbi suave', 12.33, 50.00, '2012-12-21', 5, 0, 9, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` smallint(2) NOT NULL DEFAULT '0',
  `precio` float(15,2) NOT NULL DEFAULT '0.00',
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `pedido_id`, `producto_id`, `cantidad`, `precio`, `fecha`) VALUES
(1, 2, 18, 1, 12.00, '2012-08-28 14:32:39'),
(2, 2, 20, 1, 12.00, '2012-08-28 14:32:40'),
(3, 4, 20, 2, 24.00, '2012-08-28 14:36:03'),
(4, 4, 18, 2, 24.00, '2012-08-28 14:36:07'),
(5, 6, 21, 1, 15.00, '2012-08-28 16:01:58'),
(9, 7, 21, 2, 30.00, '2012-08-28 17:15:53'),
(10, 7, 18, 1, 12.00, '2012-08-28 17:16:32'),
(13, 9, 18, 2, 24.00, '2012-08-28 22:38:35'),
(14, 10, 18, 2, 24.00, '2012-08-29 14:48:46'),
(15, 11, 20, 2, 24.00, '2012-08-29 14:49:44'),
(16, 12, 20, 1, 12.00, '2012-08-29 14:51:06'),
(17, 14, 20, 2, 24.00, '2012-09-03 22:17:31'),
(18, 15, 20, 2, 24.00, '2012-09-05 16:26:38'),
(19, 16, 20, 1, 12.00, '2012-09-06 14:17:28'),
(20, 16, 18, 2, 24.00, '2012-09-06 14:18:08'),
(21, 17, 21, 3, 45.00, '2012-09-06 14:18:35'),
(23, 19, 18, 1, 12.00, '2012-09-10 14:16:03'),
(24, 21, 20, 2, 24.00, '2012-09-17 15:53:30'),
(25, 22, 3, 2, 120.00, '2012-09-17 16:06:26'),
(26, 22, 18, 2, 24.00, '2012-09-17 16:06:33'),
(27, 23, 3, 2, 120.00, '2012-09-17 20:30:31'),
(28, 24, 18, 2, 24.00, '2012-09-17 21:24:57'),
(29, 24, 3, 1, 60.00, '2012-09-17 21:25:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE IF NOT EXISTS `movimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insumo_id` int(11) DEFAULT NULL,
  `ingreso` int(11) DEFAULT '0',
  `salida` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0',
  `fecharegistro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE IF NOT EXISTS `multas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `conf_multa_id` int(11) NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametrosfacturas`
--

CREATE TABLE IF NOT EXISTS `parametrosfacturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nit` varchar(30) DEFAULT NULL,
  `numero_autorizacion` varchar(30) DEFAULT NULL,
  `llave` varchar(500) DEFAULT NULL,
  `otro2` varchar(30) DEFAULT NULL,
  `otro3` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `parametrosfacturas`
--

INSERT INTO `parametrosfacturas` (`id`, `nit`, `numero_autorizacion`, `llave`, `otro2`, `otro3`) VALUES
(1, '3817445010', '3004001912096', 'A3Fs4s$)2cvD(eY667A5C4A2rsdf53kw9654E2B23s24df35F5', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `mesa` smallint(6) NOT NULL DEFAULT '0',
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `total` float(15,2) NOT NULL DEFAULT '0.00',
  `fechac` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `fecha`, `mesa`, `estado`, `total`, `fechac`) VALUES
(1, 2, '2012-08-28 14:18:17', 1, 0, 0.00, ''),
(2, 2, '2012-08-28 14:32:32', 2, 0, 24.00, ''),
(3, 3, '2012-08-28 14:32:58', 3, 0, 0.00, ''),
(4, 2, '2012-08-28 14:35:59', 4, 0, 48.00, ''),
(5, 5, '2012-08-28 15:59:43', 5, 0, 0.00, ''),
(6, 2, '2012-08-28 15:59:50', 6, 0, 15.00, ''),
(7, 1, '2012-08-28 16:07:09', 7, 0, 42.00, ''),
(8, 3, '2012-08-28 17:18:15', 8, 0, 0.00, ''),
(9, 2, '2012-08-28 22:34:06', 9, 0, 24.00, ''),
(10, 2, '2012-08-29 14:48:37', 1, 0, 24.00, ''),
(11, 3, '2012-08-29 14:49:00', 2, 0, 24.00, ''),
(12, 2, '2012-08-29 14:50:58', 3, 0, 12.00, ''),
(13, 2, '2012-08-29 14:53:38', 4, 0, 0.00, ''),
(14, 2, '2012-09-03 22:17:09', 1, 0, 24.00, ''),
(15, 2, '2012-09-05 16:26:19', 1, 0, 0.00, ''),
(16, 2, '2012-09-06 14:17:23', 1, 0, 36.00, ''),
(17, 1, '2012-09-06 14:18:23', 2, 0, 45.00, ''),
(18, 2, '2012-09-06 14:44:50', 3, 0, 0.00, ''),
(19, 2, '2012-09-10 14:15:57', 1, 0, 12.00, ''),
(20, 2, '2012-09-10 15:41:00', 2, 0, 0.00, ''),
(21, 2, '2012-09-17 15:53:20', 1, 0, 24.00, ''),
(22, 2, '2012-09-17 15:53:48', 2, 0, 0.00, ''),
(23, 2, '2012-09-17 20:30:14', 3, 0, 120.00, ''),
(24, 2, '2012-09-17 21:24:53', 4, 0, 84.00, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', NULL),
(2, 'mozo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porciones`
--

CREATE TABLE IF NOT EXISTS `porciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `insumo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `porciones`
--

INSERT INTO `porciones` (`id`, `producto_id`, `insumo_id`, `cantidad`) VALUES
(2, 2, 1, 2),
(3, 1, 1, 1),
(4, 1, 2, 1),
(5, 4, 4, 1),
(6, 5, 4, 1),
(8, 6, 3, 2),
(9, 18, 6, 1),
(10, 19, 1, 2),
(11, 19, 2, 1),
(12, 20, 7, 1),
(13, 21, 22, 1),
(14, 21, 23, 1),
(15, 21, 24, 1),
(17, 22, 9, 1),
(18, 23, 10, 1),
(19, 24, 4, 1),
(20, 24, 1, 1),
(24, 3, 1, 1),
(25, 3, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `precio` float(15,2) NOT NULL DEFAULT '0.00',
  `categoria_id` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT '1',
  `insumo_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`, `estado`, `insumo_id`) VALUES
(14, 'Phampaku Cordero', '', 60.00, 1, 1, 0),
(13, 'Phampaku Laping', '', 60.00, 1, 1, 0),
(3, 'Cordero Pollo', '', 60.00, 2, 1, 0),
(4, 'Laping Cordero', '', 60.00, 2, 1, 0),
(5, 'Laping Pollo', '', 60.00, 2, 1, 0),
(6, 'Lechon Cordero', '', 60.00, 2, 1, 0),
(7, 'Lechon Pollo', '', 60.00, 2, 1, 0),
(8, 'Lechon Laping', '', 60.00, 2, 1, 0),
(9, 'Pato Pollo', '', 60.00, 2, 1, 0),
(10, 'Pato Cordero', '', 60.00, 2, 1, 0),
(11, 'Pato Laping', '', 60.00, 2, 1, 0),
(12, 'Pato Lechon', '', 60.00, 2, 1, 0),
(15, 'Phampaku Pollo', '', 60.00, 1, 1, 0),
(16, 'Phampaku Lechon', '', 60.00, 1, 1, 0),
(17, 'Phampaku Pato', '', 60.00, 1, 1, 0),
(18, 'Coca Cola', '', 12.00, 5, 1, 6),
(19, 'Silpancho', '', 40.00, 6, 1, 0),
(20, 'Fanta', NULL, 12.00, 5, 1, 7),
(21, 'Kallu', 'adfa', 15.00, 7, 1, 0),
(22, 'Huari', '', 15.00, 8, 1, 9),
(23, 'Pacena', '', 15.00, 8, 1, 10),
(24, 'Hamburguesa Doble', 'sadf', 20.00, 9, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE IF NOT EXISTS `recibos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `total` float(10,2) DEFAULT NULL,
  `descuento` float(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `tipoevento_id` int(11) NOT NULL,
  `cantidad_personas` int(5) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `cliente_id`, `tipoevento_id`, `cantidad_personas`, `fecha`, `observaciones`) VALUES
(1, 2, 2, 24, '2012-08-22 16:22:07', NULL),
(9, 6, 2, 56, '2012-08-26 15:45:00', 'asdf'),
(8, 2, 2, 23, '2012-08-15 17:45:00', 'asdf'),
(10, 3, 8, 40, '2012-09-15 15:15:00', ''),
(11, 2, 5, 50, '2012-09-15 15:15:00', ''),
(12, 6, 2, 50, '2012-09-29 15:00:00', 'Cancelo anticipo del 50%'),
(13, 5, 5, 9, '2012-09-15 14:30:00', 'CFGFC'),
(14, 2, 5, 5, '2012-09-10 16:15:00', 'bdbd'),
(15, 3, 2, 100, '2012-09-19 16:30:00', 'sdsdfc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retrasos`
--

CREATE TABLE IF NOT EXISTS `retrasos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `horas` int(2) DEFAULT NULL,
  `minutos` int(2) DEFAULT NULL,
  `descuento` float(8,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `retrasos`
--

INSERT INTO `retrasos` (`id`, `usuario_id`, `horas`, `minutos`, `descuento`, `fecha`) VALUES
(1, 2, 14, 25, 100.00, '2012-09-07'),
(2, 2, 4, 20, 100.00, '2012-09-10'),
(3, 2, 6, 51, 100.00, '2012-09-17'),
(4, 2, 5, 22, 100.00, '2012-12-27'),
(5, 1, 5, 23, 100.00, '2012-12-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `departamento_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `direccion`, `departamento_id`) VALUES
(1, 'VIVA VINTO - CENTRAL', 'AV. VINTO #123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoeventos`
--

CREATE TABLE IF NOT EXISTS `tipoeventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tipoeventos`
--

INSERT INTO `tipoeventos` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(5, 'Matrimonio', '', 1),
(2, 'Bautizo', NULL, 1),
(3, 'Cena', '', 1),
(4, 'Cumpleanos', '', 1),
(6, 'Almuerzo', '', 1),
(7, 'Bautizo universitario', '', 1),
(8, 'Evento demo', '', 1),
(9, 'Recepcion social', 'Reuniones especiales', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`, `descripcion`, `tipo`, `estado`) VALUES
(1, 'Alimentos', 'Obas alimentos', NULL, 1),
(2, 'Casa Real', '', NULL, 1),
(3, 'Vino Dulce', '', NULL, 1),
(4, 'Refrescos 1 Litro', '', NULL, 1),
(5, 'Vajillas', '', NULL, 1),
(6, 'Cerveza', '', NULL, 1),
(7, 'Jugos Del Valle', '', NULL, 1),
(8, 'Bebidas Locales', '', NULL, 1),
(9, 'Para Picar', '', NULL, 1),
(10, 'Vegetales', '', NULL, 1),
(11, 'Algarrobas', 'categoria de las algarrobas', NULL, 1),
(12, 'Algarrobas', 'de las algarrobas', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `perfile_id` int(11) DEFAULT NULL,
  `sucursal_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `direccion`, `usuario`, `pass`, `codigo`, `perfile_id`, `sucursal_id`, `estado_id`) VALUES
(1, 'Juan Perez', 'calle uno', 'jperez', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '1111', 2, 1, 2),
(2, 'Carlos Flores B.', 'calle uno', 'cflores', '62e5b45919a9ae30db2271432bb800d8d0aabb6d', '2222', 2, 1, 1),
(3, 'Abdon Pinto', 'calle uno', 'apinto', '40a89c3119995f9898d4d4ad156047608e582ef4', '3333', 2, 1, 2),
(5, 'Adolfo Guillen', 'C. Arapata 123', 'vinto', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 1, 1, 2),
(9, 'Adriana Miranda Bernal', 'Calle Rua Nr5 123', 'amiranda', '7c4a8d09ca3762af61e59520943dc26494f8941b', '6614', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios2`
--

CREATE TABLE IF NOT EXISTS `usuarios2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `perfile_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios2`
--

INSERT INTO `usuarios2` (`id`, `nombre`, `direccion`, `usuario`, `pass`, `codigo`, `perfile_id`) VALUES
(1, 'Juan Perez', 'calle uno', 'jperez', '81dc9bdb52d04dc20036dbd8313ed055', '1111', 1),
(2, 'Carlos Flores', 'calle uno', 'cflores', '81dc9bdb52d04dc20036dbd8313ed055', '2222', 1),
(3, 'Abdon Pinto', 'calle uno', 'apinto', '81dc9bdb52d04dc20036dbd8313ed055', '3333', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
