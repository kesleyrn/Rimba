-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 12:13 PM
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
-- Database: `rimba`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Cname` varchar(70) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `Amount` int(60) NOT NULL,
  `image_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Cname`, `Gender`, `Product_name`, `Amount`, `image_url`) VALUES
(1, 'rimba', 'Male', 'Shirt', 80000, 'IMG-6574c1ff28f796.63355260.jpg'),
(2, 'ino collection', 'Male', 'Bag', 1008, 'IMG-657508ba065300.21798049.png'),
(3, 'rimba', 'Female', 'Sandals', 100000, 'IMG-65755023c029f8.50557816.jpg'),
(4, 'ino collection', 'Female', 'Pant', 100000, 'IMG-657805a18f88d0.70297388.png'),
(5, 'isaac niyodusenga', 'Male', 'Closed Shoes', 4000, 'IMG-657805c7c81ec4.15034879.jpg'),
(6, 'ino collection', 'Male', 'Shirt', 3444, 'IMG-6581c813929b24.34382556.jpg'),
(7, 'kesle collection', 'Male', 'Pant', 12000, 'IMG-6582b4972e2429.03192462.jpg'),
(8, 'kesle collection', 'Female', 'Bag', 12000, 'IMG-6582b4bdd74480.54225656.jpg'),
(9, 'kesle collection', 'Male', 'Shirt', 12000, 'IMG-6582b4f0370301.10099721.png'),
(10, 'kesle collection', 'Female', 'Closed Shoes', 12000, 'IMG-6582b5477669c1.25465993.jpg'),
(11, 'kesle collection', 'Female', 'Dress', 12000, 'IMG-6582b56179f683.39560726.jpg'),
(12, 'kesle collection', 'Male', 'Closed Shoes', 12000, 'IMG-6582b5b4a00753.73331303.png'),
(13, 'kesle collection', 'Female', 'Shirt', 12000, 'IMG-6582b5df9c5c26.64748609.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Flname` varchar(70) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telphone` int(60) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Flname`, `User_name`, `Email`, `Telphone`, `Password`) VALUES
(2, 'kakira prince', 'prince', 'prince@gmail.com', 455, '$2y$10$zxehrTvGvgbP5D3V/p0mOu3sOIe2acyciucahoslJrs'),
(3, 'byiringiro kesle', 'kesle', 'kesle@gmail.com', 455, '$2y$10$0/MmzpX0sDIY4rf/IBiHOO.eVJ3.vUXNfKC3oIT2PXD'),
(4, 'fabrice byiringiro', 'fabrice', 'fabrice@gmail.com', 455, '$2y$10$6/lrTIRtfIT9EmZBzITlNucmQgOeYNo1ysNCH9oi.el'),
(5, 'mukhutar', 'mukhutar', 'mukhutar@gmail.com', 455, 'mukhutar');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
