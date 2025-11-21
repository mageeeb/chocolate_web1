-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema chocolate
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `chocolate` ;

-- -----------------------------------------------------
-- Schema chocolate
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `chocolate` DEFAULT CHARACTER SET utf8mb4 ;
USE `chocolate` ;

-- -----------------------------------------------------
-- Table `chocolate`.`images`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chocolate`.`images` ;

CREATE TABLE IF NOT EXISTS `chocolate`.`images` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `description` VARCHAR(500) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `name_UNIQUE` ON `chocolate`.`images` (`name` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `chocolate`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chocolate`.`users` ;

CREATE TABLE IF NOT EXISTS `chocolate`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `login` VARCHAR(80) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `registered_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)',
  `role` TINYINT UNSIGNED NULL DEFAULT 0,
  `email_token` VARCHAR(255) NULL DEFAULT NULL,
  `pwd_token` VARCHAR(255) NULL DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `is_verified` TINYINT(1) UNSIGNED NULL DEFAULT 0,
  `images_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_users_images2`
    FOREIGN KEY (`images_id`)
    REFERENCES `chocolate`.`images` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE UNIQUE INDEX `UNIQ_1483A5E9E7927C74` ON `chocolate`.`users` (`email` ASC) VISIBLE;

CREATE UNIQUE INDEX `login_UNIQUE` ON `chocolate`.`users` (`login` ASC) VISIBLE;

CREATE INDEX `fk_users_images2_idx` ON `chocolate`.`users` (`images_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `chocolate`.`recipe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chocolate`.`recipe` ;

CREATE TABLE IF NOT EXISTS `chocolate`.`recipe` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `slug` VARCHAR(130) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `prep_time` VARCHAR(150) NOT NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)',
  `user_id` INT UNSIGNED NOT NULL,
  `images_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_DA88B137A76ED395`
    FOREIGN KEY (`user_id`)
    REFERENCES `chocolate`.`users` (`id`),
  CONSTRAINT `fk_recipe_images1`
    FOREIGN KEY (`images_id`)
    REFERENCES `chocolate`.`images` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE INDEX `IDX_DA88B137A76ED395` ON `chocolate`.`recipe` (`user_id` ASC) VISIBLE;

CREATE UNIQUE INDEX `slug_UNIQUE` ON `chocolate`.`recipe` (`slug` ASC) VISIBLE;

CREATE INDEX `fk_recipe_images1_idx` ON `chocolate`.`recipe` (`images_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `chocolate`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chocolate`.`comments` ;

CREATE TABLE IF NOT EXISTS `chocolate`.`comments` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(600) NOT NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)',
  `is_accepted` TINYINT UNSIGNED NULL DEFAULT 0,
  `recipe_id` INT UNSIGNED NOT NULL,
  `user_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_5F9E962A59D8A214`
    FOREIGN KEY (`recipe_id`)
    REFERENCES `chocolate`.`recipe` (`id`),
  CONSTRAINT `FK_5F9E962A9D86650F`
    FOREIGN KEY (`user_id`)
    REFERENCES `chocolate`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE INDEX `IDX_5F9E962A9D86650F` ON `chocolate`.`comments` (`user_id` ASC) VISIBLE;

CREATE INDEX `IDX_5F9E962A59D8A214` ON `chocolate`.`comments` (`recipe_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `chocolate`.`recipe_ingredients`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chocolate`.`recipe_ingredients` ;

CREATE TABLE IF NOT EXISTS `chocolate`.`recipe_ingredients` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` VARCHAR(104) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE UNIQUE INDEX `slug_UNIQUE` ON `chocolate`.`recipe_ingredients` (`slug` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `chocolate`.`steps`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chocolate`.`steps` ;

CREATE TABLE IF NOT EXISTS `chocolate`.`steps` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `position` INT UNSIGNED NOT NULL,
  `instruction` TEXT NOT NULL,
  `recipe_id` INT UNSIGNED NOT NULL,
  `images_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_34220A7259D8A214`
    FOREIGN KEY (`recipe_id`)
    REFERENCES `chocolate`.`recipe` (`id`),
  CONSTRAINT `fk_steps_images1`
    FOREIGN KEY (`images_id`)
    REFERENCES `chocolate`.`images` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE INDEX `IDX_34220A7259D8A214` ON `chocolate`.`steps` (`recipe_id` ASC) VISIBLE;

CREATE INDEX `fk_steps_images1_idx` ON `chocolate`.`steps` (`images_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `chocolate`.`recipe_ingredients_has_recipe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chocolate`.`recipe_ingredients_has_recipe` ;

CREATE TABLE IF NOT EXISTS `chocolate`.`recipe_ingredients_has_recipe` (
  `recipe_ingredients_id` INT UNSIGNED NOT NULL,
  `recipe_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`recipe_ingredients_id`, `recipe_id`),
  CONSTRAINT `fk_recipe_ingredients_has_recipe_recipe_ingredients1`
    FOREIGN KEY (`recipe_ingredients_id`)
    REFERENCES `chocolate`.`recipe_ingredients` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_recipe_ingredients_has_recipe_recipe1`
    FOREIGN KEY (`recipe_id`)
    REFERENCES `chocolate`.`recipe` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

CREATE INDEX `fk_recipe_ingredients_has_recipe_recipe1_idx` ON `chocolate`.`recipe_ingredients_has_recipe` (`recipe_id` ASC) VISIBLE;

CREATE INDEX `fk_recipe_ingredients_has_recipe_recipe_ingredients1_idx` ON `chocolate`.`recipe_ingredients_has_recipe` (`recipe_ingredients_id` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
