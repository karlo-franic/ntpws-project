-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 01, 2025 at 08:30 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `archive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `country`, `city`, `address`, `date_of_birth`, `archive`, `role`) VALUES
(1, 'Ivan', 'Horvat', 'ihorvat@tvz.hr', '$2y$12$uiImynkg2rXwMR8eBpes0eP3jksR306eAOtjpiH7DzBENoDsjJ2Wu', 'HR', 'Zagreb', 'Trg Bana 1', '2000-01-01', 'N', 'editor'),
(3, 'Karlo', 'Franić', 'kfranic@tvz.hr', '$2y$12$akiElP0T./GArYLVhyzaZur92ynd9BmXMlUhbXYnEx0IT8IZvSw46', 'AM', 'Zagreb', 'Miroslava Milića 10', '1999-01-05', 'N', 'admin'),
(4, 'Ana', 'Anić', 'aanic@tvz.hr', '$2y$12$jnm23tiKqElLzNerE0L4OefVwMIOo7awRu1FIRcUL4IJmgGwitOvO', 'GB', 'London', 'Math st. 1', '2004-03-14', 'N', 'user'),
(5, 'Luka', 'Lukić', 'llukic@tvz.hr', '$2y$12$BHN4W2juOZ0BbCjWe0eWWu6oE81fxLzpNB5q11t8m5T1R9FPCgG.y', 'HR', 'Split', 'Splitska Riva 1', '2000-01-09', 'N', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
