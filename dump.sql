-- MySQL dump 10.13  Distrib 5.6.20, for osx10.10 (x86_64)
--
-- Host: localhost    Database: aulacomvc
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `Grade`
--

DROP TABLE IF EXISTS `Grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Grade`
--

LOCK TABLES `Grade` WRITE;
/*!40000 ALTER TABLE `Grade` DISABLE KEYS */;
INSERT INTO `Grade` VALUES (1,'Matemática'),(2,'Português'),(3,'Geografia'),(4,'Programação');
/*!40000 ALTER TABLE `Grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Schedule`
--

DROP TABLE IF EXISTS `Schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `class_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A34E73AD41807E1D` (`teacher_id`),
  KEY `IDX_A34E73ADCB944F1A` (`student_id`),
  CONSTRAINT `FK_A34E73AD41807E1D` FOREIGN KEY (`teacher_id`) REFERENCES `fos_user` (`id`),
  CONSTRAINT `FK_A34E73ADCB944F1A` FOREIGN KEY (`student_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Schedule`
--

LOCK TABLES `Schedule` WRITE;
/*!40000 ALTER TABLE `Schedule` DISABLE KEYS */;
INSERT INTO `Schedule` VALUES (1,11,10,10,'2009-01-01 00:00:00','2014-08-28 22:49:30','2014-08-28 23:16:58');
/*!40000 ALTER TABLE `Schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TeacherGrade`
--

DROP TABLE IF EXISTS `TeacherGrade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TeacherGrade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FC334DE2A76ED395` (`user_id`),
  KEY `IDX_FC334DE2FE19A1A8` (`grade_id`),
  CONSTRAINT `FK_FC334DE2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`),
  CONSTRAINT `FK_FC334DE2FE19A1A8` FOREIGN KEY (`grade_id`) REFERENCES `Grade` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TeacherGrade`
--

LOCK TABLES `TeacherGrade` WRITE;
/*!40000 ALTER TABLE `TeacherGrade` DISABLE KEYS */;
/*!40000 ALTER TABLE `TeacherGrade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grade_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `about` longtext COLLATE utf8_unicode_ci NOT NULL,
  `about_course` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  KEY `IDX_957A6479FE19A1A8` (`grade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (9,'professor','professor','professor@professor.com','professor@professor.com',1,'fm29i7f8x4gskg040g484sk0wgo4w0w','xoPT95j9t3g9UAbiNIq8Z37rfTGeJaBNuDtnmrqZlaBCr6uwAqjh8dyhJACXN2KM6tSUKBu9Trs2R3Sl8gP4HA==','2014-08-28 22:36:05',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Professor Bernardo','professor',NULL,'uploads/image_53ffd905652b6.jpeg',200,'sou professor','sobre meu curso'),(10,'estudante','estudante','estudante@estudante.com','estudante@estudante.com',1,'ss8gabptcuocgcw4o48ws4oock0sc0g','xKQCzSlHa1z6bqX/O+I3wSotGYb2P9f2IklE48sE7IoPo6r2rboi4V1HnI1Bd2oY7v7oKi8+jWHapSGDCOvjiw==','2014-08-30 13:23:43',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Estudante Bernardo','aluno',NULL,'uploads/image_53ffd92db1702.jpeg',100,'nois','que ta'),(11,'pasqual','pasqual','pasqual@pasqual.com','pasqual@pasqual.com',1,'d8go9ymguc8ckosgkgggokwgc4ogc4c','LdO1i9iJHzMf+GESRhoG5uRT6rsDv4Z4Kc/JJV/GctfpikrxL7egsfuOBEA8DHBGfqx9muPtO+ZVSj3JrRO9Hg==','2014-08-28 23:15:46',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Professor Pasqual','professor','2','uploads/image_53ffda5b26828.jpeg',300,'pasquale','gato'),(12,'morgana','morgana','morgana@morgana.com','morgana@morgana.com',1,'6pgf2f28o88484k84scsgooso0c0wk8','XCtvCCW4k9WhCzbQMVr1S8HPeMdL2hA3z/QYZ7jjffloKwVQCZlq6k16nM7aRMO1Np+h4p3vGGVvdnQRQXDD/Q==','2014-08-30 13:22:53',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'morgana','aluno','1','uploads/image_5401fa5d9d4f7.jpeg',0,'oi','oi');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-31 12:15:56
