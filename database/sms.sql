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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'Vinayak', 'Vinayak123', 'Vinayak Vishwakarma');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`stf_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `stf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
