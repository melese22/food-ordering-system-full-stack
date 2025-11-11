-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 10:27 PM
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
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(12, 'Burger'),
(13, 'Pizza'),
(14, 'Dishes'),
(15, 'pasta'),
(16, 'foreign foods');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`) VALUES
(1, 'Natnael', 'Degu', 'satorsquare777@gmail.com', '0946332402', '$2y$10$Zg/DSAsJBiXDEoTYRfLDoefrv4Xbqy7ROm.1D.L3fYHDgWYSCJYve'),
(2, 'abebe', 'kebede', 'abcde@gmail.com', '911', '$2y$10$uMO35h8AlcPVnWDBoH8.H.9pUSgFbf4ixEWC6dEWz6DqJ1zMRWHW2'),
(3, 'melese', 'tesfa', 'abc@gmail.com', '91111', '$2y$10$g/uYXGcfuwZm7TZdTDY0YeljKE5Vu42/F3oTfWB5/3NfRixYMsjxK'),
(4, 'abebe', 'kebede', 'natnaeldegu05@gmail.com', '91111', '$2y$10$pplyylCyLw1iWXiojtjadewF9uUDEtXDeLI2qNjGZ1k/PvEbxHjGC'),
(5, 'admin', 'only', 'admin123@gmail.com', '0946332402', '$2y$10$cOkOt0V3exfCuk/SUecc/uQbJBKtRYYrdOfRUTIEIbbCnjv.NL9Ea'),
(6, 'melese', 'tesfaw', 'melesetesfaw@gmail.com', '0909090909', '$2y$10$G.1HuIcZnwknoyKe1yHny.EAW6oYjLVgnmNpEmf3HaWwvcsupaZXC'),
(7, 'yohannes', 'bekele', 'yohannes@gmail.com', '0901000000', '$2y$10$0LHBOsIf94z3ivsY/.kIgu2ZV22BeAQFmFHacTZg1x0fZ1FQ8Qla6');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(33, 12, 'burger', 400, 'upload/cat-3_1736260803.png'),
(34, 12, 'burger2', 500, 'upload/food-2_1736260854.png'),
(35, 13, 'pizza1', 300, 'upload/cat-2_1736260886.png'),
(38, 14, 'lunch_meal', 600, 'upload/b1_1736261056.jpg'),
(39, 14, 'dinner_meal', 400, 'upload/spagetti_1736261132.png'),
(41, 13, 'pizza', 200, 'upload/food-3_1736276985.png'),
(42, 13, 'pizza3', 700, 'upload/food-5_1736356441.png'),
(43, 15, 'pasta1', 300, 'upload/spagetti_1736366044.png'),
(44, 16, 'delicious', 200, 'upload/1145_1736366076.jpg'),
(45, 16, 'delicious', 200, 'upload/blog-2_1736366128.jpg'),
(46, 16, 'delicious2', 200, 'upload/d3_1736366156.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`) VALUES
(25, 'natnael', 1200, '2025-01-08 13:50:30'),
(26, 'nat', 1800, '2025-01-08 15:02:21'),
(27, 'ephrem', 2000, '2025-01-08 15:04:04'),
(28, 'nard', 1200, '2025-01-08 15:06:18'),
(30, 'degu', 2100, '2025-01-08 15:10:58'),
(31, 'abc', 600, '2025-01-08 15:38:05'),
(32, 'yohannes', 1800, '2025-01-08 15:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(41, 27, 33, 5),
(42, 28, 38, 2),
(43, 29, 38, 2),
(44, 30, 35, 5),
(45, 30, 38, 1),
(46, 31, 38, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
