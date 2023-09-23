-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2016 a las 17:42:25
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daniela`
--
CREATE DATABASE IF NOT EXISTS `daniela` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `daniela`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `carDes` varchar(40) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carDes`, `estado`) VALUES
(1, 'Administración de Empresas', 'Habilitado'),
(2, 'Comunicación Socail', 'Habilitado'),
(3, 'Contaduría', 'Habilitado'),
(4, 'Ingeniaría Civil', 'Habilitado'),
(5, 'Pedagogía Infantil', 'Habilitado'),
(6, 'Psicología', 'Habilitado'),
(7, 'Tecnología en Automatización Industrial ', 'Habilitado'),
(8, 'Tecnología en Electrónica', 'Habilitado'),
(9, 'Tecnología en Informática', 'Habilitado'),
(10, 'Trabajo Social', 'Habilitado'),
(11, 'Ingenieria de sistemas', 'Habilitado'),
(12, 'Ingenieria mecatronica', 'Habilitado'),
(13, 'asdfgh', 'Habilitado'),
(14, 'Ingenieria de sistemas', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(9) NOT NULL,
  `equiDes` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `equiDes`, `estado`) VALUES
(1, 'Videobeam', 'Inhabilitado'),
(3, 'Monitor LED', 'Inhabilitado'),
(4, 'Board ASUS', 'Inhabilitado'),
(5, 'Televisor de 54', 'Inhabilitado'),
(6, 'Ipad 3', 'Habilitado'),
(7, 'Tabla Samsung 7"', 'Habilitado'),
(8, 'Iphone 7S', 'Inhabilitado'),
(9, 'Proyector', 'Habilitado'),
(10, 'Calculadora Cientifica', 'Habilitado'),
(23, 'Protoboard', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(9) NOT NULL,
  `rolDes` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rolDes`, `estado`) VALUES
(1, 'Docente', 'Habilitado'),
(2, 'Estudiante', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(9) NOT NULL,
  `idEquipo` int(9) NOT NULL,
  `equiDes` varchar(30) NOT NULL,
  `codUser` int(9) NOT NULL,
  `horaInicial` datetime NOT NULL,
  `horaFinal` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `idEquipo`, `equiDes`, `codUser`, `horaInicial`, `horaFinal`, `date`) VALUES
(16, 5, 'pressss', 25289, '2016-11-30 15:31:00', '2016-11-15 15:31:00', '2016-11-16 15:31:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id` int(9) NOT NULL,
  `tuserDes` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `tuserDes`, `estado`) VALUES
(1, 'Administrador', 'Habilitado'),
(2, 'Estándar', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `codUser` int(9) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `rolDes` varchar(40) NOT NULL,
  `tuserDes` varchar(40) NOT NULL,
  `sede` varchar(30) NOT NULL,
  `carrera` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `codUser`, `contrasena`, `email`, `rolDes`, `tuserDes`, `sede`, `carrera`) VALUES
(1, 'Jorge Armando', 'Pacheco Del real', 25289, '1ae680509910ed97265532db297bb3b1e6c2a272', 'jorge_armando9@hotmail.com', 'Docente', 'Administrador', 'Cartagena', 'Ingeniería en Sistemas'),
(6, 'alexander', 'molina', 1070, '9e96db6fdff1d4107deddf11bdcac623c6fe5ead', 'alex.molina.cardozo@gmail.com', 'Docente', 'Administrador', 'Principal', 'Tecnología en Informática');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
