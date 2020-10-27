-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 05:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_image` text DEFAULT NULL,
  `sts` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `oders` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quamity` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `final_total` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sell_price` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `cat` int(3) NOT NULL,
  `prod_code` varchar(150) DEFAULT NULL,
  `sts` int(3) NOT NULL DEFAULT 0,
  `uid` int(11) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `role` int(3) NOT NULL DEFAULT 0,
  `address` text DEFAULT NULL,
  `sts` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `mobile`, `role`, `address`, `sts`) VALUES
(1, 'Abdulah', 'Akib', 'skb@mail.com', '202cb962ac59075b964b07152d234b70', '01781545752', 0, '{\r\n  \"street_address\":\"Tejkunipara\",\r\n  \"flatNumber\":\"4-A\",\r\n  \"town\":\"Dhaka\",\r\n  \"zip\":\"1216\"\r\n}', 1),
(2, 'Shakib', 'Nabi', 'skbdevbd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, 0),
(3, 'Faisal', 'Nabi', 'admin@maxprofit.me', '202cb962ac59075b964b07152d234b70', '01781545752', 2, '{\r\n  \"street_address\":\"Tejkunipara\",\r\n  \"flatNumber\":\"4-A\",\r\n  \"town\":\"Dhaka\",\r\n  \"zip\":\"1216\"\r\n}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` text DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sts` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `shop_name`, `shop_address`, `uid`, `sts`) VALUES
(1, 'maxprofit', 'Mirput', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
