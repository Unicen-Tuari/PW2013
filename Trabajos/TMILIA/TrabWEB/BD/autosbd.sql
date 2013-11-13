-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2013 a las 21:50:59
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id`, `id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`) VALUES
(68, 2, 1, 'Audi A4 1.8T', 89500, 'Vendo Audi A4 1.8 T, segundo dueÃ±o titu', 'A4', 2011),
(69, 2, 14, 'Volkswagen Bora 1.8T Highline MT Cuero', 94000, 'Bora en impecable estado. bla bla bla bl', 'Bora', 2005),
(70, 2, 10, 'Peugeot 206 3Ptas. 1.6 XS Techo ABS', 48000, 'El auto se encuentra en muy buen estado ', '206', 2003),
(71, 2, 3, 'Chevrolet Corsa Classic 4Ptas. 1.6 N', 44000, 'Vendo Chevrolet Corsa Classic 2006 en bu', 'Corsa', 2006),
(72, 2, 6, 'Ford Ranger 3.0', 148000, 'Ford ranger', 'Ranger f10', 2009),
(73, 2, 15, 'CitroÃ«n Xsara Picasso 1.6i 16v', 65000, 'Citroen Xsara Picasso 1.6i Sedan 5 Ptas', 'PIcasso', 2006),
(75, 1, 6, 'Ford Ka', 50000, 'Auto como nuevo, ideal para familia', 'Ka', 2011),
(76, 1, 7, 'logan de vane', 10, 'auto vane lo vende.. esta todo roto!', 'modelo', 2008);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `auto_imagen`
--

INSERT INTO `auto_imagen` (`id`, `id_auto`, `id_imagen`) VALUES
(33, 71, 25),
(34, 72, 26),
(35, 73, 27),
(36, 75, 28),
(37, 76, 29);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `texto`, `nombre`, `email`, `telefono`, `id_auto`) VALUES
(19, 'hola estoy interesado en el auto', 'tomas', 'tomm.11@hotmail.es', 493031, 72),
(20, 'hola estoy interesado en el auto', 'tomas', 'tomm.11@hotmail.es', 493031, 72);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `path`) VALUES
(25, 'imagenes/5281b40c8a8a5.jpg'),
(26, 'imagenes/5281b4a2d7ac4.jpg'),
(27, 'imagenes/5281b7627ac62.jpg'),
(28, 'imagenes/528287fb7d5de.jpg'),
(29, 'imagenes/5282af876bb4b.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(14, 'volkswagen'),
(15, 'Citroen');

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
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
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
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `auto` (`id_marca`);

--
-- Filtros para la tabla `auto_imagen`
--
ALTER TABLE `auto_imagen`
  ADD CONSTRAINT `auto_imagen_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`),
  ADD CONSTRAINT `auto_imagen_ibfk_2` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id`);

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
