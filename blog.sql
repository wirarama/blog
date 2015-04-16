-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2015 at 09:01 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text,
  `detail` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `alias`, `description`, `detail`, `date`, `session`) VALUES
(7, 'yuyuyuyuyuyuyu', 'yuyuyuyuyuyuyu', 'adfadfa', 'dfadfadfadfadfadf', '2014-01-23 06:46:34', NULL),
(8, 'tyeyeyety', 'tyeyeyety', 'etyetyetye', 'tyetyetyety', '2014-01-23 06:46:41', NULL),
(12, 'dghdghdghdghdgh', 'dghdghdghdghdgh', 'dghdghdghdghdghgh', 'dghdghdghdghdghdgh', '2014-02-19 07:50:32', NULL),
(13, 'tuititui', 'tuititui', 'tuiuitui', 'tuituituituitui', '2014-02-19 07:51:57', NULL),
(14, 'qeweqwe', 'qeweqwe', 'qweqweqwe', 'qweqweqwe', '2014-02-19 07:52:45', NULL),
(15, 'wrtwrtwr', 'wrtwrtwr', 'twrtwrtwrt', 'wrtwrtwrtwtrt', '2014-02-19 08:44:42', NULL),
(16, 'wrtwrtw', 'wrtwrtw', 'twrtwt', 'wrtwtwrt', '2015-04-13 06:51:47', 1428907889),
(17, 'werwer', 'werwer', 'werwer', 'werwerwerwer', '2015-04-13 07:32:26', 1428910330),
(21, 'aeraeraer', 'aeraeraer', 'aeraera', 'eraeraeraeraer', '2015-04-13 08:55:42', 1428915330),
(29, 'wrtwrttwt', 'wrtwrttwt', 'wrrwtwrwr', 'rwwrwrwrwrwwtwt', '2015-04-15 08:30:26', 1429086611),
(30, 'ngumpet', 'ngumpet', 'ngumpet', 'ngumpet', '2015-04-15 08:33:02', 1429086761),
(31, 'baruuuuuuuuuuuuu', 'baruuuuuuuuuuuuu', 'baruuuuuuuuuuuuu', 'baruuuuuuuuuuuuu', '2015-04-16 05:15:28', 1429161305);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `description` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `alias`, `priority`, `description`, `date`) VALUES
(1, 'Rotten Leaves is :', 'home', 1, 'Ambient/dubstep/triphop project of <a href="jamendo.com/en/artist/vermillia">vermillia</a>. rotten leaves offers a combining dark atmosphere of piano and string with dubstep wobbling bassline and beat. project name "rotten leaves" it self taken from vermillia''s song with same title. its closes to song themed about fall, end, finale or something like that.', '2013-11-18 05:25:43'),
(2, 'Music', 'music', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\n\n<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/12437407" frameborder="no" height="350" scrolling="no" width="100%"></iframe>', '2013-11-18 05:31:14'),
(3, 'About', 'about', 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2013-11-18 05:49:58'),
(4, 'Contact', 'contact', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2013-11-18 05:50:14'),
(5, 'Blog', 'blog', 3, '', '2013-11-18 05:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `ip`, `date`) VALUES
(4, 'test', '127.0.0.1', '2015-04-16 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
`id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `session` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `filename`, `session`) VALUES
(1, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428907547),
(2, 'tentangdomain.jpg', 1428907547),
(3, 'baliryljadwal03.jpg', 1428907547),
(4, 'baliryljadwal02.jpg', 1428907547),
(5, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428907547),
(6, 'tentangdomain.jpg', 1428907547),
(7, 'baliryljadwal03.jpg', 1428907547),
(8, 'baliryljadwal02.jpg', 1428907547),
(9, 'baliryljadwal01.jpg', 1428907547),
(10, 'semantic006.png', 1428907547),
(11, 'semantic005.png', 1428907840),
(12, 'semantic004.png', 1428907840),
(13, 'semantic003.png', 1428907840),
(14, 'semantic002.png', 1428907840),
(15, 'baliryljadwal03.jpg', 1428907889),
(16, 'baliryljadwal02.jpg', 1428907889),
(17, 'baliryljadwal01.jpg', 1428907889),
(21, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428910330),
(22, 'tentangdomain.jpg', 1428910330),
(23, 'baliryljadwal03.jpg', 1428910330),
(24, 'baliryljadwal02.jpg', 1428910330),
(25, 'baliryljadwal01.jpg', 1428910330),
(30, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428913192),
(31, 'tentangdomain.jpg', 1428913192),
(32, 'baliryljadwal03.jpg', 1428913192),
(33, 'baliryljadwal02.jpg', 1428913192),
(34, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428913760),
(35, 'tentangdomain.jpg', 1428913760),
(40, 'baliryljadwal03.jpg', 1428915330),
(41, 'baliryljadwal02.jpg', 1428915330),
(42, 'baliryljadwal03.jpg', 1428915861),
(43, 'baliryljadwal02.jpg', 1428915861),
(44, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428915921),
(45, 'tentangdomain.jpg', 1428915921),
(46, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428916160),
(47, 'tentangdomain.jpg', 1428916160),
(48, 'gothic-atmospheric-autumn-fog-forests.jpg', 1428916352),
(49, 'tentangdomain.jpg', 1428916352),
(50, 'Es-Krim-Puter.jpg', 1429076507),
(51, 'Es-Krim-Puter.jpg', 1429076591),
(52, 'knapsack.jpeg', 1429076925),
(53, 'membership function.jpeg', 1429076925),
(54, 'rule mining.jpeg', 1429077033),
(55, 'gnp.jpeg', 1429077119),
(56, 'distributed data mining.jpg', 1429077235),
(57, 'knapsack.jpeg', 1429077260),
(58, 'knapsack.jpeg', 1429077302),
(59, 'GNP fragmentation.jpg', 1429077372),
(61, 'sidviciousbybobgruen.jpg', 1429081596),
(62, 'Smiling_Gary_Painting_by_athenatt.jpg', 1429081596),
(63, 'sidviciousbybobgruen.jpg', 1429081694),
(64, 'Smiling_Gary_Painting_by_athenatt.jpg', 1429081694),
(65, 'sidviciousbybobgruen.jpg', 1429081744),
(66, 'Smiling_Gary_Painting_by_athenatt.jpg', 1429081744),
(67, 'gnpdatamining3.dia', 1429082096),
(68, 'sidviciousbybobgruen.jpg', 1429082096),
(69, 'Smiling_Gary_Painting_by_athenatt.jpg', 1429082096),
(70, 'gnpdatamining3.dia', 1429086611),
(71, 'sidviciousbybobgruen.jpg', 1429086611),
(72, 'Smiling_Gary_Painting_by_athenatt.jpg', 1429086611),
(73, 'Wallpaper-1080p-4.jpg', 1429089928),
(74, 'Wallpaper-1080p-4.jpg', 1429090406),
(75, 'Full-HD-19.jpg', 1429160539),
(76, 'Full-HD-19.jpg', 1429161193),
(77, 'Wallpaper-1080p-4.jpg', 1429161305),
(78, 'wallpaper__blue_world_full_hd_by_kartine29-d36zsto.jpg', 1429162645),
(79, 'victorias-secret-thuvienbao-anh-dep-widescreen-full-hd-333219.jpg', 1429162645),
(80, 'Wallpaper-1080p-4.jpg', 1429162997),
(81, 'wallpaper__blue_world_full_hd_by_kartine29-d36zsto.jpg', 1429163035),
(82, 'victorias-secret-thuvienbao-anh-dep-widescreen-full-hd-333219.jpg', 1429163048),
(83, 'Full-HD-19.jpg', 1429163163),
(84, '1379596.jpg', 1429166464);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`id` int(11) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `text` text,
  `session` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `priority`, `text`, `session`) VALUES
(1, 1, 'test 1', 1429162997),
(2, 2, 'test 2', 1429163035),
(3, 3, 'test 3', 1429163048),
(4, 4, 'test 4', 1429163163),
(5, 5, 'qeqerqerqerqer', 1429166464);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date`) VALUES
(1, 'test', '81dc9bdb52d04dc20036dbd8313ed055', '2013-12-01 06:15:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
