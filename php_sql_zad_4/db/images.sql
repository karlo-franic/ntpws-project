-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 01, 2025 at 08:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntpws_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `description`) VALUES
(1, 'figure.jpg', 'FA Cup semi-final defeat'),
(2, '1940s_1.jpg', 'Archie Macaulay, a fellow Scot'),
(3, '1940s_2.jpg', 'Boleyn Ground was hit by a German V-1 flying bomb'),
(6, '1940s_3.jpg', 'Wolverhampton Wanderers and Plymouth Argyle'),
(7, '1940s_4.jpg', 'Frank Neary'),
(8, '1950s_1.jpg', 'long discussions at Cassettari’s Café on Barking Road'),
(9, '1950s_2.jpg', 'Malcolm Allison'),
(10, '1950s_3.jpg', 'Ted Fenton'),
(11, '1960s.jpg', 'the FA Cup, the European Cup Winners’ Cup'),
(20, 'image_679e44c1dfc49.jpg', NULL),
(21, 'image_679e44c1e1824.jpg', NULL),
(22, 'image_679e556919237.jpg', NULL),
(23, 'image_679e55691d45b.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
