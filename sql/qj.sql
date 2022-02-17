-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2022-02-17 22:48:45
-- 服务器版本： 5.6.50-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qj`
--

-- --------------------------------------------------------

--
-- 表的结构 `ahjr`
--

CREATE TABLE IF NOT EXISTS `ahjr` (
  `id` int(10) unsigned NOT NULL,
  `pass` int(2) NOT NULL,
  `XM` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `QJLX` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `SQLY` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `QJWZ` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `JD` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `WD` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `QJKSRQ` datetime DEFAULT NULL,
  `QJJSRQ` datetime DEFAULT NULL,
  `QJFQRQ` datetime DEFAULT NULL,
  `SHRQ` datetime DEFAULT NULL,
  `SHR` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `SHYJ` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `XM` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `XH` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `XB` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `NJ` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `XY` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ZY` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `BJ` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahjr`
--
ALTER TABLE `ahjr`
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
-- AUTO_INCREMENT for table `ahjr`
--
ALTER TABLE `ahjr`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
