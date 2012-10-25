-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2012 at 10:14 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `city` char(20) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `usertype` enum('a','u') NOT NULL DEFAULT 'u',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `password`, `bdate`, `city`, `state`, `address`, `image`, `usertype`) VALUES
(102, 'test', 'gupta', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '2012-01-01', 'jaipur', 'jaipur', 'jaipur\r\n', 'Lighthouse.jpg', 'u'),
(100, 'krishna', 'gupta', 'krishna@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2012-01-01', 'qqw', 'qqw', 'vishnu gupta \r\n', 'Chrysanthemum.jpg', 'u'),
(101, 'admin', 'gupta', 'admin.gupta@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', '2005-03-05', 'jaipur', 'jaipur', 'asdssa', 'Penguins.jpg', 'a'),
(103, 'vishnu gupta', 'gupta', 'vishnupce@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '2012-01-01', 'jaipur', 'jaipur', 'j\r\n', 'Tulips.jpg', 'u'),
(98, 'suyog', 'gupta', 'suyog.gupta', 'e10adc3949ba59abbe56e057f20f883e', '2012-01-01', 'jaipur', 'jaipur', 'jaipur\r\n', 'Koala.jpg', 'u'),
(99, 'sumit', 'ds', 'sumit.gupta@anktech.co.in', 'e10adc3949ba59abbe56e057f20f883e', '2012-01-01', 'jaipur', 'jaipur', 'ass', 'Hydrangeas.jpg', 'u'),
(97, 'vishnu', 'gupta', 'vishnu.gupta@anktech.com', 'e10adc3949ba59abbe56e057f20f883e', '2012-01-01', 'jaipur', 'jaipur', 'jaipur', 'Scan0001.jpg', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE IF NOT EXISTS `send` (
  `sender_id` int(10) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `rec_id` int(10) NOT NULL,
  `rec_name` varchar(255) NOT NULL,
  `status` enum('p','a') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`sender_id`, `sender_name`, `rec_id`, `rec_name`, `status`) VALUES
(97, 'vishnu', 103, 'vishnu gupta', 'p'),
(100, 'krishna', 103, 'vishnu gupta', 'p'),
(97, 'vishnu', 98, 'suyog', 'a'),
(98, 'vishnu', 100, 'krishna', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `show_message`
--

CREATE TABLE IF NOT EXISTS `show_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rec_name` varchar(23) NOT NULL,
  `sender_name` varchar(23) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` enum('r','u') NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `show_message`
--

INSERT INTO `show_message` (`id`, `rec_name`, `sender_name`, `message`, `status`, `time`, `date`) VALUES
(1, 'vishnu', 'krishna', 'hi .. how r u  ?????', 'u', '10:12:02', '2012-10-16'),
(3, 'vishnu', 'suyog', 'hi yar vishnu where r u??', 'r', '12:02:10', '2012-10-16'),
(41, 'vishnu', 'suyog', 'hi.. vishnu', 'r', '11:32:10', '2012-10-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
