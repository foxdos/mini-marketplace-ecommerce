-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2020 at 02:00 PM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_image` text,
  `sts` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_image`, `sts`) VALUES
(1, 'Electronic', 'Mobile', 1),
(2, 'Mobile', 'Mobile', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

DROP TABLE IF EXISTS `oders`;
CREATE TABLE IF NOT EXISTS `oders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(255) NOT NULL,
  `orders` text,
  `note` text,
  `sts` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oders`
--

INSERT INTO `oders` (`id`, `cid`, `orders`, `note`, `sts`) VALUES
(1, 'skb@mail.com', '[{\"id\":\"3\",\"image\":\"WD011\",\"name\":\"Selowar Kamiz\",\"quanity\":2,\"price\":\"320\",\"tprice\":640},{\"id\":\"4\",\"image\":\"MD001\",\"name\":\"Employee Dress\",\"quanity\":1,\"price\":\"400\",\"tprice\":\"400\"}]', 'sadsadas ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `sell_price` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `cat` int(3) NOT NULL,
  `prod_code` varchar(150) DEFAULT NULL,
  `sts` int(3) NOT NULL DEFAULT '0',
  `uid` int(11) DEFAULT NULL,
  `img` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `sell_price`, `unit_price`, `cat`, `prod_code`, `sts`, `uid`, `img`) VALUES
(1, 'Apple TV', 'Apple TV USA', 200, 150, 1, 'MD001', 1, 3, 'MD001'),
(3, 'Selowar Kamiz', 'sdf', 320, 233, 1, 'WD011', 1, 3, 'WD011'),
(4, 'Employee Dress', 'sdsd', 400, 320, 2, 'MD001', 1, 3, 'MD001');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `role` int(3) NOT NULL DEFAULT '0',
  `address` text,
  `sts` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `mobile`, `role`, `address`, `sts`) VALUES
(1, 'Abdulah', 'Akib', 'skb@mail.com', '202cb962ac59075b964b07152d234b70', '01781545752', 0, '{\r\n  \"street_address\":\"Tejkunipara\",\r\n  \"flatNumber\":\"4-A\",\r\n  \"town\":\"Dhaka\",\r\n  \"zip\":\"1216\"\r\n}', 1),
(2, 'Shakib', 'Nabi', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 1, NULL, 0),
(3, 'Faisal', 'Nabi', 'admin@maxprofit.me', '202cb962ac59075b964b07152d234b70', '01781545752', 2, '{\r\n  \"street_address\":\"Tejkunipara\",\r\n  \"flatNumber\":\"4-A\",\r\n  \"town\":\"Dhaka\",\r\n  \"zip\":\"1216\"\r\n}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` text,
  `uid` int(11) NOT NULL,
  `sts` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `shop_name`, `shop_address`, `uid`, `sts`) VALUES
(1, 'maxprofit', 'Mirput', 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
