# Ce que l'on va demander:
* pseudo
* email
* mdp
* la confirmation du mdp

*etape 1 creation*
CREATE DATABASE `liste_member` COLLATE 'utf8_bin';

*etape 2 table Users*
- id de l'utilisateur
- son speudo
- son email
- son mdp
- la date de creation de son compte
- et une cle pour la sauvegarde de la session



-- Adminer 4.8.0 MySQL 5.5.5-10.5.11-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `creation_date` datetime NOT NULL,
  `secret` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- 2021-11-20 04:24:39