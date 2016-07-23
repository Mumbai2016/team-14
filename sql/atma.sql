-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2016 at 08:51 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atma`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `act_id` int(11) NOT NULL,
  `act_name` varchar(100) NOT NULL,
  `strat_id` int(11) NOT NULL,
  `quarter` int(11) NOT NULL,
  `resource` varchar(255) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `annual_implementation`
--

CREATE TABLE IF NOT EXISTS `annual_implementation` (
  `id` int(11) NOT NULL,
  `project_area` varchar(100) NOT NULL,
  `strategies` text NOT NULL,
  `activities` text NOT NULL,
  `quarter` varchar(100) NOT NULL,
  `resource` varchar(100) NOT NULL,
  `person_responsible` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `id`) VALUES
('abc', 'abc123', 'ngo', 1),
('preet', 'preet123*', 'volunteer', 2),
('xyz', 'xyz123', 'partnership_manager', 3);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `m_name`, `contact`, `email`, `dob`, `gender`, `pic_path`) VALUES
(101, 'Alroy Vaz', 2147483647, 'vaz.alr@gmail.com', '1995-11-08', 'male', ''),
(102, 'Krutantk', 2147483647, 'kt@gmail.com', '1995-10-07', 'male', ''),
(103, 'Ronak Mehta', 2147483647, 'rv@gmail.com', '1996-04-01', 'male', ''),
(1004, 'Siddesh ', 2147483647, 'sid@gmail.com', '1996-04-21', 'male', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectarea`
--

CREATE TABLE IF NOT EXISTS `projectarea` (
  `pa_id` int(11) NOT NULL,
  `pa_name` varchar(255) NOT NULL,
  `ngo_name` varchar(255) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  PRIMARY KEY (`pa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectarea`
--

INSERT INTO `projectarea` (`pa_id`, `pa_name`, `ngo_name`, `ngo_id`) VALUES
(11, 'programme', 'Care For', 400);

-- --------------------------------------------------------

--
-- Table structure for table `stratergy`
--

CREATE TABLE IF NOT EXISTS `stratergy` (
  `stra_id` int(11) NOT NULL,
  `stra` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pa_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  PRIMARY KEY (`stra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `motivation` text NOT NULL,
  `expertise` text NOT NULL,
  `past_exp` text NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `screened` varchar(100) NOT NULL,
  `selected` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `contact`, `email`, `file_name`, `dob`, `gender`, `pic_path`, `p_id`, `degree`, `motivation`, `expertise`, `past_exp`, `blood_group`, `screened`, `selected`) VALUES
(5, 'niveta lavhate', 0, 'niveta@gmail.com', '', '1993-11-12', 'on', '', 0, 'mca', 'codeforgood', 'cooking', 'fresher', 'b+ve', '', ''),
(6, 'niveta lavhate', 0, 'niveta@gmail.com', '', '1998-09-12', 'on', '', 0, 'mca', 'codeforgood', 'cooking', 'fresher', 'b+ve', 'no', 'no'),
(7, 'yatin kapoor', 0, 'yatin@ymail.com', '', '1992-11-10', 'on', '', 0, 'B.E.', 'abc', 'development', 'pqr', 'o+ve', 'no', 'no'),
(8, 'alroy vaz', 0, 'alroy@gmail.com', '', '1995-02-12', 'on', '', 0, 'mca', 'codeforgood', 'development', 'fresher', 'b+', 'no', 'no'),
(9, 'ronak mehta', 0, 'ronakmehta@gmail.com', '', '1994-10-25', 'on', '', 0, 'B.E.', 'hackathon', 'android', 'internship', 'a+', 'no', 'no'),
(10, 'pooja mule', 0, 'poojamulam@yahoo.co.in', '', '1993-02-07', 'on', '', 0, 'mca', 'maths', 'maths', 'teaching', 'b+', 'no', 'no'),
(12, 'shreyas bhosale', 0, 'shreyas@gmail.com', '', '1990-10-01', 'on', '', 0, 'BCom', 'finance', 'commerce', 'fresher', 'a+', 'no', 'no'),
(13, 'meenal shaha', 0, 'meenal@gmail.com', '', '1994-02-19', 'on', '', 0, 'MBA', 'career programs', 'HR', '1 year exp as HR', 'b+', 'no', 'no'),
(14, 'khushboo', 0, 'khushboo@gmail.com', '', '1988-03-12', 'on', '', 0, 'B.A', 'hgshdgs', 'teaching', '2year experience', 'ab+', 'no', 'no'),
(15, 'vihaan khamkar', 0, 'vihaan@gmail.com', '', '1993-05-19', 'on', '', 0, 'B.E.', 'cfg', 'coding', 'fresher', 'b+', 'no', 'no'),
(16, 'priyal sharma', 0, 'priyal@gmail.com', '', '1991-12-12', 'on', '', 0, 'BCom', 'abcxyz', 'CA', 'fresher', 'o+', 'no', 'no'),
(17, 'siddhesh dighe', 0, 'siddhesh@gmail.com', '', '1995-10-12', 'on', '', 0, 'B.E.', 'ajhdjkahjh', 'android', '1 year exp. in android', 'b+', 'no', 'no'),
(18, 'krutant', 0, 'kp@ymail.com', '', '1994-10-12', 'on', '', 0, 'b.e.', 'sbdjshdjhsdjds', 'coding', '1 year exp', 'a+', 'no', 'no'),
(19, 'mahendra', 0, 'mahendra@gmail.com', '', '1990-10-10', 'on', '', 0, 'mba', 'bjhdkjshkjds', 'finance', '2 year exp.', 'b+', 'no', 'no'),
(20, 'prashant kulkarni', 0, 'prashantK@gmail.com', '', '1992-10-12', 'on', '', 0, 'bms', 'hgjhagd', 'management', 'chasjh', 'ab+', 'no', 'no'),
(21, 'pratik mahale', 0, 'pratik@gmail.com', '', '1985-12-01', 'on', '', 0, 'mbbs', 'dhfshdfuhfsd', 'casual', '4 years', 'b+', 'no', 'no'),
(22, 'Ram sharma', 0, 'ram@ymail.com', '', '1979-12-17', 'on', '', 0, 'B.A.', 'fgf gfhghgg', 'arts', '4 yrs', 'a+', 'no', 'no'),
(23, 'mayur', 0, 'mb@ymail.com', '', '1990-09-09', 'on', '', 0, 'bcom', 'asdghtgh gjkk', 'commerce', '1 year', 'b+', 'no', 'no'),
(24, 'sonal shinde', 0, 'sonalshinde@gmail.com', '', '1990-10-11', 'on', '', 0, 'MBA', 'dfgcjdhfkj hdfjkdshfk', 'human resource', 'fresher', 'a+', 'no', 'no'),
(25, 'preet sharma', 0, 'preetshaarma@ymail.com', '', '1990-10-12', 'on', '', 0, 'mca', 'dhahd sdhkjsadh hjdsjhd', 'computers', '1 year', 'o+', 'no', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
