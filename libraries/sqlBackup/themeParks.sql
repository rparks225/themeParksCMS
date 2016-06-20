-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2016 at 03:39 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `Cover` varchar(255) DEFAULT NULL,
  `Title` varchar(255) NOT NULL,
  `Order` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Gallery`, `Cover`, `Title`, `Order`) VALUES
(1, 'Posts', 'photo-1.jpg', 'Blog Post Images', 1),
(2, 'Stuff', 'false', 'The Stuff You''re About to see.', 0),
(3, 'Abbott-House', 'false', 'Abbott House Skilled Nursing Photo Gallery', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `Image`, `Title`, `Album`, `Order`) VALUES
(31, 'photo-5.jpg', 'photo-5.jpg', 'Posts', NULL),
(30, 'photo-4.jpg', 'photo-4.jpg', 'Posts', NULL),
(28, 'photo-2.jpg', 'photo-2.jpg', 'Posts', NULL),
(27, 'photo-1.jpg', 'photo-1.jpg', 'Posts', NULL),
(26, 'capn.png', 'capn.png', 'Posts', NULL),
(35, 'snow.png', 'snow.png', 'Stuff', 0),
(33, 'bg.png', 'bg.png', 'Stuff', 2),
(34, 'mountain.png', 'mountain.png', 'Stuff', 1),
(32, 'photo-6.jpg', 'photo-6.jpg', 'Posts', NULL),
(36, 'thumb.thumb.DSC_6647.jpg', 'thumb.thumb.DSC_6647.jpg', 'Posts', NULL),
(37, 'abbott4.jpg', 'abbott4.jpg', 'Abbott-House', 0),
(38, 'abbott7.jpg', 'abbott7.jpg', 'Abbott-House', 4),
(39, 'abbott5.jpg', 'abbott5.jpg', 'Abbott-House', 8),
(40, 'abbott6.jpg', 'abbott6.jpg', 'Abbott-House', 7),
(41, 'abbott8.jpg', 'abbott8.jpg', 'Abbott-House', 6),
(43, 'abbott9.jpg', 'abbott9.jpg', 'Abbott-House', 3),
(44, 'abbott3.jpg', 'abbott3.jpg', 'Abbott-House', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Id`, `Title`, `Editable`, `Html`, `Description`, `KeyWords`, `Heading`) VALUES
(6, 'contact', 'false', '', 'Here you can contact BaneCare for any questions or inquiries for future stays!                        ', 'Contact us, Contact, Us, Contact BaneCare', 'Contact Us'),
(10, 'pages', 'false', '<p>Not editable</p>\r\n', 'false', '', 'Add/Edit Page'),
(11, 'Dashboard', 'false', '<p>Not editable</p>', 'false', 'dashboard, edit ease, quick blog post', 'Dashboard'),
(13, 'post', 'false', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not editable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Posts for all things posts!', 'Posts, Blog posts', 'Blog Post Edit'),
(14, 'home', 'false', '', 'Home page', 'Home, page, home page', 'Welcome to BaneCare'),
(23, '404', 'false', '<p>This is not the page you are looking for... move along</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://localhost/baneCare/Home">&larr;Home</a></p>\r\n\r\n<p>&nbsp;</p>', 'false', '', '404 error page'),
(26, 'admin', 'false', '', 'false', '', 'Log into the themeParks dasboard'),
(32, 'image', 'false', '', 'Here you can find the images from all of our events', 'Gallery , images, events,', 'Image Library'),
(33, 'gallery', 'Pleas', '', '', '', 'The Gallery page'),
(39, 'employment', 'false', '', 'BaneCare Job Opportunities.', 'Job Opportunities, Jobs, Careers, Job Careeres', 'Employment Opportunities'),
(47, 'About', 'true', '', 'A little about how we came to be and how BaneCare was started.', 'About BaneCare, BaneCare, BaneCare', 'About BaneCare - Skilled Nursing, Rehabilitation, Assisted Living - MA'),
(48, 'Leadership', 'true', '', 'Principals and Officers of BaneCare and Welch Healthcare have years of experience in the management of Skilled Nursing Centers, Assisted Living Communities and Housing for the Elderly.', 'BaneCare Meet the Team, Leadership, employees.', ' BaneCare Healthcare Professionals'),
(49, 'Mission', 'Pleas', '', '', '', 'What Sets BaneCare Apart'),
(50, 'Services', 'false', '', '', '', 'Services Amenities Skilled Nursing Home, Rehabilitation, Assisted Living'),
(51, 'SkilledNursing', 'false', '', '', '', 'BaneCare Skilled Nursing Services, Rehabilitation, Long-Term Care'),
(52, 'Rehab', 'false', '', '', 'BaneCare,', 'BaneCare Short-Term Rehabilitation, Orthopedic, Pulmonary, Cardiac, Stroke'),
(53, 'BaneCareStory', 'true', '', '', '', 'The BaneCare Story'),
(54, 'assistedLiving', 'false', '', '', '', 'BaneCare Assisted Living Massachusetts'),
(55, 'RespiteCare', 'false', '', '', '', 'BaneCare Short Stays and Respite Care'),
(56, 'Hospice', 'false', '', '', '', 'BaneCare Hospice Care Massachusetts'),
(57, 'SpecialtyCare', 'false', '', '', '', 'BaneCare Specialty Care - Diabetes, Memory Care'),
(58, 'DietNutrition', 'false', '', '', '', 'BaneCare Nutritional Services'),
(59, 'FacilityAmenities', 'false', '', '', '', 'BaneCare Facility Amenities'),
(61, 'gettingStarted', 'true', '', '', '', 'Information About Choosing a Nursing Home'),
(62, 'testimonials', 'true', '', '', '', 'BaneCare Skilled Nursing Testimonials'),
(63, 'Abbott-House', 'false', '', '', '', 'Abbott House Skilled Nursing Home & Rehabilitation'),
(64, 'baneNorth', 'true', '', '', '', 'Bane Care North'),
(66, 'settings', 'false', '', 'false', '', 'Admin Settings');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `Id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  `Updated` varchar(10) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Caption` varchar(535) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Id`, `Title`, `Image`, `Description`, `Updated`, `Date`, `Caption`) VALUES
(9, 'Open House Highlights Extensive Renovations at John Scott House', 'thumb.thumb.DSC_6647.jpg', '<p>John Scott House Rehabilitation &amp; Nursing Center in Braintree recently held an open house showcasing the&nbsp;extensive renovation to Welch Healthcare &amp; Retirement Group&rsquo;s first skilled nursing center. Over 100 healthcare&nbsp;professionals, legislative leaders and Welch Group staff marked the occasion by touring the renovated nursing&nbsp;center and enjoying a tasty menu including a traditional New England clam chowder, slider-style mini burgers and&nbsp;an assortment of delicious flatbreads.&nbsp;</p>\r\n\r\n<p>The extensive renovation,&nbsp;emphasizing resident comfort, safety and convenience,&nbsp;includes&nbsp;an expanded parking&nbsp;area with a new covered drive-up main entrance for the convenience of residents, family and friends; a refurbishment of all resident rooms and common areas. For patients and residents who require rehabilitation,&nbsp;John Scott House has relocated the rehabilitation gym to the newly designed post-acute short-term rehabilitation&nbsp;unit, and added a new dedicated living room and dining room. &nbsp;The renovation also features a remodeled front&nbsp;entrance and creation of new outdoor resident patio areas.&nbsp;</p>\r\n\r\n<p>&ldquo;For generations John Scott House has been an integral part of the Braintree community,&rdquo; says Kristen Reilly&nbsp;McHugh, administrator of John Scott House Rehabilitation &amp; Nursing Center. &ldquo;Our newly refurbished rehabilitation&nbsp;gym and living spaces demonstrate a continued commitment to enhancing the quality of life for our residents and&nbsp;short-term patients,&rdquo; added McHugh.&nbsp;</p>\r\n\r\n<p>Today, John Scott House Rehabilitation &amp; Nursing Center offers residents and their families the best of both worlds&nbsp;&ndash; a center rich in tradition and quality short-term rehabilitative and skilled nursing care. John Scott House offers&nbsp;the Braintree community high-level rehabilitative, medical, and nursing care on a short- or long-term basis. The&nbsp;Welch Group nursing center consistently receives high marks from state agencies that are designed to oversee the&nbsp;quality of nursing homes throughout Massachusetts.&nbsp;</p>\r\n\r\n<p>In addition, John Scott was recently awarded The Joint Commission&rsquo;s Gold Seal of Approval&trade; for Nursing Care&nbsp;Center Accreditation as well as the organization&rsquo;s new Post-Acute Care Certification, which demonstrates the&nbsp;facility&rsquo;s commitment to the highest level of care for its patients and residents&mdash;going beyond state and federal&nbsp;requirements.</p>\r\n\r\n<p>In 1949 the founders, the late Rita M. and Thomas (Frank) Welch, with four young children, made the decision to&nbsp;open their two-story Victorian home to care for frail older adults. This event marked the founding of the John&nbsp;Scott House.</p>\r\n\r\n<p>Welch Healthcare &amp; Retirement Group is a trusted family-owned senior services company. For over 65 years, the&nbsp;Welch Group has been a leading provider of rehabilitation, skilled nursing, assisted living memory care, assisted&nbsp;living and independent living options, adult day health and home care services in Massachusetts.</p>\r\n', '05/29/2016', '05/12/2016', 'John Scott House Administrator Kristen Reilly McHugh greets Braintree Mayor Joseph Sullivan, during an open house event held at the skilled nursing center.'),
(10, 'stuff', 'photo-5.jpg', '<p>Stuff goes here!!!</p>\r\n', ' 06/18/201', '12 June, 2', 'Add caption');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Grade` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Badges` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
(7, 'Ameda Purely Yours Personal Double Electric Breast Pump (17070 PMW)', '<ul>\r\n	<li>8 adjustable suction settings and 4 adjustable cycle speeds...allows you to simulate your babys nursing pattern</li>\r\n	<li>Unique diaphragm helps ensure milk purity. Patented system protects collected milk from potential contaminants &amp; prevents milk back-up into tubing &amp; pump</li>\r\n	<li>Dual pumping option...helps save precious time.</li>\r\n	<li>Now include a carry bag (patterns may vary)</li>\r\n</ul>\r\n', 'Home', '', 'Freemie', 'Ameda'),
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
-- Table structure for table `Settings`
--

CREATE TABLE IF NOT EXISTS `Settings` (
  `Id` int(11) NOT NULL,
  `settings_siteName` varchar(255) NOT NULL,
  `settings_siteUrl` varchar(255) NOT NULL,
  `settings_captchaKey` text NOT NULL,
  `settings_cmsPath` varchar(255) NOT NULL,
  `settings_eePath` varchar(255) NOT NULL,
  `settings_emailHost` varchar(255) NOT NULL,
  `settings_emailAuth` varchar(255) NOT NULL,
  `settings_emailUser` varchar(255) NOT NULL,
  `settings_emailPass` varchar(255) NOT NULL,
  `settings_emailEncrypt` varchar(255) NOT NULL,
  `settings_emailPort` varchar(255) NOT NULL,
  `settings_emailFrom` varchar(255) NOT NULL,
  `settings_emailName` varchar(255) NOT NULL,
  `settings_emailAddress` varchar(255) NOT NULL,
  `settings_emailReply` varchar(255) NOT NULL,
  `settings_emailReplyTitle` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `settings_dbName` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`Id`, `settings_siteName`, `settings_siteUrl`, `settings_captchaKey`, `settings_cmsPath`, `settings_eePath`, `settings_emailHost`, `settings_emailAuth`, `settings_emailUser`, `settings_emailPass`, `settings_emailEncrypt`, `settings_emailPort`, `settings_emailFrom`, `settings_emailName`, `settings_emailAddress`, `settings_emailReply`, `settings_emailReplyTitle`, `theme`, `settings_dbName`) VALUES
(1, 'ThemeParks CMS', 'http://localhost/themeParksCMS/', '6Lc0nRMTAAAAALActovT2Nmk5XmKIqdnxPbUgoNI', '/themeParksCMS/', '/themeParksCMS/apps/_ee', 'smtp.gmail.com', 'true', 'rparks225@gmail.com', 'hpwlpyifujaflqal', 'tls', '587', 'no-reply@baneCare.com', 'BaneCare Website', 'sandrockc225@aol.com', 'info@baneCare.com', 'New Contact Form Message.', 'bane', 'themeParks');

-- --------------------------------------------------------

--
-- Table structure for table `Testimonials`
--

CREATE TABLE IF NOT EXISTS `Testimonials` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
  `Id` int(11) NOT NULL,
  `Theme` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Theme`
--

INSERT INTO `Theme` (`Id`, `Theme`) VALUES
(1, 'bane');

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
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Testimonials`
--
ALTER TABLE `Testimonials`
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `Settings`
--
ALTER TABLE `Settings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Testimonials`
--
ALTER TABLE `Testimonials`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
