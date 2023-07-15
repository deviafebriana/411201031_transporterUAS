-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 04:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_fullstack`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang2`
--

CREATE TABLE `barang2` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang2`
--

INSERT INTO `barang2` (`id`, `nama_barang`, `deskripsi`, `stok_barang`, `harga_barang`, `created_at`, `updated_at`) VALUES
(101, 'TV', 'Barang elektronik', 3, 2000000, NULL, NULL),
(102, 'Lampu', 'Peralatan rumah tangga', 10, 20000, NULL, NULL),
(103, 'Kaca Mata', 'Fashion', 1000, 3000000, NULL, NULL),
(104, 'Food Processor', 'Peralatan rumah tangga', 20, 1000000, NULL, NULL),
(105, 'Jaket Crop Top', 'Fashion Wanita', 200, 150000, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2023_06_17_075251_table_users_add_column_google_id', 2),
(3, '2023_06_17_080306_table_users_add_column_google_id', 3),
(4, '2023_06_17_085513_users_set_default_password', 4),
(5, '2023_07_07_040924_users_add_column_avatar', 5),
(6, '2023_07_07_065400_create_barangs_table', 6),
(7, '2023_07_07_082123_user_add_column_harga', 7),
(8, '2023_07_07_085103_create_barang2s_table', 8),
(9, '2023_07_07_155402_create_sales_table', 9),
(10, '2023_07_07_165930_create_outlets_table', 10),
(11, '2023_07_07_184137_create_transaksis_table', 11),
(12, '2023_07_09_052559_create_pengirimen_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id` int(11) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `lokasi_outlet` varchar(255) NOT NULL,
  `alamat_outlet` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id`, `nama_outlet`, `lokasi_outlet`, `alamat_outlet`, `created_at`, `updated_at`) VALUES
(300, 'Permata Outlet', 'Cibinong City Mall', 'Jl. Tegar Beriman 1, Cibinong Bogor', NULL, NULL),
(301, 'Diamond Outlet', 'ITC Depok', 'Jl. Margonda Raya 12', NULL, NULL),
(302, 'Silver Outlet', 'Depok Mall', 'Jl. Depok 2, Depok Jawa Barat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `no_pengiriman` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi_id` varchar(255) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `kurir_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `harga_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `no_pengiriman`, `tanggal`, `lokasi_id`, `barang_id`, `jumlah_barang`, `kurir_id`, `created_at`, `updated_at`, `harga_barang`) VALUES
(103, 1001, '2023-07-09', '300', 102, 10, 1, NULL, NULL, '20000'),
(101, 1000, '2023-07-09', '300', 101, 2, 1, NULL, NULL, '2000000'),
(104, 1003, '2023-07-10', '300', 102, 150, 1, NULL, NULL, '1500000'),
(105, 1005, '2023-07-11', '302', 104, 10, 1, NULL, NULL, '150000'),
(106, 1006, '2023-07-10', '302', 105, 200, 1, NULL, NULL, '150000');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `nama_sales` varchar(255) NOT NULL,
  `lokasi_sales` varchar(255) NOT NULL,
  `lokasi_outlet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `nama_sales`, `lokasi_sales`, `lokasi_outlet`, `created_at`, `updated_at`) VALUES
(200, 'Devia', 'Depok', 'Depok Mall', NULL, NULL),
(201, 'Ayuf', 'Bogor', 'Cibinong City Mall', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama_sales` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `jumlah_display` int(11) NOT NULL,
  `visit_datetime` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_sales`, `nama_barang`, `nama_outlet`, `jumlah_stok`, `jumlah_display`, `visit_datetime`, `created_at`, `updated_at`) VALUES
(400, 'Devia', 'TV', 'Diamond Outlet', 1, 1, '2023-07-08', NULL, NULL),
(4001, 'Ayuf', 'Lampu', 'Permata Outlet', 3, 3, '2023-07-09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` text NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `avatar`) VALUES
(1, 'devi ayu', 'deviayufebrianam@gmail.com', NULL, NULL, NULL, '2023-06-17 02:03:50', '2023-07-06 21:34:29', '110786859495802911367', '110786859495802911367.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pengiriman`
-- (See below for the actual view)
--
CREATE TABLE `view_pengiriman` (
`id` int(11)
,`id_barang` int(11)
,`nama_barang` varchar(255)
,`nama_lokasi` varchar(255)
,`id_lokasi` int(11)
,`jumlah_barang` int(11)
,`harga_barang` varchar(100)
,`tanggal` date
,`created_at` timestamp
,`no_pengiriman` int(11)
,`updated_at` timestamp
,`nama_pengirim` varchar(255)
,`kurir_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Structure for view `view_pengiriman`
--
DROP TABLE IF EXISTS `view_pengiriman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pengiriman`  AS SELECT `pengiriman`.`id` AS `id`, `barang2`.`id` AS `id_barang`, `barang2`.`nama_barang` AS `nama_barang`, `outlet`.`nama_outlet` AS `nama_lokasi`, `outlet`.`id` AS `id_lokasi`, `pengiriman`.`jumlah_barang` AS `jumlah_barang`, `pengiriman`.`harga_barang` AS `harga_barang`, `pengiriman`.`tanggal` AS `tanggal`, `pengiriman`.`created_at` AS `created_at`, `pengiriman`.`no_pengiriman` AS `no_pengiriman`, `pengiriman`.`updated_at` AS `updated_at`, `users`.`name` AS `nama_pengirim`, `users`.`id` AS `kurir_id` FROM (((`pengiriman` left join `barang2` on(`pengiriman`.`barang_id` = `barang2`.`id`)) left join `outlet` on(`pengiriman`.`lokasi_id` = `outlet`.`id`)) left join `users` on(`pengiriman`.`kurir_id` = `users`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
