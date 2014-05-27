-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2014 at 11:27 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=661 ;

--
-- Dumping data for table `almacen`
--

INSERT INTO `almacen` (`id`, `insumo_id`, `preciocompra`, `ingreso`, `salida`, `total`, `fecha`, `lugar`, `observaciones`, `user_id`) VALUES
(601, 262, 3.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(600, 261, 20.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(599, 259, 10.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(598, 258, 80.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(597, 257, 60.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(596, 256, 50.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(595, 255, 80.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(594, 254, 50.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(593, 253, 15.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(592, 252, 10.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(591, 251, 5.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(590, 250, 20.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(589, 248, 5.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(588, 247, 4.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(587, 246, 4.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(586, 245, 5.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(585, 244, 5.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(584, 243, 5.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(583, 242, 10.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(582, 241, 10.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(581, 240, 10.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(580, 239, 5.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(579, 238, 5.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(578, 263, 10.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(577, 237, 10.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(576, 225, 20.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(575, 224, 20.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(574, 223, 18.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
(573, 223, 18.00, 0, 0, 0, '2014-02-12', '', NULL, NULL),
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
(418, 109, 21.00, 0, 0, 0, '2014-02-06', '', NULL, NULL),
(417, 108, 18.00, 0, 0, 0, '2014-02-06', '', NULL, NULL),
(416, 7, 0.00, 0, 0, 0, '2014-02-06', '', NULL, NULL),
(641, 303, 15.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(414, 107, 12.00, 0, 0, 0, '2014-02-06', '', NULL, NULL),
(413, 106, 15.00, 0, 0, 0, '2014-02-06', '', NULL, NULL),
(640, 302, 10.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(602, 264, 60.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(603, 265, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(604, 266, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(605, 267, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(606, 268, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(607, 269, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(608, 270, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(609, 271, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(610, 272, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(611, 273, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(612, 274, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(613, 275, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(614, 276, 30.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(615, 277, 50.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(616, 278, 10.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(617, 279, 25.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(618, 280, 20.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(619, 281, 20.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(620, 282, 4.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(621, 283, 4.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(622, 284, 4.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(623, 285, 4.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(624, 286, 4.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(625, 287, 45.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(626, 288, 45.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(627, 289, 45.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(628, 290, 45.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(629, 291, 45.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(630, 292, 7.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(631, 293, 15.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(632, 294, 5.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(633, 295, 12.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(634, 296, 15.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(635, 297, 15.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(636, 298, 4.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(637, 299, 10.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(638, 300, 5.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(639, 301, 5.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(642, 304, 20.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(643, 305, 20.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(644, 306, 20.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(645, 307, 20.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(646, 308, 25.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(647, 309, 25.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(648, 310, 25.00, 0, 0, 0, '2014-02-14', '', NULL, NULL),
(649, 311, 20.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(650, 312, 10.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(651, 313, 10.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(652, 314, 8.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(653, 315, 15.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(654, 316, 15.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(655, 317, 15.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(656, 114, 50.00, 0, 0, 0, '2014-02-18', '', NULL, NULL),
(659, 124, 10.00, 10, 0, 10, '2014-04-08', '', NULL, NULL),
(660, 124, 10.00, 0, 6, 4, '2014-04-08', '', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ambientes`
--

INSERT INTO `ambientes` (`id`, `numero`, `imagen`, `mesas`) VALUES
(1, 1, '53027cf6-0658-4724-ab21-0fa401d27043.jpg', 1),
(2, 2, '53029bd7-4870-4bf2-ba48-0fa401d27043.jpg', 1),
(3, 3, '53029f6e-5f0c-4da9-b365-0fa401d27043.jpg', 1),
(4, 4, '5304161b-0de8-4ff5-8be6-14a401d27043.jpg', 1),
(5, 5, '53041927-b308-49ff-85e7-14a401d27043.jpg', 1);

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
  `user_id` int(11) NOT NULL,
  `horaingreso` time DEFAULT NULL,
  `horasalida` time DEFAULT NULL,
  `fecha` date NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `asistencias`
--

INSERT INTO `asistencias` (`id`, `user_id`, `horaingreso`, `horasalida`, `fecha`, `observaciones`) VALUES
(24, 45, '21:02:17', NULL, '2014-05-27', NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4738 ;

--
-- Dumping data for table `bodegas`
--

INSERT INTO `bodegas` (`id`, `insumo_id`, `preciocompra`, `ingreso`, `salida`, `total`, `fecha`, `lugare_id`, `observaciones`) VALUES
(4737, 124, 10.00, 6, 0, 6, '2014-04-08', 1, NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

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
(67, 4, 'TRAGOS VASOS', NULL, 'Bebidas', 1),
(68, 1, 'Almuerzos', 'Almuerzos', 'Comida', 1),
(69, 1, 'Sandwich', 'Sandwich', 'Comida', 1);

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
(1, 'Comida', NULL, 1, 1, '191970'),
(2, 'Postres', NULL, 1, 2, '47A447'),
(4, 'Bebidas', NULL, 1, 4, '330000'),
(5, 'Vinos Nacionales', NULL, 1, 5, 'D2322D'),
(6, 'Vinos Importados', NULL, 1, 6, '000000'),
(9, 'Vinos Campos de Solana', 'panques para combos', 1, 7, '8B4513');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `nit`, `nombrenit`, `direccion`, `telefono`, `estado`) VALUES
(77, 'lopez', '87689689', 'lopez', NULL, NULL, 1);

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
  `user_id` int(11) NOT NULL,
  `sueldo` float(10,2) DEFAULT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=199 ;

--
-- Dumping data for table `facturas`
--

INSERT INTO `facturas` (`id`, `codigo_control`, `cliente`, `nit`, `importetotal`, `fecha`, `created`) VALUES
(95, NULL, 'Herreraa', '1234567', '137.00', NULL, '0000-00-00'),
(94, NULL, 'Herreraa', '1234567', '137.00', NULL, '0000-00-00'),
(93, NULL, 'Perez', '1417692017', '137.00', NULL, '0000-00-00'),
(92, NULL, 'Perez', '4189179011', '137.00', NULL, '0000-00-00'),
(91, NULL, 'Herrera', '4376810', '137.00', NULL, '0000-00-00'),
(90, NULL, 'Herrera', '4189179011', '137.00', NULL, '0000-00-00'),
(89, NULL, 'Herrera', '4189179011', '132.00', NULL, '0000-00-00'),
(88, NULL, 'Herrera', '4477890104', '132.00', NULL, '0000-00-00'),
(87, NULL, 'Herrera', '4376810', '137.00', NULL, '0000-00-00'),
(86, NULL, 'Herrera', '4376810', '137.00', NULL, '0000-00-00'),
(85, NULL, 'Herrera', '4376810', '137.00', NULL, '0000-00-00'),
(84, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(83, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(82, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(81, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(80, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(79, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(78, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(77, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(76, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(75, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(74, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(73, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(72, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(71, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(70, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(69, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(68, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(67, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(66, NULL, 'Herrera', '4376810', '132.00', NULL, '0000-00-00'),
(65, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(64, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(63, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(62, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(61, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(60, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(59, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(58, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(57, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(56, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(55, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(54, NULL, 'Herrera', NULL, '132.00', NULL, '0000-00-00'),
(53, NULL, 'Herrera', NULL, '132.00', NULL, '0000-00-00'),
(52, NULL, 'Herrera', NULL, '132.00', NULL, '0000-00-00'),
(51, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(50, NULL, 'Herrera', '123123', '132.00', NULL, '0000-00-00'),
(96, NULL, 'Herreraa', '1234567', '137.00', NULL, '0000-00-00'),
(97, NULL, 'Herreraa', '1234567', '137.00', NULL, '0000-00-00'),
(98, NULL, 'Herreraa', '1417692017', '137.00', NULL, '0000-00-00'),
(99, NULL, 'Herreraa', '1417692017', '137.00', NULL, '0000-00-00'),
(100, NULL, 'Herreraa', '1417692017', '137.00', NULL, '0000-00-00'),
(101, NULL, 'Perez', '1234567890', '137.00', NULL, '0000-00-00'),
(102, NULL, 'Perez', '1234567890', '137.00', NULL, '0000-00-00'),
(103, NULL, 'Herrea', '1234567890', '132.00', NULL, '0000-00-00'),
(104, NULL, 'miranda', '4839295013', '150.00', NULL, '0000-00-00'),
(105, NULL, 'miranda', '4839295013', '75.00', NULL, '0000-00-00'),
(106, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '0000-00-00'),
(107, NULL, NULL, NULL, NULL, NULL, '2013-02-24'),
(108, NULL, NULL, NULL, NULL, NULL, '2013-02-24'),
(109, NULL, NULL, NULL, '60.00', NULL, '2013-02-24'),
(110, NULL, NULL, NULL, '72.00', NULL, '2013-02-24'),
(111, NULL, NULL, NULL, '132.00', NULL, '2013-02-24'),
(112, NULL, NULL, NULL, '137.00', NULL, '2013-02-24'),
(113, NULL, NULL, NULL, '132.00', NULL, '2013-02-24'),
(114, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(115, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(116, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(117, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(118, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(119, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(120, NULL, 'HERRERA', '4376810010', '75.00', NULL, '2013-02-24'),
(121, NULL, 'HERRERA', '4376810010', '75.00', NULL, '2013-02-24'),
(122, NULL, 'HERRERA', '4376810010', '75.00', NULL, '2013-02-24'),
(123, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(124, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(125, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(126, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(127, NULL, 'MIRANDA', '4839295013', '75.00', NULL, '2013-02-24'),
(128, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-24'),
(129, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-24'),
(130, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-24'),
(131, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-24'),
(132, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-24'),
(133, 'DA-2C-2F-9A', 'MIRANDA', '4839295013', '75.00', '2013-02-24', '2013-02-24'),
(134, '73-43-08-18', 'HERRERA', '4376810', '75.00', '2013-02-24', '2013-02-24'),
(135, NULL, 'GUILLEN', '3817445010', '195.00', NULL, '2013-02-26'),
(136, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-26'),
(137, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-26'),
(138, NULL, 'MIRANDA', '4839295013', '135.00', NULL, '2013-02-26'),
(139, NULL, 'HERRERA', '4376810010', '60.00', NULL, '2013-02-26'),
(140, '03-DF-24-B9-F2', 'MIRANDA', '4839295013', '75.00', '2013-02-26', '2013-02-26'),
(141, '4A-0F-A9-0B', 'MIRANDA', '4839295', '75.00', '2013-02-26', '2013-02-26'),
(142, 'BF-25-86-33', 'GUILLEN', '4567895010', '75.00', '2013-02-26', '2013-02-26'),
(143, '14-44-68-0C-2E', '', '', '75.00', '2013-02-26', '2013-02-26'),
(144, NULL, 'MIRANDA', '4839295013', '0.00', NULL, '2013-02-26'),
(145, NULL, 'GUILLEN', '4647676876', '660.00', NULL, '2013-03-05'),
(146, '15-A3-17-A2-B3', '', '', '120.00', '2013-03-05', '2013-03-05'),
(147, 'B8-BA-F6-F9-41', 'MIRA DA', '4839295013', '120.00', '2013-03-05', '2013-03-05'),
(148, NULL, 'MARCIAL', '45678734', '120.00', NULL, '2013-03-11'),
(149, NULL, 'Soto', '3355011', '135.00', NULL, '2013-03-16'),
(150, NULL, 'PatiÃ±o', '3138086', '390.00', NULL, '2013-03-16'),
(151, NULL, 'Felix Quiroz', '3618911', '548.00', NULL, '2013-03-16'),
(152, NULL, 'ROJAS', '3592838', '263.00', NULL, '2013-03-16'),
(153, NULL, 'juan choque', '1210365', '179.00', NULL, '2013-03-16'),
(154, NULL, 'Rojas', '5185551', '293.00', NULL, '2013-03-16'),
(155, NULL, 'Arancibia', '4505179010', '167.00', NULL, '2013-03-16'),
(156, NULL, 'Jose AÃ±ez', '990463019', '309.00', NULL, '2013-03-16'),
(157, NULL, '', '5634884', '470.00', NULL, '2013-03-16'),
(158, NULL, 'Bustamante', '831863', '91.00', NULL, '2013-03-16'),
(159, NULL, 'ANTEQUERA', '823261014', '147.00', NULL, '2013-03-16'),
(160, NULL, 'Huitado', '4445503', '135.00', NULL, '2013-03-16'),
(161, NULL, 'jose jaillita', '5263425', '284.00', NULL, '2013-03-16'),
(162, NULL, 'teran', '5923946', '135.00', NULL, '2013-03-16'),
(163, NULL, 'ARTEAGA', '5207031016', '487.00', NULL, '2013-03-17'),
(164, NULL, 'adriana', '34654363', '181.00', NULL, '2013-03-17'),
(165, NULL, 'Escalera', '3137047', '186.00', NULL, '2013-03-23'),
(166, NULL, 'Mercado', '2313515', '365.00', NULL, '2013-03-23'),
(167, NULL, 'Morales', '627040011', '151.00', NULL, '2013-03-23'),
(168, NULL, 'Vargas', '5124167014', '267.00', NULL, '2013-03-23'),
(169, NULL, 'Rodriguez', '4418314', '294.00', NULL, '2013-03-23'),
(170, NULL, 'Tejada', '949687', '238.00', NULL, '2013-03-24'),
(171, NULL, 'Torrejon', '2861568', '262.00', NULL, '2013-03-24'),
(172, NULL, 'Yomar MontaÃ±o', '6407245', '165.00', NULL, '2013-03-24'),
(173, NULL, 'Villalpando', '3729013', '522.00', NULL, '2013-03-24'),
(174, NULL, 'Felix Mamani', '3033242017', '250.00', NULL, '2013-03-24'),
(175, NULL, 'Flores', '8217639', '362.00', NULL, '2013-03-24'),
(176, NULL, 'Mirian Flores V.', '3591880', '147.00', NULL, '2013-03-24'),
(177, NULL, 'Chinche', '3742015', '335.00', NULL, '2013-03-24'),
(178, NULL, 'Jaura de Vargas', '588711013', '174.00', NULL, '2013-03-24'),
(179, NULL, 'Hope', '102140902', '370.00', NULL, '2013-03-24'),
(180, NULL, 'Rosario Luna', '4392866', '196.00', NULL, '2013-03-24'),
(181, NULL, 'Gonzales', '3177411', '242.00', NULL, '2013-03-24'),
(182, NULL, 'Guillen', '3027618018', '160.00', NULL, '2013-03-24'),
(183, NULL, 'Maldonado', '4457829', '228.00', NULL, '2013-03-24'),
(184, NULL, 'Victor Soto Siles', '949425', '407.00', NULL, '2013-03-24'),
(185, NULL, 'Barrera', '4537845', '132.00', NULL, '2013-03-24'),
(186, NULL, 'Cespedes', '2726211019', '171.00', NULL, '2013-03-24'),
(187, NULL, 'Asseff', '4752854', '260.00', NULL, '2013-03-24'),
(188, NULL, 'Andrew', '800408013', '573.00', NULL, '2013-03-24'),
(189, NULL, 'Nogales', '5274911', '210.00', NULL, '2013-03-24'),
(190, NULL, 'Majfu', '658854', '441.00', NULL, '2013-03-24'),
(191, NULL, 'Garon', '1247663011', '214.00', NULL, '2013-03-24'),
(192, NULL, 'Alcocer', '816503', '155.00', NULL, '2013-03-24'),
(193, NULL, 'Murillo', '5191985', '174.00', NULL, '2013-03-24'),
(194, NULL, 'conta', '1026145024', '1204.00', NULL, '2013-03-24'),
(195, NULL, 'Karen Coro Canaviri', '6424250117', '1207.00', NULL, '2013-03-24'),
(196, NULL, 'Saravia', '599438', '154.00', NULL, '2013-03-24'),
(197, NULL, '200', '57657', '0.00', NULL, '2014-02-03'),
(198, NULL, 'lopez', '87689689', '0.00', NULL, '2014-04-08');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=318 ;

--
-- Dumping data for table `insumos`
--

INSERT INTO `insumos` (`id`, `nombre`, `preciocompra`, `precioventa`, `fecha`, `total`, `bodega`, `tipo_id`, `tipo`, `estado`, `observaciones`) VALUES
(150, 'Jugo del Valle Durazno', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugo del Valle Durazno'),
(149, 'Jugo del Valle Guinda', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugo del Valle Guinda'),
(148, 'Jugo del Valle Guayaba ', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugo del Valle Guayaba '),
(147, 'Manzana', 12.00, 15.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Manzana'),
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
(134, 'Refresco Tumbo', 10.00, 25.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Refresco Tumbo'),
(133, 'Refresco Maracuya', 10.00, 25.00, '2014-02-07', 0, 0, 22, 'bebida', 1, 'Refresco Maracuya'),
(132, 'Garapina en Jarra', 4.00, 6.00, '2014-02-07', 0, 0, 8, 'tragos', 1, 'Garapina en Jarra'),
(131, 'Balon de Guarapina', 5.00, 6.00, '2014-02-07', 0, 0, 8, 'tragos', 1, 'Balon de Guarapina'),
(130, 'Cerveza Stela Artois 330cc', 14.00, 16.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza Stela Artois 330cc'),
(129, 'Bicervecina Inca ', 12.00, 15.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Bicervecina Inca '),
(128, 'Cerveza Taqui&ntilde;a 620 mL', 14.00, 16.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza Taqui&ntilde;a 620 mL'),
(127, 'Cerveza Huari 620 mL', 15.00, 17.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza Huari 620 mL'),
(126, 'Cerveza en Chop 15', 8.00, 15.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza en Chop 15'),
(125, 'Cerveza en Chop 10', 8.00, 10.00, '2014-02-07', 0, 0, 6, 'tragos', 1, 'Cerveza en Chop 10'),
(124, 'Cerveza Corona', 10.00, 16.00, '2014-02-07', 4, 6, 6, 'tragos', 1, 'Cerveza Corona'),
(123, 'Coca Cola Zero 1/2 Litro', 5.00, 7.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Coca Cola Zero 1/2 Litro'),
(122, 'Agua Vital Con sin Gas 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 12, 'bebida', 1, 'Agua Vital Con sin Gas 1/2 Litro'),
(121, 'Agua Vital Con Gas 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 12, 'bebida', 1, 'Agua Vital Con Gas 1/2 Litro'),
(120, 'Sprite 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Sprite 1/2 Litro'),
(119, 'Fanta 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Fanta 1/2 Litro'),
(118, 'Coca Cola 1/2 Litro', 5.00, 6.00, '2014-02-07', 0, 0, 14, 'bebida', 1, 'Coca Cola 1/2 Litro'),
(117, 'Sprite 1 Litro', 11.00, 12.00, '2014-02-07', 0, 0, 4, 'bebida', 1, 'Sprite 1 Litro'),
(116, 'Fanta 1 Litro', 11.00, 12.00, '2014-02-07', 0, 0, 4, 'bebida', 1, 'Fanta 1 Litro'),
(115, 'Coca Cola 1Litro', 10.00, 12.00, '2014-02-07', 0, 0, 4, 'bebida', 1, 'Coca Cola 1Litro'),
(114, 'Pato', 50.00, 80.00, '2014-02-07', 15, 5, 1, 'comida', 1, 'Pato'),
(113, 'Cordero', 20.00, 25.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Cordero'),
(112, 'Laping', 20.00, 20.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Laping'),
(111, 'Cerdo', 25.00, 30.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'Cerdo'),
(110, 'Pollo', 18.00, 20.00, '2014-02-07', 0, 0, 1, 'comida', 1, 'pollo'),
(151, 'Jugo del Valle Tamarindo', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugo del Valle Tamarindo'),
(152, 'Jugo del Valle Tumbo', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugo del Valle Tumbo'),
(153, 'Jugo del Valle Maracuya', 12.00, 15.00, '2014-02-07', 0, 0, 7, 'bebida', 1, 'Jugo del Valle Maracuya'),
(154, 'Jugo de Fruta de Temporada', 20.00, 25.00, '2014-02-07', 0, 0, 30, 'bebida', 1, 'Jugo de Fruta de Temporada'),
(155, 'Casa Real Etiqueta Negra 1 Botella', 100.00, 120.00, '2014-02-07', 0, 0, 2, 'tragos', 1, 'Casa Real Etiqueta Negra 1 Botella'),
(156, 'Casa Real Etiqueta Negra 1/2 Botella', 120.00, 65.00, '2014-02-07', 0, 0, 2, 'tragos', 1, 'Casa Real Etiqueta Negra 1/2 Botella'),
(157, 'Rujero Coleccion Privada 1 Botella', 100.00, 120.00, '2014-02-07', 0, 0, 31, 'tragos', 1, 'Rujero Coleccion Privada 1 Botella'),
(158, 'Rujero Coleccion Privada 1/2 Botella', 120.00, 65.00, '2014-02-07', 0, 0, 31, 'tragos', 1, 'Rujero Coleccion Privada 1/2 Botella'),
(159, 'Los Parrales', 100.00, 120.00, '2014-02-07', 0, 0, 32, 'tragos', 1, 'Los Parrales'),
(160, 'Ron Havana Club 7 a&ntilde;os Botella', 200.00, 220.00, '2014-02-07', 0, 0, 24, 'tragos', 1, 'Ron Havana Club 7 a&ntilde;os Botella'),
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
(236, 'Gelatina', 4.00, 5.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Gelatina'),
(237, 'Frutas', 10.00, 15.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Frutas'),
(238, 'Cafe', 5.00, 10.00, '2014-02-09', 0, 0, 20, 'postres', 1, 'Cafe'),
(308, 'Whisky Chivas Regal 12 A&ntilde;os - Vaso', 25.00, 35.00, '2014-02-14', 0, 0, 34, 'tragos', 1, 'Whisky Chivas Regal 12 A&ntilde;os - Vaso'),
(307, 'Fernet Branca - Vaso', 20.00, 25.00, '2014-02-14', 0, 0, 34, 'tragos', 1, 'Fernet Branca - Vaso'),
(306, 'Vodka Stolichnaya - Vaso', 20.00, 25.00, '2014-02-14', 0, 0, 34, 'tragos', 1, 'Vodka Stolichnaya - Vaso'),
(305, 'Vodka Absolut- Vaso', 20.00, 25.00, '2014-02-14', 0, 0, 34, 'tragos', 1, 'Vodka Absolut- Vaso'),
(304, 'Ron Havana Club 7 A&ntilde;os - Vaso', 20.00, 25.00, '2014-02-14', 0, 0, 34, 'tragos', 1, 'Ron Havana Club 7 A&ntilde;os - Vaso'),
(302, 'Jugo del Valle Limon', 10.00, 15.00, '2014-02-14', 0, 0, 7, 'tragos', 1, 'Jugo del Valle Limon'),
(250, 'Garapina', 20.00, 25.00, '2014-02-09', 0, 0, 22, 'bebida', 1, 'Garapina'),
(251, 'Limon', 5.00, 25.00, '2014-02-10', 0, 0, 22, 'bebida', 1, 'Limon'),
(303, 'Margarita', 15.00, 18.00, '2014-02-14', 0, 0, 28, 'tragos', 1, 'Margarita'),
(254, 'Tequila', 50.00, 60.00, '2014-02-10', 0, 0, 8, 'tragos', 1, 'Tequila'),
(255, 'Ron Blanco', 80.00, 100.00, '2014-02-10', 0, 0, 24, 'tragos', 1, 'Ron Blanco\r\n'),
(256, 'cachaza', 50.00, 70.00, '2014-02-10', 0, 0, 27, 'tragos', 1, 'cachaza'),
(257, 'Ron Abuelo', 60.00, 80.00, '2014-02-10', 0, 0, 24, 'tragos', 1, 'Ron ABuelo'),
(258, 'Casa Real Etqueta Negra', 80.00, 100.00, '2014-02-10', 0, 0, 2, 'tragos', 1, 'Casa Real Etqueta Negra'),
(259, 'Jugo del Valle Manzana', 10.00, 15.00, '2014-02-10', 0, 0, 7, 'bebida', 1, 'Jugo del Valle Manzana'),
(261, 'Lambreado', 20.00, 30.00, '2014-02-11', 0, 0, 1, 'comida', 1, 'Lambreado'),
(262, 'Haba', 3.00, 5.00, '2014-02-11', 0, 0, 1, 'comida', 1, 'Haba\r\n'),
(263, 'Jugos del Valle', 10.00, 15.00, '2014-02-12', 0, 0, 7, 'bebida', 1, 'Jugos del Valle'),
(264, 'Pato con Lechon', 60.00, 62.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Pato con Lechon\r\n'),
(265, 'Pato con Lapping', 50.00, 62.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Pato con Lapping'),
(266, 'Pato con Cordero', 50.00, 62.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Pato con Cordero'),
(267, 'Pato con Pollo', 50.00, 62.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Pato con Pollo'),
(268, 'Lechon con Lapping	', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Lechon con Lapping	'),
(269, 'Lechon con Pollo', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Lechon con Pollo'),
(270, 'Lapping con Pollo', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Lapping con Pollo'),
(271, 'Lapping con Cordero	', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Lapping con Cordero	'),
(272, 'Cordero con Pollo', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Cordero con Pollo'),
(273, 'Picante de Pollo	', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Picante de Pollo	'),
(274, 'Picante de Lengua	', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Picante de Lengua	'),
(275, 'Picante Mixto', 50.00, 60.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Picante Mixto'),
(276, 'Chanka de Pollo	', 30.00, 50.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Chanka de Pollo	'),
(277, 'Pique', 50.00, 70.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Pique'),
(278, 'Kallu', 10.00, 15.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Kallu'),
(279, 'Mote de Haba	', 25.00, 38.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Mote de Haba	'),
(280, 'Salchipapas', 20.00, 25.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Salchipapas'),
(281, 'Pollo Frito', 20.00, 25.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Pollo Frito'),
(282, 'Porcion de Chu&ntilde;o', 4.00, 5.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Porcion de Chu&ntilde;o'),
(283, 'Porcion de Arroz', 4.00, 5.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Porcion de Arroz'),
(284, 'Porcion de Papa', 4.00, 5.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Porcion de Papa'),
(285, 'Porcion de Platano', 4.00, 5.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Porcion de Platano'),
(286, 'Porcion de Ensalada', 4.00, 5.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'Porcion de Ensalada'),
(287, 'SURUBI A LA PLANCHA', 45.00, 55.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'SURUBI A LA PLANCHA'),
(288, 'PICANTE DE SURUBI', 45.00, 55.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'PICANTE DE SURUBI'),
(289, 'CHICHARRON DE SURUBI', 45.00, 55.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'CHICHARRON DE SURUBI'),
(290, 'CABA&ntilde;ITAS DE SURUBI	', 45.00, 55.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'CABA&ntilde;ITAS DE SURUBI	'),
(291, 'FILETE DE LOMO', 45.00, 55.00, '2014-02-14', 0, 0, 1, 'comida', 1, 'FILETE DE LOMO'),
(292, 'Copas Viva Vinto', 7.00, 10.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'Copas Viva Vinto'),
(293, 'Melva', 15.00, 20.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'Melva'),
(294, 'Sundae', 5.00, 7.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'Sundae'),
(295, 'TURRON ESPANOL', 12.00, 15.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'TURRON ESPANOL'),
(296, 'VIENNESSA', 15.00, 20.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'VIENNESSA'),
(297, 'GUSANITO', 15.00, 20.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'GUSANITO'),
(298, 'PIPOSITOS', 4.00, 5.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'PIPOSITOS'),
(299, 'ENSALADA DE FRUTAS', 10.00, 12.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'ENSALADA DE FRUTAS'),
(300, 'PITUFO', 5.00, 7.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'PITUFO'),
(301, 'Te', 5.00, 10.00, '2014-02-14', 0, 0, 20, 'postres', 1, 'Te'),
(309, 'whisky Ballantine''s Finest - Vaso', 25.00, 30.00, '2014-02-14', 0, 0, 34, 'tragos', 1, 'whisky Ballantine''s Finest - Vaso'),
(310, 'Whisky Jack Daniel''s - Vaso', 25.00, 30.00, '2014-02-14', 0, 0, 34, 'tragos', 1, 'Whisky Jack Daniel''s - Vaso'),
(311, 'Almuerzo', 20.00, 25.00, '2014-02-18', 0, 0, 1, 'comida', 1, 'Almuerzo'),
(312, 'Sandwich de Lengua', 10.00, 15.00, '2014-02-18', 0, 0, 1, 'comida', 1, 'Sandwich de Lengua'),
(313, 'Sandwich de Laping', 10.00, 15.00, '2014-02-18', 0, 0, 1, 'comida', 1, 'Sandwich de Lengua'),
(314, 'Sopa', 8.00, 10.00, '2014-02-18', 0, 0, 1, 'comida', 1, 'Sopa'),
(315, 'Segundo 1', 15.00, 20.00, '2014-02-18', 0, 0, 1, 'comida', 1, 'Segundo 1'),
(316, 'Coca Cola 2 Litros', 15.00, 20.00, '2014-02-18', 0, 0, 13, 'bebida', 1, 'Coca Cola 2 Litros'),
(317, 'Segundo 2', 15.00, 20.00, '2014-02-18', 0, 0, 1, 'comida', 1, 'Segundo 2');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=673 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `pedido_id`, `producto_id`, `cantidad`, `precio`, `fecha`, `estado`) VALUES
(670, 162, 6, 1, 60.00, '2014-04-08 21:51:38', 1),
(671, 162, 6, 1, 60.00, '2014-04-08 21:51:39', 1),
(672, 162, 6, 1, 60.00, '2014-04-08 21:51:41', 1);

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
  `nombre` varchar(10) DEFAULT NULL,
  `posix` int(7) DEFAULT NULL,
  `posiy` int(7) DEFAULT NULL,
  `posix2` int(7) DEFAULT NULL,
  `posiy2` int(7) DEFAULT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  `ambiente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `mesas`
--

INSERT INTO `mesas` (`id`, `numero`, `nombre`, `posix`, `posiy`, `posix2`, `posiy2`, `pedido_id`, `ambiente_id`) VALUES
(44, 1, '2', 839, 396, 814, 166, NULL, 1),
(45, 2, '3', 839, 290, 814, -34, NULL, 1),
(46, 3, '4', 837, 180, 812, -238, NULL, 1),
(47, 4, '5', 556, 500, 531, -12, NULL, 1),
(48, 5, '6', 556, 393, 531, -213, NULL, 1),
(49, 6, '7', 731, 291, 706, -409, NULL, 1),
(50, 7, '8', 728, 182, 703, -612, NULL, 1),
(51, 8, '9', 562, 189, 537, -699, NULL, 1),
(52, 9, '10', 421, 187, 396, -795, NULL, 1),
(53, 10, '11', 273, 185, 248, -891, NULL, 1),
(54, 11, '12', 125, 185, 100, -985, NULL, 1),
(55, 12, '13', 124, 291, 99, -973, NULL, 1),
(56, 13, '14', 122, 395, 97, -963, NULL, 1),
(58, 14, '15', 118, 502, 93, -950, NULL, 1),
(59, 1, '101', 235, 205, 210, 69, NULL, 2),
(60, 1, '102', 375, 202, 350, -28, NULL, 2),
(61, 1, '103', 512, 201, 487, -123, NULL, 2),
(62, 1, '104', 233, 323, 208, -95, NULL, 2),
(63, 1, '105', 377, 322, 352, -190, NULL, 2),
(64, 1, '106', 513, 323, 488, -283, NULL, 2),
(65, 1, '107', 666, 200, 641, -500, NULL, 2),
(66, 1, '108', 664, 321, 639, -473, NULL, 2),
(67, 1, '109', 667, 454, 642, -434, NULL, 2),
(68, 1, '110', 826, 200, 801, -782, NULL, 2),
(69, 1, '111', 819, 319, 794, -757, NULL, 2),
(70, 1, '112', 818, 452, 793, -718, NULL, 2),
(72, 1, '302', 695, 206, 670, -24, NULL, 3),
(73, 2, '303', 578, 206, 553, -118, NULL, 3),
(74, 3, '304', 444, 204, 419, -214, NULL, 3),
(75, 4, '305', 308, 204, 283, -308, NULL, 3),
(76, 5, '306', 170, 203, 145, -403, NULL, 3),
(77, 6, '307', 824, 452, 799, -248, NULL, 3),
(78, 7, '308', 709, 451, 684, -343, NULL, 3),
(80, 8, '309', 587, 450, 562, -438, NULL, 3),
(81, 9, '310', 457, 448, 432, -534, NULL, 3),
(82, 10, '311', 312, 448, 287, -628, NULL, 3),
(83, 11, '312', 177, 444, 152, -726, NULL, 3),
(107, 1, 'P15', 775, 483, 750, -969, NULL, 5),
(108, 2, 'P1', 194, 256, 169, -1008, NULL, 5),
(109, 3, 'P2', 191, 368, 166, -896, NULL, 5),
(110, 4, 'P3', 193, 485, 168, -873, NULL, 5),
(111, 5, 'P4', 310, 257, 285, -1101, NULL, 5),
(112, 6, 'P5', 309, 370, 284, -988, NULL, 5),
(113, 7, 'P6', 307, 486, 282, -872, NULL, 5),
(116, 8, 'P7', 438, 259, 413, -1005, NULL, 5),
(117, 9, 'P8', 435, 370, 410, -988, NULL, 5),
(118, 10, 'P9', 434, 487, 409, -871, NULL, 5),
(119, 11, 'P10', 633, 258, 608, -1100, NULL, 5),
(120, 1, '301', 820, 206, 795, -964, NULL, 3),
(121, 1, '1', 838, 502, 813, -950, 161, 1),
(122, 12, 'P11', 632, 367, 607, -991, NULL, 5),
(123, 13, 'P12', 631, 486, 606, -872, NULL, 5),
(124, 1, 'P14', 769, 367, 744, -991, NULL, 5),
(125, 1, 'P13', 769, 260, 744, -1192, NULL, 5),
(127, 1, 'PU1', 249, 289, 224, 153, NULL, 4),
(128, 2, 'PU2', 247, 446, 222, 216, NULL, 4),
(129, 3, 'PU3', 424, 290, 399, -34, NULL, 4),
(130, 4, 'PU4', 428, 443, 403, 25, NULL, 4),
(131, 5, 'PU5', 636, 290, 611, -222, NULL, 4),
(133, 1, 'PU6', 635, 439, 610, -167, NULL, 4),
(134, 1, 'PU7', 798, 290, 773, -410, NULL, 4),
(135, 1, 'PU8', 796, 437, 771, -357, NULL, 4);

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
  `user_id` int(11) NOT NULL,
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
  `mesa` varchar(10) DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '0' COMMENT '0 creado, 1 impreso y cosina, 2 servido, 3 pagado, 4 facturado, 5 anadido, 6 cancelado',
  `total` float(15,2) NOT NULL DEFAULT '0.00',
  `descuento` decimal(10,2) DEFAULT NULL,
  `monto` float(15,2) NOT NULL DEFAULT '0.00',
  `fechac` varchar(10) NOT NULL,
  `created` date DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=163 ;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `user_id`, `fecha`, `mesa`, `estado`, `total`, `descuento`, `monto`, `fechac`, `created`, `modified`, `observaciones`) VALUES
(162, 45, '2014-04-08 21:48:10', '9', 4, 0.00, NULL, 180.00, '', '2014-04-08', '2014-04-08 21:54:52', NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=333 ;

--
-- Dumping data for table `porciones`
--

INSERT INTO `porciones` (`id`, `producto_id`, `insumo_id`, `cantidad`) VALUES
(153, 3, 111, 1),
(174, 13, 111, 1),
(4, 1, 2, 1),
(187, 32, 226, 1),
(175, 15, 110, 1),
(219, 34, 117, 1),
(217, 18, 115, 1),
(183, 19, 110, 1),
(185, 30, 227, 1),
(218, 20, 116, 1),
(193, 39, 230, 1),
(189, 31, 261, 1),
(186, 21, 226, 1),
(17, 22, 9, 1),
(18, 23, 10, 1),
(190, 24, 227, 1),
(191, 24, 230, 1),
(173, 14, 114, 1),
(155, 4, 112, 1),
(154, 4, 114, 1),
(161, 5, 113, 1),
(160, 5, 114, 1),
(164, 8, 111, 1),
(165, 8, 110, 1),
(162, 7, 111, 1),
(163, 7, 112, 1),
(166, 10, 112, 1),
(167, 10, 110, 1),
(168, 11, 112, 1),
(169, 11, 113, 1),
(170, 12, 113, 1),
(202, 231, 233, 1),
(157, 9, 113, 1),
(156, 9, 114, 1),
(181, 26, 114, 1),
(200, 229, 233, 1),
(177, 16, 113, 1),
(178, 17, 112, 1),
(53, 41, 31, 1),
(221, 42, 119, 1),
(55, 44, 11, 1),
(222, 45, 120, 1),
(57, 46, 30, 1),
(223, 47, 121, 1),
(224, 48, 247, 1),
(60, 49, 14, 1),
(249, 50, 263, 1),
(62, 51, 17, 1),
(63, 52, 15, 1),
(64, 53, 18, 1),
(65, 54, 16, 1),
(121, 73, 87, 1),
(71, 55, 43, 1),
(73, 37, 1, 2),
(142, 114, 82, 2),
(152, 3, 114, 1),
(77, 59, 1, 1),
(231, 143, 130, 1),
(179, 27, 223, 1),
(80, 25, 1, 1),
(81, 25, 55, 3),
(82, 28, 1, 2),
(83, 29, 56, 1),
(192, 39, 110, 1),
(232, 61, 132, 1),
(194, 62, 228, 1),
(195, 63, 229, 1),
(196, 64, 230, 1),
(197, 65, 231, 1),
(188, 38, 262, 1),
(184, 30, 224, 1),
(92, 66, 20, 1),
(198, 67, 232, 1),
(143, 115, 97, 1),
(199, 228, 233, 1),
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
(282, 90, 168, 1),
(283, 91, 169, 1),
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
(201, 230, 233, 1),
(136, 108, 99, 1),
(137, 109, 99, 1),
(171, 12, 110, 1),
(148, 117, 98, 1),
(147, 116, 5, 12),
(203, 232, 234, 1),
(204, 233, 224, 1),
(205, 162, 235, 1),
(206, 163, 235, 1),
(207, 164, 235, 1),
(208, 165, 235, 1),
(209, 166, 235, 1),
(210, 167, 235, 1),
(211, 168, 235, 1),
(212, 169, 236, 1),
(213, 170, 232, 1),
(214, 171, 235, 1),
(215, 172, 238, 1),
(216, 173, 239, 1),
(220, 237, 248, 1),
(225, 239, 124, 1),
(226, 137, 125, 1),
(227, 138, 126, 1),
(228, 139, 128, 1),
(229, 141, 127, 1),
(230, 60, 129, 1),
(233, 149, 132, 1),
(234, 151, 133, 1),
(235, 152, 134, 1),
(236, 150, 251, 1),
(237, 234, 252, 1),
(238, 235, 137, 1),
(239, 249, 146, 1),
(240, 245, 144, 1),
(241, 240, 255, 1),
(242, 241, 155, 1),
(243, 248, 257, 1),
(244, 246, 256, 1),
(245, 155, 155, 1),
(246, 154, 155, 1),
(247, 153, 162, 1),
(326, 159, 259, 1),
(328, 158, 149, 1),
(329, 156, 150, 1),
(330, 160, 151, 1),
(331, 161, 152, 1),
(332, 262, 153, 1),
(255, 238, 237, 1),
(256, 251, 156, 1),
(257, 250, 258, 1),
(258, 252, 157, 1),
(259, 253, 158, 1),
(260, 254, 159, 1),
(261, 255, 160, 1),
(262, 256, 161, 1),
(263, 257, 162, 1),
(264, 258, 163, 1),
(265, 259, 164, 1),
(266, 260, 165, 1),
(267, 261, 166, 1),
(268, 263, 160, 1),
(269, 264, 161, 1),
(270, 265, 162, 1),
(271, 266, 163, 1),
(272, 267, 164, 1),
(273, 268, 165, 1),
(274, 269, 166, 1),
(275, 182, 178, 1),
(276, 183, 179, 1),
(277, 184, 180, 1),
(278, 185, 181, 1),
(279, 186, 182, 1),
(280, 187, 183, 1),
(281, 58, 167, 1),
(284, 180, 176, 1),
(285, 179, 175, 1),
(286, 181, 177, 1),
(287, 178, 174, 1),
(288, 177, 173, 1),
(290, 176, 172, 1),
(291, 175, 171, 1),
(292, 174, 170, 1),
(293, 195, 195, 1),
(294, 194, 194, 1),
(295, 192, 192, 1),
(296, 193, 193, 1),
(297, 191, 191, 1),
(298, 189, 189, 1),
(299, 190, 190, 1),
(300, 188, 188, 1),
(301, 196, 184, 1),
(302, 197, 185, 1),
(303, 198, 186, 1),
(304, 199, 187, 1),
(305, 200, 196, 1),
(306, 201, 197, 1),
(307, 202, 198, 1),
(308, 203, 192, 1),
(309, 204, 191, 1),
(310, 205, 193, 1),
(311, 206, 202, 1),
(312, 207, 203, 1),
(313, 208, 204, 1),
(314, 209, 205, 1),
(315, 210, 206, 1),
(316, 211, 207, 1),
(317, 212, 205, 1),
(318, 213, 209, 1),
(319, 214, 210, 1),
(320, 278, 112, 1),
(321, 277, 223, 1),
(322, 276, 311, 1),
(323, 275, 311, 1),
(324, 274, 311, 1),
(325, 279, 316, 1),
(327, 157, 148, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=283 ;

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
(10, 'Lapping con Pollo', '', 60.00, 2, 1, 112, 0),
(11, 'Lapping con Cordero', '', 60.00, 2, 1, 112, 0),
(12, 'Cordero con Pollo', '', 60.00, 2, 1, 113, 0),
(15, 'Pollo', '', 60.00, 1, 1, 110, 0),
(16, 'Cordero', '', 60.00, 1, 1, 113, 0),
(17, 'Lapping', '', 60.00, 1, 1, 112, 0),
(18, 'Coca Cola 1 Litro', '', 12.00, 43, 1, 115, 0),
(19, 'Chanka de Pollo', '', 50.00, 5, 1, 110, 0),
(20, 'Fanta 1 Litro', '', 12.00, 43, 1, 116, 0),
(21, 'Kallu', '', 15.00, 7, 1, 226, 0),
(22, 'Huari', '', 17.00, 11, 1, 9, 0),
(23, 'Pace&ntilde;a', '', 16.00, 11, 1, 10, 0),
(24, 'Salchipapas', 'sadf', 25.00, 8, 1, 227, 0),
(271, 'Picante de Pollo ', NULL, 60.00, 3, 1, 110, 0),
(151, 'JARRA-MARACUYA', 'REFRESCOS', 25.00, 46, 1, 153, 0),
(27, 'Picante de Lengua', '', 60.00, 3, 1, 223, 0),
(26, 'Picante Mixto', '', 60.00, 3, 1, 223, 0),
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
(42, 'Fanta 1/2 Litro', '', 6.00, 43, 1, 119, 0),
(44, 'Taqui&ntilde;a', 'cerveza cochabambina', 16.00, 11, 1, 11, 0),
(272, 'Coca Cola 1/2 Litro', '', 6.00, 43, 1, 120, 0),
(47, 'Agua Vital C/G 1/2 Litro ', NULL, 6.00, 43, 1, 246, 0),
(48, 'Agua Vital S/G 1/ 2 Litro', '', 6.00, 43, 1, 247, 0),
(49, 'Durazno', NULL, 15.00, 15, 1, 14, 0),
(50, 'Guayaba', NULL, 15.00, 15, 1, 19, 0),
(51, 'Guinda', '', 15.00, 15, 1, 17, 0),
(52, 'Manzana', NULL, 15.00, 15, 1, 15, 0),
(53, 'Tamarindo', NULL, 15.00, 15, 1, 18, 0),
(54, 'Tumbo', NULL, 15.00, 15, 1, 16, 0),
(240, 'Mojito', NULL, 18.00, 47, 1, 255, 0),
(241, 'Pisco Sour', NULL, 18.00, 47, 1, 258, 0),
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
(105, 'cerverza real', NULL, 15.00, 11, 1, 92, 0),
(188, 'MAX RESERVA MERLOT', NULL, 200.00, 56, 1, 188, 0),
(159, 'Manzana', 'JUGOS', 15.00, 48, 1, 259, 0),
(149, 'Balon de garapina', 'copa de garapina', 6.00, 45, 1, 250, 0),
(239, 'Corona ', NULL, 16.00, 44, 1, 124, 0),
(157, 'Guayaba', 'JUGOS', 15.00, 48, 1, 148, 0),
(158, 'Guinda', 'JUGOS', 15.00, 48, 1, 149, 0),
(156, 'Durazno', 'JUGOS', 15.00, 48, 1, 150, 0),
(155, 'Chuflay', NULL, 18.00, 47, 1, 258, 0),
(238, 'Jugo de Fruta de Temporada', NULL, 25.00, 49, 1, 237, 0),
(154, 'Cuba Libre', '', 18.00, 47, 1, 257, 0),
(153, 'Destornillador', 'singani, jugo de limon, hielo, gaseosa', 18.00, 47, 1, 162, 0),
(152, 'JARRA-TUMBO', 'REFRESCOS', 25.00, 46, 1, 152, 0),
(150, 'JARRA-LIMON', 'REFRESCOS', 25.00, 46, 1, 251, 0),
(137, 'Cerveza en Chop 10', '', 10.00, 44, 1, 125, 0),
(138, 'Cerveza en Chop 15', '', 15.00, 44, 1, 126, 0),
(139, 'Taqui&ntilde;a,Pace&ntilde;a 620ml', 'cerveza', 16.00, 44, 1, 128, 0),
(141, 'Huari 620ml', NULL, 17.00, 44, 1, 127, 0),
(143, 'CERVEZA STELLA ARTOIS 330cc', NULL, 16.00, 44, 1, 130, 0),
(160, 'Tamarindo', 'JUGOS', 15.00, 48, 1, 151, 0),
(161, 'Tumbo', 'JUGOS', 15.00, 48, 1, 152, 0),
(162, 'Copas Viva Vinto', 'copa de vino', 10.00, 10, 1, 235, 0),
(163, 'Melva', 'postre', 20.00, 10, 1, 235, 0),
(164, 'Sundae', '1porcion de helado, crema, cherry, galletas', 7.00, 10, 1, 235, 0),
(165, 'TURRON ESPANOL', '4 porciones de helado de vainilla, bano de cafe, crema,cherry, galletas', 20.00, 10, 1, 235, 0),
(166, 'VIENNESSA', '4 porciones de helado, ron, crema, cherry verde, mani azucarado, galletas', 20.00, 10, 1, 235, 0),
(167, 'GUSANITO', 'gelatina, variedad de frutas, tres porciones de helado, crema, galletas ', 20.00, 10, 1, 235, 0),
(168, 'PIPOSITOS', '', 15.00, 10, 1, 235, 0),
(169, 'GELATINA', NULL, 5.00, 10, 1, 236, 0),
(170, 'ENSALADA DE FRUTAS', NULL, 12.00, 10, 1, 237, 0),
(171, 'PITUFO', NULL, 7.00, 10, 1, 235, 0),
(172, 'CAFE', NULL, 10.00, 10, 1, 238, 0),
(173, 'TE', NULL, 10.00, 10, 1, 301, 0),
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
(231, 'CABA&ntilde;ITAS DE SURUBI', NULL, 55.00, 64, 1, 233, 0),
(232, 'TRUCHA', NULL, 55.00, 64, 1, 234, 0),
(233, 'FILETE DE LOMO', NULL, 55.00, 64, 1, 224, 0),
(234, 'JARRA-MOCO CHINCHI', 'REFRESCOS', 25.00, 46, 1, 252, 0),
(235, 'JARRA-MANZANA UVA', 'REFRESCOS', 25.00, 46, 1, 253, 0),
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
(270, 'ROSE', NULL, 120.00, 63, 1, 222, 0),
(273, 'Sprite 1/2 Litro', '', 6.00, 43, 1, 120, 0),
(274, 'Almuerzo Completo', 'Almuerzo Completo', 25.00, 68, 1, 311, 0),
(280, 'Cordero al Jugo', 'Cordero al Jugo', 0.00, 68, 1, 315, 0),
(276, 'Solo Sopa', 'Solo Sopa', 10.00, 68, 1, 311, 0),
(277, 'Sandwich de Lengua', 'Sandwich de Lengua', 15.00, 69, 1, 223, 0),
(278, 'Sandwich de Laping', 'Sandwich de Laping', 15.00, 69, 1, 112, 0),
(279, 'Coca Cola 2 Litro', '', 20.00, 43, 1, 316, 0),
(281, 'Pollo a la Plancha', 'Pollo a la Plancha', 0.00, 68, 1, 317, 0),
(282, 'Seguno', 'Seguno', 20.00, 68, 1, 311, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `productosobservaciones`
--

INSERT INTO `productosobservaciones` (`id`, `producto_id`, `observacion`, `estado`) VALUES
(1, 3, 'Pollo Pecho', 1),
(2, 3, 'Pollo Pierna', 1),
(3, 3, 'Sin Camote', 1),
(4, 4, 'Solo ensalada', 1),
(5, 4, 'Sin camote', 1),
(6, 274, 'PARA LLEVAR', 1);

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
(12, 153, 'CRISTIAM HERRERA', 75.00, '67.50', 0.10, '100.00', '32.50', '2013-02-24'),
(29, 2, 'vinto', 665.00, '0.00', 0.00, '700.00', '35.00', '2013-03-23');

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
  `user_id` int(11) DEFAULT NULL,
  `horas` int(2) DEFAULT NULL,
  `minutos` int(2) DEFAULT NULL,
  `descuento` float(8,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `retrasos`
--

INSERT INTO `retrasos` (`id`, `user_id`, `horas`, `minutos`, `descuento`, `fecha`) VALUES
(10, 45, NULL, 722, 0.00, '2014-05-27');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

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
(33, 'Fernet', 'Fernet', NULL, 1),
(34, 'Tragos en Vasos', NULL, NULL, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nombre`, `ci`, `direccion`, `celular`, `password`, `codigo`, `ambiente_id`, `role`, `created`, `modified`) VALUES
(43, 'aguillen', 'Adolfo Guillen Vargas', '6666666', 'Av.Martin de la Rocha', '5454334', 'bef2486a9b03cc8bdb87564c74d23501388263c6', '', NULL, 'Administrador', '2014-02-18 12:50:26', '2014-02-18 12:50:26'),
(44, 'cherrerea', 'cristiam herrera', '213231', 'calle 123', '61160006', '8a1f83f11914d00b6e317a46ea01b0eda569d9c0', '2222', NULL, 'Moso', '2014-02-18 12:52:33', '2014-02-18 12:52:33'),
(45, 'jlopez', 'antonio lopez', '8763478', 'calle 456', '61160005', 'bef2486a9b03cc8bdb87564c74d23501388263c6', '2273', NULL, 'Administrador', '2014-02-18 12:53:22', '2014-05-23 13:40:18');

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
