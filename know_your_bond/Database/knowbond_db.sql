-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 09:26 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowbond_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

DROP TABLE IF EXISTS `friend`;
CREATE TABLE IF NOT EXISTS `friend` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `score` int(2) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `fk_friend` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(1, 'Saksham Srivastava', 'sakshamsrivastava74@gmail.com'),
(2, 'Saksham Srivastava', 'ss@sss.com'),
(3, 'Saksham Srivastava', 'ss@sss.com'),
(4, 'Saksham Srivastava', 'sakshamsrivastava74@gmail.com'),
(5, 'Saksham Srivastava', 'ss@sss.com'),
(6, 'Saksham Srivastava', 'sakshamsrivastava74@gmail.com'),
(7, 'Saksham Srivastava', 'ss@sss.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

DROP TABLE IF EXISTS `user_answers`;
CREATE TABLE IF NOT EXISTS `user_answers` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `q1` varchar(4) DEFAULT NULL,
  `q2` varchar(4) DEFAULT NULL,
  `q3` varchar(4) DEFAULT NULL,
  `q4` varchar(4) DEFAULT NULL,
  `q5` varchar(4) DEFAULT NULL,
  `q6` varchar(4) DEFAULT NULL,
  `q7` varchar(4) DEFAULT NULL,
  `q8` varchar(4) DEFAULT NULL,
  `q9` varchar(4) DEFAULT NULL,
  `q10` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
