-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 08:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/* password for hosting : Shula@Ernest90210 */

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `community_engagement`
--

CREATE TABLE `community_engagement` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_content` text DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `community_engagement`
--

INSERT INTO `community_engagement` (`post_id`, `user_id`, `post_content`, `post_date`) VALUES
(1, 1, 'I love how nouns helps me to identify appropriate pronouns!!', '2024-04-12 01:13:19'),
(2, 1, 'I love this site', '2024-04-12 01:46:55'),
(3, 1, 'hey look i can understand English now', '2024-04-12 03:39:13'),
(4, 1, 'I love how nouns helps me to identify appropriate pronouns!!', '2024-04-12 03:44:16'),
(5, 1, 'hiiii iam loving the interactions\r\n', '2024-04-12 17:09:40'),
(6, 1, 'heyyy Brian', '2024-04-12 17:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `language` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `language_pref` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `language`, `title`, `description`, `language_pref`, `notes`, `video_url`, `creation_date`) VALUES
(1, 'English', 'Nouns', 'Learn Nouns for everyday conversations', 'A', 'This lesson covers nouns, types of nouns and how to use nouns.', 'https://youtube/embed/0l69KEx7GQo?si=naBwrUK4a_vJ3ucg', '2024-04-07 16:47:24'),
(2, 'English', 'Parts of speech', 'This lesson will teach you parts of speech.', 'A', 'This lessons talks about parts of speech and how to use them in everyday conversations', 'https://www.youtube.com/embed/tquecIG-Pws?si=VZ6kOg-ZyhJVrEMb', '2024-04-07 16:47:24'),
(3, 'English', 'Intermediate Grammar', 'Study intermediate English grammar rules and usage.', 'B', 'This lesson focuses on verb tenses and sentence structure.', 'https://www.youtube.com/embed/v=d0wV9EC3t14', '2024-04-07 16:47:24'),
(4, 'English', 'Advanced Conversation', 'Practice advanced English conversation skills.', 'C', 'This lesson includes role-playing activities and discussions on complex topics.', 'https://www.youtube.com/watch?v=example_video_3', '2024-04-07 16:47:24'),
(5, 'English', 'Advanced lesson practice', 'This lesson offers a unique conversational dialogue experience to practice new vocabulary, slang, and more.', 'C', 'Imitate lessons to practice advanced-level conversation with an expert. This will help you to avoid common mistakes and be more fluent. ', 'https://www.youtube.com/embed/watch?v=FfhZFRvmaVY', '2024-04-11 16:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_media`
--

