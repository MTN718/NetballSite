-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 05:36 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netball`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE IF NOT EXISTS `tbl_about_us` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`about_id`, `description`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry''s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley.<br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_base_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_base_admin` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `pw` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_base_admin`
--

INSERT INTO `tbl_base_admin` (`no`, `user`, `pw`) VALUES
(1, 'admin', '$2y$10$t9Tmijmw4ClRxEZpJB0uw.lHtV/H4WJqBBDO5rkmEqcTbpmWxYrxG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_base_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_base_setting` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `fee` float DEFAULT NULL,
  `paypal` text,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club`
--

CREATE TABLE IF NOT EXISTS `tbl_club` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment` int(10) unsigned NOT NULL COMMENT 'id of tbl_club_payment',
  `password` text NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `association_afiliated` varchar(255) NOT NULL,
  `stablishes_date` date NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `photo` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `reg_count` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_club`
--

INSERT INTO `tbl_club` (`no`, `email`, `name`, `createdate`, `payment`, `password`, `club_name`, `association_afiliated`, `stablishes_date`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `user_type`, `photo`, `status`, `reg_count`) VALUES
(2, 'sudeepgandhi540@gmail.com', 'club', '2017-10-10 15:31:29', 2, '$2y$10$2DYJ4c8vYp6Yia8d9A3TqOzuux5o48bViJ2DGq/URUDFkQnIItIS.', 'Asdf', 'sdfg', '0000-00-00', 'Mig indore', 'indore', 'mpdfgdfg', '457933', '', '8794', '8795', 'club', 'slider-bg-01.jpg', 1, 20),
(3, 'sub@gmail.com', 'subclub', '2017-10-10 15:34:14', 3, '$2y$10$2DYJ4c8vYp6Yia8d9A3TqOzuux5o48bViJ2DGq/URUDFkQnIItIS.', 'Jhabhu', 'Dhar', '2017-02-02', 'lig', 'indore', 'mp', '452001', 'India', '1258', '236565325', 'club', 'slider-bg-01.jpg', 1, 10),
(4, 'qq@gmail.com', 'qq', '2017-10-04 06:36:35', 4, '$2y$10$zEUWtUehGywN030dRVzS9u.Kta3lOyuMSAYIiKJ7Fu4jzhPCPSMxe', 'qq', 'qq', '0000-00-00', '34232', 'qq', 'qq', 'qq', 'American Samoa', '2323', '232323', 'club', 'slider-bg-0221.jpg', 1, 0),
(5, 'democlub@gmail.com', 'democlub', '2017-10-04 11:09:59', 5, '$2y$10$XE32UCg.01kMzO/m5D.3du2bXTDg/QuGb6FLPzx/..oV.UM3XeMWq', 'Abcd', 'Other', '0000-00-00', 'Mig indore', 'Indore', 'mp', '452001', 'India', '326545', '23546', 'club', 'slider-bg-0223.jpg', 1, 0),
(6, 'admin@gmail.com', 'adminclub', '2017-10-06 05:31:36', 6, '$2y$10$jBmcXvWY75vdy9Q24Ozbl.E5wg6JxGg73j8EtZTh1d/R.U93Nm9iq', 'ABC', 'Abc', '0000-00-00', 'ligasda', 'indore', 'mp', '452001', 'Indonesia', '235689', '2356', 'club', 'thumbnail_win_distr9.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_club_payment` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(10) unsigned NOT NULL COMMENT '0:paypal,1:bank',
  `name` varchar(45) NOT NULL,
  `bsb` varchar(45) NOT NULL,
  `number` varchar(45) NOT NULL,
  `branch` varchar(45) NOT NULL,
  `paypal` varchar(45) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_club_payment`
--

INSERT INTO `tbl_club_payment` (`no`, `type`, `name`, `bsb`, `number`, `branch`, `paypal`) VALUES
(1, 0, '', '', '', '', 'aaa@gmail.com'),
(2, 0, '', '', '', '', 'ssabc@gmail.com'),
(3, 0, '', '', '', '', 'sada@gmail.com'),
(4, 0, '', '', '', '', 'ab12c11111@gmail.com'),
(5, 0, '', '', '', '', 'democlub@gmail.com'),
(6, 0, '', '', '', '', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_us` (
  `contact_us_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  PRIMARY KEY (`contact_us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`contact_us_id`, `email`, `phone`, `address`) VALUES
(1, 'info@gmail.com', '1234567111', '12345 address line1'', country.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE IF NOT EXISTS `tbl_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People''s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People''s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `venue` text,
  `date` text,
  `starttime` text,
  `endtime` text,
  `special` text,
  `fee` float DEFAULT NULL,
  `photo` text,
  `club_no` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `package_id` int(11) NOT NULL,
  `reg_player_count` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`no`, `title`, `venue`, `date`, `starttime`, `endtime`, `special`, `fee`, `photo`, `club_no`, `status`, `package_id`, `reg_player_count`) VALUES
