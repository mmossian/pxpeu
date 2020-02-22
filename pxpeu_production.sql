-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-09-2019 a las 19:58:48
-- Versión del servidor: 5.7.27
-- Versión de PHP: 7.3.9-1+0~20190902.44+debian10~1.gbpf8534c

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pxpeu_production`
--
CREATE DATABASE IF NOT EXISTS `pxpeu_production` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pxpeu_production`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id_calendario` int(11) UNSIGNED NOT NULL,
  `id_centro` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `precio` float DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` varchar(15) DEFAULT NULL,
  `dia2` date DEFAULT NULL,
  `horario2` varchar(15) DEFAULT NULL,
  `dia3` date DEFAULT NULL,
  `horario3` varchar(15) DEFAULT NULL,
  `dia4` date DEFAULT NULL,
  `horario4` varchar(15) DEFAULT NULL,
  `dia5` date DEFAULT NULL,
  `horario5` varchar(15) DEFAULT NULL,
  `dia6` date DEFAULT NULL,
  `horario6` varchar(15) DEFAULT NULL,
  `estado` enum('activo','finalizado') DEFAULT 'activo',
  `notas` varchar(100) DEFAULT NULL,
  `idioma` enum('ES','EU') DEFAULT 'ES'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id_calendario`, `id_centro`, `id_curso`, `precio`, `fecha_inicio`, `fecha_fin`, `dia2`, `horario2`, `dia3`, `horario3`, `dia4`, `horario4`, `dia5`, `horario5`, `dia6`, `horario6`, `estado`, `notas`, `idioma`) VALUES
(1, 265, 2, 180.92, '2019-08-05', '15:00-21:00\r\n', '2019-08-06', '15:00-21:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(2, 265, 2, 180.92, '2019-09-06', '15:00-21:00\r\n', '2019-09-07', '08:30-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(3, 265, 1, 340.59, '2019-09-20', '15:00-21:00\r\n', '2019-09-21', '08:30-14:30\r\n', '2019-09-27', '15:00-21:00\r\n', '2019-09-28', '8:30-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(5, 265, 2, 180.92, '2019-10-25', '15:00-21:00\r\n', '2019-10-26', '08:30-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(6, 265, 1, 340.59, '2019-11-15', '15:00-21:00\r\n', '2019-11-16', '08:30-14:30\r\n', '2019-11-22', '15:00-21:00\r\n', '2019-11-23', '08:30-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(7, 265, 2, 180.92, '2019-11-29', '15:00-21:00\r\n', '2019-11-30', '08:30-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(8, 265, 2, 180.92, '2019-12-13', '15:00-21:00', '2019-12-14', '08:30-14:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(9, 3, 2, 180.92, '2019-08-07', '15:30-21:30\r\n', '2019-08-08', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(10, 3, 2, 180.92, '2019-09-04', '15:30-21:30\r\n', '2019-09-05', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(11, 3, 1, 340.59, '2019-09-10', '15:30-19:30\r\n', '2019-09-11', '15:30-19:30\r\n', '2019-09-12', '15:30-19:30\r\n', '2019-09-16', '15:30-19:30\r\n', '2019-09-17', '15:30-19:30\r\n', '2019-09-18', '15:30-19:30\r\n', 'activo', NULL, 'EU'),
(12, 3, 2, 180.92, '2019-10-07', '15:30-21:30\r\n', '2019-10-08', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(13, 3, 2, 180.92, '2019-11-04', '15.30-21:30', '2019-11-05', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(14, 3, 1, 340.59, '2019-11-06', '15:30-19:30\r\n', '2019-11-07', '15:30-19:30\r\n', '2019-11-08', '15:30-19:30\r\n', '2019-11-12', '15:30-19:30\r\n', '2019-11-13', '15:30-19:30\r\n', '2019-11-14', '15:30-19:30\r\n', 'activo', NULL, 'ES'),
(15, 3, 2, 180.92, '2019-12-09', '15.30-21:30\r\n', '2019-12-10', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(16, 4, 1, 340.59, '2019-08-19', '15.30-21:30\r\n', '2019-08-20', '15:30-21:30\r\n', '2019-08-26', '15:30-21:30\r\n', '2019-08-27', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(17, 4, 2, 180.92, '2019-08-28', '15.30-21:30\r\n', '2019-08-29', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(18, 4, 2, 180.92, '2019-09-23', '15.30-21:30\r\n', '2019-09-24', '15:30-21:30\r\n', '2019-09-25', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(19, 4, 1, 340.59, '2019-10-14', '15:30-19:30\r\n', '2019-10-15', '15:30-19:30\r\n', '2019-10-16', '15:30-19:30\r\n', '2019-10-21', '15:30-19:30\r\n', '2019-10-22', '15:30-19:30\r\n', '2019-10-23', '15:30-19:30\r\n', 'activo', NULL, 'ES'),
(20, 4, 2, 180.92, '2019-10-28', '15:30-19:30\r\n', '2019-10-29', '15:30-19:30\r\n', '2019-10-30', '15:30-19:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(21, 4, 2, 180.92, '2019-11-20', '15.30-21:30\r\n', '2019-11-21', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(22, 4, 1, 340.59, '2019-12-03', '15.30-21:30\r\n', '2019-12-04', '15:30-21:30\r\n', '2019-12-11', '15:30-21:30\r\n', '2019-12-12', '15:30-21:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(23, 4, 2, 180.92, '2019-12-17', '15:30-19:30\r\n', '2019-12-18', '15:30-19:30\r\n', '2019-12-19', '15:30-19:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(24, 242, 2, 180.92, '2019-08-26', '14:30-20:30\r\n', '2019-08-27', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(25, 242, 1, 340.59, '2019-10-09', '14:30-20:30\r\n', '2019-10-10', '14:30-20:30\r\n', '2019-10-11', '14:30-20:30\r\n', '2019-10-12', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(26, 242, 2, 180.92, '2019-09-30', '08:00-14:00\r\n', '2019-10-01', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(27, 242, 1, 340.59, '2019-10-14', '14:30-20:30\r\n', '2019-10-15', '14:30-20:30\r\n', '2019-10-16', '14:30-20:30\r\n', '2019-10-17', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(28, 242, 2, 180.92, '2019-10-21', '14:30-20:30\r\n', '2019-10-22', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(29, 242, 1, 340.59, '2019-11-11', '14:30-20:30\r\n', '2019-11-12', '14:30-20:30\r\n', '2019-11-13', '14:30-20:30\r\n', '2019-11-14', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(30, 242, 2, 180.92, '2019-10-18', '14:30-20:30\r\n', '2019-10-19', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(31, 242, 1, 340.59, '2019-12-16', '14:30-20:30\r\n', '2019-12-17', '14:30-20:30\r\n', '2019-12-18', '14:30-20:30\r\n', '2019-12-19', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(32, 242, 2, 180.92, '2019-12-26', '14:30-20:30\r\n', '2019-12-27', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(33, 243, 2, 180.92, '2019-08-12', '14:30-20:30\r\n', '2019-08-13', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(34, 243, 2, 180.92, '2019-09-16', '16:00-20:00\r\n', '2019-09-17', '16:00-20:00\r\n', '2019-09-18', '16:00-20:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(35, 243, 2, 180.92, '2019-10-14', '8:30-12:30\r\n', '2019-10-15', '8:30-12:30\r\n', '2019-10-16', '8:30-12:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(36, 243, 1, 340.59, '2019-10-28', '08:00-14:00\r\n', '2019-10-29', '08:00-14:00\r\n', '2019-10-30', '08:00-14:00\r\n', '2019-10-31', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(37, 243, 2, 180.92, '2019-11-13', '08:30-12:30\r\n', '2019-11-14', '8:30-12:30\r\n', '2019-11-15', '8:30-12:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(38, 243, 1, 340.59, '2019-12-02', '08:00-14:00\r\n', '2019-12-03', '08:00-14:00\r\n', '2019-12-04', '08:00-14:00\r\n', '2019-12-05', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(39, 243, 2, 180.92, '2019-12-18', '08:30-12:30\r\n', '2019-12-19', '8:30-12:30\r\n', '2019-12-20', '8:30-12:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(40, 244, 2, 180.92, '2019-08-19', '14:30-20:30\r\n', '2019-08-20', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(41, 244, 2, 180.92, '2019-09-24', '08:30-12:30\r\n', '2019-09-25', '8:30-12:30\r\n', '2019-09-26', '8:30-12:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(42, 244, 1, 340.59, '2019-09-24', '14:30-20:30\r\n', '2019-09-25', '14:30-20:30\r\n', '2019-09-26', '14:30-20:30\r\n', '2019-09-27', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(43, 244, 2, 180.92, '2019-10-28', '16:00-20:00\r\n', '2019-10-29', '16:00-20:00\r\n', '2019-10-30', '16:00-20:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(44, 244, 2, 180.92, '2019-11-20', '14:30-20:30\r\n', '2019-11-21', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(45, 244, 1, 340.59, '2019-11-26', '14:30-20:30\r\n', '2019-11-27', '14:30-20:30\r\n', '2019-11-28', '14:30-20:30\r\n', '2019-11-29', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(46, 244, 2, 180.92, '2019-12-30', '14:30-20:30\r\n', '2019-12-31', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(47, 83, 2, 180.92, '2019-08-05', '08:00-14:30\r\n', '2019-08-06', '08:00-14:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(48, 83, 1, 340.59, '2019-08-28', '16:00-20:15\r\n', '2019-08-29', '16:00-20:15\r\n', '2019-08-30', '16:00-20:15\r\n', '2019-09-02', '16:00-20:15\r\n', '2019-09-03', '16:00-20:15\r\n', '2019-09-04', '16:00-20:15\r\n', 'finalizado', NULL, 'ES'),
(49, 83, 2, 180.92, '2019-09-09', '16:00-20:15\r\n', '2019-09-10', '16:00-20:15\r\n', '2019-09-11', '16:00-20:15\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(50, 83, 2, 180.92, '2019-10-07', '16:00-20:15\r\n', '2019-10-08', '16:00-20:15\r\n', '2019-10-09', '16:00-20:15\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(51, 83, 1, 340.59, '2019-10-21', '16:00-20:15\r\n', '2019-10-22', '16:00-20:15\r\n', '2019-10-23', '16:00-20:15\r\n', '2019-10-28', '16:00-20:15\r\n', '2019-10-29', '16:00-20:15\r\n', '2019-10-30', '16:00-20:15\r\n', 'activo', NULL, 'ES'),
(52, 83, 2, 180.92, '2019-11-11', '16:00-20:15\r\n', '2019-11-12', '16:00-20:15\r\n', '2019-11-13', '16:00-20:15\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(53, 83, 2, 180.92, '2019-12-02', '16:00-20:15\r\n', '2019-12-03', '16:00-20:15\r\n', '2019-12-04', '16:00-20:15\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(54, 83, 1, 340.59, '2019-12-09', '16:00-20:15\r\n', '2019-12-10', '16:00-20:15\r\n', '2019-12-11', '16:00-20:15\r\n', '2019-12-16', '16:00-20:15\r\n', '2019-12-17', '16:00-20:15\r\n', '2019-12-18', '16:00-20:15\r\n', 'activo', NULL, 'ES'),
(55, 101, 1, 340.59, '2019-08-22', '08:00-14:00\r\n', '2019-08-23', '08:00-14:00\r\n', '2019-08-26', '08:00-14:00\r\n', '2019-08-27', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, 'finalizado', NULL, 'ES'),
(56, 101, 2, 180.92, '2019-08-28', '08:00-14:00\r\n', '2019-08-29', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(57, 101, 1, 340.59, '2019-09-24', '14:30-20:30\r\n', '2019-09-25', '14:30-20:30\r\n', '2019-09-26', '14:30-20:30\r\n', '2019-09-27', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(58, 101, 2, 180.92, '2019-09-30', '14:30-20:30\r\n', '2019-10-01', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(59, 101, 1, 340.59, '2019-10-21', '14:30-20:30\r\n', '2019-10-22', '14:30-20:30\r\n', '2019-10-23', '14:30-20:30\r\n', '2019-10-24', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(60, 101, 2, 180.92, '2019-10-29', '14:30-20:30\r\n', '2019-10-30', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(61, 101, 1, 340.59, '2019-11-18', '14:30-20:30\r\n', '2019-11-19', '14:30-20:30\r\n', '2019-11-20', '14:30-20:30\r\n', '2019-11-21', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(62, 101, 2, 180.92, '2019-11-26', '14:30-20:30\r\n', '2019-11-27', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(63, 101, 1, 340.59, '2019-12-16', '14:30-20:30\r\n', '2019-12-17', '14:30-20:30\r\n', '2019-12-18', '14:30-20:30\r\n', '2019-12-19', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(64, 101, 2, 180.92, '2019-12-26', '14:30-20:30\r\n', '2019-12-27', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(65, 100, 1, 340.59, '2019-08-06', '14:30-20:30\r\n', '2019-08-07', '14:30-20:30\r\n', '2019-08-08', '14:30-20:30\r\n', '2019-08-09', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'finalizado', NULL, 'ES'),
(66, 100, 2, 180.92, '2019-08-13', '14:30-20:30\r\n', '2019-08-14', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(67, 100, 1, 340.59, '2019-09-10', '08:00-14:00\r\n', '2019-09-11', '08:00-14:00\r\n', '2019-09-12', '08:00-14:00\r\n', '2019-09-13', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(68, 100, 2, 180.92, '2019-09-18', '08:00-14:00\r\n', '2019-09-19', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(69, 100, 1, 340.59, '2019-10-08', '08:00-14:00\r\n', '2019-10-09', '08:00-14:00\r\n', '2019-10-10', '08:00-14:00\r\n', '2019-10-11', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(70, 100, 2, 180.92, '2019-10-15', '08:00-14:00\r\n', '2019-10-16', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(71, 100, 1, 340.59, '2019-11-05', '08:00-14:00\r\n', '2019-11-06', '08:00-14:00\r\n', '2019-11-07', '08:00-14:00\r\n', '2019-11-08', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(72, 100, 2, 180.92, '2019-11-12', '08:00-14:00\r\n', '2019-11-13', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(73, 100, 1, 340.59, '2019-12-02', '08:00-14:00\r\n', '2019-12-03', '08:00-14:00\r\n', '2019-12-04', '08:00-14:00\r\n', '2019-12-05', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(74, 100, 2, 180.92, '2019-12-10', '08:00-14:00\r\n', '2019-12-11', '08:00-14:00\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(75, 228, 2, 180.92, '2019-08-30', '14:30-21:00\r\n', '2019-08-31', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(76, 228, 1, 340.59, '2019-09-13', '14:30-21:00\r\n', '2019-09-14', '8:00-14:30\r\n', '2019-09-20', '14:30-21:00\r\n', '2019-06-21', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(77, 228, 2, 180.92, '2019-09-27', '14:30-21:00\r\n', '2019-09-28', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(78, 228, 2, 180.92, '2019-10-25', '14:30-21:00\r\n', '2019-10-26', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(79, 228, 1, 340.59, '2019-11-15', '14:30-21:00\r\n', '2019-11-16', '8:00-14:30\r\n', '2019-11-22', '14:30-21:00\r\n', '2019-01-23', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(80, 228, 2, 180.92, '2019-11-29', '14:30-21:00\r\n', '2019-11-30', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(81, 228, 2, 180.92, '2019-12-27', '14:30-21:00\r\n', '2019-12-28', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(82, 230, 2, 180.92, '2019-08-07', '14:00-20:30\r\n', '2019-08-08', '14:00:00-20:30\r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(83, 227, 2, 180.92, '2019-08-30', '15:00-21:30\r\n', '2019-08-31', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(84, 227, 1, 340.59, '2019-08-08', '15:00-21:30\r\n', '2019-08-09', '15:00-21:30\r\n', '2019-08-12', '15:00-21:30\r\n', '2019-08-13', '15:00-21:30\r\n', NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(85, 227, 2, 180.92, '2019-09-20', '15:00-21:30\r\n', '2019-09-21', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(86, 227, 1, 340.59, '2019-10-18', '15:00-21:30\r\n', '2019-10-19', '08:00-14:30\r\n', '2019-10-25', '15:00-21:30\r\n', '2019-10-26', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(87, 227, 2, 180.92, '2019-10-25', '15:00-21:30\r\n', '2019-10-26', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(88, 227, 2, 180.92, '2019-11-22', '15:00-21:30\r\n', '2019-11-23', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(89, 227, 1, 340.59, '2019-12-13', '15:00-21:30\r\n', '2019-12-14', '08:00-14:30\r\n', '2019-12-20', '15:00-21:30\r\n', '2019-12-21', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(90, 227, 2, 180.92, '2019-12-20', '15:00-21:30\r\n', '2019-12-21', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(91, 230, 2, 180.92, '2019-09-06', '14:00-20:30\r\n', '2019-09-07', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(92, 230, 1, 340.59, '2019-09-20', '14:00-20:30\r\n', '2019-09-21', '08:00-14:30\r\n', '2019-09-27', '14:00-20:30\r\n', '2019-09-28', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(93, 230, 2, 180.92, '2019-10-04', '14:00-20:30\r\n', '2019-10-05', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(94, 230, 1, 340.59, '2019-11-15', '14:00-20:30\r\n', '2019-11-16', '08:00-14:30\r\n', '2019-11-22', '14:00-20:30\r\n', '2019-11-23', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(95, 230, 2, 180.92, '2019-11-29', '14:00-20:20\r\n', '2019-11-30', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(96, 230, 2, 180.92, '2019-12-27', '14:00-20:20\r\n', '2019-12-28', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(97, 229, 2, 180.92, '2019-08-19', '08:00-14:30\r\n', '2019-08-20', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(98, 229, 1, 340.59, '2019-08-19', '08:00-14:30\r\n', '2019-08-20', '08:00-14:30\r\n', '2019-08-26', '08:00-14:30\r\n', '2019-08-27', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(99, 229, 2, 180.92, '2019-09-13', '15:00-21:30\r\n', '2019-09-14', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(100, 229, 2, 180.92, '2019-10-04', '15:00-21:30\r\n', '2019-10-05', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(101, 229, 1, 340.59, '2019-10-18', '15:00-21:30\r\n', '2019-10-19', '08:00-14:30\r\n', '2019-10-25', '15:00-21:30\r\n', '2019-10-26', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(102, 229, 2, 180.92, '2019-11-08', '15:00-21:30\r\n', '2019-11-09', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(103, 229, 2, 180.92, '2019-12-13', '15:00-21:30\r\n', '2019-12-14', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(104, 229, 1, 340.59, '2019-12-20', '15:00-21:30\r\n', '2019-12-21', '08:00-14:30\r\n', '2019-12-27', '15:00-21:30\r\n', '2019-12-28', '08:00-14:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(105, 245, 2, 180.92, '2019-08-05', '14:30-20:30\r\n', '2019-08-06', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'EU'),
(106, 245, 2, 180.92, '2019-09-02', '14:30-20:30\r\n', '2019-09-03', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(107, 245, 2, 180.92, '2019-10-02', '8:30-12:30\r\n', '2019-10-03', '8:30-12:30\r\n', '2019-10-04', '8:30-12:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(108, 245, 1, 340.59, '2019-10-07', '14:30-20:30\r\n', '2019-10-08', '14:30-20:30\r\n', '2019-10-09', '14:30-20:30\r\n', '2019-10-10', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(109, 245, 2, 180.92, '2019-11-06', '8:30-12:30\r\n', '2019-11-07', '8:30-12:30\r\n', '2019-11-08', '8:30-12:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(110, 245, 2, 180.92, '2019-12-10', '8:30-12:30\r\n', '2019-12-11', '8:30-12:30\r\n', '2019-12-12', '8:30-12:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(111, 245, 1, 340.59, '2019-12-09', '14:30-20:30\r\n', '2019-12-10', '14:30-20:30\r\n', '2019-12-11', '14:30-20:30\r\n', '2019-12-12', '14:30-20:30\r\n', NULL, NULL, NULL, NULL, 'activo', NULL, 'EU'),
(112, 226, 2, 180.92, '2019-08-29', '15:00-21:30\r\n', '2019-08-30', '15:00-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activo', NULL, 'ES'),
(113, 231, 2, 180.92, '2019-08-12', '15:00-21:30\r\n', '2019-08-13', '15:00-21:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'ES'),
(114, 225, 2, 180.92, '2019-08-05', '8:00-14:30\r\n', '2019-08-06', '8:00-14:30\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'finalizado', NULL, 'ES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario-bkp`
--

