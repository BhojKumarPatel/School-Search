-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 08:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `permanentschools`
--

CREATE TABLE IF NOT EXISTS `permanentschools` (
  `s_name` varchar(50) NOT NULL,
  `s_add` varchar(50) NOT NULL,
  `s_pin` int(6) NOT NULL,
  `s_dist` varchar(30) NOT NULL,
  `s_city` varchar(30) NOT NULL,
  `s_state` varchar(30) NOT NULL,
  `s_code` varchar(30) NOT NULL,
  `s_yearofreg` date NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_classes` int(2) NOT NULL,
  `s_fl1` int(11) NOT NULL,
  `s_fh1` int(11) NOT NULL,
  `s_fl2` int(11) NOT NULL,
  `s_fh2` int(11) NOT NULL,
  `s_fl3` int(11) NOT NULL,
  `s_fh3` int(11) NOT NULL,
  `s_fl4` int(11) NOT NULL,
  `s_fh4` int(11) NOT NULL,
  `s_fl5` int(11) NOT NULL,
  `s_fh5` int(11) NOT NULL,
  `s_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanentschools`
--

INSERT INTO `permanentschools` (`s_name`, `s_add`, `s_pin`, `s_dist`, `s_city`, `s_state`, `s_code`, `s_yearofreg`, `s_email`, `s_classes`, `s_fl1`, `s_fh1`, `s_fl2`, `s_fh2`, `s_fl3`, `s_fh3`, `s_fl4`, `s_fh4`, `s_fl5`, `s_fh5`, `s_type`) VALUES
('Delhi Public School', 'Risali', 490020, 'Durg', 'Bhilai', 'CHHATTISGARH', '3133223', '1998-03-30', 'keshawpatel3@gmail.com', 12, 10000, 13000, 18000, 22000, 25000, 27000, 35000, 40000, 44000, 48000, 'cbse'),
('bsp senior secondary school', 'sector 10 bhilai', 490006, 'Durg', 'Bhilai', 'CHHATTISGARH', '4149413249', '1988-07-12', 'hemshikhasonboir@gmail.com', 10, 10000, 20000, 31000, 31000, 32000, 35000, 400000, 700000, 0, 0, 'cbse'),
('High school Tetla', 'tetla', 496001, 'Raigarh', 'RAIGARH', 'CHHATTISGARH', '5589962', '1998-06-09', 'shubhamdansena474@gmail.com', 12, 10000, 5000, 18000, 22000, 25000, 27000, 35000, 40000, 25000, 48000, 'govt');

-- --------------------------------------------------------

--
-- Table structure for table `school_types`
--

CREATE TABLE IF NOT EXISTS `school_types` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school_types`
--

INSERT INTO `school_types` (`s_no`, `type`) VALUES
(1, 'Goverment'),
(2, 'CBSE');

-- --------------------------------------------------------

--
-- Table structure for table `stud_details`
--

CREATE TABLE IF NOT EXISTS `stud_details` (
  `stud_name` varchar(30) NOT NULL,
  `stud_gen` varchar(6) NOT NULL,
  `stud_mobile` int(10) NOT NULL,
  `stud_email` varchar(30) NOT NULL,
  `stud_fname` varchar(20) NOT NULL,
  `stud_lastgrade` int(11) NOT NULL,
  `stud_lastperc` float NOT NULL,
  `stud_lastyear` date NOT NULL,
  UNIQUE KEY `stud_email` (`stud_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_details`
--

INSERT INTO `stud_details` (`stud_name`, `stud_gen`, `stud_mobile`, `stud_email`, `stud_fname`, `stud_lastgrade`, `stud_lastperc`, `stud_lastyear`) VALUES
('', '', 0, '', '', 0, 0, '0000-00-00'),
('MOJI RAM PATEL', 'male', 2147483647, 'bhjkmrptl@gmail.co', 'MOJI', 0, 0, '0000-00-00'),
('MOJI RAM PATEL', 'male', 2147483647, 'bhjkmrptl@gmail.com', 'MOJI', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tempschools`
--

CREATE TABLE IF NOT EXISTS `tempschools` (
  `s_name` varchar(50) NOT NULL,
  `s_add` varchar(50) NOT NULL,
  `s_pin` int(6) NOT NULL,
  `s_dist` varchar(30) NOT NULL,
  `s_city` varchar(30) NOT NULL,
  `s_state` varchar(30) NOT NULL,
  `s_code` varchar(10) NOT NULL,
  `s_yearofreg` date NOT NULL,
  `s_classes` int(2) NOT NULL,
  `s_fl1` int(11) NOT NULL,
  `s_fh1` int(11) NOT NULL,
  `s_fl2` int(11) NOT NULL,
  `s_fh2` int(11) NOT NULL,
  `s_fl3` int(11) NOT NULL,
  `s_fh3` int(11) NOT NULL,
  `s_fl4` int(11) NOT NULL,
  `s_fh4` int(11) NOT NULL,
  `s_fl5` int(11) NOT NULL,
  `s_fh5` int(11) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_type` varchar(10) NOT NULL,
  PRIMARY KEY (`s_code`),
  UNIQUE KEY `s_code` (`s_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempschools`
--

INSERT INTO `tempschools` (`s_name`, `s_add`, `s_pin`, `s_dist`, `s_city`, `s_state`, `s_code`, `s_yearofreg`, `s_classes`, `s_fl1`, `s_fh1`, `s_fl2`, `s_fh2`, `s_fl3`, `s_fh3`, `s_fl4`, `s_fh4`, `s_fl5`, `s_fh5`, `s_email`, `s_type`) VALUES
('4444', '', 0, '', '', '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'govt'),
('Goverment higher secondary sch', 'takiyapara durg', 491001, 'Durg', 'durg', 'CHHATTISGARH', '6261102156', '2009-06-16', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'shubhamdansena474@gmail.com', 'govt'),
('Goverment higher secondary sch', 'Supela Bhilai', 490023, 'Durg', 'Bhilai', 'CHHATTISGARH', '656416', '2003-06-19', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ksnkmrptl@gmail.com', 'govt');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `user_pass` text NOT NULL,
  `user_type` varchar(7) NOT NULL,
  PRIMARY KEY (`user_no`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_no`, `user_id`, `user_pass`, `user_type`) VALUES
(1, 'bhjkmrptl@gmail.com', 'pass', 'admin'),
(2, 'bhjkmrptl@gmail.co', '123', 'school'),
(3, 'ksnkmrptl@gmail.com', '1324', 'school'),
(4, 'keshawpatel3@gmail.com', '1234', 'school'),
(5, '', '', 'school'),
(6, 'shubhamdansena474@gmail.com', '1234', 'school'),
(8, 'hemshikhasonboir@gmail.com', '1234', 'school'),
(9, 'shubhamdansena474@gmail.co', '1234', 'school');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `s_no` int(11) NOT NULL,
  `types` varchar(7) NOT NULL,
  PRIMARY KEY (`types`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`s_no`, `types`) VALUES
(2, 'school');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
