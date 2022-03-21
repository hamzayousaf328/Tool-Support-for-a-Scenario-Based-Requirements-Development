-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 03:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_25_235807_create_projects_table', 2);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `functional_requirement_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `functional_requirement_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `functional_requirement_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_functional_requirement_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_functional_requirement_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_functional_requirement_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stack_holder_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stack_holder_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stack_holder_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_stack_holder_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_stack_holder_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_stack_holder_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `project_name`, `functional_requirement_1`, `functional_requirement_2`, `functional_requirement_3`, `non_functional_requirement_1`, `non_functional_requirement_2`, `non_functional_requirement_3`, `concept`, `stack_holder_1`, `stack_holder_2`, `stack_holder_3`, `group_stack_holder_1`, `group_stack_holder_2`, `group_stack_holder_3`, `created_at`, `updated_at`) VALUES
(1, 3, 'New Project', 'Testdsadas', '', '', 'testdsa', '', '', 'test', 'test', 'test', 'test', '', '', '', '2021-07-25 19:08:38', '2021-07-25 19:08:38'),
(2, 3, 'New Project', 'Testdsadas', '', '', 'testdsa', '', '', 'test', 'test', 'test', 'test', '', '', '', '2021-07-25 19:10:58', '2021-07-25 19:10:58'),
(3, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2021-08-02 01:37:31', '2021-08-02 01:37:31'),
(4, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2021-08-02 05:43:55', '2021-08-02 05:43:55'),
(5, 3, 'New Project', 'fsdfds', 'fdsfds', 'fdsfds', 'fdsfds', 'fdsfds', NULL, 'fsdfdsf', 'fdsfds', 'fdsfds', 'fdsfds', '', '', '', '2021-08-02 06:09:09', '2021-08-02 06:09:09'),
(6, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2021-08-10 05:33:42', '2021-08-10 05:33:42'),
(7, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2021-08-12 07:32:10', '2021-08-12 07:32:10'),
(8, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2021-08-15 14:54:47', '2021-08-15 14:54:47'),
(9, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'asdsad', 'asd', 'asdas', 'dasdsadas', 'dsadas', NULL, '2021-08-15 14:59:15', '2021-08-15 14:59:15'),
(10, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'asdsad', 'asd', 'asdas', 'dasdsadas', 'dsadas', NULL, '2021-08-15 15:01:30', '2021-08-15 15:01:30'),
(11, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'asdsad', 'asd', 'asdas', 'dasdsadas', 'dsadas', NULL, '2021-08-15 16:21:32', '2021-08-15 16:21:32'),
(12, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'asdsad', 'asd', 'asdas', 'dasdsadas', 'dsadas', NULL, '2021-08-15 16:26:13', '2021-08-15 16:26:13'),
(13, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'asdsad', 'asd', 'asdas', 'dasdsadas', 'dsadas', NULL, '2021-08-15 16:26:44', '2021-08-15 16:26:44'),
(14, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'asdsad', 'asd', 'asdas', 'dasdsadas', 'dsadas', NULL, '2021-08-15 16:26:50', '2021-08-15 16:26:50'),
(15, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-15 19:55:26', '2021-08-15 19:55:26'),
(16, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsfdsfdsfd', 'fsdfds', 'fsdfdsfds', NULL, 'dsfdsfds', 'fdsfdsf', NULL, '2021-08-15 19:56:09', '2021-08-15 19:56:09'),
(17, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsfdsfdsfd', 'fsdfds', 'fsdfdsfds', NULL, 'dsfdsfds', 'fdsfdsf', NULL, '2021-08-15 19:57:17', '2021-08-15 19:57:17'),
(18, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsfdsfdsfd', 'fsdfds', 'fsdfdsfds', NULL, 'dsfdsfds', 'fdsfdsf', NULL, '2021-08-15 19:59:00', '2021-08-15 19:59:00'),
(19, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsfdsfdsfd', 'fsdfds', 'fsdfdsfds', NULL, 'dsfdsfds', 'fdsfdsf', NULL, '2021-08-15 19:59:11', '2021-08-15 19:59:11'),
(20, 3, 'New Project', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsfdsfdsfd', 'fsdfds', 'fsdfdsfds', NULL, 'dsfdsfds', 'fdsfdsf', NULL, '2021-08-15 20:00:07', '2021-08-15 20:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@demo.com', '0192023a7bbd73250516f069df18b500', NULL, '2021-07-13 09:57:27', '2021-07-13 09:57:27'),
(2, 'Test 2', 'demo@demo.com', '0192023a7bbd73250516f069df18b500', NULL, '2021-07-13 10:00:29', '2021-07-13 10:00:29'),
(3, 'Hamza', 'hamza@demo.com', '25d55ad283aa400af464c76d713c07ad', NULL, '2021-07-13 11:07:25', '2021-07-13 11:07:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
