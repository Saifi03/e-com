-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 12:10 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email_id`, `password`, `status`, `created`) VALUES
(1, 'sohailsaifi346@gmail.com', '4258', 1, '2023-11-06 05:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_para` text NOT NULL,
  `blog_date` varchar(255) NOT NULL,
  `blog_sm_desc` text NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_image`, `blog_title`, `blog_para`, `blog_date`, `blog_sm_desc`, `status`, `created`) VALUES
(7, NULL, 'Creative WordPress Themes for you', 'Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.\r\n\r\nAdipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!\r\n\r\nVoluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?', '16/11/2023', 'Even the all-powerful Pointing has no control about the blind texts', 1, '2023-11-16 11:24:06'),
(8, NULL, 'Minima laborum magni', 'Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.\r\n\r\nOdit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.\r\n\r\nAdipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!\r\n\r\nVoluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?', '16/11/2023', 'Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro', 1, '2023-11-16 11:58:00'),
(9, 'i1.jpg', 'Minima laborum magni', 'Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro', '16/11/2023', 'Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro', 1, '2023-11-17 02:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_url` varchar(255) DEFAULT NULL,
  `category_parent_id` int(11) NOT NULL DEFAULT '0',
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_url`, `category_parent_id`, `category_name`, `category_description`, `status`, `created`) VALUES
(1, 'bell-pepper.html', 0, 'BELL PEPPER', 'BELL PEPPER', 1, '2023-11-07 01:49:26'),
(2, 'strawberry.html', 0, 'STRAWBERRY', 'STRAWBERRY', 1, '2023-11-07 01:49:44'),
(3, 'fruit-juice.html', 0, 'FRUIT JUICE', 'FRUIT JUICE', 1, '2023-11-07 02:08:25'),
(4, 'tomatoe.html', 0, 'TOMATOE', 'TOMATOE', 1, '2023-11-07 02:48:03'),
(5, 'carrots.html', 0, 'CARROTS', 'CARROTS', 1, '2023-11-08 09:31:26'),
(6, 'brocolli.html', 0, 'BROCOLLI', 'BROCOLLI', 1, '2023-11-08 09:31:38'),
(7, 'mango111.html', 0, 'mango111', 'mango111', 0, '2023-11-09 04:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_description` text NOT NULL,
  `max_discount` int(11) NOT NULL,
  `min_cart_amount` int(11) NOT NULL,
  `expiry_date` datetime NOT NULL,
  `status` tinyint(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_code`, `coupon_title`, `coupon_description`, `max_discount`, `min_cart_amount`, `expiry_date`, `status`, `created`) VALUES
(1, 'FREE100', 'Free Rs. 100/-', 'Purchase 1000 and get Discount Rs.100/-', 100, 100, '2023-11-06 06:33:59', 1, '2023-11-06 13:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `status` tinyint(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_unique_id` varchar(255) DEFAULT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) DEFAULT NULL,
  `order_phone` varchar(255) DEFAULT NULL,
  `order_address` text NOT NULL,
  `order_amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `coupon_discount` varchar(255) DEFAULT NULL,
  `order_status` tinyint(5) NOT NULL,
  `order_payment_status` int(11) DEFAULT '0',
  `order_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_type` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_unique_id`, `order_name`, `order_email`, `order_phone`, `order_address`, `order_amount`, `user_id`, `coupon_code`, `coupon_discount`, `order_status`, `order_payment_status`, `order_created`, `payment_type`) VALUES
