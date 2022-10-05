SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `people` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `people`;

DROP TABLE IF EXISTS `guests`;
CREATE TABLE `guests` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `firstname` varchar(30) NOT NULL,
	  `lastname` varchar(30) NOT NULL,
	  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `guests` (`id`, `firstname`, `lastname`) VALUES
(1,	'John',	'Doe'),
(2,	'Jane',	'Appleseed');

