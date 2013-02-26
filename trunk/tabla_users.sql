-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2013 at 07:32 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nombre`, `direccion`, `celular`, `password`, `role`, `created`, `modified`) VALUES
(2, 'cherrera', 'Cristiam Herrera Daza', 'Calle yanacocha #123', '73253830', '8a1f83f11914d00b6e317a46ea01b0eda569d9c0', 'Administrador', '2013-02-26 01:43:46', '2013-02-26 01:43:46'),
(3, 'adriana', 'Adriana Miranda de Herrera', 'Calle uno', '34123', '8a1f83f11914d00b6e317a46ea01b0eda569d9c0', 'Cajero', '2013-02-26 01:51:49', '2013-02-26 01:51:49'),
(4, 'adolfo', 'Adolfo Guillen Vargas', 'Viva Vinto', '6052323', '8a1f83f11914d00b6e317a46ea01b0eda569d9c0', 'Administrador', '2013-02-26 02:02:20', '2013-02-26 02:02:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
