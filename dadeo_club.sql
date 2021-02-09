-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.133:3306
-- Generation Time: Jun 04, 2018 at 03:44 AM
-- Server version: 5.7.15
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dadeo_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `Club`
--

CREATE TABLE `Club` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
alter table Club add image mediumblob NULL DEFAULT NULL  AFTER name;
alter table Club add image_type varchar(20) NULL default NULL AFTER image;

--
-- Dumping data for table `Club`
--

INSERT INTO `Club` (`id`, `name`, `owner_id`, `city`, `province`, `comment`, `created_at`, `updated_at`) VALUES
(33, 'Founders', 37, 'Surrey', 'British Columbia', NULL, '2018-04-16 01:55:08', '2018-04-16 01:55:08'),
(34, 'The best club', 49, 'Coquitlam', 'British Columbia', NULL, '2018-05-05 17:38:24', '2018-05-05 17:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `ClubAssistant`
--

CREATE TABLE `ClubAssistant` (
  `club_id` int(10) UNSIGNED NOT NULL,
  `assistant_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `League`
--

CREATE TABLE `League` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Match`
--

CREATE TABLE `Match` (
  `id` int(10) UNSIGNED NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `winner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Match`
--

INSERT INTO `Match` (`id`, `club_id`, `name`, `address`, `start_time`, `startDate`, `endDate`, `winner_id`, `created_at`, `updated_at`) VALUES
(18, 33, 'Sample Match', 'Pizzeria Ludica, Vancouver Location', '12:30:00', '2018-04-20', '2018-04-20', 42, '2018-04-16 02:15:42', '2018-04-16 02:19:08'),
(19, 33, 'Calendar April 18', 'Port Coquitlam', '12:00:00', '2010-04-18', '2010-04-18', 40, '2018-05-04 16:31:06', '2018-05-04 16:34:26'),
(20, 33, 'Calendar April 18', 'Port Coquitlam', '13:55:00', '2010-04-18', '2010-04-18', 48, '2018-05-04 16:32:11', '2018-05-04 16:39:54'),
(21, 33, 'Calendar April 18', 'Port Coquitlam', '16:25:00', '2010-04-18', '2010-04-18', 42, '2018-05-04 16:32:59', '2018-05-04 16:44:24'),
(22, 33, 'Calendar May 30 a', 'Port Coquitlam', '12:00:00', '2010-05-30', '2010-05-30', 48, '2018-05-04 16:48:52', '2018-05-04 16:52:18'),
(23, 33, 'Calendar May 30 - b', 'Port Coquitlam', '14:50:00', '2010-05-30', '2010-05-30', 37, '2018-05-04 16:49:51', '2018-05-04 16:56:17'),
(24, 33, 'Calendar May 30 - c', 'Port Coquitlam', '16:35:00', '2010-05-30', '2010-05-30', 42, '2018-05-04 16:51:15', '2018-05-04 16:59:47'),
(25, 33, 'Calendar June 20 -a', 'Port Coquitlam', '12:13:00', '2010-06-20', '2010-06-20', 42, '2018-05-04 17:05:07', '2018-05-04 17:07:41'),
(26, 33, 'Calendar June 20 - b', 'Port Coquitlam', '14:50:00', '2010-06-20', '2010-06-20', 43, '2018-05-04 17:06:01', '2018-05-04 17:10:34'),
(27, 33, 'Calendar June 20 - c', 'Port Coquitlam', '16:17:00', '2010-06-20', '2010-06-20', 48, '2018-05-04 17:07:02', '2018-05-04 17:13:43'),
(28, 33, 'Calendar July 25 - a', 'Port Coquitlam', '23:45:00', '2010-07-25', '2010-07-25', 48, '2018-05-04 17:17:00', '2018-05-04 17:24:21'),
(29, 33, 'Calendar July 25 - b', 'Port Coquitlam', '12:30:00', '2010-07-25', '2010-07-25', 43, '2018-05-04 17:17:42', '2018-05-04 17:27:11'),
(30, 33, 'Calendar July 25 - c', 'Port Coquitlam', '14:10:00', '2010-07-25', '2010-07-25', 43, '2018-05-04 17:18:26', '2018-05-04 17:29:50'),
(31, 33, 'Calendar July 25 - d', 'Port Coquitlam', '15:24:00', '2010-07-25', '2010-07-25', 43, '2018-05-04 17:19:16', '2018-05-04 17:32:42'),
(32, 33, 'Calendar Sept 29 - a', 'Port Coquitlam', '12:15:00', '2010-09-29', '2010-09-29', 40, '2018-05-04 17:20:38', '2018-05-04 17:35:28'),
(33, 33, 'Calendar Sept 29 - b', 'Port Coquitlam', '13:50:00', '2010-09-29', '2010-09-29', 48, '2018-05-04 17:21:45', '2018-05-04 17:38:41'),
(34, 33, 'Calendar Sept 29 - c', 'Port Coquitlam', '15:15:00', '2010-09-29', '2010-09-29', 42, '2018-05-04 17:22:27', '2018-05-04 17:41:09'),
(35, 33, '2010 Tournament Final 1', 'Port Coquitlam', '12:05:00', '2010-11-28', '2010-11-28', 42, '2018-05-04 17:44:05', '2018-05-04 17:46:49'),
(36, 33, '2010 Tournament Final 2', 'Port Coquitlam', '12:22:00', '2010-11-28', '2010-11-28', 48, '2018-05-04 17:44:47', '2018-05-04 17:48:49'),
(37, 33, '2010 Tournament Final 3', 'Port Coquitlam', '13:16:00', '2010-11-28', '2010-11-28', 42, '2018-05-04 17:45:35', '2018-05-04 17:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `MatchResult`
--

CREATE TABLE `MatchResult` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` int(10) UNSIGNED NOT NULL,
  `match_id` int(10) UNSIGNED NOT NULL,
  `elimination` int(11) NOT NULL,
  `capture` int(11) NOT NULL,
  `hook` int(11) NOT NULL,
  `winBonus` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `MatchResult`
--

INSERT INTO `MatchResult` (`id`, `player_id`, `match_id`, `elimination`, `capture`, `hook`, `winBonus`, `total`, `place`, `created_at`, `updated_at`) VALUES
(52, 37, 18, 4, 7, 1, 0, 20, 0, '2018-04-16 02:17:16', '2018-04-16 02:17:16'),
(53, 40, 18, 1, 3, 2, 0, 15, 0, '2018-04-16 02:17:48', '2018-04-16 02:17:48'),
(54, 41, 18, 4, 2, 0, 0, 10, 0, '2018-04-16 02:18:28', '2018-04-16 02:18:28'),
(55, 42, 18, 5, 8, 1, 24, 47, 0, '2018-04-16 02:19:08', '2018-04-16 02:19:08'),
(56, 40, 19, 0, 4, 10, 36, 90, 0, '2018-05-04 16:34:26', '2018-05-04 16:34:26'),
(57, 43, 19, 2, 0, 0, 0, 4, 0, '2018-05-04 16:35:33', '2018-05-04 16:35:33'),
(58, 42, 19, 1, 7, 2, 0, 19, 0, '2018-05-04 16:36:24', '2018-05-04 16:36:24'),
(59, 37, 19, 0, 3, 1, 0, 8, 0, '2018-05-04 16:37:07', '2018-05-04 16:37:07'),
(60, 48, 19, 0, 0, 0, 0, 0, 0, '2018-05-04 16:37:30', '2018-05-04 16:37:30'),
(61, 47, 19, 0, 0, 0, 0, 0, 0, '2018-05-04 16:37:58', '2018-05-04 16:37:58'),
(62, 48, 20, 5, 9, 1, 36, 60, 0, '2018-05-04 16:39:54', '2018-05-04 16:39:54'),
(63, 42, 20, 4, 1, 1, 0, 14, 0, '2018-05-04 16:40:31', '2018-05-04 16:40:31'),
(64, 40, 20, 9, 0, 0, 0, 18, 0, '2018-05-04 16:41:03', '2018-05-04 16:41:03'),
(65, 37, 20, 1, 4, 2, 0, 16, 0, '2018-05-04 16:41:34', '2018-05-04 16:41:34'),
(66, 47, 20, 0, 1, 1, 0, 6, 0, '2018-05-04 16:42:10', '2018-05-04 16:42:10'),
(67, 43, 20, 0, 1, 0, 0, 1, 0, '2018-05-04 16:42:40', '2018-05-04 16:42:40'),
(68, 42, 21, 7, 3, 0, 36, 53, 0, '2018-05-04 16:44:24', '2018-05-04 16:44:24'),
(69, 43, 21, 12, 5, 0, 0, 29, 0, '2018-05-04 16:45:04', '2018-05-04 16:45:04'),
(70, 48, 21, 5, 3, 1, 0, 18, 0, '2018-05-04 16:45:36', '2018-05-04 16:45:36'),
(71, 40, 21, 3, 3, 1, 0, 14, 0, '2018-05-04 16:46:04', '2018-05-04 16:46:04'),
(72, 47, 21, 5, 0, 0, 0, 10, 0, '2018-05-04 16:46:37', '2018-05-04 16:46:37'),
(73, 37, 21, 2, 0, 1, 0, 9, 0, '2018-05-04 16:47:08', '2018-05-04 16:47:08'),
(74, 48, 22, 8, 2, 1, 36, 59, 0, '2018-05-04 16:52:18', '2018-05-04 16:52:18'),
(75, 43, 22, 8, 9, 1, 0, 30, 0, '2018-05-04 16:52:54', '2018-05-04 16:52:54'),
(76, 40, 22, 0, 8, 1, 0, 13, 0, '2018-05-04 16:53:32', '2018-05-04 16:53:32'),
(77, 42, 22, 1, 3, 0, 0, 5, 0, '2018-05-04 16:54:04', '2018-05-04 16:54:04'),
(78, 47, 22, 0, 2, 0, 0, 2, 0, '2018-05-04 16:55:08', '2018-05-04 16:55:08'),
(79, 37, 22, 0, 0, 0, 0, 0, 0, '2018-05-04 16:55:26', '2018-05-04 16:55:26'),
(80, 37, 23, 5, 2, 0, 36, 48, 0, '2018-05-04 16:56:17', '2018-05-04 16:56:17'),
(81, 48, 23, 3, 4, 1, 0, 15, 0, '2018-05-04 16:56:50', '2018-05-04 16:56:50'),
(82, 47, 23, 5, 4, 1, 0, 19, 0, '2018-05-04 16:57:23', '2018-05-04 16:57:23'),
(83, 43, 23, 2, 4, 1, 0, 13, 0, '2018-05-04 16:57:55', '2018-05-04 16:57:55'),
(84, 40, 23, 2, 7, 2, 0, 21, 0, '2018-05-04 16:58:30', '2018-05-04 16:58:30'),
(85, 42, 23, 0, 2, 1, 0, 7, 0, '2018-05-04 16:59:07', '2018-05-04 16:59:07'),
(86, 42, 24, 12, 3, 0, 36, 63, 0, '2018-05-04 16:59:47', '2018-05-04 16:59:47'),
(87, 43, 24, 10, 6, 2, 0, 36, 0, '2018-05-04 17:00:19', '2018-05-04 17:00:19'),
(88, 40, 24, 6, 9, 1, 0, 26, 0, '2018-05-04 17:00:46', '2018-05-04 17:00:46'),
(89, 48, 24, 2, 4, 1, 0, 13, 0, '2018-05-04 17:01:14', '2018-05-04 17:01:14'),
(90, 47, 24, 0, 0, 0, 0, 0, 0, '2018-05-04 17:01:39', '2018-05-04 17:01:39'),
(91, 37, 24, 0, 0, 0, 0, 0, 0, '2018-05-04 17:01:58', '2018-05-04 17:01:58'),
(92, 42, 25, 10, 4, 2, 30, 64, 0, '2018-05-04 17:07:41', '2018-05-04 17:07:41'),
(93, 37, 25, 11, 4, 1, 0, 31, 0, '2018-05-04 17:08:14', '2018-05-04 17:08:14'),
(94, 43, 25, 8, 5, 0, 0, 21, 0, '2018-05-04 17:08:43', '2018-05-04 17:08:43'),
(95, 48, 25, 0, 4, 1, 0, 9, 0, '2018-05-04 17:09:12', '2018-05-04 17:09:12'),
(96, 40, 25, 0, 0, 0, 0, 0, 0, '2018-05-04 17:09:39', '2018-05-04 17:09:39'),
(97, 43, 26, 3, 5, 1, 30, 46, 0, '2018-05-04 17:10:34', '2018-05-04 17:10:34'),
(98, 37, 26, 11, 5, 0, 0, 27, 0, '2018-05-04 17:11:05', '2018-05-04 17:11:05'),
(99, 40, 26, 11, 4, 1, 0, 31, 0, '2018-05-04 17:11:34', '2018-05-04 17:11:34'),
(100, 42, 26, 0, 0, 1, 0, 5, 0, '2018-05-04 17:12:03', '2018-05-04 17:12:03'),
(101, 48, 26, 1, 0, 0, 0, 2, 0, '2018-05-04 17:12:28', '2018-05-04 17:12:28'),
(102, 48, 27, 6, 12, 0, 30, 54, 0, '2018-05-04 17:13:43', '2018-05-04 17:13:43'),
(103, 43, 27, 3, 8, 2, 0, 24, 0, '2018-05-04 17:14:11', '2018-05-04 17:14:11'),
(104, 37, 27, 0, 4, 2, 0, 14, 0, '2018-05-04 17:14:38', '2018-05-04 17:14:38'),
(105, 40, 27, 0, 1, 0, 0, 1, 0, '2018-05-04 17:15:03', '2018-05-04 17:15:03'),
(106, 42, 27, 0, 1, 0, 0, 1, 0, '2018-05-04 17:15:28', '2018-05-04 17:15:28'),
(107, 48, 28, 3, 18, 0, 30, 54, 0, '2018-05-04 17:24:21', '2018-05-04 17:24:21'),
(108, 37, 28, 1, 3, 2, 0, 15, 0, '2018-05-04 17:24:59', '2018-05-04 17:24:59'),
(109, 42, 28, 4, 4, 3, 0, 27, 0, '2018-05-04 17:25:34', '2018-05-04 17:25:34'),
(110, 43, 28, 3, 0, 1, 0, 11, 0, '2018-05-04 17:25:59', '2018-05-04 17:25:59'),
(111, 40, 28, 0, 0, 0, 0, 0, 0, '2018-05-04 17:26:24', '2018-05-04 17:26:24'),
(112, 43, 29, 11, 3, 1, 30, 60, 0, '2018-05-04 17:27:11', '2018-05-04 17:27:11'),
(113, 48, 29, 3, 12, 4, 0, 38, 0, '2018-05-04 17:27:46', '2018-05-04 17:27:46'),
(114, 37, 29, 0, 4, 1, 0, 9, 0, '2018-05-04 17:28:20', '2018-05-04 17:28:20'),
(115, 42, 29, 1, 0, 0, 0, 2, 0, '2018-05-04 17:28:47', '2018-05-04 17:28:47'),
(116, 40, 29, 0, 0, 0, 0, 0, 0, '2018-05-04 17:29:10', '2018-05-04 17:29:10'),
(117, 43, 30, 12, 0, 0, 30, 54, 0, '2018-05-04 17:29:50', '2018-05-04 17:29:50'),
(118, 40, 30, 4, 4, 1, 0, 17, 0, '2018-05-04 17:30:21', '2018-05-04 17:30:21'),
(119, 37, 30, 7, 2, 0, 0, 16, 0, '2018-05-04 17:30:48', '2018-05-04 17:30:48'),
(120, 48, 30, 2, 7, 1, 0, 16, 0, '2018-05-04 17:31:12', '2018-05-04 17:31:12'),
(121, 42, 30, 1, 0, 0, 0, 2, 0, '2018-05-04 17:31:39', '2018-05-04 17:31:39'),
(122, 43, 31, 5, 12, 0, 30, 52, 0, '2018-05-04 17:32:42', '2018-05-04 17:32:42'),
(123, 37, 31, 6, 7, 1, 0, 24, 0, '2018-05-04 17:33:10', '2018-05-04 17:33:10'),
(124, 48, 31, 0, 7, 2, 0, 17, 0, '2018-05-04 17:33:41', '2018-05-04 17:33:41'),
(125, 40, 31, 0, 3, 2, 0, 13, 0, '2018-05-04 17:34:18', '2018-05-04 17:34:18'),
(126, 42, 31, 0, 1, 0, 0, 1, 0, '2018-05-04 17:34:48', '2018-05-04 17:34:48'),
(127, 40, 32, 4, 4, 2, 24, 46, 0, '2018-05-04 17:35:28', '2018-05-04 17:35:28'),
(128, 48, 32, 0, 7, 2, 0, 17, 0, '2018-05-04 17:35:56', '2018-05-04 17:35:56'),
(129, 42, 32, 3, 1, 1, 0, 12, 0, '2018-05-04 17:37:32', '2018-05-04 17:37:32'),
(130, 37, 32, 3, 2, 1, 0, 13, 0, '2018-05-04 17:38:01', '2018-05-04 17:38:01'),
(131, 48, 33, 5, 0, 0, 24, 34, 0, '2018-05-04 17:38:41', '2018-05-04 17:38:41'),
(132, 40, 33, 5, 1, 1, 0, 16, 0, '2018-05-04 17:39:20', '2018-05-04 17:39:20'),
(133, 37, 33, 0, 5, 2, 0, 15, 0, '2018-05-04 17:39:48', '2018-05-04 17:39:48'),
(134, 42, 33, 1, 7, 1, 0, 14, 0, '2018-05-04 17:40:20', '2018-05-04 17:40:20'),
(135, 42, 34, 9, 0, 0, 24, 42, 0, '2018-05-04 17:41:09', '2018-05-04 17:41:09'),
(136, 48, 34, 6, 5, 2, 0, 27, 0, '2018-05-04 17:41:47', '2018-05-04 17:41:47'),
(137, 37, 34, 5, 5, 1, 0, 20, 0, '2018-05-04 17:42:19', '2018-05-04 17:42:19'),
(138, 40, 34, 1, 0, 0, 0, 2, 0, '2018-05-04 17:42:43', '2018-05-04 17:42:43'),
(139, 42, 35, 1, 26, 4, 18, 66, 0, '2018-05-04 17:46:49', '2018-05-04 17:46:49'),
(140, 48, 35, 1, 0, 0, 0, 2, 0, '2018-05-04 17:47:40', '2018-05-04 17:47:40'),
(141, 43, 35, 0, 0, 0, 0, 0, 0, '2018-05-04 17:48:02', '2018-05-04 17:48:02'),
(142, 48, 36, 4, 12, 2, 18, 48, 0, '2018-05-04 17:48:49', '2018-05-04 17:48:49'),
(143, 43, 36, 5, 4, 3, 0, 29, 0, '2018-05-04 17:49:22', '2018-05-04 17:49:22'),
(144, 42, 36, 0, 0, 0, 0, 0, 0, '2018-05-04 17:49:46', '2018-05-04 17:49:46'),
(145, 42, 37, 0, 6, 4, 18, 44, 0, '2018-05-04 17:50:23', '2018-05-04 17:50:23'),
(146, 43, 37, 0, 3, 2, 0, 13, 0, '2018-05-04 17:50:57', '2018-05-04 17:50:57'),
(147, 48, 37, 2, 2, 0, 0, 6, 0, '2018-05-04 17:51:30', '2018-05-04 17:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `Match_League`
--

CREATE TABLE `Match_League` (
  `id` int(10) UNSIGNED NOT NULL,
  `match_id` int(10) UNSIGNED NOT NULL,
  `league_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Match_Tournament`
--

CREATE TABLE `Match_Tournament` (
  `id` int(10) UNSIGNED NOT NULL,
  `match_id` int(10) UNSIGNED NOT NULL,
  `tournament_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_11_30_101025_create_taoex_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jay@taoex.org', '$2y$10$Vccod.6sQzrO1I.oL95HxufHGTJ1Dme9KEdPDwaQl03zaILYqluNe', '2017-12-22 18:22:47'),
('lesromhanyi@shaw.ca', '$2y$10$iAAMSINBRG.4h/n4qUz4kugMhvXyKyDIuDubPLVkuC4sR1wMbygcO', '2018-05-04 02:42:25'),
('david@pixelificgames.com', '$2y$10$vBwLoiV7kJbrBA7s9HzAMeB4W8iek/493r8lFoZtqWkXkPTpD.5Uy', '2018-05-04 02:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `Tournament`
--

CREATE TABLE `Tournament` (
  `id` int(10) UNSIGNED NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` int(10) UNSIGNED DEFAULT NULL,
  `approved_status` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- chckeck box or radio button for:
-- "I do not want to recieve emails about offers and services from Pixelific Games Inc."
--
alter table users add opt char(5) not null default "false" after type;
alter table users add column image_type varchar(20) NULL default NULL after lastName;
alter table users add column image mediumblob NULL default NULL after image_type;

--
-- Table structure for table `users_pic`
--
CREATE TABLE `users_pic` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT=35;,
  `image_type` varchar(20) NULL default NULL,
  `image` mediumblob NULL default NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
ALTER TABLE `users_pic` ADD PRIMARY KEY (`id`);
ALTER TABLE `users_pic` MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `phone`, `address`, `country`, `province`, `city`, `club_id`, `approved_status`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(37, 'Les', 'Romhanyi', 'lesromhanyi@shaw.ca', '6044845674', '10223 160A St', 'Canada', 'British Columbia', 'Surrey', 33, 1, 1, '$2y$10$LNmIoqf9F1QJ994RcXbnXuWY27GV4MOXTlU2dhPHENEOIPqnl2vMC', '4nEB7nmFjlioZrWuHzAnLhwz0euVo1c2mHlkDD0AwTp6OjS3MDjp6cDNeOar', '2018-04-14 03:13:33', '2018-04-16 01:55:08'),
(38, 'John', 'Corless', 'corlessjohn@hotmail.com', '6045220274', '305-7065 21st ave', 'Canada', 'British Columbia', 'Burnaby', 33, 2, 0, '$2y$10$dsXUOAb68SaQO22CvFhh3OltOclbE5ZLaTj3iaVqUcyW7Q4rpPqjK', 'Ne6SnE4a61Vj40NHvIUWDN8spPWxA0pzatBv8vLQgLaaOeE2gL3XvBHYpjdi', '2018-04-15 21:18:24', '2018-04-16 01:58:14'),
(39, 'Lucas', 'Romhanyi', 'lucasromhanyi@hotmail.com', '6047240741', '876 Herrmann St', 'Canada', 'British Columbia', 'coquitlam', 33, 2, 0, '$2y$10$ZYUpdvtPmFswx6LaBibWvOPUqR76.78pXgpSOavM6TDO83eU42JKK', '8NN1nc3ZWfA4z6tf6FVK7tHQtAZCSpwamiH5aIljpwBmZZbanYzdyr2oZSDx', '2018-04-15 21:20:11', '2018-04-16 01:58:25'),
(40, 'Lorne', 'Travers', 'lorne@taoex.org', '6042402517', '10223 160A Street', 'Canada', 'British Columbia', 'Surrey', 33, 1, 0, '$2y$10$p9MoCP1SKJ92OMcMwnfQo.yjg9LPsTNstNgHSlwvHskGH.pEU9TVi', 'aZ1Jzi3Ex2eldFNFWHARvGiHuhAijCWHFJPaOi3f0LTSyGnUAvmycta5rVDT', '2018-04-16 00:56:29', '2018-04-16 01:58:34'),
(41, 'David', 'Stoller', 'david@pixelificgames.com', '6042288015', '6010 Chancellor Mews', 'Canada', 'British Columbia', 'Vancouver', 33, 1, 0, '$2y$10$iuCN3xd23cCMQxf8wFc.y.ZYvpSm/rSc2KXOeK/6HSyFP5ziwT4F2', 'lG7rrldJJ3bb0DwiAJ9Be0tsDSZRb3kKlVkrhFbimFyRmDdYqIYySQ1CnrCe', '2018-04-16 01:04:37', '2018-04-16 01:58:42'),
(42, 'Sandford', 'Tuey', 'sandford@taoex.org', '7789310422', '711 Broughton', 'Canada', 'British Columbia', 'Vancouver', 33, 1, 0, '$2y$10$1qy3nWfJNI8WavQ7q..NTO6v6PXgIiEXpLUPsWJPzoVa7Vbm9SA4G', 'UkAk6O59l55ZMUVD96fqvSX3z7x4NyncazZFnCEJXtz1EsBuZ23UvbXnP15u', '2018-04-16 01:09:30', '2018-04-16 01:57:43'),
(43, 'Mark', 'Amero', 'mark@taoex.org', '6044445567', '123 Sompace St', 'Canada', 'British Columbia', 'Surrey', 33, 1, 0, '$2y$10$1M8mF4Uw0b16wpk7foPAo.D7dpHope8EUZs7/UfSMYhawmx9q9crG', '3Yc5CoA5ZvpC8ywjIpEeKkH3V3VgtYDArF5oiDPlUtaooVBHkEdcOEbewM8N', '2018-05-04 14:29:10', '2018-05-04 14:38:26'),
(44, 'Steve', 'Morin', 'steve@taoex.org', '6044891911', '47349 269 Ave', 'Canada', 'British Columbia', 'Maple Ridge', 33, 1, 0, '$2y$10$Ycvh//xUafGojj6lYfen0uUXRq/llRmO6MbY4EKpRMPzAgWZxQmyS', 'Dybp0IlSBrRRsLB4lYewoTE0xBIQcHPRW6v6UN7cf39VHVVZ0cLCOPxEyjoV', '2018-05-04 14:30:52', '2018-05-04 14:38:34'),
(45, 'Bart', 'Ciancone', 'bart@taoex.org', '2507692880', '3468 Elgin Street', 'Canada', 'British Columbia', 'Kelowna', 33, 1, 0, '$2y$10$/A6wNscbrnPcrXdGDQujGOWNR3gVVIE6XTCuo3wjBozpk16Z99U.a', '9xuB6nnu3gScItGwe4WAw0BiV7u8o4jh8cBu46uHnQJBISJ4nXcTYfGYcjUL', '2018-05-04 14:33:17', '2018-05-04 14:38:43'),
(46, 'Joel', 'Grigg', 'joel@taoex.org', '6043766449', '876 Prior Blvd', 'Canada', 'British Columbia', 'Coquitlam', 33, 1, 0, '$2y$10$q6Hr97/13omxpYRNZ5yzmO5gBSCFCcvzA73Ws8q/EXY/S4nAVj8ku', '8hIa9T6DG55f19G11GJMMdTOOtE5zdp8NpSTYo4yKGIAr8OYUk0jAqxzi5qW', '2018-05-04 14:35:31', '2018-05-04 14:38:53'),
(47, 'Rob', 'Bakewell', 'rob@taoex.org', '6043683481', '21825 124th Ave', 'Canada', 'British Columbia', 'Maple Ridge', 33, 1, 0, '$2y$10$xi.YTqdyxmQIV.ib/pR.f.amHB6CM9MlSsz0BDToTB.NK9sJ77G6e', 'AfqwbNLhFz7d9eChWqS4nvGvE01q8wBosVRGkfwWaDo9zNkbUG1WSgVJqz7Z', '2018-05-04 14:37:42', '2018-05-04 14:39:00'),
(48, 'Lucas', 'Romhanyi', 'lucas@taoex.org', '6047240741', '876 Herrmann St', 'Canada', 'British Columbia', 'Coquitlam', 33, 1, 0, '$2y$10$.HqsqmhiHKLLuTZBlZvTh.iigKVw9IOY.24oMFzr3A/wONKjJF6mS', 'MGPmqcLqjQQE2ojIM1joznhS9HJ7xxUVFiGcnb3V3Vy0uQdxnJUsMWNr7W45', '2018-05-04 14:41:50', '2018-05-04 14:42:04'),
(49, 'Connor', 'Herrmann', 'lucas.romhanyi@gmail.com', '6047770777', '123 Drive st.', 'Canada', 'British Columbia', 'Coquitlam', 34, 1, 1, '$2y$10$IN0JMy4dQ/guKb3/e6olb./hH/E68lCOFk1YOC.LzZJWpK/dR5TXe', NULL, '2018-05-05 17:35:28', '2018-05-05 17:38:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Club`
--
ALTER TABLE `Club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `ClubAssistant`
--
ALTER TABLE `ClubAssistant`
  ADD KEY `clubassistant_club_id_foreign` (`club_id`),
  ADD KEY `clubassistant_assistant_id_foreign` (`assistant_id`);

--
-- Indexes for table `League`
--
ALTER TABLE `League`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Match`
--
ALTER TABLE `Match`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_club_id_foreign` (`club_id`),
  ADD KEY `match_winner_id_foreign` (`winner_id`);

--
-- Indexes for table `MatchResult`
--
ALTER TABLE `MatchResult`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matchresult_player_id_foreign` (`player_id`),
  ADD KEY `matchresult_match_id_foreign` (`match_id`);

--
-- Indexes for table `Match_League`
--
ALTER TABLE `Match_League`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_league_match_id_foreign` (`match_id`),
  ADD KEY `match_league_league_id_foreign` (`league_id`);

--
-- Indexes for table `Match_Tournament`
--
ALTER TABLE `Match_Tournament`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_tournament_match_id_foreign` (`match_id`),
  ADD KEY `match_tournament_tournament_id_foreign` (`tournament_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `Tournament`
--
ALTER TABLE `Tournament`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tournament_club_id_foreign` (`club_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Club`
--
ALTER TABLE `Club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `League`
--
ALTER TABLE `League`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Match`
--
ALTER TABLE `Match`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `MatchResult`
--
ALTER TABLE `MatchResult`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `Match_League`
--
ALTER TABLE `Match_League`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Match_Tournament`
--
ALTER TABLE `Match_Tournament`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Tournament`
--
ALTER TABLE `Tournament`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Club`
--
ALTER TABLE `Club`
  ADD CONSTRAINT `club_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ClubAssistant`
--
ALTER TABLE `ClubAssistant`
  ADD CONSTRAINT `clubassistant_assistant_id_foreign` FOREIGN KEY (`assistant_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `clubassistant_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `Club` (`id`);

--
-- Constraints for table `Match`
--
ALTER TABLE `Match`
  ADD CONSTRAINT `match_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `Club` (`id`),
  ADD CONSTRAINT `match_winner_id_foreign` FOREIGN KEY (`winner_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `MatchResult`
--
ALTER TABLE `MatchResult`
  ADD CONSTRAINT `matchresult_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `Match` (`id`),
  ADD CONSTRAINT `matchresult_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `Match_League`
--
ALTER TABLE `Match_League`
  ADD CONSTRAINT `match_league_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `League` (`id`),
  ADD CONSTRAINT `match_league_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `Match` (`id`);

--
-- Constraints for table `Match_Tournament`
--
ALTER TABLE `Match_Tournament`
  ADD CONSTRAINT `match_tournament_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `Match` (`id`),
  ADD CONSTRAINT `match_tournament_tournament_id_foreign` FOREIGN KEY (`tournament_id`) REFERENCES `Tournament` (`id`);

--
-- Constraints for table `Tournament`
--
ALTER TABLE `Tournament`
  ADD CONSTRAINT `tournament_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `Club` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
