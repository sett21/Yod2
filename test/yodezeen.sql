-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2015 at 03:17 PM
-- Server version: 5.5.41-MariaDB
-- PHP Version: 5.5.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `yodezeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `yo_admins`
--

CREATE TABLE IF NOT EXISTS `yo_admins` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yo_admins`
--

INSERT INTO `yo_admins` (`id`, `login`, `password`, `name`, `role`, `status`) VALUES
(1, 'admin', '20EAfcH0JSFQY', 'Константин', 'root', '1');

-- --------------------------------------------------------

--
-- Table structure for table `yo_blocks`
--

CREATE TABLE IF NOT EXISTS `yo_blocks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yo_blocks`
--

INSERT INTO `yo_blocks` (`id`, `name`, `body`, `status`) VALUES
(1, 'О нас', 'YØ DEZEEN IS AN ARCHITECTUAL DESIGN STUDIØ WITH EXTENSIVE EXPERIENCE IN THE FIELD ØF INTERIØR DESIGN FØR PUBLIC AND RESIDENTISL BUIDINGS', '1'),
(2, 'Контакты', 'CØNTACTS WILL BE HERE', '1');

-- --------------------------------------------------------

--
-- Table structure for table `yo_projects`
--

CREATE TABLE IF NOT EXISTS `yo_projects` (
  `id` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `best` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yo_projects`
--

INSERT INTO `yo_projects` (`id`, `type`, `name`, `location`, `body`, `img`, `status`, `best`) VALUES
(1, 2, 'Название ', 'Местоположение', 'Описание', '20150306_36_1.jpg', '1', '0'),
(2, 1, 'Название 2', 'Местоположение 2', 'Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание ', '20150306_202_2.jpg', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `yo_publications`
--

CREATE TABLE IF NOT EXISTS `yo_publications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yo_publications`
--

INSERT INTO `yo_publications` (`id`, `name`, `body`, `img`, `status`) VALUES
(3, 'Название', 'Описание Описание Описание Описание Описание Описание Описание Описание ', '20150320_664_20150306_202_2.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `yo_team`
--

CREATE TABLE IF NOT EXISTS `yo_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yo_team`
--

INSERT INTO `yo_team` (`id`, `name`, `position`, `img`, `status`) VALUES
(1, 'Константин', 'Ведущий программист', '20150306_767_3.png', '1'),
(2, 'Александр', 'Верстальщик', '20150306_211_2.png', '1'),
(5, 'Марина', 'Куратор', '20150306_666_1.png', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yo_admins`
--
ALTER TABLE `yo_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yo_blocks`
--
ALTER TABLE `yo_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yo_projects`
--
ALTER TABLE `yo_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yo_publications`
--
ALTER TABLE `yo_publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yo_team`
--
ALTER TABLE `yo_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yo_admins`
--
ALTER TABLE `yo_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yo_blocks`
--
ALTER TABLE `yo_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `yo_projects`
--
ALTER TABLE `yo_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `yo_publications`
--
ALTER TABLE `yo_publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `yo_team`
--
ALTER TABLE `yo_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
