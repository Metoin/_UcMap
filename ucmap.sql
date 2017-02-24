/*
Navicat MariaDB Data Transfer

Source Server         : MaraDB
Source Server Version : 100114
Source Host           : localhost:3306
Source Database       : ucmap

Target Server Type    : MariaDB
Target Server Version : 100114
File Encoding         : 65001

Date: 2017-02-24 23:24:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for metoin_user
-- ----------------------------
DROP TABLE IF EXISTS `metoin_user`;
CREATE TABLE `metoin_user` (
  `user_id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT '1',
  `nick` varchar(60) DEFAULT NULL,
  `phone` char(16) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `salt` char(6) DEFAULT NULL,
  `first_nick` char(1) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `city` mediumint(6) DEFAULT NULL,
  `avatar` char(20) DEFAULT NULL,
  `is_init` tinyint(1) DEFAULT NULL,
  `is_activate` tinyint(1) DEFAULT NULL,
  `is_real` tinyint(1) DEFAULT NULL,
  `ctime` int(11) unsigned DEFAULT NULL,
  `cip` char(20) DEFAULT NULL,
  `last_time` int(11) unsigned DEFAULT NULL,
  `last_ip` char(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `unique` (`phone`,`email`) USING BTREE,
  KEY `search` (`nick`,`first_nick`,`sex`,`city`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of metoin_user
-- ----------------------------

-- ----------------------------
-- Table structure for metoin_user_authentic
-- ----------------------------
DROP TABLE IF EXISTS `metoin_user_authentic`;
CREATE TABLE `metoin_user_authentic` (
  `user_id` int(11) unsigned NOT NULL,
  `name` char(18) DEFAULT NULL,
  `card` char(18) DEFAULT NULL,
  `is_check` tinyint(1) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `ctime` int(11) unsigned DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of metoin_user_authentic
-- ----------------------------

-- ----------------------------
-- Table structure for metoin_user_follow
-- ----------------------------
DROP TABLE IF EXISTS `metoin_user_follow`;
CREATE TABLE `metoin_user_follow` (
  `follow_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned DEFAULT NULL,
  `fid` int(11) unsigned DEFAULT NULL,
  `remark` varchar(60) DEFAULT NULL,
  `ctime` int(11) unsigned DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`follow_id`),
  UNIQUE KEY `uid-fid` (`uid`,`fid`) USING BTREE,
  UNIQUE KEY `fid-uid` (`fid`,`uid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of metoin_user_follow
-- ----------------------------

-- ----------------------------
-- Table structure for metoin_user_follow_group
-- ----------------------------
DROP TABLE IF EXISTS `metoin_user_follow_group`;
CREATE TABLE `metoin_user_follow_group` (
  `follow_group_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `title` varchar(99) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of metoin_user_follow_group
-- ----------------------------

-- ----------------------------
-- Table structure for metoin_user_profiles
-- ----------------------------
DROP TABLE IF EXISTS `metoin_user_profiles`;
CREATE TABLE `metoin_user_profiles` (
  `user_id` int(11) unsigned NOT NULL,
  `signiture` varchar(250) DEFAULT NULL,
  `country` tinyint(2) unsigned DEFAULT NULL,
  `province` smallint(4) unsigned DEFAULT NULL,
  `city` mediumint(5) unsigned DEFAULT NULL,
  `area` mediumint(8) unsigned DEFAULT NULL,
  `town` int(11) unsigned DEFAULT NULL,
  `village` int(11) unsigned DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `search` (`city`,`area`,`town`,`village`,`occupation`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of metoin_user_profiles
-- ----------------------------

-- ----------------------------
-- Table structure for metoin_user_proxies
-- ----------------------------
DROP TABLE IF EXISTS `metoin_user_proxies`;
CREATE TABLE `metoin_user_proxies` (
  `proxies_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned DEFAULT NULL,
  `pid` int(11) unsigned DEFAULT NULL COMMENT '辅助更新的人员',
  `remark` varchar(60) DEFAULT NULL,
  `system` varchar(255) DEFAULT NULL,
  `is_manage` tinyint(1) DEFAULT NULL,
  `ctime` int(11) unsigned DEFAULT NULL,
  `startime` int(11) unsigned DEFAULT NULL,
  `endtime` int(11) unsigned DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`proxies_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of metoin_user_proxies
-- ----------------------------
