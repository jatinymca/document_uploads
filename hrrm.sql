-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2022 at 10:49 AM
-- Server version: 10.2.3-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `csalary` varchar(250) NOT NULL,
  `esalary` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `dojoining` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `cover_letter` text NOT NULL,
  `position_id` int(30) NOT NULL,
  `resume_path` text NOT NULL,
  `source` varchar(50) NOT NULL,
  `Comment_source` varchar(55) NOT NULL,
  `process_id` tinyint(30) NOT NULL DEFAULT 0 COMMENT '0=for review\r\n',
  `status` varchar(250) NOT NULL,
  `nextinterview` varchar(250) NOT NULL,
  `nextview` varchar(250) NOT NULL,
  `User_id` varchar(250) NOT NULL,
  `fStatus` varchar(250) NOT NULL,
  `rand_id` int(250) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Emp_details`
--

CREATE TABLE `Emp_details` (
  `id` int(11) NOT NULL,
  `umique_id` varchar(250) NOT NULL,
  `employee_name` varchar(250) NOT NULL,
  `pancard_no` varchar(250) NOT NULL,
  `aadhar_card_no` varchar(250) NOT NULL,
  `pancd` varchar(250) NOT NULL,
  `10th` varchar(250) NOT NULL,
  `12th` varchar(250) NOT NULL,
  `highest_qualification` varchar(250) NOT NULL,
  `cancel_check` varchar(250) NOT NULL,
  `pay_bank` varchar(250) NOT NULL,
  `relieving_experience` varchar(250) NOT NULL,
  `photograph` varchar(250) NOT NULL,
  `police_verification` enum('0','1') NOT NULL DEFAULT '0',
  `hr_verification` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Emp_details`
--

