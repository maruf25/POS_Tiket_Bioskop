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


-- Dumping database structure for ticketing_movie
CREATE DATABASE IF NOT EXISTS `ticketing_movie` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ticketing_movie`;

CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping structure for table ticketing_movie.film
CREATE TABLE IF NOT EXISTS `film` (
  `film_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `duration(m)` int NOT NULL,
  `weekday_price` float NOT NULL,
  `weekend_price` float NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ticketing_movie.film: ~5 rows (approximately)
REPLACE INTO `film` (`film_id`, `name`, `duration(m)`, `weekday_price`, `weekend_price`, `picture`) VALUES
	(1, 'Coba', 120, 15000, 20000, '20220403091812.png'),
	(2, 'Coba 2', 120, 15000, 20000, '20220408140748.png'),
	(3, 'Coba 3', 110, 20000, 25000, '20221121092915.png'),
	(4, 'Pocong', 110, 13000, 18000, '20230307191921.png'),
	(5, 'Pocong Limited Edition', 999, 15000, 20000, '20220404095141.png');

-- Dumping structure for table ticketing_movie.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ticketing_movie.migrations: ~9 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2023_03_08_042939_create_film_table', 0),
	(2, '2023_03_09_080748_create_film_table', 0),
	(3, '2023_03_09_080748_create_theatre_table', 0),
	(4, '2023_03_09_080748_create_timetable_table', 0),
	(5, '2023_03_09_080748_create_transaction_table', 0),
	(6, '2023_03_09_080748_create_user_table', 0),
	(7, '2023_03_09_080748_create_voucher_table', 0),
	(8, '2023_03_09_080749_add_foreign_keys_to_timetable_table', 0),
	(9, '2023_03_09_080749_add_foreign_keys_to_transaction_table', 0);

