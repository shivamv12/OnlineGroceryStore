-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 10:30 AM
-- Server version: 5.6.26-enterprise-commercial-advanced-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(200) DEFAULT NULL,
  `act_date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity`, `act_date`) VALUES
(1, 'New Registration done into System by Shivam Verma', '21/July/2017'),
(2, 'Some Products are purchased by Shivam Verma', '21/July/2017');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_mail` varchar(50) NOT NULL,
  `admin_pswd` varchar(100) DEFAULT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `last_login_date` varchar(20) DEFAULT NULL,
  `last_login_time` varchar(20) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_mail`, `admin_pswd`, `admin_name`, `contact`, `last_login_date`, `last_login_time`, `avatar`) VALUES
('shivam@gmail.com', '416fcd55fb7f135fceb282b303fa64fb', 'Shivam Verma', 873604336, '21/July/2017', '8:1', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Biscuits'),
(2, 'Chips'),
(3, 'Cold Drinks'),
(4, 'Curd'),
(5, 'Body Deo'),
(6, 'Fruit Juices'),
(7, 'Pulses'),
(8, 'Rice'),
(9, 'Wheat'),
(10, 'Noodles'),
(11, 'Chocolate'),
(12, 'Health Drinks'),
(13, 'Spices');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `submitdate` varchar(20) DEFAULT NULL,
  `mesg` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `address`, `username`, `user_id`) VALUES
(1, '332/25, sarafa market, chowk, Lucknow', 'Shivam Verma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `brand_name`, `quantity`, `category_id`, `price`) VALUES
(1, 'Thumbs Up', 'Cola', '500ml', 3, 35),
(2, 'Uncle Chips', 'Potato Chips', '50 gr', 2, 10),
(3, 'Parle G', 'Parle Products', '1 packet', 1, 10),
(4, 'Hide & Seek', 'Parle Products', '1 packet', 1, 30),
(5, 'Dark Temptation', 'Axe', '150 ml', 5, 200),
(6, 'Pulse Deodorent', 'Axe', '150 ml', 5, 190),
(7, 'Amul Masti Dahi', 'Amul', '1 Kg', 4, 55),
(8, 'Basmati Rice Classic', 'India Gate', '1 Kg', 8, 195),
(9, 'Traditional Basmati Rice', 'Dawat', '1 Kg', 8, 185),
(10, 'Mountain Dew', 'PepsiCo', '2 Ltr', 3, 65),
(11, 'Diamond Onion Chips', 'Diamond', '100 gr', 2, 20),
(12, 'Govind Dahi', 'Govind', '500 gr', 4, 30),
(13, 'Tropicana Mango Juice', 'Tropicana', '100 ml', 6, 20),
(14, 'Real fruit Juice', 'Real Brand', '500 ml', 6, 50),
(15, 'Arhar Daal', 'Kamal Brand', '1 kg', 7, 90),
(16, 'Pukhraj Arhar Daal', 'Pukhraj Brand', '1 kg', 7, 85),
(17, 'Aashirvaad Atta', 'Aashirvaad Flour Brand', '5 kg', 9, 120),
(18, 'Laxmi Bhog Atta', 'Laxmi Brand', '5 kg', 9, 100),
(19, 'Horlicks Health & Nutrition Drink', 'GlaxoSmithKline', '500 gr', 12, 240),
(20, 'Horlicks Growth - Chocolate Flavor', 'GlaxoSmithKline', '200 gr', 12, 320),
(21, 'Cadbury Bournvita 5 star magic', 'chocolate malt drink', '1 kg', 12, 365),
(22, 'Bournvita Refill', 'chocolate malt drink', '500 gr', 12, 198),
(23, 'Cadbury Silk Chocolate', 'Cadbury', '150 gr', 11, 160),
(24, 'Dairy Milk Fruit & Nut', 'Cadbury', '80 gr', 11, 89),
(25, 'Maggi 2 Minutes Noodles', 'Nestle', '70 gr', 10, 12),
(26, 'Yippi Noodles', 'Sunfeast', '70 gr', 10, 10),
(27, 'Maggi 2 Minutes Noodles', 'Nestle', '350 gr', 10, 60),
(28, 'Chefs Basket Hakka Noodles Box', 'Manchurian', '250 gr', 10, 149),
(29, 'Aashirvaad Sugar Release Control Atta', 'Aashirvaad Flour Brand', '5 kg', 9, 150),
(30, 'Ashok Garam Masale', 'Ashoka Masala Brand', '50 gr', 13, 35),
(31, 'Ashok Chole Masale', 'Ashoka Masala Brand', '100 gr', 13, 55);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `DateOfBirth` varchar(15) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Name`, `Email`, `Address`, `DateOfBirth`, `Mobile`, `Password`) VALUES
(1, 'Shivam Verma', 'shivam@gmail.com', '332/25, sarafa market, chowk, Lucknow', '1996-11-12', 876755376, '32c552d4f99828179d3b303489740d35');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`User_Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
