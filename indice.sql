-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2014 a las 16:07:23
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `indice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
`id` int(15) NOT NULL,
  `cedula` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `imc` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `cedula`, `fecha`, `imc`) VALUES
(4, 259632, '2014-12-07', '26.6'),
(5, 259632, '2014-12-07', '45'),
(6, 259632, '2014-12-07', '45'),
(7, 259632, '2014-12-07', '45'),
(8, 789456123, '2014-12-07', '20.7'),
(9, 123456789, '2014-12-07', '15.5'),
(10, 123456789, '2014-12-07', '22.4'),
(11, 14801355, '2014-12-07', '23.9'),
(12, 14801355, '2014-12-07', '27.3'),
(13, 14801355, '2014-12-07', '30.7');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
