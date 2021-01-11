-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 10:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(20) NOT NULL,
  `acid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `accountstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `acnotice`
--

CREATE TABLE `acnotice` (
  `id` int(20) NOT NULL,
  `acid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `towhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `actext`
--

CREATE TABLE `actext` (
  `id` int(20) NOT NULL,
  `acid` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL,
  `receiverid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `adminid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminnotice`
--

CREATE TABLE `adminnotice` (
  `id` int(20) NOT NULL,
  `adminid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `towhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminpost`
--

CREATE TABLE `adminpost` (
  `id` int(20) NOT NULL,
  `adminid` varchar(50) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ccannouncement`
--

CREATE TABLE `ccannouncement` (
  `id` int(20) NOT NULL,
  `ccid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ccnotice`
--

CREATE TABLE `ccnotice` (
  `id` int(20) NOT NULL,
  `ccid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ccrequestforaction`
--

CREATE TABLE `ccrequestforaction` (
  `id` int(20) NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `actiontype` varchar(30) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contentcontrolmanager`
--

CREATE TABLE `contentcontrolmanager` (
  `id` int(20) NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `accountstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `id` int(20) NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `postapproved` int(30) NOT NULL DEFAULT 0,
  `postdeclined` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `generaluser`
--

CREATE TABLE `generaluser` (
  `id` int(20) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `userstatus` varchar(20) NOT NULL,
  `accountstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gucomment`
--

CREATE TABLE `gucomment` (
  `id` int(20) NOT NULL,
  `postid` varchar(30) NOT NULL,
  `commenttext` varchar(200) NOT NULL,
  `commenterid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gufollow`
--

CREATE TABLE `gufollow` (
  `id` int(20) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `idoffollowingaccount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gupost`
--

CREATE TABLE `gupost` (
  `id` int(20) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `approvedby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gupostrequest`
--

CREATE TABLE `gupostrequest` (
  `id` int(20) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gurequestforaction`
--

CREATE TABLE `gurequestforaction` (
  `id` int(20) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `towhom` varchar(30) NOT NULL,
  `actiontype` varchar(30) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gutext`
--

CREATE TABLE `gutext` (
  `id` int(20) NOT NULL,
  `guid` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL,
  `receiverid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrationrequest`
--

CREATE TABLE `registrationrequest` (
  `id` int(20) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepicture` varchar(100) NOT NULL,
  `userstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `accountstatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `password`, `usertype`, `accountstatus`) VALUES
(1, 'shazib1', 'shazib1', 'Admin', 'Active'),
(2, 'nayeem2', 'nayeem2', 'Account Control Manager', 'Active'),
(3, 'shamil1', 'shamil1', 'Content Control Manager', 'Active'),
(4, 'eva4', 'eva4', 'General User', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `warninguser`
--

CREATE TABLE `warninguser` (
  `id` int(20) NOT NULL,
  `ccid` varchar(30) NOT NULL,
  `guid` varchar(30) NOT NULL,
  `warningtext` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `acnotice`
--
ALTER TABLE `acnotice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `actext`
--
ALTER TABLE `actext`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminnotice`
--
ALTER TABLE `adminnotice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ccannouncement`
--
ALTER TABLE `ccannouncement`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ccnotice`
--
ALTER TABLE `ccnotice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ccrequestforaction`
--
ALTER TABLE `ccrequestforaction`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contentcontrolmanager`
--
ALTER TABLE `contentcontrolmanager`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generaluser`
--
ALTER TABLE `generaluser`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gucomment`
--
ALTER TABLE `gucomment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gufollow`
--
ALTER TABLE `gufollow`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gupost`
--
ALTER TABLE `gupost`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gupostrequest`
--
ALTER TABLE `gupostrequest`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurequestforaction`
--
ALTER TABLE `gurequestforaction`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gutext`
--
ALTER TABLE `gutext`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrationrequest`
--
ALTER TABLE `registrationrequest`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `warninguser`
--
ALTER TABLE `warninguser`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