CREATE TABLE `lesson_media` (
  `content_id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `content_type` enum('audio','video') NOT NULL,
  `content_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lesson_media`
--

INSERT INTO `lesson_media` (`content_id`, `lesson_id`, `content_type`, `content_url`) VALUES
(1, 1, 'video', 'https://www.youtube.com/embed/tquecIG-Pws?si=VZ6kOg-ZyhJVrEMb'),
(2, 2, 'video', 'https://www.youtube.com/embed/0l69KEx7GQo?si=naBwrUK4a_vJ3ucg'),
(3, 3, 'video', 'https://www.youtube.com/embed/d0wV9EC3t14'),
(4, 4, 'video', 'https://www.youtube.com/embed/d0wV9EC3t14');

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `post_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `action` enum('like','dislike') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`post_id`, `timestamp`, `user_id`, `action`) VALUES
(4, '2024-04-12 16:45:32', 7, 'like'),
(3, '2024-04-12 16:56:09', 7, 'like'),
(2, '2024-04-12 16:59:04', 7, 'like'),
(1, '2024-04-12 17:01:19', 7, 'dislike'),
(5, '2024-04-12 17:09:50', 7, 'like'),
(6, '2024-04-12 17:54:04', 12, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `proficiency_assessments`
--

CREATE TABLE `proficiency_assessments` (
  `assessment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `proficiency_level` enum('A','B','C') DEFAULT NULL,
  `assessment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proficiency_assessments`
--

INSERT INTO `proficiency_assessments` (`assessment_id`, `user_id`, `proficiency_level`, `assessment_date`) VALUES
(4, 1, 'A', '2024-04-08 13:34:25'),
(5, 1, 'A', '2024-04-08 13:38:26'),
(6, 1, 'A', '2024-04-08 13:38:32'),
(7, 1, 'A', '2024-04-08 13:47:06'),
(8, 1, 'A', '2024-04-08 13:47:08'),
(9, 1, 'A', '2024-04-08 13:52:04'),
(10, 1, 'A', '2024-04-08 13:52:09'),
(11, 1, 'A', '2024-04-08 13:52:10'),
(12, 1, 'A', '2024-04-08 13:52:11'),
(13, 1, 'A', '2024-04-08 13:52:14'),
(14, 1, 'A', '2024-04-08 13:52:15'),
(15, 1, 'A', '2024-04-08 13:52:17'),
(16, 1, 'A', '2024-04-08 13:56:11'),
(17, 1, 'A', '2024-04-08 13:59:30'),
(18, 1, 'A', '2024-04-08 13:59:58'),
(19, 1, 'A', '2024-04-08 14:00:13'),
(20, 1, 'A', '2024-04-08 14:00:39'),
(21, 1, 'A', '2024-04-08 14:01:13'),
(22, 1, 'A', '2024-04-08 14:03:03'),
(23, 1, 'B', '2024-04-08 14:03:10'),
(24, 1, 'A', '2024-04-08 14:03:39'),
(25, 1, 'A', '2024-04-08 14:04:19'),
(26, 1, 'A', '2024-04-08 14:04:57'),
(27, 1, 'A', '2024-04-08 14:04:59'),
(28, 1, 'A', '2024-04-08 14:05:27'),
(29, 1, 'A', '2024-04-08 14:05:29'),
(30, 1, 'A', '2024-04-08 14:06:00'),
(31, 1, 'A', '2024-04-08 14:06:02'),
(32, 1, 'A', '2024-04-08 14:06:31'),
(33, 1, 'A', '2024-04-08 14:07:14'),
(34, 1, 'A', '2024-04-08 14:10:10'),
(35, 1, 'A', '2024-04-08 14:16:57'),
(36, 1, 'A', '2024-04-08 14:21:36'),
(37, 1, 'A', '2024-04-08 14:43:41'),
(38, 1, 'A', '2024-04-08 15:32:06'),
(39, 1, 'B', '2024-04-08 16:34:10'),
(40, 1, 'A', '2024-04-08 21:25:16'),
(41, 1, 'B', '2024-04-08 21:26:13'),
(42, 1, 'A', '2024-04-08 21:26:35'),
(43, 2, 'A', '2024-04-10 23:17:11'),
(44, 2, 'B', '2024-04-11 00:13:34'),
(45, 2, 'A', '2024-04-11 00:15:16'),
(46, 2, 'A', '2024-04-11 15:21:03'),
(47, 8, 'C', '2024-04-12 00:07:45'),
(48, 8, 'A', '2024-04-12 00:10:32'),
(49, 8, 'A', '2024-04-12 03:49:56'),
(50, 12, 'A', '2024-04-12 17:52:56'),
(51, 12, 'A', '2024-04-12 18:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `progress_tracking`
--

CREATE TABLE `progress_tracking` (
  `tracking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `completion_status` enum('incomplete','complete') NOT NULL,
  `proficiency_level` enum('A','B','C') DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progress_tracking`
--

INSERT INTO `progress_tracking` (`tracking_id`, `user_id`, `lesson_id`, `completion_status`, `proficiency_level`, `timestamp`) VALUES
(1, 1, 1, 'incomplete', 'A', '2024-04-11 19:01:30'),
(2, 8, 1, 'complete', 'A', '2024-04-12 00:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `role` int(20) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `gender`, `dob`, `role`, `registration_date`) VALUES
(1, 'Troy Lindsay Christian Burke', 'gufix@mailinator.com', '$2y$10$U.WRj4CAq0qzyCD/E0hfquM8ZiHTylhMPbQrtbnyEG8lpk0UCniZe', '1', '1985-06-21', 0, '2024-04-08 13:33:58'),
(2, 'Aphrodite Wolf Baker Yang', 'mago@mailinator.com', '$2y$10$lVwHKDGEig7pwy488IF4xeYJthGiI4kpA6kc.8gmf2TwANo8BT9Ke', '1', '1978-11-28', 0, '2024-04-10 23:16:45'),
(4, 'Felicia Maia', 'felicia@mailinator.com', '$2y$10$sGYruysewfElyhg6W.02MuiuAp.3gM7i9qVAiviO.elalJF6vZGvy', '0', '1972-05-11', 0, '2024-04-11 16:06:18'),
(5, ' Albert Moon', 'nodekic@mailinator.com', '$2y$10$UibdJCriyAgNOLYMjUmZh.1tAG/hCa3ZYLUHKXIM8RWk1d2KEPCZq', '1', '2016-01-18', 1, '2024-04-11 18:53:01'),
(6, 'Ira Nadine ', 'Ira@mailinator.com', '$2y$10$1R3N/BW0LiDnp/RWv/dm.Ozpf2c5q3IYzA35qS50.PBBMzZpBQ0VS', '0', '2004-05-19', 0, '2024-04-11 18:53:54'),
(7, 'Melendez Mendoza', 'Mendoza@mailinator.com', '$2y$10$svPEE3MBS0Y53r28e3tzL.UJ/vXOcJUfjXVphuAdQRP6R8id0iIv6', '1', '2002-11-18', 1, '2024-04-11 18:55:00'),
(8, 'Ray Camden', 'Ray@mailinator.com', '$2y$10$Ak2Qx3HDFUeZsiQzH1sYUORsEmL1/tBeono66QYujdT8RkasmDhLK', '1', '1994-03-16', 1, '2024-04-12 00:07:21'),
(11, 'Quail Savage', '', '$2y$10$Q/nYCWBGrIKNwoXwR6/.su2/mN9fbxvgi2O7ri3nXjNCUhAd4M0ZC', '1', '1974-04-12', 1, '2024-04-12 17:22:24'),
(12, 'Ebony  Colon', 'Colon@mailinator.com', '$2y$10$uFEjPZkofis0DsQnFQfrpe9gPbCCtgFsEhHEJ5kn4846A5e2bgG/W', '1', '1988-10-07', 0, '2024-04-12 17:39:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community_engagement`
--
ALTER TABLE `community_engagement`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `lesson_media`
--
ALTER TABLE `lesson_media`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD KEY `NOT NULL` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `proficiency_assessments`
--
ALTER TABLE `proficiency_assessments`
  ADD PRIMARY KEY (`assessment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `progress_tracking`
--
ALTER TABLE `progress_tracking`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community_engagement`
--
ALTER TABLE `community_engagement`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lesson_media`
--
ALTER TABLE `lesson_media`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proficiency_assessments`
--
ALTER TABLE `proficiency_assessments`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `progress_tracking`
--
ALTER TABLE `progress_tracking`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community_engagement`
--
ALTER TABLE `community_engagement`
  ADD CONSTRAINT `community_engagement_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `lesson_media`
--
ALTER TABLE `lesson_media`
  ADD CONSTRAINT `lesson_media_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`);

--
-- Constraints for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD CONSTRAINT `NOT NULL` FOREIGN KEY (`post_id`) REFERENCES `community_engagement` (`post_id`),
  ADD CONSTRAINT `post_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `proficiency_assessments`
--
ALTER TABLE `proficiency_assessments`
  ADD CONSTRAINT `proficiency_assessments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `progress_tracking`
--
ALTER TABLE `progress_tracking`
  ADD CONSTRAINT `progress_tracking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `progress_tracking_ibfk_2` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
