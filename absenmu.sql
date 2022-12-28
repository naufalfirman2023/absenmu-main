-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 03:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absenmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `code_presensis`
--

CREATE TABLE `code_presensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_presensi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_id` bigint(20) UNSIGNED NOT NULL,
  `minggu_ke` int(11) NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `code_presensis`
--

INSERT INTO `code_presensis` (`id`, `code_presensi`, `jadwal_id`, `minggu_ke`, `waktu_awal`, `waktu_akhir`, `created_at`, `updated_at`) VALUES
(4, 'K5tJRWGQCZ', 8, 1, '2022-06-01 10:22:00', '2022-06-01 11:22:00', '2022-06-01 03:22:13', '2022-06-01 03:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `nama`, `nip`, `kelas_id`, `created_at`, `updated_at`) VALUES
(10, 'Jiraya', '11111', 8, NULL, NULL),
(11, 'Orochimaru', '22222', 11, NULL, NULL),
(12, 'Kakashi', '33333', 10, NULL, NULL),
(13, 'Uchiha Shisui', '44444', 9, NULL, NULL),
(14, 'Senju Tobirama', '55555', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mapels`
--

CREATE TABLE `jadwal_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel_id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `Hari` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_mapels`
--

INSERT INTO `jadwal_mapels` (`id`, `mapel_id`, `guru_id`, `Hari`, `jam`, `kelas_id`, `created_at`, `updated_at`) VALUES
(8, 7, 10, 'Senin', '10:25:00', 8, '2022-06-01 02:24:25', '2022-06-01 02:24:25'),
(9, 8, 10, 'Selesa', '11:25:00', 8, '2022-06-01 02:24:46', '2022-06-01 02:24:46'),
(10, 9, 10, 'Senin', '12:29:00', 8, '2022-06-01 02:25:13', '2022-06-01 02:39:07'),
(11, 10, 10, 'Kamis', '10:27:00', 8, '2022-06-01 02:25:41', '2022-06-01 02:25:54'),
(12, 7, 11, 'Senin', '12:30:00', 11, '2022-06-01 02:27:20', '2022-06-01 02:39:17'),
(13, 8, 11, 'Senin', '11:29:00', 11, '2022-06-01 02:27:54', '2022-06-01 02:27:54'),
(14, 9, 11, 'Selesa', '10:32:00', 11, '2022-06-01 02:28:18', '2022-06-01 02:28:18'),
(15, 10, 11, 'Senin', '13:33:00', 11, '2022-06-01 02:29:17', '2022-06-01 02:39:33'),
(16, 7, 12, 'Kamis', '10:30:00', 10, '2022-06-01 02:30:25', '2022-06-01 02:30:25'),
(17, 8, 12, 'Jumat', '10:33:00', 10, '2022-06-01 02:31:04', '2022-06-01 02:31:04'),
(18, 9, 12, 'Senin', '10:33:00', 10, '2022-06-01 02:31:25', '2022-06-01 02:31:25'),
(21, 10, 12, 'Selesa', '10:33:00', 10, '2022-06-01 02:33:03', '2022-06-01 02:33:03'),
(22, 7, 13, 'Rabu', '10:37:00', 9, '2022-06-01 02:33:51', '2022-06-01 02:33:51'),
(23, 8, 13, 'Senin', '12:38:00', 9, '2022-06-01 02:34:15', '2022-06-01 02:38:59'),
(24, 9, 13, 'Senin', '15:35:00', 9, '2022-06-01 02:34:46', '2022-06-01 02:38:49'),
(25, 10, 13, 'Senin', '11:37:00', 9, '2022-06-01 02:35:11', '2022-06-01 02:35:11'),
(26, 7, 14, 'Selesa', '10:36:00', 12, '2022-06-01 02:35:38', '2022-06-01 02:35:38'),
(27, 8, 14, 'Rabu', '11:39:00', 12, '2022-06-01 02:35:59', '2022-06-01 02:35:59'),
(28, 9, 14, 'Senin', '12:40:00', 12, '2022-06-01 02:36:19', '2022-06-01 02:38:29'),
(29, 10, 14, 'Senin', '12:39:00', 12, '2022-06-01 02:36:40', '2022-06-01 02:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(8, 'Hidrogen', NULL, NULL),
(9, 'Oksigen', NULL, NULL),
(10, 'Natrium', NULL, NULL),
(11, 'Bismut', NULL, NULL),
(12, 'Xenon', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapels`
--

INSERT INTO `mapels` (`id`, `mapel`, `created_at`, `updated_at`) VALUES
(7, 'Ilmu Pengetahuan Alam', NULL, NULL),
(8, 'Bahasa Indonesia', NULL, NULL),
(9, 'Matematika', NULL, NULL),
(10, 'Bahasa Inggris', NULL, NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_05_27_100256_create_kelas_table', 1),
(3, '2022_05_27_100257_create_siswas_table', 1),
(4, '2022_05_27_103200_create_gurus_table', 1),
(5, '2022_10_12_000000_create_users_table', 1),
(6, '2022_05_27_184259_create_mapels_table', 2),
(9, '2022_05_27_191654_create_jadwal_mapels_table', 5),
(12, '2022_05_27_185118_create_code_presensis_table', 6),
(13, '2022_05_27_185130_create_presensis_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presensis`
--

CREATE TABLE `presensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `jadwal_id` bigint(20) UNSIGNED NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minggu_ke` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presensis`
--

INSERT INTO `presensis` (`id`, `siswa_id`, `jadwal_id`, `status`, `minggu_ke`, `created_at`, `updated_at`) VALUES
(4, 114, 8, 'hadir', 1, '2022-06-01 03:22:43', '2022-06-01 03:22:43'),
(5, 120, 8, 'hadir', 1, '2022-06-01 03:23:01', '2022-06-01 03:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama`, `nisn`, `kelas_id`, `created_at`, `updated_at`) VALUES
(113, 'Raden Abel', '5210411157', 12, '2022-06-01 01:54:40', '2022-06-01 01:54:40'),
(114, 'Danu Dwiki', '5210411165', 8, '2022-06-01 01:57:18', '2022-06-01 01:57:18'),
(115, 'Esa Age', '5210411159', 11, '2022-06-01 01:57:58', '2022-06-01 01:57:58'),
(116, 'Zaedar Ghazalba', '5210411192', 9, '2022-06-01 01:58:54', '2022-06-01 01:58:54'),
(117, 'TAUFIK MUSTAFA NUR', '5210411053', 11, '2022-06-01 02:01:16', '2022-06-01 02:01:16'),
(118, 'FEBRINA CINTA SUBRATA', '5210411056', 12, '2022-06-01 02:02:50', '2022-06-01 02:02:50'),
(119, 'BELLA TRIANA', '5210411175', 10, '2022-06-01 02:03:35', '2022-06-01 02:03:35'),
(120, 'FERI SETYAWAN', '5210411173', 8, '2022-06-01 02:04:45', '2022-06-01 02:04:45'),
(121, 'VERATINA FRIDAYANTI', '5210411174', 9, '2022-06-01 02:05:36', '2022-06-01 02:05:36'),
(122, 'AGNESTA LINDA SARI', '5210411167', 10, '2022-06-01 02:06:41', '2022-06-01 02:06:41'),
(123, 'EUSEBIA NAWANG ARI', '5210411195', 12, '2022-06-01 02:07:33', '2022-06-01 02:07:33'),
(124, 'THUFAIL BINTANG HAIFAN YP KASTELLA', '5210411185', 12, '2022-06-01 02:08:26', '2022-06-01 02:08:26'),
(125, 'KHAZIN MUBAROK', '5210411187', 12, '2022-06-01 02:09:26', '2022-06-01 02:09:26'),
(126, 'FAREL NAUFAL AZHARI', '5210411200', 8, '2022-06-01 02:10:26', '2022-06-01 02:10:26'),
(127, 'STEVEN BAYU SILVESTA', '5210411263', 8, '2022-06-01 02:10:56', '2022-06-01 02:10:56'),
(128, 'FADMI FAHRANI', '5210411278', 8, '2022-06-01 02:11:26', '2022-06-01 02:11:26'),
(129, 'HAMDAN AINUR RIZA SYAKIRIN', '5210411302', 9, '2022-06-01 02:12:50', '2022-06-01 02:12:50'),
(130, 'RAFLY MAULANA DAULAH', '5210411304', 9, '2022-06-01 02:13:31', '2022-06-01 02:13:31'),
(131, 'FIRDAUS RESTU RAFISANTOSO', '5210411352', 9, '2022-06-01 02:14:08', '2022-06-01 02:14:08'),
(132, 'FAIZ FADILAH', '5210411356', 10, '2022-06-01 02:15:18', '2022-06-01 02:15:18'),
(133, 'ANANDA RIZKI DANI', '5210411362', 10, '2022-06-01 02:16:01', '2022-06-01 02:16:01'),
(134, 'DHEYVINA FITRIA ARDANI', '5210411373', 10, '2022-06-01 02:17:04', '2022-06-01 02:17:04'),
(135, 'ALLAN BIL FAQIH', '5210411383', 11, '2022-06-01 02:20:24', '2022-06-01 02:20:24'),
(136, 'MOCHAMMAD AFIF', '5210411404', 11, '2022-06-01 02:20:56', '2022-06-01 02:20:56'),
(137, 'URAY FANNY AKBAR', '5210411406', 11, '2022-06-01 02:21:37', '2022-06-01 02:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guru_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `siswa_id`, `guru_id`, `created_at`, `updated_at`) VALUES
(18, 'admin', '$2y$10$2mu7ZRDlD86O3Xr2O.HCOOf0oXbG3k1jjGi8FEEoqIsgI6QUhq.k6', 'admin', NULL, NULL, NULL, NULL),
(19, 'jiraya', '$2y$10$M8v5EMp4oTwYMS.xuLYlS.VqPGhN2Ps/5Oe39p2QjP9vtAkdAI/pe', 'guru', NULL, 10, '2022-05-31 18:41:47', '2022-05-31 18:41:47'),
(20, 'kakashi', '$2y$10$Skb556lV5Ws1picqNP6RJeI/0jDYIa75Cwsa/2h.wH01gSjXo65ty', 'guru', NULL, 12, '2022-06-01 01:49:45', '2022-06-01 01:49:45'),
(21, 'orochimaru', '$2y$10$ncyLo0FWd99An7IzYm5QRuEiGIQ4OHcScANV0IW/CLBensmQ/xcVC', 'guru', NULL, 11, '2022-06-01 01:51:31', '2022-06-01 01:51:31'),
(22, 'shishui', '$2y$10$k8qCuDr14v9cEwmBsFgAGuxLq1jgcPYLme5ZSqQ7lr6yJmteLZ24S', 'guru', NULL, 13, '2022-06-01 01:52:07', '2022-06-01 01:52:07'),
(23, 'tobirama', '$2y$10$eUWDBX.hGU7e3nvR9/ACuOl457A/IOw7XnECwxUhqKV4bfgkKDrna', 'guru', NULL, 14, '2022-06-01 01:52:30', '2022-06-01 01:52:30'),
(24, 'abel', '$2y$10$lZ3kVnXJ7M7Z4.MNCLdhfux4Ld5jSnLABKOXHDykxS.cFYkVpKl6e', 'siswa', 113, NULL, '2022-06-01 01:54:40', '2022-06-01 01:54:40'),
(25, 'danu', '$2y$10$jia0wRa4.IeFBA26YFqHQept7/0mUK.R76iCrea4eQuNON1rsYVNW', 'siswa', 114, NULL, '2022-06-01 01:57:18', '2022-06-01 01:57:18'),
(26, 'esa', '$2y$10$KFsvOSSdJfCh/wLgvTp8tO.WGrQOehJ4mHWdcdg18t/lHALnjKMKW', 'siswa', 115, NULL, '2022-06-01 01:57:58', '2022-06-01 01:57:58'),
(27, 'zaedar', '$2y$10$US0NChLkvLH8QS1mlQhNLuOmO6I3aFt6XXTez2u0A0Y3CTiMGdERK', 'siswa', 116, NULL, '2022-06-01 01:58:54', '2022-06-01 01:58:54'),
(28, 'taufik', '$2y$10$oaLE7gObwwW1iihcsLKTO.8Vex6guUdIdpSHwdMgTJaR59RZziU9K', 'siswa', 117, NULL, '2022-06-01 02:01:16', '2022-06-01 02:01:16'),
(29, 'febriana', '$2y$10$TjIMbcNlNVk2u7UFq8G/ve6e/MJ55EaaZpoXRiR0kJKp8oONimgla', 'siswa', 118, NULL, '2022-06-01 02:02:50', '2022-06-01 02:02:50'),
(30, 'bella', '$2y$10$QWmPwYP8pKt6RegS5Ho42.rczYbbeuPVOvngLKwBOiRQ2dHwJMMyC', 'siswa', 119, NULL, '2022-06-01 02:03:35', '2022-06-01 02:03:35'),
(31, 'feri', '$2y$10$tgxO.xF2ub/HSikPrn3vNuuer5kJ9kV31XrVUr9kHQ1hu0tGkIoNS', 'siswa', 120, NULL, '2022-06-01 02:04:45', '2022-06-01 02:04:45'),
(32, 'vera', '$2y$10$uAikX8aBWvvlEGOkCOVRVOrenoLoOhDNVvQDYSnYfj9U16yuaAami', 'siswa', 121, NULL, '2022-06-01 02:05:36', '2022-06-01 02:05:36'),
(33, 'agnes', '$2y$10$C6lAXaNvChH2Dn3Ho/BR6e7BcmjKHaYUdUAuS/EfgyuTe/OnKoTAW', 'siswa', 122, NULL, '2022-06-01 02:06:42', '2022-06-01 02:06:42'),
(34, 'eusebia', '$2y$10$fnlxX5g90uyB.rLcXgl9z.qwcemMJGqNYLog35YNRwhMq30E77Q8u', 'siswa', 123, NULL, '2022-06-01 02:07:33', '2022-06-01 02:07:33'),
(35, 'bintang', '$2y$10$r6Mgc5gQJT1zowpXG/TzRO4W3FKMUFkqMc4n/GiNKX.siOHCc3BjW', 'siswa', 124, NULL, '2022-06-01 02:08:26', '2022-06-01 02:08:26'),
(36, 'khazin', '$2y$10$7SgjzwybVby52GC6V50PROxa35fVMJ.FdfOQFZSmDjbzZ7RsKffqm', 'siswa', 125, NULL, '2022-06-01 02:09:26', '2022-06-01 02:09:26'),
(37, 'farel', '$2y$10$4/Ga7vwONSNtBk8d6D8L9eXcsL0b2d4z63xkqgCzBYSTzX79Phlhy', 'siswa', 126, NULL, '2022-06-01 02:10:26', '2022-06-01 02:10:26'),
(38, 'bayu', '$2y$10$ECK3zyOi9VCvtAcaTHHY3.ISqaCAkiZGuUx1KHjMr.x4YZEzb4JyS', 'siswa', 127, NULL, '2022-06-01 02:10:56', '2022-06-01 02:10:56'),
(39, 'fahra', '$2y$10$7RGJUtPbY/NAmGk9x99/HunfygnGVnXq4YcdbGQNeiriYSdYurZ2O', 'siswa', 128, NULL, '2022-06-01 02:11:26', '2022-06-01 02:11:26'),
(40, 'hamdan', '$2y$10$jp5UZAEU/Qkcy9ProJ7yseLuIqDgQ5tnBRyBxoz6jcryAF8s13VyK', 'siswa', 129, NULL, '2022-06-01 02:12:51', '2022-06-01 02:12:51'),
(41, 'rafly', '$2y$10$qZYSBPSc/lyAQduhbW.pG.Z/kDg8WtrlqP33PZWZiLXj7Z0rme2PW', 'siswa', 130, NULL, '2022-06-01 02:13:31', '2022-06-01 02:13:31'),
(42, 'restu', '$2y$10$rxNiy6e8YQtKa/c8Q7BX5eaoDqTL5eLJWWy9Rhtrsu1PF8lKW/CyW', 'siswa', 131, NULL, '2022-06-01 02:14:08', '2022-06-01 02:14:08'),
(43, 'faiz', '$2y$10$xdsZhODhPDpSodN6HkI9KeQ9cvdd55tNV3nEXy3CBhzo91rcp2rIC', 'siswa', 132, NULL, '2022-06-01 02:15:18', '2022-06-01 02:15:18'),
(44, 'ananda', '$2y$10$id/zdxv51fFtPWv3R2L0yOBdejOyzo.ePGffQUpyD.G.9t709znzq', 'siswa', 133, NULL, '2022-06-01 02:16:01', '2022-06-01 02:16:01'),
(45, 'fitria', '$2y$10$7Aavfaww9JKavs55Abh7f.KJ60CMQxKgkwqDN9/yd.9JZv8vsIt22', 'siswa', 134, NULL, '2022-06-01 02:17:04', '2022-06-01 02:17:04'),
(46, 'allan', '$2y$10$BxGsrPMMpUEMr2BNifbJ8.WqxDDGF3GWCZkBPTwJvjqkZS6sZn1rm', 'siswa', 135, NULL, '2022-06-01 02:20:25', '2022-06-01 02:20:25'),
(47, 'afif', '$2y$10$bdXwLgr288fk4tSMY1ocUemNc7JdeoJRr.feaAYzTcnB1xyv/9nFW', 'siswa', 136, NULL, '2022-06-01 02:20:56', '2022-06-01 02:20:56'),
(48, 'uray', '$2y$10$oW/bqQ.FgpAn1Mt8UcwLme.DEfuLZQRyqNp2lWfzW04xAiSrJ9c5q', 'siswa', 137, NULL, '2022-06-01 02:21:37', '2022-06-01 02:21:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code_presensis`
--
ALTER TABLE `code_presensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_presensis_jadwal_id_foreign` (`jadwal_id`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gurus_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_mapels_guru_id_foreign` (`guru_id`),
  ADD KEY `jadwal_mapels_kelas_id_foreign` (`kelas_id`),
  ADD KEY `jadwal_mapels_mapel_id_foreign` (`mapel_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `presensis`
--
ALTER TABLE `presensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presensis_jadwal_id_foreign` (`jadwal_id`),
  ADD KEY `presensis_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`),
  ADD KEY `siswas_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_guru_id_foreign` (`guru_id`),
  ADD KEY `users_siswa_id_foreign` (`siswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code_presensis`
--
ALTER TABLE `code_presensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presensis`
--
ALTER TABLE `presensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `code_presensis`
--
ALTER TABLE `code_presensis`
  ADD CONSTRAINT `code_presensis_jadwal_id_foreign` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal_mapels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gurus`
--
ALTER TABLE `gurus`
  ADD CONSTRAINT `gurus_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  ADD CONSTRAINT `jadwal_mapels_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_mapels_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_mapels_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `presensis`
--
ALTER TABLE `presensis`
  ADD CONSTRAINT `presensis_jadwal_id_foreign` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal_mapels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `presensis_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
