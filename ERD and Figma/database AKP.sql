-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: localhost    Database: anyarthar
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `balance`
--

DROP TABLE IF EXISTS `balance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `balance` (
  `bal_id` int NOT NULL AUTO_INCREMENT,
  `pro_id` int DEFAULT NULL,
  `bal_date` timestamp NULL DEFAULT NULL,
  `inc_qty` int DEFAULT NULL,
  `sale_qty` int DEFAULT NULL,
  `balance` int DEFAULT NULL,
  PRIMARY KEY (`bal_id`),
  KEY `pro_id` (`pro_id`),
  CONSTRAINT `balance_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `balance`
--

LOCK TABLES `balance` WRITE;
/*!40000 ALTER TABLE `balance` DISABLE KEYS */;
INSERT INTO `balance` VALUES (2,1,'2026-03-03 14:15:54',10,0,20),(3,2,'2026-03-03 14:23:29',10,0,10),(4,4,'2026-03-03 14:29:43',10,0,10),(5,4,'2026-03-03 14:36:24',10,0,20),(6,2,'2026-03-03 14:36:33',10,0,20),(8,1,'2026-03-03 16:07:30',20,0,40),(9,1,'2026-03-03 16:07:46',30,0,70),(11,1,'2026-03-06 05:44:45',0,2,68),(12,4,'2026-03-06 05:44:45',0,3,17),(13,3,'2026-03-06 05:47:43',0,3,-3),(14,3,'2026-03-06 06:00:27',0,3,-6),(15,1,'2026-03-06 06:00:27',0,1,67),(16,3,'2026-03-06 06:05:30',0,3,-9),(17,1,'2026-03-06 06:05:30',0,1,66),(18,3,'2026-03-06 06:05:54',0,3,-12),(19,1,'2026-03-06 06:05:54',0,1,65),(20,3,'2026-03-06 06:05:55',0,3,-15),(21,1,'2026-03-06 06:05:55',0,1,64),(22,3,'2026-03-06 06:05:56',0,3,-18),(23,1,'2026-03-06 06:05:56',0,1,63),(24,3,'2026-03-06 06:12:12',0,3,-21),(25,1,'2026-03-06 06:12:12',0,1,62),(26,1,'2026-03-06 06:12:59',0,1,61),(27,2,'2026-03-06 06:13:54',0,3,17),(28,1,'2026-03-06 06:14:33',0,1,60),(29,1,'2026-03-06 08:57:03',0,2,58),(30,3,'2026-03-06 08:57:03',0,2,-23),(31,1,'2026-03-06 08:59:20',70,0,80),(32,1,'2026-03-06 08:59:33',70,0,80),(33,1,'2026-03-06 08:59:48',20,0,30),(34,1,'2026-03-06 09:00:05',20,0,30),(35,8,'2026-03-06 10:15:30',30,0,30),(36,1,'2026-03-06 15:39:24',0,1,29),(37,4,'2026-03-06 15:39:24',0,1,16);
/*!40000 ALTER TABLE `balance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'မြေပဲဖြင့် ပြုလုပ်ထားသော'),(3,'နှမ်းဖြင့်ပြုလုပ်ထားသော'),(4,'အခြားသောအရာများ');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `ct_id` int NOT NULL AUTO_INCREMENT,
  `ct_name` varchar(30) DEFAULT NULL,
  `ct_phone` int DEFAULT NULL,
  `ct_email` varchar(30) DEFAULT NULL,
  `ct_subject` varchar(50) DEFAULT NULL,
  `ct_message` varchar(200) DEFAULT NULL,
  `ct_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'khant',9999,'khant@123gmail.com','peanut','i like it','2026-03-01 21:03:13'),(2,'phyo phyo',92222,'phyo999@gmail.com','seasam',' i love it','2026-03-01 21:04:16');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `ord_id` int NOT NULL AUTO_INCREMENT,
  `ord_date` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `item_total` int DEFAULT NULL,
  `final_total` int DEFAULT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'2026-03-06 03:11:21',5,30000,31600),(2,'2026-03-06 05:02:11',5,79000,81580),(13,'2026-03-06 06:05:55',5,47000,48940),(14,'2026-03-06 06:05:56',5,47000,48940),(15,'2026-03-06 06:12:12',5,47000,48940),(19,'2026-03-06 08:57:03',8,54000,56080),(20,'2026-03-06 15:39:24',6,37000,38740),(21,'2026-03-07 03:44:34',5,5000,6100);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_product`
--

DROP TABLE IF EXISTS `orders_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders_product` (
  `op_id` int NOT NULL AUTO_INCREMENT,
  `ord_id` int DEFAULT NULL,
  `pro_id` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `amount` int DEFAULT NULL,
  PRIMARY KEY (`op_id`),
  KEY `ord_id` (`ord_id`),
  KEY `pro_id` (`pro_id`),
  CONSTRAINT `orders_product_ibfk_1` FOREIGN KEY (`ord_id`) REFERENCES `orders` (`ord_id`),
  CONSTRAINT `orders_product_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_product`
--

LOCK TABLES `orders_product` WRITE;
/*!40000 ALTER TABLE `orders_product` DISABLE KEYS */;
INSERT INTO `orders_product` VALUES (18,13,3,3,30000),(19,13,1,1,17000),(20,14,3,3,30000),(21,14,1,1,17000),(22,15,3,3,30000),(23,15,1,1,17000),(27,19,1,2,34000),(28,19,3,2,20000),(29,20,1,1,17000),(30,20,4,1,20000);
/*!40000 ALTER TABLE `orders_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_img` varchar(30) DEFAULT NULL,
  `pro_name` varchar(50) DEFAULT NULL,
  `pro_des` varchar(200) DEFAULT NULL,
  `pro_weight` int DEFAULT NULL,
  `pro_price` int DEFAULT NULL,
  `cat_id` int DEFAULT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `cat_id` (`cat_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'pauk pauk.jpg','ပေါက်ပေါက်ဆုတ်','ပေါ်က်ပေါက်နှင့် ထန်းလျက်သုံးပြုလုပ်ထားသော ရိုးရာအစားစာ',200,17000,4),(2,'htan hlat khae.jpg','ထန်းလျက်','သဘာဝထန်းလျက်',200,15000,4),(3,'potato khyote.jpg','အာလူးခြောက်','ဆန်ဖြင့်ပြုလုပ်ထားသော ',20,10000,4),(4,'sesame1.jpg','နှမ်းယို','သဘာဝရရှိသောထန်းလျက် နှင့် နှမ်းတို့ ရောစပ်ပြုလုပ်ထားပါသည်',150,20000,3),(6,'kularpe1.jpg','ပဲကပ်ကြော်','ကုလားပဲစစ်စစ်နှင့် ပြုလုပ်ထားပါသည် ',50,10000,4),(8,'peanut1.jpg','မြေပဲယို','မြေပဲနှင်ံ ထန်းလျက်တို့ရောစပ်ပြုလုပ်ထားသော အစာပြေအစားစာလေး',500,20000,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review` (
  `rev_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `rev_des` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rev_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (4,5,'မြေပဲထိုးလုံးအရသာက တကယ့်ရိုးရာအရသာစစ်စစ်ပါ။ ချိုချိုလေးနဲ့ မာမာကြပ်ကြပ်ဖြစ်ပြီး အရမ်းစားကောင်းပါတယ်။ သန့်ရှင်းမှုလည်းကောင်းပြီး လတ်ဆတ်မှုကို ခံစားရပါတယ်။ နောက်ထပ်ထပ်ဝယ်စားမယ့် ဆိုင်တစ်ဆိုင်ပါ။');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_pass` varchar(15) DEFAULT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `user_address` varchar(25) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5,'k phyo','kphyo123@gmail.com','11118888','09979848002','Yangon','user'),(6,'akphyo','akphyo123@gmail.com','11112222','09784387479','Mandalay','user'),(8,'kklay','kklay1232@gmail.com','kklay123','09784387479','Yangon','user'),(9,'Aung Khant Phyo','aungkhantphyo2234@gmail.com','khant@2026','09979848002','Yangon','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-03-07 11:04:15