(1, NULL, '100 apple', 'sohailsaifi@gmail.com', '7683061022', 'jvhgdufgvbud', 2000, 0, 'free100', '100', 1, 0, '2023-11-07 11:29:09', 0),
(2, NULL, '', '', '', '', 175, 2, NULL, NULL, 2, 0, '2023-11-11 06:12:34', 0),
(3, NULL, '', '', '', '', 175, 2, NULL, NULL, 2, 0, '2023-11-11 06:13:06', 0),
(4, NULL, 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 175, 2, NULL, NULL, 2, 0, '2023-11-11 06:14:05', 0),
(5, 'ORD005', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 175, 2, NULL, NULL, 0, 0, '2023-11-11 06:14:35', 0),
(6, 'ORD006', 'sohail ', 'sohailsaifi346@gmail.com', '07683061022', '9879', 351, 2, NULL, NULL, 2, 0, '2023-11-11 09:57:52', 0),
(7, 'ORD007', 'sohail ', 'sohailsaifi346@gmail.com', '07683061022', '9879', 351, 2, NULL, NULL, 0, 0, '2023-11-11 09:58:06', 0),
(8, 'ORD008', '', '', '', '', 351, 2, NULL, NULL, 0, 0, '2023-11-11 10:42:50', 1),
(9, 'ORD009', '', '', '', '', 351, 2, NULL, NULL, 0, 0, '2023-11-11 10:43:29', 1),
(10, 'ORD0010', '', '', '', '', 351, 2, NULL, NULL, 0, 0, '2023-11-11 10:44:20', 1),
(11, 'ORD0011', '', '', '', '', 351, 2, NULL, NULL, 2, 0, '2023-11-11 10:44:41', 1),
(12, 'ORD0012', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 751, 2, NULL, NULL, 0, 0, '2023-11-12 05:19:09', 1),
(13, 'ORD0013', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 751, 2, NULL, NULL, 0, 0, '2023-11-12 05:19:24', 1),
(14, 'ORD0014', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 751, 2, NULL, NULL, 0, 1, '2023-11-12 05:50:54', 1),
(15, 'ORD0015', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 300, 2, NULL, NULL, 0, 1, '2023-11-13 16:00:31', 1),
(16, 'ORD0016', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 300, 1, NULL, NULL, 0, 0, '2023-11-15 13:39:50', 0),
(17, 'ORD0017', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 300, 1, NULL, NULL, 0, 1, '2023-11-15 13:40:36', 1),
(18, 'ORD0018', 'sohail saifi', 'sohailsaifi346@gmail.com', '07683061022', '9879', 300, 2, NULL, NULL, 0, 1, '2023-11-29 15:34:04', 1),
(19, 'ORD0019', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:47:10', 0),
(20, 'ORD0020', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:47:28', 1),
(21, 'ORD0021', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:48:28', 1),
(22, 'ORD0022', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:48:42', 1),
(23, 'ORD0023', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:48:48', 1),
(24, 'ORD0024', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:48:52', 1),
(25, 'ORD0025', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:48:56', 1),
(26, 'ORD0026', '', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:49:15', 1),
(27, 'ORD0027', '', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:49:40', 1),
(28, 'ORD0028', '', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:49:44', 1),
(29, 'ORD0029', '', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 13:50:49', 1),
(30, 'ORD0030', '', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 0, '2023-12-03 14:11:46', 1),
(31, 'ORD0031', 'sohail', 'sohail@gmail.com', '1234567', 'sdsdsdsd', 420, 1, NULL, NULL, 0, 1, '2023-12-03 14:27:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `item_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_one_price` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`item_id`, `product_name`, `product_one_price`, `product_qty`, `product_price`, `product_id`, `order_id`, `status`, `created`) VALUES
(1, 'mango406', '12', '2', '24', 4, 2, 1, '2023-11-11 06:12:34'),
(2, 'mango23', '151', '1', '151', 6, 2, 1, '2023-11-11 06:12:34'),
(3, 'mango406', '12', '2', '24', 4, 3, 1, '2023-11-11 06:13:06'),
(4, 'mango23', '151', '1', '151', 6, 3, 1, '2023-11-11 06:13:06'),
(5, 'mango406', '12', '2', '24', 4, 4, 1, '2023-11-11 06:14:05'),
(6, 'mango23', '151', '1', '151', 6, 4, 1, '2023-11-11 06:14:05'),
(7, 'mango406', '12', '2', '24', 4, 5, 1, '2023-11-11 06:14:35'),
(8, 'mango23', '151', '1', '151', 6, 5, 1, '2023-11-11 06:14:35'),
(9, 'mango23', '151', '1', '151', 6, 6, 1, '2023-11-11 09:57:52'),
(10, 'mango405', '200', '1', '200', 3, 6, 1, '2023-11-11 09:57:52'),
(11, 'mango23', '151', '1', '151', 6, 7, 1, '2023-11-11 09:58:06'),
(12, 'mango405', '200', '1', '200', 3, 7, 1, '2023-11-11 09:58:06'),
(13, 'mango23', '151', '1', '151', 6, 8, 1, '2023-11-11 10:42:50'),
(14, 'mango405', '200', '1', '200', 3, 8, 1, '2023-11-11 10:42:50'),
(15, 'mango23', '151', '1', '151', 6, 9, 1, '2023-11-11 10:43:29'),
(16, 'mango405', '200', '1', '200', 3, 9, 1, '2023-11-11 10:43:29'),
(17, 'mango23', '151', '1', '151', 6, 10, 1, '2023-11-11 10:44:20'),
(18, 'mango405', '200', '1', '200', 3, 10, 1, '2023-11-11 10:44:20'),
(19, 'mango23', '151', '1', '151', 6, 11, 1, '2023-11-11 10:44:41'),
(20, 'mango405', '200', '1', '200', 3, 11, 1, '2023-11-11 10:44:41'),
(21, 'mango405', '200', '2', '400', 3, 12, 1, '2023-11-12 05:19:09'),
(22, 'Apple', '100', '2', '200', 1, 12, 1, '2023-11-12 05:19:09'),
(23, 'mango23', '151', '1', '151', 6, 12, 1, '2023-11-12 05:19:09'),
(24, 'mango405', '200', '2', '400', 3, 13, 1, '2023-11-12 05:19:24'),
(25, 'Apple', '100', '2', '200', 1, 13, 1, '2023-11-12 05:19:24'),
(26, 'mango23', '151', '1', '151', 6, 13, 1, '2023-11-12 05:19:24'),
(27, 'mango405', '200', '2', '400', 3, 14, 1, '2023-11-12 05:50:54'),
(28, 'Apple', '100', '2', '200', 1, 14, 1, '2023-11-12 05:50:54'),
(29, 'mango23', '151', '1', '151', 6, 14, 1, '2023-11-12 05:50:54'),
(30, 'TOMATOE', '100', '1', '100', 5, 15, 1, '2023-11-13 16:00:31'),
(31, 'PURPLE CABBAGE', '200', '1', '200', 3, 15, 1, '2023-11-13 16:00:31'),
(32, 'PURPLE CABBAGE', '200', '1', '200', 3, 16, 1, '2023-11-15 13:39:50'),
(33, 'TOMATOE', '100', '1', '100', 5, 16, 1, '2023-11-15 13:39:50'),
(34, 'PURPLE CABBAGE', '200', '1', '200', 3, 17, 1, '2023-11-15 13:40:36'),
(35, 'TOMATOE', '100', '1', '100', 5, 17, 1, '2023-11-15 13:40:36'),
(36, 'Carrot', '100', '1', '100', 2, 18, 1, '2023-11-29 15:34:04'),
(37, 'PURPLE CABBAGE', '200', '1', '200', 3, 18, 1, '2023-11-29 15:34:04'),
(38, 'PURPLE CABBAGE', '200', '1', '200', 3, 19, 1, '2023-12-03 13:47:10'),
(39, 'BELL PEPPER', '120', '1', '120', 4, 19, 1, '2023-12-03 13:47:10'),
(40, 'TOMATOE', '100', '1', '100', 5, 19, 1, '2023-12-03 13:47:10'),
(41, 'PURPLE CABBAGE', '200', '1', '200', 3, 20, 1, '2023-12-03 13:47:28'),
(42, 'BELL PEPPER', '120', '1', '120', 4, 20, 1, '2023-12-03 13:47:28'),
(43, 'TOMATOE', '100', '1', '100', 5, 20, 1, '2023-12-03 13:47:28'),
(44, 'PURPLE CABBAGE', '200', '1', '200', 3, 21, 1, '2023-12-03 13:48:28'),
(45, 'BELL PEPPER', '120', '1', '120', 4, 21, 1, '2023-12-03 13:48:28'),
(46, 'TOMATOE', '100', '1', '100', 5, 21, 1, '2023-12-03 13:48:28'),
(47, 'PURPLE CABBAGE', '200', '1', '200', 3, 22, 1, '2023-12-03 13:48:42'),
(48, 'BELL PEPPER', '120', '1', '120', 4, 22, 1, '2023-12-03 13:48:42'),
(49, 'TOMATOE', '100', '1', '100', 5, 22, 1, '2023-12-03 13:48:42'),
(50, 'PURPLE CABBAGE', '200', '1', '200', 3, 23, 1, '2023-12-03 13:48:48'),
(51, 'BELL PEPPER', '120', '1', '120', 4, 23, 1, '2023-12-03 13:48:48'),
(52, 'TOMATOE', '100', '1', '100', 5, 23, 1, '2023-12-03 13:48:48'),
(53, 'PURPLE CABBAGE', '200', '1', '200', 3, 24, 1, '2023-12-03 13:48:52'),
(54, 'BELL PEPPER', '120', '1', '120', 4, 24, 1, '2023-12-03 13:48:52'),
(55, 'TOMATOE', '100', '1', '100', 5, 24, 1, '2023-12-03 13:48:52'),
(56, 'PURPLE CABBAGE', '200', '1', '200', 3, 25, 1, '2023-12-03 13:48:56'),
(57, 'BELL PEPPER', '120', '1', '120', 4, 25, 1, '2023-12-03 13:48:56'),
(58, 'TOMATOE', '100', '1', '100', 5, 25, 1, '2023-12-03 13:48:56'),
(59, 'PURPLE CABBAGE', '200', '1', '200', 3, 26, 1, '2023-12-03 13:49:15'),
(60, 'BELL PEPPER', '120', '1', '120', 4, 26, 1, '2023-12-03 13:49:15'),
(61, 'TOMATOE', '100', '1', '100', 5, 26, 1, '2023-12-03 13:49:15'),
(62, 'PURPLE CABBAGE', '200', '1', '200', 3, 27, 1, '2023-12-03 13:49:40'),
(63, 'BELL PEPPER', '120', '1', '120', 4, 27, 1, '2023-12-03 13:49:40'),
(64, 'TOMATOE', '100', '1', '100', 5, 27, 1, '2023-12-03 13:49:40'),
(65, 'PURPLE CABBAGE', '200', '1', '200', 3, 28, 1, '2023-12-03 13:49:44'),
(66, 'BELL PEPPER', '120', '1', '120', 4, 28, 1, '2023-12-03 13:49:44'),
(67, 'TOMATOE', '100', '1', '100', 5, 28, 1, '2023-12-03 13:49:44'),
(68, 'PURPLE CABBAGE', '200', '1', '200', 3, 29, 1, '2023-12-03 13:50:49'),
(69, 'BELL PEPPER', '120', '1', '120', 4, 29, 1, '2023-12-03 13:50:49'),
(70, 'TOMATOE', '100', '1', '100', 5, 29, 1, '2023-12-03 13:50:49'),
(71, 'PURPLE CABBAGE', '200', '1', '200', 3, 30, 1, '2023-12-03 14:11:46'),
(72, 'BELL PEPPER', '120', '1', '120', 4, 30, 1, '2023-12-03 14:11:46'),
(73, 'TOMATOE', '100', '1', '100', 5, 30, 1, '2023-12-03 14:11:46'),
(74, 'PURPLE CABBAGE', '200', '1', '200', 3, 31, 1, '2023-12-03 14:27:59'),
(75, 'BELL PEPPER', '120', '1', '120', 4, 31, 1, '2023-12-03 14:27:59'),
(76, 'TOMATOE', '100', '1', '100', 5, 31, 1, '2023-12-03 14:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `send` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `mobile_no`, `otp`, `status`, `send`, `created`) VALUES
(1, '7683061022', '5283', 1, '2023-11-10', '2023-11-10 17:24:54'),
(2, '07683061022', '8583', 1, '2023-11-10', '2023-11-10 17:27:34'),
(3, '07683061022', '7079', 1, '2023-11-10', '2023-11-10 17:27:43'),
(4, '07683061022', '8171', 1, '2023-11-10', '2023-11-10 17:30:15'),
(5, '07683061022', '4914', 1, '2023-11-10', '2023-11-10 18:02:47'),
(6, '07683061022', '9683', 0, '2023-11-10', '2023-11-10 18:04:27'),
(7, '07683061022', '6375', 0, '2023-11-10', '2023-11-10 18:05:41'),
(8, '07683061022', '1644', 0, '2023-11-10', '2023-11-10 18:07:58'),
(9, '7683061022', '1113', 0, '2023-11-11', '2023-11-11 01:58:48'),
(10, '07683061022', '2935', 0, '2023-11-11', '2023-11-11 02:36:38'),
(11, '07683061022', '7266', 0, '2023-11-11', '2023-11-11 02:38:21'),
(12, '07683061022', '9931', 0, '2023-11-11', '2023-11-11 02:39:50'),
(13, '07683061022', '2478', 0, '2023-11-11', '2023-11-11 02:45:08'),
(14, '07683061022', '3940', 0, '2023-11-11', '2023-11-11 03:41:24'),
(15, '07683061022', '2203', 1, '2023-11-11', '2023-11-11 05:03:52'),
(16, '07683061022', '1688', 0, '2023-11-11', '2023-11-11 05:04:05'),
(17, '07683061022', '3961', 0, '2023-11-11', '2023-11-11 06:09:59'),
(18, '07683061022', '5949', 0, '2023-11-11', '2023-11-11 06:12:01'),
(19, '07683061022', '2838', 0, '2023-11-11', '2023-11-11 09:51:25'),
(20, '07683061022', '5956', 0, '2023-11-11', '2023-11-11 09:56:53'),
(21, '07683061022', '1550', 0, '2023-11-12', '2023-11-12 05:17:51'),
(22, '07683061022', '2237', 1, '2023-11-13', '2023-11-13 15:55:21'),
(23, '07683061022', '9508', 1, '2023-11-13', '2023-11-13 15:56:50'),
(24, '07683061022', '2883', 1, '2023-11-13', '2023-11-13 15:57:06'),
(25, '07683061022', '9061', 0, '2023-11-13', '2023-11-13 15:57:38'),
(26, '1234567897', '8256', 1, '2023-11-15', '2023-11-15 09:28:14'),
(27, '7683061022', '8351', 0, '2023-11-15', '2023-11-15 13:38:48'),
(28, '07683061022', '4224', 0, '2023-11-29', '2023-11-29 15:33:02'),
(29, '7683061022', '8049', 0, '2023-12-03', '2023-12-03 07:23:06'),
(30, '7683061022', '3402', 0, '2023-12-03', '2023-12-03 13:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `trans_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_info_id` varchar(255) NOT NULL,
  `card_holder_name_id` varchar(255) NOT NULL,
  `merchant_amount` varchar(255) NOT NULL,
  `payment_status` tinyint(4) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `trans_id`, `order_id`, `product_info_id`, `card_holder_name_id`, `merchant_amount`, `payment_status`, `created`) VALUES
(1, '1699768254', '14', 'ORD0014', 'sohail saifi', '751', 1, '2023-11-12 05:51:23'),
(2, '1699891231', '15', 'ORD0015', 'sohail saifi', '300', 1, '2023-11-13 16:01:03'),
(3, '1700055636', '17', 'ORD0017', 'sohail saifi', '300', 1, '2023-11-15 13:41:19'),
(4, '1701272044', '18', 'ORD0018', 'sohail saifi', '300', 1, '2023-11-29 15:35:03'),
(5, '1701613679', '31', 'ORD0031', 'sohail', '420', 1, '2023-12-03 15:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_url` varchar(255) DEFAULT NULL,
  `product_mrp` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_per_price` varchar(255) DEFAULT NULL,
  `product_qty` int(11) NOT NULL,
  `product_per_qty` varchar(255) DEFAULT NULL,
  `product_stock` tinyint(4) NOT NULL DEFAULT '1',
  `product_description` text,
  `product_sm_desc` text,
  `product_meta_title` text,
  `product_meta_keyword` text,
  `product_meta_desc` text,
  `product_status` tinyint(4) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_image`, `product_url`, `product_mrp`, `product_price`, `product_per_price`, `product_qty`, `product_per_qty`, `product_stock`, `product_description`, `product_sm_desc`, `product_meta_title`, `product_meta_keyword`, `product_meta_desc`, `product_status`, `created`) VALUES
(1, 1, 'Apple', NULL, 'apple.html', '120', '100', '100', 100, '100', 1, 'Apple', 'Apple', 'Apple', 'Apple', 'Apple', 1, '2023-11-07 04:05:17'),
(2, 4, 'Carrot', 'product-7.jpg', 'carrot.html', '150', '100', '20', 20, '20', 1, 'It is fresh and very best in quality.', 'Fresh & Tasty', 'Carrot', 'Carrot', 'Carrot', 1, '2023-11-07 06:56:53'),
(3, 1, 'PURPLE CABBAGE', 'product-4.jpg', 'purple-cabbage.html', 'PURPLE CABBAGE', '200', '20', 100, '100', 1, 'It is fresh and very best in quality.', 'PURPLE CABBAGE', 'PURPLE CABBAGE', 'PURPLE CABBAGE', 'PURPLE CABBAGE', 1, '2023-11-07 06:57:51'),
(4, 1, 'BELL PEPPER', 'product-1.jpg', 'bell-pepper.html', '150', '120', '50', 10, '50', 1, 'It is fresh and very best in quality.', 'BELL PEPPER', 'BELL PEPPER', 'BELL PEPPER', 'BELL PEPPER', 1, '2023-11-07 07:05:32'),
(5, 1, 'TOMATOE', 'product-5.jpg', 'tomatoe.html', 'TOMATOE', '100', '25', 10, '22', 1, 'It is fresh and very best in quality.', 'TOMATOE', 'TOMATOE', 'TOMATOE', 'TOMATOE', 1, '2023-11-07 10:11:45'),
(6, 1, 'BROCOLLI', 'product-6.jpg', 'brocolli.html', '200', '151', '80', 20, '80', 1, 'It is fresh and very best in quality.', 'BROCOLLI', 'BROCOLLI', 'BROCOLLI', 'BROCOLLI', 1, '2023-11-09 04:57:26'),
(7, 1, 'mango404', 'i11.jpg', 'mango404.html', 'mango404', 'mango404', 'mango404', 0, 'mango404', 1, 'mango404', 'mango404', 'mango404', 'mango404', 'mango404', 0, '2023-11-24 12:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile_no`, `status`, `created`) VALUES
(1, 'sohail', 'sohailsaifi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '7683061022', 1, '2023-11-06 12:50:06'),
(2, NULL, NULL, NULL, '07683061022', 1, '2023-11-10 17:27:34'),
(3, NULL, NULL, NULL, '1234567897', 1, '2023-11-15 09:28:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
