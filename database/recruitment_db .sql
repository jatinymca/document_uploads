-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2022 at 12:41 PM
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
-- Database: `recruitment_db`
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
  `process_id` tinyint(30) NOT NULL DEFAULT 0 COMMENT '0=for review\r\n',
  `status` varchar(250) NOT NULL,
  `nextinterview` varchar(250) NOT NULL,
  `nextview` varchar(250) NOT NULL,
  `User_id` varchar(250) NOT NULL,
  `fStatus` varchar(250) NOT NULL,
  `rand_id` int(250) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `contact`, `csalary`, `esalary`, `experience`, `dojoining`, `address`, `cover_letter`, `position_id`, `resume_path`, `process_id`, `status`, `nextinterview`, `nextview`, `User_id`, `fStatus`, `rand_id`, `date_created`) VALUES
(10, 'Ishant', '', 'Kumar', 'Male', 'ishantitechnology@gmail.com', '9991837445', '35K', '45K', '3-5 Years', '15 Days', 'Gurgaon,Haryana', '', 44, '1663064820_Naukri_IshantKumar[3y_6m].doc', 0, 'MACHINE TEST', '', '', '25', 'FAIL', 32414579, '2022-09-13 15:57:03'),
(27, 'Md', 'Jubair', 'Ahmad', 'Male', 'mdjubair190@gmail.com', '8766234928', '28k', '32k', '1.5 Year', '15 Days', 'Mayur Vihar Phase-I', '', 45, '1663234740_Naukri_MdjubairAhmad[2y_6m].pdf', 0, 'TELEPHONIC ROUND', '', '', '25', 'FAIL', 11408379, '2022-09-15 15:09:23'),
(31, 'Rajkumar ', '', 'Gupta', 'Male', 'graj3617@gmail.com', '7803941462', '3 LPA', '4 LPA', '1-3 Year', '10 Days', 'B-Block  -sec 26  Noida (u.p.)', '', 44, '1663241580_Naukri_RajkumarGupta[3y_6m].docx', 0, 'TELEPHONIC ROUND', '', '', '25', 'FAIL', 67687628, '2022-09-15 17:03:11'),
(32, 'Naman', '', 'Hooda', 'Female', 'namanhooda86@gmail.com', '8059000064', '35K', '45K', '1-3 Year', 'Immediate', 'Jhajjar, Haryana', '', 45, '1663746420_Naukri_NamanHooda[2y_6m].pdf', 0, 'TELEPHONIC ROUND', '2022-09-27T16:00', 'MACHINE TEST', '25', 'PASS', 68348217, '2022-09-21 13:17:14'),
(33, 'Priyanka', '', 'Yadav', 'Female', 'priyay88086@gmail.com', '8707359181', '25k', '35k', '3-5 Years', 'Immediate', 'Mau, Lucknow', '', 44, '1663931940_Naukri_PriyankaYadav[3y_8m].pdf', 0, 'TELEPHONIC ROUND', '2022-09-24T18:42', 'MACHINE TEST', '25', 'PASS', 62404896, '2022-09-23 16:49:30'),
(34, 'Mahipal', '', 'Singh', 'Male', 'mahipalsingh093@gmail.com', '8126551812', '2.40 LPA', '3.60 LPA', '1-3 Year', '30 Days', 'Noida', '', 45, '1663932180_Mahipal Singh.pdf', 0, 'MACHINE TEST', '', '', '25', 'FAIL', 44057089, '2022-09-23 16:53:37'),
(35, 'Aman', '', 'Rawat', 'Male', 'Amanrawat429@gmail.com', '9599250832', '2.50 LPA', '5 LPA', '1-3 Year', '30 Days', 'Noida', '', 45, '1663932420_Aman Rawat.pdf', 0, 'TELEPHONIC ROUND', '2022-09-26T16:01', 'MACHINE TEST', '25', 'PASS', 39774476, '2022-09-23 16:57:46'),
(36, 'Nishant', '', 'Kumar', 'Male', 'nishantkumartondak@gmail.com', '9899056872', '45k', '60k', '3-5 Years', '15 Days', 'Delhi', '', 45, '1664010420_Resume (2).pdf', 0, 'TELEPHONIC ROUND', '', '', '25', 'FAIL', 59396390, '2022-09-24 14:37:24'),
(37, 'Chandan', '', 'Sharma', 'Male', 'dicsmail0575@gmail.com', '7217684233', '30 ctc', '35 ctc', '1.5 Year', '30 Days', 'Faridabad', '', 45, '1664012400_chandan new cv-converted.pdf', 0, 'MACHINE TEST', '', '', '25', 'FAIL', 47250810, '2022-09-24 15:10:06');

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
(62, 'MACHINE TEST', 'FAIL', '', '', '', '', 'He closed the remote and denied to complete the task.', 47250810, '28', 'Er.Rishabh Mishra', '2022-09-27 12:33:17');

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
(24, 'HR ROUND', 1);

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
(25, 0, 'Hr.Anjali Dixit', '', '', 'HrAnjali', 'hrxspl@123', 'Group1', '', 2),
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
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `position`, `availability`, `description`, `status`, `date_created`) VALUES
(44, 'PHP Developer', 30, '&lt;p class=&quot;dang-inner-html&quot; style=&quot;padding: 0px; margin-top: 10px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word; line-height: 18px;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;b style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Title:&lt;/b&gt;&amp;nbsp;PHP Developer - Freshers can apply&lt;/p&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;b style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Exp:&lt;/b&gt;&amp;nbsp;0 to 2 yrs - 2 Position&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;2 to 5 Yrs - 1 Position&lt;/p&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;b style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Location:&lt;/b&gt;&amp;nbsp;Vadodara&lt;/p&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;b style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Responsibilities:&lt;/b&gt;&lt;/p&gt;&lt;ul style=&quot;padding: 0px 0px 0px 1em; margin: 1em 0px 1em 1em; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Conducting analysis of website and application requirements.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Troubleshoot, test and maintain the core product software and databases to ensure strong optimization and functionality.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Contribute in all phases of the development life cycle.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Create documentation for software created.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Utilize source debuggers and write or modify client software.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Produce results effectively and within the deadlines set.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Updating and altering application features to enhance performance.&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;b style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Requirements:&lt;/b&gt;&lt;/p&gt;&lt;ul style=&quot;padding: 0px 0px 0px 1em; margin: 1em 0px 1em 1em; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;B.E/B.Tech or MCA in computer or IT&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Excellent knowledge of object-oriented programming.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Strong knowledge of PHP web frameworks such as Laravel, CodeIgnitor, Yii, etc&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Understanding the fully synchronous behavior of PHP&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Understanding of MVC design patterns&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Understanding of client/server architecture&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Integration of multiple data sources and databases into one system&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Familiarity with limitations of PHP as a platform and its workarounds&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Familiarity with SQL databases and their declarative query languages&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Basic knowledge about JavaScript and jQuery&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Good Communication skills&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Creative ability to produce effective solutions to client problems.&lt;/li&gt;&lt;li style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Good team player that is enthusiastic about delivering results.&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;b style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Interested candidates please send your resume.&lt;/b&gt;&lt;/p&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;b style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;About Company:&lt;/b&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;Adroit Infosol (https://adroitinfosol.com), is a growing IT services company located in Vadodara. We are providing various IT services to overseas clients in the area of mobile and web application development.&lt;/p&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;p style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Thank you!&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;Kalpana Patel&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;https://adroitinfosol.com&lt;/p&gt;&lt;br style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;other-details&quot; style=&quot;padding: 0px; margin-top: 20px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 16px; vertical-align: baseline; overflow-wrap: break-word; color: rgb(0, 0, 0);&quot;&gt;&lt;p class=&quot;details&quot; style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 16px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;padding: 0px; margin: 0px 9px 0px 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: top; overflow-wrap: break-word; color: rgb(153, 153, 153); width: 110px;&quot;&gt;Role&lt;/label&gt;&lt;span style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;&lt;a href=&quot;https://www.naukri.com/it-services-consulting-jobs&quot; target=&quot;_blank&quot; style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word; text-decoration-line: none; cursor: pointer;&quot;&gt;IT Services &amp;amp; Consulting&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 16px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;padding: 0px; margin: 0px 9px 0px 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: top; overflow-wrap: break-word; color: rgb(153, 153, 153); width: 110px;&quot;&gt;Functional Area&lt;/label&gt;&lt;span style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;&lt;a href=&quot;https://www.naukri.com/engineering-software-qa-jobs&quot; target=&quot;_blank&quot; style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word; text-decoration-line: none; cursor: pointer;&quot;&gt;Engineering - Software &amp;amp; QA&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 16px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;padding: 0px; margin: 0px 9px 0px 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: top; overflow-wrap: break-word; color: rgb(153, 153, 153); width: 110px;&quot;&gt;Employment Type&lt;/label&gt;&lt;span style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;&lt;span style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Full Time, Permanent&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 16px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;padding: 0px; margin: 0px 9px 0px 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: top; overflow-wrap: break-word; color: rgb(153, 153, 153); width: 110px;&quot;&gt;Role Category&lt;/label&gt;&lt;span style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Software Development&lt;/span&gt;&lt;/p&gt;&lt;/p&gt;&lt;p class=&quot;education&quot; style=&quot;padding: 0px; margin-top: 20px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 16px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px; color: rgb(0, 0, 0);&quot;&gt;&lt;p class=&quot;heading&quot; style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Education&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;padding: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 16px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;padding: 0px; margin: 0px 9px 0px 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: top; overflow-wrap: break-word; color: rgb(153, 153, 153); width: 110px;&quot;&gt;UG :&lt;/label&gt;&lt;span class=&quot;&quot; style=&quot;padding: 0px; margin: 0px; font-family: Roboto, sans-serif; border: 0px; font-size: 13px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;B.Tech/B.E. in Computers&lt;/span&gt;&lt;/p&gt;&lt;/p&gt;', 1, '2022-09-01 18:25:14'),
(45, 'Laravel Developer', 1, '&lt;p style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Exp:&lt;/span&gt;&amp;nbsp;0 to 2 yrs - 2 Position&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;2 to 5 Yrs - 1 Position&lt;/p&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;&lt;p style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Location:&lt;/span&gt;&amp;nbsp;Vadodara&lt;/p&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;&lt;p style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Responsibilities:&lt;/span&gt;&lt;/p&gt;&lt;ul style=&quot;margin: 1em 0px 1em 1em; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px 0px 0px 1em; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Conducting analysis of website and application requirements.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Troubleshoot, test and maintain the core product software and databases to ensure strong optimization and functionality.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Contribute in all phases of the development life cycle.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Create documentation for software created.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Utilize source debuggers and write or modify client software.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Produce results effectively and within the deadlines set.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Updating and altering application features to enhance performance.&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;&lt;p style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Requirements:&lt;/span&gt;&lt;/p&gt;&lt;ul style=&quot;margin: 1em 0px 1em 1em; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px 0px 0px 1em; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;B.E/B.Tech or MCA in computer or IT&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Excellent knowledge of object-oriented programming.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Strong knowledge of PHP web frameworks such as Laravel, CodeIgnitor, Yii, etc&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Understanding the fully synchronous behavior of PHP&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Understanding of MVC design patterns&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Understanding of client/server architecture&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Integration of multiple data sources and databases into one system&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Familiarity with limitations of PHP as a platform and its workarounds&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Familiarity with SQL databases and their declarative query languages&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Basic knowledge about JavaScript and jQuery&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Good Communication skills&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Creative ability to produce effective solutions to client problems.&lt;/li&gt;&lt;li style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Good team player that is enthusiastic about delivering results.&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;&lt;p style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Interested candidates please send your resume.&lt;/span&gt;&lt;/p&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;&lt;p style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;About Company:&lt;/span&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;Adroit Infosol (https://adroitinfosol.com), is a growing IT services company located in Vadodara. We are providing various IT services to overseas clients in the area of mobile and web application development.&lt;/p&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;&lt;p style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Thank you!&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;Kalpana Patel&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;https://adroitinfosol.com&lt;/p&gt;&lt;br style=&quot;font-family: Roboto, sans-serif; padding: 0px; margin: 0px;&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;other-details&quot; style=&quot;margin-top: 20px; margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;margin: 0px 9px 0px 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: top; overflow-wrap: break-word; width: 110px;&quot;&gt;Role&lt;/label&gt;&lt;span style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;&lt;a href=&quot;https://www.naukri.com/it-services-consulting-jobs&quot; target=&quot;_blank&quot; style=&quot;color: rgb(51, 51, 51); text-decoration-line: none; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; cursor: pointer;&quot;&gt;IT Services &amp;amp; Consulting&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;margin: 0px 9px 0px 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: top; overflow-wrap: break-word; width: 110px;&quot;&gt;Functional Area&lt;/label&gt;&lt;span style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;&lt;a href=&quot;https://www.naukri.com/engineering-software-qa-jobs&quot; target=&quot;_blank&quot; style=&quot;color: rgb(51, 51, 51); text-decoration-line: none; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; cursor: pointer;&quot;&gt;Engineering - Software &amp;amp; QA&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;margin: 0px 9px 0px 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: top; overflow-wrap: break-word; width: 110px;&quot;&gt;Employment Type&lt;/label&gt;&lt;span style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;&lt;span style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Full Time, Permanent&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;margin: 0px 9px 0px 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: top; overflow-wrap: break-word; width: 110px;&quot;&gt;Role Category&lt;/label&gt;&lt;span style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Software Development&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;education&quot; style=&quot;margin-top: 20px; margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;heading&quot; style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word;&quot;&gt;Education&lt;/p&gt;&lt;p class=&quot;details&quot; style=&quot;margin-bottom: 0px; font-family: Roboto, sans-serif; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; line-height: 20px;&quot;&gt;&lt;label style=&quot;margin: 0px 9px 0px 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; border: 0px; vertical-align: top; overflow-wrap: break-word; width: 110px;&quot;&gt;UG :&lt;/label&gt;&lt;span class=&quot;&quot; style=&quot;font-family: Roboto, sans-serif; font-size: 13px; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline; overflow-wrap: break-word; display: inline-block; width: 630px;&quot;&gt;B.Tech/B.E. in Computers&lt;/span&gt;&lt;/p&gt;', 1, '2022-09-01 18:25:55'),
(46, 'Web Designer', 0, '', 1, '2022-09-01 18:39:35'),
(47, 'Asterisk Developer', 0, '', 1, '2022-09-01 18:40:25'),
(48, 'Accountant', 0, '', 1, '2022-09-01 18:41:16'),
(49, 'HR', 0, '', 1, '2022-09-01 18:41:30'),
(50, 'Debugger/Tester', 0, '', 1, '2022-09-01 18:42:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `recruitment_status`
--
ALTER TABLE `recruitment_status`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
