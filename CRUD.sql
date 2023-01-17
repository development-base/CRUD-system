-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2023 at 03:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CRUD`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `admin_id` int(2) NOT NULL,
  `admin_username` varchar(10) NOT NULL,
  `admin_password` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `bod` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `barangay` varchar(35) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `province` varchar(35) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `sss` varchar(50) DEFAULT NULL,
  `tin` varchar(50) DEFAULT NULL,
  `philhealth` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `bod`, `gender`, `barangay`, `city`, `province`, `contact_no`, `email`, `department`, `sss`, `tin`, `philhealth`) VALUES
(2, 'brand', '1234', 'Brad', 'Quavo', 'Feeterrr', '2016-01-27', 'M', 'Sagayad', 'City of San Fernando', 'La Union', '+639384572831', 'brad.feet@gmail.com', 'ITSM', '324-24-2523', '113-123-343-584', '02-293847568-3'),
(4, 'jampong', '4321', 'Jampong', 'Kem', 'Lamar', '1996-01-03', 'M', 'Sevilla', 'City of San Fernando', 'La Union', '+639384735682', 'jampongisreal@gmail.com', 'FAS', '413-23-4125', '234-342-423-523', '03-3948573-2'),
(5, 'Kim4234', '1234', 'Kim', 'Jong', 'Un', '1993-01-05', 'M', 'Abut', 'City of San Fernando', 'La Union', '+639348572348', 'kingjongun@gmail.com', 'FAS', '483-23-5839', '131-344-355-583', '04-238574689-1'),
(6, 'jack32', '1234', 'Jack', 'Son', 'LeBron', '1993-01-26', 'M', 'Alzate', 'Bangar', 'La Union', '+639348573581', 'jacksonlebron@gmail.com', 'ITSM', '642-34-3958', '432-234-958-390', '98-285647364-2'),
(7, 'axel34', '1234', 'Axel', 'Volt', 'Rose', '1999-06-11', 'F', 'Bacsil', 'City of San Fernando', 'La Union', '+639238563742', 'axelvolt@gmail.com', 'ORD', '412-58-4938', '242-594-394-239', '56-385678937-8'),
(12, 'asdfasf', 'adsfasdf', 'asdfasf', 'asdfasdf', 'asdfasfs', '1998-01-10', 'F', 'asdfasf', 'asdfasdf', 'asdfasf', '+633242342342', 'asdfasff@gmail.com', 'ITSM', '213-34-2453', '133-233-234-343', '24-121231313-2'),
(13, 'New32', 'asdfasf', 'Eerrq', 'Wqee', 'Teress', '2023-01-03', 'F', 'asdfs', 'asdfasdf', 'asfdasf', '+632342432423', 'fhasfhasfdhuasdfh@gmail.com', 'ITSM', '131-23-5345', '123-123-123-132', '02-121212313-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
