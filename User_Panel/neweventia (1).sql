-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 03:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neweventia`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `attend_id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPhone` varchar(50) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`attend_id`, `userName`, `userPhone`, `eventName`, `userEmail`) VALUES
(11, 'sdfa', '+923418845249', 'papu', 'zainshabbir35@yahoo.com'),
(13, 'rtsrt', 'dfghdfg', 'Sports & Outdoor', 'dfgd'),
(14, 'zain', '123456789', 'papu', 'zainshabbir35@yahoo.com'),
(15, 'sdfa', '+923418845249', 'Meeting', 'zainshabbir35@yahoo.com'),
(16, 'zain shabbir', '03418845248', 'Muhammad Ali', 'dfadf');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `status` enum('Joined','Joining') NOT NULL,
  `dt` datetime NOT NULL,
  `platform` enum('ANDROID','iOS') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `user_id`, `event_id`, `status`, `dt`, `platform`) VALUES
(90, 198, 128, 'Joining', '2016-01-13 03:48:39', 'iOS'),
(91, 198, 133, 'Joining', '2016-01-13 04:26:58', 'iOS'),
(92, 198, 136, 'Joining', '2016-01-13 04:57:35', 'iOS'),
(93, 200, 142, 'Joining', '2016-01-13 07:29:19', 'iOS'),
(94, 200, 138, 'Joining', '2016-01-13 08:53:04', 'iOS'),
(95, 203, 138, 'Joined', '2016-01-14 06:41:39', 'iOS'),
(96, 206, 156, 'Joined', '2016-01-21 07:04:20', 'iOS'),
(97, 210, 165, 'Joined', '2016-01-26 23:02:59', 'iOS'),
(99, 212, 165, 'Joined', '2016-01-27 00:11:11', 'iOS'),
(100, 213, 164, 'Joined', '2016-01-28 00:47:43', 'ANDROID'),
(101, 214, 164, 'Joined', '2016-01-28 01:25:15', 'ANDROID'),
(102, 220, 177, 'Joining', '2016-02-10 00:24:30', 'ANDROID'),
(103, 221, 177, 'Joined', '2016-02-10 00:37:48', 'ANDROID'),
(104, 222, 177, 'Joined', '2016-02-10 00:46:50', 'ANDROID'),
(105, 198, 180, 'Joining', '2016-02-11 04:26:14', 'iOS'),
(122, 229, 182, 'Joining', '2016-02-17 23:31:33', 'iOS'),
(107, 198, 177, 'Joining', '2016-02-11 04:26:31', 'iOS'),
(117, 198, 176, 'Joining', '2016-02-16 23:42:29', 'iOS'),
(139, 241, 220, 'Joined', '2016-04-07 07:18:22', 'iOS'),
(110, 198, 175, 'Joined', '2016-02-11 06:09:38', 'iOS'),
(115, 229, 172, 'Joining', '2016-02-16 21:33:16', 'iOS'),
(116, 229, 185, 'Joining', '2016-02-16 21:34:06', 'iOS'),
(118, 229, 188, 'Joined', '2016-02-17 20:10:10', 'iOS'),
(125, 200, 182, 'Joining', '2016-03-02 18:57:12', 'iOS'),
(120, 200, 186, 'Joining', '2016-02-17 21:39:59', 'iOS'),
(121, 200, 188, 'Joining', '2016-02-17 21:40:24', 'iOS'),
(123, 232, 191, 'Joining', '2016-02-18 07:14:56', 'iOS'),
(124, 200, 190, 'Joining', '2016-02-27 04:40:11', 'iOS'),
(138, 240, 202, 'Joined', '2016-03-29 04:29:20', 'ANDROID'),
(128, 237, 194, 'Joining', '2016-03-22 05:08:25', 'iOS'),
(129, 198, 194, 'Joining', '2016-03-22 05:29:42', 'iOS'),
(130, 200, 194, 'Joined', '2016-03-22 15:53:13', 'iOS'),
(131, 237, 197, 'Joined', '2016-03-24 06:35:35', 'iOS'),
(132, 198, 197, 'Joined', '2016-03-24 05:46:07', 'iOS'),
(133, 239, 197, 'Joined', '2016-03-24 05:45:14', 'iOS'),
(134, 239, 195, 'Joining', '2016-03-24 06:17:11', 'iOS'),
(135, 237, 195, 'Joining', '2016-03-24 06:17:57', 'iOS'),
(136, 198, 195, 'Joining', '2016-03-24 06:19:14', 'iOS'),
(149, 198, 193, 'Joining', '2016-04-08 09:09:40', 'iOS'),
(140, 198, 220, 'Joined', '2016-04-07 07:19:17', 'iOS'),
(141, 241, 221, 'Joined', '2016-04-07 07:33:48', 'iOS'),
(142, 198, 218, 'Joining', '2016-04-07 07:33:32', 'iOS'),
(143, 198, 221, 'Joined', '2016-04-07 07:52:32', 'iOS'),
(144, 198, 211, 'Joined', '2016-04-08 02:31:41', 'iOS'),
(145, 241, 227, 'Joining', '2016-04-08 08:55:56', 'iOS'),
(150, 198, 227, 'Joining', '2016-04-08 09:10:18', 'iOS'),
(147, 198, 219, 'Joining', '2016-04-08 08:57:34', 'iOS'),
(148, 198, 205, 'Joining', '2016-04-08 09:08:46', 'iOS'),
(151, 198, 228, 'Joined', '2016-04-11 01:47:38', 'iOS'),
(186, 258, 246, 'Joined', '2016-04-13 06:48:03', 'ANDROID'),
(210, 200, 259, 'Joining', '2016-04-17 04:25:23', 'iOS'),
(258, 200, 276, 'Joined', '2016-05-16 22:40:38', 'iOS'),
(155, 258, 231, 'Joined', '2016-04-12 06:06:07', 'iOS'),
(156, 259, 231, 'Joining', '2016-04-12 05:04:35', 'iOS'),
(157, 198, 233, 'Joined', '2016-04-12 08:43:47', 'iOS'),
(158, 198, 229, 'Joined', '2016-04-12 05:43:46', 'iOS'),
(159, 261, 231, 'Joined', '2016-04-12 06:09:47', 'iOS'),
(160, 258, 234, 'Joined', '2016-04-12 06:26:35', 'iOS'),
(161, 258, 235, 'Joining', '2016-04-12 06:24:26', 'iOS'),
(162, 259, 234, 'Joined', '2016-04-12 06:26:17', 'iOS'),
(163, 259, 235, 'Joining', '2016-04-12 06:24:46', 'iOS'),
(164, 260, 234, 'Joined', '2016-04-12 06:25:55', 'iOS'),
(165, 260, 235, 'Joining', '2016-04-12 06:25:07', 'iOS'),
(166, 198, 231, 'Joined', '2016-04-12 06:54:02', 'iOS'),
(167, 258, 240, 'Joining', '2016-04-13 04:39:17', 'iOS'),
(168, 258, 242, 'Joined', '2016-04-13 04:51:31', 'iOS'),
(169, 259, 240, 'Joining', '2016-04-13 04:40:36', 'iOS'),
(170, 259, 242, 'Joined', '2016-04-13 04:51:56', 'iOS'),
(171, 258, 241, 'Joined', '2016-04-13 05:02:24', 'iOS'),
(172, 258, 243, 'Joined', '2016-04-13 04:56:08', 'iOS'),
(173, 260, 240, 'Joining', '2016-04-13 04:42:26', 'ANDROID'),
(174, 260, 242, 'Joined', '2016-04-13 04:51:11', 'ANDROID'),
(175, 260, 241, 'Joined', '2016-04-13 05:02:06', 'ANDROID'),
(176, 260, 243, 'Joined', '2016-04-13 04:56:17', 'ANDROID'),
(177, 259, 241, 'Joined', '2016-04-13 05:02:15', 'iOS'),
(178, 259, 243, 'Joined', '2016-04-13 04:56:37', 'iOS'),
(179, 262, 242, 'Joined', '2016-04-13 04:52:59', 'iOS'),
(180, 263, 243, 'Joined', '2016-04-13 04:58:54', 'iOS'),
(181, 264, 243, 'Joined', '2016-04-13 04:59:43', 'iOS'),
(182, 265, 241, 'Joined', '2016-04-13 05:03:42', 'iOS'),
(261, 258, 278, 'Joining', '2016-05-10 03:30:50', 'ANDROID'),
(259, 255, 276, 'Joining', '2016-05-09 22:03:59', 'iOS'),
(287, 304, 276, 'Joined', '2016-05-17 03:04:13', 'iOS'),
(187, 259, 246, 'Joined', '2016-04-13 06:46:46', 'ANDROID'),
(188, 260, 246, 'Joined', '2016-04-13 06:47:01', 'ANDROID'),
(189, 258, 247, 'Joining', '2016-04-13 06:53:04', 'ANDROID'),
(213, 269, 260, 'Joining', '2016-04-19 18:32:01', 'iOS'),
(212, 269, 208, 'Joined', '2016-04-23 00:14:05', 'iOS'),
(211, 200, 225, 'Joined', '2016-04-20 15:27:28', 'iOS'),
(193, 258, 249, 'Joined', '2016-04-13 07:15:11', 'iOS'),
(194, 247, 249, 'Joined', '2016-04-13 07:14:46', 'iOS'),
(195, 198, 249, 'Joined', '2016-04-13 07:14:31', 'ANDROID'),
(196, 200, 245, 'Joining', '2016-04-13 07:26:46', 'iOS'),
(197, 200, 191, 'Joining', '2016-04-13 07:27:21', 'iOS'),
(198, 200, 250, 'Joining', '2016-04-13 07:27:31', 'iOS'),
(216, 200, 215, 'Joined', '2016-04-22 22:44:08', 'iOS'),
(215, 200, 208, 'Joining', '2016-04-20 15:26:47', 'iOS'),
(214, 200, 255, 'Joining', '2016-04-20 15:26:42', 'iOS'),
(217, 200, 260, 'Joining', '2016-04-20 15:27:05', 'iOS'),
(218, 200, 217, 'Joining', '2016-04-20 15:27:10', 'iOS'),
(219, 200, 258, 'Joining', '2016-04-20 15:27:15', 'iOS'),
(220, 259, 262, 'Joined', '2016-04-20 15:54:55', 'iOS'),
(221, 258, 262, 'Joined', '2016-04-20 15:54:52', 'ANDROID'),
(222, 272, 263, 'Joined', '2016-04-20 16:50:41', 'iOS'),
(223, 273, 263, 'Joining', '2016-04-20 16:30:01', 'ANDROID'),
(224, 200, 263, 'Joining', '2016-04-20 16:33:32', 'iOS'),
(225, 271, 263, 'Joined', '2016-04-20 16:49:11', 'ANDROID'),
(226, 271, 225, 'Joined', '2016-04-20 16:38:40', 'ANDROID'),
(227, 200, 224, 'Joined', '2016-04-20 22:15:20', 'iOS'),
(228, 258, 265, 'Joining', '2016-04-21 01:45:01', 'iOS'),
(229, 259, 265, 'Joining', '2016-04-21 01:48:02', 'iOS'),
(230, 260, 265, 'Joined', '2016-04-21 01:53:13', 'iOS'),
(231, 270, 208, 'Joined', '2016-04-22 19:10:18', 'ANDROID'),
(232, 270, 260, 'Joining', '2016-04-22 19:07:22', 'ANDROID'),
(233, 270, 259, 'Joining', '2016-04-22 19:08:23', 'ANDROID'),
(234, 274, 260, 'Joining', '2016-04-22 19:28:03', 'ANDROID'),
(235, 274, 215, 'Joining', '2016-04-22 19:28:23', 'ANDROID'),
(236, 275, 260, 'Joining', '2016-04-22 19:35:04', 'ANDROID'),
(237, 275, 259, 'Joining', '2016-04-22 19:35:23', 'ANDROID'),
(238, 275, 208, 'Joined', '2016-04-22 20:35:33', 'ANDROID'),
(273, 259, 278, 'Joining', '2016-05-12 03:28:18', 'ANDROID'),
(240, 259, 267, 'Joined', '2016-04-22 21:51:50', 'iOS'),
(241, 259, 268, 'Joined', '2016-04-22 21:54:00', 'iOS'),
(242, 258, 267, 'Joined', '2016-04-22 21:43:59', 'ANDROID'),
(243, 260, 267, 'Joined', '2016-04-22 21:45:44', 'iOS'),
(244, 260, 268, 'Joined', '2016-04-22 21:54:17', 'iOS'),
(245, 258, 268, 'Joined', '2016-04-22 21:54:27', 'iOS'),
(246, 276, 268, 'Joined', '2016-04-22 21:55:33', 'iOS'),
(247, 277, 268, 'Joined', '2016-04-22 21:56:08', 'iOS'),
(248, 267, 217, 'Joining', '2016-04-23 00:53:52', 'iOS'),
(249, 278, 260, 'Joining', '2016-04-23 08:14:51', 'iOS'),
(250, 279, 269, 'Joined', '2016-04-23 17:36:53', 'iOS'),
(251, 280, 269, 'Joined', '2016-04-23 17:37:54', 'iOS'),
(252, 281, 259, 'Joining', '2016-04-23 21:21:21', 'ANDROID'),
(253, 198, 270, 'Joined', '2016-04-25 07:06:08', 'iOS'),
(264, 284, 276, 'Joining', '2016-05-10 05:49:36', 'iOS'),
(266, 285, 276, 'Joining', '2016-05-11 04:52:36', 'ANDROID'),
(267, 286, 276, 'Joined', '2016-05-17 03:34:58', 'iOS'),
(268, 200, 280, 'Joining', '2016-05-11 07:43:59', 'iOS'),
(269, 247, 276, 'Joining', '2016-05-11 09:10:08', 'iOS'),
(270, 288, 276, 'Joining', '2016-05-11 21:04:52', 'ANDROID'),
(274, 290, 276, 'Joined', '2016-05-17 03:35:37', 'iOS'),
(275, 291, 241, 'Joined', '2016-05-12 05:53:56', 'ANDROID'),
(276, 249, 276, 'Joining', '2016-05-12 07:33:01', 'iOS'),
(277, 249, 279, 'Joining', '2016-05-12 07:33:06', 'iOS'),
(278, 292, 241, 'Joined', '2016-05-12 08:04:39', 'ANDROID'),
(279, 293, 241, 'Joined', '2016-05-12 08:09:50', 'ANDROID'),
(280, 294, 276, 'Joined', '2016-05-17 03:34:07', 'ANDROID'),
(281, 295, 241, 'Joined', '2016-05-13 00:44:49', 'ANDROID'),
(282, 296, 241, 'Joined', '2016-05-13 00:52:47', 'ANDROID'),
(283, 297, 241, 'Joined', '2016-05-13 01:06:12', 'ANDROID'),
(284, 298, 241, 'Joined', '2016-05-13 01:23:36', 'ANDROID'),
(285, 247, 279, 'Joining', '2016-05-14 01:20:37', 'iOS'),
(286, 299, 276, 'Joined', '2016-05-17 02:57:13', 'iOS'),
(288, 300, 276, 'Joined', '2016-05-17 03:04:14', 'iOS'),
(289, 305, 276, 'Joined', '2016-05-17 03:04:16', 'iOS'),
(290, 289, 276, 'Joined', '2016-05-17 03:38:43', 'ANDROID'),
(291, 302, 276, 'Joined', '2016-05-17 04:56:45', 'ANDROID'),
(296, 209, 241, 'Joined', '2016-05-24 07:08:24', 'ANDROID'),
(297, 282, 241, 'Joined', '2016-05-24 07:08:33', 'ANDROID'),
(298, 307, 290, 'Joined', '2016-05-25 02:58:16', 'ANDROID'),
(299, 209, 291, 'Joined', '2016-05-26 04:56:18', 'ANDROID'),
(300, 205, 281, 'Joined', '2016-05-26 12:24:33', 'iOS'),
(301, 249, 281, 'Joined', '2016-05-26 12:27:56', 'iOS'),
(302, 273, 281, 'Joined', '2016-05-26 12:30:10', 'iOS'),
(303, 298, 281, 'Joined', '2016-05-26 12:33:29', 'iOS'),
(304, 246, 0, 'Joined', '2016-05-26 13:14:29', 'iOS'),
(305, 248, 0, 'Joined', '2016-05-26 13:14:52', 'iOS'),
(306, 237, 291, 'Joined', '2016-05-27 02:34:51', 'ANDROID'),
(307, 324, 291, 'Joined', '2016-05-27 08:32:18', 'ANDROID'),
(308, 233, 293, 'Joined', '2016-05-27 08:58:35', 'ANDROID');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_location` varchar(100) NOT NULL,
  `event_start_time` varchar(50) NOT NULL,
  `event_end_time` varchar(50) NOT NULL,
  `food_type` text NOT NULL,
  `guest_of_honor` text NOT NULL,
  `event_description` text NOT NULL,
  `event_type_id` int(11) NOT NULL,
  `status` enum('Requested','Pending','Accepted','Rejected','Closed','Passed') NOT NULL,
  `event_date` date NOT NULL,
  `request_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL,
  `platform` enum('IOS','ANDROID') NOT NULL,
  `no_of_guests_est` int(10) NOT NULL,
  `photo` text NOT NULL,
  `qr_code` text NOT NULL,
  `cpd_hrs` varchar(20) NOT NULL,
  `event_category` enum('Public','Private') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_location`, `event_start_time`, `event_end_time`, `food_type`, `guest_of_honor`, `event_description`, `event_type_id`, `status`, `event_date`, `request_dt`, `updated_dt`, `platform`, `no_of_guests_est`, `photo`, `qr_code`, `cpd_hrs`, `event_category`) VALUES
