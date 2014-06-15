browsergame
===========
To successfully run the application, you will need to create a file 'includes/db_config.php' with the following content:

<?php
$host     = 'URI_TO_YOUR_DATABASE_SERVER';
$user     = 'DATABASE_USER';
$password = 'DATABASE_USER_PASSWORD';
$dbname   = 'DATABASE_NAME';
?>

SQL Syntax
==========
You will need a database with the following content:

-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2014 at 02:44 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(130) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `exp` int(11) NOT NULL DEFAULT '0',
  `expNext` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`player_id`),
  UNIQUE KEY `id_UNIQUE` (`player_id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `player_stats`
--

CREATE TABLE IF NOT EXISTS `player_stats` (
  `player_id` int(11) NOT NULL,
  `stat_id` int(11) NOT NULL,
  `value` varchar(20) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  KEY `playerStats` (`player_id`),
  KEY `statStats` (`stat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player_train_logs`
--

CREATE TABLE IF NOT EXISTS `player_train_logs` (
  `player_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  KEY `playerTrainLogs_idx` (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `stat_id` int(11) NOT NULL AUTO_INCREMENT,
  `short` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`stat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE IF NOT EXISTS `warehouse` (
  `item_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  KEY `playerItems_idx` (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player_stats`
--
ALTER TABLE `player_stats`
  ADD CONSTRAINT `playerStats` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `statStats` FOREIGN KEY (`stat_id`) REFERENCES `stats` (`stat_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `player_train_logs`
--
ALTER TABLE `player_train_logs`
  ADD CONSTRAINT `playerTrainLogs` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `userItems` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Add default values for stats
--
INSERT INTO `stats` (`stat_id`, `short`) VALUES
(1, 'health'),
(2, 'health_max'),
(3, 'energy'),
(4, 'energy_max'),
(5, 'str'),
(6, 'dex'),
(7, 'int'),
(8, 'money'),
(9, 'f_weap'),
(10, 's_weap'),
(11, 'helmet'),
(12, 'armour'),
(13, 'gloves'),
(14, 'boots'),
(15, 'pet');
