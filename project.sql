-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 04:18 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `pswd` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `addr`, `pswd`) VALUES
(1, 'Sunanda Sadhukhan', 'sunandasadhukhan1@gmail.com', '9905491277', 'Kumarwswamy Layout', '99054'),
(2, 'R Ranjith', 'ranjigowda2121@gmail.com', '7019384839', 'Kormangala', '12345'),
(4, 'Siddharth P', 'sid1@gmail.com', '9006028587', 'Mahalaxmi Layout', '12345'),
(5, 'Rini Naskar', 'rini1@gmail.com', '6209218340', 'SRI SAI KRIPA Pg', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `pay_mode` varchar(30) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`name`, `phone`, `addr`, `pay_mode`, `id`) VALUES
('Sunanda Sadhukhan', '9905491277', 'Chitrawani road', 'COD', 1),
('Siddharth Puhan', '9638523698', 'Mahalaxmi Layout', 'COD', 188);

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`product_name`, `product_price`, `product_image`, `id`) VALUES
('Jangostor Shell 20Cm', '400', './upload/1.jpg', 5),
('Lace Murex 18cm', '420', './upload/2.jpg', 8),
('Apple Murex 19cm', '300', './upload/3.jpg', 9),
('2 Layer Necklace', '280', './upload/9.jpg', 10),
('Saankh Locket 5cm ', '150', './upload/10.jpg', 11),
('Single Shell 10cm', '100', './upload/5.jpg', 12),
('3 Gold Shell 8cm', '225', './upload/8.jpg', 13),
('Mollusk Shell 20cm', '350', './upload/7.jpg', 14),
('Wentletrap Shell 13cm', '410', './upload/14.jpg', 15),
('Gorgeous Shell Earring', '240', './upload/12.jpg', 16),
('Coffee Bean Shell', '320', './upload/6.jpg', 17),
('Pointed Sea Shell 11.5cm', '190', './upload/15.jpg', 18),
('Spine Sea Shell 30cm', '800', './upload/4.jpg', 19),
('Shell Necklace Earring Set', '400', './upload/11.jpg', 20),
('Rose Shaped Shell Necklace', '380', './upload/13.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `inquiry` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `email`, `inquiry`, `message`, `id`) VALUES
('Sunanda Sadhukhan', 'sunandasadhukhan1@gmail.com', 'payment', 'Payment done but didnt receive confirmation', 1),
('Rini', 'rini1@gmail.com', 'product', 'Received good product', 2),
('Siddharth Puhan', 'sid2@gmail.com', 'order', 'Order placed but not received yet.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sign2`
--

CREATE TABLE `sign2` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `pswd` varchar(5) NOT NULL,
  `cpswd` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign2`
--

INSERT INTO `sign2` (`id`, `name`, `email`, `phone`, `dob`, `gender`, `addr`, `pswd`, `cpswd`) VALUES
(21, 'Sunanda Sadhukhan', 'sunandasadhukhan1@gmail.com', '9905491277', '2001-01-21', 'Female', 'Chitrawani road', '99054', '99054'),
(22, 'Rini', 'rini1@gmail.com', '9632589632', '2008-12-11', 'Female', '#37, Durga Pg, Kumarswamy Layout, 2nd Cross.', '12345', '12345'),
(23, 'Siddharth Puhan', 'sid2@gmail.com', '9638523698', '2008-12-02', 'Male', 'Mahalaxmi Layout', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign2`
--
ALTER TABLE `sign2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sign2`
--
ALTER TABLE `sign2`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
