-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2022 at 12:02 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelku`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `masuk_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keluar_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `phone`, `email`, `type`, `status`, `masuk_date`, `keluar_date`) VALUES
(1, 'Muhammad Idris', '085882311829', 'idris@gmail.com', 'Standard Room', 'Reserved', '2021-12-09 09:16:02', '2021-12-10 09:16:02'),
(2, 'Muhammad Ridwan', '05823212', 'ridwan@gmail.com', 'Deluxe Room', 'Check In', '2021-12-08 09:18:15', '2021-12-18 09:16:02'),
(3, 'Wahyu', '08435345', 'wahyu@gmail.com', 'Superior Room', 'Check Out', '2021-12-14 09:18:30', '2021-12-15 09:18:30'),
(4, 'Adam', '08546456456', 'adam@gmail.com', 'Standard Room', 'Check Out', '2021-12-17 14:27:20', '2021-12-19 14:27:20'),
(5, 'Rani', '084545342', 'rani@gmail.com', 'Deluxe Room', 'Reserved', '2021-12-30 14:14:13', '2021-12-31 14:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_03_122026_create_customer_table', 2),
(6, '2022_01_03_145525_laratrust_setup_tables', 3),
(7, '2022_01_03_164216_create_customer_table', 4),
(8, '2022_01_03_164638_create_users_table', 5),
(9, '2022_01_06_082345_create_customer_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(9, 'profile-create', 'Create Profile', 'Create Profile', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(10, 'profile-read', 'Read Profile', 'Read Profile', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(11, 'profile-update', 'Update Profile', 'Update Profile', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(12, 'profile-delete', 'Delete Profile', 'Delete Profile', '2022-01-09 11:04:08', '2022-01-09 11:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2022-01-09 11:04:08', '2022-01-09 11:04:08'),
(2, 'customer', 'Customer', 'Customer', '2022-01-09 11:04:08', '2022-01-09 11:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 3, 'App\\Models\\Customer'),
(2, 4, 'App\\Models\\Customer'),
(2, 5, 'App\\Models\\Customer');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id_room` int UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `harga` double DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `foto` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id_room`, `type`, `harga`, `jumlah`, `foto`) VALUES
(1, 'Standard Room', 600000, 50, 0x313634313130363934372e6a7067),
(2, 'Superior Room', 800000, 24, 0x313634313130373236352e6a7067),
(3, 'Deluxe Room', 1000000, 8, 0x313634313130373436322e6a7067),
(5, 'Presidential Suite', 2000000, 2, 0x313634313230393138372e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama_tamu` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `jeniskelamin_tamu` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telepon_tamu` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_tamu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkin_tamu` date DEFAULT NULL,
  `checkout_tamu` date DEFAULT NULL,
  `tipe_tamu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_tamu` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biaya_tamu` bigint DEFAULT NULL,
  `night_tamu` int DEFAULT NULL,
  `id_customer` int NOT NULL,
  `book_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `jeniskelamin_tamu`, `telepon_tamu`, `email_tamu`, `checkin_tamu`, `checkout_tamu`, `tipe_tamu`, `status_tamu`, `biaya_tamu`, `night_tamu`, `id_customer`, `book_time`) VALUES
('HTL23972', 'Adam Zahran', 'Laki - Laki', '085888888', 'adam@gmail.com', '2022-01-12', '2022-01-14', 'Deluxe Room', 'Check In', 2000000, 2, 4, '2022-01-09 20:03:51'),
('HTL45738', 'Muhammad Idris', 'Laki - Laki', '085884125623', 'idris@gmail.com', '2022-01-12', '2022-01-14', 'Standard Room', 'Check In', 1200000, 2, 3, '2022-01-09 20:16:09'),
('HTL97080', 'Muhammad Ridwan', 'Laki - Laki', '0858232424', 'ridwan@gmail.com', '2022-01-14', '2022-01-18', 'Deluxe Room', 'Reserved', 4000000, 4, 5, '2022-01-09 20:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$LM7OLv1lyedeSByhrv1P9eCc0tOrCkyzi6NywzCdIxK9DbusXymWO', NULL, '2022-01-09 11:13:16', '2022-01-09 11:13:16', 'admin'),
(3, 'Muhammad Idris', 'idris@gmail.com', NULL, '$2y$10$RzoK185cIOUBL.UHgixQSupCvuMk63wyeg/NeKuJKSgjN9rPZ6Keu', NULL, '2022-01-09 11:43:34', '2022-01-09 11:43:34', 'customer'),
(4, 'Adam Zahran', 'adam@gmail.com', NULL, '$2y$10$X0cxSbvVjUmFVmKG0AmI1uzF0EpVEQ1NPXVa.8t7/t7.nnEoe4hqy', NULL, '2022-01-09 20:03:09', '2022-01-09 20:03:09', 'customer'),
(5, 'Muhammad Ridwan', 'ridwan@gmail.com', NULL, '$2y$10$TwP2aRgwxR6A4idSddy4KuBz3uA7pwn7CQGXDTf85mXx.QyRWxfV2', NULL, '2022-01-09 20:05:44', '2022-01-09 20:05:44', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

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
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_room` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
