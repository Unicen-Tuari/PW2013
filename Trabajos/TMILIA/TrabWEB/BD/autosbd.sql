-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2014 a las 18:58:48
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id`, `id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`) VALUES
(109, 1, 5, 'Fiat Uno Novo 1.4 Atractive', 70000, 'Fiat', 'Uno', 2011),
(110, 1, 10, 'Peugeot 207 Compact 5Ptas', 85000, 'vendo urgente por compra de otro vehicul', '207', 2009),
(113, 2, 2, 'BMW Serie 3 328i ', 100000, 'VENDO BMW 328I CLUBSPORT 1999 COUPE', 'ClubSport Coupe', 2013),
(115, 2, 3, 'Jeep IKA Continental 6L-226', 42000, 'Vendo jeep IKA 1958 motor Continental 4L', 'IKA', 2009),
(162, 1, 3, 'Chevrolet Astra Ii Gl 2.6 Nafta', 55000, 'Ãšnico dueÃ±o, excelente uso y mantenimi', 'Astra', 2007),
(163, 2, 1, 'Audi A5 Sportback 3.2 FSI S-Tronic Quattro ', 40000, 'Audi de tomi', 'A5', 2013);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Volcado de datos para la tabla `auto_imagen`
--

INSERT INTO `auto_imagen` (`id`, `id_auto`, `id_imagen`) VALUES
(66, 109, 58),
(67, 110, 59),
(70, 113, 62),
(72, 115, 64),
(122, 162, 117),
(123, 162, 118),
(124, 163, 119),
(125, 163, 120),
(126, 163, 121);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `texto`, `nombre`, `email`, `telefono`, `id_auto`) VALUES
(115, 'hola                                ', 'hola', 'hola', 0, 163),
(116, 'hola estoy interesado en el auto. espero', 'nacho', 'nacho@gmail.com', 123123, 163),
(117, 'asdasdasd                               ', 'buenas', 'buenas', 12123, 163),
(118, 'hasdasd                                ', 'hola', 'hola', 123123, 163);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `path`) VALUES
(51, 'imagenes/530a3056028ff.jpg'),
(57, 'imagenes/530bb1ef3c36b.jpg'),
(58, 'imagenes/530d1882a16cb.jpg'),
(59, 'imagenes/530d1928e3036.jpg'),
(60, 'imagenes/530d197e14f1a.jpg'),
(61, 'imagenes/530d19f3b7b22.jpg'),
(62, 'imagenes/530d1a4890bf8.jpg'),
(63, 'imagenes/530d1a90cbb4e.jpg'),
(64, 'imagenes/530d1eeaaac06.jpg'),
(102, 'imagenes/530eaaeb2a997.jpg'),
(103, 'imagenes/530eaba74262e.jpg'),
(104, 'imagenes/530eaba754565.jpg'),
(105, 'imagenes/530eabd7d4b2c.jpg'),
(106, 'imagenes/530eabd7e9ce1.jpg'),
(107, 'imagenes/530eabd80cbd3.jpg'),
(108, 'imagenes/530eb0b6ba44c.jpg'),
(109, 'imagenes/530eb0b6c8662.jpg'),
(110, 'imagenes/530eb0b6d6871.jpg'),
(111, 'imagenes/530f40ddb6ae9.jpg'),
(112, 'imagenes/530f40ddc2b8b.jpg'),
(113, 'imagenes/530f40ddced03.jpg'),
(114, 'imagenes/530f44df0ed42.jpg'),
(115, 'imagenes/530f44df1eeaf.jpg'),
(116, 'imagenes/530f44df2d037.jpg'),
(117, 'imagenes/530f68a9010c8.jpg'),
(118, 'imagenes/530f68a90ef19.jpg'),
(119, 'imagenes/530f69b3c3bd4.jpg'),
(120, 'imagenes/530f69b3d1ccb.jpg'),
(121, 'imagenes/530f69b3dfefe.jpg'),
(122, 'imagenes/530f6b3abb5fe.jpg'),
(123, 'imagenes/530f6b3acc55a.jpg'),
(124, 'imagenes/530f6b3adc6d8.jpg'),
(125, 'imagenes/530f6be3c804f.jpg'),
(126, 'imagenes/530f6be3d6201.jpg'),
(127, 'imagenes/530f6be3e4364.jpg');

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
(1, 'tomas', 'miliatomas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'nacho', 'ignaciojonas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

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
  ADD CONSTRAINT `auto_imagen_ibfk_4` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auto_imagen_ibfk_3` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
