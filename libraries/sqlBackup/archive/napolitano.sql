-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2015 at 06:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `napolitano`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Id`, `Title`, `Editable`, `Html`, `Description`, `KeyWords`, `Heading`) VALUES
(1, 'About', 'true', '', 'Here at Napolitano you can find the best in Granite and Marble!', 'About us, About, Granite, Marble', 'About Napolitano'),
(2, 'Accessories', 'true', '', 'Here you can find all the accessories for your home project.', 'sinks, faucets, sealers,', 'View All Accessories'),
(6, 'Contact', 'true', 'not editable\n', 'Here you can contact napolitano for any questions or concerns you have!', 'Contact us, Contact, Us', 'Contact Us'),
(10, 'Pages', 'false', 'Not editable', '', '', 'Add A New Page'),
(11, 'Dashboard', 'false', 'Not editable', 'stuff, stuf and more stuff!', 'dashboard, edit ease, quick blog post', 'Welcome to the Dashboard'),
(13, 'Posts', 'false', 'Not editable', '', '', 'View All Posts'),
(14, 'Main', 'false', 'Not editable', 'Home page', 'Home', 'Welcome to Napolitano Marble & Granite!'),
(15, 'ShowRoom', 'true', '', '', '', 'Welcome to the Show Room!'),
(16, 'Partners', 'true', '', 'Here you can find all of our partners that we do business with!.', 'our partners', 'Industry Partners'),
(17, 'Stones', 'true', '', '', '', 'Stones'),
(18, 'Granite', 'false', '<p>Praesent faucibus finibus scelerisque. In tempor orci in leo blandit vestibulum. Curabitur eu orci rutrum, ultrices eros vel, tincidunt eros. Nunc risus magna, dapibus in euismod nec, imperdiet a nisi. Praesent tempor sed magna eu finibus. Praesent vitae lobortis turpis. Nulla fringilla, purus faucibus tristique egestas, velit dui volutpat lorem, non facilisis eros enim sed est. Morbi auctor metus nibh, sed sollicitudin elit bibendum ut. Sed eget velit ultricies, pharetra lacus vitae, auctor leo. Fusce augue diam, posuere non purus vel, auctor laoreet turpis. Pellentesque scelerisque ullamcorper eros, vel ultricies elit luctus nec. Vivamus malesuada ultrices nisl at pellentesque. </p>  <p>&nbsp;</p>  <p>  <div class="col-md-12 frame"><iframe class="stones" src="http://www.bostongraniteexchange.com/vProducts.aspx?q=SLAB^Granite&bcolors=&list=listPhotos&page=1" scrolling="no"></iframe></div>  </p>\r\n\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n\r\n<a href="Stones">&larr; Back to All Stones</a>', '', '', 'Granite'),
(19, 'Marble', 'false', '<p>Praesent faucibus finibus scelerisque. In tempor orci in leo blandit vestibulum. Curabitur eu orci rutrum, ultrices eros vel, tincidunt eros. Nunc risus magna, dapibus in euismod nec, imperdiet a nisi. Praesent tempor sed magna eu finibus. Praesent vitae lobortis turpis. Nulla fringilla, purus faucibus tristique egestas, velit dui volutpat lorem, non facilisis eros enim sed est. Morbi auctor metus nibh, sed sollicitudin elit bibendum ut. Sed eget velit ultricies, pharetra lacus vitae, auctor leo. Fusce augue diam, posuere non purus vel, auctor laoreet turpis. Pellentesque scelerisque ullamcorper eros, vel ultricies elit luctus nec. Vivamus malesuada ultrices nisl at pellentesque. </p>  <p>&nbsp;</p>\n\n<p>  <div class="col-md-12 frame"><iframe class="stones" src="http://www.bostongraniteexchange.com/vProducts.aspx?q=SLAB^Marble" scrolling="no"></iframe></div>  </p>\n\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n\n<a href="Stones">&larr; Back to All Stones</a>', '', '', 'Marble'),
(21, 'VirtualTours', 'true', '', '', '', 'Check Out Our Virtual Tours'),
(22, 'KitchenDesigner', 'true', '', 'Here you can design your own kitchen.', 'Kitchen Designer, kitchen, Designer counter tops, counter', 'Kitchen Designer'),
(23, '404', 'false', '<h1>Bapoh</h1>', '', '', '404 error page'),
(26, 'admin', 'false', '', '', '', 'Log into the themeParks dasboard');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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
  `Id` int(11) NOT NULL,
  `Theme` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Theme`
--

INSERT INTO `Theme` (`Id`, `Theme`) VALUES
(1, 'napolitano');

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
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
