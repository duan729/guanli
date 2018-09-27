/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50714
Source Host           : 127.0.0.1:3306
Source Database       : student

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-09-06 15:00:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banji
-- ----------------------------
DROP TABLE IF EXISTS `banji`;
CREATE TABLE `banji` (
  `班号` char(100) NOT NULL,
  `班长` varchar(100) DEFAULT NULL,
  `教室` varchar(20) NOT NULL,
  `班主任` varchar(20) DEFAULT NULL,
  `班级口号` char(200) DEFAULT NULL,
  PRIMARY KEY (`班号`),
  UNIQUE KEY `教室` (`教室`),
  UNIQUE KEY `教室_2` (`教室`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banji
-- ----------------------------
INSERT INTO `banji` VALUES ('1802c', '吉祥', '408', '郭洁', '站住,别跑');
INSERT INTO `banji` VALUES ('1711B', '李向云', '301西', '曹新星', 'GOGOGO');
INSERT INTO `banji` VALUES ('1803B', '张三', '101a', null, null);
INSERT INTO `banji` VALUES ('1708B', '李国祥', '303东', '贾老师', '站住,别跑');
INSERT INTO `banji` VALUES ('1712B', '张王杰', '308东', '郭洁', '独一无二');

-- ----------------------------
-- Table structure for kecheng
-- ----------------------------
DROP TABLE IF EXISTS `kecheng`;
CREATE TABLE `kecheng` (
  `课程编号` int(255) NOT NULL AUTO_INCREMENT,
  `课程名` varchar(30) DEFAULT NULL,
  `时间` varchar(30) NOT NULL,
  PRIMARY KEY (`课程编号`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kecheng
-- ----------------------------
INSERT INTO `kecheng` VALUES ('96', '人工智能', '2018-08-27');
INSERT INTO `kecheng` VALUES ('97', '语文', '2018-08-29');
INSERT INTO `kecheng` VALUES ('98', '数学', '2018-09-04');
INSERT INTO `kecheng` VALUES ('99', '英语', '2018-08-13');
INSERT INTO `kecheng` VALUES ('100', '大学', '2018-08-20');
INSERT INTO `kecheng` VALUES ('101', 'H5', '2018-07-31');
INSERT INTO `kecheng` VALUES ('93', 'JS中级', '2018-08-08');
INSERT INTO `kecheng` VALUES ('92', 'JS高级', '2018-08-22');
INSERT INTO `kecheng` VALUES ('91', 'JS初级', '2018-01-02');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `学号` char(100) NOT NULL,
  `班号` char(100) NOT NULL,
  `姓名` varchar(50) NOT NULL,
  `性别` tinyint(4) DEFAULT NULL,
  `出生日期` date DEFAULT NULL,
  `电话` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('23', '171288', '1708B', '李颖22222', '0', '2018-07-09', '159994232423');
INSERT INTO `student` VALUES ('24', '171202', '1802c', '耿丰瑶xxx', '0', '2018-07-01', '156654646515');
INSERT INTO `student` VALUES ('22', '171203', '1708B', '李颖22222', '0', '2018-07-09', '159994232423');
INSERT INTO `student` VALUES ('21', '171204', '1712B', '吉祥', '1', '2018-06-04', '15801380210');
INSERT INTO `student` VALUES ('37', '170202', '1712B', '张三水', '0', '2018-09-12', '13712345678');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL COMMENT '电子邮件，不可重复',
  `name` varchar(100) DEFAULT NULL COMMENT '昵称，可重复',
  `password` varchar(16) DEFAULT NULL COMMENT '密码',
  `question` varchar(255) DEFAULT NULL COMMENT '密码提示问题',
  `answer` varchar(255) DEFAULT NULL COMMENT '忘记密码答案',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'dfsdf@dfs.nt', 'sadf', '1234', '你的小学在哪上学', 'sdfasdf');

-- ----------------------------
-- Table structure for xuanxiu
-- ----------------------------
DROP TABLE IF EXISTS `xuanxiu`;
CREATE TABLE `xuanxiu` (
  `学号` char(255) NOT NULL,
  `课程编号` char(255) NOT NULL,
  `成绩` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xuanxiu
-- ----------------------------
INSERT INTO `xuanxiu` VALUES ('171201', '101', '70');
INSERT INTO `xuanxiu` VALUES ('171202', '99', '80');
INSERT INTO `xuanxiu` VALUES ('171201', '99', '72');
INSERT INTO `xuanxiu` VALUES ('171204', '93', '62');
INSERT INTO `xuanxiu` VALUES ('171204', '101', '66');
INSERT INTO `xuanxiu` VALUES ('171203', '99', '56');
