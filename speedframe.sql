-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-18 03:28:37
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speedframe`
--

-- --------------------------------------------------------

--
-- 表的结构 `speedframe_admin_group`
--

CREATE TABLE `speedframe_admin_group` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `limit` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `speedframe_admin_user`
--

CREATE TABLE `speedframe_admin_user` (
  `id` int(11) NOT NULL,
  `nickname` varchar(20) COLLATE utf8_bin NOT NULL,
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(40) COLLATE utf8_bin NOT NULL,
  `salt` int(6) NOT NULL,
  `createTime` int(11) NOT NULL,
  `lostTime` int(11) NOT NULL,
  `LostIp` varchar(20) COLLATE utf8_bin NOT NULL,
  `newTime` int(11) NOT NULL,
  `newIp` varchar(20) COLLATE utf8_bin NOT NULL,
  `header_image` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_limit` varchar(4068) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `speedframe_admin_user`
--

INSERT INTO `speedframe_admin_user` (`id`, `nickname`, `username`, `password`, `salt`, `createTime`, `lostTime`, `LostIp`, `newTime`, `newIp`, `header_image`, `user_limit`) VALUES
(1, '', 'admin123', 'c466f189d277fc0e6702ec3fe5ea18d7', 123456, 0, 1478069180, '127.168.0.1', 1478070763, '127.168.0.1', '', 'all'),
(41, '', '123123123123', '9195ef432f5b52d306ade241e28d3bb7', 849185, 1478050112, 0, '', 0, '', '', ''),
(42, '', '1231231212133', '767dd13f641ea88b593fbb8607539d1d', 129937, 1478051696, 0, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `speedframe_config`
--

CREATE TABLE `speedframe_config` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `value` text COLLATE utf8_bin NOT NULL,
  `description` varchar(400) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `speedframe_admin_group`
--
ALTER TABLE `speedframe_admin_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speedframe_admin_user`
--
ALTER TABLE `speedframe_admin_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `speedframe_config`
--
ALTER TABLE `speedframe_config`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `speedframe_admin_group`
--
ALTER TABLE `speedframe_admin_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `speedframe_admin_user`
--
ALTER TABLE `speedframe_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- 使用表AUTO_INCREMENT `speedframe_config`
--
ALTER TABLE `speedframe_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
