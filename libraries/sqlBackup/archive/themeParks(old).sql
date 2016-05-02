-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2015 at 11:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `napolitano_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`Id` int(11) NOT NULL,
  `First` varchar(255) NOT NULL,
  `Last` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `First`, `Last`, `Email`, `Phone`, `State`, `Message`, `Date`) VALUES
(8, 'sd', '', '', '', '', '', '2015-08-09 00:32:58'),
(12, 'e', '', '', '', '', '', '2015-08-09 02:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Alt` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Image`, `Alt`, `Album`, `Date`) VALUES
(1, 'one.JPG', 'one', 'products', '2015-06-18 18:51:24'),
(2, 'two.JPG', 'two', 'products', '2015-06-18 18:51:24'),
(3, 'three.JPG', 'three', 'people', '2015-06-18 19:17:28'),
(4, 'four.JPG', 'four', 'people', '2015-06-18 19:17:28'),
(5, 'five.JPG', 'five', 'people', '2015-06-18 19:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
`Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Html` text,
  `Links` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Id`, `Title`, `Html`, `Links`) VALUES
(1, 'About', ' <iframe class="col-md-8" style="height:500px;" src="https://www.youtube.com/embed/CiBLZoPJo5A" frameborder="0" allowfullscreen></iframe>  \r\n \r\n                     <p style="background-color:#EEE;padding:30px;border:solid thin black;border-radius:0 30px;" class="col-md-4">\r\n<strong>Published on Apr 11, 2015</strong><br />\r\nBeing the father of a son who was diagnosed with over 100 types of environmental and food related allergies has made me look closer at the products we put in our hair. Owning a barbershop and working in the hair industry I realized that the options for all natural hair and skin products were few and far between. Inspired by my son we decided to create an all natural styling gel that would benefit my son and our clients alike. This is the story behind the creation of Thumbs Up Styling Gel. \r\n<br /><br />\r\nSHOT AND DIRECTED BY JAY MORALES <a href="http://thisisjmorales.tumblr.com/">http://thisisjmorales.tumblr.com/</a>\r\n                    </p>', '/www/Page/About'),
(2, 'Products', '', '/www/Page/Products'),
(3, 'News', '', '/www/News'),
(4, 'Staff', '', '/www/Page/Staff'),
(5, 'Gallery', 'Not editable', '/www/Gallery'),
(6, 'Contact', 'Not editable', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Id`, `Title`, `Image`, `Description`, `Date`) VALUES
(1, 'New', 'badge.jpg', 'Forgot to write stuff here', '2015-08-16'),
(2, 'New blog post', 'interesting.jpg', 'Stuff goes here and then dome', '2015-08-17'),
(3, 'Stuff', 'xmas.jpg', 'here', '2015-08-17'),
(4, 'One last post', 'cd.jpg', 'Stuff''s and it''s and var''s', '2015-08-17'),
(5, 'New''s', 'ween.jpg', 'new''s and suche''s', '2015-08-21'),
(6, 'And then Some', 'working.jpg', 'yea', '2015-08-18'),
(7, 'Im at mikes house', 'pie.jpg', 'Stuff goes here', '2015-08-19'),
(8, 'On the verge of a break through!', '', 'Yea I said it!', '2015-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Html` text NOT NULL,
  `Description` text NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Links` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Title`, `Html`, `Description`, `Price`, `Links`) VALUES
(1, 'Thumbs Up Styling Get', 'pic1', 'Slow-carb Blue Bottle mumblecore taxidermy bitters. Intelligentsia put a bird on it kogi typewriter pug. Asymmetrical listicle hashtag fap authentic. Wayfarers four dollar toast authentic, craft beer cold-pressed flexitarian Pitchfork lumbersexual cardigan gluten-free tousled four loko. Seitan 90''s gentrify normcore irony. ', '10.00', '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">\r\n<input type="hidden" name="cmd" value="_s-xclick">\r\n<input type="hidden" name="hosted_button_id" value="5EXZH8K4PLSXL">\r\n<input class="btn btn-default" type="submit" value="Buy Now" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">\r\n</form>\r\n'),
(2, 'Thumbs Up Barber Glasses', 'pic2', 'Slow-carb Blue Bottle mumblecore taxidermy bitters. Intelligentsia put a bird on it kogi typewriter pug. Asymmetrical listicle hashtag fap authentic. Wayfarers four dollar toast authentic, craft beer cold-pressed flexitarian Pitchfork lumbersexual cardigan gluten-free tousled four loko. Seitan 90''s gentrify normcore irony. \r\n', '20.00', '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">\r\n<input type="hidden" name="cmd" value="_s-xclick">\r\n<input type="hidden" name="hosted_button_id" value="VAYS4WSF446HA">\r\n<input class="btn btn-default" type="submit" border="0" name="submit" value="Buy Now" alt="PayPal - The safer, easier way to pay online!">\r\n</form>\r\n'),
(3, 'NEW', '', 'Slow-carb Blue Bottle mumblecore taxidermy bitters. Intelligentsia put a bird on it kogi typewriter pug. Asymmetrical listicle hashtag fap authentic. Wayfarers four dollar toast authentic, craft beer cold-pressed flexitarian Pitchfork lumbersexual cardigan gluten-free tousled four loko. Seitan 90''s gentrify normcore irony. \r\n', '10.00', '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">\r\n<input type="hidden" name="cmd" value="_s-xclick">\r\n<input type="hidden" name="hosted_button_id" value="VAYS4WSF446HA">\r\n<input class="btn btn-default" type="submit" border="0" name="submit" value="Buy Now" alt="PayPal - The safer, easier way to pay online!">\r\n</form>\r\n'),
(4, 'NEW 2', '', 'Slow-carb Blue Bottle mumblecore taxidermy bitters. Intelligentsia put a bird on it kogi typewriter pug. Asymmetrical listicle hashtag fap authentic. Wayfarers four dollar toast authentic, craft beer cold-pressed flexitarian Pitchfork lumbersexual cardigan gluten-free tousled four loko. Seitan 90''s gentrify normcore irony. \r\n', '10.00', '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">\r\n<input type="hidden" name="cmd" value="_s-xclick">\r\n<input type="hidden" name="hosted_button_id" value="VAYS4WSF446HA">\r\n<input class="btn btn-default" type="submit" border="0" name="submit" value="Buy Now" alt="PayPal - The safer, easier way to pay online!">\r\n</form>\r\n');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `U_sers`
--
ALTER TABLE `U_sers`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
