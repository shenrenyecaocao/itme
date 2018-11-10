-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?06 �?30 �?23:49
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
-- 表的结构 `it_category`
--

CREATE TABLE IF NOT EXISTS `it_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `fid` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1',
  `delete_flg` int(11) NOT NULL DEFAULT '0',
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `it_category`
--

INSERT INTO `it_category` (`category_id`, `name`, `description`, `fid`, `level`, `delete_flg`, `update_date`, `create_date`) VALUES
(1, '前端', '用户端', 0, 1, 0, '2018-06-29 14:34:12', '0000-00-00 00:00:00'),
(2, '后端', 'server端', 0, 1, 0, '2018-06-29 14:34:34', '0000-00-00 00:00:00'),
(3, 'python', '擅长数据分析', 2, 2, 0, '2018-02-17 15:15:32', '0000-00-00 00:00:00'),
(4, 'php', '多用于web', 2, 2, 0, '2018-02-17 15:14:26', '0000-00-00 00:00:00'),
(5, 'javascript', 'js脚本', 1, 2, 0, '2018-06-29 14:35:40', '0000-00-00 00:00:00'),
(6, '操作系统', 'window和linux', 0, 1, 0, '2018-06-29 18:41:18', '2018-06-29 18:41:18'),
(7, 'linux', 'linux系统', 6, 2, 0, '2018-06-30 05:10:20', '2018-06-30 05:10:20'),
(8, 'window', '微软操作系统', 6, 2, 0, '2018-06-30 09:46:03', '2018-06-30 07:06:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
