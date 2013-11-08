-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2013 at 10:52 AM
-- Server version: 5.5.31-0+wheezy1
-- PHP Version: 5.4.4-14+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_blog`
--
CREATE DATABASE IF NOT EXISTS `simple_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `simple_blog`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `teaser` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `slug`, `title`, `teaser`, `content`, `image`, `category_id`, `user_id`, `date_created`, `date_modified`, `status`) VALUES
(1, '', 'Hello Article', 'I''am the teaser', 'I''am the content, I''am the content, I''am the content', 'travel1.png', 1, 1, 1383075503, 1383075503, 1),
(2, '', 'Test Article', 'Hallo Derp Hallo Derp', 'Hallo Derp Hallo Derp Hallo De Hallo DerpHallo DerpHallo DerpHallo DerpHallo Derpp', 'travel2.png', 1, 1, 1383076730, 1383076730, 1),
(3, '', 'Genera '' tedaasdfa article', 'short teasdfasdfaser', 'i am the coasdfntent', 'travel3.png', 1, 2, 1383238389, 1383472265, 1),
(4, '', 'Generated article', 'short teaser', 'i am the content', 'travel4.png', 1, 2, 1383238394, 1383238394, 1),
(5, '', 'Generated article', '', 'i am the content', 'travel5.png', 1, 1, 1383238611, 1383238611, 1),
(6, '', 'Generated article', 'short teaser', 'i am the content', 'travel6.png', 1, 1, 1383238633, 1383238633, 1),
(7, '', 'food1', '', '', 'food_pizza.png', 2, 1, 1383857488, 1383857488, 1),
(8, '', 'food1', '', '', 'food_steak.png', 2, 2, 1383857488, 1383857488, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `date_created`, `date_modified`, `status`) VALUES
(1, 'Travel', 'travel', 1383842114, 1383842114, 1),
(2, 'Food', 'food', 1383842114, 1383842114, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date_created`, `date_modified`, `status`) VALUES
(1, 'markus', '16d7a4fca7442dda3ad93c9a726597e4', 1383842718, 1383842718, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