CREATE TABLE `calendario-bkp` (
  `id_calendario` int(11) NOT NULL,
  `id_centro` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_inicio` time NOT NULL DEFAULT '00:00:00',
  `hora_fin` time NOT NULL DEFAULT '00:00:00',
  `duracion` smallint(6) NOT NULL DEFAULT '60',
  `estado` enum('activo','finalizado') NOT NULL DEFAULT 'activo',
  `idioma` enum('EU','ES') NOT NULL DEFAULT 'ES',
  `notas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendario-bkp`
--

INSERT INTO `calendario-bkp` (`id_calendario`, `id_centro`, `id_curso`, `fecha_inicio`, `hora_inicio`, `hora_fin`, `duracion`, `estado`, `idioma`, `notas`) VALUES
(1, 265, 2, '2019-08-05', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(2, 265, 2, '2019-09-06', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(3, 265, 1, '2019-09-20', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(5, 265, 2, '2019-10-25', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(6, 265, 1, '2019-11-15', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(7, 265, 2, '2019-11-29', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(8, 265, 2, '2019-12-13', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(9, 3, 2, '2019-08-07', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(10, 3, 2, '2019-09-04', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(11, 3, 1, '2019-09-10', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(12, 3, 2, '2019-10-07', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(13, 3, 2, '2019-11-04', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(14, 3, 1, '2019-11-06', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(15, 3, 2, '2019-12-09', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(16, 4, 1, '2019-08-19', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(17, 4, 2, '2019-08-28', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(18, 4, 2, '2019-09-23', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(19, 4, 1, '2019-10-14', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(20, 4, 2, '2019-10-28', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(21, 4, 2, '2019-11-20', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(22, 4, 1, '2019-12-03', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(23, 4, 2, '2019-12-17', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(24, 242, 2, '2019-08-26', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(25, 242, 1, '2019-10-09', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(26, 242, 2, '2019-09-30', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(27, 242, 1, '2019-10-14', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(28, 242, 2, '2019-10-21', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(29, 242, 1, '2019-11-11', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(30, 242, 2, '2019-10-18', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(31, 242, 1, '2019-12-16', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(32, 242, 2, '2019-12-26', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(33, 243, 2, '2019-08-12', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(34, 243, 2, '2019-09-16', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(35, 243, 2, '2019-10-14', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(36, 243, 1, '2019-10-28', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(37, 243, 2, '2019-11-13', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(38, 243, 1, '2019-12-02', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(39, 243, 2, '2019-12-18', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(40, 244, 2, '2019-08-19', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(41, 244, 2, '2019-09-24', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(42, 244, 1, '2019-09-24', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(43, 244, 2, '2019-10-28', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(44, 244, 2, '2019-11-20', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(45, 244, 1, '2019-11-26', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(46, 244, 2, '2019-12-30', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(47, 83, 2, '2019-08-05', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(48, 83, 1, '2019-08-28', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(49, 83, 2, '2019-09-09', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(50, 83, 2, '2019-10-07', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(51, 83, 1, '2019-10-21', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(52, 83, 2, '2019-11-11', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(53, 83, 2, '2019-12-02', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(54, 83, 1, '2019-12-09', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(55, 101, 1, '2019-08-22', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(56, 101, 2, '2019-08-28', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(57, 101, 1, '2019-09-24', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(58, 101, 2, '2019-09-30', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(59, 101, 1, '2019-10-21', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(60, 101, 2, '2019-10-29', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(61, 101, 1, '2019-11-18', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(62, 101, 2, '2019-11-26', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(63, 101, 1, '2019-12-16', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(64, 101, 2, '2019-12-26', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(65, 100, 1, '2019-08-06', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(66, 100, 2, '2019-08-13', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(67, 100, 1, '2019-09-10', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(68, 100, 2, '2019-09-18', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(69, 100, 1, '2019-10-08', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(70, 100, 2, '2019-10-15', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(71, 100, 1, '2019-11-05', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(72, 100, 2, '2019-11-12', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(73, 100, 1, '2019-12-02', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(74, 100, 2, '2019-12-10', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(75, 228, 2, '2019-08-30', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(76, 228, 1, '2019-09-13', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(77, 228, 2, '2019-09-27', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(78, 228, 2, '2019-10-25', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(79, 228, 1, '2019-11-15', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(80, 228, 2, '2019-11-29', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(81, 228, 2, '2019-12-27', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(82, 230, 2, '2019-08-07', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(83, 227, 2, '2019-08-30', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(84, 227, 1, '2019-08-08', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(85, 227, 2, '2019-09-20', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(86, 227, 1, '2019-10-18', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(87, 227, 2, '2019-10-25', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(88, 227, 2, '2019-11-22', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(89, 227, 1, '2019-12-13', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(90, 227, 2, '2019-12-20', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(91, 230, 2, '2019-09-06', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(92, 230, 1, '2019-09-20', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(93, 230, 2, '2019-10-04', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(94, 230, 1, '2019-11-15', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(95, 230, 2, '2019-11-29', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(96, 230, 2, '2019-12-27', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(97, 229, 2, '2019-08-19', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(98, 229, 1, '2019-08-19', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(99, 229, 2, '2019-09-13', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(100, 229, 2, '2019-10-04', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(101, 229, 1, '2019-10-18', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(102, 229, 2, '2019-11-08', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(103, 229, 2, '2019-12-13', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(104, 229, 1, '2019-12-20', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(105, 245, 2, '2019-08-05', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(106, 245, 2, '2019-09-02', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(107, 245, 2, '2019-10-02', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(108, 245, 1, '2019-10-07', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(109, 245, 2, '2019-11-06', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(110, 245, 2, '2019-12-10', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(111, 245, 1, '2019-12-09', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(112, 226, 2, '2019-08-29', '15:00:00', '21:00:00', 360, 'activo', 'ES', NULL),
(113, 231, 2, '2019-08-12', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL),
(114, 225, 2, '2019-08-05', '15:00:00', '21:00:00', 360, 'finalizado', 'ES', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario0`
--

CREATE TABLE `calendario0` (
  `id_calendario` int(11) NOT NULL,
  `id_centro` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendario0`
--

INSERT INTO `calendario0` (`id_calendario`, `id_centro`, `id_curso`, `id_paquete`) VALUES
(1, 265, 1, 1),
(2, 265, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `id_centro` int(3) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `telefono1` int(9) DEFAULT NULL,
  `telefono2` int(9) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pagobanco` tinyint(1) NOT NULL DEFAULT '1',
  `pagotarjeta` tinyint(1) NOT NULL DEFAULT '1',
  `notas` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`id_centro`, `nombre`, `telefono1`, `telefono2`, `email`, `pagobanco`, `pagotarjeta`, `notas`) VALUES
(3, 'Ae. CLAXON\r\n', 945277454, NULL, 'chema@distintiva.com', 1, 1, 'AUTOCLAXON@GMAIL.COM'),
(4, 'Ae. CLAXON\r\n', 945253766, NULL, 'autoclaxon@gmail.com\r\n', 1, 1, NULL),
(83, 'Ae. BENGOETXEA\r\n', 943690057, NULL, 'joxanbengoetxea@hotmail.com\r\n', 1, 1, NULL),
(100, 'Ae. LAGUNAK\r\n', 943458486, NULL, 'fortrans@lagunak.com\r\n', 1, 1, NULL),
(101, 'Ae. LAGUNAK\r\n', 943228089, NULL, 'fortrans@lagunak.com\r\n', 1, 1, NULL),
(225, 'Ae. MIKEL \r\n', 944116382, NULL, 'mikel@mikel.bz\r\n', 1, 0, NULL),
(226, 'Ae. JAVIER\r\n', 944277316, NULL, 'clasicoskan@gmail.com\r\n', 1, 1, NULL),
(227, 'Ae. REKORD\r\n', 944834976, 944834976, 'rekord.santurtzi@hotmail.com\r\n', 1, 1, NULL),
(228, 'Ae. URKOIZ\r\n', 946813127, NULL, 'durango@urkoiz.com\r\n', 1, 1, NULL),
(229, 'Ae. GERNIKA\r\n', 946254167, NULL, 'gernikaautoeskola@hotmail.com\r\n', 1, 1, NULL),
(230, 'Ae. ARIAS\r\n', 944638857, NULL, 'sarias3@hotmail.com\r\n', 1, 0, NULL),
(231, 'Ae. BASURTO\r\n', 944275898, NULL, 'fernandosainzgr@hotmail.com\r\n', 1, 1, NULL),
(242, 'Ae. SOLOZABAL', 943798667, 663750004, 'aretxabaleta@solozabalautoeskolak.com', 1, 1, NULL),
(243, 'Ae. SOLOZABAL', 943742720, NULL, 'elgoibar@solozabalautoeskolak.com\r\n', 1, 1, NULL),
(244, 'Ae. SOLOZABAL', 943720452, NULL, 'zumarraga@solozabalautoeskolak.com\r\n', 1, 1, NULL),
(245, 'Ae. SOLOZABAL', 946832638, NULL, 'ondarroa@solozabalautoeskolak.com\r\n', 1, 1, NULL),
(265, 'Ae. BETIKO', 946120683, 620227687, 'info@betikoautoescuela.com\r\n', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros_direcciones`
--

CREATE TABLE `centros_direcciones` (
  `id_centro_direccion` int(11) NOT NULL,
  `id_centro` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centros_direcciones`
--

INSERT INTO `centros_direcciones` (`id_centro_direccion`, `id_centro`, `id_direccion`) VALUES
(1, 3, 1),
(5, 83, 5),
(6, 225, 6),
(7, 226, 7),
(8, 227, 8),
(9, 228, 9),
(10, 229, 10),
(11, 230, 11),
(12, 231, 12),
(13, 242, 13),
(14, 265, 14),
(15, 4, 15),
(16, 100, 16),
(17, 101, 17),
(18, 243, 18),
(19, 244, 19),
(20, 245, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `orden` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `curso`, `orden`) VALUES
(1, 'Recuperación permiso', 2),
(2, 'Recuperación parcial', 1),
(3, 'Ciclo formativo adicional', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_paquetes`
--

CREATE TABLE `cursos_paquetes` (
  `id_curso_fecha` int(11) NOT NULL,
  `num_paquete` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `estado` enum('activo','finalizado') NOT NULL DEFAULT 'activo',
  `idioma` enum('EU','ES') NOT NULL DEFAULT 'ES'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos_paquetes`
--

INSERT INTO `cursos_paquetes` (`id_curso_fecha`, `num_paquete`, `fecha_inicio`, `hora_inicio`, `hora_fin`, `estado`, `idioma`) VALUES
(1, 1, '2019-09-06', '15:00:00', '21:00:00', 'activo', 'ES'),
(2, 1, '2019-09-07', '08:30:00', '14:30:00', 'activo', 'ES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `direccion_simple` varchar(30) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL COMMENT 'ELIMINAR',
  `codpostal` int(5) DEFAULT NULL,
  `provincia` varchar(9) DEFAULT NULL COMMENT 'ELIMINAR',
  `id_localidad` int(11) DEFAULT NULL,
  `id_provincia` int(11) DEFAULT NULL,
  `place_id` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `direccion`, `direccion_simple`, `localidad`, `codpostal`, `provincia`, `id_localidad`, `id_provincia`, `place_id`, `latitude`, `longitude`) VALUES
(1, 'CALLE FLORIDA, 45\r\n, 1005', 'CALLE FLORIDA, 45\r\n', 'VITORIA-GASTEIZ', 1005, 'ARABA', 1, 1, 'Ej1QYXNlbyBkZSBsYSBGbG9yaWRhLCA0NSwgMDEwMDUgVml0b3JpYS1HYXN0ZWl6LCDDgWxhdmEsIFNwYWluIjASLgoUChIJF-8MoG3CTw0RSV3_ChcHByAQLSoUChIJu43tsW3CTw0RcNotAydHuIc', 42.843636, -2.6759695000000647),
(5, 'CALLE NUEVA, 32\r\n, 20150', 'CALLE NUEVA, 32\r\n', 'VILLABONA', 20150, 'GIPUZKOA', 5, 2, 'ChIJk0HycXGzUQ0RkOokSW0LdkY', 43.1883781, -2.0527011000000357),
(6, 'CALLE SANTUTXU, 41\r\n, 48004', 'CALLE SANTUTXU, 41\r\n', 'BILBAO', 48004, 'BIZKAIA', 6, 3, 'ChIJgT56p0tOTg0RzVAlvEYdex4', 43.25104690000001, -2.914536699999985),
(7, 'CALLE AUTONOMIA, 55\r\n, 48012', 'CALLE AUTONOMIA, 55\r\n', 'BILBAO', 48012, 'BIZKAIA', 6, 3, 'ChIJW59z4C1QTg0RrcYLHLejVfA', 43.25774269999999, -2.946353400000021),
(8, 'CALLE AURORA PEREZ DE VELEZ, 3, 48980', 'CALLE AURORA PEREZ DE VELEZ, 3', 'SANTURTZI', 48980, 'BIZKAIA', 7, 3, '', 43.3311124, -3.0384204),
(9, 'CALLE SASIKOA, 8\r\n, 48200', 'CALLE SASIKOA, 8\r\n', 'DURANGO', 48200, 'BIZKAIA', 8, 3, 'ChIJyReYrJMyTg0R-LJPSyIjzd0', 43.1710921, -2.6357106000000385),
(10, 'CALLE SAN JUAN, 21\r\n, 48300', 'CALLE SAN JUAN, 21\r\n', 'GERNIKA', 48300, 'BIZKAIA', 9, 3, 'EjZTYW4gSnVhbiBLYWxlYSwgMjEsIDQ4MzAwIEdlcm5pa2EtTHVtbywgQml6a2FpYSwgU3BhaW4iMBIuChQKEgmhxFTHajpODRGIHPY6xBG20RAVKhQKEgmT7i-5ajpODRE_rmyA0qQWEg', 43.3163575, -2.6777592999999342),
(11, 'CALLE ZALAMA, 2\r\n, 48930', 'CALLE ZALAMA, 2\r\n', 'GETXO', 48930, 'BIZKAIA', 10, 3, '', 43.3274473, -3.0141913),
(12, 'PLAZA AITA DONOSTIA, 2\r\n, 48012', 'PLAZA AITA DONOSTIA, 2\r\n', 'BILBAO', 48012, 'BIZKAIA', 6, 3, '', 43.2574577, -2.9521676),
(13, 'CALLE MITARTE, 18\r\n, 20550', 'CALLE MITARTE, 18\r\n', 'ARETXABALETA', 20550, 'GIPUZKOA', 12, 2, 'ChIJx685ff7WTw0RJ5SO12NpAZU', 43.03337229999999, -2.50434180000002),
(14, 'PLAZA OSTEGUIETA, 2, 1400', 'PLAZA OSTEGUIETA, 2', 'LAUDIO-LLODIO', 1400, 'ARABA', 13, 1, 'Ei5Pc3RlZ2lldGEgUGxhemEsIDIsIDAxNDAwIExhdWRpbywgQXJhYmEsIFNwYWluIjASLgoUChIJ55FGx8hSTg0R_0Br-zMnLOoQAioUChIJNddNxshSTg0R5QFQr6iKwAE', 43.1448695, -2.961550999999986),
(15, 'PORTAL DE FORONDA, 40\r\n, 1010', 'PORTAL DE FORONDA, 40\r\n', 'VITORIA-GASTEIZ', 1010, 'ARABA', 1, 1, '', 42.8644357, -2.6869295),
(16, 'C.C. ARCCO PLAZA IRUN, 6, 20011', 'C.C. ARCCO PLAZA IRUN, 6', 'DONOSTIA-SAN SEBASTIÁN\r\n', 20011, 'GIPUZKOA', 2, 2, ' ', 43.3054869, -1.9756754),
(17, 'CALLE ANDRESTEGI, 8\r\n, 20018', 'CALLE ANDRESTEGI, 8\r\n', 'DONOSTIA-SAN SEBASTIÁN\r\n', 20018, 'GIPUZKOA', 2, 2, ' ', 43.3095041, -2.0144965),
(18, 'CALLE SAN FRANCISCO, 52\r\n, 20870', 'CALLE SAN FRANCISCO, 52\r\n', 'ELGOIBAR', 20870, 'GIPUZKOA', 14, 2, '', 43.2158945, -2.414395),
(19, 'CALLE ELIZKALE, 11\r\n, 20870', 'CALLE ELIZKALE, 11\r\n', 'ZUMARRAGA', 20870, 'GIPUZKOA', 15, 2, ' ', 43.0888034, -2.314913),
(20, 'CALLE ARTABIDE, 63\r\n, 48700', 'CALLE ARTABIDE, 63\r\n', 'ONDARROA\r\n', 48700, 'BIZKAIA', 16, 3, ' ', 43.3275699, -2.4236198);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL,
  `localidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id_localidad`, `localidad`) VALUES
(1, 'Vitoria-Gasteiz'),
(2, 'Donostia-San Sebastián'),
(3, 'Irún'),
(4, 'Bergara'),
(5, 'Villabona'),
(6, 'Bilbao'),
(7, 'Santurtzi'),
(8, 'Durango'),
(9, 'Gernika'),
(10, 'Getxo'),
(11, 'Zalla'),
(12, 'Aretxabaleta'),
(13, 'Laudio/Llodio'),
(14, 'Elgoibar'),
(15, 'Zumarraga'),
(16, 'Ondarroa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id_precio` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id_precio`, `precio`) VALUES
(1, 180.92),
(2, 340.59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios_cursos`
--

CREATE TABLE `precios_cursos` (
  `id_precio_curso` int(11) NOT NULL,
  `id_precio` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios_cursos`
--

INSERT INTO `precios_cursos` (`id_precio_curso`, `id_precio`, `id_curso`) VALUES
(1, 1, 2),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id_provincia` int(11) NOT NULL,
  `provincia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id_provincia`, `provincia`) VALUES
(1, 'ARABA'),
(2, 'GIPUZKOA'),
(3, 'BIZKAIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias_localidades`
--

CREATE TABLE `provincias_localidades` (
  `id_provincia_localidad` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_localidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias_localidades`
--

INSERT INTO `provincias_localidades` (`id_provincia_localidad`, `id_provincia`, `id_localidad`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 11),
(12, 2, 12),
(13, 1, 13),
(14, 2, 14),
(15, 2, 15),
(16, 3, 16);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id_calendario`),
  ADD KEY `id_centro` (`id_centro`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `calendario-bkp`
--
ALTER TABLE `calendario-bkp`
  ADD PRIMARY KEY (`id_calendario`),
  ADD KEY `id_centro` (`id_centro`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `calendario0`
--
ALTER TABLE `calendario0`
  ADD PRIMARY KEY (`id_calendario`),
  ADD KEY `id_centro` (`id_centro`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_fecha_curso` (`id_paquete`);

--
-- Indices de la tabla `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`id_centro`);

--
-- Indices de la tabla `centros_direcciones`
--
ALTER TABLE `centros_direcciones`
  ADD PRIMARY KEY (`id_centro_direccion`),
  ADD KEY `id_centro` (`id_centro`),
  ADD KEY `id_direccion` (`id_direccion`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD UNIQUE KEY `curso` (`curso`);

--
-- Indices de la tabla `cursos_paquetes`
--
ALTER TABLE `cursos_paquetes`
  ADD PRIMARY KEY (`id_curso_fecha`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_localidad` (`id_localidad`),
  ADD KEY `id_provincia` (`id_provincia`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id_precio`);

--
-- Indices de la tabla `precios_cursos`
--
ALTER TABLE `precios_cursos`
  ADD PRIMARY KEY (`id_precio_curso`),
  ADD KEY `id_precio` (`id_precio`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `provincias_localidades`
--
ALTER TABLE `provincias_localidades`
  ADD PRIMARY KEY (`id_provincia_localidad`),
  ADD KEY `id_provincia` (`id_provincia`),
  ADD KEY `id_localidad` (`id_localidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_calendario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT de la tabla `calendario-bkp`
--
ALTER TABLE `calendario-bkp`
  MODIFY `id_calendario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT de la tabla `calendario0`
--
ALTER TABLE `calendario0`
  MODIFY `id_calendario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `centros_direcciones`
--
ALTER TABLE `centros_direcciones`
  MODIFY `id_centro_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cursos_paquetes`
--
ALTER TABLE `cursos_paquetes`
  MODIFY `id_curso_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_precio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `precios_cursos`
--
ALTER TABLE `precios_cursos`
  MODIFY `id_precio_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `provincias_localidades`
--
ALTER TABLE `provincias_localidades`
  MODIFY `id_provincia_localidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `calendario_ibfk_1` FOREIGN KEY (`id_centro`) REFERENCES `centros` (`id_centro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `calendario_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calendario-bkp`
--
ALTER TABLE `calendario-bkp`
  ADD CONSTRAINT `calendario-bkp_ibfk_1` FOREIGN KEY (`id_centro`) REFERENCES `centros` (`id_centro`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `calendario-bkp_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `calendario0`
--
ALTER TABLE `calendario0`
  ADD CONSTRAINT `calendario0_ibfk_2` FOREIGN KEY (`id_centro`) REFERENCES `centros` (`id_centro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calendario0_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calendario0_ibfk_4` FOREIGN KEY (`id_paquete`) REFERENCES `cursos_paquetes` (`id_curso_fecha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `centros_direcciones`
--
ALTER TABLE `centros_direcciones`
  ADD CONSTRAINT `centros_direcciones_ibfk_1` FOREIGN KEY (`id_centro`) REFERENCES `centros` (`id_centro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `centros_direcciones_ibfk_2` FOREIGN KEY (`id_direccion`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `direcciones_ibfk_1` FOREIGN KEY (`id_localidad`) REFERENCES `localidades` (`id_localidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `direcciones_ibfk_2` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id_provincia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `precios_cursos`
--
ALTER TABLE `precios_cursos`
  ADD CONSTRAINT `precios_cursos_ibfk_1` FOREIGN KEY (`id_precio`) REFERENCES `precios` (`id_precio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `precios_cursos_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `provincias_localidades`
--
ALTER TABLE `provincias_localidades`
  ADD CONSTRAINT `provincias_localidades_ibfk_1` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id_provincia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `provincias_localidades_ibfk_2` FOREIGN KEY (`id_localidad`) REFERENCES `localidades` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
