/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.5.53 : Database - tp5
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tp5` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `tp5`;

/*Table structure for table `tp_user` */

DROP TABLE IF EXISTS `tp_user`;

CREATE TABLE `tp_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户表主键',
  `user_nicename` varchar(16) NOT NULL COMMENT '用户名',
  `user_password` varchar(25) NOT NULL COMMENT '登录密码',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
