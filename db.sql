-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 14:33:44
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mantenimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempleado`
--

CREATE TABLE IF NOT EXISTS `tblempleado` (
  `codigo` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nombres` varchar(35) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(35) CHARACTER SET utf8 NOT NULL,
  `celular` varchar(14) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `correo` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblempleado`
--

INSERT INTO `tblempleado` (`codigo`, `nombres`, `apellidos`, `celular`, `correo`) VALUES
('1036404796', 'jhonatan', 'alzate', '3192934969144', '@yoto'),
('2036547889', 'Julian', 'Serna', '31265478962', '@Julio'),
('41114899', 'Juan', 'esteban', '31224562', '@juan'),
('43713262', 'Sebastian', 'Garcia', '31265478962', '@skainet.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblequipo`
--

CREATE TABLE IF NOT EXISTS `tblequipo` (
  `idEquipo` int(11) NOT NULL,
  `Descripcion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `IdMarca` int(11) NOT NULL,
  `idModelo` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `Costo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblequipo`
--

INSERT INTO `tblequipo` (`idEquipo`, `Descripcion`, `IdMarca`, `idModelo`, `idEstado`, `fechaIngreso`, `Costo`) VALUES
(1, 'celular xiaomi redmi 5 plus', 5, 6, 1, '2018-11-01', 700000),
(2, 'celular android', 5, 1, 1, '2018-11-30', 900000000),
(98, 'computador de mesa 2', 1, 2, 1, '2018-12-02', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblestado`
--

CREATE TABLE IF NOT EXISTS `tblestado` (
  `idEstado` int(11) NOT NULL,
  `Estado` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblestado`
--

INSERT INTO `tblestado` (`idEstado`, `Estado`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfabrica`
--

CREATE TABLE IF NOT EXISTS `tblfabrica` (
  `idFabrica` int(11) NOT NULL,
  `nomFabrica` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblfabrica`
--

INSERT INTO `tblfabrica` (`idFabrica`, `nomFabrica`) VALUES
(1, 'zona franca'),
(2, 'KENDY'),
(3, 'festo'),
(4, 'Yo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmarca`
--

CREATE TABLE IF NOT EXISTS `tblmarca` (
  `idMarca` int(11) NOT NULL,
  `Marca` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idFabricante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblmarca`
--

INSERT INTO `tblmarca` (`idMarca`, `Marca`, `idFabricante`) VALUES
(1, 'intel', 1),
(2, 'acer', 3),
(3, 'HP', 2),
(4, 'Apple', 1),
(5, 'Xiaomi', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmodelo`
--

CREATE TABLE IF NOT EXISTS `tblmodelo` (
  `idModelo` int(11) NOT NULL,
  `Modelo` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblmodelo`
--

INSERT INTO `tblmodelo` (`idModelo`, `Modelo`) VALUES
(1, 'aspire'),
(2, 'allinone'),
(3, 'thinkipad'),
(4, 'macintouch'),
(6, 'Redmi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmovimiento`
--

CREATE TABLE IF NOT EXISTS `tblmovimiento` (
`consecutivo` int(5) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `equipo` int(11) NOT NULL,
  `Observaciones` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Empleado` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Estado` int(11) NOT NULL,
  `consecutivo_ot` int(5) NOT NULL,
  `Tipo_dagno` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tblmovimiento`
--

INSERT INTO `tblmovimiento` (`consecutivo`, `fecha_entrada`, `fecha_salida`, `equipo`, `Observaciones`, `Empleado`, `Estado`, `consecutivo_ot`, `Tipo_dagno`) VALUES
(1, '2018-11-01', '2018-11-20', 1, 'exitoso', '2036547889', 2, 8, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblordentrabajo`
--

CREATE TABLE IF NOT EXISTS `tblordentrabajo` (
`codigo` int(5) NOT NULL,
  `ordentrabajo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fecha_orden` date NOT NULL,
  `empleado` varchar(15) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(11) CHARACTER SET utf8 NOT NULL,
  `idequipo` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tblordentrabajo`
--

INSERT INTO `tblordentrabajo` (`codigo`, `ordentrabajo`, `fecha_orden`, `empleado`, `estado`, `idequipo`) VALUES
(8, 'celular android', '2018-11-01', '1036404796', '2', 2),
(11, '45', '2018-12-20', '41114899', '2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipodagno`
--

CREATE TABLE IF NOT EXISTS `tbltipodagno` (
  `codigo` varchar(5) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(35) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbltipodagno`
--

INSERT INTO `tbltipodagno` (`codigo`, `nombre`) VALUES
('1', 'electrico'),
('2', 'mecanico');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vtafabrica`
--
CREATE TABLE IF NOT EXISTS `vtafabrica` (
`idFabrica` int(11)
,`nomFabrica` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vtam`
--
CREATE TABLE IF NOT EXISTS `vtam` (
`consecutivo` int(5)
,`fecha_entrada` date
,`fecha_salida` date
,`equipo` int(11)
,`Observaciones` varchar(200)
,`Empleado` varchar(15)
,`Estado` int(11)
,`consecutivo_ot` int(5)
,`Tipo_dagno` varchar(5)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_select_empleado`
--
CREATE TABLE IF NOT EXISTS `vta_select_empleado` (
`codigo` varchar(15)
,`nombres` varchar(35)
,`apellidos` varchar(35)
,`celular` varchar(14)
,`correo` varchar(60)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_select_equipo`
--
CREATE TABLE IF NOT EXISTS `vta_select_equipo` (
`idEquipo` int(11)
,`Descripcion` varchar(100)
,`idMarca` int(11)
,`Marca` varchar(50)
,`idModelo` int(11)
,`Modelo` varchar(50)
,`idEstado` int(11)
,`Estado` varchar(50)
,`fechaIngreso` date
,`Costo` double
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_select_movimiento`
--
CREATE TABLE IF NOT EXISTS `vta_select_movimiento` (
`consecutivo` int(5)
,`fecha_entrada` date
,`fecha_salida` date
,`idequipo` int(11)
,`Descripcion_equipo` varchar(100)
,`Observaciones` varchar(200)
,`codigo_empleado` varchar(15)
,`nombres` varchar(35)
,`apellidos` varchar(35)
,`idEstado` int(11)
,`Estado` varchar(50)
,`codigo_ordentrabajo` int(5)
,`ordentrabajo` varchar(100)
,`tipo daño` varchar(35)
,`codigo daño` varchar(5)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_select_ordentrabajo`
--
CREATE TABLE IF NOT EXISTS `vta_select_ordentrabajo` (
`codigo` int(5)
,`ordentrabajo` varchar(100)
,`fecha_orden` date
,`idEmpleado` varchar(15)
,`nombres` varchar(35)
,`apellidos` varchar(35)
,`idEstado` int(11)
,`Estado` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `vtafabrica`
--
DROP TABLE IF EXISTS `vtafabrica`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtafabrica` AS select `tblfabrica`.`idFabrica` AS `idFabrica`,`tblfabrica`.`nomFabrica` AS `nomFabrica` from `tblfabrica`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vtam`
--
DROP TABLE IF EXISTS `vtam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtam` AS select `tblmovimiento`.`consecutivo` AS `consecutivo`,`tblmovimiento`.`fecha_entrada` AS `fecha_entrada`,`tblmovimiento`.`fecha_salida` AS `fecha_salida`,`tblmovimiento`.`equipo` AS `equipo`,`tblmovimiento`.`Observaciones` AS `Observaciones`,`tblmovimiento`.`Empleado` AS `Empleado`,`tblmovimiento`.`Estado` AS `Estado`,`tblmovimiento`.`consecutivo_ot` AS `consecutivo_ot`,`tblmovimiento`.`Tipo_dagno` AS `Tipo_dagno` from `tblmovimiento`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_select_empleado`
--
DROP TABLE IF EXISTS `vta_select_empleado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_select_empleado` AS select `tblempleado`.`codigo` AS `codigo`,`tblempleado`.`nombres` AS `nombres`,`tblempleado`.`apellidos` AS `apellidos`,`tblempleado`.`celular` AS `celular`,`tblempleado`.`correo` AS `correo` from `tblempleado`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_select_equipo`
--
DROP TABLE IF EXISTS `vta_select_equipo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_select_equipo` AS select `e`.`idEquipo` AS `idEquipo`,`e`.`Descripcion` AS `Descripcion`,`ma`.`idMarca` AS `idMarca`,`ma`.`Marca` AS `Marca`,`mo`.`idModelo` AS `idModelo`,`mo`.`Modelo` AS `Modelo`,`es`.`idEstado` AS `idEstado`,`es`.`Estado` AS `Estado`,`e`.`fechaIngreso` AS `fechaIngreso`,`e`.`Costo` AS `Costo` from (((`tblequipo` `e` join `tblmarca` `ma` on((`e`.`IdMarca` = `ma`.`idMarca`))) join `tblmodelo` `mo` on((`mo`.`idModelo` = `e`.`idModelo`))) join `tblestado` `es` on((`es`.`idEstado` = `e`.`idEstado`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_select_movimiento`
--
DROP TABLE IF EXISTS `vta_select_movimiento`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_select_movimiento` AS select `m`.`consecutivo` AS `consecutivo`,`m`.`fecha_entrada` AS `fecha_entrada`,`m`.`fecha_salida` AS `fecha_salida`,`eq`.`idEquipo` AS `idequipo`,`eq`.`Descripcion` AS `Descripcion_equipo`,`m`.`Observaciones` AS `Observaciones`,`em`.`codigo` AS `codigo_empleado`,`em`.`nombres` AS `nombres`,`em`.`apellidos` AS `apellidos`,`es`.`idEstado` AS `idEstado`,`es`.`Estado` AS `Estado`,`ot`.`codigo` AS `codigo_ordentrabajo`,`ot`.`ordentrabajo` AS `ordentrabajo`,`td`.`nombre` AS `tipo daño`,`td`.`codigo` AS `codigo daño` from (((((`tblmovimiento` `m` join `tblequipo` `eq` on((`m`.`equipo` = `eq`.`idEquipo`))) join `tblempleado` `em` on((`m`.`Empleado` = `em`.`codigo`))) join `tblestado` `es` on((`es`.`idEstado` = `m`.`Estado`))) join `tblordentrabajo` `ot` on((`ot`.`codigo` = `m`.`consecutivo_ot`))) join `tbltipodagno` `td` on((`td`.`codigo` = `m`.`Tipo_dagno`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_select_ordentrabajo`
--
DROP TABLE IF EXISTS `vta_select_ordentrabajo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_select_ordentrabajo` AS select `ot`.`codigo` AS `codigo`,`ot`.`ordentrabajo` AS `ordentrabajo`,`ot`.`fecha_orden` AS `fecha_orden`,`em`.`codigo` AS `idEmpleado`,`em`.`nombres` AS `nombres`,`em`.`apellidos` AS `apellidos`,`es`.`idEstado` AS `idEstado`,`es`.`Estado` AS `Estado` from ((`tblordentrabajo` `ot` join `tblempleado` `em` on((`ot`.`empleado` = `em`.`codigo`))) join `tblestado` `es` on((`ot`.`estado` = `es`.`idEstado`)));

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblempleado`
--
ALTER TABLE `tblempleado`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tblequipo`
--
ALTER TABLE `tblequipo`
 ADD PRIMARY KEY (`idEquipo`), ADD KEY `fk_tblequipo_tblmarca1_idx` (`IdMarca`), ADD KEY `fk_tblequipo_tblmodelo1_idx` (`idModelo`), ADD KEY `fk_tblequipo_tblestado1_idx` (`idEstado`);

--
-- Indices de la tabla `tblestado`
--
ALTER TABLE `tblestado`
 ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `tblfabrica`
--
ALTER TABLE `tblfabrica`
 ADD PRIMARY KEY (`idFabrica`);

--
-- Indices de la tabla `tblmarca`
--
ALTER TABLE `tblmarca`
 ADD PRIMARY KEY (`idMarca`), ADD KEY `fk_tblmarca_tblfabrica1_idx` (`idFabricante`);

--
-- Indices de la tabla `tblmodelo`
--
ALTER TABLE `tblmodelo`
 ADD PRIMARY KEY (`idModelo`);

--
-- Indices de la tabla `tblmovimiento`
--
ALTER TABLE `tblmovimiento`
 ADD PRIMARY KEY (`consecutivo`), ADD KEY `fk_tblmovimiento_tblequipo1_idx` (`equipo`), ADD KEY `fk_tblmovimiento_tblempleado1_idx` (`Empleado`), ADD KEY `fk_tblmovimiento_tblestado1_idx` (`Estado`), ADD KEY `fk_tblmovimiento_tblordentrabajo1_idx` (`consecutivo_ot`), ADD KEY `fk_tblmovimiento_tbltipodagno1_idx` (`Tipo_dagno`);

--
-- Indices de la tabla `tblordentrabajo`
--
ALTER TABLE `tblordentrabajo`
 ADD PRIMARY KEY (`codigo`), ADD KEY `fk_tblordentrabajo_tblempleado1_idx` (`empleado`), ADD KEY `FK_tblordentrabajo_tblequipo` (`idequipo`);

--
-- Indices de la tabla `tbltipodagno`
--
ALTER TABLE `tbltipodagno`
 ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblmovimiento`
--
ALTER TABLE `tblmovimiento`
MODIFY `consecutivo` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tblordentrabajo`
--
ALTER TABLE `tblordentrabajo`
MODIFY `codigo` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblequipo`
--
ALTER TABLE `tblequipo`
ADD CONSTRAINT `fk_tblequipo_tblestado1` FOREIGN KEY (`idEstado`) REFERENCES `tblestado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblequipo_tblmarca1` FOREIGN KEY (`IdMarca`) REFERENCES `tblmarca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblequipo_tblmodelo1` FOREIGN KEY (`idModelo`) REFERENCES `tblmodelo` (`idModelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblmarca`
--
ALTER TABLE `tblmarca`
ADD CONSTRAINT `fk_tblmarca_tblfabrica1` FOREIGN KEY (`idFabricante`) REFERENCES `tblfabrica` (`idFabrica`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblmovimiento`
--
ALTER TABLE `tblmovimiento`
ADD CONSTRAINT `fk_tblmovimiento_tblempleado1` FOREIGN KEY (`Empleado`) REFERENCES `tblempleado` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblmovimiento_tblequipo1` FOREIGN KEY (`equipo`) REFERENCES `tblequipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblmovimiento_tblestado1` FOREIGN KEY (`Estado`) REFERENCES `tblestado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblmovimiento_tblordentrabajo1` FOREIGN KEY (`consecutivo_ot`) REFERENCES `tblordentrabajo` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tblmovimiento_tbltipodagno1` FOREIGN KEY (`Tipo_dagno`) REFERENCES `tbltipodagno` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblordentrabajo`
--
ALTER TABLE `tblordentrabajo`
ADD CONSTRAINT `FK_tblordentrabajo_tblequipo` FOREIGN KEY (`idequipo`) REFERENCES `tblequipo` (`idEquipo`),
ADD CONSTRAINT `fk_tblordentrabajo_tblempleado1` FOREIGN KEY (`empleado`) REFERENCES `tblempleado` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
