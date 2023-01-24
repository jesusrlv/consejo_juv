-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-01-2023 a las 09:07:18
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consejo_juvenil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_documentos`
--

CREATE TABLE `catalogo_documentos` (
  `id` int(11) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_documentos`
--

INSERT INTO `catalogo_documentos` (`id`, `documento`, `subtitulo`, `descripcion`) VALUES
(1, 'Carta exposición de motivos ', 'Carta exposición de motivos ', 'Carta exposición de motivos dirigida al Titular del Instituto de la Juventud, en la cual se expresen las razones por las cuales tiene interés en postularse como integrante del Consejo Juvenil del Estado de Zacatecas'),
(2, 'Documento que acredite OSC', 'Documento que acredite OSC', 'Documento que acredite que pertenece a alguna Organización de la Sociedad Civil, que tenga relación con el desarrollo de las y los jóvenes; Titular de Instancia Municipal en alguno de los 58 Municipios; o inscrito (a) en alguna Institución Educativa ya sea de Nivel Medio Superior o Superior'),
(3, 'Copia simple del acta de Nacimiento', 'Copia simple del acta de Nacimiento', 'Copia simple del acta de Nacimiento'),
(4, 'Copia simple de credencial de elector', 'Copia simple de credencial de elector', 'Copia simple de credencial de elector; en caso de ser menor de edad debe presentar copia del padre de familia o tutor'),
(5, 'Copia simple de la CURP', 'Copia simple de la CURP', 'Copia simple de la CURP'),
(6, 'Copia simple de comprobante de domicilio', 'Copia simple de comprobante de domicilio', 'Copia simple de comprobante de domicilio'),
(7, 'Carta de no antecedentes penales', 'Carta de no antecedentes penales', 'Carta en la cual manifieste bajo protesta de decir verdad, no estar sujeto a algún proceso penal, o haber sido sentenciado por delitos graves'),
(8, 'Carta en la cual manifieste de decir verdad', 'Carta en la cual manifieste de decir verdad', 'Carta en la cual manifieste bajo protesta de decir verdad, no encontrarse desempeñando algún cargo de elección popular'),
(9, 'Currículum vitae actualizado', 'Currículum vitae actualizado', 'Currículum vitae actualizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `documento` int(11) NOT NULL COMMENT 'Tipo documento numerado',
  `id_ext` int(11) NOT NULL,
  `link` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(36) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `perfil` int(11) NOT NULL,
  `curp` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `usr`, `pwd`, `perfil`, `curp`) VALUES
(1, 'usr1', '123456789', 1, 'LEVJ810924HZSXLS04'),
(2, 'usr2', '123456789', 1, 'LEVJ810924HZSXLS05'),
(3, 'usr3', '123456789', 1, 'LEVJ810924HZSXLS06'),
(4, 'admin', '123456789', 2, 'LEVJ'),
(5, 'admin2', '123456789', 2, NULL),
(6, 'califica1', '123456789', 3, NULL),
(7, 'califica2', '123456789', 3, NULL),
(8, 'califica3', '123456789', 3, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_documentos`
--
ALTER TABLE `catalogo_documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `catalogo_documentos`
--
ALTER TABLE `catalogo_documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
