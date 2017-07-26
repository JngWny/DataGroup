CREATE DATABASE  IF NOT EXISTS `graphs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `graphs`;
-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: graphs
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'Post1','where are you',1,'2017-02-04 01:42:15','2017-07-04 00:42:15'),(2,1,'Post2','in Buffalo',1,'2017-02-04 05:29:30','2017-07-04 04:29:30'),(3,1,'Post3','moving soon?',1,'2017-04-04 04:32:01','2017-07-04 04:32:01'),(4,1,'Post04','never',1,'2017-04-04 04:40:59','2017-07-04 04:40:59'),(5,1,'try5','good 4 u',1,'2017-06-04 04:43:49','2017-07-04 04:43:49'),(6,1,'Post 6','forget nothing',1,'2017-06-04 04:47:37','2017-07-04 04:47:37'),(7,1,'test7','eureka',1,'2017-06-04 04:48:39','2017-07-04 04:48:39'),(8,1,'cooking now','fff',1,'2017-07-04 04:49:15','2017-07-04 04:49:15'),(9,1,'bested again','bdtnry',1,'2017-07-04 04:49:32','2017-07-04 04:49:32'),(10,1,'story number 1','once upon a time',1,'2017-07-05 18:17:24','2017-07-05 18:17:24'),(11,1,'captured','add comments',1,'2017-07-06 16:41:01','2017-07-06 16:41:01'),(12,1,'this is going smoothly','I\'ve added the ability to add comments',1,'2017-07-06 16:42:52','2017-07-06 16:42:52'),(13,1,'adding to post list','more text',1,'2017-07-06 16:56:38','2017-07-06 16:56:38'),(14,1,'adding to post list','more text',1,'2017-07-06 17:00:08','2017-07-06 17:00:08'),(15,1,'adding to post list again','more text',1,'2017-07-06 17:00:17','2017-07-06 17:00:17'),(16,1,'trthesnn','ntrsdm6jry',1,'2017-07-06 17:03:17','2017-07-06 17:03:17'),(17,1,'trthesnn','ntrsdm6jry',1,'2017-07-06 17:07:54','2017-07-06 17:07:54'),(18,1,'hnsetnn','tjdrjkek5',1,'2017-07-06 17:09:55','2017-07-06 17:09:55'),(19,1,'hnsetnnytrj','tjdrjkek5r',1,'2017-07-06 17:14:21','2017-07-06 17:14:21'),(20,1,'just about 1:15','testing time',1,'2017-07-06 17:14:57','2017-07-06 17:14:57'),(21,1,'one more test','just checking refinements to appearence',1,'2017-07-06 17:37:44','2017-07-06 17:37:44'),(22,1,'test mass','why not',1,'2017-07-07 20:14:21','2017-07-07 20:14:21'),(23,1,'testing thte new post','this looks ok',1,'2017-07-08 15:05:17','2017-07-08 15:05:17'),(24,3,'testubg','1223455',1,'2017-07-08 22:22:09','2017-07-08 22:22:09'),(85,3,'Finishing tag tests','sure this works',1,'2017-07-26 17:43:59','2017-07-26 17:43:59');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-26 16:49:29
