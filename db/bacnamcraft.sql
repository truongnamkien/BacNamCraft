-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2014 at 10:27 PM
-- Server version: 5.0.96
-- PHP Version: 5.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bncraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) collate utf8_unicode_ci NOT NULL default '0',
  `ip_address` varchar(16) collate utf8_unicode_ci NOT NULL default '0',
  `user_agent` varchar(120) collate utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text collate utf8_unicode_ci,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL auto_increment,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY  (`contact_id`),
  KEY `email` (`email`,`ip_address`,`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL auto_increment,
  `url` varchar(255) NOT NULL,
  `content_vietnamese` text,
  `content_english` text NOT NULL,
  `page_id` int(11) NOT NULL,
  `layout` int(11) NOT NULL,
  `display_order` int(11) NOT NULL,
  PRIMARY KEY  (`content_id`),
  UNIQUE KEY `display_order` (`display_order`),
  KEY `content_category_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_email`
--

CREATE TABLE IF NOT EXISTS `customer_email` (
  `customer_email_id` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL,
  `unsubscribed` enum('Active','Inactive') NOT NULL default 'Inactive',
  PRIMARY KEY  (`customer_email_id`),
  UNIQUE KEY `email` (`email`),
  KEY `unsubscribed` (`unsubscribed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL auto_increment,
  `email` varchar(255) default NULL,
  `fullname` varchar(50) default NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text,
  `discount` int(11) default NULL,
  `discount_note` text,
  `created_at` int(11) NOT NULL,
  `status` enum('pending','progressing','finished','cancelled') NOT NULL default 'pending',
  PRIMARY KEY  (`order_id`),
  KEY `email` (`email`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY  (`order_detail_id`),
  KEY `order_id` (`order_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(11) NOT NULL auto_increment,
  `name_vietnamese` varchar(100) NOT NULL,
  `name_english` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL default 'Active',
  `parent_id` int(11) default NULL,
  PRIMARY KEY  (`page_id`),
  UNIQUE KEY `display_order` (`display_order`),
  KEY `status` (`status`),
  KEY `parent_id` (`parent_id`),
  KEY `name_vietnamese` (`name_vietnamese`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL auto_increment,
  `name_vietnamese` varchar(100) NOT NULL,
  `name_english` varchar(100) NOT NULL,
  `description_vietnamese` text NOT NULL,
  `description_english` text NOT NULL,
  `price` int(11) NOT NULL,
  `price_off` int(11) default NULL,
  `product_category_id` int(11) NOT NULL,
  `display_order` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL default 'Active',
  `created_at` int(11) NOT NULL,
  `hot` enum('Active','Inactive') NOT NULL default 'Inactive',
  `sold_out` enum('Active','Inactive') NOT NULL default 'Inactive',
  PRIMARY KEY  (`product_id`),
  UNIQUE KEY `display_order` (`display_order`),
  KEY `product_category_id` (`product_category_id`),
  KEY `status` (`status`),
  KEY `created_at` (`created_at`),
  KEY `hot` (`hot`),
  KEY `promotion` (`price_off`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `product_category_id` int(11) NOT NULL auto_increment,
  `category_name_vietnamese` varchar(100) NOT NULL,
  `category_name_english` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL,
  `parent_id` int(11) default NULL,
  `status` enum('Active','Inactive') NOT NULL default 'Active',
  PRIMARY KEY  (`product_category_id`),
  UNIQUE KEY `display_order` (`display_order`),
  KEY `parent_id` (`parent_id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_photo`
--

CREATE TABLE IF NOT EXISTS `product_photo` (
  `product_photo_id` int(11) NOT NULL auto_increment,
  `url` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY  (`product_photo_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `static_content`
--

CREATE TABLE IF NOT EXISTS `static_content` (
  `static_content_id` int(11) NOT NULL auto_increment,
  `page` varchar(40) NOT NULL,
  `content_name` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(40) NOT NULL,
  PRIMARY KEY  (`static_content_id`),
  KEY `page` (`page`,`content_name`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
