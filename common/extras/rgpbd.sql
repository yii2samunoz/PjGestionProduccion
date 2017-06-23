-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2017 a las 04:52:40
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rgpbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambienteformacion`
--

CREATE TABLE `ambienteformacion` (
  `af_id` int(11) NOT NULL,
  `cen_id` int(11) DEFAULT NULL,
  `af_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambienteporcaracteristica`
--

CREATE TABLE `ambienteporcaracteristica` (
  `ambc_id` int(11) NOT NULL,
  `amb_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientetipo`
--

CREATE TABLE `ambientetipo` (
  `amb_id` int(11) NOT NULL,
  `lt_id` int(11) DEFAULT NULL,
  `amb_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1498153888);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1498153888, 1498153888),
('createUser', 2, 'Create a User', NULL, NULL, 1498153888, 1498153888);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'createUser');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `cap_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `cap_nombre` varchar(100) NOT NULL,
  `cap_horas` int(4) NOT NULL,
  `cap_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacionrequerida`
--

CREATE TABLE `capacitacionrequerida` (
  `capr_id` int(11) NOT NULL,
  `capr_nombre` varchar(100) NOT NULL,
  `capr_fechasolicitud` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristica`
--

CREATE TABLE `caracteristica` (
  `car_id` int(11) NOT NULL,
  `carg_id` int(11) DEFAULT NULL,
  `car_descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriageneral`
--

CREATE TABLE `categoriageneral` (
  `carg_id` int(11) NOT NULL,
  `carg_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `cen_id` int(11) NOT NULL,
  `reg_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `cen_nombre` varchar(100) NOT NULL,
  `cen_direccion` varchar(100) NOT NULL,
  `cen_telefono` varchar(10) NOT NULL,
  `cen_extension` varchar(5) DEFAULT NULL,
  `cen_fax` varchar(10) NOT NULL,
  `cen_planestrategico` varchar(250) NOT NULL,
  `cen_programastitulada` int(3) NOT NULL,
  `cen_programascomplementaria` int(3) NOT NULL,
  `cen_programastituladav` int(3) NOT NULL,
  `cen_programascomplementariav` int(3) NOT NULL,
  `cen_totalambientesformacion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

CREATE TABLE `certificacion` (
  `cer_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `cer_nombre` varchar(100) NOT NULL,
  `cer_tipo` varchar(50) NOT NULL,
  `cer_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `coo_id` int(11) NOT NULL,
  `cen_id` int(11) DEFAULT NULL,
  `coo_nombres` varchar(50) NOT NULL,
  `coo_apellidos` varchar(50) NOT NULL,
  `coo_correo` varchar(50) NOT NULL,
  `coo_telefono` varchar(10) NOT NULL,
  `coo_profesion` varchar(100) NOT NULL,
  `coo_experiencia` int(3) NOT NULL,
  `coo_tipo` varchar(20) NOT NULL,
  `coo_extension` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `est_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `est_nombre` varchar(100) NOT NULL,
  `est_nivel` varchar(50) NOT NULL,
  `est_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `ins_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `lt_id` int(11) DEFAULT NULL,
  `cen_id` int(11) DEFAULT NULL,
  `ins_tipocontratacion` varchar(100) NOT NULL,
  `ins_nombre` varchar(100) NOT NULL,
  `ins_apellido` varchar(100) NOT NULL,
  `ins_identificacion` int(10) NOT NULL,
  `ins_telefono` varchar(10) NOT NULL,
  `ins_tiempovinculacion` int(3) NOT NULL,
  `ins_desarrollocurricular` tinyint(1) NOT NULL,
  `ins_plataformasvirtuales` tinyint(1) NOT NULL,
  `ins_extension` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasinteres`
--

CREATE TABLE `lineasinteres` (
  `lin_id` int(11) NOT NULL,
  `lin_nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineatematica`
--

CREATE TABLE `lineatematica` (
  `lt_id` int(11) NOT NULL,
  `red_id` int(11) DEFAULT NULL,
  `lt_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listachequeoambiente`
--

CREATE TABLE `listachequeoambiente` (
  `det_id` int(11) NOT NULL,
  `ambc_id` int(11) DEFAULT NULL,
  `af_id` int(11) DEFAULT NULL,
  `det_estado` tinyint(1) DEFAULT NULL,
  `det_observacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1498153530),
('m140506_102106_rbac_init', 1498153537);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `pro_id` int(11) NOT NULL,
  `lt_id` int(11) DEFAULT NULL,
  `pro_nombre` varchar(100) NOT NULL,
  `pro_codigo` int(7) NOT NULL,
  `pro_version` int(3) NOT NULL,
  `pro_tieneregistro` tinyint(1) NOT NULL,
  `pro_registrocalificado` varchar(20) DEFAULT NULL,
  `pro_fecharegistro` date DEFAULT NULL,
  `pro_fechavencimientoregistro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redconocimiento`
--

CREATE TABLE `redconocimiento` (
  `red_id` int(11) NOT NULL,
  `red_nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regional`
--

CREATE TABLE `regional` (
  `reg_id` int(11) NOT NULL,
  `reg_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relcentroproyecto`
--

CREATE TABLE `relcentroproyecto` (
  `relcentroproyectoid` int(11) NOT NULL,
  `cen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relinstructorcaprequerida`
--

CREATE TABLE `relinstructorcaprequerida` (
  `capr_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rellineasinstrutor`
--

CREATE TABLE `rellineasinstrutor` (
  `lin_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subdirector`
--

CREATE TABLE `subdirector` (
  `sub_id` int(11) NOT NULL,
  `sub_nombre` varchar(50) NOT NULL,
  `sub_apellido` varchar(50) NOT NULL,
  `sub_correo` varchar(100) NOT NULL,
  `sub_telefono` varchar(10) NOT NULL,
  `sub_extension` varchar(20) DEFAULT NULL,
  `sub_profesion` varchar(50) NOT NULL,
  `sub_experiencia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'gZwcuueIK5rXJXQU34Mlnlte3BEyRO93', '$2y$13$wd6bNYREL/8LKrpkWQuIouvw3cshbQdxwU4H8VKXmvSkfilkCw0wa', NULL, 'zantiagomobile@gmail.com', 10, 1498130824, 1498165873);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambienteformacion`
--
ALTER TABLE `ambienteformacion`
  ADD PRIMARY KEY (`af_id`),
  ADD KEY `fk_relambientefcentro` (`cen_id`);

--
-- Indices de la tabla `ambienteporcaracteristica`
--
ALTER TABLE `ambienteporcaracteristica`
  ADD PRIMARY KEY (`ambc_id`),
  ADD KEY `fk_ambienteporcaracteristica2` (`amb_id`),
  ADD KEY `fk_ambienteporcaracteristica3` (`car_id`);

--
-- Indices de la tabla `ambientetipo`
--
ALTER TABLE `ambientetipo`
  ADD PRIMARY KEY (`amb_id`),
  ADD KEY `fk_relareaambiente` (`lt_id`);

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`cap_id`),
  ADD KEY `fk_relationship_43` (`id`);

--
-- Indices de la tabla `capacitacionrequerida`
--
ALTER TABLE `capacitacionrequerida`
  ADD PRIMARY KEY (`capr_id`);

--
-- Indices de la tabla `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `fk_relcaracteristacgeneral` (`carg_id`);

--
-- Indices de la tabla `categoriageneral`
--
ALTER TABLE `categoriageneral`
  ADD PRIMARY KEY (`carg_id`);

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`cen_id`),
  ADD KEY `fk_relcentrosubdirector` (`sub_id`),
  ADD KEY `fk_relregionalcentro` (`reg_id`);

--
-- Indices de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`cer_id`),
  ADD KEY `fk_relusuariocertificacion` (`id`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`coo_id`),
  ADD KEY `fk_relcentrocoordinador` (`cen_id`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`est_id`),
  ADD KEY `fk_relusuarioestudios` (`id`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ins_id`),
  ADD KEY `fk_relationship_23` (`lt_id`),
  ADD KEY `fk_relationship_24` (`cen_id`),
  ADD KEY `fk_relusuarioinstructor` (`id`);

--
-- Indices de la tabla `lineasinteres`
--
ALTER TABLE `lineasinteres`
  ADD PRIMARY KEY (`lin_id`);

--
-- Indices de la tabla `lineatematica`
--
ALTER TABLE `lineatematica`
  ADD PRIMARY KEY (`lt_id`),
  ADD KEY `fk_relationship_34` (`red_id`);

--
-- Indices de la tabla `listachequeoambiente`
--
ALTER TABLE `listachequeoambiente`
  ADD PRIMARY KEY (`det_id`),
  ADD KEY `fk_relambientelista` (`af_id`),
  ADD KEY `fk_reldetallecaracteristica` (`ambc_id`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `fk_relareaprograma` (`lt_id`);

--
-- Indices de la tabla `redconocimiento`
--
ALTER TABLE `redconocimiento`
  ADD PRIMARY KEY (`red_id`);

--
-- Indices de la tabla `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indices de la tabla `relcentroproyecto`
--
ALTER TABLE `relcentroproyecto`
  ADD PRIMARY KEY (`relcentroproyectoid`),
  ADD KEY `fk_relcentroproyecto2` (`cen_id`);

--
-- Indices de la tabla `relinstructorcaprequerida`
--
ALTER TABLE `relinstructorcaprequerida`
  ADD PRIMARY KEY (`capr_id`,`id`),
  ADD KEY `fk_relationship_36` (`id`);

--
-- Indices de la tabla `rellineasinstrutor`
--
ALTER TABLE `rellineasinstrutor`
  ADD PRIMARY KEY (`lin_id`,`id`),
  ADD KEY `fk_relationship_39` (`id`);

--
-- Indices de la tabla `subdirector`
--
ALTER TABLE `subdirector`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambienteformacion`
--
ALTER TABLE `ambienteformacion`
  MODIFY `af_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ambienteporcaracteristica`
--
ALTER TABLE `ambienteporcaracteristica`
  MODIFY `ambc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ambientetipo`
--
ALTER TABLE `ambientetipo`
  MODIFY `amb_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `cap_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `capacitacionrequerida`
--
ALTER TABLE `capacitacionrequerida`
  MODIFY `capr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `caracteristica`
--
ALTER TABLE `caracteristica`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoriageneral`
--
ALTER TABLE `categoriageneral`
  MODIFY `carg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `cen_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  MODIFY `cer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `coo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lineasinteres`
--
ALTER TABLE `lineasinteres`
  MODIFY `lin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lineatematica`
--
ALTER TABLE `lineatematica`
  MODIFY `lt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `listachequeoambiente`
--
ALTER TABLE `listachequeoambiente`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `redconocimiento`
--
ALTER TABLE `redconocimiento`
  MODIFY `red_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `regional`
--
ALTER TABLE `regional`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `relcentroproyecto`
--
ALTER TABLE `relcentroproyecto`
  MODIFY `relcentroproyectoid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `subdirector`
--
ALTER TABLE `subdirector`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ambienteformacion`
--
ALTER TABLE `ambienteformacion`
  ADD CONSTRAINT `fk_relambientefcentro` FOREIGN KEY (`cen_id`) REFERENCES `centro` (`cen_id`);

--
-- Filtros para la tabla `ambienteporcaracteristica`
--
ALTER TABLE `ambienteporcaracteristica`
  ADD CONSTRAINT `fk_ambienteporcaracteristica2` FOREIGN KEY (`amb_id`) REFERENCES `ambientetipo` (`amb_id`),
  ADD CONSTRAINT `fk_ambienteporcaracteristica3` FOREIGN KEY (`car_id`) REFERENCES `caracteristica` (`car_id`);

--
-- Filtros para la tabla `ambientetipo`
--
ALTER TABLE `ambientetipo`
  ADD CONSTRAINT `fk_relareaambiente` FOREIGN KEY (`lt_id`) REFERENCES `lineatematica` (`lt_id`);

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD CONSTRAINT `fk_relationship_43` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD CONSTRAINT `fk_relcaracteristacgeneral` FOREIGN KEY (`carg_id`) REFERENCES `categoriageneral` (`carg_id`);

--
-- Filtros para la tabla `centro`
--
ALTER TABLE `centro`
  ADD CONSTRAINT `fk_relcentrosubdirector` FOREIGN KEY (`sub_id`) REFERENCES `subdirector` (`sub_id`),
  ADD CONSTRAINT `fk_relregionalcentro` FOREIGN KEY (`reg_id`) REFERENCES `regional` (`reg_id`);

--
-- Filtros para la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD CONSTRAINT `fk_relusuariocertificacion` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD CONSTRAINT `fk_relcentrocoordinador` FOREIGN KEY (`cen_id`) REFERENCES `centro` (`cen_id`);

--
-- Filtros para la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD CONSTRAINT `fk_relusuarioestudios` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `fk_relationship_23` FOREIGN KEY (`lt_id`) REFERENCES `lineatematica` (`lt_id`),
  ADD CONSTRAINT `fk_relationship_24` FOREIGN KEY (`cen_id`) REFERENCES `centro` (`cen_id`),
  ADD CONSTRAINT `fk_relusuarioinstructor` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `lineatematica`
--
ALTER TABLE `lineatematica`
  ADD CONSTRAINT `fk_relationship_34` FOREIGN KEY (`red_id`) REFERENCES `redconocimiento` (`red_id`);

--
-- Filtros para la tabla `listachequeoambiente`
--
ALTER TABLE `listachequeoambiente`
  ADD CONSTRAINT `fk_relambientelista` FOREIGN KEY (`af_id`) REFERENCES `ambienteformacion` (`af_id`),
  ADD CONSTRAINT `fk_reldetallecaracteristica` FOREIGN KEY (`ambc_id`) REFERENCES `ambienteporcaracteristica` (`ambc_id`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `fk_relareaprograma` FOREIGN KEY (`lt_id`) REFERENCES `lineatematica` (`lt_id`);

--
-- Filtros para la tabla `relcentroproyecto`
--
ALTER TABLE `relcentroproyecto`
  ADD CONSTRAINT `fk_relcentroproyecto2` FOREIGN KEY (`cen_id`) REFERENCES `centro` (`cen_id`);

--
-- Filtros para la tabla `relinstructorcaprequerida`
--
ALTER TABLE `relinstructorcaprequerida`
  ADD CONSTRAINT `fk_relationship_36` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_relinstructorcaprequerida` FOREIGN KEY (`capr_id`) REFERENCES `capacitacionrequerida` (`capr_id`);

--
-- Filtros para la tabla `rellineasinstrutor`
--
ALTER TABLE `rellineasinstrutor`
  ADD CONSTRAINT `fk_relationship_39` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_rellineasinstrutor2` FOREIGN KEY (`lin_id`) REFERENCES `lineasinteres` (`lin_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
