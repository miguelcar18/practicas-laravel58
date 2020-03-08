-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 03:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practica`
--
DROP DATABASE `practica`;
CREATE DATABASE IF NOT EXISTS `practica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `practica`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
('f663f503-e5d4-4a92-ac5e-160f194a6e75', 'Categoria uno', 'Descripcion categoria uno', '2020-02-18 18:32:11', '2020-02-18 18:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observations` text COLLATE utf8mb4_unicode_ci,
  `identification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facture_code` int(11) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `address`, `start_date`, `end_date`, `client`, `phone`, `observations`, `identification`, `facture_code`, `payment_method`, `reference_code`, `created_at`, `updated_at`, `email`) VALUES
('a7ea840d-38c3-4c43-94ea-6d315b9f590c', 'Juan Lopez', 'Sector los guaritos', '2020-02-18 13:00:00', '2020-02-18 16:00:00', 'Juan Lopez', '04129876543', 'Ejemplo', '12345678', 1, 'pago_movil', '261737264736', '2020-02-18 15:44:47', '2020-02-18 15:44:47', 'juanlopez@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event_product`
--

CREATE TABLE `event_product` (
  `quantity` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `event_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_product`
--

INSERT INTO `event_product` (`quantity`, `start_date`, `end_date`, `event_id`, `product_id`) VALUES
(10, '2020-02-18 13:00:00', '2020-02-18 16:00:00', 'a7ea840d-38c3-4c43-94ea-6d315b9f590c', 'd9f186bb-c404-4b6a-80a7-6cd61156e027');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_has_permissions`
--

CREATE TABLE `group_has_permissions` (
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observations` text COLLATE utf8mb4_unicode_ci,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `quantity`, `type`, `observations`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
('0d97c33b-14d9-4636-b9ec-1b6700980bea', 10, 'input', 'Observaciones regsitro uno', 'd9f186bb-c404-4b6a-80a7-6cd61156e027', 'e175d481-3571-49bb-84da-d46d830668ed', '2020-02-18 18:44:02', '2020-02-18 18:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_16_005237_create_permissions_table', 1),
(4, '2019_03_16_005538_create_user_has_permissions_table', 1),
(5, '2019_03_16_005634_create_groups_table', 1),
(6, '2019_03_16_005759_create_group_has_permissions_table', 1),
(7, '2019_03_16_005834_create_user_has_groups_table', 1),
(8, '2019_12_16_155834_create_categories_table', 1),
(9, '2019_12_16_213444_create_products_table', 1),
(10, '2019_12_24_173219_create_events_table', 1),
(11, '2020_01_12_024648_create_inventories_table', 1),
(12, '2020_01_12_113103_create_event_products_table', 1),
(13, '2020_02_18_112808_add_columns_to_events_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('miguelcar18@gmail.com', '$2y$10$0F0l/k0fn1aLuSq.GqoLrO1LhSeu80MN2wX2EGx/za7pMujOD2jvi', '2020-02-18 17:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `category_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
('d9f186bb-c404-4b6a-80a7-6cd61156e027', 'AC001', 'Producto uno', 'Descripción producto uno', 250, 'f663f503-e5d4-4a92-ac5e-160f194a6e75', '2020-02-18 18:38:40', '2020-02-18 18:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `path`, `remember_token`, `created_at`, `updated_at`) VALUES
('590b7979-1e7f-4bbc-b629-8a23a0ee0bff', 'Cortez Johnson', 'dkutch@example.net', '2020-02-14 00:30:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '9rfp0HIHSh', '2020-02-14 00:30:02', '2020-02-14 00:30:02'),
('82463c85-5a64-409d-b4d0-13b649277236', 'Miguel Carmona', 'miguelcar18@gmail.com', '2020-02-14 00:02:00', '$2y$10$pLYS7OnzF0iai7u8TmKXUerDWYxhgKfWgms/PgGua40Ydcd2d7P3m', NULL, NULL, '2020-02-14 00:30:00', '2020-02-14 00:30:00'),
('ada72993-d25d-4dd1-bd6d-346cc7789fb2', 'Regan Jacobson', 'welch.alessia@example.com', '2020-02-14 00:30:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'L32k9DZEFU', '2020-02-14 00:30:02', '2020-02-14 00:30:02'),
('e08ea324-d830-4607-bc7b-b4c3b29e39e8', 'Araceli Gutkowski I', 'ocarter@example.com', '2020-02-14 00:30:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '1TJgNSxcu3', '2020-02-14 00:30:02', '2020-02-14 00:30:02'),
('e175d481-3571-49bb-84da-d46d830668ed', 'Administrador', 'administrador@gmail.com', NULL, '$2y$10$bEGg06AZJR7XBKqrDfrs..OMmEyhDKfAzPynBaAUm5n0KRV081P.K', NULL, NULL, '2020-02-18 18:27:22', '2020-02-18 18:27:22'),
('fbd99122-59d0-4ccb-bb4d-9f62a7c2fde0', 'Adriana Rojas', 'adrianarojasm@gmail.com', NULL, '$2y$10$yS62T4AzWvo3SCVdop/ZHOacXe6ntXqCCc.u4xcO/Gyc/pFkKIpzu', 'fbd99122-59d0-4ccb-bb4d-9f62a7c2fde0/7.jpg/7.jpg', NULL, '2020-02-14 00:32:45', '2020-02-14 00:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_groups`
--

CREATE TABLE `user_has_groups` (
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_name_unique` (`name`);

--
-- Indexes for table `event_product`
--
ALTER TABLE `event_product`
  ADD KEY `event_product_event_id_foreign` (`event_id`),
  ADD KEY `event_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_name_unique` (`name`),
  ADD UNIQUE KEY `groups_slug_unique` (`slug`);

--
-- Indexes for table `group_has_permissions`
--
ALTER TABLE `group_has_permissions`
  ADD PRIMARY KEY (`group_id`,`permission_id`),
  ADD KEY `group_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventories_product_id_foreign` (`product_id`),
  ADD KEY `inventories_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_groups`
--
ALTER TABLE `user_has_groups`
  ADD PRIMARY KEY (`user_id`,`group_id`),
  ADD KEY `user_has_groups_group_id_foreign` (`group_id`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_product`
--
ALTER TABLE `event_product`
  ADD CONSTRAINT `event_product_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `group_has_permissions`
--
ALTER TABLE `group_has_permissions`
  ADD CONSTRAINT `group_has_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `group_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_groups`
--
ALTER TABLE `user_has_groups`
  ADD CONSTRAINT `user_has_groups_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
