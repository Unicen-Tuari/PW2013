-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2013 a las 18:03:01
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `autosbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `valor` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `anio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_marca` (`id_marca`),
  KEY `id_marca_2` (`id_marca`),
  KEY `id_marca_3` (`id_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id`, `id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`) VALUES
(1, 1, 1, 'Titulo', 11, 'a ver si anda', 'ford ka', 2011),
(17, 1, 14, 'Volkswagen Bora 1.8 T Cuero- Impecable ', 118000, 'El auto se encuentra en inmejorables con', 'Bora', 2009),
(18, 1, 3, 'Chevrolet Corsa Classic Lt Con Gnc - Muy Bueno', 65000, 'El auto se encuentra en muy buenas condi', 'Corsa', 2011),
(19, 2, 5, 'Fiat Fiorino Con Aire Y Direccion Muy Buena', 60000, '- Aire acondicionado - Direccion hidraul', 'Fiorino', 2005),
(20, 2, 1, 'Audi A4 1.8T FSI (160cv) Multitronic Sport Alcantara', 168000, 'endo a excelente precio. Muy poco uso. T', 'A4', 2009),
(21, 2, 11, 'Renault Mégane II 5Ptas. 1.9 dCi ABCP ABS (120cv)', 85000, 'Renault megane II DYNAMIQUE 5 PTAS 2007 ', 'Megane', 2007),
(62, 2, 14, 'Volkswagen Bora 1.8T Highline MT Cuero', 121, 'Impecable!', 'Bora', 2088),
(63, 2, 7, 'Honda Civic 2.0 Si 6MT SedÃ¡n', 175000, 'El auto tiene los los siguientes agregad', 'Civic', 2011);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto_imagen`
--

CREATE TABLE IF NOT EXISTS `auto_imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auto` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL,
  KEY `id_auto` (`id_auto`),
  KEY `id_imagen` (`id_imagen`),
  KEY `id` (`id`),
  KEY `id_auto_2` (`id_auto`),
  KEY `id_imagen_2` (`id_imagen`),
  KEY `id_auto_3` (`id_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `auto_imagen`
--

INSERT INTO `auto_imagen` (`id`, `id_auto`, `id_imagen`) VALUES
(28, 62, 20),
(29, 63, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_auto` (`id_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `texto`, `nombre`, `email`, `telefono`, `id_auto`) VALUES
(10, '                asdasdasd               ', 'asd', 'aasdasd', 123123, 1),
(11, '                                ', 'ahi esta la onda, en el src de la imagen', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `path`) VALUES
(15, 'imagenes/0.jpeg'),
(16, 'imagenes/5279724e2e447.jpeg'),
(17, 'imagenes/5279730662001.jpeg'),
(18, 'imagenes/527973617030b.jpeg'),
(19, 'imagenes/527973ac3ee85.jpeg'),
(20, 'imagenes/527a92999c140.jpg'),
(21, 'imagenes/527a93bb42188.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`) VALUES
(1, 'audi'),
(2, 'bmw'),
(3, 'Chevrolet'),
(4, 'Dodge'),
(5, 'fiat'),
(6, 'ford'),
(7, 'honda'),
(8, 'hyundai'),
(9, 'mercedes benz'),
(10, 'peugeot'),
(11, 'renault'),
(12, 'suzuki'),
(13, 'toyota'),
(14, 'volkswagen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`) VALUES
(1, 'tomas', 'miliatomas@gmail.com', '123456'),
(2, 'nacho', 'ignaciojonas@gmail.com', '123456');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto_imagen`
--
ALTER TABLE `auto_imagen`
  ADD CONSTRAINT `auto_imagen_ibfk_2` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`),
  ADD CONSTRAINT `auto_imagen_ibfk_1` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id`);

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`);

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_ibfk_1` FOREIGN KEY (`id`) REFERENCES `marca` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id`) REFERENCES `auto` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;