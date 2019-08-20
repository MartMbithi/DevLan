-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2019 at 01:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devlan_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(20) NOT NULL,
  `project_name` varchar(2000) NOT NULL,
  `project_desc` longtext NOT NULL,
  `project_files` varchar(200) NOT NULL,
  `project_category` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_desc`, `project_files`, `project_category`, `user_id`, `user_email`, `date_created`) VALUES
(8, 'Car Rental System', 'CRS is an online web based application that runs on php and html ', 'car.zip', 'FullStack WebApp', '1', 'martdevelopers254@gmail.com', 'Thu Aug 2019');

-- --------------------------------------------------------

--
-- Table structure for table `recovery_keys`
--

CREATE TABLE `recovery_keys` (
  `rid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `valid` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recovery_keys`
--

INSERT INTO `recovery_keys` (`rid`, `userID`, `token`, `valid`) VALUES
(1, 1, '8c6735b69338c7cf7a0e222173157fc3', 1),
(2, 1, '220804ac6b0843915ef227504046a057', 1),
(3, 1, '8a01e19ce5398ba737a0c0a2eb5969d1', 1),
(4, 1, '3bec2725047f7142f06bf4f2a046ec9d', 1),
(5, 1, '7c62c4fff69f8ca104f157b1fea3378c', 1),
(6, 1, '28ef779db0107373dd5b9ff96423d75e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dpic` varchar(200) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `bio` text NOT NULL,
  `skill` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `username`, `password`, `dpic`, `cover`, `bio`, `skill`, `dob`, `phone`, `location`, `website`) VALUES
(1, 'Mart', 'Developers', 'martdevelopers254@gmail.com', 'Mart Web Artisan', '5120a9d5f702a693bd53bc76720b1f49ea8e187b', '488.JPG', '', 'Full Stack Developer, Bug Bounty Hunter, Web Artisan And Graphic Designer.', 'Full Stack Developer', '13 July 1997', '+254 740 847563', 'Machakos', 'https://martdev.info'),
(2, 'Martin', 'Mbithi', 'martinezmbithi@gmail.com', 'Martin', '5120a9d5f702a693bd53bc76720b1f49ea8e187b', '488.JPG', '', 'Graphic Designer and a web developer', 'Front End Developer', '', '', '', ''),
(3, '', '', 'martinezmbithi@gmail.com', 'Martin', '5120a9d5f702a693bd53bc76720b1f49ea8e187b', '', '', '', '', '', '', '', ''),
(4, '', '', 'martinezmbithi@gmail.com', 'Martin', '5120a9d5f702a693bd53bc76720b1f49ea8e187b', '', '', '', '', '', '', '', ''),
(5, '', '', 'mmerlin@gmail.com', 'm', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `recovery_keys`
--
ALTER TABLE `recovery_keys`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recovery_keys`
--
ALTER TABLE `recovery_keys`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
