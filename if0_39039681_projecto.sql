-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql111.infinityfree.com
-- Tiempo de generación: 22-05-2025 a las 05:05:05
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_39039681_projecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Peliculas`
--

CREATE TABLE `Peliculas` (
  `Titulo` text NOT NULL,
  `Fecha` date NOT NULL,
  `Valoracion` float NOT NULL,
  `Genero:` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `Peliculas`
--

INSERT INTO `Peliculas` (`Titulo`, `Fecha`, `Valoracion`, `Genero:`) VALUES
('Lord of ring', '2001-05-21', 4.6, 'Fantasia'),
('Batman the dark knight', '2008-07-18', 4.5, 'Accion'),
('Lord of ring', '2001-05-21', 4.6, 'Fantasia'),
('Batman the dark knight', '2008-07-18', 4.5, 'Accion'),
('South Park', '0000-00-00', 0, ''),
('South Park', '1999-06-30', 4, 'Comedia'),
('South Park', '1999-06-30', 4, 'Comedia'),
('palomas FC', '2024-10-08', 2, 'Terror'),
('palomas FC', '2024-10-08', 2, 'Terror');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
