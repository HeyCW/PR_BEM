-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 05:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pr_bem`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Programming', 'programming', '2023-08-05 11:03:16', '2023-08-05 11:03:16'),
(2, 'Web Design', 'web-design', '2023-08-05 11:03:39', '2023-08-05 11:03:39'),
(3, 'Personal', 'personal', '2023-08-05 11:03:57', '2023-08-05 11:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_05_144528_create_posts_table', 1),
(6, '2023_08_05_174536_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Judul Pertama', 'judul-pertama', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, illo?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consectetur et nisi dolores ut eaque? Cupiditate quasi maxime quis ex harum non nulla sint delectus magnam excepturi! Aliquam facere, hic quasi sequi, nisi accusantium pariatur aspernatur sapiente distinctio ipsam eum voluptas eos repellendus. Sequi molestiae porro perferendis recusandae laudantium vitae corrupti odit optio id error harum dignissimos sunt maiores, quidem distinctio atque accusamus quis exercitationem adipisci dolore ipsum, laboriosam suscipit molestias. Saepe architecto quod, voluptatum recusandae exercitationem fugit illum minima?', NULL, '2023-08-05 11:23:22', '2023-08-05 11:23:22'),
(2, 2, 'Judul Kedua', 'judul-kedua', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, illo?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consectetur et nisi dolores ut eaque? Cupiditate quasi maxime quis ex harum non nulla sint delectus magnam excepturi! Aliquam facere, hic quasi sequi, nisi accusantium pariatur aspernatur sapiente distinctio ipsam eum voluptas eos repellendus. Sequi molestiae porro perferendis recusandae laudantium vitae corrupti odit optio id error harum dignissimos sunt maiores, quidem distinctio atque accusamus quis exercitationem adipisci dolore ipsum, laboriosam suscipit molestias. Saepe architecto quod, voluptatum recusandae exercitationem fugit illum minima?', NULL, '2023-08-05 11:20:17', '2023-08-05 11:20:17'),
(3, 3, 'Judul Ketiga', 'judul-ketiga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, illo?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consectetur et nisi dolores ut eaque? Cupiditate quasi maxime quis ex harum non nulla sint delectus magnam excepturi! Aliquam facere, hic quasi sequi, nisi accusantium pariatur aspernatur sapiente distinctio ipsam eum voluptas eos repellendus. Sequi molestiae porro perferendis recusandae laudantium vitae corrupti odit optio id error harum dignissimos sunt maiores, quidem distinctio atque accusamus quis exercitationem adipisci dolore ipsum, laboriosam suscipit molestias. Saepe architecto quod, voluptatum recusandae exercitationem fugit illum minima?', NULL, '2023-08-05 11:23:42', '2023-08-05 11:23:42'),
(4, 1, 'Judul Keempat', 'judul-keempat', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quidem.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium illo praesentium, libero accusamus quia consectetur atque quod sit, nisi dolorum tenetur ipsam maxime fuga non est possimus! Necessitatibus possimus, eos quibusdam explicabo quidem nesciunt deserunt eius sapiente quisquam magni doloremque vel tenetur iste asperiores incidunt! Tempore, quos perferendis dolore quibusdam quas iste molestiae eius earum? Quasi reprehenderit dolore, voluptatum expedita quaerat natus fugiat culpa obcaecati architecto, non nobis blanditiis! Nisi sequi doloremque nulla illum ab obcaecati nostrum quidem beatae non minus cumque dolorem perferendis dolorum nobis laborum odit maiores dolore temporibus, facilis voluptatibus quis iusto nam illo. Ut, tempore alias.', NULL, '2023-08-05 11:39:49', '2023-08-05 11:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
