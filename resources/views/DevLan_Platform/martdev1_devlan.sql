-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2019 at 10:01 AM
-- Server version: 5.7.27-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martdev1_devlan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'martdevelopers254@gmail.com', 'df0056bf1e9ee39794c7680a186bed41a7d5c0ec'),
(2, 'admin@devlan.martdev.info', 'df0056bf1e9ee39794c7680a186bed41a7d5c0ec');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(20) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `user_email`, `username`, `status`) VALUES
(6, 'sejorikel12@gmail.com', 'sejorikel', 'approved'),
(7, 'martinezmbithi@gmail.com', 'martin_mbithi', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(20) NOT NULL,
  `project_name` varchar(2000) NOT NULL,
  `project_desc` longtext NOT NULL,
  `project_files` varchar(200) NOT NULL,
  `project_avatar` varchar(200) NOT NULL,
  `project_category` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_desc`, `project_files`, `project_avatar`, `project_category`, `user_id`, `user_email`, `date_created`) VALUES
(6, 'Bootstrap CheetSheet', 'Stranded on boostrap framework? you do not know what to do...this cheat sheet has it all.', 'bootstrap_classes.zip', '', 'Misc Coding Projects', '6', 'martdevelopers254@gmail.com', '16 Aug 2019'),
(7, 'cisco configuration book', 'The project contains mostly used configs for routers and switches', 'Cisco_Commands_2.pdf', '', 'PDF Cheat Sheets', '10', 'sejorikel12@gmail.com', 'Sat Aug 2019'),
(8, 'chatico', 'it is the chat application ', 'chatico.zip', '', 'Android App', '13', 'jisack940@gmail.com', 'Sat Aug 2019'),
(10, 'Appson', 'Appson is a fully responsive HTML5 front end web template which you can use to show case your application.', 'appson.7z', 'Screenshot-20190819211208-1351x632.png', 'FrontEnd WebApp', '6', 'martdevelopers254@gmail.com', '20 Aug 2019'),
(11, 'EIGRP', 'This a topology for eigrp configuration. Note there no security implementation.', 'eigrp.zip', 'eigrp.PNG', 'Packet Tracer Topologies', '10', 'sejorikel12@gmail.com', 'Wed Aug 2019'),
(12, 'Laravel Cheat Sheet', 'Stuck with a laravel project?..This cheatsheet will help you it contains all artisan commands.', 'Laravel Cheatsheet.pdf', 'proxy.duckduckgo.com.png', 'PDF Cheat Sheets', '6', 'martdevelopers254@gmail.com', '2019-08-21'),
(13, 'C Programming Cheat Sheet', 'This is a c programming language cheat sheet.', 'Cheatsheet-c.pdf', 'proxy.duckduckgo.com.jpeg', 'PDF Cheat Sheets', '6', 'martdevelopers254@gmail.com', '2019-08-27'),
(14, 'Spring Boot Reference Guide', 'Spring Framework is a Java based MVC Framework.', 'spring-boot-reference.pdf', 'proxy.duckduckgo.com.png', 'PDF Cheat Sheets', '6', 'martdevelopers254@gmail.com', '2019-09-06'),
(15, 'subnetting ', 'This a cheat sheet of a sample subneting where i have subnetted 192.168.1.0/24 to other five subnets. The screenshot is a gns3 topology which I have applied the subnets and used eigrp. I the topology will be posted when the gns3 module topology will be back.', 'subnetting.pdf', 'eigrp.png', 'PDF Cheat Sheets', '10', 'sejorikel12@gmail.com', '');

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
(1, 6, 'bb2f03f4a7d031629a4951eeaf74fa71', 1),
(2, 6, 'a68acffb8b88257bce4faaf1f44a3c2c', 1),
(3, 6, '6ac4c34114349cc824f3d509a3205a8f839c0126', 1),
(4, 7, 'edfaf2cf76b770a0007327adfe0390a4355a1ace', 1),
(5, 11, '90ba3330c79203dafb8b8306901131d69e5b635d', 1),
(6, 11, 'a114f94d3b6d752865bd378a3fd001a8c9d63566', 1);

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
(6, 'Martin', 'Mbithi', 'martdevelopers254@gmail.com', 'Martin', '5120a9d5f702a693bd53bc76720b1f49ea8e187b', '42.JPG', '', 'Developer , Web Artisan , Bug BountyHunter & Graphic Designer', 'Full Stack Developer', '13 July 1997', '+254 740 847563', 'Machakos', 'https://martdev.info'),
(9, '', '', 'netengineersam@gmail.com', 'chebweche', '4a4cc842e265f34b47d60678b344c6514e7bb394', '', '', '', '', '', '', '', ''),
(10, '', '', 'sejorikel12@gmail.com', 'SejoRikel', '3f498d1e3ee7c890118eb468478b00aa6d8e741a', '', '', '', '', '', '', '', ''),
(11, '', '', 'wackyizzy77@gmail.com', 'joseph', '4406ac58691a7d441f9cf91ed5a98d8ac1bada6b', '', '', '', '', '', '', '', ''),
(13, '', '', 'jisack940@gmail.com', 'owigo', '4406ac58691a7d441f9cf91ed5a98d8ac1bada6b', '', '', '', '', '', '', '', ''),
(15, '', '', 'markomatei73@gmail.com', 'Markov', '3b586128e3bc7bcb14386c9156d25a30417355d2', '', '', '', '', '', '', '', ''),
(16, '', '', 'martinezmbithi@gmail.com', 'martin_mbithi', '5120a9d5f702a693bd53bc76720b1f49ea8e187b', '', '', '', '', '', '', '', ''),
(17, '', '', 'KILONZOWAMBUA254@gmail.com', 'Kilonzo ', 'bbc01307d8b6a52dee0c0adeeaf157117900e5c8', '', '', '', '', '', '', '', ''),
(18, '', '', 'xlicit319@gmail.com', 'xplicit19', '2f0c638dda576148bad26888dc30f6660c6efded', '', '', '', '', '', '', '', ''),
(19, '', '', 'williammusembi3@gmail.com', 'Will', '8e9b6aac8e3bd3803bba78f080f669f5285cef0a', '', '', '', '', '', '', '', ''),
(20, '', '', 'kgudkush@gmail.com', 'kgudkush', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', '', '', '', '', '', '', '', ''),
(21, '', '', 'davingumbau@gmail.com', 'Ngush', '9f1728bf196c89c7193fe0fa239f54e352642f5e', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `recovery_keys`
--
ALTER TABLE `recovery_keys`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
