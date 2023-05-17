-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 04:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newseventdatabase`
--

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
(64, 'Vocaloid Live Band', '2023-05-20', 'As you enter the room, you will be greeted by a serene and tranquil atmosphere, with tasteful décor that creates a cozy and relaxing ambiance. The courtyard location provides a peaceful escape from the hustle and bustle of the city, allowing you to fully unwind and recharge.\r\n     ', 'download.jfif'),
(65, 'Courtyard Pool Party', '2023-05-21', 'A pool party is a fun way to celebrate many special occasions. Planning a pool party can seem like a lot of work, but it can actually be a simple process. In order to plan a pool party, you will need to choose the date and location, invite guests, and create a party atmosphere. Get ready to make a splash with your next pool party!', 'poolpartyessentials.jpeg'),
(67, 'Dinner Party ', '2023-05-24', 'Food, drink, friends, good conversation — a dinner party is, in the end, a simple and enduring combination of ingredients, made unique by what hosts and guests infuse the evening with. To help you achieve a more flawless and fun-filled gathering, here are a set of guidelines with everything you need to know about throwing your best dinner party.', 'sdaasdas.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newseventtable`
--
ALTER TABLE `newseventtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newseventtable`
--
ALTER TABLE `newseventtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
