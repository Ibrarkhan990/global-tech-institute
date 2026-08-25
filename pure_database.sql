SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `app_sequences`;
CREATE TABLE `app_sequences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_app_seq_year` (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_no` varchar(25) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `institution` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `document_path` varchar(255) DEFAULT NULL,
  `status` enum('pending','reviewing','approved','rejected') NOT NULL DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_applications_no` (`application_no`),
  KEY `idx_applications_course` (`course_id`),
  KEY `idx_applications_status` (`status`),
  KEY `idx_applications_email` (`email`),
  KEY `idx_applications_created` (`created_at`),
  CONSTRAINT `fk_applications_course` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `applications` (`id`, `application_no`, `full_name`, `father_name`, `email`, `phone`, `whatsapp`, `date_of_birth`, `gender`, `address`, `city`, `course_id`, `batch`, `timing`, `education`, `institution`, `message`, `document_path`, `status`, `admin_notes`, `created_at`, `updated_at`) VALUES ('1', 'GTI-2026-000001', 'Muhammad Ibrar khan', '', 'ibrarkhanlk566@gmail.com', '03326485172', '', NULL, NULL, '', 'Bannu', '1', 'Monday to Friday', 'Morning', 'Matric', 'fcchf', 'b vh hg', NULL, 'approved', '', '2026-08-24 09:21:52', '2026-08-24 09:23:57');
INSERT INTO `applications` (`id`, `application_no`, `full_name`, `father_name`, `email`, `phone`, `whatsapp`, `date_of_birth`, `gender`, `address`, `city`, `course_id`, `batch`, `timing`, `education`, `institution`, `message`, `document_path`, `status`, `admin_notes`, `created_at`, `updated_at`) VALUES ('2', 'GTI-2026-000002', 'Muhammad Ibrar khan', '', 'ibrarkhan@gmail.com', '03326485172', '', NULL, NULL, '', 'Bannu', '3', 'Monday to Friday', 'Morning', 'Intermediate', 'fcchf', 'bbbbbbbbbbb', NULL, 'pending', NULL, '2026-08-24 12:15:13', '2026-08-24 12:15:13');

DROP TABLE IF EXISTS `contact_settings`;
CREATE TABLE `contact_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map_url` text DEFAULT NULL,
  `working_hours` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contact_settings` (`id`, `email`, `phone`, `whatsapp`, `address`, `map_url`, `working_hours`, `facebook_url`, `instagram_url`, `linkedin_url`, `youtube_url`, `updated_at`) VALUES ('1', 'info@globaltech.edu', '+92 300 0000000', '+92 300 0000000', 'Tech Innovation Center, Bannu, Pakistan', '', 'Monday – Saturday: 9 AM – 5 PM | Sunday: Closed', 'https://facebook.com/globaltech', 'https://instagram.com/globaltech', 'https://linkedin.com/company/globaltech', 'https://youtube.com/@globaltech', '2026-08-24 09:13:29');

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_courses_slug` (`slug`),
  KEY `idx_courses_status` (`status`),
  KEY `idx_courses_sort` (`sort_order`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `courses` (`id`, `title`, `slug`, `short_description`, `description`, `duration`, `level`, `image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES ('1', 'Python with AI', 'python-with-ai', NULL, NULL, '3 Months', 'Beginner to Intermediate', NULL, 'active', '1', '2026-08-23 15:19:39', '2026-08-23 15:19:39');
INSERT INTO `courses` (`id`, `title`, `slug`, `short_description`, `description`, `duration`, `level`, `image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES ('2', 'Web Development', 'web-development', NULL, NULL, '4 Months', 'Beginner to Advanced', NULL, 'active', '2', '2026-08-23 15:19:39', '2026-08-23 15:19:39');
INSERT INTO `courses` (`id`, `title`, `slug`, `short_description`, `description`, `duration`, `level`, `image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES ('3', 'CIT (Certificate in IT)', 'cit', NULL, NULL, '2 Months', 'Beginner', NULL, 'active', '3', '2026-08-23 15:19:39', '2026-08-23 15:19:39');
INSERT INTO `courses` (`id`, `title`, `slug`, `short_description`, `description`, `duration`, `level`, `image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES ('4', 'DIT (Diploma in IT)', 'dit', NULL, NULL, '6 Months', 'Beginner to Intermediate', NULL, 'active', '4', '2026-08-23 15:19:39', '2026-08-23 15:19:39');
INSERT INTO `courses` (`id`, `title`, `slug`, `short_description`, `description`, `duration`, `level`, `image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES ('5', 'MS Office Automation', 'ms-office-automation', NULL, NULL, '1 Month', 'Beginner', NULL, 'active', '5', '2026-08-23 15:19:39', '2026-08-23 15:19:39');
INSERT INTO `courses` (`id`, `title`, `slug`, `short_description`, `description`, `duration`, `level`, `image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES ('6', 'English Language', 'english-language', NULL, NULL, '2 Months', 'Beginner to Advanced', NULL, 'active', '6', '2026-08-23 15:19:39', '2026-08-23 15:19:39');
INSERT INTO `courses` (`id`, `title`, `slug`, `short_description`, `description`, `duration`, `level`, `image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES ('7', 'FB, TikTok & YT Automation', 'social-media-automation', NULL, NULL, '2 Months', 'Beginner', NULL, 'active', '7', '2026-08-23 15:19:39', '2026-08-23 15:19:39');

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text NOT NULL,
  `inquiry_type` varchar(100) DEFAULT 'General Inquiry',
  `status` enum('unread','read','replied','archived') NOT NULL DEFAULT 'unread',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idx_messages_status` (`status`),
  KEY `idx_messages_email` (`email`),
  KEY `idx_messages_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `newsletter_subscribers`;
CREATE TABLE `newsletter_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `status` enum('active','unsubscribed') NOT NULL DEFAULT 'active',
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `unsubscribed_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_newsletter_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin') NOT NULL DEFAULT 'admin',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_users_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `last_login`, `created_at`, `updated_at`) VALUES ('1', 'Super Admin', 'admin@globaltech.edu', '$2y$12$FN3gn27144ZWNMLIy/JQT.CpBGtpuW1Gm.G71WvSMFTXqZCEUxo3K', 'admin', 'active', '2026-08-24 10:50:07', '2026-08-23 15:19:39', '2026-08-24 10:50:07');


SET FOREIGN_KEY_CHECKS = 1;
