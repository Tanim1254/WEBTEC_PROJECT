-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 08:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `password`, `gender`, `address`) VALUES
('Fahim', 'Ikbal', '1234567890', 'male', 'Dhaka'),
('Tanvir', 'Hoque', '987123345', 'male', 'Sylhet'),
('Tawshik', 'Abedin', 'amibachal', 'male', 'Dhaka'),
('Mahee', 'Salsabil', 'mahee12345', 'female', 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `deliverman`
--

CREATE TABLE `deliverman` (
  `DeliverManId` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverman`
--

INSERT INTO `deliverman` (`DeliverManId`, `Name`, `Password`, `Phone`, `Status`) VALUES
(11, 'Mahedi', '345678', 1832381254, 'Delivered'),
(12, 'Tasmina', '09876543', 162800887, 'Delivered'),
(501, 'Tanim', '12345678', 1860376881, 'Delivered'),
(502, 'Fahim', '12378', 1521534103, 'Not_Delivered'),
(503, 'Minhaz', '345678', 1629088734, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(100) NOT NULL,
  `TotalAmount` varchar(1000) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Orderlist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `TotalAmount`, `Status`, `Orderlist`) VALUES
(101, '20000taka', 'Available', 'Laptop'),
(102, '10000taka', 'Not Available', 'Mobile'),
(103, '10500taka', 'Available', 'Mobile'),
(104, '1000taka', 'Not Available', 'T-shirts');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `ProducerId` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`ProducerId`, `Name`, `password`, `Email`) VALUES
(1001, 'Rahim', 987654, 'rahim@gmail.com'),
(1002, 'karim', 345678, 'karim@gmail.com'),
(1003, 'Sakin', 23647388, 'sakin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Id` int(100) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Availability` int(100) NOT NULL,
  `ReleaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `ProductName`, `Price`, `Quantity`, `Availability`, `ReleaseDate`) VALUES
(1, 'Samsung_Mobile', '25000TAKA', 8, 8, '0000-00-00'),
(2, 'Sony_Tv', '50000Taka', 10, 9, '2020-07-10'),
(3, 'Laptop', '40000Taka', 20, 15, '2017-10-06'),
(4, 'MensShirt', '4000Taka', 1000, 990, '2019-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `registeradmin`
--

CREATE TABLE `registeradmin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MobileNo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeradmin`
--

INSERT INTO `registeradmin` (`ID`, `Username`, `Password`, `Email`, `MobileNo`) VALUES
(16, 'Bahadur', 'bahadur12345', 'bahadur@gmail.com', '01610353500'),
(4, 'Hridi', '6251413', 'Hridi@yahoo.com', '01720693858'),
(2, 'Ifty', '12345678', 'sayemvhai@gmail.com', '09346647478'),
(13, 'kamal', '12345', 'Kamal@gmail.com', '019207858'),
(12, 'Kawshiq', 'kawshiq1234', 'kaushiq@gmail.com', '01983737476'),
(1, 'Khadiza ', 'Begum', 'khadija@gmail.com', '01832381254'),
(14, 'Mahabub', 'rayhan123', 'rayhan@gmail.com', '01521534102'),
(15, 'Rahee', 'rahee12345', 'rahee@hotmail.com', '01934780012'),
(10, 'Rakib', 'rakib12345', 'rakib@gmail.com', '01716547383'),
(5, 'sakib', 'sakib1234', 'sakib@gmail.com', '019384657575'),
(7, 'salma', 'salma123456', 'salma@gmail.com', '01920693858'),
(11, 'Sazia', 'sazia12345', 'sazia@gmail.com', '019374647483'),
(17, 'Seraj', 'Seraj12345', 'seraj@gmail.com', '01716167528'),
(8, 'Tahsin', '09876', 'Tahsin@gmail.com', '018364474844'),
(9, 'tamanna', '1234567898765432', 'tamanna@hotmail.com', '0196045532'),
(6, 'tazbid', '12345678', 'tazbid@gmail.com', '01855427654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deliverman`
--
ALTER TABLE `deliverman`
  ADD PRIMARY KEY (`DeliverManId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`ProducerId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `registeradmin`
--
ALTER TABLE `registeradmin`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deliverman`
--
ALTER TABLE `deliverman`
  MODIFY `DeliverManId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `ProducerId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registeradmin`
--
ALTER TABLE `registeradmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
