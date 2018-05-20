-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2018 at 02:30 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `BookStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `textBook`
--

CREATE TABLE IF NOT EXISTS `textBook` (
  `bookName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `imageUrl` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `textBook`
--

INSERT INTO `textBook` (`bookName`, `price`, `author`, `imageUrl`, `detail`, `id`) VALUES
('Intro to PHP', 99, 'James', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_l5-8FVJWL67_QeQIQxadAMEt0shbPOqKIuXPrb5S3fkLlH6f', 'PHP is an acronym for "PHP: Hypertext Preprocessor"\r\nPHP is a widely-used, open source scripting language\r\nPHP scripts are executed on the server\r\nPHP is free to download and use', 1),
('Java from 0 to 0.1', 59, 'Me', 'https://4.bp.blogspot.com/--o7X-FENPJE/VpCSrNkkqMI/AAAAAAAAEiY/lk8KePliARs/s320/Introducing%2BJava%2B8%2BFree%2BJava%2BBook.gif', 'Java is a general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers "write once, run anywh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$v4NYTbxt7XDEpFcWv8miM.0gsBU.rc6BkJPSblnVTgRltwF0.jy3y', 'admin@abc.com'),
(2, 'user', '$2y$10$E70Q.0chaOvreflw.VZzJ.XWonnC3Mf3i9McPX/S2V6CcPZGdWEQe', 'user@123.com'),
(3, 'test', '$2y$10$MBcCk8iVjN61jkXY.zMcYucdpNTKQeTkHVU5KhSXbiutumiYqYsoa', 'test@123.com'),
(4, 'this', 'this', 'this@123.com');
--
-- Database: `HotDeals`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
