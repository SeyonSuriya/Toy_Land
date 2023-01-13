-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 14, 2023 at 03:20 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Toyslk.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customerID` int(5) NOT NULL,
  `productID` int(5) NOT NULL,
  `units` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customerID`, `productID`, `units`) VALUES
(3, 1, 5),
(2, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(6) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `addressline1` text NOT NULL,
  `addressline2` text,
  `addressline3` text,
  `phonenumber` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstname`, `lastname`, `email`, `addressline1`, `addressline2`, `addressline3`, `phonenumber`, `password`) VALUES
(1, 'saman', 'kumara', 'abc@gmail.com', 'sa', 'kj', 'ya', '0766199583', '123456'),
(2, 'kasun', 'kalhara', 'abc3@gmail.com', 'saa', 'jjkk', 'ytrr', '076615589', '123789'),
(3, 'Hiran Sanjeewa', 'Basnayaka', 'horansanjeewaa@gmail.com', 'no 40 , wewa kotasa, puhulwatta', 'maussagolla,passara', '', '0776605987', 'Hiran12345');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `secondaryName` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `price` varchar(5) NOT NULL,
  `weight` varchar(4) NOT NULL,
  `availableUnits` int(5) NOT NULL,
  `numberOfOrders` int(4) DEFAULT NULL,
  `category` enum('other','Cars and vehical','Construction toys','Dolls','Educational toys','Electronic toys','Food-related toys','Puzzle/assembly','Science and optical','Sound toys','Spinning toys','Wooden toys') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `name`, `secondaryName`, `description`, `price`, `weight`, `availableUnits`, `numberOfOrders`, `category`) VALUES
(1, 'Kids Jeep', 'Kids Jeep/ Car/ Vehicle', 'Baybee Magento Rechargeable Battery Operated Jeep for Kids, Ride on Toy Kids Car with Bluetooth & Music| Baby Big Battery Car | Electric Jeep Car for Kids to Drive 3 to 8 Years Boys Girls (Blue II)\r\n', '400', '0.5', 150, 199, 'other'),
(2, 'Flying Helicopter', 'Remote Control Mini Drone Flying Helicopter', 'Remote Control Mini Drone Flying Helicopter Infraed Induction Kid Toys Aircraft LED Drone Flying Suspension Induction Helicopter', '300', '0.25', 135, 286, 'other'),
(3, 'Alloy Finger Bicycle', 'Bicycle Diecast Metal Bike Model Racing Toy', 'Alloy Finger Bicycle Diecast Metal Bike Model Racing Toy Simulation Collection Toys for Children Adult Mini Desk Funny Bike', '200', '0.2', 98, 307, 'other'),
(4, 'sfdfsd', 'sadasdasd', 'asdasdasd', '2313', '1', 12, 21, 'Cars and vehical');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
