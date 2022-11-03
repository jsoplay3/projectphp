-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 13:20:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6
-- version protocolo : 10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--base de datso de requisitos

-- Estructura de tabla para la tabla `registro_usuarios`

CREATE TABLE `registro_usuarios` (
  `nombre_usuario` varchar(20) NOT NULL,
  `mail_usuario` varchar(20) NOT NULL,
  `documento_usuario` int(10) NOT NULL,
  `clave_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_usuarios`
--

INSERT INTO `registro_usuarios` (`nombre_usuario`, `mail_usuario`, `documento_usuario`, `clave_usuario`) VALUES
('isabell', 'lanenagmail.com', 654321, 'asdfgh456123'),
('Juan Pablo', 'juanpa2@gmail.com', 741852, 'qazwsxedc123'),
('Isabela', 'isaskt@gmail.com', 526787, 'yhnujmiklo852'),
('Valentina', 'valenhe@gmail.com', 254862, 'iuytghjk963');
COMMIT;





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
