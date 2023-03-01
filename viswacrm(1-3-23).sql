-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 06:11 AM
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
-- Database: `viswacrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `status` enum('Active','Trash') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` enum('active','trash') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `business_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `client_name`, `mobile_no`, `location`, `purpose`, `date`, `time`, `remarks`, `status`, `created_at`, `updated_at`, `business_name`, `business_desc`) VALUES
(2, 'vikram', '7867997754', 'pollachi', 'demo', '12-2-23', '1.30pm', 'testing', 'active', '2023-02-03 11:28:40', '2023-02-03 11:28:40', 'web development', 'ndvfjvo'),
(3, 'sibhi', '9994370308', 'peelamedu', 'sfgsg', 'xg', 'fgfg', 'sffgag', 'active', '2023-02-03 11:42:16', '2023-02-03 11:42:16', 'svxfv', 'dsffs');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_09_102617_create_clients_table', 1),
(4, '2023_02_02_123504_create_users_table', 2),
(5, '2023_02_03_150446_create_meetings_table', 3),
(6, '2023_02_03_160002_add_business_to_meetings_table', 4),
(12, '2023_02_21_151817_create_staffs_table', 5),
(14, '2023_02_24_112806_create_salary_infos_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_infos`
--

CREATE TABLE `salary_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_code` varchar(255) DEFAULT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `gross_salary` varchar(255) DEFAULT NULL,
  `status` enum('Active','Trash','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary_infos`
--

INSERT INTO `salary_infos` (`id`, `staff_code`, `staff_name`, `staff_id`, `designation`, `gross_salary`, `status`, `created_at`, `updated_at`) VALUES
(2, 'VTS001', 'priya', 1, 'CEO', '120000', 'Active', '2023-02-28 11:16:11', '2023-02-28 11:16:51'),
(3, 'VTS002', 'nivy', 2, 'App Developer', '18000', 'Active', '2023-02-28 11:20:42', '2023-02-28 11:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_code` varchar(255) DEFAULT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `date_of_joining` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `status` enum('Active','Trash') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_code`, `staff_name`, `username`, `password`, `email`, `mobile_number`, `date_of_birth`, `date_of_joining`, `designation`, `address`, `blood_group`, `profile`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VTS001', 'priya', 'priyanka', '$2y$10$Hnf7xKiMS2VVzjoPnbRSLeyMaqF/vn8B0x31uGb.T3RQU8BzAShIO', 'priya@gmail.com', '7867997754', '08/07/1997', '01/28/2022', 'CEO', 'Erode', 'O Positive', '2023-02-28-1677582835.jpg', '123', 'Active', '2023-02-28 11:13:56', '2023-02-28 11:13:56'),
(2, 'VTS002', 'nivy', 'nivy', '$2y$10$tDk330vqWZMhdYSOffeWWeQTiUwHcPeXvQadzG5mUe3XOKwc1MXcm', 'nivy.vts@gmail.com', '9043504388', '05/31/1998', '11/25/2021', 'App Developer', 'Chennai', 'B Positive', '2023-02-28-1677582934.jpg', '123', 'Active', '2023-02-28 11:15:34', '2023-02-28 11:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `office_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `password_text` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `map_url` varchar(255) DEFAULT NULL,
  `web_url` varchar(255) DEFAULT NULL,
  `status` enum('Active','Trash') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `office_no`, `address`, `username`, `password`, `password_text`, `profile`, `map_url`, `web_url`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Viswa', 'Viswa', 'viswa@gmail.com', '7867997754', '9994370908', 'Ramalingam Colony,Saibaba Colony,Coimbatore-48.', 'viswatech', '$2y$10$qxtFDP.RnWm.SkC.BkxTdeFaaiFQVwvs6vsiZrqOzq/qPg89P66j6', '7867997754', '5f312d6bd7cc6.png', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.974894254266!2d76.9511591!3d11.0203318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bf55a9aab56f1f8!2sViswa%20Technology%20Solutions!5e0!3m2!1sen!2sin!4v1653485457162!5m2!1sen!2sin', 'https://viswatechnologysolutions.com', 'Active', '2023-02-03 06:12:09', '2023-02-03 06:12:09'),
(5, 'Viswa', 'Viswa', 'viswa@gmail.com', '7867997754', '9994370908', 'Ramalingam Colony,Saibaba Colony,Coimbatore-48.', 'viswa', '$2y$10$wQdFRufJzziDY2DjwN9F9u0iVUBZFdKVLwhmaiQuBwoDWcQkJ2rze', '7867997754', 'avatar.jpg', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.974894254266!2d76.9511591!3d11.0203318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bf55a9aab56f1f8!2sViswa%20Technology%20Solutions!5e0!3m2!1sen!2sin!4v1653485457162!5m2!1sen!2sin', 'https://viswatechnologysolutions.com', 'Active', '2023-02-03 06:59:47', '2023-02-03 06:59:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
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
-- Indexes for table `salary_infos`
--
ALTER TABLE `salary_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_infos`
--
ALTER TABLE `salary_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
