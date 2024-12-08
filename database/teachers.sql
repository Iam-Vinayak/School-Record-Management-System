-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 04:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tr_id` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(80) NOT NULL,
  `qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tr_id`, `full_name`, `email`, `phone_no`, `dob`, `gender`, `address`, `qualification`) VALUES
(1, 'Arun Mehta', 'arun.mehta@soi.com', '987-654-3210', '1975-02-10', 'Male', 'Wagle Estate, Thane', 'M.Sc. Mathematics'),
(2, 'Neelam Joshi', 'neelam.joshi@soi.com', '987-654-3211', '1980-05-25', 'Female', 'Kalwa, Thane', 'M.A. English'),
(3, 'Ravi Iyer', 'ravi.iyer@soi.com', '987-654-3212', '1978-08-15', 'Male', 'Kalwa, Thane', 'B.Ed., M.A. History'),
(4, 'Aditi Rao', 'aditi.rao@soi.com', '987-654-3213', '1982-12-05', 'Female', 'Kalwa, Thane', 'M.Sc. Physics'),
(5, 'Vikram Patel', 'vikram.patel@soi.com', '987-654-3214', '1981-03-30', 'Male', 'Kalwa, Thane', 'M.A. Geography'),
(6, 'Sunita Sharma', 'sunita.sharma@soi.com', '987-654-3215', '1985-11-22', 'Female', 'Kalwa, Thane', 'M.A. Hindi');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
