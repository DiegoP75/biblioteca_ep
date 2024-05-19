-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 15:32:39
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca_episcopal`
--
-- CREATE DATABASE IF NOT EXISTS `biblioteca_ep` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `if0_36577973_biblioteca_ep`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enciclicas`
--

CREATE TABLE `enciclicas` (
  `ID_enciclica` int(11) NOT NULL,
  `Nombre_Latin` varchar(100) NOT NULL,
  `Nombre_Español` varchar(100) NOT NULL,
  `Nombre_PAPA` varchar(50) NOT NULL,
  `Año_Publicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enciclicas`
--

INSERT INTO `enciclicas` (`ID_enciclica`, `Nombre_Latin`, `Nombre_Español`, `Nombre_PAPA`, `Año_Publicacion`) VALUES
(1, 'Amoris Laetitia', 'La Alegria Del Amor', 'Francisco', '2016-03-19'),
(2, 'Christifideles Laici', 'cristianos laicos', 'Juan Pablo II', '1988-12-30'),
(3, 'Rerum Novarum', 'De Las Cosas Nuevas', 'Leon XIII', '1891-05-15'),
(4, 'Quadragesimo Anno', 'Cuadragésimo Año', 'Pio XI', '1931-05-15'),
(5, 'Pacem in Terris', 'Paz En La Tierra', 'Juan XXIII', '1963-04-11'),
(6, 'Humanae Vitae', 'Vida Humana', 'Pablo VI', '1968-07-25'),
(7, 'Deus Caritas Est', 'Dios Es Amor', 'Benedicto XVI', '2005-12-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `episcopado`
--

CREATE TABLE `episcopado` (
  `ID_Nombre_PAPA` varchar(50) NOT NULL,
  `Nombre_Original` text NOT NULL,
  `Apellido` text NOT NULL,
  `Fecha_N` date NOT NULL,
  `N_Enciclicas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `episcopado`
--

INSERT INTO `episcopado` (`ID_Nombre_PAPA`, `Nombre_Original`, `Apellido`, `Fecha_N`, `N_Enciclicas`) VALUES
('Benedicto XVI', 'Joseph', 'Ratzinger', '1927-04-16', 3),
('Francisco', 'Jorge', 'Bergoglio', '1936-12-17', 4),
('Juan Pablo II', 'Karol', 'Wojtyla', '1920-05-18', 14),
('Juan XXIII', 'Angelo', 'Roncalli', '1881-11-25', 8),
('Leon XIII', 'Vincenzo', 'Pecci', '1810-03-02', 85),
('Pablo VI', 'Giovanni', 'Montini', '1897-09-26', 7),
('Pio XI', 'Achille', 'Ratti', '1857-05-31', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `Prestamo_ID` int(11) NOT NULL,
  `ID_enciclica` int(11) NOT NULL,
  `CI` int(11) NOT NULL,
  `Fecha_Prestamo` date NOT NULL,
  `Fecha_Devolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`Prestamo_ID`, `ID_enciclica`, `CI`, `Fecha_Prestamo`, `Fecha_Devolucion`) VALUES
(2, 5, 1276344, '2024-05-17', '2024-06-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CI` int(10) NOT NULL,
  `Primer_Nombre` varchar(100) NOT NULL,
  `Segundo_Nombre` varchar(100) NOT NULL,
  `ApellidoP` varchar(100) NOT NULL,
  `ApellidoM` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CI`, `Primer_Nombre`, `Segundo_Nombre`, `ApellidoP`, `ApellidoM`, `Telefono`, `Correo`) VALUES
(1276344, 'Angel', 'Gabriel', 'Torrealba', 'Celeste', '0412456378', 'Cielos07@gmail.com'),
(2352833, 'Axel\r\n', 'Adrian', 'Lopez', 'Morles', '0424358679', 'rezero21@gmail.com'),
(4567990, 'Maria ', 'Alejandra', 'Cruz', 'Morillo', '0416134272', 'MCruzmori@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `enciclicas`
--
ALTER TABLE `enciclicas`
  ADD PRIMARY KEY (`ID_enciclica`),
  ADD KEY `Nombre_PAPA` (`Nombre_PAPA`);

--
-- Indices de la tabla `episcopado`
--
ALTER TABLE `episcopado`
  ADD PRIMARY KEY (`ID_Nombre_PAPA`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`Prestamo_ID`),
  ADD KEY `ID_enciclica` (`ID_enciclica`),
  ADD KEY `CI` (`CI`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `enciclicas`
--
ALTER TABLE `enciclicas`
  MODIFY `ID_enciclica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `Prestamo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `enciclicas`
--
ALTER TABLE `enciclicas`
  ADD CONSTRAINT `enciclicas_ibfk_1` FOREIGN KEY (`Nombre_PAPA`) REFERENCES `episcopado` (`ID_Nombre_Papa`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`ID_enciclica`) REFERENCES `enciclicas` (`ID_enciclica`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`CI`) REFERENCES `usuarios` (`CI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
