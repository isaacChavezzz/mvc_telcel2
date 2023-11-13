-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 10:53:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_telcel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_oferta`
--

CREATE TABLE `tbl_oferta` (
  `id` int(11) NOT NULL,
  `id_paqYrec` int(10) NOT NULL,
  `id_chip` int(10) NOT NULL,
  `id_accesorios` int(10) NOT NULL,
  `id_tel` int(10) NOT NULL,
  `ofer_paqYrec` int(11) NOT NULL,
  `ofer_chip` int(11) NOT NULL,
  `ofer_accesorios` int(11) NOT NULL,
  `ofer_tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_oferta`
--

INSERT INTO `tbl_oferta` (`id`, `id_paqYrec`, `id_chip`, `id_accesorios`, `id_tel`, `ofer_paqYrec`, `ofer_chip`, `ofer_accesorios`, `ofer_tel`) VALUES
(3, 1, 1, 1, 1, 111, 111, 111, 111),
(4, 2, 2, 2, 2, 222, 222, 222, 222),
(5, 3, 3, 3, 3, 333, 333, 333, 333),
(6, 4, 4, 4, 4, 444, 444, 444, 444);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_oferta`
--
ALTER TABLE `tbl_oferta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_oferta`
--
ALTER TABLE `tbl_oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
