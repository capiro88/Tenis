-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2019 a las 06:19:04
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tenisapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `idJugador` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `edad` int(11) NOT NULL,
  `mano` varchar(15) NOT NULL,
  `reves` varchar(15) NOT NULL,
  `estatura` int(11) NOT NULL,
  `puntos` int(8) NOT NULL,
  `torneosGanados` int(3) NOT NULL,
  `partidosGanados` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`idJugador`, `idUsuario`, `nombre`, `apellidos`, `edad`, `mano`, `reves`, `estatura`, `puntos`, `torneosGanados`, `partidosGanados`) VALUES
(1, 3, 'David', 'UrÃ¡n', 20, 'Derecha', 'a dos manos', 2, 219, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `idPartido` int(11) NOT NULL,
  `idTorneo` int(11) NOT NULL,
  `idJugador` int(11) NOT NULL,
  `marcador` varchar(10) NOT NULL,
  `fechaP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE `torneos` (
  `idTorneo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombreTorneo` varchar(60) NOT NULL,
  `fechaI` date NOT NULL,
  `fechaF` date NOT NULL,
  `numeroJ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `torneos`
--

INSERT INTO `torneos` (`idTorneo`, `idUsuario`, `nombreTorneo`, `fechaI`, `fechaF`, `numeroJ`) VALUES
(1, 3, 'Departamental etapa 1', '2019-06-25', '2019-06-28', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(40) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `contrasena`, `email`) VALUES
(2, 'david', 'david01', 'david@hotmail.com'),
(3, 'capiro88', '1112131415', 'davidurijr@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idJugador`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`idPartido`),
  ADD KEY `idTorneo` (`idTorneo`),
  ADD KEY `idJugador1` (`idJugador`);

--
-- Indices de la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD PRIMARY KEY (`idTorneo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `idJugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `idPartido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `torneos`
--
ALTER TABLE `torneos`
  MODIFY `idTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `partidos_ibfk_1` FOREIGN KEY (`idTorneo`) REFERENCES `torneos` (`idTorneo`),
  ADD CONSTRAINT `partidos_ibfk_2` FOREIGN KEY (`idJugador`) REFERENCES `jugadores` (`idJugador`);

--
-- Filtros para la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD CONSTRAINT `torneos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
