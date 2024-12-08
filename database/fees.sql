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
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `student_rollno` int(5) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `student_class` varchar(5) NOT NULL,
  `paid` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `student_rollno`, `student_name`, `student_class`, `paid`, `total`, `remaining`, `status`) VALUES
(1, 1, 'Aarav Rajesh Sharma', '1st', 500, 1000, 500, 'Remaining'),
(2, 1, 'Vivaan Sita Patel', '2nd', 1000, 2000, 1000, 'Remaining'),
(3, 2, 'Ishaan Aarti Gupta', '2nd', 300, 2000, 1700, 'Remaining'),
(4, 1, 'Saanvi ravi Rao', '3rd', 3000, 3000, 0, 'Paid'),
(5, 2, 'Reyansh Kiran Mehta', '3rd', 1000, 3000, 2000, 'Remaining'),
(6, 1, 'Aanya Nilesh Deshmukh', '4th', 2000, 4000, 2000, 'Remaining'),
(7, 2, 'Arjun Neelam Singh', '4th', 4000, 4000, 0, 'Paid'),
(8, 1, 'Mira Manoj Joshi', '5th', 2000, 5000, 3000, 'Remaining'),
(9, 2, 'Kabir Sunita Verma', '5th', 0, 5000, 5000, 'Null'),
(10, 1, 'Kiara Vijay Nair', '6th', 2500, 6000, 3500, 'Remaining'),
(11, 2, 'Aditya Meera Rao', '6th', 2000, 6000, 4000, 'Remaining'),
(12, 1, 'Pooja Anil Kapoor', '7th', 2000, 7000, 5000, 'Remaining'),
(13, 2, 'Ravi Neeta Kumar', '7th', 4000, 7000, 3000, 'Remaining'),
(14, 3, 'Nisha Raj Patel', '7th', 4000, 7000, 3000, 'Remaining'),
(15, 1, 'Kartik Suman Sharma', '8th', 6000, 8000, 2000, 'Remaining'),
(16, 2, 'Sneha Vikram Gupta', '8th', 1000, 8000, 7000, 'Remaining'),
(17, 1, 'Amit Sanjay Agarwal', '9th', 5000, 9000, 4000, 'Remaining'),
(18, 2, 'Ritu Pooja Mehta', '9th', 9000, 9000, 0, 'Paid'),
(19, 1, 'Rohan Kavita Joshi', '10th', 3256, 10000, 6744, 'Remaining'),
(20, 2, 'Vikram Sonia Patel', '10th', 10000, 10000, 0, 'Paid');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
