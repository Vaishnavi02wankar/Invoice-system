-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2018 at 03:20 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

DROP TABLE IF EXISTS `customer_reg`;
CREATE TABLE IF NOT EXISTS `customer_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `uname`, `email`, `password`, `dob`, `gender`, `address`, `contact`, `ans`, `date`) VALUES
(6, 'Rahul', 'rahul@gmail.com', 'Rahul', '1995-10-20', 'Male', 'Hadapsar, Pune', '7474747474', 'aurangabad', '2018-11-29 15:32:14'),
(5, 'Anmol', 'anmol@gmail.com', 'Anmol', '1993-11-23', 'Male', 'Bibvewadi, Pune.', '8789878987', 'ballarpur', '2018-11-29 18:39:47'),
(16, 'Panchashil', 'panch@gmail.com', 'Wankhede', '1998-11-11', 'Male', 'Bibvewadi, Pune', '8548548548', 'awarpur', '2018-11-29 18:06:00'),
(17, 'monika', 'monikabhoyar19@gmail.com', 'monika123', '1996-03-03', 'Female', 'babupeth chandrapur', '7878787875', 'mona', '2018-12-01 12:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `customer_req`
--

DROP TABLE IF EXISTS `customer_req`;
CREATE TABLE IF NOT EXISTS `customer_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `c_status` varchar(20) NOT NULL,
  `a_status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_req`
--

INSERT INTO `customer_req` (`id`, `customer`, `email`, `event`, `organizer`, `c_status`, `a_status`) VALUES
(2, 'Anmol', 'anmol@gmail.com', 'Marriage', 'Dipak', 'Requested', 'Not Forwarded'),
(3, 'Rahul', 'rahul@gmail.com', 'Marriage', 'Dipak', 'Accepted', 'Forwarded'),
(4, 'monika', 'monikabhoyar19@gmail.com', 'Marriage', 'Dipak', 'Requested', 'Forwarded'),
(5, 'monika', 'monikabhoyar19@gmail.com', 'brithday party', 'ravina', 'Accepted', 'Forwarded');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customer`, `organizer`, `message`) VALUES
(1, 'Rahul', 'Dipak', 'Good Service.'),
(2, 'Anmol', 'Balu', 'Good Service.'),
(3, 'monika', 'Balu', 'bad service'),
(4, 'monika', 'ravina', 'good service');

-- --------------------------------------------------------

--
-- Table structure for table `organizer_reg`
--

DROP TABLE IF EXISTS `organizer_reg`;
CREATE TABLE IF NOT EXISTS `organizer_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer_reg`
--

INSERT INTO `organizer_reg` (`id`, `uname`, `email`, `password`, `dob`, `gender`, `address`, `contact`, `ans`, `date`) VALUES
(1, 'Dipak', 'dipak@gmail.com', 'd', '1995-11-22', 'Male', 'Rameshwari, Nagpur', '8585858585', 'aurangabad', '2018-11-29 18:49:28'),
(2, 'Balu', 'balu@gmail.com', 'Balu', '1993-06-24', 'Male', 'Hinjewadi, Pune', '7575756565', 'aurangabad', '2018-11-29 16:44:38'),
(5, 'Suhas', 'suhas@gmail.com', 'Suhas', '1994-12-12', 'Male', 'Subhash Ward, Ballarpur.', '7854745874', 'cool', '2018-11-29 16:49:56'),
(6, 'ravina', 'ravinamoon1996@gmail.com', '123654', '1996-02-16', 'Female', 'babupeth', '1236547777', 'blue', '2018-12-01 12:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `organizer_req`
--

DROP TABLE IF EXISTS `organizer_req`;
CREATE TABLE IF NOT EXISTS `organizer_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer_req`
--

INSERT INTO `organizer_req` (`id`, `customer`, `email`, `event`, `organizer`, `status`) VALUES
(4, 'monika', 'monikabhoyar19@gmail.com', 'Marriage', 'Dipak', 'Waiting'),
(3, 'Rahul', 'rahul@gmail.com', 'Marriage', 'Dipak', 'Accepted'),
(5, 'monika', 'monikabhoyar19@gmail.com', 'brithday party', 'ravina', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venue` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `venue`, `event`, `organizer`, `address`, `city`) VALUES
(1, 'Ashirwad Lawn', 'Marriage', 'Dipak', 'Bibvewadi', 'Pune'),
(2, 'Umiya Hall', 'Marriage', 'Dipak', 'Swargate', 'Pune'),
(4, 'bharat lawn', 'brithday party', 'ravina', 'bhiwapur ward', 'chandrapur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
