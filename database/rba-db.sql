-- MySQL Script generated by MySQL Workbench
-- 03/04/15 12:36:10
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema rba-db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema rba-db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `rba-db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `rba-db` ;

-- -----------------------------------------------------
-- Table `rba-db`.`service_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`service_list` (
  `slist_id` INT(11) NOT NULL,
  `slist_name` VARCHAR(50) NOT NULL,
  `slist_desc` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`slist_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`price_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`price_list` (
  `plist_id` INT(11) NOT NULL,
  `plist_name` VARCHAR(50) NOT NULL,
  `plist_price` DOUBLE NOT NULL,
  `plist_currency` VARCHAR(10) NOT NULL,
  `slit_id` INT(11) NOT NULL,
  PRIMARY KEY (`plist_id`),
  CONSTRAINT `price_list_fk_1`
    FOREIGN KEY (`plist_id`)
    REFERENCES `rba-db`.`service_list` (`slist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`user` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_email` VARCHAR(50) NOT NULL,
  `user_password` VARCHAR(25) NOT NULL,
  `user_lastname` VARCHAR(25) NOT NULL,
  `user_firstname` VARCHAR(25) NOT NULL,
  `user_midname` VARCHAR(10) NULL,
  `user_housenum` VARCHAR(25) NULL,
  `user_street` VARCHAR(25) NULL,
  `user_city` VARCHAR(25) NULL,
  `user_country` VARCHAR(25) NOT NULL,
  `user_postalcode` INT(10) NOT NULL,
  `user_gender` VARCHAR(6) NULL,
  `user_companyname` VARCHAR(45) NULL,
  `user_companyadd` VARCHAR(45) NULL,
  `user_companycontact` VARCHAR(45) NULL,
  `user_birthdate` DATE NULL,
  `user_age` INT(2) NULL,
  `user_type` VARCHAR(15) NOT NULL DEFAULT 'Client',
  `user_dateregistered` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`requirements_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`requirements_list` (
  `rlist_id` INT(11) NOT NULL,
  `rlist_name` VARCHAR(50) NOT NULL,
  `rlist_desc` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`rlist_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`requirements`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`requirements` (
  `req_id` VARCHAR(8) NOT NULL,
  `user_id` INT(11) NOT NULL,
  `slist_id` INT(11) NOT NULL,
  `rlist_id` INT(11) NOT NULL,
  `req_status` VARCHAR(25) NOT NULL DEFAULT 'no file submitted',
  `req_fileuploaded` VARCHAR(255) NULL DEFAULT NULL,
  `req_datefileuploaded` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`req_id`),
  INDEX `user_id` (`user_id` ASC),
  INDEX `slist_id` (`slist_id` ASC),
  INDEX `rlist_id` (`rlist_id` ASC),
  CONSTRAINT `requirements_fk_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `rba-db`.`user` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `requirements_fk_2`
    FOREIGN KEY (`slist_id`)
    REFERENCES `rba-db`.`service_list` (`slist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `requirements_fk_3`
    FOREIGN KEY (`rlist_id`)
    REFERENCES `rba-db`.`requirements_list` (`rlist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`services`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`services` (
  `service_id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `slist_id` INT(11) NOT NULL,
  `service_dateapplied` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_status` VARCHAR(25) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`service_id`),
  INDEX `user_id` (`user_id` ASC),
  INDEX `slist_id` (`slist_id` ASC),
  CONSTRAINT `services_fk_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `rba-db`.`user` (`user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `services_fk_2`
    FOREIGN KEY (`slist_id`)
    REFERENCES `rba-db`.`service_list` (`slist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
