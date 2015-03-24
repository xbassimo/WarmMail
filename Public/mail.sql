-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-03-22 23:47:27
-- 服务器版本： 5.5.20
-- PHP Version: 5.4.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- 表的结构 `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `username` char(16) NOT NULL,
  `server` char(100) NOT NULL,
  `port` int(11) NOT NULL,
  `type` char(4) NOT NULL,
  `remoteuser` char(50) NOT NULL,
  `remotepassword` char(50) NOT NULL,
  `accountid` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`accountid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `accounts`
--

INSERT INTO `accounts` (`username`, `server`, `port`, `type`, `remoteuser`, `remotepassword`, `accountid`) VALUES
('wangxb', 'pop.qq.com', 995, 'POP3', '670980598', 'wxb@5175', 0000000009),
('wangxb', 'pop.qq.com', 995, 'POP3', '670980598', 'wxb@5175', 0000000010);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` char(16) NOT NULL,
  `password` char(40) NOT NULL,
  `address` char(100) NOT NULL,
  `displayname` char(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`username`, `password`, `address`, `displayname`) VALUES
('wangxb', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'email@host.domain', 'xiaobo wang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
