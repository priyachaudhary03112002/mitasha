-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 07:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'pooja', 'pooja@gmail.com', '$2y$10$Pdtxv3eF5b0YzQJDD3LnKOYOUgtkA0xicG2SJ3XQ7NN6MeyYoQFpK', '2023-02-01 01:20:11', '2023-02-01 01:20:11'),
(3, 'mitasha', 'mitasha3@gmil.com', '$2y$10$WbL/bHjc0yBsw1.K7cLIuuOqwooym7afetwdAcwAfDX1I2NE/rqV2', '2023-02-01 01:24:31', '2023-02-01 01:24:31'),
(4, 'pooja', 'pooja@gmail.com', '$2y$10$v6lqepueXBTwcHd/XlZL6eEMBqUhCLq8PQqE4hqXxXGU6/NaM0N1a', '2023-02-07 02:12:04', '2023-02-07 02:12:04'),
(22, 'zalak', 'zalak.ce3117@gmail.com', '$2y$10$wnPHS19DYPa0.1wMrSQynuxNVm0WOlApzvLDOhI894yhGbGFLeZvC', '2023-02-13 05:30:39', '2023-02-13 05:30:39'),
(23, 'zalak', 'zalak.ce3117@gmail.com', '$2y$10$mkL4K1IMrVcTCaXIU9hgyubDFRy2aEDjvJrbkpRSfqsk8dF3mGE0u', '2023-02-13 05:32:32', '2023-02-13 05:32:32'),
(24, 'zalak', 'zalak.ce3117@gmail.com', '$2y$10$nEtz1UknjbBrbAYu3PStK.6gW4zwNgjQdUwDnYxnW/lz4U1y3ARXC', '2023-02-13 05:33:32', '2023-02-13 05:33:32'),
(25, 'zalak', 'zalak.ce3117@gmail.com', '$2y$10$ltqWYRTWY5Q7A6Q4Nt32ducymoNECSRP6y7L2KpWuDWjYmXnhSj7W', '2023-02-13 05:37:59', '2023-02-13 05:37:59'),
(26, 'zalak', 'zalak.ce3117@gmail.com', '$2y$10$0edZ6WKcIpfKFJWQCYQ5LuWCugTB.ZQdCSr/mVVYiimBV/SiTOo1a', '2023-02-13 05:38:05', '2023-02-13 05:38:05'),
(27, 'mitasha', 'mitashaluhar3@gmail.com', '$2y$10$MH5e2iJFzYHIQdNNxCAb1uAgVdeVrqPfMrr8ruKEMbCNnkYlBK7r2', '2023-02-13 05:42:04', '2023-02-13 05:42:04'),
(28, 'mitasha', 'mitashaluhar3@gmail.com', '$2y$10$NgbZB3G89/8E00DZGhakZOqnNlFvu7gHLdUBWBGEUFQWCADGNnbgC', '2023-02-13 05:42:30', '2023-02-13 05:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'skin', 'While we love to pamper our skin and hair with coconut oil, aloe vera, there’s another humble and underrated ingredient that deserves a moment in the spotlight. Enter: Honey. It’s loaded with antioxidants and is highly hydrating, making it the perfect solution for dryness, inflammation and dehydrated skin.', '2023-01-30 04:30:31', '2023-01-30 04:30:31'),
(3, 'makeup', 'Just like me, many beauty enthusiasts breathed a sigh of relief when the Nykaa Global Store made international beauty brands like Huda Beauty, Charlotte Tilbury, Nudestix, Pixi, Murad, and many more, accessible to the Indian beauty community. Here’s celebrating 5 years of bringing the best of international beauty to your doorstep. To commemorate the day, we’ve curated a list of our best-selling products from our absolute favourite brands of all times.', '2023-01-30 04:33:19', '2023-01-30 04:33:19'),
(4, 'Nail', 'nail art for short nailsIt’s January 2022, and the universe (read COVID) still doesn’t want us to step out of our houses yet. But we’ve figured out various ways to make our lives more interesting while we’re at home. And the easiest and most creative way to add some drama into our otherwise mundane housebound routine? Nail art!When it comes to nail art, long nails tend to get all the attention. But just because you like to keep your nails short, doesn’t mean you don’t get to have fun with them.', '2023-01-30 04:39:40', '2023-01-30 04:39:40'),
(5, 'BEAUTY ESSENTIALS EVERY GIRL NEEDS AT THE OFFICE', '1. HAND CREAM.2.KAJAL.3.BLUSH.4.COMPACT.5.Lip Balm.6.Eye Shadow7.perfume.8.Nail FILE', '2023-01-30 04:49:51', '2023-01-30 04:49:51'),
(6, 'GORGEOUS MAKEUP LOOKS FOR EVERY OCCASION', 'When you look at social media pages flooded with inspiring makeup looks, you get this urge to pick up the brush and try one for your next party.1. Natural Makeup Look For Everyday Wear,2. Wedding Makeup Look,3. Reception Makeup Look,4. Party Makeup Look,5. Makeup For Halloween Party,6. Office Makeup Look,7. Birthday Party Makeup,8. Christmas Makeup Look,9. Diwali Makeup Look,10. No Makeup Look', '2023-01-30 05:19:58', '2023-01-30 05:19:58'),
(7, '5 MAKEUP PRODUCTS YOU NEED TO SPARKLE THIS FESTIVE SEASON', 'It’s that time of the year again. The streets are lit up, rangolis have started taking over pavements and corridors, diyas are all lined up - both at storefronts and at homes. The air smells of ghee and fresh sweets, and the sounds of excited chatter float in through the windows, in anticipation of the festival of lights.Diwali is the time when most Indians go all out—whether it’s with their glittering ensembles or with their beauty look, with sequinned nail art, sparkling makeup and glossy hair. And the best part? It’s only the beginning. Diwali might end, but the festivities continue with the bridal season right on its heels. If you’re looking to go big this season with your makeup (and we suggest you do), here is everything you need in your arsenal to shine your brightest.', '2023-01-30 05:43:26', '2023-01-30 05:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `email`, `mobile`, `address`, `date`, `created_at`, `updated_at`) VALUES
(3, 'mitasha11', 'mitasha21@gmail.com', '094223323', 'thakkkarnagar approach', '2023-02-07', '2023-02-11 07:08:36', '2023-02-11 07:14:12'),
(5, 'zalak', 'zalak@gmail.com', '1221212000', 'Naroda', '2023-02-09', '2023-02-11 07:15:38', '2023-02-11 07:15:38'),
(6, 'riddhi', 'riddhi@gmail.com', '099333131', 'vasana', '2023-02-06', '2023-02-11 07:18:05', '2023-02-11 07:18:05'),
(7, 'priya', 'priya@gmail.com', '001213131', 'narol', '2023-01-13', '2023-02-13 06:29:08', '2023-02-13 06:29:08');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_30_091721_create_blogs_table', 1),
(6, '2023_01_30_165545_create_employees_table', 2),
(7, '2023_02_01_063053_create_admins_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
