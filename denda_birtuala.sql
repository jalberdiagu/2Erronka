-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2024 a las 14:09:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `denda_birtuala`
--
CREATE DATABASE denda_birtuala;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deskontuak`
--


CREATE TABLE `deskontuak` (
  `id_desk` int(11) NOT NULL,
  `kodea` varchar(25) NOT NULL,
  `portzentaia` decimal(3,2) NOT NULL,
  `id_erab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `id_erab` int(3) NOT NULL,
  `izena` varchar(25) NOT NULL,
  `abizena` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pasahitza` varchar(25) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eskaerak`
--

CREATE TABLE `eskaerak` (
  `id_eska` int(3) NOT NULL,
  `id_erab` int(3) NOT NULL,
  `data` date NOT NULL,
  `egoera` varchar(25) NOT NULL,
  `guztira` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eskaeren_xehetasunak`
--

CREATE TABLE `eskaeren_xehetasunak` (
  `id_xehe` int(3) NOT NULL,
  `id_eska` int(3) NOT NULL,
  `id_prod` int(3) NOT NULL,
  `kantitatea` int(3) NOT NULL,
  `unitateko_prezioa` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orgatxoa`
--

CREATE TABLE `orgatxoa` (
  `id_orga` int(3) NOT NULL,
  `id_erab` int(3) NOT NULL,
  `id_prod` int(3) NOT NULL,
  `kantitatea` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produktuak`
--

CREATE TABLE `produktuak` (
  `id_prod` int(11) NOT NULL,
  `izena` varchar(25) NOT NULL,
  `deskripzioa` varchar(1000) NOT NULL,
  `prezioa` decimal(3,2) NOT NULL,
  `stock` int(4) NOT NULL,
  `sekzioa` varchar(25) NOT NULL,
  `deskontua` decimal(3,2) NOT NULL,
  `aktibatua` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deskontuak`
--
ALTER TABLE `deskontuak`
  ADD PRIMARY KEY (`id_desk`);

--
-- Indices de la tabla `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`id_erab`);

--
-- Indices de la tabla `eskaerak`
--
ALTER TABLE `eskaerak`
  ADD PRIMARY KEY (`id_eska`);

--
-- Indices de la tabla `eskaeren_xehetasunak`
--
ALTER TABLE `eskaeren_xehetasunak`
  ADD PRIMARY KEY (`id_xehe`);

--
-- Indices de la tabla `orgatxoa`
--
ALTER TABLE `orgatxoa`
  ADD PRIMARY KEY (`id_orga`);

--
-- Indices de la tabla `produktuak`
--
ALTER TABLE `produktuak`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deskontuak`
--
ALTER TABLE `deskontuak`
  MODIFY `id_desk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  MODIFY `id_erab` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eskaerak`
--
ALTER TABLE `eskaerak`
  MODIFY `id_eska` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eskaeren_xehetasunak`
--
ALTER TABLE `eskaeren_xehetasunak`
  MODIFY `id_xehe` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orgatxoa`
--
ALTER TABLE `orgatxoa`
  MODIFY `id_orga` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `produktuak`
--
ALTER TABLE `produktuak`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
