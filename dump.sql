-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: calculator
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

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
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `specialist_id` int(10) unsigned NOT NULL DEFAULT '1',
  `application_status_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_12_03_154137_laratrust_setup_tables',1),(4,'2018_12_09_203619_create_applications_table',1),(5,'2018_12_18_110358_create_specialists_table',1),(6,'2018_12_18_154418_create_statuses_table',1),(7,'2018_12_22_142951_create_photos_table',1),(8,'2018_12_28_115045_create_videos_table',1),(9,'2018_12_28_143128_create_texts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(1,3),(2,3),(5,3),(6,3),(7,3),(8,3),(9,3),(10,3),(5,6),(6,6),(8,6),(9,6),(10,6);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'create-user','Create Users','create new users','2019-01-16 17:04:43','2019-01-16 17:04:43'),(2,'see-user','See Users','see all users','2019-01-16 17:04:43','2019-01-16 17:04:43'),(3,'edit-user','Edit Users','edit all users','2019-01-16 17:04:43','2019-01-16 17:04:43'),(4,'delete-user','Delete Users','delete all users','2019-01-16 17:04:43','2019-01-16 17:04:43'),(5,'see-order','See Orders','see orders','2019-01-16 17:04:43','2019-01-16 17:04:43'),(6,'edit-order','Edit Orders','Edit orders','2019-01-16 17:04:43','2019-01-16 17:04:43'),(7,'delete-order','Delete Orders','Delete orders','2019-01-16 17:04:44','2019-01-16 17:04:44'),(8,'see-application','See Applications','See Application','2019-01-16 17:04:44','2019-01-16 17:04:44'),(9,'update-application','Update Applications','Update Application','2019-01-16 17:04:44','2019-01-16 17:04:44'),(10,'delete-application','delete Applications','delete Application','2019-01-16 17:04:44','2019-01-16 17:04:44');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'лестницы','Example','images/Stairs/1/2.jpg','images/Stairs/1/2.jpg'),(2,'полы','Example','images/Stairs/2/1.jpg','images/Stairs/2/1.jpg'),(3,'бронирование','Example','images/Stairs/3/1.jpg','images/Stairs/3/1.jpg'),(4,'эксклюзив','Example','images/Stairs/4/1.jpg','images/Stairs/4/1.jpg'),(5,'угловые и фигурные','Example','images/Showers/1/1.jpg','images/Showers/1/1.jpg'),(6,'прямые душевые','Example','images/Showers/2/1.jpg','images/Showers/2/1.jpg'),(7,'форма трапеции','Example','images/Showers/3/1.jpg','images/Showers/3/1.jpg'),(8,'двери ниша','Example','images/Showers/4/1.jpg','images/Showers/4/1.jpg'),(9,'глухие перегородки','Example','images/Showers/5/1.jpg','images/Showers/5/1.jpg'),(10,'ограждения в ванную','Example','images/Showers/6/1.jpg','images/Showers/6/1.jpg'),(11,'с раздвижной дверью','Example','images/Showers/7/1.jpg','images/Showers/7/1.jpg'),(12,'эксклюзив и опт','Example','images/Showers/8/1.jpg','images/Showers/8/1.jpg'),(13,'зеркала на заказ','Example','images/Glasses/1/1.jpg','images/Glasses/1/1.jpg'),(14,'зеркальное панно','Example','images/Glasses/2/1.jpg','images/Glasses/2/1.jpg'),(15,'оптовые заказы','Example','images/Glasses/3/1.jpg','images/Glasses/3/1.jpg'),(16,'эксклюзив решения','Example','images/Glasses/4/1.jpg','images/Glasses/4/1.jpg'),(17,'распашные двери','Example','images/Door/1/1.jpg','images/Door/1/1.jpg'),(18,'перегородки','Example','images/Door/2/1.jpg','images/Door/2/1.jpg'),(19,'маятниковые двери','Example','images/Door/3/1.jpg','images/Door/3/1.jpg'),(20,'раздвижные двери','Example','images/Door/4/1.jpg','images/Door/4/1.jpg'),(21,'ограждения','Example','images/Door/5/1.jpg','images/Door/5/1.jpg'),(22,'двери в коробках','Example','images/Door/6/1.jpg','images/Door/6/1.jpg'),(23,'эксклюзивные решения','Example','images/Door/7/1.jpg','images/Door/7/1.jpg'),(24,'скинали с фотопечатью','Example','images/Fartucks/1/1.jpg','images/Fartucks/1/1.jpg'),(25,'одноцветные фартуки','Example','images/Fartucks/2/1.jpg','images/Fartucks/2/1.jpg'),(26,'скинали с подсветкой','Example','images/Fartucks/3/1.jpg','images/Fartucks/3/1.jpg');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (2,1,'App\\User'),(3,2,'App\\User'),(4,3,'App\\User'),(5,4,'App\\User'),(6,5,'App\\User');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'user','Пользователь','see status of his orders','2019-01-16 17:04:42','2019-01-16 17:04:42'),(2,'admin','Админ','CRUD all users, RUD all orders, RUD all applications','2019-01-16 17:04:42','2019-01-16 17:04:42'),(3,'junior_admin','Младший админ','CR all users, RU all orders, RUD all applications','2019-01-16 17:04:42','2019-01-16 17:04:42'),(4,'moderator','Моддер','nothing','2019-01-16 17:04:42','2019-01-16 17:04:42'),(5,'logistics','Логистика','nothing','2019-01-16 17:04:42','2019-01-16 17:04:42'),(6,'manager','Менеджер','RU only new orders, RUD all applications','2019-01-16 17:04:42','2019-01-16 17:04:42');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialists`