INSERT INTO `Emp_details` (`id`, `umique_id`, `employee_name`, `pancard_no`, `aadhar_card_no`, `pancd`, `10th`, `12th`, `highest_qualification`, `cancel_check`, `pay_bank`, `relieving_experience`, `photograph`, `police_verification`, `hr_verification`) VALUES
(2, 'jatin-51095', 'jatin', '4778478bvhcgbvcdgfd', 'adhar.jfif', 'pancard.jfif', '10.jfif', '', '12.jfif', 'check.jfif', 'bank.png', 'experience.jfif', 'photo.jfif', '0', '1'),
(3, 'jatin new-3106', 'jatin new', '4778478bvhcgbvcdgfd', 'adhar.jfif', '', '', '', '', '', '', '', '', '1', '1'),
(6, 'mohit-42386', 'mohit', 'vdsf3454356546', 'adhar.jfif', 'experience.jfif', 'ajay.png', 'siddhesh.png', 'myw3schoolsimage.jpg', 'BllodgrpRishabh.png', 'BllodgrpRishabh.png', 'wel_cleanup.png', 'wilsonport.jpg', '0', '0'),
(7, 'cdfhyj-83524', 'cdfhyj', '2445245sdadfgv', 'adhar.jfif', 'siddhesh.png', 'ajay.png', 'wel_cleanup.png', 'images-removebg-preview.png', 'download.jfif', 'experience.jfif', 'myw3schoolsimage.jpg', 'crown-template.jpg', '1', '0'),
(15, 'mohit-42386', 'mohit', '', 'photo (16).jfif', '', '', '', '', '', '', '', '', '', ''),
(14, 'mohit-42386', 'mohit', 'fgdfh56765', 'ajay.png', '', '', '', '', '', '', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `fStatus` varchar(250) NOT NULL,
  `nextinterview` varchar(250) NOT NULL,
  `nextview` varchar(250) NOT NULL,
  `interview_stime` varchar(250) NOT NULL,
  `interview_etime` text NOT NULL,
  `feedback_text` varchar(250) NOT NULL,
  `feedback_id` int(250) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `feedback_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `status`, `fStatus`, `nextinterview`, `nextview`, `interview_stime`, `interview_etime`, `feedback_text`, `feedback_id`, `userid`, `user_name`, `feedback_time`) VALUES
(6, 'TELEPHONIC ROUND', 'PASS', '2022-09-14T18:59', '', '15:57', '16:59', ' Its Excellent approved for the next round', 99364805, '25', 'Hr.Anjali Dixit', '2022-09-13 10:28:33'),
(7, 'TELEPHONIC ROUND', 'PASS', '', '', '14:30', '15:00', ' ', 32414579, '25', 'Hr.Anjali Dixit', '2022-09-14 06:23:16'),
(38, 'FINAL ROUND', 'FAIL', '', '', '', '', ' testing', 78394631, '26', 'ADMIN', '2022-09-21 10:33:05'),
(15, 'MACHINE TEST', 'FAIL', '', '', '', '', ' Rejected', 32414579, '25', 'Hr.Anjali Dixit', '2022-09-15 05:57:47'),
(39, 'FINAL ROUND', 'FAIL', '', '', '', '', ' testing', 78394631, '26', 'ADMIN', '2022-09-21 10:33:21'),
(37, 'TELEPHONIC ROUND', 'PASS', '2022-09-02T16:01', 'TELEPHONIC ROUND', '', '', ' testing', 78394631, '26', 'ADMIN', '2022-09-21 10:32:01'),
(36, 'TELEPHONIC ROUND', 'PASS', '2022-09-24T16:29', 'MACHINE TEST', '', '', 'Telephonic Round is Average.........Lack Of knowledge about APIs .\r\nArrange a machine test for Better Understanding', 68348217, '26', 'ADMIN', '2022-09-21 09:59:14'),
(32, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' Rejected', 11408379, '25', 'Hr.Anjali Dixit', '2022-09-15 09:39:50'),
(33, 'MACHINE TEST', 'FAIL', '', '', '', '', ' Rejected', 32414579, '25', 'Hr.Anjali Dixit', '2022-09-15 10:01:51'),
(34, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' Rejected', 67687628, '25', 'Hr.Anjali Dixit', '2022-09-15 11:34:01'),
(35, 'HR ROUND', 'PASS', '2022-09-21T14:30', 'TELEPHONIC ROUND', '', '', ' ', 68348217, '25', 'Hr.Anjali Dixit', '2022-09-21 07:49:51'),
(40, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' testing', 78394631, '26', 'ADMIN', '2022-09-21 10:36:05'),
(41, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' testing', 78394631, '26', 'ADMIN', '2022-09-21 10:37:38'),
(42, 'FINAL ROUND', 'FAIL', '', '', '', '', ' fail', 78394631, '26', 'ADMIN', '2022-09-21 10:38:07'),
(43, 'TELEPHONIC ROUND', 'PASS', '2022-09-23T16:00', 'MACHINE TEST', '', '', ' ', 68348217, '25', 'Hr.Anjali Dixit', '2022-09-23 07:31:35'),
(44, 'HR ROUND', 'PASS', '2022-09-23T17:00', 'TELEPHONIC ROUND', '', '', ' Average', 62404896, '25', 'Hr.Anjali Dixit', '2022-09-23 11:20:34'),
(45, 'HR ROUND', 'PASS', '2022-09-23T18:00', 'TELEPHONIC ROUND', '', '', 'Good', 44057089, '25', 'Hr.Anjali Dixit', '2022-09-23 11:24:59'),
(46, 'TELEPHONIC ROUND', 'PASS', '2022-09-24T16:00', 'MACHINE TEST', '', '', ' Average', 68348217, '25', 'Hr.Anjali Dixit', '2022-09-23 11:26:01'),
(47, 'HR ROUND', 'PASS', '2022-09-24T14:00', 'TELEPHONIC ROUND', '', '', ' Having an offer of 4 LPA', 39774476, '25', 'Hr.Anjali Dixit', '2022-09-23 11:28:39'),
(48, 'TELEPHONIC ROUND', 'PASS', '2022-09-30T17:30', 'MACHINE TEST', '', '', ' Web Developer only(PHP) ,Lack of Knowledge about(Javascript,Jquery,Ajax), API (No),', 62404896, '28', 'Er.Rishabh Mishra', '2022-09-23 12:03:28'),
(50, 'HR ROUND', 'PASS', '2022-09-24T17:00', 'TELEPHONIC ROUND', '', '', ' good\r\n', 59396390, '25', 'Hr.Anjali Dixit', '2022-09-24 09:08:45'),
(51, 'HR ROUND', 'PASS', '2022-09-24T15:30', 'TELEPHONIC ROUND', '', '', ' Average', 47250810, '25', 'Hr.Anjali Dixit', '2022-09-24 09:40:44'),
(52, 'TELEPHONIC ROUND', 'PASS', '2022-09-19T15:57', 'MACHINE TEST', '', '', ' Average,API(No),InnerJoins(No),Array_merge(No),Array_combine(No),', 47250810, '28', 'Er.Rishabh Mishra', '2022-09-24 10:29:20'),
(53, 'TELEPHONIC ROUND', 'PASS', '2022-09-26T16:01', 'MACHINE TEST', '', '', ' Average,API(No),Inner-Joins(No), Lack of knowledge About javascript & Jquery', 39774476, '28', 'Er.Rishabh Mishra', '2022-09-24 10:31:40'),
(54, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' Lack of knowledge', 59396390, '28', 'Er.Rishabh Mishra', '2022-09-24 12:00:58'),
(55, 'TELEPHONIC ROUND', 'PASS', '2022-09-26T18:34', 'MACHINE TEST', '', '', '  Average, Arrange a machine test for better understanding.', 44057089, '28', 'Er.Rishabh Mishra', '2022-09-24 13:05:27'),
(57, 'TELEPHONIC ROUND', 'PASS', '2022-09-27T16:00', 'MACHINE TEST', '', '', ' good', 44057089, '25', 'Hr.Anjali Dixit', '2022-09-26 09:55:53'),
(58, 'TELEPHONIC ROUND', 'PASS', '2022-09-27T17:00', 'MACHINE TEST', '', '', ' good', 47250810, '25', 'Hr.Anjali Dixit', '2022-09-26 12:20:34'),
(59, 'TELEPHONIC ROUND', 'PASS', '2022-09-27T16:00', 'MACHINE TEST', '', '', ' good', 68348217, '25', 'Hr.Anjali Dixit', '2022-09-26 12:21:39'),
(60, 'MACHINE TEST', 'FAIL', '', '', '', '', ' He is denied to give online machine round because he is in office.', 44057089, '28', 'Er.Rishabh Mishra', '2022-09-27 11:54:29'),
(61, 'MACHINE TEST', 'FAIL', '', '', '', '', ' ', 47250810, '28', 'Er.Rishabh Mishra', '2022-09-27 12:32:22'),
(62, 'MACHINE TEST', 'FAIL', '', '', '', '', 'He closed the remote and denied to complete the task.', 47250810, '28', 'Er.Rishabh Mishra', '2022-09-27 12:33:17'),
(63, 'HR ROUND', 'PASS', '2022-09-28T17:00', 'TELEPHONIC ROUND', '', '', ' Average', 63907706, '25', 'Hr.Anjali Dixit', '2022-09-28 11:26:25'),
(64, 'HR ROUND', 'PASS', '2022-09-29T14:00', 'TELEPHONIC ROUND', '', '', 'Having basic knowledge', 51200517, '25', 'Hr.Anjali Dixit', '2022-09-29 07:12:20'),
(65, 'HR ROUND', 'PASS', '2022-09-29T17:30', 'TELEPHONIC ROUND', '', '', 'Having good knowledge and 3+ yrs of experience in Core PHP', 42704200, '25', 'Hr.Anjali Dixit', '2022-09-29 07:26:53'),
(66, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' Lack of Basic Knowledge,', 51200517, '28', 'Er.Rishabh Mishra', '2022-09-30 11:52:04'),
(67, 'TELEPHONIC ROUND', 'PASS', '2022-10-07T17:00', 'MACHINE TEST', '', '', ' Good Candidate', 44057089, '25', 'Hr.Anjali Dixit', '2022-10-07 05:41:48'),
(68, 'HR ROUND', 'PASS', '2022-10-07T14:50', 'MACHINE TEST', '', '', 'TESTING', 57690481, '26', 'ADMIN', '2022-10-07 09:20:49'),
(69, 'HR ROUND', 'PASS', '2022-10-07T16:00', 'TELEPHONIC ROUND', '', '', ' Good candidate, having 3+ years of experience in laravel', 53298467, '25', 'Hr.Anjali Dixit', '2022-10-07 09:59:34'),
(70, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' Rejected,Least knowledge on (APIs ,Joins,array)', 53298467, '28', 'Er.Rishabh Mishra', '2022-10-07 11:13:11'),
(71, 'HR ROUND', 'PASS', '2022-10-11T14:30', 'TELEPHONIC ROUND', '', '', 'having 1.5 years of experience in Laravel ', 88360682, '25', 'Hr.Anjali Dixit', '2022-10-10 10:12:36'),
(72, 'TELEPHONIC ROUND', 'PASS', '', 'MACHINE TEST', '', '', ' Arrange Machine test for better understanding .', 88360682, '28', 'Er.Rishabh Mishra', '2022-10-11 11:00:08'),
(73, 'HR ROUND', 'PASS', '2022-10-11T17:30', 'TELEPHONIC ROUND', '', '', ' Average ', 33137403, '25', 'Hr.Anjali Dixit', '2022-10-11 11:28:48'),
(74, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', '  Lack of knowledge about(APIs,Array,Str_replace,Print_r,Joins(MYSQL))', 33137403, '28', 'Er.Rishabh Mishra', '2022-10-11 12:20:00'),
(75, 'HR ROUND', 'PASS', '', 'TELEPHONIC ROUND', '', '', ' ', 33953620, '25', 'Hr.Anjali Dixit', '2022-10-12 07:32:43'),
(76, 'HR ROUND', 'FAIL', '', '', '', '', ' ', 58460928, '25', 'Hr.Anjali Dixit', '2022-10-12 09:45:04'),
(77, 'HR ROUND', 'FAIL', '', '', '', '', ' Lack of Knowledge', 71476048, '25', 'Hr.Anjali Dixit', '2022-10-12 09:46:00'),
(78, 'TELEPHONIC ROUND', 'PASS', '2022-10-14T18:35', 'MACHINE TEST', '', '', ' good Knowledge ', 88360682, '25', 'Hr.Anjali Dixit', '2022-10-13 07:50:53'),
(79, 'HR ROUND', 'PASS', '2022-10-15T17:00', 'TELEPHONIC ROUND', '', '', ' Average', 91347193, '25', 'Hr.Anjali Dixit', '2022-10-15 09:46:54'),
(80, 'TELEPHONIC ROUND', 'PASS', '2022-10-15T18:35', 'MACHINE TEST', '', '', 'Having good knowledge and overall good candidate', 88360682, '25', 'Hr.Anjali Dixit', '2022-10-15 09:49:44'),
(81, 'OUT OF RANGE', 'FAIL', '', '', '', '', ' Package and location constraint', 15461178, '25', 'Hr.Anjali Dixit', '2022-10-17 10:03:00'),
(82, 'OUT OF RANGE', 'FAIL', '', '', '', '', 'High Expectation\r\n', 37745232, '25', 'Hr.Anjali Dixit', '2022-10-17 10:10:09'),
(83, 'OUT OF RANGE', 'FAIL', '', '', '', '', ' not looking for change\r\n', 43026141, '25', 'Hr.Anjali Dixit', '2022-10-17 10:19:12'),
(84, 'HR ROUND', 'FAIL', '', '', '', '', ' Lack of confidence', 55928074, '25', 'Hr.Anjali Dixit', '2022-10-17 10:28:16'),
(85, 'TELEPHONIC ROUND', 'PASS', '2022-10-18T16:09', 'TELEPHONIC ROUND', '', '', ' Having good knowledge', 45599794, '25', 'Hr.Anjali Dixit', '2022-10-17 10:39:38'),
(86, 'OUT OF RANGE', 'FAIL', '', '', '', '', ' not looking for change', 56935558, '25', 'Hr.Anjali Dixit', '2022-10-17 10:43:31'),
(87, 'HR ROUND', 'PASS', '2022-10-18T16:56', 'TELEPHONIC ROUND', '', '', 'Having good knowledge', 21848870, '25', 'Hr.Anjali Dixit', '2022-10-17 11:27:05'),
(88, 'OUT OF RANGE', 'FAIL', '', '', '', '', ' Package issue\r\n', 42452492, '25', 'Hr.Anjali Dixit', '2022-10-17 11:33:36'),
(89, 'OUT OF RANGE', 'FAIL', '', '', '', '', ' looking for Cloud Engineer Profile\r\n', 31220038, '25', 'Hr.Anjali Dixit', '2022-10-18 09:55:41'),
(90, 'HR ROUND', 'FAIL', '', 'OUT OF RANGE', '', '', ' Looking for WFH\r\n', 29273135, '25', 'Hr.Anjali Dixit', '2022-10-18 10:01:42'),
(91, 'HR ROUND', 'FAIL', '', '', '', '', ' package issue', 98568809, '25', 'Hr.Anjali Dixit', '2022-10-18 10:20:29'),
(92, 'HR ROUND', 'PASS', '', 'TELEPHONIC ROUND', '', '', ' will update\r\n', 35369976, '25', 'Hr.Anjali Dixit', '2022-10-18 10:29:22'),
(93, 'HR ROUND', 'PASS', '', 'TELEPHONIC ROUND', '', '', ' will update\r\n', 99998962, '25', 'Hr.Anjali Dixit', '2022-10-18 10:41:14'),
(94, 'HR ROUND', 'FAIL', '', '', '', '', ' not looking for change', 99938746, '25', 'Hr.Anjali Dixit', '2022-10-18 11:39:30'),
(95, 'HR ROUND', 'PASS', '2022-10-20T11:30', 'Face to Face', '', '', ' Fresher, Having experience of tele calling', 59135580, '25', 'Hr.Anjali Dixit', '2022-10-18 12:13:48'),
(96, 'HR ROUND', 'FAIL', '', '', '', '', ' Location Constraint Looking for Pune or Nasik\r\n', 88015766, '25', 'Hr.Anjali Dixit', '2022-10-19 05:29:32'),
(97, 'HR ROUND', 'FAIL', '', '', '', '', ' looking for Pune or Bangalore', 36211907, '25', 'Hr.Anjali Dixit', '2022-10-19 05:37:38'),
(98, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' Lack of knowledge for Authenticated APIs,Joins, MD-arrays', 91347193, '28', 'Er.Rishabh Mishra', '2022-10-19 08:47:33'),
(99, 'HR ROUND', 'FAIL', '', '', '', '', ' Not getting any call', 90573934, '25', 'Hr.Anjali Dixit', '2022-10-22 06:29:24'),
(100, 'HR ROUND', 'FAIL', '', '', '', '', ' will call after deepawali', 21784292, '25', 'Hr.Anjali Dixit', '2022-10-22 10:03:19'),
(101, 'HR ROUND', 'FAIL', '', '', '', '', ' not receiving any call', 33450499, '25', 'Hr.Anjali Dixit', '2022-10-22 10:03:51'),
(102, 'Face to Face', 'PASS', '2022-10-28T11:42', 'FINAL ROUND', '', '', 'waiting for notice period update\r\n', 82785111, '25', 'Hr.Anjali Dixit', '2022-10-22 10:13:18'),
(103, 'OUT OF RANGE', 'FAIL', '', '', '', '', ' working as freelancer and looking for immediate joining in permanent job', 87839145, '25', 'Hr.Anjali Dixit', '2022-10-22 10:39:16'),
(104, 'HR ROUND', 'PASS', '', 'TELEPHONIC ROUND', '', '', ' good candidate but location is Nashik and having 2 months notice period not negotiated', 60573319, '25', 'Hr.Anjali Dixit', '2022-10-27 06:35:30'),
(105, 'HR ROUND', 'PASS', '2022-10-28T15:30', 'TELEPHONIC ROUND', '', '', ' having overall 4 yrs of experience in laravel and wordpress', 38945720, '25', 'Hr.Anjali Dixit', '2022-10-27 07:19:43'),
(106, 'HR ROUND', 'PASS', '2022-10-27T15:00', 'TELEPHONIC ROUND', '', '', ' having 2.5 months of experience in core php ', 52598639, '25', 'Hr.Anjali Dixit', '2022-10-27 09:07:27'),
(107, 'TELEPHONIC ROUND', 'PASS', '', 'MACHINE TEST', '', '', ' Average ...! Kindly arrange Machine Test for Better Understanding', 52598639, '28', 'Er.Rishabh Mishra', '2022-10-27 09:56:17'),
(108, 'TELEPHONIC ROUND', 'PASS', '', 'MACHINE TEST', '', '', 'Mainly worked on wordpress further will be clarified with machine test\r\nso, schedule machine test', 38945720, '26', 'ADMIN', '2022-10-28 08:45:51'),
(109, 'HR ROUND', 'FAIL', '', '', '', '', ' Package issue', 57761624, '25', 'Hr.Anjali Dixit', '2022-10-28 11:05:10'),
(110, 'HR ROUND', 'FAIL', '', '', '', '', ' Looking for wfh\r\n', 54707268, '25', 'Hr.Anjali Dixit', '2022-10-29 04:48:27'),
(111, 'TELEPHONIC ROUND', 'PASS', '2022-10-29T17:30', 'MACHINE TEST', '', '', ' having 2 yrs of knowledge in Php/laravel and other in wordpress.', 38945720, '25', 'Hr.Anjali Dixit', '2022-10-29 05:57:46'),
(112, 'HR ROUND', 'FAIL', '', '', '', '', ' looking for wfh', 17045437, '25', 'Hr.Anjali Dixit', '2022-10-29 08:37:05'),
(113, 'HR ROUND', 'PASS', '', 'Face to Face', '', '', ' having expertise in linux \r\n', 61738780, '25', 'Hr.Anjali Dixit', '2022-10-29 09:54:45'),
(114, 'HR ROUND', 'FAIL', '', '', '', '', ' Not looking for job', 28693460, '25', 'Hr.Anjali Dixit', '2022-10-29 10:34:48'),
(115, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' rejected by manikant sir', 21848870, '25', 'Hr.Anjali Dixit', '2022-10-29 10:56:38'),
(116, 'MACHINE TEST', 'FAIL', '', '', '', '', ' Task not done properly', 38945720, '26', 'ADMIN', '2022-10-29 13:12:34'),
(117, 'HR ROUND', 'FAIL', '', '', '', '', ' Looking for wfh\r\n', 39794253, '25', 'Hr.Anjali Dixit', '2022-11-03 05:58:02'),
(118, 'HR ROUND', 'PASS', '2022-11-10T17:01', 'TELEPHONIC ROUND', '', '', ' Good candidate....having 14 months of experience', 86637303, '25', 'Hr.Anjali Dixit', '2022-11-10 08:39:21'),
(119, 'HIRED', 'Hierd', '', '', '', '', ' will join from 11-11-22', 84216773, '25', 'Hr.Anjali Dixit', '2022-11-10 08:51:40'),
(120, 'FACE TO FACE', 'FAIL', '', '', '', '', ' Rejected due to less confidence', 16292801, '25', 'Hr.Anjali Dixit', '2022-11-10 09:04:45'),
(121, 'TELEPHONIC ROUND', 'FAIL', '', '', '', '', ' Looking for 5days working', 75592842, '25', 'Hr.Anjali Dixit', '2022-11-10 09:30:26'),
(122, 'HR ROUND', 'PASS', '2022-11-14T16:00', 'TELEPHONIC ROUND', '', '', ' having 5 yr experience in core php', 59064531, '25', 'Hr.Anjali Dixit', '2022-11-14 06:11:33'),
(123, 'HR ROUND', 'PASS', '2022-11-14T12:00', 'TELEPHONIC ROUND', '', '', ' Having good knowledge....', 86637303, '25', 'Hr.Anjali Dixit', '2022-11-14 06:27:01'),
(124, 'TELEPHONIC ROUND', 'PASS', '', 'MACHINE TEST', '', '', 'Good Knowledge....Arrange machinetest or WALK-IN-Interview for better understanding.', 86637303, '28', 'Er.Rishabh Mishra', '2022-11-14 06:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `manage_application`
--

CREATE TABLE `manage_application` (
  `id` int(11) NOT NULL,
  `aadhar_card` int(40) NOT NULL,
  `employee_name` varchar(250) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `employee_location` varchar(250) NOT NULL,
  `reference_name_1` varchar(100) NOT NULL,
  `reference_n0_1` varchar(100) NOT NULL,
  `reference_name_2` varchar(250) NOT NULL,
  `reference_n0_2` varchar(100) NOT NULL,
  `umique_id` varchar(250) NOT NULL,
  `User_id` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_application`
--

INSERT INTO `manage_application` (`id`, `aadhar_card`, `employee_name`, `contact_no`, `employee_location`, `reference_name_1`, `reference_n0_1`, `reference_name_2`, `reference_n0_2`, `umique_id`, `User_id`) VALUES
(9, 555555555, 'mohit', '7295802669', 'Citi Collection', 'mohit', 'tiwari', 'jatin', 'sharma', 'mohit-42386', ''),
(8, 1236544, 'jatin', '9810649701', '', '', '', '', '', 'jatin-12710', ''),
(7, 7, 'cdfhyj', '', 'DI Management', 'fyhj', '546456', 'fghfghfg', '654645', 'cdfhyj-83524', ''),
(5, 1234, 'jatin new', '', 'Citi Collection', '', '', '', '', 'jatin new-3106', ''),
(6, 656565, 'jatin', '9810619701', 'DI Management', 'mohit', '1111111111', 'rishabh', '222222222', 'jatin-51095', '');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_status`
--

CREATE TABLE `recruitment_status` (
  `id` int(30) NOT NULL,
  `status_label` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruitment_status`
--

INSERT INTO `recruitment_status` (`id`, `status_label`, `status`) VALUES
(18, 'TELEPHONIC ROUND', 1),
(19, 'MACHINE TEST', 1),
(20, 'FINAL ROUND', 1),
(21, 'HIRED', 1),
(22, 'OUT OF RANGE', 1),
(23, 'MISBEHAVE', 1),
(24, 'HR ROUND', 1),
(25, 'Face to Face', 0),
(26, 'FACE TO FACE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Vert-age', 'vert-age@gmail.com', '+11402985635', '1662555960_Screenshot (1).png', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;ABOUT US&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/b&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;h2 style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;Where does it come from?&lt;/h2&gt;&lt;p style=&quot;text-align: center; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400;&quot;&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.&lt;/p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `groupname` varchar(250) NOT NULL,
  `g_id` varchar(250) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `groupname`, `g_id`, `type`) VALUES
(25, 0, 'Hr.Anjali Dixit', '', '', 'HrAnjali', 'hrxspl@123', 'group3,Group1', '', 2),
(26, 0, 'ADMIN', '', '', 'admin', 'xspl@123', '', '', 1),
(27, 0, 'test', '', '', 'test', 'test', 'group3', '', 2),
(28, 0, 'Er.Rishabh Mishra', '', '', 'Er.Rishabh Mishra', 'Rishabh@123', 'Group1', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `groupname` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `groupname`, `status`) VALUES
(46, 'Group5', ''),
(48, 'group3', ''),
(45, 'Group1', '');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(30) NOT NULL,
  `position` varchar(200) NOT NULL,
  `availability` int(30) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Emp_details`
--
ALTER TABLE `Emp_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manage_application`
--
ALTER TABLE `manage_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment_status`
--
ALTER TABLE `recruitment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Emp_details`
--
ALTER TABLE `Emp_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `manage_application`
--
ALTER TABLE `manage_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recruitment_status`
--
ALTER TABLE `recruitment_status`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
