-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2025 a las 12:25:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS `mascu_videojuegos` 
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Seleccionar la base de datos para usarla
USE `mascu_videojuegos`;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Acción', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(2, 'RPG', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(3, 'Shooter', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(4, 'Aventura', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(5, 'Rol', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(6, 'Survival Horror', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(7, 'Mundo Abierto', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(8, 'Aventura gráfica', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(9, 'Plataformas', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(10, 'Simulación', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(11, 'Deportes', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(12, 'Carreras', '2025-04-27 08:10:30', '2025-04-27 08:10:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '2025_03_30_105929_videojuegos', 1),
(3, '2025_04_08_175833_create_generos_table', 1),
(4, '2025_04_08_181733_create_videojuego_genero_table', 1),
(5, '2025_04_26_212757_change_lanzamiento_to_integer_in_videojuegos_table', 1),
(6, '2025_04_26_235320_add_rol_to_users_table', 1),
(7, '2025_04_27_000718_create_cache_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fbiUvcvimrjUNS5ogGqCDQZlfoTprD4fPoeGsTyd', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGx5QkJUb2lFUVRTM0hscnRHczlSaVVhSzlDVXJaMTRyZmtkSXNIZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmljaW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1745748659);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL DEFAULT 'cliente',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `desarrollador` varchar(255) NOT NULL,
  `lanzamiento` int(11) NOT NULL,
  `url_cover` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `nombre`, `desarrollador`, `lanzamiento`, `url_cover`, `created_at`, `updated_at`) VALUES
(1, 'Diablo IV', 'Blizzard Entertainment', 2023, 'https://www.pcworld.com/wp-content/uploads/2023/07/DIablo4MakingOf_01_Aufmacher.jpg?quality=50&strip=all&w=1024', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(2, 'Assassins Creed - Black Flag', 'Ubisoft', 2013, 'https://store-images.s-microsoft.com/image/apps.44102.69748098540497451.a03a4b64-603b-49b8-8644-4924ac7f3076.7c62c3e9-26da-46e8-a9f3-8cb7feb7d584?q=90&w=480&h=270', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(3, 'Baldurs Gate 3', 'Larian Studios', 2023, 'https://store-images.s-microsoft.com/image/apps.4974.13550459053619040.81610713-4c64-470c-b543-bcffffaa6ea3.efb7c846-2f32-4a2d-b2d4-cd8109721332?q=90&w=480&h=270', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(4, 'Dragon Age - Inquisition', 'BioWare', 2014, 'https://store-images.s-microsoft.com/image/apps.52948.69435343314503572.4e403c3c-ba71-4c3e-a54b-a6819ca0e6bb.7d7316f0-95cf-4c9a-a0ca-ce7524adad9b?q=90&w=480&h=270', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(5, 'Dying Light', 'Techland', 2015, 'https://store-images.s-microsoft.com/image/apps.3619.63224705253913975.ec4ce281-2139-4076-9dc9-733fe2b0602b.befcd155-27b1-42d3-8e3b-80f67c84c720?q=90&w=480&h=270', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(6, 'GTA VI', 'Rockstar Games', 2025, 'https://i.blogs.es/2f9706/gta/500_333.jpeg', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(7, 'Silent Hill 2', 'Konami', 2001, 'https://assetsio.gnwcdn.com/Silent-Hill-2-walkthrough%2C-tips-and-tricks-cover.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(8, 'The Longest Journey', 'Funcom', 1999, 'https://gaming-cdn.com/images/products/10092/616x353/the-longest-journey-pc-juego-steam-cover.jpg?v=1734971004', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(9, 'The Witcher 3', 'CD Projekt Red', 2015, 'https://d.techtimes.com/en/full/391770/witcher-3-next-gen-cover.jpg', '2025-04-27 08:10:30', '2025-04-27 08:10:30'),
(10, 'The Legend of Zelda: Breath of the Wild', 'Nintendo', 2017, 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2023/11/legend-zelda-3217690.jpg?tf=3840x', '2025-04-27 08:10:30', '2025-04-27 08:10:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego_genero`
--

CREATE TABLE `videojuego_genero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `videojuego_id` bigint(20) UNSIGNED NOT NULL,
  `genero_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videojuego_genero`
--

INSERT INTO `videojuego_genero` (`id`, `videojuego_id`, `genero_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 7, NULL, NULL),
(3, 1, 1, NULL, NULL),
(4, 2, 1, NULL, NULL),
(5, 2, 4, NULL, NULL),
(6, 2, 7, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 3, 5, NULL, NULL),
(9, 3, 4, NULL, NULL),
(10, 4, 2, NULL, NULL),
(11, 4, 7, NULL, NULL),
(12, 4, 1, NULL, NULL),
(13, 5, 6, NULL, NULL),
(14, 5, 1, NULL, NULL),
(15, 5, 4, NULL, NULL),
(16, 6, 1, NULL, NULL),
(17, 6, 4, NULL, NULL),
(18, 6, 7, NULL, NULL),
(19, 7, 6, NULL, NULL),
(20, 7, 8, NULL, NULL),
(21, 8, 8, NULL, NULL),
(22, 8, 4, NULL, NULL),
(23, 9, 2, NULL, NULL),
(24, 9, 7, NULL, NULL),
(25, 9, 4, NULL, NULL),
(26, 10, 4, NULL, NULL),
(27, 10, 7, NULL, NULL),
(28, 10, 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videojuego_genero`
--
ALTER TABLE `videojuego_genero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videojuego_genero_videojuego_id_foreign` (`videojuego_id`),
  ADD KEY `videojuego_genero_genero_id_foreign` (`genero_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `videojuego_genero`
--
ALTER TABLE `videojuego_genero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `videojuego_genero`
--
ALTER TABLE `videojuego_genero`
  ADD CONSTRAINT `videojuego_genero_genero_id_foreign` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `videojuego_genero_videojuego_id_foreign` FOREIGN KEY (`videojuego_id`) REFERENCES `videojuegos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
