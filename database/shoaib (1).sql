-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 24, 2022 at 07:09 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoaib`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `created_at`, `updated_at`) VALUES
(1, 'bilaL', 'bilo@gmail.com', NULL, '$2y$10$SqztNJ1G6kfeowChMkSuaujaMPnzJmWTdNl.EmCpK93A3zsR7qozW', NULL, NULL, '2022-07-24 09:53:13', '2022-07-24 09:53:13'),
(2, 'Hacker', 'bilal@gmail.com', NULL, '$2y$10$/h3YlnTfDgXKcS9QC1V9meSX9OJb6ixFj/A68SltsP.6RtweB.n4u', NULL, '1658674484.png', '2022-07-24 09:54:44', '2022-07-24 09:54:44'),
(3, 'bilaL', 'abc@gmail.com', NULL, '$2y$10$XYCS7ckiheK26ecCk1dU.e1oduMm4ilvOhmspu.m6m9EL6k7A//fq', NULL, '1658674766.png', '2022-07-24 09:59:27', '2022-07-24 09:59:27'),
(4, 'Hacker', 'imnothacker@gmail.com', NULL, '$2y$10$lNExgztG4Edpde8M2c8XVeTlQg9cT4eRNSp7/9z847YXN2OeEdjSG', NULL, '1658674826.png', '2022-07-24 10:00:26', '2022-07-24 10:00:26'),
(5, 'test Company', 'test123@gmail.com', NULL, '$2y$10$GQ.RkQ7z0diV4n/NefZSDeTwasrbOQQULUzqnIjuYgNLmzTi6.5Hm', NULL, '1658674975.png', '2022-07-24 10:02:55', '2022-07-24 10:02:55'),
(6, 'bilaL', '12/ab', NULL, '$2y$10$gOVQ7/WxH94k9.21EC87pefUoj1Al9R7g88BT7bj9fnmMgpUPHq5u', NULL, '1658692476.png', '2022-07-24 14:54:36', '2022-07-24 14:54:36'),
(7, 'aw2ad', '12qq', NULL, '$2y$10$GRLGPLMbM1J9.1j8hPrSLeBt3VUuQhftLKZwP0rTZypo3EW.4JZ6i', NULL, '[\"1658695257.png\",\"1658695257.png\"]', '2022-07-24 15:40:57', '2022-07-24 15:40:57'),
(8, 'bilaL', '22', NULL, '$2y$10$qwi.6u/.yZiclWh.ZZm63OiwojuaxNHmDFgLSuM.kkNIhzJ2uJ9hS', NULL, '[\"16586975410.png\",\"16586975411.png\"]', '2022-07-24 16:19:02', '2022-07-24 16:19:02'),
(9, 'Hacker', '090123', NULL, '$2y$10$ccqHienlBm2X5nsP4elPrejTLg6L9JbqrMhL/C7bcmx2zgoDWjKbu', NULL, '[\"16611450940.png\"]', '2022-08-22 00:11:35', '2022-08-22 00:11:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
