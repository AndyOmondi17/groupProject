-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 09:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art`
--
CREATE DATABASE IF NOT EXISTS `blog_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog_db`;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` bigint(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`roleId`),
  UNIQUE KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `roles`
--

TRUNCATE TABLE `roles`;
--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `role`) VALUES
(1, 'Admin'),
(3, 'Author'),
(2, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `roleId` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullname`, `username`, `email`, `password`, `datecreated`, `dateupdated`, `roleId`) VALUES
(1, 'alex', 'oalex', 'alex@yahoo.com', '$2y$10$sRw2QHh//fxT6tA.WHsM/u6eYZy.m8kvw3bSW96vuv3qKr.Z9qXs6', '2023-06-09 09:25:53', '2023-06-09 09:25:53', 1),
(2, 'peter', 'peter', 'peter@yahoo.com', '$2y$10$hhTeY.eDS5MOTUSerw6YIOcmdmaTHH.FB.ALFun05/qf5hFcu9b3C', '2023-06-09 09:28:01', '2023-06-09 09:28:01', 3),
(3, 'amani', 'amani', 'amani@yahoo.com', '$2y$10$bKrOV4PPs9JszOaV/emmWe/feMEUA1EjIJeAgPS7MHer/9gd4Bbjq', '2023-06-09 09:28:45', '2023-06-09 09:28:45', 3),
(4, 'james', 'james', 'james@yahoo.com', '$2y$10$uLo1xU1ZNqonbtrGTJkXKee8X8YpfZqUrOgGW7B1ob3zXfp9VmR4W', '2023-06-09 09:51:02', '2023-06-09 09:51:02', 3),
(5, 'Caro', 'CARO', 'caro@YAHOO.COM', '$2y$10$44LzIhD6fjqZw2eP7wWgwuAcswQ1tXvp08BncIWjEQrRtkfivjM52', '2023-06-09 09:51:45', '2023-06-09 09:51:45', 3),
(6, 'Richy', 'richy', 'richy@yahoo.com', '$2y$10$bSLM2aYmmTAKHXO8QK.Br.7ep1w9GdqTX3siLvjF127eVRDML9DsO', '2023-06-09 10:08:31', '2023-06-09 10:08:31', 2);

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `articleId` bigint(11) NOT NULL AUTO_INCREMENT,
  `authorFullName` varchar(50) NOT NULL,
  `authorEmail` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fullText` TEXT NOT NULL,
  `publicationDate` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`articleId`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
