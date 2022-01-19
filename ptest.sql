-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `User_Id` int(20) NOT NULL,
  `oop_r` int(20) NOT NULL,
  `oop_c` varchar(255) NOT NULL,
  `net_r` int(20) NOT NULL,
  `net_c` varchar(255) NOT NULL,
  `db_r` int(20) NOT NULL,
  `db_c` varchar(255) NOT NULL,
  `pro_r` int(20) NOT NULL,
  `pro_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`User_Id`, `oop_r`, `oop_c`, `net_r`, `net_c`, `db_r`, `db_c`, `pro_r`, `pro_c`) VALUES
(32, 4, 'Ø¨Ø§Ø´Û•', 2, 'Ø®Ø±Ø§Ù¾ Ù†ÛŒÛ•', 5, 'Ø²Û†Ø± Ø¨Ø§Ø´', 5, 'Ø²Û†Ø± Ø¨Ø§Ø´'),
(66, 1, 'not good', 2, 'not bad', 3, 'good', 5, 'the best'),
(69, 2, 'good', 3, 'better', 5, 'adsda', 4, 'naskas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(100) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Fullname` varchar(20) DEFAULT NULL,
  `UserType` varchar(20) NOT NULL,
  `tlesson` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `Username`, `Password`, `Fullname`, `UserType`, `tlesson`) VALUES
(1, 'laree', 'passs', 'fffname', 'Admin', ''),
(32, 'nareen', 'n1', 'Nareen Shirwan', 'Student', ''),
(33, 'basta', 'b123', 'Basta Azad ', 'Student', ''),
(34, 'Dr.Bryar', 'b123', 'Dr. Bryar Hassan', 'Teacher', 'db'),
(37, 'M.Salah', 's123', 'Salahadin', 'Teacher', 'pro'),
(58, 'Dr.Aram', 'a123456', 'Aram Ahmad', 'Teacher', 'net'),
(59, 'M.Rebaz', 'qwe123', 'Rebaz Nabi', 'Teacher', 'oop'),
(66, 'aaa', '123456', 'abc', 'Student', ''),
(67, 'lana', '555', 'lana azad', 'Student', ''),
(68, 'lavin', '123', 'lavin shirwan', 'Student', ''),
(69, 'lana', '123', 'lana ahmad', 'Student', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `User_Id_2` (`User_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
