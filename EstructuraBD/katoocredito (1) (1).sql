-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2017 a las 04:57:02
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `katoocredito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE `configuraciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `nit` int(11) NOT NULL,
  `propietario` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `logo` varchar(60) NOT NULL,
  `idtipoempresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(34, 'asdas', 'dasd', '2017-08-15 06:00:34', '2017-08-15 06:00:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_27_205414_create_items_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `eliminado` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id`, `nombre`, `eliminado`) VALUES
(1, 'Configuracion', 0),
(2, 'Ejemplo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto`
--

CREATE TABLE `objeto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `url` varchar(25) NOT NULL,
  `tipoobjeto` varchar(15) NOT NULL,
  `visibleconelmenu` tinyint(2) NOT NULL,
  `idmodulo` int(11) NOT NULL,
  `eliminar` tinyint(3) NOT NULL,
  `habilitado` tinyint(2) NOT NULL,
  `padre` tinyint(2) NOT NULL,
  `font` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objeto`
--

INSERT INTO `objeto` (`id`, `nombre`, `url`, `tipoobjeto`, `visibleconelmenu`, `idmodulo`, `eliminar`, `habilitado`, `padre`, `font`) VALUES
(1, 'Configuraciones', 'config', 'Titulo', 1, 1, 0, 1, 0, 'icon-padnote'),
(2, 'usuarios', '/usuarios', 'Formulario', 1, 1, 0, 1, 1, ''),
(3, 'accesos', '/accesos', 'Formulario', 1, 1, 0, 1, 1, ''),
(4, 'modulos', '/modulos', 'Formulario', 1, 1, 0, 1, 1, ''),
(5, 'Otro', '/otro', 'Titulo', 1, 2, 1, 1, 0, 'icon-padnote'),
(6, 'hijoOtro', '/otro1', 'Formulario', 1, 2, 1, 1, 5, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `eliminado` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre`, `eliminado`) VALUES
(1, 'SuperAdministrador', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilobjeto`
--

CREATE TABLE `perfilobjeto` (
  `id` int(11) NOT NULL,
  `idperfil` int(11) NOT NULL,
  `idobjeto` int(11) NOT NULL,
  `eliminar` tinyint(2) NOT NULL,
  `actualizar` tinyint(2) NOT NULL,
  `reporte` tinyint(2) NOT NULL,
  `imprimir` tinyint(2) NOT NULL,
  `listar` tinyint(2) NOT NULL,
  `guardar` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfilobjeto`
--

INSERT INTO `perfilobjeto` (`id`, `idperfil`, `idobjeto`, `eliminar`, `actualizar`, `reporte`, `imprimir`, `listar`, `guardar`) VALUES
(1, 1, 2, 1, 1, 1, 1, 1, 1),
(2, 1, 3, 1, 1, 1, 1, 1, 1),
(3, 1, 4, 1, 1, 1, 1, 1, 1),
(4, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 1, 5, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempleado`
--

CREATE TABLE `tipoempleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `desripcion` varchar(80) NOT NULL,
  `eliminado` tinyint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoempleado`
--

INSERT INTO `tipoempleado` (`id`, `nombre`, `desripcion`, `eliminado`) VALUES
(1, 'Albañil', 'un asdad', 0),
(2, 'qw1', '1681', 0),
(3, 'qwe', 'qweqw', 0),
(4, 'prueba 1', '', 0),
(5, 'asesor 1', 'ad', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempresa`
--

CREATE TABLE `tipoempresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `ci` int(11) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `usuario` int(10) NOT NULL,
  `pasword` int(25) NOT NULL,
  `telefono` int(15) NOT NULL,
  `celular` int(15) NOT NULL,
  `nit` int(25) NOT NULL,
  `razonsocial` int(20) NOT NULL,
  `idperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfilobjeto`
--
ALTER TABLE `perfilobjeto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoempleado`
--
ALTER TABLE `tipoempleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoempresa`
--
ALTER TABLE `tipoempresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `objeto`
--
ALTER TABLE `objeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `perfilobjeto`
--
ALTER TABLE `perfilobjeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipoempleado`
--
ALTER TABLE `tipoempleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipoempresa`
--
ALTER TABLE `tipoempresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK` FOREIGN KEY (`id`) REFERENCES `perfil` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
