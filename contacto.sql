-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2023 a las 01:33:47
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
-- Base de datos: `contactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Celular` varchar(11) NOT NULL,
  `Pais` varchar(30) NOT NULL,
  `Reunion` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Asunto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `Nombres`, `Apellidos`, `Email`, `Celular`, `Pais`, `Reunion`, `Image`, `Asunto`) VALUES
(21, 'Brayan', 'Pulido', 'iambrayanpulido@gmail.com', '3132115160', 'Colombia', '1 hora', 'BRAYAN.png', 'Asesoramiento, sobre como implementar el marketing en mi empresa'),
(22, 'Julian', 'Perez', 'iamjulianperez@gmail.com', '3789456123', 'Colombia', '1 hora y media', 'JULIAN.png', 'Consulta, sobre precios de implementación de marketing'),
(23, 'Sebastian', 'Pulido', 'sebastianpulido@gmail.com', '3216546549', 'Colombia', '2 horas', 'SEBASTIAN.png', 'Quiero información, sobre los recios que maneja');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
