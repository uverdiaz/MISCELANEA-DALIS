-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-12-2022 a las 16:52:25
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testing`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sample_datas`
--

DROP TABLE IF EXISTS `sample_datas`;
CREATE TABLE IF NOT EXISTS `sample_datas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sample_datas`
--

INSERT INTO `sample_datas` (`id`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Smith', '2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(2, 'Peter', 'Parker', '2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(3, 'Larry', 'Degraw', '2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(4, 'Tabitha', 'Russell', '2019-10-11 21:39:09', '2019-10-11 21:39:09'),
(5, 'Susan', 'Diener', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(6, 'William', 'Batiste', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(7, 'Bessie', 'Tucker', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(8, 'Eva', 'King', '2019-10-14 00:30:00', '2019-10-14 00:30:00'),
(9, 'Dorothy', 'Hays', '2019-10-14 03:30:00', '2019-10-14 03:30:00'),
(10, 'Nannie', 'Ayers', '2019-10-14 03:30:00', '2019-10-14 03:30:00'),
(11, 'Gerald', 'Brown', '2019-10-14 04:30:00', '2019-10-14 04:30:00'),
(12, 'Judith', 'Smith', '2019-10-14 04:30:00', '2019-10-14 04:30:00'),
(13, 'Betty', 'McLaughlin', '2019-10-14 13:30:00', '2019-10-14 13:30:00'),
(14, 'Delores', 'Schumacher', '2019-10-14 13:30:00', '2019-10-14 13:30:00'),
(15, 'Gloria', 'Romero', '2019-10-14 06:30:00', '2019-10-14 06:30:00'),
(16, 'Bobbie', 'Wilson', '2019-10-14 06:30:00', '2019-10-14 06:30:00'),
(17, 'Paul', 'Pate', '2019-10-14 13:30:00', '2019-10-14 13:30:00'),
(18, 'Ryan', 'Hoang', '2019-10-14 13:30:00', '2019-10-14 13:30:00'),
(19, 'First Name', 'Last Name', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'John', 'Smith', '2019-10-12 08:09:09', '2019-10-12 08:09:09'),
(21, 'Peter', 'Parker', '2019-10-12 08:09:09', '2019-10-12 08:09:09'),
(22, 'Larry', 'Degraw', '2019-10-12 08:09:09', '2019-10-12 08:09:09'),
(23, 'Susan', 'Diener', '2019-10-14 11:00:00', '2019-10-14 11:00:00'),
(24, 'William', 'Batiste', '2019-10-14 11:00:00', '2019-10-14 11:00:00'),
(25, 'Butler', 'Tucker', '2019-10-14 11:00:00', '2019-10-19 13:54:32'),
(26, 'Eva', 'King', '2019-10-14 11:00:00', '2019-10-14 11:00:00'),
(27, 'Dorothy', 'Hays', '2019-10-14 14:00:00', '2019-10-14 14:00:00'),
(28, 'Nannie', 'Ayers', '2019-10-14 14:00:00', '2019-10-14 14:00:00'),
(29, 'Gerald', 'Brown', '2019-10-14 15:00:00', '2019-10-14 15:00:00'),
(30, 'Judith', 'Smith', '2019-10-14 15:00:00', '2019-10-14 15:00:00'),
(31, 'Delores', 'Schumacher', '2019-10-15 00:00:00', '2019-10-15 00:00:00'),
(32, 'Gloria', 'Romero', '2019-10-14 17:00:00', '2019-10-14 17:00:00'),
(33, 'Paul', 'Pate', '2019-10-15 00:00:00', '2019-10-15 00:00:00'),
(34, 'Ryan', 'Hoang', '2019-10-15 00:00:00', '2019-10-15 00:00:00'),
(35, 'Dixie', 'Smith', '2019-10-17 17:22:21', '2019-10-17 17:22:21'),
(36, 'Jack', 'Smith', '2019-10-18 09:52:30', '2019-10-19 11:09:56'),
(37, 'Ronald', 'Derby', '2019-10-18 10:30:01', '2019-10-18 10:30:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_employee`
--

DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`) VALUES
(1, 'Bruce Tom', '656 Edsel Road\r\nSherman Oaks, CA 91403', 'Male', 'Driver', 36),
(5, 'Clara Gilliam', '63 Woodridge Lane\r\nMemphis, TN 38138', 'Female', 'Programmer', 24),
(6, 'Barbra K. Hurley', '1241 Canis Heights Drive\r\nLos Angeles, CA 90017', 'Female', 'Service technician', 26),
(7, 'Antonio J. Forbes', '403 Snyder Avenue\r\nCharlotte, NC 28208', 'Male', 'Faller', 32),
(8, 'Charles D. Horst', '1636 Walnut Hill Drive\r\nCincinnati, OH 45202', 'Male', 'Financial investigator', 29),
(9, 'Beau L. Clayton', '3588 Karen Lane\r\nLouisville, KY 40223', 'Male', 'Extractive metallurgical engin', 33),
(10, 'Ramona W. Burns', '2170 Ocala Street\r\nOrlando, FL 32801', 'Female', 'Electronic typesetting machine operator', 27),
(11, 'Jennifer A. Morrison', '2135 Lakeland Terrace\r\nPlymouth, MI 48170', 'Female', 'Rigging chaser', 29),
(12, 'Susan M. Juarez', '3177 Horseshoe Lane\r\nNorristown, PA 19403', 'Female', 'Control and valve installer', 25),
(13, 'Ellan D. Downie', '384 Flynn Street\r\nStrongsville, OH 44136', 'Female', 'Education and training manager', 26),
(14, 'Larry T. Williamson', '1424 Andell Road\r\nBrentwood, TN 37027', 'Male', 'Teaching assistant', 30),
(15, 'Lauren M. Reynolds', '4798 Echo Lane\r\nKentwood, MI 49512', 'Female', 'Internet developer', 22),
(16, 'Joseph L. Judge', '3717 Junkins Avenue\r\nMoultrie, GA 31768', 'Male', 'Refrigeration mechanic', 35),
(17, 'Eric C. Lavelle', '1120 Whitetail Lane\r\nDallas, TX 75207', 'Male', 'Model', 21),
(18, 'Cheryl T. Smithers', '1203 Abia Martin Drive\r\nCommack, NY 11725', 'Female', 'Personal banker', 23),
(19, 'Tonia J. Diaz', '4724 Rocky Road\r\nPhiladelphia, PA 19107', 'Female', 'Facilitator', 29),
(20, 'Stephanie P. Lederman', '2117 Larry Street\r\nWaukesha, WI 53186', 'Female', 'Mental health aide', 27),
(21, 'Edward F. Sanchez', '2313 Elliott Street\r\nManchester, NH 03101', 'Male', 'Marine oiler', 28);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