(10, 'Club_football', 'demo demo', '10/04/2017', '2:02 am', '6:02 pm', 'no', 123, '', 2, 1, 2, 0),
(11, 'Cricket', 'Apna graden', '9/03/2017', '7:30 am', '2:00 pm', 'Nothing', 100, '', 3, 1, 2, 0),
(12, 'abcxds', 'ghgv', '9/03/2017', '7:25 pm', '7:25 pm', 'Nothing', 5487, 'slider-bg-0222.jpg', 2, 1, 3, 0),
(13, 'demo', 'demo', '9/03/2017', '12:38 pm', '12:38 pm', 'no', 12, '', 3, 1, 1, 0),
(14, 'demo212121212121', 'dfhgfdhdfhdfhdfhhdfhh', '9/03/2017', '8:24 pm', '8:24 pm', 'no', 11, '', 3, 1, 1, 20),
(15, 'Abcef', 'Apna graden', '10/06/2017', '11:15 am', '5:15 pm', 'no', 500, 'slider-bg-0129.jpg', 6, 1, 1, 0),
(16, 'vimeo', 'Indore', '10/21/2017', '10:21 am', '4:15 pm', 'Nothing', 100, 'slider-bg-01.jpg', 6, 1, 1, 0),
(17, 'Testing', 'Bhopal', '10/20/2017', '7:00 am', '2:00 pm', 'Nothing', 1, 'thumbnail_win115.jpg', 3, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_player_register`
--

CREATE TABLE IF NOT EXISTS `tbl_event_player_register` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `reg_status` int(11) NOT NULL DEFAULT '0',
  `position` varchar(200) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=314 ;

--
-- Dumping data for table `tbl_event_player_register`
--

INSERT INTO `tbl_event_player_register` (`no`, `event_id`, `player_id`, `reg_status`, `position`) VALUES
(4, 10, 3, 0, ''),
(5, 10, 3, 0, ''),
(6, 10, 3, 0, ''),
(7, 10, 3, 0, ''),
(312, 13, 3, 1, '1'),
(313, 16, 3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE IF NOT EXISTS `tbl_faqs` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`faq_id`, `question`, `answer`, `status`) VALUES
(1, 'Frequetly ask question?', '<p>\r\nLorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry''s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley.</p><p>\r\nLorem Ipsum \r\nis simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry''s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley.			\r\n\r\n\r\n\r\n<br></p>', 0),
(2, 'Frequetly ask question?', '<p>\r\nLorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry''s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley.<br>Lorem Ipsum \r\nis simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry''s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley.			\r\n\r\n\r\n\r\n<br></p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_how_its_work`
--

CREATE TABLE IF NOT EXISTS `tbl_how_its_work` (
  `how_its_work_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `description1` longtext NOT NULL,
  PRIMARY KEY (`how_its_work_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_how_its_work`
--

INSERT INTO `tbl_how_its_work` (`how_its_work_id`, `description`, `image1`, `image2`, `image3`, `description1`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley.<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley.', 'slider-bg-01221.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `to_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `club_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`id`, `to_id`, `subject`, `message`, `date_time`, `club_id`, `status`) VALUES
(1, 'admin', 'Player Registered', 'A New Player Registered', '2017-10-04 11:19:52', 0, 1),
(2, 'admin', 'Club Registered', 'A New Club Registered', '2017-10-06 04:32:55', 0, 1),
(3, '6', 'New Event', 'A New Event Registered', '2017-10-06 04:52:29', 0, 1),
(4, '6', 'Club update profile', 'Club update Profile', '2017-10-06 05:10:58', 0, 1),
(5, 'admin', 'Player update profile', 'Player demoplayer update Profile', '2017-10-06 08:02:42', 0, 1),
(6, 'admin', 'Club update profile', 'Club Jhabhu update Profile', '2017-10-06 08:29:21', 0, 1),
(7, 'admin', 'Add a New Event', 'Club Jhabhu has add a new event', '2017-10-06 08:42:24', 0, 1),
(8, 'player', 'Add a New Event', 'Club Jhabhu has add a new event', '2017-10-06 08:42:24', 0, 1),
(9, 'admin', 'changed password ', 'Club Asdf changed password', '2017-10-10 15:30:59', 0, 1),
(10, 'admin', 'changed password ', 'Club Asdf changed password', '2017-10-10 15:31:29', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE IF NOT EXISTS `tbl_package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) NOT NULL,
  `number_of_player` varchar(200) NOT NULL,
  `per_event_fee` varchar(200) NOT NULL,
  `player_regisatration_fee` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_name`, `number_of_player`, `per_event_fee`, `player_regisatration_fee`, `status`) VALUES
(1, '1-10', 'Upto 25 Player', '$10', '$20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_player`
--

CREATE TABLE IF NOT EXISTS `tbl_player` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `postcode` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `position1` varchar(45) NOT NULL,
  `position2` varchar(45) NOT NULL,
  `position3` varchar(45) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `photo` text,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_player`
--

INSERT INTO `tbl_player` (`no`, `email`, `name`, `password`, `birthday`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `position1`, `position2`, `position3`, `user_type`, `photo`, `status`) VALUES
(1, 'cashier@test.com', 'player', '$2y$10$gXgPB3QAOVOa3BP6b0fzQOHu/SLRJtfubZDThf', '12/12/2017', 'ligg ', 'indore', 'mp', '452001', '', '1234', '235', 'GK', 'GK', 'GK', 'player', NULL, 1),
(2, 'adminsdsd@gmail.com', 'adminplayer', '$2y$10$WGLjWyrww57iIhpqRbDXk.Y6mHCH/vZZADGdrsxue1grS9xY1iyey', '2017/02/02', 'mig', 'indore', 'mp', '457933', 'Austraila', '2356123596', '235615465325', 'GK', 'GK', 'GK', 'player', 'slider-bg-011.jpg', 1),
(3, 'demoplayer@gmail.com', 'demoplayer', '$2y$10$LKtXawiJgcarL.tgXTO1ueJ3j8lAnAzFPWxllr5nOkFpxyHnQFR1.', '', 'Dhar', 'indore', 'mp', '45877', 'Anguilla', '235687', '32587', 'first', 'first', 'first', 'player', 'slider-bg-0222.jpg', 1),
(4, 'subplayer@gmail.com', 'subplayer', '$2y$10$cSW881/R/BpLK9BaO5acjeTSy4LMEFYkJw1ilzeYG0mFUyHFZEqJ6', '10/01/2017', 'Mig indore', 'indore', 'mp', '452001', 'India', '235687', '598787996', 'first', 'first', 'first', 'player', 'slider-bg-014.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_title` varchar(255) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`position_id`, `position_title`) VALUES
(1, 'first');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_policy`
--

CREATE TABLE IF NOT EXISTS `tbl_pricing_policy` (
  `pricing_policy_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  PRIMARY KEY (`pricing_policy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pricing_policy`
--

INSERT INTO `tbl_pricing_policy` (`pricing_policy_id`, `description`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry''s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley.<br>Lorem Ipsum \r\nis simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry''s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privacy_policy`
--

CREATE TABLE IF NOT EXISTS `tbl_privacy_policy` (
  `privacy_policy_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  PRIMARY KEY (`privacy_policy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_privacy_policy`
--

INSERT INTO `tbl_privacy_policy` (`privacy_policy_id`, `description`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry''s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley.<br>Lorem Ipsum \r\nis simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry''s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley.			\r\n\r\n<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_link`
--

CREATE TABLE IF NOT EXISTS `tbl_social_link` (
  `social_link_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`social_link_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_social_link`
--

INSERT INTO `tbl_social_link` (`social_link_id`, `title`, `icon`, `link`, `status`) VALUES
(1, 'Facebook', 'fa fa-facebook', 'https://www.facebook.com/', 1),
(2, 'Twitter', 'fa fa-twitter', 'https://twitter.com/', 1),
(3, 'Google Plus', 'fa fa-google-plus', 'https://plus.google.com/', 1),
(4, 'vimeo', 'fa fa-vimeo', 'https://vimeo.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_condition`
--

CREATE TABLE IF NOT EXISTS `tbl_term_condition` (
  `term_condition_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  PRIMARY KEY (`term_condition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_term_condition`
--

INSERT INTO `tbl_term_condition` (`term_condition_id`, `description`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry''s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley.<br>Lorem Ipsum \r\nis simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry''s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `transaction_id` varchar(200) NOT NULL,
  `card_type_id` varchar(200) DEFAULT NULL,
  `card_no` int(20) DEFAULT NULL,
  `check_dd_no` varchar(200) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `trasaction_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `card_holder_name` varchar(50) DEFAULT NULL,
  `event_id` int(20) DEFAULT NULL,
  `player_id` int(10) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `address_line_1` varchar(60) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `primary_method` varchar(30) DEFAULT NULL,
  `bank_name` varchar(40) DEFAULT NULL,
  `bank_account_number` varchar(50) DEFAULT NULL,
  `account_holder_name` varchar(50) DEFAULT NULL,
  `ifsc` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`transaction_id`, `card_type_id`, `card_no`, `check_dd_no`, `expiry_date`, `trasaction_date`, `card_holder_name`, `event_id`, `player_id`, `amount`, `address_line_1`, `city`, `state`, `zip`, `phone`, `email`, `primary_method`, `bank_name`, `bank_account_number`, `account_holder_name`, `ifsc`) VALUES
('0011', NULL, NULL, NULL, NULL, '2017-10-01 13:24:37', 'here ac name', NULL, NULL, 'xxxxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'here bank name', 'xxxx-xxxx-xxx', 'here ac name', NULL),
('23AA', NULL, NULL, NULL, NULL, '2017-10-01 13:25:16', 'here ac name', NULL, NULL, 'xxxxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'here bank name', 'xxxx-xxxx-xxx', 'here ac name', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
