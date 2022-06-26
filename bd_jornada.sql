-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220616.7a6bd9eb57
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2022 a las 12:00:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_jornada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_06_26_002543_create_residentes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes`
--

CREATE TABLE `residentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comida_entregable` tinyint(4) DEFAULT 0,
  `observacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `residentes`
--

INSERT INTO `residentes` (`id`, `nombre`, `apellidos`, `telefono`, `correo`, `edad`, `direccion`, `comida_entregable`, `observacion`, `created_at`, `updated_at`) VALUES
(1, 'Radhames', 'Encarnacion Encarnacion', 8492052418, 'Radhamesenc24102@gmail.com', 20, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(2, 'Marino', 'Encarnacion Encarnacion', 8492051452, 'Marinoenc24155@gmail.com', 17, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(3, 'Llecnia', 'Encarnacion Encarnacion', 8492052418, 'Llecnia@gmail.com', 40, 'Hondo Valle', 0, 'No pedi nada', '2022-06-26 04:00:00', NULL),
(4, 'Amarlin', 'Encarnacion Encarnacion', 8492051452, 'Amarlin@gmail.com', 25, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(5, 'Lucenilda', 'Encarnacion Encarnacion', 8492052418, 'Lucenilda@gmail.com', 47, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(6, 'Amado', 'Encarnacion Encarnacion', 8492051452, 'Amdao@gmail.com', 77, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(7, 'Leidy', 'Encarnacion Encarnacion', 8492052418, 'Leidy@gmail.com', 25, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(8, 'Noelia', 'Encarnacion Encarnacion', 8492051452, 'Noelia@gmail.com', 15, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(9, 'Luzfranny', 'Encarnacion Encarnacion', 8492052418, 'Luzfranny@gmail.com', 54, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(10, 'Jefferson', 'Encarnacion Encarnacion', 8492051452, 'Jefferson@gmail.com', 25, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(11, 'Ariel', 'Encarnacion Encarnacion', 8492052418, 'Ariel@gmail.com', 17, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(12, 'Roister', 'Encarnacion Encarnacion', 8492051452, 'Roiser@gmail.com', 28, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(13, 'Ericka', 'Encarnacion Encarnacion', 8492052418, 'Ericka@gmail.com', 17, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(14, 'Paola', 'Encarnacion Encarnacion', 8492051452, 'Paola@gmail.com', 52, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(15, 'Pablo', 'Encarnacion Encarnacion', 8492052418, 'Pablo@gmail.com', 10, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(16, 'Bemmi', 'Encarnacion Encarnacion', 8492051452, 'Bemmi@gmail.com', 25, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(17, 'Elian', 'Encarnacion Encarnacion', 8492052418, 'Elian@gmail.com', 24, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(18, 'Henry', 'Encarnacion Encarnacion', 8492051452, 'Henry@gmail.com', 27, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(19, 'Laura', 'Encarnacion Encarnacion', 8492052418, 'Laura@gmail.com', 47, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(20, 'Natalia', 'Encarnacion Encarnacion', 8492051452, 'Natalia@gmail.com', 37, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(21, 'Samantha', 'Encarnacion Encarnacion', 8492052418, 'Samantha@gmail.com', 35, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(22, 'Kaela', 'Encarnacion Encarnacion', 8492051452, 'Kaela@gmail.com', 57, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(23, 'Colombia', 'Encarnacion Encarnacion', 8492052418, 'Colombia@gmail.com', 17, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(24, 'Zurry', 'Encarnacion Encarnacion', 8492051452, 'Zurry@gmail.com', 25, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(25, 'Xaviel', 'Encarnacion Encarnacion', 8492052418, 'Xaviel@gmail.com', 66, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(26, 'Bemson', 'Encarnacion Encarnacion', 8492051452, 'Bemson@gmail.com', 57, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(27, 'Daniel', 'Encarnacion Encarnacion', 8492052418, 'Daniel@gmail.com', 20, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(28, 'Fidia', 'Encarnacion Encarnacion', 8492051452, 'Fidia@gmail.com', 68, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(29, 'Hondura', 'Encarnacion Encarnacion', 8492052418, 'Hondura@gmail.com', 44, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(30, 'Gael', 'Encarnacion Encarnacion', 8492051452, 'Gael@gmail.com', 35, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(31, 'Ilia', 'Encarnacion Encarnacion', 8492052418, 'Ilia@gmail.com', 77, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(32, 'Koat', 'Encarnacion Encarnacion', 8492051452, 'Koat@gmail.com', 70, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(33, 'Nana', 'Encarnacion Encarnacion', 8492052418, 'Nana@gmail.com', 55, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(34, 'Quezy', 'Encarnacion Encarnacion', 8492051452, 'Quezy@gmail.com', 80, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(35, 'Sara', 'Encarnacion Encarnacion', 8492052418, 'Sara@gmail.com', 10, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(36, 'Trixy', 'Encarnacion Encarnacion', 8492051452, 'Trixy@gmail.com', 100, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(37, 'Veronica', 'Encarnacion Encarnacion', 8492052418, 'Veronica@gmail.com', 52, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL),
(38, 'Wendy', 'Encarnacion Encarnacion', 8492051452, 'Wendy@gmail.com', 57, 'San Jose', 0, 'No pedi Ningun servicio', '2022-06-26 04:00:00', NULL),
(39, 'Darwin', 'Encarnacion Encarnacion', 8492052418, 'Darwin@gmail.com', 17, 'Hondo Valle', 1, 'Gracias por el servicio', '2022-06-26 04:00:00', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `residentes`
--
ALTER TABLE `residentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `residentes`
--
ALTER TABLE `residentes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



