-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2021 at 05:33 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bis`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `name`, `category`, `email`, `phone`, `description`, `location`, `address`, `image`, `owner`, `approved`, `created_at`, `updated_at`) VALUES
(1, 'Auctor Quis Tristique PC', 'Studio', 'fringilla@uteratSed.org', '9773524570', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Attibele', '419-7525 Nam Street', '1610107723.jpg', 1, 1, '2021-01-08 06:38:43', '2021-01-08 13:00:45'),
(2, 'Urna Vivamus LLC', 'Arts & Entertainment', 'Cum.sociis@orciluctus.co.uk', '7961020656', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution', 'Adugodi', 'Ap #826-498 Porttitor Rd.', '1610107880.jpg', 1, 1, '2021-01-08 06:41:20', '2021-01-08 06:42:04'),
(3, 'Donec Egestas Duis Incorporated', 'Shop & Stores', 'dolor@nec.edu', '2423308344', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution', 'Agara', 'P.O. Box 567, 7959 Hendrerit. St.', '1610107977.jpg', 1, 1, '2021-01-08 06:42:57', '2021-01-08 08:19:54'),
(4, 'Tincidunt Orci LLP', 'Studio', 'facilisis@faucibusMorbi.com', '4667032025', 'text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy', 'Agram', 'Ap #562-9726 Urna. Rd.', '1610127083.jpg', 1, 1, '2021-01-08 12:01:23', '2021-01-08 12:01:26'),
(5, 'Erat Associates', 'Automobile', 'Quisque@temporbibendumDonec.ca', '4348842102', 'text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy', 'Anandnagar', '723-4102 Amet, Rd.', '1610127138.jpg', 1, 1, '2021-01-08 12:02:18', '2021-01-08 12:07:16'),
(6, 'Tellus Corporation', 'Law & Taxation', 'Suspendisse.tristique.neque@tellus.com', '5064367651', 'the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Ashoknagar', '745-2013 Lectus. Rd.', '1610127267.jpg', 1, 1, '2021-01-08 12:04:27', '2021-01-08 12:07:19'),
(7, 'Pellentesque Ultricies LLC', 'Finance & Stock Market', 'convallis@Suspendisse.org', '1292560552', 'the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Arabic College', 'Ap #963-5018 Tincidunt Rd.', '1610127323.jpg', 1, 1, '2021-01-08 12:05:23', '2021-01-08 12:07:27'),
(8, 'Id Erat Etiam Limited', 'Electrical & Contracts', 'penatibus.et@tortorInteger.net', '1036353208', 'it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\'', 'Attibele', '134-2828 Eros St.', '1610127379.jpg', 1, 0, '2021-01-08 12:06:19', '2021-01-09 06:26:58'),
(9, 'Risus A Inc.', 'Internet & Telecom', 'sed.dictum.eleifend@dui.org', '4870519888', 'it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\'', 'Attibele', '3602 Morbi Avenue', '1610127429.jpg', 1, 1, '2021-01-08 12:07:09', '2021-01-08 12:07:21'),
(10, 'Luctus Sit Amet LLC', 'Internet & Telecom', 'ut.eros@consectetuercursus.org', '8178401713', 'it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\'', 'Arabic College', '6229 Id, St.', '1610127680.jpg', 1, 1, '2021-01-08 12:11:20', '2021-01-08 12:11:25'),
(11, 'ET Bureau', 'Internet & Telecom', 'etbureau@gmail.com', '9123456789', 'Koramangala, a niche hub of India\'s Silicon Valley Bangalore has seen a huge number of start-ups sprouting up in the last few years.', 'Austin Town', 'Koramangala', '1610174748.jpg', 3, 1, '2021-01-09 01:15:48', '2021-01-09 05:29:48'),
(12, 'Rajneet Vimal', 'Electrical & Contracts', 'rajneetvimal@gmail.com', '1234567896', 'Rajneet Vimal created Dreamstarts.in, a free platform for startups, where employers can interact directly with their potential talents. DreamStarts.in is a social enterprise platform for Indian entrepreneurs.', 'Attibele', 'Koramangal', '1610174820.jpg', 3, 1, '2021-01-09 01:17:00', '2021-01-09 06:26:53'),
(13, 'Test', 'Studio', 'test@gmail.com', '1234567899', 'test', 'Aranya Bhavan', 'Test', '1610339684.jpg', 7, 0, '2021-01-10 23:04:44', '2021-01-11 10:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'Health', '2021-01-01 08:08:45', '2021-01-01 08:08:45'),
(8, 'Arts & Entertainment', '2021-01-01 08:09:04', '2021-01-01 08:09:04'),
(9, 'Shop & Stores', '2021-01-01 08:09:19', '2021-01-01 08:09:19'),
(10, 'Studio', '2021-01-01 08:09:32', '2021-01-01 08:09:32'),
(11, 'Automobile', '2021-01-01 08:09:41', '2021-01-01 08:09:41'),
(12, 'Jobs & Education', '2021-01-01 08:09:57', '2021-01-01 08:09:57'),
(13, 'Agriculture', '2021-01-01 08:10:08', '2021-01-01 08:10:08'),
(14, 'Law & Taxation', '2021-01-01 08:10:20', '2021-01-01 08:10:20'),
(15, 'Beauty, Fitness & Yoga', '2021-01-01 08:10:32', '2021-01-01 08:10:32'),
(16, 'Finance & Stock Market', '2021-01-01 08:10:43', '2021-01-01 08:10:43'),
(17, 'Food & Drink', '2021-01-01 08:10:54', '2021-01-01 08:10:54'),
(18, 'Media', '2021-01-01 08:11:08', '2021-01-01 08:11:08'),
(19, 'Hobbies & Freelance - Technology', '2021-01-01 08:11:21', '2021-01-01 08:11:21'),
(20, 'Internet & Telecom', '2021-01-01 08:11:34', '2021-01-01 08:11:34'),
(21, 'Real Estate & Stock Market', '2021-01-01 08:12:42', '2021-01-01 08:12:42'),
(22, 'Travels & Agencies', '2021-01-01 08:13:04', '2021-01-01 08:13:04'),
(23, 'Electrical & Contracts', '2021-01-01 08:13:18', '2021-01-01 08:13:18'),
(24, 'Engineering', '2021-01-01 08:13:29', '2021-01-01 08:13:29'),
(25, 'Astrology & Vaidika', '2021-01-01 08:13:40', '2021-01-01 08:13:40'),
(26, 'Animal Husbandry & Veterinary', '2021-01-01 08:13:55', '2021-01-01 08:13:55'),
(27, 'Government Services', '2021-01-01 08:14:05', '2021-01-01 08:14:05'),
(28, 'Industry, Human Resource', '2021-01-01 08:14:16', '2021-01-01 08:14:16'),
(29, 'Others', '2021-01-01 08:14:28', '2021-01-01 08:14:28');

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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `pincode`, `created_at`, `updated_at`) VALUES
(7, 'A F station yelahanka', '560063', '2021-01-01 09:48:17', '2021-01-01 09:48:17'),
(8, 'Adugodi', '560030', '2021-01-01 09:48:33', '2021-01-01 09:48:33'),
(9, 'Agara', '560034', '2021-01-01 09:48:49', '2021-01-01 09:48:49'),
(10, 'Agram', '560007', '2021-01-01 09:49:10', '2021-01-01 09:49:10'),
(11, 'Air Force hospital', '560007', '2021-01-01 09:50:13', '2021-01-01 09:50:13'),
(12, 'Amruthahalli', '560092', '2021-01-01 09:50:32', '2021-01-01 09:50:32'),
(13, 'Anandnagar', '560024', '2021-01-01 09:50:49', '2021-01-01 09:50:49'),
(14, 'Anekal', '562106', '2021-01-01 09:51:08', '2021-01-01 09:51:08'),
(15, 'Anekalbazar', '562106', '2021-01-01 09:51:27', '2021-01-01 09:51:27'),
(16, 'Arabic College', '560045', '2021-01-01 09:51:45', '2021-01-01 09:51:45'),
(17, 'Aranya Bhavan', '560003', '2021-01-01 09:52:01', '2021-01-01 09:52:01'),
(18, 'Ashoknagar', '560050', '2021-01-01 09:52:28', '2021-01-01 09:52:28'),
(19, 'Attibele', '562107', '2021-01-01 09:52:43', '2021-01-01 09:52:43'),
(20, 'Attur', '560064', '2021-01-01 09:53:00', '2021-01-01 09:53:00'),
(21, 'Austin Town', '560047', '2021-01-01 09:53:19', '2021-01-01 09:53:19'),
(22, 'Avalahalli', '560026', '2021-01-01 09:53:37', '2021-01-01 09:53:37'),
(23, 'Avani Sringeri mutt', '560086', '2021-01-01 09:53:53', '2021-01-01 09:53:53');

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
(4, '2020_12_01_171350_create_permission_tables', 2),
(5, '2020_12_18_180537_create_locations_table', 3),
(6, '2020_12_18_180557_create_categories_table', 3),
(10, '2020_12_31_171919_create_businesses_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 6);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create', 'web', '2020-12-01 12:13:46', '2020-12-01 12:13:46'),
(2, 'edit', 'web', '2020-12-01 13:33:37', '2020-12-01 13:33:37'),
(3, 'delete', 'web', '2020-12-01 13:33:47', '2020-12-01 13:33:47'),
(4, 'read', 'web', '2020-12-17 11:12:14', '2020-12-17 11:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'user', 'web', '2020-12-01 14:17:02', '2020-12-01 14:17:02'),
(3, 'admin', 'web', '2020-12-17 11:27:42', '2020-12-17 11:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', NULL, '$2y$10$eWj9/T7mq2KEyf3JKR37yOnJFnJmfOiS47CuHw6foFRMzvy9DiNn.', '12345', 'avatar.jpg', 't4NTRkkXuQ0pOyCJ1St2PJobIfmpIqDVjuRTs86xQxWF7dBUiTGsLl5WOo0Q', '2020-11-24 02:44:07', '2020-12-17 10:36:45'),
(2, 'Varun Deva', 'test@test.in', NULL, '$2y$10$Zbsie53Y9JPI4gJDvbEkv.r8CAmPDQP2h1tUyw8VtXNn8UU7szmcG', NULL, 'avatar.jpg', NULL, '2020-11-24 07:03:33', '2020-11-24 07:03:33'),
(3, 'Varun Deva', 'test@test.co', NULL, '$2y$10$zkkramDylT8GzKqbhrLmMO1LpCGKu9P6melLHqbwFAI8KCP7TG0v.', '9008444205', 'avatar.jpg', NULL, '2020-12-03 12:13:46', '2020-12-03 12:13:46'),
(4, 'Varun Deva', 'varundev23@gmail.com', NULL, '$2y$10$1YNjDsF4Zs2HNgUcb59E8OBlaWnl0INrq1BXDiCuvPKTzj7Cp8ffC', NULL, 'avatar.jpg', NULL, '2020-12-17 10:33:41', '2020-12-17 10:33:41'),
(5, 'Varun Deva', 'hello@varundeva.com', NULL, '$2y$10$2qCiwyfrXL0AkX3s88yAVe0GhJqJtXfJE1KrbIsEafbUO3CvegvY6', NULL, 'avatar.jpg', NULL, '2020-12-18 12:03:15', '2020-12-18 12:03:15'),
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$10$yvAdfUUTIDlnIZcUbHXT/.jE9g6XYNn8Ow5mXTnzXuW.qUI7EyXd2', '123456789', 'avatar.jpg', NULL, '2021-01-09 05:53:07', '2021-01-11 10:58:34'),
(7, 'User', 'user@gmail.com', NULL, '$2y$10$DWUfk1izZ7mlj.N1O9egv.dbxlJEaJJZ8PRPlGNtz660qBjlVwoOu', '123456789', 'avatar.jpg', NULL, '2021-01-09 05:53:38', '2021-01-11 11:01:36'),
(8, 'XYZ', 'abcd@gmail.com', NULL, '$2y$10$UdEVqQDRgwP8AqbLpNBRQ.VeqkUAjRHwiV8hZWtM.une5sn1u88sa', NULL, 'avatar.jpg', NULL, '2021-01-09 06:00:16', '2021-01-09 06:00:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
