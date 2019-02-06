-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 02:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `University` varchar(255) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `Program` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `DateFromTo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`University`, `Degree`, `Program`, `Location`, `DateFromTo`) VALUES
('New Bulgarian University', 'Masters degree', 'Software technology in internet', 'Sofia', 'October 2016 - till now '),
('New Bulgarian University', 'Bachelors degree', 'Computer science', 'Sofia', 'October 2010 - June 2015 '),
('151 NSES', 'Secondary school', '', 'Sofia', 'September 2002 - July 2007'),
('Java Base - MNknowledge', 'Additional Courses', '', 'Sofia', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `Company` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Sector` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `DateFromTo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`Company`, `Position`, `Sector`, `Location`, `DateFromTo`) VALUES
('Orion5', 'Technical manager', 'Electronics/electrical/machinery', 'Sofia', 'October 2015 - till now '),
('DMG Web', 'Programmer Internship', 'Internet/E-commerce', 'Sofia', 'October 2017 - December 2017');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`FirstName`, `LastName`, `Country`, `City`, `Tel`, `Email`) VALUES
('Deyan', 'Gigov', 'Bulgaria', 'Sofia', '0883421119', 'denigigov@mail.bg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `Backend` varchar(255) NOT NULL,
  `Frontend` varchar(255) NOT NULL,
  `Data_base` varchar(255) NOT NULL,
  `IDE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`Backend`, `Frontend`, `Data_base`, `IDE`) VALUES
('Java, JEE, Spring, Maven', 'HTML5, CSS3, Bootstrap, Javascript, PHP, Ajax, JQuery', 'MySQL, MongoDB, PostgreSQL', 'Intellij, Git');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
