-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: 192.168.3.149
-- Tiempo de generación: 15-09-2018 a las 19:30:10
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
-- Estructura de tabla para la tabla `musica_cantantes`
--

CREATE TABLE IF NOT EXISTS `musica_cantantes` (
  `ID` int(11) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `descripcio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `musica_cantantes`
--

INSERT INTO `musica_cantantes` (`ID`, `nom`, `descripcio`) VALUES
(1, 'Bruce Dickinson', 'England'),
(2, 'Rob Halford', 'England'),
(3, 'Michael Kiske', 'Germany'),
(4, 'Andi Deris', 'Germany');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `musica_cantantes`
--
ALTER TABLE `musica_cantantes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `musica_cantantes`
--
ALTER TABLE `musica_cantantes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
