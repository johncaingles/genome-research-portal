-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: genome_db
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
-- Table structure for table `genbank`
--

DROP TABLE IF EXISTS `genbank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genbank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `accession` varchar(150) NOT NULL,
  `gi` varchar(150) NOT NULL,
  `definition` varchar(150) NOT NULL,
  `keywords` varchar(300) DEFAULT NULL,
  `source` varchar(150) NOT NULL,
  `update_date` varchar(50) DEFAULT NULL,
  `create_date` varchar(50) DEFAULT NULL,
  `organism_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accession_UNIQUE` (`accession`),
  UNIQUE KEY `gi_UNIQUE` (`gi`),
  KEY `gen_organism_id_idx` (`organism_id`),
  CONSTRAINT `gen_organism_id` FOREIGN KEY (`organism_id`) REFERENCES `organism` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genbank`
--

LOCK TABLES `genbank` WRITE;
/*!40000 ALTER TABLE `genbank` DISABLE KEYS */;
INSERT INTO `genbank` VALUES (1,'K123456789','2323123123','The most OP ever','pika, pika-chu!!!!','Ash\'s Pikachu','20-JUL-2013','20-JUL-2013',1);
/*!40000 ALTER TABLE `genbank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genbank_reference`
--

DROP TABLE IF EXISTS `genbank_reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genbank_reference` (
  `genbank_id` int(10) unsigned NOT NULL,
  `reference_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`genbank_id`,`reference_id`),
  KEY `reference_id_idx` (`reference_id`),
  CONSTRAINT `gen_ref_genbank_id` FOREIGN KEY (`genbank_id`) REFERENCES `genbank` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gen_ref_reference_id` FOREIGN KEY (`reference_id`) REFERENCES `reference` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genbank_reference`
--

LOCK TABLES `genbank_reference` WRITE;
/*!40000 ALTER TABLE `genbank_reference` DISABLE KEYS */;
INSERT INTO `genbank_reference` VALUES (1,1);
/*!40000 ALTER TABLE `genbank_reference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organism`
--

DROP TABLE IF EXISTS `organism`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organism` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `species` varchar(150) NOT NULL,
  `taxonomy` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `species_UNIQUE` (`species`),
  KEY `Index_3` (`species`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organism`
--

LOCK TABLES `organism` WRITE;
/*!40000 ALTER TABLE `organism` DISABLE KEYS */;
INSERT INTO `organism` VALUES (1,'Pika chu','Pichu; Pikachuuuuu');
/*!40000 ALTER TABLE `organism` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reference`
--

DROP TABLE IF EXISTS `reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reference` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `journal` varchar(300) NOT NULL,
  `affiliation` varchar(500) DEFAULT NULL,
  `pubmed` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title_UNIQUE` (`title`),
  KEY `Index_2` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reference`
--

LOCK TABLES `reference` WRITE;
/*!40000 ALTER TABLE `reference` DISABLE KEYS */;
INSERT INTO `reference` VALUES (1,'The Pikachu that noone ever was','Pokedex 1.0','Professor Oak','1121212');
/*!40000 ALTER TABLE `reference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reference_researcher`
--

DROP TABLE IF EXISTS `reference_researcher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reference_researcher` (
  `reference_id` int(10) unsigned NOT NULL,
  `researcher_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`reference_id`,`researcher_id`),
  KEY `researcher_id_idx` (`researcher_id`),
  CONSTRAINT `ref_res_reference_id` FOREIGN KEY (`reference_id`) REFERENCES `reference` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `ref_res_researcher_id` FOREIGN KEY (`researcher_id`) REFERENCES `researcher` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reference_researcher`
--

LOCK TABLES `reference_researcher` WRITE;
/*!40000 ALTER TABLE `reference_researcher` DISABLE KEYS */;
INSERT INTO `reference_researcher` VALUES (1,1),(1,2),(1,3);
/*!40000 ALTER TABLE `reference_researcher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `researcher`
--

DROP TABLE IF EXISTS `researcher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `researcher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(150) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`first_name`,`last_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `researcher`
--

LOCK TABLES `researcher` WRITE;
/*!40000 ALTER TABLE `researcher` DISABLE KEYS */;
INSERT INTO `researcher` VALUES (1,'Simeon','J. L.'),(2,'Caingles','J. I.'),(3,'Bhuller','B.');
/*!40000 ALTER TABLE `researcher` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-09  0:16:08
