-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2019 a las 00:37:30
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `descargadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'Accion'),
(2, 'Infantil'),
(3, 'Comedia'),
(4, 'Terror'),
(5, 'Ciencia Ficcion'),
(6, 'Aventura'),
(7, 'Suspenso'),
(8, 'Romance'),
(9, 'Fantasia'),
(10, 'Drama'),
(11, 'Animacion'),
(12, 'Crimen'),
(13, 'Misterio'),
(14, 'Peliculas Por Año'),
(15, 'Juegos De Estrategia'),
(16, 'Juegos De Rol/Rpg'),
(17, 'Juegos De Simulacion'),
(18, 'Juegos De Conduccion'),
(19, 'Juegos 2D'),
(20, 'Juegos De Lucha'),
(21, 'Juegos De Ps1 (PsOne)'),
(22, 'Juegos Nes (Nintendo)'),
(23, 'Juegos Snes (Super Nintendo)'),
(24, 'Juegos De Nds (Nintendo Ds)'),
(25, 'Juegos De N64 (Nintendo 64)'),
(26, 'Juegos De Gba (Game Boy Advance)'),
(27, 'Juego De Genesis (Sega)'),
(28, 'Juegos De Neo-Geo'),
(29, 'Juegos De Universo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `idcategoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `titulop` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fichap` text COLLATE utf8_spanish_ci NOT NULL,
  `resenap` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen1p` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen2p` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen3p` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen4p` text COLLATE utf8_spanish_ci NOT NULL,
  `videop` text COLLATE utf8_spanish_ci NOT NULL,
  `enlacep` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `idcategoria`, `titulop`, `fichap`, `resenap`, `imagen1p`, `imagen2p`, `imagen3p`, `imagen4p`, `videop`, `enlacep`) VALUES
(2, 'ACCION', 'Indivisible', 'Fecha de lanzamiento: 08 de Octubre de 2019<br style=\"padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\"><span style=\"color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\">Idioma Voces: Ingles</span><br style=\"padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\"><span style=\"color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\">Idioma&nbsp;</span><span style=\"padding: 0px; font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\">Textos: EspaÃ±ol</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\">, InglÃ©s, PortuguÃ©s, FrancÃ©s, AlemÃ¡n, Italiano, entre otros.</span><br style=\"padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\"><span style=\"color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\">Formato: ISO</span><br style=\"padding: 0px; color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\"><span style=\"color: rgb(51, 51, 51); font-family: Arial, Verdana; text-align: center;\">TamaÃ±o: 5.1 Gigas</span><br><p></p>', 'Indivisible es un juego de rol de acciÃ³n y plataformas con un asombroso trabajo artÃ­stico y animaciones realizados a mano, en combinaciÃ³n con mecÃ¡nicas de combate Ãºnicas y en tiempo real. Tu misiÃ³n sera ingresar en este mundo fantÃ¡stico con docenas de personajes con los cuales puedes jugar, una experiencia de narraciÃ³n profunda, sencillo de jugar pero difÃ­cil de dominar, ademÃ¡s de la alta calidad que es emblemÃ¡tica de Lab Zero Games.</span><br></p>', 'https://www.compucalitv.com/wp-content/uploads/2019/10/Indivisible-2019-PC-portada.jpg', 'https://3.bp.blogspot.com/-EvlYDVgY0l8/XZzKUmtL-lI/AAAAAAAAB3k/SeXaENgP9C06EfXG_fiUHsby8UKJGz_PQCLcBGAsYHQ/s1600/Indivisible-2019-PC-imagen-001.jpg', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
