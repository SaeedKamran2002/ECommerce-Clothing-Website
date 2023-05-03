-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 10:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nidaclothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`userid`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` int(11) NOT NULL,
  `prdouct_Id` int(11) NOT NULL,
  `productQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sellPrice` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `userId`, `productId`, `qty`, `sellPrice`, `totalPrice`) VALUES
(1, 36, 8, 2, 1500, 3000),
(2, 36, 9, 3, 1500, 4500),
(3, 36, 12, 2, 1500, 3000),
(4, 36, 5, 2, 2000, 4000),
(5, 37, 12, 1, 1500, 1500),
(6, 37, 5, 1, 2000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_Id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_sell_price` int(11) NOT NULL,
  `product_actual_price` int(11) NOT NULL,
  `product_image_name` text NOT NULL,
  `product_image_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_Id`, `product_name`, `product_qty`, `product_description`, `product_sell_price`, `product_actual_price`, `product_image_name`, `product_image_location`) VALUES
(5, 'Black T Shirt', 12, 'Good Quality Sticthed T Shirt', 2000, 1500, '1683035120.jpg', 'upload/1683035120.jpg'),
(8, 'Black T Shirt', 0, 'Good Quality Sticthed T Shirt', 1500, 1000, '1683037794.jpg', 'upload/1683037794.jpg'),
(9, 'Black T Shirt', 0, 'Good Quality Sticthed T Shirt', 1500, 500, '1683037814.jpg', 'upload/1683037814.jpg'),
(10, 'Black T Shirt', 15, 'Good Quality Sticthed T Shirt', 1500, 1000, '1683037870.jpg', 'upload/1683037870.jpg'),
(12, 'Black T Shirt', 7, 'Good Quality Sticthed T Shirt', 1500, 500, '1683038603.jpg', 'upload/1683038603.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(31, 'Robin', 'robin1995will@gmail.com', 'Robin95will'),
(32, 'Chris ', 'chrisrock4@gmail.com', 'chris@rock'),
(33, 'Charlie', 'madcharlie@gmail.com', 'charlie1234'),
(34, 'Andy', 'andyfun69@yahoo.in', 'andy@66'),
(36, 'Saeed Kamran', 'saeedkamran2002@gmail.com', 'saeed123'),
(37, 'imran', 'imran123@gmail.com', 'imran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
