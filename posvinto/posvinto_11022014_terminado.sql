-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2014 at 05:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `posvinto`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=566 ;

--
-- Dumping data for table `almacen`
--

INSERT INTO `almacen` (`id`, `insumo_id`, `preciocompra`, `ingreso`, `salida`, `total`, `fecha`, `lugar`, `observaciones`, `usuario_id`) VALUES
(565, 259, 10.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(564, 258, 80.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(563, 257, 60.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(562, 256, 50.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(561, 255, 80.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(560, 254, 50.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(559, 253, 15.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(558, 252, 10.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(557, 251, 5.00, 0, 0, 0, '2014-02-10', '', NULL, NULL),
(556, 250, 20.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(555, 249, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(554, 248, 5.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(553, 247, 4.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(552, 246, 4.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(551, 245, 5.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(550, 244, 5.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(549, 243, 5.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(548, 242, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(547, 241, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(546, 240, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(545, 239, 5.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(544, 238, 5.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(543, 237, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(542, 236, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(541, 235, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(540, 234, 25.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(539, 233, 20.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(538, 232, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(537, 231, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(536, 230, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(535, 229, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(534, 228, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(533, 227, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(532, 226, 10.00, 0, 0, 0, '2014-02-09', '', NULL, NULL),
(531, 222, 110.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(530, 221, 110.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(529, 220, 110.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(528, 219, 110.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(527, 218, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(526, 217, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(525, 216, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(524, 215, 200.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(523, 214, 280.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(522, 213, 45.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(521, 212, 45.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(520, 211, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(519, 210, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(518, 209, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(517, 208, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(516, 207, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(515, 206, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(514, 205, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(513, 204, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(512, 203, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(511, 202, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(510, 201, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(509, 200, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(508, 199, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(507, 198, 135.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(506, 197, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(505, 196, 140.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(504, 195, 150.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(503, 194, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(502, 193, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(501, 192, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(500, 191, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(499, 190, 180.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(498, 189, 180.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(497, 188, 180.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(496, 187, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(495, 186, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(494, 185, 130.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(493, 184, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(492, 183, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(491, 182, 110.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(490, 181, 180.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(489, 180, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(488, 179, 80.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(487, 178, 90.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(486, 177, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(485, 176, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(484, 175, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(483, 174, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(482, 173, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(481, 172, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(480, 171, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(479, 170, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(478, 169, 300.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(477, 168, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(476, 167, 150.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(475, 166, 300.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(474, 165, 300.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(473, 164, 450.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(472, 163, 160.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(471, 162, 200.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(470, 161, 200.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(469, 160, 200.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(468, 159, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(467, 158, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(466, 157, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(465, 156, 120.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(464, 155, 100.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(463, 154, 20.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(462, 153, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(461, 152, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(460, 151, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(459, 150, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(458, 149, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(457, 148, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(456, 147, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(455, 146, 30.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(454, 145, 15.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(453, 144, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(452, 143, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(451, 142, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(450, 141, 15.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(449, 140, 15.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(448, 139, 15.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(447, 138, 15.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(446, 137, 15.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(445, 136, 10.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(444, 135, 10.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(443, 134, 10.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(442, 133, 10.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(441, 132, 4.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(440, 131, 5.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(439, 130, 14.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(438, 129, 12.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(437, 128, 14.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(436, 127, 15.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(435, 126, 8.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(434, 125, 8.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(433, 124, 10.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(432, 123, 5.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(431, 122, 5.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(430, 121, 5.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(429, 120, 5.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(428, 119, 5.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(427, 118, 5.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(426, 117, 11.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(425, 116, 11.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(424, 115, 10.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(423, 114, 50.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(422, 113, 20.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(421, 112, 20.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(420, 111, 25.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(419, 110, 18.00, 0, 0, 0, '2014-02-07', '', NULL, NULL),
(418, 109, 21.00, 1, 0, 1, '2014-02-06', '', NULL, NULL),
(417, 108, 18.00, 0, 0, 0, '2014-02-06', '', NULL, NULL),
(416, 7, 0.00, 0, 6, 6, '2014-02-06', '', NULL, NULL),
(415, 7, 0.00, 12, 0, 12, '2014-02-06', '', NULL, NULL),
(414, 107, 12.00, 5, 0, 5, '2014-02-06', '', NULL, NULL),
(413, 106, 15.00, 5, 0, 5, '2014-02-06', '', NULL, NULL),
(412, 105, 15.00, 12, 0, 12, '2014-02-06', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ambientes`
--

CREATE TABLE IF NOT EXISTS `ambientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(5) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `mesas` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ambientes`
--

INSERT INTO `ambientes` (`id`, `numero`, `imagen`, `mesas`) VALUES
(1, 1, '52f59698-a3e8-451c-8d5a-064001d27043.jpg', 8),
(2, 2, '52f599f6-87e0-4007-b472-064001d27043.jpg', 6),
(3, 3, '52852fe7-45ec-4aac-afd1-0f1801d27043.jpg', 6);

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
  `lugare_id` int(255) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4734 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clase_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `clase_id`, `nombre`, `descripcion`, `tipo`, `estado`) VALUES
(2, 1, 'Phampaku Mixto', 'platos', 'Comida', 1),
(1, 1, 'Phampaku', '', 'Comida', 1),
(3, 1, 'Picantes', '', 'Comida', 1),
(5, 1, 'Otros platos', '', 'Comida', 1),
(7, 1, 'Para Picar', '', 'Comida', 1),
(8, 1, 'Para ni&ntilde;os', '', 'Comida', 1),
(10, 2, 'POSTRES', '', 'Bebidas', 1),
(56, 6, 'ERRAZURIZ', NULL, 'Bebidas', 1),
(54, 5, 'ARANJUEZ', '', 'Bebidas', 1),
(55, 5, 'BLANCOS', NULL, 'Bebidas', 1),
(23, 5, 'La concepcion', '', 'Bebidas', 1),
(53, 5, '1/2 BOTELLA', NULL, 'Bebidas', 1),
(19, 1, 'Guarniciones', 'porcion ', 'Comida', 1),
(20, 6, 'COUSINO MACUL', 'postres', 'Comida', 1),
(25, 5, 'Kohlbert ', '', 'Bebidas', 1),
(30, 7, 'Antonio llamarada', 'bebida tropical', 'Bebidas', 1),
(33, 7, 'bebida antoniooo', 'bebida especial', 'Bebidas', 1),
(57, 6, 'CALITERRA', NULL, 'Bebidas', 1),
(43, 4, 'REFRESCOS', NULL, 'Bebidas', 1),
(44, 4, 'CERVEZAS', NULL, 'Bebidas', 1),
(45, 4, 'OTRAS BEBIDAS', NULL, 'Bebidas', 1),
(46, 4, 'EN JARRA', NULL, 'Bebidas', 1),
(47, 4, 'COCTELES', NULL, 'Bebidas', 1),
(48, 4, 'JUGOS DEL VALLE', NULL, 'Bebidas', 1),
(49, 4, 'JUGOS NATURALES', NULL, 'Bebidas', 1),
(60, 9, 'TRIVARIETAL', NULL, 'Bebidas', 1),
(59, 9, 'Otros', NULL, 'Bebidas', 1),
(58, 6, 'LA CHAMIZA', NULL, 'Bebidas', 1),
(61, 9, 'BIVARIETAL', NULL, 'Bebidas', 1),
(62, 9, 'VARIETAL', NULL, 'Bebidas', 1),
(63, 9, 'VARIETALES FRIOS', NULL, 'Bebidas', 1),
(64, 1, 'Pescados', 'platos', 'Comida', 1),
(65, 4, 'SINGUANI', NULL, 'Bebidas', 1),
(66, 4, 'TRAGOS BOTELLA', NULL, 'Bebidas', 1),
(67, 4, 'TRAGOS VASOS', NULL, 'Bebidas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--

CREATE TABLE IF NOT EXISTS `clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  `orden` int(2) NOT NULL DEFAULT '0',
  `color` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `clases`
--

INSERT INTO `clases` (`id`, `nombre`, `descripcion`, `estado`, `orden`, `color`) VALUES
(1, 'Comida', NULL, 1, 1, '3276B1'),
(2, 'Postres', NULL, 1, 2, '47A447'),
(4, 'Bebidas', NULL, 1, 4, '330000'),
(5, 'Vinos Nacionales', NULL, 1, 5, 'D2322D'),
(6, 'Vinos Importados', NULL, 1, 6, '9999FF'),
(9, 'Vinos Campos de Solana', 'panques para combos', 1, 7, 'CC3399');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Es la llave primaria de la tabla clientes',
  `nombre` varchar(50) NOT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `nombrenit` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `nit`, `nombrenit`, `direccion`, `telefono`, `estado`) VALUES
(76, 'Mauricio Ayllon Garcia', NULL, NULL, 'calle viacha  Nro.256', '355566', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `descuentos`
--

INSERT INTO `descuentos` (`id`, `porcentaje`, `observacion`) VALUES
(1, 0.10, '10 %'),
(3, 0.20, '20 %'),
(4, 0.30, '30%'),
(5, 0.00, '40%');

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
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=198 ;

--
-- Dumping data for table `facturas`
--

INSERT INTO `facturas` (`id`, `codigo_control`, `cliente`, `nit`, `importetotal`, `fecha`, `created`) VALUES
(95, NULL, 'Herreraa', '1234567', 137.00, NULL, '0000-00-00'),
(94, NULL, 'Herreraa', '1234567', 137.00, NULL, '0000-00-00'),
(93, NULL, 'Perez', '1417692017', 137.00, NULL, '0000-00-00'),
(92, NULL, 'Perez', '4189179011', 137.00, NULL, '0000-00-00'),
(91, NULL, 'Herrera', '4376810', 137.00, NULL, '0000-00-00'),
(90, NULL, 'Herrera', '4189179011', 137.00, NULL, '0000-00-00'),
(89, NULL, 'Herrera', '4189179011', 132.00, NULL, '0000-00-00'),
(88, NULL, 'Herrera', '4477890104', 132.00, NULL, '0000-00-00'),
(87, NULL, 'Herrera', '4376810', 137.00, NULL, '0000-00-00'),
(86, NULL, 'Herrera', '4376810', 137.00, NULL, '0000-00-00'),
(85, NULL, 'Herrera', '4376810', 137.00, NULL, '0000-00-00'),
(84, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(83, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(82, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(81, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(80, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(79, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(78, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(77, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(76, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(75, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(74, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(73, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(72, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(71, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(70, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(69, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(68, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(67, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(66, NULL, 'Herrera', '4376810', 132.00, NULL, '0000-00-00'),
(65, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(64, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(63, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(62, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(61, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(60, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(59, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(58, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(57, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(56, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(55, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(54, NULL, 'Herrera', NULL, 132.00, NULL, '0000-00-00'),
(53, NULL, 'Herrera', NULL, 132.00, NULL, '0000-00-00'),
(52, NULL, 'Herrera', NULL, 132.00, NULL, '0000-00-00'),
(51, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(50, NULL, 'Herrera', '123123', 132.00, NULL, '0000-00-00'),
(96, NULL, 'Herreraa', '1234567', 137.00, NULL, '0000-00-00'),
(97, NULL, 'Herreraa', '1234567', 137.00, NULL, '0000-00-00'),
(98, NULL, 'Herreraa', '1417692017', 137.00, NULL, '0000-00-00'),
(99, NULL, 'Herreraa', '1417692017', 137.00, NULL, '0000-00-00'),
(100, NULL, 'Herreraa', '1417692017', 137.00, NULL, '0000-00-00'),
(101, NULL, 'Perez', '1234567890', 137.00, NULL, '0000-00-00'),
(102, NULL, 'Perez', '1234567890', 137.00, NULL, '0000-00-00'),
(103, NULL, 'Herrea', '1234567890', 132.00, NULL, '0000-00-00'),
(104, NULL, 'miranda', '4839295013', 150.00, NULL, '0000-00-00'),
(105, NULL, 'miranda', '4839295013', 75.00, NULL, '0000-00-00'),
(106, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '0000-00-00'),
(107, NULL, NULL, NULL, NULL, NULL, '2013-02-24'),
(108, NULL, NULL, NULL, NULL, NULL, '2013-02-24'),
(109, NULL, NULL, NULL, 60.00, NULL, '2013-02-24'),
(110, NULL, NULL, NULL, 72.00, NULL, '2013-02-24'),
(111, NULL, NULL, NULL, 132.00, NULL, '2013-02-24'),
(112, NULL, NULL, NULL, 137.00, NULL, '2013-02-24'),
(113, NULL, NULL, NULL, 132.00, NULL, '2013-02-24'),
(114, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(115, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(116, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(117, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(118, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(119, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(120, NULL, 'HERRERA', '4376810010', 75.00, NULL, '2013-02-24'),
(121, NULL, 'HERRERA', '4376810010', 75.00, NULL, '2013-02-24'),
(122, NULL, 'HERRERA', '4376810010', 75.00, NULL, '2013-02-24'),
(123, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(124, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(125, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(126, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(127, NULL, 'MIRANDA', '4839295013', 75.00, NULL, '2013-02-24'),
(128, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-24'),
(129, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-24'),
(130, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-24'),
(131, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-24'),
(132, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-24'),
(133, 'DA-2C-2F-9A', 'MIRANDA', '4839295013', 75.00, '2013-02-24', '2013-02-24'),
(134, '73-43-08-18', 'HERRERA', '4376810', 75.00, '2013-02-24', '2013-02-24'),
(135, NULL, 'GUILLEN', '3817445010', 195.00, NULL, '2013-02-26'),
(136, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-26'),
(137, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-26'),
(138, NULL, 'MIRANDA', '4839295013', 135.00, NULL, '2013-02-26'),
(139, NULL, 'HERRERA', '4376810010', 60.00, NULL, '2013-02-26'),
(140, '03-DF-24-B9-F2', 'MIRANDA', '4839295013', 75.00, '2013-02-26', '2013-02-26'),
(141, '4A-0F-A9-0B', 'MIRANDA', '4839295', 75.00, '2013-02-26', '2013-02-26'),
(142, 'BF-25-86-33', 'GUILLEN', '4567895010', 75.00, '2013-02-26', '2013-02-26'),
(143, '14-44-68-0C-2E', '', '', 75.00, '2013-02-26', '2013-02-26'),
(144, NULL, 'MIRANDA', '4839295013', 0.00, NULL, '2013-02-26'),
(145, NULL, 'GUILLEN', '4647676876', 660.00, NULL, '2013-03-05'),
(146, '15-A3-17-A2-B3', '', '', 120.00, '2013-03-05', '2013-03-05'),
(147, 'B8-BA-F6-F9-41', 'MIRA DA', '4839295013', 120.00, '2013-03-05', '2013-03-05'),
(148, NULL, 'MARCIAL', '45678734', 120.00, NULL, '2013-03-11'),
(149, NULL, 'Soto', '3355011', 135.00, NULL, '2013-03-16'),
(150, NULL, 'PatiÃ±o', '3138086', 390.00, NULL, '2013-03-16'),
(151, NULL, 'Felix Quiroz', '3618911', 548.00, NULL, '2013-03-16'),
(152, NULL, 'ROJAS', '3592838', 263.00, NULL, '2013-03-16'),
(153, NULL, 'juan choque', '1210365', 179.00, NULL, '2013-03-16'),
(154, NULL, 'Rojas', '5185551', 293.00, NULL, '2013-03-16'),
(155, NULL, 'Arancibia', '4505179010', 167.00, NULL, '2013-03-16'),
(156, NULL, 'Jose AÃ±ez', '990463019', 309.00, NULL, '2013-03-16'),
(157, NULL, '', '5634884', 470.00, NULL, '2013-03-16'),
(158, NULL, 'Bustamante', '831863', 91.00, NULL, '2013-03-16'),
(159, NULL, 'ANTEQUERA', '823261014', 147.00, NULL, '2013-03-16'),
(160, NULL, 'Huitado', '4445503', 135.00, NULL, '2013-03-16'),
(161, NULL, 'jose jaillita', '5263425', 284.00, NULL, '2013-03-16'),
(162, NULL, 'teran', '5923946', 135.00, NULL, '2013-03-16'),
(163, NULL, 'ARTEAGA', '5207031016', 487.00, NULL, '2013-03-17'),
(164, NULL, 'adriana', '34654363', 181.00, NULL, '2013-03-17'),
(165, NULL, 'Escalera', '3137047', 186.00, NULL, '2013-03-23'),
(166, NULL, 'Mercado', '2313515', 365.00, NULL, '2013-03-23'),
(167, NULL, 'Morales', '627040011', 151.00, NULL, '2013-03-23'),
(168, NULL, 'Vargas', '5124167014', 267.00, NULL, '2013-03-23'),
(169, NULL, 'Rodriguez', '4418314', 294.00, NULL, '2013-03-23'),
(170, NULL, 'Tejada', '949687', 238.00, NULL, '2013-03-24'),
(171, NULL, 'Torrejon', '2861568', 262.00, NULL, '2013-03-24'),
(172, NULL, 'Yomar MontaÃ±o', '6407245', 165.00, NULL, '2013-03-24'),
(173, NULL, 'Villalpando', '3729013', 522.00, NULL, '2013-03-24'),
(174, NULL, 'Felix Mamani', '3033242017', 250.00, NULL, '2013-03-24'),
(175, NULL, 'Flores', '8217639', 362.00, NULL, '2013-03-24'),
(176, NULL, 'Mirian Flores V.', '3591880', 147.00, NULL, '2013-03-24'),
(177, NULL, 'Chinche', '3742015', 335.00, NULL, '2013-03-24'),
(178, NULL, 'Jaura de Vargas', '588711013', 174.00, NULL, '2013-03-24'),
(179, NULL, 'Hope', '102140902', 370.00, NULL, '2013-03-24'),
(180, NULL, 'Rosario Luna', '4392866', 196.00, NULL, '2013-03-24'),
(181, NULL, 'Gonzales', '3177411', 242.00, NULL, '2013-03-24'),
(182, NULL, 'Guillen', '3027618018', 160.00, NULL, '2013-03-24'),
(183, NULL, 'Maldonado', '4457829', 228.00, NULL, '2013-03-24'),
(184, NULL, 'Victor Soto Siles', '949425', 407.00, NULL, '2013-03-24'),
(185, NULL, 'Barrera', '4537845', 132.00, NULL, '2013-03-24'),
(186, NULL, 'Cespedes', '2726211019', 171.00, NULL, '2013-03-24'),
(187, NULL, 'Asseff', '4752854', 260.00, NULL, '2013-03-24'),
(188, NULL, 'Andrew', '800408013', 573.00, NULL, '2013-03-24'),
(189, NULL, 'Nogales', '5274911', 210.00, NULL, '2013-03-24'),
(190, NULL, 'Majfu', '658854', 441.00, NULL, '2013-03-24'),
(191, NULL, 'Garon', '1247663011', 214.00, NULL, '2013-03-24'),
(192, NULL, 'Alcocer', '816503', 155.00, NULL, '2013-03-24'),
(193, NULL, 'Murillo', '5191985', 174.00, NULL, '2013-03-24'),
(194, NULL, 'conta', '1026145024', 1204.00, NULL, '2013-03-24'),
(195, NULL, 'Karen Coro Canaviri', '6424250117', 1207.00, NULL, '2013-03-24'),
(196, NULL, 'Saravia', '599438', 154.00, NULL, '2013-03-24'),
(197, NULL, '200', '57657', 0.00, NULL, '2014-02-03');

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
  `nombre` varchar(200) NOT NULL,
  `preciocompra` float(15,2) NOT NULL DEFAULT '0.00',
  `precioventa` float(15,2) NOT NULL DEFAULT '0.00',
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `bodega` int(11) NOT NULL DEFAULT '0',
  `tipo_id` int(11) NOT NULL DEFAULT '0',
  `tipo` varchar(100) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `observaciones` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=260 ;

--
-- Dumping data for table `insumos`
--

INSERT INTO `insumos` (`id`, `nombre`, `preciocompra`, `precioventa`, `fecha`, `total`, `bodega`, `tipo_id`, `tipo`, `estado`, `observaciones`) VALUES
(150, 'Durazno', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugos del Valle Durazno'),
(149, 'Guinda', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugos del Valle Guinda'),
(148, 'Guayaba ', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugos del Valle Guayaba'),
(147, 'Manzana', 12.00, 15.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Jugos del Valle Manzana'),
(146, 'Whisky en la Rocas', 30.00, 35.00, '2014-02-07', 0, 0, 29, 'tragos', 1, 'Whisky en la Rocas'),
(145, 'Daiquiri', 15.00, 20.00, '2014-02-07', 0, 0, 24, 'tragos', 1, 'Daiquiri'),
(144, 'Marguarita', 12.00, 18.00, '2014-02-07', 0, 0, 28, 'tragos', 1, 'Marguarita'),
(143, 'Caipirinia', 12.00, 15.00, '2014-02-07', 0, 0, 27, 'tragos', 1, 'Caipirinia'),
(142, 'Pisco Sour', 12.00, 15.00, '2014-02-07', 0, 0, 19, 'tragos', 1, 'Pisco Sour'),
(141, 'Mojito', 15.00, 18.00, '2014-02-07', 0, 0, 26, 'tragos', 1, 'Mojito'),
(140, 'Destornillador', 15.00, 18.00, '2014-02-07', 0, 0, 25, 'tragos', 1, 'Destornillador'),
(139, 'Cuba Libre', 15.00, 18.00, '2014-02-07', 0, 0, 24, 'tragos', 1, 'Cuba Libre'),
(138, 'Chuflay', 15.00, 18.00, '2014-02-07', 0, 0, 19, 'tragos', 1, 'Chuflay'),
(137, 'Manzana Uva', 15.00, 25.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Refresco de Manzana Uva'),
(136, 'Moco Chinchi', 10.00, 25.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Refresco de Moco Chinchi'),
(135, 'Limon', 10.00, 25.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Limon'),
(134, 'Tumbo', 10.00, 25.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Refresco de Tumbo'),
(133, 'Maracuya', 10.00, 25.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Refresco de Maracuya'),
(132, 'Garapina en Jarra', 4.00, 6.00, '2014-02-07', 0, 0, 8, 'tragos', 1, 'Garapina en Jarra'),
(131, 'Balon de Guarapina', 5.00, 6.00, '2014-02-07', 0, 0, 8, 'tragos', 1, 'Balon de Guarapina'),
(130, 'Cerveza Stela Artois 330cc', 14.00, 16.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza Stela Artois 330cc'),
(129, 'Bicervecina Inca ', 12.00, 15.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Bicervecina Inca '),
(128, 'Cerveza Taqui&ntilde;a 620 mL', 14.00, 16.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza Taqui&ntilde;a 620 mL'),
(127, 'Cerveza Huari 620 mL', 15.00, 17.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza Huari 620 mL'),
(126, 'Cerveza en Chop 15', 8.00, 15.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza en Chop 15'),
(125, 'Cerveza en Chop 10', 8.00, 10.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza en Chop 10'),
(124, 'Cerveza Corona', 10.00, 16.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza Corona'),
(123, 'Coca Cola Zero 1/2 Litro', 5.00, 7.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Coca Cola Zero 1/2 Litro'),
(122, 'Agua Vital Con sin Gas 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 12, 'bebida', 1, 'Agua Vital Con sin Gas 1/2 Litro'),
(121, 'Agua Vital Con Gas 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 12, 'bebida', 1, 'Agua Vital Con Gas 1/2 Litro'),
(120, 'Sprite 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Sprite 1/2 Litro'),
(119, 'Fanta 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Fanta 1/2 Litro'),
(118, 'Coca Cola 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Coca Cola 1/2 Litro'),
(117, 'Sprite 1 Litro', 11.00, 12.00, '2014-02-07', 0, 0, 4, 'bebida', 1, 'Sprite 1 Litro'),
(116, 'Fanta 1 Litro', 11.00, 12.00, '2014-02-07', 0, 0, 4, 'bebida', 1, 'Fanta 1 Litro'),
(115, 'Coca Cola 1Litro', 10.00, 12.00, '2014-02-07', 0, 0, 4, 'bebida', 1, 'Coca Cola 1Litro'),
(114, 'Pato', 50.00, 80.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Pato'),
(113, 'Cordero', 20.00, 25.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Cordero'),
(112, 'Laping', 20.00, 20.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Laping'),
(111, 'Cerdo', 25.00, 30.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Cerdo'),
(110, 'Pollo', 18.00, 20.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'pollo'),
(151, 'Tamarindo', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugos del Valle Tamarindo'),
(152, 'Tumbo', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugos del Valle Tumbo'),
(153, 'Maracuya', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugos del Valle Maracuya'),
(154, 'Jugo de Fruta de Temporada', 20.00, 25.00, '2014-02-07', 0, 0, 30, 'bebida', 1, 'Jugo de Fruta de Temporada'),
(155, 'Casa Real Etiqueta Negra 1 Botella', 100.00, 120.00, '2014-02-07', 0, 0, 2, 'tragos', 1, 'Casa Real Etiqueta Negra 1 Botella'),
(156, 'Casa Real Etiqueta Negra 1/2 Botella', 120.00, 65.00, '2014-02-07', 0, 0, 2, 'tragos', 1, 'Casa Real Etiqueta Negra 1/2 Botella'),
(157, 'Rujero Coleccion Privada 1 Botella', 100.00, 120.00, '2014-02-07', 0, 0, 31, 'tragos', 1, 'Rujero Coleccion Privada 1 Botella'),
(158, 'Rujero Coleccion Privada 1/2 Botella', 120.00, 65.00, '2014-02-07', 0, 0, 31, 'tragos', 1, 'Rujero Coleccion Privada 1/2 Botella'),
(159, 'Los Parrales', 100.00, 120.00, '2014-02-07', 0, 0, 32, 'tragos', 1, 'Los Parrales'),
(160, 'Ron Habana Club 7 a&ntilde;os Botella', 200.00, 220.00, '2014-02-07', 0, 0, 24, 'tragos', 1, 'Ron Habana Club 7 a&ntilde;os Botella'),
(161, 'Vodka Absolut ', 200.00, 200.00, '2014-02-07', 0, 0, 25, 'tragos', 1, 'Vodka Absolut '),
(162, 'Vodka Stolichnaya', 160.00, 180.00, '2014-02-07', 0, 0, 25, 'tragos', 1, 'Vodka Stolichnaya'),
(163, 'Fernet Branca', 160.00, 180.00, '2014-02-07', 0, 0, 33, 'tragos', 1, 'Fernet Branca'),
(164, 'Whisky Chivas Regal 12 A&ntilde;os', 450.00, 500.00, '2014-02-07', 0, 0, 29, 'tragos', 1, 'Whisky Chivas Regal 12 A&ntilde;os'),
(165, 'Whisky Ballantine''s Finest', 300.00, 350.00, '2014-02-07', 0, 0, 29, 'tragos', 1, 'Whisky Ballantine''s Finest'),
(166, 'Whisky Jack Daniel''s', 300.00, 350.00, '2014-02-07', 0, 0, 29, 'tragos', 1, 'Whisky Jack Daniel''s'),
(167, 'Arcangel Cabernet Sauvignon', 150.00, 180.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Arcangel Cabernet Sauvignon'),
(168, 'Vino de Altura C.Sauvignon', 100.00, 120.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Vino de Altura C.Sauvignon'),
(169, 'Cepas de Altura Cavernet Sauvignon', 300.00, 320.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Cepas de Altura Cavernet Sauvignon'),
(170, 'Barbera Tierra de Altura', 100.00, 120.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Barbera Tierra de Altura'),
(171, 'Tierra Dorada C. Sauvignon', 100.00, 120.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Tierra Dorada C. Sauvignon'),
(172, 'Syrah', 100.00, 110.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Syrah'),
(173, 'Malbec', 100.00, 110.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Malbec'),
(174, 'Vino Fino Tinto', 50.00, 60.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Vino Fino Tinto'),
(175, 'Malbec 1/2 Botella', 50.00, 60.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Malbec 1/2 Botella'),
(176, 'Syrah 1/2 Botella', 50.00, 60.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Syrah 1/2 Botella'),
(177, 'Cavernet Sauvignon 1/2 Botella', 50.00, 60.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Cavernet Sauvignon 1/2 Botella'),
(178, 'Tannat - Merlot', 90.00, 100.00, '2014-02-07', 0, 0, 17, 'bebida', 1, 'Tannat - Merlot'),
(179, 'Terru&ntilde;o', 80.00, 90.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Terru&ntilde;o'),
(180, 'La Concepcion Estirpe', 50.00, 60.00, '2014-02-07', 0, 0, 18, 'tragos', 1, 'La Concepcion Estirpe'),
(181, 'La Concepcion Rose Demi-Sec', 180.00, 190.00, '2014-02-07', 0, 0, 18, 'tragos', 1, 'La Concepcion Rose Demi-Sec'),
(182, 'La Concepcion Cabernet Rose', 110.00, 120.00, '2014-02-07', 0, 0, 18, 'tragos', 1, 'La Concepcion Cabernet Rose'),
(183, 'Kolhberg Fino Blanco de Mesa', 50.00, 60.00, '2014-02-07', 0, 0, 18, 'tragos', 1, 'Kolhberg Fino Blanco de Mesa'),
(184, 'Gris Cabernet Sauvignon(Rosado)', 120.00, 130.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Gris Cabernet Sauvignon(Rosado)'),
(185, 'Don Matias Cabernet Sauvignon', 130.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Don Matias Cabernet Sauvignon'),
(186, 'Don Matias Merlot', 130.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Don Matias Merlot'),
(187, 'Don Matias Syrah', 130.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Don Matias Syrah'),
(188, 'Max Reserva Merlot', 180.00, 200.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Max Reserva Merlot'),
(189, 'Max Reserva Carmenere', 180.00, 200.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Max Reserva Carmenere'),
(190, 'Max Reserva Cabernet Sauvignon', 180.00, 200.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Max Reserva Cabernet Sauvignon'),
(191, 'Reserva Cavernet Sauvignon', 130.00, 150.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Cavernet Sauvignon'),
(192, 'Reserva Carmenere', 130.00, 150.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Carmenere'),
(193, 'Reserva Merlot', 130.00, 150.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Merlot'),
(194, 'Reserva Sauvignon Blanc', 130.00, 150.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Sauvignon Blanc'),
(195, 'Late Harvest (Blanco)', 150.00, 160.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Late Harvest (Blanco)'),
(196, 'Tributo Cabernet Sauvignon ', 140.00, 155.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Tributo Cabernet Sauvignon '),
(197, 'Tributo Malbec ', 130.00, 155.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Tributo Malbec '),
(198, 'Tributo Carmenere', 135.00, 155.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Tributo Carmenere'),
(199, 'Reserva Carmenere', 120.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Carmenere'),
(200, 'Reserva Cabernet Sauvignon', 120.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Cabernet Sauvignon'),
(201, 'Reserva Merlot', 120.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Merlot'),
(202, 'Reserva Chardonnay', 120.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Chardonnay'),
(203, 'Reserva Sauvignon Blanc', 120.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Sauvignon Blanc'),
(204, 'Polo Profesional Cabernet', 120.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Polo Profesional Cabernet'),
(205, 'Polo Profesional Malbec', 120.00, 140.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Polo Profesional Malbec'),
(206, 'Polo Profesional Syrah', 120.00, 135.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Polo Profesional Syrah'),
(207, 'Polo Amateur Cabernet', 100.00, 110.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Polo Amateur Cabernet'),
(208, 'Polo Amateur Malbec', 100.00, 110.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Polo Amateur Malbec'),
(209, 'Polo Amateur Syrah', 100.00, 110.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Polo Amateur Syrah'),
(210, 'Polo Amateur Torrontes (Blanco)', 100.00, 110.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Polo Amateur Torrontes (Blanco)'),
(211, 'Tinto Clasico', 50.00, 55.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Tinto Clasico'),
(212, 'Vino Oporto', 45.00, 50.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Vino Oporto'),
(213, 'Blanco Clasico', 45.00, 55.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Blanco Clasico'),
(214, 'Coleccion de Altura', 280.00, 300.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Coleccion de Altura'),
(215, 'Reserva Trivarietal ', 200.00, 220.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Reserva Trivarietal '),
(216, 'Cabernet Sauvignon - Merlot', 130.00, 150.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Cabernet Sauvignon - Merlot'),
(217, 'Malbec-C.Sauvignon', 130.00, 150.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Malbec-C.Sauvignon'),
(218, 'Merlot - Syrah', 130.00, 150.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Merlot - Syrah'),
(219, 'Cabernet Sauvignon ', 110.00, 120.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Cabernet Sauvignon '),
(220, 'Merlot', 110.00, 120.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Merlot'),
(221, 'Riesling', 110.00, 120.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Riesling'),
(222, 'Rose', 110.00, 120.00, '2014-02-07', 0, 0, 17, 'tragos', 1, 'Rose'),
(223, 'Lengua', 18.00, 20.00, '2014-02-09', 0, 0, 1, 'comida	', 1, 'Lengua'),
(224, 'Carne Lomo', 20.00, 30.00, '2014-02-09', 0, 0, 1, 'comida	', 1, 'Carne Lomo'),
(225, 'Conejo', 20.00, 30.00, '2014-02-09', 0, 0, 1, 'comida	', 1, 'Conejo'),
(226, 'Quesillo', 10.00, 15.00, '2014-02-09', 0, 0, 9, 'comida', 1, 'Quesillo\r\n'),
(227, 'Salchicha', 10.00, 15.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Salchicha'),
(228, 'Chu&ntilde;o', 10.00, 15.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Chu&ntilde;o'),
(229, 'Arroz', 10.00, 15.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Arroz'),
(230, 'Papa', 10.00, 15.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Papa'),
(231, 'Platano', 10.00, 15.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Platano'),
(232, 'Ensalada', 10.00, 15.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Ensalada'),
(233, 'Surubi', 20.00, 25.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Ensalada'),
(234, 'Trucha', 25.00, 30.00, '2014-02-09', 0, 0, 1, 'comida', 1, 'Trucha'),
(235, 'Helado', 10.00, 15.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Helado'),
(236, 'Gelatinas', 10.00, 14.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Gelatinas'),
(237, 'Frutas', 10.00, 15.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Frutas'),
(238, 'Cafe', 5.00, 10.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Cafe'),
(239, 'Te', 5.00, 10.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Te'),
(240, 'Coca Cola 1 Litro', 10.00, 12.00, '2014-02-09', 0, 0, 4, 'bebida', 1, 'Coca Cola 1 Litro'),
(241, 'Fanta 1 Litro', 10.00, 12.00, '2014-02-09', 0, 0, 4, 'bebida', 1, 'Fanta 1 Litro'),
(242, 'Sprite 1Litro', 10.00, 12.00, '2014-02-09', 0, 0, 4, 'bebida', 1, 'Sprite 1Litro'),
(243, 'Coca Cola 1/2 Litro', 5.00, 6.00, '2014-02-09', 0, 0, 4, 'bebida', 1, 'Coca Cola 1/2 Litro'),
(244, 'Fanta 1/2 Litro', 5.00, 6.00, '2014-02-09', 0, 0, 4, 'bebida', 1, 'Fanta 1/2 Litro'),
(245, 'Sprite 1/2 Litro', 5.00, 6.00, '2014-02-09', 0, 0, 4, 'bebida', 1, 'Sprite 1/2 Litro'),
(246, 'Agua Vital Con Gas 1/2 Litro', 4.00, 6.00, '2014-02-09', 0, 0, 12, 'bebida', 1, 'Agua Vital Con Gas 1/2 Litro'),
(247, 'Agua Vital Sin Gas 1/2 Litro', 4.00, 6.00, '2014-02-09', 0, 0, 12, 'bebida', 1, 'Agua Vital Sin 1/2 Litro'),
(248, 'Coca Cola Zero  1/2 Litro', 5.00, 7.00, '2014-02-09', 0, 0, 12, 'bebida', 1, 'Coca Cola Zero  1/2 Litro'),
(250, 'Garapina', 20.00, 25.00, '2014-02-09', 0, 0, 22, 'bebida', 1, 'Garapina'),
(251, 'Limon', 5.00, 25.00, '2014-02-10', 0, 0, 22, 'bebida', 1, 'Limon'),
(252, 'Moco Chinchi', 10.00, 25.00, '2014-02-10', 0, 0, 22, 'bebida', 1, 'Moco Chinchi'),
(253, 'Manzana Uva', 15.00, 25.00, '2014-02-10', 0, 0, 22, 'bebida', 1, 'Manzana Uva'),
(254, 'Tequila', 50.00, 60.00, '2014-02-10', 0, 0, 8, 'tragos', 1, 'Tequila'),
(255, 'Ron Blanco', 80.00, 100.00, '2014-02-10', 0, 0, 24, 'tragos', 1, 'Ron Blanco\r\n'),
(256, 'cachaza', 50.00, 70.00, '2014-02-10', 0, 0, 27, 'tragos', 1, 'cachaza'),
(257, 'Ron ABuelo', 60.00, 80.00, '2014-02-10', 0, 0, 24, 'tragos', 1, 'Ron ABuelo'),
(258, 'Casa Real Etqueta Negra', 80.00, 100.00, '2014-02-10', 0, 0, 2, 'tragos', 1, 'Casa Real Etqueta Negra'),
(259, 'Manzana', 10.00, 15.00, '2014-02-10', 0, 0, 7, 'bebida', 1, 'Manzana');

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
  `estado` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=657 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `pedido_id`, `producto_id`, `cantidad`, `precio`, `fecha`, `estado`) VALUES
(480, 72, 3, 2, 60.00, '2013-10-04 19:11:03', 1),
(2, 1, 22, 1, 17.00, '2013-03-24 12:38:11', 1),
(3, 1, 66, 1, 6.00, '2013-03-24 12:38:14', 1),
(4, 1, 14, 1, 60.00, '2013-03-24 12:38:21', 1),
(5, 1, 10, 1, 60.00, '2013-03-24 12:38:24', 1),
(6, 1, 63, 2, 12.00, '2013-03-24 12:38:36', 1),
(7, 2, 18, 1, 12.00, '2013-03-24 12:39:33', 1),
(8, 2, 22, 1, 17.00, '2013-03-24 12:39:36', 1),
(9, 2, 17, 1, 69.00, '2013-03-24 12:39:39', 1),
(10, 2, 13, 1, 60.00, '2013-03-24 12:39:43', 1),
(11, 2, 16, 1, 60.00, '2013-03-24 12:39:44', 1),
(12, 2, 38, 1, 12.00, '2013-03-24 12:39:49', 1),
(13, 2, 32, 1, 8.00, '2013-03-24 12:39:50', 1),
(14, 14, 38, 1, 12.00, '2013-03-24 12:40:00', 1),
(15, 14, 32, 1, 8.00, '2013-03-24 12:40:01', 1),
(16, 14, 12, 1, 62.00, '2013-03-24 12:40:06', 1),
(17, 14, 11, 1, 62.00, '2013-03-24 12:40:09', 1),
(18, 15, 5, 1, 60.00, '2013-03-24 12:40:45', 1),
(19, 15, 22, 1, 17.00, '2013-03-24 12:40:52', 1),
(20, 16, 38, 2, 24.00, '2013-03-24 12:41:30', 1),
(21, 16, 32, 1, 8.00, '2013-03-24 12:41:31', 1),
(22, 16, 21, 1, 15.00, '2013-03-24 12:41:32', 1),
(23, 16, 49, 1, 15.00, '2013-03-24 12:41:40', 1),
(24, 16, 18, 3, 36.00, '2013-03-24 12:41:48', 1),
(25, 14, 61, 1, 15.00, '2013-03-24 12:44:06', 1),
(26, 15, 71, 1, 20.00, '2013-03-24 12:45:13', 1),
(27, 13, 21, 1, 15.00, '2013-03-24 12:45:39', 1),
(28, 13, 32, 1, 8.00, '2013-03-24 12:45:40', 1),
(29, 13, 52, 1, 15.00, '2013-03-24 12:45:51', 1),
(191, 22, 80, 1, 20.00, '2013-03-24 13:53:42', 1),
(31, 13, 22, 1, 17.00, '2013-03-24 12:47:27', 1),
(32, 17, 12, 2, 124.00, '2013-03-24 12:47:57', 1),
(33, 17, 7, 2, 120.00, '2013-03-24 12:48:06', 1),
(34, 17, 30, 1, 50.00, '2013-03-24 12:48:24', 1),
(35, 17, 22, 1, 17.00, '2013-03-24 12:48:30', 1),
(36, 17, 52, 1, 15.00, '2013-03-24 12:48:46', 1),
(37, 17, 51, 1, 15.00, '2013-03-24 12:48:47', 1),
(38, 18, 6, 1, 60.00, '2013-03-24 12:49:28', 1),
(39, 18, 37, 1, 60.00, '2013-03-24 12:49:34', 1),
(40, 18, 52, 1, 15.00, '2013-03-24 12:49:51', 1),
(41, 18, 61, 2, 30.00, '2013-03-24 12:49:59', 1),
(42, 3, 51, 4, 60.00, '2013-03-24 12:50:08', 1),
(43, 3, 52, 2, 30.00, '2013-03-24 12:50:14', 1),
(44, 3, 15, 1, 60.00, '2013-03-24 12:50:26', 1),
(45, 3, 37, 2, 120.00, '2013-03-24 12:50:31', 1),
(46, 3, 33, 1, 60.00, '2013-03-24 12:50:35', 1),
(47, 3, 38, 2, 24.00, '2013-03-24 12:50:39', 1),
(48, 3, 32, 2, 16.00, '2013-03-24 12:50:40', 1),
(49, 19, 86, 1, 15.00, '2013-03-24 12:50:40', 1),
(50, 4, 51, 1, 15.00, '2013-03-24 12:51:41', 1),
(51, 4, 12, 1, 62.00, '2013-03-24 12:51:45', 1),
(52, 4, 9, 1, 60.00, '2013-03-24 12:51:48', 1),
(53, 4, 10, 1, 60.00, '2013-03-24 12:51:51', 1),
(55, 19, 18, 1, 12.00, '2013-03-24 12:53:37', 1),
(56, 19, 27, 1, 60.00, '2013-03-24 12:53:46', 1),
(57, 19, 29, 1, 60.00, '2013-03-24 12:53:48', 1),
(59, 20, 11, 1, 62.00, '2013-03-24 12:55:35', 1),
(60, 20, 8, 1, 60.00, '2013-03-24 12:55:38', 1),
(61, 20, 27, 1, 60.00, '2013-03-24 12:55:45', 1),
(62, 20, 38, 1, 12.00, '2013-03-24 12:55:52', 1),
(63, 20, 32, 1, 8.00, '2013-03-24 12:55:52', 1),
(64, 20, 71, 1, 20.00, '2013-03-24 12:56:10', 1),
(65, 20, 72, 1, 20.00, '2013-03-24 12:56:50', 1),
(353, 4, 43, 1, 10.00, '2013-03-24 17:25:13', 1),
(68, 21, 8, 2, 120.00, '2013-03-24 12:59:24', 1),
(69, 21, 39, 1, 25.00, '2013-03-24 12:59:37', 1),
(70, 9, 39, 2, 50.00, '2013-03-24 12:59:43', 1),
(71, 21, 52, 1, 15.00, '2013-03-24 12:59:46', 1),
(72, 9, 63, 2, 12.00, '2013-03-24 13:00:14', 1),
(73, 16, 12, 1, 62.00, '2013-03-24 13:00:47', 1),
(74, 16, 11, 1, 62.00, '2013-03-24 13:00:52', 1),
(75, 16, 9, 1, 60.00, '2013-03-24 13:00:56', 1),
(76, 16, 10, 1, 60.00, '2013-03-24 13:01:01', 1),
(77, 16, 6, 1, 60.00, '2013-03-24 13:01:07', 1),
(78, 16, 4, 1, 60.00, '2013-03-24 13:01:13', 1),
(82, 22, 12, 3, 186.00, '2013-03-24 13:02:54', 1),
(80, 16, 16, 1, 60.00, '2013-03-24 13:01:20', 1),
(83, 22, 4, 1, 60.00, '2013-03-24 13:03:00', 1),
(84, 22, 37, 1, 60.00, '2013-03-24 13:03:07', 1),
(85, 22, 22, 3, 51.00, '2013-03-24 13:03:28', 1),
(86, 22, 52, 2, 30.00, '2013-03-24 13:03:35', 1),
(87, 23, 12, 3, 186.00, '2013-03-24 13:04:55', 1),
(88, 23, 17, 1, 69.00, '2013-03-24 13:05:04', 1),
(89, 23, 37, 1, 60.00, '2013-03-24 13:05:23', 1),
(90, 23, 22, 1, 17.00, '2013-03-24 13:05:32', 1),
(91, 23, 52, 2, 30.00, '2013-03-24 13:05:41', 1),
(92, 15, 38, 1, 12.00, '2013-03-24 13:07:14', 1),
(93, 15, 32, 1, 8.00, '2013-03-24 13:07:15', 1),
(94, 9, 18, 1, 12.00, '2013-03-24 13:07:44', 1),
(95, 24, 17, 1, 69.00, '2013-03-24 13:09:49', 1),
(96, 24, 37, 2, 120.00, '2013-03-24 13:10:00', 1),
(97, 24, 38, 1, 12.00, '2013-03-24 13:10:48', 1),
(98, 24, 32, 1, 8.00, '2013-03-24 13:10:51', 1),
(99, 24, 21, 1, 15.00, '2013-03-24 13:10:52', 1),
(100, 24, 18, 2, 24.00, '2013-03-24 13:11:36', 1),
(101, 24, 34, 1, 12.00, '2013-03-24 13:11:56', 1),
(102, 12, 49, 3, 45.00, '2013-03-24 13:13:53', 1),
(103, 24, 39, 2, 50.00, '2013-03-24 13:16:03', 1),
(104, 24, 40, 1, 25.00, '2013-03-24 13:16:05', 1),
(105, 25, 20, 1, 12.00, '2013-03-24 13:21:11', 1),
(106, 25, 18, 2, 24.00, '2013-03-24 13:21:12', 1),
(107, 25, 54, 2, 30.00, '2013-03-24 13:21:18', 1),
(108, 26, 6, 1, 60.00, '2013-03-24 13:23:23', 1),
(109, 26, 5, 1, 60.00, '2013-03-24 13:23:27', 1),
(110, 26, 39, 1, 25.00, '2013-03-24 13:23:36', 1),
(111, 26, 71, 1, 20.00, '2013-03-24 13:23:48', 1),
(112, 26, 66, 1, 6.00, '2013-03-24 13:23:58', 1),
(113, 14, 51, 1, 15.00, '2013-03-24 13:26:24', 1),
(114, 27, 49, 1, 15.00, '2013-03-24 13:27:45', 1),
(115, 27, 52, 1, 15.00, '2013-03-24 13:27:50', 1),
(116, 28, 11, 1, 62.00, '2013-03-24 13:28:22', 1),
(117, 28, 7, 1, 60.00, '2013-03-24 13:28:27', 1),
(118, 28, 18, 1, 12.00, '2013-03-24 13:28:38', 1),
(121, 7, 54, 1, 15.00, '2013-03-24 13:32:39', 1),
(122, 7, 22, 3, 51.00, '2013-03-24 13:32:45', 1),
(123, 7, 12, 1, 62.00, '2013-03-24 13:32:48', 1),
(124, 7, 11, 1, 62.00, '2013-03-24 13:32:50', 1),
(125, 7, 10, 1, 60.00, '2013-03-24 13:32:52', 1),
(126, 8, 71, 1, 20.00, '2013-03-24 13:33:39', 1),
(127, 8, 51, 1, 15.00, '2013-03-24 13:33:48', 1),
(128, 8, 9, 1, 60.00, '2013-03-24 13:33:58', 1),
(130, 8, 6, 1, 60.00, '2013-03-24 13:34:07', 1),
(131, 8, 30, 1, 50.00, '2013-03-24 13:34:12', 1),
(132, 8, 32, 1, 8.00, '2013-03-24 13:34:19', 1),
(133, 8, 67, 3, 15.00, '2013-03-24 13:34:31', 1),
(134, 29, 18, 1, 12.00, '2013-03-24 13:34:57', 1),
(135, 9, 4, 2, 120.00, '2013-03-24 13:35:25', 1),
(136, 9, 37, 1, 60.00, '2013-03-24 13:35:28', 1),
(138, 9, 38, 1, 12.00, '2013-03-24 13:36:01', 1),
(139, 9, 22, 3, 51.00, '2013-03-24 13:36:05', 1),
(140, 9, 71, 1, 20.00, '2013-03-24 13:36:09', 1),
(141, 25, 12, 1, 62.00, '2013-03-24 13:36:21', 1),
(142, 25, 13, 1, 60.00, '2013-03-24 13:36:26', 1),
(143, 25, 30, 2, 100.00, '2013-03-24 13:36:41', 1),
(144, 10, 18, 1, 12.00, '2013-03-24 13:37:08', 1),
(145, 10, 52, 1, 15.00, '2013-03-24 13:37:13', 1),
(146, 25, 39, 2, 50.00, '2013-03-24 13:37:15', 1),
(147, 10, 12, 1, 62.00, '2013-03-24 13:37:16', 1),
(148, 25, 40, 2, 50.00, '2013-03-24 13:37:17', 1),
(149, 10, 6, 1, 60.00, '2013-03-24 13:37:20', 1),
(150, 10, 25, 1, 60.00, '2013-03-24 13:37:27', 1),
(151, 27, 11, 1, 62.00, '2013-03-24 13:37:42', 1),
(152, 27, 9, 1, 60.00, '2013-03-24 13:37:45', 1),
(153, 27, 8, 1, 60.00, '2013-03-24 13:37:55', 1),
(154, 30, 11, 1, 62.00, '2013-03-24 13:38:15', 1),
(155, 30, 38, 1, 12.00, '2013-03-24 13:38:21', 1),
(156, 30, 32, 1, 8.00, '2013-03-24 13:38:22', 1),
(157, 30, 18, 1, 12.00, '2013-03-24 13:38:25', 1),
(158, 11, 20, 1, 12.00, '2013-03-24 13:38:39', 1),
(159, 11, 22, 1, 17.00, '2013-03-24 13:38:45', 1),
(172, 31, 99, 1, 50.00, '2013-03-24 13:40:12', 1),
(163, 11, 37, 1, 60.00, '2013-03-24 13:39:22', 1),
(162, 11, 17, 1, 69.00, '2013-03-24 13:39:19', 1),
(165, 31, 16, 1, 60.00, '2013-03-24 13:39:47', 1),
(166, 12, 38, 1, 12.00, '2013-03-24 13:39:50', 1),
(167, 12, 32, 1, 8.00, '2013-03-24 13:39:51', 1),
(168, 12, 12, 1, 62.00, '2013-03-24 13:39:53', 1),
(169, 31, 25, 1, 60.00, '2013-03-24 13:39:57', 1),
(170, 12, 8, 1, 60.00, '2013-03-24 13:39:58', 1),
(171, 12, 6, 1, 60.00, '2013-03-24 13:40:00', 1),
(173, 31, 37, 1, 60.00, '2013-03-24 13:40:18', 1),
(186, 33, 54, 1, 15.00, '2013-03-24 13:47:13', 1),
(175, 13, 18, 1, 12.00, '2013-03-24 13:40:35', 1),
(176, 13, 11, 1, 62.00, '2013-03-24 13:40:39', 1),
(177, 13, 6, 1, 60.00, '2013-03-24 13:40:41', 1),
(231, 30, 82, 1, 20.00, '2013-03-24 14:22:54', 1),
(182, 29, 25, 1, 60.00, '2013-03-24 13:43:00', 1),
(184, 31, 41, 1, 18.00, '2013-03-24 13:44:49', 1),
(187, 33, 60, 2, 30.00, '2013-03-24 13:47:34', 1),
(215, 38, 71, 1, 20.00, '2013-03-24 14:02:20', 1),
(189, 33, 12, 1, 62.00, '2013-03-24 13:52:14', 1),
(190, 33, 15, 4, 240.00, '2013-03-24 13:52:19', 1),
(192, 34, 71, 2, 40.00, '2013-03-24 13:53:51', 1),
(193, 34, 18, 1, 12.00, '2013-03-24 13:54:01', 1),
(194, 35, 18, 1, 12.00, '2013-03-24 13:54:16', 1),
(195, 35, 51, 2, 30.00, '2013-03-24 13:54:22', 1),
(196, 36, 52, 1, 15.00, '2013-03-24 13:54:54', 1),
(197, 5, 49, 1, 15.00, '2013-03-24 13:55:05', 1),
(198, 5, 22, 1, 17.00, '2013-03-24 13:55:30', 1),
(199, 5, 11, 1, 62.00, '2013-03-24 13:55:34', 1),
(200, 5, 8, 1, 60.00, '2013-03-24 13:55:36', 1),
(201, 5, 5, 1, 60.00, '2013-03-24 13:55:39', 1),
(202, 37, 32, 3, 24.00, '2013-03-24 13:55:42', 1),
(203, 5, 32, 1, 8.00, '2013-03-24 13:55:45', 1),
(204, 5, 67, 1, 5.00, '2013-03-24 13:55:48', 1),
(205, 37, 22, 8, 136.00, '2013-03-24 13:56:21', 1),
(206, 37, 71, 1, 20.00, '2013-03-24 13:56:30', 1),
(207, 37, 38, 4, 48.00, '2013-03-24 13:57:39', 1),
(208, 25, 7, 1, 60.00, '2013-03-24 13:58:12', 1),
(209, 34, 11, 1, 62.00, '2013-03-24 13:58:16', 1),
(210, 34, 8, 1, 60.00, '2013-03-24 13:58:20', 1),
(216, 38, 72, 1, 20.00, '2013-03-24 14:02:21', 1),
(212, 34, 13, 2, 120.00, '2013-03-24 13:58:27', 1),
(214, 36, 37, 1, 60.00, '2013-03-24 13:59:05', 1),
(218, 35, 28, 1, 60.00, '2013-03-24 14:04:35', 1),
(219, 35, 30, 1, 50.00, '2013-03-24 14:04:43', 1),
(220, 35, 37, 2, 120.00, '2013-03-24 14:04:48', 1),
(222, 39, 71, 2, 40.00, '2013-03-24 14:07:47', 1),
(223, 5, 100, 1, 35.00, '2013-03-24 14:08:51', 1),
(224, 39, 45, 1, 6.00, '2013-03-24 14:09:50', 1),
(226, 29, 7, 1, 60.00, '2013-03-24 14:11:46', 1),
(230, 30, 80, 1, 20.00, '2013-03-24 14:22:07', 1),
(232, 39, 9, 1, 60.00, '2013-03-24 14:23:31', 1),
(233, 39, 7, 2, 120.00, '2013-03-24 14:23:34', 1),
(234, 39, 15, 1, 60.00, '2013-03-24 14:23:42', 1),
(235, 39, 16, 1, 60.00, '2013-03-24 14:23:44', 1),
(236, 39, 101, 1, 35.00, '2013-03-24 14:23:59', 1),
(237, 41, 71, 1, 20.00, '2013-03-24 14:24:35', 1),
(241, 42, 11, 1, 62.00, '2013-03-24 14:28:11', 1),
(240, 33, 67, 2, 10.00, '2013-03-24 14:27:36', 1),
(242, 42, 71, 1, 20.00, '2013-03-24 14:28:24', 1),
(243, 41, 9, 1, 60.00, '2013-03-24 14:29:45', 1),
(244, 41, 11, 1, 62.00, '2013-03-24 14:29:48', 1),
(245, 41, 25, 1, 60.00, '2013-03-24 14:29:53', 1),
(303, 37, 103, 1, 20.00, '2013-03-24 15:11:34', 1),
(247, 37, 15, 2, 120.00, '2013-03-24 14:35:18', 1),
(248, 37, 12, 2, 124.00, '2013-03-24 14:35:36', 1),
(249, 37, 11, 2, 124.00, '2013-03-24 14:35:42', 1),
(250, 37, 7, 1, 60.00, '2013-03-24 14:35:54', 1),
(251, 37, 4, 3, 180.00, '2013-03-24 14:36:08', 1),
(252, 37, 37, 1, 60.00, '2013-03-24 14:36:31', 1),
(253, 37, 61, 3, 45.00, '2013-03-24 14:39:10', 1),
(254, 43, 22, 2, 34.00, '2013-03-24 14:39:13', 1),
(255, 43, 51, 1, 15.00, '2013-03-24 14:39:27', 1),
(256, 43, 38, 1, 12.00, '2013-03-24 14:39:43', 1),
(257, 43, 32, 1, 8.00, '2013-03-24 14:39:49', 1),
(258, 34, 81, 1, 20.00, '2013-03-24 14:40:57', 1),
(259, 34, 80, 1, 20.00, '2013-03-24 14:41:00', 1),
(260, 34, 75, 1, 7.00, '2013-03-24 14:41:02', 1),
(261, 25, 22, 2, 34.00, '2013-03-24 14:41:41', 1),
(262, 33, 17, 1, 69.00, '2013-03-24 14:42:11', 1),
(263, 44, 18, 1, 12.00, '2013-03-24 14:43:01', 1),
(275, 45, 49, 2, 30.00, '2013-03-24 14:47:30', 1),
(270, 37, 18, 3, 36.00, '2013-03-24 14:45:57', 1),
(266, 42, 38, 1, 12.00, '2013-03-24 14:44:01', 1),
(267, 42, 32, 1, 8.00, '2013-03-24 14:44:08', 1),
(269, 43, 8, 2, 120.00, '2013-03-24 14:45:44', 1),
(274, 45, 51, 1, 15.00, '2013-03-24 14:47:28', 1),
(273, 45, 18, 2, 24.00, '2013-03-24 14:47:21', 1),
(276, 45, 61, 2, 30.00, '2013-03-24 14:47:42', 1),
(277, 44, 22, 1, 17.00, '2013-03-24 14:48:51', 1),
(278, 44, 25, 1, 60.00, '2013-03-24 14:49:10', 1),
(279, 44, 30, 1, 50.00, '2013-03-24 14:49:17', 1),
(284, 33, 51, 1, 15.00, '2013-03-24 14:55:24', 1),
(287, 31, 66, 1, 6.00, '2013-03-24 14:56:16', 1),
(282, 46, 25, 1, 60.00, '2013-03-24 14:50:02', 1),
(283, 46, 72, 2, 40.00, '2013-03-24 14:50:22', 1),
(286, 47, 86, 17, 255.00, '2013-03-24 14:56:01', 1),
(288, 45, 12, 1, 62.00, '2013-03-24 14:56:20', 1),
(289, 45, 11, 1, 62.00, '2013-03-24 14:56:23', 1),
(290, 45, 10, 1, 60.00, '2013-03-24 14:56:50', 1),
(291, 45, 8, 2, 120.00, '2013-03-24 14:56:55', 1),
(292, 45, 7, 1, 60.00, '2013-03-24 14:57:01', 1),
(293, 45, 5, 1, 60.00, '2013-03-24 14:57:06', 1),
(295, 48, 22, 1, 17.00, '2013-03-24 15:00:58', 1),
(296, 39, 103, 1, 20.00, '2013-03-24 15:02:36', 1),
(299, 49, 49, 1, 15.00, '2013-03-24 15:08:14', 1),
(298, 47, 103, 2, 40.00, '2013-03-24 15:03:23', 1),
(300, 49, 52, 1, 15.00, '2013-03-24 15:08:15', 1),
(301, 48, 8, 1, 60.00, '2013-03-24 15:08:39', 1),
(302, 48, 11, 1, 62.00, '2013-03-24 15:09:24', 1),
(304, 37, 52, 1, 15.00, '2013-03-24 15:11:49', 1),
(305, 37, 63, 2, 12.00, '2013-03-24 15:11:54', 1),
(306, 37, 33, 3, 180.00, '2013-03-24 15:12:23', 1),
(307, 47, 18, 1, 12.00, '2013-03-24 15:13:07', 1),
(308, 50, 18, 1, 12.00, '2013-03-24 15:13:35', 1),
(309, 50, 23, 2, 32.00, '2013-03-24 15:13:38', 1),
(311, 49, 8, 1, 60.00, '2013-03-24 15:16:34', 1),
(312, 49, 7, 2, 120.00, '2013-03-24 15:16:46', 1),
(313, 46, 104, 1, 40.00, '2013-03-24 15:17:11', 1),
(314, 46, 5, 2, 120.00, '2013-03-24 15:17:15', 1),
(315, 50, 8, 1, 60.00, '2013-03-24 15:17:59', 1),
(317, 50, 6, 1, 60.00, '2013-03-24 15:18:04', 1),
(319, 51, 37, 1, 60.00, '2013-03-24 15:25:06', 1),
(320, 50, 67, 2, 10.00, '2013-03-24 15:25:50', 1),
(322, 47, 8, 3, 180.00, '2013-03-24 15:37:11', 1),
(323, 47, 7, 4, 240.00, '2013-03-24 15:37:18', 1),
(324, 47, 6, 4, 240.00, '2013-03-24 15:37:24', 1),
(325, 47, 5, 1, 60.00, '2013-03-24 15:37:31', 1),
(326, 47, 15, 1, 60.00, '2013-03-24 15:37:37', 1),
(327, 47, 37, 1, 60.00, '2013-03-24 15:37:45', 1),
(328, 47, 25, 1, 60.00, '2013-03-24 15:38:00', 1),
(332, 51, 32, 1, 8.00, '2013-03-24 15:51:30', 1),
(334, 48, 23, 1, 16.00, '2013-03-24 15:52:36', 1),
(335, 43, 80, 1, 20.00, '2013-03-24 15:56:25', 1),
(341, 43, 106, 1, 5.00, '2013-03-24 16:24:05', 1),
(337, 45, 29, 1, 50.00, '2013-03-24 16:00:31', 1),
(338, 44, 105, 1, 15.00, '2013-03-24 16:02:38', 1),
(342, 52, 53, 2, 30.00, '2013-03-24 16:30:42', 1),
(343, 52, 23, 1, 16.00, '2013-03-24 16:31:12', 1),
(344, 52, 86, 1, 15.00, '2013-03-24 16:31:18', 1),
(345, 52, 41, 1, 18.00, '2013-03-24 16:31:40', 1),
(347, 52, 51, 1, 15.00, '2013-03-24 16:54:11', 1),
(348, 6, 51, 1, 15.00, '2013-03-24 17:18:25', 1),
(349, 6, 11, 1, 62.00, '2013-03-24 17:20:20', 1),
(350, 6, 30, 1, 50.00, '2013-03-24 17:20:44', 1),
(351, 6, 21, 1, 15.00, '2013-03-24 17:20:51', 1),
(352, 6, 38, 1, 12.00, '2013-03-24 17:21:31', 1),
(354, 54, 11, 1, 62.00, '2013-03-24 17:29:00', 1),
(355, 54, 37, 1, 60.00, '2013-03-24 17:29:09', 1),
(356, 54, 33, 1, 60.00, '2013-03-24 17:29:10', 1),
(357, 54, 52, 2, 30.00, '2013-03-24 17:30:14', 1),
(358, 55, 52, 2, 30.00, '2013-03-24 17:31:27', 1),
(359, 55, 37, 1, 60.00, '2013-03-24 17:32:15', 1),
(360, 55, 33, 1, 60.00, '2013-03-24 17:32:17', 1),
(361, 55, 11, 1, 62.00, '2013-03-24 17:38:50', 1),
(363, 56, 12, 1, 62.00, '2013-08-20 10:28:17', 1),
(364, 56, 104, 1, 40.00, '2013-08-20 10:28:35', 1),
(365, 57, 62, 1, 1.00, '2013-08-20 10:30:34', 1),
(366, 57, 63, 1, 6.00, '2013-08-20 10:30:35', 1),
(367, 57, 64, 1, 5.00, '2013-08-20 10:30:37', 1),
(368, 57, 21, 1, 15.00, '2013-08-20 10:30:41', 1),
(369, 57, 38, 1, 12.00, '2013-08-20 10:30:43', 1),
(370, 57, 28, 1, 60.00, '2013-08-20 10:30:47', 1),
(371, 57, 16, 1, 60.00, '2013-08-20 10:30:52', 1),
(372, 58, 22, 1, 17.00, '2013-08-20 10:32:00', 1),
(373, 58, 66, 1, 6.00, '2013-08-20 10:32:24', 1),
(374, 58, 7, 1, 60.00, '2013-08-20 10:32:30', 1),
(375, 59, 4, 1, 60.00, '2013-08-20 10:34:06', 1),
(376, 59, 3, 1, 60.00, '2013-08-20 10:34:11', 1),
(377, 59, 20, 1, 12.00, '2013-08-20 10:34:15', 1),
(378, 60, 61, 1, 15.00, '2013-08-20 10:49:29', 1),
(379, 60, 53, 1, 15.00, '2013-08-20 10:49:32', 1),
(380, 60, 28, 1, 60.00, '2013-08-20 10:49:36', 1),
(381, 60, 102, 1, 6.00, '2013-08-20 10:50:16', 1),
(382, 60, 67, 1, 5.00, '2013-08-20 10:50:18', 1),
(383, 61, 3, 2, 120.00, '2013-08-21 19:53:30', 1),
(384, 61, 44, 1, 16.00, '2013-08-21 19:53:33', 1),
(385, 62, 16, 1, 60.00, '2013-08-27 16:12:22', 1),
(386, 62, 41, 1, 18.00, '2013-08-27 16:12:46', 1),
(387, 65, 104, 1, 40.00, '2013-08-28 15:47:44', 1),
(522, 76, 3, 1, 60.00, '2013-10-05 21:21:36', 1),
(515, 74, 4, 1, 60.00, '2013-10-05 20:16:57', 1),
(518, 74, 5, 1, 60.00, '2013-10-05 20:44:02', 1),
(438, 71, 5, 1, 60.00, '2013-10-03 23:52:10', 1),
(521, 74, 3, 1, 60.00, '2013-10-05 21:15:12', 1),
(500, 73, 3, 1, 60.00, '2013-10-04 22:25:59', 1),
(497, 73, 3, 1, 60.00, '2013-10-04 22:24:08', 1),
(499, 73, 3, 1, 60.00, '2013-10-04 22:24:42', 1),
(501, 73, 3, 1, 60.00, '2013-10-04 22:26:01', 1),
(502, 73, 4, 1, 60.00, '2013-10-04 22:26:03', 1),
(435, 71, 3, 3, 60.00, '2013-10-04 19:11:36', 1),
(503, 73, 4, 1, 60.00, '2013-10-04 22:26:04', 1),
(520, 74, 5, 1, 60.00, '2013-10-05 21:07:05', 1),
(481, 71, 4, 1, 60.00, '2013-10-04 19:11:20', 1),
(508, 73, 4, 1, 60.00, '2013-10-04 23:29:45', 1),
(523, 76, 3, 1, 60.00, '2013-10-05 21:21:39', 1),
(524, 75, 3, 1, 60.00, '2013-10-05 21:29:50', 1),
(525, 75, 3, 1, 60.00, '2013-10-05 21:29:52', 1),
(531, 76, 3, 1, 60.00, '2013-10-05 21:37:51', 1),
(530, 75, 4, 1, 60.00, '2013-10-05 21:35:43', 1),
(528, 75, 4, 1, 60.00, '2013-10-05 21:35:26', 1),
(529, 75, 4, 1, 60.00, '2013-10-05 21:35:28', 1),
(532, 77, 5, 1, 60.00, '2013-10-05 21:57:23', 1),
(538, 77, 5, 1, 60.00, '2013-10-05 21:59:38', 1),
(537, 77, 5, 1, 60.00, '2013-10-05 21:59:29', 1),
(535, 77, 5, 1, 60.00, '2013-10-05 21:57:33', 1),
(536, 77, 5, 1, 60.00, '2013-10-05 21:57:53', 1),
(539, 78, 3, 1, 60.00, '2013-10-07 18:51:51', 1),
(540, 78, 3, 1, 60.00, '2013-10-07 18:51:53', 1),
(542, 79, 4, 1, 60.00, '2013-10-07 19:32:05', 1),
(543, 79, 3, 1, 60.00, '2013-10-07 19:32:07', 1),
(544, 79, 4, 1, 60.00, '2013-10-07 19:32:10', 1),
(545, 79, 5, 1, 60.00, '2013-10-07 19:32:12', 1),
(546, 79, 5, 1, 60.00, '2013-10-07 19:32:14', 1),
(547, 79, 3, 1, 60.00, '2013-10-07 19:33:17', 1),
(548, 79, 3, 1, 60.00, '2013-10-07 19:33:49', 1),
(549, 106, 3, 1, 60.00, '2013-10-21 19:49:25', 1),
(550, 106, 3, 1, 60.00, '2013-10-21 19:49:27', 1),
(551, 106, 3, 1, 60.00, '2013-10-21 19:49:28', 1),
(560, 125, 3, 1, 60.00, '2013-11-20 23:38:23', 1),
(553, 124, 3, 1, 60.00, '2013-11-20 23:18:54', 1),
(554, 124, 3, 1, 60.00, '2013-11-20 23:18:58', 1),
(555, 124, 3, 1, 60.00, '2013-11-20 23:18:59', 1),
(556, 124, 4, 1, 60.00, '2013-11-20 23:19:00', 1),
(557, 124, 4, 1, 60.00, '2013-11-20 23:19:02', 1),
(558, 124, 3, 1, 60.00, '2013-11-20 23:19:50', 1),
(561, 125, 4, 1, 60.00, '2013-11-20 23:38:25', 1),
(562, 125, 4, 1, 60.00, '2013-11-20 23:38:27', 1),
(591, 135, 3, 1, 60.00, '2013-11-23 21:08:52', 1),
(580, 133, 3, 1, 60.00, '2013-11-21 20:28:40', 1),
(576, 132, 4, 1, 60.00, '2013-11-21 20:26:36', 1),
(575, 132, 4, 1, 60.00, '2013-11-21 20:26:35', 1),
(573, 131, 3, 1, 60.00, '2013-11-21 20:20:25', 1),
(579, 133, 5, 1, 60.00, '2013-11-21 20:28:36', 1),
(578, 133, 5, 1, 60.00, '2013-11-21 20:28:35', 1),
(587, 133, 3, 1, 60.00, '2013-11-21 22:47:10', 0),
(574, 132, 3, 1, 60.00, '2013-11-21 20:26:33', 1),
(582, 134, 5, 1, 60.00, '2013-11-21 20:46:16', 1),
(583, 134, 4, 1, 60.00, '2013-11-21 20:46:18', 1),
(584, 134, 3, 1, 60.00, '2013-11-21 20:46:18', 1),
(598, 135, 3, 1, 60.00, '2013-11-23 21:54:58', 1),
(600, 136, 4, 1, 60.00, '2013-11-23 21:59:17', 1),
(599, 135, 3, 1, 60.00, '2013-11-23 21:57:45', 1),
(601, 136, 5, 1, 60.00, '2013-11-23 21:59:17', 1),
(602, 136, 5, 1, 60.00, '2013-11-23 21:59:20', 1),
(603, 136, 3, 1, 60.00, '2013-11-23 22:00:09', 1),
(605, 137, 5, 1, 60.00, '2013-11-23 22:13:21', 1),
(606, 137, 5, 1, 60.00, '2013-11-23 22:13:22', 1),
(607, 137, 3, 1, 60.00, '2013-11-23 22:14:08', 1),
(608, 135, 4, 1, 60.00, '2013-11-23 22:34:19', 0),
(609, 135, 4, 1, 60.00, '2013-11-23 22:51:51', 0),
(611, 138, 23, 1, 16.00, '2013-12-13 21:00:50', 1),
(612, 138, 23, 1, 16.00, '2013-12-13 21:00:54', 1),
(613, 138, 23, 1, 16.00, '2013-12-13 21:00:55', 1),
(614, 138, 23, 1, 16.00, '2013-12-13 21:00:56', 1),
(615, 138, 23, 1, 16.00, '2013-12-13 21:01:17', 1),
(616, 143, 26, 1, 60.00, '2013-12-21 00:57:05', 1),
(617, 146, 26, 1, 60.00, '2014-02-03 22:27:56', 1),
(618, 147, 26, 1, 60.00, '2014-02-04 00:38:58', 1),
(619, 150, 250, 1, 120.00, '2014-02-06 21:50:57', 1),
(620, 150, 254, 1, 120.00, '2014-02-06 21:50:59', 1),
(621, 150, 253, 1, 65.00, '2014-02-06 21:51:00', 1),
(622, 150, 251, 1, 65.00, '2014-02-06 21:52:15', 1),
(623, 150, 251, 1, 65.00, '2014-02-06 21:52:17', 1),
(624, 150, 251, 1, 65.00, '2014-02-06 21:52:19', 1),
(625, 150, 251, 1, 65.00, '2014-02-06 21:52:21', 1),
(626, 150, 251, 1, 65.00, '2014-02-06 21:54:03', 1),
(627, 152, 148, 1, 15.00, '2014-02-07 16:25:29', 0),
(628, 152, 149, 1, 6.00, '2014-02-07 16:25:29', 0),
(629, 152, 148, 1, 15.00, '2014-02-07 16:25:33', 0),
(630, 152, 148, 1, 15.00, '2014-02-07 16:25:35', 0),
(631, 152, 148, 1, 15.00, '2014-02-07 16:25:35', 0),
(632, 152, 148, 1, 15.00, '2014-02-07 16:25:37', 0),
(633, 152, 148, 1, 15.00, '2014-02-07 16:25:37', 0),
(634, 152, 148, 1, 15.00, '2014-02-07 16:25:38', 0),
(635, 152, 148, 1, 15.00, '2014-02-07 16:25:39', 0),
(636, 152, 148, 1, 15.00, '2014-02-07 16:25:39', 0),
(637, 152, 148, 1, 15.00, '2014-02-07 16:25:40', 0),
(638, 155, 269, 1, 30.00, '2014-02-10 00:55:16', 0),
(639, 155, 266, 1, 25.00, '2014-02-10 00:55:19', 0),
(640, 155, 263, 1, 25.00, '2014-02-10 00:55:21', 0),
(641, 155, 264, 1, 25.00, '2014-02-10 00:55:22', 0),
(642, 155, 265, 1, 25.00, '2014-02-10 00:55:23', 0),
(643, 155, 268, 1, 30.00, '2014-02-10 00:55:25', 0),
(644, 155, 267, 1, 35.00, '2014-02-10 00:55:25', 0),
(645, 154, 150, 1, 25.00, '2014-02-10 16:10:57', 0),
(646, 154, 150, 1, 25.00, '2014-02-10 16:11:02', 0),
(647, 154, 150, 1, 25.00, '2014-02-10 16:11:03', 0),
(648, 154, 150, 1, 25.00, '2014-02-10 16:11:05', 0),
(649, 154, 150, 1, 25.00, '2014-02-10 16:11:06', 0),
(650, 154, 150, 1, 25.00, '2014-02-10 16:11:07', 0),
(651, 154, 151, 1, 25.00, '2014-02-10 16:12:24', 0),
(652, 154, 150, 1, 25.00, '2014-02-10 16:13:09', 0),
(653, 154, 152, 1, 25.00, '2014-02-10 16:13:10', 0),
(654, 154, 151, 1, 25.00, '2014-02-10 16:13:11', 0),
(655, 154, 234, 1, 25.00, '2014-02-10 16:13:11', 0),
(656, 154, 235, 1, 25.00, '2014-02-10 16:13:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lugares`
--

INSERT INTO `lugares` (`id`, `nombre`, `descripcion`, `estado`, `tipo`) VALUES
(1, 'Cocina', 'Departamento de cocina', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mesas`
--

CREATE TABLE IF NOT EXISTS `mesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `posix` int(7) DEFAULT NULL,
  `posiy` int(7) DEFAULT NULL,
  `posix2` int(7) DEFAULT NULL,
  `posiy2` int(7) DEFAULT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  `ambiente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `mesas`
--

INSERT INTO `mesas` (`id`, `numero`, `posix`, `posiy`, `posix2`, `posiy2`, `pedido_id`, `ambiente_id`) VALUES
(1, 1, 705, 207, 680, 71, NULL, 1),
(2, 1, 384, 174, 781, 365, NULL, 2),
(5, 2, 852, 213, 827, -37, NULL, 1),
(6, 1, 901, 160, NULL, NULL, NULL, 3),
(7, 2, 900, 293, NULL, NULL, NULL, 3),
(8, 3, 894, 435, NULL, NULL, NULL, 3),
(9, 4, 758, 439, NULL, NULL, NULL, 3),
(10, 5, 755, 296, NULL, NULL, NULL, 3),
(11, 6, 753, 162, NULL, NULL, NULL, 3),
(12, 3, 706, 357, 681, -7, NULL, 1),
(13, 4, 850, 360, 825, -118, NULL, 1),
(14, 2, 549, 183, 524, -67, NULL, 2),
(15, 3, 384, 310, 359, -54, 155, 2),
(16, 5, 490, 218, 465, -374, NULL, 1),
(17, 6, 323, 213, 298, -493, NULL, 1),
(18, 7, 106, 211, 81, -609, 154, 1),
(19, 8, 101, 363, 76, -571, NULL, 1),
(20, 4, 552, 308, 527, -170, NULL, 2),
(21, 5, 782, 198, 757, -394, NULL, 2),
(22, 6, 80, 160, 756, -341, NULL, 2);

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
-- Table structure for table `objetos`
--

CREATE TABLE IF NOT EXISTS `objetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posix` int(7) DEFAULT NULL,
  `posiy` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `objetos`
--

INSERT INTO `objetos` (`id`, `posix`, `posiy`) VALUES
(1, 131, 64),
(2, 851, -111);

-- --------------------------------------------------------

--
-- Table structure for table `parametrosfacturas`
--

CREATE TABLE IF NOT EXISTS `parametrosfacturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nit` varchar(30) DEFAULT NULL,
  `numero_autorizacion` varchar(30) DEFAULT NULL,
  `llave` varchar(500) DEFAULT NULL,
  `fechalimite` date DEFAULT NULL,
  `otro3` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parametrosfacturas`
--

INSERT INTO `parametrosfacturas` (`id`, `nit`, `numero_autorizacion`, `llave`, `fechalimite`, `otro3`) VALUES
(1, '3817445015', '29040011007', 'A3Fs4s$)2cvD(eY667A5C4A2rsdf53kw9654E2B23s24df35F5', '2013-08-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `mesa` smallint(6) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '0' COMMENT '0 creado, 1 impreso y cosina, 2 servido, 3 pagado, 4 facturado, 5 anadido, 6 cancelado',
  `total` float(15,2) NOT NULL DEFAULT '0.00',
  `descuento` decimal(10,2) DEFAULT NULL,
  `monto` float(15,2) NOT NULL DEFAULT '0.00',
  `fechac` varchar(10) NOT NULL,
  `created` date DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=156 ;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `user_id`, `fecha`, `mesa`, `estado`, `total`, `descuento`, `monto`, `fechac`, `created`, `modified`, `observaciones`) VALUES
(155, 8, '2014-02-09 13:30:03', 2, 0, 0.00, NULL, 0.00, '', '2014-02-09', '2014-02-09 13:30:03', NULL),
(154, 8, '2014-02-09 02:50:17', 1, 0, 0.00, NULL, 0.00, '', '2014-02-09', '2014-02-09 02:50:18', NULL),
(153, 8, '2014-02-08 02:48:49', 1, 0, 0.00, NULL, 0.00, '', '2014-02-08', '2014-02-08 02:48:49', NULL),
(147, 8, '2014-02-04 00:38:50', 1, 0, 0.00, NULL, 0.00, '', '2014-02-04', '2014-02-04 00:38:50', NULL),
(148, 8, '2014-02-06 20:16:11', 1, 0, 0.00, NULL, 0.00, '', '2014-02-06', '2014-02-06 20:16:11', NULL),
(149, 8, '2014-02-06 20:52:26', 2, 0, 0.00, NULL, 0.00, '', '2014-02-06', '2014-02-06 20:52:26', NULL),
(150, 8, '2014-02-06 20:52:31', 0, 0, 630.00, NULL, 0.00, '', '2014-02-06', '2014-02-06 21:54:27', NULL),
(151, 8, '2014-02-07 15:50:01', 1, 0, 0.00, NULL, 0.00, '', '2014-02-07', '2014-02-07 15:50:01', NULL),
(152, 8, '2014-02-07 15:50:05', 2, 0, 0.00, NULL, 0.00, '', '2014-02-07', '2014-02-07 15:50:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pedidosobservaciones`
--

CREATE TABLE IF NOT EXISTS `pedidosobservaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `productosobservacione_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `pedidosobservaciones`
--

INSERT INTO `pedidosobservaciones` (`id`, `pedido_id`, `item_id`, `producto_id`, `productosobservacione_id`) VALUES
(1, 78, 539, 3, 3),
(2, 78, 540, 3, 2),
(4, 79, 542, 4, 5),
(5, 79, 544, 4, 4),
(6, 79, 543, 3, 2),
(7, 106, 549, 3, 2),
(8, 106, 549, 3, 3),
(9, 106, 550, 3, 1),
(10, 106, 550, 3, 2),
(11, 106, 551, 3, 2),
(12, 125, 561, 4, 4),
(18, 134, 584, 3, 2),
(19, 134, 585, 3, 2),
(20, 134, 585, 3, 3),
(21, 134, 583, 4, 4),
(22, 134, 583, 4, 5),
(30, 135, 591, 3, 1),
(31, 135, 591, 3, 3),
(32, 137, 607, 3, 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `porciones`
--

INSERT INTO `porciones` (`id`, `producto_id`, `insumo_id`, `cantidad`) VALUES
(2, 3, 11, 2),
(3, 13, 1, 2),
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
(134, 3, 58, 1),
(31, 4, 3, 1),
(32, 4, 4, 1),
(33, 5, 3, 1),
(34, 5, 1, 1),
(35, 6, 2, 1),
(36, 6, 4, 1),
(37, 8, 2, 1),
(38, 8, 3, 1),
(39, 7, 2, 1),
(40, 7, 1, 1),
(41, 10, 5, 1),
(42, 10, 4, 1),
(43, 11, 5, 1),
(44, 11, 3, 1),
(45, 12, 5, 1),
(47, 9, 5, 1),
(48, 9, 1, 1),
(72, 14, 4, 2),
(50, 13, 3, 2),
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
(65, 54, 16, 1),
(121, 73, 87, 1),
(71, 55, 43, 1),
(73, 37, 1, 2),
(142, 114, 82, 2),
(133, 3, 99, 2),
(77, 59, 1, 1),
(78, 60, 54, 1),
(79, 27, 55, 4),
(80, 25, 1, 1),
(81, 25, 55, 3),
(82, 28, 1, 2),
(83, 29, 56, 1),
(84, 39, 57, 1),
(85, 61, 20, 1),
(86, 62, 61, 1),
(87, 63, 58, 1),
(88, 64, 59, 1),
(89, 65, 60, 1),
(90, 38, 21, 1),
(91, 30, 56, 1),
(92, 66, 20, 1),
(93, 67, 63, 1),
(143, 115, 97, 1),
(95, 31, 56, 1),
(123, 99, 83, 1),
(97, 74, 64, 1),
(98, 71, 65, 1),
(99, 72, 65, 1),
(100, 75, 64, 1),
(101, 83, 64, 1),
(102, 82, 64, 1),
(103, 81, 64, 1),
(104, 80, 64, 1),
(105, 79, 64, 1),
(106, 78, 64, 1),
(107, 77, 66, 1),
(108, 76, 67, 2),
(109, 33, 59, 1),
(110, 86, 12, 1),
(111, 87, 71, 1),
(112, 90, 72, 1),
(113, 91, 73, 1),
(114, 92, 74, 1),
(115, 93, 75, 1),
(116, 94, 76, 1),
(117, 95, 77, 1),
(118, 96, 78, 1),
(119, 97, 79, 1),
(120, 98, 80, 1),
(122, 40, 84, 1),
(124, 100, 88, 1),
(125, 101, 90, 1),
(126, 102, 91, 1),
(127, 103, 87, 1),
(128, 104, 1, 1),
(129, 105, 92, 1),
(130, 106, 94, 1),
(131, 107, 95, 1),
(132, 43, 86, 1),
(135, 3, 59, 1),
(136, 108, 99, 1),
(137, 109, 99, 1),
(144, 11, 16, 1),
(148, 117, 98, 1),
(147, 116, 5, 12);

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
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=271 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`, `estado`, `insumo_id`, `orden`) VALUES
(14, 'Pato', '', 69.00, 1, 1, 114, 0),
(13, 'Lechon', '', 60.00, 1, 1, 111, 0),
(3, 'Pato con Lechon', '', 62.00, 2, 1, 114, 0),
(4, 'Pato con Lapping', '', 62.00, 2, 1, 114, 0),
(5, 'Pato con Cordero', '', 60.00, 2, 1, 114, 0),
(6, 'Pato con Pollo', '', 60.00, 2, 1, 114, 0),
(7, 'Lechon con Lapping', '', 60.00, 2, 1, 111, 0),
(8, 'Lechon con Pollo', '', 60.00, 2, 1, 111, 0),
(9, 'Pato con Cordero', '', 60.00, 2, 1, 114, 0),
(10, 'Lapping con Pollo', '', 60.00, 2, 1, 112, 0),
(11, 'Lapping con Cordero', '', 60.00, 2, 1, 112, 0),
(12, 'Cordero con Pollo', '', 60.00, 2, 1, 113, 0),
(15, 'Pollo', '', 60.00, 1, 1, 110, 0),
(16, 'Cordero', '', 60.00, 1, 1, 113, 0),
(17, 'Lapping', '', 60.00, 1, 1, 112, 0),
(18, 'Coca Cola 1 Litro', '', 12.00, 43, 1, 115, 0),
(19, 'Chanka de Pollo', '', 50.00, 5, 0, 110, 0),
(20, 'Fanta 1 Litro', '', 12.00, 43, 1, 116, 0),
(21, 'Kallu', '', 15.00, 7, 1, 226, 0),
(22, 'Huari', '', 17.00, 11, 1, 9, 0),
(23, 'Pace&ntilde;a', '', 16.00, 11, 1, 10, 0),
(24, 'Salchipapas', 'sadf', 25.00, 8, 0, 227, 0),
(25, 'Pollo', '', 60.00, 3, 1, 110, 0),
(151, 'MARACUYA', 'REFRESCOS', 25.00, 46, 0, 153, 0),
(27, 'Lengua', '', 60.00, 3, 1, 223, 0),
(26, 'Mixto', '', 60.00, 3, 0, 223, 0),
(251, 'Casa Real Etiqueta Negra 1/2', NULL, 65.00, 65, 1, 156, 0),
(30, 'Pique', '', 70.00, 5, 1, 224, 0),
(31, 'Lambreado', '', 50.00, 5, 1, 225, 0),
(32, 'Quesillo', '', 8.00, 7, 1, 24, 0),
(34, 'Sprite 1 Litro', '', 12.00, 43, 1, 117, 0),
(250, 'Casa Real Etiqueta Negra', NULL, 120.00, 65, 1, 155, 0),
(249, 'whisky en las Rocas', NULL, 35.00, 47, 1, 146, 0),
(38, 'Mote de Haba', '', 12.00, 7, 1, 226, 0),
(39, 'Pollo Frito', '', 25.00, 8, 1, 110, 0),
(245, 'Margarita', NULL, 18.00, 47, 1, 254, 0),
(41, 'Coca Cola 1/2 Litro', '', 6.00, 43, 1, 118, 0),
(42, 'Fanta 1/2 Litro', '', 6.00, 43, 1, 119, 0),
(44, 'Taqui&ntilde;a', 'cerveza cochabambina', 16.00, 11, 1, 11, 0),
(45, 'Sprite 1/2 Litro', '', 6.00, 43, 1, 120, 0),
(47, 'Agua Vital C/G 1/2 Litro ', NULL, 6.00, 43, 0, 246, 0),
(48, 'Agua Vital S/G 1/ 2 Litro', '', 6.00, 43, 1, 247, 0),
(49, 'Durazno', NULL, 15.00, 15, 1, 14, 0),
(50, 'Guayaba', NULL, 15.00, 15, 1, 19, 0),
(51, 'Guinda', '', 15.00, 15, 1, 17, 0),
(52, 'Manzana', NULL, 15.00, 15, 1, 15, 0),
(53, 'Tamarindo', NULL, 15.00, 15, 1, 18, 0),
(54, 'Tumbo', NULL, 15.00, 15, 1, 16, 0),
(240, 'Mojito', NULL, 18.00, 47, 1, 255, 0),
(241, 'Pisco Sour', NULL, 18.00, 47, 1, 258, 0),
(247, 'Margarita', NULL, 18.00, 47, 1, 254, 0),
(246, 'Caipiri&ntilde;a', NULL, 15.00, 47, 1, 256, 0),
(58, 'Arcangel Cabernet Sauvignon', '', 180.00, 23, 1, 167, 0),
(60, 'Bi-cervecina Inca', NULL, 15.00, 11, 1, 54, 0),
(61, 'Garapina en Jarra', NULL, 15.00, 12, 1, 20, 0),
(62, 'Porcion de Chu&ntilde;o', '', 5.00, 19, 1, 228, 0),
(63, 'Porcion de Arroz', NULL, 5.00, 19, 1, 229, 0),
(64, 'Porcion de Papa', NULL, 5.00, 19, 1, 230, 0),
(65, 'Porcion de Platano', NULL, 5.00, 19, 1, 231, 0),
(67, 'Porcion de Ensalada', NULL, 5.00, 19, 1, 232, 0),
(196, 'GRIS CABERNET SAUVIGNON ROSADO', NULL, 130.00, 20, 1, 184, 0),
(195, 'LATE HARVEST BLANCO', NULL, 200.00, 56, 1, 195, 0),
(194, 'RESERVA SAUVIGNON BLANC', NULL, 200.00, 56, 1, 194, 0),
(192, 'RESERVA CARMENERE', NULL, 200.00, 56, 1, 192, 0),
(193, 'RESERVA MERLOT', NULL, 200.00, 56, 1, 193, 0),
(191, 'RESERVA CABERNET SAUVIGNON', NULL, 200.00, 56, 1, 191, 0),
(189, 'MAX RESERVA CARMENERE', NULL, 200.00, 56, 1, 189, 0),
(190, 'MAX RESERVA CABERNET SAUVIGNON', NULL, 200.00, 56, 1, 190, 0),
(86, 'Cordillera', NULL, 15.00, 11, 1, 12, 0),
(90, 'Vino de Altura C.Sauvignon', NULL, 320.00, 23, 1, 168, 0),
(91, 'Cepas de Altura C.Sauvignon', NULL, 120.00, 23, 1, 169, 0),
(180, 'SYRAH', NULL, 60.00, 53, 1, 176, 0),
(179, 'MALBEC', NULL, 60.00, 53, 1, 175, 0),
(178, 'VINO FINO TINTO', NULL, 60.00, 25, 1, 174, 0),
(177, 'MALBEC', NULL, 0.00, 25, 1, 173, 0),
(176, 'SYRAH', NULL, 0.00, 25, 1, 172, 0),
(175, 'TIERRA DORADA C.SAUVIGNON', NULL, 0.00, 25, 1, 171, 0),
(174, 'BARBERA TIERRA DE ALTURA', NULL, 120.00, 25, 1, 170, 0),
(248, 'Daiquiri', NULL, 20.00, 47, 1, 255, 0),
(100, 'whiscky', NULL, 35.00, 14, 1, 88, 0),
(103, 'refresco de tumbo', NULL, 20.00, 13, 1, 87, 0),
(105, 'cerverza real', NULL, 15.00, 11, 1, 92, 0),
(188, 'MAX RESERVA MERLOT', NULL, 200.00, 56, 1, 188, 0),
(159, 'Manzana', 'JUGOS', 15.00, 48, 1, 259, 0),
(148, 'Garapina en Jarra', NULL, 15.00, 45, 1, 250, 0),
(149, 'Balon de garapina', 'copa de garapina', 6.00, 45, 1, 250, 0),
(239, 'Corona ', NULL, 16.00, 44, 1, 124, 0),
(157, 'Guayaba', 'JUGOS', 15.00, 48, 1, 148, 0),
(158, 'Guinda', 'JUGOS', 15.00, 48, 1, 149, 0),
(156, 'Durazno', 'JUGOS', 15.00, 48, 1, 150, 0),
(155, 'Chuflay', NULL, 18.00, 47, 1, 258, 0),
(238, 'Jugo de Fruta de Temporada', NULL, 25.00, 49, 1, 237, 0),
(154, 'Cuba Libre', '', 18.00, 47, 1, 257, 0),
(153, 'Destornillador', 'singani, jugo de limon, hielo, gaseosa', 18.00, 47, 1, 162, 0),
(152, 'TUMBO', 'REFRESCOS', 25.00, 46, 1, 152, 0),
(150, 'LIMON', 'REFRESCOS', 25.00, 46, 1, 251, 0),
(137, 'Cerveza en Chop 10', '', 10.00, 44, 1, 125, 0),
(138, 'Cerveza en Chop 15', '', 15.00, 44, 1, 126, 0),
(139, 'Taqui&ntilde;a,Pace&ntilde;a 620ml', 'cerveza', 16.00, 44, 1, 128, 0),
(141, 'Huari 620ml', NULL, 17.00, 44, 1, 127, 0),
(142, 'Bi-cervecina Inca', NULL, 15.00, 44, 1, 129, 0),
(143, 'CERVEZA STELLA ARTOIS 330cc', NULL, 16.00, 44, 1, 130, 0),
(160, 'Tamarindo', 'JUGOS', 15.00, 48, 1, 151, 0),
(161, 'Tumbo', 'JUGOS', 15.00, 48, 1, 152, 0),
(162, 'Copas Viva Vinto', 'copa de vino', 10.00, 10, 1, 235, 0),
(163, 'Melva', 'postre', 20.00, 10, 1, 235, 0),
(164, 'Sundae', '1porcion de helado, crema, cherry, galletas', 7.00, 10, 1, 235, 0),
(165, 'TURRON ESPANOL', '4 porciones de helado de vainilla, bano de cafe, crema,cherry, galletas', 20.00, 10, 1, 235, 0),
(166, 'VIENNESSA', '4 porciones de helado, ron, crema, cherry verde, mani azucarado, galletas', 20.00, 10, 1, 235, 0),
(167, 'GUSANITO', 'gelatina, variedad de frutas, tres porciones de helado, crema, galletas ', 20.00, 10, 1, 235, 0),
(168, 'PIPOSITOS', NULL, 5.00, 10, 1, 235, 0),
(169, 'GELATINA', NULL, 5.00, 10, 1, 236, 0),
(170, 'ENSALADA DE FRUTAS', NULL, 12.00, 10, 1, 237, 0),
(171, 'PITUFO', NULL, 0.00, 10, 1, 235, 0),
(172, 'CAFE', NULL, 10.00, 10, 1, 238, 0),
(173, 'TE', NULL, 10.00, 10, 1, 239, 0),
(181, 'Cabernet Sauvignon', NULL, 60.00, 53, 1, 219, 0),
(182, 'TANNAT-MERLOT', NULL, 100.00, 54, 1, 178, 0),
(183, 'TERRUNO', NULL, 90.00, 54, 1, 179, 0),
(184, 'La Concepcion Estirpe', NULL, 60.00, 55, 1, 180, 0),
(185, 'La Concepcion Rose Demic-Sec', NULL, 190.00, 55, 1, 181, 0),
(186, 'La Concepcion Cabernet Rose', NULL, 120.00, 55, 1, 182, 0),
(187, 'Kolheberg Fino Blanco de Mesa', NULL, 60.00, 55, 1, 183, 0),
(197, 'DON MATIAS CABERNET SAUVIGNON', NULL, 130.00, 20, 1, 185, 0),
(198, 'DON MATIAS MERLOT', NULL, 130.00, 20, 1, 186, 0),
(199, 'DON MATIAS SYRAH', NULL, 130.00, 20, 1, 187, 0),
(200, 'TRIBUTO CABERNET SAUVIGNON', NULL, 155.00, 57, 1, 196, 0),
(201, 'TRIBUTO MALBEC', NULL, 155.00, 57, 1, 197, 0),
(202, 'TRIBUTO CARMENERE', NULL, 155.00, 57, 1, 198, 0),
(203, 'RESERVA CARMENERE', NULL, 155.00, 57, 1, 192, 0),
(204, 'RESERVA CABERNET SAUVIGNON', NULL, 155.00, 57, 1, 191, 0),
(205, 'RESERVA MERLOT', NULL, 155.00, 57, 1, 193, 0),
(206, 'RESERVA CHARDONNAY', NULL, 155.00, 57, 1, 202, 0),
(207, 'RESERVA SAUVIGNON BLANC', NULL, 155.00, 57, 1, 194, 0),
(208, 'POLO PROFESIONAL CABERNET', NULL, 140.00, 58, 1, 204, 0),
(209, 'POLO PROFESIONAL MALBEC', NULL, 140.00, 58, 1, 205, 0),
(210, 'POLO PROFESIONAL SYRAH', NULL, 135.00, 58, 1, 206, 0),
(211, 'POLO AMATEUR CABERNET', NULL, 110.00, 58, 1, 207, 0),
(212, 'POLO AMATEUR MALBEC', NULL, 110.00, 58, 1, 208, 0),
(213, 'POLO AMATEUR SYRAH', NULL, 110.00, 58, 1, 209, 0),
(214, 'POLO AMATEUR TORRENTS BLANCO', NULL, 110.00, 58, 1, 210, 0),
(215, 'TINTO CLASICO', NULL, 55.00, 59, 1, 211, 0),
(216, 'OPORTO', NULL, 50.00, 59, 1, 212, 0),
(217, 'BLANCO CLASICO', NULL, 55.00, 59, 1, 213, 0),
(218, 'COLECCION DE ALTURA', NULL, 55.00, 60, 1, 214, 0),
(219, 'RESERVA TRIVARIETAL', NULL, 220.00, 60, 1, 215, 0),
(220, 'CABERNET SAUVIGNON-MERLOT', NULL, 0.00, 61, 1, 216, 0),
(221, 'MALBEC-C.SAUVIGNON', NULL, 0.00, 61, 1, 217, 0),
(222, 'MERLOT-SYRAH', NULL, 150.00, 61, 1, 218, 0),
(223, 'CABERNET SAUVIGNON', NULL, 120.00, 62, 1, 219, 0),
(224, 'MALBEC', NULL, 120.00, 62, 1, 173, 0),
(225, 'MERLOT', NULL, 120.00, 62, 1, 220, 0),
(226, 'RIESLING', NULL, 120.00, 63, 1, 221, 0),
(228, 'SURUBI A LA PLANCHA', NULL, 55.00, 64, 1, 233, 0),
(229, 'PICANTE DE SURUBI', NULL, 55.00, 64, 1, 233, 0),
(230, 'CHICHARRON DE SURUBI', NULL, 55.00, 64, 1, 233, 0),
(231, 'CABAÑITAS DE SURUBI', NULL, 55.00, 64, 1, 233, 0),
(232, 'TRUCHA', NULL, 55.00, 64, 1, 234, 0),
(233, 'FILETE DE LOMO', NULL, 55.00, 64, 1, 224, 0),
(234, 'MOCO CHINCHI', 'REFRESCOS', 25.00, 46, 1, 252, 0),
(235, 'MANZANA UVA', 'REFRESCOS', 25.00, 46, 1, 253, 0),
(237, 'Coca Cola Zero 1/2 Litro', NULL, 7.00, 43, 1, 248, 0),
(252, 'Rujero Coleccion Privada', NULL, 120.00, 65, 1, 157, 0),
(253, 'Rujero Coleccion Privada 1/2', NULL, 65.00, 65, 1, 158, 0),
(254, 'Los Parrales', NULL, 120.00, 65, 1, 159, 0),
(255, 'Ron Havana Club 7 A&ntilde;os', NULL, 25.00, 66, 1, 160, 0),
(256, 'Vodka Absolut', NULL, 25.00, 66, 1, 161, 0),
(257, 'Vodka Stolichnaya', NULL, 25.00, 66, 1, 162, 0),
(258, 'Fernet Branca', NULL, 25.00, 66, 1, 163, 0),
(259, 'Whisky Chivas Regal 12 A&ntilde;os', NULL, 35.00, 66, 1, 164, 0),
(260, 'whisky Ballantine''s Finest', NULL, 30.00, 66, 1, 165, 0),
(261, 'Whisky Jack Daniel''s', NULL, 30.00, 66, 1, 166, 0),
(262, 'Maracuya', 'JUGOS', 15.00, 48, 1, 153, 0),
(263, 'Ron Havana Club 7 A&ntilde;os - Vaso', NULL, 25.00, 67, 1, 160, 0),
(264, 'Vodka Absolut- Vaso', NULL, 25.00, 67, 1, 161, 0),
(265, 'Vodka Stolichnaya - Vaso', NULL, 25.00, 67, 1, 162, 0),
(266, 'Fernet Branca - Vaso', NULL, 25.00, 67, 1, 163, 0),
(267, 'Whisky Chivas Regal 12 A&ntilde;os - Vaso', NULL, 35.00, 67, 1, 164, 0),
(268, 'whisky Ballantine''s Finest - Vaso', NULL, 30.00, 67, 1, 165, 0),
(269, 'Whisky Jack Daniel''s - Vaso', NULL, 30.00, 67, 1, 166, 0),
(270, 'ROSE', NULL, 120.00, 63, 1, 222, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productosobservaciones`
--

CREATE TABLE IF NOT EXISTS `productosobservaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `observacion` varchar(500) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `productosobservaciones`
--

INSERT INTO `productosobservaciones` (`id`, `producto_id`, `observacion`, `estado`) VALUES
(1, 3, 'Pollo Pecho', 1),
(2, 3, 'Pollo Pierna', 1),
(3, 3, 'Sin Camote', 1),
(4, 4, 'Solo ensalada', 1),
(5, 4, 'Sin camote', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recibos`
--

CREATE TABLE IF NOT EXISTS `recibos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `total` float(10,2) DEFAULT NULL,
  `totaldescuento` decimal(10,2) DEFAULT NULL,
  `descuento` float(10,2) DEFAULT NULL,
  `efectivo` decimal(10,2) DEFAULT NULL,
  `cambio` decimal(10,2) DEFAULT NULL,
  `created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `recibos`
--

INSERT INTO `recibos` (`id`, `pedido_id`, `nombre`, `total`, `totaldescuento`, `descuento`, `efectivo`, `cambio`, `created`) VALUES
(1, NULL, 'Herrera', NULL, NULL, NULL, NULL, NULL, '2012-10-04'),
(12, 153, 'CRISTIAM HERRERA', 75.00, 67.50, 0.10, 100.00, 32.50, '2013-02-24'),
(29, 2, 'vinto', 665.00, 0.00, 0.00, 700.00, 35.00, '2013-03-23');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`, `descripcion`, `tipo`, `estado`) VALUES
(1, 'Alimentos', 'Obas alimentos', NULL, 1),
(2, 'Casa Real', '', NULL, 1),
(3, 'Vino Dulce', '', NULL, 1),
(4, 'Refrescos 1 Litro', '', NULL, 1),
(23, 'Otros', 'para preparado de Otros', NULL, 1),
(6, 'Cerveza', '', NULL, 1),
(7, 'Jugos Del Valle', '', NULL, 1),
(8, 'Bebidas Locales', '', NULL, 1),
(9, 'Para Picar', '', NULL, 1),
(10, 'Vegetales', '', NULL, 1),
(12, 'Agua Vital', '', NULL, 1),
(13, 'Refrescos 2 Litros', '', NULL, 1),
(14, 'Refrescos 1/2 Litro', '', NULL, 1),
(22, 'Jarras', 'Bebidas en Jarras', NULL, 1),
(17, 'vino tinto', '', NULL, 1),
(18, 'vino blanco', '', NULL, 1),
(19, 'singani', '', NULL, 1),
(20, 'postres', '', NULL, 1),
(24, 'Ron', 'Ron', '', 1),
(25, 'Vodka', NULL, NULL, 1),
(26, 'Ron Blanco', 'Ron Blanco', NULL, 1),
(27, 'Cachaza', 'Cachaza', NULL, 1),
(28, 'Tequila', 'Tequila', NULL, 1),
(29, 'Whisky', 'Whisky', NULL, 1),
(30, 'Jugo Natural', 'Jugo Natural', NULL, 1),
(31, 'Rujero', 'Rujero', NULL, 1),
(32, 'Los Parrales', 'Los Parrales', NULL, 1),
(33, 'Fernet', 'Fernet', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `codigo` varchar(15) DEFAULT NULL,
  `ambiente_id` int(11) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nombre`, `ci`, `direccion`, `celular`, `password`, `codigo`, `ambiente_id`, `role`, `created`, `modified`) VALUES
(2, 'cherrera', 'Cristiam Herrera Daza', NULL, 'Calle yanacocha #123', '73253830', '8a1f83f11914d00b6e317a46ea01b0eda569d9c0', NULL, NULL, 'Administrador', '2013-02-26 01:43:46', '2013-02-26 01:43:46'),
(39, 'jlopez', 'Jose Antonio Lopez Tudela', '4826974', 'calle garcilza de la Vega Nro.543', '78828428', '7d4e7b6f6e6143c94dd773a291e92e6f519495b3', '2273', NULL, 'Moso', '2013-12-17 19:19:25', '2014-02-10 17:20:22'),
(41, 'aguillen', 'Adolfo Guillen Vargas', '567576', 'Av.Martin de la Rocha Xona Telefonos', '67868989', 'bef2486a9b03cc8bdb87564c74d23501388263c6', '', NULL, 'Administrador', '2014-02-10 17:17:44', '2014-02-10 17:18:45'),
(42, 'walter', 'Walter Rocha', '23456', 'calle 123', '234567', 'bef2486a9b03cc8bdb87564c74d23501388263c6', '4444', NULL, 'Moso', '2014-02-10 17:31:10', '2014-02-10 17:31:10');

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
(9, 'Cristiam Herrera Daza', 'Calle Yanacocha #123', 'cristiamherrera', '7c222fb2927d828af22f592134e8932480637c0d', '9999', 2, NULL, 1),
(10, 'Alvaro Guerra', 'Calle Junin', 'alvaro', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '6666', 2, NULL, 2),
(11, 'Cristina Guillen', 'Calle 3', 'cristina', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2345', 3, NULL, 1);

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
