-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 10:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(55) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '	1 = active, 0 = deleted/inactive	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `description`, `price`, `date_created`, `date_modified`, `status`) VALUES
(1, 'Product 1', 'This is a test product1', '100', '2023-06-22 09:28:51', '2023-06-22 09:28:51', 0),
(2, 'Product 1', 'This is a test Product 1', '5', '2023-06-22 09:30:11', '2023-06-22 09:30:11', 0),
(3, 'Product 2', 'This is a test Product 2', '100', '2023-06-22 09:30:20', '2023-06-22 09:30:20', 0),
(4, 'Product 3', 'This is a test Product 3', '150', '2023-06-22 09:30:29', '2023-06-22 09:30:29', 1),
(5, 'Product 2', 'Product 2', '5', '2023-06-22 09:30:52', '2023-06-22 09:30:52', 1),
(6, 'Product 4', 'Product 4', '5', '2023-06-22 09:49:19', '2023-06-22 09:49:19', 0),
(7, 'Product 1 - edit', 'Product 1 - edit', '5', '2023-06-22 09:53:37', '2023-06-22 09:53:58', 0),
(8, 'test1', 'test1', '55', '2023-06-22 10:09:30', '2023-06-22 10:11:27', 0),
(9, 'Product 4', 'Product 4 - desc', '5', '2023-06-22 10:11:50', '2023-06-22 10:11:50', 1),
(10, 'test4', '4', '4', '2023-06-22 10:18:44', '2023-06-22 10:18:44', 0),
(11, 'Product 1', 'Product 1 desc', '5', '2023-06-22 10:19:39', '2023-06-22 10:19:39', 1),
(12, 'Product 1', 'Product 1 desc', '5', '2023-06-22 10:19:47', '2023-06-22 10:19:47', 0),
(13, 'test', 'test', '4', '2023-06-22 10:21:44', '2023-06-22 10:21:44', 0),
(14, 'Product 5', 'Product 5', '5', '2023-06-22 10:23:33', '2023-06-22 10:23:33', 1),
(15, 'Product 6', 'Product 6', '5', '2023-06-22 10:24:00', '2023-06-22 10:24:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
