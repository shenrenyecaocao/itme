-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?06 �?30 �?23:48
-- 服务器版本: 5.5.36
-- PHP 版本: 5.6.0alpha3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `itme`
--

-- --------------------------------------------------------

--
-- 表的结构 `it_article`
--

CREATE TABLE IF NOT EXISTS `it_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `delete_flg` int(6) NOT NULL DEFAULT '0',
  `child_type` int(6) NOT NULL,
  `father_type` int(6) NOT NULL,
  `article_image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `it_article`
--

INSERT INTO `it_article` (`article_id`, `title`, `content`, `create_date`, `update_date`, `delete_flg`, `child_type`, `father_type`, `article_image`) VALUES
(1, 'sss', 'sssasadas', '2018-05-24 13:33:54', '2018-06-30 14:36:38', 0, 7, 6, ''),
(2, '11111', '2222222', '2018-06-29 16:00:00', '2018-06-30 14:38:36', 0, 3, 2, ''),
(3, 'eeee', 'bbbbbbbbbbbb', '2018-06-30 12:13:48', '2018-06-30 12:13:48', 0, 5, 1, ''),
(4, 'php', 'fafafafasfasfsa', '2018-06-30 15:39:41', '2018-06-30 15:39:41', 0, 4, 2, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
