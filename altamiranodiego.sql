-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-07-2022 a las 22:50:39
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `altamiranodiego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariospagina`
--

DROP TABLE IF EXISTS `usuariospagina`;
CREATE TABLE IF NOT EXISTS `usuariospagina` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `DNI` int NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `imagen` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuariospagina`
--

INSERT INTO `usuariospagina` (`id`, `nombre`, `apellido`, `DNI`, `mensaje`, `imagen`) VALUES
(10, 'Juan', 'Perez', 0, 'holaaaaa', 0),
(9, 'Juan', 'Perez', 1231231, 'holaaaaa', 1),
(12, 'Juan', 'Perez', 1231231, 'HOla', 4),
(13, 'Jazmin', 'Montes', 45454545, 'Gracias!', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
