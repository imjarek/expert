-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: h903133075_db
-- ------------------------------------------------------
-- Server version	5.6.41-84.1

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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` double(8,2) DEFAULT NULL,
  `type_id` tinyint(3) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `preview` text COLLATE utf8mb4_unicode_ci,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `duration` text COLLATE utf8mb4_unicode_ci,
  `index` text COLLATE utf8mb4_unicode_ci,
  `level` text COLLATE utf8mb4_unicode_ci,
  `announcement` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_type_id_foreign` (`type_id`),
  CONSTRAINT `courses_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `courses_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'2019-03-17 13:10:56','2019-07-07 15:28:11','Детский фитнес',NULL,'Структура курса: 1 день. 1. Анатомо-физиологические особенности детей 7-10 лет. 2. Особенности развития физических качеств детей 7-10 лет. 3. Структура и содержание занятий по детском фитнесу. 4. Методика проведения занятий по базовой и фитбол-аэробике с детьми 7-10 лет. 2 день. 1. Фитнес-йога для детей 7-10 лет.',NULL,1,NULL,'2019-07-07 16:00:14_child-7-10-fitness.jpg','','24 часа',NULL,'дети 7-10 лет',NULL,1,NULL),(2,'2019-03-17 13:10:56','2019-07-07 12:57:22','Детский фитнес','child fitness','Структура курса: 1 день. 1. Анатомо-физиологические особенности детей 7-10 лет. 2. Особенности развития физических качеств детей 7-10 лет. 3. Структура и содержание занятий по детском фитнесу. 4. Методика проведения занятий по базовой и фитбол-аэробике с детьми 7-10 лет. 2 день. 1. Фитнес-йога для детей 7-10 лет.',NULL,1,NULL,'2019-07-07 15:57:22_child.jpg','','24 часа',NULL,'Дети 3-6 лет',NULL,1,NULL),(3,'2019-03-17 13:10:56','2019-07-07 13:17:28','Базовая аэробика / степ',NULL,'1 день 1. История создания и развития базовой и степ-аэробики. 2. 3. Музыкальное сопровождение в аэробике. 4. Основные шаги базовой аэробики. 2 день 1. Основные шаги степ-аэробики.',NULL,1,NULL,'2019-07-07 16:17:28_step-aero.jpg',NULL,'4 дня 24 академических часа',NULL,'начальный уровень','Фитнес',1,NULL),(4,'2019-03-17 13:10:56','2019-07-07 15:29:48','Фитнес-тестирование',NULL,'Это курс расчитан как на начинающих так и продвинутых фитнес-тренеров, а также всем, кто занимается фитнесом или спортом и хочет научиться оценивать свое состояние и познакомиться с техниками контроля изменений в своем организме',NULL,1,NULL,'2019-07-07 16:19:32_girl-testing.png',NULL,'1 день 8 часов',NULL,'продвинутый уровень','Фитнес',1,NULL),(5,'2019-03-17 13:10:56','2019-07-07 13:26:46','Фитнес в перинатальном периоде',NULL,'Этот семинар-тренинг специально разработан для женщин планирующих оставаться в отличной форме во время будущей беременности, а так же для действующих инструкторов по фитнесу и хочет изучить новое направление в фитнесе',NULL,1,NULL,'2019-07-07 16:26:05_perinatal.png',NULL,'4 дня',NULL,'базовый уровень','Курс',1,NULL),(6,'2019-03-17 13:10:56','2019-07-07 13:32:12','Теория и практика ведения тренинга. Освоение основных инструментов тренера',NULL,'Программа предназначена для психологов, практикующих тренеров, студентов старших курсов профильных факультетов. Могут участвовать все, кому тренинг личностного роста интересен с профессиональной точки зрения, кто хотел бы освоить групповую форму психологической работы, развить и усовершенствовать свои практические навыки.',NULL,2,NULL,'2019-07-07 16:32:12_trainers.jpg',NULL,'16 академических часов 2 дня',NULL,'продвинутый уровень','Фитнес',1,NULL),(7,'2019-03-17 13:10:56','2019-07-07 13:37:06','Фитнес-йога',NULL,'Этот семинар для тех, кто занимается фитнес-йогой самостоятельно или в группе и хочет изучить методику проведения занятий и возможно начать преподавать действующий инструктор по фитнесу и хочет изучить новое направление в фитнесе',NULL,2,NULL,'2019-07-07 16:34:22_fitness-yoga.png',NULL,NULL,NULL,'базовый уровень','Фитнес',1,NULL),(8,'2019-07-07 13:35:37','2019-07-07 13:38:10','Практика работы с предстрессовыми и стрессовыми состояниями',NULL,'Семинар – тренинг адресован широкому кругу практических психологов, психологам-консультантам, ведущим групп личностного роста, спортивным психологам, фитнес-тренерам, студентам старших курсов профильных факультетов, а так же всем заинтересованным в долговременном сохранении работоспособности, восстановлении и дальнейшем развитии природных возможностей человека.',NULL,2,NULL,'2019-07-07 16:38:10_sport-girl.jpg',NULL,'2 дня',NULL,'базовый уровень','Психология',1,NULL),(9,'2019-07-07 13:42:38','2019-07-07 13:45:07','Силовой / функциональный тренинг',NULL,'Функциональный тренинг - комплексная тренировка, ориентированная на увеличение мышечной силы, выносливости, координации и баланса. Простые упражнения с минимумом оборудования, принцип прогрессии от простого к сложному. Все движения выполняются в разных плоскостях и задействуют большое количество крупных и мелких мышц.',NULL,1,NULL,'2019-07-07 16:45:07_fitness-testing.png',NULL,'4 дня 24 академических часа',NULL,'базовый уровень','Фитнес',1,NULL),(10,'2019-07-07 13:45:38','2019-07-07 13:52:50','Стретчинг',NULL,'Общее понятие о гибкости, средства и методы развития. Методы определения эластичности мышц, подвижности суставов и позвоночника. Функциональная анатомия в стретчинге.',NULL,1,NULL,'2019-07-07 16:52:50_stretch.jpg',NULL,NULL,NULL,NULL,'фитнес',1,NULL);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses_types`
--

DROP TABLE IF EXISTS `courses_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses_types` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses_types`
--

