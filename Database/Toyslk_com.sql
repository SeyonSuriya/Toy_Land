-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 11, 2023 at 10:42 AM
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
(1, 1, 62),
(1, 2, 13),
(3, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `customerID` int(5) NOT NULL,
  `customerName` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) NOT NULL,
  `District` varchar(15) NOT NULL,
  `Province` varchar(15) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `postalCode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customerID`, `customerName`, `mobile`, `addressLine1`, `addressLine2`, `District`, `Province`, `Country`, `postalCode`) VALUES
(2, 'Hiran Sanjeewa', '0766475117', 'No 40, wewa kotasa, puhulwatta', 'maussagolla, passara', 'Badulla', 'Uva', 'Srilanka', 90500);

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
  `numberOfOrders` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `name`, `secondaryName`, `description`, `price`, `weight`, `availableUnits`, `numberOfOrders`) VALUES
(1, 'Kids Jeep', 'Kids Jeep/ Car/ Vehicle', 'Baybee Magento Rechargeable Battery Operated Jeep for Kids, Ride on Toy Kids Car with Bluetooth & Music| Baby Big Battery Car | Electric Jeep Car for Kids to Drive 3 to 8 Years Boys Girls (Blue II)\r\n', '5000', '0.5', 100, 10),
(2, 'Flying Helicopter', 'Remote Control Mini Drone Flying Helicopter', 'Remote Control Mini Drone Flying Helicopter Infraed Induction Kid Toys Aircraft LED Drone Flying Suspension Induction Helicopter', '16155', '0.25', 234, 56),
(3, 'Alloy Finger Bicycle', 'Bicycle Diecast Metal Bike Model Racing Toy', 'Alloy Finger Bicycle Diecast Metal Bike Model Racing Toy Simulation Collection Toys for Children Adult Mini Desk Funny Bike', '500', '0.2', 1, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
