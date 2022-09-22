-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 09:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maskup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'dhruv', 'dhruv123', 'maskup@123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_ID` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(150) NOT NULL,
  `customer_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_ID`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`) VALUES
(1, 'dhruv', 'reddy@gmail.com', '1234', 1234),
(2, 'dhruv', 'reddy@gmail.com', '1234', 1234),
(3, 'test', 'reddy@gmail.com', '1234', 1234),
(4, 'test123', 'reddy@gmail.com', '123', 123),
(5, 'akash', 'akash@akash.com', '1234567890', 1234567),
(6, 'Jain', 'Jain@jain.com', 'jain14', 98765),
(7, 'test', 'test@test.com', 'test123', 34567),
(8, 'harsh', 'harsh@test.com', 'harsh123', 123);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `home_address` varchar(150) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`home_address`, `postal_code`, `state`, `city`, `customer_ID`) VALUES
('abc', 123, 'abc', 'abc', 1),
('ncc d block', 500, 'karanataka', 'davanagere', 5),
('hyderabad', 12, 'telangana', 'hyd', 6),
('test', 55, 'ka', 'blr', 7),
('Banshankri', 52, 'KA', 'BLR', 8);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_des` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_des`, `product_price`, `product_image`) VALUES
(6, 'Black Flower Mask', 'Super Breathable mask with ultimate protection provides cooling effect on face with cotton fabric layer in summer. Re-usable and Washable', '499', 'https://i.postimg.cc/8JcF6XNY/black-flower.jpg'),
(7, 'Black Golden Flower Mask', 'Super Breathable mask with ultimate protection provides cooling effect on face with cotton fabric layer in summer. Re-usable and Washable', '499', 'https://i.postimg.cc/z3LbDQdb/black-golden-flower.jpg'),
(8, 'Blue Birds Mask', 'Super Breathable mask with ultimate protection provides cooling effect on face with cotton fabric layer in summer. Re-usable and Washable', '499', 'https://i.postimg.cc/vx6cP11L/blue-birds.jpg'),
(9, 'Blue Feather Mask', 'Super Breathable mask with ultimate protection provides cooling effect on face with cotton fabric layer in summer. Re-usable and Washable', '499', 'https://i.postimg.cc/bD5ZH0vw/blue-feather.jpg'),
(10, 'Blue Flower Mask', 'Super Breathable mask with ultimate protection provides cooling effect on face with cotton fabric layer in summer. Re-usable and Washable', '499', 'https://i.postimg.cc/xqWkXP7s/blue-flower.jpg'),
(13, 'Blue Skull', 'Super Breathable mask with ultimate protection provides cooling effect on face with cotton fabric layer in summer. Re-usable and Washable', '499', 'https://i.postimg.cc/68rc9rXg/blue-skull.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customer` (`customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
