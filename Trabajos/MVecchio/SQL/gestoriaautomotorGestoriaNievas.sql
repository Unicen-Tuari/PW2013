-- phpMyAdmin SQL Dump
-- version 2.9.0.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-06-2013 a las 18:31:31
-- Versión del servidor: 5.0.24
-- Versión de PHP: 5.1.6
-- 
-- Base de datos: `gestoriaautomotor`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `automotor`
-- 

CREATE TABLE IF NOT EXISTS `automotor` (
  `id_automotor` int(5) unsigned NOT NULL,
  `id_cliente` int(5) unsigned NOT NULL,
  `Dominio/Patente` varchar(10) collate latin1_general_ci NOT NULL,
  `Marca` varchar(20) collate latin1_general_ci NOT NULL,
  `Modelo` varchar(30) collate latin1_general_ci NOT NULL,
  `Marca_motor` varchar(20) collate latin1_general_ci NOT NULL,
  `Nro_motor` int(8) NOT NULL,
  `Marca_chasis` varchar(20) collate latin1_general_ci NOT NULL,
  `Nro_chasis` int(8) NOT NULL,
  `Año` int(4) NOT NULL,
  `Anotaciones` varchar(50) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id_automotor`),
  UNIQUE KEY `Dominio/Patente` (`Dominio/Patente`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla de automotores (para tramites)';

-- 
-- Volcar la base de datos para la tabla `automotor`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `automotor_publicado`
-- 

CREATE TABLE IF NOT EXISTS `automotor_publicado` (
  `id_publicacion` int(10) unsigned NOT NULL auto_increment,
  `id_automotor` int(5) unsigned NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `precio` int(7) unsigned NOT NULL,
  `forma_de_pago` varchar(25) collate latin1_general_ci NOT NULL,
  `nuevo/usado` varchar(20) collate latin1_general_ci NOT NULL,
  `kilometros` int(10) unsigned NOT NULL,
  `combustible` varchar(20) collate latin1_general_ci NOT NULL,
  `cant_visitas` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id_publicacion`),
  KEY `id_automotor` (`id_automotor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `automotor_publicado`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cliente`
-- 

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(5) unsigned NOT NULL auto_increment,
  `Nombre` varchar(20) collate latin1_general_ci NOT NULL,
  `Apellido` varchar(20) collate latin1_general_ci NOT NULL,
  `Direccion` varchar(30) collate latin1_general_ci NOT NULL,
  `Telefono` int(15) unsigned NOT NULL,
  `Provincia` varchar(20) collate latin1_general_ci NOT NULL,
  `Localidad` varchar(20) collate latin1_general_ci NOT NULL,
  `e-mail` varchar(30) collate latin1_general_ci default NULL,
  `Tipo_Documento` varchar(3) collate latin1_general_ci NOT NULL,
  `Nro_Documento` varchar(13) collate latin1_general_ci NOT NULL,
  `Razon_Social` varchar(30) collate latin1_general_ci default NULL,
  `Descuento/Oferta` varchar(30) collate latin1_general_ci default NULL,
  `es_cliente_amigo` varchar(1) collate latin1_general_ci NOT NULL,
  `web` varchar(30) collate latin1_general_ci default NULL,
  `url_imagen` varchar(30) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id_cliente`),
  UNIQUE KEY `Tipo_Documento` (`Tipo_Documento`,`Nro_Documento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla de clientes' AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `cliente`
-- 

INSERT INTO `cliente` (`id_cliente`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Provincia`, `Localidad`, `e-mail`, `Tipo_Documento`, `Nro_Documento`, `Razon_Social`, `Descuento/Oferta`, `es_cliente_amigo`, `web`, `url_imagen`) VALUES 
(1, 'TREBUQ SRL', 'TREBUQ SRL', 'Hornos 2048', 424228, 'Buenos Aires', 'Olavarria', NULL, 'CUI', '20-05415366-0', 'TREBUQ SRL', NULL, 's', 'www.trebuqsrl.com.ar', 'imagenes/trebuqsrl.jpg'),
(2, 'Simone Automotores', 'Simone Automotores', 'Av. Independencia 2561', 0, 'Buenos Aires', 'Mar del Plata', NULL, 'CUI', '30-69133886-6', 'Simone Automotores', NULL, 's', 'www.simoneautomotores.com.ar/', 'imagenes/simoneautomotores.png'),
(3, 'TREBUQ SRL', 'TREBUQ SRL', 'Hornos 2048', 424228, 'Buenos Aires', 'Olavarria', NULL, 'CUI', '20-05415366-1', 'TREBUQ SRL', NULL, 's', 'www.trebuqsrl.com.ar', 'imagenes/trebuqsrl.jpg'),
(4, 'Simone Automotores', 'Simone Automotores', 'Av. Independencia 2561', 0, 'Buenos Aires', 'Mar del Plata', NULL, 'CUI', '30-69133886-2', 'Simone Automotores', NULL, 's', 'www.simoneautomotores.com.ar/', 'imagenes/simoneautomotores.png');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `oferta`
-- 

CREATE TABLE IF NOT EXISTS `oferta` (
  `id_oferta` int(10) unsigned NOT NULL auto_increment,
  `Fecha_oferta` date NOT NULL,
  `id_cliente` int(5) unsigned NOT NULL,
  `id_publicacion` int(5) unsigned NOT NULL,
  PRIMARY KEY  (`id_oferta`),
  KEY `id_publicacion` (`id_publicacion`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla de ofertas a automotores publicados' AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `oferta`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_tramite`
-- 

CREATE TABLE IF NOT EXISTS `tipo_tramite` (
  `id_tramite` int(2) unsigned NOT NULL auto_increment,
  `Nombre` varchar(20) collate latin1_general_ci NOT NULL,
  `Valor` int(5) unsigned NOT NULL,
  `Demora Aprox` varchar(30) collate latin1_general_ci NOT NULL,
  `Promocion` varchar(30) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id_tramite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tipo_tramite`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tramite`
-- 

CREATE TABLE IF NOT EXISTS `tramite` (
  `nro_tramite` int(10) unsigned NOT NULL auto_increment,
  `id_cliente` int(5) unsigned NOT NULL,
  `id_automotor` int(5) unsigned NOT NULL,
  `id_tramite` int(2) unsigned NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Estado` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nro_tramite`),
  KEY `id_automotor` (`id_automotor`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_tramite` (`id_tramite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabla para estado de tramites' AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tramite`
-- 


-- 
-- Filtros para las tablas descargadas (dump)
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
ALTER TABLE `oferta`
  ADD CONSTRAINT `fk_ofertaa` FOREIGN KEY (`id_publicacion`) REFERENCES `automotor_publicado` (`id_publicacion`),  ADD CONSTRAINT `fk_ofertac` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

-- 
-- Filtros para la tabla `tramite`
-- 
ALTER TABLE `tramite`
  ADD CONSTRAINT `fk_tramitea` FOREIGN KEY (`id_automotor`) REFERENCES `automotor` (`id_automotor`) ON UPDATE CASCADE,
ALTER TABLE `tramite`
  ADD CONSTRAINT `fk_tramitea` FOREIGN KEY (`id_automotor`) REFERENCES `automotor` (`id_automotor`) ON UPDATE CASCADE,  ADD CONSTRAINT `fk_tramitec` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,
ALTER TABLE `tramite`
  ADD CONSTRAINT `fk_tramitea` FOREIGN KEY (`id_automotor`) REFERENCES `automotor` (`id_automotor`) ON UPDATE CASCADE,  ADD CONSTRAINT `fk_tramitec` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,  ADD CONSTRAINT `fk_tramitet` FOREIGN KEY (`id_tramite`) REFERENCES `tipo_tramite` (`id_tramite`) ON UPDATE CASCADE;
