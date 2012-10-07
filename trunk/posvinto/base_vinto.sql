-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2012 at 08:14 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

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
-- Table structure for table `almacen`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `almacen`
--

INSERT INTO `almacen` (`id`, `insumo_id`, `preciocompra`, `ingreso`, `salida`, `total`, `fecha`, `lugar`, `observaciones`, `usuario_id`) VALUES
(1, 1, 0.00, 0, 0, 0, '2012-09-21', '', NULL, 1),
(2, 2, 0.00, 0, 0, 0, '2012-09-21', '', NULL, 1),
(3, 3, 0.00, 0, 0, 0, '2012-09-21', '', NULL, 1),
(4, 4, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(5, 5, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(6, 6, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(7, 7, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(8, 8, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(9, 9, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(10, 10, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(11, 11, 0.00, 72, 0, 72, '2012-09-21', '', NULL, NULL),
(12, 12, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(13, 13, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(14, 14, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(15, 15, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(16, 16, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(17, 17, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(18, 18, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(19, 19, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(20, 20, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(21, 21, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(22, 22, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(23, 23, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(24, 24, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(25, 25, 0.00, 0, 0, 0, '2012-09-21', '', NULL, NULL),
(26, 6, 11.00, 10, 0, 10, '2012-09-22', '', NULL, NULL),
(27, 6, 11.00, 0, 10, 0, '2012-09-22', '', NULL, NULL),
(28, 1, 12.00, 20, 0, 20, '2012-09-22', '', NULL, NULL),
(29, 1, 12.00, 0, 10, 10, '2012-09-22', '', NULL, NULL),
(30, 6, 11.00, 20, 0, 20, '2012-09-22', '', NULL, NULL),
(31, 6, 11.00, 0, 18, 2, '2012-09-22', '', NULL, NULL),
(32, 1, 12.00, 90, 0, 100, '2012-09-22', '', NULL, NULL),
(33, 1, 12.00, 0, 50, 50, '2012-09-22', '', NULL, NULL),
(34, 6, 11.00, 48, 0, 50, '2012-09-22', '', NULL, NULL),
(35, 6, 11.00, 0, 50, 0, '2012-09-22', '', NULL, NULL),
(36, 6, 11.00, 10, 0, 10, '2012-09-24', '', NULL, NULL),
(37, 1, 12.00, 0, 20, 30, '2012-09-24', '', NULL, NULL),
(38, 26, 700.00, 2, 0, 2, '2012-09-28', '', NULL, NULL),
(39, 7, 0.00, 12, 0, 12, '2012-09-28', '', NULL, NULL),
(40, 7, 0.00, 0, 1, 11, '2012-09-28', '', NULL, NULL),
(41, 7, 0.00, 0, 5, 6, '2012-09-28', '', NULL, NULL),
(42, 1, 12.00, 0, 25, 5, '2012-09-28', '', NULL, NULL),
(43, 27, 12.00, 10, 0, 10, '2012-10-03', '', NULL, NULL),
(44, 28, 12.00, 10, 0, 10, '2012-10-03', '', NULL, NULL),
(45, 24, 0.00, 80, 0, 80, '2012-10-04', '', NULL, NULL),
(46, 24, 0.00, 0, 10, 70, '2012-10-04', '', NULL, NULL),
(47, 24, 0.00, 0, 70, 0, '2012-10-04', '', NULL, NULL),
(48, 5, 0.00, 10, 0, 10, '2012-10-05', '', NULL, NULL),
(49, 2, 0.00, 10, 0, 10, '2012-10-05', '', NULL, NULL),
(50, 5, 0.00, 0, 5, 5, '2012-10-05', '', NULL, NULL),
(51, 2, 0.00, 0, 5, 5, '2012-10-05', '', NULL, NULL),
(52, 2, 0.00, 0, 5, 0, '2012-10-05', '', NULL, NULL),
(53, 5, 0.00, 0, 5, 0, '2012-10-05', '', NULL, NULL),
(54, 29, 0.00, 0, 0, 0, '2012-10-06', '', NULL, NULL),
(55, 30, 0.00, 0, 0, 0, '2012-10-06', '', NULL, NULL),
(56, 31, 0.00, 0, 0, 0, '2012-10-06', '', NULL, NULL),
(57, 32, 0.00, 0, 0, 0, '2012-10-06', '', NULL, NULL),
(58, 33, 0.00, 0, 0, 0, '2012-10-06', '', NULL, NULL),
(59, 34, 0.00, 0, 0, 0, '2012-10-06', '', NULL, NULL),
(60, 5, 0.00, 50, 0, 50, '2012-10-06', '', NULL, NULL),
(61, 1, 12.00, 45, 0, 50, '2012-10-06', '', NULL, NULL),
(62, 2, 0.00, 50, 0, 50, '2012-10-06', '', NULL, NULL),
(63, 3, 0.00, 50, 0, 50, '2012-10-06', '', NULL, NULL),
(64, 4, 0.00, 50, 0, 50, '2012-10-06', '', NULL, NULL),
(65, 2, 0.00, 0, 50, 0, '2012-10-06', '', NULL, NULL),
(66, 5, 0.00, 0, 50, 0, '2012-10-06', '', NULL, NULL),
(67, 7, 0.00, 44, 0, 50, '2012-10-06', '', NULL, NULL),
(68, 7, 0.00, 0, 50, 0, '2012-10-06', '', NULL, NULL),
(69, 7, 0.00, 50, 0, 50, '2012-10-06', '', NULL, NULL),
(70, 7, 0.00, 0, 50, 0, '2012-10-06', '', NULL, NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `asistencias`
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
(18, 2, '20:14:04', '00:00:00', '2012-09-18', NULL),
(19, 2, '14:32:26', '00:00:00', '2012-09-21', NULL),
(20, 2, '23:00:39', '00:00:00', '2012-10-05', NULL),
(21, 3, '23:04:45', '00:00:00', '2012-10-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bodegas`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `bodegas`
--

INSERT INTO `bodegas` (`id`, `insumo_id`, `preciocompra`, `ingreso`, `salida`, `total`, `fecha`, `lugar`, `observaciones`) VALUES
(1, 6, 11.00, 10, 0, 10, '2012-09-22', NULL, NULL),
(2, 6, 11.00, 0, 1, 9, '2012-09-22', NULL, NULL),
(3, 6, 11.00, 0, 1, 8, '2012-09-22', NULL, NULL),
(4, 6, 11.00, 0, 1, 7, '2012-09-22', NULL, NULL),
(5, 6, 11.00, 0, 1, 6, '2012-09-22', NULL, NULL),
(6, 6, 11.00, 0, 1, 5, '2012-09-22', NULL, NULL),
(7, 6, 11.00, 0, 1, 4, '2012-09-22', NULL, NULL),
(8, 6, 11.00, 0, 1, 3, '2012-09-22', NULL, NULL),
(9, 1, 12.00, 10, 0, 10, '2012-09-22', NULL, NULL),
(10, 6, 11.00, 18, 0, 21, '2012-09-22', NULL, NULL),
(11, 6, 11.00, 0, 1, 20, '2012-09-22', NULL, NULL),
(12, 6, 11.00, 0, 1, 19, '2012-09-22', NULL, NULL),
(13, 1, 12.00, 0, 1, 9, '2012-09-22', NULL, NULL),
(14, 6, 11.00, 0, 1, 18, '2012-09-22', NULL, NULL),
(15, 6, 11.00, 0, 1, 17, '2012-09-22', NULL, NULL),
(16, 6, 11.00, 0, 1, 16, '2012-09-22', NULL, NULL),
(17, 1, 12.00, 0, 1, 8, '2012-09-22', NULL, NULL),
(18, 1, 12.00, 0, 1, 7, '2012-09-22', NULL, NULL),
(19, 1, 12.00, 0, 1, 6, '2012-09-22', NULL, NULL),
(20, 1, 12.00, 0, 1, 5, '2012-09-22', NULL, NULL),
(21, 1, 12.00, 0, 1, 4, '2012-09-22', NULL, NULL),
(22, 1, 12.00, 0, 1, 3, '2012-09-22', NULL, NULL),
(23, 1, 12.00, 0, 1, 2, '2012-09-22', NULL, NULL),
(24, 6, 11.00, 0, 1, 15, '2012-09-22', NULL, NULL),
(25, 6, 11.00, 0, 1, 14, '2012-09-22', NULL, NULL),
(26, 1, 12.00, 0, 1, 1, '2012-09-22', NULL, NULL),
(27, 1, 12.00, 0, 1, 0, '2012-09-22', NULL, NULL),
(28, 1, 12.00, 50, 0, 50, '2012-09-22', NULL, NULL),
(29, 6, 11.00, 50, 0, 64, '2012-09-22', NULL, NULL),
(30, 1, 12.00, 0, 1, 49, '2012-09-22', NULL, NULL),
(31, 1, 12.00, 0, 1, 48, '2012-09-22', NULL, NULL),
(32, 6, 11.00, 0, 1, 63, '2012-09-22', NULL, NULL),
(33, 6, 11.00, 0, 1, 62, '2012-09-22', NULL, NULL),
(34, 1, 12.00, 0, 1, 47, '2012-09-22', NULL, NULL),
(35, 1, 12.00, 0, 1, 46, '2012-09-22', NULL, NULL),
(36, 1, 12.00, 0, 1, 45, '2012-09-22', NULL, NULL),
(37, 6, 11.00, 0, 1, 61, '2012-09-22', NULL, NULL),
(38, 6, 11.00, 0, 1, 60, '2012-09-22', NULL, NULL),
(39, 1, 12.00, 0, 1, 44, '2012-09-22', NULL, NULL),
(40, 1, 12.00, 0, 1, 43, '2012-09-22', NULL, NULL),
(41, 1, 12.00, 0, 1, 42, '2012-09-22', NULL, NULL),
(42, 6, 11.00, 0, 1, 59, '2012-09-22', NULL, NULL),
(43, 1, 12.00, 20, 0, 62, '2012-09-24', NULL, NULL),
(44, 6, 11.00, 0, 1, 58, '2012-09-24', NULL, NULL),
(45, 1, 12.00, 0, 1, 61, '2012-09-24', NULL, NULL),
(46, 1, 12.00, 0, 1, 60, '2012-09-24', NULL, NULL),
(47, 6, 11.00, 0, 1, 57, '2012-09-26', NULL, NULL),
(48, 6, 11.00, 0, 1, 56, '2012-09-27', NULL, NULL),
(49, 6, 11.00, 0, 1, 55, '2012-09-27', NULL, NULL),
(50, 6, 11.00, 0, 1, 54, '2012-09-27', NULL, NULL),
(51, 6, 11.00, 0, 1, 53, '2012-09-27', NULL, NULL),
(52, 1, 12.00, 0, 1, 59, '2012-09-28', NULL, NULL),
(53, 1, 12.00, 0, 1, 58, '2012-09-28', NULL, NULL),
(54, 6, 11.00, 0, 1, 52, '2012-09-28', NULL, NULL),
(55, 1, 12.00, 0, 1, 57, '2012-09-28', NULL, NULL),
(56, 6, 11.00, 0, 1, 51, '2012-09-28', NULL, NULL),
(57, 6, 11.00, 0, 1, 50, '2012-09-28', NULL, NULL),
(58, 6, 11.00, 0, 1, 49, '2012-09-28', NULL, NULL),
(59, 6, 11.00, 0, 1, 48, '2012-09-28', NULL, NULL),
(60, 6, 11.00, 0, 1, 47, '2012-09-28', NULL, NULL),
(61, 1, 12.00, 0, 1, 56, '2012-09-28', NULL, NULL),
(62, 7, 0.00, 1, 0, 1, '2012-09-28', NULL, NULL),
(63, 7, 0.00, 0, 1, 0, '2012-09-28', NULL, NULL),
(64, 7, 0.00, 5, 0, 5, '2012-09-28', NULL, NULL),
(65, 7, 0.00, 0, 1, 4, '2012-09-28', NULL, NULL),
(66, 1, 12.00, 25, 0, 81, '2012-09-28', NULL, NULL),
(67, 1, 12.00, 0, 1, 80, '2012-09-28', NULL, NULL),
(68, 1, 12.00, 0, 1, 79, '2012-09-28', NULL, NULL),
(69, 7, 0.00, 0, 1, 3, '2012-09-29', NULL, NULL),
(70, 1, 12.00, 0, 1, 78, '2012-09-29', NULL, NULL),
(71, 1, 12.00, 0, 1, 77, '2012-09-29', NULL, NULL),
(72, 7, 0.00, 0, 1, 2, '2012-09-29', NULL, NULL),
(73, 1, 12.00, 0, 1, 76, '2012-09-30', NULL, NULL),
(74, 1, 12.00, 0, 1, 75, '2012-09-30', NULL, NULL),
(75, 7, 0.00, 0, 1, 1, '2012-09-30', NULL, NULL),
(76, 7, 0.00, 0, 1, 0, '2012-09-30', NULL, NULL),
(77, 24, 0.00, 10, 0, 10, '2012-10-04', NULL, NULL),
(78, 24, 0.00, 0, 1, 9, '2012-10-04', NULL, NULL),
(79, 6, 11.00, 0, 1, 46, '2012-10-04', NULL, NULL),
(80, 24, 0.00, 0, 1, 8, '2012-10-04', NULL, NULL),
(81, 6, 11.00, 0, 1, 45, '2012-10-04', NULL, NULL),
(82, 24, 0.00, 0, 1, 7, '2012-10-04', NULL, NULL),
(83, 6, 11.00, 0, 1, 44, '2012-10-04', NULL, NULL),
(84, 6, 11.00, 0, 1, 43, '2012-10-04', NULL, NULL),
(85, 24, 0.00, 0, 1, 6, '2012-10-04', NULL, NULL),
(86, 6, 11.00, 0, 1, 42, '2012-10-04', NULL, NULL),
(87, 24, 0.00, 0, 1, 5, '2012-10-04', NULL, NULL),
(88, 24, 0.00, 0, 1, 4, '2012-10-04', NULL, NULL),
(89, 6, 11.00, 0, 1, 41, '2012-10-04', NULL, NULL),
(90, 24, 0.00, 0, 1, 3, '2012-10-04', NULL, NULL),
(91, 6, 11.00, 0, 1, 40, '2012-10-04', NULL, NULL),
(92, 24, 0.00, 0, 1, 2, '2012-10-04', NULL, NULL),
(93, 6, 11.00, 0, 1, 39, '2012-10-04', NULL, NULL),
(94, 24, 0.00, 0, 1, 1, '2012-10-04', NULL, NULL),
(95, 6, 11.00, 0, 1, 38, '2012-10-04', NULL, NULL),
(96, 6, 11.00, 0, 1, 37, '2012-10-04', NULL, NULL),
(97, 24, 0.00, 70, 0, 71, '2012-10-04', NULL, NULL),
(98, 24, 0.00, 0, 1, 70, '2012-10-04', NULL, NULL),
(99, 6, 11.00, 0, 1, 36, '2012-10-04', NULL, NULL),
(100, 6, 11.00, 0, 1, 35, '2012-10-04', NULL, NULL),
(101, 24, 0.00, 0, 1, 69, '2012-10-04', NULL, NULL),
(102, 24, 0.00, 0, 1, 68, '2012-10-04', NULL, NULL),
(103, 24, 0.00, 0, 1, 67, '2012-10-04', NULL, NULL),
(104, 24, 0.00, 0, 1, 66, '2012-10-04', NULL, NULL),
(105, 6, 11.00, 0, 1, 34, '2012-10-04', NULL, NULL),
(106, 6, 11.00, 0, 1, 33, '2012-10-04', NULL, NULL),
(107, 24, 0.00, 0, 1, 65, '2012-10-04', NULL, NULL),
(108, 6, 11.00, 0, 1, 32, '2012-10-04', NULL, NULL),
(109, 6, 11.00, 0, 1, 31, '2012-10-04', NULL, NULL),
(110, 6, 11.00, 0, 1, 30, '2012-10-04', NULL, NULL),
(111, 24, 0.00, 0, 1, 64, '2012-10-04', NULL, NULL),
(112, 24, 0.00, 0, 1, 63, '2012-10-05', NULL, NULL),
(113, 24, 0.00, 0, 1, 62, '2012-10-05', NULL, NULL),
(114, 6, 11.00, 0, 1, 29, '2012-10-05', NULL, NULL),
(115, 6, 11.00, 0, 1, 28, '2012-10-05', NULL, NULL),
(116, 5, 0.00, 5, 0, 5, '2012-10-05', NULL, NULL),
(117, 2, 0.00, 5, 0, 5, '2012-10-05', NULL, NULL),
(118, 5, 0.00, 0, 1, 4, '2012-10-05', NULL, NULL),
(119, 2, 0.00, 0, 1, 4, '2012-10-05', NULL, NULL),
(120, 5, 0.00, 0, 1, 3, '2012-10-05', NULL, NULL),
(121, 2, 0.00, 0, 1, 3, '2012-10-05', NULL, NULL),
(122, 6, 11.00, 0, 1, 27, '2012-10-05', NULL, NULL),
(123, 5, 0.00, 0, 1, 2, '2012-10-05', NULL, NULL),
(124, 2, 0.00, 0, 1, 2, '2012-10-05', NULL, NULL),
(125, 6, 11.00, 0, 1, 26, '2012-10-05', NULL, NULL),
(126, 5, 0.00, 0, 1, 1, '2012-10-05', NULL, NULL),
(127, 2, 0.00, 0, 1, 1, '2012-10-05', NULL, NULL),
(128, 5, 0.00, 0, 1, 0, '2012-10-05', NULL, NULL),
(129, 2, 0.00, 0, 1, 0, '2012-10-05', NULL, NULL),
(130, 6, 11.00, 0, 1, 25, '2012-10-05', NULL, NULL),
(131, 2, 0.00, 5, 0, 5, '2012-10-05', NULL, NULL),
(132, 5, 0.00, 5, 0, 5, '2012-10-05', NULL, NULL),
(133, 5, 0.00, 0, 1, 4, '2012-10-05', NULL, NULL),
(134, 2, 0.00, 0, 1, 4, '2012-10-05', NULL, NULL),
(135, 5, 0.00, 0, 1, 3, '2012-10-06', NULL, NULL),
(136, 2, 0.00, 0, 1, 3, '2012-10-06', NULL, NULL),
(137, 5, 0.00, 0, 1, 2, '2012-10-06', NULL, NULL),
(138, 5, 0.00, 0, 1, 1, '2012-10-06', NULL, NULL),
(139, 5, 0.00, 0, 1, 0, '2012-10-06', NULL, NULL),
(140, 1, 12.00, 0, 1, 74, '2012-10-06', NULL, NULL),
(141, 2, 0.00, 50, 0, 53, '2012-10-06', NULL, NULL),
(142, 5, 0.00, 50, 0, 50, '2012-10-06', NULL, NULL),
(143, 7, 0.00, 50, 0, 50, '2012-10-06', NULL, NULL),
(144, 7, 0.00, 50, 0, 100, '2012-10-06', NULL, NULL),
(145, 5, 0.00, 0, 1, 49, '2012-10-06', NULL, NULL),
(146, 2, 0.00, 0, 1, 52, '2012-10-06', NULL, NULL),
(147, 6, 11.00, 0, 1, 24, '2012-10-06', NULL, NULL),
(148, 5, 0.00, 0, 1, 48, '2012-10-07', NULL, NULL),
(149, 2, 0.00, 0, 1, 51, '2012-10-07', NULL, NULL),
(150, 5, 0.00, 0, 1, 47, '2012-10-07', NULL, NULL),
(151, 2, 0.00, 0, 1, 50, '2012-10-07', NULL, NULL),
(152, 6, 11.00, 0, 1, 23, '2012-10-07', NULL, NULL),
(153, 5, 0.00, 0, 1, 46, '2012-10-07', NULL, NULL),
(154, 2, 0.00, 0, 1, 49, '2012-10-07', NULL, NULL),
(155, 6, 11.00, 0, 1, 22, '2012-10-07', NULL, NULL),
(156, 5, 0.00, 0, 1, 45, '2012-10-07', NULL, NULL),
(157, 5, 0.00, 0, 1, 44, '2012-10-07', NULL, NULL),
(158, 2, 0.00, 0, 1, 48, '2012-10-07', NULL, NULL),
(159, 5, 0.00, 0, 1, 43, '2012-10-07', NULL, NULL),
(160, 2, 0.00, 0, 1, 47, '2012-10-07', NULL, NULL),
(161, 7, 0.00, 0, 1, 99, '2012-10-07', NULL, NULL),
(162, 5, 0.00, 0, 1, 42, '2012-10-07', NULL, NULL),
(163, 5, 0.00, 0, 1, 41, '2012-10-07', NULL, NULL),
(164, 5, 0.00, 0, 1, 40, '2012-10-07', NULL, NULL),
(165, 2, 0.00, 0, 1, 46, '2012-10-07', NULL, NULL),
(166, 5, 0.00, 0, 1, 39, '2012-10-07', NULL, NULL),
(167, 2, 0.00, 0, 1, 45, '2012-10-07', NULL, NULL),
(168, 5, 0.00, 0, 1, 38, '2012-10-07', NULL, NULL),
(169, 6, 11.00, 0, 1, 21, '2012-10-07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `tipo`, `estado`) VALUES
(2, 'Phampaku Mixto', 'platos de phampaku', 'Comida', 1),
(1, 'Phampaku', '', 'Comida', 1),
(3, 'Picante', '', 'Comida', 1),
(4, 'Conejo', '', 'Comida', 0),
(5, 'Otros', '', 'Comida', 1),
(6, 'Demo', '', 'Comida', 0),
(7, 'Para Picar', '', 'Comida', 1),
(8, 'Para ni&ntilde;os', '', 'Comida', 1),
(9, 'Hamburguesas', '', 'Comida', 0),
(10, 'Refrescos', '', 'Bebidas', 1),
(11, 'Cerveza', '', 'Bebidas', 1),
(12, 'Otras Bebidas', '', 'Bebidas', 1),
(13, 'Jugos en Jarra', '', 'Bebidas', 1),
(14, 'Cocteles', '', 'Bebidas', 1),
(15, 'Jugos del Valle', '', 'Bebidas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Es la llave primaria de la tabla clientes',
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `estado`) VALUES
(2, 'Mauricio Ayllon', 'calle uno', '110', 1),
(3, 'Antonio Lopez', 'Calle Garzilazo', '951478', 0),
(5, 'Demo', 'demo', '1231', 1),
(6, 'oscar prieto', 'calle 34', '12345', 1),
(7, 'bryan calderon', 'ceja el alto', '8765654', 1),
(9, 'Adriana Miranda', 'C. Vida Nueva 1234', '70688246', 0);

-- --------------------------------------------------------

--
-- Table structure for table `confmultas`
--

CREATE TABLE IF NOT EXISTS `confmultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horas` int(2) DEFAULT NULL,
  `minutos` int(2) DEFAULT NULL,
  `monto` float(15,2) NOT NULL DEFAULT '0.00',
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `confmultas`
--

INSERT INTO `confmultas` (`id`, `horas`, `minutos`, `monto`, `observaciones`) VALUES
(3, 0, 30, 50.00, 'retraso leve'),
(2, 0, 45, 100.00, 'otro'),
(4, 16, 0, 10.00, 'por atrasones');

-- --------------------------------------------------------

--
-- Table structure for table `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `sueldo` float(10,2) DEFAULT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contratos`
--

INSERT INTO `contratos` (`id`, `usuario_id`, `sueldo`, `fechainicio`, `fechafin`, `observaciones`) VALUES
(1, 2, 1000.00, '2012-09-01', '2012-12-31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'La Paz'),
(2, 'Cochabamba');

-- --------------------------------------------------------

--
-- Table structure for table `descuentos`
--

CREATE TABLE IF NOT EXISTS `descuentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `porcentaje` float(10,2) DEFAULT NULL,
  `observacion` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `descuentos`
--

INSERT INTO `descuentos` (`id`, `porcentaje`, `observacion`) VALUES
(1, 0.00, '10 %'),
(3, 0.20, '20 %');

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id`, `nombre`) VALUES
(1, 'alta'),
(2, 'baja'),
(3, 'vacacion'),
(4, 'permiso');

-- --------------------------------------------------------

--
-- Table structure for table `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_control` varchar(20) DEFAULT NULL,
  `cliente` varchar(255) DEFAULT NULL,
  `nit` varchar(30) DEFAULT NULL,
  `importetotal` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `facturas`
--

INSERT INTO `facturas` (`id`, `codigo_control`, `cliente`, `nit`, `importetotal`, `fecha`) VALUES
(95, NULL, 'Herreraa', '1234567', '137.00', NULL),
(94, NULL, 'Herreraa', '1234567', '137.00', NULL),
(93, NULL, 'Perez', '1417692017', '137.00', NULL),
(92, NULL, 'Perez', '4189179011', '137.00', NULL),
(91, NULL, 'Herrera', '4376810', '137.00', NULL),
(90, NULL, 'Herrera', '4189179011', '137.00', NULL),
(89, NULL, 'Herrera', '4189179011', '132.00', NULL),
(88, NULL, 'Herrera', '4477890104', '132.00', NULL),
(87, NULL, 'Herrera', '4376810', '137.00', NULL),
(86, NULL, 'Herrera', '4376810', '137.00', NULL),
(85, NULL, 'Herrera', '4376810', '137.00', NULL),
(84, NULL, 'Herrera', '4376810', '132.00', NULL),
(83, NULL, 'Herrera', '4376810', '132.00', NULL),
(82, NULL, 'Herrera', '4376810', '132.00', NULL),
(81, NULL, 'Herrera', '4376810', '132.00', NULL),
(80, NULL, 'Herrera', '4376810', '132.00', NULL),
(79, NULL, 'Herrera', '4376810', '132.00', NULL),
(78, NULL, 'Herrera', '4376810', '132.00', NULL),
(77, NULL, 'Herrera', '4376810', '132.00', NULL),
(76, NULL, 'Herrera', '4376810', '132.00', NULL),
(75, NULL, 'Herrera', '4376810', '132.00', NULL),
(74, NULL, 'Herrera', '4376810', '132.00', NULL),
(73, NULL, 'Herrera', '4376810', '132.00', NULL),
(72, NULL, 'Herrera', '4376810', '132.00', NULL),
(71, NULL, 'Herrera', '4376810', '132.00', NULL),
(70, NULL, 'Herrera', '4376810', '132.00', NULL),
(69, NULL, 'Herrera', '4376810', '132.00', NULL),
(68, NULL, 'Herrera', '4376810', '132.00', NULL),
(67, NULL, 'Herrera', '4376810', '132.00', NULL),
(66, NULL, 'Herrera', '4376810', '132.00', NULL),
(65, NULL, 'Herrera', '123123', '132.00', NULL),
(64, NULL, 'Herrera', '123123', '132.00', NULL),
(63, NULL, 'Herrera', '123123', '132.00', NULL),
(62, NULL, 'Herrera', '123123', '132.00', NULL),
(61, NULL, 'Herrera', '123123', '132.00', NULL),
(60, NULL, 'Herrera', '123123', '132.00', NULL),
(59, NULL, 'Herrera', '123123', '132.00', NULL),
(58, NULL, 'Herrera', '123123', '132.00', NULL),
(57, NULL, 'Herrera', '123123', '132.00', NULL),
(56, NULL, 'Herrera', '123123', '132.00', NULL),
(55, NULL, 'Herrera', '123123', '132.00', NULL),
(54, NULL, 'Herrera', NULL, '132.00', NULL),
(53, NULL, 'Herrera', NULL, '132.00', NULL),
(52, NULL, 'Herrera', NULL, '132.00', NULL),
(51, NULL, 'Herrera', '123123', '132.00', NULL),
(50, NULL, 'Herrera', '123123', '132.00', NULL),
(96, NULL, 'Herreraa', '1234567', '137.00', NULL),
(97, NULL, 'Herreraa', '1234567', '137.00', NULL),
(98, NULL, 'Herreraa', '1417692017', '137.00', NULL),
(99, NULL, 'Herreraa', '1417692017', '137.00', NULL),
(100, NULL, 'Herreraa', '1417692017', '137.00', NULL),
(101, NULL, 'Perez', '1234567890', '137.00', NULL),
(102, NULL, 'Perez', '1234567890', '137.00', NULL),
(103, NULL, 'Herrea', '1234567890', '132.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
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
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`id`, `entrada`, `salida`, `observacion`, `habil`, `dia`) VALUES
(1, '09:00:00', '20:00:00', 'ninguna', 1, 'lunes');

-- --------------------------------------------------------

--
-- Table structure for table `insumos`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `insumos`
--

INSERT INTO `insumos` (`id`, `nombre`, `preciocompra`, `precioventa`, `fecha`, `total`, `bodega`, `tipo_id`, `estado`, `observaciones`) VALUES
(1, 'Pollo', 12.00, 0.00, '2012-08-24', 50, 81, 1, 1, ''),
(2, 'Cerdo', 0.00, 0.00, '2012-08-24', 0, 53, 1, 1, ''),
(3, 'Laping', 0.00, 0.00, '2012-08-24', 50, 7, 1, 1, ''),
(4, 'Cordero', 0.00, 0.00, '2012-08-24', 50, 5, 1, 1, ''),
(5, 'Pato', 0.00, 0.00, '2012-08-24', 0, 50, 1, 1, ''),
(6, 'Coca Cola', 11.00, 12.00, '2012-08-24', 10, 64, 4, 1, ''),
(7, 'Fanta', 0.00, 0.00, '2012-08-24', 0, 100, 4, 1, ''),
(8, 'platos', 6.00, 0.00, '2012-08-25', 40, 0, 5, 1, ''),
(9, 'Huari', 12.00, 0.00, '2012-08-26', 58, 62, 6, 1, ''),
(10, 'Pacena', 0.00, 0.00, '2012-08-26', 62, 10, 6, 1, ''),
(11, 'Taqui&ntilde;a', 0.00, 0.00, '2012-08-26', 72, 48, 6, 1, ''),
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
(22, 'Cebolla', 0.00, 0.00, '2012-08-26', 9, 4, 10, 0, ''),
(23, 'Tomate', 0.00, 0.00, '2012-08-26', 10, 5, 10, 1, ''),
(24, 'Queso', 0.00, 0.00, '2012-08-26', 0, 71, 10, 1, ''),
(25, 'Locoto', 0.00, 0.00, '2012-08-26', 20, 20, 10, 1, ''),
(26, 'Impresora Epson Mp20', 700.00, 0.00, '2012-09-28', 2, 0, 11, 1, ''),
(27, 'Mote', 12.00, 14.00, '2012-10-03', 10, 0, 10, 1, ''),
(28, 'Sprite', 12.00, 15.00, '2012-10-03', 10, 0, 4, 1, ''),
(29, 'Agua Mineral 1/2 Litro', 0.00, 0.00, '2012-10-06', 0, 0, 12, 1, ''),
(30, 'Agua Mineral 2 Litros ', 0.00, 0.00, '2012-10-06', 0, 0, 12, 1, ''),
(31, 'Coca Cola Zero', 0.00, 0.00, '2012-10-06', 0, 0, 13, 1, ''),
(32, 'Coca Cola Zero', 0.00, 0.00, '2012-10-06', 0, 0, 14, 1, ''),
(33, 'Agua C/G Mineral 1/2 Litro ', 0.00, 0.00, '2012-10-06', 0, 0, 12, 1, ''),
(34, 'Agua Mineral C/G 2 Litros', 0.00, 0.00, '2012-10-06', 0, 0, 12, 1, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `pedido_id`, `producto_id`, `cantidad`, `precio`, `fecha`) VALUES
(19, 13, 12, 1, 60.00, '2012-10-06 16:25:51'),
(20, 14, 12, 1, 60.00, '2012-10-06 19:57:18'),
(21, 14, 18, 1, 12.00, '2012-10-06 19:57:24'),
(22, 15, 12, 2, 120.00, '2012-10-07 00:43:07'),
(23, 15, 18, 1, 12.00, '2012-10-07 00:43:13'),
(24, 16, 12, 1, 60.00, '2012-10-07 13:09:42'),
(25, 16, 18, 1, 12.00, '2012-10-07 13:09:48'),
(26, 16, 17, 1, 65.00, '2012-10-07 13:09:51'),
(27, 17, 12, 2, 120.00, '2012-10-07 15:23:59'),
(28, 17, 20, 1, 12.00, '2012-10-07 15:24:07'),
(29, 18, 12, 2, 120.00, '2012-10-07 22:43:42'),
(30, 18, 17, 1, 65.00, '2012-10-07 22:43:47'),
(31, 18, 18, 1, 12.00, '2012-10-07 22:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
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
-- Table structure for table `parametrosfacturas`
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
-- Dumping data for table `parametrosfacturas`
--

INSERT INTO `parametrosfacturas` (`id`, `nit`, `numero_autorizacion`, `llave`, `otro2`, `otro3`) VALUES
(1, '3817445010', '29040011007', 'A3Fs4s$)2cvD(eY667A5C4A2rsdf53kw9654E2B23s24df35F5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `mesa` smallint(6) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '0' COMMENT '0 creado, 1 impreso y cosina, 2 servido, 3 pagado, 4 facturado',
  `total` float(15,2) NOT NULL DEFAULT '0.00',
  `monto` float(15,2) NOT NULL DEFAULT '0.00',
  `fechac` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `fecha`, `mesa`, `estado`, `total`, `monto`, `fechac`) VALUES
(13, 2, '2012-10-06 16:25:32', 1, 0, 60.00, 0.00, ''),
(14, 2, '2012-10-06 19:57:14', 2, 1, 72.00, 200.00, ''),
(15, 2, '2012-10-07 00:43:04', 1, 3, 132.00, 200.00, ''),
(16, 2, '2012-10-07 13:09:39', 2, 3, 137.00, 200.00, ''),
(17, 2, '2012-10-07 15:23:57', 3, 3, 132.00, 200.00, ''),
(18, 2, '2012-10-07 22:43:35', 4, 3, 197.00, 200.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', NULL),
(2, 'mozo', NULL),
(3, 'Cobrador', 'Solo se encarga de cobrar');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `porciones`
--

INSERT INTO `porciones` (`id`, `producto_id`, `insumo_id`, `cantidad`) VALUES
(2, 2, 1, 2),
(3, 1, 1, 1),
(4, 1, 2, 1),
(29, 32, 24, 1),
(26, 15, 1, 2),
(30, 34, 28, 1),
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
(28, 3, 2, 2),
(27, 3, 1, 1),
(31, 4, 3, 2),
(32, 4, 4, 2),
(33, 5, 3, 2),
(34, 5, 1, 1),
(35, 6, 2, 2),
(36, 6, 4, 2),
(37, 8, 2, 2),
(38, 8, 3, 2),
(39, 7, 2, 2),
(40, 7, 1, 1),
(41, 10, 5, 1),
(42, 10, 4, 2),
(43, 11, 5, 1),
(44, 11, 3, 2),
(45, 12, 5, 1),
(46, 12, 2, 1),
(47, 9, 5, 1),
(48, 9, 1, 1),
(49, 14, 2, 4),
(50, 13, 3, 4),
(51, 16, 2, 2),
(52, 17, 5, 2),
(53, 41, 31, 1),
(54, 42, 32, 1),
(55, 44, 11, 1),
(56, 45, 29, 1),
(57, 46, 30, 1),
(58, 47, 33, 1),
(59, 48, 34, 1),
(60, 49, 14, 1),
(61, 50, 19, 1),
(62, 51, 17, 1),
(63, 52, 15, 1),
(64, 53, 18, 1),
(65, 54, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `productos`
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
(17, 'Phampaku Pato', '', 65.00, 1, 1, 0),
(18, 'Coca Cola 1 Litro', '', 12.00, 10, 1, 6),
(19, 'Silpancho', '', 40.00, 6, 1, 0),
(20, 'Fanta 1 Litro', '', 12.00, 10, 1, 7),
(21, 'Kallu', '', 15.00, 7, 1, 0),
(22, 'Huari', '', 15.00, 11, 1, 9),
(23, 'Pace&ntilde;a', '', 15.00, 11, 1, 10),
(24, 'Hamburguesa Doble', 'sadf', 20.00, 9, 0, 0),
(25, 'Picante Mixto', '', 60.00, 3, 1, 0),
(28, 'Picante Pollo', '', 60.00, 3, 1, 0),
(27, 'Picante Lengua', '', 60.00, 3, 1, 0),
(26, 'Picante Conejo', '', 60.00, 3, 0, 0),
(29, 'Picante Conejo', '', 60.00, 3, 1, 0),
(30, 'Lambreado Conejo', '', 60.00, 4, 1, 0),
(31, 'Chanka Conejo', '', 50.00, 5, 1, 0),
(32, 'Quesillo', '', 8.00, 7, 1, 24),
(33, 'Pique', '', 60.00, 5, 1, 0),
(34, 'Sprite 1 Litro', '', 15.00, 10, 1, 28),
(35, 'Chanka de Pollo', '', 50.00, 5, 1, 0),
(36, 'Lambreado', '', 50.00, 5, 1, 0),
(37, 'Charke', '', 60.00, 5, 1, 0),
(38, 'Mote de Haba', '', 12.00, 7, 1, 0),
(39, 'Salchipapa', '', 25.00, 8, 1, 0),
(40, 'Pollo Dorado', '', 25.00, 8, 1, 0),
(41, 'Coca Cola Zero 2 Litros', '', 12.00, 10, 1, 31),
(42, 'Coca Cola Zero 1/2 Litro', '', 7.00, 10, 1, 32),
(43, 'Sopa Para Bebe', '', 5.00, 8, 1, 0),
(44, 'Taqui&ntilde;a', NULL, 15.00, 11, 1, 11),
(45, 'Agua Mineral 1/2 Litro', NULL, 7.00, 10, 1, 29),
(46, 'Agua Mineral 2 Litros ', NULL, 12.00, 10, 1, 30),
(47, 'Agua C/G Mineral 1/2 Litro ', NULL, 6.00, 10, 1, 33),
(48, 'Agua Mineral C/G 2 Litros', NULL, 12.00, 10, 1, 34),
(49, 'Durazno', NULL, 15.00, 15, 1, 14),
(50, 'Guayaba', NULL, 15.00, 15, 1, 19),
(51, 'Guinda', '', 15.00, 15, 1, 17),
(52, 'Manzana', NULL, 15.00, 15, 1, 15),
(53, 'Tamarindo', NULL, 15.00, 15, 1, 18),
(54, 'Tumbo', NULL, 15.00, 15, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `recibos`
--

CREATE TABLE IF NOT EXISTS `recibos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `total` float(10,2) DEFAULT NULL,
  `descuento` float(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `recibos`
--

INSERT INTO `recibos` (`id`, `nombre`, `total`, `descuento`, `fecha`) VALUES
(1, 'Herrera', NULL, NULL, '2012-10-04'),
(2, 'Herrera', 32.00, 0.00, '2012-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `tipoevento_id` int(11) NOT NULL,
  `cantidad_personas` int(5) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reservas`
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
(15, 3, 2, 100, '2012-09-19 16:30:00', 'sdsdfc'),
(16, 2, 10, 200, '2012-10-10 11:30:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `retrasos`
--

CREATE TABLE IF NOT EXISTS `retrasos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `horas` int(2) DEFAULT NULL,
  `minutos` int(2) DEFAULT NULL,
  `descuento` float(8,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `retrasos`
--

INSERT INTO `retrasos` (`id`, `usuario_id`, `horas`, `minutos`, `descuento`, `fecha`) VALUES
(1, 2, 14, 25, 100.00, '2012-09-07'),
(2, 2, 4, 20, 100.00, '2012-09-10'),
(3, 2, 6, 51, 100.00, '2012-09-17'),
(4, 2, 11, 14, 100.00, '2012-09-18'),
(5, 2, 5, 32, 100.00, '2012-09-21'),
(6, 2, 14, 0, 100.00, '2012-10-05'),
(7, 3, 14, 4, 100.00, '2012-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `departamento_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `direccion`, `departamento_id`) VALUES
(1, 'VIVA VINTO', 'AV. VINTO #123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tipoeventos`
--

CREATE TABLE IF NOT EXISTS `tipoeventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tipoeventos`
--

INSERT INTO `tipoeventos` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(5, 'Matrimonio', '', 1),
(2, 'Bautizo', NULL, 1),
(3, 'Cena', '', 1),
(4, 'Cumpleanos', '', 1),
(6, 'Almuerzo', '', 1),
(7, 'Bautizo universitario', '', 1),
(8, 'Evento demo', '', 1),
(9, 'Recepcion social', 'Reuniones especiales', 1),
(10, 'Evento de Prueba', 'Aqui la descripcion', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tipos`
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
(11, 'Electronicos', 'Equipos de Computacion', NULL, 1),
(12, 'Agua', '', NULL, 1),
(13, 'Refrescos 2 Litros', '', NULL, 1),
(14, 'Refrescos 1/2 Litro', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `direccion`, `usuario`, `pass`, `codigo`, `perfile_id`, `sucursal_id`, `estado_id`) VALUES
(1, 'Juan Perez', 'calle uno', 'jperez', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '1111', 2, 1, 1),
(2, 'Carlos Flores B.', 'calle uno', 'cflores', '62e5b45919a9ae30db2271432bb800d8d0aabb6d', '2222', 2, 1, 1),
(3, 'Abdon Pinto', 'calle uno', 'apinto', '40a89c3119995f9898d4d4ad156047608e582ef4', '3333', 2, 1, 1),
(5, 'Adolfo Guillen', 'C. Arapata 123', 'vinto', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 1, 1, 2),
(9, 'Cristiam Herrera Daza', 'Calle Yanacocha #123', 'cristiamherrera', 'd033e22ae348aeb5660fc2140aec35850c4da997', '9999', 1, NULL, 1),
(10, 'Alvaro Guerra', 'Calle Junin', 'alvaro', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '6666', 2, NULL, 2),
(11, 'Cristina Guillen', 'Calle 3', 'cristina', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 3, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios2`
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
-- Dumping data for table `usuarios2`
--

INSERT INTO `usuarios2` (`id`, `nombre`, `direccion`, `usuario`, `pass`, `codigo`, `perfile_id`) VALUES
(1, 'Juan Perez', 'calle uno', 'jperez', '81dc9bdb52d04dc20036dbd8313ed055', '1111', 1),
(2, 'Carlos Flores', 'calle uno', 'cflores', '81dc9bdb52d04dc20036dbd8313ed055', '2222', 1),
(3, 'Abdon Pinto', 'calle uno', 'apinto', '81dc9bdb52d04dc20036dbd8313ed055', '3333', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
