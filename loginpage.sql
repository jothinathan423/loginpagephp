-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 01:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `Password`) VALUES
(1, 'jothinathan', 'jothinathannagarajan@gmail.com', '$2y$10$Or8V/GfGEhQYw/SLrtXPH.e0N3zNy2Lp9.BYFUc77gd92VI7gNegG'),
(2, 'jothinathan1', 'jothinathannagarajan@gmail.com', '$2y$10$r0/sLadRb2j0wnguy2c0Me4RMz1PxSDqgwC1lKUAW395NW.SxZjn.'),
(3, 'jothinathan12', 'jothinathannagarajan@gmail.com', '$2y$10$Eap.5XsTZFtsVZqoaMr7vOogJpF4xDur8m.O8g5mMRhtj0Xl5ZUVq'),
(4, 'jothinathan2232323', 'jothinathannagarajan@gmail.com', '$2y$10$A15sEQMH.35Iq4r.OQhn1er432CqmNAeaL727Jv6WoUliELP6hX0O'),
(5, 'jothinathan11', 'jothinathannagarajan@gmail.com', '$2y$10$votxa6eQDZ5J7BQC5CGSi.NPmJoliCX.FKsoKjHPR0OeuUfzw2U6W'),
(6, 'archana', 'jothinathannagarajan@gmail.com', '$2y$10$lk.msrCn27joz3NZjh2SAuHBTlSummmzNbULrs1uDM8USo5pbF8Vq'),
(7, '', '', ''),
(8, '12345', 'jothinathannagarajan@gmail.com', '$2y$10$sFsBjwnu1xte/W14iZQoZuDbxajNQoKP8mlWmMcULmHSvbwnAmTlu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
