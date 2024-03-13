-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 08:55 PM
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
(14, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d7062b9ee2d7.29124395.jpg'),
(16, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d7068f4ba405.53478605.jpg'),
(17, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d706e5a3fa18.87973195.jpg'),
(18, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d7070c785539.29445491.jpg'),
(19, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d70731aa6a82.79706532.jpg'),
(20, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d7075032d627.12897924.jpg'),
(21, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d7076c537061.18622953.jpeg'),
(22, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d7078d3222f7.05510751.jpg'),
(24, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d72021dc73a4.94946184.jpg'),
(26, 'Rimba', 'Female', 'Sandals', 25300, 'IMG-65d72112d1bdf2.40436316.jpg');

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
(4, 'fabrice byiringiro', 'fabrice', 'fabrice@gmail.com', 455, '$2y$10$6/lrTIRtfIT9EmZBzITlNucmQgOeYNo1ysNCH9oi.el');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
