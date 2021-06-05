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
-- Database: `hr_side`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `clientv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`first_name`, `last_name`, `email_id`, `username`, `password`, `confirmpassword`, `mobile`, `client_id`, `address`, `clientv`) VALUES
('Bharti', 'Zutshi', 'ashutosh_bahadur@hotmail.com', 'CEO', 'hello', 'hello', 987654321, '001', 'Dda Flat Motia Khan , Motia Khan, Paharganj', 'client_verification.txt'),
('Aditya', 'Joshi', 'aj@gmail.com', 'CEO', 'hello', 'hello', 6789526734, '555', 'AADD1', 'client-det.txt');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(50) NOT NULL,
  `dept_head` varchar(50) NOT NULL,
  `no_of_employees` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `dept_head`, `no_of_employees`) VALUES
('Developement', 'Akash', 5);

-- --------------------------------------------------------

--
-- Table structure for table `emp_all`
--

CREATE TABLE `emp_all` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `joindate` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `callletter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_all`
--

INSERT INTO `emp_all` (`name`, `email`, `mobile`, `emp_id`, `joindate`, `role`, `resume`, `callletter`) VALUES
('Aditya', 'a@hotmail.com', 9786567943, 'LA-001', '24 May,2021', 'Employee', 'RESUME1.txt', 'CALLETTER1.txt');

-- --------------------------------------------------------

--
-- Table structure for table `ganttdata`
--

CREATE TABLE `ganttdata` (
  `task_id` varchar(25) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `sy` int(11) NOT NULL,
  `sm` int(11) NOT NULL,
  `sd` int(11) NOT NULL,
  `ey` int(11) NOT NULL,
  `em` int(11) NOT NULL,
  `ed` int(11) NOT NULL,
  `resource` varchar(50) NOT NULL,
  `per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ganttdata`
--

INSERT INTO `ganttdata` (`task_id`, `task_name`, `sy`, `sm`, `sd`, `ey`, `em`, `ed`, `resource`, `per`) VALUES
('1', 'task 1', 2021, 6, 1, 2021, 6, 14, 'task 1', 0),
('2', 'task 2', 2021, 6, 15, 2021, 6, 25, 'task 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `nameholiday` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`nameholiday`, `date`, `day`) VALUES
('Health Check up', '2021-05-19', 'Wednesday'),
('Test1', '2021-05-21', 'Friday'),
('eXTRA HOLIDAY', '2021-06-05', 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `leavereq`
--

CREATE TABLE `leavereq` (
  `emp_id` varchar(50) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `datefrom` varchar(50) NOT NULL,
  `dateto` varchar(50) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leavereq`
--

INSERT INTO `leavereq` (`emp_id`, `leavetype`, `datefrom`, `dateto`, `reason`) VALUES
('LA-0215', 'Casual Leave', '07/24/2021', '07/26/2021', 'Going to Family function'),
('LA-0215', 'Medical Leave', '06/12/2021', '06/07/2021', 'CCCCC');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `proj_name` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `priority` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `teamlead` varchar(50) NOT NULL,
  `selectteam` varchar(50) NOT NULL,
  `projd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`proj_name`, `client_name`, `start_date`, `end_date`, `priority`, `rate`, `type`, `teamlead`, `selectteam`, `projd`) VALUES
('prj1', 'xyz', '2021-05-11', '2021-06-03', 'High', '245', 'Hourly', 'Susie Willis', 'team1', 'proj1details.txt');

-- --------------------------------------------------------

--
-- Table structure for table `todolisthr`
--

CREATE TABLE `todolisthr` (
  `nameofwork` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `optional` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolisthr`
--

INSERT INTO `todolisthr` (`nameofwork`, `datetime`, `optional`) VALUES
('test1', '2021-05-21 04:12:00', 'hi'),
('todo1', '2021-05-21 04:12:00', 'hi'),
('todo2', '2021-06-05 06:31:00', 'todo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `empid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email_id`, `username`, `password`, `confirmpassword`, `mobile`, `usertype`, `empid`) VALUES
('Aditya', 'Joshi', 'ashutosh_bahadur@hotmail.com', 'user33321', 'hello', 'hello', 6789526734, 'Employee', 'LA-000'),
('J', 'Doe', 'jd@gmail.com', 'admin1', 'admin1', 'admin1', 678926262, 'HR/Manager', 'LA-0216'),
('Jessica', 'Doe', 'jjd2@gmail.com', 'user1', 'user1', 'user1', 9876543210, 'Employee', 'LA-0215'),
('Akash', 'T', 'AT@gmail.com', 'admin444', 'admin444', 'admin444', 987654321, 'HR/Manager', 'LA-00177');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ganttdata`
--
ALTER TABLE `ganttdata`
  ADD PRIMARY KEY (`task_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
