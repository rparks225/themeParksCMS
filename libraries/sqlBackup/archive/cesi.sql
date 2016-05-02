-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2015 at 10:56 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cesi`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) NOT NULL,
  `Gallery` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Order` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Image`, `Gallery`, `Title`, `Order`) VALUES
(1, 'stuff', 'yea', 'and', 3),
(2, '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Editable` varchar(5) DEFAULT NULL,
  `Html` text,
  `Description` text NOT NULL,
  `KeyWords` text NOT NULL,
  `Heading` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Id`, `Title`, `Editable`, `Html`, `Description`, `KeyWords`, `Heading`) VALUES
(1, 'About', 'true', '', 'Here at Napolitano you can find the best in Granite and Marble!', 'About us, About, Granite, Marble', 'About Elder Care Services'),
(6, 'Contact', 'false', 'not editable\n', 'Here you can contact napolitano for any questions or concerns you have!', 'Contact us, Contact, Us', 'Contact Us'),
(10, 'pages', 'false', '<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'false', '', 'Add A New Page'),
(11, 'dashboard', 'false', '<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'false', 'dashboard, edit ease, quick blog post', 'Welcome to the Dashboard'),
(13, 'Posts', 'false', '<p>Not editable</p>\r\n', 'Posts for all things posts!', 'Posts, Blog posts', 'View All Posts'),
(14, 'Main', 'false', '<p>Not editable</p>\r\n', 'Home page', 'Home', 'Welcome to Cooperative Elder Services!'),
(23, '404', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This is not the page you are looking for... move along</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="home">&larr;Home</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '404 error page'),
(26, 'admin', 'false', '', 'false', '', 'Log into the themeParks dasboard'),
(30, 'Terms', 'true', '', 'Here you can find term and conditions of our facility along with anything you need to know before you walk in.', 'terms and condition, terms, conditions', 'Terms and Conditions'),
(31, 'ADH', 'true', '', 'Her you can find a list of our facilities by town.', 'Adult Day Health, Adult, Day, Health', 'Adult Day Health'),
(32, 'images', 'false', '', 'Here you can find the images from all of our events', 'Gallery , images, events,', 'Cesi Gallery'),
(33, 'Gallery', 'Pleas', '', '', '', 'The Gallery page');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Id`, `Title`, `Image`, `Description`, `Date`) VALUES
(1, 'New', 'photo-1.jpg', '<h3>Forgot to write stuff here.</h3>\r\n\r\n<p>Bianca was here.</p>\r\n', '2015-10-20'),
(2, 'New blog post', 'photo-2.jpg', '<p>Stuff goes here and then dome</p>\r\n', '2015-10-20'),
(3, 'Stuff', 'photo-3.jpg', '<p>here</p>\r\n', '2015-10-20'),
(4, 'One last post', 'photo-4.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n', '2015-10-20'),
(5, 'New''s', 'photo-5.jpg', '<p>new&#39;s and suche&#39;s</p>\r\n', '2015-10-20'),
(6, 'And then Some', 'photo-6.jpg', '<p>yea</p>\r\n', '2015-10-20'),
(7, 'On the verge of a break through!', 'photo-12.jpg', '<p>Yea I said it!</p>\r\n', '2015-10-20'),
(8, 'Welcome to Napolitano', 'photo-7.jpg', '<p>New blog post</p>\r\n', '2015-10-20'),
(9, 'Italiano', 'photo-8.jpg', '<p>Stuff stuff and more stuff</p>\r\n', '2015-10-20'),
(10, 'More Testing!', 'photo-9.jpg', '<p><strong>Stuff goes here and such</strong></p>\r\n', '2015-10-20'),
(11, 'So be it!', 'photo-10.jpg', '<h1>New post 27 and a half</h1>\r\n\r\n<p>More new post shall go here and what not!</p>\r\n\r\n<p>Auto new paragraph!</p>\r\n', '2015-10-20'),
(12, 'Paragraph test', 'photo-11.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n', '2015-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `Theme`
--

CREATE TABLE IF NOT EXISTS `Theme` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Theme` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Theme`
--

INSERT INTO `Theme` (`Id`, `Theme`) VALUES
(1, 'cesi');

-- --------------------------------------------------------

--
-- Table structure for table `U_sers`
--

CREATE TABLE IF NOT EXISTS `U_sers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_name` varchar(255) NOT NULL,
  `Pass_word` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Signed_Up` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `U_sers`
--

INSERT INTO `U_sers` (`Id`, `User_name`, `Pass_word`, `Email`, `Signed_Up`) VALUES
(1, 'rparks1', 'stuff', 'rparks@lachancecom.com', '2015-06-17 18:51:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
