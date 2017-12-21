-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 06:29 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `project`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `apartment`
-- 

CREATE TABLE `apartment` (
  `apid` int(3) NOT NULL auto_increment,
  `apname` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `apadd` varchar(150) character set utf8 collate utf8_unicode_ci NOT NULL,
  `applace` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `apprice` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `apimage` blob NOT NULL,
  `aplati` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `aplongti` varchar(50) NOT NULL,
  `dateadd` date NOT NULL,
  `timeadd` time NOT NULL,
  `aptel` varchar(15) character set utf8 collate utf8_unicode_ci NOT NULL,
  `apmail` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `apstatus` varchar(20) NOT NULL,
  PRIMARY KEY  (`apid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `apartment`
-- 

INSERT INTO `apartment` VALUES (1, 'สุราษฎร์ธานี อพาร์ทเมนต์', '111 ม.5 ต.มะขามเตี้ย อ.เมือง จ.สุราษฎร์ธานี', 'มหาวิทยาลัยตาปี เทสโก้โลตัส', '5000', 0x433336305f323031372d30342d31372d31332d31312d30352d3531342e6a7067, '', '', '2017-10-02', '18:15:03', '0800000000', 'jira@hotmail.com', 'อนุมัติ');
INSERT INTO `apartment` VALUES (2, 'ในบางอพาร์ทเมนต์', '58/2 ซ.ศรีวิชัย 59 ต.มะขามเตี้ย อ.เมือง จ.สุราษฎร์ธานี', 'โรงพยาบาลสุราษฎร์ธานี', '3000', 0x433336305f323031372d30342d32302d32312d35372d34322d3434312e6a7067, '', '', '2017-10-02', '18:35:37', '07123456', 'fon@gmail.com', 'ไม่อนุมัติ');
INSERT INTO `apartment` VALUES (4, 'ในลึกอพาร์ทเมนต์', '44/1 ซอยดอนนก 14 ตำบลมะขามเตี้ย อำเภอเมือง จังหวัดสุราษฎร์ธานี', 'ตลาดดอนนก,โรงเรียนเมืองสุราษฎร์ธานี', '2000-2500', 0x43494d47313637382e4a5047, '', '', '2017-10-13', '13:54:09', '0900000000', 'jira@gmail.com', 'รออนุมัติ');

-- --------------------------------------------------------

-- 
-- Table structure for table `furniture`
-- 

CREATE TABLE `furniture` (
  `fur_id` int(11) NOT NULL auto_increment,
  `apmname` varchar(100) NOT NULL,
  `apmprice` varchar(20) NOT NULL,
  `fur_condi` varchar(5) NOT NULL,
  `fur_fan` varchar(5) NOT NULL,
  `fur_cash` varchar(5) NOT NULL,
  `fur_bed` varchar(5) NOT NULL,
  `fur_keycard` varchar(5) NOT NULL,
  `fur_wifi` varchar(5) NOT NULL,
  `fur_refis` varchar(5) NOT NULL,
  `fur_toilet` varchar(5) NOT NULL,
  `fur_toilets` varchar(5) NOT NULL,
  `fur_tele` varchar(5) NOT NULL,
  `fur_washing` varchar(5) NOT NULL,
  `fur_water` varchar(5) NOT NULL,
  `fur_closet` varchar(5) NOT NULL,
  `fur_park` varchar(5) NOT NULL,
  `fur_more` varchar(200) NOT NULL,
  PRIMARY KEY  (`fur_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `furniture`
-- 

INSERT INTO `furniture` VALUES (1, 'สุราษฎณ์ธานี อพาร์ทเมนต์', '5000', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', '');
INSERT INTO `furniture` VALUES (2, 'ในบางอพาร์ทเมนต์', '3000', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'dfg');
INSERT INTO `furniture` VALUES (4, 'ในลึกอพาร์ทเมนต์', '2000-2500', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `personal`
-- 

CREATE TABLE `personal` (
  `per_id` int(3) NOT NULL auto_increment,
  `pername` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `peridg` varchar(13) character set utf8 collate utf8_unicode_ci NOT NULL,
  `pertel` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `perimage` blob NOT NULL,
  `persta` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`per_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `personal`
-- 

INSERT INTO `personal` VALUES (1, 'กมลรัตน์ ทองชมภู', '1840800075669', '0904944767', 0x433336305f323031372d30342d31372d31332d31312d30352d3531342e6a7067, 'ผู้ลงประกาศทั่วไป');
INSERT INTO `personal` VALUES (2, 'จิรวัฒน์ เหลืองอ่อน', '1840800000000', '0822222222', 0x433336305f323031372d30342d31372d31362d32382d34312d3433352e6a7067, 'เจ้าของอพาร์ทเมนต์');
INSERT INTO `personal` VALUES (4, 'กมลรัตน์ ทองชมภู', '1234567890123', '0800000000', 0x43494d47313637382e4a5047, 'ผู้ลงประกาศทั่วไป');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `userid` int(5) NOT NULL auto_increment,
  `nameu` varchar(100) collate utf8_unicode_ci NOT NULL,
  `emailu` varchar(100) character set utf8 NOT NULL,
  `username` varchar(20) character set utf8 NOT NULL,
  `password` varchar(8) character set utf8 NOT NULL,
  `status` varchar(5) character set utf8 NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'กมลรัตน์ ทองชมภู', 'tongchompoo42@hotmail.com', 'kamonrat', '11111111', 'admin');
INSERT INTO `user` VALUES (2, 'จิรวัฒน์ เหลืองอ่อน', 'tongchompoo2@hotmail.com', 'jirawat', '22222222', 'user');
INSERT INTO `user` VALUES (3, 'สุภาภรณ์  จันปาน', 'supaporn@tapee.ac.th', 'supa', '111111', 'user');
