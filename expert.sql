-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: expert
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.16.04.2

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
  `order` int(11) DEFAULT '100',
  `expert` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_type_id_foreign` (`type_id`),
  CONSTRAINT `courses_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `courses_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'2019-03-17 13:10:56','2019-12-08 11:01:07','Детский фитнес',NULL,'<p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Анатомо-физиологические особенности детей 3-6 лет.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Особенности развития физических качеств детей 3-6 лет.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Структура и содержание занятий по детском фитнесу.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">4. Пальчиковая гимнастика, подвижные игры и круговая тренировка в занятиях с детьми 3-6 лет.</span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">5. Методика проведения занятий по фитбол-гимнастике с детьми 3-6 лет.</span></span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">6. Подвижные игры в занятиях с детьми 3-6 лет.</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Анатомо-физиологические особенности детей 7-10 лет.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Особенности развития физических качеств детей 7-10 лет.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Структура и содержание занятий по детском фитнесу.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">4. Методика проведения занятий по базовой и фитбол-аэробике с детьми 7-10 лет.</span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">5. Силовые упражнения в занятиях с детьми 7-10 лет, круговая тренировка.</span></span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">6. Подвижные игры в занятиях с детьми 7-10 лет.</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">1. Фитнес-йога для детей </span></span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">2. Содержание, структура, методика проведения занятий.</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Классификация нарушений осанки, способы определения нарушений осанки (соматоскопия).</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Плоскостопие: виды, способы коррекции в рамках физкультурно-оздоровительного занятия.<br />3. Организация и методика проведения занятия &laquo;Школа спины&raquo;, направленного на профилактику и коррекцию нарушений осанки и плоскостопия.</span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">4. Детское фитнес-тестирование.</span></span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Зачет.</span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></p><ul><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто хочет обучиться с нуля </span></span></li><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто занимается сам и хочет освоить новую профессию </span></span></li><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для действующих фитнес-инструкторов, инструкторов по физической культуре, которые хотят повысить свою квалификацию</span></span></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><ul><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">навыки техники выполнения упражнений</span></span></p></li><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: small;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">умения составлять комплексы упражнений по Пилатесу, проводить занятия для различного контингента занимающихся</span></span></span></span></p></li><li><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p></li><li><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">готовые комплексы упражнений, а также музыку для проведения занятий</span></span></p></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: small;\">Выдаваемый документ:</span></span></span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Сертификат</span></p>',6900.00,1,NULL,'5decd8e6b5ecb_program-10.jpg','','24 часа',NULL,'дети 7-10 лет',NULL,1,120,NULL,NULL),(3,'2019-03-17 13:10:56','2019-12-08 11:00:41','Степ-аэробика',NULL,'<p><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Задачи тренинга:</span></span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Формирование базовых навыков проведения занятий по степ-аэробике </span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">1. Общее понятие о степ-аэробике. История создания и развития.<br />2. Особенности техники безопасности при использовании степ-платформы.<br />3. Структура занятия по степ-аэробике.<br />4. Основные шаги степ-аэробики.<br />5. Классификация положений занимающихся относительно степ-платформы, перемещений по степ-платформе и вокруг. <br /></span></span><span style=\"font-family: Times New Roman, serif;\">6. Методика составления и разучивания комбинаций.</span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто хочет обучиться с нуля </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто занимается сам и хочет освоить новую профессию </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">музыку для проведения занятий</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Выдаваемый документ:</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">всем участникам выдается Сертификат. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">при успешной сдаче зачета выдается Свидетельство о дополнительном образовании </span></p>',5900.00,1,NULL,'5dece10918b32_program-4.jpg',NULL,'24 академических часа 4 дня',NULL,'начальный уровень','Фитнес',1,35,'Ерастова Галина','2020 г.'),(4,'2019-03-17 13:10:56','2019-12-08 10:59:51','Базовая аэробика',NULL,'<p><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Задачи тренинга:</span></span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Формирование базовых навыков, на которых основаны все остальные форматы групповых программ. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Без умения составлять и проводить связки по базовой аэробике невозможно провести даже разминку в любой групповой программе! Это первый курс, который стоит посетить, если Вы делаете первые шаги в освоении профессии фитнес-тренера.</span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">История создания и развития базовой аэробики.<br />Структура занятия по базовой аэробике.<br />Основные шаги базовой аэробики.<br />Методика составления и проведения разминки.</span></span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Методика составления и разучивания комбинаций.<br />(линейный, сложение, пирамида, деление пополам, модификация).</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто хочет обучиться с нуля </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто занимается сам и хочет освоить новую профессию </span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">навыки проведения занятий по базовой аэробике</span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">музыку для проведения занятий</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Выдаваемый документ:</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">всем участникам выдается Сертификат. </span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">при успешной сдаче зачета выдается Свидетельство о дополнительном образовании </span></span></p>',5900.00,1,NULL,'5dece0a17a601_program-3.jpg',NULL,'24 академических часа 4 дня',NULL,'продвинутый уровень','Фитнес',1,25,'Ерастова Галина','2020 г.'),(5,'2019-03-17 13:10:56','2019-12-08 11:23:24','Фитнес в перинатальном периоде',NULL,'<p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1 день</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Анатомо-физиологические особенности беременных женщин.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Показания и противопоказания к занятиям. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Содержание и методика проведения занятий по триместрам.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">4. Аэробные, силовые, специальные упражнения, стретчинг. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2 день</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Фитбол-гимнастика.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Фитнес-йога. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Подбор упражнений в послеродовом периоде.</span></p><p><span style=\"font-family: Times New Roman, serif;\">4. Зачет.</span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></p><ul><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: small;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">для тех, кто планирует беременность и хочет узнать как пройти это период оставаясь в отличной форме</span></span></span></span></p></li><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: small;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">для действующих инструкторов по фитнесу </span></span></span></span></p></li></ul><p lang=\"ru-RU\" align=\"JUSTIFY\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><ul><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">навыки техники выполнения упражнений</span></span></p></li><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: small;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">умения составлять комплексы упражнений, проводить занятия различной направленности</span></span></span></span></p></li><li><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p></li><li><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">готовые комплексы упражнений, а также музыку для проведения занятий</span></span></p></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\" align=\"JUSTIFY\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: small;\">Выдаваемый документ:</span></span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Сертификат</span></p>',4900.00,1,NULL,'5decdb04e2031_program-11.jpg',NULL,'4 дня',NULL,'базовый уровень','Курс',1,250,'Филимонова Оксана',NULL),(6,'2019-03-17 13:10:56','2019-12-08 10:30:04','Теория и практика ведения тренинга. Освоение основных инструментов тренера',NULL,'<p>Программа предназначена для психологов, практикующих тренеров, студентов старших курсов профильных факультетов. Могут участвовать все, кому тренинг личностного роста интересен с профессиональной точки зрения, кто хотел бы освоить групповую форму психологической работы, развить и усовершенствовать свои практические навыки.</p>',NULL,2,NULL,'2019-07-07 16:32:12_trainers.jpg',NULL,'16 академических часов 2 дня',NULL,'продвинутый уровень','Фитнес',NULL,NULL,NULL,NULL),(7,'2019-03-17 13:10:56','2019-12-08 09:59:24','Фитнес-йога',NULL,'<p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Общее понятие о психофизической тренировке.<br /></span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Асаны, виньясы - классификация, терапевтическое действие.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Виды асан в положении стоя: техника выполнения, методические рекомендации.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Особенности методики проведения занятий в фитнес-клубах.<br />2. Виды асан в упоре на кисти и стопы: техника выполнения, методические рекомендации.<br />3. Виды асан в положении сидя: техника выполнения, методические рекомендации.<br />1. Виды асан в положении лежа на спине: техника выполнения, методические рекомендации.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Виды асан в положении лежа на животе: техника выполнения, методические рекомендации.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Перевернутые асаны: показания, противопоказания, техника выполнения. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Структурное построение занятий по фитнес-йоге.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Методика обучения занимающихся различного уровня подготовленности.</span></p><p><span style=\"font-family: Times New Roman, serif;\">3. </span><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Зачет.</span></span></p><p align=\"JUSTIFY\"><strong><span style=\"font-family: Times New Roman, serif;\">Этот семинар для тех, кто</span></strong></p><ul><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">занимается фитнес-йогой самостоятельно или в группе и хочет изучить методику проведения занятий </span></span></p></li><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">действующий инструктор по фитнесу и хочет изучить новое направление в фитнесе</span></span></p></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><ul><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: small;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">умения составлять комплексы упражнений по фитнес-йоге, проводить занятия для различного контингента занимающихся</span></span></span></span></p></li><li><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p></li><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">готовые комплексы упражнений, а также музыку для проведения занятий</span></span></p></li></ul><p lang=\"ru-RU\" align=\"JUSTIFY\">&nbsp;</p><p lang=\"ru-RU\" align=\"JUSTIFY\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: small;\">Выдаваемый документ:</span></span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Сертификат</span></p><p lang=\"ru-RU\">При прохождении семинара Фитнес-йога и Пилатес и успешной сдаче зачета</p><p lang=\"ru-RU\">- Свидетельство о дополнительном образовании</p><div id=\"gtx-trans\" style=\"position: absolute; left: 63px; top: 912px;\"><div class=\"gtx-trans-icon\">&nbsp;</div></div>',5900.00,2,NULL,'5decd58a4a1f5_program-8.jpg',NULL,'16 академических часов 3 дня',NULL,'базовый уровень','Фитнес',1,NULL,'Оксана Филимонова','Март-май 2020'),(8,'2019-07-07 13:35:37','2019-12-08 10:40:38','Практика работы с предстрессовыми и стрессовыми состояниями',NULL,'<p>Семинар &ndash; тренинг адресован широкому кругу практических психологов, психологам-консультантам, ведущим групп личностного роста, спортивным психологам, фитнес-тренерам, студентам старших курсов профильных факультетов, а так же всем заинтересованным в долговременном сохранении работоспособности, восстановлении и дальнейшем развитии природных возможностей человека.</p>',NULL,2,NULL,'2019-07-07 16:38:10_sport-girl.jpg',NULL,'2 дня',NULL,'базовый уровень','Психология',NULL,NULL,NULL,NULL),(9,'2019-07-07 13:42:38','2019-12-08 10:13:28','Функциональный тренинг',NULL,'<p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">1. Цели и задачи функционального тренинга.</span></span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Основные принципы и правила построения функциональных тренировок.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Методы преобразования силового упражнения в функциональное.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">4. Использование инвентаря в функциональном тренинге. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Методика составления силовых комбинаций.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Методика проведения занятий по функциональному тренингу. </span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">3. Зачет.</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></strong></p><ul><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто хочет обучиться с нуля </span></span></li><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто занимается сам и хочет освоить новую профессию </span></span></li><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию</span></span></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><p><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">навыки проведения занятий </span></span></span><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">функционального тренинга</span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">готовые комплексы упражнений, а также музыку для проведения занятий</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Выдаваемый документ:</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Сертификат. </span></p><p lang=\"ru-RU\">При прохождении курсов Силовой и Функциональный тренинг и успешной сдаче зачета</p><p lang=\"ru-RU\">Свидетельство о дополнительном образовании</p>',4900.00,1,NULL,'5decccc83c7ba_program-1.jpg','2019-12-08 13:06:50_program-1.jpg','2 дня 16 академических часа',NULL,'базовый уровень','Фитнес',1,NULL,NULL,NULL),(10,'2019-07-07 13:45:38','2019-12-08 11:26:14','Стретчинг',NULL,'<h3><strong>План обучения по разделам</strong></h3><ol><li>Общее понятие о гибкости, средства и методы развития.</li><li>Методы определения эластичности мышц, подвижности суставов и позвоночника.</li><li>Функциональная анатомия в стретчинге.</li><li>Динамический стретчинг.</li><li>Статический стретчинг.</li><li>Методика проведения занятий.</li></ol><h3><strong>Для кого подходит?</strong></h3><p>для тех, кто хочет обучиться с нуля<br />для тех, кто занимается сам и хочет освоить новую профессию<br />для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию</p><h3><strong>Что вы получите?</strong></h3><p>подробное учебно-методическое пособие<br />готовые комплексы упражнений, а также музыку для проведения занятий</p><h3><strong>Выдаваемый документ:</strong></h3><p>Сертификат</p>',4900.00,1,NULL,'5deccdbd0c834_program-6.jpg',NULL,NULL,NULL,NULL,'фитнес',1,40,NULL,NULL),(11,'2019-12-08 09:04:08','2019-12-08 10:32:01','Инструктор групповых программ',NULL,'<p>Задачи тренинга:<br />Изучение фундаментальной теоретической базы, необходимой для специалиста в области фитнеса и физической культуры <br />Формирование умений и навыков проведения групповых занятий различной направленности (аэробной, силовой).</p><p>План обучения по разделам<br />1. Анатомия.<br />2. Физиология. <br />3. Возрастная и спортивная морфология<br />4. Биохимия и нутрициология.<br />5. Биомеханика. <br />6. Спортивная медицина. <br />7. Психологические особенности оздоровительной физической культуры.<br />8. Базовая аэробика.<br />9. Степ-аэробика.<br />10. Силовой тренинг.<br />11. Функциональный тренинг.<br />12. Стретчинг.<br />13. Выпускная аттестационная работа.</p><p>Для кого подходит?<br />для тех, кто хочет обучиться с нуля<br />для тех, кто сам занимается и хочет научиться поводить занятия сам<br />для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию и получить официальный диплом, дающий право на профессиональную деятельность в сфере фитнеса и физической культуры</p><p>Что вы получите?<br />навыки проведения групповых программ различной направленности<br />подробное учебно-методическое пособие по каждому направлению<br />музыку для проведения занятий</p><p>Выдаваемый документ:<br />Диплом о профессиональной переподготовке - официальный, лицензированный документ о дополнительном профессиональном образовании в Российской Федерации, дающий право на профессиональную деятельность в сфере фитнеса и физической культуры</p>',25000.00,2,NULL,'5decde267fcf6_news.jpg',NULL,'270 академических часов',NULL,NULL,'Изучение умений и навыков проведения групповых занятий различной направленности',1,NULL,'Ерастова Галина','270 академических часов'),(12,'2019-12-08 10:01:37','2019-12-08 10:03:00','Пилатес',NULL,'<p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">1. Ознакомление с историей создания метода, основными принципами и задачами курса для начинающих.<br />2. Основы анатомии и физиологии, применительно к методу Пилатес<br />3. Постановка техники дыхания по системе &laquo;Пилатес&raquo;.<br />4. Изучение техники выполнения и анализ упражнений системы &laquo;Пилатес&raquo;.<br />5. Методика составления комплексов упражнений смешанного уровня.<br />6. Практические задания для самостоятельной работы по составлению программы по системе &laquo;Пилатес&raquo;.</span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></p><ul><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто хочет обучиться с нуля </span></span></li><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто занимается сам и хочет освоить новую профессию </span></span></li><li lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию</span></span></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><ul><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">навыки техники выполнения упражнений</span></span></p></li><li><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: small;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: medium;\">умения составлять комплексы упражнений по Пилатесу, проводить занятия для различного контингента занимающихся</span></span></span></span></p></li><li><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p></li><li><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">готовые комплексы упражнений, а также музыку для проведения занятий</span></span></p></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\" align=\"JUSTIFY\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: small;\">Выдаваемый документ:</span></span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Сертификат</span></p><p lang=\"ru-RU\">При прохождении семинара Фитнес-йога и Пилатес и успешной сдаче зачета</p><p lang=\"ru-RU\">- Свидетельство о дополнительном образовании</p>',5900.00,1,NULL,'5decd86458b28_advantages-bg.jpg',NULL,'16 академических часов 3 дня',NULL,NULL,'Пилатес',1,100,'Каторжная Екатерина',NULL),(13,'2019-12-08 10:17:41','2019-12-08 10:19:31','Стрип-пластика',NULL,'<p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">1. Принципы занятия по Стрип-пластике.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">2. Техника выполнения основных шагов.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">3. Основные движения в Стрип-пластике.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">4. Структура и методика проведения занятия.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">5. Мастер-классы по стрип-пластике.</span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто любит танцевать</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">для инструкторов групповых программ</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">для профессиональных танцоров</span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><ul><li><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p></li><li><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">готовые комплексы упражнений, а также музыку для проведения занятий</span></span></p></li></ul><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\" align=\"JUSTIFY\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: small;\">Выдаваемый документ:</span></span></span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Сертификат</span></p><div id=\"gtx-trans\" style=\"position: absolute; left: 36px; top: 557px;\"><div class=\"gtx-trans-icon\">&nbsp;</div></div>',4900.00,1,NULL,'5decdc437fb46_program-12.jpg',NULL,'16 академических часов 2 дня',NULL,NULL,'Стрип-пластика',1,100,'Ерастова Галина','2020 г.'),(14,'2019-12-08 10:23:46','2019-12-08 10:25:00','Персональный тренер тренажерного зала',NULL,'<p><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Задачи тренинга:</span></span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Изучение фундаментальной теоретической базы, необходимой для специалиста в области фитнеса и физической культуры </span></p><p align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Формирование навыка проведения персональных тренировок с учетом индивидуальных особенностей занимающихся (возраста, пола, физической подготовленности, состояния здоровья).</span></span></p><p align=\"JUSTIFY\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Освоение методики составления </span></span><span lang=\"ru-RU\">рационов питания для достижения поставленных целей клиента (набор мышечной массы тела, уменьшение жирового компонента).</span></p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><ol><li><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Анатомия.</span></p></li><li><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Физиология. </span></p></li><li><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Возрастная и спортивная морфология</span></p></li><li><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Биохимия и нутрициология.</span></span></p></li><li><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Биомеханика. </span></p></li><li><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Спортивная медицина. </span></p></li><li><p><span lang=\"ru-RU\">Техника выполнения упражнений на силовых тренажерах. </span></p></li><li><p><span lang=\"ru-RU\">Техника выполнения упражнений со свободными весами.</span></p></li><li><p><span lang=\"ru-RU\">Правила использования кардио-оборудования. </span></p></li><li><p><span lang=\"ru-RU\">Техника безопасности при проведении занятий в тренажерном зале.</span></p></li><li><p><span lang=\"ru-RU\">Методика составления программ силовой направленности с учетом пола, возраста, физической подготовленности и состояния здоровья клиента. </span></p></li><li><p><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">Функциональный тренинг в тренажерном зале.</span></span></p></li><li><p lang=\"ru-RU\">Технологии продаж персональных тренировок.</p></li><li><p lang=\"ru-RU\">Выпускная аттестационная работа.</p></li></ol><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></strong></p><p><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">для тех, кто хочет обучиться с нуля </span></span></span></p><p><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">для тех, кто занимается сам и хочет освоить новую профессию </span></span></span></p><p><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию и получить официальный диплом, дающий право </span></span></span><span style=\"font-family: Times New Roman, serif;\"><span lang=\"ru-RU\">на профессиональную деятельность в сфере фитнеса и физической культуры </span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">навыки проведения персональных тренировок и составления режима питания</span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">технологии продаж персональных тренировок</span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие.</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Выдаваемый документ:</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Диплом о профессиональной переподготовке - официальный, лицензированный документ о дополнительном профессиональном образовании в Российской Федерации, дающий право на профессиональную деятельность в сфере фитнеса и физической культуры </span></p>',25000.00,1,NULL,'5decdd8cb8cb1_program-2.jpg',NULL,'270 академических часов',NULL,NULL,'Персональный тренер тренажерного зала',1,100,'Оксана Филимонова','270 академических часов'),(15,'2019-12-08 11:27:53','2019-12-08 11:29:28','Силовой  тренинг',NULL,'<p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">План обучения по разделам</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Функциональная анатомия.<br />Цели и задачи групповых силовых тренировок.<br />Техника выполнения базовых упражнений.</span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Запрещенные упражнения.<br />Методика проведения занятий по силовому тренингу. </span></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">Регулирование нагрузки в силовом тренинге.</span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Для кого подходит?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто хочет обучиться с нуля </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для тех, кто занимается сам и хочет освоить новую профессию </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Что вы получите?</span></span></strong></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">навыки проведения занятий силовой направленности</span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">подробное учебно-методическое пособие </span></span></p><p lang=\"ru-RU\"><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">музыку для проведения занятий</span></span></p><p lang=\"ru-RU\">&nbsp;</p><p lang=\"ru-RU\"><strong><span style=\"color: #000000;\"><span style=\"font-family: Times New Roman, serif;\">Выдаваемый документ:</span></span></strong></p><p lang=\"ru-RU\"><span style=\"font-family: Times New Roman, serif;\">всем участникам выдается Сертификат. </span></p><p lang=\"ru-RU\">При прохождении курсов Силовой и Функциональный тренинг и успешной сдаче зачета</p><p lang=\"ru-RU\">- Свидетельство о дополнительном образовании</p><div id=\"gtx-trans\" style=\"position: absolute; left: 100px; top: 695px;\"><div class=\"gtx-trans-icon\">&nbsp;</div></div>',4900.00,2,NULL,'5dececa892f92_program-7.jpg',NULL,'16 академических часов 2 дня',NULL,NULL,'Силовой  тренинг',1,45,'Галина Ерастова','Март-май 2020');
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
INSERT INTO `courses_types_rel` VALUES (3,1),(5,1),(9,1),(1,2),(4,2),(5,2),(6,2),(10,2),(9,3);
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
-- Table structure for table `orders_courses`
--

DROP TABLE IF EXISTS `orders_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_courses` (
  `order_id` bigint(20) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  KEY `orders_courses_order_id_foreign` (`order_id`),
  KEY `orders_courses_course_id_foreign` (`course_id`),
  CONSTRAINT `orders_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `orders_courses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_courses`
--

LOCK TABLES `orders_courses` WRITE;
/*!40000 ALTER TABLE `orders_courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_courses` ENABLE KEYS */;
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
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'student');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
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

-- Dump completed on 2019-12-08 15:30:05
