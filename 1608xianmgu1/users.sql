/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : 1608xiangmu

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2016-09-24 22:11:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `pass` char(32) DEFAULT NULL,
  `sex` tinyint(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `code` char(6) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('12', 'qwq123', 'qqq', 'qqq', '0', 'aaa', 'aaa', 'aaa', 'aaa', '0', '0');
INSERT INTO `users` VALUES ('14', '学神曹老师', '曹老师', '123456', '0', '123456', '123456', '123456', '123456', '0', '0');
INSERT INTO `users` VALUES ('15', '123', '123', '123', '0', '123', '123', '123', '123', '0', '0');
INSERT INTO `users` VALUES ('16', 'admin', 'admin', 'admin', '0', 'admin', 'admin', 'admin', 'admin', '1', '0');
INSERT INTO `users` VALUES ('17', 'qwe', '李四', '123', '0', '北京市朝阳区3三号', '063320', '13566666666', '3069433707@qq.com', '0', '0');
INSERT INTO `users` VALUES ('18', '456', '456', '456', '0', '456', '456', '456', '456', '0', '0');
INSERT INTO `users` VALUES ('19', '789', '789', '789', '0', '789', '789', '789', '789', '0', '0');
INSERT INTO `users` VALUES ('20', '741', '741', '741', '0', '741', '741', '741', '741', '0', '0');
INSERT INTO `users` VALUES ('21', '852', '852', '852', '0', '852', '852', '852', '852', '0', '0');
INSERT INTO `users` VALUES ('23', 'aaa123', 'aaa123', '', '0', '', '', '', '', '0', '0');
INSERT INTO `users` VALUES ('24', 'bb123', 'bb123', '', '0', '', '', '', '', '0', '0');
