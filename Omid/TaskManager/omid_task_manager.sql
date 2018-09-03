-- MySQL dump 10.13  Distrib 5.7.22-22, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mage
-- ------------------------------------------------------
-- Server version	5.7.22-22

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
/*!50717 SELECT COUNT(*) INTO @rocksdb_has_p_s_session_variables FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'performance_schema' AND TABLE_NAME = 'session_variables' */;
/*!50717 SET @rocksdb_get_is_supported = IF (@rocksdb_has_p_s_session_variables, 'SELECT COUNT(*) INTO @rocksdb_is_supported FROM performance_schema.session_variables WHERE VARIABLE_NAME=\'rocksdb_bulk_load\'', 'SELECT 0') */;
/*!50717 PREPARE s FROM @rocksdb_get_is_supported */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;
/*!50717 SET @rocksdb_enable_bulk_load = IF (@rocksdb_is_supported, 'SET SESSION rocksdb_bulk_load = 1', 'SET @rocksdb_dummy_bulk_load = 0') */;
/*!50717 PREPARE s FROM @rocksdb_enable_bulk_load */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;

--
-- Table structure for table `omid_task_manager`
--

DROP TABLE IF EXISTS `omid_task_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omid_task_manager` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Task ID',
  `task_name` varchar(255) NOT NULL DEFAULT '' COMMENT 'Task Name',
  `task_description` text COMMENT 'Task Description',
  `start_time` datetime DEFAULT NULL COMMENT 'Start Date',
  `end_time` datetime DEFAULT NULL COMMENT 'End Date',
  `assigned_person` varchar(255) DEFAULT NULL COMMENT 'Assigned Person',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT 'Task Status',
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Task Manager Table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `omid_task_manager`
--

LOCK TABLES `omid_task_manager` WRITE;
/*!40000 ALTER TABLE `omid_task_manager` DISABLE KEYS */;
INSERT INTO `omid_task_manager` VALUES (1,'First Task Name','First task description goes in this field','2018-09-03 00:00:00','2018-09-07 21:11:18',NULL,1),(2,'Second Task Name edited new','<p>Second task description goes in this field for edit propose</p>\r\n<ul>\r\n<li>first</li>\r\n<li>second</li>\r\n</ul>','2018-10-24 00:00:00','2018-09-05 21:11:18','Omid Barza',2),(3,'Third Task Name','<p>Third task description goes in this field</p>','2018-09-06 00:00:00','2018-09-08 00:00:00','John Doe',3),(4,'First Task Name','First task description goes in this field','2018-09-03 00:00:00','2018-09-07 21:11:18',NULL,1),(6,'Third Task Name','Third task description goes in this field','2018-09-06 21:11:18','2018-09-08 21:11:18',NULL,1),(9,'check another new task','<p>description of this new task</p>','2018-09-25 00:00:00','2018-09-03 00:00:00','John',1);
/*!40000 ALTER TABLE `omid_task_manager` ENABLE KEYS */;
UNLOCK TABLES;
/*!50112 SET @disable_bulk_load = IF (@is_rocksdb_supported, 'SET SESSION rocksdb_bulk_load = @old_rocksdb_bulk_load', 'SET @dummy_rocksdb_bulk_load = 0') */;
/*!50112 PREPARE s FROM @disable_bulk_load */;
/*!50112 EXECUTE s */;
/*!50112 DEALLOCATE PREPARE s */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-03  6:44:47
