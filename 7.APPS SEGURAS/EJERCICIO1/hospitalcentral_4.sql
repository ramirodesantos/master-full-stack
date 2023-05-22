-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospitalcentral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellidos` varchar(600) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `anamnesis` varchar(5000) NOT NULL,
  `diagnostico` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellidos`, `dni`, `anamnesis`, `diagnostico`) VALUES
(1, 'JUAN', 'SANCHEZ MONTES', '11111111A', 'Presenta cuadro vírico. Fiebre y dolor de cabeza.', 'Alta. Paracetamol cada 8 horas y mucha agua.'),
(2, 'ANA TERESA', 'SOLIS GARCÍA', '77777777k', 'Dolor lumbar.', 'Alta. Ibuprofeno cada 8 horas y cita para radiografía.'),
(3, 'PEPA', 'RODRÍGUEZ JIMÉNEZ', '00000000n', 'Dolor fuerte en la muñeca derecha.', 'Alta. Se deriva a traumatología.'),
(4, 'ANTONIO', 'ARCOS DE LA CRUZ', '55555555J', 'Dolor de muela del juicio.', 'Alta. Infección de muela antibiótico cada 8 horas.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
