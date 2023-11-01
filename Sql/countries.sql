-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 09:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `cont_id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `sequence` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`cont_id`, `sortname`, `name`, `sequence`) VALUES
(1, 'AF', 'Afghanistan', 3),
(2, 'AL', 'Albania', 1),
(3, 'DZ', 'Algeria', 2),
(4, 'AS', 'American Samoa', 4),
(5, 'AD', 'Andorra', 5),
(6, 'AO', 'Angola', 6),
(7, 'AI', 'Anguilla', 7),
(8, 'AQ', 'Antarctica', 8),
(9, 'AG', 'Antigua And Barbuda', 9),
(10, 'AR', 'Argentina', 10),
(11, 'AM', 'Armenia', 11),
(12, 'AW', 'Aruba', 12),
(13, 'AU', 'Australia', 13),
(14, 'AT', 'Austria', 14),
(15, 'AZ', 'Azerbaijan', 15),
(16, 'BS', 'Bahamas The', 16),
(17, 'BH', 'Bahrain', 17),
(18, 'BD', 'Bangladesh', 18),
(19, 'BB', 'Barbados', 19),
(20, 'BY', 'Belarus', 20),
(21, 'BE', 'Belgium', 21),
(22, 'BZ', 'Belize', 22),
(23, 'BJ', 'Benin', 23),
(24, 'BM', 'Bermuda', 24),
(25, 'BT', 'Bhutan', 25),
(26, 'BO', 'Bolivia', 26),
(27, 'BA', 'Bosnia and Herzegovina', 27),
(28, 'BW', 'Botswana', 28),
(29, 'BV', 'Bouvet Island', 29),
(30, 'BR', 'Brazil', 30),
(31, 'IO', 'British Indian Ocean Territory', 31),
(32, 'BN', 'Brunei', 32),
(33, 'BG', 'Bulgaria', 33),
(34, 'BF', 'Burkina Faso', 34),
(35, 'BI', 'Burundi', 35),
(36, 'KH', 'Cambodia', 36),
(37, 'CM', 'Cameroon', 37),
(38, 'CA', 'Canada', 38),
(39, 'CV', 'Cape Verde', 39),
(40, 'KY', 'Cayman Islands', 40),
(41, 'CF', 'Central African Republic', 41),
(42, 'TD', 'Chad', 42),
(43, 'CL', 'Chile', 43),
(44, 'CN', 'China', 44),
(45, 'CX', 'Christmas Island', 45),
(46, 'CC', 'Cocos (Keeling) Islands', 46),
(47, 'CO', 'Colombia', 47),
(48, 'KM', 'Comoros', 48),
(49, 'CG', 'Congo', 49),
(50, 'CD', 'Congo The Democratic Republic Of The', 50),
(51, 'CK', 'Cook Islands', 51),
(52, 'CR', 'Costa Rica', 52),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 53),
(54, 'HR', 'Croatia (Hrvatska)', 54),
(55, 'CU', 'Cuba', 55),
(56, 'CY', 'Cyprus', 56),
(57, 'CZ', 'Czech Republic', 57),
(58, 'DK', 'Denmark', 58),
(59, 'DJ', 'Djibouti', 59),
(60, 'DM', 'Dominica', 60),
(61, 'DO', 'Dominican Republic', 61),
(62, 'TP', 'East Timor', 62),
(63, 'EC', 'Ecuador', 63),
(64, 'EG', 'Egypt', 64),
(65, 'SV', 'El Salvador', 65),
(66, 'GQ', 'Equatorial Guinea', 66),
(67, 'ER', 'Eritrea', 67),
(68, 'EE', 'Estonia', 68),
(69, 'ET', 'Ethiopia', 69),
(70, 'XA', 'External Territories of Australia', 70),
(71, 'FK', 'Falkland Islands', 71),
(72, 'FO', 'Faroe Islands', 72),
(73, 'FJ', 'Fiji Islands', 73),
(74, 'FI', 'Finland', 74),
(75, 'FR', 'France', 75),
(76, 'GF', 'French Guiana', 76),
(77, 'PF', 'French Polynesia', 77),
(78, 'TF', 'French Southern Territories', 78),
(79, 'GA', 'Gabon', 79),
(80, 'GM', 'Gambia The', 80),
(81, 'GE', 'Georgia', 81),
(82, 'DE', 'Germany', 82),
(83, 'GH', 'Ghana', 83),
(84, 'GI', 'Gibraltar', 84),
(85, 'GR', 'Greece', 85),
(86, 'GL', 'Greenland', 86),
(87, 'GD', 'Grenada', 87),
(88, 'GP', 'Guadeloupe', 88),
(89, 'GU', 'Guam', 89),
(90, 'GT', 'Guatemala', 90),
(91, 'XU', 'Guernsey and Alderney', 91),
(92, 'GN', 'Guinea', 92),
(93, 'GW', 'Guinea-Bissau', 93),
(94, 'GY', 'Guyana', 94),
(95, 'HT', 'Haiti', 95),
(96, 'HM', 'Heard and McDonald Islands', 96),
(97, 'HN', 'Honduras', 97),
(98, 'HK', 'Hong Kong S.A.R.', 98),
(99, 'HU', 'Hungary', 99),
(100, 'IS', 'Iceland', 100),
(101, 'IN', 'India', 0),
(102, 'ID', 'Indonesia', 101),
(103, 'IR', 'Iran', 102),
(104, 'IQ', 'Iraq', 103),
(105, 'IE', 'Ireland', 104),
(106, 'IL', 'Israel', 105),
(107, 'IT', 'Italy', 106),
(108, 'JM', 'Jamaica', 107),
(109, 'JP', 'Japan', 108),
(110, 'XJ', 'Jersey', 109),
(111, 'JO', 'Jordan', 110),
(112, 'KZ', 'Kazakhstan', 111),
(113, 'KE', 'Kenya', 112),
(114, 'KI', 'Kiribati', 113),
(115, 'KP', 'Korea North', 114),
(116, 'KR', 'Korea South', 115),
(117, 'KW', 'Kuwait', 116),
(118, 'KG', 'Kyrgyzstan', 117),
(119, 'LA', 'Laos', 118),
(120, 'LV', 'Latvia', 119),
(121, 'LB', 'Lebanon', 120),
(122, 'LS', 'Lesotho', 121),
(123, 'LR', 'Liberia', 122),
(124, 'LY', 'Libya', 123),
(125, 'LI', 'Liechtenstein', 124),
(126, 'LT', 'Lithuania', 125),
(127, 'LU', 'Luxembourg', 126),
(128, 'MO', 'Macau S.A.R.', 127),
(129, 'MK', 'Macedonia', 128),
(130, 'MG', 'Madagascar', 129),
(131, 'MW', 'Malawi', 130),
(132, 'MY', 'Malaysia', 131),
(133, 'MV', 'Maldives', 132),
(134, 'ML', 'Mali', 133),
(135, 'MT', 'Malta', 134),
(136, 'XM', 'Man (Isle of)', 135),
(137, 'MH', 'Marshall Islands', 136),
(138, 'MQ', 'Martinique', 137),
(139, 'MR', 'Mauritania', 138),
(140, 'MU', 'Mauritius', 139),
(141, 'YT', 'Mayotte', 140),
(142, 'MX', 'Mexico', 141),
(143, 'FM', 'Micronesia', 142),
(144, 'MD', 'Moldova', 143),
(145, 'MC', 'Monaco', 144),
(146, 'MN', 'Mongolia', 145),
(147, 'MS', 'Montserrat', 146),
(148, 'MA', 'Morocco', 147),
(149, 'MZ', 'Mozambique', 148),
(150, 'MM', 'Myanmar', 149),
(151, 'NA', 'Namibia', 150),
(152, 'NR', 'Nauru', 151),
(153, 'NP', 'Nepal', 152),
(154, 'AN', 'Netherlands Antilles', 153),
(155, 'NL', 'Netherlands The', 154),
(156, 'NC', 'New Caledonia', 155),
(157, 'NZ', 'New Zealand', 156),
(158, 'NI', 'Nicaragua', 157),
(159, 'NE', 'Niger', 158),
(160, 'NG', 'Nigeria', 159),
(161, 'NU', 'Niue', 160),
(162, 'NF', 'Norfolk Island', 161),
(163, 'MP', 'Northern Mariana Islands', 162),
(164, 'NO', 'Norway', 163),
(165, 'OM', 'Oman', 164),
(166, 'PK', 'Pakistan', 165),
(167, 'PW', 'Palau', 166),
(168, 'PS', 'Palestinian Territory Occupied', 167),
(169, 'PA', 'Panama', 168),
(170, 'PG', 'Papua new Guinea', 169),
(171, 'PY', 'Paraguay', 170),
(172, 'PE', 'Peru', 171),
(173, 'PH', 'Philippines', 172),
(174, 'PN', 'Pitcairn Island', 173),
(175, 'PL', 'Poland', 174),
(176, 'PT', 'Portugal', 175),
(177, 'PR', 'Puerto Rico', 176),
(178, 'QA', 'Qatar', 177),
(179, 'RE', 'Reunion', 178),
(180, 'RO', 'Romania', 179),
(181, 'RU', 'Russia', 180),
(182, 'RW', 'Rwanda', 181),
(183, 'SH', 'Saint Helena', 182),
(184, 'KN', 'Saint Kitts And Nevis', 183),
(185, 'LC', 'Saint Lucia', 184),
(186, 'PM', 'Saint Pierre and Miquelon', 185),
(187, 'VC', 'Saint Vincent And The Grenadines', 186),
(188, 'WS', 'Samoa', 187),
(189, 'SM', 'San Marino', 188),
(190, 'ST', 'Sao Tome and Principe', 189),
(191, 'SA', 'Saudi Arabia', 190),
(192, 'SN', 'Senegal', 191),
(193, 'RS', 'Serbia', 192),
(194, 'SC', 'Seychelles', 193),
(195, 'SL', 'Sierra Leone', 194),
(196, 'SG', 'Singapore', 195),
(197, 'SK', 'Slovakia', 196),
(198, 'SI', 'Slovenia', 197),
(199, 'XG', 'Smaller Territories of the UK', 198),
(200, 'SB', 'Solomon Islands', 199),
(201, 'SO', 'Somalia', 200),
(202, 'ZA', 'South Africa', 201),
(203, 'GS', 'South Georgia', 202),
(204, 'SS', 'South Sudan', 203),
(205, 'ES', 'Spain', 204),
(206, 'LK', 'Sri Lanka', 205),
(207, 'SD', 'Sudan', 206),
(208, 'SR', 'Suriname', 207),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 208),
(210, 'SZ', 'Swaziland', 209),
(211, 'SE', 'Sweden', 210),
(212, 'CH', 'Switzerland', 211),
(213, 'SY', 'Syria', 212),
(214, 'TW', 'Taiwan', 213),
(215, 'TJ', 'Tajikistan', 214),
(216, 'TZ', 'Tanzania', 215),
(217, 'TH', 'Thailand', 216),
(218, 'TG', 'Togo', 217),
(219, 'TK', 'Tokelau', 218),
(220, 'TO', 'Tonga', 219),
(221, 'TT', 'Trinidad And Tobago', 220),
(222, 'TN', 'Tunisia', 221),
(223, 'TR', 'Turkey', 222),
(224, 'TM', 'Turkmenistan', 223),
(225, 'TC', 'Turks And Caicos Islands', 224),
(226, 'TV', 'Tuvalu', 225),
(227, 'UG', 'Uganda', 226),
(228, 'UA', 'Ukraine', 227),
(229, 'AE', 'United Arab Emirates', 228),
(230, 'GB', 'United Kingdom', 229),
(231, 'US', 'United States', 230),
(232, 'UM', 'United States Minor Outlying Islands', 231),
(233, 'UY', 'Uruguay', 232),
(234, 'UZ', 'Uzbekistan', 233),
(235, 'VU', 'Vanuatu', 234),
(236, 'VA', 'Vatican City State (Holy See)', 235),
(237, 'VE', 'Venezuela', 236),
(238, 'VN', 'Vietnam', 237),
(239, 'VG', 'Virgin Islands (British)', 238),
(240, 'VI', 'Virgin Islands (US)', 239),
(241, 'WF', 'Wallis And Futuna Islands', 240),
(242, 'EH', 'Western Sahara', 241),
(243, 'YE', 'Yemen', 242),
(244, 'YU', 'Yugoslavia', 243),
(245, 'ZM', 'Zambia', 244),
(246, 'ZW', 'Zimbabwe', 245);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`cont_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