LOCK TABLES `courses_types` WRITE;
/*!40000 ALTER TABLE `courses_types` DISABLE KEYS */;
INSERT INTO `courses_types` VALUES (1,'seminar','Семинар',NULL,NULL),(2,'training','Тренинг',NULL,NULL),(3,'video','Видео',NULL,NULL),(4,'ppt','Презентация',NULL,NULL),(5,'pdf','PDF',NULL,NULL);
/*!40000 ALTER TABLE `courses_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses_types_rel`
--

DROP TABLE IF EXISTS `courses_types_rel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses_types_rel` (
  `course_id` int(10) unsigned NOT NULL,
  `type_id` tinyint(3) unsigned NOT NULL,
  UNIQUE KEY `courses_types_rel_course_id_type_id_unique` (`course_id`,`type_id`),
  KEY `courses_types_rel_type_id_foreign` (`type_id`),
  CONSTRAINT `courses_types_rel_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `courses_types_rel_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `courses_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses_types_rel`
--

LOCK TABLES `courses_types_rel` WRITE;
/*!40000 ALTER TABLE `courses_types_rel` DISABLE KEYS */;
INSERT INTO `courses_types_rel` VALUES (2,1),(3,1),(5,1),(9,1),(1,2),(4,2),(5,2),(6,2),(10,2),(9,3);
/*!40000 ALTER TABLE `courses_types_rel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_03_02_092538_create_courses_table',1),(4,'2019_03_02_093808_create_orders_table',1),(5,'2019_03_17_135500_create_courses_types_table',1),(6,'2019_03_17_135505_alter_courses_table_add_constraints',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `users` VALUES (1,'configured mail receiver','sergey.ch@neklo.com',NULL,'asdfjkl;',NULL,'2019-04-27 10:50:34','2019-04-27 10:50:34'),(2,'configured mail receiver','sergey.i.che@mail.ru',NULL,'asdfjkl;',NULL,'2019-04-27 10:51:28','2019-04-27 10:51:28'),(3,'configured mail receiver','sergey.i.che@gmail.com',NULL,'asdfjkl;',NULL,'2019-04-27 10:52:06','2019-04-27 10:52:06'),(5,'Oxana','filimonova_o@list.ru',NULL,'$2y$10$BJDf46DRxiLldkZ5sMrr8OdHkmBJgD0i8YrQLkm1l2.9MGsPQJLde',NULL,'2019-06-23 15:46:54','2019-06-23 15:46:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-16 14:27:12
