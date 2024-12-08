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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `parent_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(80) NOT NULL,
  `class` varchar(10) NOT NULL,
  `roll_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `parent_name`, `email`, `phone_no`, `dob`, `gender`, `address`, `class`, `roll_no`) VALUES
(1, 'Aarav Sharma', 'Rajesh Sharma', 'aarav.sharma@example.com', '987-654-3210', '2014-01-10', 'Male', 'Kalwa, Thane', '1st Grade', '01'),
(2, 'Vivaan Patel', 'Sita Patel', 'vivaan.patel@example.com', '987-654-3211', '2014-02-20', 'Male', 'Kalwa, Thane', '2nd Grade', '01'),
(3, 'Ishaan Gupta', 'Aarti Gupta', 'ishaan.gupta@example.com', '987-654-3212', '2013-03-15', 'Male', 'Kalwa, Thane', '2nd Grade', '02'),
(4, 'Saanvi Rao', 'Ravi Rao', 'saanvi.rao@example.com', '987-654-3213', '2013-04-10', 'Female', 'Kalwa, Thane', '3rd Grade', '01'),
(5, 'Reyansh Mehta', 'Kiran Mehta', 'reyansh.mehta@example.com', '987-654-3214', '2012-05-25', 'Male', 'Kalwa, Thane', '3rd Grade', '02'),
(6, 'Aanya Deshmukh', 'Nilesh Deshmukh', 'aanya.deshmukh@example.com', '987-654-3215', '2012-06-30', 'Female', 'Kalwa, Thane', '4th Grade', '01'),
(7, 'Arjun Singh', 'Neelam Singh', 'arjun.singh@example.com', '987-654-3216', '2011-07-15', 'Male', 'Kalwa, Thane', '4th Grade', '02'),
(8, 'Mira Joshi', 'Manoj Joshi', 'mira.joshi@example.com', '987-654-3217', '2011-08-20', 'Female', 'Kalwa, Thane', '5th Grade', '01'),
(9, 'Kabir Verma', 'Sunita Verma', 'kabir.verma@example.com', '987-654-3218', '2010-09-12', 'Male', 'Kalwa, Thane', '5th Grade', '02'),
(10, 'Kiara Nair', 'Vijay Nair', 'kiara.nair@example.com', '987-654-3219', '2010-10-05', 'Female', 'Kalwa, Thane', '6th Grade', '1'),
(11, 'Aditya Rao', 'Meera Rao', 'aditya.rao@example.com', '987-654-3220', '2009-11-22', 'Male', 'Kalwa, Thane', '6th Grade', '2'),
(12, 'Pooja Kapoor', 'Anil Kapoor', 'pooja.kapoor@example.com', '987-654-3221', '2009-12-13', 'Female', 'Kalwa, Thane', '7th Grade', '1'),
(13, 'Ravi Kumar', 'Neeta Kumar', 'ravi.kumar@example.com', '987-654-3222', '2008-01-05', 'Male', 'Kalwa, Thane', '7th Grade', '2'),
(14, 'Nisha Patel', 'Raj Patel', 'nisha.patel@example.com', '987-654-3223', '2008-02-17', 'Female', 'Kalwa, Thane', '7th Grade', '3'),
(15, 'Kartik Sharma', 'Suman Sharma', 'kartik.sharma@example.com', '987-654-3224', '2007-03-20', 'Male', 'Kalwa, Thane', '8th Grade', '1'),
(16, 'Sneha Gupta', 'Vikram Gupta', 'sneha.gupta@example.com', '987-654-3225', '2007-04-25', 'Female', 'Kalwa, Thane', '8th Grade', '2'),
(17, 'Amit Agarwal', 'Sanjay Agarwal', 'amit.agarwal@example.com', '987-654-3228', '2005-07-25', 'Male', 'Kalwa, Thane', '9th Grade', '1'),
(18, 'Ritu Mehta', 'Pooja Mehta', 'ritu.mehta@example.com', '987-654-3229', '2005-08-30', 'Female', 'Kalwa, Thane', '9th Grade', '2'),
(19, 'Rohan Joshi', 'Kavita Joshi', 'rohan.joshi@example.com', '987-654-3230', '2004-09-10', 'Male', 'Kalwa, Thane', '10th Grade', '1'),
(20, 'Vikram Patel', 'Sonia Patel', 'vikram.patel@example.com', '987-654-3232', '2003-11-25', 'Male', 'Kalwa, Thane', '10th Grade', '2');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
