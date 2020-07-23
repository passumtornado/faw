-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 12:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faws`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `productID` int(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `catalogID` int(10) UNSIGNED NOT NULL,
  `productID` int(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `quanity` int(10) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaintID` int(10) UNSIGNED NOT NULL,
  `farmerID` int(10) NOT NULL,
  `description` text NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmerID` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` int(15) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmerID`, `firstname`, `lastname`, `username`, `email`, `password`, `address`, `contact`, `reg_date`) VALUES
(1, 'hello', 'world', 'gjgfdf', 'dflkf@gfl.com', 'fdlkflgk', 'gdgfgd', 2147483647, '2019-06-13 13:45:52'),
(2, 'Passum', 'Tonado', 'passum', 'klgfjldkg@fkdfj.com', '$2y$10$Gpti5vHxh01c9n6CB92V5u.UZw3b2XSUdgzkYW.TvyltaTAcgOpBe', 'lkvfjdlkgvfjdx', 2147483647, '2019-06-13 14:28:37'),
(3, 'testzz', 'mytestzzz', 'zzzzzz', 'test1@gmail.com', '$2y$10$8zB4IvJeNyIauP9O35S73u0vWNyvjZJIJtIhPuqQbMpeb9CxeCOCC', 'asdfghjkldfghjk', 2147483647, '2019-06-13 14:33:48'),
(4, 'Amamamatestzz', 'amdsjfhmytestzzz', 'zzzzzz', 'test1@gmail.com', '$2y$10$mPhUkF.OFviQNDfvadc36eLw9ZOgZBqrexmU9iw9MVcLTBLehzmmK', 'asdfghjkldfghjk', 2147483647, '2019-06-13 14:38:28'),
(5, 'Amamamatestzz', 'amdsjfhmytestzzz', 'zzzzzz', 'test1@gmail.com', '$2y$10$gvuTyQ.wKFGmS9/aIdeosedHr0FZXgMtBGOmtAIjZEJ7UapeOY1wG', 'asdfghjkldfghjk', 2147483647, '2019-06-13 14:39:09'),
(6, 'gaf', 'gaffar', 'myname', 'test1@gmail.com', '$2y$10$dVS4HNe6XEW30VeDMvTZaeHB.PewP8tNse8JrQ4QOjH7XwpfyvkK6', 'plt 10 blk', 2147483647, '2019-06-13 14:50:24'),
(9, 'passum', 'tornado', 'passumtornado10', 'passumtornado@gmail.com', '$2y$10$9nlLDhe5Oi2fv0vxtOmn8upKjMkOprw0qTtFDlQJHQ/GyQyFotoPu', 'qwertyuio', 123456789, '2019-06-13 22:57:30'),
(10, 'munaya', 'issahaque', 'munaya12', 'munaya12@gmail.com', '$2y$10$jcDfkP4/3GzJXpfKCcOzhehh1.ADvSN.gJ8.qMgLKP2BJM6y/Z/Iu', 'qwertyuio', 1234567890, '2019-06-19 12:04:00'),
(11, 'mujeeb', 'Alhassan', 'mujasnell', 'mujasnell@gamil.com', '$2y$10$sk1W30jolqsixHmk1GKcHuiu8V7B5zYQpQd8GIw5DUusqd6H9IZp2', 'techiman teko', 248889897, '2019-06-23 12:06:25'),
(12, 'Adizatu', 'Yakubu', 'hajia', 'ladi10@gmail.com', '$2y$10$hGIK0/nTgqUfTRBrrLfd7uuVW0wylUtaZICS8gKM38y3WMK7hxgqW', 'hamile', 245254687, '2019-06-26 21:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `farmtips`
--

CREATE TABLE `farmtips` (
  `tipsID` int(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierID` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierID`, `firstname`, `lastname`, `username`, `email`, `password`, `address`, `contact`, `reg_date`) VALUES
(1, ' test', 'dfghjk', '', 'test@gmail.com', '12345678', 'pfghjk', 12345678, '0000-00-00 00:00:00'),
(2, ' test2', 'dfghjk', 'test', 'test@gmail.com', 'qwerty', 'pfghjk', 1234567, '0000-00-00 00:00:00'),
(3, 'test', 'Abdul', 'suraj', 'suraj@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'asdfghj', 123456789, '2019-06-12 04:55:01'),
(4, 'Abubakar Passum', 'Abdul Gaffar', 'passum tornado', 'passumtornado10@gmail.com', '$2y$10$qrIbR.6lcgfX5zVAJ/a5reFptHB9SZhA55HIMn8gCK3wjDIvL7Bzi', 'plt 10 blk l', 241333114, '2019-06-12 05:00:16'),
(5, 'suraj', 'Abdul', 'surajtest', 'surajtest@gmail.com', '$2y$10$msMbfxKtZa3VEqZQDJOicu94d2c0.O8.RH6.6jpk/rD16KUeGv0nG', 'asdfghj', 123456789, '2019-06-12 06:45:07'),
(6, 'munaya', 'issahaque', 'munaya', 'muanayaissahaque22@gmail.com', '$2y$10$.Bs32C8mX14wpIvW8ASkMujK8s6TOkbCzkdU3VAsUQ63LbXfAuQMG', 'prestea avenue street 312', 546286476, '2019-06-12 07:44:36'),
(7, 'raf', 'adonteng', 'raf', 'raf@gmail.com', '$2y$10$UTYJ/tdIfIa2riB4R7bcseJLoA8p4EMmvueVee..q38ArXAHgjx1C', 'asdfghjkl', 2147483647, '2019-06-12 12:15:31'),
(8, 'Abubakar Passum', 'A Gaffar', 'passumtornado10', 'passumtornado@gmail.com', '$2y$10$9Ns7HJCDjW.8QZY38Xlv4OX02e6jGWRBIN4.fhQ.KFm0LVV9tzT2O', 'Ahwiaa', 241333114, '2019-06-26 22:08:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalogID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaintID`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmerID`);

--
-- Indexes for table `farmtips`
--
ALTER TABLE `farmtips`
  ADD PRIMARY KEY (`tipsID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `catalogID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaintID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `farmtips`
--
ALTER TABLE `farmtips`
  MODIFY `tipsID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
