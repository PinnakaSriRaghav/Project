-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 05:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pick_address` text NOT NULL,
  `drop_address` text NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `hourly_price` varchar(10) NOT NULL,
  `total_hours` varchar(100) NOT NULL,
  `total_cost` varchar(100) NOT NULL,
  `pickup_date_time` varchar(50) NOT NULL,
  `drop_date_time` varchar(50) NOT NULL,
  `name_on_card` varchar(100) NOT NULL,
  `card_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fname`, `lname`, `email`, `pick_address`, `drop_address`, `state`, `zip`, `car_name`, `hourly_price`, `total_hours`, `total_cost`, `pickup_date_time`, `drop_date_time`, `name_on_card`, `card_number`) VALUES
(2, 'Raghav', 'Pinnaka', 'sriraghavpinnaka9848@gmail.com', 'Flat no:501,srinivasam apartments,marqt fresh road,prathuru road,tadepalli', 'opposite to siri jewel', 'Andhra Pradesh', '522501', 'Swift', '75', '24', '1800', '2021-04-04T19:25', '2021-04-05T19:25', 'Raghav', '123412341234'),
(3, 'Raghav', 'Pinnaka', 'sriraghavpinnaka9848@gmail.com', 'Flat no:501,srinivasam apartments,marqt fresh road,prathuru road,tadepalli', 'opposite to siri jewel', 'Andhra Pradesh', '522501', 'JAZZ', '85', '24', '2040', '2021-04-05T15:31', '2021-04-06T15:31', 'Raghav', '123412341234'),
(4, 'Raghav', 'Pinnaka', 'sriraghavpinnaka9848@gmail.com', 'Flat no:501,srinivasam apartments,marqt fresh road,prathuru road,tadepalli', 'opposite to siri jewel', 'Andhra Pradesh', '522501', 'Endeavour', '85', '48', '4080', '2021-04-05T16:32', '2021-04-07T16:32', 'Raghav', '123412341234'),
(5, 'Raghav', 'PINNAKA', 'sriraghavpinnaka9848@gmail.com', 'Flat no:501,srinivasam apartments,marqt fresh road,prathuru road,tadepalli', 'opposite to siri jewel', 'Andhra Pradesh', '522501', 'Swift', '75', '72', '5400', '2021-04-20T11:18', '2021-04-23T11:18', 'Raghav', '1234567899876543'),
(6, 'ABCD', 'EFGH', 'ABCD@gmail.com', 'xyz', 'uvw', 'Andhra Pradesh', '*******', 'Swift', '75', '24', '1800', '2021-04-20T11:50', '2021-04-21T11:50', 'ABCD', '123456789012'),
(7, 'Raghav', 'PINNAKA', 'sriraghavpinnaka9848@gmail.com', 'Flat no:501,srinivasam apartments,marqt fresh road,prathuru road,tadepalli', 'opposite to siri jewel', 'Andhra Pradesh', '522501', 'Swift', '75', '96', '7200', '2021-04-28T20:47', '2021-05-02T20:47', 'Raghav', '123412341234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `f_name`, `message`) VALUES
(1, 'sriraghavpinnaka9848@gmail.com', 'Raghav', 'HI'),
(2, 'zzzzzz@xyz.com', 'Harsha', 'Hi'),
(3, 'sriraghavpinnaka9848@gmail.com', 'Raghav', 'Hello'),
(4, 'sriraghavpinnaka9848@gmail.com', 'Raghav', 'Hii prends\r\n'),
(5, 'sriraghavpinnaka9848@gmail.com', 'Raghav', 'Raghav'),
(6, 'sriraghavpinnaka9848@gmail.com', 'Raghav', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `email`, `password`) VALUES
(3, 'Harsha', 'xyz@xyz.com', 'Harsha'),
(4, 'Raghav', 'sriraghavpinnaka9848@gmail.com', '@1234'),
(5, 'Dheeraj', 'xyz@gmail.com', '1234'),
(6, 'ABCD', 'ABCD@gmail.com', '@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
