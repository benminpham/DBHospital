-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projectdb
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patients` (
  `patient_id` int NOT NULL,
  `currentlyAdmitted` text,
  `dob` text,
  `fName` text,
  `lName` text,
  `sex` text,
  `lastDept` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (221000,'False','1950-05-10','Trevino','Newman','male','Intensive Care'),(221001,'True','1995-01-22','Hallie','Sloan','female','Intensive Care'),(221002,'False','1957-05-18','Marci','Russell','female','Inpatient'),(221003,'False','2011-08-13','French','Fowler','male','Intensive Care'),(221004,'False','1966-08-22','Nicole','York','female','General Surgery'),(221005,'False','1964-08-05','Wynn','Poole','male','General Surgery'),(221006,'True','1989-08-19','Cain','Mcmahon','male','General Surgery'),(221007,'True','1976-09-06','Tasha','Lamb','female','Inpatient'),(221008,'True','1977-11-19','Hunt','Ward','male','Inpatient'),(221009,'False','1975-03-20','Sheena','Munoz','female','General Surgery'),(221010,'True','2019-03-02','Jeanine','Herrera','female','General Surgery'),(221011,'True','2018-04-02','Mildred','Holder','female','Intensive Care'),(221012,'False','1974-07-22','Barlow','Rowland','male','Emergency'),(221013,'True','1961-05-29','Kristina','West','female','General Surgery'),(221014,'True','1981-04-16','Benson','Mccray','male','Emergency'),(221015,'False','2016-10-14','Ashley','Mercado','male','Inpatient'),(221016,'True','1963-09-11','Wong','Cervantes','male','General Surgery'),(221017,'False','1971-07-06','Riddle','Hill','male','General Surgery'),(221018,'False','1965-03-03','Hicks','Fitzgerald','male','Emergency'),(221019,'True','1983-03-23','Ramos','Simmons','male','General Surgery'),(221020,'False','1998-03-13','Holmes','Swanson','male','Inpatient'),(221021,'False','1974-06-23','Russo','Delaney','male','Inpatient'),(221022,'False','1953-07-09','Annette','Blackburn','female','General Surgery'),(221023,'False','1955-09-01','Faulkner','Rose','male','Emergency'),(221024,'False','1958-06-28','Irma','Tate','female','General Surgery'),(221025,'False','1989-03-18','Hardin','Fry','male','Intensive Care'),(221026,'False','2001-11-25','Barrera','Mckenzie','male','Emergency'),(221027,'True','1969-07-03','Ana','Berg','female','Intensive Care'),(221028,'False','1976-11-28','Mayer','Wynn','male','Inpatient'),(221029,'False','1966-07-13','Jolene','Larsen','female','Emergency'),(221030,'True','1990-12-27','Kellie','Hawkins','female','Emergency'),(221031,'True','1958-06-06','Sadie','Payne','female','General Surgery'),(221032,'True','1987-02-13','Concepcion','Anthony','female','Inpatient'),(221033,'True','1962-03-24','Bennett','Page','male','Inpatient'),(221034,'False','2015-09-06','Dorothea','Dale','female','Intensive Care'),(221035,'False','1958-07-04','Jensen','Watts','male','Emergency'),(221036,'True','1972-05-29','Simon','Reed','male','Inpatient'),(221037,'False','1967-06-26','Teri','Brewer','female','General Surgery'),(221038,'True','2003-01-31','Diaz','Duke','male','Emergency'),(221039,'True','1987-08-14','Antonia','Leblanc','female','Intensive Care'),(221040,'True','1967-05-28','Pittman','Montoya','male','Emergency'),(221041,'False','1961-07-12','Holden','Brady','male','General Surgery'),(221042,'True','1989-11-26','Drake','William','male','General Surgery'),(221043,'False','1951-05-01','Misty','Klein','female','Inpatient'),(221044,'True','1970-10-30','Roach','Houston','male','Inpatient'),(221045,'True','1956-11-11','Meghan','Rivers','female','General Surgery'),(221046,'True','1984-01-17','Mathews','Dunn','male','Inpatient'),(221047,'True','1985-05-23','Kathleen','Dotson','female','Inpatient'),(221048,'False','2012-11-15','Callie','Santana','female','General Surgery'),(221049,'True','2015-12-26','Howe','Greer','male','Intensive Care'),(221050,'False','1951-11-18','Nellie','Lambert','female','Intensive Care'),(221051,'False','2021-02-06','Lela','Bond','female','Intensive Care'),(221052,'True','1964-07-22','Sasha','House','female','Emergency'),(221053,'False','2006-01-22','Olson','Walton','male','Intensive Care'),(221054,'True','2011-10-07','Barron','Craft','male','General Surgery'),(221055,'False','1999-06-25','Rasmussen','Macdonald','male','Emergency'),(221056,'True','1999-01-27','Shelia','Chapman','female','Intensive Care'),(221057,'False','1960-02-22','Perez','Carter','male','General Surgery'),(221058,'True','1980-06-24','Simpson','Baird','male','Intensive Care'),(221059,'True','2006-11-13','Conley','Russo','male','Emergency'),(221060,'False','1989-01-29','Muriel','Landry','female','Inpatient'),(221061,'True','1990-01-04','Nettie','Black','female','General Surgery'),(221062,'True','1954-05-11','Gay','Nieves','female','Emergency'),(221063,'False','1995-02-04','Mueller','Hanson','male','Intensive Care'),(221064,'False','2014-05-25','Justine','Mooney','female','Emergency'),(221065,'True','1991-02-20','Vaughan','Peters','male','Intensive Care'),(221066,'True','1970-01-09','Whitley','Dillon','male','Emergency'),(221067,'False','2002-10-20','Crane','Cash','male','Inpatient'),(221068,'False','1963-07-23','Merle','Vargas','female','Emergency'),(221069,'False','1953-03-14','Julie','Burris','female','Inpatient'),(221070,'True','2006-11-11','Giles','Osborn','male','Inpatient'),(221071,'False','1969-12-07','Georgina','Cline','female','Intensive Care'),(221072,'True','2004-07-28','Kristie','Griffin','female','Intensive Care'),(221073,'True','1957-02-19','Powell','Chavez','male','Inpatient'),(221074,'False','2011-01-18','Stuart','Fields','male','Intensive Care'),(221075,'False','1980-07-29','Benjamin','Reyes','male','General Surgery'),(221076,'False','1953-12-31','Neva','Bender','female','General Surgery'),(221077,'True','1952-12-05','Mavis','Farrell','female','Inpatient'),(221078,'False','1972-11-29','Lee','Blake','male','General Surgery'),(221079,'True','1956-01-03','Rosella','Farmer','female','Emergency'),(221080,'True','1995-04-16','Rosie','Bolton','female','General Surgery'),(221081,'True','1959-04-27','Small','Wooten','male','Emergency'),(221082,'False','2022-04-12','Melinda','Sandoval','female','Intensive Care'),(221083,'False','1989-08-20','Murray','Clayton','male','Emergency'),(221084,'True','1971-11-08','Bradford','Pugh','male','General Surgery'),(221085,'True','1958-08-06','Vickie','Cruz','female','Intensive Care'),(221086,'False','2006-01-23','Cobb','Wong','male','Emergency'),(221087,'True','1951-07-17','Edith','Espinoza','female','Emergency'),(221088,'False','1975-11-12','Carver','Keith','male','Intensive Care'),(221089,'False','1998-06-14','Foster','Valdez','male','Emergency'),(221090,'True','1991-10-02','Emily','Quinn','female','Emergency'),(221091,'False','1968-05-30','Ortega','Bailey','male','General Surgery'),(221092,'False','1952-08-28','Holman','Prince','male','Emergency'),(221093,'True','1980-04-13','Frances','Walker','female','Intensive Care'),(221094,'True','2014-05-04','Barr','Nicholson','male','Inpatient'),(221095,'False','2020-07-24','Debora','Mccoy','female','Emergency'),(221096,'False','1971-09-27','Garrett','Beach','male','Inpatient'),(221097,'False','1967-06-06','Ronda','Mullins','female','Inpatient'),(221098,'True','1962-06-26','Nona','Guy','female','Emergency'),(221099,'False','1991-04-09','Toni','Maynard','female','Inpatient'),(221100,'True','2022-04-18','Example','Example','male','Inpatient');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-22 21:31:51
