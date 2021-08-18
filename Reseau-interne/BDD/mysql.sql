CREATE DATABASE `woodytoys`;

CREATE TABLE `articles` (
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` int DEFAULT NULL
);


INSERT INTO `woodytoys`.`articles`
(`nom`,
`prix`)
VALUES
("table", 40),("chaise", 20),("cheval a bascule",150),("table de chevet",25),("armoire",45);

CREATE USER admin IDENTIFIED WITH mysql_native_password BY 'password';
GRANT ALL PRIVILEGES ON woodytoys.* TO 'admin';