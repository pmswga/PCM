DROP DATABASE IF EXISTS `pcm`;
CREATE DATABASE IF NOT EXISTS `pcm` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `pcm`;

CREATE TABLE IF NOT EXISTS `users` (
  id_user INT(11) AUTO_INCREMENT PRIMARY KEY,
  sn CHAR(255) NOT NULL,
  fn CHAR(255) NOT NULL,
  email   CHAR(255) NOT NULL UNIQUE,
  password CHAR(32) NOT NULL,
  account_type INT(11) NOT NULL,
  expiration_date DATETIME NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `account_types` (
  id_account_type INT(11) AUTO_INCREMENT PRIMARY KEY,
  description CHAR(255) NOT NULL UNIQUE
) ENGINE = InnoDB CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `user_images` (
  id_user_image INT(11) AUTO_INCREMENT PRIMARY KEY,
  id_user INT(11) NOT NULL,
  caption CHAR(255) NOT NULL,
  descp TEXT NOT NULL,
  image TEXT NOT NULL,
  INDEX(id_user)
) ENGINE = InnoDB CHARACTER SET = utf8;

INSERT INTO `account_types` (`description`) VALUES ('Free');
INSERT INTO `account_types` (`description`) VALUES ('Standart');