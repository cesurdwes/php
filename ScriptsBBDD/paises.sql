-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 26-10-2021 a las 13:26:31
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paises`
--
CREATE DATABASE IF NOT EXISTS `paises` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `paises`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `continente` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `continente`) VALUES
(1, 'España', 'Europa'),
(2, 'Francia', 'Europa'),
(3, 'Portugal', 'Europa'),
(4, 'Alemania', 'Europa'),
(5, 'Italia', 'Europa'),
(6, 'Marruecos', 'Africa'),
(7, 'Sudáfrica', 'Africa'),
(8, 'Kenia', 'Africa'),
(9, 'Argelia', 'Africa'),
(10, 'Egipto', 'Africa'),
(11, 'China', 'Asia'),
(12, 'Japon', 'Asia'),
(13, 'Kazajstan', 'Asia'),
(14, 'Arabia', 'Asia'),
(15, 'Tailandia', 'Asia'),
(16, 'Brasil', 'America'),
(17, 'Costa Rica', 'America'),
(18, 'Mexico', 'America'),
(19, 'EEUU', 'America'),
(20, 'Argentina', 'America'),
(21, 'Australia', 'Oceania'),
(22, 'Nueva Zelanda', 'Oceania');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