--

DROP TABLE IF EXISTS `specialists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `specialist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialists`
--

LOCK TABLES `specialists` WRITE;
/*!40000 ALTER TABLE `specialists` DISABLE KEYS */;
INSERT INTO `specialists` VALUES (1,'Консультант'),(2,'Замерщик'),(3,'Дизайнер');
/*!40000 ALTER TABLE `specialists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'в рассмотрении'),(2,'в процессе'),(3,'завершен'),(4,'отменен');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texts`
--

LOCK TABLES `texts` WRITE;
/*!40000 ALTER TABLE `texts` DISABLE KEYS */;
INSERT INTO `texts` VALUES (1,'НАШИ ПРЕЕМУЩЕСТВА','null','Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что \n        тот обеспечивает более или менее стандартное заполнение шаблона'),(2,'НАШИ ПРЕЕМУЩЕСТВА','null','Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что \n        тот обеспечивает более или менее стандартное заполнение шаблона'),(3,'НАШИ ПРЕЕМУЩЕСТВА','null','Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что \n        тот обеспечивает более или менее стандартное заполнение шаблона'),(4,'НАШИ ПРЕЕМУЩЕСТВА','null','Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что \n        тот обеспечивает более или менее стандартное заполнение шаблона'),(5,'НАШИ ПРЕЕМУЩЕСТВА','null','Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что \n        тот обеспечивает более или менее стандартное заполнение шаблона'),(6,'КОМПАНИИ','НАЗВАНИЕ КОМПАНИИ','s'),(7,'КОМПАНИИ','НАЗВАНИЕ КОМПАНИИ','s'),(8,'КОМПАНИИ','НАЗВАНИЕ КОМПАНИИ','s'),(9,'КОМПАНИИ','НАЗВАНИЕ КОМПАНИИ','s'),(10,'КОМПАНИИ','НАЗВАНИЕ КОМПАНИИ','s');
/*!40000 ALTER TABLE `texts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$289Z9N22wrGLcxvjr4gJCOkOtJ/FBKNxyjP.XnNhXeQosqYXoiq2m',NULL,'2019-01-16 17:04:44','2019-01-16 17:04:44'),(2,'Junior admin','juniorAdmin@gmail.com',NULL,'$2y$10$vDpYZ.q9kG5sakg.xJHTPOIUZdZOvO8WPNVuuOuBPANX7OE2/SQVm',NULL,'2019-01-16 17:04:44','2019-01-16 17:04:44'),(3,'Moder','moder@gmail.com',NULL,'$2y$10$32FIVUlR/H.o2YqmZ6mo4OHu5j26hJZh2WkVo2mGOioz44co2vk36',NULL,'2019-01-16 17:04:45','2019-01-16 17:04:45'),(4,'Logistics','logistics@gmail.com',NULL,'$2y$10$OcLRw3P6hkUmLpvPISb9FuiPF3tu.sYkl69Qpq8xu8QZ2SPChIK0G',NULL,'2019-01-16 17:04:45','2019-01-16 17:04:45'),(5,'Manager','manager@gmail.com',NULL,'$2y$10$sESPg3vmWz50eclFxJ3LdOpqKYsEuvkYS5/C5sddwYBG1X5Kw09rm',NULL,'2019-01-16 17:04:45','2019-01-16 17:04:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'видео № 1','https://www.youtube.com/embed/cIyVNoY3_L4',1),(2,'видео № 2','https://www.youtube.com/embed/cIyVNoY3_L4',1),(3,'видео № 3','https://www.youtube.com/embed/cIyVNoY3_L4',1),(4,'видео № 4','https://www.youtube.com/embed/cIyVNoY3_L4',1),(5,'видео № 5','https://www.youtube.com/embed/cIyVNoY3_L4',1),(6,'видео № 6','https://www.youtube.com/embed/cIyVNoY3_L4',1),(7,'видео № 7','https://www.youtube.com/embed/cIyVNoY3_L4',1),(8,'видео № 8','https://www.youtube.com/embed/cIyVNoY3_L4',1),(9,'видео № 9','https://www.youtube.com/embed/cIyVNoY3_L4',1),(10,'видео № 10','https://www.youtube.com/embed/cIyVNoY3_L4',1),(11,'видео № 11','https://www.youtube.com/embed/cIyVNoY3_L4',1);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-16 18:05:13
