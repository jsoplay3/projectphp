-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 18:34:38
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
-- Base de datos: `ecosoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registeradmin`
--

CREATE TABLE `registeradmin` (
  `nameAdmin` varchar(50) NOT NULL,
  `documentAdmin` int(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registeradmin`
--

INSERT INTO `registeradmin` (`nameAdmin`, `documentAdmin`, `password`) VALUES
('sebas', 1040870004, '0'),
('sebas', 1040870004, '0ca5cbfe26a627de166ef7bd239c629083900be4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registeruser`
--

CREATE TABLE `registeruser` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userMail` varchar(50) NOT NULL,
  `userDocument` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registerDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modificationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registeruser`
--

INSERT INTO `registeruser` (`id`, `userName`, `userMail`, `userDocument`, `password`, `registerDate`, `modificationDate`) VALUES
(4, 'sebas naranjo   ', 'sebas@gmail.com', 78787, '4befb694796ba148eb0a678eba39cedf85474ece', '2022-11-15 12:35:02', '2022-11-15 16:32:35'),
(5, 'sebas', 'sebas@gmail.com', 1040870004, '4befb694796ba148eb0a678eba39cedf85474ece', '2022-11-15 16:38:31', '2022-11-15 16:38:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registeruser`
--
ALTER TABLE `registeruser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
