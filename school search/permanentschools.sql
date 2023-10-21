-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 08:44 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
