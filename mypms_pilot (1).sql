-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 05:39 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypms_pilot`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state_id` int(255) NOT NULL,
  `country_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `entity_id`, `address`, `state_id`, `country_id`) VALUES
(3, 398261959, 'Lagos', 25, 156),
(4, 2147483647, 'Lagos', 25, 156),
(5, 439040, 'Dawaki Abuja', 1, 156),
(6, 412313, 'Mabushi', 1, 156),
(7, 503774, 'Abuja', 1, 156),
(8, 9649, 'Dawaki Abuja', 1, 156),
(9, 4580, 'Garki', 1, 156);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `department` varchar(100) NOT NULL,
  `access_level` int(5) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `entity_id`, `username`, `password`, `department`, `access_level`, `photo`, `datetime`) VALUES
(1, 1, 'DAHLIA', 'DAHLIA', 'SUPER ADMIN', 3, 'profile.png', '2017-09-26 02:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `status`) VALUES
(1, 'Aruba', 1),
(2, 'Afghanistan', 1),
(3, 'Angola', 1),
(4, 'Anguilla', 1),
(5, 'Albania', 1),
(6, 'Andorra', 1),
(7, 'Netherlands Antilles', 1),
(8, 'United Arab Emirates', 1),
(9, 'Argentina', 1),
(10, 'Armenia', 1),
(11, 'American Samoa', 1),
(12, 'Antarctica', 1),
(13, 'French Southern territories', 1),
(14, 'Antigua and Barbuda', 1),
(15, 'Australia', 1),
(16, 'Austria', 1),
(17, 'Azerbaijan', 1),
(18, 'Burundi', 1),
(19, 'Belgium', 1),
(20, 'Benin', 1),
(21, 'Burkina Faso', 1),
(22, 'Bangladesh', 1),
(23, 'Bulgaria', 1),
(24, 'Bahrain', 1),
(25, 'Bahamas', 1),
(26, 'Bosnia and Herzegovina', 1),
(27, 'Belarus', 1),
(28, 'Belize', 1),
(29, 'Bermuda', 1),
(30, 'Bolivia', 1),
(31, 'Brazil', 1),
(32, 'Barbados', 1),
(33, 'Brunei', 1),
(34, 'Bhutan', 1),
(35, 'Bouvet Island', 1),
(36, 'Botswana', 1),
(37, 'Central African Republic', 1),
(38, 'Canada', 1),
(39, 'Cocos (Keeling) Islands', 1),
(40, 'Switzerland', 1),
(41, 'Chile', 1),
(42, 'China', 1),
(43, 'CÃ´te dâ€™Ivoire', 1),
(44, 'Cameroon', 1),
(45, 'Congo, The Democratic Republic', 1),
(46, 'Congo', 1),
(47, 'Cook Islands', 1),
(48, 'Colombia', 1),
(49, 'Comoros', 1),
(50, 'Cape Verde', 1),
(51, 'Costa Rica', 1),
(52, 'Cuba', 1),
(53, 'Christmas Island', 1),
(54, 'Cayman Islands', 1),
(55, 'Cyprus', 1),
(56, 'Czech Republic', 1),
(57, 'Germany', 1),
(58, 'Djibouti', 1),
(59, 'Dominica', 1),
(60, 'Denmark', 1),
(61, 'Dominican Republic', 1),
(62, 'Algeria', 1),
(63, 'Ecuador', 1),
(64, 'Egypt', 1),
(65, 'Eritrea', 1),
(66, 'Western Sahara', 1),
(67, 'Spain', 1),
(68, 'Estonia', 1),
(69, 'Ethiopia', 1),
(70, 'Finland', 1),
(71, 'Fiji Islands', 1),
(72, 'Falkland Islands', 1),
(73, 'France', 1),
(74, 'Faroe Islands', 1),
(75, 'Micronesia, Federated States o', 1),
(76, 'Gabon', 1),
(77, 'United Kingdom', 1),
(78, 'Georgia', 1),
(79, 'Ghana', 1),
(80, 'Gibraltar', 1),
(81, 'Guinea', 1),
(82, 'Guadeloupe', 1),
(83, 'Gambia', 1),
(84, 'Guinea-Bissau', 1),
(85, 'Equatorial Guinea', 1),
(86, 'Greece', 1),
(87, 'Grenada', 1),
(88, 'Greenland', 1),
(89, 'Guatemala', 1),
(90, 'French Guiana', 1),
(91, 'Guam', 1),
(92, 'Guyana', 1),
(93, 'Hong Kong', 1),
(94, 'Heard Island and McDonald Isla', 1),
(95, 'Honduras', 1),
(96, 'Croatia', 1),
(97, 'Haiti', 1),
(98, 'Hungary', 1),
(99, 'Indonesia', 1),
(100, 'India', 1),
(101, 'British Indian Ocean Territory', 1),
(102, 'Ireland', 1),
(103, 'Iran', 1),
(104, 'Iraq', 1),
(105, 'Iceland', 1),
(106, 'Israel', 1),
(107, 'Italy', 1),
(108, 'Jamaica', 1),
(109, 'Jordan', 1),
(110, 'Japan', 1),
(111, 'Kazakstan', 1),
(112, 'Kenya', 1),
(113, 'Kyrgyzstan', 1),
(114, 'Cambodia', 1),
(115, 'Kiribati', 1),
(116, 'Saint Kitts and Nevis', 1),
(117, 'South Korea', 1),
(118, 'Kuwait', 1),
(119, 'Laos', 1),
(120, 'Lebanon', 1),
(121, 'Liberia', 1),
(122, 'Libyan Arab Jamahiriya', 1),
(123, 'Saint Lucia', 1),
(124, 'Liechtenstein', 1),
(125, 'Sri Lanka', 1),
(126, 'Lesotho', 1),
(127, 'Lithuania', 1),
(128, 'Luxembourg', 1),
(129, 'Latvia', 1),
(130, 'Macao', 1),
(131, 'Morocco', 1),
(132, 'Monaco', 1),
(133, 'Moldova', 1),
(134, 'Madagascar', 1),
(135, 'Maldives', 1),
(136, 'Mexico', 1),
(137, 'Marshall Islands', 1),
(138, 'Macedonia', 1),
(139, 'Mali', 1),
(140, 'Malta', 1),
(141, 'Myanmar', 1),
(142, 'Mongolia', 1),
(143, 'Northern Mariana Islands', 1),
(144, 'Mozambique', 1),
(145, 'Mauritania', 1),
(146, 'Montserrat', 1),
(147, 'Martinique', 1),
(148, 'Mauritius', 1),
(149, 'Malawi', 1),
(150, 'Malaysia', 1),
(151, 'Mayotte', 1),
(152, 'Namibia', 1),
(153, 'New Caledonia', 1),
(154, 'Niger', 1),
(155, 'Norfolk Island', 1),
(156, 'Nigeria', 1),
(157, 'Nicaragua', 1),
(158, 'Niue', 1),
(159, 'Netherlands', 1),
(160, 'Norway', 1),
(161, 'Nepal', 1),
(162, 'Nauru', 1),
(163, 'New Zealand', 1),
(164, 'Oman', 1),
(165, 'Pakistan', 1),
(166, 'Panama', 1),
(167, 'Pitcairn', 1),
(168, 'Peru', 1),
(169, 'Philippines', 1),
(170, 'Palau', 1),
(171, 'Papua New Guinea', 1),
(172, 'Poland', 1),
(173, 'Puerto Rico', 1),
(174, 'North Korea', 1),
(175, 'Portugal', 1),
(176, 'Paraguay', 1),
(177, 'Palestine', 1),
(178, 'French Polynesia', 1),
(179, 'Qatar', 1),
(180, 'RÃ©union', 1),
(181, 'Romania', 1),
(182, 'Russian Federation', 1),
(183, 'Rwanda', 1),
(184, 'Saudi Arabia', 1),
(185, 'Sudan', 1),
(186, 'Senegal', 1),
(187, 'Singapore', 1),
(188, 'South Georgia and the South Sa', 1),
(189, 'Saint Helena', 1),
(190, 'Svalbard and Jan Mayen', 1),
(191, 'Solomon Islands', 1),
(192, 'Sierra Leone', 1),
(193, 'El Salvador', 1),
(194, 'San Marino', 1),
(195, 'Somalia', 1),
(196, 'Saint Pierre and Miquelon', 1),
(197, 'Sao Tome and Principe', 1),
(198, 'Suriname', 1),
(199, 'Slovakia', 1),
(200, 'Slovenia', 1),
(201, 'Sweden', 1),
(202, 'Swaziland', 1),
(203, 'Seychelles', 1),
(204, 'Syria', 1),
(205, 'Turks and Caicos Islands', 1),
(206, 'Chad', 1),
(207, 'Togo', 1),
(208, 'Thailand', 1),
(209, 'Tajikistan', 1),
(210, 'Tokelau', 1),
(211, 'Turkmenistan', 1),
(212, 'East Timor', 1),
(213, 'Tonga', 1),
(214, 'Trinidad and Tobago', 1),
(215, 'Tunisia', 1),
(216, 'Turkey', 1),
(217, 'Tuvalu', 1),
(218, 'Taiwan', 1),
(219, 'Tanzania', 1),
(220, 'Uganda', 1),
(221, 'Ukraine', 1),
(222, 'United States Minor Outlying I', 1),
(223, 'Uruguay', 1),
(224, 'United States', 1),
(225, 'Uzbekistan', 1),
(226, 'Holy See (Vatican City State)', 1),
(227, 'Saint Vincent and the Grenadin', 1),
(228, 'Venezuela', 1),
(229, 'Virgin Islands, British', 1),
(230, 'Virgin Islands, U.S.', 1),
(231, 'Vietnam', 1),
(232, 'Vanuatu', 1),
(233, 'Wallis and Futuna', 1),
(234, 'Samoa', 1),
(235, 'Yemen', 1),
(236, 'Yugoslavia', 1),
(237, 'South Africa', 1),
(238, 'Zambia', 1),
(239, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email_id` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `entity_id`, `email`) VALUES
(1, 1, 'ese@gmail.com'),
(4, 398261959, 'esejoyakhaine@gmail.com'),
(5, 2147483647, 'esejoyakhaine@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE `entity` (
  `entity_id` int(255) NOT NULL,
  `entity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entity`
--

INSERT INTO `entity` (`entity_id`, `entity`) VALUES
(1, 'admin'),
(4580, 'guest'),
(9649, 'guest'),
(412313, 'guest'),
(439040, 'guest'),
(503774, 'guest'),
(398261959, 'guest'),
(2147483647, 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `status` enum('active','inactive','','') NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `guest_type` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `entity_id`, `status`, `firstname`, `lastname`, `email`, `phone`, `guest_type`, `datetime`) VALUES
(3, 398261959, 'active', '', '', '', '', 'REGULAR', '2017-09-26 17:27:01'),
(4, 2147483647, 'active', '', '', '', '', 'REGULAR', '2017-09-26 17:28:38'),
(5, 439040, 'active', 'Kingsley', 'Achumie', 'kingsley@gmail.com', '0907654456', 'REGULAR', '2017-09-26 17:48:56'),
(6, 412313, 'active', 'Charles', 'Medugu', 'charles@gmail.com', '07051273635', 'REGULAR', '2017-09-26 18:13:19'),
(7, 503774, 'active', 'Gbenga', 'O.', 'gbenga@gmail.com', '0907654456', 'REGULAR', '2017-09-26 21:33:04'),
(8, 9649, 'active', 'Godwin', 'A.', 'godwi@gmail.com', '7051365997', 'REGULAR', '2017-09-26 21:38:18'),
(9, 4580, 'active', 'Charles', 'Obi', 'charles@gmail.com', '0907654456', 'REGULAR', '2017-09-26 22:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `name_id` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`name_id`, `entity_id`, `firstname`, `lastname`) VALUES
(3, 398261959, 'Ese', 'Akhaine'),
(4, 2147483647, 'Ese', 'Akhaine');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_id`, `entity_id`, `phone`, `country_id`) VALUES
(2, 1, '0902752781', 156),
(6, 398261959, '8089987678', 156),
(7, 2147483647, '8089987678', 156);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `order_id` int(255) NOT NULL,
  `orders` varchar(500) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `receipt_id` int(255) NOT NULL,
  `total` decimal(9,2) NOT NULL,
  `amount_paid` decimal(9,2) NOT NULL,
  `change` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(255) NOT NULL,
  `receipt_number` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `receipt_issue_date` datetime NOT NULL,
  `receipt_ref` varchar(100) NOT NULL,
  `amount_paid` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_id`, `receipt_number`, `entity_id`, `receipt_issue_date`, `receipt_ref`, `amount_paid`) VALUES
(1, 2147483647, 2147483647, '2017-09-26 19:28:37', 'rooms', '5900.00'),
(2, 2147483647, 439040, '2017-09-26 19:48:55', 'rooms', '8000.00'),
(3, 2147483647, 412313, '2017-09-26 20:13:19', 'rooms', '4000.00'),
(4, 2147483647, 503774, '2017-09-26 23:33:04', 'rooms', '6000.00'),
(5, 2597, 9649, '2017-09-26 23:38:18', 'rooms', '7000.00'),
(6, 5426, 4580, '2017-09-27 00:10:29', '16', '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_product`
--

CREATE TABLE `restaurant_product` (
  `product_id` int(255) NOT NULL,
  `product` varchar(200) NOT NULL,
  `qty` int(255) NOT NULL,
  `type` enum('food','drink','','') NOT NULL,
  `status` enum('in-stock','out-of-stock','','') NOT NULL,
  `price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant_product`
--

INSERT INTO `restaurant_product` (`product_id`, `product`, `qty`, `type`, `status`, `price`) VALUES
(1, 'Pet Coke', 1, 'drink', 'in-stock', '150.00'),
(2, 'Pet Fanta', 1, 'drink', 'in-stock', '150.00'),
(3, 'White Rice & Stew', 1, 'food', 'in-stock', '600.00'),
(4, 'Spagetti', 1, 'food', 'in-stock', '600.00'),
(5, 'Doughnut', 1, 'food', 'in-stock', '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(255) NOT NULL,
  `room_number` int(255) NOT NULL,
  `room_tariff` int(255) NOT NULL,
  `room_type` varchar(200) NOT NULL,
  `status` enum('occupied','unoccupied','out-of-order','out-of-service','vacant-but-dirty') NOT NULL DEFAULT 'unoccupied'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_number`, `room_tariff`, `room_type`, `status`) VALUES
(1, 1, 9000, 'Classic', 'occupied'),
(2, 2, 9000, 'Classic', 'occupied'),
(3, 3, 9000, 'Classic', 'unoccupied'),
(4, 4, 9000, 'Classic', 'occupied'),
(5, 5, 9000, 'Classic', 'unoccupied'),
(6, 6, 9000, 'Classic', 'occupied'),
(7, 7, 9000, 'Classic', 'unoccupied'),
(8, 8, 9000, 'Classic', 'unoccupied'),
(9, 9, 9000, 'Classic', 'unoccupied'),
(10, 10, 9000, 'Classic', 'occupied'),
(11, 11, 9000, 'Classic', 'unoccupied'),
(12, 12, 9000, 'Classic', 'unoccupied'),
(13, 13, 9000, 'Classic', 'unoccupied'),
(14, 14, 9000, 'Classic', 'unoccupied'),
(15, 15, 9000, 'Classic', 'unoccupied'),
(16, 16, 9000, 'Classic', 'occupied'),
(17, 17, 9000, 'Classic', 'unoccupied'),
(18, 18, 9000, 'Classic', 'unoccupied'),
(19, 19, 9000, 'Classic', 'unoccupied'),
(20, 20, 9000, 'Classic', 'unoccupied'),
(21, 21, 9000, 'Classic', 'unoccupied'),
(22, 22, 9000, 'Classic', 'unoccupied'),
(23, 23, 9000, 'Classic', 'unoccupied'),
(24, 24, 9000, 'Classic', 'unoccupied'),
(25, 25, 9000, 'Classic', 'unoccupied'),
(26, 26, 9000, 'Classic', 'unoccupied'),
(27, 27, 9000, 'Classic', 'unoccupied'),
(28, 28, 9000, 'Classic', 'unoccupied'),
(29, 29, 9000, 'Classic', 'unoccupied'),
(30, 30, 9000, 'Classic', 'unoccupied'),
(31, 31, 9000, 'Classic', 'unoccupied'),
(32, 32, 9000, 'Classic', 'unoccupied'),
(33, 33, 9000, 'Classic', 'unoccupied'),
(34, 34, 9000, 'Classic', 'unoccupied'),
(35, 35, 9000, 'Classic', 'unoccupied'),
(36, 36, 9000, 'Classic', 'unoccupied'),
(37, 37, 9000, 'Classic', 'unoccupied'),
(38, 38, 9000, 'Classic', 'unoccupied'),
(39, 39, 9000, 'Classic', 'unoccupied'),
(40, 40, 9000, 'Classic', 'unoccupied'),
(41, 41, 9000, 'Classic', 'unoccupied'),
(42, 42, 9000, 'Classic', 'unoccupied'),
(43, 43, 9000, 'Classic', 'unoccupied'),
(44, 44, 9000, 'Classic', 'unoccupied'),
(45, 45, 9000, 'Classic', 'unoccupied'),
(46, 46, 9000, 'Classic', 'unoccupied'),
(47, 47, 9000, 'Classic', 'unoccupied'),
(48, 48, 9000, 'Classic', 'unoccupied'),
(49, 49, 9000, 'Classic', 'unoccupied'),
(50, 50, 9000, 'Classic', 'unoccupied'),
(51, 51, 9000, 'Classic', 'unoccupied'),
(52, 52, 9000, 'Classic', 'unoccupied'),
(53, 53, 9000, 'Classic', 'unoccupied'),
(54, 54, 9000, 'Classic', 'unoccupied'),
(55, 55, 9000, 'Classic', 'unoccupied'),
(56, 56, 9000, 'Classic', 'unoccupied'),
(57, 57, 9000, 'Classic', 'unoccupied'),
(58, 58, 9000, 'Classic', 'unoccupied'),
(59, 59, 9000, 'Classic', 'unoccupied'),
(60, 60, 9000, 'Classic', 'unoccupied'),
(61, 61, 9000, 'Classic', 'unoccupied'),
(62, 62, 9000, 'Classic', 'unoccupied'),
(63, 63, 9000, 'Classic', 'unoccupied'),
(64, 64, 9000, 'Classic', 'unoccupied'),
(65, 65, 9000, 'Classic', 'unoccupied'),
(66, 66, 9000, 'Classic', 'unoccupied'),
(67, 67, 9000, 'Classic', 'unoccupied'),
(68, 68, 9000, 'Classic', 'unoccupied'),
(69, 69, 9000, 'Classic', 'unoccupied'),
(70, 70, 9000, 'Classic', 'unoccupied'),
(71, 71, 9000, 'Classic', 'unoccupied'),
(72, 72, 9000, 'Classic', 'unoccupied'),
(73, 73, 9000, 'Classic', 'unoccupied'),
(74, 74, 9000, 'Classic', 'unoccupied'),
(75, 75, 9000, 'Classic', 'unoccupied'),
(76, 76, 9000, 'Classic', 'unoccupied'),
(77, 77, 9000, 'Classic', 'unoccupied'),
(78, 78, 9000, 'Classic', 'unoccupied'),
(79, 79, 9000, 'Classic', 'unoccupied'),
(80, 80, 9000, 'Classic', 'unoccupied'),
(81, 81, 9000, 'Classic', 'unoccupied'),
(82, 82, 9000, 'Classic', 'unoccupied'),
(83, 83, 9000, 'Classic', 'unoccupied'),
(84, 84, 9000, 'Classic', 'unoccupied'),
(85, 85, 9000, 'Classic', 'unoccupied'),
(86, 86, 9000, 'Classic', 'unoccupied'),
(87, 87, 9000, 'Classic', 'unoccupied'),
(88, 88, 9000, 'Classic', 'unoccupied'),
(89, 89, 9000, 'Classic', 'unoccupied'),
(90, 90, 9000, 'Classic', 'unoccupied'),
(91, 91, 9000, 'Classic', 'unoccupied'),
(92, 92, 9000, 'Classic', 'unoccupied'),
(93, 93, 9000, 'Classic', 'unoccupied'),
(94, 94, 9000, 'Classic', 'unoccupied'),
(95, 95, 9000, 'Classic', 'unoccupied'),
(96, 96, 9000, 'Classic', 'unoccupied'),
(97, 97, 9000, 'Classic', 'unoccupied'),
(98, 98, 9000, 'Classic', 'unoccupied'),
(99, 99, 9000, 'Classic', 'unoccupied'),
(100, 100, 9000, 'Classic', 'unoccupied'),
(101, 101, 9000, 'Classic', 'unoccupied'),
(102, 102, 9000, 'Classic', 'unoccupied'),
(103, 103, 9000, 'Classic', 'unoccupied'),
(104, 104, 9000, 'Classic', 'unoccupied'),
(105, 105, 9000, 'Classic', 'unoccupied'),
(106, 106, 9000, 'Classic', 'unoccupied'),
(107, 107, 9000, 'Classic', 'unoccupied'),
(108, 108, 9000, 'Classic', 'unoccupied'),
(109, 109, 9000, 'Classic', 'unoccupied'),
(110, 110, 9000, 'Classic', 'unoccupied'),
(111, 111, 9000, 'Classic', 'unoccupied'),
(112, 112, 9000, 'Classic', 'unoccupied'),
(113, 113, 12000, 'Superior', 'unoccupied'),
(114, 114, 12000, 'Superior', 'unoccupied'),
(115, 115, 12000, 'Superior', 'unoccupied'),
(116, 116, 12000, 'Superior', 'unoccupied'),
(117, 117, 12000, 'Superior', 'unoccupied'),
(118, 118, 12000, 'Superior', 'unoccupied'),
(119, 119, 12000, 'Superior', 'unoccupied'),
(120, 120, 12000, 'Superior', 'unoccupied'),
(121, 121, 12000, 'Superior', 'unoccupied'),
(122, 122, 12000, 'Superior', 'unoccupied'),
(123, 123, 12000, 'Superior', 'unoccupied'),
(124, 124, 12000, 'Superior', 'unoccupied'),
(125, 125, 12000, 'Superior', 'unoccupied'),
(126, 126, 12000, 'Superior', 'unoccupied'),
(127, 127, 12000, 'Superior', 'unoccupied'),
(128, 128, 12000, 'Superior', 'unoccupied'),
(129, 129, 12000, 'Superior', 'unoccupied'),
(130, 130, 12000, 'Superior', 'unoccupied'),
(131, 131, 12000, 'Superior', 'unoccupied'),
(132, 132, 12000, 'Superior', 'unoccupied'),
(133, 133, 12000, 'Superior', 'unoccupied'),
(134, 134, 12000, 'Superior', 'unoccupied'),
(135, 135, 12000, 'Superior', 'unoccupied'),
(136, 136, 12000, 'Superior', 'unoccupied'),
(137, 137, 12000, 'Superior', 'unoccupied'),
(138, 138, 12000, 'Superior', 'unoccupied'),
(139, 139, 12000, 'Superior', 'unoccupied'),
(140, 140, 12000, 'Superior', 'unoccupied'),
(141, 141, 12000, 'Superior', 'unoccupied'),
(142, 142, 12000, 'Superior', 'unoccupied'),
(143, 143, 12000, 'Superior', 'unoccupied'),
(144, 144, 12000, 'Superior', 'unoccupied'),
(145, 145, 12000, 'Superior', 'unoccupied'),
(146, 146, 12000, 'Superior', 'unoccupied'),
(147, 147, 12000, 'Superior', 'unoccupied'),
(148, 148, 12000, 'Superior', 'unoccupied'),
(149, 149, 12000, 'Superior', 'unoccupied'),
(150, 150, 12000, 'Superior', 'unoccupied'),
(151, 151, 12000, 'Superior', 'unoccupied'),
(152, 152, 12000, 'Superior', 'unoccupied'),
(153, 153, 12000, 'Superior', 'unoccupied'),
(154, 154, 12000, 'Superior', 'unoccupied'),
(155, 155, 12000, 'Superior', 'unoccupied'),
(156, 156, 18000, 'Business Suite', 'unoccupied'),
(157, 157, 18000, 'Business Suite', 'unoccupied'),
(158, 158, 18000, 'Business Suite', 'unoccupied'),
(159, 159, 18000, 'Business Suite', 'unoccupied'),
(160, 160, 18000, 'Business Suite', 'unoccupied'),
(161, 161, 18000, 'Business Suite', 'unoccupied'),
(162, 162, 18000, 'Business Suite', 'unoccupied'),
(163, 163, 18000, 'Business Suite', 'unoccupied'),
(164, 164, 18000, 'Business Suite', 'unoccupied'),
(165, 165, 18000, 'Business Suite', 'unoccupied'),
(166, 166, 18000, 'Business Suite', 'unoccupied'),
(167, 167, 18000, 'Business Suite', 'unoccupied'),
(168, 168, 18000, 'Business Suite', 'unoccupied'),
(169, 169, 18000, 'Business Suite', 'unoccupied'),
(170, 170, 18000, 'Business Suite', 'unoccupied'),
(171, 171, 18000, 'Business Suite', 'unoccupied'),
(172, 172, 18000, 'Business Suite', 'unoccupied'),
(173, 173, 18000, 'Business Suite', 'unoccupied'),
(174, 174, 18000, 'Business Suite', 'unoccupied'),
(175, 175, 18000, 'Business Suite', 'unoccupied'),
(176, 176, 18000, 'Business Suite', 'unoccupied'),
(177, 177, 18000, 'Business Suite', 'unoccupied'),
(178, 178, 18000, 'Business Suite', 'unoccupied'),
(179, 179, 18000, 'Business Suite', 'unoccupied'),
(180, 180, 18000, 'Business Suite', 'unoccupied'),
(181, 181, 18000, 'Business Suite', 'unoccupied'),
(182, 182, 18000, 'Business Suite', 'unoccupied'),
(183, 183, 18000, 'Business Suite', 'unoccupied'),
(184, 184, 18000, 'Business Suite', 'unoccupied'),
(185, 185, 18000, 'Business Suite', 'unoccupied'),
(186, 186, 18000, 'Business Suite', 'unoccupied'),
(187, 187, 18000, 'Business Suite', 'unoccupied');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE `room_booking` (
  `booking_id` int(255) NOT NULL,
  `entity_id` int(255) NOT NULL,
  `room_number` int(255) NOT NULL,
  `amount_paid` decimal(9,2) NOT NULL,
  `receipt_number` int(255) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL,
  `payment_status` enum('full','part') NOT NULL,
  `no_of_days` int(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(200) NOT NULL,
  `admin_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_booking`
--

INSERT INTO `room_booking` (`booking_id`, `entity_id`, `room_number`, `amount_paid`, `receipt_number`, `checkin`, `checkout`, `payment_status`, `no_of_days`, `datetime`, `type`, `admin_id`) VALUES
(3, 398261959, 6, '5900.00', 2147483647, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'full', 0, '2017-09-26 17:27:01', 'SINGLE OCCUPANCY', 1),
(4, 2147483647, 6, '5900.00', 2147483647, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'full', 0, '2017-09-26 17:28:38', 'SINGLE OCCUPANCY', 1),
(5, 439040, 4, '8000.00', 2147483647, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'full', 0, '2017-09-26 17:48:56', 'SINGLE OCCUPANCY', 1),
(6, 412313, 10, '4000.00', 2147483647, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'full', 0, '2017-09-26 18:13:20', 'SINGLE OCCUPANCY', 1),
(7, 503774, 1, '6000.00', 2147483647, '09/26/2017 10:32 PM', '09/27/2017 10:33 PM', 'full', 0, '2017-09-26 21:33:04', 'SINGLE OCCUPANCY', 1),
(8, 9649, 2, '7000.00', 2597, '09/26/2017 10:38 PM', '09/27/2017 10:39 PM', 'full', 0, '2017-09-26 21:38:19', 'SINGLE OCCUPANCY', 1),
(9, 4580, 16, '5000.00', 5426, '09/27/2017 11:10 PM', '09/28/2017 11:11 PM', 'full', 0, '2017-09-26 22:10:29', 'SINGLE OCCUPANCY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(255) NOT NULL DEFAULT '156',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state`, `country_id`, `status`) VALUES
(1, 'F.C.T', 156, 1),
(2, 'Abia', 156, 1),
(3, 'Adamawa', 156, 1),
(4, 'Anambra', 156, 1),
(5, 'Akwa-Ibom', 156, 1),
(6, 'Bauchi', 156, 1),
(7, 'Bayelsa', 156, 1),
(8, 'Benue', 156, 1),
(9, 'Borno', 156, 1),
(10, 'Cross-River', 156, 1),
(11, 'Delta', 156, 1),
(12, 'Ebonyi', 156, 1),
(13, 'Enugu', 156, 1),
(14, 'Edo', 156, 1),
(15, 'Ekiti', 156, 1),
(16, 'Gombe', 156, 1),
(17, 'Imo', 156, 1),
(18, 'Jigawa', 156, 1),
(19, 'Kaduna', 156, 1),
(20, 'Kano', 156, 1),
(21, 'Katsina', 156, 1),
(22, 'Kebbi', 156, 1),
(23, 'Kogi', 156, 1),
(24, 'Kwara', 156, 1),
(25, 'Lagos', 156, 1),
(26, 'Nasarawa', 156, 1),
(27, 'Niger', 156, 1),
(28, 'Ogun', 156, 1),
(29, 'Ondo', 156, 1),
(30, 'Osun', 156, 1),
(31, 'Oyo', 156, 1),
(32, 'Plateau', 156, 1),
(33, 'Rivers', 156, 1),
(34, 'Sokoto', 156, 1),
(35, 'Taraba', 156, 1),
(36, 'Yobe', 156, 1),
(37, 'Zamfara', 156, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `entity_address` (`entity_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `entity` (`entity_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `entity_email` (`entity_id`);

--
-- Indexes for table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `guest_entity` (`entity_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`name_id`),
  ADD KEY `entity_name` (`entity_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`),
  ADD KEY `entity_phone` (`entity_id`),
  ADD KEY `phone_code` (`country_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_receipt` (`receipt_id`),
  ADD KEY `entity_order` (`entity_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `entity_receipt` (`entity_id`);

--
-- Indexes for table `restaurant_product`
--
ALTER TABLE `restaurant_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `roomtype` (`room_type`),
  ADD KEY `tarrif` (`room_tariff`),
  ADD KEY `room_status` (`status`);

--
-- Indexes for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_receipt` (`receipt_number`),
  ADD KEY `guest_booking` (`entity_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `entity`
--
ALTER TABLE `entity`
  MODIFY `entity_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `name_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phone_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `restaurant_product`
--
ALTER TABLE `restaurant_product`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `room_booking`
--
ALTER TABLE `room_booking`
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `entity_address` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `entity` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `entity_email` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`);

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `guest_entity` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`);

--
-- Constraints for table `names`
--
ALTER TABLE `names`
  ADD CONSTRAINT `entity_name` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `entity_phone` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`),
  ADD CONSTRAINT `phone_code` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `entity_order` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`),
  ADD CONSTRAINT `order_receipt` FOREIGN KEY (`receipt_id`) REFERENCES `receipt` (`receipt_id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `entity_receipt` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`);

--
-- Constraints for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD CONSTRAINT `guest_booking` FOREIGN KEY (`entity_id`) REFERENCES `entity` (`entity_id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
