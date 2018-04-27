-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 05:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `free_your_fire`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE DATABASE freeyourfire;
USE freeyourfire;

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address_user`
--

CREATE TABLE `address_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address_id` int(10) UNSIGNED NOT NULL,
  `address_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image_path`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Earrings', '/images/earrings-crop.jpg', 'pre-owned-earrings', '2018-04-26 04:07:57', NULL),
(2, 'Necklaces', '/images/necklace-crop.jpg', 'pre-owned-necklaces', '2018-04-26 04:07:57', NULL),
(3, 'Bracelets', '/images/bracelet-crop.jpg', 'pre-owned-bracelets', '2018-04-26 04:07:57', NULL),
(4, 'Rings', '/images/rings-crop2.jpg', 'pre-owned-rings', '2018-04-26 04:07:57', NULL),
(5, 'Brooches', '/images/brooches.jpg', 'pre-owned-brooches', '2018-04-26 04:07:57', NULL),
(6, 'Sets', '/images/jewelry-set-crop2.jpg', 'pre-owned-sets', '2018-04-26 04:07:57', NULL),
(7, 'Five-Dollar', '/images/treasure-chest-crop2.jpg', 'five-dollar', '2018-04-26 04:07:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likeable_likes`
--

CREATE TABLE `likeable_likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `likable_id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likeable_likes`
--

INSERT INTO `likeable_likes` (`id`, `likable_id`, `likable_type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'App\\Models\\Product', '1', '2018-04-26 04:21:34', '2018-04-26 04:21:34'),
(3, '2', 'App\\Models\\Product', '1', '2018-04-26 04:26:49', '2018-04-26 04:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `likeable_like_counters`
--

CREATE TABLE `likeable_like_counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `likable_id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likeable_like_counters`
--

INSERT INTO `likeable_like_counters` (`id`, `likable_id`, `likable_type`, `count`) VALUES
(1, '1', 'App\\Models\\Product', 1),
(3, '2', 'App\\Models\\Product', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(382) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_09_10_065447_create_likeable_tables', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_03_18_030037_create_roles_table', 1),
(6, '2018_03_18_030128_create_states_table', 1),
(7, '2018_03_18_030224_create_users_table', 1),
(8, '2018_03_18_043131_create_addresses_table', 1),
(9, '2018_03_18_043358_create_address_user_table', 1),
(10, '2018_03_18_043446_create_categories_table', 1),
(11, '2018_03_18_043517_create_products_table', 1),
(12, '2018_03_18_043542_create_orders_table', 1),
(13, '2018_03_18_043727_create_order_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ship_date` datetime NOT NULL,
  `shipping_charge` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `purchase_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_button` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` decimal(4,2) DEFAULT NULL,
  `is_vintage` tinyint(1) NOT NULL,
  `is_precious` tinyint(1) NOT NULL,
  `is_gemstone` tinyint(1) NOT NULL,
  `is_rhinestone` tinyint(1) NOT NULL,
  `is_other` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image_path`, `paypal_button`, `weight`, `is_vintage`, `is_precious`, `is_gemstone`, `is_rhinestone`, `is_other`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Amber Glass Teardrop Earrings', 'These have a graceful shape, small hooks and hang 1 1/2 inches.', 16, '/images/products/amber-teardrop-earrings.jpg', 'PDMQBULL82TE6', NULL, 1, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(2, 1, 'Purple Dangle Earrings', 'Pretty 1 1/2 inch dangle earrings with small light purple beads.', 12, '/images/products/purple-drop-earrings.jpg', 'SXPUZ7YTHBVBG', NULL, 0, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(3, 6, 'Sterling Silver Flower Jewelry Set', 'A lovely hand-made set from Ann McKay Studios in Williamsport, PA.', 36, '/images/products/silver-jewelry-set.jpg', 'KRGB3WNNTH76G', NULL, 1, 1, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(4, 1, 'Pewter Earrings', 'These cute earrings have the Arthur Pepper mark and measure 3/4 inch in diameter.', 14, '/images/products/pewter-hoop-earrings.jpg', '2PHRZ2DPK63ZC', NULL, 1, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(5, 1, 'Copper Glyph Earrings', '5/8 inch diameter hoop/stud earrings wih Native American symbols.', 16, '/images/products/copper-glyph-earrings.jpg', 'VA3PTL73LU5DU', NULL, 0, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(6, 3, 'Sterling Silver Anklet', 'A simple and elegant 9 inch ankle chain.', 10, '/images/products/silver-anklet.jpg', 'DWK5KRAUWXLZW', NULL, 0, 1, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(7, 3, 'Tiger Eye Bracelet', '7 inch bracelet with shimmery tiger eye chips.', 10, '/images/products/tiger-eye-bracelet.jpg', 'JH6RGXSN6JR7U', NULL, 0, 0, 1, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(8, 2, 'Wish Necklace', 'A glass ball containing three dandelion seeds, commonly known as a wish necklace.', 12, '/images/products/wish-necklace-closeup.jpg', 'Y5RGQCJR598LS', NULL, 0, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(9, 1, 'Copper Drop Earrings', 'Small round copper earrings with a cute sun bead.', 12, '/images/products/copper-drop-earrings.jpg', 'J2TK43H4SRRTL', NULL, 1, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(10, 1, 'Maroon Triangle Earrings', 'Fun and lightweight triangle-shaped stud earrings.', 10, '/images/products/maroon-triangle-earrings.jpg', '5PHLZNT53XC2G', NULL, 1, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(11, 1, 'Blue Topaz Earring (single)', 'Beautiful topaz and sterling silver stud. One earring only, not a pair.', 8, '/images/products/topaz-stud-earring.jpg', 'PSNPHWG6LJXY4', NULL, 0, 1, 1, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(12, 2, 'Bella Luce Pendant with Chain', '3.38 ctw rhodium plated sterling silver pendant and 18 inch chain.', 25, '/images/products/bella-luce-pendant.jpg', 'NUZ3SF9XGHQL4', NULL, 0, 1, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(13, 2, 'Crystal Mala Beads', '108 bead hand-knotted crystal mala.', 50, '/images/products/crystal-mala.jpg', 'LXDVW6CGRH2JC', NULL, 0, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(14, 2, 'Sandalwood Half Mala with Hanuman Charm', 'Pretty half mala from India.', 44, '/images/products/crystal-mala.jpg', 'QAJFNJ6VKBN76', NULL, 0, 0, 0, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(15, 2, 'Freshwater Pearl Necklace', 'Lovely string of pearls from India.', 26, '/images/products/pearl-necklace.jpg', 'C6XBTV2MFBUV8', NULL, 0, 0, 1, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(16, 5, 'Silvertone Rhinestone Brooch', 'Dainty vintage filigree brooch, 3/4 inch x 2 inch.', 24, '/images/products/vintage-rhinestone-brooch.jpg', '4HQ64K698BC3Q', NULL, 1, 0, 0, 1, 0, 1, '2018-04-26 04:07:57', NULL),
(17, 2, 'Silver Sapphire Pendant with Chain', 'High quality gemstone set in sterling silver. Verified by jeweler to be a sapphire. Previous owner called it a Padparadscha but this has not been verified. 1 3/4 inch x 1 inch.', 98, '/images/products/silver-sapphire-pendant.jpg', 'JL9NKZDCWV4QU', NULL, 0, 1, 1, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(18, 5, 'Sterling Silver Rhinestone Brooch', 'Pretty vintage brooch with secure rollover clasp.', 32, '/images/products/silver-rhinestone-brooch.jpg', '8N73Y4BZ9ZVEU', NULL, 1, 1, 0, 1, 0, 1, '2018-04-26 04:07:57', NULL),
(19, 1, 'Onyx and Silver Clip-On Earrings', 'Lovely vintage clip-ons, marked \'m Germany Sterling\'.', 40, '/images/products/vintage-onyx-clip-on-earrings.jpg', 'ZBJPB3KB3C6DY', NULL, 1, 1, 1, 0, 0, 1, '2018-04-26 04:07:57', NULL),
(21, 2, 'Test Product', 'description', 1100000, '/images/products/bella-luce-pendant.jpg', '34234243234', '19.00', 1, 0, 1, 0, 0, 1, '2018-04-26 04:52:32', '2018-04-26 04:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Member', '2018-04-26 04:07:57', NULL),
(2, 'Customer', '2018-04-26 04:07:57', NULL),
(3, 'Member/Customer', '2018-04-26 04:07:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(2, 'AK'),
(1, 'AL'),
(4, 'AR'),
(3, 'AZ'),
(5, 'CA'),
(6, 'CO'),
(7, 'CT'),
(8, 'DE'),
(9, 'FL'),
(10, 'GA'),
(11, 'HI'),
(15, 'IA'),
(12, 'ID'),
(13, 'IL'),
(14, 'IN'),
(16, 'KS'),
(17, 'KY'),
(18, 'LA'),
(40, 'MA'),
(39, 'MD'),
(19, 'ME'),
(41, 'MI'),
(42, 'MN'),
(44, 'MO'),
(43, 'MS'),
(20, 'MT'),
(27, 'NC'),
(28, 'ND'),
(21, 'NE'),
(23, 'NH'),
(24, 'NJ'),
(25, 'NM'),
(22, 'NV'),
(26, 'NY'),
(29, 'OH'),
(30, 'OK'),
(31, 'OR'),
(32, 'PA'),
(33, 'RI'),
(34, 'SC'),
(35, 'SD'),
(36, 'TN'),
(37, 'TX'),
(38, 'UT'),
(46, 'VA'),
(45, 'VT'),
(47, 'WA'),
(49, 'WI'),
(48, 'WV'),
(50, 'WY');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `phone`, `is_admin`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Uma', 'uma@uma.com', '$2y$10$y42on2QiefDvMlubhr.FaOc9.PAKZnmfZ3Ov0ciIeapXJz6G1vmUy', NULL, 1, 1, 'fWHq94KdKd2N6ZY1iy9u', '2018-04-26 04:09:31', '2018-04-26 04:09:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_state_id_foreign` (`state_id`);

--
-- Indexes for table `address_user`
--
ALTER TABLE `address_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_user_user_id_foreign` (`user_id`),
  ADD KEY `address_user_address_id_foreign` (`address_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `likeable_likes`
--
ALTER TABLE `likeable_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likeable_likes_user_id_index` (`user_id`);

--
-- Indexes for table `likeable_like_counters`
--
ALTER TABLE `likeable_like_counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `states_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address_user`
--
ALTER TABLE `address_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `likeable_likes`
--
ALTER TABLE `likeable_likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likeable_like_counters`
--
ALTER TABLE `likeable_like_counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `address_user`
--
ALTER TABLE `address_user`
  ADD CONSTRAINT `address_user_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `address_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
