-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table icli_web.2020_admin
CREATE TABLE IF NOT EXISTS `2020_admin` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table icli_web.2020_admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `2020_admin` DISABLE KEYS */;
REPLACE INTO `2020_admin` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
	(1, 'Admin', 'admin@icli.um.ac.id', '$2y$10$Xv9wDhkgYrer.4THF7w99eDh394UpufrRkMiaZNZ.bvVXBe/6Icnm', NULL);
/*!40000 ALTER TABLE `2020_admin` ENABLE KEYS */;

-- Dumping structure for table icli_web.2020_articles
CREATE TABLE IF NOT EXISTS `2020_articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `abstract_file` varchar(255) NOT NULL,
  `full_article_file` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `presenter` varchar(255) DEFAULT NULL,
  `presentation_place` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table icli_web.2020_articles: ~0 rows (approximately)
/*!40000 ALTER TABLE `2020_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `2020_articles` ENABLE KEYS */;

-- Dumping structure for table icli_web.2020_category
CREATE TABLE IF NOT EXISTS `2020_category` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table icli_web.2020_category: ~8 rows (approximately)
/*!40000 ALTER TABLE `2020_category` DISABLE KEYS */;
REPLACE INTO `2020_category` (`id`, `name`) VALUES
	(1, 'Digital Learning Strategies and Models'),
	(2, 'Digital Learning Knowledge Management'),
	(3, 'Smart MOOCS (Personalized, Ubiquitous, Gamified)'),
	(4, 'Disruptive Media Learning'),
	(5, 'Data Science for Education'),
	(6, 'Distance Learning'),
	(7, 'Character and Culture Building'),
	(8, 'Resource Management Development');
/*!40000 ALTER TABLE `2020_category` ENABLE KEYS */;

-- Dumping structure for table icli_web.2020_important_date
CREATE TABLE IF NOT EXISTS `2020_important_date` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table icli_web.2020_important_date: ~6 rows (approximately)
/*!40000 ALTER TABLE `2020_important_date` DISABLE KEYS */;
REPLACE INTO `2020_important_date` (`id`, `activity`, `dates`) VALUES
	(1, 'Online Abstract Submission Deadline', 'Juny 30, 2020'),
	(2, 'Online Full Paper Submission Deadline', 'July 10, 2020'),
	(3, 'Notification of Acceptance', 'July 15, 2020'),
	(4, 'Early Bird Registration Deadline', 'July 30, 2020'),
	(5, 'Regular Registration Deadline', 'August 15, 2020'),
	(6, 'Conference Date', 'September 15, 2020'),
	(7, 'Workshop', 'September 16, 2020');
/*!40000 ALTER TABLE `2020_important_date` ENABLE KEYS */;

-- Dumping structure for table icli_web.2020_payment
CREATE TABLE IF NOT EXISTS `2020_payment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cost` int(11) unsigned DEFAULT NULL,
  `status` int(1) unsigned NOT NULL COMMENT '1: Wait; 2: Paid, 3: Reject',
  `proof_img` varchar(255) NOT NULL,
  `comment` text,
  `user_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table icli_web.2020_payment: ~0 rows (approximately)
/*!40000 ALTER TABLE `2020_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `2020_payment` ENABLE KEYS */;

-- Dumping structure for table icli_web.2020_users
CREATE TABLE IF NOT EXISTS `2020_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `local` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `phone` varchar(50) DEFAULT NULL,
  `is_speaker` tinyint(1) unsigned NOT NULL,
  `category` int(3) unsigned NOT NULL DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table icli_web.2020_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `2020_users` DISABLE KEYS */;
REPLACE INTO `2020_users` (`id`, `code`, `fullname`, `email`, `institution`, `local`, `phone`, `is_speaker`, `category`, `email_verified_at`, `password`, `last_login`, `is_active`, `created_at`) VALUES
	(1, 'S3-001-009-1', 'Speaker Fandi', 's_fandi@mail.com', 'UM', 1, '+62 895-3666-29281', 1, 3, '0000-00-00 00:00:00', '$2y$10$wh454IyJu.SPrjFOqTtDsOE/sO2TZMG.7mNdretuiF1JyiIeoIi2W', '2020-05-06 06:35:01', 1, '2020-05-04 07:16:31'),
	(2, 'P0-001-248-1', 'Participant Fandi', 'p_fandi@mail.com', 'UM', 1, '+62 895-3666-29281', 0, 0, '0000-00-00 00:00:00', '$2y$10$ySOc9d8RZGPMvC91kI1pZO8R18h7OR24YylY1z6O.Yhdt5Jk5WEHW', '2020-05-06 06:28:19', 1, '2020-05-04 07:17:34');
/*!40000 ALTER TABLE `2020_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
