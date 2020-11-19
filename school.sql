-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.byetcluster.com
-- Generation Time: Nov 19, 2020 at 09:22 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24258648_kbvm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `hobbies` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` blob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`name`, `fname`, `mname`, `gender`, `email`, `mobile`, `class`, `subject`, `hobbies`, `country`, `address`, `password`, `image`) VALUES
('Sachin Prajapati', 'Radhelal', 'gyanvati', 'on', 'sachinprajapati599@gmail.com', '8604980059', '12', ' PCM', '', 'India', 'Village and Post Kusumbhi District Unnao', '1234', 0x73612e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `name` varchar(100) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `mobile` int(20) NOT NULL,
  `complaint` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`name`, `gmail`, `mobile`, `complaint`) VALUES
('Sachin Prajapati', '', 0, 'good'),
('vikas', '', 0, 'best'),
('', '', 0, ''),
('Sachin Prajapati', 'sachinprajapati599@gmail.com', 2147483647, 'good'),
('naman', 'sachinprajapati599@gmail.com', 12345678, 'best 6'),
('naman', 'sachinprajapati599@gmail.com', 2147483647, 'good good good ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `problem` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `reason`, `email`, `mobile`, `address`, `city`, `state`, `zip`, `problem`) VALUES
('Sachin Prajapati', 'Kbvm web', 'sachinprajapati599@gmail.com', '8604980059', 'Village and Post Kusumbhi District Unnao', 'Unnao', 'Uttar Pradesh', '209859', 'hello web designer');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `gender`, `email`, `mobile`, `reason`) VALUES
('', '', 'sachinprajapati599@gmail.com', '', 'good web'),
('', '', 'sachinprajapati599@gmail.com', '', 'good web'),
('Sachin Prajapati', '', 'sachinprajapati599@gmail.com', '8604980059', 'good bro'),
('Sachin Prajapati', '', 'sachinprajapati599@gmail.com', '8604980059', ''),
('Sachin Prajapati', '', 'sachinprajapati599@gmail.com', '8604980059', ''),
('Sachin Prajapati', '', 'sachinprajapati599@gmail.com', '8604980059', ''),
('Shivam', '', 'sachinprajapati599@gmail.com', '8956321478', ''),
('Shivam', '', 'sachinprajapati599@gmail.com', '8956321478', '');

-- --------------------------------------------------------

--
-- Table structure for table `suggetion`
--

CREATE TABLE `suggetion` (
  `name` varchar(100) NOT NULL,
  `gmail` text NOT NULL,
  `mobile` int(20) NOT NULL,
  `suggetion` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggetion`
--

INSERT INTO `suggetion` (`name`, `gmail`, `mobile`, `suggetion`) VALUES
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('vikas', '', 0, 'good'),
('Sachin Prajapati', 'sachinprajapati599@gmail.com', 2147483647, 'hello its suggetion'),
('Anish', 'sachinprajapati599@gmail.com', 2147483647, 'good bro'),
('Anish', 'sachinprajapati599@gmail.com', 2147483647, 'good bro'),
('Atul', 'sachinprajapati599@gmail.com', 2147483647, 'good good good'),
('Shivam', 'sachinprajapati599@gmail.com', 2147483647, 'hello nice'),
('ankit', 'test@gmail.com', 1234569870, 'testing '),
('Sachin Prajapati', 'sachinprajapati599@gmail.com', 2147483647, 'Good');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
