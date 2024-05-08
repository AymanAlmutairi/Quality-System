-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2024 at 05:15 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaqra_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `clos`
--

DROP TABLE IF EXISTS `clos`;
CREATE TABLE IF NOT EXISTS `clos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `type` int NOT NULL,
  `outcomes` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clos`
--

INSERT INTO `clos` (`id`, `course_id`, `type`, `outcomes`, `method`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'bcc', 'gvb', '2024-03-13 09:12:11', '2024-03-13 09:12:11'),
(2, 1, 2, 'bcc', 'gvb', '2024-03-13 09:12:28', '2024-03-13 09:12:28'),
(3, 1, 3, 'bcc', 'gvb', '2024-03-13 09:12:42', '2024-03-13 09:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_hours` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `course_id`, `title`, `content_hours`, `created_at`, `updated_at`) VALUES
(1, 1, 'jjj', 5, '2024-03-11 11:11:57', '2024-03-11 11:11:57'),
(2, 1, 'jjj', 5, '2024-03-11 11:12:17', '2024-03-11 11:12:17'),
(3, 1, 'kk', 4, '2024-03-11 11:15:13', '2024-03-11 11:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int DEFAULT NULL,
  `institution` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Academic_year` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor_id` int NOT NULL,
  `Coordinator_id` int NOT NULL,
  `user_id` int NOT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_sections` int DEFAULT NULL,
  `number_of_start` int DEFAULT NULL,
  `number_of_complete` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `number_of_lectures` int DEFAULT NULL,
  `studio` int DEFAULT NULL,
  `field` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutorial` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `recommendations` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `comments` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `section_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `code`, `college`, `department`, `program`, `collage`, `level`, `institution`, `Academic_year`, `semester`, `instructor_id`, `Coordinator_id`, `user_id`, `location`, `number_of_sections`, `number_of_start`, `number_of_complete`, `start_date`, `number_of_lectures`, `studio`, `field`, `tutorial`, `others`, `created_at`, `updated_at`, `recommendations`, `comments`, `section_id`) VALUES
(1, 'Central Web Orchestrator', '59197', 'Vel perferendis at provident totam possimus dolorem.', 'upd', 'A minus deserunt. Harum perferendis voluptatibus provident perspiciatis. Deleniti saepe adipisci doloremque.', NULL, 5, 'Quod', '4', 'Select Semester', 8, 7, 1, 'Officia', 11, 529, 558, '2023-09-28', 224, 324, 'Ea', 'Quas', 'Veritatis', '2024-03-07 05:23:34', '2024-04-19 21:36:48', 'HKJ', 'NBKJ', 1),
(2, 'Direct Response Coordinator', '14894', 'Dolorum cumque labore.', 'Exercitationem eius explicabo culpa voluptatibus magnam.', 'Harum neque at soluta quia voluptates numquam ad. Perferendis eius sequi omnis aliquid. Blanditiis adipisci sapiente.', NULL, 3, 'Unde a quidem corrupti commodi eligendi nostrum veritatis.', '2', 'Summer', 2, 7, 1, 'Fugiat vitae animi eaque sint.', 15, 358, 380, '2024-10-16', 84, 100, 'Ratione a adipisci nihil nisi excepturi inventore id aliquid odio.', 'Ab incidunt commodi quaerat.', 'Minus quia iusto unde soluta molestiae.', '2024-03-14 10:13:24', '2024-03-14 10:13:24', NULL, NULL, 0),
(3, 'Lead Infrastructure Developer', '84', 'Dres.', 'olestias perspiciatis.', 're nihil quod odio. Consequatur quo quod inventore nemo quam commodi error aliquid officia. Nam animi error eius assumenda aliquam velit eos magnam ipsam.', NULL, 4, 'repellat.', '4', 'Winter', 8, 7, 1, 'Quia incidunt sapiente voluptate culpa.', 1, 220, 4, '2023-12-11', 46, 508, 'kkk', 'jjj', 'il fugiat id culpa blanditiis.', '2024-03-14 10:17:59', '2024-03-14 10:17:59', NULL, NULL, 0),
(4, 'Legacy Research Manager', '93164-3184', 'Doloribus cupiditate', 'Voluptates alias aut debitis.', 'Consectetur fuga del', NULL, 3, 'Voluptas quibusdam eos voluptate d', '3', 'Winter', 8, 7, 1, 'Unde atque sapiente mollitia ea.', 14, 370, 18, '2024-12-29', 439, 594, 'Laboriosam animi facilis provident nihil.', 'Vero consequatur n', 'Optio deserunt commodi as', '2024-03-14 11:01:25', '2024-03-14 11:01:25', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_requests`
--

DROP TABLE IF EXISTS `course_requests`;
CREATE TABLE IF NOT EXISTS `course_requests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL,
  `course_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_requests`
--

INSERT INTO `course_requests` (`id`, `status`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(5, 1, 15, 1, '2024-04-20 02:22:11', '2024-04-20 02:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

DROP TABLE IF EXISTS `course_user`;
CREATE TABLE IF NOT EXISTS `course_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `course_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 11, 1, NULL, NULL),
(2, 11, 2, NULL, NULL),
(3, 11, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `q1` int DEFAULT NULL,
  `q2` int DEFAULT NULL,
  `q3` int DEFAULT NULL,
  `q4` int DEFAULT NULL,
  `q5` int DEFAULT NULL,
  `q6` int DEFAULT NULL,
  `section_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `section_id`, `created_at`, `updated_at`, `method_id`) VALUES
(1, 12, 311, 55, 581, 59, 549, 472, 2, '2024-04-17 22:12:13', '2024-04-17 22:12:13', 0),
(2, 12, 311, 55, 581, 59, 549, 472, 2, '2024-04-17 22:12:41', '2024-04-17 22:12:41', 0),
(3, 7, 3, 5, 3, 4, 4, 5, 1, '2024-04-17 22:14:28', '2024-04-17 22:14:28', 0),
(4, 4, 5, 5, 5, 5, 5, 5, 1, '2024-04-17 22:52:31', '2024-04-17 22:52:31', 0),
(5, 4, 5, 10, 5, 5, 5, 5, 1, '2024-04-18 17:54:44', '2024-04-18 17:54:44', 0),
(6, 4, 507, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-19 22:55:05', '2024-04-19 22:55:05', 0),
(7, 9, 508, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-19 22:58:29', '2024-04-19 22:58:29', 0),
(8, 6, 5, 5, 4, 5, NULL, NULL, 1, '2024-04-19 23:23:41', '2024-04-19 23:23:41', 0),
(9, 6, 163, 260, 158, 156, NULL, NULL, 1, '2024-04-19 23:34:20', '2024-04-19 23:34:20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_06_113647_add_ad_aress_to_users', 2),
(10, '2024_03_06_204517_create_courses_table', 3),
(12, '2024_03_11_024424_create_course_content_table', 4),
(13, '2024_03_13_010429_create_clos_table', 5),
(14, '2024_03_13_020030_add_columns_to_courses', 6),
(15, '2024_03_13_201124_create_sections_table', 7),
(17, '2024_03_14_021240_add_section_id_to_courses', 8),
(18, '2024_03_14_024719_create_user_courses_table', 8),
(19, '2024_03_16_230117_add_feilds_to_users', 9),
(20, '2024_03_17_204321_create_opertions_table', 10),
(21, '2024_04_17_223048_create_grades_table', 11),
(23, '2024_04_18_001700_create_questions_table', 12),
(24, '2024_04_20_013310_add_question_id_to_grades', 13),
(26, '2024_04_20_025958_create_course_requests_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

DROP TABLE IF EXISTS `operations`;
CREATE TABLE IF NOT EXISTS `operations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `count` int NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `questions_number` int NOT NULL,
  `clo_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `count`, `code`, `questions_number`, `clo_id`, `created_at`, `updated_at`) VALUES
(1, 217, '95770-9395', 436, 131, '2024-03-18 05:33:09', '2024-03-18 05:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q1_total` int DEFAULT NULL,
  `q2_total` int DEFAULT NULL,
  `q3_total` int DEFAULT NULL,
  `q4_total` int DEFAULT NULL,
  `q5_total` int DEFAULT NULL,
  `q6_total` int DEFAULT NULL,
  `q1_clo` int DEFAULT NULL,
  `q2_clo` int DEFAULT NULL,
  `q3_clo` int DEFAULT NULL,
  `q4_clo` int DEFAULT NULL,
  `q5_clo` int DEFAULT NULL,
  `q6_clo` int DEFAULT NULL,
  `course_id` int NOT NULL,
  `section_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `method`, `q1_total`, `q2_total`, `q3_total`, `q4_total`, `q5_total`, `q6_total`, `q1_clo`, `q2_clo`, `q3_clo`, `q4_clo`, `q5_clo`, `q6_clo`, `course_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'bbb', 5, NULL, NULL, NULL, NULL, NULL, 2, 0, 0, 0, 0, 0, 1, 0, '2024-04-19 21:36:10', '2024-04-19 21:36:10'),
(2, 'nnn', 55, NULL, NULL, NULL, NULL, NULL, 2, 0, 0, 0, 0, 0, 1, 1, '2024-04-19 21:37:02', '2024-04-19 21:37:02'),
(3, 'test count', 5, 5, 5, 5, NULL, NULL, 2, 2, 1, 2, 0, 0, 1, 1, '2024-04-19 23:13:43', '2024-04-19 23:13:43'),
(4, 'test 6', 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 1, 1, '2024-04-19 23:35:51', '2024-04-19 23:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
CREATE TABLE IF NOT EXISTS `sections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `section_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_id`, `college`, `department`, `program`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, '555', 'nnn', 'mm', 'mm', 8, '2024-03-14 04:37:44', '2024-03-14 04:37:44'),
(2, '5[', 'ggg', 'dd', 'ff', 8, '2024-03-14 09:19:32', '2024-03-14 09:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final` int DEFAULT NULL,
  `quiz` int DEFAULT NULL,
  `midterm` int DEFAULT NULL,
  `assignments` int DEFAULT NULL,
  `project` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `student_id`, `collage`, `department`, `program`, `role`, `remember_token`, `created_at`, `updated_at`, `address`, `final`, `quiz`, `midterm`, `assignments`, `project`, `lap`, `others`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$12$08rZc9lVn5yzy3p2YI/Yyuh8YuGmss1X39bQngA52lzXFjwqRWhie', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2024-03-03 07:47:51', '2024-03-03 07:47:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'admin', 'admin@admin.comm', NULL, '$2y$12$08rZc9lVn5yzy3p2YI/Yyuh8YuGmss1X39bQngA52lzXFjwqRWhie', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2024-03-03 07:47:51', '2024-03-03 07:47:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Angus Koepp', 'your.email+fakedata14096@gmail.com', NULL, '$2y$12$08rZc9lVn5yzy3p2YI/Yyuh8YuGmss1X39bQngA52lzXFjwqRWhie', '01000107804', 'Magnam similique vero consequuntur.', 'Quidem distinctio ex ullam quo aliquid voluptatum.', 'Ad recusandae quaerat odio quod harum quis similique voluptatum sequi.', 'Repudiandae deserunt nihil nisi perferendis porro aliquam quos. Nam dolor reiciendis omnis velit. Eos sint ipsum eveniet.', 'user', NULL, '2024-03-03 07:47:51', '2024-03-17 07:13:48', NULL, 280, 266, 40, 279, '56', '262', 'Fugiat incidunt in.'),
(4, 'nm', 'nn@gmail.com', NULL, '$2y$12$yZh/gxg5gvZCbi9V8lJVSei4ZqKFgBj2Fs2WCpWplmbsRzqag.UAu', '01100501246', NULL, NULL, NULL, NULL, 'user', NULL, '2024-03-06 20:37:29', '2024-03-06 20:37:29', 'nnnn', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'nada', 'nada@gmail.com', NULL, '$2y$12$NuzGDRiv73dBGhNRamxVUeaxAGg.28RniMNn.8mgiGHHjLsjc2oGq', '011', NULL, NULL, NULL, NULL, 'program_coordinator', NULL, '2024-03-06 21:28:09', '2024-03-06 21:28:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'hjgh', 'notabil@mailinator.com', NULL, '$2y$12$U4Hfj5w7NcipoJWvWLKoReVRDTpBEieoXZAt0a0mUiT8KDvkh.qcG', NULL, '55', 'fcih', 'is', 'general', 'user', NULL, '2024-03-07 04:18:14', '2024-03-07 04:18:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'nno', 'nn@dd.com', NULL, '$2y$12$dCg06/TwAw0lTHENrtn0DeEYhnZfD8ibNKMXm7dfCEE.BwkY4qkDi', '0512312312', NULL, NULL, NULL, NULL, 'course_coordinator', NULL, '2024-03-07 05:09:17', '2024-03-07 05:09:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'nnyy', 'kk@hh.com', NULL, '$2y$12$9yk0KFlY98TAZuPMFAA9AO21U6ilbJ97kkLldyfdBQg.RlbPZsHPy', '011', NULL, NULL, NULL, NULL, 'instructor', NULL, '2024-03-07 05:10:30', '2024-03-07 05:10:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Amalia Jacobs', 'your.email+fakedata82322@gmail.com', NULL, '$2y$12$09jvzgesTxIt.9BdH6MR8eLku2ymXlbN.FXzc4eGtcxI.566Vm14C', NULL, 'Atque veritatis ut exercitationem inventore facilis ut maiores.', 'Ad tenetur sint error fugit ratione vero et.', 'Magni corrupti quod officiis.', 'Vitae odit earum iure non vero. Quam fugit odit provident totam officia. Sed hic quam blanditiis impedit.', 'user', NULL, '2024-03-14 11:05:08', '2024-03-14 11:05:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Amalia Jacobs', 'your.email+fakedata82jj322@gmail.com', NULL, '$2y$12$eFQ9fcEAkRmOBhO3fiZDEuKKCGz9ountwnWhnJEhssokAfFXjgtCe', NULL, 'Atque veritatis ut exercitationem inventore facilis ut maiores.', 'Ad tenetur sint error fugit ratione vero et.', 'Magni corrupti quod officiis.', 'Vitae odit earum iure non vero. Quam fugit odit provident totam officia. Sed hic quam blanditiis impedit.', 'user', NULL, '2024-03-14 11:06:35', '2024-03-14 11:06:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Amalia Jacobs', 'your.email+fakedata8j2jj322@gmail.com', NULL, '$2y$12$D2jCh4SBdBh7Eloa0TPjTOsZmRJAA9/fUCONegJIzZORgUmjaSQry', NULL, 'Atque veritatis ut exercitationem inventore facilis ut maiores.', 'Ad tenetur sint error fugit ratione vero et.', 'Magni corrupti quod officiis.', 'Vitae odit earum iure non vero. Quam fugit odit provident totam officia. Sed hic quam blanditiis impedit.', 'user', NULL, '2024-03-14 11:08:34', '2024-03-14 11:08:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'nn', 'nada@admin.com', NULL, '$2y$12$RcZ3eoymw4KHYjca1Z34yuIdO6hCrMBMP1PW0iqHKPeIqTWvwn5va', '01100501246', NULL, NULL, NULL, NULL, 'admin', NULL, '2024-04-17 20:27:46', '2024-04-17 20:27:46', 'nn', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'nn', 'adminn@admin.com', NULL, '$2y$12$uMmxc86x9CwaxaXyiGXcru6ISl5D4T3yxSGn8iYKuXAFW0Am9uHUm', '01100501246', NULL, NULL, NULL, NULL, 'admin', NULL, '2024-04-18 17:52:59', '2024-04-18 17:52:59', 'nnn', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'nmb', 'adminp@admin.com', NULL, '$2y$12$aieNdlC6cW2M.z/QPHI8bOK5UzryL0XTC92gRMYdqQmIf8IErAAEu', '01100501246', NULL, NULL, NULL, NULL, 'user', NULL, '2024-04-19 19:48:06', '2024-04-19 19:48:06', 'nn', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'nnn', 'nadaa@admin.com', NULL, '$2y$12$/WNRFc6FlsjsOwumolsYOO4MDRvZe.c5X/ZMxlOLUVJcAfSv.ujzu', '01100501246', NULL, NULL, NULL, NULL, 'course_coordinator', NULL, '2024-04-19 19:57:35', '2024-04-19 19:57:35', 'bb', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
