-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2024 at 11:39 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

DROP TABLE IF EXISTS `citizen`;
CREATE TABLE IF NOT EXISTS `citizen` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `gender` enum('M','F') NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`sid`, `name`, `gender`) VALUES
(1, 'piyumee', 'F'),
(3, 'jayani', 'F'),
(4, 'pawani', ''),
(6, '', 'F'),
(7, 'piyumee', 'F'),
(8, 'jayani', 'F'),
(9, 'piyumee', 'F'),
(10, 'piyumee', 'F'),
(11, 'piyumee', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('piyumee', 'bmi123');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `dob` date NOT NULL,
  `age` int NOT NULL,
  `height` int NOT NULL,
  `weight` int NOT NULL,
  `bmi` float NOT NULL,
  `status` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `gender` enum('M','F') NOT NULL,
  `dob` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `height` int DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `bmi` float DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `email` text,
  `country` text,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `gender`, `dob`, `age`, `height`, `weight`, `bmi`, `status`, `email`, `country`, `comment`) VALUES
(4, 'thamashi nawodya', 'F', '2024-06-22', 23, 154, 48, 20.2395, 'normal weight', 'thamshi20@gmail.com', 'Canada', ''),
(5, 'piyumee sathyanjalee', 'F', '2024-10-23', 14, 58, 26, 71.3436, 'Obese', 'piyumeesathyanjalee@gmail.com', 'Sri Lanka', ''),
(6, 'pawani sawidya', 'F', '2024-06-09', 29, 103, 29, 27.3353, 'Overweight', 'pawanisawidya@gmail.com', 'Switzerland', ''),
(7, 'lalith wijesinghe', 'M', '2024-06-16', 85, 56, 24, 76.5306, 'Obese', 'lalithwihesinghe@gmail.com', '', ''),
(8, 'upun abayakoon', 'M', '2024-06-28', 56, 78, 78, 128.205, 'Obese', 'upunabayakoon@gmail.com', 'USA', ''),
(9, 'asela sathyanjana', 'M', '2024-06-01', 56, 78, 56, 92.0447, 'Obese', 'aselasathyanjana23@gmail.com', '', ''),
(10, 'kawidu nirmal', 'M', '2024-09-13', 89, 57, 25, 76.9468, 'Obese', 'kawidunirmal56@gmail.com', 'USA', ''),
(11, 'yy', 'M', '2024-07-03', 451, 4534, 52, 0.0252953, 'Underweight', 'yy@gmail.com', 'Sri Lanka', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
