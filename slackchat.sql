-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 02:32 AM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slackchat`
--
CREATE DATABASE IF NOT EXISTS `slackchat` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `slackchat`;

-- --------------------------------------------------------

--
-- Table structure for table `messages_general`
--
-- Creation: Nov 16, 2018 at 08:29 PM
--

DROP TABLE IF EXISTS `messages_general`;
CREATE TABLE IF NOT EXISTS `messages_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) NOT NULL,
  `message_text` varchar(500) NOT NULL,
  PRIMARY KEY (`timestamp`),
  UNIQUE KEY `id` (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages_general`
--

INSERT INTO `messages_general` (`id`, `timestamp`, `username`, `message_text`) VALUES
(7, '2018-11-16 20:09:08', 'pavan', 'Ajdfbskldbgflskjdbfjlasdbfkasdbfkasdbksdkljs sadjflsdjflkasdjfbkjaslbfsajlkdbfsadkjfaskldbfaskjdbfalsdf\r\ndsjfabsk'),
(8, '2018-11-16 20:09:26', 'pavan', 'Hello People'),
(9, '2018-11-16 20:22:00', 'pavan', 'fgdfgsdfgfs'),
(10, '2018-11-16 20:22:03', 'pavan', 'hfghdfghdfg'),
(11, '2018-11-16 20:22:52', 'prajwal', 'rtertewtwetwe'),
(13, '2018-11-16 20:24:10', 'pavan', 'vdfbdfsbsdgbdg'),
(14, '2018-11-16 20:26:40', 'prajwal', 'gfdfghdfghdfg'),
(15, '2018-11-16 20:27:17', 'prajwal', 'sdvfdsgdhgf'),
(16, '2018-11-16 20:30:40', 'pavan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec sapien ac quam tempus pulvinar ac at ex. Morbi laoreet ante eget pulvinar consequat. Phasellus enim nibh, facilisis at sem non, volutpat accumsan nisi. Donec ac suscipit nibh, nec faucibus diam. Etiam ornare augue a mi rhoncus, vitae mollis nibh pretium. Donec non ultrices sem, non suscipit ligula. Sed facilisis, sem sed egestas tristique, urna odio fringilla lacus, ac consectetur arcu orci id diam. Maecenas pulvinar in odio m'),
(17, '2018-11-16 20:35:10', 'pavan', 'ghtrhet'),
(18, '2018-11-16 20:35:22', 'pavan', '12312312312'),
(19, '2018-11-16 20:43:29', 'pavan', '12312312312');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Nov 16, 2018 at 07:44 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Pavan Rao', 'pavanpej@gmail.com', 'pavan', 'pavan'),
(3, 'Prajwal Prashanth', 'prajwal@gmail.com', 'prajwal', 'prajwal');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages_general`
--
ALTER TABLE `messages_general`
  ADD CONSTRAINT `messages_general_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
