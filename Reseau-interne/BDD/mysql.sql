CREATE DATABASE `woodytoys` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

CREATE TABLE `articles` (
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` int DEFAULT NULL
);


INSERT INTO `woodytoys`.`articles`
(`nom`,
`prix`)
VALUES
("table", 40),("chaise", 20),("cheval a bascule",150),("table de chevet",25),("armoire",45);