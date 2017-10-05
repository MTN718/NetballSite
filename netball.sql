-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2017 at 05:21 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netball`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `about_id` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`about_id`, `description`) VALUES
(1, '$description \"sudeep\"<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_base_admin`
--

CREATE TABLE `tbl_base_admin` (
  `no` int(10) UNSIGNED NOT NULL,
  `user` varchar(45) NOT NULL,
  `pw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_base_admin`
--

INSERT INTO `tbl_base_admin` (`no`, `user`, `pw`) VALUES
(1, 'admin', '$2y$10$bcIT5kiOD2tjeM79KvCueex671Iwm9uLdaLbymHuXw38NbOcMF/Sa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_base_setting`
--

CREATE TABLE `tbl_base_setting` (
  `no` int(11) NOT NULL,
  `fee` float DEFAULT NULL,
  `paypal` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club`
--

CREATE TABLE `tbl_club` (
  `no` int(10) UNSIGNED NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment` int(10) UNSIGNED NOT NULL COMMENT 'id of tbl_club_payment',
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
  `reg_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_club`
--

INSERT INTO `tbl_club` (`no`, `email`, `name`, `createdate`, `payment`, `password`, `club_name`, `association_afiliated`, `stablishes_date`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `user_type`, `photo`, `status`, `reg_count`) VALUES
(2, 'sudeepgandhi540@gmail.com', 'club', '2017-10-05 06:56:49', 2, '$2y$10$TUedUa5VGjP1KxiWlfevgOatY0rLd6/mbY4nlQTBb4ksHew6CKkpO', 'Asdf', 'sdfg', '0000-00-00', 'Mig indore', 'indore', 'mpdfgdfg', '457933', '', '8794', '8795', 'club', 'slider-bg-01.jpg', 0, 20),
(3, 'sub@gmail.com', 'subclub', '2017-10-03 14:10:28', 3, '$2y$10$HOJnfeUuibyDnoPn2mdmzO/SijxRb5v7UDI8/pGEiWiYx3Jnoo7Ga', 'Jhabhu', 'Dhar', '2017-02-02', 'lig', 'indore', 'mpdfgdfg', '45200100001', 'India', '1258', '236565325', 'club', 'slider-bg-01.jpg', 1, 10),
(4, 'qq@gmail.com', 'qq', '2017-10-03 14:16:26', 4, '$2y$10$zEUWtUehGywN030dRVzS9u.Kta3lOyuMSAYIiKJ7Fu4jzhPCPSMxe', 'qq', 'qq', '0000-00-00', '34232', 'qq', 'qq', 'qq', 'American Samoa', '2323', '232323', 'club', 'slider-bg-0221.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club_payment`
--

CREATE TABLE `tbl_club_payment` (
  `no` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL COMMENT '0:paypal,1:bank',
  `name` varchar(45) NOT NULL,
  `bsb` varchar(45) NOT NULL,
  `number` varchar(45) NOT NULL,
  `branch` varchar(45) NOT NULL,
  `paypal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_club_payment`
--

INSERT INTO `tbl_club_payment` (`no`, `type`, `name`, `bsb`, `number`, `branch`, `paypal`) VALUES
(1, 0, '', '', '', '', 'aaa@gmail.com'),
(2, 0, '', '', '', '', 'ssabc@gmail.com'),
(3, 0, '', '', '', '', 'sada@gmail.com'),
(4, 0, '', '', '', '', 'ab12c11111@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`contact_us_id`, `email`, `phone`, `address`) VALUES
(1, 'info@gmail.com', '12345678944', '12345 address line1, country.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
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

CREATE TABLE `tbl_event` (
  `no` int(11) NOT NULL,
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
  `reg_player_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`no`, `title`, `venue`, `date`, `starttime`, `endtime`, `special`, `fee`, `photo`, `club_no`, `status`, `package_id`, `reg_player_count`) VALUES
(10, 'Club_football', 'demo demo', '10/04/2017', '2:02 am', '6:02 pm', 'no', 123, '', 2, 0, 2, 0),
(11, 'Cricket', 'Apna graden', '9/03/2017', '7:30 am', '2:00 pm', 'Nothing', 100, '', 3, 0, 2, 0),
(12, 'abcxds', 'ghgv', '9/03/2017', '7:25 pm', '7:25 pm', 'Nothing', 5487, 'slider-bg-0222.jpg', 2, 0, 3, 0),
(13, 'demo', 'demo', '9/03/2017', '12:38 pm', '12:38 pm', 'no', 12, '', 3, 0, 1, 0),
(14, 'demo212121212121', 'dfhgfdhdfhdfhdfhhdfhh', '9/03/2017', '8:24 pm', '8:24 pm', 'no', 11, '', 3, 0, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_player_register`
--

CREATE TABLE `tbl_event_player_register` (
  `no` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `reg_status` int(11) NOT NULL DEFAULT '0',
  `position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event_player_register`
--

INSERT INTO `tbl_event_player_register` (`no`, `event_id`, `player_id`, `reg_status`, `position`) VALUES
(4, 10, 3, 0, ''),
(5, 10, 3, 0, ''),
(6, 10, 3, 0, ''),
(7, 10, 3, 0, ''),
(312, 13, 3, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_how_its_work`
--

CREATE TABLE `tbl_how_its_work` (
  `how_its_work_id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `description1` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_how_its_work`
--

INSERT INTO `tbl_how_its_work` (`how_its_work_id`, `description`, `image1`, `image2`, `image3`, `description1`) VALUES
(1, ' dsfdccsdfadsxsddcsvdsvd ', 'thumbnail_win2.jpg', 'thumbnail_win2.jpg', 'thumbnail_win2.jpg', 'ewfsdcxz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `number_of_player` varchar(200) NOT NULL,
  `per_event_fee` varchar(200) NOT NULL,
  `player_regisatration_fee` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_name`, `number_of_player`, `per_event_fee`, `player_regisatration_fee`, `status`) VALUES
(1, '1-10', 'Upto 25 Player', '$10', '$20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_player`
--

CREATE TABLE `tbl_player` (
  `no` int(10) UNSIGNED NOT NULL,
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
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_player`
--

INSERT INTO `tbl_player` (`no`, `email`, `name`, `password`, `birthday`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `position1`, `position2`, `position3`, `user_type`, `photo`, `status`) VALUES
(1, 'cashier@test.com', 'player', '$2y$10$gXgPB3QAOVOa3BP6b0fzQOHu/SLRJtfubZDThf', '12/12/2017', 'ligg ', 'indore', 'mp', '452001', '', '1234', '235', 'GK', 'GK', 'GK', 'player', NULL, 1),
(2, 'adminsdsd@gmail.com', 'adminplayer', '$2y$10$WGLjWyrww57iIhpqRbDXk.Y6mHCH/vZZADGdrsxue1grS9xY1iyey', '2017/02/02', 'mig', 'indore', 'mp', '457933', 'Austraila', '2356123596', '235615465325', 'GK', 'GK', 'GK', 'player', 'slider-bg-011.jpg', 0),
(3, 'demoplayer@gmail.com', 'demoplayer', '$2y$10$LKtXawiJgcarL.tgXTO1ueJ3j8lAnAzFPWxllr5nOkFpxyHnQFR1.', '', 'indore', 'indore', 'mp', '45877', 'Anguilla', '235687', '32587', '1', '2', '3', 'player', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `position_id` int(11) NOT NULL,
  `position_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`position_id`, `position_title`) VALUES
(1, 'Firsts');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_policy`
--

CREATE TABLE `tbl_pricing_policy` (
  `pricing_policy_id` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pricing_policy`
--

INSERT INTO `tbl_pricing_policy` (`pricing_policy_id`, `description`) VALUES
(1, 'asdasdas,, ds, ads, da  dsfdsadsca,. dsacd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privacy_policy`
--

CREATE TABLE `tbl_privacy_policy` (
  `privacy_policy_id` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_privacy_policy`
--

INSERT INTO `tbl_privacy_policy` (`privacy_policy_id`, `description`) VALUES
(1, 'dasdasdasd.   tttryrtye sdsasa,,  vccxbfbvb,gf,, ffbdsf, sdfsd \"sudee\"<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_link`
--

CREATE TABLE `tbl_social_link` (
  `social_link_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `icon` varchar(255) NOT NULL,
<<<<<<< HEAD
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
=======
  `link` varchar(255) NOT NULL
>>>>>>> 8b5d58b578d7af9fbaf2db0e862f274d7496dc01
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_condition`
--

CREATE TABLE `tbl_term_condition` (
  `term_condition_id` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_term_condition`
--

INSERT INTO `tbl_term_condition` (`term_condition_id`, `description`) VALUES
(1, 'sadaaaaaaaadsadas sadasdsadas  fdagervdsvaevsdsc                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transaction_id` varchar(200) NOT NULL,
  `card_type_id` varchar(200) DEFAULT NULL,
  `card_no` int(20) DEFAULT NULL,
  `check_dd_no` varchar(200) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `trasaction_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `card_holder_name` varchar(50) DEFAULT NULL,
  `invoice_id` int(20) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `payment_method_type_id` int(11) DEFAULT NULL,
  `address_line_1` varchar(60) DEFAULT NULL,
  `address_line_2` varchar(80) DEFAULT NULL,
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
  `micr` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`transaction_id`, `card_type_id`, `card_no`, `check_dd_no`, `expiry_date`, `trasaction_date`, `card_holder_name`, `invoice_id`, `user_id`, `amount`, `payment_method_type_id`, `address_line_1`, `address_line_2`, `city`, `state`, `zip`, `phone`, `email`, `primary_method`, `bank_name`, `bank_account_number`, `account_holder_name`, `ifsc`, `micr`) VALUES
('0011', NULL, NULL, NULL, NULL, '2017-10-01 13:24:37', 'here ac name', NULL, NULL, 'xxxxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'here bank name', 'xxxx-xxxx-xxx', 'here ac name', NULL, NULL),
('23AA', NULL, NULL, NULL, NULL, '2017-10-01 13:25:16', 'here ac name', NULL, NULL, 'xxxxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'here bank name', 'xxxx-xxxx-xxx', 'here ac name', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_base_admin`
--
ALTER TABLE `tbl_base_admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_base_setting`
--
ALTER TABLE `tbl_base_setting`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_club`
--
ALTER TABLE `tbl_club`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_club_payment`
--
ALTER TABLE `tbl_club_payment`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_event_player_register`
--
ALTER TABLE `tbl_event_player_register`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_how_its_work`
--
ALTER TABLE `tbl_how_its_work`
  ADD PRIMARY KEY (`how_its_work_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_player`
--
ALTER TABLE `tbl_player`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `tbl_pricing_policy`
--
ALTER TABLE `tbl_pricing_policy`
  ADD PRIMARY KEY (`pricing_policy_id`);

--
-- Indexes for table `tbl_privacy_policy`
--
ALTER TABLE `tbl_privacy_policy`
  ADD PRIMARY KEY (`privacy_policy_id`);

--
-- Indexes for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  ADD PRIMARY KEY (`social_link_id`);

--
-- Indexes for table `tbl_term_condition`
--
ALTER TABLE `tbl_term_condition`
  ADD PRIMARY KEY (`term_condition_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_base_admin`
--
ALTER TABLE `tbl_base_admin`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_base_setting`
--
ALTER TABLE `tbl_base_setting`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_club`
--
ALTER TABLE `tbl_club`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_club_payment`
--
ALTER TABLE `tbl_club_payment`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_event_player_register`
--
ALTER TABLE `tbl_event_player_register`
<<<<<<< HEAD
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;
=======
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> 8b5d58b578d7af9fbaf2db0e862f274d7496dc01
--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_how_its_work`
--
ALTER TABLE `tbl_how_its_work`
  MODIFY `how_its_work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_player`
--
ALTER TABLE `tbl_player`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pricing_policy`
--
ALTER TABLE `tbl_pricing_policy`
  MODIFY `pricing_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_privacy_policy`
--
ALTER TABLE `tbl_privacy_policy`
  MODIFY `privacy_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  MODIFY `social_link_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_term_condition`
--
ALTER TABLE `tbl_term_condition`
  MODIFY `term_condition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
