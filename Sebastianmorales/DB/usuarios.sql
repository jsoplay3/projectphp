-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 02:21:36
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ru_ID` int(4) NOT NULL,
  `ru_userstatus` varchar(12) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `User_Mail` varchar(30) NOT NULL,
  `User_Document` int(30) NOT NULL,
  `User_Password` varchar(30) NOT NULL,
  `ru_FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Fecha_Modificacion` datetime NOT NULL DEFAULT current_timestamp(),
  `Usuario_Registro` varchar(30) NOT NULL,
  `Usuario_Modificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ru_ID`, `ru_userstatus`, `User_Name`, `User_Mail`, `User_Document`, `User_Password`, `ru_FechaRegistro`, `Fecha_Modificacion`, `Usuario_Registro`, `Usuario_Modificacion`) VALUES
(1, '', 'Sebastian', 'Sebas@12.com', 12341, '0192313', '2022-11-04 00:23:27', '2022-11-14 20:09:37', '', ''),
(2, '', 'Andres', 'Andres@01.com', 130192, '299193', '2022-11-04 00:23:27', '2022-11-14 20:09:37', '', ''),
(3, '', 'Maria', 'Maria@31.com', 10123131, '012931', '2022-11-04 00:23:27', '2022-11-14 20:09:37', '', ''),
(5, '', 'Pedro', 'Pedro@12.com', 101239, '129301', '2022-11-04 00:23:27', '2022-11-14 20:09:37', '', ''),
(6, '', 'Sebastian', 'Sebastianossa@12.com', 102913, '123019', '2022-11-04 00:23:27', '2022-11-14 20:09:37', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ru_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ru_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
