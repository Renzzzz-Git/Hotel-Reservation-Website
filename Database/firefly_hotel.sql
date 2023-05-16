-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 12:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firefly_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `reservation_id`, `total_amount`, `payment_status`) VALUES
(14, 23, '4800.00', 0),
(15, 24, '4800.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` varchar(4) NOT NULL,
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sched_timeIn` time NOT NULL,
  `sched_timeOut` time NOT NULL,
  `time_in` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `F_name`, `L_name`, `username`, `password`, `sched_timeIn`, `sched_timeOut`, `time_in`, `time_out`) VALUES
('0001', 'Noel', 'Valencia', 'Noel_Val2122', '123456', '08:00:00', '16:00:00', '2023-05-16 18:47:47', '0000-00-00 00:00:00'),
('0002', 'Loise', 'Buena', 'Lo_Buena4432', '123456', '16:00:00', '24:00:00', '0000-00-00 00:00:00', '2023-05-10 19:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(4) NOT NULL,
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_num` varchar(12) NOT NULL,
  `A_date` datetime NOT NULL,
  `D_date` datetime NOT NULL,
  `NoPax` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `F_name`, `L_name`, `username`, `password`, `contact_num`, `A_date`, `D_date`, `NoPax`) VALUES
(21, 'Renz', 'Ayangco', 'Renz_Enzzo', '123456', '09165658554', '2023-05-01 08:14:04', '2023-05-05 11:14:04', 3),
(23, 'Lo', 'Buena', 'lobuena', 'Venture#1', '09565885231', '2023-05-14 23:25:09', '2023-05-15 23:25:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` varchar(13) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `member_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `msg`, `reply`, `member_id`) VALUES
('64605f059a9e8', 'sadfsdfsdf', 'nice 6', 21),
('64606c3632797', 'asdasda', '', 21),
('64606f498a071', 'asdasdadadasdsadasda', 'sdfs', 21),
('64606f500438e', 'fghfghfghfh', '', 21),
('64607125075d2', 'asdasdsa', '', 21),
('6460712688cbe', 'asdada', '', 21),
('64607128233b6', 'asdasda', '', 21),
('646071298b6b0', 'asdsad', '', 21),
('6462678f14223', 'ghghjhjhj', '', 21),
('646267fa7d2ab', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'nice', 21),
('64635f6c6bfec', 'Yep2', '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `ratereview`
--

CREATE TABLE `ratereview` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `review_text` text DEFAULT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `d_date` date NOT NULL,
  `no_of_pax` int(11) NOT NULL,
  `checkin_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `member_id`, `room_id`, `a_date`, `d_date`, `no_of_pax`, `checkin_status`) VALUES
(23, 21, 1021, '2023-05-16', '2023-05-19', 3, 0),
(24, 21, 1022, '2023-05-16', '2023-05-19', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `bed_type` varchar(50) NOT NULL,
  `occupancy` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` varchar(3) NOT NULL CHECK (`availability` in ('yes','no'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_number`, `room_type`, `bed_type`, `occupancy`, `price`, `availability`) VALUES
(1000, 'Courtyard', '1', 'Twin', 'Single-size', 2, '300.00', 'yes'),
(1001, 'Courtyard', '2', 'Twin', 'Single-size', 2, '300.00', 'yes'),
(1002, 'Courtyard', '3', 'Twin', 'Single-size', 2, '300.00', 'yes'),
(1003, 'Courtyard', '4', 'King', 'King-size', 2, '300.00', 'yes'),
(1004, 'Courtyard', '5', 'King', 'King-size', 2, '300.00', 'yes'),
(1005, 'Courtyard', '6', 'King', 'King-size', 2, '300.00', 'yes'),
(1006, 'Courtyard', '7', 'Quad', 'King-size', 4, '400.00', 'yes'),
(1007, 'Courtyard', '8', 'Quad', 'King-size', 4, '400.00', 'yes'),
(1008, 'Courtyard', '9', 'Quad', 'King-size', 4, '400.00', 'yes'),
(1009, 'Courtyard', '10', 'Quad', 'King-size', 4, '400.00', 'yes'),
(1010, 'Rooms in the West', '11', 'King', 'King-size', 2, '500.00', 'yes'),
(1011, 'Rooms in the West', '12', 'King', 'King-size', 2, '500.00', 'yes'),
(1012, 'Rooms in the West', '13', 'King', 'King-size', 2, '500.00', 'yes'),
(1013, 'Rooms in the West', '14', 'Family ', 'King-size, Queen-size, Single-size', 6, '500.00', 'yes'),
(1014, 'Rooms in the West', '15', 'Family ', 'King-size, Queen-size, Single-size', 6, '500.00', 'yes'),
(1015, 'Rooms in the West', '16', 'Family ', 'King-size, Queen-size, Single-size', 6, '500.00', 'yes'),
(1016, 'Rooms in the East', '17', 'Single', 'Single-size', 1, '400.00', 'yes'),
(1017, 'Rooms in the East', '18', 'Single', 'Single-size', 1, '400.00', 'yes'),
(1018, 'Rooms in the East', '19', 'King', 'King-size', 2, '500.00', 'yes'),
(1019, 'Rooms in the East', '20', 'King', 'King-size', 2, '500.00', 'yes'),
(1020, 'Rooms in the East', '21', 'King', 'King-size', 2, '500.00', 'yes'),
(1021, 'Penthouse', '22', 'Penthouse', 'King-size, Queen-size', 4, '1600.00', 'no'),
(1022, 'Penthouse', '23', 'Penthouse', 'King-size, Queen-size', 4, '1600.00', 'no'),
(1023, 'Cottages', '24', 'Single', 'Single-size', 1, '600.00', 'yes'),
(1024, 'Cottages', '25', 'Single', 'Single-size', 1, '600.00', 'yes'),
(1025, 'Cottages', '26', 'King', 'King-size', 2, '700.00', 'yes'),
(1026, 'Cottages', '27', 'King', 'King-size', 2, '700.00', 'yes'),
(1027, 'Cottages', '28', 'Family ', 'Queen-size, Single-size', 6, '900.00', 'no'),
(1028, 'Cottages', '29', 'Family', 'Queen-size, Single-size', 6, '900.00', 'no'),
(1029, 'Cottages', '30', 'Family', 'Queen-size, Single-size', 6, '900.00', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `timerecord`
--

CREATE TABLE `timerecord` (
  `time_id` varchar(13) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `emp_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timerecord`
--

INSERT INTO `timerecord` (`time_id`, `time_in`, `time_out`, `emp_id`) VALUES
('645b8424386e0', '2023-05-10 13:46:27', '2023-05-10 13:46:37', '0001'),
('645b849247450', '0000-00-00 00:00:00', '2023-05-10 13:48:32', '0001'),
('645b85cf62be5', '2023-05-10 19:53:29', '2023-05-10 19:53:44', '0002'),
('64635f54003c3', '2023-05-16 18:47:47', '0000-00-00 00:00:00', '0001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `ratereview`
--
ALTER TABLE `ratereview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `timerecord`
--
ALTER TABLE `timerecord`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ratereview`
--
ALTER TABLE `ratereview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2030;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratereview`
--
ALTER TABLE `ratereview`
  ADD CONSTRAINT `ratereview_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `timerecord`
--
ALTER TABLE `timerecord`
  ADD CONSTRAINT `timerecord_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
