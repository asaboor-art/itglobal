-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table itcglobal.contact_forms: ~8 rows (approximately)
INSERT INTO `contact_forms` (`id`, `first_name`, `last_name`, `email`, `message`, `subject`, `created_at`, `updated_at`) VALUES
	(1, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'ghazafnar', NULL, '2022-11-06 16:06:35', '2022-11-06 16:06:35'),
	(2, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'ghazafnar', 'ghazanfar', '2022-11-06 16:23:53', '2022-11-06 16:23:53'),
	(3, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'ghazafnar', 'ghazanfar', '2022-11-06 16:25:43', '2022-11-06 16:25:43'),
	(4, 'Ghazanfar', 'ghazanfar', 'ghazanfar@gmail.com', 'dfafasdfasdfasdfs', 'test', '2022-11-06 16:29:16', '2022-11-06 16:29:16'),
	(5, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'sdafas fasdfasdfas f', 'test email', '2022-11-06 16:33:04', '2022-11-06 16:33:04'),
	(6, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'sdafas fasdfasdfas f', 'test email', '2022-11-06 16:34:09', '2022-11-06 16:34:09'),
	(7, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'sdfasdfasdfsdf', 'test email', '2022-11-06 16:39:49', '2022-11-06 16:39:49'),
	(8, 'Labore enim ut in al', 'Nisi pariatur Autem', 'fagajuk@mailinator.com', 'Officia consequatur', 'Velit sint dolor har', '2022-11-07 15:57:18', '2022-11-07 15:57:18'),
	(9, 'Quis expedita recusa', 'Illum corrupti aut', 'qavohy@mailinator.com', 'Minus error nulla vo', 'Asperiores fuga Iru', '2022-11-10 11:44:07', '2022-11-10 11:44:07'),
	(10, 'Anim veniam soluta', 'undefined', 'cojaqe@mailinator.com', 'Anim nulla ut quia s', 'Mollitia quae in vol', '2022-11-19 12:53:36', '2022-11-19 12:53:36'),
	(11, 'Facilis eveniet atq', 'undefined', 'navyti@mailinator.com', 'Et est tenetur quas', 'Corporis tempora inc', '2022-12-15 21:32:06', '2022-12-15 21:32:06');

