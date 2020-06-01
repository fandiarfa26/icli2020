-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icli_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `2020_admin`
--

CREATE TABLE `2020_admin` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_admin`
--

INSERT INTO `2020_admin` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
(1, 'Admin', 'admin@icli.um.ac.id', '$2y$10$Xv9wDhkgYrer.4THF7w99eDh394UpufrRkMiaZNZ.bvVXBe/6Icnm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2020_articles`
--

CREATE TABLE `2020_articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `abstract_file` varchar(255) NOT NULL,
  `full_article_file` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `presenter` varchar(255) DEFAULT NULL,
  `presentation_place` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0:wait 1:accept 2:reject',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_articles`
--

INSERT INTO `2020_articles` (`id`, `title`, `abstract_file`, `full_article_file`, `author`, `presenter`, `presentation_place`, `status`, `user_id`, `category_id`, `created_at`) VALUES
(0, 'wes kenek', 'abstract-S5-001-442-1.pdf', NULL, 'sek', 'cobak', NULL, 1, 4, 5, '2020-05-17 12:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `2020_category`
--

CREATE TABLE `2020_category` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_category`
--

INSERT INTO `2020_category` (`id`, `name`) VALUES
(1, 'Strategi dan Model Pembelajaran Digital'),
(2, 'Manajemen Pengetahuan Pembelajaran Digital'),
(3, 'Smart MOOCS (Personalized, Ubiquitous, Gamified)'),
(4, 'Disruptive Media Learning'),
(5, 'Data Science for Education'),
(6, 'Distance Learning'),
(7, 'Character and Culture Building'),
(8, 'Resource Management Development');

-- --------------------------------------------------------

--
-- Table structure for table `2020_important_date`
--

CREATE TABLE `2020_important_date` (
  `id` int(3) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_important_date`
--

INSERT INTO `2020_important_date` (`id`, `activity`, `dates`) VALUES
(1, 'Online Abstract Submission Deadline', 'April 30, 2020'),
(2, 'Online Full Paper Submission Deadline', 'May 10, 2020'),
(3, 'Notification of Acceptance', 'May 10, 2020'),
(4, 'Early Bird Registration Deadline', 'May 10, 2020'),
(5, 'Regular Registration Deadline', 'May 30, 2020'),
(6, 'Conference Date', 'Juny 29, 2020'),
(7, 'Workshop', 'Juny 30, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `2020_payment`
--

CREATE TABLE `2020_payment` (
  `id` int(11) UNSIGNED NOT NULL,
  `cost` int(11) UNSIGNED DEFAULT NULL,
  `status` int(1) UNSIGNED NOT NULL COMMENT '1: Wait; 2: Paid, 3: Reject',
  `proof_img` varchar(255) NOT NULL,
  `comment` text,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_payment`
--

INSERT INTO `2020_payment` (`id`, `cost`, `status`, `proof_img`, `comment`, `user_id`, `created_at`) VALUES
(1, 250, 2, 'proof-pay-P0-001-248-1', 'Bagus', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `2020_users`
--

CREATE TABLE `2020_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `local` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `phone` varchar(50) DEFAULT NULL,
  `is_speaker` tinyint(1) UNSIGNED NOT NULL,
  `category` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_users`
--

INSERT INTO `2020_users` (`id`, `code`, `fullname`, `email`, `institution`, `local`, `phone`, `is_speaker`, `category`, `email_verified_at`, `password`, `last_login`, `is_active`, `created_at`) VALUES
(1, 'S3-001-009-1', 'Speaker Fandi', 's_fandi@mail.com', 'UM', 1, '+62 895-3666-29281', 1, 3, '0000-00-00 00:00:00', '$2y$10$wh454IyJu.SPrjFOqTtDsOE/sO2TZMG.7mNdretuiF1JyiIeoIi2W', '2020-05-05 23:35:01', 1, '2020-05-04 00:16:31'),
(2, 'P0-001-248-1', 'Participant Fandi', 'p_fandi@mail.com', 'UM', 1, '+62 895-3666-29281', 0, 0, '0000-00-00 00:00:00', '$2y$10$ySOc9d8RZGPMvC91kI1pZO8R18h7OR24YylY1z6O.Yhdt5Jk5WEHW', '2020-05-05 23:28:19', 1, '2020-05-04 00:17:34'),
(3, 'P0-002-384-1', 'rizqiirfan', 'rizqiirfan23@gmail.com', 'UM', 1, '089680207062', 0, 0, '0000-00-00 00:00:00', '$2y$10$VdQ1G/cdNhA8QbKqnTNWt.DBUdqr/.wgpi7GZqg9vac2i8hmQMGtu', '2020-05-17 15:43:37', 1, '2020-05-06 23:34:06'),
(4, 'S5-001-442-1', 'irfan', 'izqirfan1998@gmail.com', 'UM', 1, '089680207062', 1, 5, '0000-00-00 00:00:00', '$2y$10$IMW0/AvJA/yFNXkATlx25eDaktRqAO9smzZPRVd3ddkq02urLnhQe', '2020-05-17 07:38:36', 1, '2020-05-17 00:45:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_admin`
--
ALTER TABLE `2020_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2020_articles`
--
ALTER TABLE `2020_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2020_category`
--
ALTER TABLE `2020_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2020_important_date`
--
ALTER TABLE `2020_important_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2020_payment`
--
ALTER TABLE `2020_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2020_users`
--
ALTER TABLE `2020_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_admin`
--
ALTER TABLE `2020_admin`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `2020_articles`
--
ALTER TABLE `2020_articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2020_category`
--
ALTER TABLE `2020_category`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `2020_important_date`
--
ALTER TABLE `2020_important_date`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `2020_payment`
--
ALTER TABLE `2020_payment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `2020_users`
--
ALTER TABLE `2020_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
