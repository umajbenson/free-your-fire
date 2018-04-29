-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: free_your_fire
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `address_user`

CREATE DATABASE free_your_fire_copy;
USE free_your_fire_copy;
--

DROP TABLE IF EXISTS `address_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `address_id` int(10) unsigned NOT NULL,
  `address_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `address_user_user_id_foreign` (`user_id`),
  KEY `address_user_address_id_foreign` (`address_id`),
  CONSTRAINT `address_user_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `address_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_user`
--

LOCK TABLES `address_user` WRITE;
/*!40000 ALTER TABLE `address_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_id` int(10) unsigned NOT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addresses_state_id_foreign` (`state_id`),
  CONSTRAINT `addresses_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Earrings','/images/earrings-crop.jpg','pre-owned-earrings','2018-04-26 04:07:57',NULL),(2,'Necklaces','/images/necklace-crop.jpg','pre-owned-necklaces','2018-04-26 04:07:57',NULL),(3,'Bracelets','/images/bracelet-crop.jpg','pre-owned-bracelets','2018-04-26 04:07:57',NULL),(4,'Rings','/images/rings-crop2.jpg','pre-owned-rings','2018-04-26 04:07:57',NULL),(5,'Brooches','/images/brooches.jpg','pre-owned-brooches','2018-04-26 04:07:57',NULL),(6,'Sets','/images/jewelry-set-crop2.jpg','pre-owned-sets','2018-04-26 04:07:57',NULL),(7,'Five-Dollar','/images/treasure-chest-crop2.jpg','five-dollar','2018-04-26 04:07:57',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likeable_like_counters`
--

DROP TABLE IF EXISTS `likeable_like_counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likeable_like_counters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `likable_id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likeable_like_counters`
--

LOCK TABLES `likeable_like_counters` WRITE;
/*!40000 ALTER TABLE `likeable_like_counters` DISABLE KEYS */;
INSERT INTO `likeable_like_counters` VALUES (1,'1','App\\Models\\Product',1),(3,'2','App\\Models\\Product',1);
/*!40000 ALTER TABLE `likeable_like_counters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likeable_likes`
--

DROP TABLE IF EXISTS `likeable_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likeable_likes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `likable_id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likeable_likes_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likeable_likes`
--

