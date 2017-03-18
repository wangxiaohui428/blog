-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-13 11:32:09
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(100) DEFAULT NULL,
  `apass` varchar(32) DEFAULT NULL,
  `anickname` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`, `anickname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `pid`) VALUES
(2, '前端新闻', 0),
(3, '计算机新闻', 0),
(4, '无分类', 0),
(6, '小小灰222', 3);

-- --------------------------------------------------------

--
-- 表的结构 `guanzhu`
--

CREATE TABLE IF NOT EXISTS `guanzhu` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL COMMENT '关注者',
  `uid2` int(11) NOT NULL COMMENT '被关注者',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `guanzhu`
--

INSERT INTO `guanzhu` (`gid`, `uid1`, `uid2`) VALUES
(2, 9, 13),
(3, 14, 13),
(4, 21, 13);

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(255) NOT NULL,
  `imgfile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`id`, `host`, `imgfile`) VALUES
(1, 'localhost', 'study/yue/moni-mvc/static/upload');

-- --------------------------------------------------------

--
-- 表的结构 `love`
--

CREATE TABLE IF NOT EXISTS `love` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL COMMENT '被收藏的文章id',
  `uid` int(11) NOT NULL COMMENT '收藏者',
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `love`
--

INSERT INTO `love` (`lid`, `sid`, `uid`) VALUES
(3, 3, 9),
(4, 7, 14),
(5, 4, 14),
(6, 3, 21);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '留言时间',
  `mcon` varchar(300) NOT NULL COMMENT '留言内容',
  `sid` int(11) NOT NULL COMMENT '被留言的文章',
  `pid` int(11) NOT NULL COMMENT '被回复的留言id',
  `uid1` int(11) NOT NULL COMMENT '留言者',
  `uid2` int(11) NOT NULL COMMENT '被留言者',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`mid`, `mtime`, `mcon`, `sid`, `pid`, `uid1`, `uid2`) VALUES
(7, '2017-03-12 11:10:43', '11111111111111111', 7, 0, 18, 17),
(8, '2017-03-12 12:14:49', 'dafafdas', 7, 0, 18, 17),
(9, '2017-03-12 12:15:54', '2222', 7, 7, 18, 17),
(10, '2017-03-12 13:15:33', '444444', 7, 0, 18, 17),
(11, '2017-03-12 13:15:57', '5555', 7, 0, 18, 17),
(12, '2017-03-12 13:16:17', '66666', 7, 0, 18, 17),
(13, '2017-03-12 13:19:07', '77777', 7, 0, 18, 17),
(14, '2017-03-12 13:19:34', '9999', 7, 0, 18, 17),
(15, '2017-03-12 13:20:04', '1000', 7, 0, 18, 17),
(16, '2017-03-12 13:23:48', '4444', 7, 0, 18, 17),
(17, '2017-03-12 13:24:09', '121212', 7, 0, 18, 17),
(18, '2017-03-12 13:27:02', '121212', 7, 0, 18, 17),
(19, '2017-03-12 13:27:07', 'eeee', 7, 0, 18, 17),
(20, '2017-03-12 13:27:19', 'dsfd', 7, 0, 18, 17),
(21, '2017-03-12 13:28:27', 'dsdsdsds', 7, 0, 18, 17),
(22, '2017-03-12 14:06:03', '@常圆圆：', 7, 8, 18, 17),
(23, '2017-03-12 14:22:09', 'gggggg', 7, 0, 18, 17),
(24, '2017-03-12 14:22:41', 'fffff', 7, 0, 18, 17),
(25, '2017-03-12 14:22:51', '@常圆圆：sssss', 7, 10, 18, 17),
(26, '2017-03-12 14:27:14', '@常圆圆：9999', 7, 11, 18, 17),
(27, '2017-03-12 14:29:03', '@常圆圆：4444', 7, 7, 18, 17),
(28, '2017-03-12 14:31:19', '@常圆圆：3333', 7, 7, 18, 17),
(29, '2017-03-12 14:31:45', '@常圆圆：5555', 7, 7, 18, 17),
(30, '2017-03-12 14:32:29', '@常圆圆：aaaa', 7, 8, 18, 17),
(31, '2017-03-12 14:35:36', '@常圆圆：7777', 7, 7, 18, 17),
(32, '2017-03-12 14:35:59', '@常圆圆：7777', 7, 7, 18, 17),
(33, '2017-03-12 14:36:27', '@常圆圆：8888', 7, 7, 18, 17),
(34, '2017-03-12 14:36:37', '@常圆圆：dafafsdaa', 7, 7, 18, 17),
(35, '2017-03-12 14:37:46', '@常圆圆：dadada', 7, 7, 18, 17),
(36, '2017-03-12 14:38:31', '@常圆圆：dasdada', 7, 7, 18, 17),
(37, '2017-03-12 14:39:16', '@常圆圆：1111', 7, 7, 18, 17),
(38, '2017-03-12 14:39:32', '@常圆圆：ggggg', 7, 7, 18, 17),
(39, '2017-03-12 15:22:20', '@常圆圆：23333', 7, 8, 17, 17),
(40, '2017-03-12 15:22:22', '@常圆圆：23333', 7, 0, 17, 17),
(41, '2017-03-12 15:29:09', '@常圆圆：233332222', 7, 9, 17, 17),
(42, '2017-03-12 15:30:29', '@常圆圆：233222', 7, 27, 14, 17),
(43, '2017-03-12 15:30:56', '@常圆圆：sfdsfsfs', 7, 9, 14, 17),
(44, '2017-03-12 15:31:27', '@常圆圆：2017-03-12 20:15:5', 7, 27, 14, 17),
(45, '2017-03-12 15:32:42', '@常圆圆：233223111', 7, 9, 14, 17);

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `posid` int(11) NOT NULL AUTO_INCREMENT,
  `posname` varchar(255) NOT NULL,
  PRIMARY KEY (`posid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`posid`, `posname`) VALUES
