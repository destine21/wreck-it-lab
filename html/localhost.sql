-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2018 at 09:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakebook`
--
DROP DATABASE IF EXISTS `fakebook`;
CREATE DATABASE IF NOT EXISTS `fakebook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fakebook`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` varchar(256) NOT NULL,
  `author` varchar(64) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Database: `wreck-it-lab`
--
DROP DATABASE IF EXISTS `wreck-it-lab`;
CREATE DATABASE IF NOT EXISTS `wreck-it-lab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wreck-it-lab`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(32) NOT NULL,
  `firstname` char(20) NOT NULL,
  `lastname` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `firstname`, `lastname`, `email`, `phone`, `role`) VALUES
(1, 'admin', 'bl2eakth3intern3t', 'Vanellope', 'Schweetz', 'flag{Ins3cul2eD1rect0bj3ct}@mail.com', '0888888888', 'admin'),
(2, 'felix', 'f1x1tfel1xjr', 'fixit', 'felix', 'fixit.fe@mail.com', '0111111111', 'user'),
(3, 'sergeant', 's3rge4ntc4lh0un', 'Sergeant', 'Calhoun', 'Ser.cal@mail.com', '0096636758', 'user'),
(4, 'king', 'k1ngc4ndy', 'King', 'Candy', 'King.candy@mail.com', '0111111119', 'user'),
(5, 'double', 'd4ndand0ubl3', 'Double', 'Dan', 'dandan.dou@mail.com', '0987654321', 'user'),
(6, 'galgadot', 'i4mg4lg4d0t', 'Gal', 'Gadot', 'gal.gadot@mail.com', '0123456789', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
