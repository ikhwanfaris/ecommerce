-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 05:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chicken chop', 'chicken chop.jpg', 10.90),
(2, 'Lamb Chop', 'lamb chop.jpg', 12.90),
(3, 'Fish ''N'' Chip', 'fishNchip.jpg', 11.90),
(4, 'Nasi Kerabu', 'nasi kerabu.jpg', 6.00),
(7, 'Roti Canai', 'roti canai.jpg', 1.20),
(5, 'Chicken Rice', 'nasi ayam.jpg', 5.00),
(6, 'Nasi Lemak', 'nasi lemak 2.jpg', 4.50),
(8, 'Sandwich', 'sandwich 2.png', 2.00),
(9, 'Pancake', 'pancake.png', 1.50),
(10, 'Orange juice', 'orange juice.jpg', 3.00),
(11, 'Hot Coffee', 'hot drink.png', 1.60),
(12, 'Iced Tea', 'cool drink.png', 1.20),
(13, 'Seafood Tomyam', 'tomyam 1.jpeg', 7.00),
(14, 'Fish Porridge', 'fish porridge.jpg', 3.50),
(15, 'Vege Soup ', 'vege soup.jpg', 4.50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
