-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2016 a las 21:48:11
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rolling`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accound_user`
--

CREATE TABLE `accound_user` (
  `Account_id` int(10) NOT NULL,
  `Accoun_nomb` varchar(20) NOT NULL,
  `Accoun_pass` varchar(42) NOT NULL,
  `Accoun_tip` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_tipo`
--

CREATE TABLE `account_tipo` (
  `Account_tip` varchar(10) NOT NULL,
  `Account_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_rolling`
--

CREATE TABLE `clientes_rolling` (
  `Client_id` int(10) NOT NULL,
  `Client_nomb` varchar(30) NOT NULL,
  `Client_tel` int(10) NOT NULL,
  `Client_direct` varchar(20) NOT NULL,
  `Client_tipo_client` enum('Natural','Juridica') NOT NULL,
  `Client_activo` enum('Si','No') NOT NULL,
  `Client_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia`
--

CREATE TABLE `experiencia` (
  `Exper_id` int(11) NOT NULL,
  `Exper_nombre` int(30) NOT NULL,
  `Exper_descripcion` varchar(300) NOT NULL,
  `Exper_id_client` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotografia_rolling`
--

CREATE TABLE `fotografia_rolling` (
  `Foto_id` int(11) NOT NULL,
  `Foto_ident` int(10) NOT NULL,
  `Foto_nomb` varchar(50) NOT NULL,
  `Foto_video` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE `habilidad` (
  `Habilidad_id` int(11) NOT NULL,
  `Habilidad_descrip` varchar(10) NOT NULL,
  `Habilidad_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habilidad`
--

INSERT INTO `habilidad` (`Habilidad_id`, `Habilidad_descrip`, `Habilidad_tipo`) VALUES
(122, 'Novela', 1221112),
(123, 'Cine', 1221112),
(125, 'documental', 1221112),
(126, 'extras', 1221112),
(133, 'Fiestas', 1232323),
(134, 'Presenta', 1232323),
(135, 'Sorteos', 1232323),
(136, 'Eventos', 1232323),
(111122, 'Rock', 1234534),
(111123, 'Salsa', 1234534),
(111124, 'Raegueton', 1234534),
(111125, 'Vallenato', 1234534),
(111126, 'Folclor', 1234534),
(111127, 'Corridos', 1234534),
(111128, 'Deporte', 1253434),
(111129, 'De Cuerpo', 1253434),
(111131, 'Promosion', 1253434);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_habilidad`
--

CREATE TABLE `list_habilidad` (
  `List_id` int(11) NOT NULL,
  `List_id_habilidad` int(11) NOT NULL,
  `List_id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_casting`
--

CREATE TABLE `personal_casting` (
  `Perso_id` int(10) NOT NULL,
  `Perso_name` varchar(30) NOT NULL,
  `Perso_apell` varchar(30) NOT NULL,
  `Perso_tele` int(10) NOT NULL,
  `Perso_cel` int(10) NOT NULL,
  `Perso_direct` varchar(20) NOT NULL,
  `Perso_ciudad` int(2) NOT NULL,
  `Perso_altu` int(1) NOT NULL,
  `Perso_Sexo` enum('M','F') NOT NULL,
  `Perso_ciudad_origen` int(3) NOT NULL,
  `Perso_fech_naci` datetime NOT NULL,
  `Perso_email` varchar(30) NOT NULL,
  `Perso_activo` enum('Si','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `Solici_id` int(11) NOT NULL,
  `Solici_client` int(10) NOT NULL,
  `Solici_person` int(10) NOT NULL,
  `Solici_fech` datetime NOT NULL,
  `Solici_leido` enum('Si','No') NOT NULL,
  `Solici_acept` enum('Si','No') NOT NULL,
  `Solici_estado` enum('Nuevo','Viejo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_habilidad`
--

CREATE TABLE `tip_habilidad` (
  `Tip_id` int(11) NOT NULL,
  `Tip_nomb` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tip_habilidad`
--

INSERT INTO `tip_habilidad` (`Tip_id`, `Tip_nomb`) VALUES
(1221112, 'Actor'),
(1232323, 'Modelo'),
(1234534, 'Cantantes'),
(1253434, 'Animadores');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accound_user`
--
ALTER TABLE `accound_user`
  ADD PRIMARY KEY (`Account_id`),
  ADD KEY `Accoun_tip` (`Accoun_tip`);

--
-- Indices de la tabla `account_tipo`
--
ALTER TABLE `account_tipo`
  ADD PRIMARY KEY (`Account_tip`);

--
-- Indices de la tabla `clientes_rolling`
--
ALTER TABLE `clientes_rolling`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indices de la tabla `experiencia`
--
ALTER TABLE `experiencia`
  ADD PRIMARY KEY (`Exper_id`),
  ADD UNIQUE KEY `Exper_id_client` (`Exper_id_client`);

--
-- Indices de la tabla `fotografia_rolling`
--
ALTER TABLE `fotografia_rolling`
  ADD PRIMARY KEY (`Foto_id`),
  ADD KEY `Foto_ident` (`Foto_ident`);

--
-- Indices de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  ADD PRIMARY KEY (`Habilidad_id`),
  ADD KEY `Habilidad_tipo_2` (`Habilidad_tipo`),
  ADD KEY `Habilidad_tipo_3` (`Habilidad_tipo`),
  ADD KEY `Habilidad_tipo` (`Habilidad_tipo`);

--
-- Indices de la tabla `list_habilidad`
--
ALTER TABLE `list_habilidad`
  ADD PRIMARY KEY (`List_id`),
  ADD KEY `List_id_client` (`List_id_client`),
  ADD KEY `List_id_habilidad` (`List_id_habilidad`);

--
-- Indices de la tabla `personal_casting`
--
ALTER TABLE `personal_casting`
  ADD PRIMARY KEY (`Perso_id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`Solici_id`),
  ADD KEY `Solici_client` (`Solici_client`),
  ADD KEY `Solici_person` (`Solici_person`);

--
-- Indices de la tabla `tip_habilidad`
--
ALTER TABLE `tip_habilidad`
  ADD PRIMARY KEY (`Tip_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accound_user`
--
ALTER TABLE `accound_user`
  MODIFY `Account_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `experiencia`
--
ALTER TABLE `experiencia`
  MODIFY `Exper_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fotografia_rolling`
--
ALTER TABLE `fotografia_rolling`
  MODIFY `Foto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  MODIFY `Habilidad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111132;
--
-- AUTO_INCREMENT de la tabla `list_habilidad`
--
ALTER TABLE `list_habilidad`
  MODIFY `List_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `Solici_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tip_habilidad`
--
ALTER TABLE `tip_habilidad`
  MODIFY `Tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1253435;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
