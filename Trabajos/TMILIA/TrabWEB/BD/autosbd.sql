-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2013 a las 14:47:20
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
  KEY `id_marca` (`id_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id`, `id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`) VALUES
(1, 1, 1, 'Titulo', 11, 'a ver si anda', 'ford ka', 2011),
(13, 2, 2, '23423', 234, '234', '234', 234),
(14, 2, 2, '23423', 234, '234', '234', 234);

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
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(11) DEFAULT NULL,
  `path` varchar(40) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
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
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`),
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `auto_imagen`
--
ALTER TABLE `auto_imagen`
  ADD CONSTRAINT `auto_imagen_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`),
  ADD CONSTRAINT `auto_imagen_ibfk_2` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
