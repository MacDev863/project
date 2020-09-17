-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 01:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: webboard
--
-- --------------------------------------------------------
--
-- Table structure for table category
--
CREATE TABLE category (
  id int(11) NOT NULL,
  name varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------
--
-- Table structure for table comment
--
CREATE TABLE comment (
  id int(11) NOT NULL,
  content varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  post_date datetime NOT NULL,
  user_id int(11) NOT NULL,
  post_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------
--
-- Table structure for table post
--
CREATE TABLE post (
  id int(11) NOT NULL,
  title varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  content varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  post_date datetime NOT NULL,
  cat_id int(11) NOT NULL,
  user_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------
--
-- Table structure for table user
--
CREATE TABLE user (
  id int(11) NOT NULL,
  login varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  password varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  name varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  gender char(1) COLLATE utf8_unicode_ci NOT NULL,
  email varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  role char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Dumping data for table user
--
INSERT INTO user (id, login, password, name, gender, email, role) VALUES
(6, 'masdas', '123', 'dsfsdf', 'f', 'mac@email.com', 'm'),
(8, 'mac', '1234', 'asdas', 'm', 'mac@email.com', 'm');
--
-- Indexes for dumped tables
--
--
-- Indexes for table category
--
ALTER TABLE category
  ADD PRIMARY KEY (id);
--
-- Indexes for table comment
--
ALTER TABLE comment
  ADD PRIMARY KEY (id);
--
-- Indexes for table post
--
ALTER TABLE post
  ADD PRIMARY KEY (id);
--
-- Indexes for table user
--
ALTER TABLE user
  ADD PRIMARY KEY (id);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table category
--
ALTER TABLE category
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table comment
--
ALTER TABLE comment
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table post
--
ALTER TABLE post
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table user
--
ALTER TABLE user
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;