-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema YTGdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema YTGdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `YTGdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `YTGdb` ;

-- -----------------------------------------------------
-- Table `YTGdb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `YTGdb`.`users` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `USERNAME` VARCHAR(45) NOT NULL,
  `EMAIL` VARCHAR(45) NOT NULL,
  `PASSWORD` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `USERNAME_UNIQUE` (`USERNAME` ASC),
  UNIQUE INDEX `EMAIL_UNIQUE` (`EMAIL` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `YTGdb`.`todos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `YTGdb`.`todos` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `TITLE` VARCHAR(50) NOT NULL,
  `STATUS` VARCHAR(45) NOT NULL,
  `USERNAME` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_user_todo_idx` (`USERNAME` ASC),
  CONSTRAINT `fk_user_todo`
    FOREIGN KEY (`USERNAME`)
    REFERENCES `YTGdb`.`users` (`USERNAME`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
