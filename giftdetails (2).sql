-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 06:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftshopmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `giftdetails`
--

CREATE TABLE `giftdetails` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Units` int(11) NOT NULL,
  `PPU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giftdetails`
--

INSERT INTO `giftdetails` (`id`, `ProductName`, `Type`, `Company`, `Units`, `PPU`) VALUES
(15, 'Rose Bookey', 'Flower', 'pankhuri', 10, 200),
(17, 'Doremon', 'softtoy', 'puma', 200, 200),
(20, 'Chocolate Cake', 'Cake', 'pankhuri', 50, 450),
(21, 'watch', 'wrist watch', 'titan ', 50, 500),
(22, 'teddy bear', 'softtoy', 'Vermont', 20, 300),
(23, 'Bracelet ', 'Hand Bracelet', 'T Squares', 60, 1000),
(24, 'Cup Cakes', 'Cake', 'Luxury ', 50, 300),
(25, 'Family Photo Frames ', 'Frames', 'Stylish Frames', 100, 100),
(26, 'Coffee Mugs', 'Mugs', 'Sparkels ', 60, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giftdetails`
--
ALTER TABLE `giftdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giftdetails`
--
ALTER TABLE `giftdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