-- Dumping data for table itcglobal.custom_forms: ~8 rows (approximately)
INSERT INTO `custom_forms` (`id`, `name`, `slug`, `form_data`, `created_at`, `updated_at`) VALUES
	(1, 'Get A Quote Form', 'get-a-quote', NULL, '2022-11-07 15:47:54', '2022-11-07 15:47:54'),
	(2, 'Get A Quote Form', 'get-a-quote', '[{"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825389_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:49:49', '2022-11-07 15:49:49'),
	(3, 'Get A Quote Form', 'get-a-quote', '[{"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825549_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:52:29', '2022-11-07 15:52:29'),
	(4, 'Get A Quote Form', 'get-a-quote', '[{"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825602_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:53:23', '2022-11-07 15:53:23'),
	(5, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825652_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:54:12', '2022-11-07 15:54:12'),
	(6, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825724_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:55:24', '2022-11-07 15:55:24'),
	(7, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825767.docx"}]', '2022-11-07 15:56:07', '2022-11-07 15:56:07'),
	(8, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825802.docx"}]', '2022-11-07 15:56:43', '2022-11-07 15:56:43'),
	(9, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Ignacia"}, {"key": "email", "name": "Email", "value": "byda@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "80472222447555"}, {"key": "message", "name": "Message", "value": "Aut reprehenderit ne"}, {"key": "address", "name": "Address", "value": "Ducimus dolores seq"}, {"key": "file", "name": "File", "value": "undefined"}]', '2022-11-23 09:22:33', '2022-11-23 09:22:33');

-- Dumping data for table itcglobal.failed_jobs: ~0 rows (approximately)

-- Dumping data for table itcglobal.footers: ~0 rows (approximately)
INSERT INTO `footers` (`id`, `name`, `view`, `is_delete`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Footerv1', 'footerv1', 0, 1, '2022-12-15 08:51:20', '2022-12-15 09:13:15');

-- Dumping data for table itcglobal.headers: ~1 rows (approximately)
INSERT INTO `headers` (`id`, `name`, `view`, `is_delete`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Headerv1', 'headerv1', 0, 1, '2022-12-15 06:57:48', '2022-12-15 07:45:44');

-- Dumping data for table itcglobal.layouts: ~0 rows (approximately)

-- Dumping data for table itcglobal.migrations: ~10 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_05_03_000001_create_customer_columns', 1),
	(4, '2019_05_03_000002_create_subscriptions_table', 1),
	(5, '2019_05_03_000003_create_subscription_items_table', 1),
	(6, '2019_08_19_000000_create_failed_jobs_table', 1),
	(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(8, '2022_10_21_145030_create_newsletters_table', 1),
	(9, '2022_10_21_150416_create_contact_forms_table', 1),
	(10, '2022_11_07_044218_create_custom_forms_table', 2),
	(11, '2022_11_20_101937_create_pages_table', 3),
	(12, '2022_12_11_095022_create_layouts_table', 4),
	(13, '2022_12_11_095733_create_headers_table', 4),
	(14, '2022_12_11_100550_create_footers_table', 4);

-- Dumping data for table itcglobal.model_has_roles: ~0 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);

-- Dumping data for table itcglobal.newsletters: ~0 rows (approximately)
INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'ghazanfar1507a@gmail.com', '2022-12-15 09:56:31', '2022-12-15 09:56:31');

-- Dumping data for table itcglobal.pages: ~8 rows (approximately)
INSERT INTO `pages` (`id`, `name`, `slug`, `view`, `layout`, `description`, `is_active`, `has_custom_view`, `display_to_menu`, `is_delete`, `created_at`, `updated_at`, `is_home_page`) VALUES
	(1, 'Home', 'home', 'indexv1', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:48:06', '2022-11-20 08:48:06', 1),
	(2, 'About Us', 'about-us', 'about-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:52:35', '2022-11-20 08:52:35', 0),
	(4, 'Contact Us', 'contact-us', 'contact-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:59:50', '2022-11-20 08:59:50', 0),
	(5, 'Web Design', 'web-design', 'web-design', 'layoutv1', '<p><strong>Holiday Sale ends Dec 15</strong>| Courses from $12.99. Use code GIFT15 to save an extra 15%.</p>', 1, 1, 1, 0, '2022-11-20 09:05:40', '2022-12-13 09:38:02', 0),
	(6, 'Seo', 'seo', 'seo', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>', 1, 1, 1, 0, '2022-11-20 09:08:11', '2022-12-13 09:26:20', 0),
	(8, 'Social Media', 'social-media', 'social-media', 'layoutv1', '<p><strong>Holiday Sale ends Dec 15</strong>| Courses from $12.99. Use code GIFT15 to save an extra 15%.</p>', 1, 1, 1, 0, '2022-12-13 09:28:33', '2022-12-13 09:43:55', 0),
	(9, 'Branding', 'branding', 'branding', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop</p>', 1, 1, 1, 0, '2022-12-13 09:36:07', '2022-12-13 09:36:07', 0),
	(10, 'Paid Advertisement', 'paid-advertisement', 'paid-advertisement', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop</p>', 1, 1, 1, 0, '2022-12-13 09:37:11', '2022-12-13 09:37:11', 0);

-- Dumping data for table itcglobal.password_resets: ~0 rows (approximately)

-- Dumping data for table itcglobal.permissions: ~0 rows (approximately)

-- Dumping data for table itcglobal.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table itcglobal.roles: ~0 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin', NULL, NULL);

-- Dumping data for table itcglobal.role_has_permissions: ~0 rows (approximately)

-- Dumping data for table itcglobal.subscriptions: ~0 rows (approximately)

-- Dumping data for table itcglobal.subscription_items: ~0 rows (approximately)

-- Dumping data for table itcglobal.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_delete`, `login_at`, `logout_at`, `is_login`) VALUES
	(1, 'Admin\r\n', 'admin@admin.com', NULL, '$2y$10$WbO5vW7epMgMutoA7iFBmes4VXQ8tQf2afN7YGJRDCD41hcAGPOX6', NULL, '2022-11-20 13:52:44', '2022-12-15 09:19:20', 0, '2022-12-15 03:23:44', '2022-12-15 09:19:20', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
