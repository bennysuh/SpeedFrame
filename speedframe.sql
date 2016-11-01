-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-01 10:27:14
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
-- 表的结构 `speedframe_admin_user`
--

CREATE TABLE `speedframe_admin_user` (
  `id` int(11) NOT NULL,
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

INSERT INTO `speedframe_admin_user` (`id`, `username`, `password`, `salt`, `createTime`, `lostTime`, `LostIp`, `newTime`, `newIp`, `header_image`, `user_limit`) VALUES
(1, 'admin123', 'c466f189d277fc0e6702ec3fe5ea18d7', 123456, 0, 0, '', 1477989851, '127.168.0.1', '', 'all'),
(2, '21312321', '0234a2c1c633f63755f1e7bd98e2a2a9', 684609, 1477990140, 0, '', 0, '', '', ''),
(3, '21312321312', 'fb9119c11ae18d66072d74c5e9a80872', 866433, 1477990238, 0, '', 0, '', '', ''),
(4, '21312212', '8531083a692b725f386e0719347ec703', 828778, 1477990254, 0, '', 0, '', '', ''),
(5, '123213123', '2dd27ff086131d0193d5fa95184cf033', 241119, 1477990291, 0, '', 0, '', '', ''),
(6, 'admin123123', 'c5fb364bb7960435275ee6c304f714d5', 816500, 1477990313, 0, '', 0, '', '', ''),
(7, '21312312321', 'f7d4a7c341da4872e252502b6b813335', 926721, 1477990382, 0, '', 0, '', '', ''),
(8, '12312312312321', '9674b99990b53094f2019e5dc3627d05', 492953, 1477990387, 0, '', 0, '', '', ''),
(9, '2312321321', '6b260a3b41b7fe5ec21407e354a57162', 366308, 1477990423, 0, '', 0, '', '', ''),
(10, '21321312', '60053eb2fa7f02e2e018de004362b703', 216702, 1477990737, 0, '', 0, '', '', ''),
(11, '123213213213', '0e3f1944c3188d6b9a1ea4168eed0def', 720425, 1477990749, 0, '', 0, '', '', ''),
(12, '12321312312', '964c197ca8de3214de25cb79da42f298', 720123, 1477990766, 0, '', 0, '', '', ''),
(13, '123123213213', '1bb429eff3a667ef94f1d850ad1cae11', 954379, 1477990787, 0, '', 0, '', '', ''),
(14, '1231231221312321', '38d4eb110d9d2150467e86e9c1f01c8e', 711718, 1477990797, 0, '', 0, '', '', ''),
(15, '321312312312321', 'f717f06b7c223cd195092dd060cd88c4', 770550, 1477990805, 0, '', 0, '', '', ''),
(16, '12312312312312', '62d5790d9952c57faae9ef64e8811954', 882199, 1477990812, 0, '', 0, '', '', ''),
(17, '123123213213213', '26582bbb0f5c5a10f04b7202cf507b0e', 516409, 1477990820, 0, '', 0, '', '', ''),
(18, '21321321321312', '8c49ce3221c3628116c0c7ed335a122f', 588616, 1477990838, 0, '', 0, '', '', ''),
(19, '12321321321321', '377a1dc3c887505055e2cb117ed8bc6f', 401437, 1477990847, 0, '', 0, '', '', ''),
(20, '123123213123', 'eeb987b0a9a95855b748c8688e340191', 797302, 1477990876, 0, '', 0, '', '', ''),
(21, '12312312', '65ddb3cb07697550560c24c7cb004d11', 676260, 1477991016, 0, '', 0, '', '', ''),
(22, '123123', 'c5a16b2e070cba1f2184486ebefeaa40', 518634, 1477991216, 0, '', 0, '', '', ''),
(23, '123213213', '087869fa823eef369737af7081e41d13', 254550, 1477991297, 0, '', 0, '', '', ''),
(24, '12321321', '8970912b52396c68f4961dff90584275', 142846, 1477991447, 0, '', 0, '', '', ''),
(25, '12321321123123', '35464a39dcbee1a97ac2e1ab6e8daf1c', 271853, 1477991870, 0, '', 0, '', '', ''),
(26, '121312321', '287f5f5f876407c0cbc29bea5744a33b', 550329, 1477991875, 0, '', 0, '', '', ''),
(27, '312312312312321', 'ab8e1687a774fb23efe1960be1129735', 761404, 1477991936, 0, '', 0, '', '', ''),
(28, '123123123213', 'cce60b413c93008548555673f4894ba2', 144549, 1477991986, 0, '', 0, '', '', ''),
(29, '21321321321', '4f8839b8b435a216360c1ceb71c869f1', 855584, 1477991997, 0, '', 0, '', '', ''),
(30, '12312312312', 'e8ebc58e117b0661f387ab00cf1f6e7f', 260592, 1477992183, 0, '', 0, '', '', ''),
(31, '123123123', 'bf0ded1200cfe6704be415fc32a32177', 857727, 1477992199, 0, '', 0, '', '', ''),
(32, '12312321', 'b953e7dcfd82e6158e247c1c38762ada', 813424, 1477992208, 0, '', 0, '', '', ''),
(33, '123123213', 'd7352ee185bbe346dfdb4edcc8a6fc6e', 366418, 1477992287, 0, '', 0, '', '', ''),
(34, '1321312312312312', '05ae2f353ae321dc1f7c999c385bc375', 622427, 1477992365, 0, '', 0, '', '', ''),
(35, '12312312321', '90217bc6cc185c2ff7bebd588b339f9e', 625064, 1477992380, 0, '', 0, '', '', ''),
(36, '1231232312', '97042c4718db403818b3a4cd0470b39a', 450738, 1477992396, 0, '', 0, '', '', ''),
(37, '1231231223s', '2484a2afb837282bcbaeb99b4e207bbc', 616439, 1477992404, 0, '', 0, '', '', ''),
(38, '12312321312sss', 'e75c60e7b471397faf96cb8749967411', 101318, 1477992414, 0, '', 0, '', '', '');

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
-- 使用表AUTO_INCREMENT `speedframe_admin_user`
--
ALTER TABLE `speedframe_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- 使用表AUTO_INCREMENT `speedframe_config`
--
ALTER TABLE `speedframe_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
