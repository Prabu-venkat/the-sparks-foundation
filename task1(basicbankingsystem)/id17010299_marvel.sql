-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2021 at 09:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17010299_marvel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(5) NOT NULL,
  `customername` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customername`, `email`, `balance`) VALUES
(1, 'Tony', 'tony123@gmail.com', 20000),
(2, 'Steve', 'steve123@gmail.com', 20000),
(3, 'Thor', 'thor123@gmail.com', 20000),
(4, 'Bucky', 'bucky123@gmail.com', 20000),
(5, 'Loki', 'loki123@gmail.com', 20000),
(6, 'Banner', 'banner123@gmail.com', 20000),
(7, 'Strange', 'strange123@gmail.com', 20000),
(8, 'Clint', 'clint123@gmail.com', 20000),
(9, 'Natasha', 'natasha123@gmail.com', 20000),
(10, 'Scott', 'scott123@gmail.com', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(5) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `amount` int(30) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `sender`, `receiver`, `amount`, `dt`) VALUES
(1, 'Thor', 'Tony', 30, '2021-06-10 04:08:59'),
(2, 'Tony', 'Steve', 20, '2021-06-10 04:15:35'),
(3, 'Steve', 'Tony', 20, '2021-06-11 02:29:22'),
(4, 'Tony', 'Steve', 500, '2021-06-11 05:01:35'),
(5, 'Tony', 'Banner', 20, '2021-06-11 08:13:16'),
(6, 'Tony', 'Steve', 500, '2021-06-11 08:18:38'),
(7, 'Thor', 'Loki', 1000, '2021-06-11 09:30:08'),
(8, 'Tony', 'Clint', 20, '2021-06-11 14:41:01'),
(9, 'Thor', 'Steve', 300, '2021-06-11 14:52:18'),
(14, 'Tony', 'Steve', 5000, '2021-06-15 14:33:51'),
(15, 'Steve', 'Tony', 5000, '2021-06-17 08:44:53'),
(16, 'Steve', 'Tony', 5000, '2021-06-17 08:44:53'),
(17, 'Tony', 'Steve', 5000, '2021-06-17 08:45:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
