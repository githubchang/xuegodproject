-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 02 日 16:36
-- 服务器版本: 5.5.27
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xuegodproject1`
--

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `goods` varchar(32) NOT NULL,
  `company` varchar(50) NOT NULL,
  `descr` text NOT NULL,
  `price` double(6,2) NOT NULL,
  `picname` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `store` int(11) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '0',
  `clicknum` int(11) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typeid` (`typeid`),
  KEY `typeid_2` (`typeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`id`, `name`, `pid`, `path`) VALUES
(1, '子类别一修改二', 0, '0,'),
(2, '子类别一1修改', 1, '0,1,'),
(3, '子类别二', 0, '0,'),
(5, '子类别一1-1', 2, '0,1,2,');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `pass` char(32) CHARACTER SET utf8mb4 NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `code` char(6) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(16) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `pass`, `sex`, `address`, `code`, `phone`, `email`, `state`, `addtime`) VALUES
(1, 'qqq', 'qqq', 'qqq', 1, 'qqq', '333', '333', '333@qq.com', NULL, 1474627381),
(2, 'qqq1', 'qqq', 'qqq', 0, 'qqq', '333', '333', '333@qq.com', 1, 1474627493),
(3, 'qqq2', 'qqq', 'qqq', 1, 'qqq', '333', '333', '333@qq.com', NULL, 1474627699),
(4, 'qqq3', 'qqq', 'qqq', 1, 'qqq', '333', '333', '333@qq.com', NULL, 1474627746),
(6, 'qqq5', 'qqq', 'qqq', 1, 'qqq', '333', '333', '333@qq.com', NULL, 1474627835),
(7, 'qqq6', 'qqq', 'qqq', 1, 'qqq', '333', '333', '333@qq.com', NULL, 1474627847),
(8, 'rrr', 'rrr', 'rrr', 1, 'rrr', 'rrr', 'rrr', 'rrr', NULL, 1474783166),
(9, 'rrr', 'rrr', 'rrr', 1, 'rrr', 'rrr', 'rrr', 'rrr', NULL, 1474783238),
(11, 'rrr11', 'rrr', 'rrr', 0, 'rrr', 'rrr', 'rrr', 'rrr', NULL, 1474783297),
(12, 'rrr3', 'rrr', 'rrr', 0, 'rrr', 'rrr', 'rrr', 'rrr', NULL, 1474783412),
(13, 'rrr4', 'rrr', 'rrr', 1, 'rrr', 'rrr', 'rrr', 'rrr', NULL, 1474783433),
(14, 'rrr5', 'rrr', 'rrr', 1, 'rrr', 'rrr', 'rrr', 'rrr', NULL, 1474783508),
(15, 'rrr6', 'rrr', 'rrr', 1, 'rrr', 'rrr', 'rrr', 'rrr', NULL, 1474783534);

--
-- 限制导出的表
--

--
-- 限制表 `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`typeid`) REFERENCES `type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
