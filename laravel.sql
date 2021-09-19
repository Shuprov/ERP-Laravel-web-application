-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:05 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_mid`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_checkout_complete` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `customer_name`, `product_id`, `product_name`, `product_price`, `is_checkout_complete`, `created_at`, `updated_at`) VALUES
(1, 567, 'rasel', 'fdf56', 'laptop', '6600', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'rasel', 'rasel@gmail.com', '01684726517', 'baikf', 'hi sdnkdndolsdefde', '2021-08-20 09:59:57', '2021-08-20 09:59:57'),
(2, 'Rasel', 'ras@gmail.com', '01684726517', 'comunication', 'My net problem', '2021-08-20 10:52:57', '2021-08-20 10:52:57'),
(3, 'Nadia', 'nadia@gmail.com', '01933238112', 'login problem', 'Please Help me..', '2021-08-20 10:55:08', '2021-08-20 10:55:08'),
(4, 'amin', 'amin@gmail.com', '01965332585', 'Product Problem', 'last 1 month my laptop problem', '2021-08-20 23:44:24', '2021-08-20 23:44:24'),
(5, 'mi', 'mi@laptop.com', '01832335221', 'comunication', 'hi.. how are you', '2021-08-21 01:44:10', '2021-08-21 01:44:10'),
(6, 'almas', 'almas@gmail.com', '01684726517', 'login problem', 'rrr', '2021-08-21 04:12:36', '2021-08-21 04:12:36');

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
(4, '2021_06_25_011451_create_rooms_table', 1),
(5, '2021_06_27_185152_create_shops_table', 1),
(6, '2021_06_28_082914_create_contacts_table', 1),
(7, '2021_06_28_162455_create_products_table', 1),
(8, '2021_06_28_185939_create_carts_table', 1),
(9, '2021_06_29_083151_create_reviews_table', 1),
(10, '2021_06_29_131647_create_refands_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `shop_id`, `product_catagory`, `product_name`, `product_price`, `product_details`, `created_at`, `updated_at`) VALUES
(1, 5, 53254, 'laptop', 'asus', '', '', NULL, NULL),
(2, 3, 0, '', '', '', '', NULL, NULL),
(3, 44, 3232, 'monitor', 'hp', '', '', NULL, NULL),
(15, 188, 99, 'Laptop', 'Acer Laptop', '43000/-BDT', 'This good laptop', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `refands`
--

CREATE TABLE `refands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_ethode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refands`
--

INSERT INTO `refands` (`id`, `invoice`, `payment_ethode`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, '563', 'bikash', '01684726517', 'hi..', '2021-08-20 13:50:51', '2021-08-20 13:50:51'),
(2, '563', 'bikash', '01932338112', 'refand plz', '2021-08-20 23:58:52', '2021-08-20 23:58:52'),
(3, '563', 'bikash', '01932338112', 'refand plz', '2021-08-21 00:00:39', '2021-08-21 00:00:39'),
(4, 'evl986', 'bikash', '01932338112', 'refand plz', '2021-08-21 00:01:09', '2021-08-21 00:01:09'),
(5, 'evl6590', 'nagad', '01827101155', 'please refand this product', '2021-08-21 00:01:53', '2021-08-21 00:01:53'),
(6, 'evl659045', 'BIKASH', '02698426585', 'refan plz...', '2021-08-21 00:03:02', '2021-08-21 00:03:02'),
(7, 'dsd5630', 'BIKASH', '01365323652', 'refand plz...', '2021-08-21 01:45:07', '2021-08-21 01:45:07'),
(8, 'erp552', 'BIKASH', '01825819955', 'dd', '2021-08-21 04:13:05', '2021-08-21 04:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `customer_name`, `product_id`, `product_catagory`, `product_review`, `created_at`, `updated_at`) VALUES
(1, 'raselahmed', '12353', 'laptop', 'good', '2021-08-20 22:28:52', '2021-08-20 22:28:52'),
(2, 'Rahman', '123@ff.com', 'Mobile', 'good product', '2021-08-20 22:32:19', '2021-08-20 22:32:19'),
(3, 'Refat', '152', 'Laptop', 'Good quality product..', '2021-08-20 22:37:09', '2021-08-20 22:37:09'),
(4, 'Rahman', '152', 'Laptop', 'Very nice product', '2021-08-20 22:39:12', '2021-08-20 22:39:12'),
(5, 'alamin', 's15', 'Laptop', 'This is very good quality laptop', '2021-08-20 23:33:16', '2021-08-20 23:33:16'),
(6, 'rasel', '123', 'bike', 'good', '2021-08-21 01:40:54', '2021-08-21 01:40:54'),
(7, 'Rahman', '123', 'Mobile', 'ok', '2021-08-21 04:11:44', '2021-08-21 04:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwoard` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `address`, `dob`, `contact_number`, `email`, `passwoard`, `created_at`, `updated_at`) VALUES
(8, 'rasel', 'saver, dhaka', '20april2021', '01684726517', 'rasel@gmail.com', '1234', '2021-08-20 00:30:03', '2021-08-20 00:30:03'),
(9, 'Rasel Ahmed', 'Rajfulbaria, Savar, Dhaka', '2021-08-16', '01684726517', 'alamin@gmail.com', '1234', '2021-08-20 00:38:42', '2021-08-20 00:38:42'),
(10, 'rasel', 'Rajfulbaria, Savar, Dhaka', '2021-08-13', '01713525810', 'alamin@gmail.com', '1456', '2021-08-20 00:42:24', '2021-08-20 00:42:24'),
(11, 'asus', 'dhaka, bangladesh', '1997-04-27', '01580352213', 'rasel@gmail.com', '4567', '2021-08-20 04:13:05', '2021-08-20 04:13:05'),
(12, 'Rasel Ahmed', 'Rajfulbaria, Savar, Dhaka', '2021-08-14', '01684726517', 'refat@gmail.com', '1234', '2021-08-20 04:14:18', '2021-08-20 04:14:18'),
(13, 'hp', 'bongshal, Dhaka', '2021-08-10', '01384763251', 'hp@gmail.com', '987456', '2021-08-20 05:09:09', '2021-08-20 05:09:09'),
(14, 'Rasel Ahmed', 'Alomnagar, dhaka', '2021-08-16', '01713525810', 'alamin@gmail.com', '1234', '2021-08-20 11:38:24', '2021-08-20 11:38:24'),
(15, 'dell', 'east, india', '2021-09-01', '01963998112', 'dell@gmail.com', '1236', '2021-08-21 01:49:41', '2021-08-21 01:49:41'),
(16, 'mi', 'Rajfulbaria, Savar, Dhaka', '2021-08-18', '01684726517', 'rasel@gmail.com', '5252', '2021-08-21 04:10:42', '2021-08-21 04:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `s_name`, `s_address`, `s_product`, `created_at`, `updated_at`) VALUES
(1, 'laptop', 'dddcd', 'dcd333', NULL, NULL),
(2, 'laptop', 'dddcd', 'dcd333', NULL, NULL),
(3, 'Rasel Electronic', 'Savar, Dhaka', '', NULL, NULL),
(4, 'Laptop Gallery', 'IDB, Agargon', '', NULL, NULL),
(5, 'Bajaj Bike', 'Savar, Dhaka', '', NULL, NULL),
(6, '360 Tech Knowledge', 'Dhaka, Bangladesh', '', NULL, NULL);

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refands`
--
ALTER TABLE `refands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `refands`
--
ALTER TABLE `refands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;



-- --------------------------------------------------------

--
-- Table structure for table `brand_table`
--

CREATE TABLE `brand_table` (
  `id` int(100) NOT NULL,
  `brand_name` varchar(34) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_table`
--

INSERT INTO `brand_table` (`id`, `brand_name`, `description`) VALUES
(1, 'Apple', 'US based laptop brand'),
(3, 'Lenovo', 'laptop brand'),
(4, 'One Plus', 'mobile brand'),
(5, 'Samsung', 'mobile brand'),
(6, 'Bose', 'Headphone brand');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` int(100) NOT NULL,
  `category_name` varchar(34) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `category_name`, `description`) VALUES
(1, 'small', 'Ths size is 34-36\"'),
(2, 'medium', 'The size is 38-40\"'),
(4, 'large', 'The size is 48-50\"'),
(5, 'child', 'people from 0-12 years old'),
(6, 'adult', 'People from 19+');

-- --------------------------------------------------------

--
-- Table structure for table `company_table`
--

CREATE TABLE `company_table` (
  `id` int(100) NOT NULL,
  `company_name` varchar(34) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_table`
--

INSERT INTO `company_table` (`id`, `company_name`, `description`) VALUES
(1, 'Walmart', 'American multinational retail corporation'),
(3, 'Apple', 'American multinational technology company'),
(4, 'McKesson Corporation', 'American company distributing pharmaceuticals'),
(5, 'ExxonMobil', 'American multinational oil and gas corporation');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(34) NOT NULL,
  `product_name` varchar(34) NOT NULL,
  `MRP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `product_name`, `MRP`) VALUES
(1, 'Headphone', '5000'),
(2, 'Laptop', '75000'),
(4, 'RTX Graphics Card', '50000'),
(5, 'Bluetooth Speaker', '5000'),
(6, 'wheat', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `store_table`
--

CREATE TABLE `store_table` (
  `id` int(100) NOT NULL,
  `store_name` varchar(34) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_table`
--

INSERT INTO `store_table` (`id`, `store_name`, `description`) VALUES
(1, 'Cat\'s Eye', 'Clothing store'),
(3, 'Rich Man', 'Clothing store'),
(4, 'Infinity', 'Clothing store'),
(5, 'Gadget & Gear', 'Electronics store'),
(6, 'Top Ten', 'Clothing store');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(100) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `password`, `email`, `role`) VALUES
(2, 'ridowan', '123456', 'adnan@gmail.com', 'accountant'),
(4, 'Rasel', '1212121212', 'rasel@gmail.com', 'user'),
(8, 'Durjoy', '21212121', 'durjoy@gmail.com', 'user'),
(11, 'rafi', '231424564565', 'rafi@yahoo.com', 'user'),
(12, 'batman', '1221212', 'sasasas', 'user'),
(15, 'superman', '12121245564645768', 'asif@gmail.com', 'user'),
(16, 'sasa', 'sasas23423432423', 'dsfasdf5345345345', 'user'),
(17, 'Asifur', '323432434', 'asifurshuprov@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_table`
--
ALTER TABLE `brand_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_table`
--
ALTER TABLE `company_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_table`
--
ALTER TABLE `store_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_table`
--
ALTER TABLE `brand_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_table`
--
ALTER TABLE `company_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store_table`
--
ALTER TABLE `store_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `manageusers`
--

CREATE TABLE `manageusers` (
  `id` int(100) NOT NULL,
  `fullname` text NOT NULL,
  `empcode` int(100) NOT NULL,
  `salary` int(200) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Ridowan Ahad', 'ridowan625@gmail.com', 'sadf', 'password'),
(3, 'Rayhan', 'rayhanahmedh2003@gmail.com', 'forget', 'password'),
(4, 'lllllllllllll', '18-37919-2@student.aiub.edu', 'Atp3middlewareproblem', 'Help'),
(5, 'Ridowan Ahad', 'ridowan625@gmail.com', 'sadfasf', 'Help'),
(6, 'Ridowan Ahad', 'ridowan625@gmail.com', 'login error', 'Help'),
(7, 'fgggg', 'rayhanahmedh2003@gmail.com', 'login error', 'password');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `payables`
--

CREATE TABLE `payables` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `payable` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payables`
--

INSERT INTO `payables` (`id`, `name`, `uname`, `password`, `gmail`, `payable`) VALUES
(1, 'Ridowan Ahad', 'ridowan', 12345689, 'safsffdsadf', 0),
(2, 'Ridowan Ahad', 'dfasfasdfdfa', 213164454, 'fsafasdfasdfasdf', 0),
(8, 'Ridowan Ahad', 'ahad', 23424, 'ridowan625@gmail.com', 22),
(9, 'Ridowan Ahad', 'ridowan628@gmail.com', 324234, 'ridowan625@gmail.com', 1221212),
(12, 'Ridowan Ahad', 'ridowan628@gmail.com', 23234234, 'more@fightclub.com', 23423);

-- --------------------------------------------------------

--
-- Table structure for table `profitloss`
--

CREATE TABLE `profitloss` (
  `id` int(100) NOT NULL,
  `projectname` text NOT NULL,
  `profit` int(200) NOT NULL,
  `loss` int(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(100) NOT NULL,
  `projectname` text NOT NULL,
  `shortdescription` text NOT NULL,
  `projectleader` text NOT NULL,
  `projectbudget` int(200) NOT NULL,
  `totalamountspent` int(200) NOT NULL,
  `duration` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectname`, `shortdescription`, `projectleader`, `projectbudget`, `totalamountspent`, `duration`) VALUES
(2, 'Hospital management', 'Atp3 simple erp based online business', 'Ridowan Ahad', 50000, 27000, '2021-07-31 08:59:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `receivables`
--

CREATE TABLE `receivables` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `receivable` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receivables`
--

INSERT INTO `receivables` (`id`, `name`, `uname`, `password`, `gmail`, `receivable`) VALUES
(2, 'Muhammad Ridowan Ahad', 'ahad', '2432342342', 'ridowan625@gmail.com', '3223'),
(6, 'Hala madrid', 'bernabeu', 'papaperez', '3moreuclfornext4seasons@newplayer.com', '777777777777'),
(7, 'ahad', 'ahad', '1111111', 'ridowan625@gmail.com', '777777777777');

-- --------------------------------------------------------

--
-- Table structure for table `timeadd`
--

CREATE TABLE `timeadd` (
  `id` int(100) NOT NULL,
  `projectname` text NOT NULL,
  `previoustime` time(6) NOT NULL,
  `newaddedtime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeadd`
--

INSERT INTO `timeadd` (`id`, `projectname`, `previoustime`, `newaddedtime`) VALUES
(2, 'Hospital management', '22:14:00.000000', '11:16:00.000000'),
(3, 'Shop Management system', '22:14:00.000000', '11:16:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `phone`) VALUES
(1, 'Ridowan Ahad', 'dsfasadfsdfsadf', 'ridowan625@gmail.com', '1111111111111111'),
(2, 'Ridowan Ahad', 'sdfasdfasdfsadfdsa', 'ridowan625@gmail.com', '1111111111111111'),
(3, 'Ridowan Ahad', 'ahad!!!!!!!!!!!!', '18-37919-2@student.aiub.edu', '01621787900000000000'),
(8, 'ahad', 'gdsfgdsfg', 'rayhanahmedh2003@gmail.com', '44444444444'),
(9, 'Rayhan', 'asdfsadfsd', 'rayhanahmedh2003@gmail.com', '1111111111111111'),
(10, 'Rayhan Ahmed', '123', 'rayhanahmedh2003@gmail.com', '22222222222'),
(11, 'Ridowan Ahad', '12345', 'ridowan625@gmail.com', '1111111111111111'),
(12, 'Ahadd', '12345', 'ridowan625@gmail.com', '1111111111111111'),
(13, 'Ridowan Ahad', '12345678', 'ridowan625gmail.com', '016217879000000');

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
-- Indexes for table `manageusers`
--
ALTER TABLE `manageusers`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payables`
--
ALTER TABLE `payables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profitloss`
--
ALTER TABLE `profitloss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivables`
--
ALTER TABLE `receivables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeadd`
--
ALTER TABLE `timeadd`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manageusers`
--
ALTER TABLE `manageusers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payables`
--
ALTER TABLE `payables`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profitloss`
--
ALTER TABLE `profitloss`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receivables`
--
ALTER TABLE `receivables`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timeadd`
--
ALTER TABLE `timeadd`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2021_08_21_022053_create_students_table', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `course`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Ridowan Ahad', 'CSE', 'ridowan625@gmail.com', '1111111111111111', '2021-08-20 21:36:23', '2021-08-20 21:36:23'),
(3, 'Rayhan Ahmed', 'CSEeee', 'rayhan@gmail.com', '2222222222', '2021-08-20 22:48:30', '2021-08-21 01:22:30'),
(4, 'Rayhan Ahmed', 'BBA', 'rayhan@gmail.com', '1111111111111111', '2021-08-20 22:56:02', '2021-08-21 00:10:04'),
(5, 'Innaya kabir', 'BBA', 'ridowan625@gmail.com', '1111111111111111', '2021-08-20 23:58:22', '2021-08-21 00:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



