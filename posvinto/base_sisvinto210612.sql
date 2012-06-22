-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2012 at 08:50 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sisvinto`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
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
-- Table structure for table `aros`
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
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'Administrador', 1, 4),
(2, NULL, NULL, NULL, 'Moso', 5, 6),
(3, 1, NULL, NULL, 'Cristiam', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
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
-- Table structure for table `asistencias`
--

CREATE TABLE IF NOT EXISTS `asistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `horaingreso` time NOT NULL,
  `horasalida` time NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bodegas`
--

CREATE TABLE IF NOT EXISTS `bodegas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) DEFAULT NULL,
  `ingreso` int(11) DEFAULT NULL,
  `salida` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `fecharegistro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `tipo`) VALUES
(1, 'Phampaku', NULL, 'Comida'),
(2, 'Phampaku Mixto', NULL, 'Comida'),
(3, 'Picantes', NULL, 'Comida'),
(4, 'Otros', NULL, 'Comida'),
(5, 'Para Picar', NULL, 'Comida'),
(6, 'Infantil', NULL, 'Comida'),
(7, 'Refrescos', NULL, 'Bebidas'),
(8, 'Cerveza', NULL, 'Bebidas'),
(9, 'Bebidas Locales', NULL, 'Bebidas'),
(10, 'Jugos', NULL, 'Bebidas'),
(11, 'Cocteles', NULL, 'Bebidas');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Es la llave primaria de la tabla clientes',
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`) VALUES
(2, 'Mauricio Ayllon', 'calle uno', '110'),
(3, 'Antonio Lopez', 'Calle Garzilazo', '951478'),
(5, 'Demo', 'demo', '1231'),
(6, 'oscar prieto', 'calle 34', '12345'),
(7, 'bryan calderon', 'ceja el alto', '8765654');

-- --------------------------------------------------------

--
-- Table structure for table `conf_multas`
--

CREATE TABLE IF NOT EXISTS `conf_multas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horas` float(15,2) NOT NULL DEFAULT '0.00',
  `monto` float(15,2) NOT NULL DEFAULT '0.00',
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inicioventas`
--

CREATE TABLE IF NOT EXISTS `inicioventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insumo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `inicioventas`
--

INSERT INTO `inicioventas` (`id`, `insumo_id`, `cantidad`, `fecha`) VALUES
(1, 1, 30, '2012-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `insumos`
--

CREATE TABLE IF NOT EXISTS `insumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipos_insumo_id` int(11) NOT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `insumos`
--

INSERT INTO `insumos` (`id`, `nombre`, `tipos_insumo_id`, `observaciones`) VALUES
(1, 'Pollo', 1, NULL),
(2, 'Cerdo', 1, NULL),
(3, 'Pato', 1, NULL),
(4, 'Cordero', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` smallint(2) NOT NULL DEFAULT '0',
  `precio` float(15,2) NOT NULL DEFAULT '0.00',
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `pedido_id`, `producto_id`, `cantidad`, `precio`, `fecha`) VALUES
(1, 1, 1, 2, 130.00, '2012-06-21 12:41:23'),
(2, 1, 2, 1, 60.00, '2012-06-21 12:41:38'),
(3, 1, 20, 3, 45.00, '2012-06-21 12:51:19'),
(4, 1, 4, 1, 60.00, '2012-06-21 13:05:45'),
(5, 1, 21, 2, 36.00, '2012-06-21 13:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `movimientosinsumos`
--

CREATE TABLE IF NOT EXISTS `movimientosinsumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insumo_id` int(11) DEFAULT NULL,
  `ingreso` int(11) DEFAULT '0',
  `salida` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0',
  `fecharegistro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `movimientosinsumos`
--

INSERT INTO `movimientosinsumos` (`id`, `insumo_id`, `ingreso`, `salida`, `total`, `fecharegistro`) VALUES
(1, 1, 10, 0, 10, '2012-06-21'),
(2, 4, 10, 0, 10, '2012-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `multas`
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
-- Table structure for table `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `mesa` smallint(6) NOT NULL DEFAULT '0',
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `total` float(15,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `fecha`, `mesa`, `estado`, `total`) VALUES
(1, 3, '2012-06-21 12:40:57', 1, 0, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `porciones`
--

CREATE TABLE IF NOT EXISTS `porciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `insumo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `porciones`
--

INSERT INTO `porciones` (`id`, `producto_id`, `insumo_id`, `cantidad`) VALUES
(1, 1, 1, 2),
(2, 1, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` float(15,2) NOT NULL DEFAULT '0.00',
  `categoria_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`, `img`) VALUES
(1, 'Phampaku Pato', '', 65.00, 1, NULL),
(2, 'Phampaku Lechon', '', 60.00, 1, NULL),
(3, 'Phampaku Pollo', '', 60.00, 1, NULL),
(4, 'Phampaku Cordero', '', 60.00, 1, NULL),
(5, 'Phampaku Laping', '', 60.00, 1, NULL),
(6, 'Pato Lechon', '', 60.00, 2, NULL),
(7, 'Pato Laping', '', 60.00, 2, NULL),
(8, 'Pato Cordero', '', 60.00, 2, NULL),
(9, 'Pato Pollo', '', 60.00, 2, NULL),
(10, 'Lechon Laping', '', 60.00, 2, NULL),
(11, 'Lechon Pollo', '', 60.00, 2, NULL),
(12, 'Lechon Cordero', '', 60.00, 2, NULL),
(13, 'Laping Pollo', '', 60.00, 2, NULL),
(14, 'Laping Cordero', '', 60.00, 2, NULL),
(15, 'Cordero Pollo', '', 60.00, 2, NULL),
(16, 'Pollo', '', 60.00, 3, NULL),
(17, 'Lengua', '', 60.00, 3, NULL),
(18, 'Mixto', '', 60.00, 3, NULL),
(19, 'Conejo', '', 60.00, 3, NULL),
(20, 'Huari', '', 15.00, 8, NULL),
(21, 'Paceña', '', 18.00, 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipos_insumos`
--

CREATE TABLE IF NOT EXISTS `tipos_insumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipos_insumos`
--

INSERT INTO `tipos_insumos` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Carnes', NULL),
(2, 'Bebidas', NULL),
(3, 'Vegetales', NULL),
(4, 'Viveres', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `direccion`, `usuario`, `pass`, `codigo`, `perfile_id`) VALUES
(1, 'Juan Perez', 'calle uno', 'jperez', '81dc9bdb52d04dc20036dbd8313ed055', '1111', 1),
(2, 'Carlos Flores', 'calle uno', 'cflores', '81dc9bdb52d04dc20036dbd8313ed055', '2222', 1),
(3, 'Abdon Pinto', 'calle uno', 'apinto', '81dc9bdb52d04dc20036dbd8313ed055', '3333', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
