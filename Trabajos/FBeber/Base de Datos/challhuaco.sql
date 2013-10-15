-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2013 a las 21:33:18
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `challhuaco`
--
CREATE DATABASE IF NOT EXISTS `challhuaco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `challhuaco`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `dni` decimal(8,0) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`dni`, `password`) VALUES
('36793323', 'florencia1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `nombre_categoria` varchar(40) NOT NULL,
  PRIMARY KEY (`nombre_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`nombre_categoria`) VALUES
('Camping'),
('Indumentaria'),
('Paneles solares'),
('Pesca'),
('Tiro Deportivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE IF NOT EXISTS `informacion` (
  `localidad` varchar(20) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` smallint(6) NOT NULL,
  `telefono` decimal(15,0) NOT NULL,
  `movil` decimal(13,0) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `horario_desde` int(2) NOT NULL,
  `horario_desde_1` int(2) NOT NULL,
  `horario_hasta` int(2) NOT NULL,
  `horario_hasta_1` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`localidad`, `provincia`, `calle`, `numero`, `telefono`, `movil`, `mail`, `horario_desde`, `horario_desde_1`, `horario_hasta`, `horario_hasta_1`) VALUES
('Daireaux', 'Buenos Aires', 'Pellegrini ', 1200, '2316450000', '2314530000', 'challhuaco@gmail.com', 8, 30, 21, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id_mail` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`id_mail`, `nombre`, `mail`) VALUES
(1, 'ejemplo1', 'ejemplo1@gmail.com'),
(2, 'ejemplo2', 'ejemplo2@hotmail.com'),
(3, 'ejemplo3', 'ejemplo@yahoo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `precio` decimal(6,0) DEFAULT NULL,
  `nombre_subcategoria` varchar(40) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `Fk_producto` (`nombre_subcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `descripcion`, `imagen`, `precio`, `nombre_subcategoria`) VALUES
(6, 'Chaleco Camuflado Fo', 'Chaleco de caza.\r\nMaterial: Gabardina 8oz camuflada, 100% Algodón. Bolsillo interior en espalda con cordura impermeable y lavable. 2 Bolsillos frontales inferiores con fuelle, 1 bolsillo superior plaqué. \r\nConsultar Talles (M al 2XL)', 'indumentaria/imagen_1.png', '480', 'Indumentaria'),
(7, 'Remera Camuflada For', 'Remera manga corta. Material: Jersey 24/1 camuflado 100% Algodón. \r\nConsultar Talles (M al 2XL)', 'indumentaria/imagen_2.png', '179', 'Indumentaria'),
(8, 'Bermuda Camuflada Fo', 'Bermuda de caza. Gabardina 8oz 100% Algodón, camuflada. Cintura fija. Cierres YKK. 2 Bolsillos frontales. 2 bolsillos cargo laterales con cierre de contacto. 2 bolsillos cargo traseros con cierre de contacto. \r\nConsultar Talles (M al 2XL)', 'indumentaria/imagen_3.png', '489', 'Indumentaria'),
(9, 'Reel Spinit Stone FD', 'Con 2 rulemanes\r\nCarrete extra de grafito\r\nManivela balanceada ambidiestra\r\nNuevo Sistema Pick Up\r\nAnti-reverse silencioso Multi Stop\r\nFreno delantero progresivo.\r\nCarrete extra de grafito\r\nCapacidad: 0.40/140 - 0.50/100\r\nRelación: 5.5:1', 'reels/imagen_1.jpg', '159', 'Reels'),
(10, 'Reel Spinit Phanter ', 'Carrete extra de grafito\r\nManivela balanceada\r\nAnti-reverse silencioso\r\n6 rulemanes\r\nNuevo sistema Pick Up', 'reels/imagen_2.jpg', '330', 'Reels'),
(20, 'asdsa', 'dsada', 'dssa', '0', 'Indumentaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `nombre_subcategoria` varchar(40) NOT NULL,
  `nombre_categoria` varchar(40) NOT NULL,
  PRIMARY KEY (`nombre_subcategoria`),
  KEY `Fk_subcategoria` (`nombre_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`nombre_subcategoria`, `nombre_categoria`) VALUES
('Accesorios', 'Camping'),
('Bolsas de Dormir', 'Camping'),
('Carpas', 'Camping'),
('Linternas', 'Camping'),
('Mochilas', 'Camping'),
('Optica Recreativa', 'Camping'),
('Indumentaria', 'Indumentaria'),
('Paneles Solaresa', 'Paneles solares'),
('Canias', 'Pesca'),
('Reels', 'Pesca'),
('Rifles', 'Tiro Deportivo');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `Fk_producto` FOREIGN KEY (`nombre_subcategoria`) REFERENCES `subcategoria` (`nombre_subcategoria`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `Fk_subcategoria` FOREIGN KEY (`nombre_categoria`) REFERENCES `categoria` (`nombre_categoria`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
