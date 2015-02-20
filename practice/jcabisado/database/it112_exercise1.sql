SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `it112_exercise1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `it112_exercise1`;

-- -----------------------------------------------------
-- Table `it112_exercise1`.`region`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `it112_exercise1`.`region` ;

CREATE  TABLE IF NOT EXISTS `it112_exercise1`.`region` (
  `id` INT NOT NULL ,
  `region_code` VARCHAR(32) NULL ,
  `region_description` VARCHAR(32) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `it112_exercise1`.`province`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `it112_exercise1`.`province` ;

CREATE  TABLE IF NOT EXISTS `it112_exercise1`.`province` (
  `id` INT NOT NULL ,
  `province_code` VARCHAR(32) NULL ,
  `province_description` VARCHAR(32) NULL ,
  `region_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `region_id`) ,
  INDEX `fk_province_region` (`region_id` ASC) ,
  CONSTRAINT `fk_province_region`
    FOREIGN KEY (`region_id` )
    REFERENCES `it112_exercise1`.`region` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `it112_exercise1`.`city`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `it112_exercise1`.`city` ;

CREATE  TABLE IF NOT EXISTS `it112_exercise1`.`city` (
  `id` INT NOT NULL ,
  `city_code` VARCHAR(32) NULL ,
  `city_description` VARCHAR(32) NULL ,
  `province_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `province_id`) ,
  INDEX `fk_city_province1` (`province_id` ASC) ,
  CONSTRAINT `fk_city_province1`
    FOREIGN KEY (`province_id` )
    REFERENCES `it112_exercise1`.`province` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
