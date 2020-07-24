-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2020 a las 15:59:53
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `socialsasa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_publicacion`
--

CREATE TABLE `comentarios_publicacion` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios_publicacion`
--

INSERT INTO `comentarios_publicacion` (`id`, `id_users`, `id_publicacion`, `comentario`, `created_at`) VALUES
(1, 3, 15, '', '2020-07-24 19:49:47'),
(2, 3, 15, '', '2020-07-24 19:51:41'),
(3, 3, 15, '', '2020-07-24 19:52:38'),
(4, 3, 15, 'excelente', '2020-07-24 19:53:01'),
(5, 1, 15, 'como genial men feliciataciones', '2020-07-24 20:28:32'),
(6, 1, 14, 'que es eso men', '2020-07-24 20:31:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `publicacion` varchar(4000) NOT NULL,
  `compartir` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `id_users`, `publicacion`, `compartir`, `created_at`, `updated_at`) VALUES
(1, 1, 'sss', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'dffd', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'entro', '', '2020-07-24 12:46:49', '0000-00-00 00:00:00'),
(4, 1, 'prueba', '', '2020-07-24 14:25:38', '0000-00-00 00:00:00'),
(5, 1, 'ffffff waoooo', '', '2020-07-24 14:27:04', '0000-00-00 00:00:00'),
(6, 1, 'fgfgfgf aaaa', '', '2020-07-24 14:29:49', '0000-00-00 00:00:00'),
(7, 1, 'fgfgfgf aaaa', '', '2020-07-24 14:30:43', '0000-00-00 00:00:00'),
(8, 1, 'sasas oooo', '', '2020-07-24 14:31:10', '0000-00-00 00:00:00'),
(9, 1, 'eeeee', '', '2020-07-24 14:32:39', '0000-00-00 00:00:00'),
(10, 1, 'xxxx', '', '2020-07-24 14:33:43', '0000-00-00 00:00:00'),
(11, 1, 'dddd', '', '2020-07-24 14:37:19', '0000-00-00 00:00:00'),
(12, 1, 'dddd', '', '2020-07-24 14:38:25', '0000-00-00 00:00:00'),
(13, 1, 'xxxx', '', '2020-07-24 14:39:05', '0000-00-00 00:00:00'),
(14, 1, 'ccccc', '', '2020-07-24 14:39:36', '0000-00-00 00:00:00'),
(15, 3, 'pruba creando noticias', '', '2020-07-24 17:06:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'mauricio', 'qmaofi732@gmail.com', '$2y$10$n/zawOh6f1d8btkW.fJK.Oc7v0/vP.8LdcNq7SP6G2AKWy/67KSm.', '2020-07-24 14:14:03', '2020-07-24 14:14:03'),
(3, 'margara', 'qomargarita@gmail.com', '$2y$10$cC4.8KJi2KxatYdrXjDsfO7DerRhhMYjiUI5Zb7xD8B0IlIf4iBDO', '2020-07-24 14:19:49', '0000-00-00 00:00:00'),
(4, 'sandra', 'sandra@gmail.com', '$2y$10$WcDwJ/jZ/3ZITowuT5Dq1Oc360kpmcLEDDS8kQUU3VifB4nA1Xffa', '2020-07-24 14:20:47', '0000-00-00 00:00:00'),
(5, 'tarsicio', 'tarsi19@gmail.com', '$2y$10$G69rT3ZeSB9x0pV4BJ3y1O3jxjwGOgMxI1sKKpwCOFt1vHJR/3BDC', '2020-07-24 14:22:09', '0000-00-00 00:00:00'),
(6, 'tarsicio', 'tarsi198@gmail.com', '$2y$10$/FDOOQgcDEeRT.K3e8Zysu4RGQhWpSmDus2qXIq1eHp4LmO1LF5li', '2020-07-24 14:22:39', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios_publicacion`
--
ALTER TABLE `comentarios_publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios_publicacion`
--
ALTER TABLE `comentarios_publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
