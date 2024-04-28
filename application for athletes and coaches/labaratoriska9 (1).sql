-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 11:02 AM
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
-- Database: `labaratoriska9`
--

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coaches_id` int(11) NOT NULL,
  `coaches_name` varchar(255) NOT NULL,
  `coaches_embg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`coaches_id`, `coaches_name`, `coaches_embg`) VALUES
(1, 'Martin', '0703002490006'),
(8, 'Filip', '1802997490005');

-- --------------------------------------------------------

--
-- Table structure for table `sportgroups`
--

CREATE TABLE `sportgroups` (
  `sportgroups_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dayOfWeek` int(50) NOT NULL,
  `hour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sportgroups`
--

INSERT INTO `sportgroups` (`sportgroups_id`, `location`, `dayOfWeek`, `hour`) VALUES
(1, 'asd', 0, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sports_id` int(11) NOT NULL,
  `sports_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sports_id`, `sports_name`) VALUES
(1, 'adsf'),
(2, 'Futbal'),
(3, 'Kosarka'),
(4, 'Rakomet'),
(5, 'Hokej');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_embg` varchar(249) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_embg`, `student_address`, `student_phone`, `student_class`) VALUES
(1, 'Filip', '1802997490005', 'Krste Misirkov br. 27', '078-605-738', 'Doktorant'),
(2, 'Martin', '0703002490006', 'Ovcepolska 51A', '078-368-140', 'III '),
(3, 'Ristov', '1105946450001', 'Meckuevci ', '032-440-657', 'Magister');

-- --------------------------------------------------------

--
-- Table structure for table `student_sport`
--

CREATE TABLE `student_sport` (
  `student_id` int(11) NOT NULL,
  `sportgroups_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`coaches_id`);

--
-- Indexes for table `sportgroups`
--
ALTER TABLE `sportgroups`
  ADD PRIMARY KEY (`sportgroups_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sports_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_sport`
--
ALTER TABLE `student_sport`
  ADD PRIMARY KEY (`sportgroups_id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `coaches_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sportgroups`
--
ALTER TABLE `sportgroups`
  MODIFY `sportgroups_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sports_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sportgroups`
--
ALTER TABLE `sportgroups`
  ADD CONSTRAINT `sportgroups_ibfk_1` FOREIGN KEY (`sportgroups_id`) REFERENCES `sports` (`sports_id`),
  ADD CONSTRAINT `sportgroups_ibfk_2` FOREIGN KEY (`sportgroups_id`) REFERENCES `coaches` (`coaches_id`);

--
-- Constraints for table `student_sport`
--
ALTER TABLE `student_sport`
  ADD CONSTRAINT `student_sport_ibfk_1` FOREIGN KEY (`sportgroups_id`) REFERENCES `sportgroups` (`sportgroups_id`),
  ADD CONSTRAINT `student_sport_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
