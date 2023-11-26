DELIMITER //

CREATE PROCEDURE insertar_persona(
    IN sPNombre VARCHAR(20),
    IN sSNombre VARCHAR(20),
    IN sTNombre VARCHAR(20),
    IN sPaterno VARCHAR(20),
    IN sMaterno VARCHAR(20),
    IN sRFC VARCHAR(13), 
    IN sCURP VARCHAR(18),
    IN dFechaNacimiento DATE 
)
BEGIN
    INSERT INTO personal.persona (sPrimerNombre, sSegundoNombre, sTercerNombre, sApellidoPaterno, sApellidoMaterno, sCURP, sRFC, dFecNacimiento, dFecAlta)
    VALUES (sPNombre, sSNombre, sTNombre, sPaterno, sMaterno, sCURP, sRFC, dFechaNacimiento, NOW());
END //

DELIMITER ;


CALL insertar_persona('JOSE', 'RAUL', '', 'DAVID', 'CORONA', 'DACR0012147Z2', 'DACR001214HJCVRLA8', '2000-12-14');

SELECT * FROM personal.persona



-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2023 a las 01:51:05
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `sPrimerNombre` varchar(20) DEFAULT NULL,
  `sSegundoNombre` varchar(20) DEFAULT NULL,
  `sTercerNombre` varchar(20) DEFAULT NULL,
  `sApellidoPaterno` varchar(20) DEFAULT NULL,
  `sApellidoMaterno` varchar(20) DEFAULT NULL,
  `sRFC` varchar(13) DEFAULT NULL,
  `sCURP` varchar(18) DEFAULT NULL,
  `dFecNacimiento` date DEFAULT NULL,
  `dFecAlta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `sPrimerNombre`, `sSegundoNombre`, `sTercerNombre`, `sApellidoPaterno`, `sApellidoMaterno`, `sRFC`, `sCURP`, `dFecNacimiento`, `dFecAlta`) VALUES
(1, 'JOSE', 'RAUL', '', 'DAVID', 'CORONA', 'DACR0012147Z2', 'DACR001214HJCVRLA8', '2000-12-14', '2023-11-25 17:20:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
