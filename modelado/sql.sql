-- MySQL Script generated by MySQL Workbench
-- Fri Oct  5 22:12:49 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cable_unet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cable_unet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cable_unet` DEFAULT CHARACTER SET utf8 ;
USE `cable_unet` ;

-- -----------------------------------------------------
-- Table `cable_unet`.`Rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Rol` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `rol` (`id`,`descripcion`) VALUES ('1', 'Administrador');

-- -----------------------------------------------------
-- Table `cable_unet`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla usuario',
  `email` VARCHAR(45) NOT NULL COMMENT 'correo electronico para identificacion del login',
  `password` VARCHAR(200) NOT NULL COMMENT 'contraseña para ingresar al login',
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `cedula` INT NULL,
  `rif` INT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `Rol_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Usuario_Rol1_idx` (`Rol_id` ASC),
  CONSTRAINT `fk_Usuario_Rol1`
    FOREIGN KEY (`Rol_id`)
    REFERENCES `cable_unet`.`Rol` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `apellido`, `cedula`, `rif`, `direccion`, `Rol_id`) VALUES ('1', 'admin@admin.com', '$2y$10$eXVH.V6Trtz5g.DgbmIlduYGVCdbVN2cIH1FZRxAkEYQP4SC.oRhy', 'Admin', 'Apellido', '12346598', '123456798', 'San Cristobal', '1');

-- -----------------------------------------------------
-- Table `cable_unet`.`Telefonia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Telefonia` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `precio` DECIMAL(8,2) NULL,
  `cantMin` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cable_unet`.`Internet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Internet` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `precio` DECIMAL(8,2) NULL,
  `cantMB` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cable_unet`.`PlanCanales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`PlanCanales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cable_unet`.`Servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Servicios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fechaIncio` DATE NULL,
  `total` DECIMAL(8,2) NULL,
  `fechaCorte` DATE NULL COMMENT 'Fecha en la que se cobra el plan nuevamente ',
  `Usuario_id` INT NOT NULL,
  `Telefonia_id` INT NOT NULL,
  `Internet_id` INT NOT NULL,
  `PlanCanales_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Servicios_Usuario_idx` (`Usuario_id` ASC),
  INDEX `fk_Servicios_Telefonia1_idx` (`Telefonia_id` ASC),
  INDEX `fk_Servicios_Internet1_idx` (`Internet_id` ASC),
  INDEX `fk_Servicios_PlanCanales1_idx` (`PlanCanales_id` ASC),
  CONSTRAINT `fk_Servicios_Usuario`
    FOREIGN KEY (`Usuario_id`)
    REFERENCES `cable_unet`.`Usuarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Servicios_Telefonia1`
    FOREIGN KEY (`Telefonia_id`)
    REFERENCES `cable_unet`.`Telefonia` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Servicios_Internet1`
    FOREIGN KEY (`Internet_id`)
    REFERENCES `cable_unet`.`Internet` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Servicios_PlanCanales1`
    FOREIGN KEY (`PlanCanales_id`)
    REFERENCES `cable_unet`.`PlanCanales` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cable_unet`.`Canales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Canales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` DECIMAL(8,2) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cable_unet`.`Dias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Dias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `dias` (`id`, `descripcion`) VALUES ('1', 'Lunes'), ('2', 'Martes'), ('3', 'Miercoles'), ('4', 'Jueves'), ('5', 'Viernes'), ('6', 'Sabado'), ('7', 'Domingo');

-- -----------------------------------------------------
-- Table `cable_unet`.`DiaSemanas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`DiaSemanas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Canales_id` INT NOT NULL,
  `Dias_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_DiasSemana_Canales1_idx` (`Canales_id` ASC),
  INDEX `fk_DiasSemana_Dias1_idx` (`Dias_id` ASC),
  CONSTRAINT `fk_DiasSemana_Canales1`
    FOREIGN KEY (`Canales_id`)
    REFERENCES `cable_unet`.`Canales` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_DiasSemana_Dias1`
    FOREIGN KEY (`Dias_id`)
    REFERENCES `cable_unet`.`Dias` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cable_unet`.`Horas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`Horas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `horas` (`id`, `descripcion`) VALUES ('1', '01-02 AM'), ('2', '02-03 AM'), ('3', '03-04 AM'), ('4', '04-05 AM'), ('5', '05-06 AM'), ('6', '06-07 AM'), ('7', '07-08 AM'), ('8', '08-09 AM'), ('9', '09-10 AM'), ('10', '10-11 AM'), ('11', '11-12 AM'), ('12', '12-13 PM'), ('13', '13-14 PM'), ('14', '14-15 PM'), ('15', '15-16 PM'), ('16', '16-17 PM'), ('17', '17-18 PM'), ('18', '18-19 PM'), ('19', '19-20 PM'), ('20', '20-21 PM'), ('21', '21-22 PM'), ('22', '22-23 PM'), ('23', '23-24 PM'), ('24', '24-01 PM');

-- -----------------------------------------------------
-- Table `cable_unet`.`HoraDias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`HoraDias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Horas_id` INT NOT NULL,
  `Canales_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_HoraDias_Horas1_idx` (`Horas_id` ASC),
  INDEX `fk_HoraDias_Canales1_idx` (`Canales_id` ASC),
  CONSTRAINT `fk_HoraDias_Horas1`
    FOREIGN KEY (`Horas_id`)
    REFERENCES `cable_unet`.`Horas` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_HoraDias_Canales1`
    FOREIGN KEY (`Canales_id`)
    REFERENCES `cable_unet`.`Canales` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cable_unet`.`ListaCanales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cable_unet`.`ListaCanales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `PlanCanales_id` INT NOT NULL,
  `Canales_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ListaCanales_PlanCanales1_idx` (`PlanCanales_id` ASC),
  INDEX `fk_ListaCanales_Canales1_idx` (`Canales_id` ASC),
  CONSTRAINT `fk_ListaCanales_PlanCanales1`
    FOREIGN KEY (`PlanCanales_id`)
    REFERENCES `cable_unet`.`PlanCanales` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ListaCanales_Canales1`
    FOREIGN KEY (`Canales_id`)
    REFERENCES `cable_unet`.`Canales` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
