-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 07:06 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electiveweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `mem_id` int(10) NOT NULL,
  `station` varchar(10) NOT NULL,
  `temperature` varchar(10) NOT NULL,
  `humidity` varchar(10) NOT NULL,
  `time1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`mem_id`, `station`, `temperature`, `humidity`, `time1`) VALUES
(26, 'A', '50', '30', '11:21:402019-10-15'),
(27, 'A', '50', '30', '11:21:562019-10-15'),
(28, 'A', '50', '30', '11:22:19 2019-10-15'),
(29, 'A', '50', '30', '11:22:34 & 2019-10-1'),
(30, 'A', '50', '30', '11:22:50 / 2019-10-1'),
(31, 'dasd', 'sadasd', 'asdasd', 'adsasd'),
(32, 'dasdas', 'dasda', 'sdasd', 'dasdasd'),
(33, 'dasdas', 'dasd', 'asdasd', 'asdasd'),
(34, 'ddddddd', 'dddddddddd', 'ddddddd', 'ddddddd'),
(35, 'A', '50', '30', '2019-10-15 / 11:28:4'),
(36, 'B', '20', '29', '2019-10-15 / 11:33:3'),
(37, 'B', '20', '29', '2019-10-15 / 11:33:4'),
(38, 'dasd', 'asdasd', 'asda', 'sdasd'),
(39, 'dasd', 'sadas', 'dasdasd', 'asdasd'),
(40, 'dddd', 'dddd', 'dddd', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mem_id_acc` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mem_id_acc`, `email`, `password`, `role`, `updated_at`, `created_at`) VALUES
(48, 'asd@gmail.com', 'asd', 'user', '2019-10-15 05:37:28', '0000-00-00 00:00:00'),
(49, 'cen@gmail.com', 'asd', 'admin', '2019-10-15 06:05:22', '0000-00-00 00:00:00'),
(50, 'jabo@gmail.com', 'asd', 'admin', '2019-10-15 06:18:34', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mem_id_acc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `mem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `mem_id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
