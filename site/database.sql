-- MySQL Workbench Synchronization
-- Generated: 2024-04-04 21:02
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: jhon8

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `garagem33` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `garagem33`.`cliente` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `dd` VARCHAR(4) NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `endereço` VARCHAR(150) NULL DEFAULT NULL,
  `cidade` VARCHAR(50) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `garagem33`.`carro` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `ano` INT(4) NOT NULL,
  `placa` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `garagem33`.`servico` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `qtde` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `valorunit` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `garagem33`.`carro_has_cliente` (
  `carro_id` INT(11) NOT NULL,
  `cliente_id` INT(11) NOT NULL,
  PRIMARY KEY (`carro_id`, `cliente_id`),
  INDEX `fk_carro_has_cliente_cliente1_idx` (`cliente_id` ASC) VISIBLE,
  INDEX `fk_carro_has_cliente_carro_idx` (`carro_id` ASC) VISIBLE,
  CONSTRAINT `fk_carro_has_cliente_carro`
    FOREIGN KEY (`carro_id`)
    REFERENCES `garagem33`.`carro` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carro_has_cliente_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `garagem33`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
