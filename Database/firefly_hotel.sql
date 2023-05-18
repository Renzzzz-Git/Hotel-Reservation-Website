-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 08:22 AM
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
('0001', 'Noel', 'Valencia', 'Noel_Val2122', '123456', '08:00:00', '16:00:00', '0000-00-00 00:00:00', '2023-05-17 14:19:04'),
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
('64635f6c6bfec', 'Yep2', '', 21),
('6464552944494', 'wassup', '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `newseventtable`
--

CREATE TABLE `newseventtable` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `NEDate` date NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newseventtable`
--

INSERT INTO `newseventtable` (`id`, `Title`, `NEDate`, `Description`, `Image`) VALUES
(93, 'dfgdfgd', '2023-05-19', 'dfgdfgdf', 'Dinner Party.jpg'),
(94, 'Pool Party', '2023-05-19', 'fsdfsdfsdf', 'Pool Party.jpeg');

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

--
-- Dumping data for table `ratereview`
--

INSERT INTO `ratereview` (`id`, `member_id`, `rating`, `review_text`, `review_date`) VALUES
(1, 21, '4.0', 'Nice Room', '2023-05-17');

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
  `total_bill` decimal(10,2) NOT NULL,
  `checkin_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `member_id`, `room_id`, `a_date`, `d_date`, `no_of_pax`, `total_bill`, `checkin_status`) VALUES
(51, 21, 1000, '2023-05-18', '2023-05-20', 1, '3200.00', 0);

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
(1000, 'Penthouse', '1', 'Penthouse', 'King, Queen', 4, '1600.00', 'yes'),
(1001, 'Penthouse', '2', 'Penthouse', 'King, Queen', 4, '1600.00', 'yes'),
(1002, 'Ocean View Cottage', '3', 'Single', 'Single', 1, '600.00', 'yes'),
(1003, 'Ocean View Cottage', '4', 'Single', 'Single', 1, '600.00', 'yes'),
(1004, 'Ocean View Cottage', '5', 'King', 'King', 2, '700.00', 'yes'),
(1005, 'Ocean View Cottage', '6', 'King', 'King', 2, '700.00', 'yes'),
(1006, 'Ocean View Cottage', '7', 'Group/Family', 'Single (4), Queen', 6, '900.00', 'yes'),
(1007, 'Ocean View Cottage', '8', 'Group/Family', 'Single (4), Queen', 6, '900.00', 'yes'),
(1008, 'Ocean View Cottage', '9', 'Group/Family', 'Single (4), Queen', 6, '900.00', 'yes'),
(1009, 'Sunrise Scenic View', '10', 'Single', 'Single', 1, '400.00', 'yes'),
(1010, 'Sunrise Scenic View', '11', 'Single', 'Single', 1, '400.00', 'yes'),
(1011, 'Sunrise Scenic View', '12', 'Single', 'Single', 1, '500.00', 'yes'),
(1012, 'Sunrise Scenic View', '13', 'Single', 'Single ', 1, '500.00', 'yes'),
(1013, 'Sunrise Scenic View ', '14', 'Single', 'Single', 1, '500.00', 'yes'),
(1014, 'Sunset Scenic View', '15', 'King', 'King', 2, '500.00', 'yes'),
(1015, 'Sunset Scenic View', '16', 'King', 'King', 2, '500.00', 'yes'),
(1016, 'Sunset Scenic View', '17', 'King', 'King', 2, '500.00', 'yes'),
(1017, 'Sunset Scenic View', '18', 'Group/Family', 'King (2), Single (2)', 6, '700.00', 'yes'),
(1018, 'Sunset Scenic View', '19', 'Group/Family', 'King (2), Single (2)', 6, '700.00', 'yes'),
(1019, 'Sunset Scenic View', '20', 'Group/Family', 'King (2), Single (2)', 6, '700.00', 'yes'),
(1020, 'Courtyard', '21', 'Twin', 'Single (2)', 2, '300.00', 'yes'),
(1021, 'Courtyard', '22', 'Twin', 'Single (2)', 2, '300.00', 'yes'),
(1022, 'Courtyard', '23', 'Twin', 'Single (2)', 2, '300.00', 'yes'),
(1023, 'Courtyard', '24', 'King', 'King', 2, '300.00', 'yes'),
(1024, 'Courtyard', '25', 'King', 'King', 2, '300.00', 'yes'),
(1025, 'Courtyard', '26', 'King', 'King', 2, '300.00', 'no'),
(1026, 'Courtyard', '27', 'Quad', 'Single (4)', 4, '400.00', 'yes'),
(1027, 'Courtyard', '28', 'Quad', 'Single (4)', 4, '400.00', 'yes'),
(1028, 'Courtyard', '29', 'Quad', 'Single (4)', 4, '400.00', 'yes'),
(1029, 'Courtyard', '30', 'Quad', 'Single (4)', 4, '400.00', 'yes');

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
('64635f54003c3', '2023-05-16 18:47:47', '2023-05-17 13:49:37', '0001'),
('64646af472b17', '2023-05-17 13:49:40', '2023-05-17 13:49:41', '0001'),
('64646afae536c', '2023-05-17 13:49:46', '2023-05-17 13:49:50', '0001'),
('64646b28c5f5f', '2023-05-17 13:50:32', '2023-05-17 13:51:29', '0001'),
('64646bf11c242', '2023-05-17 13:53:53', '2023-05-17 13:54:33', '0001'),
('646471d740ed0', '2023-05-17 14:19:03', '2023-05-17 14:19:04', '0001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `newseventtable`
--
ALTER TABLE `newseventtable`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `reservation_ibfk_2` (`room_id`);

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
-- AUTO_INCREMENT for table `newseventtable`
--
ALTER TABLE `newseventtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `ratereview`
--
ALTER TABLE `ratereview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2030;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timerecord`
--
ALTER TABLE `timerecord`
  ADD CONSTRAINT `timerecord_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
