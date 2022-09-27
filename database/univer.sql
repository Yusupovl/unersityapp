-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2022 at 01:33 PM
-- Server version: 8.0.24
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 12345678, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies_admin`
--

CREATE TABLE `companies_admin` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foydalanuvchilars`
--

CREATE TABLE `foydalanuvchilars` (
  `id` bigint UNSIGNED NOT NULL,
  `ism` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sharif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sana` date NOT NULL,
  `tel_raqam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qosh_tel_raqam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamomlagan_sanasi` date NOT NULL,
  `diplom_raqami` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talim_shakli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamlakat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viloyat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manzil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuqaroligi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `millati` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasport_raqami` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasport_rasm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamomlagani` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamomlagan_nomi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamomlagan_manzil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foydalanuvchilars`
--

INSERT INTO `foydalanuvchilars` (`id`, `ism`, `sharif`, `familya`, `sana`, `tel_raqam`, `qosh_tel_raqam`, `tamomlagan_sanasi`, `diplom_raqami`, `fakultet`, `talim_shakli`, `mamlakat`, `viloyat`, `manzil`, `fuqaroligi`, `millati`, `pasport_raqami`, `pasport_rasm`, `tamomlagani`, `tamomlagan_nomi`, `tamomlagan_manzil`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sfdasdfgasdfg', 'gadfgdsg', 'gasdgdfg', '2022-09-21', 'f3235345', '234562345', '2022-10-01', 'wegewr', '2', '2', '1', '13', 'gewrgewr', 'sdfgdgsd', '1', 'sdgsdfgvsdv', 'background-images.png_1664095472.jpg', '2', 'vdger', 'werghtr', 0, '2022-09-25 03:44:32', '2022-09-25 03:44:32'),
(2, 'Azam', 'asg', 'asdf', '2022-09-24', '32452345', '+9484984', '2022-09-23', 'asdgadfg', '5', '3', '1', '13', 'zsdgadfg', 'asdgfasg', '1', 'asfgsgasg', 'photo_2022-09-14_23-53-48_1664097807.jpg', '3', 'asgarg', '34g3g4', 0, '2022-09-25 04:23:27', '2022-09-25 04:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_24_154316_create_companies_admin', 2),
(6, '2022_09_24_155102_create_admins_table', 3),
(7, '2022_09_24_215308_create_foydalanuvchilars_table', 4),
(8, '2022_09_25_072547_create_foydalanuvchilars_table', 5),
(9, '2022_09_25_080327_create_foydalanuvchilars_table', 6),
(10, '2022_09_25_080607_create_foydalanuvchilars_table', 7);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies_admin`
--
ALTER TABLE `companies_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foydalanuvchilars`
--
ALTER TABLE `foydalanuvchilars`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies_admin`
--
ALTER TABLE `companies_admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foydalanuvchilars`
--
ALTER TABLE `foydalanuvchilars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
