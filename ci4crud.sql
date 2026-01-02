-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2026 at 07:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `slug` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `body`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa UNNES Magang di NGI Developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'mahasiswa-unnes-magang-di-ngi-developer', 'berita1.jpg', NULL, NULL),
(10, 'asfasfasdasdbubjbj', 'bjbjbjbsfb', 'asfasfasdasdbubjbj', '1767324733_83b7645907fb4c26d69b.jpg', '2026-01-02 03:32:13', '2026-01-02 03:32:13'),
(11, 'anjay mabar', 'sdgdfdfg', 'anjay-mabar', '1767327151_f7a31444479f64920338.jpg', '2026-01-02 03:40:04', '2026-01-02 04:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2026-01-02-062221', 'App\\Database\\Migrations\\Orang', 'default', 'App', 1767337574, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', 'Jl. Merdeka No. 10, Jakarta', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(2, 'Siti Aminah', 'Jl. Sudirman No. 20, Bandung', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(3, 'Andi Wijaya', 'Jl. Diponegoro No. 15, Surabaya', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(4, 'Rina Kusuma', 'Jl. Gatot Subroto No. 5, Yogyakarta', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(5, 'Agus Pratama', 'Jl. Thamrin No. 8, Medan', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(6, 'Dewi Lestari', 'Jl. Pahlawan No. 12, Semarang', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(7, 'Fajar Nugroho', 'Jl. Ahmad Yani No. 18, Malang', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(8, 'Lina Marlina', 'Jl. Sisingamangaraja No. 22, Padang', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(9, 'Rudi Hartono', 'Jl. Hasanuddin No. 30, Balikpapan', '2026-01-02 07:06:22', '2026-01-02 07:06:22'),
(10, 'Maya Sari', 'Jl. Cendrawasih No. 25, Pontianak', '2026-01-02 07:06:22', '2026-01-02 07:06:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
