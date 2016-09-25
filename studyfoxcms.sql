/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : studyfoxcms

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-03-04 21:53:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sfox_article`
-- ----------------------------
DROP TABLE IF EXISTS `sfox_article`;
CREATE TABLE `sfox_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '标题',
  `keywords` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '关键词',
  `description` mediumtext COLLATE utf8_unicode_ci COMMENT '摘要',
  `content` text COLLATE utf8_unicode_ci COMMENT '文章内容',
  `thumb` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '缩略图',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '审核状态',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '发布人',
  `inputtime` datetime NOT NULL COMMENT '发布时间',
  `allow_comment` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否允许评论',
  `views` int(11) NOT NULL DEFAULT '0' COMMENT '浏览总数',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sfox_article
-- ----------------------------

-- ----------------------------
-- Table structure for `sfox_user`
-- ----------------------------
DROP TABLE IF EXISTS `sfox_user`;
CREATE TABLE `sfox_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `last_login_time` datetime NOT NULL COMMENT '上次登录时间',
  `last_login_ip` varchar(40) NOT NULL DEFAULT '' COMMENT '上次登录IP',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `role_id` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '对应角色ID',
  `remark` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

-- ----------------------------
-- Records of sfox_user
-- ----------------------------
INSERT INTO `sfox_user` VALUES ('1', 'admin', '324cea49bf4c1d75894ad688280864ee', '2016-03-01 00:00:00', '127.0.0.1', 'admin@studyfox.cn', '2016-03-01 00:00:00', '1', '1', '测试');
INSERT INTO `sfox_user` VALUES ('2', 'studyfox', '324cea49bf4c1d75894ad688280864ee', '2016-03-01 00:00:00', '127.0.0.1', 'studyfox@vip.qq.com', '2016-03-01 00:00:00', '1', '0', '再次测试');
