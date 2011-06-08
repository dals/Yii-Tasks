/*
SQLyog Community Edition- MySQL GUI v8.12 
MySQL - 5.1.54-1ubuntu4-log : Database - tasksdev
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tasksdev` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `tasksdev`;

/*Table structure for table `Contexts` */

DROP TABLE IF EXISTS `Contexts`;

CREATE TABLE `Contexts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text,
  `createdBy` int(11) unsigned NOT NULL,
  `isShared` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `Contexts` */

insert  into `Contexts`(`id`,`name`,`description`,`createdBy`,`isShared`) values (1,'asddddddddas','',1,0);

/*Table structure for table `Entries` */

DROP TABLE IF EXISTS `Entries`;

CREATE TABLE `Entries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(254) DEFAULT NULL,
  `body` text NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdByUser` int(11) unsigned DEFAULT NULL,
  `createdForUser` int(11) unsigned DEFAULT NULL,
  `isGroupEntry` tinyint(1) DEFAULT '0',
  `createdForGroup` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `Entries` */

/*Table structure for table `Groups` */

DROP TABLE IF EXISTS `Groups`;

CREATE TABLE `Groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `Groups` */

insert  into `Groups`(`id`,`name`,`description`) values (1,'support',NULL),(2,'managers',NULL);

/*Table structure for table `Tasks` */

DROP TABLE IF EXISTS `Tasks`;

CREATE TABLE `Tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(254) NOT NULL,
  `body` text,
  `status` varchar(128) DEFAULT NULL,
  `priority` smallint(5) DEFAULT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `targetOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `repeatConditions` varchar(128) DEFAULT NULL,
  `ownerId` int(11) unsigned NOT NULL,
  `assigneeId` int(11) unsigned NOT NULL,
  `assignedGroups` varchar(128) DEFAULT NULL,
  `assignedUsers` varchar(254) DEFAULT NULL,
  `contextId` int(11) unsigned DEFAULT NULL,
  `blockedBy` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Tasks_Owner` (`ownerId`),
  KEY `FK_Tasks_Assignee` (`assigneeId`),
  KEY `FK_Tasks_Context` (`contextId`),
  CONSTRAINT `FK_Tasks_Assignee` FOREIGN KEY (`assigneeId`) REFERENCES `Users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Tasks_Context` FOREIGN KEY (`contextId`) REFERENCES `Contexts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_Tasks_Owner` FOREIGN KEY (`ownerId`) REFERENCES `Users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `Tasks` */

insert  into `Tasks`(`id`,`subject`,`body`,`status`,`priority`,`createdOn`,`updatedOn`,`targetOn`,`repeatConditions`,`ownerId`,`assigneeId`,`assignedGroups`,`assignedUsers`,`contextId`,`blockedBy`) values (1,'dfgdfgdfg','','',NULL,'2011-04-26 02:19:45','0000-00-00 00:00:00','2011-04-20 00:00:00','',1,1,'',NULL,NULL,NULL);

/*Table structure for table `Users` */

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `role` varchar(32) NOT NULL DEFAULT 'user',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `Users` */

insert  into `Users`(`id`,`username`,`password`,`email`,`role`,`isActive`) values (1,'admin','623816f7671d27bc484b523dca5b4fcb','admin@example.com','administrator',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
