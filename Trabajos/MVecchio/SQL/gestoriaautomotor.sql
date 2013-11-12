-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2013 a las 19:29:56
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestoriaautomotor`
--
CREATE DATABASE IF NOT EXISTS `gestoriaautomotor` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `gestoriaautomotor`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotor`
--

CREATE TABLE IF NOT EXISTS `automotor` (
  `id_automotor` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` int(5) unsigned NOT NULL,
  `dominio/Patente` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `marca` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `modelo` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `marca_motor` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nro_motor` int(8) NOT NULL,
  `marca_chasis` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nro_chasis` int(8) NOT NULL,
  `anio` int(4) NOT NULL,
  `anotaciones` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_automotor`),
  UNIQUE KEY `Dominio/Patente` (`dominio/Patente`),
  UNIQUE KEY `id_automotor` (`id_automotor`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla de automotores (para tramites)' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `automotor`
--

INSERT INTO `automotor` (`id_automotor`, `id_cliente`, `dominio/Patente`, `marca`, `modelo`, `marca_motor`, `nro_motor`, `marca_chasis`, `nro_chasis`, `anio`, `anotaciones`) VALUES
(1, 1, 'sew899', 'ford', 'fiesta', 'ford', 12345678, 'ford', 23413, 2001, NULL),
(2, 2, 'ajg543', 'chevrolet', 'corsa', 'chevrolet', 23423434, 'chevrolet', 2349437, 2006, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotor_publicado`
--

CREATE TABLE IF NOT EXISTS `automotor_publicado` (
  `id_publicacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_automotor` int(5) unsigned NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `precio` int(7) unsigned NOT NULL,
  `forma_de_pago` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `nuevo/usado` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `kilometros` int(10) unsigned NOT NULL,
  `combustible` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `cant_visitas` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_publicacion`),
  UNIQUE KEY `id_publicacion` (`id_publicacion`),
  KEY `id_automotor` (`id_automotor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `apellido` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `direccion` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `telefono` int(15) unsigned NOT NULL,
  `provincia` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `localidad` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `tipo_Documento` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `nro_Documento` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `razon_Social` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `descuento/Oferta` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `es_cliente_amigo` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `web` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `url_imagen` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `Tipo_Documento` (`tipo_Documento`,`nro_Documento`),
  UNIQUE KEY `id_cliente` (`id_cliente`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla de clientes' AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `direccion`, `telefono`, `provincia`, `localidad`, `email`, `tipo_Documento`, `nro_Documento`, `razon_Social`, `descuento/Oferta`, `es_cliente_amigo`, `web`, `url_imagen`) VALUES
(1, 'TREBUQ SRL', 'TREBUQ SRL', 'Hornos 2048', 424228, 'Buenos Aires', 'Olavarria', 'trebuq@gmail.com', 'CUI', '20-05415366-0', 'TREBUQ SRL', NULL, 's', 'www.trebuqsrl.com.ar', 'img/trebuqsrl.jpg'),
(2, 'Simone Automotores', 'Simone Automotores', 'Av. Independencia 2561', 0, 'Buenos Aires', 'Mar del Plata', 'simone@gmail.com', 'CUI', '30-69133886-6', 'Simone Automotores', NULL, 's', 'www.simoneautomotores.com.ar/', 'img/simoneautomotores.png'),
(3, 'TREBUQ SRL', 'TREBUQ SRL', 'Hornos 2048', 424228, 'Buenos Aires', 'Olavarria', NULL, 'CUI', '20-05415366-1', 'TREBUQ SRL', NULL, 's', 'www.trebuqsrl.com.ar', 'img/trebuqsrl.jpg'),
(4, 'Simone Automotores', 'Simone Automotores', 'Av. Independencia 2561', 0, 'Buenos Aires', 'Mar del Plata', NULL, 'CUI', '30-69133886-2', 'Simone Automotores', NULL, 's', 'www.simoneautomotores.com.ar/', 'img/simoneautomotores.png'),
(5, 'Carlos', 'Nievas', 'nn', 11, 'Buenos Aires', 'Olavarria', 'carlosnievas', 'dni', '1', NULL, NULL, 'n', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajecontacto`
--

CREATE TABLE IF NOT EXISTS `mensajecontacto` (
  `id_mensaje` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `asunto` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `telefono` int(15) DEFAULT NULL,
  `mensaje` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_mensaje`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `mensajecontacto`
--

INSERT INTO `mensajecontacto` (`id_mensaje`, `nombre`, `email`, `asunto`, `telefono`, `mensaje`) VALUES
(7, 'matias vecchio', 'vecchiomatias@gmail.com', 'uno', 2147483647, 'asdasd'),
(8, 'matias vecchio', 'vecchiomatias@gmail.com', 'dos', 2147483647, 'asda'),
(9, 'matias vecchio', 'vecchiomatias@gmail.com', 'cuatro', 2147483647, 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `id_oferta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_oferta` date NOT NULL,
  `id_cliente` int(5) unsigned NOT NULL,
  `id_publicacion` int(5) unsigned NOT NULL,
  PRIMARY KEY (`id_oferta`),
  UNIQUE KEY `id_oferta_2` (`id_oferta`),
  KEY `id_publicacion` (`id_publicacion`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_oferta` (`id_oferta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla de ofertas a automotores publicados' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tramite`
--

CREATE TABLE IF NOT EXISTS `tipo_tramite` (
  `id_tramite` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `valor` int(5) unsigned NOT NULL,
  `demora Aprox` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `promocion` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_tramite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_tramite`
--

INSERT INTO `tipo_tramite` (`id_tramite`, `nombre`, `valor`, `demora Aprox`, `promocion`) VALUES
(1, 'inscripcion_inicial', 200, '2 dias habiles', NULL),
(2, 'transferencia', 250, '6 dias habiles', '10% efectivo'),
(3, 'duplicado_chapa', 540, '48 hs', NULL),
(4, 'duplicado_cedula', 300, '48 hs', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

CREATE TABLE IF NOT EXISTS `tramite` (
  `nro_tramite` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` int(5) unsigned NOT NULL,
  `id_automotor` int(5) unsigned NOT NULL,
  `id_tramite` int(2) unsigned NOT NULL,
  `fecha_inicio` date NOT NULL,
  `estado` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`nro_tramite`),
  UNIQUE KEY `nro_tramite` (`nro_tramite`),
  KEY `id_automotor` (`id_automotor`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_tramite` (`id_tramite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla para estado de tramites' AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tramite`
--

INSERT INTO `tramite` (`nro_tramite`, `id_cliente`, `id_automotor`, `id_tramite`, `fecha_inicio`, `estado`) VALUES
(1, 1, 1, 1, '2013-10-31', 'Proceso'),
(2, 1, 1, 2, '2013-11-01', 'Pendiente'),
(3, 1, 1, 4, '2013-11-04', 'Finalizado'),
(4, 1, 1, 4, '2013-10-30', 'Proceso'),
(5, 1, 1, 3, '2013-10-25', 'Pendiente'),
(6, 2, 2, 2, '2013-11-04', 'Proceso'),
(7, 2, 2, 3, '2013-11-04', 'Finalizado'),
(8, 2, 2, 3, '2013-11-01', 'Finalizado'),
(9, 2, 2, 4, '2013-10-17', 'Pendiente'),
(10, 2, 2, 3, '2013-10-16', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `useraccount`
--

CREATE TABLE IF NOT EXISTS `useraccount` (
  `id_cliente` int(5) unsigned NOT NULL,
  `pass` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `iniciosesion` int(10) unsigned DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `useraccount`
--

INSERT INTO `useraccount` (`id_cliente`, `pass`, `iniciosesion`, `email`) VALUES
(5, '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin'),
(2, '47eb752bac1c08c75e30d9624b3e58b7', NULL, 'simone@gmail.com'),
(1, '2a33dfa9b9ab0282ed9b21e14f991983', NULL, 'trebuq@gmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automotor`
--
ALTER TABLE `automotor`
  ADD CONSTRAINT `fk_automotor` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `automotor_publicado`
--
ALTER TABLE `automotor_publicado`
  ADD CONSTRAINT `fk_apublicado` FOREIGN KEY (`id_automotor`) REFERENCES `automotor` (`id_automotor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `fk_ofertaa` FOREIGN KEY (`id_publicacion`) REFERENCES `automotor_publicado` (`id_publicacion`),
  ADD CONSTRAINT `fk_ofertac` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `tramite`
--
ALTER TABLE `tramite`
  ADD CONSTRAINT `fk_tramitea` FOREIGN KEY (`id_automotor`) REFERENCES `automotor` (`id_automotor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tramitec` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tramitet` FOREIGN KEY (`id_tramite`) REFERENCES `tipo_tramite` (`id_tramite`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `fk_useraccount` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
