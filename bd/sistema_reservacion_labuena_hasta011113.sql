-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2013 a las 18:10:15
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema_reservacion`
--
CREATE DATABASE IF NOT EXISTS `sistema_reservacion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema_reservacion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_user`, `user`, `pass`, `nombre`) VALUES
(1, 'darciga', '123456', 'Dante Omar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cli` varchar(150) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cli`, `user`, `pass`, `email`, `tel`) VALUES
(1, 'Dante Omar Arciga Camarena', 'darciga', '123456', 'dante.omar.arciga@gmail.com', '3531208323'),
(2, 'Jesus Alberto Arrellano Camargo', 'jarrellano', '123456', 'email@dominio.com', '1234567890'),
(3, 'IsidroChavez Espinoza', 'ichavez', '123456', 'chavez@dominio.com', '3531208323'),
(4, 'Juan Jose Mejia Reyes', 'jmejia', '123456', 'mejia@dominio.com', '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE IF NOT EXISTS `habitaciones` (
  `id_habitacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` enum('Desocupada','Ocupada','Mantenimiento') NOT NULL DEFAULT 'Desocupada',
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  PRIMARY KEY (`id_habitacion`),
  KEY `tipo` (`tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id_habitacion`, `nombre`, `tipo`, `estado`, `descripcion`, `imagen`) VALUES
(1, 'Habitacion 1', 1, 'Desocupada', 'Descripcion Habitacion 1', 'img1'),
(2, 'Habitacion 2', 2, 'Desocupada', 'Descripcion Habitacion 2', 'img2'),
(3, 'Habitacion 3', 3, 'Desocupada', 'Descripcion Habitacion 3', 'img3'),
(4, 'Habitacion 4', 4, 'Desocupada', 'Descripcion Habitacion 4', 'img4'),
(5, 'Habitacion 5', 5, 'Desocupada', 'Descripcion Habitacion 5', 'img5'),
(6, 'Habitacion 6', 6, 'Desocupada', 'Descripcion Habitacion 6', 'img6'),
(7, 'Habitacion 7', 7, 'Desocupada', 'Descripcion Habitacion 7', 'img7'),
(8, 'Habitacion 8', 8, 'Desocupada', 'Descripcion Habitacion 8', 'img8'),
(9, 'Habitacion 9', 9, 'Desocupada', 'Descripcion Habitacion 9', 'img9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `id_reservacion` int(11) NOT NULL AUTO_INCREMENT,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `estado` enum('En espera','Tomada','Cancelada') NOT NULL DEFAULT 'En espera',
  `num_adu` int(11) NOT NULL,
  `num_niñ` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `habitacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reservacion`),
  KEY `id_cliente` (`id_cliente`),
  KEY `habitacion` (`habitacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`id_reservacion`, `checkin`, `checkout`, `estado`, `num_adu`, `num_niñ`, `id_cliente`, `habitacion`) VALUES
(1, '2013-11-01', '2013-11-05', 'En espera', 1, 0, 1, 1),
(2, '2013-11-08', '2013-11-10', 'En espera', 2, 2, 2, 7),
(3, '2013-11-15', '2013-11-17', 'En espera', 2, 0, 3, 9),
(4, '2013-11-22', '2013-11-26', 'En espera', 2, 1, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE IF NOT EXISTS `tipohabitacion` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `precio` decimal(6,0) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`id_tipo`, `nombre`, `precio`) VALUES
(1, 'Hab. Económica 1 Cama Matrimonial', '450'),
(2, 'Hab. Económica 2 Cama Matrimonial', '550'),
(3, 'Hab. Económica 3 Cama sMatrimonial', '650'),
(4, 'Hab. Normal 1 Cama Matrimonial', '750'),
(5, 'Hab. Normal 2 Camas Matrimonial', '1000'),
(6, 'Hab. Normal 3 Camas Matrimonial', '1300'),
(7, 'Hab. Económica 2 Cama Matrimonial', '1500'),
(8, 'Hab. Económica 2 Cama Matrimonial', '1600'),
(9, 'Hab. Económica 2 Cama Matrimonial', '2000');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipohabitacion` (`id_tipo`);

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`habitacion`) REFERENCES `habitaciones` (`id_habitacion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
