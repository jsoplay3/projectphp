-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 21:01:49
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `requisitos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `us_Id` int(11) NOT NULL,
  `us_estadoUsuario` varchar(12) NOT NULL,
  `Nombre` varchar(65) NOT NULL,
  `Mail` varchar(64) NOT NULL,
  `NroDocumento` int(15) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `us_fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `us_fechaModificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `us_usuarioRegistro` varchar(64) DEFAULT NULL,
  `us_usuarioModificacion` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`us_Id`, `us_estadoUsuario`, `Nombre`, `Mail`, `NroDocumento`, `Contraseña`, `us_fechaRegistro`, `us_fechaModificacion`, `us_usuarioRegistro`, `us_usuarioModificacion`) VALUES
(1, 'activo', 'maria', 'mariass.gt@gmail.com', 1004587967, '15986', '2022-11-09 19:34:09', '2022-11-09 14:34:09', NULL, NULL),
(2, 'activo', 'Alex', 'jul@gmail.com', 10089558, '15489', '2022-11-07 00:21:40', '0000-00-00 00:00:00', NULL, NULL),
(3, 'desactivado', 'julio', 'jul@gmail.com', 1001489558, '1458', '2022-11-07 00:20:15', '0000-00-00 00:00:00', NULL, NULL),
(4, 'desactivado', 'juan', 'juan@gmail.com', 10245876, '11052462', '2022-11-07 00:26:12', '0000-00-00 00:00:00', NULL, NULL),
(5, 'activo', 'mario', 'martio@gmail.com', 10458962, '12458633', '2022-11-07 00:00:12', '0000-00-00 00:00:00', NULL, NULL),
(6, 'activo', 'maria', 'mari@gmail.com', 1023488962, '158629', '2022-11-07 00:00:12', '0000-00-00 00:00:00', NULL, NULL),
(7, 'activo', 'rosa', 'marti@gmail.com', 11541547, '1235899', '2022-11-07 00:00:12', '0000-00-00 00:00:00', NULL, NULL),
(8, 'activo', 'rosa', 'juan@gmail.com', 1001489558, '1111', '2022-11-06 23:46:33', '0000-00-00 00:00:00', NULL, NULL),
(9, 'activo', 'mario', 'juan@gmail.com', 1001489558, '1141111', '2022-11-06 23:53:01', '0000-00-00 00:00:00', NULL, NULL),
(10, 'activo', 'juan', 'juanta@gmail.com', 1456987632, '10458965', '2022-11-07 00:53:06', '0000-00-00 00:00:00', NULL, NULL),
(11, 'activo', 'juan', 'juanta@gmail.com', 1456987632, '10458965', '2022-11-07 01:04:07', '0000-00-00 00:00:00', NULL, NULL),
(12, 'activo', 'Luisa', 'luisa@gmail.com', 102365895, '0', '2022-11-07 01:15:38', '0000-00-00 00:00:00', NULL, NULL),
(13, 'activo', 'Luisa', 'luisa@gmail.com', 102365895, '0', '2022-11-07 01:18:29', '0000-00-00 00:00:00', NULL, NULL),
(14, 'activo', 'Luisa', 'luisa@gmail.com', 102365895, '8', '2022-11-07 01:20:58', '0000-00-00 00:00:00', NULL, NULL),
(15, 'activo', 'xioma', 'xio@gmail.com', 1012569856, '0', '2022-11-07 01:22:47', '0000-00-00 00:00:00', NULL, NULL),
(16, 'activo', 'xioma', 'xio@gmail.com', 1012569856, '0', '2022-11-07 01:25:19', '0000-00-00 00:00:00', NULL, NULL),
(17, 'activo', 'xioma', 'xio@gmail.com', 1012569856, '0', '2022-11-07 01:25:47', '0000-00-00 00:00:00', NULL, NULL),
(18, 'activo', 'xioma', 'xio@gmail.com', 1012569856, '0', '2022-11-07 01:26:06', '0000-00-00 00:00:00', NULL, NULL),
(19, 'activo', 'camila', 'cam@gmail.com', 1000156329, '6e968284b0eff435b3c9b597e2f42f6b451e7139', '2022-11-07 01:38:19', '0000-00-00 00:00:00', NULL, NULL),
(20, 'activo', 'jose mario', 'josemario@gmail.com', 2147483647, '10470c3b4b1fed12c3baac014be15fac67c6e815', '2022-11-08 22:25:20', '0000-00-00 00:00:00', NULL, NULL),
(21, 'activo', 'carol', 'carol@gmail.com', 125896359, '10470c3b4b1fed12c3baac014be15fac67c6e815', '2022-11-09 19:00:36', '0000-00-00 00:00:00', NULL, NULL),
(22, 'activo', 'julia', 'julia@gmail.com', 10089557, 'e7fe2435a38af10b88af974e00351d81d034c320', '2022-11-09 19:02:30', '0000-00-00 00:00:00', NULL, NULL),
(23, 'activo', 'mario', 'mar@gmail.com', 1001489558, '8a570e9b2b407c25176471bebbd58a14c2235f2e', '2022-11-09 19:03:30', '0000-00-00 00:00:00', NULL, NULL),
(24, 'activo', 'rosalio', 'ros@gmail.com', 10089555, 'e54ee51a76244f35db9d2684291da2d80a724696', '2022-11-09 19:04:13', '0000-00-00 00:00:00', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`us_Id`,`Mail`,`NroDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `us_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
