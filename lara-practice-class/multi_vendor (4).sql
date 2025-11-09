-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2025 at 02:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_vendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nike', 'nike', 'nike.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(2, 'Adidas', 'adidas', 'adidas.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(3, 'Puma', 'puma', 'puma.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(4, 'Reebok', 'reebok', 'reebok.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(5, 'Apple', 'apple', 'apple.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(6, 'Samsung', 'samsung', 'samsung.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(7, 'HP', 'hp', 'hp.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(8, 'Dell', 'dell', 'dell.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(9, 'Lenovo', 'lenovo', 'lenovo.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(10, 'Sony', 'sony', 'sony.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(11, 'LG', 'lg', 'lg.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(12, 'Asus', 'asus', 'asus.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(13, 'Acer', 'acer', 'acer.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(14, 'Xiaomi', 'xiaomi', 'xiaomi.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(15, 'OnePlus', 'oneplus', 'oneplus.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(16, 'Oppo', 'oppo', 'oppo.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(17, 'Vivo', 'vivo', 'vivo.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(18, 'Realme', 'realme', 'realme.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(19, 'Huawei', 'huawei', 'huawei.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(20, 'Motorola', 'motorola', 'motorola.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-madani@gmail.com|127.0.0.1', 'i:1;', 1762523255),
('laravel-cache-madani@gmail.com|127.0.0.1:timer', 'i:1762523255;', 1762523255),
('laravel-cache-user1@gmail.com|127.0.0.1', 'i:1;', 1762693552),
('laravel-cache-user1@gmail.com|127.0.0.1:timer', 'i:1762693552;', 1762693552);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'electronics', NULL, 'electronics.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(2, 'Fashion', 'fashion', NULL, 'fashion.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(3, 'Shoes', 'shoes', NULL, 'shoes.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(4, 'Mobiles', 'mobiles', NULL, 'mobiles.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(5, 'Laptops', 'laptops', NULL, 'laptops.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(6, 'Groceries', 'groceries', NULL, 'groceries.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(7, 'Beauty', 'beauty', NULL, 'beauty.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(8, 'Sports', 'sports', NULL, 'sports.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(9, 'Toys', 'toys', NULL, 'toys.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(10, 'Books', 'books', NULL, 'books.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(11, 'Home Appliances', 'home-appliances', NULL, 'home.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(12, 'Furniture', 'furniture', NULL, 'furniture.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(13, 'Accessories', 'accessories', NULL, 'accessories.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(14, 'Watches', 'watches', NULL, 'watches.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(15, 'Jewelry', 'jewelry', NULL, 'jewelry.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(16, 'Gaming', 'gaming', NULL, 'gaming.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(17, 'Health', 'health', NULL, 'health.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(18, 'Office', 'office', NULL, 'office.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(19, 'Pet Supplies', 'pet-supplies', NULL, 'pet.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16'),
(20, 'Music', 'music', NULL, 'music.png', 'active', '2025-11-09 13:26:16', '2025-11-09 13:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_amount` decimal(10,2) NOT NULL,
  `vendor_amount` decimal(10,2) NOT NULL,
  `rate` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `order_item_id`, `vendor_id`, `admin_amount`, `vendor_amount`, `rate`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 12.00, 108.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(2, 2, 2, 99.90, 899.10, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(3, 3, 3, 89.90, 809.10, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(4, 4, 4, 75.00, 675.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(5, 5, 5, 3.50, 31.50, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(6, 6, 6, 8.00, 72.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(7, 7, 7, 9.00, 81.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(8, 8, 8, 15.00, 135.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(9, 9, 9, 65.00, 585.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(10, 10, 10, 80.00, 720.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(11, 11, 11, 70.00, 630.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(12, 12, 12, 85.00, 765.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(13, 13, 13, 120.00, 1080.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(14, 14, 14, 25.00, 225.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(15, 15, 15, 4.00, 36.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(16, 16, 16, 35.00, 315.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(17, 17, 17, 37.00, 333.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(18, 18, 18, 40.00, 360.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(19, 19, 19, 95.00, 855.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(20, 20, 20, 65.00, 585.00, 10.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` enum('percentage','fixed') NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `min_order` decimal(10,2) NOT NULL DEFAULT 0.00,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `usage_limit` int(11) NOT NULL DEFAULT 0,
  `status` enum('active','expired') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `delivery_staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `delivery_charge` decimal(10,2) NOT NULL,
  `status` enum('assigned','picked','delivered','failed') NOT NULL DEFAULT 'assigned',
  `assigned_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `receiver_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_01_194405_create_roles_table', 1),
(5, '2025_11_01_200044_create_vendors_table', 1),
(6, '2025_11_01_200049_create_categories_table', 1),
(7, '2025_11_01_200144_create_brands_table', 1),
(8, '2025_11_01_200303_create_products_table', 1),
(9, '2025_11_01_200356_create_product_images_table', 1),
(10, '2025_11_01_200510_create_product_variants_table', 1),
(11, '2025_11_01_200525_create_coupons_table', 1),
(12, '2025_11_01_200536_create_addresses_table', 1),
(13, '2025_11_01_200558_create_orders_table', 1),
(14, '2025_11_01_200629_create_order_items_table', 1),
(15, '2025_11_01_200643_create_payments_table', 1),
(16, '2025_11_01_200657_create_commissions_table', 1),
(17, '2025_11_01_200711_create_payouts_table', 1),
(18, '2025_11_01_200721_create_deliveries_table', 1),
(19, '2025_11_01_200730_create_reviews_table', 1),
(20, '2025_11_01_200743_create_refunds_table', 1),
(21, '2025_11_01_200752_create_notifications_table', 1),
(22, '2025_11_01_200804_create_settings_table', 1),
(23, '2025_11_01_200813_create_wishlists_table', 1),
(24, '2025_11_01_200824_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `shipping_cost` decimal(10,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total` decimal(10,2) NOT NULL,
  `payment_status` enum('pending','paid','failed','refunded') NOT NULL DEFAULT 'pending',
  `order_status` enum('pending','confirmed','processing','shipped','delivered','cancelled','returned') NOT NULL DEFAULT 'pending',
  `order_date` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `vendor_id`, `address_id`, `subtotal`, `shipping_cost`, `discount`, `total`, `payment_status`, `order_status`, `order_date`, `delivered_at`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'ORD001', 1, 1, 1, 200.00, 10.00, 0.00, 210.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(2, 'ORD002', 2, 2, 1, 300.00, 15.00, 0.00, 315.00, 'pending', 'pending', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(3, 'ORD003', 3, 3, 1, 150.00, 5.00, 0.00, 155.00, 'paid', 'shipped', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(4, 'ORD004', 4, 4, 1, 400.00, 20.00, 10.00, 410.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(5, 'ORD005', 5, 5, 1, 500.00, 25.00, 0.00, 525.00, 'pending', 'processing', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(6, 'ORD006', 6, 6, 1, 250.00, 10.00, 0.00, 260.00, 'paid', 'confirmed', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(7, 'ORD007', 7, 7, 1, 320.00, 10.00, 5.00, 325.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(8, 'ORD008', 8, 8, 1, 275.00, 10.00, 0.00, 285.00, 'paid', 'processing', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(9, 'ORD009', 9, 9, 1, 350.00, 15.00, 0.00, 365.00, 'pending', 'pending', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(10, 'ORD010', 10, 10, 1, 600.00, 30.00, 0.00, 630.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(11, 'ORD011', 11, 11, 1, 700.00, 30.00, 0.00, 730.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(12, 'ORD012', 12, 12, 1, 250.00, 10.00, 0.00, 260.00, 'pending', 'processing', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(13, 'ORD013', 13, 13, 1, 300.00, 10.00, 5.00, 305.00, 'paid', 'confirmed', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(14, 'ORD014', 14, 14, 1, 280.00, 10.00, 0.00, 290.00, 'paid', 'shipped', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(15, 'ORD015', 15, 15, 1, 350.00, 10.00, 0.00, 360.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(16, 'ORD016', 16, 16, 1, 220.00, 5.00, 0.00, 225.00, 'paid', 'confirmed', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(17, 'ORD017', 17, 17, 1, 330.00, 10.00, 0.00, 340.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(18, 'ORD018', 18, 18, 1, 280.00, 10.00, 0.00, 290.00, 'pending', 'pending', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(19, 'ORD019', 19, 19, 1, 400.00, 15.00, 0.00, 415.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(20, 'ORD020', 20, 20, 1, 500.00, 20.00, 10.00, 510.00, 'paid', 'delivered', '2025-11-09 19:26:17', NULL, NULL, '2025-11-09 13:26:17', '2025-11-09 13:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `vendor_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 120.00, 120.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(2, 2, 2, 2, 1, 999.00, 999.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(3, 3, 3, 3, 1, 899.00, 899.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(4, 4, 4, 4, 1, 750.00, 750.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(5, 5, 5, 5, 1, 35.00, 35.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(6, 6, 6, 6, 1, 80.00, 80.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(7, 7, 7, 7, 1, 90.00, 90.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(8, 8, 8, 8, 1, 150.00, 150.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(9, 9, 9, 9, 1, 650.00, 650.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(10, 10, 10, 10, 1, 800.00, 800.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(11, 11, 11, 11, 1, 700.00, 700.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(12, 12, 12, 12, 1, 850.00, 850.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(13, 13, 13, 13, 1, 1200.00, 1200.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(14, 14, 14, 14, 1, 250.00, 250.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(15, 15, 15, 15, 1, 40.00, 40.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(16, 16, 16, 16, 1, 350.00, 350.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(17, 17, 17, 17, 1, 370.00, 370.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(18, 18, 18, 18, 1, 400.00, 400.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(19, 19, 19, 19, 1, 950.00, 950.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(20, 20, 20, 20, 1, 650.00, 650.00, '2025-11-09 13:26:17', '2025-11-09 13:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `method` enum('sslcommerz','stripe','paypal','cod') NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `currency` varchar(10) NOT NULL DEFAULT 'BDT',
  `status` enum('pending','success','failed','refunded') NOT NULL DEFAULT 'pending',
  `payment_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payout_method` enum('manual','bank','mobile') NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `status` enum('pending','paid','failed') NOT NULL DEFAULT 'pending',
  `requested_at` datetime NOT NULL,
  `paid_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `unit` varchar(50) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive','draft') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vendor_id`, `category_id`, `brand_id`, `name`, `slug`, `sku`, `price`, `discount_price`, `quantity`, `unit`, `short_description`, `description`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Nike Running Shoes', 'nike-running-shoes', 'SKU001', 120.00, 100.00, 50, 'pair', 'Comfortable running shoes', 'Detailed description here', 'nike_shoes.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(2, 2, 4, 5, 'iPhone 14', 'iphone-14', 'SKU002', 999.00, 950.00, 30, 'pcs', 'Latest Apple iPhone 14', 'Detailed description here', 'iphone.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(3, 2, 5, 6, 'Samsung Galaxy S23', 'samsung-s23', 'SKU003', 899.00, 850.00, 40, 'pcs', 'Latest Galaxy phone', 'Detailed description here', 's23.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(4, 3, 5, 7, 'HP Laptop', 'hp-laptop', 'SKU004', 750.00, 700.00, 25, 'pcs', 'High-performance laptop', 'Detailed description here', 'hp.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(5, 3, 2, 2, 'Adidas T-Shirt', 'adidas-tshirt', 'SKU005', 35.00, 30.00, 100, 'pcs', 'Soft cotton t-shirt', 'Detailed description here', 'adidas.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(6, 4, 3, 3, 'Puma Sneakers', 'puma-sneakers', 'SKU006', 80.00, 75.00, 60, 'pair', 'Trendy sneakers', 'Detailed description here', 'puma.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(7, 5, 1, 4, 'Reebok Sports Shoes', 'reebok-shoes', 'SKU007', 90.00, 85.00, 70, 'pair', 'Durable shoes', 'Detailed description here', 'reebok.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(8, 6, 10, 10, 'Sony Headphones', 'sony-headphones', 'SKU008', 150.00, 130.00, 80, 'pcs', 'Noise-cancelling headphones', 'Detailed description here', 'sony.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(9, 7, 5, 8, 'Dell Inspiron', 'dell-inspiron', 'SKU009', 650.00, 620.00, 20, 'pcs', 'Lightweight laptop', 'Detailed description here', 'dell.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(10, 8, 5, 9, 'Lenovo ThinkPad', 'lenovo-thinkpad', 'SKU010', 800.00, 750.00, 25, 'pcs', 'Business class laptop', 'Detailed description here', 'lenovo.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(11, 9, 4, 14, 'Xiaomi 13', 'xiaomi-13', 'SKU011', 700.00, 670.00, 40, 'pcs', 'Powerful smartphone', 'Detailed description here', 'xiaomi.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(12, 10, 4, 15, 'OnePlus 12', 'oneplus-12', 'SKU012', 850.00, 820.00, 35, 'pcs', 'Flagship killer', 'Detailed description here', 'oneplus.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(13, 11, 6, 12, 'Asus ROG Laptop', 'asus-rog', 'SKU013', 1200.00, 1150.00, 15, 'pcs', 'Gaming laptop', 'Detailed description here', 'rog.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(14, 12, 1, 13, 'Acer Monitor', 'acer-monitor', 'SKU014', 250.00, 230.00, 50, 'pcs', 'Full HD monitor', 'Detailed description here', 'acer.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(15, 13, 7, 2, 'Adidas Shorts', 'adidas-shorts', 'SKU015', 40.00, 35.00, 100, 'pcs', 'Comfort fit shorts', 'Detailed description here', 'shorts.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(16, 14, 3, 16, 'Oppo A78', 'oppo-a78', 'SKU016', 350.00, 330.00, 45, 'pcs', 'Affordable smartphone', 'Detailed description here', 'oppo.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(17, 15, 3, 17, 'Vivo V29', 'vivo-v29', 'SKU017', 370.00, 350.00, 55, 'pcs', 'Selfie expert phone', 'Detailed description here', 'vivo.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(18, 16, 4, 18, 'Realme 12 Pro', 'realme-12-pro', 'SKU018', 400.00, 380.00, 45, 'pcs', 'Budget smartphone', 'Detailed description here', 'realme.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(19, 17, 4, 19, 'Huawei P60', 'huawei-p60', 'SKU019', 950.00, 900.00, 20, 'pcs', 'High-end smartphone', 'Detailed description here', 'huawei.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17'),
(20, 18, 4, 20, 'Motorola Edge 40', 'motorola-edge40', 'SKU020', 650.00, 620.00, 25, 'pcs', 'Stylish phone', 'Detailed description here', 'moto.jpg', 'active', '2025-11-09 13:26:17', '2025-11-09 13:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`) VALUES
(1, 14, 'image_14.jpg'),
(2, 15, 'image_15.jpg'),
(3, 5, 'image_5.jpg'),
(4, 13, 'image_13.jpg'),
(5, 9, 'image_9.jpg'),
(6, 4, 'image_4.jpg'),
(7, 19, 'image_19.jpg'),
(8, 2, 'image_2.jpg'),
(9, 10, 'image_10.jpg'),
(10, 20, 'image_20.jpg'),
(11, 1, 'image_1.jpg'),
(12, 12, 'image_12.jpg'),
(13, 16, 'image_16.jpg'),
(14, 6, 'image_6.jpg'),
(15, 18, 'image_18.jpg'),
(16, 7, 'image_7.jpg'),
(17, 3, 'image_3.jpg'),
(18, 8, 'image_8.jpg'),
(19, 17, 'image_17.jpg'),
(20, 11, 'image_11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `variant_type` varchar(255) NOT NULL,
  `variant_name` varchar(255) NOT NULL,
  `additional_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `stock` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `variant_type`, `variant_name`, `additional_price`, `stock`) VALUES
(1, 14, 'Size', 'Default', 0.00, 100),
(2, 15, 'Size', 'Default', 0.00, 100),
(3, 5, 'Size', 'Default', 0.00, 100),
(4, 13, 'Size', 'Default', 0.00, 100),
(5, 9, 'Size', 'Default', 0.00, 100),
(6, 4, 'Size', 'Default', 0.00, 100),
(7, 19, 'Size', 'Default', 0.00, 100),
(8, 2, 'Size', 'Default', 0.00, 100),
(9, 10, 'Size', 'Default', 0.00, 100),
(10, 20, 'Size', 'Default', 0.00, 100),
(11, 1, 'Size', 'Default', 0.00, 100),
(12, 12, 'Size', 'Default', 0.00, 100),
(13, 16, 'Size', 'Default', 0.00, 100),
(14, 6, 'Size', 'Default', 0.00, 100),
(15, 18, 'Size', 'Default', 0.00, 100),
(16, 7, 'Size', 'Default', 0.00, 100),
(17, 3, 'Size', 'Default', 0.00, 100),
(18, 8, 'Size', 'Default', 0.00, 100),
(19, 17, 'Size', 'Default', 0.00, 100),
(20, 11, 'Size', 'Default', 0.00, 100);

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE `refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `reason` text NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` enum('requested','approved','rejected','refunded') NOT NULL DEFAULT 'requested',
  `requested_at` datetime NOT NULL,
  `refunded_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Adnmin', NULL, NULL),
(2, 'Vendor', NULL, NULL),
(3, 'Customaer', NULL, NULL),
(4, 'delivery boy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('haLnczdGbSJnk9AuPEbge7E90I2rQMxs5FLjG1EQ', 23, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV3VZVmtwcWxvRzMxS3RGUGxuRXNGWnMzRFc0UDBIQmU5Tk9adU5RUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjM7fQ==', 1762694902),
('xO3RUnrfZNHipmkMIkKkY1qPskDbcw26q6hl1ais', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWXRCWkRmMHo0NUVIaW5kWlJ3dThnZFNMdjRYanZZTFZ0S2tLRTU4QyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2Vycy9jcmVhdGUiO3M6NToicm91dGUiO3M6MTI6InVzZXJzLmNyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1762615861),
('zEGPRZkLJVd00Bh8U0D00sRVnidD9LhZfKb7gLat', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMXRPcXJIcUpyWkkyOWVpS0Q5WTgwS3lmU1BLbld0TXBiR2tGaERaOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1762546543);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `type` enum('general','payment','email','commission') NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive','banned') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `photo`, `role_id`, `email_verified_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Madani', 'mada@gmail.com', NULL, '$2y$12$68aDYtkQP1E9uJPi8xFWlev5gGhhWQ.lKkb2BxlyRxRrx3A6xtRxO', NULL, 1, NULL, 'active', NULL, '2025-11-07 07:46:05', '2025-11-07 07:46:05'),
(2, 'SOhel', 'user1@gmail.com', '01710000001', '123123123', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(3, 'User 2', 'user2@example.com', '01710000002', '$2y$10$examplehash2', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(4, 'User 3', 'user3@example.com', '01710000003', '$2y$10$examplehash3', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(5, 'User 4', 'user4@example.com', '01710000004', '$2y$10$examplehash4', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(6, 'User 5', 'user5@example.com', '01710000005', '$2y$10$examplehash5', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(7, 'User 6', 'user6@example.com', '01710000006', '$2y$10$examplehash6', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(8, 'User 7', 'user7@example.com', '01710000007', '$2y$10$examplehash7', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(9, 'User 8', 'user8@example.com', '01710000008', '$2y$10$examplehash8', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(10, 'User 9', 'user9@example.com', '01710000009', '$2y$10$examplehash9', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(11, 'User 10', 'user10@example.com', '01710000010', '$2y$10$examplehash10', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(12, 'User 11', 'user11@example.com', '01710000011', '$2y$10$examplehash11', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(13, 'User 12', 'user12@example.com', '01710000012', '$2y$10$examplehash12', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(14, 'User 13', 'user13@example.com', '01710000013', '$2y$10$examplehash13', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(15, 'User 14', 'user14@example.com', '01710000014', '$2y$10$examplehash14', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(16, 'User 15', 'user15@example.com', '01710000015', '$2y$10$examplehash15', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(17, 'User 16', 'user16@example.com', '01710000016', '$2y$10$examplehash16', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(18, 'User 17', 'user17@example.com', '01710000017', '$2y$10$examplehash17', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(19, 'User 18', 'user18@example.com', '01710000018', '$2y$10$examplehash18', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(20, 'User 19', 'user19@example.com', '01710000019', '$2y$10$examplehash19', NULL, 1, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(21, 'User 20', 'user20@example.com', '01710000020', '$2y$10$examplehash20', NULL, 2, NULL, 'active', NULL, '2025-11-08 15:26:44', '2025-11-08 15:26:44'),
(22, 'Sohel Rana', 'sohel@gmail.com', '015875985445', '123123123', NULL, 2, NULL, 'active', NULL, NULL, NULL),
(23, 'Sohel Rana', 'admin@gmail.com', NULL, '$2y$12$GAImjIDs1GYAohDacTpxqO00ZDlmh/Bkzbii1uTjfWhvd44hi2dcm', NULL, 2, NULL, 'active', NULL, '2025-11-09 07:16:04', '2025-11-09 07:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shop_name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `business_email` varchar(255) DEFAULT NULL,
  `business_phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `commission_rate` decimal(5,2) NOT NULL DEFAULT 0.00,
  `status` enum('pending','approved','rejected','suspended') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
