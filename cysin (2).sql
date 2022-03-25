-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2021 a las 20:07:23
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cysin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `idIngreso` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `h_Ingreso` time NOT NULL,
  `h_salida` time NOT NULL,
  `documento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`idIngreso`, `fecha`, `h_Ingreso`, `h_salida`, `documento_id`) VALUES
(1, '2021-06-02', '06:12:04', '12:20:04', 1234567),
(2, '2021-04-02', '06:15:02', '12:15:15', 235474859),
(3, '2021-04-02', '06:20:56', '12:20:56', 134578990),
(4, '2021-04-05', '06:14:02', '12:00:15', 1002456345),
(5, '2021-03-09', '06:00:56', '06:20:56', 1223456785),
(13, '2021-06-03', '06:12:04', '12:20:04', 1234567),
(14, '2021-06-03', '06:12:04', '12:20:04', 123456964),
(15, '0000-00-00', '06:12:07', '12:25:04', 13425788),
(16, '2021-06-03', '06:20:07', '12:15:00', 13425788),
(17, '2021-06-03', '06:25:07', '12:53:00', 11111),
(18, '2021-06-03', '06:26:07', '12:55:00', 22222);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `documento_id` int(11) NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`documento_id`, `curso`) VALUES
(1002456345, 903),
(1234567, 901),
(190774844, 601),
(132543674, 605),
(11111, 903);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE `jornadas` (
  `idJornada` int(11) NOT NULL,
  `descripcion_jotnada` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornadas`
--

INSERT INTO `jornadas` (`idJornada`, `descripcion_jotnada`) VALUES
(1, 'Jornada Mañana'),
(2, 'Jornada Tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `correo` varchar(100) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`correo`, `clave`) VALUES
('Juan@gmail', 'jajajaj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `descripcion`) VALUES
('Administrativo', 'Personal con funciones necesarias para el buen funcionamiennto de la Institucion.'),
('Docente', 'Personal educativo que ingresa con el proposito de dar a conocer nuevos conocimientos de docentes.'),
('Estudiante', 'Menor de edad que ingresa a la institucion con el fin de recivir clases'),
('Visitante', 'Persona que necesita hacer algun tipo de accion u actividad entre la institucion bien ya sea sacar c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `idSede` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`idSede`, `nombre`, `direccion`, `telefono`) VALUES
(32, 'Napoima', 'Calle63 sur', 762531);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_d_documento`
--

CREATE TABLE `tipo_d_documento` (
  `t_d_documento` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_d_documento`
--

INSERT INTO `tipo_d_documento` (`t_d_documento`, `descripcion`) VALUES
('CC', 'Cedula Cuidadania'),
('TI', 'Tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento_id` int(11) NOT NULL,
  `t_d_documento` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `idSede` int(11) NOT NULL,
  `idJornada` int(11) NOT NULL,
  `correo` varchar(70) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `idRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento_id`, `t_d_documento`, `nombre`, `apellido`, `telefono`, `direccion`, `idSede`, `idJornada`, `correo`, `clave`, `idRol`) VALUES
(11111, 'TI', 'Juan', 'Machado', 6216567, 'Crr 51_F', 32, 2, 'Juan@gmail', 'jajajaj', 'Estudiante'),
(22222, 'CC', 'Marleny', 'Urrutia', 5142123, 'Crr71Bsur', 32, 2, 'Marle@mail', 'Holammm', 'Docente'),
(77777, 'TI', 'Karla', 'Lopez', 7612113, 'Calle12·#131', 32, 2, 'Karlu@gmail', 'Sofware', 'Estudiante'),
(1234567, 'TI', 'Andres', 'Gonzalez', 2147483647, 'Cll 71fSur', 32, 1, 'Adres@mail', 'Holamundo', 'Estudiante'),
(2945778, 'CC', 'Cristian', 'Bueso', 3256767, 'CLL78 N67', 32, 1, 'bue34@', '45ret', 'Visitante'),
(3452727, 'CC', 'caren', 'Gomeza', 345786, 'Cll98 N08', 32, 1, 'Crean78@', '4e5teu', 'Visitante'),
(13425788, 'CC', 'Carla', 'Gonzales', 3457889, 'Cll89 N67', 32, 2, 'caral1342@', 'r45uebdj', 'Administrativo'),
(123456964, 'TI', 'Andres', 'Garzon', 2147483647, 'cll54k#12-53', 32, 1, 'prueva@hotmail', 'holii', 'Docente'),
(129737345, 'CC', 'Diana', 'Burgos', 3257484, 'Cll98 N78', 32, 1, 'Diana34@', 're54364u', 'Visitante'),
(132543674, 'TI', 'Cristel', 'Torres', 34874647, 'Cll67 N89', 32, 1, 'Cristel45@', 'e345dg', 'Estudiante'),
(134578990, 'CC', 'Maria Luz', 'Burgos', 3445578, 'CLL98 N65', 32, 1, 'Marialuz123@', '45rt567', 'Administrativo'),
(190774844, 'TI', 'Jose', 'camargo', 3564748, 'Clla 67  N90', 32, 1, 'Jose34@', '435tefh', 'Estudiante'),
(235474859, 'CC', 'Katalina', ' Martinez', 34738473, 'Cll67 N98', 32, 1, 'katal23@', '34errurmd', 'Visitante'),
(1002456345, 'CC', 'Maria ', 'Camacho', 3657829, 'cll87 n07', 32, 1, 'camila@', '12345', 'Estudiante'),
(1023476845, 'CC', 'Carol', ' Martinez', 312504786, 'cll45 N08', 32, 1, 'Carol123@', '234567', 'Docente'),
(1223456785, 'CC', 'Marcos', '', 3142678, 'Cll78 N06', 32, 2, 'marcos5678@', '34556vwdf', 'Administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante`
--

CREATE TABLE `visitante` (
  `documento_id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visitante`
--

INSERT INTO `visitante` (`documento_id`, `descripcion`) VALUES
(129737345, 'Ingreso para solicitar en secretaria un certificado estudiantil.'),
(235474859, 'Ingreso a coordinacion para hablar sobre un incoveniente con el coordinardor.'),
(2945778, 'Ingresa para autorizar a su hijo una slaida de la institucion.'),
(3452727, 'Ingresa para solicitar un certificado.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`idIngreso`),
  ADD KEY `documento_id` (`documento_id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD KEY `documento_id` (`documento_id`);

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`idJornada`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`idSede`);

--
-- Indices de la tabla `tipo_d_documento`
--
ALTER TABLE `tipo_d_documento`
  ADD PRIMARY KEY (`t_d_documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento_id`),
  ADD KEY `t_d_documento` (`t_d_documento`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idJornada` (`idJornada`),
  ADD KEY `idSede` (`idSede`);

--
-- Indices de la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD KEY `documento_id` (`documento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `idIngreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`documento_id`) REFERENCES `usuario` (`documento_id`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`documento_id`) REFERENCES `usuario` (`documento_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`t_d_documento`) REFERENCES `tipo_d_documento` (`t_d_documento`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idJornada`) REFERENCES `jornadas` (`idJornada`),
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`idSede`) REFERENCES `sedes` (`idSede`);

--
-- Filtros para la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD CONSTRAINT `visitante_ibfk_1` FOREIGN KEY (`documento_id`) REFERENCES `usuario` (`documento_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
