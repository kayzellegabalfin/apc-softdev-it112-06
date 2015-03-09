-- MySQL Script generated by MySQL Workbench
-- 03/09/15 15:38:50
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
-- Table `rba-db`.`migration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`migration` (
  `version` VARCHAR(180) NOT NULL,
  `apply_time` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`service_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`service_list` (
  `slist_id` INT(11) NOT NULL AUTO_INCREMENT,
  `slist_name` TEXT NOT NULL,
  `slist_desc` TEXT NULL DEFAULT NULL,
  `slist_type` VARCHAR(45) NOT NULL,
  `slist_dateadded` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`slist_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`price_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`price_list` (
  `plist_id` INT(11) NOT NULL AUTO_INCREMENT,
  `plist_name` VARCHAR(50) NOT NULL,
  `plist_price` DOUBLE NOT NULL,
  `plist_dateadded` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slist_id` INT(11) NOT NULL,
  INDEX `price_list_fk_1_idx` (`slist_id` ASC),
  PRIMARY KEY (`plist_id`),
  CONSTRAINT `price_list_fk_1`
    FOREIGN KEY (`slist_id`)
    REFERENCES `rba-db`.`service_list` (`slist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`requirements_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`requirements_list` (
  `rlist_id` INT(11) NOT NULL AUTO_INCREMENT,
  `rlist_name` VARCHAR(255) NOT NULL,
  `rlist_desc` TEXT NULL,
  `rlist_dateadded` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slist_id` INT NOT NULL,
  PRIMARY KEY (`rlist_id`),
  INDEX `requirements_list_fk_1_idx` (`slist_id` ASC),
  CONSTRAINT `requirements_list_fk_1`
    FOREIGN KEY (`slist_id`)
    REFERENCES `rba-db`.`service_list` (`slist_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`requirements_per_service`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`requirements_per_service` (
  `rps_id` INT(11) NOT NULL AUTO_INCREMENT,
  `rps_name` TEXT NOT NULL,
  `slist_id` INT(11) NOT NULL,
  `rlist_id` INT(11) NOT NULL,
  PRIMARY KEY (`rps_id`),
  INDEX `slist_id` (`slist_id` ASC),
  INDEX `rlist_id` (`rlist_id` ASC),
  CONSTRAINT `requirements_fk_1`
    FOREIGN KEY (`slist_id`)
    REFERENCES `rba-db`.`service_list` (`slist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `requirements_fk_2`
    FOREIGN KEY (`rlist_id`)
    REFERENCES `rba-db`.`requirements_list` (`rlist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `rba-db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `auth_key` VARCHAR(32) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `password_hash` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `password_reset_token` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `status` SMALLINT(6) NOT NULL DEFAULT '10',
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  `user_lastname` VARCHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `user_firstname` VARCHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `user_midname` VARCHAR(10) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_housenum` VARCHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_street` VARCHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_city` VARCHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_country` VARCHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `user_postalcode` INT(10) NOT NULL,
  `user_gender` VARCHAR(6) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_companyname` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_companyadd` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_companycontact` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `user_birthdate` DATE NULL DEFAULT NULL,
  `user_age` INT(2) NULL DEFAULT NULL,
  `user_type` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL DEFAULT 'Client',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `rba-db`.`requirements_per_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rba-db`.`requirements_per_user` (
  `rpu_id` INT(11) NOT NULL AUTO_INCREMENT,
  `rpu_status` VARCHAR(50) NOT NULL DEFAULT 'no file submitted',
  `rpu_datefilesubmitted` TIMESTAMP NULL DEFAULT NULL,
  `rpu_fileuploaded` VARCHAR(255) NULL DEFAULT NULL,
  `rlist_id` INT(11) NOT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`rpu_id`),
  INDEX `fk_requirements_per_user_user1_idx` (`user_id` ASC),
  INDEX `requirements_per_user_fk_2_idx` (`rlist_id` ASC),
  CONSTRAINT `requirements_per_user_fk_2`
    FOREIGN KEY (`rlist_id`)
    REFERENCES `rba-db`.`requirements_list` (`rlist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `requirements_per_user_fk_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `rba-db`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
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
  INDEX `slist_id` (`slist_id` ASC),
  INDEX `fk_services_user1_idx` (`user_id` ASC),
  CONSTRAINT `services_fk_2`
    FOREIGN KEY (`slist_id`)
    REFERENCES `rba-db`.`service_list` (`slist_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `services_fk_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `rba-db`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