(1, '无'),
(3, '小小灰');

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `posid` int(11) NOT NULL DEFAULT '1',
  `stitle` varchar(255) NOT NULL,
  `scon` varchar(5000) NOT NULL,
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `simgurl` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userrole` tinyint(8) NOT NULL,
  `hits` int(11) NOT NULL,
  `good` int(11) NOT NULL,
  `statu` int(11) NOT NULL COMMENT '0-未审核，1-审核中，2-未通过,3-已通过',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `shows`
--

INSERT INTO `shows` (`sid`, `cid`, `posid`, `stitle`, `scon`, `stime`, `simgurl`, `username`, `userrole`, `hits`, `good`, `statu`) VALUES
(1, 0, 1, '1111', '<p>11111</p>', '2017-03-07 10:08:17', '', 'sulin1', 0, 0, 0, 3),
(3, 2, 1, '2222', '<p>3333333333333333333</p><p><br/></p><p><br/></p><p><br/></p><p>33333333333333</p>', '2017-03-10 02:29:25', '', 'sulin', 1, 1, 0, 3),
(4, 2, 3, '苏晓林', '<p>苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林苏晓林</p>', '2017-03-10 08:46:05', '', 'sulin', 1, 1, 0, 3),
(5, 0, 1, '鹅鹅鹅', '<p>鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅鹅</p>', '2017-03-10 08:46:18', '', 'sulin', 1, 40, 0, 3),
(6, 0, 1, '44444', '<p style="text-align: center;">44444444444444444444444444444444444444<br/></p>', '2017-03-12 02:37:00', '', 'sulin', 1, 0, 0, 0),
(7, 3, 1, 'sdsf', '<p>dsafdf</p>', '2017-03-12 05:11:27', '', 'chang', 1, 180, 0, 3),
(8, 0, 1, '5555', '<p>555555</p>', '2017-03-13 09:55:43', '', 'chang', 1, 0, 0, 0),
(9, 0, 1, '444', '<p>4444</p>', '2017-03-13 10:04:58', '', 'chang', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL COMMENT '昵称',
  `imgurl` varchar(255) NOT NULL COMMENT '头像',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `nickname`, `imgurl`) VALUES
(13, 'sulin', 'f0fe9edcc581cf00b786bcf2882c45d9', '苏琳', 'http://localhost/study/yue/moni-mvc/static/upload/MG_PATH}/touxiang.jpg'),
(14, 'sulin1', '4ac481286de5751c1d2838df547d1f86', 'sulin1', 'http://localhost/study/yue/moni-mvc/static/upload/MG_PATH}/touxiang.jpg'),
(16, 'sulin2', 'a8145642eab2daf0936208d7399dec64', '苏琳', 'http://localhost/study/yue/moni-mvc/static/upload/MG_PATH}/touxiang.jpg'),
(17, 'chang', 'bf9017d04f72c1b5ba407971fbf61289', '常圆圆', 'http://localhost/study/yue/moni-mvc/static/upload/17-03-13/14893919931.jpg'),
(18, 'chang1', '1d3b455edc50815adc7c775437cf0c06', '常1', 'http://localhost/study/yue/moni-mvc/static/upload/MG_PATH}/touxiang.jpg'),
(19, 'xiaoxiaohui', '7b57fb69314a3b7b4626efaa5c5874e9', '小小灰', 'http://localhost/study/yue/moni-mvc/static/upload/MG_PATH}/touxiang.jpg'),
(20, 'xxhui', '67a4bcd8b69762da3edb88a3c8803a90', 'xxhui', 'http://localhost/study/yue/moni-mvc/static/upload/c/images/touxiang.jpg'),
(21, 'xxhuii', '2336f82f50d36aea58e2d053a4fcb08a', 'xxhuii', 'http://localhost/study/yue/moni-mvc/static/upload/c/images/touxiang.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
