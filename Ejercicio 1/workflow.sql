-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2021 a las 02:07:57
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `workflow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `Id` int(11) DEFAULT NULL,
  `CI` int(11) DEFAULT NULL,
  `DB` int(11) DEFAULT NULL,
  `DA` int(11) DEFAULT NULL,
  `CN` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `PM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`Id`, `CI`, `DB`, `DA`, `CN`, `estado`, `PM`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(3, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `Id` int(11) DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `ci` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Id`, `nombre`, `apellidos`, `fecha_nac`, `ci`, `direccion`) VALUES
(1, 'Albert Jhonatan', 'Quisbert Mujica', '1996-05-23', '9065168', 'Santa Rosa'),
(3, 'Adriana Lupe', 'Ichuta Triguero', '1997-05-19', '12345789', 'Villa Copacabana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujo_proceso`
--

CREATE TABLE IF NOT EXISTS `flujo_proceso` (
  `flujo` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_proceso` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codrol` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `proceso_siguiente` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `formulario` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `flujo_proceso`
--

INSERT INTO `flujo_proceso` (`flujo`, `proceso`, `tipo_proceso`, `codrol`, `proceso_siguiente`, `formulario`) VALUES
('F1', 'P1', 'P', 'U', 'P2', 'HorariosIns'),
('F1', 'P2', 'P', 'U', 'P3', 'DocumentoApr'),
('F1', 'P3', 'P', 'U', 'P4', 'RegistroDatos'),
('F1', 'P4', 'P', 'U', 'P5', 'Documentos'),
('F1', 'P5', 'C', 'K', 'P6', 'Condicional'),
('F1', 'P6', 'P', 'U', 'P7', 'PagoMatricula'),
('F1', 'P7', 'S', 'U', 'Fin', 'BoletaIns'),
('F2', 'P1', 'P', 'U', 'P2', 'Estado'),
('F2', 'P2', 'P', 'U', 'P3', 'TipoEleccion'),
('F2', 'P3', 'P', 'U', 'P4', 'SeleccionMaterias'),
('F2', 'P4', 'S', 'U', 'Fin', 'MateriasInscritas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE IF NOT EXISTS `inscripcion` (
`idinscripcion` int(11) NOT NULL,
  `Id` int(11) DEFAULT NULL,
  `idsemestre` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`idinscripcion`, `Id`, `idsemestre`) VALUES
(7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
`idmateria` int(11) NOT NULL,
  `idsemestre` int(11) DEFAULT NULL,
  `sigla` varchar(7) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idmateria`, `idsemestre`, `sigla`, `nombre`) VALUES
(1, 1, 'INF-111', 'Introduccion a la Programacion'),
(2, 1, 'LAB-111', 'Laboratorio de INF-111'),
(3, 1, 'INF-112', 'Organizacion de Computadoras'),
(4, 1, 'INF-113', 'Laboratorio de Computacion'),
(5, 1, 'MAT-114', 'Matematica Discreta I'),
(6, 1, 'MAT-115', 'Analisis Matematico I'),
(7, 1, 'LIN-116', 'Gramatica Espanola'),
(8, 2, 'INF-121', 'Algoritmos y Programación'),
(9, 2, 'LAB-121', 'Laboratorio de INF-121'),
(10, 2, 'FIS-122', 'Física I'),
(11, 2, 'LAB-122', 'Laboratorio de Física I'),
(12, 2, 'MAT-123', 'Matemática Discreta II'),
(13, 2, 'MAT-124', 'Álgebra Lineal'),
(14, 2, 'MAT-125', 'Análisis Matemático II'),
(15, 3, 'INF-131', 'Estructura de Datos y Algoritmos'),
(16, 3, 'LAB-131', 'Laboratorio de INF-131'),
(17, 3, 'FIS-132', 'Física II'),
(18, 3, 'LAB-132', 'Laboratorio de Física II'),
(19, 3, 'EST-133', 'Estadística I'),
(20, 3, 'MAT-134', 'Análisis Matemático III'),
(21, 3, 'LIN-135', 'Idioma I'),
(22, 4, 'INF-141', 'Sistemas de Gestión'),
(23, 4, 'INF-142', 'Fundamentos Digitales'),
(24, 4, 'INF-143', 'Taller de Programación'),
(25, 4, 'INF-144', 'Lógica para la Ciencia de la Computación'),
(26, 4, 'EST-145', 'Estadística II'),
(27, 5, 'INF-151', 'Sistemas Operativos'),
(28, 5, 'INF-152', 'Sistemas de Información Gerencial'),
(29, 5, 'INF-153', 'Assembler'),
(30, 5, 'INF-154', 'Lenguajes Formales y Autómatas'),
(31, 5, 'EST-155', 'Investigación de Operaciones I'),
(32, 5, 'MAT-156', 'Análisis Numérico'),
(33, 6, 'INF-161', 'Diseño y Administración de Base de Datos'),
(34, 6, 'INF-162', 'Análisis y Diseño de Sistemas de Información'),
(35, 6, 'INF-163', 'Ingeniería de Software'),
(36, 6, 'INF-164', 'Teoría de la Información y Codificación'),
(37, 6, 'EST-165', 'Investigación de Operaciones II'),
(38, 6, 'INF-166', 'Informática y Sociedad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE IF NOT EXISTS `seguimiento` (
`nro` int(11) NOT NULL,
  `flujo` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Id` int(11) DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`nro`, `flujo`, `proceso`, `Id`, `fecha_ini`, `fecha_fin`) VALUES
(1, 'F1', 'P1', 1, '2021-05-27', '2021-05-31'),
(2, 'F1', 'P1', 3, '2021-05-30', '2021-05-31'),
(3, 'F1', 'P2', 1, '2021-05-31', '2021-05-31'),
(14, 'F1', 'P3', 1, '2021-05-31', '2021-05-31'),
(15, 'F1', 'P2', 3, '2021-05-31', '2021-06-02'),
(16, 'F1', 'P4', 1, '2021-05-31', '2021-05-31'),
(21, 'F1', 'P5', 1, '2021-05-31', '2021-05-31'),
(23, 'F1', 'P6', 1, '2021-05-31', '2021-06-01'),
(24, 'F1', 'P7', 1, '2021-06-01', '2021-06-01'),
(28, 'F1', 'P3', 3, '2021-06-02', '2021-06-02'),
(30, 'F1', 'P4', 3, '2021-06-02', '2021-06-02'),
(31, 'F1', 'P5', 3, '2021-06-02', '2021-06-02'),
(32, 'F1', 'P6', 3, '2021-06-02', '2021-06-02'),
(33, 'F1', 'P7', 3, '2021-06-02', '2021-06-16'),
(34, 'F1', 'P1', 2, '2021-05-30', '2021-06-02'),
(35, 'F1', 'P2', 2, '2021-06-02', NULL),
(39, 'F2', 'P1', 1, '2021-05-30', '2021-06-17'),
(40, 'F2', 'P1', 2, '2021-05-30', NULL),
(41, 'F2', 'P2', 1, '2021-06-17', '2021-06-17'),
(42, 'F2', 'P3', 1, '2021-06-17', '2021-06-17'),
(43, 'F2', 'P4', 1, '2021-06-17', '2021-06-17'),
(46, '', '', 1, '2021-06-17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
`idsemestre` int(11) NOT NULL,
  `nombre` varchar(7) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`idsemestre`, `nombre`) VALUES
(1, 'PRIMERO'),
(2, 'SEGUNDO'),
(3, 'TERCERO'),
(4, 'CUARTO'),
(5, 'QUINTO'),
(6, 'SEXTO'),
(7, 'SEPTIMO'),
(8, 'OCTAVO'),
(9, 'NOVENO'),
(10, 'DECIMO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contrasena` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `rol`, `usuario`, `contrasena`) VALUES
('1', 'U', 'albertjhon', 'nickelodeon'),
('2', 'U', 'juan123', '123456'),
('3', 'U', 'lupe123', '123456'),
('4', 'U', 'martin123', '123456'),
('5', 'U', 'maria123', '123456'),
('6', 'U', 'luis123', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
 ADD PRIMARY KEY (`idinscripcion`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`idmateria`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
 ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
 ADD PRIMARY KEY (`idsemestre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
MODIFY `idinscripcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
MODIFY `idmateria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
MODIFY `nro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
MODIFY `idsemestre` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
