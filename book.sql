-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2024 at 08:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--
CREATE DATABASE IF NOT EXISTS `book` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `book`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_products`
--

CREATE TABLE `admin_products` (
  `id` bigint UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,0) DEFAULT NULL,
  `percent` decimal(5,0) DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_products`
--

INSERT INTO `admin_products` (`id`, `author`, `title`, `price`, `percent`, `main_image`, `created_at`, `updated_at`, `category_id`, `brand_id`) VALUES
(3, 'Author 1', 'Time Travel', '30', '60', 'storage/products/Q857ZhbEeB.jpg', '2023-12-12 14:30:37', '2024-01-27 13:22:58', '0', 7),
(4, 'Author 2', 'Winter', '25', '20', 'C:\\Users\\cinar\\AppData\\Local\\Temp\\php8091.tmp', '2023-12-12 14:33:27', '2024-01-27 13:23:12', '0', 7),
(6, 'Author 3', 'You', '25', '60', 'storage/products/ogPAy3S3u5.jpg', '2023-12-12 14:34:29', '2024-01-27 13:25:14', '0', 7),
(7, 'Author 4', 'Feel', '25', '60', 'storage/products/VynpUGZ688.jpg', '2023-12-12 14:48:07', '2024-01-27 13:26:34', '19', 7),
(8, 'Author 5', 'Travel', '25', '60', 'storage/products/ioXrg5VHhe.jpg', '2023-12-12 14:49:14', '2024-01-27 13:27:08', '21', 7),
(9, 'Author 6', 'Power', '25', '10', 'storage/products/wEnsw0X2PX.jpg', '2023-12-12 14:49:47', '2024-01-27 13:28:03', '21', 7),
(10, 'Author 7', 'Title 5', '25', '30', 'storage/products/ZKkcyIbYTe.jpg', '2023-12-12 14:52:40', '2024-01-27 13:28:46', '22', 7),
(11, 'Author 8', 'Grow', '25', '40', 'storage/products/XFIRpQvpBr.jpg', '2023-12-12 14:54:00', '2024-01-27 13:29:25', '20', 7),
(12, 'Author 9', 'Discover', '25', '20', 'storage/products/AEE6fU921v.jpg', '2023-12-12 14:55:00', '2024-01-27 13:30:01', '17', 7),
(13, 'Author 10', 'Title 2', '52', '20', 'storage/products/AN9dAq7PWW.jpg', '2023-12-23 07:00:31', '2024-01-27 13:31:00', '18', 7),
(14, 'Carl', 'Child', '25', '12', 'storage/products/cVYSb5bGj6.jpg', '2024-01-13 10:54:30', '2024-01-27 13:31:49', '22', 7),
(15, 'Author 11', 'Title 11', '50', '10', 'storage/products/J416GU7sOD.jpg', '2024-01-26 07:20:02', '2024-01-27 13:33:53', '17', 4),
(16, 'conapaho@mailinator.com', 'gynatur@mailinator.com', '35', '20', 'storage/products/atJ9NNGyih.jpg', '2024-02-02 04:29:16', '2024-02-02 04:29:17', '14', NULL),
(17, 'Author 9', 'title 9', '45', '10', 'storage/products/GYGEMnwjIV.jpg', '2024-02-04 05:34:56', '2024-02-04 05:34:57', '16', NULL),
(18, 'author 12', 'title 12', '58', '10', 'storage/products/hTJ2geoOqT.jpg', '2024-02-05 03:09:29', '2024-02-05 03:09:30', '16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `status`, `brand_id`, `created_at`, `updated_at`) VALUES
(4, '{\"az\":\"az\",\"en\":\"en\",\"ru\":\"ru\"}', '{\"az\":\"az\",\"en\":\"en\",\"ru\":\"ru\"}', 0, 0, '2023-12-28 08:24:22', '2024-01-03 09:52:20'),
(6, '{\"az\":\"az\",\"en\":\"en\",\"ru\":\"ru\"}', '{\"az\":\"az\",\"en\":\"en\",\"ru\":\"ru\"}', 1, 0, '2024-01-11 07:07:35', '2024-01-11 07:07:35'),
(7, '{\"az\":\"Usaq\",\"en\":\"Child\",\"ru\":\"rebionok\"}', '{\"az\":\"usaq\",\"en\":\"child\",\"ru\":\"rebionok\"}', 0, 0, '2024-01-11 07:16:30', '2024-01-11 07:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`, `category_id`, `image`) VALUES
(14, '{\"az\":\"INCESENET\",\"en\":\"ART & PHOTOGRAPHY\",\"ru\":\"\\u0418\\u0421\\u041a\\u0423\\u0421\\u0421\\u0422\\u0412\\u041e \\u0418 \\u0424\\u041e\\u0422\\u041e\\u0413\\u0420\\u0410\\u0424\\u0418\\u042f\"}', '{\"az\":\"incesenet\",\"en\":\"art-photography\",\"ru\":\"iskusstvo-i-fotografiia\"}', 1, '2024-01-20 09:05:47', '2024-01-29 04:31:44', 0, NULL),
(15, '{\"az\":\"USAQ KITABI\",\"en\":\"CHILDIREN\'S\",\"ru\":\"\\u041a\\u041d\\u0418\\u0413\\u0410 \\u0425\\u0418\\u041b\\u042c\\u0414\\u0418\\u0420\\u0415\\u041d\\u0410\"}', '{\"az\":\"usaq-kitabi\",\"en\":\"childirens\",\"ru\":\"kniga-xildirena\"}', 1, '2024-01-20 09:07:23', '2024-02-05 03:08:45', 0, NULL),
(16, '{\"az\":\"B\\u0130OQRAF\\u0130YALAR\",\"en\":\"BIOGRAPHIES\",\"ru\":\"\\u0411\\u0418\\u041e\\u0413\\u0420\\u0410\\u0424\\u0418\\u0418\"}', '{\"az\":\"bioqrafiyalar\",\"en\":\"biographies\",\"ru\":\"biografii\"}', 1, '2024-01-20 09:08:21', '2024-01-20 09:08:21', 0, NULL),
(17, '{\"az\":\"Usaq\",\"en\":\"Child\",\"ru\":\"ru\"}', '{\"az\":\"usaq\",\"en\":\"child\",\"ru\":\"ru\"}', 1, '2024-01-26 07:35:45', '2024-01-26 07:50:41', 14, NULL),
(18, '{\"az\":\"Edebiyyat\",\"en\":\"Literature\",\"ru\":\"\\u043b\\u0438\\u0442\\u0435\\u0440\\u0430\\u0442\\u0443\\u0440\\u0430\"}', '{\"az\":\"edebiyyat\",\"en\":\"literature\",\"ru\":\"literatura\"}', 1, '2024-01-26 09:09:44', '2024-01-26 09:09:44', 16, NULL),
(19, '{\"az\":\"Roman\",\"en\":\"Novel\",\"ru\":\"\\u0420\\u043e\\u043c\\u0430\\u043d\"}', '{\"az\":\"roman\",\"en\":\"novel\",\"ru\":\"roman\"}', 1, '2024-01-27 12:59:49', '2024-01-27 12:59:49', 16, NULL),
(20, '{\"az\":\"Komik\",\"en\":\"Comic\",\"ru\":\"\\u041a\\u043e\\u043c\\u0438\\u043a\\u0441\"}', '{\"az\":\"komik\",\"en\":\"comic\",\"ru\":\"komiks\"}', 0, '2024-01-27 13:01:46', '2024-01-27 13:01:46', 15, NULL),
(21, '{\"az\":\"Tarix\",\"en\":\"History\",\"ru\":\"\\u0418\\u0441\\u0442\\u043e\\u0440\\u0438\\u044f\"}', '{\"az\":\"tarix\",\"en\":\"history\",\"ru\":\"istoriia\"}', 1, '2024-01-27 13:02:55', '2024-01-27 13:02:55', 16, NULL),
(22, '{\"az\":\"Nag\\u0131l\",\"en\":\"Tale\",\"ru\":\"\\u0421\\u043a\\u0430\\u0437\\u043a\\u0430\"}', '{\"az\":\"nagil\",\"en\":\"tale\",\"ru\":\"skazka\"}', 1, '2024-01-27 13:04:55', '2024-01-27 13:04:55', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone_number`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Baku', '45678933', 'cinare@gmail.com', '2024-01-22 09:39:45', '2024-02-02 04:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_data`
--

CREATE TABLE `contacts_data` (
  `id` bigint UNSIGNED NOT NULL,
  `con_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_message` text COLLATE utf8mb4_unicode_ci,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts_data`
--

INSERT INTO `contacts_data` (`id`, `con_name`, `con_email`, `con_phone`, `con_message`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Larissa Carney', 'hymydyn@mailinator.com', '+1 (646) 516-7174', 'Voluptates consectet', 'Et tempora assumenda', '2024-01-31 09:26:04', '2024-01-31 09:26:04'),
(2, 'Larissa Carney', 'hymydyn@mailinator.com', '+1 (646) 516-7174', 'Voluptates consectet', 'Et tempora assumenda', '2024-01-31 09:28:10', '2024-01-31 09:28:10'),
(3, 'Larissa Carney', 'hymydyn@mailinator.com', '+1 (646) 516-7174', 'Voluptates consectet', 'Et tempora assumenda', '2024-01-31 09:28:32', '2024-01-31 09:28:32'),
(4, 'Ruth Dawson', 'qygef@mailinator.com', '+1 (907) 468-4961', 'Tempora sunt fugiat', 'Itaque autem dolorum', '2024-02-02 04:03:57', '2024-02-02 04:03:57'),
(5, 'Nerea Good', 'zatub@mailinator.com', '+1 (312) 304-2024', 'Veniam quo cumque f', 'Et hic proident asp', '2024-02-03 05:24:35', '2024-02-03 05:24:35'),
(6, 'Justina Daniels', 'bevu@mailinator.com', '+1 (483) 292-1375', 'Magna dolorem non su', 'Vitae veritatis ea d', '2024-02-03 13:18:06', '2024-02-03 13:18:06'),
(7, 'Fleur Cook', 'buxe@mailinator.com', '+1 (844) 782-8954', 'Facere ipsam unde mo', 'Blanditiis soluta bl', '2024-02-04 05:32:01', '2024-02-04 05:32:01'),
(8, 'Zena Porter', 'hegox@mailinator.com', '+1 (355) 978-6332', 'Fugiat mollitia perf', 'Et excepturi esse co', '2024-02-04 15:11:38', '2024-02-04 15:11:38'),
(9, 'Latifah Maldonado', 'lyjakifyb@mailinator.com', '+1 (308) 141-3773', 'Aliquip commodi expl', 'Dolor do consectetur', '2024-02-05 03:07:11', '2024-02-05 03:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`, `is_main`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 'storage/products_images/vpaWLT9sHt.jpg', 0, '3', '2023-12-13 15:01:18', '2024-01-24 10:15:35'),
(8, 'storage/products_images/IK6LPGHJSi.jpg', 0, '4', '2023-12-17 10:32:13', '2024-01-11 12:09:00'),
(9, NULL, 0, '4', '2023-12-17 10:32:24', '2024-01-11 12:09:00'),
(10, 'storage/products_images/HE2KhpBTOQ.jpg', 0, '5', '2023-12-17 10:34:12', '2024-01-11 12:09:34'),
(11, 'storage/products_images/3KgOm93NI8.png', 0, '9', '2023-12-23 06:59:18', '2024-01-11 12:11:57'),
(12, 'storage/products_images/bEiVY7iQNK.png', 0, '8', '2023-12-23 06:59:36', '2024-01-11 12:11:17'),
(13, 'storage/products_images/FHQqKlt3wE.png', 0, '13', '2023-12-23 07:01:19', '2024-01-27 13:31:08'),
(15, 'storage/products_images/ZH3cSVf6Me.jpg', 0, '2', '2024-01-11 12:03:28', '2024-01-11 12:06:38'),
(16, 'storage/products_images/dxpchxwLHD.jpg', 0, '10', '2024-01-11 12:04:09', '2024-01-11 12:13:16'),
(18, 'storage/products_images/XYX8S3OQIc.jpg', 1, '3', '2024-01-11 12:05:49', '2024-01-24 10:15:35'),
(19, NULL, 0, '2', '2024-01-11 12:06:17', '2024-01-11 12:06:38'),
(20, 'storage/products_images/prnj7xmWEt.jpg', 1, '2', '2024-01-11 12:06:29', '2024-01-11 12:06:38'),
(21, 'storage/products_images/pxtnJhxsv3.jpg', 1, '4', '2024-01-11 12:08:54', '2024-01-11 12:09:00'),
(22, 'storage/products_images/Zv9eilJz4W.jpg', 1, '5', '2024-01-11 12:09:24', '2024-01-11 12:09:34'),
(23, 'storage/products_images/vcF1hRITRQ.jpg', 1, '6', '2024-01-11 12:10:12', '2024-01-11 12:10:22'),
(24, 'storage/products_images/2DddGz4oCm.jpg', 1, '7', '2024-01-11 12:10:42', '2024-01-23 13:09:56'),
(25, 'storage/products_images/gSZq9UTsOB.jpg', 1, '8', '2024-01-11 12:11:08', '2024-01-11 12:11:17'),
(26, 'storage/products_images/L5DxrxarjI.jpg', 1, '9', '2024-01-11 12:11:49', '2024-01-11 12:11:57'),
(27, 'storage/products_images/zQBEOqzqC6.jpg', 1, '10', '2024-01-11 12:13:08', '2024-01-11 12:13:16'),
(28, 'storage/products_images/txNe5FkhKi.jpg', 1, '11', '2024-01-11 12:13:40', '2024-01-11 12:13:48'),
(29, 'storage/products_images/aVWg8WWK67.jpg', 1, '12', '2024-01-11 12:15:19', '2024-01-11 12:15:29'),
(30, 'storage/products_images/DstlvApybx.jpg', 1, '13', '2024-01-11 12:16:01', '2024-01-27 13:31:08'),
(33, 'storage/products_images/8W4eYk7jO6.jpg', 1, '1', '2024-01-11 13:25:04', '2024-01-11 13:25:09'),
(34, 'storage/products_images/8hLAFIcIBb.jpg', 1, '14', '2024-01-13 10:54:51', '2024-01-13 10:54:59'),
(35, 'storage/products_images/segO35kQDy.jpg', 0, '7', '2024-01-24 07:15:18', '2024-01-24 07:15:19'),
(36, 'storage/products_images/IYJdb0D8sq.jpg', 0, '4', '2024-01-24 07:16:05', '2024-01-24 07:16:05'),
(37, 'storage/products_images/IGKc8kTfZM.jpg', 0, '3', '2024-01-24 08:26:31', '2024-01-24 10:15:35'),
(38, 'storage/products_images/lSWTMgBRjQ.jpg', 0, '9', '2024-01-24 08:28:11', '2024-01-24 08:28:11'),
(39, 'storage/products_images/d9RCMSlLjO.jpg', 1, '15', '2024-01-26 07:20:30', '2024-01-26 07:20:38'),
(40, 'storage/products_images/73rCzIvxJ7.jpg', 1, '16', '2024-02-02 04:29:34', '2024-02-02 04:29:43'),
(41, 'storage/products_images/z8XQuc2fIC.jpg', 1, '17', '2024-02-04 05:35:14', '2024-02-04 05:35:22'),
(42, 'storage/products_images/SqQXNSbFzu.jpg', 1, '18', '2024-02-05 03:09:50', '2024-02-05 03:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` int DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `code` varchar(3) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `img`, `country`, `code`) VALUES
(NULL, NULL, 'Azerbaijan', 'az'),
(NULL, NULL, 'English', 'en'),
(NULL, NULL, 'Russian', 'ru');

-- --------------------------------------------------------

--
-- Table structure for table `language_lines`
--

CREATE TABLE `language_lines` (
  `id` bigint UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_lines`
--

INSERT INTO `language_lines` (`id`, `group`, `key`, `text`, `created_at`, `updated_at`) VALUES
(1, 'group', 'ddd', '{\"az\": \"sss\", \"en\": null, \"ru\": null}', '2023-12-26 06:43:38', '2023-12-26 06:43:38'),
(2, 'group', 'key', '{\"az\": null, \"en\": \"text\", \"ru\": null}', '2023-12-26 06:48:16', '2023-12-26 06:48:16'),
(3, 'group', 'key', '{\"az\": \"sss\", \"en\": null, \"ru\": null}', '2024-01-11 07:18:28', '2024-01-11 07:18:28'),
(4, 'book', '123', '{\"az\": null, \"en\": \"winter\", \"ru\": null}', '2024-01-30 11:04:29', '2024-01-30 11:04:29'),
(5, 'book', '123', '{\"az\": \"qis\", \"en\": null, \"ru\": null}', '2024-01-30 11:04:57', '2024-01-30 11:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_22_075824_create_products_table', 1),
(6, '2023_11_26_131719_create_categories_table', 2),
(8, '2023_12_07_130808_insert_is_admin_field_to_users_table', 3),
(9, '2023_12_09_152312_add_image_to_categories_table', 4),
(10, '2023_12_12_162537_create_admin_products_table', 5),
(14, '2023_12_12_190801_create_images_table', 6),
(15, '2023_12_15_130415_create_language_lines_table', 7),
(16, '2023_12_20_182341_create_jobs_table', 8),
(18, '2023_12_26_121656_insert_category_id_to_admin_products_table', 9),
(19, '2023_12_28_101823_create_brands_table', 10),
(23, '2024_01_20_151255_create_wish_items_table', 11),
(24, '2024_01_22_131709_create_contacts_table', 12),
(25, '2024_01_23_174649_create_checkouts_table', 13),
(26, '2024_01_25_095338_create_orders_table', 14),
(27, '2024_01_25_095558_create_order_products_table', 15),
(28, '2024_01_25_132351_create_orders_table', 16),
(29, '2024_01_26_123356_create_searches_table', 17),
(30, '2024_01_31_131619_create_contacts_data_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `total_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderNote` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `firstName`, `lastName`, `companyName`, `countryName`, `email`, `phoneNo`, `address`, `city`, `state`, `zipCode`, `orderNote`, `created_at`, `updated_at`) VALUES
(7, 3, '0.00', 'Nasim', 'Gates', 'Hood Hansen Traders', 'Bangladesh', 'zelaj@mailinator.com', '7441234', 'Deleniti ex qui fugi', 'Et anim quo rerum as', 'Nisi aut corrupti p', '92440', 'Distinctio Iusto re', '2024-01-27 09:56:52', '2024-01-27 09:56:52'),
(8, 3, '0.00', 'Nasim', 'Gates', 'Hood Hansen Traders', 'Bangladesh', 'zelaj@mailinator.com', '7441234', 'Deleniti ex qui fugi', 'Et anim quo rerum as', 'Nisi aut corrupti p', '92440', 'Distinctio Iusto re', '2024-01-27 09:57:34', '2024-01-27 09:57:34'),
(9, 3, '26.62', 'Chinara', 'Taptiqli', 'Adas', 'Japan', 'cinare@gmail.com', '07441234', '567890', 'Baku', 'Hesen Eliyev', '45678', NULL, '2024-01-27 10:26:55', '2024-01-27 10:26:55'),
(10, 3, '75.63', 'Chinara', 'Taptiqli', 'Adas', 'Azerbaijan', 'cinare@gmail.com', '07441234', '567890', 'Baku', 'Hesen Eliyev', '45678', NULL, '2024-01-28 08:07:25', '2024-01-28 08:07:25'),
(11, 3, '69.58', 'Chinara', 'Taptiqli', 'Adas', 'Azerbaijan', 'cinare@gmail.com', '07441234', '567890', 'Baku', 'Hesen Eliyev', '45678', NULL, '2024-01-28 08:08:57', '2024-01-28 08:08:57'),
(12, 3, '75.02', 'Chinara', 'Taptiqli', 'Adas', 'Azerbaijan', 'cinare@gmail.com', '07441234', '567890', 'Baku', 'Hesen Eliyev', '45678', NULL, '2024-01-29 04:29:40', '2024-01-29 04:29:40'),
(13, 3, '51.43', 'Marvin', 'Hester', 'Singleton and Petty Associates', 'Azerbaijan', 'tapi@mailinator.com', '+1 (573) 972-8215', 'Est et quia culpa vo', 'Ipsum eiusmod ea ut', 'Labore magnam est i', '88163', 'Repellendus Suscipi', '2024-01-30 10:55:30', '2024-01-30 10:55:30'),
(14, 3, '50.82', 'Adena', 'Owens', 'Nielsen and Mooney Traders', 'Azerbaijan', 'sumijoqo@mailinator.com', '+1 (876) 979-8276', 'Asperiores ullam sed', 'Officia corrupti ut', 'Aute sit incididunt', '38418', 'Id nostrum in sunt', '2024-01-30 11:10:17', '2024-01-30 11:10:17'),
(15, 35, '76.96', 'Daquan', 'Russo', 'Knight and Cantu Trading', 'Bangladesh', 'puwi@mailinator.com', '+1 (335) 134-8276', 'Aspernatur delectus', 'Iure aut dolor solut', 'Sit ullam sit aliq', '57857', 'Quam enim velit lab', '2024-02-02 04:02:44', '2024-02-02 04:02:44'),
(16, 36, '103.58', 'Brooke', 'Holland', 'Weber and Fitzpatrick Plc', 'Bangladesh', 'dipuzalyd@mailinator.com', '+1 (885) 252-7561', 'Quia voluptatem labo', 'Quisquam nostrud com', 'Natus sed quam id fu', '65144', 'Autem dolorum error', '2024-02-03 05:23:52', '2024-02-03 05:23:52'),
(17, 37, '127.29', 'Veda', 'Soto', 'Velasquez and Cole LLC', 'Bangladesh', 'pidusymuk@mailinator.com', '+1 (745) 412-7347', 'Enim dolore laudanti', 'Quis voluptates nihi', 'Modi saepe sapiente', '30170', 'Eveniet fuga Volup', '2024-02-03 13:17:27', '2024-02-03 13:17:27'),
(18, 38, '133.10', 'Carl', 'Ryan', 'Chandler Whitney Co', 'Bangladesh', 'fusaqim@mailinator.com', '+1 (363) 249-5644', 'Vel reiciendis rerum', 'Doloremque doloremqu', 'Sapiente sint sunt', '52473', 'Sunt vitae ex eos', '2024-02-04 05:31:28', '2024-02-04 05:31:28'),
(19, 39, '102.85', 'Tana', 'Hines', 'Mcgee and Sloan Inc', 'Bangladesh', 'tysejafu@mailinator.com', '+1 (632) 969-7212', 'Fugit vero et molli', 'Dolores aut dolores', 'Sit magna tempore', '23060', 'Qui et aute id ad p', '2024-02-04 15:10:24', '2024-02-04 15:10:24'),
(20, 40, '135.52', 'Dale', 'Hall', 'Newton and Reynolds Plc', 'Bangladesh', 'dalananima@mailinator.com', '+1 (544) 612-4496', 'Exercitation ea sunt', 'Ad optio id qui dol', 'Totam corrupti dolo', '92129', 'Fuga Assumenda ulla', '2024-02-05 03:06:07', '2024-02-05 03:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `qty` int NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 1, '10.00', '2024-01-25 10:21:52', '2024-01-25 10:21:52'),
(2, 2, 6, 1, '10.00', '2024-01-25 10:33:17', '2024-01-25 10:33:17'),
(3, 2, 7, 1, '10.00', '2024-01-25 10:33:17', '2024-01-25 10:33:17'),
(4, 3, 4, 1, '20.00', '2024-01-26 06:30:32', '2024-01-26 06:30:32'),
(5, 4, 4, 1, '20.00', '2024-01-27 09:55:29', '2024-01-27 09:55:29'),
(6, 4, 6, 1, '10.00', '2024-01-27 09:55:29', '2024-01-27 09:55:29'),
(7, 9, 3, 1, '12.00', '2024-01-27 10:26:55', '2024-01-27 10:26:55'),
(8, 9, 11, 1, '10.00', '2024-01-27 10:26:55', '2024-01-27 10:26:55'),
(9, 10, 9, 2, '22.50', '2024-01-28 08:07:25', '2024-01-28 08:07:25'),
(10, 10, 10, 1, '17.50', '2024-01-28 08:07:25', '2024-01-28 08:07:25'),
(11, 11, 9, 1, '22.50', '2024-01-28 08:08:57', '2024-01-28 08:08:57'),
(12, 11, 10, 2, '17.50', '2024-01-28 08:08:57', '2024-01-28 08:08:57'),
(13, 12, 14, 1, '22.00', '2024-01-29 04:29:40', '2024-01-29 04:29:40'),
(14, 12, 12, 2, '20.00', '2024-01-29 04:29:40', '2024-01-29 04:29:40'),
(15, 13, 12, 1, '20.00', '2024-01-30 10:55:30', '2024-01-30 10:55:30'),
(16, 13, 9, 1, '22.50', '2024-01-30 10:55:30', '2024-01-30 10:55:30'),
(17, 14, 14, 1, '22.00', '2024-01-30 11:10:17', '2024-01-30 11:10:17'),
(18, 14, 12, 1, '20.00', '2024-01-30 11:10:17', '2024-01-30 11:10:17'),
(19, 15, 14, 1, '22.00', '2024-02-02 04:02:45', '2024-02-02 04:02:45'),
(20, 15, 13, 1, '41.60', '2024-02-02 04:02:45', '2024-02-02 04:02:45'),
(21, 16, 14, 2, '22.00', '2024-02-03 05:23:52', '2024-02-03 05:23:52'),
(22, 16, 13, 1, '41.60', '2024-02-03 05:23:52', '2024-02-03 05:23:52'),
(23, 17, 13, 2, '41.60', '2024-02-03 13:17:27', '2024-02-03 13:17:27'),
(24, 17, 14, 1, '22.00', '2024-02-03 13:17:27', '2024-02-03 13:17:27'),
(25, 18, 15, 2, '45.00', '2024-02-04 05:31:28', '2024-02-04 05:31:28'),
(26, 18, 12, 1, '20.00', '2024-02-04 05:31:28', '2024-02-04 05:31:28'),
(27, 19, 15, 1, '45.00', '2024-02-04 15:10:24', '2024-02-04 15:10:24'),
(28, 19, 12, 2, '20.00', '2024-02-04 15:10:24', '2024-02-04 15:10:24'),
(29, 20, 15, 2, '45.00', '2024-02-05 03:06:07', '2024-02-05 03:06:07'),
(30, 20, 14, 1, '22.00', '2024-02-05 03:06:07', '2024-02-05 03:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 32, 'Book', 'e68eeb861388d60450c6f12a9435cd0378888e4f79ea12637e63dc53cb767942', '[\"*\"]', NULL, NULL, '2024-01-15 14:12:29', '2024-01-15 14:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `is_active`) VALUES
(1, 'aygun', 'agamedov094@mail.ru', NULL, '$2y$12$uGlpQlNui1rUpQZvhVhb7.fPO2x1C5EPWLzGm0xY4kmQ5uGIrzE7y', 'uBhEyRfNIHQoylQ6BNFEZRWNgj8pIVt3OMtVqEiEJZPEcTUXzHXXjOZEybeW', '2023-11-28 06:59:28', '2023-11-28 06:59:28', '0', 1),
(2, 'Fezilet Hetemquiliyev', 'fazilat77@mail.ru', NULL, '$2y$12$FT1b56pUOM.SngctCKjhk.8GW8rtNU3r.8HAGzJ5CoeHmVJB7TvZG', NULL, '2023-12-05 06:24:21', '2023-12-05 06:24:21', '0', 1),
(3, 'Cinare Taptiqli', 'cinare@gmail.com', NULL, '$2y$12$7ELg/CnUdE7awuSS8QpiCuK4DkRgHb7Yfz0r6GkHNxnWDxjtbqDpy', 'RCZUd8HN7HKuzD8U2hTN4w2VB6vopcOQTZ7MEIU1KklQ25YMnD7b3dLff4S1', '2023-12-07 09:09:38', '2023-12-07 09:09:38', '1', 1),
(4, 'Chinara Tapdiqli', 'cinaretapdiqli32@gmail.com', NULL, '$2y$12$im7VOsOfOA8v4NRnVYQr4uxRuZVnpk/daJPQXOm/8aWJ/mNYeHrTu', NULL, '2023-12-12 06:20:38', '2023-12-12 06:20:38', '0', 1),
(5, 'Fezilet Hetemquiliyev', 'fazilat78@mail.ru', NULL, '$2y$12$Cz7s7Y/NjtFMVmW4hQQCw.hgqOls./OtfdgbWw7cIUu0FkDQ7y82q', NULL, '2023-12-12 08:24:41', '2023-12-12 08:24:41', '0', 1),
(32, 'Cinare', 'cinare32@gmail.com', NULL, '$2y$12$krZu2XHPfinKoknq8tSoJOVOajc4Ju2oue/qs.VUiv9.1RJTS1ky.', NULL, '2024-01-15 14:12:29', '2024-01-15 14:12:29', '0', 1),
(33, 'aygun', 'aytac@gmail.com', NULL, '$2y$12$zcOHB3v5Slq/nv4sf/w0NO0Ch7Je8Q1P89f/9c3zp5UUTZhYZlsle', NULL, '2024-01-24 08:22:26', '2024-01-24 08:22:26', '0', 1),
(34, 'Chinara Tapdiqli', 'cinare18@gmail.com', NULL, '$2y$12$/dDMyxm4Q9ZCNwZHCLyW3uv3iVgeWLGdrOfb1BxHcLzn1bZI/k0c.', NULL, '2024-01-31 08:43:29', '2024-01-31 08:43:29', '0', 1),
(35, 'Honorato Sheppard', 'muzu@mailinator.com', NULL, '$2y$12$.J28bnCSeGcjeH4cXrmi7ekYtH9b92zYTtdmwF313hNzGTc6elAby', NULL, '2024-02-02 03:43:59', '2024-02-02 03:43:59', '0', 1),
(36, 'Shea Mckinney', 'zelitulyr@mailinator.com', NULL, '$2y$12$6IQj.f/yj085cJhWra62Gegpej0fmY7IOWLiP3PO0a55keyh6yGbO', NULL, '2024-02-03 05:19:34', '2024-02-03 05:19:34', '0', 1),
(37, 'Peter Sykes', 'zaxoxijohe@mailinator.com', NULL, '$2y$12$OoR9cXcdgQ/JzcOXDkwY5u11cp1rJWxYPrl4VAb2pFiW9KenDY7/C', NULL, '2024-02-03 13:13:06', '2024-02-03 13:13:06', '0', 1),
(38, 'Kasimir York', 'syrogugaxu@mailinator.com', NULL, '$2y$12$G/fMY2zDXmuB7SDUPNsw1uPnHnko2XIlAxn3oLxerCqvVhGzsiCIO', NULL, '2024-02-04 05:26:49', '2024-02-04 05:26:49', '0', 1),
(39, 'Michael Fulton', 'becycewa@mailinator.com', NULL, '$2y$12$t2d2ayaQY.ewA6ORtwgYhOX1N/ZqXlkmgF0AQXghYOjZgyOF50FOW', NULL, '2024-02-04 15:07:37', '2024-02-04 15:07:37', '0', 1),
(40, 'Macon Alvarez', 'bade@mailinator.com', NULL, '$2y$12$FCmFsv8RawXS5SYnxsNGv.lEyph7k3gIHKICy1RU3gA2aXf4Efzoi', NULL, '2024-02-05 03:02:22', '2024-02-05 03:02:22', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wish_items`
--

CREATE TABLE `wish_items` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_items`
--

INSERT INTO `wish_items` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(10, 3, 9, '2024-01-24 15:56:34', '2024-01-24 15:56:34'),
(12, 3, 6, '2024-01-25 13:33:24', '2024-01-25 13:33:24'),
(13, 3, 11, '2024-01-25 13:37:21', '2024-01-25 13:37:21'),
(14, 3, 14, '2024-01-30 11:13:01', '2024-01-30 11:13:01'),
(15, 3, 13, '2024-01-30 11:13:17', '2024-01-30 11:13:17'),
(17, 35, 11, '2024-02-02 04:05:01', '2024-02-02 04:05:01'),
(18, 36, 14, '2024-02-03 05:22:49', '2024-02-03 05:22:49'),
(19, 37, 14, '2024-02-03 13:15:47', '2024-02-03 13:15:47'),
(20, 37, 13, '2024-02-03 13:19:09', '2024-02-03 13:19:09'),
(21, 38, 14, '2024-02-04 05:32:58', '2024-02-04 05:32:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_products`
--
ALTER TABLE `admin_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_data`
--
ALTER TABLE `contacts_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `language_lines`
--
ALTER TABLE `language_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_lines_group_index` (`group`);

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
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wish_items`
--
ALTER TABLE `wish_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_products`
--
ALTER TABLE `admin_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts_data`
--
ALTER TABLE `contacts_data`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language_lines`
--
ALTER TABLE `language_lines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `wish_items`
--
ALTER TABLE `wish_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_products`
--
ALTER TABLE `admin_products`
  ADD CONSTRAINT `admin_products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
