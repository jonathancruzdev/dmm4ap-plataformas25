-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2025 a las 17:19:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descripcion`) VALUES
(1, 'Ciencia ficción ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(128) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `portada` varchar(1024) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `descripcion`, `portada`, `id_categoria`) VALUES
(1, 'Capitán América: El Soldado de Invierno', 'Steve Rogers sigue aclimatándose al mundo moderno en Washington, pero acaba viéndose envuelto en una trama de intrigas que pone en peligro a nuestro planeta. Eso hará que una fuerzas con Viuda Negra y Halcón para desenmascarar a los conspiradores, entre los que encontrará un enemigo tan inesperado como poderoso: el Soldado de Invierno', 'images/capitan_america2.jpeg', 1),
(2, 'Black Panther: Wakanda Forever', ' La reina Ramonda, Shuri, M’Baku, Okoye y las Dora Milaje luchan para proteger su nación de la injerencia de potencias mundiales a raíz de la muerte del rey T’Challa. Mientras los wakandianos se esfuerzan por adaptarse a su nueva etapa, los héroes deben actuar unidos, con la ayuda del Perro de la Guerra Nakia y Everett Ross, y forzar un nuevo destino para el reino de Wakanda.', 'images/BlackPanther.jpeg', 1),
(3, 'Doctor Strange en el multiverso de la locura', ' En Doctor Strange en el multiverso de la locura de Marvel Studios, el MCU desbloquea el Multiverso y amplía sus límites como nunca lo había hecho. Viaja a lo desconocido con el Doctor Strange, quien, con ayuda de aliados místicos tanto antiguos como nuevos, atraviesa las alucinantes y peligrosas realidades alternativas del Multiverso para enfrentarse a un nuevo y misterioso adversario.', 'images/DoctorStrange.jpeg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
