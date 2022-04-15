-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2022 at 04:56 PM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `te5tread_qcacosts`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_page_settings`
--

CREATE TABLE `front_page_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_page_settings`
--

INSERT INTO `front_page_settings` (`id`, `page`, `title`, `short_description`, `banner_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'home', NULL, 'QCA is an innovative firm that practices exclusively in legal costs Australia-wide and Internationally.', 'homepage-slider-3.png', '2022-03-01 18:30:32', '2022-03-01 18:30:32', NULL),
(2, 'home', NULL, 'QCA is an innovative firm that practices exclusively in legal costs Australia-wide and Internationally.', 'homepage-slider-3.png', '2022-03-01 18:31:10', '2022-03-01 18:31:10', NULL),
(3, 'advices', 'Advices', 'An Incorporated Legal Practice', 'qca-legal.png', '2022-03-01 18:32:23', '2022-03-01 18:32:23', NULL),
(4, 'cost-management', 'Costs Management', 'A unique approach towards costing management with a proven track record of reducing liability and vigorously representing your position', 'cost-management.png', '2022-03-01 18:33:27', '2022-03-01 19:13:52', NULL),
(5, 'costs-drafting', 'Costs Drafting', 'All Australian jurisdictions, our national clients benefit from one provider for any cost matter', 'costs-drafting.png', '2022-03-01 19:14:56', '2022-03-01 19:14:56', NULL),
(6, 'settlement-conference-team', 'Settlement Conference Team', 'A highly specialised team dedicated to successfully resolving high value and complex costs matters at settlement conferences on costs', 'settlement-conference-team.png', '2022-03-01 19:16:45', '2022-03-01 19:16:45', NULL),
(7, 'court-appearances', 'Court Appearances', 'An Incorporated Legal Practice', 'court-appearances.png', '2022-03-01 19:17:34', '2022-03-01 19:17:34', NULL),
(8, 'expert-reports', 'Expert Reports', 'An Incorporated Legal Practice', 'expert-reports.png', '2022-03-01 19:17:53', '2022-03-01 19:17:53', NULL),
(9, 'alternative-costs-resolution', 'Alternative Costs Resolution', 'ACR is an Australia-wide, independent and impartial assessment process of costs.', 'alternative-banner.png', '2022-03-01 19:19:20', '2022-03-01 19:19:20', NULL),
(10, 'cle-seminars', 'CLE Seminars', 'An Incorporated Legal Practice', 'cle-seminars.png', '2022-03-01 19:19:56', '2022-03-01 19:19:56', NULL),
(11, 'instruction-forms', 'Instruction Forms', 'An Incorporated Legal Practice', 'instruction-forms.png', '2022-03-01 19:20:38', '2022-03-01 19:20:38', NULL),
(12, 'contact-us', 'Contact Us', 'Contact Us', 'contact-us.png', '2022-03-01 19:24:57', '2022-03-01 19:24:57', NULL),
(13, 'about-us', 'About Us', 'About Us', 'about-us.png', '2022-03-01 19:25:28', '2022-03-01 19:25:28', NULL),
(14, 'qca-legal', 'QCA Legal', 'An Incorporated Legal Practice', 'qca-legal.png', '2022-03-01 19:26:03', '2022-03-01 19:26:03', NULL),
(15, 'rates', 'Rates', NULL, 'about-us.png', '2022-03-07 02:42:19', '2022-03-07 02:42:19', NULL),
(16, 'terms-and-conditions', 'Terms & Conditions', NULL, 'about-us.png', '2022-03-07 02:42:38', '2022-03-07 02:42:38', NULL),
(17, 'security-policy', 'Security Policy', NULL, 'about-us.png', '2022-03-07 02:42:59', '2022-03-07 02:42:59', NULL),
(18, 'privacy-policy', 'Privacy Policy', NULL, 'about-us.png', '2022-03-07 02:43:18', '2022-03-07 02:43:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_02_24_114923_create_roles_table', 1),
(19, '2022_02_24_115216_create_user_roles_table', 1),
(20, '2022_02_25_072329_add_user_image_field_in_users_table', 1),
(21, '2022_02_28_070240_create_front_page_settings_table', 1),
(22, '2022_03_02_123310_create_jobs_table', 1),
(23, '2022_03_04_094726_create_qna_table', 1),
(24, '2022_03_04_122020_create_qna_favorites_table', 1),
(25, '2022_03_09_102956_add_is_email_verified_column_in_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qna_is_active` tinyint(4) NOT NULL DEFAULT 1,
  `qna_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `qna_subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_jurisdiction` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_question_date` timestamp NULL DEFAULT NULL,
  `qna_question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_answer_date` timestamp NULL DEFAULT NULL,
  `qna_answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qna_can_discuss_further` tinyint(4) NOT NULL DEFAULT 0,
  `qna_available_to_others` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `qna_is_active`, `qna_user_id`, `qna_subject`, `qna_jurisdiction`, `qna_question_date`, `qna_question`, `qna_answer_date`, `qna_answer`, `qna_can_discuss_further`, `qna_available_to_others`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'Personal', 'QLD', '2022-03-04 02:34:37', '<p>Hi,<br />What do I do when I have bla bla bla bla<br /><br />Also what about bla bla bla bla<br />and because of this and that, so this and that<br />bla bla bla bla</p>', NULL, NULL, 0, 0, '2022-03-04 02:34:37', '2022-03-04 02:34:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qna_favorites`
--

CREATE TABLE `qna_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qna_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-03-04 02:31:43', '2022-03-04 02:31:43'),
(2, 'User', '2022-03-04 02:31:43', '2022-03-04 02:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_is_active` tinyint(4) NOT NULL DEFAULT 0,
  `user_is_approved` tinyint(4) NOT NULL DEFAULT 0,
  `user_fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_contact_main` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_contact_mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_initial_notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_datetime_registered` timestamp NULL DEFAULT NULL,
  `user_datetime_lastlogin` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_ip_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password_last_reset_changed` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_is_active`, `user_is_approved`, `user_fname`, `user_lname`, `user_company`, `user_location`, `user_email`, `user_contact_main`, `user_contact_mobile`, `user_initial_notes`, `user_image`, `user_datetime_registered`, `user_datetime_lastlogin`, `user_ip_address`, `user_password`, `user_password_last_reset_changed`, `is_email_verified`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 0, 'Admin', 'Admin', NULL, 'surat', 'admin@admin.com', '4785961235', NULL, NULL, '1646400812.jpg', NULL, NULL, NULL, '$2y$10$tsqc3dgvoPu3s01bGoc1ie8RwgwJ7gHmpZcbfMTzz1tlVtNzQQGw2', NULL, 0, NULL, NULL, '2022-03-04 02:31:44', '2022-03-04 02:33:32', NULL),
(2, 0, 0, 'User', 'Test', NULL, NULL, 'user@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$tsqc3dgvoPu3s01bGoc1ie8RwgwJ7gHmpZcbfMTzz1tlVtNzQQGw2', NULL, 0, NULL, NULL, '2022-03-04 02:31:44', '2022-03-04 02:31:44', NULL),
(3, 0, 0, 'avni', 'patel', 'narola', 'QLD', 'demoavni@yopmail.com', '01478523690', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2022-03-04 02:44:03', '2022-03-04 02:44:03', NULL),
(5, 1, 1, 'fcgf', 'dfgdf', 'dfgdf', 'NT', 'avnipatel@yopmail.com', '4585135363', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-09 02:34:43', '48ec1ccda294b21d7a9a17d14829deadfd9c09cf', '2022-03-09 02:34:10', '2022-03-10 02:29:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-03-04 02:31:44', '2022-03-04 02:31:44'),
(2, 2, 2, '2022-03-04 02:31:44', '2022-03-04 02:31:44'),
(3, 3, 2, '2022-03-04 02:44:03', '2022-03-04 02:44:03'),
(5, 5, 2, '2022-03-09 02:34:10', '2022-03-09 02:34:10');

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
-- Indexes for table `front_page_settings`
--
ALTER TABLE `front_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qna_qna_user_id_foreign` (`qna_user_id`);

--
-- Indexes for table `qna_favorites`
--
ALTER TABLE `qna_favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qna_favorites_qna_id_foreign` (`qna_id`),
  ADD KEY `qna_favorites_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_page_settings`
--
ALTER TABLE `front_page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qna_favorites`
--
ALTER TABLE `qna_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
