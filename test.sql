-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 06:42 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `NAME` varchar(25) NOT NULL,
  `PRICE` double(6,2) NOT NULL,
  `DESCRIPTION` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `OID` char(2) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `COMMENT` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`OID`, `NAME`, `QUANTITY`, `COMMENT`) VALUES
('32', 'Sembonia', 5, 'Mahal'),
('as', 'asdasdasd', 1, 'asdasd');

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
(3, 'Fish \'N\' Chip', 'fishNchip.jpg', 11.90),
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
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`NAME`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`OID`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
