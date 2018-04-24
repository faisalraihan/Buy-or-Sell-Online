-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 12:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faisal`
--
CREATE DATABASE IF NOT EXISTS `faisal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `faisal`;

-- --------------------------------------------------------

--
-- Table structure for table `featured_info`
--

CREATE TABLE `featured_info` (
  `ProID` int(10) NOT NULL,
  `ProName` varchar(30) NOT NULL,
  `ProDescription` varchar(100) NOT NULL,
  `ProPrice` decimal(12,2) NOT NULL,
  `ProPicture` varchar(100) NOT NULL,
  `ProCondition` varchar(10) NOT NULL,
  `ProCategory` varchar(20) NOT NULL,
  `ProLocation` varchar(100) NOT NULL,
  `PostingDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_info`
--

INSERT INTO `featured_info` (`ProID`, `ProName`, `ProDescription`, `ProPrice`, `ProPicture`, `ProCondition`, `ProCategory`, `ProLocation`, `PostingDate`, `Username`) VALUES
(0, 'iPhone 7 Plus Red', '     Slim, lightweight case for iPhone 7 Plus protects your phone while making it feel case-free    ', '99000.00', 'uploads/featured.jpg', 'Unused', 'Electronics', 'Dhaka', '2017-05-02 05:52:44', 'faisal'),
(1, 'Gaming PC', ' System: Intel i5-7400 3.0GHz Quad-Core | Intel B250 Chipset | 8GB DDR4 | 1TB HDD | 24X DVDÂ±RW Dual', '67000.00', 'uploads/featured1.jpg', 'Unused', 'Electronics', 'Dhaka', '2017-05-02 05:57:20', 'faisal'),
(2, 'Jackson RR24', 'Body shape: V Body type: Solid body Body material: Solid wood Top wood: Not applicable Body wood: Ma', '86000.00', 'uploads/featured2.jpg', 'Used', 'Musical Instruments', 'Dhaka', '2017-05-02 06:04:01', 'faisal'),
(3, 'Toyota Axio', 'Used With Care, In Good Condition, Registration OK.', '1500000.00', 'uploads/featured3.jpg', 'Used', 'Vehicle', 'Dhaka', '2017-05-02 06:06:33', 'faisal'),
(4, 'iPhone 5s', 'Good Condition, Warranty Available.', '20000.00', 'uploads/featured4.jpg', 'Used', 'Electronics', 'Dhaka', '2017-05-02 06:12:52', 'faisal');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `ProID` int(10) NOT NULL,
  `ProName` varchar(30) NOT NULL,
  `ProDescription` varchar(100) NOT NULL,
  `ProPrice` decimal(12,2) NOT NULL,
  `ProPicture` varchar(100) NOT NULL,
  `ProCondition` varchar(10) NOT NULL,
  `ProCategory` varchar(20) NOT NULL,
  `ProLocation` varchar(100) NOT NULL,
  `PostingDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`ProID`, `ProName`, `ProDescription`, `ProPrice`, `ProPicture`, `ProCondition`, `ProCategory`, `ProLocation`, `PostingDate`, `Username`) VALUES
(0, 'Nokia 1020', '     Display: 4.5-inches, Camera: 41-MP, Processor Speed: 1.5 GHz, OS: Windows Phone 8', '22000.00', 'uploads/image.jpg', 'Unused', 'Electronics', 'Mirpur, Dhaka', '2017-05-02 06:15:12', 'faisal'),
(1, 'Toyota Corolla', 'Used With Care, In Good Condition, Registration OK.', '1230000.00', 'uploads/image1.jpg', 'Used', 'Vehicle', 'Chittagong', '2017-05-02 06:17:30', 'abc'),
(2, 'HP 1000', 'Laptop. Warranty not available. Buy at your own risk', '12000.00', 'uploads/image2.jpg', 'Used', 'Electronics', 'Khulna', '2017-05-02 06:19:07', 'abc'),
(3, 'Ibanez Gio 170Dx', 'Very Good Guitar For Biginners', '20000.00', 'uploads/image3.jpg', 'Unused', 'Musical Instruments', 'Dhaka', '2017-05-02 06:20:34', 'abc'),
(4, 'Samsung S6 edge', 'Good Condition, Warranty Available.', '55000.00', 'uploads/image4.jpg', 'Unused', 'Electronics', 'Uttara, Dhaka', '2017-05-02 06:23:16', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Username` varchar(30) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Mobile` varchar(14) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `UserType` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Username`, `FirstName`, `LastName`, `Gender`, `Mobile`, `Email`, `Password`, `DOB`, `UserType`) VALUES
('abc', 'Rahman', 'Saif', 'Male', '01874635249', 'aaa@bbb.com', '456', '1996-03-23', 'User'),
('abrab', 'Syed', 'Abrab', 'male', '01711111233', 'abrab@gmail.com', '345', '1994-01-01', 'User'),
('alarif', 'Arif', 'Ashik', 'male', '01653726484', 'arif@yahoo.com', '234', '1994-01-01', 'User'),
('faisal', 'Faisal', 'Raihan', 'Male', '01719633109', 'faisalmoon28@gmail.com', '123', '1994-02-23', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `featured_info`
--
ALTER TABLE `featured_info`
  ADD PRIMARY KEY (`ProID`),
  ADD UNIQUE KEY `ProID` (`ProID`),
  ADD KEY `ProID_2` (`ProID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`ProID`),
  ADD UNIQUE KEY `ProID` (`ProID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Username_2` (`Username`),
  ADD KEY `Username_3` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `featured_info`
--
ALTER TABLE `featured_info`
  ADD CONSTRAINT `featured_info_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user_info` (`Username`);

--
-- Constraints for table `product_info`
--
ALTER TABLE `product_info`
  ADD CONSTRAINT `product_info_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user_info` (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
