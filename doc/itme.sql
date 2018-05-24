-- MySQL dump 10.13  Distrib 5.5.36, for Win32 (x86)
--
-- Host: localhost    Database: itme
-- ------------------------------------------------------
-- Server version	5.5.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `it_admin`
--

DROP TABLE IF EXISTS `it_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role_id` int(11) unsigned NOT NULL,
  `active_status` tinyint(4) NOT NULL DEFAULT '0',
  `del_flg` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:undelete;1:delete',
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_admin`
--

LOCK TABLES `it_admin` WRITE;
/*!40000 ALTER TABLE `it_admin` DISABLE KEYS */;
INSERT INTO `it_admin` VALUES (1,'桑榆非晚','541885781@qq.com','63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1',0,1,0,'2018-05-24 14:01:48','2017-07-10 13:33:32');
/*!40000 ALTER TABLE `it_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `it_article`
--

DROP TABLE IF EXISTS `it_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `create_data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `delete_flg` int(6) NOT NULL DEFAULT '0',
  `article_type` int(6) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_article`
--

LOCK TABLES `it_article` WRITE;
/*!40000 ALTER TABLE `it_article` DISABLE KEYS */;
INSERT INTO `it_article` VALUES (1,'sss','sssasadas','2018-05-24 13:33:54','0000-00-00 00:00:00',0,0,'');
/*!40000 ALTER TABLE `it_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `it_category`
--

DROP TABLE IF EXISTS `it_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fid` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1',
  `delete_flg` int(11) NOT NULL DEFAULT '0',
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_category`
--

LOCK TABLES `it_category` WRITE;
/*!40000 ALTER TABLE `it_category` DISABLE KEYS */;
INSERT INTO `it_category` VALUES (1,'php',0,1,0,'2018-02-17 15:14:26','2018-02-17 15:14:26'),(2,'python',0,1,0,'2018-02-17 15:15:32','2018-02-17 15:15:32');
/*!40000 ALTER TABLE `it_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `it_role`
--

DROP TABLE IF EXISTS `it_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_role` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `power` int(11) NOT NULL COMMENT '越小权限越大',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_role`
--

LOCK TABLES `it_role` WRITE;
/*!40000 ALTER TABLE `it_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `it_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-24 22:07:31
