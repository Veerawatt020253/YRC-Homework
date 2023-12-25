-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 08:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework`
--

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `subject`, `teacher`, `title`, `point`, `time`) VALUES
(2, 'ลส./นน.', 'ทดสอบ', 'อะไรก็ได้', '100', '2023-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `name`, `surname`, `role`) VALUES
(5, 'Nice2250', 'Nice2250', 'Veerawattt', 'Kanthiphan', 'admin'),
(7, '53421', '53421', 'tester', 'Kanthiphan', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `decp` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `decp`, `img`, `time`) VALUES
(3, 'อะไรก็ได้', 'เบื่อ', 'uploads/proflie_1703425586.png', '2023-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `content`, `status`, `owner`, `time`) VALUES
(1, 'Test TODO', 'false', '7', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `viewer`
--

INSERT INTO `viewer` (`id`, `time`, `value`) VALUES
(1, '2023-12-23 21:42:39', ''),
(2, '2023-12-23 22:20:50', ''),
(3, '2023-12-23 22:34:46', 'mobile'),
(4, '2023-12-23 22:39:41', 'desktop'),
(5, '2023-12-23 22:39:54', 'desktop'),
(6, '2023-12-23 22:40:48', 'desktop'),
(7, '2023-12-23 22:41:47', 'mobile'),
(8, '2023-12-23 22:42:47', 'desktop'),
(9, '2023-12-23 22:57:18', 'desktop'),
(10, '2023-12-23 22:57:44', 'desktop'),
(11, '2023-12-23 23:10:49', 'desktop'),
(12, '2023-12-23 23:12:42', 'desktop'),
(13, '2023-12-23 23:13:49', 'desktop'),
(14, '2023-12-23 23:14:04', 'desktop'),
(15, '2023-12-23 23:14:05', 'desktop'),
(16, '2023-12-23 23:16:18', 'desktop'),
(17, '2023-12-23 23:16:34', 'desktop'),
(18, '2023-12-23 23:16:51', 'desktop'),
(19, '2023-12-23 23:16:54', 'desktop'),
(20, '2023-12-23 23:17:40', 'desktop'),
(21, '2023-12-23 23:20:39', 'desktop'),
(22, '2023-12-23 23:21:42', 'desktop'),
(23, '2023-12-24 11:53:01', 'desktop'),
(24, '2023-12-24 20:04:49', 'desktop'),
(25, '2023-12-24 20:05:42', 'desktop'),
(26, '2023-12-24 20:48:34', 'desktop'),
(27, '2023-12-24 20:49:28', 'desktop'),
(28, '2023-12-24 21:01:57', 'desktop'),
(29, '2023-12-24 21:02:00', 'desktop'),
(30, '2023-12-24 21:04:17', 'desktop'),
(31, '2023-12-24 21:04:18', 'desktop'),
(32, '2023-12-24 21:04:19', 'desktop'),
(33, '2023-12-24 21:04:47', 'desktop'),
(34, '2023-12-24 21:05:09', 'desktop'),
(35, '2023-12-24 21:08:28', 'desktop'),
(36, '2023-12-24 21:08:28', 'desktop'),
(37, '2023-12-24 21:08:43', 'desktop'),
(38, '2023-12-24 21:09:00', 'desktop'),
(39, '2023-12-24 21:09:01', 'desktop'),
(40, '2023-12-24 21:09:13', 'desktop'),
(41, '2023-12-24 21:10:35', 'desktop'),
(42, '2023-12-24 21:10:36', 'desktop'),
(43, '2023-12-24 21:10:36', 'desktop'),
(44, '2023-12-24 21:10:47', 'desktop'),
(45, '2023-12-24 21:11:09', 'desktop'),
(46, '2023-12-24 21:11:14', 'desktop'),
(47, '2023-12-24 21:11:22', 'desktop'),
(48, '2023-12-24 21:11:22', 'desktop'),
(49, '2023-12-24 21:11:29', 'desktop'),
(50, '2023-12-24 21:11:29', 'desktop'),
(51, '2023-12-24 21:11:45', 'desktop'),
(52, '2023-12-24 21:11:46', 'desktop'),
(53, '2023-12-24 21:11:46', 'desktop'),
(54, '2023-12-24 21:12:18', 'desktop'),
(55, '2023-12-24 21:12:35', 'desktop'),
(56, '2023-12-24 21:12:35', 'desktop'),
(57, '2023-12-24 21:12:35', 'desktop'),
(58, '2023-12-24 21:12:36', 'desktop'),
(59, '2023-12-24 21:12:51', 'desktop'),
(60, '2023-12-24 21:12:51', 'desktop'),
(61, '2023-12-24 21:12:52', 'desktop'),
(62, '2023-12-24 21:12:52', 'desktop'),
(63, '2023-12-24 21:13:08', 'desktop'),
(64, '2023-12-24 21:13:09', 'desktop'),
(65, '2023-12-24 21:13:13', 'desktop'),
(66, '2023-12-24 21:13:32', 'desktop'),
(67, '2023-12-24 21:13:33', 'desktop'),
(68, '2023-12-24 21:13:54', 'desktop'),
(69, '2023-12-24 21:13:54', 'desktop'),
(70, '2023-12-24 21:14:00', 'desktop'),
(71, '2023-12-24 21:14:01', 'desktop'),
(72, '2023-12-24 21:14:11', 'desktop'),
(73, '2023-12-24 21:14:12', 'desktop'),
(74, '2023-12-24 21:14:43', 'desktop'),
(75, '2023-12-24 21:15:06', 'desktop'),
(76, '2023-12-24 21:15:08', 'desktop'),
(77, '2023-12-24 21:15:29', 'desktop'),
(78, '2023-12-24 21:15:30', 'desktop'),
(79, '2023-12-24 21:15:38', 'desktop'),
(80, '2023-12-24 21:15:39', 'desktop'),
(81, '2023-12-24 21:15:43', 'desktop'),
(82, '2023-12-24 21:15:43', 'desktop'),
(83, '2023-12-24 21:15:46', 'desktop'),
(84, '2023-12-24 21:15:46', 'desktop'),
(85, '2023-12-24 21:15:46', 'desktop'),
(86, '2023-12-24 21:15:55', 'desktop'),
(87, '2023-12-24 21:15:55', 'desktop'),
(88, '2023-12-24 21:16:25', 'desktop'),
(89, '2023-12-24 21:16:26', 'desktop'),
(90, '2023-12-24 21:16:57', 'mobile'),
(91, '2023-12-24 21:17:00', 'mobile'),
(92, '2023-12-24 21:17:02', 'mobile'),
(93, '2023-12-24 21:17:20', 'desktop'),
(94, '2023-12-24 21:17:43', 'desktop'),
(95, '2023-12-24 21:27:48', 'desktop'),
(96, '2023-12-24 21:28:54', 'desktop'),
(97, '2023-12-24 21:29:12', 'desktop'),
(98, '2023-12-24 21:29:33', 'desktop'),
(99, '2023-12-24 21:29:38', 'desktop'),
(100, '2023-12-24 21:31:05', 'desktop'),
(101, '2023-12-24 21:31:06', 'desktop'),
(102, '2023-12-24 21:32:18', 'desktop'),
(103, '2023-12-24 21:32:32', 'desktop'),
(104, '2023-12-24 21:32:43', 'desktop'),
(105, '2023-12-24 21:32:44', 'desktop'),
(106, '2023-12-24 21:32:53', 'desktop'),
(107, '2023-12-24 21:33:39', 'desktop'),
(108, '2023-12-24 21:33:40', 'desktop'),
(109, '2023-12-24 21:34:02', 'desktop'),
(110, '2023-12-24 21:34:02', 'desktop'),
(111, '2023-12-24 21:34:09', 'desktop'),
(112, '2023-12-24 21:34:09', 'desktop'),
(113, '2023-12-24 21:34:10', 'desktop'),
(114, '2023-12-24 21:34:17', 'desktop'),
(115, '2023-12-24 21:34:49', 'desktop'),
(116, '2023-12-24 21:34:51', 'desktop'),
(117, '2023-12-24 21:34:53', 'desktop'),
(118, '2023-12-24 21:35:06', 'desktop'),
(119, '2023-12-24 21:35:22', 'desktop'),
(120, '2023-12-24 21:35:51', 'desktop'),
(121, '2023-12-24 21:35:57', 'desktop'),
(122, '2023-12-24 21:36:01', 'desktop'),
(123, '2023-12-24 21:36:28', 'desktop'),
(124, '2023-12-24 21:36:31', 'desktop'),
(125, '2023-12-24 21:36:33', 'desktop'),
(126, '2023-12-24 21:36:36', 'desktop'),
(127, '2023-12-25 07:04:46', 'desktop'),
(128, '2023-12-25 07:04:48', 'desktop'),
(129, '2023-12-25 07:04:49', 'desktop'),
(130, '2023-12-25 07:04:52', 'desktop'),
(131, '2023-12-25 07:11:03', 'desktop'),
(132, '2023-12-25 07:11:04', 'desktop'),
(133, '2023-12-25 07:11:04', 'desktop'),
(134, '2023-12-25 07:11:04', 'desktop'),
(135, '2023-12-25 07:12:12', 'desktop'),
(136, '2023-12-25 07:12:16', 'desktop'),
(137, '2023-12-25 07:12:19', 'desktop'),
(138, '2023-12-25 07:12:21', 'desktop'),
(139, '2023-12-25 07:12:23', 'desktop'),
(140, '2023-12-25 07:12:34', 'desktop'),
(141, '2023-12-25 07:13:13', 'desktop'),
(142, '2023-12-25 07:13:24', 'desktop'),
(143, '2023-12-25 07:13:24', 'desktop'),
(144, '2023-12-25 07:14:27', 'desktop'),
(145, '2023-12-25 07:14:28', 'desktop'),
(146, '2023-12-25 07:14:56', 'desktop'),
(147, '2023-12-25 07:15:09', 'desktop'),
(148, '2023-12-25 07:15:12', 'desktop'),
(149, '2023-12-25 07:15:18', 'desktop'),
(150, '2023-12-25 07:15:19', 'desktop'),
(151, '2023-12-25 07:15:19', 'desktop'),
(152, '2023-12-25 07:16:04', 'desktop'),
(153, '2023-12-25 07:16:19', 'desktop'),
(154, '2023-12-25 07:16:20', 'desktop'),
(155, '2023-12-25 10:11:20', 'desktop'),
(156, '2023-12-25 10:11:23', 'desktop'),
(157, '2023-12-25 10:11:30', 'desktop'),
(158, '2023-12-25 10:11:33', 'desktop'),
(159, '2023-12-25 10:11:41', 'desktop'),
(160, '2023-12-25 10:11:44', 'desktop'),
(161, '2023-12-25 10:11:45', 'desktop'),
(162, '2023-12-25 10:11:46', 'desktop'),
(163, '2023-12-25 10:11:53', 'desktop'),
(164, '2023-12-25 10:13:12', 'desktop'),
(165, '2023-12-25 10:13:12', 'desktop'),
(166, '2023-12-25 10:14:27', 'desktop'),
(167, '2023-12-25 10:14:28', 'desktop'),
(168, '2023-12-25 10:14:29', 'desktop'),
(169, '2023-12-25 10:14:29', 'desktop'),
(170, '2023-12-25 10:14:29', 'desktop'),
(171, '2023-12-25 10:14:30', 'desktop'),
(172, '2023-12-25 10:15:13', 'desktop'),
(173, '2023-12-25 10:15:14', 'desktop'),
(174, '2023-12-25 10:15:39', 'desktop'),
(175, '2023-12-25 10:15:51', 'desktop'),
(176, '2023-12-25 10:16:16', 'desktop'),
(177, '2023-12-25 10:16:17', 'desktop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