(308, 'Muhammad Ali', 'Islamabad', '08:00pm', '12:00am', '', '', 'PapuWebURLwww.muhammadali.com', 5, 'Requested', '2017-10-10', '2017-08-04 19:36:07', '0000-00-00 00:00:00', '', 1500, 'pictures/0tgf3Ys.jpg', '', '123', 'Public'),
(309, 'ASCII', 'islamabad', '8am', '8pm', '', '', 'Ascii event has been held by IIUI WebURLwww.ascii.com', 4, 'Requested', '2018-04-15', '2017-08-04 20:10:09', '0000-00-00 00:00:00', '', 200, 'pictures/ASCII.jpg', '', '45', 'Public'),
(310, 'Fashion icon', 'karachi', '10am', '10pm', '', '', 'Art , modelling and different kind of fashion events are going to happen in ParisWebURLwww.fashion.com', 5, 'Passed', '1970-01-01', '2017-08-04 20:14:04', '0000-00-00 00:00:00', '', 100, 'pictures/fashion.jpg', '', '5', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `event_organization`
--

CREATE TABLE `event_organization` (
  `id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `organization_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_organization`
--

INSERT INTO `event_organization` (`id`, `event_id`, `organization_id`) VALUES
(15, 149, 1),
(14, 149, 4),
(13, 147, 2),
(12, 147, 1),
(16, 150, 1),
(17, 150, 2),
(18, 150, 3),
(19, 150, 4),
(20, 151, 1),
(21, 151, 2),
(22, 151, 3),
(23, 151, 4),
(24, 152, 1),
(25, 152, 2),
(26, 152, 3),
(34, 154, 1),
(33, 154, 3),
(35, 153, 3),
(36, 153, 4),
(37, 158, 1),
(38, 158, 3),
(39, 159, 4),
(40, 159, 3),
(41, 166, 1),
(42, 166, 2),
(43, 167, 0),
(44, 167, 2),
(124, 170, 1),
(123, 170, 2),
(47, 168, 0),
(48, 168, 2),
(51, 169, 1),
(52, 169, 3),
(122, 170, 3),
(121, 170, 4),
(65, 0, 2),
(66, 0, 1),
(67, 0, 3),
(68, 0, 4),
(185, 171, 2),
(184, 171, 1),
(176, 172, 4),
(175, 172, 3),
(174, 172, 2),
(173, 172, 1),
(177, 176, 1),
(178, 176, 2),
(179, 177, 1),
(180, 177, 2),
(181, 177, 36),
(182, 177, 37),
(183, 177, 38),
(186, 201, 1),
(187, 201, 2),
(188, 202, 1),
(189, 202, 2),
(190, 202, 3),
(191, 232, 1),
(192, 232, 2),
(193, 239, 1),
(194, 239, 2),
(195, 239, 3),
(196, 241, 1),
(197, 241, 2),
(198, 243, 1),
(199, 243, 2),
(200, 244, 44),
(201, 244, 45),
(207, 245, 40),
(204, 248, 1),
(205, 249, 1),
(206, 249, 3),
(213, 254, 1),
(212, 254, 2),
(214, 264, 1),
(215, 264, 2),
(216, 264, 3),
(217, 264, 4),
(218, 264, 36),
(219, 264, 38),
(220, 264, 39),
(221, 274, 1),
(222, 274, 2),
(223, 274, 3),
(224, 274, 4),
(225, 128, 1),
(227, 293, 40),
(228, 294, 1),
(229, 294, 2),
(230, 294, 3),
(231, 294, 40),
(232, 294, 0),
(233, 297, 2),
(234, 298, 2),
(235, 300, 1),
(236, 301, 1),
(237, 302, 1),
(238, 303, 39),
(239, 304, 48),
(240, 305, 44),
(241, 308, 1),
(242, 309, 44);

-- --------------------------------------------------------

--
-- Table structure for table `event_organizer`
--

CREATE TABLE `event_organizer` (
  `id` int(10) NOT NULL,
  `org_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_organizer`
--

INSERT INTO `event_organizer` (`id`, `org_id`, `event_id`, `admin_id`) VALUES
(123, 197, 125, 1),
(124, 197, 126, 1),
(125, 197, 127, 1),
(126, 195, 128, 1),
(127, 195, 129, 1),
(128, 195, 130, 1),
(129, 195, 131, 1),
(130, 195, 132, 1),
(131, 195, 133, 1),
(132, 195, 134, 1),
(133, 195, 135, 1),
(134, 195, 136, 1),
(135, 199, 137, 1),
(136, 199, 138, 1),
(162, 202, 164, 1),
(138, 195, 140, 1),
(139, 195, 141, 1),
(140, 199, 142, 1),
(141, 195, 143, 1),
(142, 195, 144, 1),
(143, 0, 145, 0),
(144, 195, 146, 1),
(145, 195, 147, 1),
(146, 195, 148, 1),
(147, 195, 149, 1),
(148, 195, 150, 1),
(149, 195, 151, 1),
(150, 195, 152, 1),
(151, 195, 153, 1),
(152, 195, 154, 1),
(153, 0, 155, 0),
(154, 195, 156, 1),
(155, 202, 157, 1),
(163, 202, 165, 1),
(158, 195, 160, 1),
(159, 202, 161, 1),
(160, 202, 162, 1),
(161, 202, 163, 1),
(170, 202, 172, 1),
(260, 256, 262, 1),
(171, 195, 173, 1),
(172, 195, 174, 1),
(173, 195, 175, 1),
(174, 218, 176, 1),
(175, 219, 177, 1),
(176, 219, 178, 1),
(262, 256, 264, 1),
(178, 224, 180, 1),
(180, 223, 182, 1),
(181, 223, 183, 1),
(182, 223, 184, 1),
(183, 223, 185, 1),
(184, 223, 186, 1),
(186, 227, 188, 1),
(261, 225, 263, 1),
(188, 228, 190, 1),
(189, 232, 191, 1),
(190, 195, 192, 1),
(191, 195, 193, 1),
(192, 224, 194, 1),
(193, 195, 195, 1),
(194, 223, 196, 1),
(195, 195, 197, 1),
(197, 238, 199, 1),
(198, 238, 200, 1),
(200, 195, 202, 1),
(202, 223, 204, 1),
(203, 202, 205, 1),
(243, 232, 245, 1),
(244, 256, 246, 1),
(206, 225, 208, 1),
(207, 223, 209, 1),
(209, 225, 211, 1),
(258, 225, 260, 1),
(286, 245, 288, 1),
(245, 257, 247, 1),
(213, 225, 215, 1),
(214, 225, 216, 1),
(215, 225, 217, 1),
(216, 202, 218, 1),
(217, 195, 219, 1),
(218, 195, 220, 1),
(219, 195, 221, 1),
(220, 195, 222, 1),
(221, 195, 223, 1),
(257, 225, 259, 1),
(223, 225, 225, 1),
(224, 202, 226, 1),
(225, 195, 227, 1),
(226, 195, 228, 1),
(227, 243, 229, 1),
(228, 202, 230, 1),
(229, 256, 231, 1),
(230, 256, 232, 1),
(231, 195, 233, 1),
(232, 256, 234, 1),
(233, 257, 235, 1),
(234, 256, 236, 1),
(235, 257, 237, 1),
(236, 257, 238, 1),
(237, 257, 239, 1),
(238, 257, 240, 1),
(239, 257, 241, 1),
(240, 256, 242, 1),
(241, 256, 243, 1),
(270, 256, 272, 1),
(263, 257, 265, 1),
(247, 256, 249, 1),
(248, 232, 250, 1),
(264, 256, 266, 1),
(251, 256, 253, 1),
(253, 225, 255, 1),
(265, 257, 267, 1),
(266, 256, 268, 1),
(267, 225, 269, 1),
(268, 195, 270, 1),
(269, 257, 271, 1),
(271, 225, 273, 1),
(272, 257, 274, 1),
(273, 195, 275, 1),
(274, 225, 276, 1),
(275, 283, 277, 1),
(276, 257, 278, 1),
(277, 225, 279, 1),
(278, 225, 280, 1),
(279, 225, 281, 1),
(280, 225, 282, 1),
(281, 256, 283, 1),
(282, 257, 284, 1),
(283, 257, 285, 1),
(285, 256, 287, 1),
(287, 256, 289, 1),
(288, 257, 290, 1),
(289, 309, 291, 1),
(290, 245, 292, 1),
(291, 326, 293, 1),
(292, 195, 294, 1),
(294, 327, 296, 1),
(295, 328, 297, 1),
(296, 328, 298, 1),
(298, 328, 301, 1),
(299, 328, 302, 1),
(304, 329, 307, 1),
(303, 329, 306, 1),
(305, 329, 308, 1),
(306, 329, 309, 1),
(307, 329, 310, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `event_type_id` int(10) NOT NULL,
  `event_type_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`event_type_id`, `event_type_name`) VALUES
(4, 'Educational'),
(5, 'Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `organization_id` int(10) NOT NULL,
  `organization_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_id`, `organization_name`) VALUES
(1, 'Fish and Game NSW'),
(45, 'Australia and New Zealand Citizenship'),
(44, 'Professional Management'),
(42, 'Stensson Nattklubb '),
(41, 'The Sugar Industry Lobby'),
(40, 'Stargate'),
(39, 'Tax Accountants Cayman Inc'),
(38, 'International Actuaries'),
(36, 'Victorian Wombat Society'),
(2, 'Professional Body Builders'),
(3, 'Australian and New Zealand Society of Nuclear Medicine'),
(4, 'Australasian Association of Clinical Biochemists'),
(46, 'test Organisation'),
(47, 'new test organisation org4'),
(48, 'new org'),
(49, 'testorg768'),
(50, 'fashion'),
(51, 'sports'),
(52, 'sdfgef');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rID` int(10) NOT NULL,
  `rEventID` int(10) NOT NULL,
  `rComment` text NOT NULL,
  `rType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rID`, `rEventID`, `rComment`, `rType`) VALUES
(1, 95, ';lalmdff;', 'Sexual'),
(2, 95, 'drsasdfgsda', 'Sexual'),
(3, 95, 'dsfasf', 'Sexual'),
(4, 299, 'fasdfsdf', 'other'),
(5, 299, 'jsdjls', 'Sexual'),
(6, 308, ';ldf,m', 'Sexual'),
(7, 308, 'dsgdsfg', 'Spam');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorevent`
--

CREATE TABLE `sponsorevent` (
  `sID` int(10) NOT NULL,
  `sName` varchar(50) NOT NULL,
  `Sphone` varchar(50) NOT NULL,
  `sEmail` varchar(50) NOT NULL,
  `sEvent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsorevent`
--

INSERT INTO `sponsorevent` (`sID`, `sName`, `Sphone`, `sEmail`, `sEvent`) VALUES
(1, 'Abdullah', '80480528048', 'abd@gmail.com', 'Arachnophobia '),
(2, 'zain shabbir', '03418845248', 'zainshabbir35@yahoo.com', 'Muhammad Ali');

-- --------------------------------------------------------

--
-- Table structure for table `stallbook`
--

CREATE TABLE `stallbook` (
  `sID` int(11) NOT NULL,
  `sName` varchar(40) NOT NULL,
  `sPhone` varchar(50) NOT NULL,
  `sEmail` varchar(50) NOT NULL,
  `sEvent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stallbook`
--

INSERT INTO `stallbook` (`sID`, `sName`, `sPhone`, `sEmail`, `sEvent`) VALUES
(1, ',nmknlk', 'knlkkl', 'abd@gmail.com', 'Barbers Association'),
(2, 'nkn', '80480528048', 'abd@gmail.com', 'Arachnophobia '),
(3, ',nmknlk', '80480528048', 'abd@gmail.com', 'Meeting'),
(4, 'adfasd', '80480528048', 'abd@gmail.com', 'Lok virsa Musical Night');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` enum('Guest','Admin','Organizer') NOT NULL,
  `email` varchar(50) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `registered_dt` text NOT NULL,
  `pwd_request_dt` text NOT NULL,
  `photo` varchar(150) NOT NULL,
  `is_pwd_requested` enum('True','False') NOT NULL,
  `platform` enum('IOS','ANDROID') NOT NULL,
  `admin_id` int(10) NOT NULL,
  `status` enum('Approved','Pending') NOT NULL,
  `device_id` text NOT NULL,
  `last_login_dt` text NOT NULL,
  `login_status` enum('Active','Inactive') NOT NULL,
  `user_cpd_hrs` int(10) NOT NULL,
  `user_registration` enum('Normal','Manual') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `user_name`, `password`, `utype`, `email`, `profession`, `address`, `phone`, `registered_dt`, `pwd_request_dt`, `photo`, `is_pwd_requested`, `platform`, `admin_id`, `status`, `device_id`, `last_login_dt`, `login_status`, `user_cpd_hrs`, `user_registration`) VALUES
(1, '', '', 'Attenda', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'rchandra@drajon.com.au', '', '', '', '', '', '', '', 'ANDROID', 1, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-27 08:40:11', 'Active', 0, 'Normal'),
(293, '', '', 'testing user', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'hhcvhbcv@hjffg.com', 'ghvgj', 'vghvfy', '7375364637475', '2016-05-12 08:09:50', '', '', 'False', 'ANDROID', 0, '', '', '2016-05-12 08:09:50', 'Active', 0, 'Manual'),
(216, '', '', 'Asim', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 'asim1@gmail.com', 'developer', 'Auckland New Zealand ', '12365485235', '2016-02-09 04:45:55', '', 'pictures/20160209044555.png', 'False', '', 1, '', '50c3c3db0828102c', '2016-02-09 04:45:55', 'Active', 0, 'Normal'),
(210, '', '', 'Farooq', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'farooq@gmail.com', 'Testing', 'Islambad', '1231234315', '2016-01-26 23:02:59', '', '', 'False', 'IOS', 0, '', '', '2016-01-26 23:02:59', 'Active', 0, 'Normal'),
(239, '', '', 'bobby', 'e10adc3949ba59abbe56e057f20f883e', 'Guest', 'appsparkios@gmail.com', 'tester', 'auckland, new zealand', '0220879376', '2016-03-24 05:41:00', '', '', 'False', '', 0, 'Approved', 'APA91bHKaLt5W0vPO7fWSuL6uEa4hfWYipdT4o_rUZT7Cxsz6LFHxyx2Lx55wkgSE3zV_AL8fXpAvknQn64zdleI_loEGbQf6B90D95OfwVwCP1Rr2lSL0anmNW_lzP1rOwNeie6wXHA', '2016-03-25 03:59:54', 'Active', 0, 'Normal'),
(212, '', '', 'ali', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'umer@gamil.com', 'testing', 'islamabad', '123123', '2016-01-27 00:11:11', '', '', 'False', 'IOS', 0, '', 'APA91bHKzx7bohQ3unVK64tSJPkRJ90Dv8vI2gC40Xai-2Yl35DvWPbdpiNUmu3ZGQtmF2bHoyEhKO9Dr0BDZK6WvSo2HFe11oUyzh1t68cCU0XDXa0upjMCYEuFqDiRKxNi0aDjxRxA', '2016-04-11 05:25:45', 'Active', 0, 'Normal'),
(214, '', '', 'Test2', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'Test@hg.com', 'Testing', 'Isb rwp pak', '034458133500 ', '2016-01-28 01:25:15', '', 'pictures/20160128012515.png', 'False', 'ANDROID', 0, '', '', '2016-01-28 01:25:15', 'Active', 0, 'Normal'),
(215, '', '', 'Asim', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 'asim@gmail.com', 'software engineer ', 'Auckland New Zealand ', '03425689526', '2016-02-09 00:37:27', '', 'pictures/20160209003727.png', 'False', 'ANDROID', 1, '', '50c3c3db0828102c', '2016-02-09 00:37:27', 'Active', 0, 'Normal'),
(217, '', '', 'CubBoy1', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 'cubi@gmail.com', 'hunter', 'Auckland New Zealand Australia ', '03452635953', '2016-02-09 04:48:46', '', 'pictures/20160209044846.png', 'False', '', 1, '', 'APA91bElWp2uRWf_v-POEHXv5d9Sp3U0Werg0EqP1GGDkS0VC5cZKc95FZc6S13QohuRt_fRlWnMQBv7SNeBO4BPZw3YA0OWfOV8pOFaJKp6Cs7KBU-Ij30ywiHa-XFt1-0Mn6tQ6aHU', '2016-04-06 07:36:37', 'Active', 0, 'Normal'),
(221, '', '', 'Moonlight ', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'Moonlight@gmail.com', 'Tourist ', 'Australia ', '097765456776', '2016-02-10 00:37:48', '', 'pictures/20160210003748.png', 'False', 'ANDROID', 0, '', '', '2016-02-10 00:37:48', 'Active', 0, 'Normal'),
(219, '', '', 'Ali', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 'ali@gmail.com', 'developer', 'New Zealand', '963256852365', '2016-02-10 00:00:04', '', 'pictures/20160210000004.png', 'False', 'ANDROID', 1, 'Approved', 'APA91bHKzx7bohQ3unVK64tSJPkRJ90Dv8vI2gC40Xai-2Yl35DvWPbdpiNUmu3ZGQtmF2bHoyEhKO9Dr0BDZK6WvSo2HFe11oUyzh1t68cCU0XDXa0upjMCYEuFqDiRKxNi0aDjxRxA', '2016-04-11 05:25:45', 'Active', 0, 'Normal'),
(220, '', '', 'Aftab', 'e10adc3949ba59abbe56e057f20f883e', 'Guest', 'aftab@gmail.com', 'software tester', 'Australia ', '852369741258', '2016-02-10 00:20:02', '', 'pictures/20160210011355.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bElWp2uRWf_v-POEHXv5d9Sp3U0Werg0EqP1GGDkS0VC5cZKc95FZc6S13QohuRt_fRlWnMQBv7SNeBO4BPZw3YA0OWfOV8pOFaJKp6Cs7KBU-Ij30ywiHa-XFt1-0Mn6tQ6aHU', '2016-02-10 05:09:08', 'Active', 0, 'Normal'),
(222, '', '', 'Wasim', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'Wasim@gamil.com', 'Cricketer ', 'Pakistan', '03456646754', '2016-02-10 00:46:50', '', 'pictures/20160210004650.png', 'False', 'ANDROID', 0, '', '', '2016-02-10 00:46:50', 'Active', 0, 'Normal'),
(231, '', '', 'Andrew.guest', 'e99a18c428cb38d5f260853678922e03', 'Guest', 'astjohn@drajon.com.au', 'retired ', '12 Clifton crescent, Mt lawley', '0400123123', '2016-02-17 22:03:43', '', '', 'False', '', 0, 'Approved', '', '2016-02-17 22:05:36', 'Active', 0, 'Normal'),
(225, '', '', 'secretariat ', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 'rchandra@drajon.com.au', 'Nuclear medicine ', 'PO Box 2195 Queensland', '123345', '2016-02-11 07:17:12', '', '', 'False', '', 1, 'Approved', 'APA91bGw_PH-iuQEypIwlVG-8kZxxY2n4yWuvm6_MfGk7IbtzfONdpoBWwT_6yZ6MiY8732xOwUnn340BiCuSj7aS6vBPt15TiA9AP8opzGTohBVSzvyyo12IgR94E_2QIehJRmnr227', '2016-06-02 07:27:58', 'Active', 0, 'Normal'),
(230, '', '', 'Andrew.guest', 'e99a18c428cb38d5f260853678922e03', 'Guest', 'astjohn@gmail.com', 'Member', 'my Lawley ', '0412345678', '2016-02-15 19:47:15', '', '', 'False', '', 0, 'Approved', '', '2016-02-17 22:05:36', 'Active', 0, 'Normal'),
(227, '', '', 'Erinaacb', 'e99a18c428cb38d5f260853678922e03', 'Organizer', 'erin@aacb.asn.au', 'Events Manager', 'AACB Headoffice', '02990', '2016-02-15 04:16:22', '', '', 'False', '', 1, '', '', '2016-05-10 21:03:31', 'Active', 0, 'Normal'),
(226, '', '', 'Andrew', '339688e46485741b6f162aaee9a74070', 'Guest', 'astjohn14@gmail.com', 'Consultant', '17/7 Clifton Crescent Mt Lawley WA 6050', '0400666399', '2016-02-13 18:52:19', '', '', 'False', 'ANDROID', 0, 'Approved', 'APA91bGjOoy6lKDPGu6M2Pd_-Pi9fPGGJj5oAbYFrTKvQyO0_RrCN0DsoPreqWfYOv_cMN0xbyC31iyQOdTd0oYHfNIegsb9HVrEzwAKmA30mH1Fszxo7Se9zSw42ZDhZL_xLFaWnkEo', '2016-02-13 19:05:17', 'Active', 0, 'Normal'),
(232, '', '', 'ash.subi@yahoo.com', '9dfc670e94c31f4465d007c3210430f3', 'Organizer', 'ash.subi@yahoo.com', 'software developers', '543 Bridge Road, Richmond', ' 61402925545', '2016-02-18 06:50:19', '2016-04-18 07:01:06', 'pictures/20160413072858.png', 'True', 'IOS', 1, 'Approved', '', '2016-04-13 05:56:35', 'Active', 0, 'Normal'),
(228, '', '', 'Lisaaacb', 'e99a18c428cb38d5f260853678922e03', 'Organizer', 'lisa@aacb.asn.au', 'Conference Manager', 'Melbourne ', '039909', '2016-02-15 04:17:59', '', '', 'False', 'IOS', 1, 'Approved', '', '2016-02-17 23:05:49', 'Active', 0, 'Normal'),
(229, '', '', 'Peteraacb', '81cc2053666b17e86be31c59d042449f', 'Guest', 'peter@aacb.asn.au', 'CEO', 'Sydney', '9907', '2016-02-15 04:19:22', '2016-02-17 23:46:44', '', 'True', '', 0, 'Approved', '', '2016-02-17 23:43:26', 'Active', 0, 'Normal'),
(233, '', '', 'Gemini Guy', 'a36fda97221fd62af4b872a78fa36817', 'Guest', 'sarnaus@yahoo.com.au', 'finance ', '6 Banfield Terrace ', '0402925544', '2016-02-18 07:14:47', '', '', 'False', '', 0, 'Approved', '', '2016-02-18 07:14:47', 'Active', 0, 'Normal'),
(237, '', '', 'ahmed', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'm.ahmedumer@hotmail.com', 'testing', 'auckland', '12345678', '2016-03-22 04:59:51', '', '', 'False', '', 0, 'Approved', '', '2016-05-05 07:40:07', 'Active', 0, 'Normal'),
(236, '', '', 'Brian Connors ', 'ef7dfebc07d85708fc2a86a99131059f', 'Guest', 'brianconnors1@gmail.com', 'Biochemist ', '8 Avoca Grove Nth Caulfield', '0409031594', '2016-03-17 03:10:38', '', '', 'False', '', 0, 'Approved', '', '2016-03-17 03:10:38', 'Active', 0, 'Normal'),
(234, '', '', 'Brian Johnson', 'e99a18c428cb38d5f260853678922e03', 'Guest', 'rahulchandra@hotmail.com', 'Director', '123 Kingsway, Glen Waverley', '021 345 567', '2016-03-12 17:23:40', '', '', 'False', '', 0, 'Approved', '', '2016-03-12 17:23:40', 'Active', 0, 'Normal'),
(235, '', '', 'try', '7e696161f558ab98fc2e43202516934c', 'Guest', 'Fogg', 'gggggg', 'thg', '1233', '2016-03-12 17:29:17', '', '', 'False', '', 0, 'Approved', '', '2016-03-12 17:29:17', 'Active', 0, 'Normal'),
(209, '', '', 'aashoo', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'aashoo42@gmail.com', 'testing', 'Wah Cannt', '131233', '2016-01-22 00:48:39', '', '', 'False', '', 0, 'Approved', '', '2016-01-22 00:48:39', 'Active', 0, 'Normal'),
(243, '', '', 'Khurshid Farooq', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'khurshidfarooq@yahoo.com', 'Testing', 'Auckland, New Zealand', '03459793461', '2016-04-11 05:02:52', '', 'pictures/20160411051522.png', 'False', '', 1, '', 'APA91bHKzx7bohQ3unVK64tSJPkRJ90Dv8vI2gC40Xai-2Yl35DvWPbdpiNUmu3ZGQtmF2bHoyEhKO9Dr0BDZK6WvSo2HFe11oUyzh1t68cCU0XDXa0upjMCYEuFqDiRKxNi0aDjxRxA', '2016-04-11 05:35:18', 'Active', 0, 'Normal'),
(208, '', '', 'bilal', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'bilal@gmail.com', 'Tester', 'Islamabad, Pakistan', '234234', '2016-01-22 00:25:00', '', '', 'False', 'IOS', 1, '', '', '2016-01-22 00:30:34', 'Active', 0, 'Normal'),
(213, '', '', 'Testuser', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'Test@gmail.com', 'Tester', 'Isb pak', '097654322', '2016-01-28 00:47:43', '', 'pictures/20160128004743.png', 'False', 'ANDROID', 0, '', '', '2016-01-28 00:47:43', 'Active', 0, 'Normal'),
(238, '', '', 'Sebastian Sjöström', '07103d3b0d94904738c805c5202655ec', 'Organizer', 'sebastian.sjostrom@yousound.se', 'Nattklubbsansvarig', '', ' 46 708 57 88 55', '2016-03-23 06:32:03', '', '', 'False', 'IOS', 1, '', '', '2016-04-28 06:11:40', 'Active', 0, 'Normal'),
(206, '', '', 'dfgdfgaasdf', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'ads faded', 'adfadsf', 'dsfadsf', 'dsafds', '2016-01-21 07:04:20', '', '', 'False', 'IOS', 0, '', '', '2016-01-21 07:04:20', 'Active', 0, 'Normal'),
(205, '', '', 'achandraguest', '5db64c311d1a4f85ac2f36f0026a7e5d', 'Guest', 'achandra@drajon.com.au', 'Architect', '456 Bancroft Street, Preston', '01234456', '2016-01-16 03:20:20', '', '', 'False', '', 0, 'Approved', '', '2016-01-16 03:20:20', 'Active', 0, 'Normal'),
(204, '', '', 'achandra ', 'b72152b90353f1da542c6664c229aa37', 'Organizer', 'achandra1@live.com.au', 'Architect ', '123 Birkdale Road, Brisbane', '3456789', '2016-01-16 03:17:46', '2016-01-16 03:21:43', '', 'True', 'ANDROID', 1, '', '', '2016-01-16 03:17:46', 'Active', 0, 'Normal'),
(203, '', '', 'johnbrown', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'jbrown1@gmail.com', 'barber', 'try ', '0124444', '2016-01-14 06:41:39', '', '', 'False', 'IOS', 0, '', '', '2016-01-14 06:41:39', 'Active', 0, 'Normal'),
(200, '', '', 'Rajeev.guest', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'rchandra@live.com.au', 'barber', '1 Collins street Melbourne', '123456', '2016-01-13 06:46:28', '', 'pictures/20160511074138.png', 'False', 'IOS', 0, 'Approved', '', '2016-05-23 18:47:21', 'Active', 0, 'Normal'),
(223, '', '', 'Mr.Rajeev', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 'rchandra@live.com.au', 'Accounts', 'Brisbane, Australlia', '1234567', '2016-02-11 03:22:37', '', 'pictures/20160320013344.png', 'False', '', 1, 'Approved', 'APA91bGiIlX9dMrUF70BKFcuTLr6t6yNppDctBQw-8aZz3g3GR6ZAvZBt9rAawB9woM2HIhoSvBDRPwJfPRj5pF6KTOsvl5azI0IKCMuVRMhVBBx6k4y6iup3CY9MsrDEH56XuH57sag', '2016-05-03 23:38:06', 'Active', 0, 'Normal'),
(195, 'khurshid', 'faroq', 'Khurshid', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'khurshidfarooq@gmail.com', 'testing', 'Gulberg Town, Islamabad, Pakistan', '03339335850', '2016-01-12 05:03:43', '', 'pictures/20160209045433.png', 'False', '', 1, '', 'APA91bGw_PH-iuQEypIwlVG-8kZxxY2n4yWuvm6_MfGk7IbtzfONdpoBWwT_6yZ6MiY8732xOwUnn340BiCuSj7aS6vBPt15TiA9AP8opzGTohBVSzvyyo12IgR94E_2QIehJRmnr227', '2016-06-02 07:20:07', 'Active', 0, 'Normal'),
(197, '', '', 'Shaheera', 'e10adc3949ba59abbe56e057f20f883e', 'Organizer', 'shaheeramansoor3008@gmail.com', 'Engineer', 'Islamabad, Pakistan', '888 7777 56', '2016-01-12 05:40:22', '', '', 'False', '', 1, 'Approved', 'APA91bElWp2uRWf_v-POEHXv5d9Sp3U0Werg0EqP1GGDkS0VC5cZKc95FZc6S13QohuRt_fRlWnMQBv7SNeBO4BPZw3YA0OWfOV8pOFaJKp6Cs7KBU-Ij30ywiHa-XFt1-0Mn6tQ6aHU', '2016-04-06 08:09:52', 'Active', 0, 'Normal'),
(242, '', '', 'RahulChandra', '6967924fa945520ed79c3dd3fb4ad3c7', 'Guest', 'rahulchandra@hotmail.com.au', 'Student', '', '0466223195', '2016-04-09 06:30:26', '', '', 'False', '', 0, 'Approved', '', '2016-04-16 02:40:29', 'Active', 0, 'Normal'),
(240, '', '', 'Bobby ', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'Bobby@Gmail.com', 'Engineer ', 'Auckland New Zealand ', '9764385786797', '2016-03-29 04:29:20', '', 'pictures/20160329042920.png', 'False', 'ANDROID', 0, '', '', '2016-03-29 04:29:20', 'Active', 0, 'Normal'),
(241, '', '', 'bob', 'e10adc3949ba59abbe56e057f20f883e', 'Guest', 'appsparkios@gmail.com', 'project manager', 'glen innes, line road, auckland, new zealand', '0220879376', '2016-04-07 07:14:18', '', '', 'False', '', 0, 'Approved', '', '2016-04-08 08:55:31', 'Active', 0, 'Normal'),
(244, '', '', 'org1', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'org1@infinitevisio.com', 'testing', 'New Zealand ', '2356', '2016-04-11 06:32:48', '', '', 'False', 'IOS', 1, 'Approved', '', '2016-05-16 04:00:43', 'Active', 0, 'Normal'),
(260, '', '', 'guest9', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest9@mail.com', 'tester', 'auckland', '1234', '2016-04-12 06:05:33', '', '', 'False', '', 0, 'Approved', 'APA91bGgpj7XuF6wDBUb52EUokjblrAlG57miWmIjLyy2uAR0v9p2KDtm7KHVgHtLKkf837XUDJbx0F-0zhGzv3DdIY0-pEagJ7dn6NQvnr5dZzCbaVXbiE2qtCubZmvfH6U8ADPwNNN', '2016-05-02 03:40:49', 'Active', 0, 'Normal'),
(259, '', '', 'guest8', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest8@gmail.com', 'tester', 'auckland', '1234', '2016-04-12 05:03:52', '', 'pictures/20160428005516.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-25 01:24:48', 'Active', 0, 'Normal'),
(303, '', '', 'SarahDaniel', 'c45f88ea54d68468a1cbdd2c6ebf5174', 'Guest', 'sarah.daniel@uon.edu.au', 'Nuclear Medicine Technologist', '34 Percy St, Tarragindi', '0422639194', '2016-05-17 02:33:25', '', '', 'False', 'ANDROID', 0, 'Approved', 'c0c4bad9791d7918', '2016-05-17 02:33:25', 'Active', 0, 'Normal'),
(247, '', '', 'guest2', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest2@infinitevisio.com', 'testing', 'New Zealand', '444', '2016-04-11 07:00:16', '', 'pictures/20160511091117.png', 'False', 'IOS', 0, 'Approved', '', '2016-05-17 03:25:58', 'Active', 0, 'Normal'),
(246, '', '', 'guest1', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest1@infinitevisio.com', 'testing', 'New Zealand ', '5725', '2016-04-11 06:36:04', '', '', 'False', '', 0, 'Approved', '', '2016-04-14 00:09:40', 'Active', 0, 'Normal'),
(248, '', '', 'guest3', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest3@gmail.com', 'testing', 'New Zealand ', '1234', '2016-04-11 07:09:43', '', '', 'False', '', 0, 'Approved', '', '2016-05-12 01:33:44', 'Active', 0, 'Normal'),
(251, '', '', 'guest3', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest3@infinitevisio.com', 'testing', 'New Zealand ', '5534', '2016-04-11 07:20:01', '', '', 'False', '', 0, 'Approved', '', '2016-05-12 01:33:44', 'Active', 0, 'Normal'),
(249, '', '', 'guest4', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest4@gmail.com', 'testing', 'New Zealand ', '1234', '2016-04-11 07:12:14', '', '', 'False', '', 0, 'Approved', '', '2016-05-13 08:32:52', 'Active', 0, 'Normal'),
(250, '', '', 'guest4', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest4@infinitevisio.com', 'testing', 'New Zealand ', '1234', '2016-04-11 07:13:56', '', '', 'False', '', 0, 'Approved', '', '2016-05-13 08:32:52', 'Active', 0, 'Normal'),
(252, '', '', 'yay', '6512bd43d9caa6e02c990b0a82652dca', 'Guest', 'high@gaff.com', 'Tess', 'cc', 'bob', '2016-04-11 07:26:49', '', '', 'False', '', 0, 'Approved', '', '2016-04-11 07:26:49', 'Active', 0, 'Normal'),
(253, '', '', 'ccx', '1aabac6d068eef6a7bad3fdf50a05cc8', 'Guest', 'fff@guy.gg', 'gig', 'gig', 'did', '2016-04-11 07:30:38', '', '', 'False', '', 0, 'Approved', '', '2016-04-11 07:30:38', 'Active', 0, 'Normal'),
(254, '', '', 'guest5', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest5@infinitevisio.com', 'testing', 'New Zealand ', '1234', '2016-04-11 07:36:27', '', '', 'False', '', 0, 'Approved', '', '2016-05-17 04:58:14', 'Active', 0, 'Normal'),
(255, '', '', 'guest6', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest6@infinitevisio.com', 'testing', 'New Zealand ', '44455', '2016-04-11 07:38:51', '', '', 'False', '', 0, 'Approved', '', '2016-05-10 04:26:23', 'Active', 0, 'Normal'),
(258, '', '', 'guest7', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest7@gmail.com', 'tester', 'auckland', '123456', '2016-04-12 04:58:50', '', '', 'False', '', 0, 'Approved', 'APA91bHvN0NswU6GWhYX8tfk0I67if1ubQixsrbhix3unbjvwNQUaNoDUq_YJW_6SqwmbNpPgkgAxAnKZCTq7O8ToYb6m5q_zo5Cb8-NkmLUcBYDNtF_LsdvwowQN6mh_Zle3RJl7wKv', '2016-05-16 00:00:24', 'Active', 0, 'Normal'),
(256, '', '', 'org3', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'appsparkios@gmail.com', 'testing', 'Australia', '123456799', '2016-04-12 01:07:02', '', 'pictures/20160511092317.png', 'False', '', 1, '', '', '2016-05-17 09:35:22', 'Active', 0, 'Normal'),
(257, 'khurshid ', 'khana ', 'org4', '50613492d8c7b796741ca4aacc22492a', 'Organizer', 'work4edu@gmail.com', 'testing', 'New Zealand', '44466666', '2016-04-12 01:13:00', '2016-05-26 01:10:06', 'pictures/20160524071105.png', 'True', '', 1, '', 'APA91bFroXr69H8KnsJSX4pJbT3ORgVceVITp9zogx1fKys1oyENfRRSXVUeMcxcSf8DghKXfaLkZwDq9EBvOXWPea_25fkBHxeQbwQ5YXYqqUj429-UtXPW9vIUXuMKnN0mzVTmWbZa', '2016-05-25 09:17:54', 'Active', 0, 'Normal'),
(292, '', '', 'manual user', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'manual@Gmail.com', 'development ', 'Melbourne Australia ', '786787678', '2016-05-12 08:04:39', '', 'pictures/20160512080439.png', 'False', 'ANDROID', 0, '', '', '2016-05-12 08:04:39', 'Active', 0, 'Manual'),
(261, '', '', 'guest10 StraightUp', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'guest10@mail.com', 'tester', 'abcd', '123456', '2016-04-12 06:09:47', '', '', 'False', 'IOS', 0, '', '', '2016-04-12 06:09:47', 'Active', 0, 'Normal'),
(262, '', '', 'shahi', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'shahi@mail.com', 'tester', 'auckland', '123456', '2016-04-13 04:52:59', '', '', 'False', 'IOS', 0, '', '', '2016-04-13 04:52:59', 'Active', 0, 'Normal'),
(273, '', '', 'Bk1nm', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'bk1@mail.com', 'tester', 'auckland', '1234', '2016-04-20 16:16:59', '', '', 'False', 'ANDROID', 0, 'Approved', 'ab5d223595badb03', '2016-04-20 16:16:59', 'Active', 0, 'Normal'),
(263, '', '', 'pigeon', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'pigeon@mail.com', 'tester', 'abcdefgh', '123456', '2016-04-13 04:58:54', '', '', 'False', 'IOS', 0, '', '', '2016-04-13 04:58:54', 'Active', 0, 'Normal'),
(264, '', '', 'foot', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'foot@mail.com', '1234', 'avcgh', '1234', '2016-04-13 04:59:43', '', '', 'False', 'IOS', 0, '', '', '2016-04-13 04:59:43', 'Active', 0, 'Normal'),
(265, '', '', 'kiwi_boy', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'kiwi@mail.com', 'tester', '1234', '1234', '2016-04-13 05:03:42', '', '', 'False', 'IOS', 0, '', '', '2016-04-13 05:03:42', 'Active', 0, 'Normal'),
(269, '', '', 'rwatherston', '760d145f833a255a2db2786111ca190a', 'Guest', 'rachelwatherston@live.com.au', 'Nuclear Medicine Modality Manager', '', '', '2016-04-19 18:31:15', '', '', 'False', '', 0, 'Approved', '', '2016-04-20 19:03:10', 'Active', 0, 'Normal'),
(276, '', '', 'random guest', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'sfghjg@mail.com', 'tester', 'shnkgd', '145777', '2016-04-22 21:55:33', '', '', 'False', 'IOS', 0, '', '', '2016-04-22 21:55:33', 'Active', 0, 'Normal'),
(278, '', '', 'dmensforth', 'bf779e0933a882808585d19455cd7937', 'Guest', 'dominic.mensforth@drjones.com.au', 'Nuclear medicine technologist', '47 Mataro Rd, Hope Valley SA', '0412048412', '2016-04-23 08:14:34', '', '', 'False', '', 0, 'Approved', '', '2016-04-23 08:14:34', 'Active', 0, 'Normal'),
(277, '', '', 'random 23', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'fhkiu@mail.com', 'tester', 'shkvdr', '46774', '2016-04-22 21:56:08', '', '', 'False', 'IOS', 0, '', '', '2016-04-22 21:56:08', 'Active', 0, 'Normal'),
(266, '', '', 'ashwin ', '9c8caa02ffe28e96145f7baf05e63d86', 'Guest', 'ashwin.sharma@stargategroup.com.au', 'accounts ', '543 bridge rd', '0402925645', '2016-04-18 07:09:08', '', '', 'False', '', 0, 'Approved', '', '2016-04-18 07:09:08', 'Active', 0, 'Normal'),
(267, '', '', 'sueom', '181d535b3f6a6de1a63e86f629a01788', 'Guest', 'sue@omalley.co.nz', 'Dr', '9 Pentre Terrace', '0272411174', '2016-04-19 03:44:24', '', '', 'False', '', 0, 'Approved', '', '2016-04-23 00:52:57', 'Active', 0, 'Normal'),
(268, '', '', 'Lizbailey', 'ed7b55ffb5ed433b8767c57448338b09', 'Guest', 'elizabeth.bailey@sydney.edu.au', 'NMT', 'RNSH Nuclear Medicine', '0412397558', '2016-04-19 07:34:25', '', '', 'False', 'ANDROID', 0, 'Approved', 'fa95476873c2d9f0', '2016-04-19 07:34:25', 'Active', 0, 'Normal'),
(270, '', '', 'Isaac Witton', 'b28957f4260787805851da9a315b96d1', 'Guest', 'isaacwitton@gmail.com', 'Nuclear Medicine Technolohist', '4/26 Cudmore Tce, Marleston, 5033', '0406320916', '2016-04-19 20:10:20', '', '', 'False', 'ANDROID', 0, 'Approved', '838aa758e3bafaa', '2016-04-19 20:10:20', 'Active', 0, 'Normal'),
(271, '', '', 'Aimz210', '2b75d5f513a576ff95f3db32574b3239', 'Guest', 'Evans.Amyliz@gmail.com', 'nuclear medicine technologist ', '2 Rex Street Gosnells WA 6110 ', '0400476284', '2016-04-20 15:34:55', '', '', 'False', 'ANDROID', 0, 'Approved', 'APA91bGstkXe0uZNJ6ffjd5BPWAIke0-PHWH8MO73ZimWvtprdslHK5_hy8LfL0MPDQOA1AVDPgcym4qPqugWZzJOwe9TJ6c4YxU76X6b5D8knBkEDvOEUZnjmVZPq6lA6Ie1lNCuW0x', '2016-04-20 16:34:39', 'Active', 0, 'Normal'),
(272, '', '', 'bknm', 'e10adc3949ba59abbe56e057f20f883e', 'Guest', 'bk24@mail.com', 'tester', 'auckland', '123456', '2016-04-20 15:45:05', '', '', 'False', '', 0, 'Approved', '', '2016-04-20 16:36:07', 'Active', 0, 'Normal'),
(274, '', '', 'Jrbague', 'cb8c63cd418039109b6f7e1af674fd01', 'Guest', 'jrbague@gmail.com', 'NMT', '8a vialou lane ', '021314966', '2016-04-20 17:11:44', '', '', 'False', 'ANDROID', 0, 'Approved', 'APA91bEEU_-HSVXfTYlbNGTNNLUyoRkFu3L58xlXYOKlnYCdUwvO1VMe4gi7qksgNCNElYX8vEMM29vjO0w7fAeQVGvSiIS4D-KTt2NTeb5uoPfFPpRkJWvsm5KsvgmOMMieqKzI-CS4', '2016-04-22 19:27:36', 'Active', 0, 'Normal'),
(284, '', '', 'James Turner', 'b1b73dda926baba274936ef1b48d38ca', 'Guest', 'jameskturner@hotmail.com', 'nuclear medicine technologist', 'Brisbane ', '0421234537', '2016-05-10 05:49:21', '', '', 'False', '', 0, 'Approved', '', '2016-05-10 05:49:21', 'Active', 0, 'Normal'),
(275, '', '', 'ljmichel ', 'ac4949fbda0465d6bda7439a8cf49e6a', 'Guest', 'ljmichel@bigpond.com', 'Nuclear Medicine Scientist', '20 Caravel Court Cleveland QLD 4163 ', '+61417713698', '2016-04-22 19:34:29', '', '', 'False', 'ANDROID', 0, 'Approved', 'a3f97d8659935aa2', '2016-04-22 19:34:29', 'Active', 0, 'Normal'),
(279, '', '', 'jenny Calcott ', '5e530b709dc55d21db411da2cf514b2f', 'Guest', 'jenny.calcott@hotmail.com', 'MRS', '37 Gilmore st, west Wollongong. ', '0417255504', '2016-04-23 17:32:33', '', '', 'False', '', 0, 'Approved', '', '2016-04-23 17:32:33', 'Active', 0, 'Normal'),
(280, '', '', 'anbrer', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'sbcseryuy@mail.com', 'tester', 'dhjh', '2345', '2016-04-23 17:37:54', '', '', 'False', 'IOS', 0, '', '', '2016-04-23 17:37:54', 'Active', 0, 'Normal'),
(281, '', '', 'Clareradley', '8b39a7cdac1e3cd0c6463c6fd6277eb8', 'Guest', 'hairyfairy56_nz@yahoo.co.nz', 'Chief Imaging Technologist', '82 Southwick St, Wynnum, AUSTRALIA, 4178', '+61425201022', '2016-04-23 21:21:03', '', '', 'False', 'ANDROID', 0, 'Approved', '16fa9cd3a8d659f2', '2016-04-23 21:21:03', 'Active', 0, 'Normal'),
(287, '', '', 'John.brown', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'johnbrown@live.com.au', 'director', '1234', '0412-690012', '2016-05-11 18:34:11', '', '', 'False', '', 0, 'Approved', '', '2016-05-11 18:34:11', 'Active', 0, 'Normal'),
(288, '', '', 'Sarahg', '87b5a9c6fc1c4703c3551943e6de8610', 'Guest', 'sarahgales74@hotmail.com', 'nuclear medicine technologist ', '101 / 169 Leichhardt street spring hill ', '0419593157', '2016-05-11 21:04:32', '', '', 'False', 'ANDROID', 0, 'Approved', 'bb35844a9741b521', '2016-05-11 21:04:32', 'Active', 0, 'Normal'),
(331, 'abd', 'cc', 'abd', '202cb962ac59075b964b07152d234b70', 'Organizer', 'a,msda', 'student', 'safas', '6+5+65+', '2017-08-10 14:10:48', '', '', 'False', '', 1, 'Pending', '', '2017-08-10 14:10:48', 'Active', 0, 'Normal'),
(330, 'zain', 'shabbir', 'zain', '202cb962ac59075b964b07152d234b70', 'Organizer', 'zainshabbir35@yahoo.com', 'student', 'sector h10', '3418845248', '2017-08-04 20:18:02', '', 'pictures/dc5d5eecbe8c4f1875632eceab1960951.jpg', 'False', '', 1, 'Approved', '', '2017-08-04 20:18:02', 'Active', 0, 'Normal'),
(285, '', '', 'LeesaCollie', '841d93525b9f0960ceaf38f4fdf22e2e', 'Guest', 'lcollie@scr.com.au', 'Nuclear Medicine Scientist', 'Nerang ST SOUTHPORT QLD ', '0420846548', '2016-05-11 04:52:17', '', '', 'False', 'ANDROID', 0, 'Approved', 'b61752a7290341f3', '2016-05-11 04:52:17', 'Active', 0, 'Normal'),
(286, '', '', 'jesselkin', '2ee990868ac1292d4c2bd6b7c4582fc7', 'Guest', 'Jess.elkin@hotmail.com', 'nuclear medicine technologist ', '29/51 playfield at chermside ', '0432885335', '2016-05-11 06:17:31', '', '', 'False', '', 0, 'Approved', '', '2016-05-12 05:27:17', 'Active', 0, 'Normal'),
(289, '', '', 'David Gambrill', '8629e4f6e0c27c26e7713d555e671e5f', 'Guest', 'davd.gambrill@gcradiology.com.au', 'Operations Manager Gold Coast Radiology', 'Suite 1-4 Harbour Point, 10 Santa Barbara Road, Hope Island.', '0755142555', '2016-05-11 23:04:25', '', '', 'False', 'ANDROID', 0, 'Approved', 'e37ecdbced97e542', '2016-05-11 23:04:25', 'Active', 0, 'Normal'),
(290, '', '', 'cfleming', '6f079abc2d45a5fb481474fe7c33d870', 'Guest', 'callie_fleming@hotmail.com', 'Nuclear Medicine Scientist', '29/51 Playfield st Chermside', '0401729792', '2016-05-12 05:33:59', '', '', 'False', '', 0, 'Approved', '', '2016-05-16 17:58:57', 'Active', 0, 'Normal'),
(291, '', '', 'OnsiteGuest', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'onsituser@gmail.com', 'software developer on site ', 'office #222', '0987654321', '2016-05-12 05:53:56', '', 'pictures/20160512055356.png', 'False', 'ANDROID', 0, '', '', '2016-05-12 05:53:56', 'Active', 0, 'Manual'),
(302, '', '', 'Susan Baldwin', '621d474d2e7b13cf89ac8cb8180cad21', 'Guest', 'susaniscd@gmail.com', 'Nuclear Medicine Technologist', 'Qscan Radiology', '0422287550', '2016-05-17 02:25:57', '', '', 'False', 'ANDROID', 0, 'Approved', '890beaa0414796cf', '2016-05-17 02:25:57', 'Active', 0, 'Normal'),
(299, '', '', 'CMORRIS ', 'cf3055226b6b702c173158039f21c8e9', 'Guest', 'cmorris2@bigpond.com', 'Nuclear Medicine Technologist ', '33B/2 Ridgevista Court Reedy Creek 4227', '0417485029', '2016-05-16 06:48:08', '', '', 'False', '', 0, 'Approved', '', '2016-05-17 02:56:40', 'Active', 0, 'Normal'),
(301, '', '', 'jduong', '5638a444a61021f11930703a00376608', 'Guest', 'duojy002@mymail.unisa.edu.au', 'Nuclear Medicine Technologist', '', '', '2016-05-17 02:08:27', '', '', 'False', '', 0, 'Approved', '', '2016-05-18 01:48:40', 'Active', 0, 'Normal'),
(294, '', '', 'CSharpe3', '3062c3629018697597c92c8ce326e3b0', 'Guest', 'christopher.sharpe@health.qld.gov.au', 'Nuclear Medicine Technologist', '34 Percy St, Tarragindi, QLD, 4121', '0412328656', '2016-05-12 19:36:30', '', '', 'False', 'ANDROID', 0, 'Approved', '161c4a700a4f6b09', '2016-05-12 19:36:30', 'Active', 0, 'Normal'),
(295, '', '', 'test ', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'tryj@gkgf.cijg', 'vhcf', 'vhff', '74847533', '2016-05-13 00:44:49', '', '', 'False', 'ANDROID', 0, '', '', '2016-05-13 00:44:49', 'Active', 0, 'Manual'),
(296, '', '', 'ghggugg', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'cgfhggjfg', 'vbhhg', 'ghfgg', '46465756', '2016-05-13 00:52:47', '', '', 'False', 'ANDROID', 0, '', '', '2016-05-13 00:52:47', 'Active', 0, 'Manual'),
(297, '', '', 'test user new', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'hdhhf@hjfg', 'hjfgu', 'hhcc', '157337', '2016-05-13 01:06:12', '', '', 'False', 'ANDROID', 0, '', '', '2016-05-13 01:06:12', 'Active', 0, 'Manual'),
(298, '', '', 'Testing organisation user', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'adfdf@fgdr.cijb', 'ghfhft', 'fgdtt', '124579', '2016-05-13 01:23:36', '', '', 'False', 'ANDROID', 0, '', '', '2016-05-13 01:23:36', 'Active', 0, 'Manual'),
(300, '', '', 'wilsomeg', '8d8df2e6a68b9f81ee9c63d1aabdef4b', 'Guest', 'melinda_wilson@me.com', 'Nuclear Medicine Technologist', '5 Thirteenth Ave Kedron QLD 4031', '0421336713', '2016-05-17 01:01:59', '', '', 'False', '', 0, 'Approved', '', '2016-05-17 03:03:51', 'Active', 0, 'Normal'),
(304, '', '', 'emmasnow', '671d886c4609a61186cea0d04ce38d55', 'Guest', 'emmasnow0@gmail.com', 'nuclear medicine technologist ', '', '', '2016-05-17 02:37:33', '', '', 'False', '', 0, 'Approved', '', '2016-05-17 02:37:33', 'Active', 0, 'Normal'),
(305, '', '', 'graylo', 'b855630b3269332ca93df42183122d1c', 'Guest', 'graylo88@gmail.com', 'nuclear medicine technologist', '', '', '2016-05-17 02:40:44', '', '', 'False', '', 0, 'Approved', '', '2016-05-17 02:40:44', 'Active', 0, 'Normal'),
(306, '', '', 'mcgavins', 'd49a86d2cee83995b7af16cd7bad478a', 'Guest', 'suzanne.mcgavin@health.qld.gov.au', 'Nuclear Medicine Scientist ', 'brisbane', '0402219629', '2016-05-17 03:05:21', '', '', 'False', 'ANDROID', 0, 'Approved', '5e27c15b988a299', '2016-05-17 03:05:21', 'Active', 0, 'Normal'),
(308, 'Ali', 'Imran', 'guetTest', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'imran@gmail.com', 'development ', 'Newcastle ', '1234', '2016-05-26 00:47:42', '', 'pictures/20160526004742.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 00:47:42', 'Active', 0, 'Normal'),
(307, 'testor', 'user', 'testor', 'd41d8cd98f00b204e9800998ecf8427e', 'Guest', 'user@gmail.com ', 'testing ', 'Newcastle ', '11111111111', '2016-05-25 02:58:16', '', '', 'False', 'ANDROID', 0, '', '', '2016-05-25 02:58:16', 'Active', 0, 'Manual'),
(328, 'abduall', 'Waseem', 'abd123', '827ccb0eea8a706c4c34a16891f84e7b', 'Organizer', 'abd@gmail.com', 'Student', 'IIUI', '876182', '2017-08-01 21:36:47', '', 'pictures/fashion1.jpg', 'False', '', 1, 'Approved', '', '2017-08-01 21:36:47', 'Active', 0, 'Normal'),
(329, 'Ali', 'Malik', 'aaa', '827ccb0eea8a706c4c34a16891f84e7b', 'Organizer', 'test1', 'khk', 'bkhkjh', '7687688', '2017-08-02 22:32:26', '', 'pictures/dc5d5eecbe8c4f1875632eceab196095.jpg', 'False', '', 1, '', '', '2017-08-02 22:32:26', 'Active', 0, 'Normal'),
(322, 'bhdd', 'chxft', 'heloguest', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'Ghfhhff@vhf.com', 'jgghc', 'chvdgv', '1363643', '2016-05-26 08:14:25', '', 'pictures/20160526081425.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 08:14:25', 'Active', 0, 'Normal'),
(310, 'fffff', 'rrrr', 'Farhan', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'farhan@ghost.com', 'fff', 'gggg', '4444', '2016-05-26 05:23:36', '', '', 'False', '', 0, 'Approved', '', '2016-05-26 05:23:36', 'Active', 0, 'Normal'),
(311, 'wxcxx', 'rrrr', 'waleed', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'waleed@Gujarat.bbb', 'the ggg', 'ggggg', '4444', '2016-05-26 05:31:54', '', 'pictures/20160526053154.png', 'False', '', 0, 'Approved', '', '2016-05-26 05:31:54', 'Active', 0, 'Normal'),
(312, 'ddddd', 'rrrr', 'rrrr', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'rrrr@tyy.vb', 'rrrr', 'fff', '4444', '2016-05-26 05:39:20', '', 'pictures/20160526053920.png', 'False', '', 0, 'Approved', '', '2016-05-26 05:39:20', 'Active', 0, 'Normal'),
(313, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '2016-05-26 05:41:07', '', '', 'False', '', 0, 'Approved', '', '2016-05-26 05:41:07', 'Active', 0, 'Normal'),
(314, 'rrrr', 'dddd', 'tiff', 'b59c67bf196a4758191e42f76670ceba', 'Guest', 'rrrr@ggg.hhg', 'ffff', 'rrrr', 'ffff', '2016-05-26 06:01:07', '', 'pictures/20160526060106.png', 'False', 'IOS', 0, 'Approved', '', '2016-05-26 06:01:07', 'Active', 0, 'Normal'),
(315, 'ggggg', 'hhhhh', 'fffff', 'b59c67bf196a4758191e42f76670ceba', 'Guest', 'fffff@yygg.vvg', 'ffff', 'cxxxx', 'the ffff', '2016-05-26 06:09:48', '', 'pictures/20160526060948.png', 'False', 'IOS', 0, 'Approved', '', '2016-05-26 06:14:21', 'Active', 0, 'Normal'),
(316, 'aaaa', 'bbbb', 'aaaa', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'aabbb@ggg.vv', 'rrrr', 'dddddd', 'fffff', '2016-05-26 06:31:10', '', 'pictures/20160526063110.png', 'False', 'IOS', 1, 'Approved', '', '2016-05-26 06:53:30', 'Active', 0, 'Normal'),
(317, 'fgjhf', 'chfgg', 'guestg', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'gfgvfg@ghg.com', 'asdfg', 'asdfgh', '1234554321', '2016-05-26 06:54:31', '', 'pictures/20160526065431.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 06:54:31', 'Active', 0, 'Normal'),
(318, 'asd', 'fgh', 'guest77', '827ccb0eea8a706c4c34a16891f84e7b', 'Guest', 'aaaa@gmail.com', 'tea maker', 'New Zealand', '55555555', '2016-05-26 06:59:09', '', '', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 06:59:09', 'Active', 0, 'Normal'),
(319, 'test', 'guest', 'guest19', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'test19@gmail.com', 'tester', 'Newcastle', '12345', '2016-05-26 07:04:12', '', 'pictures/20160526070412.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 07:10:27', 'Active', 0, 'Normal'),
(320, 'asddas', 'dgxfd', 'guest20', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'asaad@gmail.com', 'tester', 'New Zealand', '56776534', '2016-05-26 07:12:23', '', 'pictures/20160526071223.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 07:12:23', 'Active', 0, 'Normal'),
(321, 'djfgg', 'fhfg', 'guest00', '81dc9bdb52d04dc20036dbd8313ed055', 'Guest', 'guest00@gmail.com', 'tester', 'New Zealand', '123456', '2016-05-26 07:18:25', '', 'pictures/20160526071825.png', 'False', 'ANDROID', 0, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 07:18:25', 'Active', 0, 'Normal'),
(323, 'hjgg', 'ghfd', 'heloOrg', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'rdf@gmail.com', 'ghdgf', 'ghffdhf', '567865', '2016-05-26 08:16:03', '', 'pictures/20160526081603.png', 'False', 'ANDROID', 1, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-26 08:19:17', 'Active', 0, 'Normal'),
(324, 'Babar', 'Ali', 'Babar', 'b59c67bf196a4758191e42f76670ceba', 'Guest', 'babar@test.com', 'test', 'testing', '33333', '2016-05-27 00:37:43', '', 'pictures/20160527003742.png', 'False', 'IOS', 0, 'Approved', '111111221314324', '2016-05-27 00:37:43', 'Active', 0, 'Normal'),
(325, 'new', 'org', 'orgNew', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'orgg@gmail.com', 'tester', 'New Zealand', '1234567', '2016-05-27 08:34:41', '', 'pictures/20160527073441.png', 'False', 'ANDROID', 1, 'Approved', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-27 09:07:02', 'Active', 0, 'Normal'),
(326, 'org', 'new1', 'orgNew1', '81dc9bdb52d04dc20036dbd8313ed055', 'Organizer', 'org2@gmail.com', 'testing', 'New Zealand', '5555555', '2016-05-27 08:39:53', '', 'pictures/20160527073953.png', 'False', '', 1, '', 'APA91bHD7mkOtB7BGI5LWNSt8Jz68klBRQcIU83Adaxof1kw68BCWVltrYwH701dk0PwhEZDcAcA7U86jHrzcW3usTsnMkM9pGKQvJBJSp496mUd5hj7pH_3KxDRwyLhSPYohWhEiJmG', '2016-05-27 08:40:53', 'Active', 0, 'Normal'),
(327, 'test', 'test', 'test_test1', '202cb962ac59075b964b07152d234b70', 'Organizer', 'test_test@gmail.com', 'mnh', 'lpo', '567', '2017-07-29 21:43:03', '', 'pictures/6917298220_31708a8dd5_b1.jpg', 'False', '', 1, 'Approved', '', '2017-07-29 21:43:03', 'Active', 0, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `user_organization`
--

CREATE TABLE `user_organization` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `organization_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_organization`
--

INSERT INTO `user_organization` (`id`, `user_id`, `organization_id`) VALUES
(12, 200, 3),
(11, 199, 29),
(10, 198, 36),
(9, 197, 28),
(8, 196, 1),
(7, 195, 1),
(13, 201, 20),
(14, 202, 1),
(15, 204, 3),
(16, 205, 3),
(17, 207, 2),
(18, 208, 1),
(19, 209, 1),
(20, 215, 38),
(21, 216, 2),
(22, 217, 1),
(23, 218, 1),
(24, 219, 2),
(25, 220, 2),
(26, 223, 4),
(27, 224, 1),
(28, 225, 3),
(29, 226, 2),
(30, 227, 4),
(31, 228, 4),
(32, 229, 4),
(33, 230, 4),
(34, 231, 4),
(35, 232, 40),
(36, 233, 40),
(37, 234, 2),
(38, 235, 2),
(39, 236, 4),
(40, 237, 1),
(41, 238, 42),
(42, 239, 1),
(43, 241, 1),
(44, 242, 3),
(45, 243, 2),
(46, 244, 3),
(47, 245, 3),
(48, 246, 3),
(49, 247, 3),
(50, 248, 3),
(51, 249, 3),
(52, 250, 3),
(53, 251, 3),
(54, 252, 3),
(55, 253, 3),
(56, 254, 3),
(57, 255, 3),
(58, 256, 45),
(59, 257, 45),
(60, 258, 45),
(61, 259, 45),
(62, 260, 45),
(63, 266, 0),
(64, 267, 3),
(65, 268, 3),
(66, 269, 3),
(67, 270, 3),
(68, 271, 3),
(69, 272, 3),
(70, 273, 3),
(71, 274, 3),
(72, 275, 3),
(73, 278, 3),
(74, 279, 3),
(75, 281, 3),
(76, 282, 1),
(77, 283, 1),
(78, 284, 3),
(79, 285, 3),
(80, 286, 3),
(81, 287, 3),
(82, 288, 3),
(83, 289, 3),
(84, 290, 3),
(85, 294, 3),
(86, 297, 1),
(87, 298, 3),
(88, 299, 3),
(89, 300, 3),
(90, 301, 3),
(91, 302, 3),
(92, 303, 3),
(93, 304, 3),
(94, 305, 3),
(95, 306, 3),
(96, 307, 1),
(97, 308, 1),
(98, 309, 1),
(99, 310, 3),
(100, 311, 1),
(101, 312, 38),
(102, 313, 0),
(103, 314, 36),
(104, 315, 38),
(105, 316, 2),
(106, 317, 1),
(107, 318, 1),
(108, 319, 1),
(109, 320, 1),
(110, 321, 1),
(111, 322, 1),
(112, 323, 1),
(113, 324, 1),
(114, 325, 40),
(115, 326, 40),
(116, 327, 3),
(117, 328, 3),
(118, 329, 47),
(119, 330, 44),
(120, 331, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attend`
--
ALTER TABLE `attend`
  ADD PRIMARY KEY (`attend_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_organization`
--
ALTER TABLE `event_organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_organizer`
--
ALTER TABLE `event_organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`event_type_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organization_id`),
  ADD UNIQUE KEY `organization_name` (`organization_name`),
  ADD UNIQUE KEY `organization_id` (`organization_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rID`);

--
-- Indexes for table `sponsorevent`
--
ALTER TABLE `sponsorevent`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `stallbook`
--
ALTER TABLE `stallbook`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_organization`
--
ALTER TABLE `user_organization`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attend`
--
ALTER TABLE `attend`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;
--
-- AUTO_INCREMENT for table `event_organization`
--
ALTER TABLE `event_organization`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `event_organizer`
--
ALTER TABLE `event_organizer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `event_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `organization_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sponsorevent`
--
ALTER TABLE `sponsorevent`
  MODIFY `sID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stallbook`
--
ALTER TABLE `stallbook`
  MODIFY `sID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;
--
-- AUTO_INCREMENT for table `user_organization`
--
ALTER TABLE `user_organization`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
