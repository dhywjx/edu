/*
 Navicat Premium Data Transfer

 Source Server         : test
 Source Server Type    : MySQL
 Source Server Version : 50717
 Source Host           : localhost:3306
 Source Schema         : edu

 Target Server Type    : MySQL
 Target Server Version : 50717
 File Encoding         : 65001

 Date: 11/06/2018 10:11:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for grade
-- ----------------------------
DROP TABLE IF EXISTS `grade`;
CREATE TABLE `grade`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '班级主键',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '班级名称',
  `length` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '学制',
  `price` int(11) NULL DEFAULT NULL COMMENT '学费',
  `status` int(11) NULL DEFAULT NULL COMMENT '是否启用',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) NULL DEFAULT NULL COMMENT '删除时间',
  `is_delete` int(11) NULL DEFAULT NULL COMMENT '允许删除',
  `student_id` int(11) NULL DEFAULT NULL COMMENT '关联外键',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grade
-- ----------------------------
INSERT INTO `grade` VALUES (1, '.NET架构', '10周', 500, 1, 1502242191, 1512366751, NULL, 1, NULL);
INSERT INTO `grade` VALUES (2, '离散数学', '12周', 450, 1, 1502242191, 1512366751, NULL, 1, NULL);
INSERT INTO `grade` VALUES (3, '计算机组成原理', '8周', 300, 1, 1502242191, 1512366751, NULL, 1, NULL);
INSERT INTO `grade` VALUES (4, '软件工程', '14周', 500, 1, 1502257693, 1512366751, NULL, 1, NULL);
INSERT INTO `grade` VALUES (5, '数据结构', '15周', 500, 1, 1502334559, 1512366751, NULL, 1, NULL);
INSERT INTO `grade` VALUES (6, 'PHP基础课程', '12周', 1000, 1, 1512232403, 1512366751, NULL, 1, NULL);
INSERT INTO `grade` VALUES (7, 'ThinkPHP5开发', '10周', 2000, 1, 1512353722, 1512366751, NULL, 1, NULL);

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(4) NULL DEFAULT NULL COMMENT '性别',
  `age` tinyint(4) UNSIGNED NULL DEFAULT NULL COMMENT '年龄',
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '手机号',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `status` int(11) NULL DEFAULT NULL COMMENT '当前状态',
  `start_time` int(11) NULL DEFAULT NULL COMMENT '入学时间',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) NULL DEFAULT NULL COMMENT '删除时间',
  `is_delete` int(11) NULL DEFAULT NULL COMMENT '允许删除',
  `grade_id` int(11) NULL DEFAULT NULL COMMENT '关联外键',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `grade_id`(`grade_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (1, '张洋', 0, 21, '18966557788', 'zhangyang@qq.com', 0, 1494345600, 1502326725, 1528683020, NULL, 1, 4);
INSERT INTO `student` VALUES (2, '张伟', 1, 21, '13509897765', 'zhangwei@qq.com', 1, 1502294400, 1502326725, 1512436934, NULL, 1, 5);
INSERT INTO `student` VALUES (3, '谢鑫焱', 1, 38, '17765336278', 'xiexingyan@qq.com', 1, 1502326725, 1502326725, 1512436934, NULL, 1, 3);
INSERT INTO `student` VALUES (4, '陈震宇', 1, 89, '15677281923', 'chenzhenyu@qq.com', 1, 1502326725, 1502326725, 1512436934, NULL, 1, 2);
INSERT INTO `student` VALUES (5, '张明超', 0, 78, '13389776234', 'zhangmingchao@qq.com', 1, 1502294400, 1502326725, 1512436934, NULL, 1, 1);
INSERT INTO `student` VALUES (6, '陆洪双', 0, 26, '15766338726', 'luhongshuang@qq.com', 1, 1502294400, 1502326725, 1512436934, NULL, 1, 1);
INSERT INTO `student` VALUES (7, '佘世贤', 0, 46, '18976227182', 'sheshixian@qq.com', 1, 1502326725, 1502326725, 1512436934, NULL, 1, 1);
INSERT INTO `student` VALUES (8, '杨萧', 1, 45, '13287009834', 'yangxiao@qq.com', 1, 1502326725, 1502326725, 1512436934, NULL, 1, 3);
INSERT INTO `student` VALUES (9, '何泽栋', 1, 37, '13908772343', 'hezedong@qq.com', 1, 1502326725, 1502326725, 1512436934, NULL, 1, 2);
INSERT INTO `student` VALUES (10, '焦强', 1, 28, '15387298273', 'jiaoqiang@qq.com', 1, 1502326725, 1502326725, 1512436934, NULL, 1, 2);
INSERT INTO `student` VALUES (11, '杨文光', 0, 26, '13987372937', 'yangwenguang@qq.com', 1, 1502326725, 1502326725, 1512436934, NULL, 1, 3);
INSERT INTO `student` VALUES (12, '王浩哲', 0, 22, '15806554328', 'wanghaoze@qq.com', 1, 1494864000, 1502327784, 1512436934, NULL, 1, 2);
INSERT INTO `student` VALUES (13, '徐翔', 1, 20, '18977665544', 'xuxiang@qq.com', 1, 1501948800, 1502343910, 1502343931, NULL, NULL, 5);
INSERT INTO `student` VALUES (14, '黎威', 0, 20, '17671751371', 'liwei@qq.com', 1, 1505404800, 1506332374, 1506332374, NULL, NULL, 2);
INSERT INTO `student` VALUES (15, '童倩', 0, 21, '13260517249', 'tongqian@qq.com', 1, 1504627200, 1506332605, 1506332605, NULL, NULL, 2);
INSERT INTO `student` VALUES (16, '王检兵', 1, 20, '13260517895', 'wangjianbing@qq.com', 1, 1504195200, 1506380065, 1506380082, NULL, NULL, 5);
INSERT INTO `student` VALUES (17, '王晶旭', 1, 20, '18892621692', '2787811826@qq.com', 1, 1441641600, 1512434975, 1512434975, NULL, NULL, 7);

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `degree` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '学历',
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '手机号',
  `school` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '毕业学校',
  `hiredate` int(11) NULL DEFAULT NULL COMMENT '入职时间',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) NULL DEFAULT NULL COMMENT '删除标志',
  `is_delete` int(11) NULL DEFAULT 1 COMMENT '允许删除',
  `status` int(11) NULL DEFAULT NULL COMMENT '1启用0禁用',
  `grade_id` int(11) NULL DEFAULT NULL COMMENT '外键',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES (1, '李顺新', '3', '15705517878', '清华大学', 1420041600, 1502272302, 1528683026, NULL, 1, 1, 5);
INSERT INTO `teacher` VALUES (2, '张铭晖', '2', '13988995566', '北京大学', 1466006400, 1502272302, 1512366828, NULL, 1, 1, 2);
INSERT INTO `teacher` VALUES (3, '柯鹏', '1', '18955139988', '复旦大学', 1486310400, 1502272302, 1512366828, NULL, 1, 1, 1);
INSERT INTO `teacher` VALUES (5, '姜毅', '1', '15805512377', '上海交大', 1461254400, 1502272302, 1512366828, NULL, 1, 1, 3);
INSERT INTO `teacher` VALUES (6, '刘茂福', '1', '18976765533', '麻省理工', 1501948800, 1502272302, 1512366828, NULL, 1, 1, 4);
INSERT INTO `teacher` VALUES (7, '黄革新', '1', '13260517249', '武汉大学', 1506096000, 1506379995, 1512366828, NULL, 1, 1, 0);
INSERT INTO `teacher` VALUES (8, '王晶旭', '1', '18892621692', '宁波大红鹰学院', 1511280000, 1512353332, 1512366828, NULL, 1, 1, 7);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户名',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户密码',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户邮箱',
  `role` tinyint(2) UNSIGNED NULL DEFAULT 1 COMMENT '角色',
  `status` int(2) UNSIGNED NULL DEFAULT 1 COMMENT '状态:1启用0禁用',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) NULL DEFAULT NULL COMMENT '删除时间',
  `login_time` int(11) UNSIGNED NULL DEFAULT NULL COMMENT '登录时间',
  `login_count` int(11) UNSIGNED NULL DEFAULT 0 COMMENT '登录次数',
  `is_delete` int(2) UNSIGNED NULL DEFAULT 0 COMMENT '是否删除1是0否',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@qq.com', 1, 1, 1501493848, 1512959972, NULL, 1512959972, 17, 1);
INSERT INTO `user` VALUES (2, 'wangjingxu', 'e10adc3949ba59abbe56e057f20f883e', 'wangjingxu@qq.com', 0, 1, 1512023656, 1512023699, NULL, 1512023699, 2, 1);

SET FOREIGN_KEY_CHECKS = 1;
