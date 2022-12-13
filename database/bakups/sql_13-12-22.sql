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

-- Dumping data for table itcglobal.pages: ~8 rows (approximately)
INSERT INTO `pages` (`id`, `name`, `slug`, `view`, `layout`, `description`, `is_active`, `has_custom_view`, `display_to_menu`, `is_delete`, `created_at`, `updated_at`, `is_home_page`) VALUES
	(1, 'Home', 'home', 'indexv1', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:48:06', '2022-11-20 08:48:06', 1),
	(2, 'About Us', 'about-us', 'about-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:52:35', '2022-11-20 08:52:35', 0),
	(4, 'Contact Us', 'contact-us', 'contact-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:59:50', '2022-11-20 08:59:50', 0),
	(5, 'Web Design', 'web-design', 'web-design', 'layoutv1', '<p><strong>Holiday Sale ends Dec 15</strong>| Courses from $12.99. Use code GIFT15 to save an extra 15%.</p>', 1, 1, 1, 0, '2022-11-20 09:05:40', '2022-12-13 09:38:02', 0),
	(6, 'Seo', 'seo', 'seo', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>', 1, 1, 1, 0, '2022-11-20 09:08:11', '2022-12-13 09:26:20', 0),
	(8, 'Social Media', 'social-midea', 'social-media', 'layoutv1', '<p><strong>Holiday Sale ends Dec 15</strong>| Courses from $12.99. Use code GIFT15 to save an extra 15%.</p>', 1, 1, 1, 0, '2022-12-13 09:28:33', '2022-12-13 09:28:33', 0),
	(9, 'Branding', 'branding', 'branding', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop</p>', 1, 1, 1, 0, '2022-12-13 09:36:07', '2022-12-13 09:36:07', 0),
	(10, 'Paid Advertisement', 'paid-advertisement', 'paid-advertisement', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop</p>', 1, 1, 1, 0, '2022-12-13 09:37:11', '2022-12-13 09:37:11', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
