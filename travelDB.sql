-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2020 at 11:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `travelId` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `trip` varchar(20) NOT NULL,
  `dport` varchar(30) NOT NULL,
  `aport` varchar(30) NOT NULL,
  `bookdate` date DEFAULT NULL,
  `ddate` date NOT NULL,
  `adults` varchar(5) DEFAULT NULL,
  `children` varchar(5) DEFAULT NULL,
  `infants` varchar(5) DEFAULT NULL,
  `class` varchar(20) NOT NULL,
  `paymentMethod` varchar(20) DEFAULT NULL,
  `ccname` varchar(30) DEFAULT NULL,
  `ccnum` varchar(30) DEFAULT NULL,
  `ccexp` date DEFAULT NULL,
  `cvv` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`travelId`, `username`, `trip`, `dport`, `aport`, `bookdate`, `ddate`, `adults`, `children`, `infants`, `class`, `paymentMethod`, `ccname`, `ccnum`, `ccexp`, `cvv`) VALUES
(1, 'lary', 'Round-trip', 'Dubai', 'Detrioit', '2020-07-25', '2020-08-07', '2', '0', '0', 'First-class', 'Credit', 'warrior', '737425633754', '2020-04-06', '777'),
(2, 'tasha', 'One-way', 'Detrioit', 'JFK', '2020-07-25', '2020-08-08', '2', '0', '0', 'Business', 'Debit', 'warman', '371457824698978', '2022-04-07', '787'),
(3, 'tom', 'Multi-Directional', 'Entebbe', 'Nairobi', '2020-07-25', '2020-07-31', '1', '2', '1', 'Economy', 'Master', 'famo', '52416869661046', '2021-04-06', '454');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentId` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `username`, `comment`) VALUES
(1, 'lary', 'flight time was short and sweet'),
(2, 'tasha', 'i would luv to fly again with ug air'),
(3, 'tom', 'family friendly');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  `address` varchar(20) NOT NULL,
  `country` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `regdate`, `address`, `country`, `district`, `zip`, `password`) VALUES
(1, 'ochen', 'hillary', 'lary', 'lary@oc.com', '2020-07-25', '1st st', 'Uganda', 'Kampala', '9090', '202cb962ac59075b964b07152d234b70'),
(2, 'natasha', 'angella', 'tasha', 'tasha@ta.com', '2020-07-25', '1st st', 'Uganda', 'Kampala', '9090', '202cb962ac59075b964b07152d234b70'),
(3, 'tommy', 'jerry', 'tom', 'tomus@to.com', '2020-07-25', '18 th', 'Uganda', 'Entebbe', '8764', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`travelId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `travelId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
