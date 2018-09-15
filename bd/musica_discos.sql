-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: 192.168.3.149
-- Tiempo de generación: 15-09-2018 a las 19:30:19
-- Versión del servidor: 5.5.57-0+deb7u1-log
-- Versión de PHP: 5.3.29-1~dotdeb.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `forja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica_discos`
--

CREATE TABLE IF NOT EXISTS `musica_discos` (
  `ID` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `descripcio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `musica_discos`
--

INSERT INTO `musica_discos` (`ID`, `nom`, `descripcio`) VALUES
(1, 'The Number of the Beast', 'Iron Maiden'),
(2, 'Power Slave', 'Iron Maiden'),
(3, 'Seventh son of a seventh son', 'Iron Maiden'),
(4, 'Screaming for Venjance', 'Judas Priest'),
(5, 'British Steel', 'Judas Priest'),
(6, 'Painkiller', 'Judas Priest'),
(7, 'Keeper of the seven Keys I', 'Helloween'),
(8, 'Keeper of the seven keys II', 'Helloween'),
(9, 'Master of the Rings', 'Helloween');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `musica_discos`
--
ALTER TABLE `musica_discos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `musica_discos`
--
ALTER TABLE `musica_discos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
