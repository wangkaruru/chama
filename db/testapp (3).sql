-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 12:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedeposited` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depositamount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `phonenumber`, `datedeposited`, `receipt`, `depositamount`, `created_at`, `updated_at`) VALUES
(1, 'gfdbgfb', 'fdgbfds', 'rtethv', 'fdgfb', '2018-03-02 11:27:05', '2018-03-02 11:27:05'),
(2, 'dfgvd', 'sfsf', 'sdfsd', 'wae', '2018-03-02 11:28:18', '2018-03-02 11:28:18'),
(3, 'dvfd', 'vfdgv', 'dgfds', 'dsfd', '2018-03-02 11:39:55', '2018-03-02 11:39:55'),
(4, 'edws', 'edw', 'dwedws', 'dqd', '2018-03-03 05:47:24', '2018-03-03 05:47:24'),
(5, 'sdavfds', 'safwsed', 'fwqef', 'wqfe', '2018-03-03 05:56:51', '2018-03-03 05:56:51'),
(6, 'e', 'erg', 'regerg', 'erger', '2018-03-03 06:56:35', '2018-03-03 06:56:35'),
(7, '532764327874', '03022018', '4365476', '20000', '2018-03-03 07:23:42', '2018-03-03 07:23:42');

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
(3, '2018_03_01_140024_add_membercode_to_users_table', 1),
(33, '2014_10_12_000000_create_users_table', 2),
(34, '2014_10_12_100000_create_password_resets_table', 2),
(35, '2018_03_02_081511_create_details_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `idnumber`, `phonenumber`, `password`, `county`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mercy', 'njoki', '4366557', '0712345678', '$2y$10$M5.vcA37/yr/WxR03ayADeGTtOtGXAP.yU/C0XEDMdACKHEUIgLve', 'Isiolo County', 'pt9pGUkSwbegEUMjiMzhhkSOB0lQUEtdC2dzr6TNmoHWBV4z17f8bYBOBux4', '2018-03-05 03:39:14', '2018-03-05 03:39:14'),
(2, 'pablo', 'picasso', '55341234', '0720000000', '$2y$10$k/ltgmnxUW1BusblkGQRzu7ZB9HAaCKed7zT37heot3f8AxMA47YO', 'Kisii County', '3WQpiLGX2lsDf0yDPw8E2gWPFM40JH2vWYbOfFRlvw5F8Fw8aig6FYnpYNZB', '2018-03-05 03:48:08', '2018-03-05 03:48:08'),
(3, 'Margaret', 'Karuru', '33561463', '0773153765', '$2y$10$XzVn7SJ5Rr0Wmz7XUnymDew8FyLh2o6FMV1EAgbi3c6hEMkzrkT/W', 'Homa Bay County', 'K370avoEdxqdLF1phiPvEb3mONKiqNXpyPMEVtRt50AB3OnDnI6Dodki66qY', '2018-03-05 04:16:53', '2018-03-05 04:16:53'),
(4, 'julius', 'caesar', '5534166544', '0772553322', '$2y$10$3qAI91KUysvH1B0LtHs6Be/AoV4gJ7stTHweVB0hzHr6Ort9yJn/6', 'Kakamega County', 'eOW1QYjT1B94aSTes9CejslSifFFNF29lUS5kY70dJHMpgbry96WI6FWhyXf', '2018-03-05 04:24:30', '2018-03-05 04:24:30'),
(5, 'elise', 'kamaru', '658765874', '0761340998', '$2y$10$.nUl1pYFW8zEyP1pBuSAfO1RTzalFhxPJVv9TnCQsbTmkNVYxI2ce', 'Homa Bay County', 'Pi9HWi8U1tSMphEsnDYLLpeCTKVGJybkaHPOxbz0EUAT1oneMnPqpPQMeJjT', '2018-03-05 04:31:00', '2018-03-05 04:31:00'),
(6, 'susan', 'opiyo', '45123211', '0720000000', '$2y$10$pjDvEEPYHBcR0hOSF4bq/exPV3NnrJu6CBXOpcPbJq1VF99fTm1s6', 'Homa Bay County', NULL, '2018-03-05 04:57:01', '2018-03-05 04:57:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
