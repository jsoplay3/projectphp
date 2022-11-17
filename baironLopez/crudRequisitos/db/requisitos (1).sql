-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 19:47:06
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

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
-- Estructura de tabla para la tabla `registro_usuarios`
--

CREATE TABLE `registro_usuarios` (
  `id` int(4) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `mail_usuario` varchar(20) NOT NULL,
  `documento_usuario` int(10) NOT NULL,
  `clave_usuario` varchar(50) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_modificacion` datetime NOT NULL,
  `usuario_registro` varchar(40) NOT NULL,
  `usuario_modificacion` varchar(40) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_usuarios`
--

INSERT INTO `registro_usuarios` (`id`, `nombre_usuario`, `mail_usuario`, `documento_usuario`, `clave_usuario`, `fecha_registro`, `fecha_modificacion`, `usuario_registro`, `usuario_modificacion`, `estado`) VALUES
(1, 'Bairon', 'lopez@gmail.com', 1036925960, 'fe703d258c7ef5f50b71e06565a65aa07194907f', '2022-11-06 23:36:53', '0000-00-00 00:00:00', '', '', 0),
(4, 'Isabela', 'isaskt@gmail.com', 1542659523, '7c786eee02e184329d3789dcdce3751bdf7e9e88', '2022-11-07 00:28:37', '0000-00-00 00:00:00', '', '', 0),
(5, 'Juan Pablo', 'juanpa2@gmail.com', 1035462251, '59a8420fe333263e93834c8dda0e1559fb0c0890', '2022-11-14 00:23:29', '0000-00-00 00:00:00', '', '', 0),
(6, 'Isabela', 'isaskt@gmail.com', 1035462251, '6de26aea74c206329f850c066f97d9c3aa1a21b3', '2022-11-14 00:23:29', '0000-00-00 00:00:00', '', '', 0),
(7, 'Isabela', 'isaskt@gmail.com', 1035462251, '6de26aea74c206329f850c066f97d9c3aa1a21b3', '2022-11-14 00:23:29', '0000-00-00 00:00:00', '', '', 0),
(8, 'Juan Pablo', 'juanpa2@gmail.com', 1542659523, '59a8420fe333263e93834c8dda0e1559fb0c0890', '2022-11-09 01:29:27', '0000-00-00 00:00:00', '', '', 0),
(9, 'Sara', 'sarita22@gmail.com', 1122334455, '116aaf16016af23f0af075da409d5a4392ef3b76', '2022-11-09 01:28:41', '0000-00-00 00:00:00', '', '', 0),
(10, '', '', 0, '67a74306b06d0c01624fe0d0249a570f4d093747', '2022-11-10 23:14:25', '0000-00-00 00:00:00', '', '', 0),
(11, '', '', 0, '67a74306b06d0c01624fe0d0249a570f4d093747', '2022-11-14 00:23:41', '0000-00-00 00:00:00', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
