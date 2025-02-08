-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 06:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwayticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `passanger`
--

CREATE TABLE `passanger` (
  `email` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `ticket_no` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passanger`
--

INSERT INTO `passanger` (`email`, `password`, `name`, `phonenumber`, `age`, `gender`, `ticket_no`) VALUES
('candy@gmail.com', 'abcd1234..', 'tory lanz', '01703721889', 47, 'Male', 5164987),
('test.passanger@email.com', 'abcd1234..', 'test passanger', '01703721883', 43, 'Male', 3061886);

-- --------------------------------------------------------

--
-- Table structure for table `technical_supervision`
--

CREATE TABLE `technical_supervision` (
  `name` varchar(18) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technical_supervision`
--

INSERT INTO `technical_supervision` (`name`, `phone`, `email`, `password`) VALUES
('admin', '01703721823', 'admin@email.com', 'admin123.');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_no` int(8) NOT NULL,
  `source` varchar(35) NOT NULL,
  `destination` varchar(35) NOT NULL,
  `no_passanger` int(2) NOT NULL,
  `date` date NOT NULL,
  `train_no` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_no`, `source`, `destination`, `no_passanger`, `date`, `train_no`) VALUES
(2330301, 'Dhaka', 'Chittagong', 2, '2022-12-05', 'p110521'),
(3061886, 'Chittagong', 'Chittagong', 1, '2022-12-20', 'p110521'),
(6143208, 'Dhaka', 'Chittagong', 2, '2022-12-05', 'p110521'),
(6636054, 'Dhaka', 'Chittagong', 2, '2022-12-27', 'p110521'),
(8727904, 'Dhaka', 'Chittagong', 2, '2022-12-05', 'p110521');

-- --------------------------------------------------------

--
-- Table structure for table `traindetails`
--

CREATE TABLE `traindetails` (
  `train_no` varchar(8) NOT NULL,
  `train_name` varchar(15) NOT NULL,
  `compartment` varchar(12) NOT NULL,
  `reservation` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traindetails`
--

INSERT INTO `traindetails` (`train_no`, `train_name`, `compartment`, `reservation`) VALUES
('p110521', 'Albert', 'A', 9),
('p110521', 'Albert', 'B', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passanger`
--
ALTER TABLE `passanger`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ticket_no_2` (`ticket_no`),
  ADD KEY `ticket_no` (`ticket_no`),
  ADD KEY `ticket_no_3` (`ticket_no`);

--
-- Indexes for table `technical_supervision`
--
ALTER TABLE `technical_supervision`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_no`),
  ADD UNIQUE KEY `ticket_no` (`ticket_no`),
  ADD KEY `train_no` (`train_no`);

--
-- Indexes for table `traindetails`
--
ALTER TABLE `traindetails`
  ADD KEY `train_no` (`train_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`train_no`) REFERENCES `traindetails` (`train_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
