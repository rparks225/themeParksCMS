-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2015 at 02:59 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `themeParks`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `Id` int(11) NOT NULL,
  `Job` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`Id`, `Job`, `Facility`, `Description`, `Date`) VALUES
(1, 'Janiter', 'Brighton', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2015-11-23'),
(2, 'Receptionist', 'Burlington', 'The reception will be in charge of stuff', '2015-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `Id` int(11) NOT NULL,
  `Gallery` varchar(255) NOT NULL,
  `Cover` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Order` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Gallery`, `Cover`, `Title`, `Order`) VALUES
(1, 'burlington', '', 'The burlington Gallery', 3),
(2, 'Groton', '', 'The Groton Gallery', 4),
(3, 'Concord', '', 'The Concord Gallery', 5),
(4, 'Milton', '', 'The Milton Gallery', 2),
(5, 'adultDay', 'iStock_000002598909Small.jpg', 'Adult Day Health', 1),
(6, 'Posts', 'photo-1.jpg', 'Blog Post Images', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Order` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `Image`, `Title`, `Album`, `Order`) VALUES
(1, 'iStock_000002598909Small.jpg', 'iStock_000002598909Small.jpg', 'adultDay', 8),
(2, 'iStock_000003250093Small.jpg', 'iStock_000003250093Small.jpg', 'adultDay', 2),
(3, 'iStock_000006383735Small.jpg', 'iStock_000006383735Small.jpg', 'adultDay', 1),
(4, 'iStock_000007184699Small.jpg', 'iStock_000007184699Small.jpg', 'adultDay', 4),
(5, 'iStock_000008195499Small.jpg', 'iStock_000008195499Small.jpg', 'adultDay', 3),
(6, 'iStock_000009601460Small.jpg', 'iStock_000009601460Small.jpg', 'adultDay', 0),
(7, 'iStock_000008158151Medium.jpg', 'iStock_000008158151Medium.jpg', 'adultDay', 5),
(8, 'iStock_000010464454Small.jpg', 'iStock_000010464454Small.jpg', 'adultDay', 6),
(9, 'iStock_000010817484Small.jpg', 'iStock_000010817484Small.jpg', 'adultDay', 7),
(10, 'photo-1.jpg', 'photo-1.jpg', 'Posts', 10),
(11, 'photo-2.jpg', 'photo-2.jpg', 'Posts', 12),
(12, 'photo-3.jpg', 'photo-3.jpg', 'Posts', 11),
(13, 'photo-4.jpg', 'photo-4.jpg', 'Posts', 9),
(14, 'photo-5.jpg', 'photo-5.jpg', 'Posts', 8),
(15, 'photo-6.jpg', 'photo-6.jpg', 'Posts', 6),
(16, 'photo-8.jpg', 'photo-8.jpg', 'Posts', 5),
(17, 'photo-7.jpg', 'photo-7.jpg', 'Posts', 4),
(18, 'photo-9.jpg', 'photo-9.jpg', 'Posts', 3),
(19, 'photo-10.jpg', 'photo-10.jpg', 'Posts', 2),
(20, 'photo-11.jpg', 'photo-11.jpg', 'Posts', 1),
(21, 'photo-12.jpg', 'photo-12.jpg', 'Posts', 0),
(22, 'photo-13.jpg', 'photo-13.jpg', 'Posts', 7),
(23, 'photo-14.jpg', 'photo-14.jpg', 'Posts', 13);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Editable` varchar(5) DEFAULT NULL,
  `Html` text,
  `Description` text NOT NULL,
  `KeyWords` text NOT NULL,
  `Heading` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Id`, `Title`, `Editable`, `Html`, `Description`, `KeyWords`, `Heading`) VALUES
(1, 'About', 'true', '', 'Here at Dekayshreds you can find the best in Music & Video!', 'About us, About, Granite, Marble', 'About Dekay Kennedy'),
(6, 'contact', 'false', '', 'Here you can contact Dekay for any questions or inquiries for future shows! ', 'Contact us, Contact, Us, Contact Dekay', 'Contact Us'),
(10, 'pages', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'false', '', 'Add A New Page'),
(11, 'Dashboard', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'false', 'dashboard, edit ease, quick blog post', 'Welcome to the Dashboard'),
(13, 'Posts', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Posts for all things posts!', 'Posts, Blog posts', 'News Update'),
(14, 'home', 'false', '', 'Home page', 'Home, page, home page', 'Welcome to Dekayshreds!'),
(23, '404', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This is not the page you are looking for... move along</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\\"home\\">&larr;Home</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '404 error page'),
(26, 'admin', 'false', '', 'false', '', 'Log into the themeParks dasboard'),
(30, 'Merch', 'true', '', 'Want to support Dekay Kennedy? Buy a T-shirt or a hoody and help support local music!', 'Dekayshreds Merchandise, Merchandise, Merch,', 'Merchandise'),
(31, 'Music', 'true', '', 'Her you can find a list of our facilities by town.', 'Adult Day Health, Adult, Day, Health', 'View All Tracks'),
(32, 'images', 'false', '', 'Here you can find the images from all of our events', 'Gallery , images, events,', 'Cesi Gallery'),
(33, 'gallery', 'Pleas', '', '', '', 'The Gallery page'),
(35, 'Videos', 'true', '', 'Elder Care virtual tours by Facility.', 'Elder Care, virtual tours, Facility, Brighton Ma, Milton Ma, Arlington Ma, Concord Ma, and Groton Ma.', 'Music Videos'),
(38, 'service', 'false', '', 'Stuff about our services.', 'Services', 'Our Services'),
(39, 'employment', 'false', '', 'Dekayshreds Job Opportunities.', 'Job Opportunities, Jobs, Careers, Job Careeres', 'Employment Opportunities');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Updated` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Id`, `Title`, `Image`, `Description`, `Updated`, `Date`) VALUES
(1, 'New', 'photo-1.jpg', '<h3>Forgot to write stuff here.</h3>\r\n\r\n<p>Bianca was here.</p>\r\n', '2015-02-02', '2015-02-02'),
(2, 'Thanksgiving time at the Burling Center', 'photo-13.jpg', '<p>Its Thanksgiving and what better than to spend it with family.</p>\r\n', '2015-05-09', '2015-05-09'),
(3, 'Pastor houses', 'photo-3.jpg', '<p>tglhvliyfiyf</p>\r\n', '2015-07-11', '2015-07-11'),
(4, 'Testing', 'photo-10.jpg', '<p>STuff</p>\r\n', '2015-09-12', '2015-09-12'),
(5, 'The Force Awaken', 'photo-1.jpg', '<p>STuff</p>\r\n', '2015-12-24', '2015-12-24'),
(6, 'Date and time', 'photo-2.jpg', '<p>Stuff</p>\r\n', '2015-12-24', '2015-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `Theme`
--

CREATE TABLE IF NOT EXISTS `Theme` (
  `Id` int(11) NOT NULL,
  `Theme` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Theme`
--

INSERT INTO `Theme` (`Id`, `Theme`) VALUES
(1, 'dekayshreds');

-- --------------------------------------------------------

--
-- Table structure for table `U_sers`
--

CREATE TABLE IF NOT EXISTS `U_sers` (
  `Id` int(11) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `Pass_word` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Signed_Up` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `U_sers`
--

INSERT INTO `U_sers` (`Id`, `User_name`, `Pass_word`, `Email`, `Signed_Up`) VALUES
(1, 'rparks1', 'stuff', 'rparks@lachancecom.com', '2015-06-17 18:51:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Theme`
--
ALTER TABLE `Theme`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `U_sers`
--
ALTER TABLE `U_sers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Theme`
--
ALTER TABLE `Theme`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `U_sers`
--
ALTER TABLE `U_sers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
