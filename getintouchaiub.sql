-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2020 at 02:46 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getintouchaiub`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountcontrolmanager`
--

CREATE TABLE `accountcontrolmanager` (
  `id` int NOT NULL,
  `acid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `accountstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acnotice`
--

CREATE TABLE `acnotice` (
  `id` int NOT NULL,
  `acid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `towhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `actext`
--

CREATE TABLE `actext` (
  `id` int NOT NULL,
  `acid` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL,
  `receiverid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `adminid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminnotice`
--

CREATE TABLE `adminnotice` (
  `id` int NOT NULL,
  `adminid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `towhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminpost`
--

CREATE TABLE `adminpost` (
  `id` int NOT NULL,
  `adminid` varchar(50) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ccannouncement`
--

CREATE TABLE `ccannouncement` (
  `id` int NOT NULL,
  `ccid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ccannouncement`
--

INSERT INTO `ccannouncement` (`id`, `ccid`, `subject`, `body`) VALUES
(6, 'shamil1', 'Announcement', 'Body updated'),
(9, 'shamil1', 'Testing', 'Ho ho ho....');

-- --------------------------------------------------------

--
-- Table structure for table `ccnotice`
--

CREATE TABLE `ccnotice` (
  `id` int NOT NULL,
  `ccid` varchar(50) NOT NULL,
  `guid` varchar(155) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ccnotice`
--

INSERT INTO `ccnotice` (`id`, `ccid`, `guid`, `subject`, `body`) VALUES
(1, 'shamil1', '18-36176-1', 'Approved', 'Your post has been approved'),
(2, 'shamil1', '18-36176-1', 'Approved', 'Your post has been approved'),
(3, 'shamil1', '18-36176-1', 'Approved', 'Your post has been approved'),
(4, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(5, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(6, 'shamil1', '18-36176-1', 'Approved!', 'Your post has been approved.'),
(7, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(8, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(9, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(10, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(11, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(12, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(13, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.'),
(14, 'shamil1', '18-36176-1', 'Approved!', 'Your post has been approved.'),
(15, 'shamil1', '18-36176-1', 'Declined.', 'Your post has been declined.');

-- --------------------------------------------------------

--
-- Table structure for table `ccrequestforaction`
--

CREATE TABLE `ccrequestforaction` (
  `id` int NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `actiontype` varchar(30) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ccrequestforaction`
--

INSERT INTO `ccrequestforaction` (`id`, `ccid`, `actiontype`, `text`) VALUES
(1, 'shamil1', 'Ban', 'Ban general user: 18-36176-1 forever.'),
(2, 'shamil1', 'Ban', 'Ban general user: 18-36176-1 for 4 days.'),
(3, 'shamil1', 'Block', 'Block general user: 18-36176-1 for  days from posting.'),
(4, 'shamil1', 'Ban', 'Ban general user: 18-36176-1 for 8 days.'),
(5, 'shamil1', 'Block', 'Block general user: 18-36176-1 for  days from posting.'),
(6, 'shamil1', 'Block & Ban', 'Block general user: 18-36176-1 for 6 days from posting and ban for 5 days.'),
(7, 'shamil1', 'Ban', 'Ban general user: 18-36176-1 for 5 days.');

-- --------------------------------------------------------

--
-- Table structure for table `contentcontrolmanager`
--

CREATE TABLE `contentcontrolmanager` (
  `id` int NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `accountstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contentcontrolmanager`
--

INSERT INTO `contentcontrolmanager` (`id`, `ccid`, `name`, `email`, `gender`, `dob`, `address`, `profilepicture`, `accountstatus`) VALUES
(1, 'shamil1', 'Shamil', 'shamil@email.com', 'Male', '22/11/1998', 'Kuratoli', '1606225477493unnamed.jpg', 'Active'),
(2, 'ccid2', 'TesterCC', 'testtercc@email.com', 'Female', '1/2/2020', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `id` int NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `postapproved` int NOT NULL DEFAULT '0',
  `postdeclined` int NOT NULL DEFAULT '0',
  `announcements` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`id`, `ccid`, `postapproved`, `postdeclined`, `announcements`) VALUES
(2, 'shamil1', 4, 12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `generaluser`
--

CREATE TABLE `generaluser` (
  `id` int NOT NULL,
  `guid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `userstatus` varchar(20) NOT NULL,
  `accountstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `generaluser`
--

INSERT INTO `generaluser` (`id`, `guid`, `name`, `email`, `gender`, `dob`, `address`, `profilepicture`, `userstatus`, `accountstatus`) VALUES
(1, '18-36176-1', 'Shamil', 'shamil@email.com', 'male', '22/11/1998', 'wdw', '', 'Student', 'Active'),
(2, '18-37916-2', 'Snigdho Dip', 'dip@gmail.com', 'Male', '11/01/1997', 'Dhanmondi, Dhaka', '', 'Student', 'Active'),
(3, '1709-111-2', 'Md Al-Amin', 'alamin@aiub.edu', 'Male', '24/01/195', 'Dhaka', '', 'Teacher', 'Active'),
(4, '07-11454-3', 'Arifa Sultana', 'arifa@gmail.com', 'Female', '5/9/1987', 'Khulna', '', 'Alumni', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `gucomment`
--

CREATE TABLE `gucomment` (
  `id` int NOT NULL,
  `postid` varchar(30) NOT NULL,
  `commenttext` varchar(200) NOT NULL,
  `commenterid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gufollow`
--

CREATE TABLE `gufollow` (
  `id` int NOT NULL,
  `guid` varchar(30) NOT NULL,
  `idoffollowingaccount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gupost`
--

CREATE TABLE `gupost` (
  `id` int NOT NULL,
  `guid` varchar(30) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `approvedby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gupost`
--

INSERT INTO `gupost` (`id`, `guid`, `text`, `file`, `approvedby`) VALUES
(1, '18-36176-1', 'hey hey', NULL, 'shamil1'),
(2, '18-36176-1', 'hey hey, look at the sky', NULL, 'shamil1'),
(3, '18-36176-1', 'How you doing?', NULL, 'shamil1'),
(4, '18-36176-1', 'post', NULL, 'shamil1'),
(5, '18-36176-1', 'this is another post', NULL, 'shamil1'),
(6, '18-36176-1', 'This is a post', NULL, 'shamil1');

-- --------------------------------------------------------

--
-- Table structure for table `gupostrequest`
--

CREATE TABLE `gupostrequest` (
  `id` int NOT NULL,
  `guid` varchar(30) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gupostrequest`
--

INSERT INTO `gupostrequest` (`id`, `guid`, `text`, `file`) VALUES
(23, '18-37916-2', 'Can anyone share with me the routine for fall 2021?', NULL),
(24, '18-37916-2', 'Can anyone share with me the cv format for applying for TAship at our varsity?', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gurequestforaction`
--

CREATE TABLE `gurequestforaction` (
  `id` int NOT NULL,
  `guid` varchar(30) NOT NULL,
  `towhom` varchar(30) NOT NULL,
  `actiontype` varchar(30) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gutext`
--

CREATE TABLE `gutext` (
  `id` int NOT NULL,
  `guid` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL,
  `receiverid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrationrequest`
--

CREATE TABLE `registrationrequest` (
  `id` int NOT NULL,
  `guid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `userstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `accountstatus` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `password`, `usertype`, `accountstatus`) VALUES
(1, 'shazib1', 'shazib1', 'Admin', 'Active'),
(2, 'nayeem2', 'nayeem2', 'Account Control Manager', 'Active'),
(3, 'shamil1', 'shamil1', 'Content Control Manager', 'Active'),
(4, 'eva4', 'eva4', 'General User', 'Active'),
(6, 'ccid2', '123456', 'Content Control Manager', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `warninguser`
--

CREATE TABLE `warninguser` (
  `id` int NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `warningtext` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `warninguser`
--

INSERT INTO `warninguser` (`id`, `ccid`, `guid`, `warningtext`) VALUES
(1, 'shamil1', '18-36176-1', ''),
(2, 'shamil1', '18-36176-1', ''),
(3, 'shamil1', '18-36176-1', ''),
(4, 'shamil1', '18-36176-1', ''),
(5, 'shamil1', '18-36176-1', 'yy'),
(6, 'shamil1', '18-36176-1', ''),
(7, 'shamil1', '18-36176-1', ''),
(8, 'shamil1', '18-36176-1', '7'),
(9, 'shamil1', '18-36176-1', ''),
(10, 'shamil1', '18-36176-1', 'warning'),
(11, 'shamil1', '18-36176-1', 'warning'),
(12, 'shamil1', '18-36176-1', ''),
(13, 'shamil1', '18-36176-1', ''),
(14, 'shamil1', '18-36176-1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountcontrolmanager`
--
ALTER TABLE `accountcontrolmanager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acid` (`acid`);

--
-- Indexes for table `acnotice`
--
ALTER TABLE `acnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actext`
--
ALTER TABLE `actext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminid` (`adminid`);

--
-- Indexes for table `adminnotice`
--
ALTER TABLE `adminnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccannouncement`
--
ALTER TABLE `ccannouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccnotice`
--
ALTER TABLE `ccnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccrequestforaction`
--
ALTER TABLE `ccrequestforaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contentcontrolmanager`
--
ALTER TABLE `contentcontrolmanager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`ccid`);

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generaluser`
--
ALTER TABLE `generaluser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guid` (`guid`);

--
-- Indexes for table `gucomment`
--
ALTER TABLE `gucomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gufollow`
--
ALTER TABLE `gufollow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gupost`
--
ALTER TABLE `gupost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gupostrequest`
--
ALTER TABLE `gupostrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurequestforaction`
--
ALTER TABLE `gurequestforaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gutext`
--
ALTER TABLE `gutext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationrequest`
--
ALTER TABLE `registrationrequest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guid` (`guid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `warninguser`
--
ALTER TABLE `warninguser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountcontrolmanager`
--
ALTER TABLE `accountcontrolmanager`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `acnotice`
--
ALTER TABLE `acnotice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `actext`
--
ALTER TABLE `actext`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminnotice`
--
ALTER TABLE `adminnotice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ccannouncement`
--
ALTER TABLE `ccannouncement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ccnotice`
--
ALTER TABLE `ccnotice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ccrequestforaction`
--
ALTER TABLE `ccrequestforaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contentcontrolmanager`
--
ALTER TABLE `contentcontrolmanager`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generaluser`
--
ALTER TABLE `generaluser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gucomment`
--
ALTER TABLE `gucomment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gufollow`
--
ALTER TABLE `gufollow`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gupost`
--
ALTER TABLE `gupost`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gupostrequest`
--
ALTER TABLE `gupostrequest`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gurequestforaction`
--
ALTER TABLE `gurequestforaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gutext`
--
ALTER TABLE `gutext`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrationrequest`
--
ALTER TABLE `registrationrequest`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warninguser`
--
ALTER TABLE `warninguser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
