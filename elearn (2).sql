-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2019 at 05:09 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearn`
--
CREATE DATABASE IF NOT EXISTS `elearn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elearn`;

-- --------------------------------------------------------

--
-- Table structure for table `db_cart`
--

CREATE TABLE IF NOT EXISTS `db_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `video` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `db_cart`
--

INSERT INTO `db_cart` (`id`, `name`, `creator`, `price`, `cover`, `stud_id`, `video`, `status`) VALUES
(23, 'it', 'joel', '12', 'php.jpg', 8, '', ''),
(26, 'it', 'joel', '12', 'php.jpg', 1, 'videos/VID-20171122-WA0000[1].mp4', 'true'),
(27, 'it', 'joel', '12', 'php.jpg', 1, 'videos/VID-20171122-WA0000[1].mp4', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `db_course`
--

CREATE TABLE IF NOT EXISTS `db_course` (
  `c_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `creator` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `login_id` int(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `db_course`
--

INSERT INTO `db_course` (`c_id`, `name`, `creator`, `content`, `price`, `cover`, `category`, `video`, `login_id`) VALUES
(3, 'it', 'joel', 'sfgsdgdsag', 12, 'php.jpg', 'IT&software', 'videos/VID-20171122-WA0000[1].mp4', 6),
(4, 'it', 'joel', 'sfgsdgdsag', 12, 'php.jpg', 'IT&software', 'videos/VID-20171122-WA0000[1].mp4', 6),
(5, 'automobile', 'joel', 'adafaf', 100, 'auto.jpg', 'Automobile', 'videos/VID-20171122-WA0000[1].mp4', 6),
(6, 'bhuhb', 'ihh', 'bhhb', 800, 'Screenshot (2).png', 'Design', 'videos/VID-20171122-WA0000[1].mp4', 0),
(7, 'food security course', 'jenson', 'ssfvfbnsbsgbg', 455, 'food.jpg', 'Agriculture', 'videos/Screenrecorder-2019-11-13-22-30-06-432.mp4', 6);

-- --------------------------------------------------------

--
-- Table structure for table `db_expert`
--

CREATE TABLE IF NOT EXISTS `db_expert` (
  `expert_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `previous_work` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `login_id` int(100) NOT NULL,
  PRIMARY KEY (`expert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `db_expert`
--

INSERT INTO `db_expert` (`expert_id`, `fname`, `lname`, `phone`, `email`, `address`, `previous_work`, `file_path`, `login_id`) VALUES
(1, 'hgs', 'hdh', '4567234567', 'gjhfj@gmail.com', 'hrhrhsd', '', '', 4),
(2, 'hgs', 'hdh', '4567234567', 'gjhfj@gmail.com', 'hrhrhsd', '', '', 4),
(3, 'hgs', 'hdh', '4567234567', 'gjhfj@gmail.com', 'hrhrhsd', '', '', 4),
(4, 'hgs', 'hdh', '4567234567', 'gjhfj@gmail.com', 'hrhrhsd', '', '', 6),
(5, 'yyyy', 's', '5467832367', 'dfgszg@gmail.com', 'gzgdzsfgb', '', 'HERO-BG.JPG', 7);

-- --------------------------------------------------------

--
-- Table structure for table `db_login`
--

CREATE TABLE IF NOT EXISTS `db_login` (
  `login_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `db_login`
--

INSERT INTO `db_login` (`login_id`, `username`, `password`, `status`, `cpassword`) VALUES
(1, 'zacharia', 'zac123', 'user', ''),
(3, 'admin', 'admin123', 'admin', 'admin123'),
(4, 'hellosss', 'abcd1234', 'user', ''),
(6, 'ppppp', 'pppp123', 'expert', ''),
(7, 'llll', 'llll123', 'expert', 'llll123'),
(8, 'jissksaju', 'jiss123', 'user', ''),
(9, '', '', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_orders`
--

CREATE TABLE IF NOT EXISTS `db_orders` (
  `o_id` int(100) NOT NULL AUTO_INCREMENT,
  `courseid` int(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `stud_id` int(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`o_id`),
  UNIQUE KEY `courseid` (`courseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `db_orders`
--

INSERT INTO `db_orders` (`o_id`, `courseid`, `address`, `state`, `pin`, `country`, `stud_id`, `video`, `status`) VALUES
(1, 21, 'sdbvdsb', 'bzb', '63636', 'Bangladesh', 1, '', 'Waiting For Confirmation'),
(2, 22, 'sdbvdsb', 'bzb', '63636', 'Bangladesh', 1, '', 'Waiting For Confirmation'),
(5, 23, 'sggggg', 'kerala', '63636', 'Belarus', 8, '', 'Waiting For Confirmation'),
(13, 24, 'scasvafa', 'tamilnadu', '451545', 'Belgium', 1, '', 'Waiting For Confirmation'),
(14, 25, 'scasvafa', 'tamilnadu', '451545', 'Belgium', 1, '', 'Waiting For Confirmation'),
(59, 26, 'gnzfn', 'kerrad', '451545', 'Benin', 1, '', 'Waiting For Confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `db_payment`
--

CREATE TABLE IF NOT EXISTS `db_payment` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `owner` varchar(200) NOT NULL,
  `cvv` int(100) NOT NULL,
  `cardno` int(100) NOT NULL,
  `date` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `stud_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `db_payment`
--

INSERT INTO `db_payment` (`p_id`, `owner`, `cvv`, `cardno`, `date`, `price`, `stud_id`, `status`) VALUES
(15, 'dfzf', 3424, 77799799, '0116', 24, 1, 'success'),
(16, 'dfzf', 3424, 77799799, '0116', 24, 1, 'success'),
(17, 'tom', 47, 345633636, '0116', 36, 1, 'success'),
(18, 'tom', 47, 345633636, '0116', 36, 1, 'success'),
(19, 'tom', 47, 345633636, '0116', 36, 1, 'success'),
(20, 'tom', 3424, 3464646, '0120', 48, 1, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE IF NOT EXISTS `db_user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `login_id` int(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`user_id`, `fname`, `lname`, `phone`, `email`, `gender`, `dob`, `address`, `login_id`) VALUES
(1, 'zac', 't', '4567832340', 'zac@gmail.com', 'male', '2019-09-12', 'dgvdzgdsgdszg', 1),
(2, 'zac', 't', '4567832340', 'zac@gmail.com', 'male', '2019-09-12', 'dgvdzgdsgdszg', 2),
(3, 'jos', 'p', '2345645345', 'jos@gmail.com', 'male', '2019-09-03', 'ndfgmndmmg', 3),
(4, 'jos', 'p', '2345645345', 'jos@gmail.com', 'male', '2019-09-03', 'ndfgmndmmg', 3),
(6, 'jos', 'p', '2345645345', 'jos@gmail.com', 'male', '2019-09-03', 'ndfgmndmmg', 3),
(7, 'aaa', 'b', '5467543546', 'zdgdzgf@gmail.com', 'male', '2019-09-23', 'fgb ssssssssssssssssssssssssd', 3),
(8, 'aaa', 'b', '5467543546', 'zdgdzgf@gmail.com', 'male', '2019-09-23', 'fgb ssssssssssssssssssssssssd', 4),
(9, 'jiss k', 'saju', '8075825754', 'jissksaju@gmail.com', 'male', '1997-11-03', 'koottanal house,pala p.o,pala', 8),
(10, '', '', '', '', '', '', '', 9),
(11, 'joel', '1111', '9645252226', 'gdgsd@gmail.com', 'male', '2019-10-21', 'hrhrhsd', 9),
(12, 'joel', '1111', '9645252226', 'gdgsd@gmail.com', 'male', '2019-10-21', 'hrhrhsd', 9),
(13, '', '', '', '', '', '', '', 9),
(14, 'joel', 'n', '4532786745', 'jissksaju@gmail.com', 'male', '2019-10-21', 'gzgdzsfgb', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