-- Dumping structure for table ticketing_movie.theatre
CREATE TABLE IF NOT EXISTS `theatre` (
  `theatre_id` int NOT NULL AUTO_INCREMENT,
  `room` int NOT NULL,
  `seat` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`theatre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ticketing_movie.theatre: ~500 rows (approximately)
REPLACE INTO `theatre` (`theatre_id`, `room`, `seat`, `status`) VALUES
	(1, 1, 'A1', 'available'),
	(2, 1, 'A2', 'available'),
	(3, 1, 'A3', 'available'),
	(4, 1, 'A4', 'available'),
	(5, 1, 'A5', 'available'),
	(6, 1, 'A6', 'available'),
	(7, 1, 'A7', 'available'),
	(8, 1, 'A8', 'available'),
	(9, 1, 'A9', 'available'),
	(10, 1, 'A10', 'available'),
	(11, 1, 'B1', 'available'),
	(12, 1, 'B2', 'available'),
	(13, 1, 'B3', 'available'),
	(14, 1, 'B4', 'available'),
	(15, 1, 'B5', 'available'),
	(16, 1, 'B6', 'available'),
	(17, 1, 'B7', 'available'),
	(18, 1, 'B8', 'available'),
	(19, 1, 'B9', 'available'),
	(20, 1, 'B10', 'available'),
	(21, 1, 'C1', 'available'),
	(22, 1, 'C2', 'available'),
	(23, 1, 'C3', 'available'),
	(24, 1, 'C4', 'available'),
	(25, 1, 'C5', 'available'),
	(26, 1, 'C6', 'available'),
	(27, 1, 'C7', 'available'),
	(28, 1, 'C8', 'available'),
	(29, 1, 'C9', 'available'),
	(30, 1, 'C10', 'available'),
	(31, 1, 'D1', 'available'),
	(32, 1, 'D2', 'available'),
	(33, 1, 'D3', 'available'),
	(34, 1, 'D4', 'available'),
	(35, 1, 'D5', 'available'),
	(36, 1, 'D6', 'available'),
	(37, 1, 'D7', 'available'),
	(38, 1, 'D8', 'available'),
	(39, 1, 'D9', 'available'),
	(40, 1, 'D10', 'available'),
	(41, 1, 'E1', 'available'),
	(42, 1, 'E2', 'available'),
	(43, 1, 'E3', 'available'),
	(44, 1, 'E4', 'available'),
	(45, 1, 'E5', 'available'),
	(46, 1, 'E6', 'available'),
	(47, 1, 'E7', 'available'),
	(48, 1, 'E8', 'available'),
	(49, 1, 'E9', 'available'),
	(50, 1, 'E10', 'available'),
	(51, 2, 'A1', 'available'),
	(52, 2, 'A2', 'available'),
	(53, 2, 'A3', 'available'),
	(54, 2, 'A4', 'available'),
	(55, 2, 'A5', 'available'),
	(56, 2, 'A6', 'available'),
	(57, 2, 'A7', 'available'),
	(58, 2, 'A8', 'available'),
	(59, 2, 'A9', 'available'),
	(60, 2, 'A10', 'available'),
	(61, 2, 'B1', 'available'),
	(62, 2, 'B2', 'available'),
	(63, 2, 'B3', 'available'),
	(64, 2, 'B4', 'available'),
	(65, 2, 'B5', 'available'),
	(66, 2, 'B6', 'available'),
	(67, 2, 'B7', 'available'),
	(68, 2, 'B8', 'available'),
	(69, 2, 'B9', 'available'),
	(70, 2, 'B10', 'available'),
	(71, 2, 'C1', 'available'),
	(72, 2, 'C2', 'available'),
	(73, 2, 'C3', 'available'),
	(74, 2, 'C4', 'available'),
	(75, 2, 'C5', 'available'),
	(76, 2, 'C6', 'available'),
	(77, 2, 'C7', 'available'),
	(78, 2, 'C8', 'available'),
	(79, 2, 'C9', 'available'),
	(80, 2, 'C10', 'available'),
	(81, 2, 'D1', 'available'),
	(82, 2, 'D2', 'available'),
	(83, 2, 'D3', 'available'),
	(84, 2, 'D4', 'available'),
	(85, 2, 'D5', 'available'),
	(86, 2, 'D6', 'available'),
	(87, 2, 'D7', 'available'),
	(88, 2, 'D8', 'available'),
	(89, 2, 'D9', 'available'),
	(90, 2, 'D10', 'available'),
	(91, 2, 'E1', 'available'),
	(92, 2, 'E2', 'available'),
	(93, 2, 'E3', 'available'),
	(94, 2, 'E4', 'available'),
	(95, 2, 'E5', 'available'),
	(96, 2, 'E6', 'available'),
	(97, 2, 'E7', 'available'),
	(98, 2, 'E8', 'available'),
	(99, 2, 'E9', 'available'),
	(100, 2, 'E10', 'available'),
	(101, 1, 'A1', 'available'),
	(102, 1, 'A2', 'available'),
	(103, 1, 'A3', 'available'),
	(104, 1, 'A4', 'available'),
	(105, 1, 'A5', 'available'),
	(106, 1, 'A6', 'available'),
	(107, 1, 'A7', 'available'),
	(108, 1, 'A8', 'available'),
	(109, 1, 'A9', 'available'),
	(110, 1, 'A10', 'available'),
	(111, 1, 'B1', 'available'),
	(112, 1, 'B2', 'available'),
	(113, 1, 'B3', 'available'),
	(114, 1, 'B4', 'available'),
	(115, 1, 'B5', 'available'),
	(116, 1, 'B6', 'available'),
	(117, 1, 'B7', 'available'),
	(118, 1, 'B8', 'available'),
	(119, 1, 'B9', 'available'),
	(120, 1, 'B10', 'available'),
	(121, 1, 'C1', 'available'),
	(122, 1, 'C2', 'available'),
	(123, 1, 'C3', 'available'),
	(124, 1, 'C4', 'available'),
	(125, 1, 'C5', 'available'),
	(126, 1, 'C6', 'available'),
	(127, 1, 'C7', 'available'),
	(128, 1, 'C8', 'available'),
	(129, 1, 'C9', 'available'),
	(130, 1, 'C10', 'available'),
	(131, 1, 'D1', 'available'),
	(132, 1, 'D2', 'available'),
	(133, 1, 'D3', 'available'),
	(134, 1, 'D4', 'available'),
	(135, 1, 'D5', 'available'),
	(136, 1, 'D6', 'available'),
	(137, 1, 'D7', 'available'),
	(138, 1, 'D8', 'available'),
	(139, 1, 'D9', 'available'),
	(140, 1, 'D10', 'available'),
	(141, 1, 'E1', 'available'),
	(142, 1, 'E2', 'available'),
	(143, 1, 'E3', 'available'),
	(144, 1, 'E4', 'available'),
	(145, 1, 'E5', 'available'),
	(146, 1, 'E6', 'available'),
	(147, 1, 'E7', 'available'),
	(148, 1, 'E8', 'available'),
	(149, 1, 'E9', 'available'),
	(150, 1, 'E10', 'available'),
	(151, 2, 'A1', 'available'),
	(152, 2, 'A2', 'available'),
	(153, 2, 'A3', 'available'),
	(154, 2, 'A4', 'available'),
	(155, 2, 'A5', 'available'),
	(156, 2, 'A6', 'available'),
	(157, 2, 'A7', 'available'),
	(158, 2, 'A8', 'available'),
	(159, 2, 'A9', 'available'),
	(160, 2, 'A10', 'available'),
	(161, 2, 'B1', 'available'),
	(162, 2, 'B2', 'available'),
	(163, 2, 'B3', 'available'),
	(164, 2, 'B4', 'available'),
	(165, 2, 'B5', 'available'),
	(166, 2, 'B6', 'available'),
	(167, 2, 'B7', 'available'),
	(168, 2, 'B8', 'available'),
	(169, 2, 'B9', 'available'),
	(170, 2, 'B10', 'available'),
	(171, 2, 'C1', 'available'),
	(172, 2, 'C2', 'available'),
	(173, 2, 'C3', 'available'),
	(174, 2, 'C4', 'available'),
	(175, 2, 'C5', 'available'),
	(176, 2, 'C6', 'available'),
	(177, 2, 'C7', 'available'),
	(178, 2, 'C8', 'available'),
	(179, 2, 'C9', 'available'),
	(180, 2, 'C10', 'available'),
	(181, 2, 'D1', 'available'),
	(182, 2, 'D2', 'available'),
	(183, 2, 'D3', 'available'),
	(184, 2, 'D4', 'available'),
	(185, 2, 'D5', 'available'),
	(186, 2, 'D6', 'available'),
	(187, 2, 'D7', 'available'),
	(188, 2, 'D8', 'available'),
	(189, 2, 'D9', 'available'),
	(190, 2, 'D10', 'available'),
	(191, 2, 'E1', 'available'),
	(192, 2, 'E2', 'available'),
	(193, 2, 'E3', 'available'),
	(194, 2, 'E4', 'available'),
	(195, 2, 'E5', 'available'),
	(196, 2, 'E6', 'available'),
	(197, 2, 'E7', 'available'),
	(198, 2, 'E8', 'available'),
	(199, 2, 'E9', 'available'),
	(200, 2, 'E10', 'available'),
	(201, 1, 'A1', 'available'),
	(202, 1, 'A2', 'available'),
	(203, 1, 'A3', 'available'),
	(204, 1, 'A4', 'available'),
	(205, 1, 'A5', 'available'),
	(206, 1, 'A6', 'available'),
	(207, 1, 'A7', 'available'),
	(208, 1, 'A8', 'available'),
	(209, 1, 'A9', 'available'),
	(210, 1, 'A10', 'available'),
	(211, 1, 'B1', 'available'),
	(212, 1, 'B2', 'available'),
	(213, 1, 'B3', 'available'),
	(214, 1, 'B4', 'available'),
	(215, 1, 'B5', 'available'),
	(216, 1, 'B6', 'available'),
	(217, 1, 'B7', 'available'),
	(218, 1, 'B8', 'available'),
	(219, 1, 'B9', 'available'),
	(220, 1, 'B10', 'available'),
	(221, 1, 'C1', 'available'),
	(222, 1, 'C2', 'available'),
	(223, 1, 'C3', 'available'),
	(224, 1, 'C4', 'available'),
	(225, 1, 'C5', 'available'),
	(226, 1, 'C6', 'available'),
	(227, 1, 'C7', 'available'),
	(228, 1, 'C8', 'available'),
	(229, 1, 'C9', 'available'),
	(230, 1, 'C10', 'available'),
	(231, 1, 'D1', 'available'),
	(232, 1, 'D2', 'available'),
	(233, 1, 'D3', 'available'),
	(234, 1, 'D4', 'available'),
	(235, 1, 'D5', 'available'),
	(236, 1, 'D6', 'available'),
	(237, 1, 'D7', 'available'),
	(238, 1, 'D8', 'available'),
	(239, 1, 'D9', 'available'),
	(240, 1, 'D10', 'available'),
	(241, 1, 'E1', 'available'),
	(242, 1, 'E2', 'available'),
	(243, 1, 'E3', 'available'),
	(244, 1, 'E4', 'available'),
	(245, 1, 'E5', 'available'),
	(246, 1, 'E6', 'available'),
	(247, 1, 'E7', 'available'),
	(248, 1, 'E8', 'available'),
	(249, 1, 'E9', 'available'),
	(250, 1, 'E10', 'available'),
	(251, 2, 'A1', 'available'),
	(252, 2, 'A2', 'available'),
	(253, 2, 'A3', 'available'),
	(254, 2, 'A4', 'available'),
	(255, 2, 'A5', 'available'),
	(256, 2, 'A6', 'available'),
	(257, 2, 'A7', 'available'),
	(258, 2, 'A8', 'available'),
	(259, 2, 'A9', 'available'),
	(260, 2, 'A10', 'available'),
	(261, 2, 'B1', 'available'),
	(262, 2, 'B2', 'available'),
	(263, 2, 'B3', 'available'),
	(264, 2, 'B4', 'available'),
	(265, 2, 'B5', 'available'),
	(266, 2, 'B6', 'available'),
	(267, 2, 'B7', 'available'),
	(268, 2, 'B8', 'available'),
	(269, 2, 'B9', 'available'),
	(270, 2, 'B10', 'available'),
	(271, 2, 'C1', 'available'),
	(272, 2, 'C2', 'available'),
	(273, 2, 'C3', 'available'),
	(274, 2, 'C4', 'available'),
	(275, 2, 'C5', 'available'),
	(276, 2, 'C6', 'available'),
	(277, 2, 'C7', 'available'),
	(278, 2, 'C8', 'available'),
	(279, 2, 'C9', 'available'),
	(280, 2, 'C10', 'available'),
	(281, 2, 'D1', 'available'),
	(282, 2, 'D2', 'available'),
	(283, 2, 'D3', 'available'),
	(284, 2, 'D4', 'available'),
	(285, 2, 'D5', 'available'),
	(286, 2, 'D6', 'available'),
	(287, 2, 'D7', 'available'),
	(288, 2, 'D8', 'available'),
	(289, 2, 'D9', 'available'),
	(290, 2, 'D10', 'available'),
	(291, 2, 'E1', 'available'),
	(292, 2, 'E2', 'available'),
	(293, 2, 'E3', 'available'),
	(294, 2, 'E4', 'available'),
	(295, 2, 'E5', 'available'),
	(296, 2, 'E6', 'available'),
	(297, 2, 'E7', 'available'),
	(298, 2, 'E8', 'available'),
	(299, 2, 'E9', 'available'),
	(300, 2, 'E10', 'available'),
	(301, 1, 'A1', 'available'),
	(302, 1, 'A2', 'available'),
	(303, 1, 'A3', 'available'),
	(304, 1, 'A4', 'available'),
	(305, 1, 'A5', 'available'),
	(306, 1, 'A6', 'available'),
	(307, 1, 'A7', 'available'),
	(308, 1, 'A8', 'available'),
	(309, 1, 'A9', 'available'),
	(310, 1, 'A10', 'available'),
	(311, 1, 'B1', 'available'),
	(312, 1, 'B2', 'available'),
	(313, 1, 'B3', 'available'),
	(314, 1, 'B4', 'available'),
	(315, 1, 'B5', 'available'),
	(316, 1, 'B6', 'available'),
	(317, 1, 'B7', 'available'),
	(318, 1, 'B8', 'available'),
	(319, 1, 'B9', 'available'),
	(320, 1, 'B10', 'available'),
	(321, 1, 'C1', 'available'),
	(322, 1, 'C2', 'available'),
	(323, 1, 'C3', 'available'),
	(324, 1, 'C4', 'available'),
	(325, 1, 'C5', 'available'),
	(326, 1, 'C6', 'available'),
	(327, 1, 'C7', 'available'),
	(328, 1, 'C8', 'available'),
	(329, 1, 'C9', 'available'),
	(330, 1, 'C10', 'available'),
	(331, 1, 'D1', 'available'),
	(332, 1, 'D2', 'available'),
	(333, 1, 'D3', 'available'),
	(334, 1, 'D4', 'available'),
	(335, 1, 'D5', 'available'),
	(336, 1, 'D6', 'available'),
	(337, 1, 'D7', 'available'),
	(338, 1, 'D8', 'available'),
	(339, 1, 'D9', 'available'),
	(340, 1, 'D10', 'available'),
	(341, 1, 'E1', 'available'),
	(342, 1, 'E2', 'available'),
	(343, 1, 'E3', 'available'),
	(344, 1, 'E4', 'available'),
	(345, 1, 'E5', 'available'),
	(346, 1, 'E6', 'available'),
	(347, 1, 'E7', 'available'),
	(348, 1, 'E8', 'available'),
	(349, 1, 'E9', 'available'),
	(350, 1, 'E10', 'available'),
	(351, 2, 'A1', 'available'),
	(352, 2, 'A2', 'available'),
	(353, 2, 'A3', 'available'),
	(354, 2, 'A4', 'available'),
	(355, 2, 'A5', 'available'),
	(356, 2, 'A6', 'available'),
	(357, 2, 'A7', 'available'),
	(358, 2, 'A8', 'available'),
	(359, 2, 'A9', 'available'),
	(360, 2, 'A10', 'available'),
	(361, 2, 'B1', 'available'),
	(362, 2, 'B2', 'available'),
	(363, 2, 'B3', 'available'),
	(364, 2, 'B4', 'available'),
	(365, 2, 'B5', 'available'),
	(366, 2, 'B6', 'available'),
	(367, 2, 'B7', 'available'),
	(368, 2, 'B8', 'available'),
	(369, 2, 'B9', 'available'),
	(370, 2, 'B10', 'available'),
	(371, 2, 'C1', 'available'),
	(372, 2, 'C2', 'available'),
	(373, 2, 'C3', 'available'),
	(374, 2, 'C4', 'available'),
	(375, 2, 'C5', 'available'),
	(376, 2, 'C6', 'available'),
	(377, 2, 'C7', 'available'),
	(378, 2, 'C8', 'available'),
	(379, 2, 'C9', 'available'),
	(380, 2, 'C10', 'available'),
	(381, 2, 'D1', 'available'),
	(382, 2, 'D2', 'available'),
	(383, 2, 'D3', 'available'),
	(384, 2, 'D4', 'available'),
	(385, 2, 'D5', 'available'),
	(386, 2, 'D6', 'available'),
	(387, 2, 'D7', 'available'),
	(388, 2, 'D8', 'available'),
	(389, 2, 'D9', 'available'),
	(390, 2, 'D10', 'available'),
	(391, 2, 'E1', 'available'),
	(392, 2, 'E2', 'available'),
	(393, 2, 'E3', 'available'),
	(394, 2, 'E4', 'available'),
	(395, 2, 'E5', 'available'),
	(396, 2, 'E6', 'available'),
	(397, 2, 'E7', 'available'),
	(398, 2, 'E8', 'available'),
	(399, 2, 'E9', 'available'),
	(400, 2, 'E10', 'available'),
	(401, 1, 'A1', 'available'),
	(402, 1, 'A2', 'available'),
	(403, 1, 'A3', 'available'),
	(404, 1, 'A4', 'available'),
	(405, 1, 'A5', 'available'),
	(406, 1, 'A6', 'available'),
	(407, 1, 'A7', 'available'),
	(408, 1, 'A8', 'available'),
	(409, 1, 'A9', 'available'),
	(410, 1, 'A10', 'available'),
	(411, 1, 'B1', 'available'),
	(412, 1, 'B2', 'available'),
	(413, 1, 'B3', 'available'),
	(414, 1, 'B4', 'available'),
	(415, 1, 'B5', 'available'),
	(416, 1, 'B6', 'available'),
	(417, 1, 'B7', 'available'),
	(418, 1, 'B8', 'available'),
	(419, 1, 'B9', 'available'),
	(420, 1, 'B10', 'available'),
	(421, 1, 'C1', 'available'),
	(422, 1, 'C2', 'available'),
	(423, 1, 'C3', 'available'),
	(424, 1, 'C4', 'available'),
	(425, 1, 'C5', 'available'),
	(426, 1, 'C6', 'available'),
	(427, 1, 'C7', 'available'),
	(428, 1, 'C8', 'available'),
	(429, 1, 'C9', 'available'),
	(430, 1, 'C10', 'available'),
	(431, 1, 'D1', 'available'),
	(432, 1, 'D2', 'available'),
	(433, 1, 'D3', 'available'),
	(434, 1, 'D4', 'available'),
	(435, 1, 'D5', 'available'),
	(436, 1, 'D6', 'available'),
	(437, 1, 'D7', 'available'),
	(438, 1, 'D8', 'available'),
	(439, 1, 'D9', 'available'),
	(440, 1, 'D10', 'available'),
	(441, 1, 'E1', 'available'),
	(442, 1, 'E2', 'available'),
	(443, 1, 'E3', 'available'),
	(444, 1, 'E4', 'available'),
	(445, 1, 'E5', 'available'),
	(446, 1, 'E6', 'available'),
	(447, 1, 'E7', 'available'),
	(448, 1, 'E8', 'available'),
	(449, 1, 'E9', 'available'),
	(450, 1, 'E10', 'available'),
	(451, 2, 'A1', 'available'),
	(452, 2, 'A2', 'available'),
	(453, 2, 'A3', 'available'),
	(454, 2, 'A4', 'available'),
	(455, 2, 'A5', 'available'),
	(456, 2, 'A6', 'available'),
	(457, 2, 'A7', 'available'),
	(458, 2, 'A8', 'available'),
	(459, 2, 'A9', 'available'),
	(460, 2, 'A10', 'available'),
	(461, 2, 'B1', 'available'),
	(462, 2, 'B2', 'available'),
	(463, 2, 'B3', 'available'),
	(464, 2, 'B4', 'available'),
	(465, 2, 'B5', 'available'),
	(466, 2, 'B6', 'available'),
	(467, 2, 'B7', 'available'),
	(468, 2, 'B8', 'available'),
	(469, 2, 'B9', 'available'),
	(470, 2, 'B10', 'available'),
	(471, 2, 'C1', 'available'),
	(472, 2, 'C2', 'available'),
	(473, 2, 'C3', 'available'),
	(474, 2, 'C4', 'available'),
	(475, 2, 'C5', 'available'),
	(476, 2, 'C6', 'available'),
	(477, 2, 'C7', 'available'),
	(478, 2, 'C8', 'available'),
	(479, 2, 'C9', 'available'),
	(480, 2, 'C10', 'available'),
	(481, 2, 'D1', 'available'),
	(482, 2, 'D2', 'available'),
	(483, 2, 'D3', 'available'),
	(484, 2, 'D4', 'available'),
	(485, 2, 'D5', 'available'),
	(486, 2, 'D6', 'available'),
	(487, 2, 'D7', 'available'),
	(488, 2, 'D8', 'available'),
	(489, 2, 'D9', 'available'),
	(490, 2, 'D10', 'available'),
	(491, 2, 'E1', 'available'),
	(492, 2, 'E2', 'available'),
	(493, 2, 'E3', 'available'),
	(494, 2, 'E4', 'available'),
	(495, 2, 'E5', 'available'),
	(496, 2, 'E6', 'available'),
	(497, 2, 'E7', 'available'),
	(498, 2, 'E8', 'available'),
	(499, 2, 'E9', 'available'),
	(500, 2, 'E10', 'available');

CREATE TABLE IF NOT EXISTS `voucher` (
  `idvoucher` int NOT NULL AUTO_INCREMENT,
  `disc_name` varchar(45) NOT NULL,
  `discount` float NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `expire_time` datetime DEFAULT NULL,
  PRIMARY KEY (`idvoucher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping structure for table ticketing_movie.timetable
CREATE TABLE IF NOT EXISTS `timetable` (
  `timetable_id` int NOT NULL AUTO_INCREMENT,
  `theatre_id` int NOT NULL,
  `film_id` int NOT NULL,
  `date` date DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `day_type` varchar(8) DEFAULT NULL,
  `unit_price` float NOT NULL,
  PRIMARY KEY (`timetable_id`,`theatre_id`,`film_id`),
  KEY `fk_timetable_film1_idx` (`film_id`) /*!80000 INVISIBLE */,
  KEY `fk_timetable_theatre1_idx` (`theatre_id`),
  CONSTRAINT `fk_timetable_film1` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_timetable_theatre1` FOREIGN KEY (`theatre_id`) REFERENCES `theatre` (`theatre_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ticketing_movie.timetable: ~0 rows (approximately)

-- Dumping structure for table ticketing_movie.transaction
CREATE TABLE IF NOT EXISTS `transaction` (
  `ticket_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `idvoucher` int NOT NULL,
  `timetable_id` int NOT NULL,
  `theatre_id` int NOT NULL,
  `film_id` int NOT NULL,
  `date` datetime DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `unit_price` float NOT NULL,
  `final_price` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`ticket_id`,`user_id`,`idvoucher`,`timetable_id`,`theatre_id`,`film_id`),
  KEY `fk_ticket_user1_idx` (`user_id`),
  KEY `fk_transaction_voucher1_idx` (`idvoucher`),
  CONSTRAINT `fk_ticket_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `fk_transaction_voucher1` FOREIGN KEY (`idvoucher`) REFERENCES `voucher` (`idvoucher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ticketing_movie.transaction: ~0 rows (approximately)

-- Dumping structure for table ticketing_movie.user


-- Dumping data for table ticketing_movie.user: ~0 rows (approximately)

-- Dumping structure for table ticketing_movie.voucher


-- Dumping data for table ticketing_movie.voucher: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
