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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `stf_id` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(80) NOT NULL,
  `qualification` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`stf_id`, `full_name`, `email`, `phone_no`, `dob`, `gender`, `address`, `qualification`) VALUES
(1, 'Abhishek Raj Gupta', 'abhjirajgupta4250@soi.com', '8976498798', '2004-06-16', 'Male', '4654 Granville St French Village, NS B3K 5M1', 'B.Sc. (Computer Scince)'),
(2, 'chandrasden Melaram Yadav', 'viz_chandu932@soi.com', '9874657987', '2003-11-27', 'Male', 'Casut 113 1912 Leytron', 'B.Sc.(sociology)'),
(3, 'Kajal Rambhadur Sharma', 'kajuram510@soi.com', '9875449879', '2004-11-15', 'Female', 'Breitenstrasse 15 4011 Basel', 'B.Sc.(Mathematics and Statistics)'),
(4, 'Neha Ajay Yadav', 'nahuajjuyad4122@soi.com', '9874564987', '2003-07-23', 'Female', 'Via Gabbietta 10 1551 Vers-chez-Perrin', 'BA'),
(5, 'Shubham Jagdish  Verma', 'shubhamjaijai11221@soi.com', '8975649879', '2002-11-11', 'Male', 'Via Verbano 47 9240 Uzwi', 'B.Sc.(Chemistry)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`stf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `stf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
