-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 08-05-2023 a las 22:24:06
-- Versión del servidor: 5.7.39
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gnt_consulting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gnt_alianzas`
--

CREATE TABLE `gnt_alianzas` (
  `id_alianzas` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `visible` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gnt_alianzas`
--

INSERT INTO `gnt_alianzas` (`id_alianzas`, `imagen`, `fecha`, `visible`) VALUES
(1, 'logo-gmx-seguros.svg', '2023-05-04', 'si'),
(2, 'logo-gnp-seguros.svg', '2023-05-04', 'si'),
(3, 'logo-liberty-seguros.svg', '2023-05-04', 'si'),
(4, 'logo-axa-seguros.svg', '2023-05-04', 'si'),
(5, 'logo-metlife-seguros.svg', '2023-05-04', 'si'),
(6, 'logo-sofimex.svg', '2023-05-04', 'si'),
(7, 'logo-mapfre.svg', '2023-05-04', 'si'),
(8, 'logo-bupa.svg', '2023-05-04', 'si'),
(9, 'logo-aserta.svg', '2023-05-04', 'si'),
(10, 'Logo-seguros-atlas.svg', '2023-05-04', 'si'),
(11, 'logo-chubb.svg', '2023-05-04', 'si'),
(12, 'logo-qualitas.svg', '2023-05-04', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gnt_clientes`
--

CREATE TABLE `gnt_clientes` (
  `id_clientes` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `visible` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gnt_clientes`
--

INSERT INTO `gnt_clientes` (`id_clientes`, `imagen`, `fecha`, `visible`) VALUES
(1, 'logo-dentalia-s.svg', '2023-05-04', 'si'),
(2, 'logo-diebold-s.svg', '2023-05-04', 'si'),
(3, 'logo-petstart-p.png', '2023-05-05', 'si'),
(4, 'logo-iberia-s.svg', '2023-05-05', 'si'),
(5, 'logo-mp-marketing-group-p.png', '2023-05-05', 'si'),
(6, 'logo-educacion-para-compartir.jpg', '2023-05-05', 'si'),
(7, 'logo-atxk.jpg', '2023-05-05', 'si'),
(8, 'logo-demant-s.svg', '2023-05-05', 'si'),
(9, 'logo-securitas-s.svg', '2023-05-05', 'si'),
(10, 'logo-tbt-p.png', '2023-05-05', 'si'),
(11, 'logo-lsc-conmmunications-s.svg', '2023-05-05', 'si'),
(12, 'logo-linko-p.png', '2023-05-05', 'si'),
(13, 'logo-praxis.jpg', '2023-05-05', 'si'),
(14, 'Logo-mas-manny-aviations-services.jpg', '2023-05-05', 'si'),
(15, 'logo-lufthansa-s.svg', '2023-05-05', 'si'),
(16, 'logo-lapi-laboratorio-medico-p.png', '2023-05-05', 'si'),
(17, 'logo-tgc.jpg', '2023-05-05', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gnt_slide`
--

CREATE TABLE `gnt_slide` (
  `id_slide` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `titulo_eng` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `visible` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gnt_slide`
--

INSERT INTO `gnt_slide` (`id_slide`, `titulo`, `titulo_eng`, `imagen`, `link`, `fecha`, `visible`) VALUES
(1, '<p>La mejor manera</p>\r\n<p>de predecir el futuro</p>\r\n<p>es cre&aacute;ndolo</p>\r\n<p><em>- Peter Drucker</em></p>', '<p>The best way</p>\r\n<p>to predict the future</p>\r\n<p>is to create it.</p>\r\n<p>- Peter Drucker</p>', 'gnt-consulting-slider1.jpg', '', '2023-05-08', 'si'),
(2, '<p>La mejor manera</p>\r\n<p>de predecir el futuro</p>\r\n<p>es cre&aacute;ndolo</p>\r\n<p><em>- Peter Drucker</em></p>', '<p>The best way</p>\r\n<p>to predict the future</p>\r\n<p>is to create it.</p>\r\n<p>- Peter Drucker</p>', 'gnt-consulting-slider2.jpg', '', '2023-05-08', 'si'),
(7, '<p>La mejor manera</p>\r\n<p>de predecir el futuro</p>\r\n<p>es cre&aacute;ndolo</p>\r\n<p><em>- Peter Drucker</em></p>', '<p>The best way</p>\r\n<p>to predict the future</p>\r\n<p>is to create it.</p>\r\n<p>- Peter Drucker</p>', 'gnt-consulting-slider3_3.jpg', '', '2023-05-08', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `usuario`, `contrasena`, `tipo`) VALUES
(1, 'Administrador', 'ricardo@tiposlibres.com', 'admin', 'Gnt$2023*', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gnt_alianzas`
--
ALTER TABLE `gnt_alianzas`
  ADD PRIMARY KEY (`id_alianzas`);

--
-- Indices de la tabla `gnt_clientes`
--
ALTER TABLE `gnt_clientes`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Indices de la tabla `gnt_slide`
--
ALTER TABLE `gnt_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gnt_alianzas`
--
ALTER TABLE `gnt_alianzas`
  MODIFY `id_alianzas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `gnt_clientes`
--
ALTER TABLE `gnt_clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `gnt_slide`
--
ALTER TABLE `gnt_slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
