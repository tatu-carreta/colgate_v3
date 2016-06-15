-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.16 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para colgate_v3
DROP DATABASE IF EXISTS `colgate_v3`;
CREATE DATABASE IF NOT EXISTS `colgate_v3` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `colgate_v3`;


-- Volcando estructura para tabla colgate_v3.persona
DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomyape` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `dni` int(11) NOT NULL,
  `domicilio` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `codPostal` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `provincia` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `recibir` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'S',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla colgate_v3.producto
DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_barra` bigint(20) NOT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_producto_persona` (`persona_id`),
  CONSTRAINT `FK_producto_persona` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