LOCK TABLES `likeable_likes` WRITE;
/*!40000 ALTER TABLE `likeable_likes` DISABLE KEYS */;
INSERT INTO `likeable_likes` VALUES (1,'1','App\\Models\\Product','1','2018-04-26 04:21:34','2018-04-26 04:21:34'),(3,'2','App\\Models\\Product','1','2018-04-26 04:26:49','2018-04-26 04:26:49');
/*!40000 ALTER TABLE `likeable_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(382) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2014_09_10_065447_create_likeable_tables',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2018_03_18_030037_create_roles_table',1),(6,'2018_03_18_030128_create_states_table',1),(7,'2018_03_18_030224_create_users_table',1),(8,'2018_03_18_043131_create_addresses_table',1),(9,'2018_03_18_043358_create_address_user_table',1),(10,'2018_03_18_043446_create_categories_table',1),(11,'2018_03_18_043517_create_products_table',1),(12,'2018_03_18_043542_create_orders_table',1),(13,'2018_03_18_043727_create_order_product_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `purchase_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_product_order_id_foreign` (`order_id`),
  KEY `order_product_product_id_foreign` (`product_id`),
  CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ship_date` datetime NOT NULL,
  `shipping_charge` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `idx_products_name` (`name`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'Amber Glass Teardrop Earrings','These have a graceful shape, small hooks and hang 1 1/2 inches.',16,'/images/products/amber-teardrop-earrings.jpg','PDMQBULL82TE6',NULL,1,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(2,1,'Purple Dangle Earrings','Pretty 1 1/2 inch dangle earrings with small light purple beads.',12,'/images/products/purple-drop-earrings.jpg','SXPUZ7YTHBVBG',NULL,0,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(3,6,'Sterling Silver Flower Jewelry Set','A lovely hand-made set from Ann McKay Studios in Williamsport, PA.',36,'/images/products/silver-jewelry-set.jpg','KRGB3WNNTH76G',NULL,1,1,0,0,0,1,'2018-04-26 04:07:57',NULL),(4,1,'Pewter Earrings','These cute earrings have the Arthur Pepper mark and measure 3/4 inch in diameter.',14,'/images/products/pewter-hoop-earrings.jpg','2PHRZ2DPK63ZC',NULL,1,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(5,1,'Copper Glyph Earrings','5/8 inch diameter hoop/stud earrings wih Native American symbols.',16,'/images/products/copper-glyph-earrings.jpg','VA3PTL73LU5DU',NULL,0,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(6,3,'Sterling Silver Anklet','A simple and elegant 9 inch ankle chain.',10,'/images/products/silver-anklet.jpg','DWK5KRAUWXLZW',NULL,0,1,0,0,0,1,'2018-04-26 04:07:57',NULL),(7,3,'Tiger Eye Bracelet','7 inch bracelet with shimmery tiger eye chips.',10,'/images/products/tiger-eye-bracelet.jpg','JH6RGXSN6JR7U',NULL,0,0,1,0,0,1,'2018-04-26 04:07:57',NULL),(8,2,'Wish Necklace','A glass ball containing three dandelion seeds, commonly known as a wish necklace.',12,'/images/products/wish-necklace-closeup.jpg','Y5RGQCJR598LS',NULL,0,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(9,1,'Copper Drop Earrings','Small round copper earrings with a cute sun bead.',12,'/images/products/copper-drop-earrings.jpg','J2TK43H4SRRTL',NULL,1,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(10,1,'Maroon Triangle Earrings','Fun and lightweight triangle-shaped stud earrings.',10,'/images/products/maroon-triangle-earrings.jpg','5PHLZNT53XC2G',NULL,1,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(11,1,'Blue Topaz Earring (single)','Beautiful topaz and sterling silver stud. One earring only, not a pair.',8,'/images/products/topaz-stud-earring.jpg','PSNPHWG6LJXY4',NULL,0,1,1,0,0,1,'2018-04-26 04:07:57',NULL),(12,2,'Bella Luce Pendant with Chain','3.38 ctw rhodium plated sterling silver pendant and 18 inch chain.',25,'/images/products/bella-luce-pendant.jpg','NUZ3SF9XGHQL4',NULL,0,1,0,0,0,1,'2018-04-26 04:07:57',NULL),(13,2,'Crystal Mala Beads','108 bead hand-knotted crystal mala.',50,'/images/products/crystal-mala.jpg','LXDVW6CGRH2JC',NULL,0,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(14,2,'Sandalwood Half Mala with Hanuman Charm','Pretty half mala from India.',44,'/images/products/crystal-mala.jpg','QAJFNJ6VKBN76',NULL,0,0,0,0,0,1,'2018-04-26 04:07:57',NULL),(15,2,'Freshwater Pearl Necklace','Lovely string of pearls from India.',26,'/images/products/pearl-necklace.jpg','C6XBTV2MFBUV8',NULL,0,0,1,0,0,1,'2018-04-26 04:07:57',NULL),(16,5,'Silvertone Rhinestone Brooch','Dainty vintage filigree brooch, 3/4 inch x 2 inch.',24,'/images/products/vintage-rhinestone-brooch.jpg','4HQ64K698BC3Q',NULL,1,0,0,1,0,1,'2018-04-26 04:07:57',NULL),(17,2,'Silver Sapphire Pendant with Chain','High quality gemstone set in sterling silver. Verified by jeweler to be a sapphire. Previous owner called it a Padparadscha but this has not been verified. 1 3/4 inch x 1 inch.',98,'/images/products/silver-sapphire-pendant.jpg','JL9NKZDCWV4QU',NULL,0,1,1,0,0,1,'2018-04-26 04:07:57',NULL),(18,5,'Sterling Silver Rhinestone Brooch','Pretty vintage brooch with secure rollover clasp.',32,'/images/products/silver-rhinestone-brooch.jpg','8N73Y4BZ9ZVEU',NULL,1,1,0,1,0,1,'2018-04-26 04:07:57',NULL),(19,1,'Onyx and Silver Clip-On Earrings','Lovely vintage clip-ons, marked \'m Germany Sterling\'.',40,'/images/products/vintage-onyx-clip-on-earrings.jpg','ZBJPB3KB3C6DY',NULL,1,1,1,0,0,1,'2018-04-26 04:07:57',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Member','2018-04-26 04:07:57',NULL),(2,'Customer','2018-04-26 04:07:57',NULL),(3,'Member/Customer','2018-04-26 04:07:57',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `states_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (2,'AK'),(1,'AL'),(4,'AR'),(3,'AZ'),(5,'CA'),(6,'CO'),(7,'CT'),(8,'DE'),(9,'FL'),(10,'GA'),(11,'HI'),(15,'IA'),(12,'ID'),(13,'IL'),(14,'IN'),(16,'KS'),(17,'KY'),(18,'LA'),(40,'MA'),(39,'MD'),(19,'ME'),(41,'MI'),(42,'MN'),(44,'MO'),(43,'MS'),(20,'MT'),(27,'NC'),(28,'ND'),(21,'NE'),(23,'NH'),(24,'NJ'),(25,'NM'),(22,'NV'),(26,'NY'),(29,'OH'),(30,'OK'),(31,'OR'),(32,'PA'),(33,'RI'),(34,'SC'),(35,'SD'),(36,'TN'),(37,'TX'),(38,'UT'),(46,'VA'),(45,'VT'),(47,'WA'),(49,'WI'),(48,'WV'),(50,'WY');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `idx_users_name` (`name`),
  KEY `idx_users_email` (`email`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Uma','uma@uma.com','$2y$10$8crhpTBN7mPAT9uVsxDnm.ajq3J.fwA.BgkZe3VPQGI/k1ax/j.x.',NULL,1,1,'V1xDeVBm7yaZeI781RMx1cjFLkp7AV05KQmGLNhKkHgqEakyafE18qQHJWHH','2018-04-26 04:09:31','2018-04-29 05:38:28'),(2,1,'Michael','michael@michael.com','$2y$10$2CxFU.PwhWRYMxf55TRfpO/shaV8KEA2CLmlwNM71ZkmwT7CgBie6',NULL,0,1,'89DepkYXBysGmNKnBowtpuc8QrBeetNrROKsKwwN9xreNHKyYpeBxlt8iFBH','2018-04-29 04:07:08','2018-04-29 04:16:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-28 22:13:07
