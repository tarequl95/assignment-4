-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 06:49 AM
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
-- Database: `contactlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(3, 'tarequl', 'tarequl95@gmail.com', '12345678912', NULL, '2024-07-30 10:25:14', '2024-07-31 21:23:37'),
(7, 'jawad', 'atik@gmail.com', '12345678912', NULL, '2024-07-30 11:18:26', '2024-07-30 13:18:18'),
(11, 'atik', 'a@gmail.com', '78945612315', 'dhaka', '2024-07-31 06:12:28', '2024-07-31 06:12:28'),
(12, 'Md Tarequl Islam', 'ta@gmail.com', '14725836945', 'patuskaha', '2024-07-31 06:12:56', '2024-07-31 06:12:56'),
(13, 'Md Tarequl Islam', 'tarequl@gmail.com', '12345678945', 'patuskaha', '2024-07-31 20:21:11', '2024-07-31 20:21:11'),
(14, 'jon due', 'jon@gmail.com', '45612378912', 'barishal', '2024-08-03 19:48:34', '2024-08-03 19:48:34'),
(15, 'obama', 'obama@gmail.com', '12345678945', 'usa', '2024-08-03 19:49:04', '2024-08-03 19:49:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
