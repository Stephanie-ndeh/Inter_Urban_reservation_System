-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 03:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interurban`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `BusType` varchar(200) DEFAULT NULL,
  `departure_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `route_id`, `BusType`, `departure_date`) VALUES
(1, 1, 'VIP', '2024-03-29'),
(2, 1, 'REGULAR', '2024-03-29'),
(3, 2, 'VIP', '2024-03-29'),
(4, 3, 'VIP', '2024-03-29'),
(6, 2, 'REGULAR', '2024-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Douala'),
(2, 'Yaounde'),
(3, 'Buea'),
(4, 'Bamenda'),
(7, 'Limbe');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `cardNo` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `fname`, `cardNo`, `Gender`, `email`, `phoneNo`) VALUES
(49, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '555555555'),
(50, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '3333'),
(51, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '12341234'),
(52, '', '', 'Female', '', ''),
(53, '', '', 'Female', '', ''),
(54, '', '', 'Female', '', ''),
(55, 'Stephanie', '12341234', 'Female', 'steph@gmail.com', '12341234'),
(56, 'Stephanie', '12341234', 'Female', 'steph@gmail.com', '12341234'),
(57, 'chrisrtian', '123123', 'male', 'christian@gmail.com', '123123'),
(58, 'chrisrtian', '123123', 'male', 'christian@gmail.com', '123123'),
(59, 'chrisrtian', '123123', 'male', 'christian@gmail.com', '123123'),
(60, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '1111111'),
(61, 'sylvia', '12341234', 'Female', 'sylvia@gmail.com', '12341234'),
(62, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '333'),
(63, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '333'),
(64, 'sylvia', '12341234', 'Female', 'sylvia@gmail.com', '12341234'),
(65, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '111111'),
(66, 'Douala, Littoral', 'jane', 'Female', 'manager@manager.com', '3333333333'),
(67, 'Stephanie', '12341234', 'Female', 'steph@gmail.com', '12341234'),
(68, 'Stephanie', '12341234', 'Female', 'ndeh123@gmail.com', '12341234'),
(74, 'Douala, Littoral', 'jane', 'Female', 'test@gmail.com', '111111111'),
(75, 'Stephanie', 'jane', 'Female', 'steph@gmail.com', '111111111'),
(76, '', '', 'Female', '', ''),
(77, 'Douala, Littoral', 'jane', 'Female', 'jane123@gmail.com', '123123'),
(78, 'Douala, Littoral', 'jane', 'Female', 'steph@gmail.com', ''),
(79, '', '', 'Female', '', ''),
(80, 'Douala, Littoral', 'jane', 'Female', 'steph@gmail.com', '222222'),
(81, 'Douala, Littoral', 'jane', 'Female', 'awa@gmail.com', 'dddd'),
(82, 'Douala, Littoral', 'jane', 'Female', 'jane123@gmail.com', '111111111'),
(83, 'Stephanie', 'ndeh', 'Female', 'ndehstephanie@gmail.com', '12341234'),
(84, 'Stephanie', 's', 'Female', '', ''),
(85, 'stephhanie', '123123123', 'Female', 'ndeh123@gmail.com', '123123'),
(86, '', '', 'Female', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `passenger_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `bus_id` int(11) DEFAULT NULL,
  `seat_number` int(100) NOT NULL,
  `seat_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `passenger_id`, `seat_id`, `bus_id`, `seat_number`, `seat_price`) VALUES
(1, 54, NULL, 1, 10, 0),
(2, 54, NULL, 1, 11, 0),
(3, 56, NULL, 1, 10, 0),
(4, 56, NULL, 1, 11, 0),
(5, 59, 10, 1, 10, 0),
(6, 59, 11, 1, 11, 0),
(7, 60, 10, 1, 10, 0),
(8, 60, 11, 1, 11, 0),
(9, 61, 10, 1, 10, 0),
(10, 61, 11, 1, 11, 0),
(11, 62, 10, 1, 10, 0),
(12, 62, 11, 1, 11, 0),
(19, 66, 10, 1, 10, 0),
(20, 66, 11, 1, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `from_location_id` int(11) NOT NULL,
  `to_location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `from_location_id`, `to_location_id`) VALUES
(1, 1, 2),
(2, 4, 3),
(3, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `seat_number` int(100) DEFAULT NULL,
  `is_booked` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `bus_id`, `seat_number`, `is_booked`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0),
(3, 1, 3, 0),
(4, 1, 4, 0),
(5, 1, 5, 0),
(6, 1, 6, 0),
(7, 1, 7, 0),
(8, 1, 8, 0),
(9, 1, 9, 0),
(10, 1, 10, 0),
(11, 1, 11, 1),
(12, 1, 12, 0),
(13, 1, 13, 0),
(14, 1, 14, 0),
(15, 1, 15, 0),
(16, 1, 16, 0),
(17, 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` int(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'mbusheri ndeh', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `passenger_id` (`passenger_id`),
  ADD KEY `seat_id` (`seat_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_location_id` (`from_location_id`),
  ADD KEY `to_location_id` (`to_location_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`passenger_id`) REFERENCES `passengers` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`),
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`);

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_ibfk_1` FOREIGN KEY (`from_location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`to_location_id`) REFERENCES `locations` (`id`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
