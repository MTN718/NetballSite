-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 06:13 AM
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
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_club`
--

INSERT INTO `tbl_club` (`no`, `email`, `name`, `createdate`, `payment`, `password`, `club_name`, `association_afiliated`, `stablishes_date`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `user_type`, `photo`) VALUES
(2, 'sudeepgandhi540@gmail.com', 'club', '2017-09-27 19:51:19', 2, '$2y$10$TUedUa5VGjP1KxiWlfevgOatY0rLd6/mbY4nlQTBb4ksHew6CKkpO', 'Asdf', 'sdfg', '0000-00-00', 'Mig indore', 'indore', 'mpdfgdfg', '457933', '', '8794', '8795', 'club', 'slider-bg-01.jpg'),
(3, 'sub@gmail.com', 'subclub', '2017-09-28 15:53:33', 3, '$2y$10$HOJnfeUuibyDnoPn2mdmzO/SijxRb5v7UDI8/pGEiWiYx3Jnoo7Ga', 'Jhabhu', 'Dhar', '2017-02-02', 'lig', 'indore', 'mpdfgdfg', '45200100001', 'India', '1258', '236565325', 'club', 'slider-bg-0221.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_club_payment`
--

INSERT INTO `tbl_club_payment` (`no`, `type`, `name`, `bsb`, `number`, `branch`, `paypal`) VALUES
(1, 0, '', '', '', '', 'aaa@gmail.com'),
(2, 0, '', '', '', '', 'ssabc@gmail.com'),
(3, 0, '', '', '', '', 'sada@gmail.com');

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
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`no`, `title`, `venue`, `date`, `starttime`, `endtime`, `special`, `fee`, `photo`, `club_no`, `status`, `package_id`) VALUES
(10, 'Club_football', 'demo demo', '09/29/2017', '2:02 am', '2:02 am', 'no', 123, '', 2, 0, 2);

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
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_player`
--

INSERT INTO `tbl_player` (`no`, `email`, `name`, `password`, `birthday`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `position1`, `position2`, `position3`, `user_type`, `photo`) VALUES
(1, 'cashier@test.com', 'player', '$2y$10$gXgPB3QAOVOa3BP6b0fzQOHu/SLRJtfubZDThf', '12/12/2017', 'ligg ', 'indore', 'mp', '452001', '', '1234', '235', 'GK', 'GK', 'GK', 'player', NULL),
(2, 'adminsdsd@gmail.com', 'adminplayer', '$2y$10$WGLjWyrww57iIhpqRbDXk.Y6mHCH/vZZADGdrsxue1grS9xY1iyey', '2017/02/02', 'mig', 'indore', 'mp', '457933', 'Austraila', '2356123596', '235615465325', 'GK', 'GK', 'GK', 'player', 'slider-bg-011.jpg'),
(3, 'demoplayer@gmail.com', 'demoplayer', '$2y$10$LKtXawiJgcarL.tgXTO1ueJ3j8lAnAzFPWxllr5nOkFpxyHnQFR1.', '', 'indore', 'indore', 'mp', '45877', 'Anguilla', '235687', '32587', '1', '2', '3', 'player', ''),
(4, 'saklechar@gmail.com', 'player1', '$2y$10$weULiuodOAf0WCUY/VgQeOjc9Exprsik4EVDHJv27tlMAqYXdGkMu', '09/29/1990', 'dfgdfgdf', 'dfdfd', 'dffdfdf', 'dfd', 'Christmas Island', '34534', '345345345', '2', '2', '3', 'player', 'slider-bg-012.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_title` varchar(255) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`position_id`, `position_title`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4');

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
