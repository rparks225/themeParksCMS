-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2016 at 10:07 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `themeparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Job` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Gallery` varchar(255) NOT NULL,
  `Cover` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Order` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Gallery`, `Cover`, `Title`, `Order`) VALUES
(6, 'Posts', 'photo-1.jpg', 'Blog Post Images', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Order` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `Image`, `Title`, `Album`, `Order`) VALUES
(10, 'photo-1.jpg', 'photo-1.jpg', 'Posts', 10),
(11, 'photo-2.jpg', 'photo-2.jpg', 'Posts', 12),
(12, 'photo-3.jpg', 'photo-3.jpg', 'Posts', 11),
(13, 'photo-4.jpg', 'photo-4.jpg', 'Posts', 9),
(14, 'photo-5.jpg', 'photo-5.jpg', 'Posts', 8),
(15, 'photo-6.jpg', 'photo-6.jpg', 'Posts', 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Id`, `Title`, `Editable`, `Html`, `Description`, `KeyWords`, `Heading`) VALUES
(1, 'About', 'true', '', '', '', 'About Us'),
(6, 'contact', 'false', '', '', '', 'Contact Us'),
(10, 'pages', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'false', '', 'Add A New Page'),
(11, 'Dashboard', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'false', 'dashboard, edit ease, quick blog post', 'Welcome to the Dashboard'),
(13, 'Posts', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Posts for all things posts!', 'Posts, Blog posts', 'News Update'),
(14, 'home', 'false', '', 'Home page description', 'Home', 'Brows By Brand'),
(23, '404', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This is not the page you are looking for... move along</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://localhost/themeParks">&larr;Home</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '404 error page'),
(26, 'admin', 'false', '', 'false', '', 'Log into the themeParks dasboard'),
(32, 'images', 'false', '', 'Here you can find the images from all of our events', 'Gallery , images, events,', 'Cesi Gallery'),
(38, 'service', 'false', '', 'Stuff about our services.', 'Services', 'Our Services'),
(39, 'employment', 'false', '', '', 'Job Opportunities, Jobs, Careers, Job Careeres', 'Employment Opportunities'),
(48, 'Test', 'true', '', 'false', '', 'Prices'),
(49, 'OurStandards', 'true', '', 'Breast pumps are now covered under the ACA. Find out today if you qualify for a free dme breast pump.', 'Healthy Baby Essentials, HBE Our Standards', 'Our Standards'),
(50, 'breastfeedingBasics', 'true', '', 'We are a DME provider offered by Enos that carries Hygeia, Medela and Ameda breast pumps. Visit us today to see if you qualify for a free breast pump!', 'Breast Feeding, Breast Feeding Basics, First time feeding', 'Feeding Information for New Parents'),
(51, 'insuranceProvidedBreastPump', 'true', '', 'Breast pumps are now covered under the ACA. Find out today if you qualify for a free dme breast pump.', 'Insurance Provided Breast Pump, Breast Pumps, Pumps', 'Insurance Provided Breast Pump'),
(52, 'communityResourcesGuide', 'true', '', 'Donâ€™t hesitate to contact a Healthy Baby Rep with questions or issues youâ€™re having with your breast pump. We have a technical support staff for troubleshooting.', 'Community Resources Guide, HBE Community Resources Guide, HBE Resources Guide', 'Community Resources Guide'),
(53, 'breastPumpTroubleShooting', 'true', '', 'Healthy Baby Essentials Customer service representatives are available at Ameda, Hygeia and Medela to answer any breast pump related questions or concerns.', 'HBE troubleshooting, Breast Pump Troubleschooting, Troubleshooting', 'Breast Pump Troubleshooting'),
(54, 'Contact-Survey', 'false', '', 'Healthy Baby Essentials would like to invite you to take our Customer Satisfaction Survey and let us know how you feel!', 'HBE Survey, Customer Satisfaction Survey, Customer Satisfaction, Satisfaction Survey', 'Customer Satisfaction Survey'),
(55, 'breastPumpInstructionVideos', 'true', '', 'Instructional Videos for Medela & Ameda Breast Pumps. Including breast pump assembly, cleaning, troubleshooting and much more.', 'Breast Pump Instruction Videos', 'Breast Pump Instruction Videos'),
(56, 'products', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Medela, Ameda and Hygeia for rental or purchase.', 'Ameda, Hygeia, Medela, Breast Pumps, Healthy Baby Essentials', 'View All Products'),
(57, 'PrivacyPractices', 'true', '', 'This notice tells you about the way in which Enos Home Respiratory (referred to as "we" or Enos Home Respiratory) may collect, use, and disclose your protected health information.', 'Privacy Practice, Privacy, Notice of Privacy, Notice of Privacy Practices', 'Notice of Privacy Practices'),
(58, 'Testimonials', 'true', '', 'We take pride in providing our customers with great service; our goal is to help new moms through the process to make things easier for them!', 'HBE Testimonials, Testimonials, A word from out Customers', 'Our Customers Speak'),
(59, 'HospitalGrade', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital Grade Breast Pumps including Medela, Ameda and Hygeia for rental or purchase.', 'Hospital Grade Pumps, Hospital Grade, Hospital Grade Breast Pumps, Breast Pumps', 'Hospital Grade'),
(60, 'HomeGrade', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Home Grade Breast Pumps including Medela, Ameda and Hygeia for rental or purchase.', 'Home Grade Pumps, Home Grade, Home Grade Breast Pumps, Breast Pumps', 'Home Grade'),
(61, 'Accessories', 'false', '', 'Healthy Baby Essentials offers a  variety of  Medela Breast Pump Accessories including Medela''s New Breastmilk Collection & Storage Bottle Set.', 'Breast Pump Accessories ,Breast, Pump, Accessories, Breast Pump', 'Accessories'),
(62, 'Ameda', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Ameda Breast Pumps rental or purchase.', 'Ameda, Ameda Breast Pumps, Ameda Products, HBE Ameda Products', 'Ameda'),
(63, 'Ardo', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Ardo Breast Pumps for rental or purchase.', 'Ardo, Ardo Breast Pumps, Ardo Products, HBE Ardo Products', 'Ardo'),
(64, 'Freemie', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Freemie Breast Pumps for rental or purchase.', 'Freemie, Freemie Breast Pumps, Freemie Products, HBE Freemie Products', 'Freemie'),
(65, 'Hygeia', 'Pleas', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Freemie Breast Pumps for rental or purchase.', 'Hygeia, Hygeia Breast Pumps, Hygeia Products, HBE Hygeia Products', 'Hygeia'),
(66, 'Lansinoh', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Lansinoh Breast Pumps for rental or purchase.', 'Lansinoh, Lansinoh Breast Pumps, Lansinoh Products, HBE Lansinoh Products', 'Lansinoh'),
(67, 'Medela', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Medela Breast Pumps for rental or purchase.', 'Medela, Medela Breast Pumps, Medela Products, HBE Medela Products', 'Medela'),
(68, 'Spectra', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Spectra Breast Pumps for rental or purchase.', 'Spectra, Spectra Breast Pumps, Spectra Products, HBE Spectra Products', 'Spectra'),
(69, 'Nuroo', 'false', '', 'Healthy Baby Essentials, a DME provider, offers a variety of Hospital & Home Grade Breast Pumps including Nuroo Breast Pumps for rental or purchase.', 'Nuroo, Nuroo Breast Pumps, Nuroo Products, HBE Nuroo Products', 'Nuroo'),
(70, 'instructionalVideos', 'true', '', 'Instructional Videos for Medela & Ameda Breast Pumps. Including breast pump assembly, cleaning, troubleshooting and much more.', 'Breast Pump Instructional Videos', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Updated` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Id`, `Title`, `Image`, `Description`, `Updated`, `Date`) VALUES
(1, 'New', 'photo-1.jpg', '<h3>Forgot to write stuff here.</h3>\r\n\r\n<p>Bianca was here.</p>\r\n', '2015-02-02', '2015-02-02'),
(5, 'New', 'photo-2.jpg', '<p>Stuff</p>\r\n', '', '02/18/2016'),
(6, 'New Post 2', 'photo-3.jpg', '<p>Stuff</p>\r\n', '', '02/18/2016'),
(8, 'New New Post', 'photo-5.jpg', '<p>Stuff it and expand</p>\r\n', '', '02/18/2016');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Grade` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Badges` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`Id`, `Title`, `Description`, `Grade`, `Image`, `Badges`, `Company`) VALUES
(1, 'Medela Symphony Breast Pump', '<p>The first breast pump with 2-Phase Expression&reg; technology which is proven to achieve faster milk ejection and faster milk flow.* More efficient and comfortable. Unique overflow protection. Double or single pumping. One knob control. Whisper quiet operation. Easy-to-clean. Compatible with Preemie+ technology (Preemie+ Card sold separately).</p>\r\n\r\n<p><strong>Featuring the original 2-Phase Expression&reg; technology &ndash; found only in Medela breast pumps.</strong></p>\r\n\r\n<p>Babies breastfeed in 2 phases:&nbsp;<br />\r\n1.&nbsp;<strong>Stimulation Phase</strong>&nbsp;&ndash; when babies first go to breast, they suck fast and light to start milk flowing.</p>\r\n\r\n<p><br />\r\n2.&nbsp;<strong>Expression Phase</strong>&nbsp;&ndash; after milk flow or &ldquo;let-down&rdquo; starts, babies breastfeed with a slower, deeper suck, bringing out more milk faster.</p>\r\n', 'Hosp', 'symphony.jpg', 'Freemie', 'Medela'),
(2, 'Ardo Calypso Pro', '<p>The Calypso Pro is a compact hospital grade pump which has in mind the needs of working mothers, or moms who need some extra breastfeeding support. Smaller and lighter than most hospital grade pumps, it&rsquo;s ideal for helping increase or maintain milk supply when a home grade pump may not be sufficient or just to help out busy moms by providing superior speed and efficiency.</p>\r\n\r\n<p><a href="https://www.youtube.com/watch?v=j_co1pQh1ag#t=24" target="_blank"><img alt="instructional video" src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />How to assemble the Ardo PumpSet</a></p>\r\n\r\n<p><a href="http://www.ardo-usa.com/ultrasilent" target="_blank">Ardo noise test results</a></p>\r\n', 'Hosp', 'ardo_calypso_pro.jpg', 'None', 'Ardo'),
(3, 'Medela Pump In Style Advanced Starter Set', '<p>Looking for a 2-Phase Expression pump that could be covered by your insurance? You&#39;ve found it. The Pump In Style Advanced Breast Pump Starter Set is part of Medela&#39;s patented 2-Phase Expression technology pump family.</p>\r\n\r\n<ul style="margin-left:20px;">\r\n	<li>2-Phase Expression technology is proven to get 18%* more milk when double pumping</li>\r\n	<li>Fits perfectly into&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-accessories.php">Medela&#39;s Breast Pump bags</a>&nbsp;(sold separately)</li>\r\n	<li>Only use authentic Medela spare parts</li>\r\n</ul>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/instructional-videos.php#pump-in-style-starter"><img alt="Breast Pump Instruction" src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />Watch the instruction videos</a></p>\r\n', 'Home', 'medela-breastpump-starter-set.jpg', 'Freemie', 'Medela'),
(4, 'Medela Pump In Style Advanced', '<p><strong>Medela&reg; Pump In Style Advanced</strong>&nbsp;is a daily use breast pump designed for moms who pump several times a day. All Pump In Style Advanced breast pumps offer portable convenience for discreet pumping anywhere.</p>\r\n\r\n<p><strong>Featuring the original 2-Phase Expression&reg; technology - only found in Medela breast pumps</strong></p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/instructional-videos.php#pump-in-style"><img alt="Breast Pump Instruction" src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />Watch the instruction videos</a></p>\r\n', 'Home', 'pump-in-style.png', 'Both', 'Medela'),
(5, 'Medela Pump In Style Advanced The Metro Bagâ„¢', '<p><strong>The Metro Bag&nbsp;</strong>features a removable pump in a separate bag for pumping and transport flexibility.</p>\r\n\r\n<p><strong>Featuring the original 2-Phase Expression&reg; technology - only found in Medela breast pumps</strong></p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/instructional-videos.php#pump-in-style"><img alt="Breast Pump Instruction Video" src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />Watch the instruction videos</a></p>\r\n', 'Home', 'pump-in-style-metro.jpg', 'Both', 'Medela'),
(6, 'Medela Freestyle Breast Pump', '<p><strong>Medela&reg; Freestyle</strong>&nbsp;is a compact, lightweight double electric breast pump with a rechargeable battery for mobile pumping.</p>\r\n\r\n<ul>\r\n	<li>2-Phase Expression&reg; technology is proven to produce more milk in less time.</li>\r\n	<li>Daily use - designed for moms who pump several times a day.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What is 2-Phase Expression Technology?</strong><br />\r\nThrough research, Medela learned that there are two distinct phases of how babies breastfeed.<br />\r\n1.&nbsp;<strong>Stimulation phase</strong>&nbsp;&ndash; When babies first go to breast, they suck fast and light to stimulate milk flow.<br />\r\n2.&nbsp;<strong>Expression phase</strong>&nbsp;&ndash; After milk flow or &ldquo;let-down&rdquo; starts, babies breastfeed with a slower, deeper suck, bringing out more milk faster.&nbsp;</p>\r\n\r\n<p>With this technology, Medela Breast Pumps work more like breastfeeding babies.</p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/instructional-videos.php#freestyle"><img src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />Watch the instruction videos</a></p>\r\n', 'Home', 'freestyle.png', 'FSA', 'Medela'),
(7, 'Ameda Purely Yours Personal Double Electric Breast Pump (17070 PMW)', '<ul>\r\n	<li>8 adjustable suction settings and 4 adjustable cycle speeds...allows you to simulate your babys nursing pattern</li>\r\n	<li>Unique diaphragm helps ensure milk purity. Patented system protects collected milk from potential contaminants &amp; prevents milk back-up into tubing &amp; pump</li>\r\n	<li>Dual pumping option...helps save precious time.</li>\r\n	<li>Now include a carry bag (patterns may vary)</li>\r\n</ul>\r\n', 'Home', 'ameda-purely-yours-17070.jpg', 'Freemie', 'Ameda'),
(8, 'Ameda Purely Yours Ultra', '<p>Whether you are returning to work or want a fast and easy pumping experience, the Ameda Purely Yours double electric breast pump, designed for daily use, is the ideal breast pump. The Ameda HygieniKit&reg; Milk Collection System included with the pump allows a mother to double pump to save time. Studies find that double pumping can also help increase milk supply.</p>\r\n\r\n<p>The breast pump is portable and lightweight, making it convenient to transport.</p>\r\n\r\n<p>The Ameda Purely Yours breast pump has 2 Power Sources&mdash;AC adapter, 6 AA batteries and is lightweight and portable&mdash;Motor weighs just 1 lb./0.45 kg.</p>\r\n\r\n<p>The Purely Yours pump may contain different accessories based on the model number.</p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/instructional-videos.php#purely-yours"><img src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />Watch the instruction videos</a></p>\r\n', 'Home', 'purely_yours_ultra.jpg', 'Freemie', 'Ameda'),
(9, 'Freemie Freedom Deluxe Set', '<p><strong>The Freemie Freedom Deluxe Set</strong>&nbsp;is designed for hands-free single or double pumping and includes the electric Freedom pump with smooth, adjustable suction, two 8-oz concealable collection cups (16-oz capacity total), two breast funnel sets (25 mm and 28 mm), and one Freemie Freedom Connection Kit.</p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/instructional-videos.php#freemie"><img alt="instructional video" src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />Watch the instruction videos</a></p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/freemie-breast-pump-faq.php"><img alt="Breast Pump accessories" src="https://www.healthybabyessentials.com/_images/products/freemie-logo-icon.png" style="float:left; margin:0px 3px 0px 0px; width:15px" />FAQs</a></p>\r\n', 'Home', 'freemie-freedom-deluxe-set-lg.jpg', 'None', 'Freemie'),
(10, 'Hygeia Q Double Electric Breast Pump', '<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>All Hygeia electric breast pumps are designed to be used by multiple moms when each mom has her own Personal Accessory Set. This is known as a closed system pump.</li>\r\n	<li>Hygeia is the only breast pump company to be endorsed by La Leche League International and all pumps come with a free annual Supporting Membership to LLLI.</li>\r\n	<li>All Hygeia electric breast pumps feature piston-driven technology and meet or exceed hospital-grade performance industry-accepted standards.</li>\r\n</ul>\r\n', 'Home', 'hygeia-q.jpg', 'None', 'Hygeia'),
(11, 'Lansinoh SignatureProâ„¢ Double Electric Breast Pump', '<p>The Lansinoh&reg; SignaturePro&trade; is the ONLY pump with three pumping styles and eight adjustable suction levels, allowing mom to select the setting that works best for her. A closed-system design reduces the number of parts cleaned and prevents bacteria and mold growth. And its compact size and quiet motor make it convenient for the mom on-the-go.</p>\r\n\r\n<ul>\r\n	<li>Let-down phase for optimal milk expression</li>\r\n	<li>Fully adjustable speed and suction with 3 pumping rhythms to mimic baby&rsquo;s feeding patterns</li>\r\n	<li>Compact with AA battery power option for complete portability</li>\r\n	<li>Digital display including timer to monitor pumping sessions</li>\r\n	<li>Maximum hygiene filters which guarantees no milk back-up</li>\r\n</ul>\r\n', 'Home', 'lansinoh-signature-pro.png', 'None', 'Lansinoh'),
(12, 'Lansinoh SignatureProâ„¢ Double Electric Breast Pump with Bag & Accessories', '<p>The Lansinoh&reg; SignaturePro&trade; is the ONLY pump with three pumping styles and eight adjustable suction levels, allowing mom to select the setting that works best for her. A closed-system design reduces the number of parts cleaned and prevents bacteria and mold growth. And its compact size and quiet motor make it convenient for the mom on-the-go.</p>\r\n\r\n<ul>\r\n	<li>Let-down phase for optimal milk expression</li>\r\n	<li>Fully adjustable speed and suction with 3 pumping rhythms to mimic baby&rsquo;s feeding patterns</li>\r\n	<li>Compact with AA battery power option for complete portability</li>\r\n	<li>Digital display including timer to monitor pumping sessions</li>\r\n	<li>Maximum hygiene filters which guarantees no milk back-up</li>\r\n</ul>\r\n', 'Home', 'lansinoh-signature-pro-bag.jpg', 'None', 'Lansinoh'),
(13, 'Spectra S2', '<p>The Spectra S2 is hospital grade quality with home grade availability. The pump runs off a dual piston motor which provides strong, efficient, and comfortable suction to each breast independently. It has fully adjustable speed and suction as well as a stimulation phase to encourage milk let-down. The S2 also remembers your last settings and will return to them when you start your next pumping session. As a bonus, Spectra has included a nightlight with 2 brightness settings for less disruptive late-night pumping. Spectra is owned, operated, and staffed by IBCLCs and they offer an exceptional a 2 year warranty on the pump and 3 month warranty on all parts.</p>\r\n\r\n<p><strong>Includes</strong></p>\r\n\r\n<ul>\r\n	<li>2 storage bottles</li>\r\n	<li>24 mm flanges (may be exchanged for 28mm or 32mm at no charge if returned unopened)</li>\r\n	<li>Digital Display with last setting memory</li>\r\n	<li>Stimulation Phase</li>\r\n	<li>2 setting nightlight</li>\r\n</ul>\r\n', 'Home', 'spectra_s2.jpg', '', 'Spectra'),
(14, 'Spectra Dew 350', '<p>Named for its powerful suction strength (350 mmgh), the Spectra Dew 350 has a dual piston motor, with adjustable suction strength to maintain comfort. It uses the dual piston design to make sure each breast receives optimal suction and because the piston model allows for a controlled and natural suction pattern. As Spectra says &ldquo;Our pumps don&rsquo;t suck; they suckle&rdquo;.</p>\r\n\r\n<p><strong>Includes</strong></p>\r\n\r\n<ul>\r\n	<li>2 storage bottles</li>\r\n	<li>24 mm flanges (may be exchanged for 28mm or 32mm at no charge if returned unopened)</li>\r\n</ul>\r\n', 'Home', 'spectra_dew_350.jpg', 'None', 'Spectra'),
(15, 'Ardo Calypso Essentials', '<p>The Ardo Calypso works fast, comfortably and efficiently thanks to its unique, piston-driven motor. This construction pays special attention to the extraction cycle to provide performance and comfort more consistent with a hospital grade breast pump, but available here in a compact, home grade pump. It is also the quietest breastpump on the market as independently tested against the other leading brands by M&uuml;ller-BBM.</p>\r\n\r\n<ul>\r\n	<li>pumpsets with flanges (26 mm)</li>\r\n	<li>2 storage bottles</li>\r\n	<li>2 bottle stands</li>\r\n</ul>\r\n\r\n<p><a href="https://www.youtube.com/watch?v=j_co1pQh1ag#t=24" target="_blank"><img alt="instructional video" src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />How to assemble the Ardo PumpSet</a></p>\r\n\r\n<p><a href="http://www.ardo-usa.com/ultrasilent" target="_blank">Ardo noise test results</a></p>\r\n', 'Home', 'ardo-calypso.png', 'None', 'Ardo'),
(16, 'Ardo Calypso To Go', '<p>The Ardo Calypso works fast, comfortably and efficiently thanks to its unique, piston-driven motor. This construction pays special attention to the extraction cycle to provide performance and comfort more consistent with a hospital grade breast pump, but available here in a compact, home grade pump. It is also the quietest breastpump on the market as independently tested against the other leading brands by M&uuml;ller-BBM.</p>\r\n\r\n<ul>\r\n	<li>Messenger-style carry bag</li>\r\n	<li>Cooler bag</li>\r\n	<li>2 pumpsets with flanges (26 mm and 31 mm)</li>\r\n	<li>2 breast flange inserts (28 mm)</li>\r\n	<li>2 Optiflow 26 mm inserts</li>\r\n	<li>brush for cleaning</li>\r\n	<li>6 storage bottles</li>\r\n	<li>Hand pump adaptor</li>\r\n</ul>\r\n\r\n<p><a href="https://www.youtube.com/watch?v=j_co1pQh1ag#t=24" target="_blank"><img alt="instructional video" src="https://www.healthybabyessentials.com/_images/assets/video.png" style="float:left; margin:-5px 3px 0px 0px; width:15px" />How to assemble the Ardo PumpSet</a></p>\r\n\r\n<p><a href="http://www.ardo-usa.com/ultrasilent" target="_blank">Ardo noise test results</a></p>\r\n', 'Home', 'calypso-to-go.png', 'None', 'Ardo'),
(17, 'Freemie Collection Cups Deluxe Set', '<p><strong>The Freemie Collection Cups Deluxe Set</strong>&nbsp;is designed for hands-free double pumping and features two 8-oz concealable collection cups (16-oz capacity total), two breast funnel sets (25 mm and 28 mm), valve assemblies, and one standard Freemie Connection Kit for&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#home-pumps">Medela Pump in Style Advanced</a>&nbsp;and&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#home-pumps">Personal open-system pumps</a>, as well as&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#hospital-pumps">Medela Symphony hospital-grade pump</a>.</p>\r\n\r\n<p>The Connection Kit for&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#Ameda-pumps">Ameda pumps</a>&nbsp;with inline barriers is required to make Freemie Collection Cups compatible with&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#Ameda-pumps">Ameda Purely Yours</a>.</p>\r\n\r\n<p>If you own a Freemie Freedom or Freemie Equality pump, the Freemie Collection Cups Deluxe Set will use the connection kit that came with your pump. The Connection Kit for Freemie Freedom and the Connection Kit for Freemie Equality are also available separately.</p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/breast-pump-products.php#compatible"><img alt="" src="https://www.healthybabyessentials.com/_images/products/freemie-compatible-logo.png" style="float:left; margin:0px 3px 0px 0px; width:15px" />Compatible Pumps</a></p>\r\n\r\n<p><a href="https://www.healthybabyessentials.com/freemie-breast-pump-faq.php"><img alt="Breast Pump accessories" src="https://www.healthybabyessentials.com/_images/products/freemie-logo-icon.png" style="float:left; margin:0px 3px 0px 0px; width:15px" />FAQs</a></p>\r\n', 'Access', 'freemie-collection-1.jpg', 'Both', 'Freemie'),
(18, 'Ameda Connection Kit', '<p><strong>Compatible with&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#Ameda-pumps">Ameda Purely Yours Double Breast Pump</a></strong></p>\r\n\r\n<p>The Freemie Connection Kit for&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#Ameda-pumps">Ameda</a>&nbsp;includes one single pump and one double-pump tubing set for use with Freemie Collection Cups in conjunction with the&nbsp;<a href="https://www.healthybabyessentials.com/breast-pump-products.php#Ameda-pumps">Ameda Purely Yours Double Breast Pump</a>.</p>\r\n', 'Access', 'connection-kit-ameda-lg.jpg', 'FSA', 'Ameda'),
(19, 'The NuRoo Pocket - Black', '<p>The Nuroo Pocket is designed with one principle in mind: Closer to Mom; Better for Baby. The unique pocket design promotes skin-to-skin contact which is proven to have important benefits:</p>\r\n\r\n<ul>\r\n	<li>Promotes breastfeeding behavior</li>\r\n	<li>Improves milk production</li>\r\n	<li>Speeds post-partum recovery</li>\r\n	<li>Calms and soothes baby</li>\r\n	<li>Enhances brain and immune system development</li>\r\n	<li>You can find the Nuroo pocket in use in some hospital NICU units because a of these health benefits. Order alongside your breast pump or give as a gift.</li>\r\n</ul>\r\n', 'Access', 'nuroo_pocket_black_3_4_sleeve_lores_2.jpg', '', 'Nuroo'),
(20, 'The NuRoo Pocket', '<p>The Nuroo Pocket is designed with one principle in mind: Closer to Mom; Better for Baby. The unique pocket design promotes skin-to-skin contact which is proven to have important benefits:</p>\r\n\r\n<ul>\r\n	<li>Promotes breastfeeding behavior</li>\r\n	<li>Improves milk production</li>\r\n	<li>Speeds post-partum recovery</li>\r\n	<li>Calms and soothes baby</li>\r\n	<li>Enhances brain and immune system development</li>\r\n	<li>You can find the Nuroo pocket in use in some hospital NICU units because a of these health benefits. Order alongside your breast pump or give as a gift.</li>\r\n</ul>\r\n', 'Access', 'nuroo_pocket_teal_3_4_sleeve_lores_2.jpg', 'None', 'Nuroo'),
(21, 'The Nuroo Nursing Scarf', '<p>The Nuroo Nursing Scarf is lightweight, breathable, and, with its super soft fabric, designed not to be distracting to your baby. You can wear it up for daily style and then drape it down for full coverage and discreet nursing . Wrinkle-free and machine-washable, this is an easy accessory that you&rsquo;ll love even after your breastfeeding days are done.</p>\r\n', 'Access', 'nuroograystripe.jpg', 'None', 'Nuroo');

-- --------------------------------------------------------

--
-- Table structure for table `Testimonials`
--

CREATE TABLE IF NOT EXISTS `Testimonials` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Date` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Testimonials`
--

INSERT INTO `Testimonials` (`Id`, `Name`, `Description`, `Date`) VALUES
(1, '-M.C.', 'I came here in an ambulance and I''m going home tomorrow, walking out the door. I have received excellent Care!', '09-20-2010'),
(2, '-A.M.', 'The care I have received by the C.N.A''s has been superb. They make you feel that you are not a burden.', '09-20-2010'),
(3, '-M.S.', 'The people here are very kind, very nice and almost everyone seems to have a sense of humor.', '09-20-2010'),
(4, '-J.G.', 'The care here is above and beyond. And I have to say that Freds (C.N.A) is one in a million! Exceptional!', '09-20-2010'),
(5, '-E.M.', 'I couldn''t ask for any better nursing care. I have to say that my C.N.A Bernadette is extraordinary in her care for me.', '09-20-2010');

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
(1, 'healthyBaby');

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
