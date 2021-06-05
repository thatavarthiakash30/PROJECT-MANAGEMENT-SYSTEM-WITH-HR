-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 03:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_side`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_data`
--

CREATE TABLE `account_data` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `currentpassword` varchar(50) NOT NULL,
  `newpassword` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_data`
--

INSERT INTO `account_data` (`username`, `email`, `mobile`, `currentpassword`, `newpassword`, `confirmpassword`) VALUES
('user123', 'xyz@gmail.com', 1000000089, 'user123', 'hello', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `emp_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender2` varchar(25) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `ad1` varchar(50) NOT NULL,
  `ad2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`emp_id`, `name`, `gender2`, `birthdate`, `ad1`, `ad2`, `city`, `state`, `country`) VALUES
('123', 'John', 'male', '06/18/2021', 'ad1', 'ad2', '', 'New Delhi', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `proj_task`
--

CREATE TABLE `proj_task` (
  `gtext` text NOT NULL,
  `gdatetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proj_task`
--

INSERT INTO `proj_task` (`gtext`, `gdatetime`) VALUES
('Activity 1', '2021-06-05'),
('Activity2', '2021-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `skillsets`
--

CREATE TABLE `skillsets` (
  `emp_id` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `skillf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skillsets`
--

INSERT INTO `skillsets` (`emp_id`, `skills`, `skillf`) VALUES
('123', 'Dev', 'skill.txt');

-- --------------------------------------------------------

--
-- Table structure for table `todolistemp`
--

CREATE TABLE `todolistemp` (
  `nameofwork` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `optional` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolistemp`
--

INSERT INTO `todolistemp` (`nameofwork`, `datetime`, `optional`) VALUES
('test1', '2021-05-21 04:12:00', 'hi'),
('todo1', '2021-05-21 04:12:00', 'hi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
