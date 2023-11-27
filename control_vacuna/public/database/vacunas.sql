-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 20:11:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tablas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `id` int(11) NOT NULL,
  `Vacunas` varchar(50) NOT NULL,
  `1ra_dosis` varchar(50) NOT NULL,
  `2da_dosis` varchar(50) NOT NULL,
  `3ra_dosis` varchar(50) NOT NULL,
  `reactivación` varchar(50) NOT NULL,
  `dosis_(ml)` varchar(50) NOT NULL,
  `vía` varchar(50) NOT NULL,
  `región_aplicación` varchar(50) NOT NULL,
  `lugar_aplicación` varchar(50) NOT NULL,
  `resumen` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`id`, `Vacunas`, `1ra_dosis`, `2da_dosis`, `3ra_dosis`, `reactivación`, `dosis_(ml)`, `vía`, `región_aplicación`, `lugar_aplicación`, `resumen`, `imagen`) VALUES
(1, 'BCG', 'Al nacer', '-----', '-----', '-----', '0,05', 'ID', 'Deltoides Izquierdo', 'Maternidad', 'Tuberculosis', ''),
(2, 'Heberbiovac HB', 'Al nacer', '-----', '-----', '-----', '0,5', 'IM', '1/3 medio de la cara antero-lateral del muslo', 'Maternidad', 'Hepatitis B', ''),
(3, 'Heberpenta-L', '2 meses', '4 meses', '6 meses', '18 meses', '0,5', 'IM', '1/3 medio de la cara antero-lateral del muslo. A l', 'Policlínicos', 'Difteria, Tosferina, Hepatitis B y Haemophilus Inf', ''),
(4, 'VAC-MENGOC-BC', '3 meses', '5 meses', '-----', '-----', '0,5', 'IM', '1/3 medio de la cara antero-lateral del muslo', 'Policlínicos', 'Meningococo B y C', ''),
(5, 'IPV', '4 meses', '8 meses', '-----', '-----', '0,1', 'Intradérmica ', 'Deltoides Derecho', 'Policlínicos', 'Poliomielitis ', ''),
(6, 'DTP-VAC', '2 meses', '4 meses', '6 meses', '18 meses', '0,5', 'Intramuscular', 'Deltoides', 'Policlínicos', 'Difteria, Tétanos y Tosferina', ''),
(7, 'Quimi-Hib', '2 meses', '4 meses', '6 meses', '18 meses', '0,5', 'Intramuscular', 'Deltoides', 'Policlínicos', 'Haemophilus Influenzae Tipo B', ''),
(8, 'PRS', '12 meses', '-----', '-----', '6 años', '0,5', 'Sucutanea', 'Deltoides', 'Policlínicos y Escuelas', 'Parotiditis, Rubéola y Sarampión', ''),
(9, 'VA-DIFTET', '-----', '-----', '-----', '6 años', '0,5', 'Intramuscular', 'Deltoides', 'Escuelas', 'Difteria y Tétanos', ''),
(10, 'Vax-TYVI', '10 años', '-----', '-----', '13 y 16 años', '0,5', 'Intramuscular', 'Deltoides', 'Escuelas', 'Fiebre Tifoidea', ''),
(11, 'Vax-TET', '-----', '-----', '-----', '14 años', '0,5', 'Intramuscular', 'Deltoides', 'Escuelas', 'Tétanos', ''),
(12, 'OPV', 'En campaña anual. Niños menores de 3 años y 9 años', 'En campaña anual. Niños menores de 3 años y 9 años', 'En campaña anual. Niños menores de 3 años y 9 años', 'En campaña anual. Niños menores de 3 años y 9 años', '2 gotas', 'Oral', '-----', 'Policlínicos y Consultorios', 'Poliomielitis ', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
