-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 11:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_faskes-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_pengelola` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kabkota_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `jenis_faskes_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `nama_pengelola`, `alamat`, `website`, `email`, `kabkota_id`, `rating`, `latitude`, `longitude`, `jenis_faskes_id`, `kategori_id`, `created_at`, `updated_at`) VALUES
(2, 'RSUD Kota Banda Aceh', 'Pemkot Banda Aceh', 'Jl. T. Hasan Krueng Kalee No. A2, Banda Aceh', 'https://rsud.bandaceh.go.id/', 'info@rsud.bandaceh.go.id', 1, 5, 5.5527, 95.3195, 1, 1, NULL, NULL),
(3, 'RSU Dr. Pirngadi Medan', 'Pemprov Sumatera Utara', 'Jl. Dr. Mansyur No.59, Medan', 'https://rsudrpirngadimedan.com/', 'info@rsudrpirngadimedan.com', 2, 4, 3.597, 98.6715, 1, 1, NULL, NULL),
(4, 'RSUP M. Djamil Padang', 'Kementerian Kesehatan RI', 'Jl. Bypass KM 16, Padang', 'https://www.rsudmjamil.padang.go.id/', 'info@rsudmjamil.padang.go.id', 3, 5, -0.947, 100.4173, 1, 1, NULL, NULL),
(5, 'RSUD Arifin Achmad Pekanbaru', 'Pemprov Riau', 'Jl. Diponegoro No.1, Pekanbaru', 'https://rsudarifinachmad.pekanbaru.go.id/', 'info@rsudarifinachmad.pekanbaru.go.id', 4, 4, 0.508, 101.4475, 1, 1, NULL, NULL),
(6, 'RSUD Raden Mattaher Jambi', 'Pemprov Jambi', 'Jl. Pattimura No.1, Jambi', 'http://rsudradenmattaher.jambi.go.id/', 'info@rsudradenmattaher.jambi.go.id', 5, 5, -1.6095, 103.6122, 1, 1, NULL, NULL),
(7, 'RSUD Palembang', 'Pemprov Sumatera Selatan', 'Jl. Kolonel Atmo No.4, Palembang', 'http://www.rsudpalembang.com/', 'info@rsudpalembang.com', 6, 4, -2.991, 104.7565, 1, 1, NULL, NULL),
(8, 'RSUD M. Yunus Bengkulu', 'Pemprov Bengkulu', 'Jl. Jend. A. Yani No.9, Bengkulu', 'https://www.rsudmbengkulu.com/', 'info@rsudmbengkulu.com', 7, 5, -3.793, 102.2655, 1, 1, NULL, NULL),
(9, 'RSUD Dr. H. Abdul Moeloek Bandar Lampung', 'Pemprov Lampung', 'Jl. Zaenal Abidin Pagar Alam No. 45, Bandar Lampung', 'http://rsudabdoelmoeloek.com/', 'info@rsudabdoelmoeloek.com', 8, 4, -5.429, 105.261, 1, 1, NULL, NULL),
(10, 'RSUD Depati Hamzah Pangkal Pinang', 'Pemprov Kepulauan Bangka Belitung', 'Jl. Pantai No.5, Pangkal Pinang', 'http://www.rsuddepatisulaiman.com/', 'info@rsuddepatisulaiman.com', 9, 5, -2.132, 106.1165, 1, 1, NULL, NULL),
(11, 'RSUD Raja Ahmad Tabib Tanjung Pinang', 'Pemprov Kepulauan Riau', 'Jl. Hang Jebat No.42, Tanjung Pinang', 'http://rsudrajaahmadtabib.tanjungpinangkota.go.id/', 'info@rsudrajaahmadtabib.tanjungpinangkota.go.id', 10, 5, 0.918, 104.463, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit', '2024-07-08 22:30:46', '2024-07-08 22:30:46'),
(2, 'Rumah Sakit', NULL, NULL),
(3, 'Puskesmas', NULL, NULL),
(4, 'Klinik', NULL, NULL),
(5, 'Apotek', NULL, NULL),
(6, 'Laboratorium', NULL, NULL),
(7, 'Posyandu', NULL, NULL),
(8, 'Praktik Dokter', NULL, NULL),
(9, 'Praktik Bidan', NULL, NULL),
(10, 'Praktik Perawat', NULL, NULL),
(11, 'Panti Asuhan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`id`, `nama`, `latitude`, `longitude`, `provinsi_id`, `created_at`, `updated_at`) VALUES
(1, 'Bogor', 10000000, 107.6098, 1, '2024-07-08 22:31:45', '2024-07-08 22:31:45'),
(2, 'Kota Banda Aceh', 5.5483, 95.3238, 1, NULL, NULL),
(3, 'Kota Medan', 3.5952, 98.6722, 2, NULL, NULL),
(4, 'Kota Padang', -0.9471, 100.4172, 3, NULL, NULL),
(5, 'Kota Pekanbaru', 0.5071, 101.4478, 4, NULL, NULL),
(6, 'Kota Jambi', -1.6104, 103.612, 5, NULL, NULL),
(7, 'Kota Palembang', -2.9909, 104.7566, 6, NULL, NULL),
(8, 'Kota Bengkulu', -3.7928, 102.2655, 7, NULL, NULL),
(9, 'Kota Bandar Lampung', -5.4294, 105.2615, 8, NULL, NULL),
(10, 'Kota Pangkal Pinang', -2.1318, 106.1168, 9, NULL, NULL),
(11, 'Kota Tanjung Pinang', 0.9186, 104.4634, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit', NULL, NULL),
(2, 'Puskesmas', NULL, NULL),
(3, 'Klinik', NULL, NULL),
(4, 'Apotek', NULL, NULL),
(5, 'Laboratorium', NULL, NULL),
(6, 'Posyandu', NULL, NULL),
(7, 'Praktik Dokter', NULL, NULL),
(8, 'Praktik Bidan', NULL, NULL),
(9, 'Praktik Perawat', NULL, NULL),
(10, 'Panti Asuhan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_05_120906_create_provinsi_table', 1),
(5, '2024_07_05_124115_create_jenis_faskes_table', 1),
(6, '2024_07_05_124143_create_kategori_table', 1),
(7, '2024_07_07_101014_create_kabkota_table', 1),
(8, '2024_07_07_102104_create_faskes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ibukota` varchar(45) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`, `ibukota`, `latitude`, `longitude`) VALUES
(1, 'Jawa Barat', 'Bandung', 10000000, 1111),
(2, 'Aceh', 'Banda Aceh', 5.5483, 95.3238),
(3, 'Sumatera Utara', 'Medan', 3.5952, 98.6722),
(4, 'Sumatera Barat', 'Padang', -0.9471, 100.4172),
(5, 'Riau', 'Pekanbaru', 0.5071, 101.4478),
(6, 'Jambi', 'Jambi', -1.6104, 103.612),
(7, 'Sumatera Selatan', 'Palembang', -2.9909, 104.7566),
(8, 'Bengkulu', 'Bengkulu', -3.7928, 102.2655),
(9, 'Lampung', 'Bandar Lampung', -5.4294, 105.2615),
(10, 'Kepulauan Bangka Belitung', 'Pangkal Pinang', -2.1318, 106.1168),
(11, 'Kepulauan Riau', 'Tanjung Pinang', 0.9186, 104.4634);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Q1dHJpHMvpXBYyS46P01WvWE4dAlxxD58uQE55TS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFVpNHpZd01EQUtZQUR4bG9mOHhSRHNjalQ2UFJJQjdxWUJzNGxwNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1720684578),
('TlPZE4BJl3JNuilODiJKoIAtusoSNERkBQ3BgZED', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUpSaG9KWGlQOXFiMG05NGsxd2ZISlFUdjhCWXBGZk5jYkJNR2VaZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1720775541),
('WmdBBz19aN8zFuIN1VVjcHvaGImRRfm5P2snmO0b', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVmREMkVoOWk4MXJIZ0FhSmZTdFJTQzZNZ1lXV2d0YkU0UjkwNEg0WCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1720704566);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'faskes',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Asep', 'asep@gmail.com', NULL, '$2y$12$DZbk52MLCwK64uBlRmicg.gaoKg2uDwV/MFDwdHVSF07.meEtcDzi', 'faskes', NULL, '2024-07-08 22:01:32', '2024-07-08 22:01:32'),
(2, 'Admin', 'sahr23114ti@student.nurulfikri.ac.id', NULL, '$2y$12$6qdifAb6ArTzABPijJ9NXurbOw48IgsyLYxexSvQ6F5JXGOcdd03i', 'admin', NULL, '2024-07-08 22:02:14', '2024-07-08 22:02:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faskes_kabkota_id_foreign` (`kabkota_id`),
  ADD KEY `faskes_jenis_faskes_id_foreign` (`jenis_faskes_id`),
  ADD KEY `faskes_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabkota_provinsi_id_foreign` (`provinsi_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabkota`
--
ALTER TABLE `kabkota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `faskes_jenis_faskes_id_foreign` FOREIGN KEY (`jenis_faskes_id`) REFERENCES `jenis_faskes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `faskes_kabkota_id_foreign` FOREIGN KEY (`kabkota_id`) REFERENCES `kabkota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `faskes_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD CONSTRAINT `kabkota_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
